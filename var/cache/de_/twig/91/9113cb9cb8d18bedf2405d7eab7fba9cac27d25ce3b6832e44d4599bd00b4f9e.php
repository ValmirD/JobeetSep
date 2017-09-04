<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_110f9b79d54d134f966900fd9cc047308719b572c027aab98a992e62bf1197d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd2082edb839d3b62981eddaeb68063724ff29306999fdc51214c25de6bd3302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2082edb839d3b62981eddaeb68063724ff29306999fdc51214c25de6bd3302->enter($__internal_fd2082edb839d3b62981eddaeb68063724ff29306999fdc51214c25de6bd3302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_71fed19f40c2b8fe8110b0caf385ec5b0ce2d58a5b71b937267a7e13af14297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fed19f40c2b8fe8110b0caf385ec5b0ce2d58a5b71b937267a7e13af14297f->enter($__internal_71fed19f40c2b8fe8110b0caf385ec5b0ce2d58a5b71b937267a7e13af14297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2082edb839d3b62981eddaeb68063724ff29306999fdc51214c25de6bd3302->leave($__internal_fd2082edb839d3b62981eddaeb68063724ff29306999fdc51214c25de6bd3302_prof);

        
        $__internal_71fed19f40c2b8fe8110b0caf385ec5b0ce2d58a5b71b937267a7e13af14297f->leave($__internal_71fed19f40c2b8fe8110b0caf385ec5b0ce2d58a5b71b937267a7e13af14297f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
