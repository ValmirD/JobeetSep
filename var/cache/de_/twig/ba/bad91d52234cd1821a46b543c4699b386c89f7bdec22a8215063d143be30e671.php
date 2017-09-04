<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_f495c960d2d85c76cdc44ea54f9d01e440221aa1d74d58163dc9711a037f0b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73b5ae034b86681bc14547f4b4012cadc19ac3ce1cf3a8b037a73cbfaccdc8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b5ae034b86681bc14547f4b4012cadc19ac3ce1cf3a8b037a73cbfaccdc8dd->enter($__internal_73b5ae034b86681bc14547f4b4012cadc19ac3ce1cf3a8b037a73cbfaccdc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_80415a71f88030eb4cda187836b4cf0856c96fa43252ab163a1ff30ddb88993f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80415a71f88030eb4cda187836b4cf0856c96fa43252ab163a1ff30ddb88993f->enter($__internal_80415a71f88030eb4cda187836b4cf0856c96fa43252ab163a1ff30ddb88993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b5ae034b86681bc14547f4b4012cadc19ac3ce1cf3a8b037a73cbfaccdc8dd->leave($__internal_73b5ae034b86681bc14547f4b4012cadc19ac3ce1cf3a8b037a73cbfaccdc8dd_prof);

        
        $__internal_80415a71f88030eb4cda187836b4cf0856c96fa43252ab163a1ff30ddb88993f->leave($__internal_80415a71f88030eb4cda187836b4cf0856c96fa43252ab163a1ff30ddb88993f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
