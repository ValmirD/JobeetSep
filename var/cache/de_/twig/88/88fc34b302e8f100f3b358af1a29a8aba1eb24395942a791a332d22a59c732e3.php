<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_68c9ef485396cfa06f755af26aba1349b4a66c0a2aa6e17446aff365d384fcc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_0b4567ecf34309b385dfe83a11b21f42b455781a3d9d53d6670835fe03751a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4567ecf34309b385dfe83a11b21f42b455781a3d9d53d6670835fe03751a9f->enter($__internal_0b4567ecf34309b385dfe83a11b21f42b455781a3d9d53d6670835fe03751a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_dce0feac2154792d0174fad350b8d1d86592d1d1fd7c18f94ac0cc1ead15dd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce0feac2154792d0174fad350b8d1d86592d1d1fd7c18f94ac0cc1ead15dd09->enter($__internal_dce0feac2154792d0174fad350b8d1d86592d1d1fd7c18f94ac0cc1ead15dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4567ecf34309b385dfe83a11b21f42b455781a3d9d53d6670835fe03751a9f->leave($__internal_0b4567ecf34309b385dfe83a11b21f42b455781a3d9d53d6670835fe03751a9f_prof);

        
        $__internal_dce0feac2154792d0174fad350b8d1d86592d1d1fd7c18f94ac0cc1ead15dd09->leave($__internal_dce0feac2154792d0174fad350b8d1d86592d1d1fd7c18f94ac0cc1ead15dd09_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e30fedf3257a7d800056c92637a849dace0b5ae7890aa27c8672fa638b909f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30fedf3257a7d800056c92637a849dace0b5ae7890aa27c8672fa638b909f33->enter($__internal_e30fedf3257a7d800056c92637a849dace0b5ae7890aa27c8672fa638b909f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f497dfc3d9598a5dfbbaefd6ebf07b1754603d527250555a7002d97f030e7576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f497dfc3d9598a5dfbbaefd6ebf07b1754603d527250555a7002d97f030e7576->enter($__internal_f497dfc3d9598a5dfbbaefd6ebf07b1754603d527250555a7002d97f030e7576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f497dfc3d9598a5dfbbaefd6ebf07b1754603d527250555a7002d97f030e7576->leave($__internal_f497dfc3d9598a5dfbbaefd6ebf07b1754603d527250555a7002d97f030e7576_prof);

        
        $__internal_e30fedf3257a7d800056c92637a849dace0b5ae7890aa27c8672fa638b909f33->leave($__internal_e30fedf3257a7d800056c92637a849dace0b5ae7890aa27c8672fa638b909f33_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
