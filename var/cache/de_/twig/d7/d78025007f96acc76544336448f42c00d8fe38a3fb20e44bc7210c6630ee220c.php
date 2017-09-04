<?php

/* EnsJobeetBundle:Category:edit.html.twig */
class __TwigTemplate_7a75a04906205bc206108fe43152d61a3897bfbe3d960420f7ff9357c8b7fe0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:Category:edit.html.twig", 1);
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
        $__internal_70b2f92336f27cfa74e98f84aecb2238efa91bc6442d558a39e8b6a4a7070e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b2f92336f27cfa74e98f84aecb2238efa91bc6442d558a39e8b6a4a7070e04->enter($__internal_70b2f92336f27cfa74e98f84aecb2238efa91bc6442d558a39e8b6a4a7070e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:edit.html.twig"));

        $__internal_74907bb2b1881effdf44fdb81e014a7ac3b9b244b3cd451df1437ca5416cd875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74907bb2b1881effdf44fdb81e014a7ac3b9b244b3cd451df1437ca5416cd875->enter($__internal_74907bb2b1881effdf44fdb81e014a7ac3b9b244b3cd451df1437ca5416cd875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b2f92336f27cfa74e98f84aecb2238efa91bc6442d558a39e8b6a4a7070e04->leave($__internal_70b2f92336f27cfa74e98f84aecb2238efa91bc6442d558a39e8b6a4a7070e04_prof);

        
        $__internal_74907bb2b1881effdf44fdb81e014a7ac3b9b244b3cd451df1437ca5416cd875->leave($__internal_74907bb2b1881effdf44fdb81e014a7ac3b9b244b3cd451df1437ca5416cd875_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffe591c4afec00e41c2ff8f6f476e8ec4a5b010837d1c298a92f7394ce6b925c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe591c4afec00e41c2ff8f6f476e8ec4a5b010837d1c298a92f7394ce6b925c->enter($__internal_ffe591c4afec00e41c2ff8f6f476e8ec4a5b010837d1c298a92f7394ce6b925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe8955434a10b6432f07fd022f9e6857cec5809edcb55ecb1327a9528bf7c03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8955434a10b6432f07fd022f9e6857cec5809edcb55ecb1327a9528bf7c03e->enter($__internal_fe8955434a10b6432f07fd022f9e6857cec5809edcb55ecb1327a9528bf7c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe8955434a10b6432f07fd022f9e6857cec5809edcb55ecb1327a9528bf7c03e->leave($__internal_fe8955434a10b6432f07fd022f9e6857cec5809edcb55ecb1327a9528bf7c03e_prof);

        
        $__internal_ffe591c4afec00e41c2ff8f6f476e8ec4a5b010837d1c298a92f7394ce6b925c->leave($__internal_ffe591c4afec00e41c2ff8f6f476e8ec4a5b010837d1c298a92f7394ce6b925c_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:edit.html.twig";
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
", "EnsJobeetBundle:Category:edit.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Category/edit.html.twig");
    }
}
