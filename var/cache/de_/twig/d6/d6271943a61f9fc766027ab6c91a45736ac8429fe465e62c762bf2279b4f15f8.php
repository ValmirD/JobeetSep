<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_93a45c22cd3bff566312fe1a3b7c7f5ace40fa1d169c323a1394c469b8d52f49 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_235bee225ca59a14dbe9496e3a1187f7db92344e86347c97bb43b3af3998186b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235bee225ca59a14dbe9496e3a1187f7db92344e86347c97bb43b3af3998186b->enter($__internal_235bee225ca59a14dbe9496e3a1187f7db92344e86347c97bb43b3af3998186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $__internal_82de12fd9dcfe9142aae4d4230c23881090f212dc4db79a16c36f064399b45a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de12fd9dcfe9142aae4d4230c23881090f212dc4db79a16c36f064399b45a0->enter($__internal_82de12fd9dcfe9142aae4d4230c23881090f212dc4db79a16c36f064399b45a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235bee225ca59a14dbe9496e3a1187f7db92344e86347c97bb43b3af3998186b->leave($__internal_235bee225ca59a14dbe9496e3a1187f7db92344e86347c97bb43b3af3998186b_prof);

        
        $__internal_82de12fd9dcfe9142aae4d4230c23881090f212dc4db79a16c36f064399b45a0->leave($__internal_82de12fd9dcfe9142aae4d4230c23881090f212dc4db79a16c36f064399b45a0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_331dfa0807f0dc8affbcc7d7d3bf0a068aaabe67a7d3a580e6c342185a9c3a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331dfa0807f0dc8affbcc7d7d3bf0a068aaabe67a7d3a580e6c342185a9c3a8b->enter($__internal_331dfa0807f0dc8affbcc7d7d3bf0a068aaabe67a7d3a580e6c342185a9c3a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_85209e914769fe8c206269aef15dee9148e499e8c4280f094c99152161c34d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85209e914769fe8c206269aef15dee9148e499e8c4280f094c99152161c34d95->enter($__internal_85209e914769fe8c206269aef15dee9148e499e8c4280f094c99152161c34d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_85209e914769fe8c206269aef15dee9148e499e8c4280f094c99152161c34d95->leave($__internal_85209e914769fe8c206269aef15dee9148e499e8c4280f094c99152161c34d95_prof);

        
        $__internal_331dfa0807f0dc8affbcc7d7d3bf0a068aaabe67a7d3a580e6c342185a9c3a8b->leave($__internal_331dfa0807f0dc8affbcc7d7d3bf0a068aaabe67a7d3a580e6c342185a9c3a8b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
