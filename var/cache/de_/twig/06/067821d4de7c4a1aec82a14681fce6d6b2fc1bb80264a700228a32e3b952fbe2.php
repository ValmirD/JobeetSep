<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_d22c5426787b5fdd37ae4981c4af6a5f3dedfaeeea097e6d57b7fe266db0f6b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94870dd86d21cd541bcbe5912e47c0842fecb02c40e6efb3ced1b86453e3ea0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94870dd86d21cd541bcbe5912e47c0842fecb02c40e6efb3ced1b86453e3ea0b->enter($__internal_94870dd86d21cd541bcbe5912e47c0842fecb02c40e6efb3ced1b86453e3ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_fee60cce3ef5429d1507a7e7056f97f19f0fd6709e3e2c09af52421cdcf8a580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee60cce3ef5429d1507a7e7056f97f19f0fd6709e3e2c09af52421cdcf8a580->enter($__internal_fee60cce3ef5429d1507a7e7056f97f19f0fd6709e3e2c09af52421cdcf8a580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_94870dd86d21cd541bcbe5912e47c0842fecb02c40e6efb3ced1b86453e3ea0b->leave($__internal_94870dd86d21cd541bcbe5912e47c0842fecb02c40e6efb3ced1b86453e3ea0b_prof);

        
        $__internal_fee60cce3ef5429d1507a7e7056f97f19f0fd6709e3e2c09af52421cdcf8a580->leave($__internal_fee60cce3ef5429d1507a7e7056f97f19f0fd6709e3e2c09af52421cdcf8a580_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_7610ffa637f123d6fd2f59873461503698ea2f550c6abe11e24ad47f2b57287c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7610ffa637f123d6fd2f59873461503698ea2f550c6abe11e24ad47f2b57287c->enter($__internal_7610ffa637f123d6fd2f59873461503698ea2f550c6abe11e24ad47f2b57287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_103d902e9377f2c3d24bb00e57fc0d7e294b5d935b0a38d712d2a144af4978a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103d902e9377f2c3d24bb00e57fc0d7e294b5d935b0a38d712d2a144af4978a5->enter($__internal_103d902e9377f2c3d24bb00e57fc0d7e294b5d935b0a38d712d2a144af4978a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_103d902e9377f2c3d24bb00e57fc0d7e294b5d935b0a38d712d2a144af4978a5->leave($__internal_103d902e9377f2c3d24bb00e57fc0d7e294b5d935b0a38d712d2a144af4978a5_prof);

        
        $__internal_7610ffa637f123d6fd2f59873461503698ea2f550c6abe11e24ad47f2b57287c->leave($__internal_7610ffa637f123d6fd2f59873461503698ea2f550c6abe11e24ad47f2b57287c_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa1cf9fcb84dd6fcac013e8f37a87a8eb48b9dde105433a179920101b1e94fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1cf9fcb84dd6fcac013e8f37a87a8eb48b9dde105433a179920101b1e94fa4->enter($__internal_fa1cf9fcb84dd6fcac013e8f37a87a8eb48b9dde105433a179920101b1e94fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dbab3f5adcbc3c22bdbd9ea3715c8805261034633877850f5b39c20284409f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbab3f5adcbc3c22bdbd9ea3715c8805261034633877850f5b39c20284409f4d->enter($__internal_dbab3f5adcbc3c22bdbd9ea3715c8805261034633877850f5b39c20284409f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_dbab3f5adcbc3c22bdbd9ea3715c8805261034633877850f5b39c20284409f4d->leave($__internal_dbab3f5adcbc3c22bdbd9ea3715c8805261034633877850f5b39c20284409f4d_prof);

        
        $__internal_fa1cf9fcb84dd6fcac013e8f37a87a8eb48b9dde105433a179920101b1e94fa4->leave($__internal_fa1cf9fcb84dd6fcac013e8f37a87a8eb48b9dde105433a179920101b1e94fa4_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_4d7a1d5d457463e21b64e1829190416fc8bf655d16b220ff5fe1b1b68704736d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7a1d5d457463e21b64e1829190416fc8bf655d16b220ff5fe1b1b68704736d->enter($__internal_4d7a1d5d457463e21b64e1829190416fc8bf655d16b220ff5fe1b1b68704736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_89e7e7a4cb2e6a02c0f6690253b291220e377656d022d965c3e29b81eef33300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e7e7a4cb2e6a02c0f6690253b291220e377656d022d965c3e29b81eef33300->enter($__internal_89e7e7a4cb2e6a02c0f6690253b291220e377656d022d965c3e29b81eef33300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_89e7e7a4cb2e6a02c0f6690253b291220e377656d022d965c3e29b81eef33300->leave($__internal_89e7e7a4cb2e6a02c0f6690253b291220e377656d022d965c3e29b81eef33300_prof);

        
        $__internal_4d7a1d5d457463e21b64e1829190416fc8bf655d16b220ff5fe1b1b68704736d->leave($__internal_4d7a1d5d457463e21b64e1829190416fc8bf655d16b220ff5fe1b1b68704736d_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_287369f3ce78c254893c7d5d9a656f1a6cc85c67d277afb67961857b744382f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287369f3ce78c254893c7d5d9a656f1a6cc85c67d277afb67961857b744382f3->enter($__internal_287369f3ce78c254893c7d5d9a656f1a6cc85c67d277afb67961857b744382f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_d6e4ecd23fa9372056a5ebb549e16bef723c4cba1bb7a3559c4a0a9144135eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4ecd23fa9372056a5ebb549e16bef723c4cba1bb7a3559c4a0a9144135eca->enter($__internal_d6e4ecd23fa9372056a5ebb549e16bef723c4cba1bb7a3559c4a0a9144135eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_d6e4ecd23fa9372056a5ebb549e16bef723c4cba1bb7a3559c4a0a9144135eca->leave($__internal_d6e4ecd23fa9372056a5ebb549e16bef723c4cba1bb7a3559c4a0a9144135eca_prof);

        
        $__internal_287369f3ce78c254893c7d5d9a656f1a6cc85c67d277afb67961857b744382f3->leave($__internal_287369f3ce78c254893c7d5d9a656f1a6cc85c67d277afb67961857b744382f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
