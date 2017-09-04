<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_483b9dd86a17c9257363e94a6d6a5a5f96c65a01d531551b25fc51cf501c427a extends Twig_Template
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
        $__internal_b90994266c7926474a8ad1eb3b2e3790a923aeab64135b4342ab55c9e47b887f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90994266c7926474a8ad1eb3b2e3790a923aeab64135b4342ab55c9e47b887f->enter($__internal_b90994266c7926474a8ad1eb3b2e3790a923aeab64135b4342ab55c9e47b887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5ed43bae9f3a8ec14c2a7d0b46cf809daafc0b5d0b3fb1e0ab470dd92abd6cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed43bae9f3a8ec14c2a7d0b46cf809daafc0b5d0b3fb1e0ab470dd92abd6cad->enter($__internal_5ed43bae9f3a8ec14c2a7d0b46cf809daafc0b5d0b3fb1e0ab470dd92abd6cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b90994266c7926474a8ad1eb3b2e3790a923aeab64135b4342ab55c9e47b887f->leave($__internal_b90994266c7926474a8ad1eb3b2e3790a923aeab64135b4342ab55c9e47b887f_prof);

        
        $__internal_5ed43bae9f3a8ec14c2a7d0b46cf809daafc0b5d0b3fb1e0ab470dd92abd6cad->leave($__internal_5ed43bae9f3a8ec14c2a7d0b46cf809daafc0b5d0b3fb1e0ab470dd92abd6cad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
