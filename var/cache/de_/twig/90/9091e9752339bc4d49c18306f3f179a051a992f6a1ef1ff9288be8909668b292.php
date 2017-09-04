<?php

/* Level/index.html.twig */
class __TwigTemplate_e6cb87db955451f0ad4e7565d0d784442af31aa056d9fa8329f8480e8f0a947f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Level/index.html.twig", 1);
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
        $__internal_7e0da5549899869e04bc142efde427524d96d9c5f5bc9f3c56545b96f16e6dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0da5549899869e04bc142efde427524d96d9c5f5bc9f3c56545b96f16e6dce->enter($__internal_7e0da5549899869e04bc142efde427524d96d9c5f5bc9f3c56545b96f16e6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/index.html.twig"));

        $__internal_6405f7a3bdaa50b6c4564eafb0c4fc68c504924aa140b26196b779b708638f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6405f7a3bdaa50b6c4564eafb0c4fc68c504924aa140b26196b779b708638f8d->enter($__internal_6405f7a3bdaa50b6c4564eafb0c4fc68c504924aa140b26196b779b708638f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0da5549899869e04bc142efde427524d96d9c5f5bc9f3c56545b96f16e6dce->leave($__internal_7e0da5549899869e04bc142efde427524d96d9c5f5bc9f3c56545b96f16e6dce_prof);

        
        $__internal_6405f7a3bdaa50b6c4564eafb0c4fc68c504924aa140b26196b779b708638f8d->leave($__internal_6405f7a3bdaa50b6c4564eafb0c4fc68c504924aa140b26196b779b708638f8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_970f13f38c2b6e6cce3b046602551998971af92305b06d0e5c932fc2107dc88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970f13f38c2b6e6cce3b046602551998971af92305b06d0e5c932fc2107dc88a->enter($__internal_970f13f38c2b6e6cce3b046602551998971af92305b06d0e5c932fc2107dc88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6db07028b211d878092baa2076f001a9899c738300570a58aa27853724281f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6db07028b211d878092baa2076f001a9899c738300570a58aa27853724281f8->enter($__internal_a6db07028b211d878092baa2076f001a9899c738300570a58aa27853724281f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6db07028b211d878092baa2076f001a9899c738300570a58aa27853724281f8->leave($__internal_a6db07028b211d878092baa2076f001a9899c738300570a58aa27853724281f8_prof);

        
        $__internal_970f13f38c2b6e6cce3b046602551998971af92305b06d0e5c932fc2107dc88a->leave($__internal_970f13f38c2b6e6cce3b046602551998971af92305b06d0e5c932fc2107dc88a_prof);

    }

    public function getTemplateName()
    {
        return "Level/index.html.twig";
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
", "Level/index.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\views\\Level\\index.html.twig");
    }
}
