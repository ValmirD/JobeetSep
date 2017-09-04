<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_058001fe722a6dee4ad2ca7b8ecb06b37bf7cf8ca7c63f65704720748eb10e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79dc22a8b4eb91c4551022c602728d554f9643d23510713d1ab9a75d88ad82c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dc22a8b4eb91c4551022c602728d554f9643d23510713d1ab9a75d88ad82c2->enter($__internal_79dc22a8b4eb91c4551022c602728d554f9643d23510713d1ab9a75d88ad82c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_6334a1072b886b9bdb6c63e06a0f2e555e910f14d2b594c1e96df1d07bacf638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6334a1072b886b9bdb6c63e06a0f2e555e910f14d2b594c1e96df1d07bacf638->enter($__internal_6334a1072b886b9bdb6c63e06a0f2e555e910f14d2b594c1e96df1d07bacf638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79dc22a8b4eb91c4551022c602728d554f9643d23510713d1ab9a75d88ad82c2->leave($__internal_79dc22a8b4eb91c4551022c602728d554f9643d23510713d1ab9a75d88ad82c2_prof);

        
        $__internal_6334a1072b886b9bdb6c63e06a0f2e555e910f14d2b594c1e96df1d07bacf638->leave($__internal_6334a1072b886b9bdb6c63e06a0f2e555e910f14d2b594c1e96df1d07bacf638_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8d36d25e1abb108cd17c37e8c40f3262d5e5c21eff5d355387a30060986e87b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d36d25e1abb108cd17c37e8c40f3262d5e5c21eff5d355387a30060986e87b1->enter($__internal_8d36d25e1abb108cd17c37e8c40f3262d5e5c21eff5d355387a30060986e87b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_bc14e8eac735911768eb1df7d770b43c30bcb4d73135959073d55e169ca61a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc14e8eac735911768eb1df7d770b43c30bcb4d73135959073d55e169ca61a8b->enter($__internal_bc14e8eac735911768eb1df7d770b43c30bcb4d73135959073d55e169ca61a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_bc14e8eac735911768eb1df7d770b43c30bcb4d73135959073d55e169ca61a8b->leave($__internal_bc14e8eac735911768eb1df7d770b43c30bcb4d73135959073d55e169ca61a8b_prof);

        
        $__internal_8d36d25e1abb108cd17c37e8c40f3262d5e5c21eff5d355387a30060986e87b1->leave($__internal_8d36d25e1abb108cd17c37e8c40f3262d5e5c21eff5d355387a30060986e87b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
