<?php

/* Level/new.html.twig */
class __TwigTemplate_3a518d758512475830129e54cccdf610afbb14133ddbb17efc0d694619505ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Level/new.html.twig", 1);
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
        $__internal_00c1dd5d67c529fd12fcc7237b054cc4385f03bf8fdede0cbd9ccb3622d53f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c1dd5d67c529fd12fcc7237b054cc4385f03bf8fdede0cbd9ccb3622d53f0d->enter($__internal_00c1dd5d67c529fd12fcc7237b054cc4385f03bf8fdede0cbd9ccb3622d53f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/new.html.twig"));

        $__internal_ad3021d6bb3024f2010a1049b174cd594df8c35a85144dc4c510486a228cce91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3021d6bb3024f2010a1049b174cd594df8c35a85144dc4c510486a228cce91->enter($__internal_ad3021d6bb3024f2010a1049b174cd594df8c35a85144dc4c510486a228cce91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c1dd5d67c529fd12fcc7237b054cc4385f03bf8fdede0cbd9ccb3622d53f0d->leave($__internal_00c1dd5d67c529fd12fcc7237b054cc4385f03bf8fdede0cbd9ccb3622d53f0d_prof);

        
        $__internal_ad3021d6bb3024f2010a1049b174cd594df8c35a85144dc4c510486a228cce91->leave($__internal_ad3021d6bb3024f2010a1049b174cd594df8c35a85144dc4c510486a228cce91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb052631f00d643b91f61a3c8fdfd9f1f6b739c68615447a8ddddf72c93371df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb052631f00d643b91f61a3c8fdfd9f1f6b739c68615447a8ddddf72c93371df->enter($__internal_eb052631f00d643b91f61a3c8fdfd9f1f6b739c68615447a8ddddf72c93371df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17ee79762174acfbe8973d3c84b7d71096a6422abfed94bc2d79b7e32f56c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17ee79762174acfbe8973d3c84b7d71096a6422abfed94bc2d79b7e32f56c50->enter($__internal_d17ee79762174acfbe8973d3c84b7d71096a6422abfed94bc2d79b7e32f56c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d17ee79762174acfbe8973d3c84b7d71096a6422abfed94bc2d79b7e32f56c50->leave($__internal_d17ee79762174acfbe8973d3c84b7d71096a6422abfed94bc2d79b7e32f56c50_prof);

        
        $__internal_eb052631f00d643b91f61a3c8fdfd9f1f6b739c68615447a8ddddf72c93371df->leave($__internal_eb052631f00d643b91f61a3c8fdfd9f1f6b739c68615447a8ddddf72c93371df_prof);

    }

    public function getTemplateName()
    {
        return "Level/new.html.twig";
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
", "Level/new.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\views\\Level\\new.html.twig");
    }
}
