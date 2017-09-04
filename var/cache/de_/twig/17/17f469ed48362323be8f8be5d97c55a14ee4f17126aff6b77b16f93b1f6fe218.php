<?php

/* @SonataAdmin/Block/block_stats.html.twig */
class __TwigTemplate_a0d1edcc7a6d773c7fb03871ea351056ef0331812d85ea6384715be951acb555 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8e40b15df5240ee4424d7a35a9c64364ecc4b94e3cfbec55f400733e32f50b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e40b15df5240ee4424d7a35a9c64364ecc4b94e3cfbec55f400733e32f50b4->enter($__internal_a8e40b15df5240ee4424d7a35a9c64364ecc4b94e3cfbec55f400733e32f50b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $__internal_9b4f918cc81c2b9a6338dc8a368869546a5a9f7c1fa9ee7366de0cb0abadf1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4f918cc81c2b9a6338dc8a368869546a5a9f7c1fa9ee7366de0cb0abadf1f2->enter($__internal_9b4f918cc81c2b9a6338dc8a368869546a5a9f7c1fa9ee7366de0cb0abadf1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8e40b15df5240ee4424d7a35a9c64364ecc4b94e3cfbec55f400733e32f50b4->leave($__internal_a8e40b15df5240ee4424d7a35a9c64364ecc4b94e3cfbec55f400733e32f50b4_prof);

        
        $__internal_9b4f918cc81c2b9a6338dc8a368869546a5a9f7c1fa9ee7366de0cb0abadf1f2->leave($__internal_9b4f918cc81c2b9a6338dc8a368869546a5a9f7c1fa9ee7366de0cb0abadf1f2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3e8efc18f9fe966801b16e2f71e2d80d403093fc6aac6f3400c33fc8874336ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8efc18f9fe966801b16e2f71e2d80d403093fc6aac6f3400c33fc8874336ca->enter($__internal_3e8efc18f9fe966801b16e2f71e2d80d403093fc6aac6f3400c33fc8874336ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_7302448703d2f7f04330773f2e88fb0355f9686b40f7918a5eb103beb3357f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7302448703d2f7f04330773f2e88fb0355f9686b40f7918a5eb103beb3357f29->enter($__internal_7302448703d2f7f04330773f2e88fb0355f9686b40f7918a5eb103beb3357f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_7302448703d2f7f04330773f2e88fb0355f9686b40f7918a5eb103beb3357f29->leave($__internal_7302448703d2f7f04330773f2e88fb0355f9686b40f7918a5eb103beb3357f29_prof);

        
        $__internal_3e8efc18f9fe966801b16e2f71e2d80d403093fc6aac6f3400c33fc8874336ca->leave($__internal_3e8efc18f9fe966801b16e2f71e2d80d403093fc6aac6f3400c33fc8874336ca_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_stats.html.twig";
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
", "@SonataAdmin/Block/block_stats.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Block\\block_stats.html.twig");
    }
}
