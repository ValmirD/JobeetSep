<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fc4dd33961ce9743cce1bb97f6775bdb0d5aff4cf5117bed55a1f494da88517 extends Twig_Template
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
        $__internal_aebb41d92b30ad0fb5247bacb91dbd5758da2065c04b3482b664f50b71b277b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebb41d92b30ad0fb5247bacb91dbd5758da2065c04b3482b664f50b71b277b2->enter($__internal_aebb41d92b30ad0fb5247bacb91dbd5758da2065c04b3482b664f50b71b277b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_483040be4a2f8f795733901cd7f666516606095c58dcb27deebfba8ac987ff25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483040be4a2f8f795733901cd7f666516606095c58dcb27deebfba8ac987ff25->enter($__internal_483040be4a2f8f795733901cd7f666516606095c58dcb27deebfba8ac987ff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_aebb41d92b30ad0fb5247bacb91dbd5758da2065c04b3482b664f50b71b277b2->leave($__internal_aebb41d92b30ad0fb5247bacb91dbd5758da2065c04b3482b664f50b71b277b2_prof);

        
        $__internal_483040be4a2f8f795733901cd7f666516606095c58dcb27deebfba8ac987ff25->leave($__internal_483040be4a2f8f795733901cd7f666516606095c58dcb27deebfba8ac987ff25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
