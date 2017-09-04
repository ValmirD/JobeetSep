<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_5bc77bc3c4993e2a00902d6fb4570058978acece9f3690f65667efb4bc77101c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b69be3e71d0acf92d74202f63406cf546119de5461498706de5e3acc83ba3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b69be3e71d0acf92d74202f63406cf546119de5461498706de5e3acc83ba3c6->enter($__internal_7b69be3e71d0acf92d74202f63406cf546119de5461498706de5e3acc83ba3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_5eebb5271fd125eb09b143d4df46c44befd3b55ade7e92f502d966bd3b8bf2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eebb5271fd125eb09b143d4df46c44befd3b55ade7e92f502d966bd3b8bf2e3->enter($__internal_5eebb5271fd125eb09b143d4df46c44befd3b55ade7e92f502d966bd3b8bf2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b69be3e71d0acf92d74202f63406cf546119de5461498706de5e3acc83ba3c6->leave($__internal_7b69be3e71d0acf92d74202f63406cf546119de5461498706de5e3acc83ba3c6_prof);

        
        $__internal_5eebb5271fd125eb09b143d4df46c44befd3b55ade7e92f502d966bd3b8bf2e3->leave($__internal_5eebb5271fd125eb09b143d4df46c44befd3b55ade7e92f502d966bd3b8bf2e3_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_8ba98a89187df5c4c912b2aab18849be7fa6e09f16a589d3c9f5e984f636594f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba98a89187df5c4c912b2aab18849be7fa6e09f16a589d3c9f5e984f636594f->enter($__internal_8ba98a89187df5c4c912b2aab18849be7fa6e09f16a589d3c9f5e984f636594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_e6f16f42ee4813859de91c6e80588b0bd219aefa1afdf8bfaa12d560659df770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f16f42ee4813859de91c6e80588b0bd219aefa1afdf8bfaa12d560659df770->enter($__internal_e6f16f42ee4813859de91c6e80588b0bd219aefa1afdf8bfaa12d560659df770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_e6f16f42ee4813859de91c6e80588b0bd219aefa1afdf8bfaa12d560659df770->leave($__internal_e6f16f42ee4813859de91c6e80588b0bd219aefa1afdf8bfaa12d560659df770_prof);

        
        $__internal_8ba98a89187df5c4c912b2aab18849be7fa6e09f16a589d3c9f5e984f636594f->leave($__internal_8ba98a89187df5c4c912b2aab18849be7fa6e09f16a589d3c9f5e984f636594f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
