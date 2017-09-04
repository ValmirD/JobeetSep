<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e46f0b2e7911cca02ca8ce9fc6722f354674a6e25ae77dc3d76b81f77128535f extends Twig_Template
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
        $__internal_ed285ac97c0e8c67197206d9becb549c548aff864a2157b58ee4f873e338971b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed285ac97c0e8c67197206d9becb549c548aff864a2157b58ee4f873e338971b->enter($__internal_ed285ac97c0e8c67197206d9becb549c548aff864a2157b58ee4f873e338971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e4a100d2c45dc7fad958f3b86427b5ff43ac21bb49f981f86111115a86ce3657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a100d2c45dc7fad958f3b86427b5ff43ac21bb49f981f86111115a86ce3657->enter($__internal_e4a100d2c45dc7fad958f3b86427b5ff43ac21bb49f981f86111115a86ce3657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_ed285ac97c0e8c67197206d9becb549c548aff864a2157b58ee4f873e338971b->leave($__internal_ed285ac97c0e8c67197206d9becb549c548aff864a2157b58ee4f873e338971b_prof);

        
        $__internal_e4a100d2c45dc7fad958f3b86427b5ff43ac21bb49f981f86111115a86ce3657->leave($__internal_e4a100d2c45dc7fad958f3b86427b5ff43ac21bb49f981f86111115a86ce3657_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
