<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_6bf370cba990ac3a66fb6fc2a3f5198fdcb4993c881430069d4edf8f08d0630f extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed5ee591716013578405e66f0ed1a2af9ffc9e7bf813498ce22ed05da7d90c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed5ee591716013578405e66f0ed1a2af9ffc9e7bf813498ce22ed05da7d90c9->enter($__internal_0ed5ee591716013578405e66f0ed1a2af9ffc9e7bf813498ce22ed05da7d90c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_576091ff4cbe429d59fdc0b1d0988837d9f2f8a6d5a706521b2083d47cf8db33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576091ff4cbe429d59fdc0b1d0988837d9f2f8a6d5a706521b2083d47cf8db33->enter($__internal_576091ff4cbe429d59fdc0b1d0988837d9f2f8a6d5a706521b2083d47cf8db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed5ee591716013578405e66f0ed1a2af9ffc9e7bf813498ce22ed05da7d90c9->leave($__internal_0ed5ee591716013578405e66f0ed1a2af9ffc9e7bf813498ce22ed05da7d90c9_prof);

        
        $__internal_576091ff4cbe429d59fdc0b1d0988837d9f2f8a6d5a706521b2083d47cf8db33->leave($__internal_576091ff4cbe429d59fdc0b1d0988837d9f2f8a6d5a706521b2083d47cf8db33_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_69d27f9ad4b7722bf4322ce2a506fb55c2b5e5522a6d07de9de90299903e179e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d27f9ad4b7722bf4322ce2a506fb55c2b5e5522a6d07de9de90299903e179e->enter($__internal_69d27f9ad4b7722bf4322ce2a506fb55c2b5e5522a6d07de9de90299903e179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_07a682ed723198c684cfafc5e13353456e4f11cfb025059d6d693df90a05db57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a682ed723198c684cfafc5e13353456e4f11cfb025059d6d693df90a05db57->enter($__internal_07a682ed723198c684cfafc5e13353456e4f11cfb025059d6d693df90a05db57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_07a682ed723198c684cfafc5e13353456e4f11cfb025059d6d693df90a05db57->leave($__internal_07a682ed723198c684cfafc5e13353456e4f11cfb025059d6d693df90a05db57_prof);

        
        $__internal_69d27f9ad4b7722bf4322ce2a506fb55c2b5e5522a6d07de9de90299903e179e->leave($__internal_69d27f9ad4b7722bf4322ce2a506fb55c2b5e5522a6d07de9de90299903e179e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
