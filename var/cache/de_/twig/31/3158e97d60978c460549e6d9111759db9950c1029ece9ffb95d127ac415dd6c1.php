<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_410c736ceda59271438faf9cf0031b19cc09b6676699f3ec21830faf04a2060f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56f0ff1a144ef846fbac799d0a93dbf52841d6811c9f13564ce1476d4bbece0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56f0ff1a144ef846fbac799d0a93dbf52841d6811c9f13564ce1476d4bbece0->enter($__internal_f56f0ff1a144ef846fbac799d0a93dbf52841d6811c9f13564ce1476d4bbece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_6663cce42e96333004df253cbcb3b6a5d544f387a541417df81943ffe0b6dfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6663cce42e96333004df253cbcb3b6a5d544f387a541417df81943ffe0b6dfcd->enter($__internal_6663cce42e96333004df253cbcb3b6a5d544f387a541417df81943ffe0b6dfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56f0ff1a144ef846fbac799d0a93dbf52841d6811c9f13564ce1476d4bbece0->leave($__internal_f56f0ff1a144ef846fbac799d0a93dbf52841d6811c9f13564ce1476d4bbece0_prof);

        
        $__internal_6663cce42e96333004df253cbcb3b6a5d544f387a541417df81943ffe0b6dfcd->leave($__internal_6663cce42e96333004df253cbcb3b6a5d544f387a541417df81943ffe0b6dfcd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
