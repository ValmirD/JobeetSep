<?php

/* :Level:edit.html.twig */
class __TwigTemplate_c95245299651b9697895138fedcf79398127c75cafe2ace3ef58857a287bc6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Level:edit.html.twig", 1);
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
        $__internal_5920c73f09a3a73de7fdf2b9000821f6c22ebe085337e4f5e86c5f4db93c2597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5920c73f09a3a73de7fdf2b9000821f6c22ebe085337e4f5e86c5f4db93c2597->enter($__internal_5920c73f09a3a73de7fdf2b9000821f6c22ebe085337e4f5e86c5f4db93c2597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:edit.html.twig"));

        $__internal_c61c7aa0de7bfc497d6b637766e822e72e6679bef06265c6d14f8ac3ee00c245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61c7aa0de7bfc497d6b637766e822e72e6679bef06265c6d14f8ac3ee00c245->enter($__internal_c61c7aa0de7bfc497d6b637766e822e72e6679bef06265c6d14f8ac3ee00c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5920c73f09a3a73de7fdf2b9000821f6c22ebe085337e4f5e86c5f4db93c2597->leave($__internal_5920c73f09a3a73de7fdf2b9000821f6c22ebe085337e4f5e86c5f4db93c2597_prof);

        
        $__internal_c61c7aa0de7bfc497d6b637766e822e72e6679bef06265c6d14f8ac3ee00c245->leave($__internal_c61c7aa0de7bfc497d6b637766e822e72e6679bef06265c6d14f8ac3ee00c245_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7831c3f3ad3a3ee7278c5e288d118910e4fc2503ca881768c857574fa15d571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7831c3f3ad3a3ee7278c5e288d118910e4fc2503ca881768c857574fa15d571->enter($__internal_c7831c3f3ad3a3ee7278c5e288d118910e4fc2503ca881768c857574fa15d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0de7fd17cc9d14384286e65b0ae01c7bb883d3769fb85375228db98e93afa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0de7fd17cc9d14384286e65b0ae01c7bb883d3769fb85375228db98e93afa56->enter($__internal_a0de7fd17cc9d14384286e65b0ae01c7bb883d3769fb85375228db98e93afa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Level edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a0de7fd17cc9d14384286e65b0ae01c7bb883d3769fb85375228db98e93afa56->leave($__internal_a0de7fd17cc9d14384286e65b0ae01c7bb883d3769fb85375228db98e93afa56_prof);

        
        $__internal_c7831c3f3ad3a3ee7278c5e288d118910e4fc2503ca881768c857574fa15d571->leave($__internal_c7831c3f3ad3a3ee7278c5e288d118910e4fc2503ca881768c857574fa15d571_prof);

    }

    public function getTemplateName()
    {
        return ":Level:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Level edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ens_level_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":Level:edit.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources\\views/Level/edit.html.twig");
    }
}
