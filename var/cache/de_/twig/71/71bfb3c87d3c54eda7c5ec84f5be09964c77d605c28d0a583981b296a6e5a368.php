<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_4079bfa39e4a6509d0d45ea5f3e0fd8e78269b9bf3de7d86a933d0436ae08c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43900382c30878426f60e0646cd361def0d2b78ed3e7f3ce1b2b8565e1b734a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43900382c30878426f60e0646cd361def0d2b78ed3e7f3ce1b2b8565e1b734a->enter($__internal_a43900382c30878426f60e0646cd361def0d2b78ed3e7f3ce1b2b8565e1b734a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_099828d908bd72aa1ac6059eb53cd25978eb7aa9869cd3c0d8644f35ce3674b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099828d908bd72aa1ac6059eb53cd25978eb7aa9869cd3c0d8644f35ce3674b5->enter($__internal_099828d908bd72aa1ac6059eb53cd25978eb7aa9869cd3c0d8644f35ce3674b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43900382c30878426f60e0646cd361def0d2b78ed3e7f3ce1b2b8565e1b734a->leave($__internal_a43900382c30878426f60e0646cd361def0d2b78ed3e7f3ce1b2b8565e1b734a_prof);

        
        $__internal_099828d908bd72aa1ac6059eb53cd25978eb7aa9869cd3c0d8644f35ce3674b5->leave($__internal_099828d908bd72aa1ac6059eb53cd25978eb7aa9869cd3c0d8644f35ce3674b5_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d32cf7ad283a35a220ea7e5b4f949a800e80b8911beafca8fe7a926507f2d605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32cf7ad283a35a220ea7e5b4f949a800e80b8911beafca8fe7a926507f2d605->enter($__internal_d32cf7ad283a35a220ea7e5b4f949a800e80b8911beafca8fe7a926507f2d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_f6a3210695876c27c9aee409b65b5cc98cffb960b75178d10bab77703d624fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a3210695876c27c9aee409b65b5cc98cffb960b75178d10bab77703d624fc4->enter($__internal_f6a3210695876c27c9aee409b65b5cc98cffb960b75178d10bab77703d624fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_f6a3210695876c27c9aee409b65b5cc98cffb960b75178d10bab77703d624fc4->leave($__internal_f6a3210695876c27c9aee409b65b5cc98cffb960b75178d10bab77703d624fc4_prof);

        
        $__internal_d32cf7ad283a35a220ea7e5b4f949a800e80b8911beafca8fe7a926507f2d605->leave($__internal_d32cf7ad283a35a220ea7e5b4f949a800e80b8911beafca8fe7a926507f2d605_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_3d7ab9c2599f092006fc1093f0dd6a58e6de72576391ec2f45019d56e4ff88d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7ab9c2599f092006fc1093f0dd6a58e6de72576391ec2f45019d56e4ff88d0->enter($__internal_3d7ab9c2599f092006fc1093f0dd6a58e6de72576391ec2f45019d56e4ff88d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_65e3716090148ccb72f0b1a7e17fe7c664e2428a062dc218e2bafe2bb2a6afea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e3716090148ccb72f0b1a7e17fe7c664e2428a062dc218e2bafe2bb2a6afea->enter($__internal_65e3716090148ccb72f0b1a7e17fe7c664e2428a062dc218e2bafe2bb2a6afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_65e3716090148ccb72f0b1a7e17fe7c664e2428a062dc218e2bafe2bb2a6afea->leave($__internal_65e3716090148ccb72f0b1a7e17fe7c664e2428a062dc218e2bafe2bb2a6afea_prof);

        
        $__internal_3d7ab9c2599f092006fc1093f0dd6a58e6de72576391ec2f45019d56e4ff88d0->leave($__internal_3d7ab9c2599f092006fc1093f0dd6a58e6de72576391ec2f45019d56e4ff88d0_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_a4487de40147401346719da865bb782bd122d0ba6bebb0140af73ba06733e909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4487de40147401346719da865bb782bd122d0ba6bebb0140af73ba06733e909->enter($__internal_a4487de40147401346719da865bb782bd122d0ba6bebb0140af73ba06733e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_93c9dcd899d02ab2af662e1c36d838be690152606228ce087430bddf1d40b128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c9dcd899d02ab2af662e1c36d838be690152606228ce087430bddf1d40b128->enter($__internal_93c9dcd899d02ab2af662e1c36d838be690152606228ce087430bddf1d40b128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_93c9dcd899d02ab2af662e1c36d838be690152606228ce087430bddf1d40b128->leave($__internal_93c9dcd899d02ab2af662e1c36d838be690152606228ce087430bddf1d40b128_prof);

        
        $__internal_a4487de40147401346719da865bb782bd122d0ba6bebb0140af73ba06733e909->leave($__internal_a4487de40147401346719da865bb782bd122d0ba6bebb0140af73ba06733e909_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f94ddc40ca0a8e23529fba14e11f04348120f97b452a734b741467ecc3a8b54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94ddc40ca0a8e23529fba14e11f04348120f97b452a734b741467ecc3a8b54e->enter($__internal_f94ddc40ca0a8e23529fba14e11f04348120f97b452a734b741467ecc3a8b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_0868dc2caf112edfa80696ceb286173017478e6e7ddd798aae2bb3de0a5dd982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0868dc2caf112edfa80696ceb286173017478e6e7ddd798aae2bb3de0a5dd982->enter($__internal_0868dc2caf112edfa80696ceb286173017478e6e7ddd798aae2bb3de0a5dd982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_0868dc2caf112edfa80696ceb286173017478e6e7ddd798aae2bb3de0a5dd982->leave($__internal_0868dc2caf112edfa80696ceb286173017478e6e7ddd798aae2bb3de0a5dd982_prof);

        
        $__internal_f94ddc40ca0a8e23529fba14e11f04348120f97b452a734b741467ecc3a8b54e->leave($__internal_f94ddc40ca0a8e23529fba14e11f04348120f97b452a734b741467ecc3a8b54e_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_e4c5dede19c729638c899ccf9e921a67e22607f4280f6815a3089d0db1ce69ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c5dede19c729638c899ccf9e921a67e22607f4280f6815a3089d0db1ce69ec->enter($__internal_e4c5dede19c729638c899ccf9e921a67e22607f4280f6815a3089d0db1ce69ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6d4e4ff0efbe124b85e210d1c04fc7dd1b868654beac6e56be39104f4216e816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4e4ff0efbe124b85e210d1c04fc7dd1b868654beac6e56be39104f4216e816->enter($__internal_6d4e4ff0efbe124b85e210d1c04fc7dd1b868654beac6e56be39104f4216e816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6d4e4ff0efbe124b85e210d1c04fc7dd1b868654beac6e56be39104f4216e816->leave($__internal_6d4e4ff0efbe124b85e210d1c04fc7dd1b868654beac6e56be39104f4216e816_prof);

        
        $__internal_e4c5dede19c729638c899ccf9e921a67e22607f4280f6815a3089d0db1ce69ec->leave($__internal_e4c5dede19c729638c899ccf9e921a67e22607f4280f6815a3089d0db1ce69ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
