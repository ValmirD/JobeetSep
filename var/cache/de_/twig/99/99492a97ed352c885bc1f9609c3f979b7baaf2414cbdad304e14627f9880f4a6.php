<?php

/* @SonataAdmin/CRUD/Association/list_one_to_one.html.twig */
class __TwigTemplate_eadb3cf34217c93f3f15261ffc57213e32e484836532ba3e3a97ce7736d57976 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/Association/list_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3246f5be38e99a5622ef4fa07392e11731b391f93542c9d19e9f3d257562cdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3246f5be38e99a5622ef4fa07392e11731b391f93542c9d19e9f3d257562cdc1->enter($__internal_3246f5be38e99a5622ef4fa07392e11731b391f93542c9d19e9f3d257562cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_one_to_one.html.twig"));

        $__internal_94c106f0380b3abae6bf963941f1d3a9a233e914a72ba2025e4a8e23f27c00f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c106f0380b3abae6bf963941f1d3a9a233e914a72ba2025e4a8e23f27c00f3->enter($__internal_94c106f0380b3abae6bf963941f1d3a9a233e914a72ba2025e4a8e23f27c00f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3246f5be38e99a5622ef4fa07392e11731b391f93542c9d19e9f3d257562cdc1->leave($__internal_3246f5be38e99a5622ef4fa07392e11731b391f93542c9d19e9f3d257562cdc1_prof);

        
        $__internal_94c106f0380b3abae6bf963941f1d3a9a233e914a72ba2025e4a8e23f27c00f3->leave($__internal_94c106f0380b3abae6bf963941f1d3a9a233e914a72ba2025e4a8e23f27c00f3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c8c02faed1f1beae812a1a6201b50e0a67d9e834f5300fb8f8d4dea42197ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8c02faed1f1beae812a1a6201b50e0a67d9e834f5300fb8f8d4dea42197ca2->enter($__internal_6c8c02faed1f1beae812a1a6201b50e0a67d9e834f5300fb8f8d4dea42197ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a3364a48eee76cc5e9bcb25ffd7538e3fa759ed12001d6dd4020787545c5aac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3364a48eee76cc5e9bcb25ffd7538e3fa759ed12001d6dd4020787545c5aac1->enter($__internal_a3364a48eee76cc5e9bcb25ffd7538e3fa759ed12001d6dd4020787545c5aac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a3364a48eee76cc5e9bcb25ffd7538e3fa759ed12001d6dd4020787545c5aac1->leave($__internal_a3364a48eee76cc5e9bcb25ffd7538e3fa759ed12001d6dd4020787545c5aac1_prof);

        
        $__internal_6c8c02faed1f1beae812a1a6201b50e0a67d9e834f5300fb8f8d4dea42197ca2->leave($__internal_6c8c02faed1f1beae812a1a6201b50e0a67d9e834f5300fb8f8d4dea42197ca2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/list_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 20,  55 => 19,  54 => 18,  53 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/Association/list_one_to_one.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\list_one_to_one.html.twig");
    }
}
