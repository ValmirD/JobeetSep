<?php

/* Level/edit.html.twig */
class __TwigTemplate_efc55ef6080e89f32dc581566e4b19fc1a76a7ecc1f447e96f29d3630e8c8cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Level/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac82dedc0a2fa13b72fab0acfb49a2d3dcf5c18579dd6b5777aef4e8f68932b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac82dedc0a2fa13b72fab0acfb49a2d3dcf5c18579dd6b5777aef4e8f68932b7->enter($__internal_ac82dedc0a2fa13b72fab0acfb49a2d3dcf5c18579dd6b5777aef4e8f68932b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/edit.html.twig"));

        $__internal_934212a955caabdf8b2cd211fb7cdc73670d83b0fb77440cf2b0b07f8b04436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934212a955caabdf8b2cd211fb7cdc73670d83b0fb77440cf2b0b07f8b04436f->enter($__internal_934212a955caabdf8b2cd211fb7cdc73670d83b0fb77440cf2b0b07f8b04436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac82dedc0a2fa13b72fab0acfb49a2d3dcf5c18579dd6b5777aef4e8f68932b7->leave($__internal_ac82dedc0a2fa13b72fab0acfb49a2d3dcf5c18579dd6b5777aef4e8f68932b7_prof);

        
        $__internal_934212a955caabdf8b2cd211fb7cdc73670d83b0fb77440cf2b0b07f8b04436f->leave($__internal_934212a955caabdf8b2cd211fb7cdc73670d83b0fb77440cf2b0b07f8b04436f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3e5e1ff965be236bbb56b3aacf5c069cd76768f5a2cce10e8fc799c96d952ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e5e1ff965be236bbb56b3aacf5c069cd76768f5a2cce10e8fc799c96d952ad->enter($__internal_a3e5e1ff965be236bbb56b3aacf5c069cd76768f5a2cce10e8fc799c96d952ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0951c6033eceac3b0b2ae65c47c5dc6a2066a9c195e10e4bed4c7b1a48de23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0951c6033eceac3b0b2ae65c47c5dc6a2066a9c195e10e4bed4c7b1a48de23c->enter($__internal_a0951c6033eceac3b0b2ae65c47c5dc6a2066a9c195e10e4bed4c7b1a48de23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Level edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a0951c6033eceac3b0b2ae65c47c5dc6a2066a9c195e10e4bed4c7b1a48de23c->leave($__internal_a0951c6033eceac3b0b2ae65c47c5dc6a2066a9c195e10e4bed4c7b1a48de23c_prof);

        
        $__internal_a3e5e1ff965be236bbb56b3aacf5c069cd76768f5a2cce10e8fc799c96d952ad->leave($__internal_a3e5e1ff965be236bbb56b3aacf5c069cd76768f5a2cce10e8fc799c96d952ad_prof);

    }

    public function getTemplateName()
    {
        return "Level/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Level edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ens_level_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "Level/edit.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\views\\Level\\edit.html.twig");
    }
}
