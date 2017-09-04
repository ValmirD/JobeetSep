<?php

/* @EnsJobeet/Job/index.html.twig */
class __TwigTemplate_c63074b4990c92388968b0e4c825a9d4ec4e9b8fae6b54f1acbb5469047cc4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/Job/index.html.twig", 1);
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
        $__internal_c83712141a32a4b43b3a4f8bc746b44df2cd8b805943c829c56272ccc499dd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83712141a32a4b43b3a4f8bc746b44df2cd8b805943c829c56272ccc499dd01->enter($__internal_c83712141a32a4b43b3a4f8bc746b44df2cd8b805943c829c56272ccc499dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/index.html.twig"));

        $__internal_db378db5ad5151e0f531f45d53aa760b8bf54b0066efa9656d7c6e67a4576cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db378db5ad5151e0f531f45d53aa760b8bf54b0066efa9656d7c6e67a4576cb9->enter($__internal_db378db5ad5151e0f531f45d53aa760b8bf54b0066efa9656d7c6e67a4576cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c83712141a32a4b43b3a4f8bc746b44df2cd8b805943c829c56272ccc499dd01->leave($__internal_c83712141a32a4b43b3a4f8bc746b44df2cd8b805943c829c56272ccc499dd01_prof);

        
        $__internal_db378db5ad5151e0f531f45d53aa760b8bf54b0066efa9656d7c6e67a4576cb9->leave($__internal_db378db5ad5151e0f531f45d53aa760b8bf54b0066efa9656d7c6e67a4576cb9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c851679a9ebbf50d0b21dad679d79d02b56ef90607182cdb8f626b8c855244d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c851679a9ebbf50d0b21dad679d79d02b56ef90607182cdb8f626b8c855244d9->enter($__internal_c851679a9ebbf50d0b21dad679d79d02b56ef90607182cdb8f626b8c855244d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54704b82d0d20756533dc8f83f61ea0ed20fe5dae1807b7f746d792407f5d47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54704b82d0d20756533dc8f83f61ea0ed20fe5dae1807b7f746d792407f5d47d->enter($__internal_54704b82d0d20756533dc8f83f61ea0ed20fe5dae1807b7f746d792407f5d47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54704b82d0d20756533dc8f83f61ea0ed20fe5dae1807b7f746d792407f5d47d->leave($__internal_54704b82d0d20756533dc8f83f61ea0ed20fe5dae1807b7f746d792407f5d47d_prof);

        
        $__internal_c851679a9ebbf50d0b21dad679d79d02b56ef90607182cdb8f626b8c855244d9->leave($__internal_c851679a9ebbf50d0b21dad679d79d02b56ef90607182cdb8f626b8c855244d9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_441d89b6d4119036b66b0ad2a865ac70220a9429e57de0b57b4cf8c8f72bfe2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441d89b6d4119036b66b0ad2a865ac70220a9429e57de0b57b4cf8c8f72bfe2a->enter($__internal_441d89b6d4119036b66b0ad2a865ac70220a9429e57de0b57b4cf8c8f72bfe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0467b3318e1d447c625d3b9867328b2fcd32d1002ea697ff5185923e484e4a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0467b3318e1d447c625d3b9867328b2fcd32d1002ea697ff5185923e484e4a14->enter($__internal_0467b3318e1d447c625d3b9867328b2fcd32d1002ea697ff5185923e484e4a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    
";
        
        $__internal_0467b3318e1d447c625d3b9867328b2fcd32d1002ea697ff5185923e484e4a14->leave($__internal_0467b3318e1d447c625d3b9867328b2fcd32d1002ea697ff5185923e484e4a14_prof);

        
        $__internal_441d89b6d4119036b66b0ad2a865ac70220a9429e57de0b57b4cf8c8f72bfe2a->leave($__internal_441d89b6d4119036b66b0ad2a865ac70220a9429e57de0b57b4cf8c8f72bfe2a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c6dd42f0d3158aa035d67c797de5f6378dd1ba6c18229102c8c4a9cd889a967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6dd42f0d3158aa035d67c797de5f6378dd1ba6c18229102c8c4a9cd889a967->enter($__internal_4c6dd42f0d3158aa035d67c797de5f6378dd1ba6c18229102c8c4a9cd889a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ddb0a81741fdbc12c067c66776b09d55fe2e6e736acd28c903d316af051d1616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb0a81741fdbc12c067c66776b09d55fe2e6e736acd28c903d316af051d1616->enter($__internal_ddb0a81741fdbc12c067c66776b09d55fe2e6e736acd28c903d316af051d1616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "@EnsJobeet/Job/index.html.twig", 19)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
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
        
        $__internal_ddb0a81741fdbc12c067c66776b09d55fe2e6e736acd28c903d316af051d1616->leave($__internal_ddb0a81741fdbc12c067c66776b09d55fe2e6e736acd28c903d316af051d1616_prof);

        
        $__internal_4c6dd42f0d3158aa035d67c797de5f6378dd1ba6c18229102c8c4a9cd889a967->leave($__internal_4c6dd42f0d3158aa035d67c797de5f6378dd1ba6c18229102c8c4a9cd889a967_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Job/index.html.twig";
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

", "@EnsJobeet/Job/index.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Job\\index.html.twig");
    }
}
