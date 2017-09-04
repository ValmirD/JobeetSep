<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_862f86cda6c9f7f53a41bce49141c80f7f652d4b16f686b37064ea136a1cf41f extends Twig_Template
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
        $__internal_e6e66a946db3fef7b8acfcfd5ecba53a018a0b547146e40504a78877175d9dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e66a946db3fef7b8acfcfd5ecba53a018a0b547146e40504a78877175d9dbb->enter($__internal_e6e66a946db3fef7b8acfcfd5ecba53a018a0b547146e40504a78877175d9dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_cc905959a78e2711319ec5181099610040e6d525496e72345dcd51d685ffbc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc905959a78e2711319ec5181099610040e6d525496e72345dcd51d685ffbc5e->enter($__internal_cc905959a78e2711319ec5181099610040e6d525496e72345dcd51d685ffbc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e6e66a946db3fef7b8acfcfd5ecba53a018a0b547146e40504a78877175d9dbb->leave($__internal_e6e66a946db3fef7b8acfcfd5ecba53a018a0b547146e40504a78877175d9dbb_prof);

        
        $__internal_cc905959a78e2711319ec5181099610040e6d525496e72345dcd51d685ffbc5e->leave($__internal_cc905959a78e2711319ec5181099610040e6d525496e72345dcd51d685ffbc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
