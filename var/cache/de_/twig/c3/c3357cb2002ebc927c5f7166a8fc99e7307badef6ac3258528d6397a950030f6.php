<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_73153ef6bd5de441302952ef21d141a450abc94014d987c17f1cddae55cbf67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a226a7f56b7951a0f4dc51f8bcb30b0f8a17d762d237a43d43fc9e7680eefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a226a7f56b7951a0f4dc51f8bcb30b0f8a17d762d237a43d43fc9e7680eefa->enter($__internal_44a226a7f56b7951a0f4dc51f8bcb30b0f8a17d762d237a43d43fc9e7680eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $__internal_f74202bd7fef634c3387609f3077fa8458c012a7897b401afa466c3d27eecb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74202bd7fef634c3387609f3077fa8458c012a7897b401afa466c3d27eecb5b->enter($__internal_f74202bd7fef634c3387609f3077fa8458c012a7897b401afa466c3d27eecb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a226a7f56b7951a0f4dc51f8bcb30b0f8a17d762d237a43d43fc9e7680eefa->leave($__internal_44a226a7f56b7951a0f4dc51f8bcb30b0f8a17d762d237a43d43fc9e7680eefa_prof);

        
        $__internal_f74202bd7fef634c3387609f3077fa8458c012a7897b401afa466c3d27eecb5b->leave($__internal_f74202bd7fef634c3387609f3077fa8458c012a7897b401afa466c3d27eecb5b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e671995ba439284b1b0d6c286d0a3bc9a05f7d2cb4f040e33aacf86f8b6ff2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e671995ba439284b1b0d6c286d0a3bc9a05f7d2cb4f040e33aacf86f8b6ff2dd->enter($__internal_e671995ba439284b1b0d6c286d0a3bc9a05f7d2cb4f040e33aacf86f8b6ff2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_13a61e78260e00f50b0e92f1b7e32979cd85b5367cec6f0e85cc452e3a936f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a61e78260e00f50b0e92f1b7e32979cd85b5367cec6f0e85cc452e3a936f5b->enter($__internal_13a61e78260e00f50b0e92f1b7e32979cd85b5367cec6f0e85cc452e3a936f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_13a61e78260e00f50b0e92f1b7e32979cd85b5367cec6f0e85cc452e3a936f5b->leave($__internal_13a61e78260e00f50b0e92f1b7e32979cd85b5367cec6f0e85cc452e3a936f5b_prof);

        
        $__internal_e671995ba439284b1b0d6c286d0a3bc9a05f7d2cb4f040e33aacf86f8b6ff2dd->leave($__internal_e671995ba439284b1b0d6c286d0a3bc9a05f7d2cb4f040e33aacf86f8b6ff2dd_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_aa4afc28d18dc6515a4a9668a81c0a2bb82c9e42d5d45ff1987c2319a1fc4586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4afc28d18dc6515a4a9668a81c0a2bb82c9e42d5d45ff1987c2319a1fc4586->enter($__internal_aa4afc28d18dc6515a4a9668a81c0a2bb82c9e42d5d45ff1987c2319a1fc4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_9db13f357919502309faabab9cbce90bad0711e24a4091e026eb36e61f2cdaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db13f357919502309faabab9cbce90bad0711e24a4091e026eb36e61f2cdaa8->enter($__internal_9db13f357919502309faabab9cbce90bad0711e24a4091e026eb36e61f2cdaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9db13f357919502309faabab9cbce90bad0711e24a4091e026eb36e61f2cdaa8->leave($__internal_9db13f357919502309faabab9cbce90bad0711e24a4091e026eb36e61f2cdaa8_prof);

        
        $__internal_aa4afc28d18dc6515a4a9668a81c0a2bb82c9e42d5d45ff1987c2319a1fc4586->leave($__internal_aa4afc28d18dc6515a4a9668a81c0a2bb82c9e42d5d45ff1987c2319a1fc4586_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5f220a539d85d9a4559c8def55377d6583ffcb5ae66f3896a0c5626bd2f8e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f220a539d85d9a4559c8def55377d6583ffcb5ae66f3896a0c5626bd2f8e52->enter($__internal_e5f220a539d85d9a4559c8def55377d6583ffcb5ae66f3896a0c5626bd2f8e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a50b2994b10c3c3a24b8be7d506241fbcfe49e155a6dab74a61a1e367cf386bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50b2994b10c3c3a24b8be7d506241fbcfe49e155a6dab74a61a1e367cf386bb->enter($__internal_a50b2994b10c3c3a24b8be7d506241fbcfe49e155a6dab74a61a1e367cf386bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_a50b2994b10c3c3a24b8be7d506241fbcfe49e155a6dab74a61a1e367cf386bb->leave($__internal_a50b2994b10c3c3a24b8be7d506241fbcfe49e155a6dab74a61a1e367cf386bb_prof);

        
        $__internal_e5f220a539d85d9a4559c8def55377d6583ffcb5ae66f3896a0c5626bd2f8e52->leave($__internal_e5f220a539d85d9a4559c8def55377d6583ffcb5ae66f3896a0c5626bd2f8e52_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "@SonataAdmin/CRUD/action.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
