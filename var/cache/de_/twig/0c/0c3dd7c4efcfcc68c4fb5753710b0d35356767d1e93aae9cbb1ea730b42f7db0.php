<?php

/* :Level:show.html.twig */
class __TwigTemplate_22c39d71aadd5c4c8a497206af87a03995513d869e475abe9d08232262dd9603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Level:show.html.twig", 1);
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
        $__internal_8c942315e9a0ee5fad73a257cbe241442db933bf4efea29f0c993a980a7f6211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c942315e9a0ee5fad73a257cbe241442db933bf4efea29f0c993a980a7f6211->enter($__internal_8c942315e9a0ee5fad73a257cbe241442db933bf4efea29f0c993a980a7f6211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:show.html.twig"));

        $__internal_6c074c1eeb5ee4d7adebfda3009f979a5456d6a4ad967d37680f209357178dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c074c1eeb5ee4d7adebfda3009f979a5456d6a4ad967d37680f209357178dc8->enter($__internal_6c074c1eeb5ee4d7adebfda3009f979a5456d6a4ad967d37680f209357178dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c942315e9a0ee5fad73a257cbe241442db933bf4efea29f0c993a980a7f6211->leave($__internal_8c942315e9a0ee5fad73a257cbe241442db933bf4efea29f0c993a980a7f6211_prof);

        
        $__internal_6c074c1eeb5ee4d7adebfda3009f979a5456d6a4ad967d37680f209357178dc8->leave($__internal_6c074c1eeb5ee4d7adebfda3009f979a5456d6a4ad967d37680f209357178dc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b99596043d0f599394b531b123e7cde14f264e03c8231bd14aa7b28c6f5c65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b99596043d0f599394b531b123e7cde14f264e03c8231bd14aa7b28c6f5c65d->enter($__internal_6b99596043d0f599394b531b123e7cde14f264e03c8231bd14aa7b28c6f5c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e7688b4eb1e97c73a08e61cd37f32071e4ded1332f99e0d8b71a01a5802965f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7688b4eb1e97c73a08e61cd37f32071e4ded1332f99e0d8b71a01a5802965f->enter($__internal_6e7688b4eb1e97c73a08e61cd37f32071e4ded1332f99e0d8b71a01a5802965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Level</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_edit", array("id" => $this->getAttribute((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6e7688b4eb1e97c73a08e61cd37f32071e4ded1332f99e0d8b71a01a5802965f->leave($__internal_6e7688b4eb1e97c73a08e61cd37f32071e4ded1332f99e0d8b71a01a5802965f_prof);

        
        $__internal_6b99596043d0f599394b531b123e7cde14f264e03c8231bd14aa7b28c6f5c65d->leave($__internal_6b99596043d0f599394b531b123e7cde14f264e03c8231bd14aa7b28c6f5c65d_prof);

    }

    public function getTemplateName()
    {
        return ":Level:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Level</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ level.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ level.nom }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ens_level_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ens_level_edit', { 'id': level.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":Level:show.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources\\views/Level/show.html.twig");
    }
}
