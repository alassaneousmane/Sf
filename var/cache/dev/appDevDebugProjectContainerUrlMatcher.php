<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/a1d1df5')) {
            // _assetic_a1d1df5
            if ($pathinfo === '/css/a1d1df5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1d1df5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a1d1df5',);
            }

            if (0 === strpos($pathinfo, '/css/a1d1df5_')) {
                if (0 === strpos($pathinfo, '/css/a1d1df5_part_1_')) {
                    // _assetic_a1d1df5_0
                    if ($pathinfo === '/css/a1d1df5_part_1_dashboard_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1d1df5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a1d1df5_0',);
                    }

                    // _assetic_a1d1df5_1
                    if ($pathinfo === '/css/a1d1df5_part_1_main_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1d1df5',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a1d1df5_1',);
                    }

                }

                // _assetic_a1d1df5_2
                if ($pathinfo === '/css/a1d1df5_bootstrap.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a1d1df5',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a1d1df5_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/be7a92b')) {
            // _assetic_be7a92b
            if ($pathinfo === '/js/be7a92b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_be7a92b',);
            }

            if (0 === strpos($pathinfo, '/js/be7a92b_')) {
                if (0 === strpos($pathinfo, '/js/be7a92b_jquery')) {
                    // _assetic_be7a92b_0
                    if ($pathinfo === '/js/be7a92b_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_be7a92b_0',);
                    }

                    // _assetic_be7a92b_1
                    if ($pathinfo === '/js/be7a92b_jquery-ui.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_be7a92b_1',);
                    }

                }

                // _assetic_be7a92b_2
                if ($pathinfo === '/js/be7a92b_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_be7a92b_2',);
                }

                if (0 === strpos($pathinfo, '/js/be7a92b_part_4_')) {
                    // _assetic_be7a92b_3
                    if ($pathinfo === '/js/be7a92b_part_4_holder.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_be7a92b_3',);
                    }

                    // _assetic_be7a92b_4
                    if ($pathinfo === '/js/be7a92b_part_4_main_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'be7a92b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_be7a92b_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/acf05e0')) {
            // _assetic_acf05e0
            if ($pathinfo === '/css/acf05e0.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'acf05e0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_acf05e0',);
            }

            if (0 === strpos($pathinfo, '/css/acf05e0_')) {
                // _assetic_acf05e0_0
                if ($pathinfo === '/css/acf05e0_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'acf05e0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_acf05e0_0',);
                }

                // _assetic_acf05e0_1
                if ($pathinfo === '/css/acf05e0_jquery-ui_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'acf05e0',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_acf05e0_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/c757949')) {
            // _assetic_c757949
            if ($pathinfo === '/images/c757949.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c757949',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_c757949',);
            }

            // _assetic_c757949_0
            if ($pathinfo === '/images/c757949_photo-professionnel_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c757949',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_c757949_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/1483758')) {
            // _assetic_1483758
            if ($pathinfo === '/js/1483758.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 1483758,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1483758',);
            }

            if (0 === strpos($pathinfo, '/js/1483758_')) {
                if (0 === strpos($pathinfo, '/js/1483758_jquery')) {
                    // _assetic_1483758_0
                    if ($pathinfo === '/js/1483758_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1483758,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1483758_0',);
                    }

                    // _assetic_1483758_1
                    if ($pathinfo === '/js/1483758_jquery-ui.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1483758,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1483758_1',);
                    }

                }

                // _assetic_1483758_2
                if ($pathinfo === '/js/1483758_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 1483758,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1483758_2',);
                }

            }

        }

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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // oc_course_homepage
        if ($pathinfo === '/course/jquery') {
            return array (  '_controller' => 'OC\\CourseBundle\\Controller\\CourseController::indexAction',  '_route' => 'oc_course_homepage',);
        }

        // oc_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oc_core_homepage');
            }

            return array (  '_controller' => 'OC\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'oc_core_homepage',);
        }

        // oc_core_contactpage
        if ($pathinfo === '/contactez-nous') {
            return array (  '_controller' => 'OC\\CoreBundle\\Controller\\DefaultController::contactAction',  '_route' => 'oc_core_contactpage',);
        }

        // oc_platform_home
        if (preg_match('#^/(?P<_locale>[^/]++)/platform(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_home')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
        }

        // oc_platform_view
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewAction',));
        }

        // oc_platform_add
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/add$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_add')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::addAction',));
        }

        // oc_platform_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_edit')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::editAction',));
        }

        // oc_platform_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_delete')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
        }

        // oc_platform_view_slug
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/(?P<year>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view_slug')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewSlugAction',  'format' => 'html',));
        }

        // oc_platform_list_adverts
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/liste\\-des\\-annonces\\-avec\\-les\\-candidatures\\-2017\\-2018\\-alassane$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_list_adverts')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::listAction',));
        }

        // oc_platform_purge
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/purge/(?P<days>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_purge')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::purgeAction',));
        }

        // oc_platform_search_ajax
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/search/results$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_search_ajax')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::searchAction',));
        }

        // fic_2017_lille_grand_palais
        if (preg_match('#^/(?P<_locale>[^/]++)/platform/master\\-ircoms\\-presents\\-au\\-fic\\-2017$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fic_2017_lille_grand_palais')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::ficAction',));
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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        // oc_platform_translation
        if (preg_match('#^/(?P<_locale>fr|en)/traduction/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_translation')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::translationAction',));
        }

        // oc_platform.paramconverter.json
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<json>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform.paramconverter.json')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::ParamConverterAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
