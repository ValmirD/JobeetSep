<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_cd93c712428823b907ad1dd2a1ca4a5d4d23835b552aca9e70b5f0c0de4f54a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_093e9cd41c892fec41588986e5ac748165d193f84db566079c45224acabf8ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093e9cd41c892fec41588986e5ac748165d193f84db566079c45224acabf8ba1->enter($__internal_093e9cd41c892fec41588986e5ac748165d193f84db566079c45224acabf8ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_493f0ef8e6d0210de2551d8acce1e131570e9e5195393032af5e9977cf440d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493f0ef8e6d0210de2551d8acce1e131570e9e5195393032af5e9977cf440d6a->enter($__internal_493f0ef8e6d0210de2551d8acce1e131570e9e5195393032af5e9977cf440d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093e9cd41c892fec41588986e5ac748165d193f84db566079c45224acabf8ba1->leave($__internal_093e9cd41c892fec41588986e5ac748165d193f84db566079c45224acabf8ba1_prof);

        
        $__internal_493f0ef8e6d0210de2551d8acce1e131570e9e5195393032af5e9977cf440d6a->leave($__internal_493f0ef8e6d0210de2551d8acce1e131570e9e5195393032af5e9977cf440d6a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
