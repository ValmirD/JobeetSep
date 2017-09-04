<?php

/* @EnsJobeet/Category/new.html.twig */
class __TwigTemplate_d9332574f4ac61374bd0d96be954be7491edb9c4791e551e7d94353ae9758a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EnsJobeet/Category/new.html.twig", 1);
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
        $__internal_1facee9d807773033435d485e66858532309f65849406af6c79dbe2c949482b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1facee9d807773033435d485e66858532309f65849406af6c79dbe2c949482b5->enter($__internal_1facee9d807773033435d485e66858532309f65849406af6c79dbe2c949482b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/new.html.twig"));

        $__internal_ed5eab0ab29b5458c1f72b5f5319cb212de24b1402fab6be769c1cd057d1b676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5eab0ab29b5458c1f72b5f5319cb212de24b1402fab6be769c1cd057d1b676->enter($__internal_ed5eab0ab29b5458c1f72b5f5319cb212de24b1402fab6be769c1cd057d1b676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1facee9d807773033435d485e66858532309f65849406af6c79dbe2c949482b5->leave($__internal_1facee9d807773033435d485e66858532309f65849406af6c79dbe2c949482b5_prof);

        
        $__internal_ed5eab0ab29b5458c1f72b5f5319cb212de24b1402fab6be769c1cd057d1b676->leave($__internal_ed5eab0ab29b5458c1f72b5f5319cb212de24b1402fab6be769c1cd057d1b676_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ef58105681178d5381609c44c8e2cca928da5608e187885ae479feaf078dfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef58105681178d5381609c44c8e2cca928da5608e187885ae479feaf078dfe3->enter($__internal_3ef58105681178d5381609c44c8e2cca928da5608e187885ae479feaf078dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_247be0de2d6f3f846a9409081c920e44b155e87a72f41be8137ada014a93f0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247be0de2d6f3f846a9409081c920e44b155e87a72f41be8137ada014a93f0b9->enter($__internal_247be0de2d6f3f846a9409081c920e44b155e87a72f41be8137ada014a93f0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_247be0de2d6f3f846a9409081c920e44b155e87a72f41be8137ada014a93f0b9->leave($__internal_247be0de2d6f3f846a9409081c920e44b155e87a72f41be8137ada014a93f0b9_prof);

        
        $__internal_3ef58105681178d5381609c44c8e2cca928da5608e187885ae479feaf078dfe3->leave($__internal_3ef58105681178d5381609c44c8e2cca928da5608e187885ae479feaf078dfe3_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Category/new.html.twig";
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('ens_category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@EnsJobeet/Category/new.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Category\\new.html.twig");
    }
}
