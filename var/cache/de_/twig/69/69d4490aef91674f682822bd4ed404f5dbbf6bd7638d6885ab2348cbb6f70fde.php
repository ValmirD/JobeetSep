<?php

/* SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig */
class __TwigTemplate_fb3d5d4697526cd7145772cc9db764c58d94d2d27eafe0b97c0a073d5d01d8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", 12);
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
        $__internal_d85ee9c1e31691d11780f4a713c68ccd76cc1980a7bf3c3d1261b66b8d3e8bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85ee9c1e31691d11780f4a713c68ccd76cc1980a7bf3c3d1261b66b8d3e8bb7->enter($__internal_d85ee9c1e31691d11780f4a713c68ccd76cc1980a7bf3c3d1261b66b8d3e8bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $__internal_4e8a3d9c2bcf7ef6c75b8e8330f33597138c927451c3c1a8adb7ad68dc829121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8a3d9c2bcf7ef6c75b8e8330f33597138c927451c3c1a8adb7ad68dc829121->enter($__internal_4e8a3d9c2bcf7ef6c75b8e8330f33597138c927451c3c1a8adb7ad68dc829121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85ee9c1e31691d11780f4a713c68ccd76cc1980a7bf3c3d1261b66b8d3e8bb7->leave($__internal_d85ee9c1e31691d11780f4a713c68ccd76cc1980a7bf3c3d1261b66b8d3e8bb7_prof);

        
        $__internal_4e8a3d9c2bcf7ef6c75b8e8330f33597138c927451c3c1a8adb7ad68dc829121->leave($__internal_4e8a3d9c2bcf7ef6c75b8e8330f33597138c927451c3c1a8adb7ad68dc829121_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c07c8b50e4bb8c5976e60fca6c7551228e706082643cd93e75a218de400b317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c07c8b50e4bb8c5976e60fca6c7551228e706082643cd93e75a218de400b317->enter($__internal_6c07c8b50e4bb8c5976e60fca6c7551228e706082643cd93e75a218de400b317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_99f6483e79524b9245cb8bd99967e05f82892c7a2de8be4a406a55df173c1886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f6483e79524b9245cb8bd99967e05f82892c7a2de8be4a406a55df173c1886->enter($__internal_99f6483e79524b9245cb8bd99967e05f82892c7a2de8be4a406a55df173c1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 21
                echo "            <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 27
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_99f6483e79524b9245cb8bd99967e05f82892c7a2de8be4a406a55df173c1886->leave($__internal_99f6483e79524b9245cb8bd99967e05f82892c7a2de8be4a406a55df173c1886_prof);

        
        $__internal_6c07c8b50e4bb8c5976e60fca6c7551228e706082643cd93e75a218de400b317->leave($__internal_6c07c8b50e4bb8c5976e60fca6c7551228e706082643cd93e75a218de400b317_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 29,  78 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, element) %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/Association/show_one_to_many.html.twig");
    }
}
