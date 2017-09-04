<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_ce450340d15f009528af0326db091c5d0a41883494d11ed2cb12e2e59c011b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97757a6ed2df5cb5dc3b3e1b94a72d5d9bfa87ef57bf39c24efa5dcd3a21e588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97757a6ed2df5cb5dc3b3e1b94a72d5d9bfa87ef57bf39c24efa5dcd3a21e588->enter($__internal_97757a6ed2df5cb5dc3b3e1b94a72d5d9bfa87ef57bf39c24efa5dcd3a21e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_30bdb03f81da8a082efda6b8f2cb5cbd3d21aa4cc0ebf2edc0c5a5224abd4a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bdb03f81da8a082efda6b8f2cb5cbd3d21aa4cc0ebf2edc0c5a5224abd4a97->enter($__internal_30bdb03f81da8a082efda6b8f2cb5cbd3d21aa4cc0ebf2edc0c5a5224abd4a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97757a6ed2df5cb5dc3b3e1b94a72d5d9bfa87ef57bf39c24efa5dcd3a21e588->leave($__internal_97757a6ed2df5cb5dc3b3e1b94a72d5d9bfa87ef57bf39c24efa5dcd3a21e588_prof);

        
        $__internal_30bdb03f81da8a082efda6b8f2cb5cbd3d21aa4cc0ebf2edc0c5a5224abd4a97->leave($__internal_30bdb03f81da8a082efda6b8f2cb5cbd3d21aa4cc0ebf2edc0c5a5224abd4a97_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_df6aab2b2fa0fe4c215f0c1d0037458fc9deda4d87abf06ba19918ca5dd3fe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6aab2b2fa0fe4c215f0c1d0037458fc9deda4d87abf06ba19918ca5dd3fe6e->enter($__internal_df6aab2b2fa0fe4c215f0c1d0037458fc9deda4d87abf06ba19918ca5dd3fe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdfaec9b4bd6a294be6fe147e3b4144ab0e0c3c55227b8fee7e0082354dae54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfaec9b4bd6a294be6fe147e3b4144ab0e0c3c55227b8fee7e0082354dae54f->enter($__internal_bdfaec9b4bd6a294be6fe147e3b4144ab0e0c3c55227b8fee7e0082354dae54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_bdfaec9b4bd6a294be6fe147e3b4144ab0e0c3c55227b8fee7e0082354dae54f->leave($__internal_bdfaec9b4bd6a294be6fe147e3b4144ab0e0c3c55227b8fee7e0082354dae54f_prof);

        
        $__internal_df6aab2b2fa0fe4c215f0c1d0037458fc9deda4d87abf06ba19918ca5dd3fe6e->leave($__internal_df6aab2b2fa0fe4c215f0c1d0037458fc9deda4d87abf06ba19918ca5dd3fe6e_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ba209471b05b4cfdae737b307c332f2c541c4b9e7b299b20a90517665d9cfe77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba209471b05b4cfdae737b307c332f2c541c4b9e7b299b20a90517665d9cfe77->enter($__internal_ba209471b05b4cfdae737b307c332f2c541c4b9e7b299b20a90517665d9cfe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_31ba06c320c899bc470a0b2cf76d7a92f8871f2ebce1acb7ee45fd91faba6cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ba06c320c899bc470a0b2cf76d7a92f8871f2ebce1acb7ee45fd91faba6cbb->enter($__internal_31ba06c320c899bc470a0b2cf76d7a92f8871f2ebce1acb7ee45fd91faba6cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_31ba06c320c899bc470a0b2cf76d7a92f8871f2ebce1acb7ee45fd91faba6cbb->leave($__internal_31ba06c320c899bc470a0b2cf76d7a92f8871f2ebce1acb7ee45fd91faba6cbb_prof);

        
        $__internal_ba209471b05b4cfdae737b307c332f2c541c4b9e7b299b20a90517665d9cfe77->leave($__internal_ba209471b05b4cfdae737b307c332f2c541c4b9e7b299b20a90517665d9cfe77_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f8905b87e707ad2ceb86069954b3ef986c5a659c41dd667c3ccc16c0c7dd056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8905b87e707ad2ceb86069954b3ef986c5a659c41dd667c3ccc16c0c7dd056->enter($__internal_5f8905b87e707ad2ceb86069954b3ef986c5a659c41dd667c3ccc16c0c7dd056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8bf6940e9948d14bb0a345c3c8a73627efe93d3f5f3c114621e974c1f1e9a526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf6940e9948d14bb0a345c3c8a73627efe93d3f5f3c114621e974c1f1e9a526->enter($__internal_8bf6940e9948d14bb0a345c3c8a73627efe93d3f5f3c114621e974c1f1e9a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_8bf6940e9948d14bb0a345c3c8a73627efe93d3f5f3c114621e974c1f1e9a526->leave($__internal_8bf6940e9948d14bb0a345c3c8a73627efe93d3f5f3c114621e974c1f1e9a526_prof);

        
        $__internal_5f8905b87e707ad2ceb86069954b3ef986c5a659c41dd667c3ccc16c0c7dd056->leave($__internal_5f8905b87e707ad2ceb86069954b3ef986c5a659c41dd667c3ccc16c0c7dd056_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/search.html.twig");
    }
}
