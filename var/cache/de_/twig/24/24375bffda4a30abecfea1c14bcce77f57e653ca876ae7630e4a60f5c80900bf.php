<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_3baeb75a84420ca319ac6749521a47fc627d34d04b07d27a93d75e3aeb98ecfd extends Twig_Template
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
        $__internal_7cd1073ee1051c2d2b4c9c1c473780ff4a98a567da1340bf2ee6f78c198e5c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd1073ee1051c2d2b4c9c1c473780ff4a98a567da1340bf2ee6f78c198e5c4a->enter($__internal_7cd1073ee1051c2d2b4c9c1c473780ff4a98a567da1340bf2ee6f78c198e5c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_ba82ca4a9e26fd3280bdbb822844814fc82f874d41116c07b5a6b1e02685bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba82ca4a9e26fd3280bdbb822844814fc82f874d41116c07b5a6b1e02685bae2->enter($__internal_ba82ca4a9e26fd3280bdbb822844814fc82f874d41116c07b5a6b1e02685bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7cd1073ee1051c2d2b4c9c1c473780ff4a98a567da1340bf2ee6f78c198e5c4a->leave($__internal_7cd1073ee1051c2d2b4c9c1c473780ff4a98a567da1340bf2ee6f78c198e5c4a_prof);

        
        $__internal_ba82ca4a9e26fd3280bdbb822844814fc82f874d41116c07b5a6b1e02685bae2->leave($__internal_ba82ca4a9e26fd3280bdbb822844814fc82f874d41116c07b5a6b1e02685bae2_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_1196a2d30615c19d20fdd34ee50d1b0d07ef33a0cedf1f488e4ee8fd70cd9b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1196a2d30615c19d20fdd34ee50d1b0d07ef33a0cedf1f488e4ee8fd70cd9b29->enter($__internal_1196a2d30615c19d20fdd34ee50d1b0d07ef33a0cedf1f488e4ee8fd70cd9b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_25d8a37767abc198b4373b7261f9c4e63ccd21f70dfb0990c441155f6c572a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d8a37767abc198b4373b7261f9c4e63ccd21f70dfb0990c441155f6c572a0f->enter($__internal_25d8a37767abc198b4373b7261f9c4e63ccd21f70dfb0990c441155f6c572a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_25d8a37767abc198b4373b7261f9c4e63ccd21f70dfb0990c441155f6c572a0f->leave($__internal_25d8a37767abc198b4373b7261f9c4e63ccd21f70dfb0990c441155f6c572a0f_prof);

        
        $__internal_1196a2d30615c19d20fdd34ee50d1b0d07ef33a0cedf1f488e4ee8fd70cd9b29->leave($__internal_1196a2d30615c19d20fdd34ee50d1b0d07ef33a0cedf1f488e4ee8fd70cd9b29_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_9d6efb17ecc10ec2c7a7dc7bd791f5c41148b2e79549464d1de22bf0b389eadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6efb17ecc10ec2c7a7dc7bd791f5c41148b2e79549464d1de22bf0b389eadd->enter($__internal_9d6efb17ecc10ec2c7a7dc7bd791f5c41148b2e79549464d1de22bf0b389eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_6b0a9af2479c76ec827604b9dc68ac30bf06b2ed442638b5d96d168a733c4957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0a9af2479c76ec827604b9dc68ac30bf06b2ed442638b5d96d168a733c4957->enter($__internal_6b0a9af2479c76ec827604b9dc68ac30bf06b2ed442638b5d96d168a733c4957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_6b0a9af2479c76ec827604b9dc68ac30bf06b2ed442638b5d96d168a733c4957->leave($__internal_6b0a9af2479c76ec827604b9dc68ac30bf06b2ed442638b5d96d168a733c4957_prof);

        
        $__internal_9d6efb17ecc10ec2c7a7dc7bd791f5c41148b2e79549464d1de22bf0b389eadd->leave($__internal_9d6efb17ecc10ec2c7a7dc7bd791f5c41148b2e79549464d1de22bf0b389eadd_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_a69a29b7ad380cf421d328b4988f136bfadc59647a5b413459c9855c56228e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69a29b7ad380cf421d328b4988f136bfadc59647a5b413459c9855c56228e32->enter($__internal_a69a29b7ad380cf421d328b4988f136bfadc59647a5b413459c9855c56228e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_11fc85ef00889b36f60fd380c856483849079a8bfb62471ea2af4208c8528469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fc85ef00889b36f60fd380c856483849079a8bfb62471ea2af4208c8528469->enter($__internal_11fc85ef00889b36f60fd380c856483849079a8bfb62471ea2af4208c8528469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_11fc85ef00889b36f60fd380c856483849079a8bfb62471ea2af4208c8528469->leave($__internal_11fc85ef00889b36f60fd380c856483849079a8bfb62471ea2af4208c8528469_prof);

        
        $__internal_a69a29b7ad380cf421d328b4988f136bfadc59647a5b413459c9855c56228e32->leave($__internal_a69a29b7ad380cf421d328b4988f136bfadc59647a5b413459c9855c56228e32_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_a75a21566c9e7bb09c1397bc395e2aed0e55be91aa5fdd78e82abd8ac813b81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75a21566c9e7bb09c1397bc395e2aed0e55be91aa5fdd78e82abd8ac813b81e->enter($__internal_a75a21566c9e7bb09c1397bc395e2aed0e55be91aa5fdd78e82abd8ac813b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_d4215261580ec41f37eab98fdbdf4df7bd0e658001bd1289ad0804526621ddba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4215261580ec41f37eab98fdbdf4df7bd0e658001bd1289ad0804526621ddba->enter($__internal_d4215261580ec41f37eab98fdbdf4df7bd0e658001bd1289ad0804526621ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_d4215261580ec41f37eab98fdbdf4df7bd0e658001bd1289ad0804526621ddba->leave($__internal_d4215261580ec41f37eab98fdbdf4df7bd0e658001bd1289ad0804526621ddba_prof);

        
        $__internal_a75a21566c9e7bb09c1397bc395e2aed0e55be91aa5fdd78e82abd8ac813b81e->leave($__internal_a75a21566c9e7bb09c1397bc395e2aed0e55be91aa5fdd78e82abd8ac813b81e_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_887ea1d0f57d4646e15368095eb94c3d6af8a135426f3e91060ecd81f89b11e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887ea1d0f57d4646e15368095eb94c3d6af8a135426f3e91060ecd81f89b11e7->enter($__internal_887ea1d0f57d4646e15368095eb94c3d6af8a135426f3e91060ecd81f89b11e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_284b5043e5131e0dbb63234051c7fa8938df63e47bfb7af5dc7c190fd9c62364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284b5043e5131e0dbb63234051c7fa8938df63e47bfb7af5dc7c190fd9c62364->enter($__internal_284b5043e5131e0dbb63234051c7fa8938df63e47bfb7af5dc7c190fd9c62364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_284b5043e5131e0dbb63234051c7fa8938df63e47bfb7af5dc7c190fd9c62364->leave($__internal_284b5043e5131e0dbb63234051c7fa8938df63e47bfb7af5dc7c190fd9c62364_prof);

        
        $__internal_887ea1d0f57d4646e15368095eb94c3d6af8a135426f3e91060ecd81f89b11e7->leave($__internal_887ea1d0f57d4646e15368095eb94c3d6af8a135426f3e91060ecd81f89b11e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
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
", "SonataAdminBundle::ajax_layout.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
