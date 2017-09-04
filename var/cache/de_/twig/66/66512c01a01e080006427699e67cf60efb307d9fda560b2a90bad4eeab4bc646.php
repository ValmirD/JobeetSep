<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_8bdbf919180243e5be29a002d2673a3bf8604f6d57ad48e4f9efbb112387146b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_03a6cd48089a4c7136bef6d91a5858234faaaebdf0ca20eb5609d393f77518af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a6cd48089a4c7136bef6d91a5858234faaaebdf0ca20eb5609d393f77518af->enter($__internal_03a6cd48089a4c7136bef6d91a5858234faaaebdf0ca20eb5609d393f77518af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_b112f046ba697a1ed3e89a9af872b5430f0166649a62422aeef9b3bce015034f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b112f046ba697a1ed3e89a9af872b5430f0166649a62422aeef9b3bce015034f->enter($__internal_b112f046ba697a1ed3e89a9af872b5430f0166649a62422aeef9b3bce015034f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a6cd48089a4c7136bef6d91a5858234faaaebdf0ca20eb5609d393f77518af->leave($__internal_03a6cd48089a4c7136bef6d91a5858234faaaebdf0ca20eb5609d393f77518af_prof);

        
        $__internal_b112f046ba697a1ed3e89a9af872b5430f0166649a62422aeef9b3bce015034f->leave($__internal_b112f046ba697a1ed3e89a9af872b5430f0166649a62422aeef9b3bce015034f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d7da6185bd50ca843e3601e08596fd71cea98eb7506653cf8e53724060aab2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7da6185bd50ca843e3601e08596fd71cea98eb7506653cf8e53724060aab2f->enter($__internal_5d7da6185bd50ca843e3601e08596fd71cea98eb7506653cf8e53724060aab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c5cbaad88b0b24994ea8ff4f56208147426dd36225fa07472f38868ecb4f69a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cbaad88b0b24994ea8ff4f56208147426dd36225fa07472f38868ecb4f69a8->enter($__internal_c5cbaad88b0b24994ea8ff4f56208147426dd36225fa07472f38868ecb4f69a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_c5cbaad88b0b24994ea8ff4f56208147426dd36225fa07472f38868ecb4f69a8->leave($__internal_c5cbaad88b0b24994ea8ff4f56208147426dd36225fa07472f38868ecb4f69a8_prof);

        
        $__internal_5d7da6185bd50ca843e3601e08596fd71cea98eb7506653cf8e53724060aab2f->leave($__internal_5d7da6185bd50ca843e3601e08596fd71cea98eb7506653cf8e53724060aab2f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
