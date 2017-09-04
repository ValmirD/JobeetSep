<?php

/* base.html.twig */
class __TwigTemplate_4304e3c6a49128fbd05ca437fae4eda2d4686ea387cb5b36ccbfb2cf6b6d5ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba02eaee991daec0123542bef41b64809aeec9602b56d15c64de8ed0ae7e7e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba02eaee991daec0123542bef41b64809aeec9602b56d15c64de8ed0ae7e7e78->enter($__internal_ba02eaee991daec0123542bef41b64809aeec9602b56d15c64de8ed0ae7e7e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_476ab201188e5aa18e9731ab40d39b525ce0fda64ae4534f95c9763b5c24e2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476ab201188e5aa18e9731ab40d39b525ce0fda64ae4534f95c9763b5c24e2ef->enter($__internal_476ab201188e5aa18e9731ab40d39b525ce0fda64ae4534f95c9763b5c24e2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ba02eaee991daec0123542bef41b64809aeec9602b56d15c64de8ed0ae7e7e78->leave($__internal_ba02eaee991daec0123542bef41b64809aeec9602b56d15c64de8ed0ae7e7e78_prof);

        
        $__internal_476ab201188e5aa18e9731ab40d39b525ce0fda64ae4534f95c9763b5c24e2ef->leave($__internal_476ab201188e5aa18e9731ab40d39b525ce0fda64ae4534f95c9763b5c24e2ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1f300198fc31a0fe34920c28a08fb7cbd77362a2b2f4f5b53f0a467a501a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1f300198fc31a0fe34920c28a08fb7cbd77362a2b2f4f5b53f0a467a501a78->enter($__internal_bc1f300198fc31a0fe34920c28a08fb7cbd77362a2b2f4f5b53f0a467a501a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_465967bf47b8f90167cbc543b3a6e454d5317c7fe80d5c29ad897011be09d989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465967bf47b8f90167cbc543b3a6e454d5317c7fe80d5c29ad897011be09d989->enter($__internal_465967bf47b8f90167cbc543b3a6e454d5317c7fe80d5c29ad897011be09d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_465967bf47b8f90167cbc543b3a6e454d5317c7fe80d5c29ad897011be09d989->leave($__internal_465967bf47b8f90167cbc543b3a6e454d5317c7fe80d5c29ad897011be09d989_prof);

        
        $__internal_bc1f300198fc31a0fe34920c28a08fb7cbd77362a2b2f4f5b53f0a467a501a78->leave($__internal_bc1f300198fc31a0fe34920c28a08fb7cbd77362a2b2f4f5b53f0a467a501a78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_994af6f8df19de48150a2f5e3ba78f922498f946c122e5eb4d05471b0b225624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994af6f8df19de48150a2f5e3ba78f922498f946c122e5eb4d05471b0b225624->enter($__internal_994af6f8df19de48150a2f5e3ba78f922498f946c122e5eb4d05471b0b225624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6de3a9a9f8080e7bac418e38ded21d68a3ad82c372ee6d717b86d9cf4986ef59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de3a9a9f8080e7bac418e38ded21d68a3ad82c372ee6d717b86d9cf4986ef59->enter($__internal_6de3a9a9f8080e7bac418e38ded21d68a3ad82c372ee6d717b86d9cf4986ef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6de3a9a9f8080e7bac418e38ded21d68a3ad82c372ee6d717b86d9cf4986ef59->leave($__internal_6de3a9a9f8080e7bac418e38ded21d68a3ad82c372ee6d717b86d9cf4986ef59_prof);

        
        $__internal_994af6f8df19de48150a2f5e3ba78f922498f946c122e5eb4d05471b0b225624->leave($__internal_994af6f8df19de48150a2f5e3ba78f922498f946c122e5eb4d05471b0b225624_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8a260dc09ebd8d4a738c07fb729b5268b67578ef0f700d3f259b1bf173ce5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a260dc09ebd8d4a738c07fb729b5268b67578ef0f700d3f259b1bf173ce5d2->enter($__internal_f8a260dc09ebd8d4a738c07fb729b5268b67578ef0f700d3f259b1bf173ce5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7f4fca2057d42c67c3453e984455a3325a32a60b231138e3718b77bd961853e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f4fca2057d42c67c3453e984455a3325a32a60b231138e3718b77bd961853e->enter($__internal_d7f4fca2057d42c67c3453e984455a3325a32a60b231138e3718b77bd961853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7f4fca2057d42c67c3453e984455a3325a32a60b231138e3718b77bd961853e->leave($__internal_d7f4fca2057d42c67c3453e984455a3325a32a60b231138e3718b77bd961853e_prof);

        
        $__internal_f8a260dc09ebd8d4a738c07fb729b5268b67578ef0f700d3f259b1bf173ce5d2->leave($__internal_f8a260dc09ebd8d4a738c07fb729b5268b67578ef0f700d3f259b1bf173ce5d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a4727a2cb1d6742b3bdb1b0b08086436ad49e01e5ce06c7075a3a16c358c2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4727a2cb1d6742b3bdb1b0b08086436ad49e01e5ce06c7075a3a16c358c2cc->enter($__internal_2a4727a2cb1d6742b3bdb1b0b08086436ad49e01e5ce06c7075a3a16c358c2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb4e4fcd43d8ce1753e5d965c548b87c8e38d6b7e75aef3ef33428d05ee6669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4e4fcd43d8ce1753e5d965c548b87c8e38d6b7e75aef3ef33428d05ee6669a->enter($__internal_eb4e4fcd43d8ce1753e5d965c548b87c8e38d6b7e75aef3ef33428d05ee6669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb4e4fcd43d8ce1753e5d965c548b87c8e38d6b7e75aef3ef33428d05ee6669a->leave($__internal_eb4e4fcd43d8ce1753e5d965c548b87c8e38d6b7e75aef3ef33428d05ee6669a_prof);

        
        $__internal_2a4727a2cb1d6742b3bdb1b0b08086436ad49e01e5ce06c7075a3a16c358c2cc->leave($__internal_2a4727a2cb1d6742b3bdb1b0b08086436ad49e01e5ce06c7075a3a16c358c2cc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\views\\base.html.twig");
    }
}
