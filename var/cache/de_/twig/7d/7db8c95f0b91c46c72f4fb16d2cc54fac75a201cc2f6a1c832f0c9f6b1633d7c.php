<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4aec470ffd24c206d0336ebd4a65e02f2c42968ba80e4b10190a1b2da091bac7 extends Twig_Template
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
        $__internal_e1630e093bea45f3dfcb062969659228821b868603965d667329737870ae82a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1630e093bea45f3dfcb062969659228821b868603965d667329737870ae82a9->enter($__internal_e1630e093bea45f3dfcb062969659228821b868603965d667329737870ae82a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_18dc177e693066a097b524266a30ea58b243e76a4cb8b86f3123f8d981d18de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dc177e693066a097b524266a30ea58b243e76a4cb8b86f3123f8d981d18de5->enter($__internal_18dc177e693066a097b524266a30ea58b243e76a4cb8b86f3123f8d981d18de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e1630e093bea45f3dfcb062969659228821b868603965d667329737870ae82a9->leave($__internal_e1630e093bea45f3dfcb062969659228821b868603965d667329737870ae82a9_prof);

        
        $__internal_18dc177e693066a097b524266a30ea58b243e76a4cb8b86f3123f8d981d18de5->leave($__internal_18dc177e693066a097b524266a30ea58b243e76a4cb8b86f3123f8d981d18de5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
