<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f049f1bd0ea774257b33481d6da89deea77f11965af2cd37997d17cad47ae86c extends Twig_Template
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
        $__internal_ad7b053d93e52eb111e8da7b8d3f3e8269f4445cf4ac2dd0309f781b9e2e1175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7b053d93e52eb111e8da7b8d3f3e8269f4445cf4ac2dd0309f781b9e2e1175->enter($__internal_ad7b053d93e52eb111e8da7b8d3f3e8269f4445cf4ac2dd0309f781b9e2e1175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_98c7b200f9e3c31d342b9eec0ef2294ab017c57141eb8a7558a8517fb076e02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c7b200f9e3c31d342b9eec0ef2294ab017c57141eb8a7558a8517fb076e02d->enter($__internal_98c7b200f9e3c31d342b9eec0ef2294ab017c57141eb8a7558a8517fb076e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ad7b053d93e52eb111e8da7b8d3f3e8269f4445cf4ac2dd0309f781b9e2e1175->leave($__internal_ad7b053d93e52eb111e8da7b8d3f3e8269f4445cf4ac2dd0309f781b9e2e1175_prof);

        
        $__internal_98c7b200f9e3c31d342b9eec0ef2294ab017c57141eb8a7558a8517fb076e02d->leave($__internal_98c7b200f9e3c31d342b9eec0ef2294ab017c57141eb8a7558a8517fb076e02d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
