<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_efdd405ebfeb33f5bb2214ed8b22ad44bc6926f228a0b1b5dd95dbfd9c6fc07b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44f6c165d5bbc1e42e5af68bb9124463006dfaad26f1d0da0b55c20167c1f517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f6c165d5bbc1e42e5af68bb9124463006dfaad26f1d0da0b55c20167c1f517->enter($__internal_44f6c165d5bbc1e42e5af68bb9124463006dfaad26f1d0da0b55c20167c1f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_54e1c9768ef68c3b6b1f5e69bd5d634f17e96537233ad279802fc90bb4da371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e1c9768ef68c3b6b1f5e69bd5d634f17e96537233ad279802fc90bb4da371d->enter($__internal_54e1c9768ef68c3b6b1f5e69bd5d634f17e96537233ad279802fc90bb4da371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f6c165d5bbc1e42e5af68bb9124463006dfaad26f1d0da0b55c20167c1f517->leave($__internal_44f6c165d5bbc1e42e5af68bb9124463006dfaad26f1d0da0b55c20167c1f517_prof);

        
        $__internal_54e1c9768ef68c3b6b1f5e69bd5d634f17e96537233ad279802fc90bb4da371d->leave($__internal_54e1c9768ef68c3b6b1f5e69bd5d634f17e96537233ad279802fc90bb4da371d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e48edfd6f0a7a0a456402d1ec3769cbd8a3361314b17bc39841bab6ef5600460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48edfd6f0a7a0a456402d1ec3769cbd8a3361314b17bc39841bab6ef5600460->enter($__internal_e48edfd6f0a7a0a456402d1ec3769cbd8a3361314b17bc39841bab6ef5600460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dc6cd6bcf710992261183a3602b5c2e102154790466e0598ff3d88454704a7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6cd6bcf710992261183a3602b5c2e102154790466e0598ff3d88454704a7aa->enter($__internal_dc6cd6bcf710992261183a3602b5c2e102154790466e0598ff3d88454704a7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_dc6cd6bcf710992261183a3602b5c2e102154790466e0598ff3d88454704a7aa->leave($__internal_dc6cd6bcf710992261183a3602b5c2e102154790466e0598ff3d88454704a7aa_prof);

        
        $__internal_e48edfd6f0a7a0a456402d1ec3769cbd8a3361314b17bc39841bab6ef5600460->leave($__internal_e48edfd6f0a7a0a456402d1ec3769cbd8a3361314b17bc39841bab6ef5600460_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
