<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_87b0fd751206716a4027230486f29c418cb48a5bc66e85317964466628b6fed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f586d4280e47c31c003aed878a3e4b914835c0943643a4993258a2574061305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f586d4280e47c31c003aed878a3e4b914835c0943643a4993258a2574061305->enter($__internal_9f586d4280e47c31c003aed878a3e4b914835c0943643a4993258a2574061305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_53b33b610b304b6c6ff811bac3162a662c66392e1b56d99e16ad38f6399a00c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b33b610b304b6c6ff811bac3162a662c66392e1b56d99e16ad38f6399a00c8->enter($__internal_53b33b610b304b6c6ff811bac3162a662c66392e1b56d99e16ad38f6399a00c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f586d4280e47c31c003aed878a3e4b914835c0943643a4993258a2574061305->leave($__internal_9f586d4280e47c31c003aed878a3e4b914835c0943643a4993258a2574061305_prof);

        
        $__internal_53b33b610b304b6c6ff811bac3162a662c66392e1b56d99e16ad38f6399a00c8->leave($__internal_53b33b610b304b6c6ff811bac3162a662c66392e1b56d99e16ad38f6399a00c8_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_d9f7c69bdde3a7e4be7a36aa7de3639de5c1ac6c885fde9aab7fb112d723ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f7c69bdde3a7e4be7a36aa7de3639de5c1ac6c885fde9aab7fb112d723ffc0->enter($__internal_d9f7c69bdde3a7e4be7a36aa7de3639de5c1ac6c885fde9aab7fb112d723ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_59300a1c44bb8c2e909ad83dffb1a58607971a6cf1e5b5a23f19a00ea96f5d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59300a1c44bb8c2e909ad83dffb1a58607971a6cf1e5b5a23f19a00ea96f5d95->enter($__internal_59300a1c44bb8c2e909ad83dffb1a58607971a6cf1e5b5a23f19a00ea96f5d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_59300a1c44bb8c2e909ad83dffb1a58607971a6cf1e5b5a23f19a00ea96f5d95->leave($__internal_59300a1c44bb8c2e909ad83dffb1a58607971a6cf1e5b5a23f19a00ea96f5d95_prof);

        
        $__internal_d9f7c69bdde3a7e4be7a36aa7de3639de5c1ac6c885fde9aab7fb112d723ffc0->leave($__internal_d9f7c69bdde3a7e4be7a36aa7de3639de5c1ac6c885fde9aab7fb112d723ffc0_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
