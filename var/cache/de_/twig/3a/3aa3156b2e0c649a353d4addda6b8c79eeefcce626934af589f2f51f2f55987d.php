<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_637dd90d34b5c4a3788c59d40ff6f3215055e0617c78bfd60ebdc007888167aa extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e3381253f067d61565a35951c47727a3d2dd7b79cc4795f7c0de063dbef0859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3381253f067d61565a35951c47727a3d2dd7b79cc4795f7c0de063dbef0859->enter($__internal_9e3381253f067d61565a35951c47727a3d2dd7b79cc4795f7c0de063dbef0859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_d1e550b2770cda1fc55d93f9737601903fe0381f144d9760c5e9704be8eab817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e550b2770cda1fc55d93f9737601903fe0381f144d9760c5e9704be8eab817->enter($__internal_d1e550b2770cda1fc55d93f9737601903fe0381f144d9760c5e9704be8eab817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3381253f067d61565a35951c47727a3d2dd7b79cc4795f7c0de063dbef0859->leave($__internal_9e3381253f067d61565a35951c47727a3d2dd7b79cc4795f7c0de063dbef0859_prof);

        
        $__internal_d1e550b2770cda1fc55d93f9737601903fe0381f144d9760c5e9704be8eab817->leave($__internal_d1e550b2770cda1fc55d93f9737601903fe0381f144d9760c5e9704be8eab817_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_caba41024f70f409a6a64d1fa1947a0ba1414c1811e63bbf5bfedb0999cab779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caba41024f70f409a6a64d1fa1947a0ba1414c1811e63bbf5bfedb0999cab779->enter($__internal_caba41024f70f409a6a64d1fa1947a0ba1414c1811e63bbf5bfedb0999cab779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_b135f656092a873a9bfffca0fb964101b1eb18d9b3da77e9909d65de2e86030b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b135f656092a873a9bfffca0fb964101b1eb18d9b3da77e9909d65de2e86030b->enter($__internal_b135f656092a873a9bfffca0fb964101b1eb18d9b3da77e9909d65de2e86030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_b135f656092a873a9bfffca0fb964101b1eb18d9b3da77e9909d65de2e86030b->leave($__internal_b135f656092a873a9bfffca0fb964101b1eb18d9b3da77e9909d65de2e86030b_prof);

        
        $__internal_caba41024f70f409a6a64d1fa1947a0ba1414c1811e63bbf5bfedb0999cab779->leave($__internal_caba41024f70f409a6a64d1fa1947a0ba1414c1811e63bbf5bfedb0999cab779_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
