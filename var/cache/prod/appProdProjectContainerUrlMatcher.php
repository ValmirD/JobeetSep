<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ens_category_show
        if (0 === strpos($pathinfo, '/ens_category') && preg_match('#^/ens_category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ens_category_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_category_show')), array (  'page' => 1,  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryController::showAction',));
        }
        not_ens_category_show:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login_check',);
                }

                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => 'login',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::logOutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/job') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ens_job;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }
            not_ens_job:

            // ens_job_new
            if ($pathinfo === '/job/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ens_job_new;
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ens_job_new',);
            }
            not_ens_job_new:

            // ens_job_show
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<id>\\d+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ens_job_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',));
            }
            not_ens_job_show:

            // ens_job_edit
            if (preg_match('#^/job/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ens_job_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',));
            }
            not_ens_job_edit:

            // ens_job_delete
            if (preg_match('#^/job/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ens_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',));
            }
            not_ens_job_delete:

            // ens_job_preview
            if (preg_match('#^/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<token>[^/]++)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_preview')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::previewAction',));
            }

            // ens_job_publish
            if (preg_match('#^/job/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_publish;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_publish')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::publishAction',));
            }
            not_ens_job_publish:

            // ens_job_extend
            if (preg_match('#^/job/(?P<token>[^/]++)/extend$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_extend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_job_extend')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::extendAction',));
            }
            not_ens_job_extend:

        }

        if (0 === strpos($pathinfo, '/ens_level')) {
            // ens_level_index
            if (rtrim($pathinfo, '/') === '/ens_level') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ens_level_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_level_index');
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\LevelController::indexAction',  '_route' => 'ens_level_index',);
            }
            not_ens_level_index:

            // ens_level_new
            if ($pathinfo === '/ens_level/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ens_level_new;
                }

                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\LevelController::newAction',  '_route' => 'ens_level_new',);
            }
            not_ens_level_new:

            // ens_level_show
            if (preg_match('#^/ens_level/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ens_level_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_level_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\LevelController::showAction',));
            }
            not_ens_level_show:

            // ens_level_edit
            if (preg_match('#^/ens_level/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ens_level_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_level_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\LevelController::editAction',));
            }
            not_ens_level_edit:

            // ens_level_delete
            if (preg_match('#^/ens_level/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ens_level_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ens_level_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\LevelController::deleteAction',));
            }
            not_ens_level_delete:

        }

        // ens_job_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ens_job_homepage');
            }

            return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/ens/jobeet')) {
                if (0 === strpos($pathinfo, '/admin/ens/jobeet/category')) {
                    // admin_ens_jobeet_category_list
                    if ($pathinfo === '/admin/ens/jobeet/category/list') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_list',  '_route' => 'admin_ens_jobeet_category_list',);
                    }

                    // admin_ens_jobeet_category_create
                    if ($pathinfo === '/admin/ens/jobeet/category/create') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_create',  '_route' => 'admin_ens_jobeet_category_create',);
                    }

                    // admin_ens_jobeet_category_batch
                    if ($pathinfo === '/admin/ens/jobeet/category/batch') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_batch',  '_route' => 'admin_ens_jobeet_category_batch',);
                    }

                    // admin_ens_jobeet_category_edit
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_edit',));
                    }

                    // admin_ens_jobeet_category_delete
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_delete',));
                    }

                    // admin_ens_jobeet_category_show
                    if (preg_match('#^/admin/ens/jobeet/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_category_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_show',));
                    }

                    // admin_ens_jobeet_category_export
                    if ($pathinfo === '/admin/ens/jobeet/category/export') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.category',  '_sonata_name' => 'admin_ens_jobeet_category_export',  '_route' => 'admin_ens_jobeet_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ens/jobeet/job')) {
                    // admin_ens_jobeet_job_list
                    if ($pathinfo === '/admin/ens/jobeet/job/list') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_list',  '_route' => 'admin_ens_jobeet_job_list',);
                    }

                    // admin_ens_jobeet_job_create
                    if ($pathinfo === '/admin/ens/jobeet/job/create') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_create',  '_route' => 'admin_ens_jobeet_job_create',);
                    }

                    // admin_ens_jobeet_job_batch
                    if ($pathinfo === '/admin/ens/jobeet/job/batch') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_batch',  '_route' => 'admin_ens_jobeet_job_batch',);
                    }

                    // admin_ens_jobeet_job_edit
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_edit')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_edit',));
                    }

                    // admin_ens_jobeet_job_delete
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_delete')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_delete',));
                    }

                    // admin_ens_jobeet_job_show
                    if (preg_match('#^/admin/ens/jobeet/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ens_jobeet_job_show')), array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_show',));
                    }

                    // admin_ens_jobeet_job_export
                    if ($pathinfo === '/admin/ens/jobeet/job/export') {
                        return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ens.jobeet.admin.job',  '_sonata_name' => 'admin_ens_jobeet_job_export',  '_route' => 'admin_ens_jobeet_job_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
