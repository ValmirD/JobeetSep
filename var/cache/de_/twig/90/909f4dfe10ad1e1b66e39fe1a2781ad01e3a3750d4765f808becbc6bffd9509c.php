<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_473b59ce8ff83696ff8c0e1aa5634ab6624eabd1f7a998a18ef888580bc20df0 extends Twig_Template
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
        $__internal_b72669c6c5d1a49a4fe62bb1f71ce9c71de5d908d7d842051bc2a5ef8b68b6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72669c6c5d1a49a4fe62bb1f71ce9c71de5d908d7d842051bc2a5ef8b68b6c8->enter($__internal_b72669c6c5d1a49a4fe62bb1f71ce9c71de5d908d7d842051bc2a5ef8b68b6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8071c0428257c470b3b18e7ada96cfd0801a4483e5e62d6fe958562f69e92cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8071c0428257c470b3b18e7ada96cfd0801a4483e5e62d6fe958562f69e92cfb->enter($__internal_8071c0428257c470b3b18e7ada96cfd0801a4483e5e62d6fe958562f69e92cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b72669c6c5d1a49a4fe62bb1f71ce9c71de5d908d7d842051bc2a5ef8b68b6c8->leave($__internal_b72669c6c5d1a49a4fe62bb1f71ce9c71de5d908d7d842051bc2a5ef8b68b6c8_prof);

        
        $__internal_8071c0428257c470b3b18e7ada96cfd0801a4483e5e62d6fe958562f69e92cfb->leave($__internal_8071c0428257c470b3b18e7ada96cfd0801a4483e5e62d6fe958562f69e92cfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
