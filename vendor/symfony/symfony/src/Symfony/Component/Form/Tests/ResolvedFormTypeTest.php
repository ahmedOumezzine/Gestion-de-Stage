<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\ResolvedFormType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedFormTypeTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dataMapper;
    private $parentType;
    private $type;
    private $extension1;
    private $extension2;
    private $parentResolvedType;
    private $resolvedType;

    protected function setUp()
    {
        $this->dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')->getMock();
        $this->factory = $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
        $this->dataMapper = $this->getMockBuilder('Symfony\Component\Form\DataMapperInterface')->getMock();
        $this->parentType = $this->getMockFormType();
        $this->type = $this->getMockFormType();
        $this->extension1 = $this->getMockFormTypeExtension();
        $this->extension2 = $this->getMockFormTypeExtension();
        $this->parentResolvedType = new ResolvedFormType($this->parentType);
        $this->resolvedType = new ResolvedFormType($this->type, array($this->extension1, $this->extension2), $this->parentResolvedType);
    }

    public function testGetOptionsResolver()
    {
        $test = $this;
        $i = 0;

        $assertIndexAndAddOption = function ($index, $option, $default) use (&$i, $test) {
            return function (OptionsResolver $resolver) use (&$i, $test, $index, $option, $default) {
                /* @var TestCase $test */
                $test->assertEquals($index, $i, 'Executed at index '.$index);

                ++$i;

                $resolver->setDefaults(array($option => $default));
            };
        };

        // First the default options are generated for the super type
        $this->parentType->expects($this->once())
            ->method('configureOptions')
            ->will($this->returnCallback($assertIndexAndAddOption(0, 'a', 'a_default')));

        // The form type itself
        $this->type->expects($this->once())
            ->method('configureOptions')
            ->will($this->returnCallback($assertIndexAndAddOption(1, 'b', 'b_default')));

        // And its extensions
        $this->extension1->expects($this->once())
            ->method('configureOptions')
            ->will($this->returnCallback($assertIndexAndAddOption(2, 'c', 'c_default')));

        $this->extension2->expects($this->once())
            ->method('configureOptions')
            ->will($this->returnCallback($assertIndexAndAddOption(3, 'd', 'd_default')));

        $givenOptions = array('a' => 'a_custom', 'c' => 'c_custom');
        $resolvedOptions = array('a' => 'a_custom', 'b' => 'b_default', 'c' => 'c_custom', 'd' => 'd_default');

        $resolver = $this->resolvedType->getOptionsResolver();

        $this->assertEquals($resolvedOptions, $resolver->resolve($givenOptions));
    }

    public function testCreateBuilder()
    {
        $givenOptions = array('a' => 'a_custom', 'c' => 'c_custom');
        $resolvedOptions = array('a' => 'a_custom', 'b' => 'b_default', 'c' => 'c_custom', 'd' => 'd_default');
        $optionsResolver = $this->getMockBuilder('Symfony\Component\OptionsResolver\OptionsResolverInterface')->getMock();

        $this->resolvedType = $this->getMockBuilder('Symfony\Component\Form\ResolvedFormType')
            ->setConstructorArgs(array($this->type, array($this->extension1, $this->extension2), $this->parentResolvedType))
            ->setMethods(array('getOptionsResolver'))
            ->getMock();

        $this->resolvedType->expects($this->once())
            ->method('getOptionsResolver')
            ->will($this->returnValue($optionsResolver));

        $optionsResolver->expects($this->once())
            ->method('resolve')
            ->with($givenOptions)
            ->will($this->returnValue($resolvedOptions));

        $factory = $this->getMockFormFactory();
        $builder = $this->resolvedType->createBuilder($factory, 'name', $givenOptions);

        $this->assertSame($this->resolvedType, $builder->getType());
        $this->assertSame($resolvedOptions, $builder->getOptions());
        $this->assertNull($builder->getDataClass());
    }

    public function testCreateBuilderWithDataClassOption()
    {
        $givenOptions = array('data_class' => 'Foo');
        $resolvedOptions = array('data_class' => '\stdClass');
        $optionsResolver = $this->getMockBuilder('Symfony\Component\OptionsResolver\OptionsResolverInterface')->getMock();

        $this->resolvedType = $this->getMockBuilder('Symfony\Component\Form\ResolvedFormType')
            ->setConstructorArgs(array($this->type, array($this->extension1, $this->extension2), $this->parentResolvedType))
            ->setMethods(array('getOptionsResolver'))
            ->getMock();

        $this->resolvedType->expects($this->once())
            ->method('getOptionsResolver')
            ->will($this->returnValue($optionsResolver));

        $optionsResolver->expects($this->once())
            ->method('resolve')
            ->with($givenOptions)
            ->will($this->returnValue($resolvedOptions));

        $factory = $this->getMockFormFactory();
        $builder = $this->resolvedType->createBuilder($factory, 'name', $givenOptions);

        $this->assertSame($this->resolvedType, $builder->getType());
        $this->assertSame($resolvedOptions, $builder->getOptions());
        $this->assertSame('\stdClass', $builder->getDataClass());
    }

    public function testBuildForm()
    {
        $test = $this;
        $i = 0;

        $assertIndex = function ($index) use (&$i, $test) {
            return function () use (&$i, $test, $index) {
                /* @var TestCase $test */
                $test->assertEquals($index, $i, 'Executed at index '.$index);

                ++$i;
            };
        };

        $options = array('a' => 'Foo', 'b' => 'Bar');
        $builder = $this->getMockBuilder('Symfony\Component\Form\Test\FormBuilderInterface')->getMock();

        // First the form is built for the super type
        $this->parentType->expects($this->once())
            ->method('buildForm')
            ->with($builder, $options)
            ->will($this->returnCallback($assertIndex(0)));

        // Then the type itself
        $this->type->expects($this->once())
            ->method('buildForm')
            ->with($builder, $options)
            ->will($this->returnCallback($assertIndex(1)));

        // Then its extensions
        $this->extension1->expects($this->once())
            ->method('buildForm')
            ->with($builder, $options)
            ->will($this->returnCallback($assertIndex(2)));

        $this->extension2->expects($this->once())
            ->method('buildForm')
            ->with($builder, $options)
            ->will($this->returnCallback($assertIndex(3)));

        $this->resolvedType->buildForm($builder, $options);
    }

    public function testCreateView()
    {
        $form = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')->getMock();

        $view = $this->resolvedType->createView($form);

        $this->assertInstanceOf('Symfony\Component\Form\FormView', $view);
        $this->assertNull($view->parent);
    }

    public function testCreateViewWithParent()
    {
        $form = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')->getMock();
        $parentView = $this->getMockBuilder('Symfony\Component\Form\FormView')->getMock();

        $view = $this->resolvedType->createView($form, $parentView);

        $this->assertInstanceOf('Symfony\Component\Form\FormView', $view);
        $this->assertSame($parentView, $view->parent);
    }

    public function testBuildView()
    {
        $options = array('a' => '1', 'b' => '2');
        $form = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')->getMock();
        $view = $this->getMockBuilder('Symfony\Component\Form\FormView')->getMock();

        $test = $this;
        $i = 0;

        $assertIndex = function ($index) use (&$i, $test) {
            return function () use (&$i, $test, $index) {
                /* @var TestCase $test */
                $test->assertEquals($index, $i, 'Executed at index '.$index);

                ++$i;
            };
        };

        // First the super type
        $this->parentType->expects($this->once())
            ->method('buildView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(0)));

        // Then the type itself
        $this->type->expects($this->once())
            ->method('buildView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(1)));

        // Then its extensions
        $this->extension1->expects($this->once())
            ->method('buildView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(2)));

        $this->extension2->expects($this->once())
            ->method('buildView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(3)));

        $this->resolvedType->buildView($view, $form, $options);
    }

    public function testFinishView()
    {
        $options = array('a' => '1', 'b' => '2');
        $form = $this->getMockBuilder('Symfony\Component\Form\Test\FormInterface')->getMock();
        $view = $this->getMockBuilder('Symfony\Component\Form\FormView')->getMock();

        $test = $this;
        $i = 0;

        $assertIndex = function ($index) use (&$i, $test) {
            return function () use (&$i, $test, $index) {
                /* @var TestCase $test */
                $test->assertEquals($index, $i, 'Executed at index '.$index);

                ++$i;
            };
        };

        // First the super type
        $this->parentType->expects($this->once())
            ->method('finishView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(0)));

        // Then the type itself
        $this->type->expects($this->once())
            ->method('finishView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(1)));

        // Then its extensions
        $this->extension1->expects($this->once())
            ->method('finishView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(2)));

        $this->extension2->expects($this->once())
            ->method('finishView')
            ->with($view, $form, $options)
            ->will($this->returnCallback($assertIndex(3)));

        $this->resolvedType->finishView($view, $form, $options);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getMockFormType()
    {
        return $this->getMockBuilder('Symfony\Component\Form\AbstractType')->setMethods(array('getName', 'configureOptions', 'finishView', 'buildView', 'buildForm'))->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getMockFormTypeExtension()
    {
        return $this->getMockBuilder('Symfony\Component\Form\AbstractTypeExtension')->setMethods(array('getExtendedType', 'configureOptions', 'finishView', 'buildView', 'buildForm'))->getMock();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getMockFormFactory()
    {
        return $this->getMockBuilder('Symfony\Component\Form\FormFactoryInterface')->getMock();
    }

    /**
     * @param string $name
     * @param array  $options
     *
     * @return FormBuilder
     */
    protected function getBuilder($name = 'name', array $options = array())
    {
        return new FormBuilder($name, null, $this->dispatcher, $this->factory, $options);
    }
}
