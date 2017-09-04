<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_4db8a3fb3ca7a33544be8fe7c10f0b2afa99b30d2248ad4524d54856b671bf8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bda0b9a13bfa9294b5d56d1241c0a081154d4cc9e3e7874029fdb576294d96cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda0b9a13bfa9294b5d56d1241c0a081154d4cc9e3e7874029fdb576294d96cf->enter($__internal_bda0b9a13bfa9294b5d56d1241c0a081154d4cc9e3e7874029fdb576294d96cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_7d9c519187600e35f07e59b4cc6d1e031983f8c75987cc7a11673bdbd42d888f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9c519187600e35f07e59b4cc6d1e031983f8c75987cc7a11673bdbd42d888f->enter($__internal_7d9c519187600e35f07e59b4cc6d1e031983f8c75987cc7a11673bdbd42d888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda0b9a13bfa9294b5d56d1241c0a081154d4cc9e3e7874029fdb576294d96cf->leave($__internal_bda0b9a13bfa9294b5d56d1241c0a081154d4cc9e3e7874029fdb576294d96cf_prof);

        
        $__internal_7d9c519187600e35f07e59b4cc6d1e031983f8c75987cc7a11673bdbd42d888f->leave($__internal_7d9c519187600e35f07e59b4cc6d1e031983f8c75987cc7a11673bdbd42d888f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_318c409816069e38fe6953f926d22f3bd510e976b3ce422ceb762fe3869ef90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318c409816069e38fe6953f926d22f3bd510e976b3ce422ceb762fe3869ef90a->enter($__internal_318c409816069e38fe6953f926d22f3bd510e976b3ce422ceb762fe3869ef90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_786763801db3a19476e1e53ac08ae85dc1c10e7382e25e8b18398e1a6ce5323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786763801db3a19476e1e53ac08ae85dc1c10e7382e25e8b18398e1a6ce5323c->enter($__internal_786763801db3a19476e1e53ac08ae85dc1c10e7382e25e8b18398e1a6ce5323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_786763801db3a19476e1e53ac08ae85dc1c10e7382e25e8b18398e1a6ce5323c->leave($__internal_786763801db3a19476e1e53ac08ae85dc1c10e7382e25e8b18398e1a6ce5323c_prof);

        
        $__internal_318c409816069e38fe6953f926d22f3bd510e976b3ce422ceb762fe3869ef90a->leave($__internal_318c409816069e38fe6953f926d22f3bd510e976b3ce422ceb762fe3869ef90a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
