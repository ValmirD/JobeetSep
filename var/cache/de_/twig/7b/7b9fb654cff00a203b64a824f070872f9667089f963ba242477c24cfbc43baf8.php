<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_217224a4108f58c43e31e2c2cbda04747a68983d1c37fd34a1b4f9c7f908a615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e64c904fcbb7ccf4933792793c4275d86000241ed226667a66e03e0bb3500ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e64c904fcbb7ccf4933792793c4275d86000241ed226667a66e03e0bb3500ea->enter($__internal_5e64c904fcbb7ccf4933792793c4275d86000241ed226667a66e03e0bb3500ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e334bbe0a2144a7d2a3e127dea87ea331b2acc040f57e81398d630ee5888a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e334bbe0a2144a7d2a3e127dea87ea331b2acc040f57e81398d630ee5888a146->enter($__internal_e334bbe0a2144a7d2a3e127dea87ea331b2acc040f57e81398d630ee5888a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e64c904fcbb7ccf4933792793c4275d86000241ed226667a66e03e0bb3500ea->leave($__internal_5e64c904fcbb7ccf4933792793c4275d86000241ed226667a66e03e0bb3500ea_prof);

        
        $__internal_e334bbe0a2144a7d2a3e127dea87ea331b2acc040f57e81398d630ee5888a146->leave($__internal_e334bbe0a2144a7d2a3e127dea87ea331b2acc040f57e81398d630ee5888a146_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06cba55367eb132e289af8c1f1a141b54e753969ce520d7c44abff51a9cfb516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cba55367eb132e289af8c1f1a141b54e753969ce520d7c44abff51a9cfb516->enter($__internal_06cba55367eb132e289af8c1f1a141b54e753969ce520d7c44abff51a9cfb516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5dd69fe7e7343496c5ced3fc742c863c0913dc009b0b525b84d4bf1ba0185509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd69fe7e7343496c5ced3fc742c863c0913dc009b0b525b84d4bf1ba0185509->enter($__internal_5dd69fe7e7343496c5ced3fc742c863c0913dc009b0b525b84d4bf1ba0185509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5dd69fe7e7343496c5ced3fc742c863c0913dc009b0b525b84d4bf1ba0185509->leave($__internal_5dd69fe7e7343496c5ced3fc742c863c0913dc009b0b525b84d4bf1ba0185509_prof);

        
        $__internal_06cba55367eb132e289af8c1f1a141b54e753969ce520d7c44abff51a9cfb516->leave($__internal_06cba55367eb132e289af8c1f1a141b54e753969ce520d7c44abff51a9cfb516_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
