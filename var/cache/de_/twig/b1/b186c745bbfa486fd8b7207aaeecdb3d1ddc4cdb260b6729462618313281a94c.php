<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_9e229ec1fe41a6035fcbb18b9675c94e40efd5749d6100195bd577077d838670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e68eddb8566cbce78a7e7097892bc682b9beef16b02dc323a4118466755ce36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e68eddb8566cbce78a7e7097892bc682b9beef16b02dc323a4118466755ce36->enter($__internal_0e68eddb8566cbce78a7e7097892bc682b9beef16b02dc323a4118466755ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_c8e282993749e2db21102a98afc61fadc5bfe009acbab80f274ce31cfc5e43f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e282993749e2db21102a98afc61fadc5bfe009acbab80f274ce31cfc5e43f6->enter($__internal_c8e282993749e2db21102a98afc61fadc5bfe009acbab80f274ce31cfc5e43f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e68eddb8566cbce78a7e7097892bc682b9beef16b02dc323a4118466755ce36->leave($__internal_0e68eddb8566cbce78a7e7097892bc682b9beef16b02dc323a4118466755ce36_prof);

        
        $__internal_c8e282993749e2db21102a98afc61fadc5bfe009acbab80f274ce31cfc5e43f6->leave($__internal_c8e282993749e2db21102a98afc61fadc5bfe009acbab80f274ce31cfc5e43f6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_64d9d03de808c79eed5c0c42c2f262fc7ab8e6eac7d70ca4eaab0d9e4e0419d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d9d03de808c79eed5c0c42c2f262fc7ab8e6eac7d70ca4eaab0d9e4e0419d5->enter($__internal_64d9d03de808c79eed5c0c42c2f262fc7ab8e6eac7d70ca4eaab0d9e4e0419d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1fe903fccda249b738ee7f829173f5cc4a883490a9930c900c957952a0ee5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe903fccda249b738ee7f829173f5cc4a883490a9930c900c957952a0ee5951->enter($__internal_1fe903fccda249b738ee7f829173f5cc4a883490a9930c900c957952a0ee5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_1fe903fccda249b738ee7f829173f5cc4a883490a9930c900c957952a0ee5951->leave($__internal_1fe903fccda249b738ee7f829173f5cc4a883490a9930c900c957952a0ee5951_prof);

        
        $__internal_64d9d03de808c79eed5c0c42c2f262fc7ab8e6eac7d70ca4eaab0d9e4e0419d5->leave($__internal_64d9d03de808c79eed5c0c42c2f262fc7ab8e6eac7d70ca4eaab0d9e4e0419d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
