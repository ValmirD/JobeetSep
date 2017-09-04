<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8a6a05deaa2fa9344405c6a2d008228eabd8fcacac14d46e169610d9998cb1d3 extends Twig_Template
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
        $__internal_ec2274e470bd9f477608641befaac10716b33340cf7e74edeed69a12356c0284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2274e470bd9f477608641befaac10716b33340cf7e74edeed69a12356c0284->enter($__internal_ec2274e470bd9f477608641befaac10716b33340cf7e74edeed69a12356c0284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d4271e0b321ca8d204e46e4453963a6876a35835a1dc1a452e754509c240a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4271e0b321ca8d204e46e4453963a6876a35835a1dc1a452e754509c240a191->enter($__internal_d4271e0b321ca8d204e46e4453963a6876a35835a1dc1a452e754509c240a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ec2274e470bd9f477608641befaac10716b33340cf7e74edeed69a12356c0284->leave($__internal_ec2274e470bd9f477608641befaac10716b33340cf7e74edeed69a12356c0284_prof);

        
        $__internal_d4271e0b321ca8d204e46e4453963a6876a35835a1dc1a452e754509c240a191->leave($__internal_d4271e0b321ca8d204e46e4453963a6876a35835a1dc1a452e754509c240a191_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
