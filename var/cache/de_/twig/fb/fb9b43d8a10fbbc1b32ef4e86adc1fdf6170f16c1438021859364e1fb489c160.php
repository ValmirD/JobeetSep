<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_12d23d92707e8cc8c87331a3b26dc0e6ceadf5989b13e913b2d87098df97d7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e41d7b2b8154379e3ffae9ddd6f6250f4a419b394f2bffc8af850b98bc60388c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41d7b2b8154379e3ffae9ddd6f6250f4a419b394f2bffc8af850b98bc60388c->enter($__internal_e41d7b2b8154379e3ffae9ddd6f6250f4a419b394f2bffc8af850b98bc60388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_79f5f7599215a50cd753bfbab97be405f5d1d7fc11155dd5b7950ba80a346b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f5f7599215a50cd753bfbab97be405f5d1d7fc11155dd5b7950ba80a346b7a->enter($__internal_79f5f7599215a50cd753bfbab97be405f5d1d7fc11155dd5b7950ba80a346b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41d7b2b8154379e3ffae9ddd6f6250f4a419b394f2bffc8af850b98bc60388c->leave($__internal_e41d7b2b8154379e3ffae9ddd6f6250f4a419b394f2bffc8af850b98bc60388c_prof);

        
        $__internal_79f5f7599215a50cd753bfbab97be405f5d1d7fc11155dd5b7950ba80a346b7a->leave($__internal_79f5f7599215a50cd753bfbab97be405f5d1d7fc11155dd5b7950ba80a346b7a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d7adb93c2be97f9f5a68fe62b31db557b1434b580a18e44f6c8ed8b0c7b15dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7adb93c2be97f9f5a68fe62b31db557b1434b580a18e44f6c8ed8b0c7b15dfd->enter($__internal_d7adb93c2be97f9f5a68fe62b31db557b1434b580a18e44f6c8ed8b0c7b15dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e0d66039abfde8f63acd2c4312946ed26b139fd6c6c6fa7e4f85b5db82d7fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d66039abfde8f63acd2c4312946ed26b139fd6c6c6fa7e4f85b5db82d7fc3b->enter($__internal_e0d66039abfde8f63acd2c4312946ed26b139fd6c6c6fa7e4f85b5db82d7fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_e0d66039abfde8f63acd2c4312946ed26b139fd6c6c6fa7e4f85b5db82d7fc3b->leave($__internal_e0d66039abfde8f63acd2c4312946ed26b139fd6c6c6fa7e4f85b5db82d7fc3b_prof);

        
        $__internal_d7adb93c2be97f9f5a68fe62b31db557b1434b580a18e44f6c8ed8b0c7b15dfd->leave($__internal_d7adb93c2be97f9f5a68fe62b31db557b1434b580a18e44f6c8ed8b0c7b15dfd_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_86360f6afba7a3267f1961798242f61dee37d11a67be743d979c29bc0d536ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86360f6afba7a3267f1961798242f61dee37d11a67be743d979c29bc0d536ba5->enter($__internal_86360f6afba7a3267f1961798242f61dee37d11a67be743d979c29bc0d536ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_49ef69bab08fb903887fae9d14f67da3bf66c4b71579d456d58631add864f67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ef69bab08fb903887fae9d14f67da3bf66c4b71579d456d58631add864f67b->enter($__internal_49ef69bab08fb903887fae9d14f67da3bf66c4b71579d456d58631add864f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_49ef69bab08fb903887fae9d14f67da3bf66c4b71579d456d58631add864f67b->leave($__internal_49ef69bab08fb903887fae9d14f67da3bf66c4b71579d456d58631add864f67b_prof);

        
        $__internal_86360f6afba7a3267f1961798242f61dee37d11a67be743d979c29bc0d536ba5->leave($__internal_86360f6afba7a3267f1961798242f61dee37d11a67be743d979c29bc0d536ba5_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d8b5243686cae33702b58528da863fad6ab731fcfe00e2470021360d08da82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8b5243686cae33702b58528da863fad6ab731fcfe00e2470021360d08da82f->enter($__internal_8d8b5243686cae33702b58528da863fad6ab731fcfe00e2470021360d08da82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b6a7a756665effec9a9d98a3ebb00e177a23b53889c3410857f3b7a14462dcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a7a756665effec9a9d98a3ebb00e177a23b53889c3410857f3b7a14462dcf4->enter($__internal_b6a7a756665effec9a9d98a3ebb00e177a23b53889c3410857f3b7a14462dcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_b6a7a756665effec9a9d98a3ebb00e177a23b53889c3410857f3b7a14462dcf4->leave($__internal_b6a7a756665effec9a9d98a3ebb00e177a23b53889c3410857f3b7a14462dcf4_prof);

        
        $__internal_8d8b5243686cae33702b58528da863fad6ab731fcfe00e2470021360d08da82f->leave($__internal_8d8b5243686cae33702b58528da863fad6ab731fcfe00e2470021360d08da82f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
