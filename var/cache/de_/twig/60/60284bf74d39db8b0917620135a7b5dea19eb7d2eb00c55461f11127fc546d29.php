<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_bfb417c25da536663c00df746c4f298729686508e5f32138743ea2f75f0b5e35 extends Twig_Template
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
        $__internal_267b1106d98bd4b90622830822a8b38370dc850c1bbbf9a2e0d7fd17f8fe9100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267b1106d98bd4b90622830822a8b38370dc850c1bbbf9a2e0d7fd17f8fe9100->enter($__internal_267b1106d98bd4b90622830822a8b38370dc850c1bbbf9a2e0d7fd17f8fe9100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        $__internal_bc9378d8ba11ab2af61e935a036456c71b7b58a2801032f60bb86331da2c24c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9378d8ba11ab2af61e935a036456c71b7b58a2801032f60bb86331da2c24c5->enter($__internal_bc9378d8ba11ab2af61e935a036456c71b7b58a2801032f60bb86331da2c24c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_267b1106d98bd4b90622830822a8b38370dc850c1bbbf9a2e0d7fd17f8fe9100->leave($__internal_267b1106d98bd4b90622830822a8b38370dc850c1bbbf9a2e0d7fd17f8fe9100_prof);

        
        $__internal_bc9378d8ba11ab2af61e935a036456c71b7b58a2801032f60bb86331da2c24c5->leave($__internal_bc9378d8ba11ab2af61e935a036456c71b7b58a2801032f60bb86331da2c24c5_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_7eef5ff71934fb3847295566739eaa3e57353867dcc60468ed2f8aeb11d0dc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eef5ff71934fb3847295566739eaa3e57353867dcc60468ed2f8aeb11d0dc38->enter($__internal_7eef5ff71934fb3847295566739eaa3e57353867dcc60468ed2f8aeb11d0dc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ab6e82afdf0b25ad419e24059f41f8b5d28a3377218d5ea16c9a37d3c0084d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6e82afdf0b25ad419e24059f41f8b5d28a3377218d5ea16c9a37d3c0084d9d->enter($__internal_ab6e82afdf0b25ad419e24059f41f8b5d28a3377218d5ea16c9a37d3c0084d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_ab6e82afdf0b25ad419e24059f41f8b5d28a3377218d5ea16c9a37d3c0084d9d->leave($__internal_ab6e82afdf0b25ad419e24059f41f8b5d28a3377218d5ea16c9a37d3c0084d9d_prof);

        
        $__internal_7eef5ff71934fb3847295566739eaa3e57353867dcc60468ed2f8aeb11d0dc38->leave($__internal_7eef5ff71934fb3847295566739eaa3e57353867dcc60468ed2f8aeb11d0dc38_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
", "@SonataBlock/Block/block_base.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
