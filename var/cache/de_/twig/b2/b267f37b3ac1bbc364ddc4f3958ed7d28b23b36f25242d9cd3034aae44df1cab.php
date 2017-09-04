<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d0b165cebd0a761ae1c26294b98e7f846966df5d3d9e2f77fdad6f70452ac45a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c562dae63a103ff4462edd05460cbaf2cf179c49f12883aa17bba36c2b78b4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c562dae63a103ff4462edd05460cbaf2cf179c49f12883aa17bba36c2b78b4a9->enter($__internal_c562dae63a103ff4462edd05460cbaf2cf179c49f12883aa17bba36c2b78b4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_33aa3e5e134ba3819dfaf49652306e1c6478789f4d47ab741fa88203a0bf0a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aa3e5e134ba3819dfaf49652306e1c6478789f4d47ab741fa88203a0bf0a9c->enter($__internal_33aa3e5e134ba3819dfaf49652306e1c6478789f4d47ab741fa88203a0bf0a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c562dae63a103ff4462edd05460cbaf2cf179c49f12883aa17bba36c2b78b4a9->leave($__internal_c562dae63a103ff4462edd05460cbaf2cf179c49f12883aa17bba36c2b78b4a9_prof);

        
        $__internal_33aa3e5e134ba3819dfaf49652306e1c6478789f4d47ab741fa88203a0bf0a9c->leave($__internal_33aa3e5e134ba3819dfaf49652306e1c6478789f4d47ab741fa88203a0bf0a9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_844aa14ed40ce223fe304450e1995ec2c95da740dcc9170dcd2d00083623ff71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844aa14ed40ce223fe304450e1995ec2c95da740dcc9170dcd2d00083623ff71->enter($__internal_844aa14ed40ce223fe304450e1995ec2c95da740dcc9170dcd2d00083623ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7eb5e1a5af072c857fda4aec87d71884d6158416ae98adbe933ee04615a37c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb5e1a5af072c857fda4aec87d71884d6158416ae98adbe933ee04615a37c0f->enter($__internal_7eb5e1a5af072c857fda4aec87d71884d6158416ae98adbe933ee04615a37c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7eb5e1a5af072c857fda4aec87d71884d6158416ae98adbe933ee04615a37c0f->leave($__internal_7eb5e1a5af072c857fda4aec87d71884d6158416ae98adbe933ee04615a37c0f_prof);

        
        $__internal_844aa14ed40ce223fe304450e1995ec2c95da740dcc9170dcd2d00083623ff71->leave($__internal_844aa14ed40ce223fe304450e1995ec2c95da740dcc9170dcd2d00083623ff71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9b4c964e57431a7d87d7aa49f85c3a64943a50751d837cf614983ebd445e2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b4c964e57431a7d87d7aa49f85c3a64943a50751d837cf614983ebd445e2c4->enter($__internal_d9b4c964e57431a7d87d7aa49f85c3a64943a50751d837cf614983ebd445e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b72a779c9b7691ae03a159555b0a107d288d8b259f2c7a2ea5a5776bfbd2de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b72a779c9b7691ae03a159555b0a107d288d8b259f2c7a2ea5a5776bfbd2de5->enter($__internal_6b72a779c9b7691ae03a159555b0a107d288d8b259f2c7a2ea5a5776bfbd2de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b72a779c9b7691ae03a159555b0a107d288d8b259f2c7a2ea5a5776bfbd2de5->leave($__internal_6b72a779c9b7691ae03a159555b0a107d288d8b259f2c7a2ea5a5776bfbd2de5_prof);

        
        $__internal_d9b4c964e57431a7d87d7aa49f85c3a64943a50751d837cf614983ebd445e2c4->leave($__internal_d9b4c964e57431a7d87d7aa49f85c3a64943a50751d837cf614983ebd445e2c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_700fc1e960f4ceaf9320a2b0ad8d90cc94951573481f118a14097d2a229b08fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700fc1e960f4ceaf9320a2b0ad8d90cc94951573481f118a14097d2a229b08fe->enter($__internal_700fc1e960f4ceaf9320a2b0ad8d90cc94951573481f118a14097d2a229b08fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4e28b8ef8c930f41a8b827b77d971cb1f133e1bb947c39f5780bee813844acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e28b8ef8c930f41a8b827b77d971cb1f133e1bb947c39f5780bee813844acb->enter($__internal_e4e28b8ef8c930f41a8b827b77d971cb1f133e1bb947c39f5780bee813844acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4e28b8ef8c930f41a8b827b77d971cb1f133e1bb947c39f5780bee813844acb->leave($__internal_e4e28b8ef8c930f41a8b827b77d971cb1f133e1bb947c39f5780bee813844acb_prof);

        
        $__internal_700fc1e960f4ceaf9320a2b0ad8d90cc94951573481f118a14097d2a229b08fe->leave($__internal_700fc1e960f4ceaf9320a2b0ad8d90cc94951573481f118a14097d2a229b08fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
