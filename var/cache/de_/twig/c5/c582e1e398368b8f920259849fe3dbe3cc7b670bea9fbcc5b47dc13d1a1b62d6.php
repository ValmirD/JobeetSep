<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_eee921c1b012fc0a0e0f61f9bb2cc8089e503f0831a54c5464be8147a1b7bff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa48f584449f846ba701fbd108f88d1f9e01a83f4d958401f984711a6f53618f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa48f584449f846ba701fbd108f88d1f9e01a83f4d958401f984711a6f53618f->enter($__internal_aa48f584449f846ba701fbd108f88d1f9e01a83f4d958401f984711a6f53618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_5eb86cb9c90174d758b096539d1b2a881782f1d10dca2d2db41cbb8ea43cadf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb86cb9c90174d758b096539d1b2a881782f1d10dca2d2db41cbb8ea43cadf9->enter($__internal_5eb86cb9c90174d758b096539d1b2a881782f1d10dca2d2db41cbb8ea43cadf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa48f584449f846ba701fbd108f88d1f9e01a83f4d958401f984711a6f53618f->leave($__internal_aa48f584449f846ba701fbd108f88d1f9e01a83f4d958401f984711a6f53618f_prof);

        
        $__internal_5eb86cb9c90174d758b096539d1b2a881782f1d10dca2d2db41cbb8ea43cadf9->leave($__internal_5eb86cb9c90174d758b096539d1b2a881782f1d10dca2d2db41cbb8ea43cadf9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_676c808533bdf77c441668ed08133874cd1237a0c6894fc74866523beeaee987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676c808533bdf77c441668ed08133874cd1237a0c6894fc74866523beeaee987->enter($__internal_676c808533bdf77c441668ed08133874cd1237a0c6894fc74866523beeaee987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_59e6dff18fb2696d6627fa303be3fd8d4763f633b932527bea9ac63b3fe74bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e6dff18fb2696d6627fa303be3fd8d4763f633b932527bea9ac63b3fe74bfa->enter($__internal_59e6dff18fb2696d6627fa303be3fd8d4763f633b932527bea9ac63b3fe74bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_59e6dff18fb2696d6627fa303be3fd8d4763f633b932527bea9ac63b3fe74bfa->leave($__internal_59e6dff18fb2696d6627fa303be3fd8d4763f633b932527bea9ac63b3fe74bfa_prof);

        
        $__internal_676c808533bdf77c441668ed08133874cd1237a0c6894fc74866523beeaee987->leave($__internal_676c808533bdf77c441668ed08133874cd1237a0c6894fc74866523beeaee987_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
