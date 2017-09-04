<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_22742f997ff564351e1f0908843bf1c8674333fdeaa88a5447fe539592e5db6d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fcd744247a6f9577168921003124ae1eed57105d657afd1b02a6087304dbaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcd744247a6f9577168921003124ae1eed57105d657afd1b02a6087304dbaaf->enter($__internal_6fcd744247a6f9577168921003124ae1eed57105d657afd1b02a6087304dbaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $__internal_811bd7dc6937d649275f263a33b032a3628e6b5fd7df7593e0c39474c88bc122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811bd7dc6937d649275f263a33b032a3628e6b5fd7df7593e0c39474c88bc122->enter($__internal_811bd7dc6937d649275f263a33b032a3628e6b5fd7df7593e0c39474c88bc122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcd744247a6f9577168921003124ae1eed57105d657afd1b02a6087304dbaaf->leave($__internal_6fcd744247a6f9577168921003124ae1eed57105d657afd1b02a6087304dbaaf_prof);

        
        $__internal_811bd7dc6937d649275f263a33b032a3628e6b5fd7df7593e0c39474c88bc122->leave($__internal_811bd7dc6937d649275f263a33b032a3628e6b5fd7df7593e0c39474c88bc122_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c73318a530bfbcd2fb27101cd44357cdd5e798f3faf7f36d2b6e951158cad39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73318a530bfbcd2fb27101cd44357cdd5e798f3faf7f36d2b6e951158cad39c->enter($__internal_c73318a530bfbcd2fb27101cd44357cdd5e798f3faf7f36d2b6e951158cad39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_895123ea4921f512161d1d61f63d0d94b21d7f19f2da8d26355411d05eb2ee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895123ea4921f512161d1d61f63d0d94b21d7f19f2da8d26355411d05eb2ee1b->enter($__internal_895123ea4921f512161d1d61f63d0d94b21d7f19f2da8d26355411d05eb2ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_895123ea4921f512161d1d61f63d0d94b21d7f19f2da8d26355411d05eb2ee1b->leave($__internal_895123ea4921f512161d1d61f63d0d94b21d7f19f2da8d26355411d05eb2ee1b_prof);

        
        $__internal_c73318a530bfbcd2fb27101cd44357cdd5e798f3faf7f36d2b6e951158cad39c->leave($__internal_c73318a530bfbcd2fb27101cd44357cdd5e798f3faf7f36d2b6e951158cad39c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_template.html.twig";
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
", "@SonataBlock/Block/block_template.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_template.html.twig");
    }
}
