<?php

/* @SonataAdmin/Button/list_button.html.twig */
class __TwigTemplate_410f53d3af1a286476e2770dd86e575b1ad103063f3a1112f9723223c5eb3f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_825d0a33fa382a0fc0b5a30d51c905175ac3801faadb4992fd320e906a67aa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825d0a33fa382a0fc0b5a30d51c905175ac3801faadb4992fd320e906a67aa77->enter($__internal_825d0a33fa382a0fc0b5a30d51c905175ac3801faadb4992fd320e906a67aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        $__internal_7d8dc894c2a8789b9d5c71c48aa16e4e596f0e6f20ea6e2a2e7f596ab0fbadb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8dc894c2a8789b9d5c71c48aa16e4e596f0e6f20ea6e2a2e7f596ab0fbadb8->enter($__internal_7d8dc894c2a8789b9d5c71c48aa16e4e596f0e6f20ea6e2a2e7f596ab0fbadb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_825d0a33fa382a0fc0b5a30d51c905175ac3801faadb4992fd320e906a67aa77->leave($__internal_825d0a33fa382a0fc0b5a30d51c905175ac3801faadb4992fd320e906a67aa77_prof);

        
        $__internal_7d8dc894c2a8789b9d5c71c48aa16e4e596f0e6f20ea6e2a2e7f596ab0fbadb8->leave($__internal_7d8dc894c2a8789b9d5c71c48aa16e4e596f0e6f20ea6e2a2e7f596ab0fbadb8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "@SonataAdmin/Button/list_button.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\list_button.html.twig");
    }
}
