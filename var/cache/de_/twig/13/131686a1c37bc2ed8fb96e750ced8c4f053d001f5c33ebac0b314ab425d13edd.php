<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_536ca19e1550b6c43afd51c7ced44e63a1ae287ef5aa30844316d0f315640fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1895414ca35486805b2ffa38916f3a3743b1856e90dcadafab562c82022891bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1895414ca35486805b2ffa38916f3a3743b1856e90dcadafab562c82022891bf->enter($__internal_1895414ca35486805b2ffa38916f3a3743b1856e90dcadafab562c82022891bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_222790add983801d984d115d895176024836af2aae342ae759e62993de699bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222790add983801d984d115d895176024836af2aae342ae759e62993de699bf0->enter($__internal_222790add983801d984d115d895176024836af2aae342ae759e62993de699bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1895414ca35486805b2ffa38916f3a3743b1856e90dcadafab562c82022891bf->leave($__internal_1895414ca35486805b2ffa38916f3a3743b1856e90dcadafab562c82022891bf_prof);

        
        $__internal_222790add983801d984d115d895176024836af2aae342ae759e62993de699bf0->leave($__internal_222790add983801d984d115d895176024836af2aae342ae759e62993de699bf0_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_254b0d2ea7259ae6a1eab268359d1ba5f1aed05d0e919334c8ee8e178aacea3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254b0d2ea7259ae6a1eab268359d1ba5f1aed05d0e919334c8ee8e178aacea3e->enter($__internal_254b0d2ea7259ae6a1eab268359d1ba5f1aed05d0e919334c8ee8e178aacea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc299cb0466474fb45a1018993ce65e45c50a24b4484be5a71bb9589437a401c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc299cb0466474fb45a1018993ce65e45c50a24b4484be5a71bb9589437a401c->enter($__internal_dc299cb0466474fb45a1018993ce65e45c50a24b4484be5a71bb9589437a401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_dc299cb0466474fb45a1018993ce65e45c50a24b4484be5a71bb9589437a401c->leave($__internal_dc299cb0466474fb45a1018993ce65e45c50a24b4484be5a71bb9589437a401c_prof);

        
        $__internal_254b0d2ea7259ae6a1eab268359d1ba5f1aed05d0e919334c8ee8e178aacea3e->leave($__internal_254b0d2ea7259ae6a1eab268359d1ba5f1aed05d0e919334c8ee8e178aacea3e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b91aa281f56df07ee9811fcdeafd515c8d2b2e25558af7da9841ca497797cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b91aa281f56df07ee9811fcdeafd515c8d2b2e25558af7da9841ca497797cb4->enter($__internal_0b91aa281f56df07ee9811fcdeafd515c8d2b2e25558af7da9841ca497797cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1db858d4bf575693a14b0e01f82fe16ae412386b465c5a1522d6c0c4bb7dfc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db858d4bf575693a14b0e01f82fe16ae412386b465c5a1522d6c0c4bb7dfc58->enter($__internal_1db858d4bf575693a14b0e01f82fe16ae412386b465c5a1522d6c0c4bb7dfc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_1db858d4bf575693a14b0e01f82fe16ae412386b465c5a1522d6c0c4bb7dfc58->leave($__internal_1db858d4bf575693a14b0e01f82fe16ae412386b465c5a1522d6c0c4bb7dfc58_prof);

        
        $__internal_0b91aa281f56df07ee9811fcdeafd515c8d2b2e25558af7da9841ca497797cb4->leave($__internal_0b91aa281f56df07ee9811fcdeafd515c8d2b2e25558af7da9841ca497797cb4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends base_template %}

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
