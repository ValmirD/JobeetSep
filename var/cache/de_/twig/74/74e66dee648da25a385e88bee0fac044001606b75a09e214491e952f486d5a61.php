<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_f2a842434ea6b80788a668986e0d7fa921b9749c1ee184a46aedbbec0ec72f5c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f08af8901786750a87da6f889ff8eed5f9ca8f5356774bc8c44bbf119c0b5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f08af8901786750a87da6f889ff8eed5f9ca8f5356774bc8c44bbf119c0b5a5->enter($__internal_3f08af8901786750a87da6f889ff8eed5f9ca8f5356774bc8c44bbf119c0b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_70a009e218a697829dd7f67fe1aba4e62b7f82f8af803f287552ee21bf56ad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a009e218a697829dd7f67fe1aba4e62b7f82f8af803f287552ee21bf56ad3b->enter($__internal_70a009e218a697829dd7f67fe1aba4e62b7f82f8af803f287552ee21bf56ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f08af8901786750a87da6f889ff8eed5f9ca8f5356774bc8c44bbf119c0b5a5->leave($__internal_3f08af8901786750a87da6f889ff8eed5f9ca8f5356774bc8c44bbf119c0b5a5_prof);

        
        $__internal_70a009e218a697829dd7f67fe1aba4e62b7f82f8af803f287552ee21bf56ad3b->leave($__internal_70a009e218a697829dd7f67fe1aba4e62b7f82f8af803f287552ee21bf56ad3b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d841194b4a72575091b1d6e8b4b3c1aa4b1693fee288f4016b51bd1f64b4ea67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d841194b4a72575091b1d6e8b4b3c1aa4b1693fee288f4016b51bd1f64b4ea67->enter($__internal_d841194b4a72575091b1d6e8b4b3c1aa4b1693fee288f4016b51bd1f64b4ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8cf50fc1cb4aa4d66d9e8aeb5b7c4c78904bf02a098dda1452ef7b61f028e1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf50fc1cb4aa4d66d9e8aeb5b7c4c78904bf02a098dda1452ef7b61f028e1a9->enter($__internal_8cf50fc1cb4aa4d66d9e8aeb5b7c4c78904bf02a098dda1452ef7b61f028e1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8cf50fc1cb4aa4d66d9e8aeb5b7c4c78904bf02a098dda1452ef7b61f028e1a9->leave($__internal_8cf50fc1cb4aa4d66d9e8aeb5b7c4c78904bf02a098dda1452ef7b61f028e1a9_prof);

        
        $__internal_d841194b4a72575091b1d6e8b4b3c1aa4b1693fee288f4016b51bd1f64b4ea67->leave($__internal_d841194b4a72575091b1d6e8b4b3c1aa4b1693fee288f4016b51bd1f64b4ea67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
