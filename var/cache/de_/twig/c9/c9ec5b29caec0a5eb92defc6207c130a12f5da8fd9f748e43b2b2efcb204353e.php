<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_24ebf14ed0efcae5f75a62358a65dab262e6f5aded0892bac3b8336515320e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423d5880e3b22d74b1d7a5f4d14ba89fcac67c824f4e09e6ffa89dae5fcb39ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423d5880e3b22d74b1d7a5f4d14ba89fcac67c824f4e09e6ffa89dae5fcb39ee->enter($__internal_423d5880e3b22d74b1d7a5f4d14ba89fcac67c824f4e09e6ffa89dae5fcb39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_c0cf6ca76e1e790b971d68871dbafd999d27a5d2f0a282532253272633063f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cf6ca76e1e790b971d68871dbafd999d27a5d2f0a282532253272633063f59->enter($__internal_c0cf6ca76e1e790b971d68871dbafd999d27a5d2f0a282532253272633063f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423d5880e3b22d74b1d7a5f4d14ba89fcac67c824f4e09e6ffa89dae5fcb39ee->leave($__internal_423d5880e3b22d74b1d7a5f4d14ba89fcac67c824f4e09e6ffa89dae5fcb39ee_prof);

        
        $__internal_c0cf6ca76e1e790b971d68871dbafd999d27a5d2f0a282532253272633063f59->leave($__internal_c0cf6ca76e1e790b971d68871dbafd999d27a5d2f0a282532253272633063f59_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_a9840c8e36f94f309ee26902167683f1cbb940679f4ef615240778af27f3c60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9840c8e36f94f309ee26902167683f1cbb940679f4ef615240778af27f3c60b->enter($__internal_a9840c8e36f94f309ee26902167683f1cbb940679f4ef615240778af27f3c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_be2e4fe2b9e4542a06e978e49727eec32daf930f8b63003643d65e24bd913293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2e4fe2b9e4542a06e978e49727eec32daf930f8b63003643d65e24bd913293->enter($__internal_be2e4fe2b9e4542a06e978e49727eec32daf930f8b63003643d65e24bd913293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_be2e4fe2b9e4542a06e978e49727eec32daf930f8b63003643d65e24bd913293->leave($__internal_be2e4fe2b9e4542a06e978e49727eec32daf930f8b63003643d65e24bd913293_prof);

        
        $__internal_a9840c8e36f94f309ee26902167683f1cbb940679f4ef615240778af27f3c60b->leave($__internal_a9840c8e36f94f309ee26902167683f1cbb940679f4ef615240778af27f3c60b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 15,  33 => 13,  31 => 11,  11 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
