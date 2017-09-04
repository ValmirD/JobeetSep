<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_925d11f00c5866bd9026c69fe689444f6f75ace9d6b90a206c7b11d39003da59 extends Twig_Template
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
        $__internal_bbbea2ca9a4eea10ec90ad00942f8990de9d98d0b54a29c789f6d87e8dbe84e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbea2ca9a4eea10ec90ad00942f8990de9d98d0b54a29c789f6d87e8dbe84e0->enter($__internal_bbbea2ca9a4eea10ec90ad00942f8990de9d98d0b54a29c789f6d87e8dbe84e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9a961fa9d998ac898b1c027f2d1eaf5c76d0600633c8016725d3e2290c2320a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a961fa9d998ac898b1c027f2d1eaf5c76d0600633c8016725d3e2290c2320a5->enter($__internal_9a961fa9d998ac898b1c027f2d1eaf5c76d0600633c8016725d3e2290c2320a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bbbea2ca9a4eea10ec90ad00942f8990de9d98d0b54a29c789f6d87e8dbe84e0->leave($__internal_bbbea2ca9a4eea10ec90ad00942f8990de9d98d0b54a29c789f6d87e8dbe84e0_prof);

        
        $__internal_9a961fa9d998ac898b1c027f2d1eaf5c76d0600633c8016725d3e2290c2320a5->leave($__internal_9a961fa9d998ac898b1c027f2d1eaf5c76d0600633c8016725d3e2290c2320a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
