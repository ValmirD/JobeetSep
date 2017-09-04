<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_421d89b45fdaafea8af4d253bfe1abc9473acdc791fc92fc109141ca56d99e86 extends Twig_Template
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
        $__internal_a9b91cb1dfe7eff04be425edf80808a88138d51857a3a8697dd41ae1319689d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b91cb1dfe7eff04be425edf80808a88138d51857a3a8697dd41ae1319689d8->enter($__internal_a9b91cb1dfe7eff04be425edf80808a88138d51857a3a8697dd41ae1319689d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7c4bc8967a792e79de0caa96a98f710c93f199e3c2285931b72eaf66f07f6ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4bc8967a792e79de0caa96a98f710c93f199e3c2285931b72eaf66f07f6ad1->enter($__internal_7c4bc8967a792e79de0caa96a98f710c93f199e3c2285931b72eaf66f07f6ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a9b91cb1dfe7eff04be425edf80808a88138d51857a3a8697dd41ae1319689d8->leave($__internal_a9b91cb1dfe7eff04be425edf80808a88138d51857a3a8697dd41ae1319689d8_prof);

        
        $__internal_7c4bc8967a792e79de0caa96a98f710c93f199e3c2285931b72eaf66f07f6ad1->leave($__internal_7c4bc8967a792e79de0caa96a98f710c93f199e3c2285931b72eaf66f07f6ad1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
