<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cd7990f7bd42939eb0efb7d96a44441d026fc287da63a6895dcc6eab45ec5c44 extends Twig_Template
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
        $__internal_f987c0ed558ab24a3141c4b64515f27ac415f38ded62eef981b67c65b73ff5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f987c0ed558ab24a3141c4b64515f27ac415f38ded62eef981b67c65b73ff5b2->enter($__internal_f987c0ed558ab24a3141c4b64515f27ac415f38ded62eef981b67c65b73ff5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_410524af282201da50fa9bb9443d747504e3a5abac472f7564384e09a4d3539e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410524af282201da50fa9bb9443d747504e3a5abac472f7564384e09a4d3539e->enter($__internal_410524af282201da50fa9bb9443d747504e3a5abac472f7564384e09a4d3539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f987c0ed558ab24a3141c4b64515f27ac415f38ded62eef981b67c65b73ff5b2->leave($__internal_f987c0ed558ab24a3141c4b64515f27ac415f38ded62eef981b67c65b73ff5b2_prof);

        
        $__internal_410524af282201da50fa9bb9443d747504e3a5abac472f7564384e09a4d3539e->leave($__internal_410524af282201da50fa9bb9443d747504e3a5abac472f7564384e09a4d3539e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
