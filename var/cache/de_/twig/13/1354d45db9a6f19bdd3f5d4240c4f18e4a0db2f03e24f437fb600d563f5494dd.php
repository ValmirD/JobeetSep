<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_8e68742c01a3c8e0ec755b6539dd05c223da8051f85869fb76b83747041b6d9b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9d6760acf5dd89a70b9382d9c43636773d3ea0b480512ec49144fa90f0dda36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d6760acf5dd89a70b9382d9c43636773d3ea0b480512ec49144fa90f0dda36->enter($__internal_a9d6760acf5dd89a70b9382d9c43636773d3ea0b480512ec49144fa90f0dda36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $__internal_7dc0f1352cb212d397829b053f1da3f04dbe96d3c1f2fc69a4a7c0fbb309cb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc0f1352cb212d397829b053f1da3f04dbe96d3c1f2fc69a4a7c0fbb309cb21->enter($__internal_7dc0f1352cb212d397829b053f1da3f04dbe96d3c1f2fc69a4a7c0fbb309cb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d6760acf5dd89a70b9382d9c43636773d3ea0b480512ec49144fa90f0dda36->leave($__internal_a9d6760acf5dd89a70b9382d9c43636773d3ea0b480512ec49144fa90f0dda36_prof);

        
        $__internal_7dc0f1352cb212d397829b053f1da3f04dbe96d3c1f2fc69a4a7c0fbb309cb21->leave($__internal_7dc0f1352cb212d397829b053f1da3f04dbe96d3c1f2fc69a4a7c0fbb309cb21_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_36b52aa81cad8740802c29e90029a77fbdeb2f0eb7eaa32f72b8cac28e0dd554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b52aa81cad8740802c29e90029a77fbdeb2f0eb7eaa32f72b8cac28e0dd554->enter($__internal_36b52aa81cad8740802c29e90029a77fbdeb2f0eb7eaa32f72b8cac28e0dd554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f5916107c599725f39339dbee4b960b3b5f147f55b2c04b3518844e0d6fe539a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5916107c599725f39339dbee4b960b3b5f147f55b2c04b3518844e0d6fe539a->enter($__internal_f5916107c599725f39339dbee4b960b3b5f147f55b2c04b3518844e0d6fe539a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "@SonataBlock/Block/block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_f5916107c599725f39339dbee4b960b3b5f147f55b2c04b3518844e0d6fe539a->leave($__internal_f5916107c599725f39339dbee4b960b3b5f147f55b2c04b3518844e0d6fe539a_prof);

        
        $__internal_36b52aa81cad8740802c29e90029a77fbdeb2f0eb7eaa32f72b8cac28e0dd554->leave($__internal_36b52aa81cad8740802c29e90029a77fbdeb2f0eb7eaa32f72b8cac28e0dd554_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception_debug.html.twig";
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
", "@SonataBlock/Block/block_exception_debug.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception_debug.html.twig");
    }
}
