<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_0b7dcbd2c7813f2489beca2c05109ae7847892f792807fa8c20548a3c31e5c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
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
        $__internal_12456aa91a96e9bfa7639aae0944117123687fecd0393225e04afc0a53e64712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12456aa91a96e9bfa7639aae0944117123687fecd0393225e04afc0a53e64712->enter($__internal_12456aa91a96e9bfa7639aae0944117123687fecd0393225e04afc0a53e64712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_93dbd0151ecd33fc970cf44a5386d860e9338604f8dcfd36ba803304d36f1d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dbd0151ecd33fc970cf44a5386d860e9338604f8dcfd36ba803304d36f1d06->enter($__internal_93dbd0151ecd33fc970cf44a5386d860e9338604f8dcfd36ba803304d36f1d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12456aa91a96e9bfa7639aae0944117123687fecd0393225e04afc0a53e64712->leave($__internal_12456aa91a96e9bfa7639aae0944117123687fecd0393225e04afc0a53e64712_prof);

        
        $__internal_93dbd0151ecd33fc970cf44a5386d860e9338604f8dcfd36ba803304d36f1d06->leave($__internal_93dbd0151ecd33fc970cf44a5386d860e9338604f8dcfd36ba803304d36f1d06_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_711b931bc1f059d77d82ef07c07cbcdf6dc781a58c5051feb6518f09cccd7cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711b931bc1f059d77d82ef07c07cbcdf6dc781a58c5051feb6518f09cccd7cf2->enter($__internal_711b931bc1f059d77d82ef07c07cbcdf6dc781a58c5051feb6518f09cccd7cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_920d5dd7082733d14a21bd00fa68912c0d19fc209d1581e9fd921acb51cbb7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920d5dd7082733d14a21bd00fa68912c0d19fc209d1581e9fd921acb51cbb7f2->enter($__internal_920d5dd7082733d14a21bd00fa68912c0d19fc209d1581e9fd921acb51cbb7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_920d5dd7082733d14a21bd00fa68912c0d19fc209d1581e9fd921acb51cbb7f2->leave($__internal_920d5dd7082733d14a21bd00fa68912c0d19fc209d1581e9fd921acb51cbb7f2_prof);

        
        $__internal_711b931bc1f059d77d82ef07c07cbcdf6dc781a58c5051feb6518f09cccd7cf2->leave($__internal_711b931bc1f059d77d82ef07c07cbcdf6dc781a58c5051feb6518f09cccd7cf2_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
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
", "@KnpMenu/menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\knplabs\\knp-menu-bundle\\Resources\\views\\menu.html.twig");
    }
}
