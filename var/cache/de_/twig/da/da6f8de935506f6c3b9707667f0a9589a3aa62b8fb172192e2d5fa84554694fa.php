<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_721d581762ff769eb52f446bbf16915c99fc5f8d6c411c19139a34933892f7c8 extends Twig_Template
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
        $__internal_a27fe9d3fdcd1e083a09e7cdd37d8e816114ba3795a1125d83e389269166e3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27fe9d3fdcd1e083a09e7cdd37d8e816114ba3795a1125d83e389269166e3e2->enter($__internal_a27fe9d3fdcd1e083a09e7cdd37d8e816114ba3795a1125d83e389269166e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_cbc175f45b7019442da8e2a52694589025f8c78cb6a157919d62a6e2fcd0246c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc175f45b7019442da8e2a52694589025f8c78cb6a157919d62a6e2fcd0246c->enter($__internal_cbc175f45b7019442da8e2a52694589025f8c78cb6a157919d62a6e2fcd0246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_a27fe9d3fdcd1e083a09e7cdd37d8e816114ba3795a1125d83e389269166e3e2->leave($__internal_a27fe9d3fdcd1e083a09e7cdd37d8e816114ba3795a1125d83e389269166e3e2_prof);

        
        $__internal_cbc175f45b7019442da8e2a52694589025f8c78cb6a157919d62a6e2fcd0246c->leave($__internal_cbc175f45b7019442da8e2a52694589025f8c78cb6a157919d62a6e2fcd0246c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
