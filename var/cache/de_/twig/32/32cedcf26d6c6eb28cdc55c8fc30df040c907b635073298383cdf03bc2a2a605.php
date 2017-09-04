<?php

/* Level/show.html.twig */
class __TwigTemplate_7062a0c31f2d409e179980d827abb12da62dd7fa4d9af789fc2abfcaecd39420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Level/show.html.twig", 1);
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
        $__internal_9f2eb5f20c3d34b5166c79600267e98ec461537a0bd722df39d8eae15db1c227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2eb5f20c3d34b5166c79600267e98ec461537a0bd722df39d8eae15db1c227->enter($__internal_9f2eb5f20c3d34b5166c79600267e98ec461537a0bd722df39d8eae15db1c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/show.html.twig"));

        $__internal_77230e28a5048ae537100498c65f8a972e71379b79fd3d6020eec1fec6ab8117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77230e28a5048ae537100498c65f8a972e71379b79fd3d6020eec1fec6ab8117->enter($__internal_77230e28a5048ae537100498c65f8a972e71379b79fd3d6020eec1fec6ab8117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Level/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2eb5f20c3d34b5166c79600267e98ec461537a0bd722df39d8eae15db1c227->leave($__internal_9f2eb5f20c3d34b5166c79600267e98ec461537a0bd722df39d8eae15db1c227_prof);

        
        $__internal_77230e28a5048ae537100498c65f8a972e71379b79fd3d6020eec1fec6ab8117->leave($__internal_77230e28a5048ae537100498c65f8a972e71379b79fd3d6020eec1fec6ab8117_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24cc8f4f40868664fc047db2f30eddd3f180fb940d5564fcd5e626bb1306459a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cc8f4f40868664fc047db2f30eddd3f180fb940d5564fcd5e626bb1306459a->enter($__internal_24cc8f4f40868664fc047db2f30eddd3f180fb940d5564fcd5e626bb1306459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_446017f7053a5a4adabd121249db7dfa6bc0eae96e745429504c3adcd0810ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446017f7053a5a4adabd121249db7dfa6bc0eae96e745429504c3adcd0810ea6->enter($__internal_446017f7053a5a4adabd121249db7dfa6bc0eae96e745429504c3adcd0810ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_446017f7053a5a4adabd121249db7dfa6bc0eae96e745429504c3adcd0810ea6->leave($__internal_446017f7053a5a4adabd121249db7dfa6bc0eae96e745429504c3adcd0810ea6_prof);

        
        $__internal_24cc8f4f40868664fc047db2f30eddd3f180fb940d5564fcd5e626bb1306459a->leave($__internal_24cc8f4f40868664fc047db2f30eddd3f180fb940d5564fcd5e626bb1306459a_prof);

    }

    public function getTemplateName()
    {
        return "Level/show.html.twig";
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
", "Level/show.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\views\\Level\\show.html.twig");
    }
}
