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

        // mvc_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mvc_blog_homepage');
            }

            return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'mvc_blog_homepage',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // mvc_blog_by_category
            if (0 === strpos($pathinfo, '/blog/category') && preg_match('#^/blog/category/(?P<slug>[a-zA-Z0-9\\-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mvc_blog_by_category')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\BlogController::getPostByCategoryAction',));
            }

            // mvc_blog_show
            if (preg_match('#^/blog/(?P<slug>[a-zA-Z0-9\\-]+)\\-(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mvc_blog_show')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\BlogController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // posts_admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'posts_admin_index');
                }

                return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\PostsController::indexAction',  '_route' => 'posts_admin_index',);
            }

            // posts_admin_add
            if ($pathinfo === '/admin/add') {
                return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\PostsController::addAction',  '_route' => 'posts_admin_add',);
            }

            // posts_admin_update
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'posts_admin_update')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\PostsController::updateAction',));
            }

            // posts_admin_delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'posts_admin_delete')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\PostsController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // categories_admin_index
                if ($pathinfo === '/admin/category') {
                    return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\CategoriesController::indexAction',  '_route' => 'categories_admin_index',);
                }

                // categories_admin_add
                if ($pathinfo === '/admin/category/add') {
                    return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\CategoriesController::addAction',  '_route' => 'categories_admin_add',);
                }

                // categories_admin_update
                if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_update')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\CategoriesController::updateAction',));
                }

                // categories_admin_delete
                if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_delete')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\CategoriesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // users_admin_index
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\UsersController::indexAction',  '_route' => 'users_admin_index',);
                }

                // users_admin_add
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\UsersController::addAction',  '_route' => 'users_admin_add',);
                }

                // users_admin_update
                if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_admin_update')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\UsersController::updateAction',));
                }

                // users_admin_delete
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_admin_delete')), array (  '_controller' => 'Mvc\\BlogBundle\\Controller\\Admin\\UsersController::deleteAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
