<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bfa4994103011a7bcfbbb789a937beb1260822943eb14d0dd43b126ed32b6012 extends Twig_Template
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
        $__internal_f5a8484551a9729a7bdd01897feeb5bc67eb03441de81094b6739b784cf58ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a8484551a9729a7bdd01897feeb5bc67eb03441de81094b6739b784cf58ad3->enter($__internal_f5a8484551a9729a7bdd01897feeb5bc67eb03441de81094b6739b784cf58ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7d3b489f8f05c2bcbad6aa2e8b481d9c641db33b4f5995837518244c25246b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3b489f8f05c2bcbad6aa2e8b481d9c641db33b4f5995837518244c25246b5c->enter($__internal_7d3b489f8f05c2bcbad6aa2e8b481d9c641db33b4f5995837518244c25246b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f5a8484551a9729a7bdd01897feeb5bc67eb03441de81094b6739b784cf58ad3->leave($__internal_f5a8484551a9729a7bdd01897feeb5bc67eb03441de81094b6739b784cf58ad3_prof);

        
        $__internal_7d3b489f8f05c2bcbad6aa2e8b481d9c641db33b4f5995837518244c25246b5c->leave($__internal_7d3b489f8f05c2bcbad6aa2e8b481d9c641db33b4f5995837518244c25246b5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
