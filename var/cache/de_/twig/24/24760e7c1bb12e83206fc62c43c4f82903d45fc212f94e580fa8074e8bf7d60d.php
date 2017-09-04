<?php

/* @SonataAdmin/CRUD/Association/list_many_to_many.html.twig */
class __TwigTemplate_61ebf70164425d29bc7c5849c8245ac0151338f04ec7082c47a25fe968be2000 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/Association/list_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5c6d778a1a93961fa84670deb44fa25ade5cf6f385ce973b99572eb92f5cf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c6d778a1a93961fa84670deb44fa25ade5cf6f385ce973b99572eb92f5cf1a->enter($__internal_b5c6d778a1a93961fa84670deb44fa25ade5cf6f385ce973b99572eb92f5cf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_many_to_many.html.twig"));

        $__internal_7e35bbd35593e1aca0b0e697d3f2ec632ad723cf7851b7cd4437183f37389166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e35bbd35593e1aca0b0e697d3f2ec632ad723cf7851b7cd4437183f37389166->enter($__internal_7e35bbd35593e1aca0b0e697d3f2ec632ad723cf7851b7cd4437183f37389166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/list_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c6d778a1a93961fa84670deb44fa25ade5cf6f385ce973b99572eb92f5cf1a->leave($__internal_b5c6d778a1a93961fa84670deb44fa25ade5cf6f385ce973b99572eb92f5cf1a_prof);

        
        $__internal_7e35bbd35593e1aca0b0e697d3f2ec632ad723cf7851b7cd4437183f37389166->leave($__internal_7e35bbd35593e1aca0b0e697d3f2ec632ad723cf7851b7cd4437183f37389166_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2572f1638237f4f88d473541f40fe6247acc705f7e452870947901e64592920d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2572f1638237f4f88d473541f40fe6247acc705f7e452870947901e64592920d->enter($__internal_2572f1638237f4f88d473541f40fe6247acc705f7e452870947901e64592920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6fb590580b641fe4c3d05bdb5e33c203e09a113f923606974c70c880a040f341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb590580b641fe4c3d05bdb5e33c203e09a113f923606974c70c880a040f341->enter($__internal_6fb590580b641fe4c3d05bdb5e33c203e09a113f923606974c70c880a040f341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6fb590580b641fe4c3d05bdb5e33c203e09a113f923606974c70c880a040f341->leave($__internal_6fb590580b641fe4c3d05bdb5e33c203e09a113f923606974c70c880a040f341_prof);

        
        $__internal_2572f1638237f4f88d473541f40fe6247acc705f7e452870947901e64592920d->leave($__internal_2572f1638237f4f88d473541f40fe6247acc705f7e452870947901e64592920d_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_954fc5c01df9ffd1c9355433f699384336891071af6fda02fb6bfd757ad42707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954fc5c01df9ffd1c9355433f699384336891071af6fda02fb6bfd757ad42707->enter($__internal_954fc5c01df9ffd1c9355433f699384336891071af6fda02fb6bfd757ad42707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_e2795c19ef6ac4dc3be192f99cca5a2b0c13a3868b865dcd364ddf381013d396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2795c19ef6ac4dc3be192f99cca5a2b0c13a3868b865dcd364ddf381013d396->enter($__internal_e2795c19ef6ac4dc3be192f99cca5a2b0c13a3868b865dcd364ddf381013d396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_e2795c19ef6ac4dc3be192f99cca5a2b0c13a3868b865dcd364ddf381013d396->leave($__internal_e2795c19ef6ac4dc3be192f99cca5a2b0c13a3868b865dcd364ddf381013d396_prof);

        
        $__internal_954fc5c01df9ffd1c9355433f699384336891071af6fda02fb6bfd757ad42707->leave($__internal_954fc5c01df9ffd1c9355433f699384336891071af6fda02fb6bfd757ad42707_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_eb47ec1f5d6e60ef827a84440d71cc8ca4da967d47350a50a2d23b7f09c65e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb47ec1f5d6e60ef827a84440d71cc8ca4da967d47350a50a2d23b7f09c65e1e->enter($__internal_eb47ec1f5d6e60ef827a84440d71cc8ca4da967d47350a50a2d23b7f09c65e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_ce9ed6c842c327f6a944392b989cf2ee918fc84d4abb817e103cc1d2adb570ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9ed6c842c327f6a944392b989cf2ee918fc84d4abb817e103cc1d2adb570ef->enter($__internal_ce9ed6c842c327f6a944392b989cf2ee918fc84d4abb817e103cc1d2adb570ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_ce9ed6c842c327f6a944392b989cf2ee918fc84d4abb817e103cc1d2adb570ef->leave($__internal_ce9ed6c842c327f6a944392b989cf2ee918fc84d4abb817e103cc1d2adb570ef_prof);

        
        $__internal_eb47ec1f5d6e60ef827a84440d71cc8ca4da967d47350a50a2d23b7f09c65e1e->leave($__internal_eb47ec1f5d6e60ef827a84440d71cc8ca4da967d47350a50a2d23b7f09c65e1e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/list_many_to_many.html.twig";
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
", "@SonataAdmin/CRUD/Association/list_many_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\list_many_to_many.html.twig");
    }
}
