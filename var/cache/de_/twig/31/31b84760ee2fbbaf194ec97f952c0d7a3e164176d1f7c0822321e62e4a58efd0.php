<?php

/* @EnsJobeet/Category/edit.html.twig */
class __TwigTemplate_765a3918072f2d243bb3fd1ca0ccfe49cec48e3e0cedd71c076bf1e447983791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EnsJobeet/Category/edit.html.twig", 1);
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
        $__internal_d842876ba89bf164328bb68a2fc7adddede0292d93a162ef1555332f527c5ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d842876ba89bf164328bb68a2fc7adddede0292d93a162ef1555332f527c5ab9->enter($__internal_d842876ba89bf164328bb68a2fc7adddede0292d93a162ef1555332f527c5ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/edit.html.twig"));

        $__internal_3d10588bb00bbec47c39e8959c0d664e8052842751c3d064adf1944e034f5744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d10588bb00bbec47c39e8959c0d664e8052842751c3d064adf1944e034f5744->enter($__internal_3d10588bb00bbec47c39e8959c0d664e8052842751c3d064adf1944e034f5744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d842876ba89bf164328bb68a2fc7adddede0292d93a162ef1555332f527c5ab9->leave($__internal_d842876ba89bf164328bb68a2fc7adddede0292d93a162ef1555332f527c5ab9_prof);

        
        $__internal_3d10588bb00bbec47c39e8959c0d664e8052842751c3d064adf1944e034f5744->leave($__internal_3d10588bb00bbec47c39e8959c0d664e8052842751c3d064adf1944e034f5744_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76af2a2ca1d849df274ae9654ee2a89610d1c8e01ac9037d742c1e6b1d7cbed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76af2a2ca1d849df274ae9654ee2a89610d1c8e01ac9037d742c1e6b1d7cbed9->enter($__internal_76af2a2ca1d849df274ae9654ee2a89610d1c8e01ac9037d742c1e6b1d7cbed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fd07e98a004784d2fc58574a5bed18b8e58fbb8b1824bf5010da8d02552d4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd07e98a004784d2fc58574a5bed18b8e58fbb8b1824bf5010da8d02552d4fe->enter($__internal_6fd07e98a004784d2fc58574a5bed18b8e58fbb8b1824bf5010da8d02552d4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_index");
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
        
        $__internal_6fd07e98a004784d2fc58574a5bed18b8e58fbb8b1824bf5010da8d02552d4fe->leave($__internal_6fd07e98a004784d2fc58574a5bed18b8e58fbb8b1824bf5010da8d02552d4fe_prof);

        
        $__internal_76af2a2ca1d849df274ae9654ee2a89610d1c8e01ac9037d742c1e6b1d7cbed9->leave($__internal_76af2a2ca1d849df274ae9654ee2a89610d1c8e01ac9037d742c1e6b1d7cbed9_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Category/edit.html.twig";
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
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('ens_category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@EnsJobeet/Category/edit.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Category\\edit.html.twig");
    }
}
