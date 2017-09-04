<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_719976198e985e97fad248e40ac6834811fff97eeaebc71d484ab337fa781b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8191179914f5858f03a410ca261a77163acacd46510e0a53a34a88da0ec7d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8191179914f5858f03a410ca261a77163acacd46510e0a53a34a88da0ec7d7c->enter($__internal_d8191179914f5858f03a410ca261a77163acacd46510e0a53a34a88da0ec7d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_146419a9d08170c9160cbf29e087d51b37e2bb063b6893f6425a161e98c0c3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146419a9d08170c9160cbf29e087d51b37e2bb063b6893f6425a161e98c0c3de->enter($__internal_146419a9d08170c9160cbf29e087d51b37e2bb063b6893f6425a161e98c0c3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8191179914f5858f03a410ca261a77163acacd46510e0a53a34a88da0ec7d7c->leave($__internal_d8191179914f5858f03a410ca261a77163acacd46510e0a53a34a88da0ec7d7c_prof);

        
        $__internal_146419a9d08170c9160cbf29e087d51b37e2bb063b6893f6425a161e98c0c3de->leave($__internal_146419a9d08170c9160cbf29e087d51b37e2bb063b6893f6425a161e98c0c3de_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b237a729c9aae363b1262fbc35cedbddefbfb0219f8a4b3c581c084efef6e55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b237a729c9aae363b1262fbc35cedbddefbfb0219f8a4b3c581c084efef6e55c->enter($__internal_b237a729c9aae363b1262fbc35cedbddefbfb0219f8a4b3c581c084efef6e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffc55cd2518b669149182d79465acb088ac5a4e913879b44612c8b029ec65c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc55cd2518b669149182d79465acb088ac5a4e913879b44612c8b029ec65c49->enter($__internal_ffc55cd2518b669149182d79465acb088ac5a4e913879b44612c8b029ec65c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ffc55cd2518b669149182d79465acb088ac5a4e913879b44612c8b029ec65c49->leave($__internal_ffc55cd2518b669149182d79465acb088ac5a4e913879b44612c8b029ec65c49_prof);

        
        $__internal_b237a729c9aae363b1262fbc35cedbddefbfb0219f8a4b3c581c084efef6e55c->leave($__internal_b237a729c9aae363b1262fbc35cedbddefbfb0219f8a4b3c581c084efef6e55c_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_a8a285e056f318e740b23cb0b748ae02b9f2b4ebb0c5c6c42f7aa0b9d3d4c83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a285e056f318e740b23cb0b748ae02b9f2b4ebb0c5c6c42f7aa0b9d3d4c83f->enter($__internal_a8a285e056f318e740b23cb0b748ae02b9f2b4ebb0c5c6c42f7aa0b9d3d4c83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_a939cc43612024ac7f067a765c2da9e8eb849e34758660691bd3f8b1f6aae103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a939cc43612024ac7f067a765c2da9e8eb849e34758660691bd3f8b1f6aae103->enter($__internal_a939cc43612024ac7f067a765c2da9e8eb849e34758660691bd3f8b1f6aae103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a939cc43612024ac7f067a765c2da9e8eb849e34758660691bd3f8b1f6aae103->leave($__internal_a939cc43612024ac7f067a765c2da9e8eb849e34758660691bd3f8b1f6aae103_prof);

        
        $__internal_a8a285e056f318e740b23cb0b748ae02b9f2b4ebb0c5c6c42f7aa0b9d3d4c83f->leave($__internal_a8a285e056f318e740b23cb0b748ae02b9f2b4ebb0c5c6c42f7aa0b9d3d4c83f_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5300a73a385adce99939c8eb6df9a0c83f372a06f2115aeff21e8d7f7dd8df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5300a73a385adce99939c8eb6df9a0c83f372a06f2115aeff21e8d7f7dd8df7f->enter($__internal_5300a73a385adce99939c8eb6df9a0c83f372a06f2115aeff21e8d7f7dd8df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_c6d4cbc8068f5a48544b7c72c9a0ff7927596035e39403c355f7280f360a2373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d4cbc8068f5a48544b7c72c9a0ff7927596035e39403c355f7280f360a2373->enter($__internal_c6d4cbc8068f5a48544b7c72c9a0ff7927596035e39403c355f7280f360a2373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_c6d4cbc8068f5a48544b7c72c9a0ff7927596035e39403c355f7280f360a2373->leave($__internal_c6d4cbc8068f5a48544b7c72c9a0ff7927596035e39403c355f7280f360a2373_prof);

        
        $__internal_5300a73a385adce99939c8eb6df9a0c83f372a06f2115aeff21e8d7f7dd8df7f->leave($__internal_5300a73a385adce99939c8eb6df9a0c83f372a06f2115aeff21e8d7f7dd8df7f_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2b44a975c7c3dd6bec00b6efc46288745133103a80b82d1316addd4b3cf337f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b44a975c7c3dd6bec00b6efc46288745133103a80b82d1316addd4b3cf337f3->enter($__internal_2b44a975c7c3dd6bec00b6efc46288745133103a80b82d1316addd4b3cf337f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_54ebe28a1ead1c4d34e9ae6a7e64033ebdd232c38cde8583041d9866b9a76d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ebe28a1ead1c4d34e9ae6a7e64033ebdd232c38cde8583041d9866b9a76d83->enter($__internal_54ebe28a1ead1c4d34e9ae6a7e64033ebdd232c38cde8583041d9866b9a76d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_54ebe28a1ead1c4d34e9ae6a7e64033ebdd232c38cde8583041d9866b9a76d83->leave($__internal_54ebe28a1ead1c4d34e9ae6a7e64033ebdd232c38cde8583041d9866b9a76d83_prof);

        
        $__internal_2b44a975c7c3dd6bec00b6efc46288745133103a80b82d1316addd4b3cf337f3->leave($__internal_2b44a975c7c3dd6bec00b6efc46288745133103a80b82d1316addd4b3cf337f3_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_25ceacc0867d0a613fc680afdb7df806d92111d40e39e3e895c968845fae9b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ceacc0867d0a613fc680afdb7df806d92111d40e39e3e895c968845fae9b74->enter($__internal_25ceacc0867d0a613fc680afdb7df806d92111d40e39e3e895c968845fae9b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_7bfe56b38572a810d58d60e4fe6f45afac5cf5f489ec1d0e6aa76dd3daf0d910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfe56b38572a810d58d60e4fe6f45afac5cf5f489ec1d0e6aa76dd3daf0d910->enter($__internal_7bfe56b38572a810d58d60e4fe6f45afac5cf5f489ec1d0e6aa76dd3daf0d910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_7bfe56b38572a810d58d60e4fe6f45afac5cf5f489ec1d0e6aa76dd3daf0d910->leave($__internal_7bfe56b38572a810d58d60e4fe6f45afac5cf5f489ec1d0e6aa76dd3daf0d910_prof);

        
        $__internal_25ceacc0867d0a613fc680afdb7df806d92111d40e39e3e895c968845fae9b74->leave($__internal_25ceacc0867d0a613fc680afdb7df806d92111d40e39e3e895c968845fae9b74_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
