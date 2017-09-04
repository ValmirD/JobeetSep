<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_8902e40085352c7e37de68e0addf2dd0251a1fdce57201a307d4c17eba3ca576 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2853ac4df031cdefaa96f4be85d159df5e30bc3c07e8f35037a62e39e0c653ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2853ac4df031cdefaa96f4be85d159df5e30bc3c07e8f35037a62e39e0c653ed->enter($__internal_2853ac4df031cdefaa96f4be85d159df5e30bc3c07e8f35037a62e39e0c653ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_7a05241cefaf8de5afa452af87385fe60c7c8bb8c4c764cc4dba3ff8ab98bdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a05241cefaf8de5afa452af87385fe60c7c8bb8c4c764cc4dba3ff8ab98bdbb->enter($__internal_7a05241cefaf8de5afa452af87385fe60c7c8bb8c4c764cc4dba3ff8ab98bdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2853ac4df031cdefaa96f4be85d159df5e30bc3c07e8f35037a62e39e0c653ed->leave($__internal_2853ac4df031cdefaa96f4be85d159df5e30bc3c07e8f35037a62e39e0c653ed_prof);

        
        $__internal_7a05241cefaf8de5afa452af87385fe60c7c8bb8c4c764cc4dba3ff8ab98bdbb->leave($__internal_7a05241cefaf8de5afa452af87385fe60c7c8bb8c4c764cc4dba3ff8ab98bdbb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b8e64586f5740ac0ff4f15c5042aab111292af927913409d9251ad5e52c0266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e64586f5740ac0ff4f15c5042aab111292af927913409d9251ad5e52c0266->enter($__internal_8b8e64586f5740ac0ff4f15c5042aab111292af927913409d9251ad5e52c0266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f2d22e9c879ecb09d580f1f7bf24c5ed15e139e3ccb58554df68da749677d672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d22e9c879ecb09d580f1f7bf24c5ed15e139e3ccb58554df68da749677d672->enter($__internal_f2d22e9c879ecb09d580f1f7bf24c5ed15e139e3ccb58554df68da749677d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f2d22e9c879ecb09d580f1f7bf24c5ed15e139e3ccb58554df68da749677d672->leave($__internal_f2d22e9c879ecb09d580f1f7bf24c5ed15e139e3ccb58554df68da749677d672_prof);

        
        $__internal_8b8e64586f5740ac0ff4f15c5042aab111292af927913409d9251ad5e52c0266->leave($__internal_8b8e64586f5740ac0ff4f15c5042aab111292af927913409d9251ad5e52c0266_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
