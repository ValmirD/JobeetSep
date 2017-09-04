<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_5d45273057d1e8b500d8827cdec0e972f7c1d524aa5630f274ccc94316734a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_421b1733ad3b93c0f5f11a88c431f5ec9678739da98842aac2ba843b67f5f49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421b1733ad3b93c0f5f11a88c431f5ec9678739da98842aac2ba843b67f5f49d->enter($__internal_421b1733ad3b93c0f5f11a88c431f5ec9678739da98842aac2ba843b67f5f49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_22a1ea9da19908c3cf9b7365fb0ef5feb3c5be6413355289046851ea760d8f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a1ea9da19908c3cf9b7365fb0ef5feb3c5be6413355289046851ea760d8f2b->enter($__internal_22a1ea9da19908c3cf9b7365fb0ef5feb3c5be6413355289046851ea760d8f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421b1733ad3b93c0f5f11a88c431f5ec9678739da98842aac2ba843b67f5f49d->leave($__internal_421b1733ad3b93c0f5f11a88c431f5ec9678739da98842aac2ba843b67f5f49d_prof);

        
        $__internal_22a1ea9da19908c3cf9b7365fb0ef5feb3c5be6413355289046851ea760d8f2b->leave($__internal_22a1ea9da19908c3cf9b7365fb0ef5feb3c5be6413355289046851ea760d8f2b_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_a58e8500cba6c0c3a30cc3eecd47542b9bae40487817777f08f6ff35b00d69f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58e8500cba6c0c3a30cc3eecd47542b9bae40487817777f08f6ff35b00d69f8->enter($__internal_a58e8500cba6c0c3a30cc3eecd47542b9bae40487817777f08f6ff35b00d69f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b27ec9dafb2e81c9deeaa3d9786af203f8cc229690a5a45b58be48a4ee48335c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27ec9dafb2e81c9deeaa3d9786af203f8cc229690a5a45b58be48a4ee48335c->enter($__internal_b27ec9dafb2e81c9deeaa3d9786af203f8cc229690a5a45b58be48a4ee48335c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b27ec9dafb2e81c9deeaa3d9786af203f8cc229690a5a45b58be48a4ee48335c->leave($__internal_b27ec9dafb2e81c9deeaa3d9786af203f8cc229690a5a45b58be48a4ee48335c_prof);

        
        $__internal_a58e8500cba6c0c3a30cc3eecd47542b9bae40487817777f08f6ff35b00d69f8->leave($__internal_a58e8500cba6c0c3a30cc3eecd47542b9bae40487817777f08f6ff35b00d69f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
