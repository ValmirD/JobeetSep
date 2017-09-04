<?php

/* EnsJobeetBundle:Category:show.html.twig */
class __TwigTemplate_5a07d6169db4d9423e859b92585beedb7a7befcdfcec7220bd56247a0185e089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Category:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff383789cfdb04e5bcc051722d3d19dfc07f3159ce7fbe6616da6c48f5c1d1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff383789cfdb04e5bcc051722d3d19dfc07f3159ce7fbe6616da6c48f5c1d1ec->enter($__internal_ff383789cfdb04e5bcc051722d3d19dfc07f3159ce7fbe6616da6c48f5c1d1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.html.twig"));

        $__internal_343fc86d77da864968d85ce0395aa5cb7dbbe45ced97a8d54b3d26fdbf6cc78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343fc86d77da864968d85ce0395aa5cb7dbbe45ced97a8d54b3d26fdbf6cc78b->enter($__internal_343fc86d77da864968d85ce0395aa5cb7dbbe45ced97a8d54b3d26fdbf6cc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff383789cfdb04e5bcc051722d3d19dfc07f3159ce7fbe6616da6c48f5c1d1ec->leave($__internal_ff383789cfdb04e5bcc051722d3d19dfc07f3159ce7fbe6616da6c48f5c1d1ec_prof);

        
        $__internal_343fc86d77da864968d85ce0395aa5cb7dbbe45ced97a8d54b3d26fdbf6cc78b->leave($__internal_343fc86d77da864968d85ce0395aa5cb7dbbe45ced97a8d54b3d26fdbf6cc78b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_721e68248dc2fcf633b2cf2a3d05aa1391768acfddd73f92a0dd387729e988a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721e68248dc2fcf633b2cf2a3d05aa1391768acfddd73f92a0dd387729e988a2->enter($__internal_721e68248dc2fcf633b2cf2a3d05aa1391768acfddd73f92a0dd387729e988a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4343c365ed8cb7c1d69089f1c1d34e5bbd25d3e6f2cd0334a02a73bbc35b7fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4343c365ed8cb7c1d69089f1c1d34e5bbd25d3e6f2cd0334a02a73bbc35b7fe7->enter($__internal_4343c365ed8cb7c1d69089f1c1d34e5bbd25d3e6f2cd0334a02a73bbc35b7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_4343c365ed8cb7c1d69089f1c1d34e5bbd25d3e6f2cd0334a02a73bbc35b7fe7->leave($__internal_4343c365ed8cb7c1d69089f1c1d34e5bbd25d3e6f2cd0334a02a73bbc35b7fe7_prof);

        
        $__internal_721e68248dc2fcf633b2cf2a3d05aa1391768acfddd73f92a0dd387729e988a2->leave($__internal_721e68248dc2fcf633b2cf2a3d05aa1391768acfddd73f92a0dd387729e988a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5edede4f9503ce614ae4ebcc8c876a68dbc40b109615798325e01f197e17628e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edede4f9503ce614ae4ebcc8c876a68dbc40b109615798325e01f197e17628e->enter($__internal_5edede4f9503ce614ae4ebcc8c876a68dbc40b109615798325e01f197e17628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c04097c19fb57241557e94b797ef970ad98e19e6eea6de8f0f1e31a91a8b7d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04097c19fb57241557e94b797ef970ad98e19e6eea6de8f0f1e31a91a8b7d2c->enter($__internal_c04097c19fb57241557e94b797ef970ad98e19e6eea6de8f0f1e31a91a8b7d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c04097c19fb57241557e94b797ef970ad98e19e6eea6de8f0f1e31a91a8b7d2c->leave($__internal_c04097c19fb57241557e94b797ef970ad98e19e6eea6de8f0f1e31a91a8b7d2c_prof);

        
        $__internal_5edede4f9503ce614ae4ebcc8c876a68dbc40b109615798325e01f197e17628e->leave($__internal_5edede4f9503ce614ae4ebcc8c876a68dbc40b109615798325e01f197e17628e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1d8076f269aca700f994041adac66032e04ea4ed2b46db9f21fb0883b7aaa0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d8076f269aca700f994041adac66032e04ea4ed2b46db9f21fb0883b7aaa0b->enter($__internal_d1d8076f269aca700f994041adac66032e04ea4ed2b46db9f21fb0883b7aaa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a5bb70a02b5247dd70774a8f1f479e5bd484d121ca7abec395c32a3d99d0390a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bb70a02b5247dd70774a8f1f479e5bd484d121ca7abec395c32a3d99d0390a->enter($__internal_a5bb70a02b5247dd70774a8f1f479e5bd484d121ca7abec395c32a3d99d0390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "_format" => "atom")), "html", null, true);
        echo "\">Feed</a>
        </div>
        <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 19
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:Category:show.html.twig", 19)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        // line 20
        echo "
    ";
        // line 21
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 22
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "                ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 33
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                ";
                } else {
                    // line 35
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 48
        echo "
    <div class=\"pagination_desc\">
        <strong>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")), "html", null, true);
        echo "</strong> jobs in this category

        ";
        // line 52
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 53
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
        ";
        }
        // line 55
        echo "    </div>
";
        
        $__internal_a5bb70a02b5247dd70774a8f1f479e5bd484d121ca7abec395c32a3d99d0390a->leave($__internal_a5bb70a02b5247dd70774a8f1f479e5bd484d121ca7abec395c32a3d99d0390a_prof);

        
        $__internal_d1d8076f269aca700f994041adac66032e04ea4ed2b46db9f21fb0883b7aaa0b->leave($__internal_d1d8076f269aca700f994041adac66032e04ea4ed2b46db9f21fb0883b7aaa0b_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 55,  206 => 53,  204 => 52,  199 => 50,  195 => 48,  188 => 44,  184 => 43,  178 => 40,  174 => 39,  171 => 38,  165 => 37,  157 => 35,  151 => 33,  148 => 32,  144 => 31,  138 => 28,  134 => 27,  128 => 24,  124 => 23,  121 => 22,  119 => 21,  116 => 20,  114 => 19,  108 => 16,  103 => 14,  99 => 12,  90 => 11,  78 => 8,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EnsJobeetBundle::layout.html.twig' %}
{% block title %}
    Jobs in the {{ category.name }} category
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ensjobeet/css/jobs.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block content %}
    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"{{ path('ens_category_show', { 'slug': category.slug, '_format': 'atom' }) }}\">Feed</a>
        </div>
        <h1>{{ category.name }}</h1>
    </div>

    {% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}

    {% if last_page > 1 %}
        <div class=\"pagination\">
            <a href=\"{{ path('ens_category_show', { 'slug': category.slug, 'page': 1 }) }}\">
                <img src=\"{{ asset('bundles/ensjobeet/images/first.png') }}\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"{{ path('ens_category_show', { 'slug': category.slug, 'page': previous_page }) }}\">
                <img src=\"{{ asset('bundles/ensjobeet/images/previous.png') }}\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            {% for page in 1..last_page %}
                {% if page == current_page %}
                    {{ page }}
                {% else %}
                    <a href=\"{{ path('ens_category_show', { 'slug': category.slug, 'page': page }) }}\">{{ page }}</a>
                {% endif %}
            {% endfor %}

            <a href=\"{{ path('ens_category_show', { 'slug': category.slug, 'page': next_page }) }}\">
                <img src=\"{{ asset('bundles/ensjobeet/images/next.png') }}\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"{{ path('ens_category_show', { 'slug': category.slug, 'page': last_page }) }}\">
                <img src=\"{{ asset('bundles/ensjobeet/images/last.png') }}\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    {% endif %}

    <div class=\"pagination_desc\">
        <strong>{{ total_jobs }}</strong> jobs in this category

        {% if last_page > 1 %}
            - page <strong>{{ current_page }}/{{ last_page }}</strong>
        {% endif %}
    </div>
{% endblock %}", "EnsJobeetBundle:Category:show.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Category/show.html.twig");
    }
}
