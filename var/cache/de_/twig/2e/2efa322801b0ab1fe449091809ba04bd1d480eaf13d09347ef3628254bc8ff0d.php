<?php

/* EnsJobeetBundle:Job:show.html.twig */
class __TwigTemplate_cc7faf26dc6603f40a62fee6f4ec7beee207e26fd7c798b0f155090f5cf08046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ebd0d353bddbca105bca82197ee594eed3f20d95f0a5833973a0ccf557106d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebd0d353bddbca105bca82197ee594eed3f20d95f0a5833973a0ccf557106d6->enter($__internal_5ebd0d353bddbca105bca82197ee594eed3f20d95f0a5833973a0ccf557106d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:show.html.twig"));

        $__internal_6e42a19de91287e51b9a55e05b0a54c7bd18ba9618fb6ed2977302d3932a712b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e42a19de91287e51b9a55e05b0a54c7bd18ba9618fb6ed2977302d3932a712b->enter($__internal_6e42a19de91287e51b9a55e05b0a54c7bd18ba9618fb6ed2977302d3932a712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ebd0d353bddbca105bca82197ee594eed3f20d95f0a5833973a0ccf557106d6->leave($__internal_5ebd0d353bddbca105bca82197ee594eed3f20d95f0a5833973a0ccf557106d6_prof);

        
        $__internal_6e42a19de91287e51b9a55e05b0a54c7bd18ba9618fb6ed2977302d3932a712b->leave($__internal_6e42a19de91287e51b9a55e05b0a54c7bd18ba9618fb6ed2977302d3932a712b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceecfeacea44070318d2dd2f7707ff53f383ede364cd52a18cda83234f8f0288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceecfeacea44070318d2dd2f7707ff53f383ede364cd52a18cda83234f8f0288->enter($__internal_ceecfeacea44070318d2dd2f7707ff53f383ede364cd52a18cda83234f8f0288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_041b2935e762851a50ce435316ebf457bc2cd586bde5722a403c2b42cb885e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041b2935e762851a50ce435316ebf457bc2cd586bde5722a403c2b42cb885e8d->enter($__internal_041b2935e762851a50ce435316ebf457bc2cd586bde5722a403c2b42cb885e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_041b2935e762851a50ce435316ebf457bc2cd586bde5722a403c2b42cb885e8d->leave($__internal_041b2935e762851a50ce435316ebf457bc2cd586bde5722a403c2b42cb885e8d_prof);

        
        $__internal_ceecfeacea44070318d2dd2f7707ff53f383ede364cd52a18cda83234f8f0288->leave($__internal_ceecfeacea44070318d2dd2f7707ff53f383ede364cd52a18cda83234f8f0288_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b33b53925c7270b6cb251b27e57d4eef9daa2ba10872c15e0dba51dd40f3f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b33b53925c7270b6cb251b27e57d4eef9daa2ba10872c15e0dba51dd40f3f92->enter($__internal_9b33b53925c7270b6cb251b27e57d4eef9daa2ba10872c15e0dba51dd40f3f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b561cd5380694ea5d28872e448ae271ea871c07558bc9a44d20511bba06616e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b561cd5380694ea5d28872e448ae271ea871c07558bc9a44d20511bba06616e4->enter($__internal_b561cd5380694ea5d28872e448ae271ea871c07558bc9a44d20511bba06616e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b561cd5380694ea5d28872e448ae271ea871c07558bc9a44d20511bba06616e4->leave($__internal_b561cd5380694ea5d28872e448ae271ea871c07558bc9a44d20511bba06616e4_prof);

        
        $__internal_9b33b53925c7270b6cb251b27e57d4eef9daa2ba10872c15e0dba51dd40f3f92->leave($__internal_9b33b53925c7270b6cb251b27e57d4eef9daa2ba10872c15e0dba51dd40f3f92_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_1424c2bb12226802250a746a1056f443b306bf1523c740c71f0a1ef80ba0d578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1424c2bb12226802250a746a1056f443b306bf1523c740c71f0a1ef80ba0d578->enter($__internal_1424c2bb12226802250a746a1056f443b306bf1523c740c71f0a1ef80ba0d578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d828297eef0b0d8f7ce55d51a4598285a30f4fba1f770eca434736c8149d53e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d828297eef0b0d8f7ce55d51a4598285a30f4fba1f770eca434736c8149d53e3->enter($__internal_d828297eef0b0d8f7ce55d51a4598285a30f4fba1f770eca434736c8149d53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->loadTemplate("EnsJobeetBundle:Job:admin.html.twig", "EnsJobeetBundle:Job:show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div id=\"job\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</h1>
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</h2>
        <h3>
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
            <small> - ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</small>
        </h3>

        ";
        // line 25
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 26
            echo "            <div class=\"logo\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
                    <img src=\"/uploads/jobs/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\"
                         alt=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
            echo " logo\" />
                </a>
            </div>
        ";
        }
        // line 33
        echo "
        <div class=\"description\">
            ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true));
        echo "
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>

        <div class=\"meta\">
            <small>posted on ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
        </div>

    </div>
            
";
        
        $__internal_d828297eef0b0d8f7ce55d51a4598285a30f4fba1f770eca434736c8149d53e3->leave($__internal_d828297eef0b0d8f7ce55d51a4598285a30f4fba1f770eca434736c8149d53e3_prof);

        
        $__internal_1424c2bb12226802250a746a1056f443b306bf1523c740c71f0a1ef80ba0d578->leave($__internal_1424c2bb12226802250a746a1056f443b306bf1523c740c71f0a1ef80ba0d578_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  165 => 40,  157 => 35,  153 => 33,  146 => 29,  142 => 28,  138 => 27,  135 => 26,  133 => 25,  127 => 22,  123 => 21,  118 => 19,  114 => 18,  110 => 16,  107 => 15,  104 => 14,  101 => 13,  92 => 12,  80 => 9,  75 => 8,  66 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block title %}
    {{ entity.company }} is looking for a {{ entity.position }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ensjobeet/css/job.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block content %}
    {% if app.request.get('token') %}
        {% include 'EnsJobeetBundle:Job:admin.html.twig' with {'job': entity} %}
    {% endif %}

    <div id=\"job\">
        <h1>{{ entity.company }}</h1>
        <h2>{{ entity.location }}</h2>
        <h3>
            {{ entity.position }}
            <small> - {{ entity.type }}</small>
        </h3>

        {% if entity.logo %}
            <div class=\"logo\">
                <a href=\"{{ entity.url }}\">
                    <img src=\"/uploads/jobs/{{ entity.logo }}\"
                         alt=\"{{ entity.company }} logo\" />
                </a>
            </div>
        {% endif %}

        <div class=\"description\">
            {{ entity.description|nl2br }}
        </div>

        <h4>How to apply?</h4>

        <p class=\"how_to_apply\">{{ entity.howtoapply }}</p>

        <div class=\"meta\">
            <small>posted on {{ entity.createdat|date('m/d/Y') }}</small>
        </div>

    </div>
            
{% endblock %}", "EnsJobeetBundle:Job:show.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Job/show.html.twig");
    }
}
