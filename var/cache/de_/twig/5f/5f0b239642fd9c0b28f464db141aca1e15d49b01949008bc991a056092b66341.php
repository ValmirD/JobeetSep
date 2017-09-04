<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_b6a1d9a4237f278495863121548fe8c747ca8d40a0dca407becdf65d04ea9c65 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada207c53d897996e0f0927672cd279c5bd02b1cf5c49c2a3574c319c8ef2af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada207c53d897996e0f0927672cd279c5bd02b1cf5c49c2a3574c319c8ef2af4->enter($__internal_ada207c53d897996e0f0927672cd279c5bd02b1cf5c49c2a3574c319c8ef2af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_1dfaab9b9d51e6bcc147345f0b6346c4e5ce3ad3171d2eb22960121a9df16676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfaab9b9d51e6bcc147345f0b6346c4e5ce3ad3171d2eb22960121a9df16676->enter($__internal_1dfaab9b9d51e6bcc147345f0b6346c4e5ce3ad3171d2eb22960121a9df16676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada207c53d897996e0f0927672cd279c5bd02b1cf5c49c2a3574c319c8ef2af4->leave($__internal_ada207c53d897996e0f0927672cd279c5bd02b1cf5c49c2a3574c319c8ef2af4_prof);

        
        $__internal_1dfaab9b9d51e6bcc147345f0b6346c4e5ce3ad3171d2eb22960121a9df16676->leave($__internal_1dfaab9b9d51e6bcc147345f0b6346c4e5ce3ad3171d2eb22960121a9df16676_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_494aa177b53e265419c8c9f750f688ea6b66dcb2ee0b36269396f3d79156c467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494aa177b53e265419c8c9f750f688ea6b66dcb2ee0b36269396f3d79156c467->enter($__internal_494aa177b53e265419c8c9f750f688ea6b66dcb2ee0b36269396f3d79156c467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_56a0a299e731425e814d94c625bf70972d61ef205ae65a7cd7bf7ddca5664d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a0a299e731425e814d94c625bf70972d61ef205ae65a7cd7bf7ddca5664d4d->enter($__internal_56a0a299e731425e814d94c625bf70972d61ef205ae65a7cd7bf7ddca5664d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_56a0a299e731425e814d94c625bf70972d61ef205ae65a7cd7bf7ddca5664d4d->leave($__internal_56a0a299e731425e814d94c625bf70972d61ef205ae65a7cd7bf7ddca5664d4d_prof);

        
        $__internal_494aa177b53e265419c8c9f750f688ea6b66dcb2ee0b36269396f3d79156c467->leave($__internal_494aa177b53e265419c8c9f750f688ea6b66dcb2ee0b36269396f3d79156c467_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
