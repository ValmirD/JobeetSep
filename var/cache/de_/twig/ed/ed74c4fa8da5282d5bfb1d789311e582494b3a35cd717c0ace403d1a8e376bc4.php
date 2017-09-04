<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6a2b111bc74d512f320681bd0820b1fe13aa2b5269e9a6878cfff4cba43f84b4 extends Twig_Template
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
        $__internal_43f2905e7c9c5a7b2530c271114fd2c5879866592b13bd4aa7320aa485de432b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f2905e7c9c5a7b2530c271114fd2c5879866592b13bd4aa7320aa485de432b->enter($__internal_43f2905e7c9c5a7b2530c271114fd2c5879866592b13bd4aa7320aa485de432b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d49eea3d0b1cf2894d9be2752c891bf05c1aee3582d78395e1278a9729978bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49eea3d0b1cf2894d9be2752c891bf05c1aee3582d78395e1278a9729978bfd->enter($__internal_d49eea3d0b1cf2894d9be2752c891bf05c1aee3582d78395e1278a9729978bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43f2905e7c9c5a7b2530c271114fd2c5879866592b13bd4aa7320aa485de432b->leave($__internal_43f2905e7c9c5a7b2530c271114fd2c5879866592b13bd4aa7320aa485de432b_prof);

        
        $__internal_d49eea3d0b1cf2894d9be2752c891bf05c1aee3582d78395e1278a9729978bfd->leave($__internal_d49eea3d0b1cf2894d9be2752c891bf05c1aee3582d78395e1278a9729978bfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
