<?php

/* @SonataBlock/Block/block_side_menu_template.html.twig */
class __TwigTemplate_8833eae62e8f747b6479c4ac61f362cafa7e245595f16536246e989506d366b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cd90aa2e093fbab8a09aa7e90973418d09d0a81ff7cbee6302790abdb9f5818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd90aa2e093fbab8a09aa7e90973418d09d0a81ff7cbee6302790abdb9f5818->enter($__internal_4cd90aa2e093fbab8a09aa7e90973418d09d0a81ff7cbee6302790abdb9f5818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $__internal_41ab8cbf097c19bd5cfdc8e282a123897026ff0b6cd194434295bbed29946c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ab8cbf097c19bd5cfdc8e282a123897026ff0b6cd194434295bbed29946c27->enter($__internal_41ab8cbf097c19bd5cfdc8e282a123897026ff0b6cd194434295bbed29946c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd90aa2e093fbab8a09aa7e90973418d09d0a81ff7cbee6302790abdb9f5818->leave($__internal_4cd90aa2e093fbab8a09aa7e90973418d09d0a81ff7cbee6302790abdb9f5818_prof);

        
        $__internal_41ab8cbf097c19bd5cfdc8e282a123897026ff0b6cd194434295bbed29946c27->leave($__internal_41ab8cbf097c19bd5cfdc8e282a123897026ff0b6cd194434295bbed29946c27_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_0382c7fadfa981cfcdf6118c0114c43344e83efdd2a44d1572e7d1c8b6947b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0382c7fadfa981cfcdf6118c0114c43344e83efdd2a44d1572e7d1c8b6947b30->enter($__internal_0382c7fadfa981cfcdf6118c0114c43344e83efdd2a44d1572e7d1c8b6947b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_05608b52c861bb53dd899f5acadcbee0532fa89377905105bc518900f97ade8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05608b52c861bb53dd899f5acadcbee0532fa89377905105bc518900f97ade8b->enter($__internal_05608b52c861bb53dd899f5acadcbee0532fa89377905105bc518900f97ade8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_05608b52c861bb53dd899f5acadcbee0532fa89377905105bc518900f97ade8b->leave($__internal_05608b52c861bb53dd899f5acadcbee0532fa89377905105bc518900f97ade8b_prof);

        
        $__internal_0382c7fadfa981cfcdf6118c0114c43344e83efdd2a44d1572e7d1c8b6947b30->leave($__internal_0382c7fadfa981cfcdf6118c0114c43344e83efdd2a44d1572e7d1c8b6947b30_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_91789723050c7293146ceffafee6914071b016b211f9f00006d38065f63c441a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91789723050c7293146ceffafee6914071b016b211f9f00006d38065f63c441a->enter($__internal_91789723050c7293146ceffafee6914071b016b211f9f00006d38065f63c441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_6520afe0b4d089497d4180dae4802736d95979d799ca46a4ebcb6dec8d8622be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6520afe0b4d089497d4180dae4802736d95979d799ca46a4ebcb6dec8d8622be->enter($__internal_6520afe0b4d089497d4180dae4802736d95979d799ca46a4ebcb6dec8d8622be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6520afe0b4d089497d4180dae4802736d95979d799ca46a4ebcb6dec8d8622be->leave($__internal_6520afe0b4d089497d4180dae4802736d95979d799ca46a4ebcb6dec8d8622be_prof);

        
        $__internal_91789723050c7293146ceffafee6914071b016b211f9f00006d38065f63c441a->leave($__internal_91789723050c7293146ceffafee6914071b016b211f9f00006d38065f63c441a_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b8677cb90ddb22bedafabdd927db1cde411b36924308998882ccaf6326c1ec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8677cb90ddb22bedafabdd927db1cde411b36924308998882ccaf6326c1ec38->enter($__internal_b8677cb90ddb22bedafabdd927db1cde411b36924308998882ccaf6326c1ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_d57d43d0bef700293552d52e010a53454ad74af76b85a5bdaba3b4435b41a981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57d43d0bef700293552d52e010a53454ad74af76b85a5bdaba3b4435b41a981->enter($__internal_d57d43d0bef700293552d52e010a53454ad74af76b85a5bdaba3b4435b41a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_d57d43d0bef700293552d52e010a53454ad74af76b85a5bdaba3b4435b41a981->leave($__internal_d57d43d0bef700293552d52e010a53454ad74af76b85a5bdaba3b4435b41a981_prof);

        
        $__internal_b8677cb90ddb22bedafabdd927db1cde411b36924308998882ccaf6326c1ec38->leave($__internal_b8677cb90ddb22bedafabdd927db1cde411b36924308998882ccaf6326c1ec38_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_f723b2b5b98a3e281e90e14388c974b9b2d746a029ed7adb353426b89c8e5276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f723b2b5b98a3e281e90e14388c974b9b2d746a029ed7adb353426b89c8e5276->enter($__internal_f723b2b5b98a3e281e90e14388c974b9b2d746a029ed7adb353426b89c8e5276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6934592f10649a0fad0d940e4171daebb8b6808dca589052d94a655ff8bceb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6934592f10649a0fad0d940e4171daebb8b6808dca589052d94a655ff8bceb14->enter($__internal_6934592f10649a0fad0d940e4171daebb8b6808dca589052d94a655ff8bceb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_6934592f10649a0fad0d940e4171daebb8b6808dca589052d94a655ff8bceb14->leave($__internal_6934592f10649a0fad0d940e4171daebb8b6808dca589052d94a655ff8bceb14_prof);

        
        $__internal_f723b2b5b98a3e281e90e14388c974b9b2d746a029ed7adb353426b89c8e5276->leave($__internal_f723b2b5b98a3e281e90e14388c974b9b2d746a029ed7adb353426b89c8e5276_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "@SonataBlock/Block/block_side_menu_template.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_side_menu_template.html.twig");
    }
}
