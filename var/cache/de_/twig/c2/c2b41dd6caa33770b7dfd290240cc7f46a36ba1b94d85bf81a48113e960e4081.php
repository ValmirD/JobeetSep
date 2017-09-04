<?php

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_1487835d93cd4bdfd9f01ae40ed91e32844b5e85c4cc91761a776f063bfab1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cb5cd409e609b0a61aa1adb4a142703a521cb0d86118db61589361230369693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb5cd409e609b0a61aa1adb4a142703a521cb0d86118db61589361230369693->enter($__internal_4cb5cd409e609b0a61aa1adb4a142703a521cb0d86118db61589361230369693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        $__internal_96eaf503941fb8b0db0e8699a12d28d47dd97bef6d048fe3195312f1bdb2e987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eaf503941fb8b0db0e8699a12d28d47dd97bef6d048fe3195312f1bdb2e987->enter($__internal_96eaf503941fb8b0db0e8699a12d28d47dd97bef6d048fe3195312f1bdb2e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_4cb5cd409e609b0a61aa1adb4a142703a521cb0d86118db61589361230369693->leave($__internal_4cb5cd409e609b0a61aa1adb4a142703a521cb0d86118db61589361230369693_prof);

        
        $__internal_96eaf503941fb8b0db0e8699a12d28d47dd97bef6d048fe3195312f1bdb2e987->leave($__internal_96eaf503941fb8b0db0e8699a12d28d47dd97bef6d048fe3195312f1bdb2e987_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_037de33a9d2e1046d8e64885f815742590426ab21aee41c8565adff0574330b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037de33a9d2e1046d8e64885f815742590426ab21aee41c8565adff0574330b3->enter($__internal_037de33a9d2e1046d8e64885f815742590426ab21aee41c8565adff0574330b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_54644d8a2b7148e6cb5886f499c2ab39746728f80828e4899baa78bb8f810df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54644d8a2b7148e6cb5886f499c2ab39746728f80828e4899baa78bb8f810df4->enter($__internal_54644d8a2b7148e6cb5886f499c2ab39746728f80828e4899baa78bb8f810df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_54644d8a2b7148e6cb5886f499c2ab39746728f80828e4899baa78bb8f810df4->leave($__internal_54644d8a2b7148e6cb5886f499c2ab39746728f80828e4899baa78bb8f810df4_prof);

        
        $__internal_037de33a9d2e1046d8e64885f815742590426ab21aee41c8565adff0574330b3->leave($__internal_037de33a9d2e1046d8e64885f815742590426ab21aee41c8565adff0574330b3_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_393d790b90540e24660217fc9a9674f5b417e2bc106ab0591e03b224336019cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393d790b90540e24660217fc9a9674f5b417e2bc106ab0591e03b224336019cd->enter($__internal_393d790b90540e24660217fc9a9674f5b417e2bc106ab0591e03b224336019cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_10f64620a13006d798666e29c8861df81c022ac7c21bcf46c849f29c5c648977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f64620a13006d798666e29c8861df81c022ac7c21bcf46c849f29c5c648977->enter($__internal_10f64620a13006d798666e29c8861df81c022ac7c21bcf46c849f29c5c648977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_10f64620a13006d798666e29c8861df81c022ac7c21bcf46c849f29c5c648977->leave($__internal_10f64620a13006d798666e29c8861df81c022ac7c21bcf46c849f29c5c648977_prof);

        
        $__internal_393d790b90540e24660217fc9a9674f5b417e2bc106ab0591e03b224336019cd->leave($__internal_393d790b90540e24660217fc9a9674f5b417e2bc106ab0591e03b224336019cd_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_8bae82b44375688cf650a66105cb35e449c12d9b2dc0f7bf7faf2b0529a08fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bae82b44375688cf650a66105cb35e449c12d9b2dc0f7bf7faf2b0529a08fdc->enter($__internal_8bae82b44375688cf650a66105cb35e449c12d9b2dc0f7bf7faf2b0529a08fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f1606ef35c058b9b760e91164e55b4963bc12d5690ad03307579a65d063a4cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1606ef35c058b9b760e91164e55b4963bc12d5690ad03307579a65d063a4cc2->enter($__internal_f1606ef35c058b9b760e91164e55b4963bc12d5690ad03307579a65d063a4cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_f1606ef35c058b9b760e91164e55b4963bc12d5690ad03307579a65d063a4cc2->leave($__internal_f1606ef35c058b9b760e91164e55b4963bc12d5690ad03307579a65d063a4cc2_prof);

        
        $__internal_8bae82b44375688cf650a66105cb35e449c12d9b2dc0f7bf7faf2b0529a08fdc->leave($__internal_8bae82b44375688cf650a66105cb35e449c12d9b2dc0f7bf7faf2b0529a08fdc_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_94963e18cede20961fdb8d573eba9de80bb7762684844e73ea23a6c2ff8b9e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94963e18cede20961fdb8d573eba9de80bb7762684844e73ea23a6c2ff8b9e30->enter($__internal_94963e18cede20961fdb8d573eba9de80bb7762684844e73ea23a6c2ff8b9e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_1bdac895ee5a68a3a0ede4299d92ddc3e2cb9f8905c7b951bacf73f648f23212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdac895ee5a68a3a0ede4299d92ddc3e2cb9f8905c7b951bacf73f648f23212->enter($__internal_1bdac895ee5a68a3a0ede4299d92ddc3e2cb9f8905c7b951bacf73f648f23212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_1bdac895ee5a68a3a0ede4299d92ddc3e2cb9f8905c7b951bacf73f648f23212->leave($__internal_1bdac895ee5a68a3a0ede4299d92ddc3e2cb9f8905c7b951bacf73f648f23212_prof);

        
        $__internal_94963e18cede20961fdb8d573eba9de80bb7762684844e73ea23a6c2ff8b9e30->leave($__internal_94963e18cede20961fdb8d573eba9de80bb7762684844e73ea23a6c2ff8b9e30_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_e193a64c494c8851b706e3051f54039476f7bc40723f1b280961edad85e972a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e193a64c494c8851b706e3051f54039476f7bc40723f1b280961edad85e972a1->enter($__internal_e193a64c494c8851b706e3051f54039476f7bc40723f1b280961edad85e972a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_2f37b8f4746d990e5c32813bbef62e1e45845d74bf9211d112195715c735ba84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f37b8f4746d990e5c32813bbef62e1e45845d74bf9211d112195715c735ba84->enter($__internal_2f37b8f4746d990e5c32813bbef62e1e45845d74bf9211d112195715c735ba84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_2f37b8f4746d990e5c32813bbef62e1e45845d74bf9211d112195715c735ba84->leave($__internal_2f37b8f4746d990e5c32813bbef62e1e45845d74bf9211d112195715c735ba84_prof);

        
        $__internal_e193a64c494c8851b706e3051f54039476f7bc40723f1b280961edad85e972a1->leave($__internal_e193a64c494c8851b706e3051f54039476f7bc40723f1b280961edad85e972a1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "@SonataAdmin/ajax_layout.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\ajax_layout.html.twig");
    }
}
