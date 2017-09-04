<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_057e4a927c99ca9c30308ed314835ee1953dbff98191df863d3aa3be39642353 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd5f1fb8c370aee6e078376ecff5c537d64b1b72b1bf695a34fbc4a756e608aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5f1fb8c370aee6e078376ecff5c537d64b1b72b1bf695a34fbc4a756e608aa->enter($__internal_dd5f1fb8c370aee6e078376ecff5c537d64b1b72b1bf695a34fbc4a756e608aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_bf441d1d7512f61bb20a481c47acd2658a14b402e1f24e3f1ed9b7d9c5487964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf441d1d7512f61bb20a481c47acd2658a14b402e1f24e3f1ed9b7d9c5487964->enter($__internal_bf441d1d7512f61bb20a481c47acd2658a14b402e1f24e3f1ed9b7d9c5487964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5f1fb8c370aee6e078376ecff5c537d64b1b72b1bf695a34fbc4a756e608aa->leave($__internal_dd5f1fb8c370aee6e078376ecff5c537d64b1b72b1bf695a34fbc4a756e608aa_prof);

        
        $__internal_bf441d1d7512f61bb20a481c47acd2658a14b402e1f24e3f1ed9b7d9c5487964->leave($__internal_bf441d1d7512f61bb20a481c47acd2658a14b402e1f24e3f1ed9b7d9c5487964_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e8c850c5b163b48b6aa38e20e27df06570de5ee3cbbbc937254d67b05bdc9dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c850c5b163b48b6aa38e20e27df06570de5ee3cbbbc937254d67b05bdc9dce->enter($__internal_e8c850c5b163b48b6aa38e20e27df06570de5ee3cbbbc937254d67b05bdc9dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_73dfc381ddeb776f0b25e2546027f35b8a5fae398169ce2e5477b297d712efed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dfc381ddeb776f0b25e2546027f35b8a5fae398169ce2e5477b297d712efed->enter($__internal_73dfc381ddeb776f0b25e2546027f35b8a5fae398169ce2e5477b297d712efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_73dfc381ddeb776f0b25e2546027f35b8a5fae398169ce2e5477b297d712efed->leave($__internal_73dfc381ddeb776f0b25e2546027f35b8a5fae398169ce2e5477b297d712efed_prof);

        
        $__internal_e8c850c5b163b48b6aa38e20e27df06570de5ee3cbbbc937254d67b05bdc9dce->leave($__internal_e8c850c5b163b48b6aa38e20e27df06570de5ee3cbbbc937254d67b05bdc9dce_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
