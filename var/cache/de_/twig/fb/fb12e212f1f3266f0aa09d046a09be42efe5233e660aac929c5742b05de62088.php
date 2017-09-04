<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig */
class __TwigTemplate_167be597d4f5c55a9ae11cb144c703c5ea62277c12b4f11684276e6637e820c4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6a5db7691f25748e72327361d0bb12e1e6c5fa980f8ac8bbdaca868ed8d9164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a5db7691f25748e72327361d0bb12e1e6c5fa980f8ac8bbdaca868ed8d9164->enter($__internal_d6a5db7691f25748e72327361d0bb12e1e6c5fa980f8ac8bbdaca868ed8d9164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $__internal_375affb1f3f2f4c7d589d771102c2c166f332dd3c36ac0692230d3dce0f6a679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375affb1f3f2f4c7d589d771102c2c166f332dd3c36ac0692230d3dce0f6a679->enter($__internal_375affb1f3f2f4c7d589d771102c2c166f332dd3c36ac0692230d3dce0f6a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6a5db7691f25748e72327361d0bb12e1e6c5fa980f8ac8bbdaca868ed8d9164->leave($__internal_d6a5db7691f25748e72327361d0bb12e1e6c5fa980f8ac8bbdaca868ed8d9164_prof);

        
        $__internal_375affb1f3f2f4c7d589d771102c2c166f332dd3c36ac0692230d3dce0f6a679->leave($__internal_375affb1f3f2f4c7d589d771102c2c166f332dd3c36ac0692230d3dce0f6a679_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a2ade76469c9b9a543e471656a56e615b7339d1d06ff6ca160b2cc5e333b1d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ade76469c9b9a543e471656a56e615b7339d1d06ff6ca160b2cc5e333b1d18->enter($__internal_a2ade76469c9b9a543e471656a56e615b7339d1d06ff6ca160b2cc5e333b1d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c3cc45e81ea48181a6b91d342c60deb1c8a7fbb7a89138ae68fe4c8c53912bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cc45e81ea48181a6b91d342c60deb1c8a7fbb7a89138ae68fe4c8c53912bc3->enter($__internal_c3cc45e81ea48181a6b91d342c60deb1c8a7fbb7a89138ae68fe4c8c53912bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_c3cc45e81ea48181a6b91d342c60deb1c8a7fbb7a89138ae68fe4c8c53912bc3->leave($__internal_c3cc45e81ea48181a6b91d342c60deb1c8a7fbb7a89138ae68fe4c8c53912bc3_prof);

        
        $__internal_a2ade76469c9b9a543e471656a56e615b7339d1d06ff6ca160b2cc5e333b1d18->leave($__internal_a2ade76469c9b9a543e471656a56e615b7339d1d06ff6ca160b2cc5e333b1d18_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_7b1db1ce8b099a548885961fbecdaf6fb7bfa611386e4082a55c46d0b9bcf7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1db1ce8b099a548885961fbecdaf6fb7bfa611386e4082a55c46d0b9bcf7e4->enter($__internal_7b1db1ce8b099a548885961fbecdaf6fb7bfa611386e4082a55c46d0b9bcf7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_a4ed07e4d096149a86d0e8852edda20d6db2733ca58c79939f21a72b3c682744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ed07e4d096149a86d0e8852edda20d6db2733ca58c79939f21a72b3c682744->enter($__internal_a4ed07e4d096149a86d0e8852edda20d6db2733ca58c79939f21a72b3c682744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_a4ed07e4d096149a86d0e8852edda20d6db2733ca58c79939f21a72b3c682744->leave($__internal_a4ed07e4d096149a86d0e8852edda20d6db2733ca58c79939f21a72b3c682744_prof);

        
        $__internal_7b1db1ce8b099a548885961fbecdaf6fb7bfa611386e4082a55c46d0b9bcf7e4->leave($__internal_7b1db1ce8b099a548885961fbecdaf6fb7bfa611386e4082a55c46d0b9bcf7e4_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_979a841d97b594a6648686280aa689e01e512b37eda16028aa1f2c7eb0530bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979a841d97b594a6648686280aa689e01e512b37eda16028aa1f2c7eb0530bca->enter($__internal_979a841d97b594a6648686280aa689e01e512b37eda16028aa1f2c7eb0530bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_583a21f2ac757e8628a27b74c325d03ed28326d8f3350bd27f1b5f669497791d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583a21f2ac757e8628a27b74c325d03ed28326d8f3350bd27f1b5f669497791d->enter($__internal_583a21f2ac757e8628a27b74c325d03ed28326d8f3350bd27f1b5f669497791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_583a21f2ac757e8628a27b74c325d03ed28326d8f3350bd27f1b5f669497791d->leave($__internal_583a21f2ac757e8628a27b74c325d03ed28326d8f3350bd27f1b5f669497791d_prof);

        
        $__internal_979a841d97b594a6648686280aa689e01e512b37eda16028aa1f2c7eb0530bca->leave($__internal_979a841d97b594a6648686280aa689e01e512b37eda16028aa1f2c7eb0530bca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig";
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
", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/Association/list_one_to_many.html.twig");
    }
}
