<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_30821f17532f621d84b9a8db83fabca8565076425abbd1f87fdcaf7543266843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad0b812b3323d999cd74f780c0cd1e62d19283d1b175c2bd3de20f4cecd6f751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0b812b3323d999cd74f780c0cd1e62d19283d1b175c2bd3de20f4cecd6f751->enter($__internal_ad0b812b3323d999cd74f780c0cd1e62d19283d1b175c2bd3de20f4cecd6f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $__internal_3880887d1c3c30135885a7a8308febfe27512082d2421151eeb81e47b6f0a552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3880887d1c3c30135885a7a8308febfe27512082d2421151eeb81e47b6f0a552->enter($__internal_3880887d1c3c30135885a7a8308febfe27512082d2421151eeb81e47b6f0a552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0b812b3323d999cd74f780c0cd1e62d19283d1b175c2bd3de20f4cecd6f751->leave($__internal_ad0b812b3323d999cd74f780c0cd1e62d19283d1b175c2bd3de20f4cecd6f751_prof);

        
        $__internal_3880887d1c3c30135885a7a8308febfe27512082d2421151eeb81e47b6f0a552->leave($__internal_3880887d1c3c30135885a7a8308febfe27512082d2421151eeb81e47b6f0a552_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
", "@SonataAdmin/CRUD/acl.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\acl.html.twig");
    }
}
