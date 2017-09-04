<?php

/* EnsJobeetBundle:Category:new.html.twig */
class __TwigTemplate_b665bf14666680031e736afdb7d9fc1295f409662f268f885de5678020d59d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:Category:new.html.twig", 1);
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
        $__internal_0a4b1faa1f084853bfc6dcbd6aa4599bf7478beabc48a7a473a8528fd679918f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4b1faa1f084853bfc6dcbd6aa4599bf7478beabc48a7a473a8528fd679918f->enter($__internal_0a4b1faa1f084853bfc6dcbd6aa4599bf7478beabc48a7a473a8528fd679918f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:new.html.twig"));

        $__internal_d8576e8c2d72e164f5b28e461c4c8e9da2a95e28e2ca4bc0e29dc34f98a7801d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8576e8c2d72e164f5b28e461c4c8e9da2a95e28e2ca4bc0e29dc34f98a7801d->enter($__internal_d8576e8c2d72e164f5b28e461c4c8e9da2a95e28e2ca4bc0e29dc34f98a7801d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4b1faa1f084853bfc6dcbd6aa4599bf7478beabc48a7a473a8528fd679918f->leave($__internal_0a4b1faa1f084853bfc6dcbd6aa4599bf7478beabc48a7a473a8528fd679918f_prof);

        
        $__internal_d8576e8c2d72e164f5b28e461c4c8e9da2a95e28e2ca4bc0e29dc34f98a7801d->leave($__internal_d8576e8c2d72e164f5b28e461c4c8e9da2a95e28e2ca4bc0e29dc34f98a7801d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ff2ca3423424f304be7443b8c011b99fc32ee4900fee888a52e7648effe753f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff2ca3423424f304be7443b8c011b99fc32ee4900fee888a52e7648effe753f->enter($__internal_2ff2ca3423424f304be7443b8c011b99fc32ee4900fee888a52e7648effe753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4541eef22ec33abb6bb80f5c507c760aadc7f0fd5366d590827525a0ad93b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4541eef22ec33abb6bb80f5c507c760aadc7f0fd5366d590827525a0ad93b40->enter($__internal_a4541eef22ec33abb6bb80f5c507c760aadc7f0fd5366d590827525a0ad93b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4541eef22ec33abb6bb80f5c507c760aadc7f0fd5366d590827525a0ad93b40->leave($__internal_a4541eef22ec33abb6bb80f5c507c760aadc7f0fd5366d590827525a0ad93b40_prof);

        
        $__internal_2ff2ca3423424f304be7443b8c011b99fc32ee4900fee888a52e7648effe753f->leave($__internal_2ff2ca3423424f304be7443b8c011b99fc32ee4900fee888a52e7648effe753f_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:new.html.twig";
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
", "EnsJobeetBundle:Category:new.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Category/new.html.twig");
    }
}
