<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_5addf40618d34e956a7d56ded4ee458a546f3f2d8e21e9e6ce68a9fddf8494d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d18be30a52274954564093b9f3433f5c430e25f56e156f676928e9bb9ee730a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d18be30a52274954564093b9f3433f5c430e25f56e156f676928e9bb9ee730a->enter($__internal_7d18be30a52274954564093b9f3433f5c430e25f56e156f676928e9bb9ee730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_b594ea887d620020fcc47f89d5510b84b7a7b830e432a173b8f73c80678a872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b594ea887d620020fcc47f89d5510b84b7a7b830e432a173b8f73c80678a872f->enter($__internal_b594ea887d620020fcc47f89d5510b84b7a7b830e432a173b8f73c80678a872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d18be30a52274954564093b9f3433f5c430e25f56e156f676928e9bb9ee730a->leave($__internal_7d18be30a52274954564093b9f3433f5c430e25f56e156f676928e9bb9ee730a_prof);

        
        $__internal_b594ea887d620020fcc47f89d5510b84b7a7b830e432a173b8f73c80678a872f->leave($__internal_b594ea887d620020fcc47f89d5510b84b7a7b830e432a173b8f73c80678a872f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ffb42e57236150b18289927d8199a2d16df3a99e626b00d873b75157b8b69d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb42e57236150b18289927d8199a2d16df3a99e626b00d873b75157b8b69d4d->enter($__internal_ffb42e57236150b18289927d8199a2d16df3a99e626b00d873b75157b8b69d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_cddf54e9bdd9d3bb89c3d2d507c354ad97fe9f5d7f02bfc6bb27b3acfea514ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddf54e9bdd9d3bb89c3d2d507c354ad97fe9f5d7f02bfc6bb27b3acfea514ab->enter($__internal_cddf54e9bdd9d3bb89c3d2d507c354ad97fe9f5d7f02bfc6bb27b3acfea514ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_cddf54e9bdd9d3bb89c3d2d507c354ad97fe9f5d7f02bfc6bb27b3acfea514ab->leave($__internal_cddf54e9bdd9d3bb89c3d2d507c354ad97fe9f5d7f02bfc6bb27b3acfea514ab_prof);

        
        $__internal_ffb42e57236150b18289927d8199a2d16df3a99e626b00d873b75157b8b69d4d->leave($__internal_ffb42e57236150b18289927d8199a2d16df3a99e626b00d873b75157b8b69d4d_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_695c3452a170aa1a017c6614ea64fcd1a935c89eac020aa71440981bbf984f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695c3452a170aa1a017c6614ea64fcd1a935c89eac020aa71440981bbf984f1f->enter($__internal_695c3452a170aa1a017c6614ea64fcd1a935c89eac020aa71440981bbf984f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0ba6a84ef766d38b397fb363f11b1164030bdff229e6d8430a7cbbd8659d7981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba6a84ef766d38b397fb363f11b1164030bdff229e6d8430a7cbbd8659d7981->enter($__internal_0ba6a84ef766d38b397fb363f11b1164030bdff229e6d8430a7cbbd8659d7981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_0ba6a84ef766d38b397fb363f11b1164030bdff229e6d8430a7cbbd8659d7981->leave($__internal_0ba6a84ef766d38b397fb363f11b1164030bdff229e6d8430a7cbbd8659d7981_prof);

        
        $__internal_695c3452a170aa1a017c6614ea64fcd1a935c89eac020aa71440981bbf984f1f->leave($__internal_695c3452a170aa1a017c6614ea64fcd1a935c89eac020aa71440981bbf984f1f_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_ce35dbcfcaa4771534af4aa6c3e1a608ad740c7ca1f3cb3d04585ffeaed6e865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce35dbcfcaa4771534af4aa6c3e1a608ad740c7ca1f3cb3d04585ffeaed6e865->enter($__internal_ce35dbcfcaa4771534af4aa6c3e1a608ad740c7ca1f3cb3d04585ffeaed6e865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_5631016397f7cff963c13686390ce5ae2b9629150417fc944afa6f805352b705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5631016397f7cff963c13686390ce5ae2b9629150417fc944afa6f805352b705->enter($__internal_5631016397f7cff963c13686390ce5ae2b9629150417fc944afa6f805352b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5631016397f7cff963c13686390ce5ae2b9629150417fc944afa6f805352b705->leave($__internal_5631016397f7cff963c13686390ce5ae2b9629150417fc944afa6f805352b705_prof);

        
        $__internal_ce35dbcfcaa4771534af4aa6c3e1a608ad740c7ca1f3cb3d04585ffeaed6e865->leave($__internal_ce35dbcfcaa4771534af4aa6c3e1a608ad740c7ca1f3cb3d04585ffeaed6e865_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_561a266e4d75448021a919fcf7efa9cb65c516cd08f50642897afd034778f6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561a266e4d75448021a919fcf7efa9cb65c516cd08f50642897afd034778f6d0->enter($__internal_561a266e4d75448021a919fcf7efa9cb65c516cd08f50642897afd034778f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_561913c53b1376e55f1032fb60c66b84a378e67484457900fc692c2a0c8ea5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561913c53b1376e55f1032fb60c66b84a378e67484457900fc692c2a0c8ea5b9->enter($__internal_561913c53b1376e55f1032fb60c66b84a378e67484457900fc692c2a0c8ea5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_561913c53b1376e55f1032fb60c66b84a378e67484457900fc692c2a0c8ea5b9->leave($__internal_561913c53b1376e55f1032fb60c66b84a378e67484457900fc692c2a0c8ea5b9_prof);

        
        $__internal_561a266e4d75448021a919fcf7efa9cb65c516cd08f50642897afd034778f6d0->leave($__internal_561a266e4d75448021a919fcf7efa9cb65c516cd08f50642897afd034778f6d0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
