<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7b708489c9320eae44f2c31a4e8a8206154452870ff137a3229afdbafc4bf968 extends Twig_Template
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
        $__internal_e75ba1cca611f55cb88cdf7308210306ffa47ca725e3ed5b1c8045f53959e5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75ba1cca611f55cb88cdf7308210306ffa47ca725e3ed5b1c8045f53959e5f4->enter($__internal_e75ba1cca611f55cb88cdf7308210306ffa47ca725e3ed5b1c8045f53959e5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e7f583c03602927829ef7653428fcb99ce62d1b41ee89987aeb122a756c13bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f583c03602927829ef7653428fcb99ce62d1b41ee89987aeb122a756c13bac->enter($__internal_e7f583c03602927829ef7653428fcb99ce62d1b41ee89987aeb122a756c13bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e75ba1cca611f55cb88cdf7308210306ffa47ca725e3ed5b1c8045f53959e5f4->leave($__internal_e75ba1cca611f55cb88cdf7308210306ffa47ca725e3ed5b1c8045f53959e5f4_prof);

        
        $__internal_e7f583c03602927829ef7653428fcb99ce62d1b41ee89987aeb122a756c13bac->leave($__internal_e7f583c03602927829ef7653428fcb99ce62d1b41ee89987aeb122a756c13bac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
