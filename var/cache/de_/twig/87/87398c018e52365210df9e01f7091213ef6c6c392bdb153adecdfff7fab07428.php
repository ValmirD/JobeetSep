<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_c297edfa3024330c29ba44cd33d72f4b9ef6047718cb171ae9c4bee8ac6fd7aa extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c27e7553aaed8dc5dd69fe993b53db49bb22d0e1d164defb51025b7589c7c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c27e7553aaed8dc5dd69fe993b53db49bb22d0e1d164defb51025b7589c7c5->enter($__internal_36c27e7553aaed8dc5dd69fe993b53db49bb22d0e1d164defb51025b7589c7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $__internal_b5ed435185ffe13553bf82a2373a70161aee151a2d2500597a4f4a2ca3767a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ed435185ffe13553bf82a2373a70161aee151a2d2500597a4f4a2ca3767a0f->enter($__internal_b5ed435185ffe13553bf82a2373a70161aee151a2d2500597a4f4a2ca3767a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c27e7553aaed8dc5dd69fe993b53db49bb22d0e1d164defb51025b7589c7c5->leave($__internal_36c27e7553aaed8dc5dd69fe993b53db49bb22d0e1d164defb51025b7589c7c5_prof);

        
        $__internal_b5ed435185ffe13553bf82a2373a70161aee151a2d2500597a4f4a2ca3767a0f->leave($__internal_b5ed435185ffe13553bf82a2373a70161aee151a2d2500597a4f4a2ca3767a0f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7f353d198fed8100fe2be071a7c530900fd95ad0386964451eeb30087b9596db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f353d198fed8100fe2be071a7c530900fd95ad0386964451eeb30087b9596db->enter($__internal_7f353d198fed8100fe2be071a7c530900fd95ad0386964451eeb30087b9596db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_14702d18da3f4519fd57c2dfbbf3a300f87c027fbf2693f1c538ba4f9013f50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14702d18da3f4519fd57c2dfbbf3a300f87c027fbf2693f1c538ba4f9013f50b->enter($__internal_14702d18da3f4519fd57c2dfbbf3a300f87c027fbf2693f1c538ba4f9013f50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_14702d18da3f4519fd57c2dfbbf3a300f87c027fbf2693f1c538ba4f9013f50b->leave($__internal_14702d18da3f4519fd57c2dfbbf3a300f87c027fbf2693f1c538ba4f9013f50b_prof);

        
        $__internal_7f353d198fed8100fe2be071a7c530900fd95ad0386964451eeb30087b9596db->leave($__internal_7f353d198fed8100fe2be071a7c530900fd95ad0386964451eeb30087b9596db_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
", "@SonataBlock/Block/block_core_menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
