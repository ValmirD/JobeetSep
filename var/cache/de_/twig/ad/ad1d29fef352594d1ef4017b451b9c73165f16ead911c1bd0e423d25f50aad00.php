<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_432d80c14499c163729fff9acfbc68ce95ab21c0a1817f2b8127685c1faf8698 extends Twig_Template
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
        $__internal_46a9a34c882f97a1c3e515549cfb5d84b04871d4884bdf8d6e8b63ee173ccbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a9a34c882f97a1c3e515549cfb5d84b04871d4884bdf8d6e8b63ee173ccbbf->enter($__internal_46a9a34c882f97a1c3e515549cfb5d84b04871d4884bdf8d6e8b63ee173ccbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5c7e5cfa0a4c138033315bd464b55bd1cf21784a6486253baf6f67db566e8a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7e5cfa0a4c138033315bd464b55bd1cf21784a6486253baf6f67db566e8a3c->enter($__internal_5c7e5cfa0a4c138033315bd464b55bd1cf21784a6486253baf6f67db566e8a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_46a9a34c882f97a1c3e515549cfb5d84b04871d4884bdf8d6e8b63ee173ccbbf->leave($__internal_46a9a34c882f97a1c3e515549cfb5d84b04871d4884bdf8d6e8b63ee173ccbbf_prof);

        
        $__internal_5c7e5cfa0a4c138033315bd464b55bd1cf21784a6486253baf6f67db566e8a3c->leave($__internal_5c7e5cfa0a4c138033315bd464b55bd1cf21784a6486253baf6f67db566e8a3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
