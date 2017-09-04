<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_504a568cf7a66ba3d48b85ec3d655639bb12c9b50f5a097dc63b0f614bba24ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63107f9f9dd37bbca18ed1ddde731c02e1eef39b933cd00c818c59316761acb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63107f9f9dd37bbca18ed1ddde731c02e1eef39b933cd00c818c59316761acb2->enter($__internal_63107f9f9dd37bbca18ed1ddde731c02e1eef39b933cd00c818c59316761acb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_105777adda47ad40d1c3a06119e8f3135cf25c7a098053e53addacf36787f646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105777adda47ad40d1c3a06119e8f3135cf25c7a098053e53addacf36787f646->enter($__internal_105777adda47ad40d1c3a06119e8f3135cf25c7a098053e53addacf36787f646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63107f9f9dd37bbca18ed1ddde731c02e1eef39b933cd00c818c59316761acb2->leave($__internal_63107f9f9dd37bbca18ed1ddde731c02e1eef39b933cd00c818c59316761acb2_prof);

        
        $__internal_105777adda47ad40d1c3a06119e8f3135cf25c7a098053e53addacf36787f646->leave($__internal_105777adda47ad40d1c3a06119e8f3135cf25c7a098053e53addacf36787f646_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_857f02503bebe395412908957353108ac426467e4aba580bed505188a318088b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857f02503bebe395412908957353108ac426467e4aba580bed505188a318088b->enter($__internal_857f02503bebe395412908957353108ac426467e4aba580bed505188a318088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30b0bc826f9ea8e5af21e5e10c9af832bfdfefc6f0d21b50cc86f3651cfb1c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b0bc826f9ea8e5af21e5e10c9af832bfdfefc6f0d21b50cc86f3651cfb1c48->enter($__internal_30b0bc826f9ea8e5af21e5e10c9af832bfdfefc6f0d21b50cc86f3651cfb1c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_30b0bc826f9ea8e5af21e5e10c9af832bfdfefc6f0d21b50cc86f3651cfb1c48->leave($__internal_30b0bc826f9ea8e5af21e5e10c9af832bfdfefc6f0d21b50cc86f3651cfb1c48_prof);

        
        $__internal_857f02503bebe395412908957353108ac426467e4aba580bed505188a318088b->leave($__internal_857f02503bebe395412908957353108ac426467e4aba580bed505188a318088b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef26201d7dc59482cccfc3a25ed2f6473389f021c207311f4b60c823b1449e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef26201d7dc59482cccfc3a25ed2f6473389f021c207311f4b60c823b1449e81->enter($__internal_ef26201d7dc59482cccfc3a25ed2f6473389f021c207311f4b60c823b1449e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f28d0bc9d740cf31da34274c0769035c713413db2299da322f6e57db7d3c9a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28d0bc9d740cf31da34274c0769035c713413db2299da322f6e57db7d3c9a64->enter($__internal_f28d0bc9d740cf31da34274c0769035c713413db2299da322f6e57db7d3c9a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f28d0bc9d740cf31da34274c0769035c713413db2299da322f6e57db7d3c9a64->leave($__internal_f28d0bc9d740cf31da34274c0769035c713413db2299da322f6e57db7d3c9a64_prof);

        
        $__internal_ef26201d7dc59482cccfc3a25ed2f6473389f021c207311f4b60c823b1449e81->leave($__internal_ef26201d7dc59482cccfc3a25ed2f6473389f021c207311f4b60c823b1449e81_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a1108acdb7ec8f879e7102b57e0495db02c5272d8868f28fbeb094fef4aa071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1108acdb7ec8f879e7102b57e0495db02c5272d8868f28fbeb094fef4aa071->enter($__internal_4a1108acdb7ec8f879e7102b57e0495db02c5272d8868f28fbeb094fef4aa071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2d528eb97a5b4c714f44384bf2f0f98563a4295b3755f68f9a26231cd20fa5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d528eb97a5b4c714f44384bf2f0f98563a4295b3755f68f9a26231cd20fa5c->enter($__internal_f2d528eb97a5b4c714f44384bf2f0f98563a4295b3755f68f9a26231cd20fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f2d528eb97a5b4c714f44384bf2f0f98563a4295b3755f68f9a26231cd20fa5c->leave($__internal_f2d528eb97a5b4c714f44384bf2f0f98563a4295b3755f68f9a26231cd20fa5c_prof);

        
        $__internal_4a1108acdb7ec8f879e7102b57e0495db02c5272d8868f28fbeb094fef4aa071->leave($__internal_4a1108acdb7ec8f879e7102b57e0495db02c5272d8868f28fbeb094fef4aa071_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
