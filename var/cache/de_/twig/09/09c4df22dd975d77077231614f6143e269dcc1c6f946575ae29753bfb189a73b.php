<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_19f01efc74a893548a99f2bdcf8a0d416c1fd3b68dd43ed45ac3165e95a45b1c extends Twig_Template
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
        $__internal_1b240c74c8549d717eb9fb0543039da7458ad86ff15e1cb996170198a3002b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b240c74c8549d717eb9fb0543039da7458ad86ff15e1cb996170198a3002b18->enter($__internal_1b240c74c8549d717eb9fb0543039da7458ad86ff15e1cb996170198a3002b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4398f2ba0cf9d98c23761ad65d6099961eae69275310085a73cd3e116b1592f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4398f2ba0cf9d98c23761ad65d6099961eae69275310085a73cd3e116b1592f6->enter($__internal_4398f2ba0cf9d98c23761ad65d6099961eae69275310085a73cd3e116b1592f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1b240c74c8549d717eb9fb0543039da7458ad86ff15e1cb996170198a3002b18->leave($__internal_1b240c74c8549d717eb9fb0543039da7458ad86ff15e1cb996170198a3002b18_prof);

        
        $__internal_4398f2ba0cf9d98c23761ad65d6099961eae69275310085a73cd3e116b1592f6->leave($__internal_4398f2ba0cf9d98c23761ad65d6099961eae69275310085a73cd3e116b1592f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
