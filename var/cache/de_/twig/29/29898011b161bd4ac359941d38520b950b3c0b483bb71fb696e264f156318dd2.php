<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_b20d04f0b80ecbc0d66d61a2fd13b06ae8f918e421d7cf2c8a5cbd8dd2612f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc75442a48b6eff51c83f399ae207546a48b68bf7c8279edaee8ba537879792d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc75442a48b6eff51c83f399ae207546a48b68bf7c8279edaee8ba537879792d->enter($__internal_bc75442a48b6eff51c83f399ae207546a48b68bf7c8279edaee8ba537879792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        $__internal_de855009033f7c2794a36b3b40512210a5e062dfb5ca1422d1326c03bfa5a8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de855009033f7c2794a36b3b40512210a5e062dfb5ca1422d1326c03bfa5a8da->enter($__internal_de855009033f7c2794a36b3b40512210a5e062dfb5ca1422d1326c03bfa5a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_bc75442a48b6eff51c83f399ae207546a48b68bf7c8279edaee8ba537879792d->leave($__internal_bc75442a48b6eff51c83f399ae207546a48b68bf7c8279edaee8ba537879792d_prof);

        
        $__internal_de855009033f7c2794a36b3b40512210a5e062dfb5ca1422d1326c03bfa5a8da->leave($__internal_de855009033f7c2794a36b3b40512210a5e062dfb5ca1422d1326c03bfa5a8da_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_aa8feeeb923e838fd623b14210fc5895594c5d8d1f20bc5b7fe59eb946bd4687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8feeeb923e838fd623b14210fc5895594c5d8d1f20bc5b7fe59eb946bd4687->enter($__internal_aa8feeeb923e838fd623b14210fc5895594c5d8d1f20bc5b7fe59eb946bd4687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d1a6050b595842295e8be2f5d93ca933a3a88f5eaf94e25b7c208c5140c6bb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a6050b595842295e8be2f5d93ca933a3a88f5eaf94e25b7c208c5140c6bb1d->enter($__internal_d1a6050b595842295e8be2f5d93ca933a3a88f5eaf94e25b7c208c5140c6bb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_d1a6050b595842295e8be2f5d93ca933a3a88f5eaf94e25b7c208c5140c6bb1d->leave($__internal_d1a6050b595842295e8be2f5d93ca933a3a88f5eaf94e25b7c208c5140c6bb1d_prof);

        
        $__internal_aa8feeeb923e838fd623b14210fc5895594c5d8d1f20bc5b7fe59eb946bd4687->leave($__internal_aa8feeeb923e838fd623b14210fc5895594c5d8d1f20bc5b7fe59eb946bd4687_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_edc5a680ac71bc099b3355e3ab00fb46230c562a15fef8098f2462e318e09b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc5a680ac71bc099b3355e3ab00fb46230c562a15fef8098f2462e318e09b14->enter($__internal_edc5a680ac71bc099b3355e3ab00fb46230c562a15fef8098f2462e318e09b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b76dcd00f72fec1d92887390182d1fa1e6f14143b48314124d47eca170d49cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76dcd00f72fec1d92887390182d1fa1e6f14143b48314124d47eca170d49cc6->enter($__internal_b76dcd00f72fec1d92887390182d1fa1e6f14143b48314124d47eca170d49cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_b76dcd00f72fec1d92887390182d1fa1e6f14143b48314124d47eca170d49cc6->leave($__internal_b76dcd00f72fec1d92887390182d1fa1e6f14143b48314124d47eca170d49cc6_prof);

        
        $__internal_edc5a680ac71bc099b3355e3ab00fb46230c562a15fef8098f2462e318e09b14->leave($__internal_edc5a680ac71bc099b3355e3ab00fb46230c562a15fef8098f2462e318e09b14_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e8d8943f5bf46a345315cb39bde5777b3544accac2ac2dbc13c33a8a371dd433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d8943f5bf46a345315cb39bde5777b3544accac2ac2dbc13c33a8a371dd433->enter($__internal_e8d8943f5bf46a345315cb39bde5777b3544accac2ac2dbc13c33a8a371dd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_0c029d7e91b8b98757fdf0f23ea5cc6b0c787f744b4904c4087095620cdc397b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c029d7e91b8b98757fdf0f23ea5cc6b0c787f744b4904c4087095620cdc397b->enter($__internal_0c029d7e91b8b98757fdf0f23ea5cc6b0c787f744b4904c4087095620cdc397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_0c029d7e91b8b98757fdf0f23ea5cc6b0c787f744b4904c4087095620cdc397b->leave($__internal_0c029d7e91b8b98757fdf0f23ea5cc6b0c787f744b4904c4087095620cdc397b_prof);

        
        $__internal_e8d8943f5bf46a345315cb39bde5777b3544accac2ac2dbc13c33a8a371dd433->leave($__internal_e8d8943f5bf46a345315cb39bde5777b3544accac2ac2dbc13c33a8a371dd433_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_inline_edit_field.html.twig");
    }
}
