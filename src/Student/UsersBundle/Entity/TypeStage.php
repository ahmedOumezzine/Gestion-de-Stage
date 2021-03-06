<?php

namespace Student\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeStage
 *
 * @ORM\Table(name="type_stage")
 * @ORM\Entity
 */
class TypeStage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TypeStage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypestage;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Stage", type="string", length=120, nullable=false)
     */
    private $typeStage;



    /**
     * Get idTypestage
     *
     * @return integer
     */
    public function getIdTypestage()
    {
        return $this->idTypestage;
    }

    /**
     * Set typeStage
     *
     * @param string $typeStage
     *
     * @return TypeStage
     */
    public function setTypeStage($typeStage)
    {
        $this->typeStage = $typeStage;

        return $this;
    }

    /**
     * Get typeStage
     *
     * @return string
     */
    public function getTypeStage()
    {
        return $this->typeStage;
    }
    public function __toString()
    {
        return $this->getTypeStage();
    }
}
