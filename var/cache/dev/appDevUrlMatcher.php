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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/customer')) {
            // customer_home
            if (rtrim($pathinfo, '/') === '/customer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'customer_home');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer_home',);
            }

            // customer_create
            if ($pathinfo === '/customer/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
            }

            if (0 === strpos($pathinfo, '/customer/view')) {
                // customer_viewAll
                if ($pathinfo === '/customer/view') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CustomerController::viewallAction',  '_route' => 'customer_viewAll',);
                }

                // customer_view
                if (preg_match('#^/customer/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_view')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::viewAction',));
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

        if (0 === strpos($pathinfo, '/reservation')) {
            // reservation_home
            if (rtrim($pathinfo, '/') === '/reservation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation_home');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_home',);
            }

            // reservation_create
            if ($pathinfo === '/reservation/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
            }

            if (0 === strpos($pathinfo, '/reservation/view')) {
                // reservation_viewAll
                if ($pathinfo === '/reservation/viewAll') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ReservationController::viewAllAction',  '_route' => 'reservation_viewAll',);
                }

                // reservation_view
                if (preg_match('#^/reservation/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_view')), array (  '_controller' => 'AppBundle\\Controller\\ReservationController::viewAction',));
                }

            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::signupAction',  '_route' => 'signup',);
        }

        if (0 === strpos($pathinfo, '/vehicle')) {
            // vehicle_home
            if (rtrim($pathinfo, '/') === '/vehicle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vehicle_home');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VehicleController::indexAction',  '_route' => 'vehicle_home',);
            }

            // vehicle_create
            if ($pathinfo === '/vehicle/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\VehicleController::createAction',  '_route' => 'vehicle_create',);
            }

            if (0 === strpos($pathinfo, '/vehicle/view')) {
                // vehicle_viewAll
                if ($pathinfo === '/vehicle/view') {
                    return array (  '_controller' => 'AppBundle\\Controller\\VehicleController::viewallAction',  '_route' => 'vehicle_viewAll',);
                }

                // vehicle_view
                if (preg_match('#^/vehicle/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicle_view')), array (  '_controller' => 'AppBundle\\Controller\\VehicleController::viewAction',));
                }

            }

            // vehicle_dispatch
            if (0 === strpos($pathinfo, '/vehicle/changeStatus') && preg_match('#^/vehicle/changeStatus/(?P<id>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicle_dispatch')), array (  '_controller' => 'AppBundle\\Controller\\VehicleController::changeStatusAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
