<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_d7b5cdd69dcfedc9f38f5c8919b06125103d3ed2ca645714642fe59f30e082c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_dad3d22ca5db02f7e5ded6ccfa55cba86b4b7048cc4ddd5139e0a39a875d29d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad3d22ca5db02f7e5ded6ccfa55cba86b4b7048cc4ddd5139e0a39a875d29d8->enter($__internal_dad3d22ca5db02f7e5ded6ccfa55cba86b4b7048cc4ddd5139e0a39a875d29d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_22c53233ce28eee5a9463401f6c39dde2abb985e44bbb2e6c02c9cd4d723ea02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c53233ce28eee5a9463401f6c39dde2abb985e44bbb2e6c02c9cd4d723ea02->enter($__internal_22c53233ce28eee5a9463401f6c39dde2abb985e44bbb2e6c02c9cd4d723ea02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad3d22ca5db02f7e5ded6ccfa55cba86b4b7048cc4ddd5139e0a39a875d29d8->leave($__internal_dad3d22ca5db02f7e5ded6ccfa55cba86b4b7048cc4ddd5139e0a39a875d29d8_prof);

        
        $__internal_22c53233ce28eee5a9463401f6c39dde2abb985e44bbb2e6c02c9cd4d723ea02->leave($__internal_22c53233ce28eee5a9463401f6c39dde2abb985e44bbb2e6c02c9cd4d723ea02_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0f811fa7b19101dabaf86cd3749561080a6baf77db4a2d609bf7b23d44e28188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f811fa7b19101dabaf86cd3749561080a6baf77db4a2d609bf7b23d44e28188->enter($__internal_0f811fa7b19101dabaf86cd3749561080a6baf77db4a2d609bf7b23d44e28188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5347479d84a71ca45a60317792244e7c00f27fb58962b9c0dddf1527f47cda67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5347479d84a71ca45a60317792244e7c00f27fb58962b9c0dddf1527f47cda67->enter($__internal_5347479d84a71ca45a60317792244e7c00f27fb58962b9c0dddf1527f47cda67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5347479d84a71ca45a60317792244e7c00f27fb58962b9c0dddf1527f47cda67->leave($__internal_5347479d84a71ca45a60317792244e7c00f27fb58962b9c0dddf1527f47cda67_prof);

        
        $__internal_0f811fa7b19101dabaf86cd3749561080a6baf77db4a2d609bf7b23d44e28188->leave($__internal_0f811fa7b19101dabaf86cd3749561080a6baf77db4a2d609bf7b23d44e28188_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
