<?php

/* @SonataAdmin/Block/block_rss_dashboard.html.twig */
class __TwigTemplate_f8936cf8d648e8683124a6405bf66da7ffd1ac26278963905344e0a80af7cc0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "@SonataAdmin/Block/block_rss_dashboard.html.twig", 12);
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
        $__internal_1ad2f95e884f239385001c48d9a89de9e472e9713eed589aaddad0e1eb46d23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad2f95e884f239385001c48d9a89de9e472e9713eed589aaddad0e1eb46d23c->enter($__internal_1ad2f95e884f239385001c48d9a89de9e472e9713eed589aaddad0e1eb46d23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $__internal_07f5b7630aff6212bfa5a2de7d16e3670a4a2e2fd9a51e0795a9e38055e5e617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f5b7630aff6212bfa5a2de7d16e3670a4a2e2fd9a51e0795a9e38055e5e617->enter($__internal_07f5b7630aff6212bfa5a2de7d16e3670a4a2e2fd9a51e0795a9e38055e5e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad2f95e884f239385001c48d9a89de9e472e9713eed589aaddad0e1eb46d23c->leave($__internal_1ad2f95e884f239385001c48d9a89de9e472e9713eed589aaddad0e1eb46d23c_prof);

        
        $__internal_07f5b7630aff6212bfa5a2de7d16e3670a4a2e2fd9a51e0795a9e38055e5e617->leave($__internal_07f5b7630aff6212bfa5a2de7d16e3670a4a2e2fd9a51e0795a9e38055e5e617_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_80c4e774a88805496a7d93e92c4523d3ef919c2fc15f2aa4edd0bd17864f75a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c4e774a88805496a7d93e92c4523d3ef919c2fc15f2aa4edd0bd17864f75a7->enter($__internal_80c4e774a88805496a7d93e92c4523d3ef919c2fc15f2aa4edd0bd17864f75a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_551acf4c24a38798fc044bee2927b77dc586578791107cf003bfdfdcbaaad5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551acf4c24a38798fc044bee2927b77dc586578791107cf003bfdfdcbaaad5a8->enter($__internal_551acf4c24a38798fc044bee2927b77dc586578791107cf003bfdfdcbaaad5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_551acf4c24a38798fc044bee2927b77dc586578791107cf003bfdfdcbaaad5a8->leave($__internal_551acf4c24a38798fc044bee2927b77dc586578791107cf003bfdfdcbaaad5a8_prof);

        
        $__internal_80c4e774a88805496a7d93e92c4523d3ef919c2fc15f2aa4edd0bd17864f75a7->leave($__internal_80c4e774a88805496a7d93e92c4523d3ef919c2fc15f2aa4edd0bd17864f75a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_rss_dashboard.html.twig";
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
", "@SonataAdmin/Block/block_rss_dashboard.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Block\\block_rss_dashboard.html.twig");
    }
}
