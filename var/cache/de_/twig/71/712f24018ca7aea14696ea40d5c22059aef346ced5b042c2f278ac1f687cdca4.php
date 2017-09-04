<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_dc406fc371c842cfce8575058db498320d050153bf1c4649c4976f4bdc544140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eceee39b0370abb0441d376321fc484186c135cac1b374eb9835db47f5b3273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eceee39b0370abb0441d376321fc484186c135cac1b374eb9835db47f5b3273->enter($__internal_7eceee39b0370abb0441d376321fc484186c135cac1b374eb9835db47f5b3273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        $__internal_06ba51c73bf30dd17701c435dd140e6ca666a4aeaad23d411eb38ee3600ffd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ba51c73bf30dd17701c435dd140e6ca666a4aeaad23d411eb38ee3600ffd44->enter($__internal_06ba51c73bf30dd17701c435dd140e6ca666a4aeaad23d411eb38ee3600ffd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_7eceee39b0370abb0441d376321fc484186c135cac1b374eb9835db47f5b3273->leave($__internal_7eceee39b0370abb0441d376321fc484186c135cac1b374eb9835db47f5b3273_prof);

        
        $__internal_06ba51c73bf30dd17701c435dd140e6ca666a4aeaad23d411eb38ee3600ffd44->leave($__internal_06ba51c73bf30dd17701c435dd140e6ca666a4aeaad23d411eb38ee3600ffd44_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_2fe04d8d070339acbb448cf764b2f38a8045270888d9736542827393d510b7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe04d8d070339acbb448cf764b2f38a8045270888d9736542827393d510b7ae->enter($__internal_2fe04d8d070339acbb448cf764b2f38a8045270888d9736542827393d510b7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_be105fac60c9a4918b62637f1b7b40212c16eb058800f9f91941a7aa489ee9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be105fac60c9a4918b62637f1b7b40212c16eb058800f9f91941a7aa489ee9d5->enter($__internal_be105fac60c9a4918b62637f1b7b40212c16eb058800f9f91941a7aa489ee9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_be105fac60c9a4918b62637f1b7b40212c16eb058800f9f91941a7aa489ee9d5->leave($__internal_be105fac60c9a4918b62637f1b7b40212c16eb058800f9f91941a7aa489ee9d5_prof);

        
        $__internal_2fe04d8d070339acbb448cf764b2f38a8045270888d9736542827393d510b7ae->leave($__internal_2fe04d8d070339acbb448cf764b2f38a8045270888d9736542827393d510b7ae_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_72703b300fedd55dd190878fbfba46ae67c979671d81ad2db38753b227920fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72703b300fedd55dd190878fbfba46ae67c979671d81ad2db38753b227920fec->enter($__internal_72703b300fedd55dd190878fbfba46ae67c979671d81ad2db38753b227920fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d5abcc8ae039df13b685caacddf2c97a2eaa7348edddd2994689e336baa18975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5abcc8ae039df13b685caacddf2c97a2eaa7348edddd2994689e336baa18975->enter($__internal_d5abcc8ae039df13b685caacddf2c97a2eaa7348edddd2994689e336baa18975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_d5abcc8ae039df13b685caacddf2c97a2eaa7348edddd2994689e336baa18975->leave($__internal_d5abcc8ae039df13b685caacddf2c97a2eaa7348edddd2994689e336baa18975_prof);

        
        $__internal_72703b300fedd55dd190878fbfba46ae67c979671d81ad2db38753b227920fec->leave($__internal_72703b300fedd55dd190878fbfba46ae67c979671d81ad2db38753b227920fec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_filter_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_filter_field.html.twig");
    }
}
