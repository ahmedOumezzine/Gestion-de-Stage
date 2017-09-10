<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // front_office_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_office_homepage')), array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/BackOffice_')) {
            if (0 === strpos($pathinfo, '/BackOffice_student')) {
                // DocumentStudent
                if (rtrim($pathinfo, '/') === '/BackOffice_student/Document') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'DocumentStudent');
                    }

                    return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DocumentController::indexAction',  '_route' => 'DocumentStudent',);
                }

                if (0 === strpos($pathinfo, '/BackOffice_student/S')) {
                    if (0 === strpos($pathinfo, '/BackOffice_student/Soutanance')) {
                        // SoutananceStudent
                        if (rtrim($pathinfo, '/') === '/BackOffice_student/Soutanance') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'SoutananceStudent');
                            }

                            return array (  '_controller' => 'Student\\UsersBundle\\Controller\\SoutananceController::indexAction',  '_route' => 'SoutananceStudent',);
                        }

                        // Soutanance_showStudent
                        if (preg_match('#^/BackOffice_student/Soutanance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Soutanance_showStudent')), array (  '_controller' => 'Student\\UsersBundle\\Controller\\SoutananceController::showAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/BackOffice_student/Stage')) {
                        // StageStudent
                        if (rtrim($pathinfo, '/') === '/BackOffice_student/Stage') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'StageStudent');
                            }

                            return array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::indexAction',  '_route' => 'StageStudent',);
                        }

                        // Stage_showStudent
                        if (preg_match('#^/BackOffice_student/Stage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_showStudent')), array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::showAction',));
                        }

                        // Stage_newStudent
                        if ($pathinfo === '/BackOffice_student/Stage/new') {
                            return array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::newAction',  '_route' => 'Stage_newStudent',);
                        }

                        // Stage_createStudent
                        if ($pathinfo === '/BackOffice_student/Stage/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Stage_createStudent;
                            }

                            return array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::createAction',  '_route' => 'Stage_createStudent',);
                        }
                        not_Stage_createStudent:

                        // Stage_ediStudentt
                        if (preg_match('#^/BackOffice_student/Stage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_ediStudentt')), array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::editAction',));
                        }

                        // Stage_updateStudent
                        if (preg_match('#^/BackOffice_student/Stage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_Stage_updateStudent;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_updateStudent')), array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::updateAction',));
                        }
                        not_Stage_updateStudent:

                        // Stage_deleteStudent
                        if (preg_match('#^/BackOffice_student/Stage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_Stage_deleteStudent;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_deleteStudent')), array (  '_controller' => 'Student\\UsersBundle\\Controller\\StageController::deleteAction',));
                        }
                        not_Stage_deleteStudent:

                    }

                }

                // student_users_homepage
                if (rtrim($pathinfo, '/') === '/BackOffice_student') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'student_users_homepage');
                    }

                    return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::indexAction',  '_route' => 'student_users_homepage',);
                }

                // student_users_Profile
                if ($pathinfo === '/BackOffice_student/Profile') {
                    return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::ProfileAction',  '_route' => 'student_users_Profile',);
                }

                // student_users_Messages
                if ($pathinfo === '/BackOffice_student/messages') {
                    return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::messagesAction',  '_route' => 'student_users_Messages',);
                }

                // student_users_Agenda
                if ($pathinfo === '/BackOffice_student/agenda') {
                    return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::agendaAction',  '_route' => 'student_users_Agenda',);
                }

                if (0 === strpos($pathinfo, '/BackOffice_student/gestions')) {
                    // student_users_GestionStages
                    if ($pathinfo === '/BackOffice_student/gestionstages') {
                        return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::gestionstagesAction',  '_route' => 'student_users_GestionStages',);
                    }

                    // student_users_Gestionsoutenances
                    if ($pathinfo === '/BackOffice_student/gestionsoutenances') {
                        return array (  '_controller' => 'Student\\UsersBundle\\Controller\\DefaultController::gestionsoutenancesAction',  '_route' => 'student_users_Gestionsoutenances',);
                    }

                }

            }

            // prof_users_homepage
            if ($pathinfo === '/BackOffice_Prof') {
                return array (  '_controller' => 'Prof\\UsersBundle\\Controller\\DefaultController::indexAction',  '_route' => 'prof_users_homepage',);
            }

            if (0 === strpos($pathinfo, '/BackOffice_Admin')) {
                if (0 === strpos($pathinfo, '/BackOffice_Admin/GestionUsersEn')) {
                    // GestionUsersEn
                    if (rtrim($pathinfo, '/') === '/BackOffice_Admin/GestionUsersEn') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'GestionUsersEn');
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::indexAction',  '_route' => 'GestionUsersEn',);
                    }

                    // GestionUsersEn_show
                    if (preg_match('#^/BackOffice_Admin/GestionUsersEn/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionUsersEn_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::showAction',));
                    }

                    // Administration_createAdminenc
                    if ($pathinfo === '/BackOffice_Admin/GestionUsersEn/createAdminenc') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Administration_createAdminenc;
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::createAdminencAction',  '_route' => 'Administration_createAdminenc',);
                    }
                    not_Administration_createAdminenc:

                    // GestionUsersEn_new
                    if ($pathinfo === '/BackOffice_Admin/GestionUsersEn/new') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::newAction',  '_route' => 'GestionUsersEn_new',);
                    }

                    // GestionUsersEn_create
                    if ($pathinfo === '/BackOffice_Admin/GestionUsersEn/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_GestionUsersEn_create;
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::createAction',  '_route' => 'GestionUsersEn_create',);
                    }
                    not_GestionUsersEn_create:

                    // GestionUsersEn_edit
                    if (preg_match('#^/BackOffice_Admin/GestionUsersEn/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionUsersEn_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::editAction',));
                    }

                    // GestionUsersEn_update
                    if (preg_match('#^/BackOffice_Admin/GestionUsersEn/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_GestionUsersEn_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionUsersEn_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::updateAction',));
                    }
                    not_GestionUsersEn_update:

                    // GestionUsersEn_delete
                    if (preg_match('#^/BackOffice_Admin/GestionUsersEn/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_GestionUsersEn_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GestionUsersEn_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\EncadreurController::deleteAction',));
                    }
                    not_GestionUsersEn_delete:

                }

                if (0 === strpos($pathinfo, '/BackOffice_Admin/Specialite')) {
                    // Specialite
                    if (rtrim($pathinfo, '/') === '/BackOffice_Admin/Specialite') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Specialite');
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::indexAction',  '_route' => 'Specialite',);
                    }

                    // Specialite_show
                    if (preg_match('#^/BackOffice_Admin/Specialite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Specialite_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::showAction',));
                    }

                    // Specialite_new
                    if ($pathinfo === '/BackOffice_Admin/Specialite/new') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::newAction',  '_route' => 'Specialite_new',);
                    }

                    // Specialite_create
                    if ($pathinfo === '/BackOffice_Admin/Specialite/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Specialite_create;
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::createAction',  '_route' => 'Specialite_create',);
                    }
                    not_Specialite_create:

                    // Specialite_edit
                    if (preg_match('#^/BackOffice_Admin/Specialite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Specialite_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::editAction',));
                    }

                    // Specialite_update
                    if (preg_match('#^/BackOffice_Admin/Specialite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_Specialite_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Specialite_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::updateAction',));
                    }
                    not_Specialite_update:

                    // Specialite_delete
                    if (preg_match('#^/BackOffice_Admin/Specialite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_Specialite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Specialite_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SpecialiteController::deleteAction',));
                    }
                    not_Specialite_delete:

                }

                if (0 === strpos($pathinfo, '/BackOffice_Admin/D')) {
                    if (0 === strpos($pathinfo, '/BackOffice_Admin/Departement')) {
                        // Departement
                        if (rtrim($pathinfo, '/') === '/BackOffice_Admin/Departement') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'Departement');
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::indexAction',  '_route' => 'Departement',);
                        }

                        // Departement_show
                        if (preg_match('#^/BackOffice_Admin/Departement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Departement_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::showAction',));
                        }

                        // Departement_new
                        if ($pathinfo === '/BackOffice_Admin/Departement/new') {
                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::newAction',  '_route' => 'Departement_new',);
                        }

                        // Departement_create
                        if ($pathinfo === '/BackOffice_Admin/Departement/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Departement_create;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::createAction',  '_route' => 'Departement_create',);
                        }
                        not_Departement_create:

                        // Departement_edit
                        if (preg_match('#^/BackOffice_Admin/Departement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Departement_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::editAction',));
                        }

                        // Departement_update
                        if (preg_match('#^/BackOffice_Admin/Departement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_Departement_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Departement_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::updateAction',));
                        }
                        not_Departement_update:

                        // Departement_delete
                        if (preg_match('#^/BackOffice_Admin/Departement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_Departement_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Departement_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DepartementController::deleteAction',));
                        }
                        not_Departement_delete:

                    }

                    if (0 === strpos($pathinfo, '/BackOffice_Admin/Document')) {
                        // Document
                        if (rtrim($pathinfo, '/') === '/BackOffice_Admin/Document') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'Document');
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::indexAction',  '_route' => 'Document',);
                        }

                        // Document_show
                        if (preg_match('#^/BackOffice_Admin/Document/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Document_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::showAction',));
                        }

                        // Document_new
                        if ($pathinfo === '/BackOffice_Admin/Document/new') {
                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::newAction',  '_route' => 'Document_new',);
                        }

                        // Document_create
                        if ($pathinfo === '/BackOffice_Admin/Document/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Document_create;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::createAction',  '_route' => 'Document_create',);
                        }
                        not_Document_create:

                        // Document_edit
                        if (preg_match('#^/BackOffice_Admin/Document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Document_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::editAction',));
                        }

                        // Document_update
                        if (preg_match('#^/BackOffice_Admin/Document/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_Document_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Document_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::updateAction',));
                        }
                        not_Document_update:

                        // Document_delete
                        if (preg_match('#^/BackOffice_Admin/Document/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_Document_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Document_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DocumentController::deleteAction',));
                        }
                        not_Document_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/BackOffice_Admin/S')) {
                    if (0 === strpos($pathinfo, '/BackOffice_Admin/Soutenance')) {
                        // Soutenance
                        if (rtrim($pathinfo, '/') === '/BackOffice_Admin/Soutenance') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'Soutenance');
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::indexAction',  '_route' => 'Soutenance',);
                        }

                        // Soutenance_show
                        if (preg_match('#^/BackOffice_Admin/Soutenance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Soutenance_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::showAction',));
                        }

                        // Soutenance_new
                        if ($pathinfo === '/BackOffice_Admin/Soutenance/new') {
                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::newAction',  '_route' => 'Soutenance_new',);
                        }

                        // Soutenance_create
                        if ($pathinfo === '/BackOffice_Admin/Soutenance/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Soutenance_create;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::createAction',  '_route' => 'Soutenance_create',);
                        }
                        not_Soutenance_create:

                        // Soutenance_edit
                        if (preg_match('#^/BackOffice_Admin/Soutenance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Soutenance_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::editAction',));
                        }

                        // Soutenance_update
                        if (preg_match('#^/BackOffice_Admin/Soutenance/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_Soutenance_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Soutenance_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::updateAction',));
                        }
                        not_Soutenance_update:

                        // Soutenance_delete
                        if (preg_match('#^/BackOffice_Admin/Soutenance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_Soutenance_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Soutenance_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\SoutananceController::deleteAction',));
                        }
                        not_Soutenance_delete:

                    }

                    if (0 === strpos($pathinfo, '/BackOffice_Admin/Stage')) {
                        // Stage
                        if (rtrim($pathinfo, '/') === '/BackOffice_Admin/Stage') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'Stage');
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::indexAction',  '_route' => 'Stage',);
                        }

                        // Stage_show
                        if (preg_match('#^/BackOffice_Admin/Stage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::showAction',));
                        }

                        // Stage_new
                        if ($pathinfo === '/BackOffice_Admin/Stage/new') {
                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::newAction',  '_route' => 'Stage_new',);
                        }

                        // Stage_create
                        if ($pathinfo === '/BackOffice_Admin/Stage/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Stage_create;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::createAction',  '_route' => 'Stage_create',);
                        }
                        not_Stage_create:

                        // Stage_edit
                        if (preg_match('#^/BackOffice_Admin/Stage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::editAction',));
                        }

                        // Stage_update
                        if (preg_match('#^/BackOffice_Admin/Stage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_Stage_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::updateAction',));
                        }
                        not_Stage_update:

                        // Stage_delete
                        if (preg_match('#^/BackOffice_Admin/Stage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_Stage_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Stage_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\StageController::deleteAction',));
                        }
                        not_Stage_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/BackOffice_Admin/GestionUsersAdmin')) {
                    // Administration
                    if (rtrim($pathinfo, '/') === '/BackOffice_Admin/GestionUsersAdmin') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Administration');
                        }

                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::indexAction',  '_route' => 'Administration',);
                    }

                    // Administration_show
                    if (preg_match('#^/BackOffice_Admin/GestionUsersAdmin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Administration_show')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::showAction',));
                    }

                    // Administration_new
                    if ($pathinfo === '/BackOffice_Admin/GestionUsersAdmin/new') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::newAction',  '_route' => 'Administration_new',);
                    }

                    if (0 === strpos($pathinfo, '/BackOffice_Admin/GestionUsersAdmin/create')) {
                        // Administration_create
                        if ($pathinfo === '/BackOffice_Admin/GestionUsersAdmin/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Administration_create;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::createAction',  '_route' => 'Administration_create',);
                        }
                        not_Administration_create:

                        // Administration_createAdminProf
                        if ($pathinfo === '/BackOffice_Admin/GestionUsersAdmin/createAdminProf') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_Administration_createAdminProf;
                            }

                            return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::createAdminProfAction',  '_route' => 'Administration_createAdminProf',);
                        }
                        not_Administration_createAdminProf:

                    }

                    // Administration_edit
                    if (preg_match('#^/BackOffice_Admin/GestionUsersAdmin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Administration_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::editAction',));
                    }

                    // Administration_update
                    if (preg_match('#^/BackOffice_Admin/GestionUsersAdmin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_Administration_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Administration_update')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::updateAction',));
                    }
                    not_Administration_update:

                    // Administration_delete
                    if (preg_match('#^/BackOffice_Admin/GestionUsersAdmin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_Administration_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Administration_delete')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\AdministrationController::deleteAction',));
                    }
                    not_Administration_delete:

                }

                // admin_users_homepage
                if (rtrim($pathinfo, '/') === '/BackOffice_Admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_users_homepage');
                    }

                    return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_users_homepage',);
                }

                // admin_users_Profile
                if ($pathinfo === '/BackOffice_Admin/Profile') {
                    return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::ProfileAction',  '_route' => 'admin_users_Profile',);
                }

                // admin_users_Profile_edit
                if (0 === strpos($pathinfo, '/BackOffice_Admin/edit') && preg_match('#^/BackOffice_Admin/edit/(?P<id>[^/]++)/(?P<firstname>[^/]++)/(?P<lastname>[^/]++)/(?P<birth>[^/]++)/(?P<emailaddress>[^/]++)/(?P<phone>[^/]++)/(?P<gender>[^/]++)/(?P<zipcode>[^/]++)/(?P<city>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_users_Profile_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_Profile_edit')), array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::editAction',));
                }
                not_admin_users_Profile_edit:

                // admin_users_Messages
                if ($pathinfo === '/BackOffice_Admin/Messages') {
                    return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::MessagesAction',  '_route' => 'admin_users_Messages',);
                }

                // admin_users_Agenda
                if ($pathinfo === '/BackOffice_Admin/Agenda') {
                    return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::AgendaAction',  '_route' => 'admin_users_Agenda',);
                }

                if (0 === strpos($pathinfo, '/BackOffice_Admin/Gestion')) {
                    // admin_users_GestionUsers
                    if ($pathinfo === '/BackOffice_Admin/GestionUsers') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::GestionUsersAction',  '_route' => 'admin_users_GestionUsers',);
                    }

                    // admin_users_GestionStages
                    if ($pathinfo === '/BackOffice_Admin/GestionStages') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::GestionStagesAction',  '_route' => 'admin_users_GestionStages',);
                    }

                    // admin_users_GestionRessources
                    if ($pathinfo === '/BackOffice_Admin/GestionRessources') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::GestionRessourcesAction',  '_route' => 'admin_users_GestionRessources',);
                    }

                    // admin_users_GestionDocs
                    if ($pathinfo === '/BackOffice_Admin/GestionDocs') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::GestionDocsAction',  '_route' => 'admin_users_GestionDocs',);
                    }

                    // admin_users_Gestionsoutenances
                    if ($pathinfo === '/BackOffice_Admin/Gestionsoutenances') {
                        return array (  '_controller' => 'Admin\\UsersBundle\\Controller\\DefaultController::GestionsoutenancesAction',  '_route' => 'admin_users_Gestionsoutenances',);
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
