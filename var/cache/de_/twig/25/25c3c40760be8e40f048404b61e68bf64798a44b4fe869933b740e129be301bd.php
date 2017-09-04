<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig */
class __TwigTemplate_e87a77f7a06d17325f875be315870a2a988596a7fdf32a4cd3e3bb7957c809df extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_634eb697e48dc1da1f75b06283db2399770cd6e348b3c99687d57c3adcb23890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634eb697e48dc1da1f75b06283db2399770cd6e348b3c99687d57c3adcb23890->enter($__internal_634eb697e48dc1da1f75b06283db2399770cd6e348b3c99687d57c3adcb23890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $__internal_e4558a4bdf3d20155b5d4afe9ce07752262ac9384f3bbf20a3219906b92dbfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4558a4bdf3d20155b5d4afe9ce07752262ac9384f3bbf20a3219906b92dbfc4->enter($__internal_e4558a4bdf3d20155b5d4afe9ce07752262ac9384f3bbf20a3219906b92dbfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634eb697e48dc1da1f75b06283db2399770cd6e348b3c99687d57c3adcb23890->leave($__internal_634eb697e48dc1da1f75b06283db2399770cd6e348b3c99687d57c3adcb23890_prof);

        
        $__internal_e4558a4bdf3d20155b5d4afe9ce07752262ac9384f3bbf20a3219906b92dbfc4->leave($__internal_e4558a4bdf3d20155b5d4afe9ce07752262ac9384f3bbf20a3219906b92dbfc4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_219a0931285ad7079426dfb4fee90827afa737aa86a37a7985a7d85e81ee93dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219a0931285ad7079426dfb4fee90827afa737aa86a37a7985a7d85e81ee93dd->enter($__internal_219a0931285ad7079426dfb4fee90827afa737aa86a37a7985a7d85e81ee93dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7779fd2d9f9c6bcb19ebf123b2f66eccd6f1f8426c8c0bea3e4723cba96f32b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7779fd2d9f9c6bcb19ebf123b2f66eccd6f1f8426c8c0bea3e4723cba96f32b9->enter($__internal_7779fd2d9f9c6bcb19ebf123b2f66eccd6f1f8426c8c0bea3e4723cba96f32b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7779fd2d9f9c6bcb19ebf123b2f66eccd6f1f8426c8c0bea3e4723cba96f32b9->leave($__internal_7779fd2d9f9c6bcb19ebf123b2f66eccd6f1f8426c8c0bea3e4723cba96f32b9_prof);

        
        $__internal_219a0931285ad7079426dfb4fee90827afa737aa86a37a7985a7d85e81ee93dd->leave($__internal_219a0931285ad7079426dfb4fee90827afa737aa86a37a7985a7d85e81ee93dd_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_e19000152c64923282a90cefee433c300271d4265ed52faf69de80b9518520d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19000152c64923282a90cefee433c300271d4265ed52faf69de80b9518520d7->enter($__internal_e19000152c64923282a90cefee433c300271d4265ed52faf69de80b9518520d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_9886cd5222ff8e7151cd7eb13edb6be654f3dbe3f70b9b4ee395b06135f38533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9886cd5222ff8e7151cd7eb13edb6be654f3dbe3f70b9b4ee395b06135f38533->enter($__internal_9886cd5222ff8e7151cd7eb13edb6be654f3dbe3f70b9b4ee395b06135f38533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_9886cd5222ff8e7151cd7eb13edb6be654f3dbe3f70b9b4ee395b06135f38533->leave($__internal_9886cd5222ff8e7151cd7eb13edb6be654f3dbe3f70b9b4ee395b06135f38533_prof);

        
        $__internal_e19000152c64923282a90cefee433c300271d4265ed52faf69de80b9518520d7->leave($__internal_e19000152c64923282a90cefee433c300271d4265ed52faf69de80b9518520d7_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_9c40d48dfbfff241704e0cb3608aef9f9b5689916406f91507ad13452a942e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c40d48dfbfff241704e0cb3608aef9f9b5689916406f91507ad13452a942e1d->enter($__internal_9c40d48dfbfff241704e0cb3608aef9f9b5689916406f91507ad13452a942e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_ea2cc38280fe858b51f6c1f0ed4802ee850cf56d5a03235b40e2e5491f170fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2cc38280fe858b51f6c1f0ed4802ee850cf56d5a03235b40e2e5491f170fa9->enter($__internal_ea2cc38280fe858b51f6c1f0ed4802ee850cf56d5a03235b40e2e5491f170fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_ea2cc38280fe858b51f6c1f0ed4802ee850cf56d5a03235b40e2e5491f170fa9->leave($__internal_ea2cc38280fe858b51f6c1f0ed4802ee850cf56d5a03235b40e2e5491f170fa9_prof);

        
        $__internal_9c40d48dfbfff241704e0cb3608aef9f9b5689916406f91507ad13452a942e1d->leave($__internal_9c40d48dfbfff241704e0cb3608aef9f9b5689916406f91507ad13452a942e1d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_many.html.twig");
    }
}
