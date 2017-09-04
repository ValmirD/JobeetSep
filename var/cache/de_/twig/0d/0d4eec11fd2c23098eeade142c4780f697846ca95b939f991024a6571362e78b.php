<?php

/* @EnsJobeet/Job/show.html.twig */
class __TwigTemplate_ece2f2c2c8bf3e0a1d7fea9c48640a59d710ca1483ffb29bc4b4cbe3e3dceacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/Job/show.html.twig", 1);
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
        $__internal_b1ca187c4a9bc9f84b36c8b29fdaac0d36706f70bd3f8a16b923bb6b03be90fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ca187c4a9bc9f84b36c8b29fdaac0d36706f70bd3f8a16b923bb6b03be90fa->enter($__internal_b1ca187c4a9bc9f84b36c8b29fdaac0d36706f70bd3f8a16b923bb6b03be90fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/show.html.twig"));

        $__internal_ecae349ff9dc43d9575f8ca8e764d931a41681f0292f664283ec177ca1976539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecae349ff9dc43d9575f8ca8e764d931a41681f0292f664283ec177ca1976539->enter($__internal_ecae349ff9dc43d9575f8ca8e764d931a41681f0292f664283ec177ca1976539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ca187c4a9bc9f84b36c8b29fdaac0d36706f70bd3f8a16b923bb6b03be90fa->leave($__internal_b1ca187c4a9bc9f84b36c8b29fdaac0d36706f70bd3f8a16b923bb6b03be90fa_prof);

        
        $__internal_ecae349ff9dc43d9575f8ca8e764d931a41681f0292f664283ec177ca1976539->leave($__internal_ecae349ff9dc43d9575f8ca8e764d931a41681f0292f664283ec177ca1976539_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_452434871fb13b6eedecddad54a2bace3dcfbc823e2519bb16690be9909edb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452434871fb13b6eedecddad54a2bace3dcfbc823e2519bb16690be9909edb1f->enter($__internal_452434871fb13b6eedecddad54a2bace3dcfbc823e2519bb16690be9909edb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77f893bc7e45d18d03e8aa3ba0069709329f54b292e7d3e17bc347db3e157396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f893bc7e45d18d03e8aa3ba0069709329f54b292e7d3e17bc347db3e157396->enter($__internal_77f893bc7e45d18d03e8aa3ba0069709329f54b292e7d3e17bc347db3e157396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_77f893bc7e45d18d03e8aa3ba0069709329f54b292e7d3e17bc347db3e157396->leave($__internal_77f893bc7e45d18d03e8aa3ba0069709329f54b292e7d3e17bc347db3e157396_prof);

        
        $__internal_452434871fb13b6eedecddad54a2bace3dcfbc823e2519bb16690be9909edb1f->leave($__internal_452434871fb13b6eedecddad54a2bace3dcfbc823e2519bb16690be9909edb1f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e74b58bab0b37433a314d44f00faeacbb74ee93de1e7579dfd8b82cf8407af19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74b58bab0b37433a314d44f00faeacbb74ee93de1e7579dfd8b82cf8407af19->enter($__internal_e74b58bab0b37433a314d44f00faeacbb74ee93de1e7579dfd8b82cf8407af19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6917157984fc32153cc7654ad326f2931bb0f5ac0f80fd0b09c5601fbd171c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6917157984fc32153cc7654ad326f2931bb0f5ac0f80fd0b09c5601fbd171c70->enter($__internal_6917157984fc32153cc7654ad326f2931bb0f5ac0f80fd0b09c5601fbd171c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6917157984fc32153cc7654ad326f2931bb0f5ac0f80fd0b09c5601fbd171c70->leave($__internal_6917157984fc32153cc7654ad326f2931bb0f5ac0f80fd0b09c5601fbd171c70_prof);

        
        $__internal_e74b58bab0b37433a314d44f00faeacbb74ee93de1e7579dfd8b82cf8407af19->leave($__internal_e74b58bab0b37433a314d44f00faeacbb74ee93de1e7579dfd8b82cf8407af19_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_80e4488c058de8a75bda0cada0f877a602ace311dbc9bcb9910ddc43f6ecb619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e4488c058de8a75bda0cada0f877a602ace311dbc9bcb9910ddc43f6ecb619->enter($__internal_80e4488c058de8a75bda0cada0f877a602ace311dbc9bcb9910ddc43f6ecb619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a20162b4d2203360eb56d798f8173ae406aa7c7a37cccda6b50a48a633d80bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20162b4d2203360eb56d798f8173ae406aa7c7a37cccda6b50a48a633d80bd0->enter($__internal_a20162b4d2203360eb56d798f8173ae406aa7c7a37cccda6b50a48a633d80bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "        ";
            $this->loadTemplate("EnsJobeetBundle:Job:admin.html.twig", "@EnsJobeet/Job/show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
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
        
        $__internal_a20162b4d2203360eb56d798f8173ae406aa7c7a37cccda6b50a48a633d80bd0->leave($__internal_a20162b4d2203360eb56d798f8173ae406aa7c7a37cccda6b50a48a633d80bd0_prof);

        
        $__internal_80e4488c058de8a75bda0cada0f877a602ace311dbc9bcb9910ddc43f6ecb619->leave($__internal_80e4488c058de8a75bda0cada0f877a602ace311dbc9bcb9910ddc43f6ecb619_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Job/show.html.twig";
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
            
{% endblock %}", "@EnsJobeet/Job/show.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Job\\show.html.twig");
    }
}
