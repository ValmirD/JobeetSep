<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_bfb94bea6e85a0827ac28f1a6d1ce89c4686a2752f9aecb95f090b244bc5fe78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebbe07426fce6b695fe61410f6de622927197b29fd21807e30fb7a0befec6961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbe07426fce6b695fe61410f6de622927197b29fd21807e30fb7a0befec6961->enter($__internal_ebbe07426fce6b695fe61410f6de622927197b29fd21807e30fb7a0befec6961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_ba1758d6f40479993001c14b46bbfad1f22ddba24d0a613e680827b4e440cad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1758d6f40479993001c14b46bbfad1f22ddba24d0a613e680827b4e440cad6->enter($__internal_ba1758d6f40479993001c14b46bbfad1f22ddba24d0a613e680827b4e440cad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbe07426fce6b695fe61410f6de622927197b29fd21807e30fb7a0befec6961->leave($__internal_ebbe07426fce6b695fe61410f6de622927197b29fd21807e30fb7a0befec6961_prof);

        
        $__internal_ba1758d6f40479993001c14b46bbfad1f22ddba24d0a613e680827b4e440cad6->leave($__internal_ba1758d6f40479993001c14b46bbfad1f22ddba24d0a613e680827b4e440cad6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9355a8cbac99db527d1be832ea6a4d58d8c21c62c2b64851b6615c672f27d166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9355a8cbac99db527d1be832ea6a4d58d8c21c62c2b64851b6615c672f27d166->enter($__internal_9355a8cbac99db527d1be832ea6a4d58d8c21c62c2b64851b6615c672f27d166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_998107634ffb4f9c01f64839667b2b9718203ac223b897e466cc8c17a2933c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998107634ffb4f9c01f64839667b2b9718203ac223b897e466cc8c17a2933c2d->enter($__internal_998107634ffb4f9c01f64839667b2b9718203ac223b897e466cc8c17a2933c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_998107634ffb4f9c01f64839667b2b9718203ac223b897e466cc8c17a2933c2d->leave($__internal_998107634ffb4f9c01f64839667b2b9718203ac223b897e466cc8c17a2933c2d_prof);

        
        $__internal_9355a8cbac99db527d1be832ea6a4d58d8c21c62c2b64851b6615c672f27d166->leave($__internal_9355a8cbac99db527d1be832ea6a4d58d8c21c62c2b64851b6615c672f27d166_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
