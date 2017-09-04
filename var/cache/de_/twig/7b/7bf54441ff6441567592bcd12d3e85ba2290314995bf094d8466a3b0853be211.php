<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_549cff26382c3dd53daa97adb17049c25f3c330bc712f063650466881d7716a8 extends Twig_Template
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
        $__internal_e01e81327a049e915893afd8b8d88fe1abf18c866fbe8ec0543b4d60586107d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01e81327a049e915893afd8b8d88fe1abf18c866fbe8ec0543b4d60586107d3->enter($__internal_e01e81327a049e915893afd8b8d88fe1abf18c866fbe8ec0543b4d60586107d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_c1d3ccb945ceca74c65ecce293f9513bd60adb034bcf337161d71c411f3aadc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d3ccb945ceca74c65ecce293f9513bd60adb034bcf337161d71c411f3aadc0->enter($__internal_c1d3ccb945ceca74c65ecce293f9513bd60adb034bcf337161d71c411f3aadc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_e01e81327a049e915893afd8b8d88fe1abf18c866fbe8ec0543b4d60586107d3->leave($__internal_e01e81327a049e915893afd8b8d88fe1abf18c866fbe8ec0543b4d60586107d3_prof);

        
        $__internal_c1d3ccb945ceca74c65ecce293f9513bd60adb034bcf337161d71c411f3aadc0->leave($__internal_c1d3ccb945ceca74c65ecce293f9513bd60adb034bcf337161d71c411f3aadc0_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_146ad0c37c2873258fffb0a93470f74c4c0c3e7160dfaef902e3b8e2d787bf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146ad0c37c2873258fffb0a93470f74c4c0c3e7160dfaef902e3b8e2d787bf96->enter($__internal_146ad0c37c2873258fffb0a93470f74c4c0c3e7160dfaef902e3b8e2d787bf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f770ddfefca67f7b3b98439ec487ca2d52bb3571ea4dee440493772a7f7d761f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f770ddfefca67f7b3b98439ec487ca2d52bb3571ea4dee440493772a7f7d761f->enter($__internal_f770ddfefca67f7b3b98439ec487ca2d52bb3571ea4dee440493772a7f7d761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_f770ddfefca67f7b3b98439ec487ca2d52bb3571ea4dee440493772a7f7d761f->leave($__internal_f770ddfefca67f7b3b98439ec487ca2d52bb3571ea4dee440493772a7f7d761f_prof);

        
        $__internal_146ad0c37c2873258fffb0a93470f74c4c0c3e7160dfaef902e3b8e2d787bf96->leave($__internal_146ad0c37c2873258fffb0a93470f74c4c0c3e7160dfaef902e3b8e2d787bf96_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_5bd5274bc55cfe880e9387568a8bd0e95086521595d613eba17cde6bb9c32e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd5274bc55cfe880e9387568a8bd0e95086521595d613eba17cde6bb9c32e42->enter($__internal_5bd5274bc55cfe880e9387568a8bd0e95086521595d613eba17cde6bb9c32e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_23b0e38d2b0cd91f1db6996a1458d6096b97ee6245c3d87052c2fe262493434a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b0e38d2b0cd91f1db6996a1458d6096b97ee6245c3d87052c2fe262493434a->enter($__internal_23b0e38d2b0cd91f1db6996a1458d6096b97ee6245c3d87052c2fe262493434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_23b0e38d2b0cd91f1db6996a1458d6096b97ee6245c3d87052c2fe262493434a->leave($__internal_23b0e38d2b0cd91f1db6996a1458d6096b97ee6245c3d87052c2fe262493434a_prof);

        
        $__internal_5bd5274bc55cfe880e9387568a8bd0e95086521595d613eba17cde6bb9c32e42->leave($__internal_5bd5274bc55cfe880e9387568a8bd0e95086521595d613eba17cde6bb9c32e42_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
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
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
