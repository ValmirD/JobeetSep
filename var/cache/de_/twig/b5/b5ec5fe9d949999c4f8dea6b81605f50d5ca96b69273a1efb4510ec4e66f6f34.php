<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_25f0d0316da3efd74e13400df63ef3e84721ffbdee12dee624b6e53162b91754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f53e65d0d4f0df82e61af35dabfa5d66b27d4e5cb88b80954530d43b036e27af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53e65d0d4f0df82e61af35dabfa5d66b27d4e5cb88b80954530d43b036e27af->enter($__internal_f53e65d0d4f0df82e61af35dabfa5d66b27d4e5cb88b80954530d43b036e27af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f55dd7e028bd48ac070522870e201b190f24996fdd08fcedb4ed3146593a93bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55dd7e028bd48ac070522870e201b190f24996fdd08fcedb4ed3146593a93bb->enter($__internal_f55dd7e028bd48ac070522870e201b190f24996fdd08fcedb4ed3146593a93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53e65d0d4f0df82e61af35dabfa5d66b27d4e5cb88b80954530d43b036e27af->leave($__internal_f53e65d0d4f0df82e61af35dabfa5d66b27d4e5cb88b80954530d43b036e27af_prof);

        
        $__internal_f55dd7e028bd48ac070522870e201b190f24996fdd08fcedb4ed3146593a93bb->leave($__internal_f55dd7e028bd48ac070522870e201b190f24996fdd08fcedb4ed3146593a93bb_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_18b91df6eaac70de2dd5e860a6cbe8aefe5304869b8587be0dba97ac7a08c888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b91df6eaac70de2dd5e860a6cbe8aefe5304869b8587be0dba97ac7a08c888->enter($__internal_18b91df6eaac70de2dd5e860a6cbe8aefe5304869b8587be0dba97ac7a08c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_df72449f876fbd8e368d1b20f0384bc33420d1e889fdc7bc5e85508864f339d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df72449f876fbd8e368d1b20f0384bc33420d1e889fdc7bc5e85508864f339d0->enter($__internal_df72449f876fbd8e368d1b20f0384bc33420d1e889fdc7bc5e85508864f339d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_df72449f876fbd8e368d1b20f0384bc33420d1e889fdc7bc5e85508864f339d0->leave($__internal_df72449f876fbd8e368d1b20f0384bc33420d1e889fdc7bc5e85508864f339d0_prof);

        
        $__internal_18b91df6eaac70de2dd5e860a6cbe8aefe5304869b8587be0dba97ac7a08c888->leave($__internal_18b91df6eaac70de2dd5e860a6cbe8aefe5304869b8587be0dba97ac7a08c888_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71626143e7a6972f17ebdbc078ffb199320e3049b9e75f460d96debce589ab60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71626143e7a6972f17ebdbc078ffb199320e3049b9e75f460d96debce589ab60->enter($__internal_71626143e7a6972f17ebdbc078ffb199320e3049b9e75f460d96debce589ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94098e43038a622de4052e0b451df5ad8130c2651450254a135cc4dc456d2303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94098e43038a622de4052e0b451df5ad8130c2651450254a135cc4dc456d2303->enter($__internal_94098e43038a622de4052e0b451df5ad8130c2651450254a135cc4dc456d2303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_94098e43038a622de4052e0b451df5ad8130c2651450254a135cc4dc456d2303->leave($__internal_94098e43038a622de4052e0b451df5ad8130c2651450254a135cc4dc456d2303_prof);

        
        $__internal_71626143e7a6972f17ebdbc078ffb199320e3049b9e75f460d96debce589ab60->leave($__internal_71626143e7a6972f17ebdbc078ffb199320e3049b9e75f460d96debce589ab60_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
