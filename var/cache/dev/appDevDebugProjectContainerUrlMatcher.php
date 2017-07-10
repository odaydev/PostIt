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

        if (0 === strpos($pathinfo, '/css/7f116c3')) {
            // _assetic_7f116c3
            if ($pathinfo === '/css/7f116c3.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7f116c3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7f116c3',);
            }

            if (0 === strpos($pathinfo, '/css/7f116c3_part_1_')) {
                // _assetic_7f116c3_0
                if ($pathinfo === '/css/7f116c3_part_1_animsition_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f116c3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7f116c3_0',);
                }

                // _assetic_7f116c3_1
                if ($pathinfo === '/css/7f116c3_part_1_jquery-ui_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f116c3',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7f116c3_1',);
                }

                // _assetic_7f116c3_2
                if ($pathinfo === '/css/7f116c3_part_1_reset_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f116c3',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_7f116c3_2',);
                }

                // _assetic_7f116c3_3
                if ($pathinfo === '/css/7f116c3_part_1_style_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f116c3',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_7f116c3_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ccca1cb')) {
            // _assetic_ccca1cb
            if ($pathinfo === '/js/ccca1cb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ccca1cb',);
            }

            if (0 === strpos($pathinfo, '/js/ccca1cb_part_1_')) {
                // _assetic_ccca1cb_0
                if ($pathinfo === '/js/ccca1cb_part_1_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_0',);
                }

                // _assetic_ccca1cb_1
                if ($pathinfo === '/js/ccca1cb_part_1_jquery-3.2.1.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_1',);
                }

                // _assetic_ccca1cb_2
                if ($pathinfo === '/js/ccca1cb_part_1_moment.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_2',);
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

        if (0 === strpos($pathinfo, '/a')) {
            // article
            if (0 === strpos($pathinfo, '/art') && preg_match('#^/art/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::articleAction',));
            }

            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin',);
            }

        }

        // profil
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil')), array (  '_controller' => 'AppBundle\\Controller\\ProfilController::profilAction',));
        }

        // register
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::registerAction',  '_route' => 'register',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UsersController::logForm',  '_route' => 'home',);
        }

        // addComment
        if ($pathinfo === '/addComment') {
            return array (  '_controller' => 'AppBundle\\Controller\\UsersController::addComment',  '_route' => 'addComment',);
        }

        if (0 === strpos($pathinfo, '/post')) {
            // post
            if ($pathinfo === '/post') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::postAction',  '_route' => 'post',);
            }

            // addPost
            if ($pathinfo === '/post/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsersController::addPost',  '_route' => 'addPost',);
            }

        }

        // removecom
        if (0 === strpos($pathinfo, '/remove_com') && preg_match('#^/remove_com/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'removecom')), array (  '_controller' => 'AppBundle\\Controller\\UsersController::removeCom',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
