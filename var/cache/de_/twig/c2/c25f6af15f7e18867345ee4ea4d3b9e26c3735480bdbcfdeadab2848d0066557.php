<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e2615c1269f65c013a6ba0c2e4c89fad0e28e3d152c86a4cf5f34eac4b1e3872 extends Twig_Template
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
        $__internal_634642784a2921db48e9d4d8f5c0276fb21ea8bdd60b3bf9b59c5d53a53fea84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634642784a2921db48e9d4d8f5c0276fb21ea8bdd60b3bf9b59c5d53a53fea84->enter($__internal_634642784a2921db48e9d4d8f5c0276fb21ea8bdd60b3bf9b59c5d53a53fea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d3b250fb34a3886db187e48fcc7662499ad689b5f50e7bfd5e98f1ce17494217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b250fb34a3886db187e48fcc7662499ad689b5f50e7bfd5e98f1ce17494217->enter($__internal_d3b250fb34a3886db187e48fcc7662499ad689b5f50e7bfd5e98f1ce17494217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_634642784a2921db48e9d4d8f5c0276fb21ea8bdd60b3bf9b59c5d53a53fea84->leave($__internal_634642784a2921db48e9d4d8f5c0276fb21ea8bdd60b3bf9b59c5d53a53fea84_prof);

        
        $__internal_d3b250fb34a3886db187e48fcc7662499ad689b5f50e7bfd5e98f1ce17494217->leave($__internal_d3b250fb34a3886db187e48fcc7662499ad689b5f50e7bfd5e98f1ce17494217_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
