<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0edcee5258948cd3e697d23d7583772f1c4d9b144c98dd177107626552828b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e778a3427c36b7f6ee4a02475264064cb75ddaf38a15aa0e84a36bead9be86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e778a3427c36b7f6ee4a02475264064cb75ddaf38a15aa0e84a36bead9be86->enter($__internal_71e778a3427c36b7f6ee4a02475264064cb75ddaf38a15aa0e84a36bead9be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8fe9977ef5c4296172a1834f16660c12aac5dd625d6bfdbdae47d24d44814098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe9977ef5c4296172a1834f16660c12aac5dd625d6bfdbdae47d24d44814098->enter($__internal_8fe9977ef5c4296172a1834f16660c12aac5dd625d6bfdbdae47d24d44814098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e778a3427c36b7f6ee4a02475264064cb75ddaf38a15aa0e84a36bead9be86->leave($__internal_71e778a3427c36b7f6ee4a02475264064cb75ddaf38a15aa0e84a36bead9be86_prof);

        
        $__internal_8fe9977ef5c4296172a1834f16660c12aac5dd625d6bfdbdae47d24d44814098->leave($__internal_8fe9977ef5c4296172a1834f16660c12aac5dd625d6bfdbdae47d24d44814098_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f01d50bb78b84746eb448eb8354bf7d30df4c3abab92cdc511ae80ec5a16921c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01d50bb78b84746eb448eb8354bf7d30df4c3abab92cdc511ae80ec5a16921c->enter($__internal_f01d50bb78b84746eb448eb8354bf7d30df4c3abab92cdc511ae80ec5a16921c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ffab4a870574c7e66901952ebd4205fd731e9ab4ff6daafe6b5b6f3ca4eda2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffab4a870574c7e66901952ebd4205fd731e9ab4ff6daafe6b5b6f3ca4eda2e->enter($__internal_8ffab4a870574c7e66901952ebd4205fd731e9ab4ff6daafe6b5b6f3ca4eda2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8ffab4a870574c7e66901952ebd4205fd731e9ab4ff6daafe6b5b6f3ca4eda2e->leave($__internal_8ffab4a870574c7e66901952ebd4205fd731e9ab4ff6daafe6b5b6f3ca4eda2e_prof);

        
        $__internal_f01d50bb78b84746eb448eb8354bf7d30df4c3abab92cdc511ae80ec5a16921c->leave($__internal_f01d50bb78b84746eb448eb8354bf7d30df4c3abab92cdc511ae80ec5a16921c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d211e4cc11b234b60ad3f4c0582939c9a50caf2c3bf4cd0610dc7dd4ae455c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d211e4cc11b234b60ad3f4c0582939c9a50caf2c3bf4cd0610dc7dd4ae455c12->enter($__internal_d211e4cc11b234b60ad3f4c0582939c9a50caf2c3bf4cd0610dc7dd4ae455c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_725bdd52b1acd9e1e025f6a547d366eaf012305cd9e0a5d92cd0aba26f5bb5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725bdd52b1acd9e1e025f6a547d366eaf012305cd9e0a5d92cd0aba26f5bb5d1->enter($__internal_725bdd52b1acd9e1e025f6a547d366eaf012305cd9e0a5d92cd0aba26f5bb5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_725bdd52b1acd9e1e025f6a547d366eaf012305cd9e0a5d92cd0aba26f5bb5d1->leave($__internal_725bdd52b1acd9e1e025f6a547d366eaf012305cd9e0a5d92cd0aba26f5bb5d1_prof);

        
        $__internal_d211e4cc11b234b60ad3f4c0582939c9a50caf2c3bf4cd0610dc7dd4ae455c12->leave($__internal_d211e4cc11b234b60ad3f4c0582939c9a50caf2c3bf4cd0610dc7dd4ae455c12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
