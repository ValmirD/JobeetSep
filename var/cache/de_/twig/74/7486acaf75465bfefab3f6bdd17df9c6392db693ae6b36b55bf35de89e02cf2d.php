<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_bb8f6cda1ad4d40c85b9ecd9ef1c9a953c0dfa25d293b5aa689173a958962705 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a569d10e4d9d9dfd8cbfd18b95b424c17d6739733fe61ee86cf774f1bdc16085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a569d10e4d9d9dfd8cbfd18b95b424c17d6739733fe61ee86cf774f1bdc16085->enter($__internal_a569d10e4d9d9dfd8cbfd18b95b424c17d6739733fe61ee86cf774f1bdc16085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_c5b2dc84f4b26b2b2dfe4de2f3a839d19e3dfb42420c18b5182b2883be0d8ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b2dc84f4b26b2b2dfe4de2f3a839d19e3dfb42420c18b5182b2883be0d8ac2->enter($__internal_c5b2dc84f4b26b2b2dfe4de2f3a839d19e3dfb42420c18b5182b2883be0d8ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a569d10e4d9d9dfd8cbfd18b95b424c17d6739733fe61ee86cf774f1bdc16085->leave($__internal_a569d10e4d9d9dfd8cbfd18b95b424c17d6739733fe61ee86cf774f1bdc16085_prof);

        
        $__internal_c5b2dc84f4b26b2b2dfe4de2f3a839d19e3dfb42420c18b5182b2883be0d8ac2->leave($__internal_c5b2dc84f4b26b2b2dfe4de2f3a839d19e3dfb42420c18b5182b2883be0d8ac2_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f49be780b9a6670ded16462a9e7961c7125e73eace6cc27d03de9ca5095a1376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49be780b9a6670ded16462a9e7961c7125e73eace6cc27d03de9ca5095a1376->enter($__internal_f49be780b9a6670ded16462a9e7961c7125e73eace6cc27d03de9ca5095a1376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_c6301aafec5bc29f004fb1045f0d230a3a1fef12ad3d16c39298c06536f71bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6301aafec5bc29f004fb1045f0d230a3a1fef12ad3d16c39298c06536f71bca->enter($__internal_c6301aafec5bc29f004fb1045f0d230a3a1fef12ad3d16c39298c06536f71bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_c6301aafec5bc29f004fb1045f0d230a3a1fef12ad3d16c39298c06536f71bca->leave($__internal_c6301aafec5bc29f004fb1045f0d230a3a1fef12ad3d16c39298c06536f71bca_prof);

        
        $__internal_f49be780b9a6670ded16462a9e7961c7125e73eace6cc27d03de9ca5095a1376->leave($__internal_f49be780b9a6670ded16462a9e7961c7125e73eace6cc27d03de9ca5095a1376_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_90e8b88d39ebbd4a23140d4443f2b8da366403bd3018edcc445879b8fea7a691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e8b88d39ebbd4a23140d4443f2b8da366403bd3018edcc445879b8fea7a691->enter($__internal_90e8b88d39ebbd4a23140d4443f2b8da366403bd3018edcc445879b8fea7a691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_56b10124f84d0c88762889369115e9f872412c36bdc23dee67fa0f13e87f8ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b10124f84d0c88762889369115e9f872412c36bdc23dee67fa0f13e87f8ade->enter($__internal_56b10124f84d0c88762889369115e9f872412c36bdc23dee67fa0f13e87f8ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_56b10124f84d0c88762889369115e9f872412c36bdc23dee67fa0f13e87f8ade->leave($__internal_56b10124f84d0c88762889369115e9f872412c36bdc23dee67fa0f13e87f8ade_prof);

        
        $__internal_90e8b88d39ebbd4a23140d4443f2b8da366403bd3018edcc445879b8fea7a691->leave($__internal_90e8b88d39ebbd4a23140d4443f2b8da366403bd3018edcc445879b8fea7a691_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_3fff0e00baba509818331e46b20161b287d2d066af1ea7cdb0ad1c68b1a411c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fff0e00baba509818331e46b20161b287d2d066af1ea7cdb0ad1c68b1a411c4->enter($__internal_3fff0e00baba509818331e46b20161b287d2d066af1ea7cdb0ad1c68b1a411c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33b46ee1f3e2d1f97209cda1a15f1c83e98de385cc5fa31fecd74f2405d62136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b46ee1f3e2d1f97209cda1a15f1c83e98de385cc5fa31fecd74f2405d62136->enter($__internal_33b46ee1f3e2d1f97209cda1a15f1c83e98de385cc5fa31fecd74f2405d62136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_33b46ee1f3e2d1f97209cda1a15f1c83e98de385cc5fa31fecd74f2405d62136->leave($__internal_33b46ee1f3e2d1f97209cda1a15f1c83e98de385cc5fa31fecd74f2405d62136_prof);

        
        $__internal_3fff0e00baba509818331e46b20161b287d2d066af1ea7cdb0ad1c68b1a411c4->leave($__internal_3fff0e00baba509818331e46b20161b287d2d066af1ea7cdb0ad1c68b1a411c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
