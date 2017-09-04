<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_5c00e01bf5ab5610b0259a8f83a9cbd17b549bba550a63c21946e7f99d886d12 extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78258119d0ec98dfa63dad7b24d8f2ad40ab3f4ccd9e3b3f29ff27d5276b5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78258119d0ec98dfa63dad7b24d8f2ad40ab3f4ccd9e3b3f29ff27d5276b5c2->enter($__internal_f78258119d0ec98dfa63dad7b24d8f2ad40ab3f4ccd9e3b3f29ff27d5276b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $__internal_43a7493b3fba31d7581e1362f1aeeae056b0c598ed27d8d985578914c2411f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a7493b3fba31d7581e1362f1aeeae056b0c598ed27d8d985578914c2411f27->enter($__internal_43a7493b3fba31d7581e1362f1aeeae056b0c598ed27d8d985578914c2411f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f78258119d0ec98dfa63dad7b24d8f2ad40ab3f4ccd9e3b3f29ff27d5276b5c2->leave($__internal_f78258119d0ec98dfa63dad7b24d8f2ad40ab3f4ccd9e3b3f29ff27d5276b5c2_prof);

        
        $__internal_43a7493b3fba31d7581e1362f1aeeae056b0c598ed27d8d985578914c2411f27->leave($__internal_43a7493b3fba31d7581e1362f1aeeae056b0c598ed27d8d985578914c2411f27_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_33dc747434f4f45fd112c3345d398947cfac571f9607e1c4a2c9ee3c63f6b396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dc747434f4f45fd112c3345d398947cfac571f9607e1c4a2c9ee3c63f6b396->enter($__internal_33dc747434f4f45fd112c3345d398947cfac571f9607e1c4a2c9ee3c63f6b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a9b94c68103b1264fd900486d515ec1416657414a706ef7597e995862362ee05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b94c68103b1264fd900486d515ec1416657414a706ef7597e995862362ee05->enter($__internal_a9b94c68103b1264fd900486d515ec1416657414a706ef7597e995862362ee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a9b94c68103b1264fd900486d515ec1416657414a706ef7597e995862362ee05->leave($__internal_a9b94c68103b1264fd900486d515ec1416657414a706ef7597e995862362ee05_prof);

        
        $__internal_33dc747434f4f45fd112c3345d398947cfac571f9607e1c4a2c9ee3c63f6b396->leave($__internal_33dc747434f4f45fd112c3345d398947cfac571f9607e1c4a2c9ee3c63f6b396_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
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
", "SonataAdminBundle:CRUD:list_html.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
