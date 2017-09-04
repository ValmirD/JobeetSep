<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_058ec39ddef484e8113f27536922e17a187a0d72991d5564b3d20d01a44f5753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed4bb2d75fa86481cebb9f8afec9f5604a4bb4b2c01863d292960f4eb4af644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed4bb2d75fa86481cebb9f8afec9f5604a4bb4b2c01863d292960f4eb4af644->enter($__internal_1ed4bb2d75fa86481cebb9f8afec9f5604a4bb4b2c01863d292960f4eb4af644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b6c98d65756930e91ea5291d1ec6375f5ecc0860ce5225091798ed70c38ee305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c98d65756930e91ea5291d1ec6375f5ecc0860ce5225091798ed70c38ee305->enter($__internal_b6c98d65756930e91ea5291d1ec6375f5ecc0860ce5225091798ed70c38ee305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ed4bb2d75fa86481cebb9f8afec9f5604a4bb4b2c01863d292960f4eb4af644->leave($__internal_1ed4bb2d75fa86481cebb9f8afec9f5604a4bb4b2c01863d292960f4eb4af644_prof);

        
        $__internal_b6c98d65756930e91ea5291d1ec6375f5ecc0860ce5225091798ed70c38ee305->leave($__internal_b6c98d65756930e91ea5291d1ec6375f5ecc0860ce5225091798ed70c38ee305_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
