<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0fefc077d5117397e68fb9df73d3eef4d78257152fd64256f10a8bbfedd8ee8e extends Twig_Template
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
        $__internal_bc11acbceb635aac75aeecdc6245e30ee6c488ce4b6cf80cfda4e1dedfca7921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc11acbceb635aac75aeecdc6245e30ee6c488ce4b6cf80cfda4e1dedfca7921->enter($__internal_bc11acbceb635aac75aeecdc6245e30ee6c488ce4b6cf80cfda4e1dedfca7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d9c8f60b0530a54d0370f21206d15ba7254525ef1f0629669cef11177ed8b933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c8f60b0530a54d0370f21206d15ba7254525ef1f0629669cef11177ed8b933->enter($__internal_d9c8f60b0530a54d0370f21206d15ba7254525ef1f0629669cef11177ed8b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc11acbceb635aac75aeecdc6245e30ee6c488ce4b6cf80cfda4e1dedfca7921->leave($__internal_bc11acbceb635aac75aeecdc6245e30ee6c488ce4b6cf80cfda4e1dedfca7921_prof);

        
        $__internal_d9c8f60b0530a54d0370f21206d15ba7254525ef1f0629669cef11177ed8b933->leave($__internal_d9c8f60b0530a54d0370f21206d15ba7254525ef1f0629669cef11177ed8b933_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
