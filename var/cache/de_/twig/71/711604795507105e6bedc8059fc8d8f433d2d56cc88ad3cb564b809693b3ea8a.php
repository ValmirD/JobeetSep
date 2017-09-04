<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_3b0ba478640a8f051ddf6e5c9a89401e7aea9964ed491e4136f1e2f4952670dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2df376c4e20e9c915f9fefdfe27bdb44945ba1d451864c38734a083470caf328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df376c4e20e9c915f9fefdfe27bdb44945ba1d451864c38734a083470caf328->enter($__internal_2df376c4e20e9c915f9fefdfe27bdb44945ba1d451864c38734a083470caf328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_9a200ba52a0cb9f855b9bbbcd2bf36316ffb299eadc63ba4a3c95f6407878da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a200ba52a0cb9f855b9bbbcd2bf36316ffb299eadc63ba4a3c95f6407878da5->enter($__internal_9a200ba52a0cb9f855b9bbbcd2bf36316ffb299eadc63ba4a3c95f6407878da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df376c4e20e9c915f9fefdfe27bdb44945ba1d451864c38734a083470caf328->leave($__internal_2df376c4e20e9c915f9fefdfe27bdb44945ba1d451864c38734a083470caf328_prof);

        
        $__internal_9a200ba52a0cb9f855b9bbbcd2bf36316ffb299eadc63ba4a3c95f6407878da5->leave($__internal_9a200ba52a0cb9f855b9bbbcd2bf36316ffb299eadc63ba4a3c95f6407878da5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
