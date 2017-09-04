<?php

/* :Level:index.html.twig */
class __TwigTemplate_65b7de55a9e6bc052a885c48bc6e9963cbd985957fb736b43cca83ddf7f9b938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Level:index.html.twig", 1);
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
        $__internal_d2b182d2c5e5a6310e45e41579c4844a22af224ad7d8b188e7bc58caff84cb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b182d2c5e5a6310e45e41579c4844a22af224ad7d8b188e7bc58caff84cb6c->enter($__internal_d2b182d2c5e5a6310e45e41579c4844a22af224ad7d8b188e7bc58caff84cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:index.html.twig"));

        $__internal_70950442067110c871865dbcfe02026bef2b28a670957eede42d31df2491aec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70950442067110c871865dbcfe02026bef2b28a670957eede42d31df2491aec7->enter($__internal_70950442067110c871865dbcfe02026bef2b28a670957eede42d31df2491aec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Level:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b182d2c5e5a6310e45e41579c4844a22af224ad7d8b188e7bc58caff84cb6c->leave($__internal_d2b182d2c5e5a6310e45e41579c4844a22af224ad7d8b188e7bc58caff84cb6c_prof);

        
        $__internal_70950442067110c871865dbcfe02026bef2b28a670957eede42d31df2491aec7->leave($__internal_70950442067110c871865dbcfe02026bef2b28a670957eede42d31df2491aec7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d895cd80d4f64a0d17076b06b9667ec7552090c6e3dd8b95f2bc4fed8b0456d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d895cd80d4f64a0d17076b06b9667ec7552090c6e3dd8b95f2bc4fed8b0456d->enter($__internal_1d895cd80d4f64a0d17076b06b9667ec7552090c6e3dd8b95f2bc4fed8b0456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bed1d87b724131a46df47cf28fa4392599389e397d77b2a3a42bf77ffd8f601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bed1d87b724131a46df47cf28fa4392599389e397d77b2a3a42bf77ffd8f601->enter($__internal_9bed1d87b724131a46df47cf28fa4392599389e397d77b2a3a42bf77ffd8f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Levels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")));
        foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_show", array("id" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_show", array("id" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_edit", array("id" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_level_new");
        echo "\">Create a new level</a>
        </li>
    </ul>
";
        
        $__internal_9bed1d87b724131a46df47cf28fa4392599389e397d77b2a3a42bf77ffd8f601->leave($__internal_9bed1d87b724131a46df47cf28fa4392599389e397d77b2a3a42bf77ffd8f601_prof);

        
        $__internal_1d895cd80d4f64a0d17076b06b9667ec7552090c6e3dd8b95f2bc4fed8b0456d->leave($__internal_1d895cd80d4f64a0d17076b06b9667ec7552090c6e3dd8b95f2bc4fed8b0456d_prof);

    }

    public function getTemplateName()
    {
        return ":Level:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Levels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for level in levels %}
            <tr>
                <td><a href=\"{{ path('ens_level_show', { 'id': level.id }) }}\">{{ level.id }}</a></td>
                <td>{{ level.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ens_level_show', { 'id': level.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ens_level_edit', { 'id': level.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ens_level_new') }}\">Create a new level</a>
        </li>
    </ul>
{% endblock %}
", ":Level:index.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources\\views/Level/index.html.twig");
    }
}
