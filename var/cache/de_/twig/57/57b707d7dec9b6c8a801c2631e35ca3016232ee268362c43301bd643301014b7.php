<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_f6c91684f1a26b4650ae88619a2327420a0ebb7381d778338edc17e648f9958d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_163857146b4f2b559d7f2ad3a8d93697acf4695f9e4d46a62f6d5ad16567bff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163857146b4f2b559d7f2ad3a8d93697acf4695f9e4d46a62f6d5ad16567bff2->enter($__internal_163857146b4f2b559d7f2ad3a8d93697acf4695f9e4d46a62f6d5ad16567bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_c404ae8015dfb2abc33f03ccccef3ecf5f7067c267f254cf92795a6b59c77d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c404ae8015dfb2abc33f03ccccef3ecf5f7067c267f254cf92795a6b59c77d35->enter($__internal_c404ae8015dfb2abc33f03ccccef3ecf5f7067c267f254cf92795a6b59c77d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163857146b4f2b559d7f2ad3a8d93697acf4695f9e4d46a62f6d5ad16567bff2->leave($__internal_163857146b4f2b559d7f2ad3a8d93697acf4695f9e4d46a62f6d5ad16567bff2_prof);

        
        $__internal_c404ae8015dfb2abc33f03ccccef3ecf5f7067c267f254cf92795a6b59c77d35->leave($__internal_c404ae8015dfb2abc33f03ccccef3ecf5f7067c267f254cf92795a6b59c77d35_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02ec2bb7f5fecffd197c0655a89cef249440d5cb223429ca8e075b772a2de147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ec2bb7f5fecffd197c0655a89cef249440d5cb223429ca8e075b772a2de147->enter($__internal_02ec2bb7f5fecffd197c0655a89cef249440d5cb223429ca8e075b772a2de147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6d0dab663a577549f4fa001be6a74cd9d814c2c25788c9e2a5907fed3d43b0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0dab663a577549f4fa001be6a74cd9d814c2c25788c9e2a5907fed3d43b0f0->enter($__internal_6d0dab663a577549f4fa001be6a74cd9d814c2c25788c9e2a5907fed3d43b0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array()), (isset($context["timezone"]) ? $context["timezone"] : $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_6d0dab663a577549f4fa001be6a74cd9d814c2c25788c9e2a5907fed3d43b0f0->leave($__internal_6d0dab663a577549f4fa001be6a74cd9d814c2c25788c9e2a5907fed3d43b0f0_prof);

        
        $__internal_02ec2bb7f5fecffd197c0655a89cef249440d5cb223429ca8e075b772a2de147->leave($__internal_02ec2bb7f5fecffd197c0655a89cef249440d5cb223429ca8e075b772a2de147_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
