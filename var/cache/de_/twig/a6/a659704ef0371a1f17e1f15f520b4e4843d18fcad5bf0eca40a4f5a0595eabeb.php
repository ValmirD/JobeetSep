<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_6d316ddcb04e605db24a96209521af004e269c0b96cc49b5728c73c2033eb055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb7307d02c59823b058fb4f9d490ca1812c7979186f2df8eb9c8d3020b083b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb7307d02c59823b058fb4f9d490ca1812c7979186f2df8eb9c8d3020b083b5->enter($__internal_bbb7307d02c59823b058fb4f9d490ca1812c7979186f2df8eb9c8d3020b083b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_50382441a5540c0253b6ce5499eda3dccffbe8e65a72165d038afd5abcbdbf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50382441a5540c0253b6ce5499eda3dccffbe8e65a72165d038afd5abcbdbf6b->enter($__internal_50382441a5540c0253b6ce5499eda3dccffbe8e65a72165d038afd5abcbdbf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb7307d02c59823b058fb4f9d490ca1812c7979186f2df8eb9c8d3020b083b5->leave($__internal_bbb7307d02c59823b058fb4f9d490ca1812c7979186f2df8eb9c8d3020b083b5_prof);

        
        $__internal_50382441a5540c0253b6ce5499eda3dccffbe8e65a72165d038afd5abcbdbf6b->leave($__internal_50382441a5540c0253b6ce5499eda3dccffbe8e65a72165d038afd5abcbdbf6b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
