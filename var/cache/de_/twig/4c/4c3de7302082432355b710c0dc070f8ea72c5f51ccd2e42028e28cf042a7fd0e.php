<?php

/* @EnsJobeet/Category/index.html.twig */
class __TwigTemplate_07a3e23dcb45652b59cd9c850db508c9043d24939050eb5e61752cb7322c3ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EnsJobeet/Category/index.html.twig", 1);
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
        $__internal_a6fba27287c50084e13949a5317efd22c78cd02841df418bad6cfb2215691318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fba27287c50084e13949a5317efd22c78cd02841df418bad6cfb2215691318->enter($__internal_a6fba27287c50084e13949a5317efd22c78cd02841df418bad6cfb2215691318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/index.html.twig"));

        $__internal_d23ee0c1262fb2b62f912565d26c67b35a0505205affe44caa153af4136a3639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23ee0c1262fb2b62f912565d26c67b35a0505205affe44caa153af4136a3639->enter($__internal_d23ee0c1262fb2b62f912565d26c67b35a0505205affe44caa153af4136a3639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fba27287c50084e13949a5317efd22c78cd02841df418bad6cfb2215691318->leave($__internal_a6fba27287c50084e13949a5317efd22c78cd02841df418bad6cfb2215691318_prof);

        
        $__internal_d23ee0c1262fb2b62f912565d26c67b35a0505205affe44caa153af4136a3639->leave($__internal_d23ee0c1262fb2b62f912565d26c67b35a0505205affe44caa153af4136a3639_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6f2862c3693b903f3b07dae05e4c3469d2803b84348a111b03d2bf896975b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6f2862c3693b903f3b07dae05e4c3469d2803b84348a111b03d2bf896975b7->enter($__internal_ac6f2862c3693b903f3b07dae05e4c3469d2803b84348a111b03d2bf896975b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfad440b64c9e6cc38fe676d63718adebe93e16044e8c921ea77a9861b998a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfad440b64c9e6cc38fe676d63718adebe93e16044e8c921ea77a9861b998a57->enter($__internal_dfad440b64c9e6cc38fe676d63718adebe93e16044e8c921ea77a9861b998a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfad440b64c9e6cc38fe676d63718adebe93e16044e8c921ea77a9861b998a57->leave($__internal_dfad440b64c9e6cc38fe676d63718adebe93e16044e8c921ea77a9861b998a57_prof);

        
        $__internal_ac6f2862c3693b903f3b07dae05e4c3469d2803b84348a111b03d2bf896975b7->leave($__internal_ac6f2862c3693b903f3b07dae05e4c3469d2803b84348a111b03d2bf896975b7_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Category/index.html.twig";
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
", "@EnsJobeet/Category/index.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Category\\index.html.twig");
    }
}
