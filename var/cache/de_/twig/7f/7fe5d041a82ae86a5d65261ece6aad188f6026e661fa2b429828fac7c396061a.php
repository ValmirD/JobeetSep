<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8419c8b69e6ce73a51231dd13eca31790fdaf2b768504d0f7a770cf8a5b34bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd066e7fedf3d9d3e1ba0f0b8420e4bf8ce0b22ad542dfe0686f5d29599c938d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd066e7fedf3d9d3e1ba0f0b8420e4bf8ce0b22ad542dfe0686f5d29599c938d->enter($__internal_dd066e7fedf3d9d3e1ba0f0b8420e4bf8ce0b22ad542dfe0686f5d29599c938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1c148ba6bd766d9cd665f8dbe12e1e09781d7c7dff719ce233e94ee2021146f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c148ba6bd766d9cd665f8dbe12e1e09781d7c7dff719ce233e94ee2021146f9->enter($__internal_1c148ba6bd766d9cd665f8dbe12e1e09781d7c7dff719ce233e94ee2021146f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd066e7fedf3d9d3e1ba0f0b8420e4bf8ce0b22ad542dfe0686f5d29599c938d->leave($__internal_dd066e7fedf3d9d3e1ba0f0b8420e4bf8ce0b22ad542dfe0686f5d29599c938d_prof);

        
        $__internal_1c148ba6bd766d9cd665f8dbe12e1e09781d7c7dff719ce233e94ee2021146f9->leave($__internal_1c148ba6bd766d9cd665f8dbe12e1e09781d7c7dff719ce233e94ee2021146f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12f527aef62cec7bdf03bbabb18207dbf013ae6bd3af05bcf46603c5d016a39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f527aef62cec7bdf03bbabb18207dbf013ae6bd3af05bcf46603c5d016a39f->enter($__internal_12f527aef62cec7bdf03bbabb18207dbf013ae6bd3af05bcf46603c5d016a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab2f385210bcb1f0907196ad015ea1cbf377c0cd1e3050a5d819454d3006829e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2f385210bcb1f0907196ad015ea1cbf377c0cd1e3050a5d819454d3006829e->enter($__internal_ab2f385210bcb1f0907196ad015ea1cbf377c0cd1e3050a5d819454d3006829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab2f385210bcb1f0907196ad015ea1cbf377c0cd1e3050a5d819454d3006829e->leave($__internal_ab2f385210bcb1f0907196ad015ea1cbf377c0cd1e3050a5d819454d3006829e_prof);

        
        $__internal_12f527aef62cec7bdf03bbabb18207dbf013ae6bd3af05bcf46603c5d016a39f->leave($__internal_12f527aef62cec7bdf03bbabb18207dbf013ae6bd3af05bcf46603c5d016a39f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff73f347afed45b91492dd6ee0d9f7e1660c6d9c2e0c85fe4c8887d0fb62304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff73f347afed45b91492dd6ee0d9f7e1660c6d9c2e0c85fe4c8887d0fb62304->enter($__internal_7ff73f347afed45b91492dd6ee0d9f7e1660c6d9c2e0c85fe4c8887d0fb62304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24abcdd8e39a231ec5f7661c541edaf02e5a29e58529a0d01992b469848060b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24abcdd8e39a231ec5f7661c541edaf02e5a29e58529a0d01992b469848060b5->enter($__internal_24abcdd8e39a231ec5f7661c541edaf02e5a29e58529a0d01992b469848060b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_24abcdd8e39a231ec5f7661c541edaf02e5a29e58529a0d01992b469848060b5->leave($__internal_24abcdd8e39a231ec5f7661c541edaf02e5a29e58529a0d01992b469848060b5_prof);

        
        $__internal_7ff73f347afed45b91492dd6ee0d9f7e1660c6d9c2e0c85fe4c8887d0fb62304->leave($__internal_7ff73f347afed45b91492dd6ee0d9f7e1660c6d9c2e0c85fe4c8887d0fb62304_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
