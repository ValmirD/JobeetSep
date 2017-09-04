<?php

/* EnsJobeetBundle:Job:index.html.twig */
class __TwigTemplate_3887f9494bec10fc511fb487fa5c9e0ce41e59bac33131516c79c23ac4891c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ffc4c00273cb3be5fa1aad9c9e6686525f4d068b43915de2a4d2f2c4b69679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ffc4c00273cb3be5fa1aad9c9e6686525f4d068b43915de2a4d2f2c4b69679->enter($__internal_b2ffc4c00273cb3be5fa1aad9c9e6686525f4d068b43915de2a4d2f2c4b69679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:index.html.twig"));

        $__internal_f931614aafce40b1cfccbe1a4ba307905fd783f473cb7b05ef1f0d5ac545b6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f931614aafce40b1cfccbe1a4ba307905fd783f473cb7b05ef1f0d5ac545b6a0->enter($__internal_f931614aafce40b1cfccbe1a4ba307905fd783f473cb7b05ef1f0d5ac545b6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ffc4c00273cb3be5fa1aad9c9e6686525f4d068b43915de2a4d2f2c4b69679->leave($__internal_b2ffc4c00273cb3be5fa1aad9c9e6686525f4d068b43915de2a4d2f2c4b69679_prof);

        
        $__internal_f931614aafce40b1cfccbe1a4ba307905fd783f473cb7b05ef1f0d5ac545b6a0->leave($__internal_f931614aafce40b1cfccbe1a4ba307905fd783f473cb7b05ef1f0d5ac545b6a0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0553501ec1a70e07efc231e3a21307ae078ba11875e8f2e9aaeb7f719a0a4fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0553501ec1a70e07efc231e3a21307ae078ba11875e8f2e9aaeb7f719a0a4fdf->enter($__internal_0553501ec1a70e07efc231e3a21307ae078ba11875e8f2e9aaeb7f719a0a4fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a54e1d121a35310267e59ed6c2769a1a48ea91d76bf9260fbe8f0fc7012eade7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54e1d121a35310267e59ed6c2769a1a48ea91d76bf9260fbe8f0fc7012eade7->enter($__internal_a54e1d121a35310267e59ed6c2769a1a48ea91d76bf9260fbe8f0fc7012eade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a54e1d121a35310267e59ed6c2769a1a48ea91d76bf9260fbe8f0fc7012eade7->leave($__internal_a54e1d121a35310267e59ed6c2769a1a48ea91d76bf9260fbe8f0fc7012eade7_prof);

        
        $__internal_0553501ec1a70e07efc231e3a21307ae078ba11875e8f2e9aaeb7f719a0a4fdf->leave($__internal_0553501ec1a70e07efc231e3a21307ae078ba11875e8f2e9aaeb7f719a0a4fdf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd6e39fdabf340b49e5bc5fffde7d6bcf0b9e87486dbe83f67886db95f5d3de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6e39fdabf340b49e5bc5fffde7d6bcf0b9e87486dbe83f67886db95f5d3de6->enter($__internal_bd6e39fdabf340b49e5bc5fffde7d6bcf0b9e87486dbe83f67886db95f5d3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b04a0db81c128e198824c979713fb90d84d03f7b4e0afda9d362955661ddf68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04a0db81c128e198824c979713fb90d84d03f7b4e0afda9d362955661ddf68e->enter($__internal_b04a0db81c128e198824c979713fb90d84d03f7b4e0afda9d362955661ddf68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    
";
        
        $__internal_b04a0db81c128e198824c979713fb90d84d03f7b4e0afda9d362955661ddf68e->leave($__internal_b04a0db81c128e198824c979713fb90d84d03f7b4e0afda9d362955661ddf68e_prof);

        
        $__internal_bd6e39fdabf340b49e5bc5fffde7d6bcf0b9e87486dbe83f67886db95f5d3de6->leave($__internal_bd6e39fdabf340b49e5bc5fffde7d6bcf0b9e87486dbe83f67886db95f5d3de6_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c4c2625dfb1ca0031bd2c0191fb5fdf3772033177a71db753ac888b678ec5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4c2625dfb1ca0031bd2c0191fb5fdf3772033177a71db753ac888b678ec5fe->enter($__internal_4c4c2625dfb1ca0031bd2c0191fb5fdf3772033177a71db753ac888b678ec5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5c5e117dadf7aff5838021d58271816525ea0ffb90c60c8e2a389eede50c8659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5e117dadf7aff5838021d58271816525ea0ffb90c60c8e2a389eede50c8659->enter($__internal_5c5e117dadf7aff5838021d58271816525ea0ffb90c60c8e2a389eede50c8659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "        <div id=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
            echo "\">
                    <div class=\"category\">
                        <div class=\"feed\">
                            <<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()), "_format" => "atom")), "html", null, true);
            echo "\">Feed</a>
                        </div>
                        <h1><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
                    </div>
                    ";
            // line 19
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:Job:index.html.twig", 19)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 20
            echo "                    ";
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 21
                echo "                        <div class=\"more_jobs\">
                            and <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_category_show", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                            more...
                        </div>
                    ";
            }
            // line 26
            echo "                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    ";
        
        $__internal_5c5e117dadf7aff5838021d58271816525ea0ffb90c60c8e2a389eede50c8659->leave($__internal_5c5e117dadf7aff5838021d58271816525ea0ffb90c60c8e2a389eede50c8659_prof);

        
        $__internal_4c4c2625dfb1ca0031bd2c0191fb5fdf3772033177a71db753ac888b678ec5fe->leave($__internal_4c4c2625dfb1ca0031bd2c0191fb5fdf3772033177a71db753ac888b678ec5fe_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 28,  156 => 26,  147 => 22,  144 => 21,  141 => 20,  139 => 19,  132 => 17,  127 => 15,  120 => 12,  103 => 11,  100 => 10,  91 => 9,  80 => 30,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EnsJobeetBundle::layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ensjobeet/css/jobs.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block body %}
    {% block content %}
        <div id=\"jobs\">
            {% for category in categories %}
                <div class=\"category_{{ category.slug }}\">
                    <div class=\"category\">
                        <div class=\"feed\">
                            <<a href=\"{{ path('ens_category_show', { 'slug': category.slug, '_format': 'atom' }) }}\">Feed</a>
                        </div>
                        <h1><a href=\"{{ path('ens_category_show', { 'slug': category.slug }) }}\">{{ category.name }}</a></h1>
                    </div>
                    {% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}
                    {% if category.morejobs %}
                        <div class=\"more_jobs\">
                            and <a href=\"{{ path('ens_category_show', { 'slug': category.slug }) }}\">{{ category.morejobs }}</a>
                            more...
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    {% endblock %}
    
{% endblock %}

", "EnsJobeetBundle:Job:index.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Job/index.html.twig");
    }
}
