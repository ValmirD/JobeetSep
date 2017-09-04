<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_8ce2c5851a495196f1b0618564ce21814d3eeadc42442dfd888f519249d69b26 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d1ff442e94ef2f75550630ef23ba056c67aac80792257f9f8f6fb7fd9aecb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d1ff442e94ef2f75550630ef23ba056c67aac80792257f9f8f6fb7fd9aecb7->enter($__internal_f0d1ff442e94ef2f75550630ef23ba056c67aac80792257f9f8f6fb7fd9aecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_9a7906dc3d2837fc4d909b771d19a70ef9dc2afd636019240f610d231463af24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7906dc3d2837fc4d909b771d19a70ef9dc2afd636019240f610d231463af24->enter($__internal_9a7906dc3d2837fc4d909b771d19a70ef9dc2afd636019240f610d231463af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d1ff442e94ef2f75550630ef23ba056c67aac80792257f9f8f6fb7fd9aecb7->leave($__internal_f0d1ff442e94ef2f75550630ef23ba056c67aac80792257f9f8f6fb7fd9aecb7_prof);

        
        $__internal_9a7906dc3d2837fc4d909b771d19a70ef9dc2afd636019240f610d231463af24->leave($__internal_9a7906dc3d2837fc4d909b771d19a70ef9dc2afd636019240f610d231463af24_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b6c42c0b6f865a2b47851981e577b4b198fec8d63d472af6a78e167d20148f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c42c0b6f865a2b47851981e577b4b198fec8d63d472af6a78e167d20148f8a->enter($__internal_b6c42c0b6f865a2b47851981e577b4b198fec8d63d472af6a78e167d20148f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_362a4f94a1a988eeab23a6780776f23bce749251023a387d4c01bf5e9d59b062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362a4f94a1a988eeab23a6780776f23bce749251023a387d4c01bf5e9d59b062->enter($__internal_362a4f94a1a988eeab23a6780776f23bce749251023a387d4c01bf5e9d59b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_362a4f94a1a988eeab23a6780776f23bce749251023a387d4c01bf5e9d59b062->leave($__internal_362a4f94a1a988eeab23a6780776f23bce749251023a387d4c01bf5e9d59b062_prof);

        
        $__internal_b6c42c0b6f865a2b47851981e577b4b198fec8d63d472af6a78e167d20148f8a->leave($__internal_b6c42c0b6f865a2b47851981e577b4b198fec8d63d472af6a78e167d20148f8a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
