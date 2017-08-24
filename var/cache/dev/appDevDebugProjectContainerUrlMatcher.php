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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // list-recipes
        if ('/list-recipes' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RecipeController::showRecipeAction',  '_route' => 'list-recipes',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/allergen')) {
                    // admin_app_allergen_list
                    if ('/admin/app/allergen/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_list',  '_route' => 'admin_app_allergen_list',);
                    }

                    // admin_app_allergen_create
                    if ('/admin/app/allergen/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_create',  '_route' => 'admin_app_allergen_create',);
                    }

                    // admin_app_allergen_batch
                    if ('/admin/app/allergen/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_batch',  '_route' => 'admin_app_allergen_batch',);
                    }

                    // admin_app_allergen_edit
                    if (preg_match('#^/admin/app/allergen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_allergen_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_edit',));
                    }

                    // admin_app_allergen_delete
                    if (preg_match('#^/admin/app/allergen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_allergen_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_delete',));
                    }

                    // admin_app_allergen_show
                    if (preg_match('#^/admin/app/allergen/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_allergen_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_show',));
                    }

                    // admin_app_allergen_export
                    if ('/admin/app/allergen/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.allergen',  '_sonata_name' => 'admin_app_allergen_export',  '_route' => 'admin_app_allergen_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/commentary')) {
                    // admin_app_commentary_list
                    if ('/admin/app/commentary/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_list',  '_route' => 'admin_app_commentary_list',);
                    }

                    // admin_app_commentary_create
                    if ('/admin/app/commentary/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_create',  '_route' => 'admin_app_commentary_create',);
                    }

                    // admin_app_commentary_batch
                    if ('/admin/app/commentary/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_batch',  '_route' => 'admin_app_commentary_batch',);
                    }

                    // admin_app_commentary_edit
                    if (preg_match('#^/admin/app/commentary/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_commentary_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_edit',));
                    }

                    // admin_app_commentary_delete
                    if (preg_match('#^/admin/app/commentary/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_commentary_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_delete',));
                    }

                    // admin_app_commentary_show
                    if (preg_match('#^/admin/app/commentary/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_commentary_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_show',));
                    }

                    // admin_app_commentary_export
                    if ('/admin/app/commentary/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.commentary',  '_sonata_name' => 'admin_app_commentary_export',  '_route' => 'admin_app_commentary_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/ingredient')) {
                    // admin_app_ingredient_list
                    if ('/admin/app/ingredient/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_list',  '_route' => 'admin_app_ingredient_list',);
                    }

                    // admin_app_ingredient_create
                    if ('/admin/app/ingredient/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_create',  '_route' => 'admin_app_ingredient_create',);
                    }

                    // admin_app_ingredient_batch
                    if ('/admin/app/ingredient/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_batch',  '_route' => 'admin_app_ingredient_batch',);
                    }

                    // admin_app_ingredient_edit
                    if (preg_match('#^/admin/app/ingredient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_ingredient_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_edit',));
                    }

                    // admin_app_ingredient_delete
                    if (preg_match('#^/admin/app/ingredient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_ingredient_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_delete',));
                    }

                    // admin_app_ingredient_show
                    if (preg_match('#^/admin/app/ingredient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_ingredient_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_show',));
                    }

                    // admin_app_ingredient_export
                    if ('/admin/app/ingredient/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.ingredient',  '_sonata_name' => 'admin_app_ingredient_export',  '_route' => 'admin_app_ingredient_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/image')) {
                    // admin_app_image_list
                    if ('/admin/app/image/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_list',  '_route' => 'admin_app_image_list',);
                    }

                    // admin_app_image_create
                    if ('/admin/app/image/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_create',  '_route' => 'admin_app_image_create',);
                    }

                    // admin_app_image_batch
                    if ('/admin/app/image/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_batch',  '_route' => 'admin_app_image_batch',);
                    }

                    // admin_app_image_edit
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_edit',));
                    }

                    // admin_app_image_delete
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_delete',));
                    }

                    // admin_app_image_show
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_show',));
                    }

                    // admin_app_image_export
                    if ('/admin/app/image/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.image',  '_sonata_name' => 'admin_app_image_export',  '_route' => 'admin_app_image_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/recipe')) {
                    // admin_app_recipe_list
                    if ('/admin/app/recipe/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_list',  '_route' => 'admin_app_recipe_list',);
                    }

                    // admin_app_recipe_create
                    if ('/admin/app/recipe/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_create',  '_route' => 'admin_app_recipe_create',);
                    }

                    // admin_app_recipe_batch
                    if ('/admin/app/recipe/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_batch',  '_route' => 'admin_app_recipe_batch',);
                    }

                    // admin_app_recipe_edit
                    if (preg_match('#^/admin/app/recipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_recipe_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_edit',));
                    }

                    // admin_app_recipe_delete
                    if (preg_match('#^/admin/app/recipe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_recipe_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_delete',));
                    }

                    // admin_app_recipe_show
                    if (preg_match('#^/admin/app/recipe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_recipe_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_show',));
                    }

                    // admin_app_recipe_export
                    if ('/admin/app/recipe/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.recipe',  '_sonata_name' => 'admin_app_recipe_export',  '_route' => 'admin_app_recipe_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/quantity')) {
                    // admin_app_quantity_list
                    if ('/admin/app/quantity/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_list',  '_route' => 'admin_app_quantity_list',);
                    }

                    // admin_app_quantity_create
                    if ('/admin/app/quantity/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_create',  '_route' => 'admin_app_quantity_create',);
                    }

                    // admin_app_quantity_batch
                    if ('/admin/app/quantity/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_batch',  '_route' => 'admin_app_quantity_batch',);
                    }

                    // admin_app_quantity_edit
                    if (preg_match('#^/admin/app/quantity/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quantity_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_edit',));
                    }

                    // admin_app_quantity_delete
                    if (preg_match('#^/admin/app/quantity/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quantity_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_delete',));
                    }

                    // admin_app_quantity_show
                    if (preg_match('#^/admin/app/quantity/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_quantity_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_show',));
                    }

                    // admin_app_quantity_export
                    if ('/admin/app/quantity/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.quantity',  '_sonata_name' => 'admin_app_quantity_export',  '_route' => 'admin_app_quantity_export',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app/unit')) {
                    // admin_app_unit_list
                    if ('/admin/app/unit/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_list',  '_route' => 'admin_app_unit_list',);
                    }

                    // admin_app_unit_create
                    if ('/admin/app/unit/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_create',  '_route' => 'admin_app_unit_create',);
                    }

                    // admin_app_unit_batch
                    if ('/admin/app/unit/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_batch',  '_route' => 'admin_app_unit_batch',);
                    }

                    // admin_app_unit_edit
                    if (preg_match('#^/admin/app/unit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_unit_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_edit',));
                    }

                    // admin_app_unit_delete
                    if (preg_match('#^/admin/app/unit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_unit_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_delete',));
                    }

                    // admin_app_unit_show
                    if (preg_match('#^/admin/app/unit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_unit_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_show',));
                    }

                    // admin_app_unit_export
                    if ('/admin/app/unit/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.unit',  '_sonata_name' => 'admin_app_unit_export',  '_route' => 'admin_app_unit_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
