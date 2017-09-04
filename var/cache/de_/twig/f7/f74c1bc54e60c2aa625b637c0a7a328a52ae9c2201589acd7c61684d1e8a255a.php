<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_b12d8a6685132fd0ac52e5519d467924f20036694ef680e2139297fb86a202ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55349f184e3004b90fd2a5ef4990d832df2f1af70e1d28148925ad6da244e15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55349f184e3004b90fd2a5ef4990d832df2f1af70e1d28148925ad6da244e15a->enter($__internal_55349f184e3004b90fd2a5ef4990d832df2f1af70e1d28148925ad6da244e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        $__internal_71d5a2530b70a0da72b3aac56d1c4b2f3d8cac02af7489f5e690d313f72380a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d5a2530b70a0da72b3aac56d1c4b2f3d8cac02af7489f5e690d313f72380a2->enter($__internal_71d5a2530b70a0da72b3aac56d1c4b2f3d8cac02af7489f5e690d313f72380a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55349f184e3004b90fd2a5ef4990d832df2f1af70e1d28148925ad6da244e15a->leave($__internal_55349f184e3004b90fd2a5ef4990d832df2f1af70e1d28148925ad6da244e15a_prof);

        
        $__internal_71d5a2530b70a0da72b3aac56d1c4b2f3d8cac02af7489f5e690d313f72380a2->leave($__internal_71d5a2530b70a0da72b3aac56d1c4b2f3d8cac02af7489f5e690d313f72380a2_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a74d4bf4b293994a4e1768436f83c24608c122b65704a64357e31dd67289051d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74d4bf4b293994a4e1768436f83c24608c122b65704a64357e31dd67289051d->enter($__internal_a74d4bf4b293994a4e1768436f83c24608c122b65704a64357e31dd67289051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22998e240af1b78fc272293a07906e891e9450c058ba0f7001c4fe08e1a15e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22998e240af1b78fc272293a07906e891e9450c058ba0f7001c4fe08e1a15e05->enter($__internal_22998e240af1b78fc272293a07906e891e9450c058ba0f7001c4fe08e1a15e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_22998e240af1b78fc272293a07906e891e9450c058ba0f7001c4fe08e1a15e05->leave($__internal_22998e240af1b78fc272293a07906e891e9450c058ba0f7001c4fe08e1a15e05_prof);

        
        $__internal_a74d4bf4b293994a4e1768436f83c24608c122b65704a64357e31dd67289051d->leave($__internal_a74d4bf4b293994a4e1768436f83c24608c122b65704a64357e31dd67289051d_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_08312beec424efbc506f8d08de68a5371944833baf104b23d2634a521735e824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08312beec424efbc506f8d08de68a5371944833baf104b23d2634a521735e824->enter($__internal_08312beec424efbc506f8d08de68a5371944833baf104b23d2634a521735e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_a10e6ebc88a83fb4d640950434b58ecfc444eb15916536bca8aa36587eb74e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10e6ebc88a83fb4d640950434b58ecfc444eb15916536bca8aa36587eb74e43->enter($__internal_a10e6ebc88a83fb4d640950434b58ecfc444eb15916536bca8aa36587eb74e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a10e6ebc88a83fb4d640950434b58ecfc444eb15916536bca8aa36587eb74e43->leave($__internal_a10e6ebc88a83fb4d640950434b58ecfc444eb15916536bca8aa36587eb74e43_prof);

        
        $__internal_08312beec424efbc506f8d08de68a5371944833baf104b23d2634a521735e824->leave($__internal_08312beec424efbc506f8d08de68a5371944833baf104b23d2634a521735e824_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e42cbeefea718dd692c4e26341ee9cf8650b26012201d405880ac9d4f1ade8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42cbeefea718dd692c4e26341ee9cf8650b26012201d405880ac9d4f1ade8d4->enter($__internal_e42cbeefea718dd692c4e26341ee9cf8650b26012201d405880ac9d4f1ade8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e519ce396120f71c35cb5064f9b84b674be88b54befbec50788e3a35a14b5ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519ce396120f71c35cb5064f9b84b674be88b54befbec50788e3a35a14b5ca6->enter($__internal_e519ce396120f71c35cb5064f9b84b674be88b54befbec50788e3a35a14b5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
        
        $__internal_e519ce396120f71c35cb5064f9b84b674be88b54befbec50788e3a35a14b5ca6->leave($__internal_e519ce396120f71c35cb5064f9b84b674be88b54befbec50788e3a35a14b5ca6_prof);

        
        $__internal_e42cbeefea718dd692c4e26341ee9cf8650b26012201d405880ac9d4f1ade8d4->leave($__internal_e42cbeefea718dd692c4e26341ee9cf8650b26012201d405880ac9d4f1ade8d4_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d48e4fa22861bc31f317404fb5860c7d47e727f89a058ec6559dacb73915b44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48e4fa22861bc31f317404fb5860c7d47e727f89a058ec6559dacb73915b44a->enter($__internal_d48e4fa22861bc31f317404fb5860c7d47e727f89a058ec6559dacb73915b44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_786f54df5292c7526216e1b0b7de16c8c9dffcda20637105c1e65d326c603490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786f54df5292c7526216e1b0b7de16c8c9dffcda20637105c1e65d326c603490->enter($__internal_786f54df5292c7526216e1b0b7de16c8c9dffcda20637105c1e65d326c603490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_786f54df5292c7526216e1b0b7de16c8c9dffcda20637105c1e65d326c603490->leave($__internal_786f54df5292c7526216e1b0b7de16c8c9dffcda20637105c1e65d326c603490_prof);

        
        $__internal_d48e4fa22861bc31f317404fb5860c7d47e727f89a058ec6559dacb73915b44a->leave($__internal_d48e4fa22861bc31f317404fb5860c7d47e727f89a058ec6559dacb73915b44a_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_6dbbb37b6e6e9a43f93afaa76b91cf852c1b2fa512caf13a9444b6d547ac3fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbbb37b6e6e9a43f93afaa76b91cf852c1b2fa512caf13a9444b6d547ac3fcf->enter($__internal_6dbbb37b6e6e9a43f93afaa76b91cf852c1b2fa512caf13a9444b6d547ac3fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1e4879fd4d179bce8c0015fa75d20fbfd46b42f4dad9d7d22af36179a38ab8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4879fd4d179bce8c0015fa75d20fbfd46b42f4dad9d7d22af36179a38ab8dd->enter($__internal_1e4879fd4d179bce8c0015fa75d20fbfd46b42f4dad9d7d22af36179a38ab8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_1e4879fd4d179bce8c0015fa75d20fbfd46b42f4dad9d7d22af36179a38ab8dd->leave($__internal_1e4879fd4d179bce8c0015fa75d20fbfd46b42f4dad9d7d22af36179a38ab8dd_prof);

        
        $__internal_6dbbb37b6e6e9a43f93afaa76b91cf852c1b2fa512caf13a9444b6d547ac3fcf->leave($__internal_6dbbb37b6e6e9a43f93afaa76b91cf852c1b2fa512caf13a9444b6d547ac3fcf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
", "@SonataAdmin/CRUD/base_edit.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
