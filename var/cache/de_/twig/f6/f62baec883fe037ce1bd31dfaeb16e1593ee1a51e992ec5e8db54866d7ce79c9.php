<?php

/* @SonataAdmin/CRUD/Association/show_many_to_one.html.twig */
class __TwigTemplate_3c5566350e6fa96648c4935112eb32be0aec6a828f7b1c88d42b5c671c3ec962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig", 12);
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
        $__internal_b8925412a28e8ac06da1b4fa8e8afc088a15e73594cee19edb771f7503840e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8925412a28e8ac06da1b4fa8e8afc088a15e73594cee19edb771f7503840e8b->enter($__internal_b8925412a28e8ac06da1b4fa8e8afc088a15e73594cee19edb771f7503840e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig"));

        $__internal_4cba56087c98b879a1899a079557bd92db046af47a0509d56dd4d021c39b5af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cba56087c98b879a1899a079557bd92db046af47a0509d56dd4d021c39b5af4->enter($__internal_4cba56087c98b879a1899a079557bd92db046af47a0509d56dd4d021c39b5af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8925412a28e8ac06da1b4fa8e8afc088a15e73594cee19edb771f7503840e8b->leave($__internal_b8925412a28e8ac06da1b4fa8e8afc088a15e73594cee19edb771f7503840e8b_prof);

        
        $__internal_4cba56087c98b879a1899a079557bd92db046af47a0509d56dd4d021c39b5af4->leave($__internal_4cba56087c98b879a1899a079557bd92db046af47a0509d56dd4d021c39b5af4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc5ad2d62abb73f6f0cb19905b597e91111c751ee660b6aa20ac9411b49aba24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5ad2d62abb73f6f0cb19905b597e91111c751ee660b6aa20ac9411b49aba24->enter($__internal_cc5ad2d62abb73f6f0cb19905b597e91111c751ee660b6aa20ac9411b49aba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e5996050715e6804f9407e7c9af585055c16787012d59785d35c8ed65acb8dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5996050715e6804f9407e7c9af585055c16787012d59785d35c8ed65acb8dff->enter($__internal_e5996050715e6804f9407e7c9af585055c16787012d59785d35c8ed65acb8dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(            // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "            <a href=\"";
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
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        
        $__internal_e5996050715e6804f9407e7c9af585055c16787012d59785d35c8ed65acb8dff->leave($__internal_e5996050715e6804f9407e7c9af585055c16787012d59785d35c8ed65acb8dff_prof);

        
        $__internal_cc5ad2d62abb73f6f0cb19905b597e91111c751ee660b6aa20ac9411b49aba24->leave($__internal_cc5ad2d62abb73f6f0cb19905b597e91111c751ee660b6aa20ac9411b49aba24_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  65 => 21,  60 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\show_many_to_one.html.twig");
    }
}
