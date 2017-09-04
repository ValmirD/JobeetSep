<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_dedc29f4f1fdb7644338e2facf5de0db09c8aac752b24ed3e3fe4f6b37478b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5558dd4b60eda6b4d73f449a2895d5a6b0f0333112848ba1be5e2e3614b9c736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5558dd4b60eda6b4d73f449a2895d5a6b0f0333112848ba1be5e2e3614b9c736->enter($__internal_5558dd4b60eda6b4d73f449a2895d5a6b0f0333112848ba1be5e2e3614b9c736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_0dfdab2aad81e1f658bc2c3477881f94565ddce593d581a7d8df7adbb75e3875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfdab2aad81e1f658bc2c3477881f94565ddce593d581a7d8df7adbb75e3875->enter($__internal_0dfdab2aad81e1f658bc2c3477881f94565ddce593d581a7d8df7adbb75e3875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5558dd4b60eda6b4d73f449a2895d5a6b0f0333112848ba1be5e2e3614b9c736->leave($__internal_5558dd4b60eda6b4d73f449a2895d5a6b0f0333112848ba1be5e2e3614b9c736_prof);

        
        $__internal_0dfdab2aad81e1f658bc2c3477881f94565ddce593d581a7d8df7adbb75e3875->leave($__internal_0dfdab2aad81e1f658bc2c3477881f94565ddce593d581a7d8df7adbb75e3875_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_9281b315926d6f1a0a5f65b90ae87545e5bd6d6987b73a9027736ec7c07a4afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9281b315926d6f1a0a5f65b90ae87545e5bd6d6987b73a9027736ec7c07a4afb->enter($__internal_9281b315926d6f1a0a5f65b90ae87545e5bd6d6987b73a9027736ec7c07a4afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_566d2c2e5cd9aa21b5a33575185e5bdc40a970cf350f6ba7b19e87ced7e719c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566d2c2e5cd9aa21b5a33575185e5bdc40a970cf350f6ba7b19e87ced7e719c1->enter($__internal_566d2c2e5cd9aa21b5a33575185e5bdc40a970cf350f6ba7b19e87ced7e719c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_566d2c2e5cd9aa21b5a33575185e5bdc40a970cf350f6ba7b19e87ced7e719c1->leave($__internal_566d2c2e5cd9aa21b5a33575185e5bdc40a970cf350f6ba7b19e87ced7e719c1_prof);

        
        $__internal_9281b315926d6f1a0a5f65b90ae87545e5bd6d6987b73a9027736ec7c07a4afb->leave($__internal_9281b315926d6f1a0a5f65b90ae87545e5bd6d6987b73a9027736ec7c07a4afb_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_a36d740652f3ce331af60c1a7b44c88c8a32c82cda558ed10cbc2318cc0cc161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36d740652f3ce331af60c1a7b44c88c8a32c82cda558ed10cbc2318cc0cc161->enter($__internal_a36d740652f3ce331af60c1a7b44c88c8a32c82cda558ed10cbc2318cc0cc161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_f22a1c4beca39ce0b6fd3431bea1bfdd6532424c1c8a5ee321e58851ba564d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22a1c4beca39ce0b6fd3431bea1bfdd6532424c1c8a5ee321e58851ba564d40->enter($__internal_f22a1c4beca39ce0b6fd3431bea1bfdd6532424c1c8a5ee321e58851ba564d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_f22a1c4beca39ce0b6fd3431bea1bfdd6532424c1c8a5ee321e58851ba564d40->leave($__internal_f22a1c4beca39ce0b6fd3431bea1bfdd6532424c1c8a5ee321e58851ba564d40_prof);

        
        $__internal_a36d740652f3ce331af60c1a7b44c88c8a32c82cda558ed10cbc2318cc0cc161->leave($__internal_a36d740652f3ce331af60c1a7b44c88c8a32c82cda558ed10cbc2318cc0cc161_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_685b376e62cdfdaacb09828203c8b76b5e5a93f49ae17429a50081d065b720c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685b376e62cdfdaacb09828203c8b76b5e5a93f49ae17429a50081d065b720c8->enter($__internal_685b376e62cdfdaacb09828203c8b76b5e5a93f49ae17429a50081d065b720c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a05a99d1d10ee4f2609bd05b5f5cf3fed51c90007fedc468e8af2349a246d551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05a99d1d10ee4f2609bd05b5f5cf3fed51c90007fedc468e8af2349a246d551->enter($__internal_a05a99d1d10ee4f2609bd05b5f5cf3fed51c90007fedc468e8af2349a246d551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a05a99d1d10ee4f2609bd05b5f5cf3fed51c90007fedc468e8af2349a246d551->leave($__internal_a05a99d1d10ee4f2609bd05b5f5cf3fed51c90007fedc468e8af2349a246d551_prof);

        
        $__internal_685b376e62cdfdaacb09828203c8b76b5e5a93f49ae17429a50081d065b720c8->leave($__internal_685b376e62cdfdaacb09828203c8b76b5e5a93f49ae17429a50081d065b720c8_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_f431efc0f8f6bc0b16333418f7cb79c8e1e6e619453bc8cb750bc83e4401fadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f431efc0f8f6bc0b16333418f7cb79c8e1e6e619453bc8cb750bc83e4401fadf->enter($__internal_f431efc0f8f6bc0b16333418f7cb79c8e1e6e619453bc8cb750bc83e4401fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_05fae1328ff304fc26b295bd3ff007185bb385ea297a5d221f0768d333d19f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fae1328ff304fc26b295bd3ff007185bb385ea297a5d221f0768d333d19f6b->enter($__internal_05fae1328ff304fc26b295bd3ff007185bb385ea297a5d221f0768d333d19f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_05fae1328ff304fc26b295bd3ff007185bb385ea297a5d221f0768d333d19f6b->leave($__internal_05fae1328ff304fc26b295bd3ff007185bb385ea297a5d221f0768d333d19f6b_prof);

        
        $__internal_f431efc0f8f6bc0b16333418f7cb79c8e1e6e619453bc8cb750bc83e4401fadf->leave($__internal_f431efc0f8f6bc0b16333418f7cb79c8e1e6e619453bc8cb750bc83e4401fadf_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_77a0f38e2115997b6b6cbf21c283aaf79048b5a3751d92187783fc2949cb0588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a0f38e2115997b6b6cbf21c283aaf79048b5a3751d92187783fc2949cb0588->enter($__internal_77a0f38e2115997b6b6cbf21c283aaf79048b5a3751d92187783fc2949cb0588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_e2ea997fb17c305a85d5e05e2e87f13041a51a5f838325e750db4457a498d912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ea997fb17c305a85d5e05e2e87f13041a51a5f838325e750db4457a498d912->enter($__internal_e2ea997fb17c305a85d5e05e2e87f13041a51a5f838325e750db4457a498d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_e2ea997fb17c305a85d5e05e2e87f13041a51a5f838325e750db4457a498d912->leave($__internal_e2ea997fb17c305a85d5e05e2e87f13041a51a5f838325e750db4457a498d912_prof);

        
        $__internal_77a0f38e2115997b6b6cbf21c283aaf79048b5a3751d92187783fc2949cb0588->leave($__internal_77a0f38e2115997b6b6cbf21c283aaf79048b5a3751d92187783fc2949cb0588_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% set translation_domain = item.extra('label_catalogue', 'messages') %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
