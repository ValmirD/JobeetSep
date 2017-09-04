<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_55961deda14d4b05ecb34fc83d49c15c43334865bd6dd6bf0d34201212917b8f extends Twig_Template
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
        $__internal_146c386b0d04e88a41cef1895a0e6d77cb1dd054d5bea5908fffa2e455662938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146c386b0d04e88a41cef1895a0e6d77cb1dd054d5bea5908fffa2e455662938->enter($__internal_146c386b0d04e88a41cef1895a0e6d77cb1dd054d5bea5908fffa2e455662938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_190a421e0da3d48e868069bded3aa7eefa44dbf317b6124b18f7f02f50c63b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190a421e0da3d48e868069bded3aa7eefa44dbf317b6124b18f7f02f50c63b2b->enter($__internal_190a421e0da3d48e868069bded3aa7eefa44dbf317b6124b18f7f02f50c63b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_146c386b0d04e88a41cef1895a0e6d77cb1dd054d5bea5908fffa2e455662938->leave($__internal_146c386b0d04e88a41cef1895a0e6d77cb1dd054d5bea5908fffa2e455662938_prof);

        
        $__internal_190a421e0da3d48e868069bded3aa7eefa44dbf317b6124b18f7f02f50c63b2b->leave($__internal_190a421e0da3d48e868069bded3aa7eefa44dbf317b6124b18f7f02f50c63b2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
