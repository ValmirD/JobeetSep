<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_440bd181720c6dc812b73449eeec479aee815fc918bf5814ff3eeedbe6660011 extends Twig_Template
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
        $__internal_466e5f5529b635c7555e95e8ac0c2bdee65bac6d8444e476a4f4a98b71361f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466e5f5529b635c7555e95e8ac0c2bdee65bac6d8444e476a4f4a98b71361f2f->enter($__internal_466e5f5529b635c7555e95e8ac0c2bdee65bac6d8444e476a4f4a98b71361f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5190568dfbc853b5e0671a7184715c10adf71b67da290319b9dc58021bb3a40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5190568dfbc853b5e0671a7184715c10adf71b67da290319b9dc58021bb3a40b->enter($__internal_5190568dfbc853b5e0671a7184715c10adf71b67da290319b9dc58021bb3a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_466e5f5529b635c7555e95e8ac0c2bdee65bac6d8444e476a4f4a98b71361f2f->leave($__internal_466e5f5529b635c7555e95e8ac0c2bdee65bac6d8444e476a4f4a98b71361f2f_prof);

        
        $__internal_5190568dfbc853b5e0671a7184715c10adf71b67da290319b9dc58021bb3a40b->leave($__internal_5190568dfbc853b5e0671a7184715c10adf71b67da290319b9dc58021bb3a40b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
