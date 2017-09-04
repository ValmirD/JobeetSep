<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_36d56c3a7f0300d6ac91d0530be0976bdb532fabab6bbad837c693947d656402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6221e0c5b06318b43563beef9055c8fae105a8141ce6bc6da1fcba54891bf914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6221e0c5b06318b43563beef9055c8fae105a8141ce6bc6da1fcba54891bf914->enter($__internal_6221e0c5b06318b43563beef9055c8fae105a8141ce6bc6da1fcba54891bf914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_ac8f4e68fa753840acc962491b4a06c0e3207c7787781b53509d8725966335ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8f4e68fa753840acc962491b4a06c0e3207c7787781b53509d8725966335ad->enter($__internal_ac8f4e68fa753840acc962491b4a06c0e3207c7787781b53509d8725966335ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6221e0c5b06318b43563beef9055c8fae105a8141ce6bc6da1fcba54891bf914->leave($__internal_6221e0c5b06318b43563beef9055c8fae105a8141ce6bc6da1fcba54891bf914_prof);

        
        $__internal_ac8f4e68fa753840acc962491b4a06c0e3207c7787781b53509d8725966335ad->leave($__internal_ac8f4e68fa753840acc962491b4a06c0e3207c7787781b53509d8725966335ad_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9263c3e3102f70b6ee95978b6b6c76bee5ec0b207f1b9c6e9891abba511a3238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9263c3e3102f70b6ee95978b6b6c76bee5ec0b207f1b9c6e9891abba511a3238->enter($__internal_9263c3e3102f70b6ee95978b6b6c76bee5ec0b207f1b9c6e9891abba511a3238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_3d75430aa6bb486d7668258d6219db103b1f2f788469f97f1906470e73414535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d75430aa6bb486d7668258d6219db103b1f2f788469f97f1906470e73414535->enter($__internal_3d75430aa6bb486d7668258d6219db103b1f2f788469f97f1906470e73414535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_3d75430aa6bb486d7668258d6219db103b1f2f788469f97f1906470e73414535->leave($__internal_3d75430aa6bb486d7668258d6219db103b1f2f788469f97f1906470e73414535_prof);

        
        $__internal_9263c3e3102f70b6ee95978b6b6c76bee5ec0b207f1b9c6e9891abba511a3238->leave($__internal_9263c3e3102f70b6ee95978b6b6c76bee5ec0b207f1b9c6e9891abba511a3238_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
