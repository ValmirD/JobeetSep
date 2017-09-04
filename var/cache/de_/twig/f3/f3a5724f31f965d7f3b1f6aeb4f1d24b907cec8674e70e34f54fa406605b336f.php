<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4decbd5cb56d23af11a63653d1a37a2f231da6c32e8ed9ac68ea4854bff4993e extends Twig_Template
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
        $__internal_e5d45cc273aa4614e9da04a28f8b93bea5447b9e90fe8499ea024c237dd08e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d45cc273aa4614e9da04a28f8b93bea5447b9e90fe8499ea024c237dd08e64->enter($__internal_e5d45cc273aa4614e9da04a28f8b93bea5447b9e90fe8499ea024c237dd08e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ca382e5d026e00194f60dcd3653367395120c87b43e0c4524865a43c570f593e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca382e5d026e00194f60dcd3653367395120c87b43e0c4524865a43c570f593e->enter($__internal_ca382e5d026e00194f60dcd3653367395120c87b43e0c4524865a43c570f593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e5d45cc273aa4614e9da04a28f8b93bea5447b9e90fe8499ea024c237dd08e64->leave($__internal_e5d45cc273aa4614e9da04a28f8b93bea5447b9e90fe8499ea024c237dd08e64_prof);

        
        $__internal_ca382e5d026e00194f60dcd3653367395120c87b43e0c4524865a43c570f593e->leave($__internal_ca382e5d026e00194f60dcd3653367395120c87b43e0c4524865a43c570f593e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
