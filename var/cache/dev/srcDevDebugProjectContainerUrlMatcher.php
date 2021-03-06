<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // listar_categorias
            if ('/categoria' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CategoriaController::index',  '_route' => 'listar_categorias',);
            }

            // cadastrar_categoria
            if ('/categoria/cadastrar' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CategoriaController::create',  '_route' => 'cadastrar_categoria',);
            }

            // editar_categoria
            if (0 === strpos($pathinfo, '/categoria/editar') && preg_match('#^/categoria/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_categoria')), array (  '_controller' => 'App\\Controller\\CategoriaController::update',));
            }

            // deletar_categoria
            if (0 === strpos($pathinfo, '/categoria/delete') && preg_match('#^/categoria/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletar_categoria')), array (  '_controller' => 'App\\Controller\\CategoriaController::delete',));
            }

            // visualizar_categoria
            if (preg_match('#^/categoria/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visualizar_categoria')), array (  '_controller' => 'App\\Controller\\CategoriaController::view',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'admin',);
            }

            // dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DefaultController::dashboard',  '_route' => 'dashboard',);
            }

            // login
            if ('/admin/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DefaultController::login',  '_route' => 'login',);
            }

        }

        // app_default_insert
        if ('/insert' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\DefaultController::insert',  '_route' => 'app_default_insert',);
        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // listar_empresa
            if ('/empresa' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\EmpresaController::index',  '_route' => 'listar_empresa',);
            }

            // cadastrar_empresa
            if ('/empresa/cadastrar' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\EmpresaController::create',  '_route' => 'cadastrar_empresa',);
            }

            // editar_empresa
            if (0 === strpos($pathinfo, '/empresa/editar') && preg_match('#^/empresa/editar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_empresa')), array (  '_controller' => 'App\\Controller\\EmpresaController::update',));
            }

            // visualizar_empresa
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visualizar_empresa')), array (  '_controller' => 'App\\Controller\\EmpresaController::view',));
            }

            // deletar_empresa
            if (0 === strpos($pathinfo, '/empresa/delete') && preg_match('#^/empresa/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletar_empresa')), array (  '_controller' => 'App\\Controller\\EmpresaController::delete',));
            }

        }

        // filter
        if ('/filterBy' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\EmpresaController::filterBy',  '_route' => 'filter',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\EmpresaController::index',  '_route' => 'index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }
        not_index:

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
