<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig */
class __TwigTemplate_8106f17ad2ad8a848308fee0ee848abcf49674405babd46802461b86745cbd65 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56815d25d248820f38c2be49f3ff094ba990f81b1defca930de59ae0f7680dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56815d25d248820f38c2be49f3ff094ba990f81b1defca930de59ae0f7680dfb->enter($__internal_56815d25d248820f38c2be49f3ff094ba990f81b1defca930de59ae0f7680dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $__internal_f1d9b9088ed2bb29354d7d2ff516b8e97f17c721089122c90df07cdd3f6ccde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d9b9088ed2bb29354d7d2ff516b8e97f17c721089122c90df07cdd3f6ccde5->enter($__internal_f1d9b9088ed2bb29354d7d2ff516b8e97f17c721089122c90df07cdd3f6ccde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56815d25d248820f38c2be49f3ff094ba990f81b1defca930de59ae0f7680dfb->leave($__internal_56815d25d248820f38c2be49f3ff094ba990f81b1defca930de59ae0f7680dfb_prof);

        
        $__internal_f1d9b9088ed2bb29354d7d2ff516b8e97f17c721089122c90df07cdd3f6ccde5->leave($__internal_f1d9b9088ed2bb29354d7d2ff516b8e97f17c721089122c90df07cdd3f6ccde5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b8344398f89167884da239c942f9708ba9e12256c35f252e5aa6caf0da5cdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8344398f89167884da239c942f9708ba9e12256c35f252e5aa6caf0da5cdec->enter($__internal_8b8344398f89167884da239c942f9708ba9e12256c35f252e5aa6caf0da5cdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d26d40b7e559c6e98bb5939147fd4fb6467cb61c225cb5c90f44e21874fcc61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26d40b7e559c6e98bb5939147fd4fb6467cb61c225cb5c90f44e21874fcc61e->enter($__internal_d26d40b7e559c6e98bb5939147fd4fb6467cb61c225cb5c90f44e21874fcc61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_d26d40b7e559c6e98bb5939147fd4fb6467cb61c225cb5c90f44e21874fcc61e->leave($__internal_d26d40b7e559c6e98bb5939147fd4fb6467cb61c225cb5c90f44e21874fcc61e_prof);

        
        $__internal_8b8344398f89167884da239c942f9708ba9e12256c35f252e5aa6caf0da5cdec->leave($__internal_8b8344398f89167884da239c942f9708ba9e12256c35f252e5aa6caf0da5cdec_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f5c0d6975bbe470a10a45ca6293dab699b74283dc8ed5b4ebea22a1618c487a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c0d6975bbe470a10a45ca6293dab699b74283dc8ed5b4ebea22a1618c487a4->enter($__internal_f5c0d6975bbe470a10a45ca6293dab699b74283dc8ed5b4ebea22a1618c487a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_8cc78307a3640cbd75fb449b25cbc6c68640abddd4d6cff56e51475a1999050b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc78307a3640cbd75fb449b25cbc6c68640abddd4d6cff56e51475a1999050b->enter($__internal_8cc78307a3640cbd75fb449b25cbc6c68640abddd4d6cff56e51475a1999050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_8cc78307a3640cbd75fb449b25cbc6c68640abddd4d6cff56e51475a1999050b->leave($__internal_8cc78307a3640cbd75fb449b25cbc6c68640abddd4d6cff56e51475a1999050b_prof);

        
        $__internal_f5c0d6975bbe470a10a45ca6293dab699b74283dc8ed5b4ebea22a1618c487a4->leave($__internal_f5c0d6975bbe470a10a45ca6293dab699b74283dc8ed5b4ebea22a1618c487a4_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_4d1065ccd4848531bca164e0ed01da0509b23b2e4db307210b18e330429d9dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1065ccd4848531bca164e0ed01da0509b23b2e4db307210b18e330429d9dbf->enter($__internal_4d1065ccd4848531bca164e0ed01da0509b23b2e4db307210b18e330429d9dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_292e718a62e07f719535199b248f8a13c95ff7a3226d553938455d22cfc3a03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292e718a62e07f719535199b248f8a13c95ff7a3226d553938455d22cfc3a03f->enter($__internal_292e718a62e07f719535199b248f8a13c95ff7a3226d553938455d22cfc3a03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_292e718a62e07f719535199b248f8a13c95ff7a3226d553938455d22cfc3a03f->leave($__internal_292e718a62e07f719535199b248f8a13c95ff7a3226d553938455d22cfc3a03f_prof);

        
        $__internal_4d1065ccd4848531bca164e0ed01da0509b23b2e4db307210b18e330429d9dbf->leave($__internal_4d1065ccd4848531bca164e0ed01da0509b23b2e4db307210b18e330429d9dbf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_many_to_many.html.twig");
    }
}
