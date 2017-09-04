<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_4502d682c1569037f3ac1d78afa12ff600691be0401fbac795e78a8e508e07cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b95f620bc83feffc0934febe4a44d07d8be783b1e12d11cdba2ef4180fa6a1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95f620bc83feffc0934febe4a44d07d8be783b1e12d11cdba2ef4180fa6a1b7->enter($__internal_b95f620bc83feffc0934febe4a44d07d8be783b1e12d11cdba2ef4180fa6a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_678dbad8671bf296389012cc94b494f3fbca91b46ec4013909710ffc9bda0f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678dbad8671bf296389012cc94b494f3fbca91b46ec4013909710ffc9bda0f11->enter($__internal_678dbad8671bf296389012cc94b494f3fbca91b46ec4013909710ffc9bda0f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b95f620bc83feffc0934febe4a44d07d8be783b1e12d11cdba2ef4180fa6a1b7->leave($__internal_b95f620bc83feffc0934febe4a44d07d8be783b1e12d11cdba2ef4180fa6a1b7_prof);

        
        $__internal_678dbad8671bf296389012cc94b494f3fbca91b46ec4013909710ffc9bda0f11->leave($__internal_678dbad8671bf296389012cc94b494f3fbca91b46ec4013909710ffc9bda0f11_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_376b5bd0fbfe4657b2640996905fdcf64dfbc1fcd1b5c702a456cae0c2c503c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376b5bd0fbfe4657b2640996905fdcf64dfbc1fcd1b5c702a456cae0c2c503c9->enter($__internal_376b5bd0fbfe4657b2640996905fdcf64dfbc1fcd1b5c702a456cae0c2c503c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_6ee2f3db669a664e52b8da56510db937a6ed2bad2c45d8fe581e54206aa750fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee2f3db669a664e52b8da56510db937a6ed2bad2c45d8fe581e54206aa750fc->enter($__internal_6ee2f3db669a664e52b8da56510db937a6ed2bad2c45d8fe581e54206aa750fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_6ee2f3db669a664e52b8da56510db937a6ed2bad2c45d8fe581e54206aa750fc->leave($__internal_6ee2f3db669a664e52b8da56510db937a6ed2bad2c45d8fe581e54206aa750fc_prof);

        
        $__internal_376b5bd0fbfe4657b2640996905fdcf64dfbc1fcd1b5c702a456cae0c2c503c9->leave($__internal_376b5bd0fbfe4657b2640996905fdcf64dfbc1fcd1b5c702a456cae0c2c503c9_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_b08adb6c03146f29a0486617f9ce6fd75c7ad7cb074f109b809a1de855f1c23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08adb6c03146f29a0486617f9ce6fd75c7ad7cb074f109b809a1de855f1c23e->enter($__internal_b08adb6c03146f29a0486617f9ce6fd75c7ad7cb074f109b809a1de855f1c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2755466cfa504b43abdb95b2ca7362e4024b63d28635545c619d0e1cdb1dc5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2755466cfa504b43abdb95b2ca7362e4024b63d28635545c619d0e1cdb1dc5b4->enter($__internal_2755466cfa504b43abdb95b2ca7362e4024b63d28635545c619d0e1cdb1dc5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_2755466cfa504b43abdb95b2ca7362e4024b63d28635545c619d0e1cdb1dc5b4->leave($__internal_2755466cfa504b43abdb95b2ca7362e4024b63d28635545c619d0e1cdb1dc5b4_prof);

        
        $__internal_b08adb6c03146f29a0486617f9ce6fd75c7ad7cb074f109b809a1de855f1c23e->leave($__internal_b08adb6c03146f29a0486617f9ce6fd75c7ad7cb074f109b809a1de855f1c23e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
