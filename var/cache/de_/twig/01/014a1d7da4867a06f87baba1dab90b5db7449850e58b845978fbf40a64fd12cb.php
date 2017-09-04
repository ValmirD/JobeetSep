<?php

/* ::base.html.twig */
class __TwigTemplate_8da1541203559ed3b902cce825d45c7d8fa1ea2446255cd548a18965f7a43761 extends Twig_Template
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
        $__internal_45d88fc9add1558585dbc9c87e74e41660e0692c9f6f0d3b2251034a0da34590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d88fc9add1558585dbc9c87e74e41660e0692c9f6f0d3b2251034a0da34590->enter($__internal_45d88fc9add1558585dbc9c87e74e41660e0692c9f6f0d3b2251034a0da34590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_67bd7a7ee8bebb6f5e1dd7bad8236fdbf46fc5f9804bf4274116ea4c85efaf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bd7a7ee8bebb6f5e1dd7bad8236fdbf46fc5f9804bf4274116ea4c85efaf4b->enter($__internal_67bd7a7ee8bebb6f5e1dd7bad8236fdbf46fc5f9804bf4274116ea4c85efaf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_45d88fc9add1558585dbc9c87e74e41660e0692c9f6f0d3b2251034a0da34590->leave($__internal_45d88fc9add1558585dbc9c87e74e41660e0692c9f6f0d3b2251034a0da34590_prof);

        
        $__internal_67bd7a7ee8bebb6f5e1dd7bad8236fdbf46fc5f9804bf4274116ea4c85efaf4b->leave($__internal_67bd7a7ee8bebb6f5e1dd7bad8236fdbf46fc5f9804bf4274116ea4c85efaf4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e521764f48755bf7945f6275aef8aa389c0e9efd8668e76663f146fb225ac60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e521764f48755bf7945f6275aef8aa389c0e9efd8668e76663f146fb225ac60->enter($__internal_5e521764f48755bf7945f6275aef8aa389c0e9efd8668e76663f146fb225ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4b2e7edb5b7267b55d9c4a741ab43e760daf9afa8b2c71fc5db7f0a2c90205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b2e7edb5b7267b55d9c4a741ab43e760daf9afa8b2c71fc5db7f0a2c90205e->enter($__internal_a4b2e7edb5b7267b55d9c4a741ab43e760daf9afa8b2c71fc5db7f0a2c90205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a4b2e7edb5b7267b55d9c4a741ab43e760daf9afa8b2c71fc5db7f0a2c90205e->leave($__internal_a4b2e7edb5b7267b55d9c4a741ab43e760daf9afa8b2c71fc5db7f0a2c90205e_prof);

        
        $__internal_5e521764f48755bf7945f6275aef8aa389c0e9efd8668e76663f146fb225ac60->leave($__internal_5e521764f48755bf7945f6275aef8aa389c0e9efd8668e76663f146fb225ac60_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37f6864e50a2226aed8807b57ca4bbc526f6c4475f1d48d9e0e109c3c55d246f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f6864e50a2226aed8807b57ca4bbc526f6c4475f1d48d9e0e109c3c55d246f->enter($__internal_37f6864e50a2226aed8807b57ca4bbc526f6c4475f1d48d9e0e109c3c55d246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecde3882b25a819b7ba3ef3b164770dc001a6d57cc7e8416ec9ed048ca0017e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecde3882b25a819b7ba3ef3b164770dc001a6d57cc7e8416ec9ed048ca0017e5->enter($__internal_ecde3882b25a819b7ba3ef3b164770dc001a6d57cc7e8416ec9ed048ca0017e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecde3882b25a819b7ba3ef3b164770dc001a6d57cc7e8416ec9ed048ca0017e5->leave($__internal_ecde3882b25a819b7ba3ef3b164770dc001a6d57cc7e8416ec9ed048ca0017e5_prof);

        
        $__internal_37f6864e50a2226aed8807b57ca4bbc526f6c4475f1d48d9e0e109c3c55d246f->leave($__internal_37f6864e50a2226aed8807b57ca4bbc526f6c4475f1d48d9e0e109c3c55d246f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b8a08ca5217ec717ab1f0d5b7e72d80efa950ecb43173de23c4e2f0cce5717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b8a08ca5217ec717ab1f0d5b7e72d80efa950ecb43173de23c4e2f0cce5717->enter($__internal_55b8a08ca5217ec717ab1f0d5b7e72d80efa950ecb43173de23c4e2f0cce5717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aba7741422f6d4cc5392585f12eef8ad6bfcf2c94d0092e111e41b8290a7724e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba7741422f6d4cc5392585f12eef8ad6bfcf2c94d0092e111e41b8290a7724e->enter($__internal_aba7741422f6d4cc5392585f12eef8ad6bfcf2c94d0092e111e41b8290a7724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aba7741422f6d4cc5392585f12eef8ad6bfcf2c94d0092e111e41b8290a7724e->leave($__internal_aba7741422f6d4cc5392585f12eef8ad6bfcf2c94d0092e111e41b8290a7724e_prof);

        
        $__internal_55b8a08ca5217ec717ab1f0d5b7e72d80efa950ecb43173de23c4e2f0cce5717->leave($__internal_55b8a08ca5217ec717ab1f0d5b7e72d80efa950ecb43173de23c4e2f0cce5717_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2c47ec642158a805eec904c90a2752978ecd45b06029922726acb041a18b5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c47ec642158a805eec904c90a2752978ecd45b06029922726acb041a18b5de->enter($__internal_b2c47ec642158a805eec904c90a2752978ecd45b06029922726acb041a18b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cf95afaab10901d43f9d0dceb422450707c3c3f9c76ea44e5dbe42a76430889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf95afaab10901d43f9d0dceb422450707c3c3f9c76ea44e5dbe42a76430889->enter($__internal_6cf95afaab10901d43f9d0dceb422450707c3c3f9c76ea44e5dbe42a76430889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6cf95afaab10901d43f9d0dceb422450707c3c3f9c76ea44e5dbe42a76430889->leave($__internal_6cf95afaab10901d43f9d0dceb422450707c3c3f9c76ea44e5dbe42a76430889_prof);

        
        $__internal_b2c47ec642158a805eec904c90a2752978ecd45b06029922726acb041a18b5de->leave($__internal_b2c47ec642158a805eec904c90a2752978ecd45b06029922726acb041a18b5de_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources\\views/base.html.twig");
    }
}
