<?php

/* @SonataAdmin/CRUD/Association/show_one_to_one.html.twig */
class __TwigTemplate_bae2a82021f040d8a32c5461610d9ff1896dbd39813e3758eaf21e2b5482259c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/Association/show_one_to_one.html.twig", 12);
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
        $__internal_d276f9b68c8792d80a0a51cf21a8ce72ccc5feefd2a36110e20aaad2281f71de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d276f9b68c8792d80a0a51cf21a8ce72ccc5feefd2a36110e20aaad2281f71de->enter($__internal_d276f9b68c8792d80a0a51cf21a8ce72ccc5feefd2a36110e20aaad2281f71de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/show_one_to_one.html.twig"));

        $__internal_3691b496bf12323268de06f9100b0b864c579f14ed9f81dcb0f11ff07f3258e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3691b496bf12323268de06f9100b0b864c579f14ed9f81dcb0f11ff07f3258e4->enter($__internal_3691b496bf12323268de06f9100b0b864c579f14ed9f81dcb0f11ff07f3258e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/show_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d276f9b68c8792d80a0a51cf21a8ce72ccc5feefd2a36110e20aaad2281f71de->leave($__internal_d276f9b68c8792d80a0a51cf21a8ce72ccc5feefd2a36110e20aaad2281f71de_prof);

        
        $__internal_3691b496bf12323268de06f9100b0b864c579f14ed9f81dcb0f11ff07f3258e4->leave($__internal_3691b496bf12323268de06f9100b0b864c579f14ed9f81dcb0f11ff07f3258e4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3816a5f5c1295adbde0bb4c707319e1a29fa093737cd897cafcc6d12878a1e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3816a5f5c1295adbde0bb4c707319e1a29fa093737cd897cafcc6d12878a1e95->enter($__internal_3816a5f5c1295adbde0bb4c707319e1a29fa093737cd897cafcc6d12878a1e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9ac52a7552b4f3f597aede570f163cb5cdf591330003a5a16ea964d1620842ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac52a7552b4f3f597aede570f163cb5cdf591330003a5a16ea964d1620842ac->enter($__internal_9ac52a7552b4f3f597aede570f163cb5cdf591330003a5a16ea964d1620842ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(        // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(        // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9ac52a7552b4f3f597aede570f163cb5cdf591330003a5a16ea964d1620842ac->leave($__internal_9ac52a7552b4f3f597aede570f163cb5cdf591330003a5a16ea964d1620842ac_prof);

        
        $__internal_3816a5f5c1295adbde0bb4c707319e1a29fa093737cd897cafcc6d12878a1e95->leave($__internal_3816a5f5c1295adbde0bb4c707319e1a29fa093737cd897cafcc6d12878a1e95_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/show_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  58 => 20,  56 => 19,  55 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/Association/show_one_to_one.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\show_one_to_one.html.twig");
    }
}
