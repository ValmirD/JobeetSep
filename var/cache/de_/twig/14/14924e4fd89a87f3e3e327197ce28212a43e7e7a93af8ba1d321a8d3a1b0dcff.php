<?php

/* SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig */
class __TwigTemplate_9124ba08ba7f4148c6b9345c6125fec3f59e11179a5a0be0368f1617438cde6d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8f1c63bc6ad9576aec47c13db4e6c8cc5cb0d0f15606e9a278846d202cb1d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f1c63bc6ad9576aec47c13db4e6c8cc5cb0d0f15606e9a278846d202cb1d5d->enter($__internal_f8f1c63bc6ad9576aec47c13db4e6c8cc5cb0d0f15606e9a278846d202cb1d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig"));

        $__internal_1f8ded6ff0de2b2cc0e73addd46cb13a847d39a3ccc4e67d275e41b9a9e11c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8ded6ff0de2b2cc0e73addd46cb13a847d39a3ccc4e67d275e41b9a9e11c1b->enter($__internal_1f8ded6ff0de2b2cc0e73addd46cb13a847d39a3ccc4e67d275e41b9a9e11c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f1c63bc6ad9576aec47c13db4e6c8cc5cb0d0f15606e9a278846d202cb1d5d->leave($__internal_f8f1c63bc6ad9576aec47c13db4e6c8cc5cb0d0f15606e9a278846d202cb1d5d_prof);

        
        $__internal_1f8ded6ff0de2b2cc0e73addd46cb13a847d39a3ccc4e67d275e41b9a9e11c1b->leave($__internal_1f8ded6ff0de2b2cc0e73addd46cb13a847d39a3ccc4e67d275e41b9a9e11c1b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_47ca77f60e1dac2b5844c5e316e40f767f04fa23d99ac001cc7200c6809527b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ca77f60e1dac2b5844c5e316e40f767f04fa23d99ac001cc7200c6809527b7->enter($__internal_47ca77f60e1dac2b5844c5e316e40f767f04fa23d99ac001cc7200c6809527b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_545a945e83767f49e379d9279418b9b225d588b819fa0c5f6838c695cdd654c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545a945e83767f49e379d9279418b9b225d588b819fa0c5f6838c695cdd654c1->enter($__internal_545a945e83767f49e379d9279418b9b225d588b819fa0c5f6838c695cdd654c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_545a945e83767f49e379d9279418b9b225d588b819fa0c5f6838c695cdd654c1->leave($__internal_545a945e83767f49e379d9279418b9b225d588b819fa0c5f6838c695cdd654c1_prof);

        
        $__internal_47ca77f60e1dac2b5844c5e316e40f767f04fa23d99ac001cc7200c6809527b7->leave($__internal_47ca77f60e1dac2b5844c5e316e40f767f04fa23d99ac001cc7200c6809527b7_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_2fa2748d7609ac6c9d20b7e26f2b40149b9dd7a4d8cdb6b31ec85ba74097293f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa2748d7609ac6c9d20b7e26f2b40149b9dd7a4d8cdb6b31ec85ba74097293f->enter($__internal_2fa2748d7609ac6c9d20b7e26f2b40149b9dd7a4d8cdb6b31ec85ba74097293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_904e703729db98057065fe87a8b064c44b0eedd0e45fe2d8eea3ef3ff3189fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904e703729db98057065fe87a8b064c44b0eedd0e45fe2d8eea3ef3ff3189fa8->enter($__internal_904e703729db98057065fe87a8b064c44b0eedd0e45fe2d8eea3ef3ff3189fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_904e703729db98057065fe87a8b064c44b0eedd0e45fe2d8eea3ef3ff3189fa8->leave($__internal_904e703729db98057065fe87a8b064c44b0eedd0e45fe2d8eea3ef3ff3189fa8_prof);

        
        $__internal_2fa2748d7609ac6c9d20b7e26f2b40149b9dd7a4d8cdb6b31ec85ba74097293f->leave($__internal_2fa2748d7609ac6c9d20b7e26f2b40149b9dd7a4d8cdb6b31ec85ba74097293f_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_65708ac198c9b0a6e07ebed72e49423f370b4856a9b3587bb22fefc9da5ae486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65708ac198c9b0a6e07ebed72e49423f370b4856a9b3587bb22fefc9da5ae486->enter($__internal_65708ac198c9b0a6e07ebed72e49423f370b4856a9b3587bb22fefc9da5ae486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_09567d6a0a4cdf5dfa62aa675724faac49e5a41692066c86541ff88550ada2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09567d6a0a4cdf5dfa62aa675724faac49e5a41692066c86541ff88550ada2c4->enter($__internal_09567d6a0a4cdf5dfa62aa675724faac49e5a41692066c86541ff88550ada2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_09567d6a0a4cdf5dfa62aa675724faac49e5a41692066c86541ff88550ada2c4->leave($__internal_09567d6a0a4cdf5dfa62aa675724faac49e5a41692066c86541ff88550ada2c4_prof);

        
        $__internal_65708ac198c9b0a6e07ebed72e49423f370b4856a9b3587bb22fefc9da5ae486->leave($__internal_65708ac198c9b0a6e07ebed72e49423f370b4856a9b3587bb22fefc9da5ae486_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataAdminBundle:CRUD/Association:list_many_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/Association/list_many_to_many.html.twig");
    }
}
