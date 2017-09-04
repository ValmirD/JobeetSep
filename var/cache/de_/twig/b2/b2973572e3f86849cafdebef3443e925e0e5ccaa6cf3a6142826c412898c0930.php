<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_88b5ca7d076df6a1548f64d17eeb93cbdd670a86569ac73ff512b55355f67fca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35d3ac3eb5948b74e964717423b2c9199944d9b64d30b33c3c083c02f63cdb5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d3ac3eb5948b74e964717423b2c9199944d9b64d30b33c3c083c02f63cdb5f->enter($__internal_35d3ac3eb5948b74e964717423b2c9199944d9b64d30b33c3c083c02f63cdb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_303443c985b7e5000aa98b6cafb02fbdf6e450ec398a2e2fac885c4b6a189612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303443c985b7e5000aa98b6cafb02fbdf6e450ec398a2e2fac885c4b6a189612->enter($__internal_303443c985b7e5000aa98b6cafb02fbdf6e450ec398a2e2fac885c4b6a189612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_35d3ac3eb5948b74e964717423b2c9199944d9b64d30b33c3c083c02f63cdb5f->leave($__internal_35d3ac3eb5948b74e964717423b2c9199944d9b64d30b33c3c083c02f63cdb5f_prof);

        
        $__internal_303443c985b7e5000aa98b6cafb02fbdf6e450ec398a2e2fac885c4b6a189612->leave($__internal_303443c985b7e5000aa98b6cafb02fbdf6e450ec398a2e2fac885c4b6a189612_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_c609ac7d9382c592c26d17d182a98984eb7428cc63acadef3b55b0aeca0b489c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c609ac7d9382c592c26d17d182a98984eb7428cc63acadef3b55b0aeca0b489c->enter($__internal_c609ac7d9382c592c26d17d182a98984eb7428cc63acadef3b55b0aeca0b489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_60f35e854902aa8e59d11e91bbe322024471e0df1745c1f6597edf6f3027a8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f35e854902aa8e59d11e91bbe322024471e0df1745c1f6597edf6f3027a8c3->enter($__internal_60f35e854902aa8e59d11e91bbe322024471e0df1745c1f6597edf6f3027a8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_60f35e854902aa8e59d11e91bbe322024471e0df1745c1f6597edf6f3027a8c3->leave($__internal_60f35e854902aa8e59d11e91bbe322024471e0df1745c1f6597edf6f3027a8c3_prof);

        
        $__internal_c609ac7d9382c592c26d17d182a98984eb7428cc63acadef3b55b0aeca0b489c->leave($__internal_c609ac7d9382c592c26d17d182a98984eb7428cc63acadef3b55b0aeca0b489c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
