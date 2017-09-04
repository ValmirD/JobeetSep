<?php

/* @SonataAdmin/CRUD/Association/list_one_to_many.html.twig */
class __TwigTemplate_8974d2fd701df8fea3ef77d2752771f39c9cda95617ab0cd1362974373633006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f91ead5ba4fee9cb8c79dee49701a94259d9aeb2cd0a51657728af92eb36e48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91ead5ba4fee9cb8c79dee49701a94259d9aeb2cd0a51657728af92eb36e48e->enter($__internal_f91ead5ba4fee9cb8c79dee49701a94259d9aeb2cd0a51657728af92eb36e48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig"));

        $__internal_e159ad63fdca0625f78ef96fb84baa1a52034c43c996961fa86a159206d7580e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e159ad63fdca0625f78ef96fb84baa1a52034c43c996961fa86a159206d7580e->enter($__internal_e159ad63fdca0625f78ef96fb84baa1a52034c43c996961fa86a159206d7580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91ead5ba4fee9cb8c79dee49701a94259d9aeb2cd0a51657728af92eb36e48e->leave($__internal_f91ead5ba4fee9cb8c79dee49701a94259d9aeb2cd0a51657728af92eb36e48e_prof);

        
        $__internal_e159ad63fdca0625f78ef96fb84baa1a52034c43c996961fa86a159206d7580e->leave($__internal_e159ad63fdca0625f78ef96fb84baa1a52034c43c996961fa86a159206d7580e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e079a469e40d9f3d361ecfed8b47ec9dff3d88c208ad973713f9d12b77541336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e079a469e40d9f3d361ecfed8b47ec9dff3d88c208ad973713f9d12b77541336->enter($__internal_e079a469e40d9f3d361ecfed8b47ec9dff3d88c208ad973713f9d12b77541336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bf33ac6126e3cfab837b1a46e193cf8cd75ddfb2fd4cac72d9d4c5fae74bdb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf33ac6126e3cfab837b1a46e193cf8cd75ddfb2fd4cac72d9d4c5fae74bdb4e->enter($__internal_bf33ac6126e3cfab837b1a46e193cf8cd75ddfb2fd4cac72d9d4c5fae74bdb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_bf33ac6126e3cfab837b1a46e193cf8cd75ddfb2fd4cac72d9d4c5fae74bdb4e->leave($__internal_bf33ac6126e3cfab837b1a46e193cf8cd75ddfb2fd4cac72d9d4c5fae74bdb4e_prof);

        
        $__internal_e079a469e40d9f3d361ecfed8b47ec9dff3d88c208ad973713f9d12b77541336->leave($__internal_e079a469e40d9f3d361ecfed8b47ec9dff3d88c208ad973713f9d12b77541336_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_13c70e7503a19092a1a2c298b23c6e89c52bc6c774241566ffd1c6c19b07ffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c70e7503a19092a1a2c298b23c6e89c52bc6c774241566ffd1c6c19b07ffd7->enter($__internal_13c70e7503a19092a1a2c298b23c6e89c52bc6c774241566ffd1c6c19b07ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_8b8ad3641a83e5a795deba6ffa8a40fa4fe88221771e8bdf2cd5b2f829749edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8ad3641a83e5a795deba6ffa8a40fa4fe88221771e8bdf2cd5b2f829749edc->enter($__internal_8b8ad3641a83e5a795deba6ffa8a40fa4fe88221771e8bdf2cd5b2f829749edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_8b8ad3641a83e5a795deba6ffa8a40fa4fe88221771e8bdf2cd5b2f829749edc->leave($__internal_8b8ad3641a83e5a795deba6ffa8a40fa4fe88221771e8bdf2cd5b2f829749edc_prof);

        
        $__internal_13c70e7503a19092a1a2c298b23c6e89c52bc6c774241566ffd1c6c19b07ffd7->leave($__internal_13c70e7503a19092a1a2c298b23c6e89c52bc6c774241566ffd1c6c19b07ffd7_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_043d1080b47ce07a3d63560e90aed17a666230afdd7c6837f820737f17213f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043d1080b47ce07a3d63560e90aed17a666230afdd7c6837f820737f17213f0f->enter($__internal_043d1080b47ce07a3d63560e90aed17a666230afdd7c6837f820737f17213f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_8c8dde5dd79da0c972bd4553478177a5bdb74a2857d96d1066c5f2c6485cccc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8dde5dd79da0c972bd4553478177a5bdb74a2857d96d1066c5f2c6485cccc9->enter($__internal_8c8dde5dd79da0c972bd4553478177a5bdb74a2857d96d1066c5f2c6485cccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_8c8dde5dd79da0c972bd4553478177a5bdb74a2857d96d1066c5f2c6485cccc9->leave($__internal_8c8dde5dd79da0c972bd4553478177a5bdb74a2857d96d1066c5f2c6485cccc9_prof);

        
        $__internal_043d1080b47ce07a3d63560e90aed17a666230afdd7c6837f820737f17213f0f->leave($__internal_043d1080b47ce07a3d63560e90aed17a666230afdd7c6837f820737f17213f0f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\list_one_to_many.html.twig");
    }
}
