<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_188bb82a1464ebdec7716d81394c1f614758910f1579774a6e496583b92e721a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8377bd05e1982ea4db091343ba5f1b89a66e02378c4bab7ad901bddc287e434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8377bd05e1982ea4db091343ba5f1b89a66e02378c4bab7ad901bddc287e434->enter($__internal_d8377bd05e1982ea4db091343ba5f1b89a66e02378c4bab7ad901bddc287e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $__internal_65d66eb1385d836e978df2eb7a7fefe8e3fb20686e9568fd8e0a69f99cc58de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d66eb1385d836e978df2eb7a7fefe8e3fb20686e9568fd8e0a69f99cc58de9->enter($__internal_65d66eb1385d836e978df2eb7a7fefe8e3fb20686e9568fd8e0a69f99cc58de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8377bd05e1982ea4db091343ba5f1b89a66e02378c4bab7ad901bddc287e434->leave($__internal_d8377bd05e1982ea4db091343ba5f1b89a66e02378c4bab7ad901bddc287e434_prof);

        
        $__internal_65d66eb1385d836e978df2eb7a7fefe8e3fb20686e9568fd8e0a69f99cc58de9->leave($__internal_65d66eb1385d836e978df2eb7a7fefe8e3fb20686e9568fd8e0a69f99cc58de9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3f261992390e0843a41d531e499be80618fdc6ddb8d1f48ef91412538177c724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f261992390e0843a41d531e499be80618fdc6ddb8d1f48ef91412538177c724->enter($__internal_3f261992390e0843a41d531e499be80618fdc6ddb8d1f48ef91412538177c724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_5ff85d31060a7aae0a93a5213eb252a0c0315b5900cea4f58314b22a7facaa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff85d31060a7aae0a93a5213eb252a0c0315b5900cea4f58314b22a7facaa4a->enter($__internal_5ff85d31060a7aae0a93a5213eb252a0c0315b5900cea4f58314b22a7facaa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_5ff85d31060a7aae0a93a5213eb252a0c0315b5900cea4f58314b22a7facaa4a->leave($__internal_5ff85d31060a7aae0a93a5213eb252a0c0315b5900cea4f58314b22a7facaa4a_prof);

        
        $__internal_3f261992390e0843a41d531e499be80618fdc6ddb8d1f48ef91412538177c724->leave($__internal_3f261992390e0843a41d531e499be80618fdc6ddb8d1f48ef91412538177c724_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
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
", "@SonataBlock/Block/block_exception.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception.html.twig");
    }
}
