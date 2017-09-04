<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3fb99c8ccb70c4aa661d4a7d3541066466666bf9e5e3a9b807e85efa4db5d21b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a1d95004c58a33c3217b57a51fff1ac5d334bfbfbfd9febd7e94a2b9a69e379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1d95004c58a33c3217b57a51fff1ac5d334bfbfbfd9febd7e94a2b9a69e379->enter($__internal_9a1d95004c58a33c3217b57a51fff1ac5d334bfbfbfd9febd7e94a2b9a69e379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_ca72f900c73773fec5f7dab291a9e321b859688cc025b90cb6fd616417f3c85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca72f900c73773fec5f7dab291a9e321b859688cc025b90cb6fd616417f3c85e->enter($__internal_ca72f900c73773fec5f7dab291a9e321b859688cc025b90cb6fd616417f3c85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1d95004c58a33c3217b57a51fff1ac5d334bfbfbfd9febd7e94a2b9a69e379->leave($__internal_9a1d95004c58a33c3217b57a51fff1ac5d334bfbfbfd9febd7e94a2b9a69e379_prof);

        
        $__internal_ca72f900c73773fec5f7dab291a9e321b859688cc025b90cb6fd616417f3c85e->leave($__internal_ca72f900c73773fec5f7dab291a9e321b859688cc025b90cb6fd616417f3c85e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
