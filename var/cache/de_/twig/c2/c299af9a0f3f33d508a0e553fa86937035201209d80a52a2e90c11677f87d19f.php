<?php

/* EnsJobeetBundle:Category:index.html.twig */
class __TwigTemplate_0fcae163d17aa6bfc8009fe9c754d6b1cec1ed625a4f454dbb8339769311a64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:Category:index.html.twig", 1);
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
        $__internal_3a9c5760839e6d59f4087213849600022e50b6af2a9b608e5626ac84fe070775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9c5760839e6d59f4087213849600022e50b6af2a9b608e5626ac84fe070775->enter($__internal_3a9c5760839e6d59f4087213849600022e50b6af2a9b608e5626ac84fe070775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:index.html.twig"));

        $__internal_0868f70edcfbfc0851efbfe4d2fa7e5886407517cd49e5107bca033203d42b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0868f70edcfbfc0851efbfe4d2fa7e5886407517cd49e5107bca033203d42b4f->enter($__internal_0868f70edcfbfc0851efbfe4d2fa7e5886407517cd49e5107bca033203d42b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9c5760839e6d59f4087213849600022e50b6af2a9b608e5626ac84fe070775->leave($__internal_3a9c5760839e6d59f4087213849600022e50b6af2a9b608e5626ac84fe070775_prof);

        
        $__internal_0868f70edcfbfc0851efbfe4d2fa7e5886407517cd49e5107bca033203d42b4f->leave($__internal_0868f70edcfbfc0851efbfe4d2fa7e5886407517cd49e5107bca033203d42b4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e8078e3f1a808f63a5b61db9b814e7981a89db53870c28b653a518d2f5d8429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8078e3f1a808f63a5b61db9b814e7981a89db53870c28b653a518d2f5d8429->enter($__internal_7e8078e3f1a808f63a5b61db9b814e7981a89db53870c28b653a518d2f5d8429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdcb9e53e0e56359cc7bcbb5a6a854ff295dce1f03397fff3a7ea20aa415a729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcb9e53e0e56359cc7bcbb5a6a854ff295dce1f03397fff3a7ea20aa415a729->enter($__internal_cdcb9e53e0e56359cc7bcbb5a6a854ff295dce1f03397fff3a7ea20aa415a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_cdcb9e53e0e56359cc7bcbb5a6a854ff295dce1f03397fff3a7ea20aa415a729->leave($__internal_cdcb9e53e0e56359cc7bcbb5a6a854ff295dce1f03397fff3a7ea20aa415a729_prof);

        
        $__internal_7e8078e3f1a808f63a5b61db9b814e7981a89db53870c28b653a518d2f5d8429->leave($__internal_7e8078e3f1a808f63a5b61db9b814e7981a89db53870c28b653a518d2f5d8429_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:index.html.twig";
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
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('ens_category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ens_category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('ens_category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ens_category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "EnsJobeetBundle:Category:index.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Category/index.html.twig");
    }
}
