<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_df49faf092cd7a2b5a1f464367bfaf6816c9e52d0ce11e7488e321c0af912139 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de4646ec308aa93cec36985126070ddeef813c9a2a1100164fc43c333ac4103b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4646ec308aa93cec36985126070ddeef813c9a2a1100164fc43c333ac4103b->enter($__internal_de4646ec308aa93cec36985126070ddeef813c9a2a1100164fc43c333ac4103b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_1a47eadaf2a042934a337b70319a166f438a9557f0c6c94a97a051ab441fea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a47eadaf2a042934a337b70319a166f438a9557f0c6c94a97a051ab441fea73->enter($__internal_1a47eadaf2a042934a337b70319a166f438a9557f0c6c94a97a051ab441fea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4646ec308aa93cec36985126070ddeef813c9a2a1100164fc43c333ac4103b->leave($__internal_de4646ec308aa93cec36985126070ddeef813c9a2a1100164fc43c333ac4103b_prof);

        
        $__internal_1a47eadaf2a042934a337b70319a166f438a9557f0c6c94a97a051ab441fea73->leave($__internal_1a47eadaf2a042934a337b70319a166f438a9557f0c6c94a97a051ab441fea73_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a68eaa43ead78d367f374d3bb520b05e00b3653d7b1d216e8653eddf3da96d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68eaa43ead78d367f374d3bb520b05e00b3653d7b1d216e8653eddf3da96d9b->enter($__internal_a68eaa43ead78d367f374d3bb520b05e00b3653d7b1d216e8653eddf3da96d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4e7512e834985465b0026d987f4d2df1767d2b3a2c1ae7d895869d032842f904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7512e834985465b0026d987f4d2df1767d2b3a2c1ae7d895869d032842f904->enter($__internal_4e7512e834985465b0026d987f4d2df1767d2b3a2c1ae7d895869d032842f904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_4e7512e834985465b0026d987f4d2df1767d2b3a2c1ae7d895869d032842f904->leave($__internal_4e7512e834985465b0026d987f4d2df1767d2b3a2c1ae7d895869d032842f904_prof);

        
        $__internal_a68eaa43ead78d367f374d3bb520b05e00b3653d7b1d216e8653eddf3da96d9b->leave($__internal_a68eaa43ead78d367f374d3bb520b05e00b3653d7b1d216e8653eddf3da96d9b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
