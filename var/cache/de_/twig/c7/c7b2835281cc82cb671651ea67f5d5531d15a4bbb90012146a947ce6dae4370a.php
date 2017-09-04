<?php

/* :Level:new.html.twig */
class __TwigTemplate_43b5e75d3fa0f99236502b1a2bd65555704657eafacbc0dce30387a51db1026e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Level:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51e4bc4169b4126a0a400dd1580c6888cabdf73271fff1828211c8679c6a1e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e4bc4169b4126a0a400dd1580c6888cabdf73271fff1828211c8679c6a1e2f->enter($__internal_51e4bc4169b4126a0a400dd1580c6888cabdf73271fff1828211c8679c6a1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:new.html.twig"));

        $__internal_abb30b054bb81e4bb2a4036f42232bdf559aa52ce3284276be0f501338758159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb30b054bb81e4bb2a4036f42232bdf559aa52ce3284276be0f501338758159->enter($__internal_abb30b054bb81e4bb2a4036f42232bdf559aa52ce3284276be0f501338758159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e4bc4169b4126a0a400dd1580c6888cabdf73271fff1828211c8679c6a1e2f->leave($__internal_51e4bc4169b4126a0a400dd1580c6888cabdf73271fff1828211c8679c6a1e2f_prof);

        
        $__internal_abb30b054bb81e4bb2a4036f42232bdf559aa52ce3284276be0f501338758159->leave($__internal_abb30b054bb81e4bb2a4036f42232bdf559aa52ce3284276be0f501338758159_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df5bb8cbf1931be4fa5bd932380dcea7f5bf54c4f1a292c3e77be5679916dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df5bb8cbf1931be4fa5bd932380dcea7f5bf54c4f1a292c3e77be5679916dfb->enter($__internal_9df5bb8cbf1931be4fa5bd932380dcea7f5bf54c4f1a292c3e77be5679916dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ba4c4e39115fce3e9a605104d4bf56494238c1ff7cd95215a68a313a8024d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba4c4e39115fce3e9a605104d4bf56494238c1ff7cd95215a68a313a8024d90->enter($__internal_1ba4c4e39115fce3e9a605104d4bf56494238c1ff7cd95215a68a313a8024d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Level creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1ba4c4e39115fce3e9a605104d4bf56494238c1ff7cd95215a68a313a8024d90->leave($__internal_1ba4c4e39115fce3e9a605104d4bf56494238c1ff7cd95215a68a313a8024d90_prof);

        
        $__internal_9df5bb8cbf1931be4fa5bd932380dcea7f5bf54c4f1a292c3e77be5679916dfb->leave($__internal_9df5bb8cbf1931be4fa5bd932380dcea7f5bf54c4f1a292c3e77be5679916dfb_prof);

    }

    public function getTemplateName()
    {
        return ":Level:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Level creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ens_level_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":Level:new.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources\\views/Level/new.html.twig");
    }
}
