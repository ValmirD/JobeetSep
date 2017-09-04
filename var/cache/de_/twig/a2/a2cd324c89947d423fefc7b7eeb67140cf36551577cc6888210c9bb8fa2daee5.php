<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_5a46fc15516e6ff2f77f3bd75e93af85522970bd0e07e2eb8bbebea21eb61890 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5be2936ab714e34a9d98d042d56b65d9eebea9b90ebc7b9f365b6a3cd7465a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be2936ab714e34a9d98d042d56b65d9eebea9b90ebc7b9f365b6a3cd7465a47->enter($__internal_5be2936ab714e34a9d98d042d56b65d9eebea9b90ebc7b9f365b6a3cd7465a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $__internal_ffeaf7d1f240b12c1cdfff3975c9e10869e6eead7750e3b20fc6c386a3505568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffeaf7d1f240b12c1cdfff3975c9e10869e6eead7750e3b20fc6c386a3505568->enter($__internal_ffeaf7d1f240b12c1cdfff3975c9e10869e6eead7750e3b20fc6c386a3505568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5be2936ab714e34a9d98d042d56b65d9eebea9b90ebc7b9f365b6a3cd7465a47->leave($__internal_5be2936ab714e34a9d98d042d56b65d9eebea9b90ebc7b9f365b6a3cd7465a47_prof);

        
        $__internal_ffeaf7d1f240b12c1cdfff3975c9e10869e6eead7750e3b20fc6c386a3505568->leave($__internal_ffeaf7d1f240b12c1cdfff3975c9e10869e6eead7750e3b20fc6c386a3505568_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_776ebb1bd0b2f10ebc2511561f720149944e121e232534c2eeda491bc710297b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776ebb1bd0b2f10ebc2511561f720149944e121e232534c2eeda491bc710297b->enter($__internal_776ebb1bd0b2f10ebc2511561f720149944e121e232534c2eeda491bc710297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5940fe311f450444aaa3757c5b723ce5a5fc590b70d80cecb06f7dc6525e7648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5940fe311f450444aaa3757c5b723ce5a5fc590b70d80cecb06f7dc6525e7648->enter($__internal_5940fe311f450444aaa3757c5b723ce5a5fc590b70d80cecb06f7dc6525e7648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_5940fe311f450444aaa3757c5b723ce5a5fc590b70d80cecb06f7dc6525e7648->leave($__internal_5940fe311f450444aaa3757c5b723ce5a5fc590b70d80cecb06f7dc6525e7648_prof);

        
        $__internal_776ebb1bd0b2f10ebc2511561f720149944e121e232534c2eeda491bc710297b->leave($__internal_776ebb1bd0b2f10ebc2511561f720149944e121e232534c2eeda491bc710297b_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_42e204eceb13075e2b400f43a9ca9e6a0435114d65cf7e8cac697dff6e973ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e204eceb13075e2b400f43a9ca9e6a0435114d65cf7e8cac697dff6e973ee1->enter($__internal_42e204eceb13075e2b400f43a9ca9e6a0435114d65cf7e8cac697dff6e973ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1208860ee1fa814941e3412364f18049c99eee201bb672bae258c5c33423fce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1208860ee1fa814941e3412364f18049c99eee201bb672bae258c5c33423fce7->enter($__internal_1208860ee1fa814941e3412364f18049c99eee201bb672bae258c5c33423fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_1208860ee1fa814941e3412364f18049c99eee201bb672bae258c5c33423fce7->leave($__internal_1208860ee1fa814941e3412364f18049c99eee201bb672bae258c5c33423fce7_prof);

        
        $__internal_42e204eceb13075e2b400f43a9ca9e6a0435114d65cf7e8cac697dff6e973ee1->leave($__internal_42e204eceb13075e2b400f43a9ca9e6a0435114d65cf7e8cac697dff6e973ee1_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa87937fa41bc381b1c71c4486e4a022c2c73baa4a65453774eda1ad92e941c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa87937fa41bc381b1c71c4486e4a022c2c73baa4a65453774eda1ad92e941c5->enter($__internal_aa87937fa41bc381b1c71c4486e4a022c2c73baa4a65453774eda1ad92e941c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_21e2e30b5ad352fc9f1c34fdef33ba16f3ea352aad8c9c31a35cf39cb2d40a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e2e30b5ad352fc9f1c34fdef33ba16f3ea352aad8c9c31a35cf39cb2d40a01->enter($__internal_21e2e30b5ad352fc9f1c34fdef33ba16f3ea352aad8c9c31a35cf39cb2d40a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_21e2e30b5ad352fc9f1c34fdef33ba16f3ea352aad8c9c31a35cf39cb2d40a01->leave($__internal_21e2e30b5ad352fc9f1c34fdef33ba16f3ea352aad8c9c31a35cf39cb2d40a01_prof);

        
        $__internal_aa87937fa41bc381b1c71c4486e4a022c2c73baa4a65453774eda1ad92e941c5->leave($__internal_aa87937fa41bc381b1c71c4486e4a022c2c73baa4a65453774eda1ad92e941c5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/search.html.twig";
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
", "@SonataAdmin/Core/search.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\search.html.twig");
    }
}
