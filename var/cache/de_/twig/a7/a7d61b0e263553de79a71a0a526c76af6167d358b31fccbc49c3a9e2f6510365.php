<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_aea68edd1bbef425a99abce8297b1aaf72ff10d7289148b454d3c7ed55a2a542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_1032e99798b49a56adbd8cb43f6c0d807bdde35f32e0220a894dcf851312c5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1032e99798b49a56adbd8cb43f6c0d807bdde35f32e0220a894dcf851312c5a2->enter($__internal_1032e99798b49a56adbd8cb43f6c0d807bdde35f32e0220a894dcf851312c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $__internal_b1fc82953ad0003ddd7097df14e198e38156300f87e17912457249efad46cd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fc82953ad0003ddd7097df14e198e38156300f87e17912457249efad46cd5f->enter($__internal_b1fc82953ad0003ddd7097df14e198e38156300f87e17912457249efad46cd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1032e99798b49a56adbd8cb43f6c0d807bdde35f32e0220a894dcf851312c5a2->leave($__internal_1032e99798b49a56adbd8cb43f6c0d807bdde35f32e0220a894dcf851312c5a2_prof);

        
        $__internal_b1fc82953ad0003ddd7097df14e198e38156300f87e17912457249efad46cd5f->leave($__internal_b1fc82953ad0003ddd7097df14e198e38156300f87e17912457249efad46cd5f_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_54c526dd4fb44a21a2f08e0831c174069652f557682ac4d97042ae10aa760384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c526dd4fb44a21a2f08e0831c174069652f557682ac4d97042ae10aa760384->enter($__internal_54c526dd4fb44a21a2f08e0831c174069652f557682ac4d97042ae10aa760384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_87d2c427253934f1f2e9705d2993e1d1a03d67ce371af9a87f5fc0c2693aa332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d2c427253934f1f2e9705d2993e1d1a03d67ce371af9a87f5fc0c2693aa332->enter($__internal_87d2c427253934f1f2e9705d2993e1d1a03d67ce371af9a87f5fc0c2693aa332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_87d2c427253934f1f2e9705d2993e1d1a03d67ce371af9a87f5fc0c2693aa332->leave($__internal_87d2c427253934f1f2e9705d2993e1d1a03d67ce371af9a87f5fc0c2693aa332_prof);

        
        $__internal_54c526dd4fb44a21a2f08e0831c174069652f557682ac4d97042ae10aa760384->leave($__internal_54c526dd4fb44a21a2f08e0831c174069652f557682ac4d97042ae10aa760384_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
