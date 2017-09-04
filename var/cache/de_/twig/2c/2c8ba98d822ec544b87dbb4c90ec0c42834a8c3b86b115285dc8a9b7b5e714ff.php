<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_40c46427ef74d83bf5009ccb8489136b1da1d6ba6aa92e0421680cb3ad193285 extends Twig_Template
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
        $__internal_6e9155f3bf32ffc68c6971e67ffd6438fa9cf9172748126462c8312b861938e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9155f3bf32ffc68c6971e67ffd6438fa9cf9172748126462c8312b861938e0->enter($__internal_6e9155f3bf32ffc68c6971e67ffd6438fa9cf9172748126462c8312b861938e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_a69ab0ad0c485c5b8dd411324232efeaf801d1b415d0c9cc50d8bfed3344dd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69ab0ad0c485c5b8dd411324232efeaf801d1b415d0c9cc50d8bfed3344dd14->enter($__internal_a69ab0ad0c485c5b8dd411324232efeaf801d1b415d0c9cc50d8bfed3344dd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

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
        
        $__internal_6e9155f3bf32ffc68c6971e67ffd6438fa9cf9172748126462c8312b861938e0->leave($__internal_6e9155f3bf32ffc68c6971e67ffd6438fa9cf9172748126462c8312b861938e0_prof);

        
        $__internal_a69ab0ad0c485c5b8dd411324232efeaf801d1b415d0c9cc50d8bfed3344dd14->leave($__internal_a69ab0ad0c485c5b8dd411324232efeaf801d1b415d0c9cc50d8bfed3344dd14_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_5cc84eeb9a1b8c0e323dc14c63c76531bf4466cef1c35ed7d84918b89fc52f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc84eeb9a1b8c0e323dc14c63c76531bf4466cef1c35ed7d84918b89fc52f52->enter($__internal_5cc84eeb9a1b8c0e323dc14c63c76531bf4466cef1c35ed7d84918b89fc52f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_ca16871f06002c7150f6c0eac7e81306f5616afa7d46a209b206535cb34e6211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca16871f06002c7150f6c0eac7e81306f5616afa7d46a209b206535cb34e6211->enter($__internal_ca16871f06002c7150f6c0eac7e81306f5616afa7d46a209b206535cb34e6211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_ca16871f06002c7150f6c0eac7e81306f5616afa7d46a209b206535cb34e6211->leave($__internal_ca16871f06002c7150f6c0eac7e81306f5616afa7d46a209b206535cb34e6211_prof);

        
        $__internal_5cc84eeb9a1b8c0e323dc14c63c76531bf4466cef1c35ed7d84918b89fc52f52->leave($__internal_5cc84eeb9a1b8c0e323dc14c63c76531bf4466cef1c35ed7d84918b89fc52f52_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_fcef2743ad51fedd97d2cecb15c43908a79b406637386e7a18030b213f514baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcef2743ad51fedd97d2cecb15c43908a79b406637386e7a18030b213f514baa->enter($__internal_fcef2743ad51fedd97d2cecb15c43908a79b406637386e7a18030b213f514baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_66eb8e4c3f28bc12a44c7793c48aa5e6f0991317d5e346e075825a95fa6146ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66eb8e4c3f28bc12a44c7793c48aa5e6f0991317d5e346e075825a95fa6146ae->enter($__internal_66eb8e4c3f28bc12a44c7793c48aa5e6f0991317d5e346e075825a95fa6146ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_66eb8e4c3f28bc12a44c7793c48aa5e6f0991317d5e346e075825a95fa6146ae->leave($__internal_66eb8e4c3f28bc12a44c7793c48aa5e6f0991317d5e346e075825a95fa6146ae_prof);

        
        $__internal_fcef2743ad51fedd97d2cecb15c43908a79b406637386e7a18030b213f514baa->leave($__internal_fcef2743ad51fedd97d2cecb15c43908a79b406637386e7a18030b213f514baa_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_a3f8dd88e8c01ac6f2a234d69a54efcaf21d5f2ba241c5ef044fce6a264fa8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f8dd88e8c01ac6f2a234d69a54efcaf21d5f2ba241c5ef044fce6a264fa8cd->enter($__internal_a3f8dd88e8c01ac6f2a234d69a54efcaf21d5f2ba241c5ef044fce6a264fa8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_f7046bbc4302be082118e400bd84ea8d64f71b1b42e8585ec6a299c5c8d8fa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7046bbc4302be082118e400bd84ea8d64f71b1b42e8585ec6a299c5c8d8fa08->enter($__internal_f7046bbc4302be082118e400bd84ea8d64f71b1b42e8585ec6a299c5c8d8fa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_f7046bbc4302be082118e400bd84ea8d64f71b1b42e8585ec6a299c5c8d8fa08->leave($__internal_f7046bbc4302be082118e400bd84ea8d64f71b1b42e8585ec6a299c5c8d8fa08_prof);

        
        $__internal_a3f8dd88e8c01ac6f2a234d69a54efcaf21d5f2ba241c5ef044fce6a264fa8cd->leave($__internal_a3f8dd88e8c01ac6f2a234d69a54efcaf21d5f2ba241c5ef044fce6a264fa8cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
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
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
