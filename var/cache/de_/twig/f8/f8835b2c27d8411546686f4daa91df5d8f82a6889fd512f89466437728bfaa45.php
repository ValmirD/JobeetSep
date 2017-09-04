<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_63c237125227da444b15467d4c36dfe01e46186b5ad6c77ce40eab49fd2ea86d extends Twig_Template
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
        $__internal_829b3117bc1d5a9ee325d0ad4674ce3b9004560130c18df4059e6d79cf45f78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829b3117bc1d5a9ee325d0ad4674ce3b9004560130c18df4059e6d79cf45f78b->enter($__internal_829b3117bc1d5a9ee325d0ad4674ce3b9004560130c18df4059e6d79cf45f78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_95faeef1e9230e4c716a353450fcd6d3fe917084c8deed1e67eb17dd04ced26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95faeef1e9230e4c716a353450fcd6d3fe917084c8deed1e67eb17dd04ced26b->enter($__internal_95faeef1e9230e4c716a353450fcd6d3fe917084c8deed1e67eb17dd04ced26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_829b3117bc1d5a9ee325d0ad4674ce3b9004560130c18df4059e6d79cf45f78b->leave($__internal_829b3117bc1d5a9ee325d0ad4674ce3b9004560130c18df4059e6d79cf45f78b_prof);

        
        $__internal_95faeef1e9230e4c716a353450fcd6d3fe917084c8deed1e67eb17dd04ced26b->leave($__internal_95faeef1e9230e4c716a353450fcd6d3fe917084c8deed1e67eb17dd04ced26b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
