<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6211c13828fe58bbf5f8a8e9a5df0c57f665efd31403d4228da3278f3a88db2e extends Twig_Template
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
        $__internal_c7365230b7e67479707c2b44b2ea1f1e100333a06ef5dd6bd3cf148a279ca883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7365230b7e67479707c2b44b2ea1f1e100333a06ef5dd6bd3cf148a279ca883->enter($__internal_c7365230b7e67479707c2b44b2ea1f1e100333a06ef5dd6bd3cf148a279ca883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bb0b0a6fe8a92e89c377754309c6b500671fd3bc3c6ec03b393ac47f0c36944a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0b0a6fe8a92e89c377754309c6b500671fd3bc3c6ec03b393ac47f0c36944a->enter($__internal_bb0b0a6fe8a92e89c377754309c6b500671fd3bc3c6ec03b393ac47f0c36944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c7365230b7e67479707c2b44b2ea1f1e100333a06ef5dd6bd3cf148a279ca883->leave($__internal_c7365230b7e67479707c2b44b2ea1f1e100333a06ef5dd6bd3cf148a279ca883_prof);

        
        $__internal_bb0b0a6fe8a92e89c377754309c6b500671fd3bc3c6ec03b393ac47f0c36944a->leave($__internal_bb0b0a6fe8a92e89c377754309c6b500671fd3bc3c6ec03b393ac47f0c36944a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
