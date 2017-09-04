<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_3983fcf94c7505200cdc06adbd27ed7d1c83ac14df2ce3ede8afb99d773f5e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_93bbb66c34f4a4d220ccd9d9f905334bb367e9fe5524e98d4c0b2d5843ef8d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bbb66c34f4a4d220ccd9d9f905334bb367e9fe5524e98d4c0b2d5843ef8d4e->enter($__internal_93bbb66c34f4a4d220ccd9d9f905334bb367e9fe5524e98d4c0b2d5843ef8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_9d3e1e1e7737c521c906f3bea10a941ef841cc2db98f6adc48c79fdfa7a319a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3e1e1e7737c521c906f3bea10a941ef841cc2db98f6adc48c79fdfa7a319a0->enter($__internal_9d3e1e1e7737c521c906f3bea10a941ef841cc2db98f6adc48c79fdfa7a319a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bbb66c34f4a4d220ccd9d9f905334bb367e9fe5524e98d4c0b2d5843ef8d4e->leave($__internal_93bbb66c34f4a4d220ccd9d9f905334bb367e9fe5524e98d4c0b2d5843ef8d4e_prof);

        
        $__internal_9d3e1e1e7737c521c906f3bea10a941ef841cc2db98f6adc48c79fdfa7a319a0->leave($__internal_9d3e1e1e7737c521c906f3bea10a941ef841cc2db98f6adc48c79fdfa7a319a0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_908bfafe5d73b692c6d770f81358e4df8b8d12806d23ae0233b2365e991553b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908bfafe5d73b692c6d770f81358e4df8b8d12806d23ae0233b2365e991553b7->enter($__internal_908bfafe5d73b692c6d770f81358e4df8b8d12806d23ae0233b2365e991553b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fa7160dec3ee5397a008362b4cc3db6951a0ee8a791d13baf9f5cf60010e4a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7160dec3ee5397a008362b4cc3db6951a0ee8a791d13baf9f5cf60010e4a74->enter($__internal_fa7160dec3ee5397a008362b4cc3db6951a0ee8a791d13baf9f5cf60010e4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_fa7160dec3ee5397a008362b4cc3db6951a0ee8a791d13baf9f5cf60010e4a74->leave($__internal_fa7160dec3ee5397a008362b4cc3db6951a0ee8a791d13baf9f5cf60010e4a74_prof);

        
        $__internal_908bfafe5d73b692c6d770f81358e4df8b8d12806d23ae0233b2365e991553b7->leave($__internal_908bfafe5d73b692c6d770f81358e4df8b8d12806d23ae0233b2365e991553b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
