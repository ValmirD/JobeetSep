<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_582470ddf05ce89c14d5946270977ffd9ae229500ac22046b5c4f668c01faf2c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02dedf0b8a18cc1b320c04a36459008cf0d85b9908c018c532a0aab7bd1c4aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dedf0b8a18cc1b320c04a36459008cf0d85b9908c018c532a0aab7bd1c4aab->enter($__internal_02dedf0b8a18cc1b320c04a36459008cf0d85b9908c018c532a0aab7bd1c4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_74de469f9499f32260396add22e06f9a0e6739286e1138bd6c23b59c3ca93f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74de469f9499f32260396add22e06f9a0e6739286e1138bd6c23b59c3ca93f1a->enter($__internal_74de469f9499f32260396add22e06f9a0e6739286e1138bd6c23b59c3ca93f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02dedf0b8a18cc1b320c04a36459008cf0d85b9908c018c532a0aab7bd1c4aab->leave($__internal_02dedf0b8a18cc1b320c04a36459008cf0d85b9908c018c532a0aab7bd1c4aab_prof);

        
        $__internal_74de469f9499f32260396add22e06f9a0e6739286e1138bd6c23b59c3ca93f1a->leave($__internal_74de469f9499f32260396add22e06f9a0e6739286e1138bd6c23b59c3ca93f1a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_16e2cee9c56e845f9b0747658b88462228132016ac5d12ec52e79da33f004771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e2cee9c56e845f9b0747658b88462228132016ac5d12ec52e79da33f004771->enter($__internal_16e2cee9c56e845f9b0747658b88462228132016ac5d12ec52e79da33f004771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fc6ec19c39568e440aa2a975bb6b28855ac0a6b123dd385361bfad6b8d8b4e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6ec19c39568e440aa2a975bb6b28855ac0a6b123dd385361bfad6b8d8b4e5b->enter($__internal_fc6ec19c39568e440aa2a975bb6b28855ac0a6b123dd385361bfad6b8d8b4e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fc6ec19c39568e440aa2a975bb6b28855ac0a6b123dd385361bfad6b8d8b4e5b->leave($__internal_fc6ec19c39568e440aa2a975bb6b28855ac0a6b123dd385361bfad6b8d8b4e5b_prof);

        
        $__internal_16e2cee9c56e845f9b0747658b88462228132016ac5d12ec52e79da33f004771->leave($__internal_16e2cee9c56e845f9b0747658b88462228132016ac5d12ec52e79da33f004771_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
