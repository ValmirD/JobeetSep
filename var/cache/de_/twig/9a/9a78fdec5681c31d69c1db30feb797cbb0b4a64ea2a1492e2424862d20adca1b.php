<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ce293148124bd70e038efdb07527ed4033e08e280125ab5de3532bfb9d843137 extends Twig_Template
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
        $__internal_377f5f7e92fc65d9155eea7c37aed6e28e6a58eb4fbeebaa3f672c2f70cda69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377f5f7e92fc65d9155eea7c37aed6e28e6a58eb4fbeebaa3f672c2f70cda69c->enter($__internal_377f5f7e92fc65d9155eea7c37aed6e28e6a58eb4fbeebaa3f672c2f70cda69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a5ea8b1e4522174202121b16d916490a22a970c71efa1bf50c3af4d17ecdc710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ea8b1e4522174202121b16d916490a22a970c71efa1bf50c3af4d17ecdc710->enter($__internal_a5ea8b1e4522174202121b16d916490a22a970c71efa1bf50c3af4d17ecdc710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_377f5f7e92fc65d9155eea7c37aed6e28e6a58eb4fbeebaa3f672c2f70cda69c->leave($__internal_377f5f7e92fc65d9155eea7c37aed6e28e6a58eb4fbeebaa3f672c2f70cda69c_prof);

        
        $__internal_a5ea8b1e4522174202121b16d916490a22a970c71efa1bf50c3af4d17ecdc710->leave($__internal_a5ea8b1e4522174202121b16d916490a22a970c71efa1bf50c3af4d17ecdc710_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
