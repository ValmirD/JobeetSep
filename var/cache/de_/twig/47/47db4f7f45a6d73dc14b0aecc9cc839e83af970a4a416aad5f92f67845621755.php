<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a6cfdac4fbdc6c5404b31b2a8e60d47b4696a583c8e3ae7d3b7f65d10a51e11d extends Twig_Template
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
        $__internal_f3b4bb56fa4b94e4f3d4bf92f2aebb0c45289414dbfacbc12f3784f76b76553d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b4bb56fa4b94e4f3d4bf92f2aebb0c45289414dbfacbc12f3784f76b76553d->enter($__internal_f3b4bb56fa4b94e4f3d4bf92f2aebb0c45289414dbfacbc12f3784f76b76553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_fda6bfff1a04aa3a37d104c8b862349a2a77be0d2eb2c8c6a06780e3ba15f339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda6bfff1a04aa3a37d104c8b862349a2a77be0d2eb2c8c6a06780e3ba15f339->enter($__internal_fda6bfff1a04aa3a37d104c8b862349a2a77be0d2eb2c8c6a06780e3ba15f339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f3b4bb56fa4b94e4f3d4bf92f2aebb0c45289414dbfacbc12f3784f76b76553d->leave($__internal_f3b4bb56fa4b94e4f3d4bf92f2aebb0c45289414dbfacbc12f3784f76b76553d_prof);

        
        $__internal_fda6bfff1a04aa3a37d104c8b862349a2a77be0d2eb2c8c6a06780e3ba15f339->leave($__internal_fda6bfff1a04aa3a37d104c8b862349a2a77be0d2eb2c8c6a06780e3ba15f339_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
