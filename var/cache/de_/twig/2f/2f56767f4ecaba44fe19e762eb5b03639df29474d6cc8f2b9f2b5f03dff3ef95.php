<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_a5275c9d288c6009bfe78a79305ce35b2503f10e6027d12bc1520ecf54819fe4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172c8852b935debd53cd656fc680262a2f65a9ad54cb99a84933cd7eede320c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172c8852b935debd53cd656fc680262a2f65a9ad54cb99a84933cd7eede320c4->enter($__internal_172c8852b935debd53cd656fc680262a2f65a9ad54cb99a84933cd7eede320c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_bc95aa83a363345d1d58c592b3ef3f3182f63412039c5d34db3bec75b9242e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc95aa83a363345d1d58c592b3ef3f3182f63412039c5d34db3bec75b9242e3d->enter($__internal_bc95aa83a363345d1d58c592b3ef3f3182f63412039c5d34db3bec75b9242e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172c8852b935debd53cd656fc680262a2f65a9ad54cb99a84933cd7eede320c4->leave($__internal_172c8852b935debd53cd656fc680262a2f65a9ad54cb99a84933cd7eede320c4_prof);

        
        $__internal_bc95aa83a363345d1d58c592b3ef3f3182f63412039c5d34db3bec75b9242e3d->leave($__internal_bc95aa83a363345d1d58c592b3ef3f3182f63412039c5d34db3bec75b9242e3d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2dfc6d016d2be833fe372c2f6aaf5e5c011a98ea52a4884b3909e6b2fba38088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dfc6d016d2be833fe372c2f6aaf5e5c011a98ea52a4884b3909e6b2fba38088->enter($__internal_2dfc6d016d2be833fe372c2f6aaf5e5c011a98ea52a4884b3909e6b2fba38088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4b334d831a02e5700ab94ff829ce69c2c806889c6522830a990d1b7fe88466c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b334d831a02e5700ab94ff829ce69c2c806889c6522830a990d1b7fe88466c6->enter($__internal_4b334d831a02e5700ab94ff829ce69c2c806889c6522830a990d1b7fe88466c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_4b334d831a02e5700ab94ff829ce69c2c806889c6522830a990d1b7fe88466c6->leave($__internal_4b334d831a02e5700ab94ff829ce69c2c806889c6522830a990d1b7fe88466c6_prof);

        
        $__internal_2dfc6d016d2be833fe372c2f6aaf5e5c011a98ea52a4884b3909e6b2fba38088->leave($__internal_2dfc6d016d2be833fe372c2f6aaf5e5c011a98ea52a4884b3909e6b2fba38088_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
