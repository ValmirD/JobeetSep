<?php

/* @SonataAdmin/Button/show_button.html.twig */
class __TwigTemplate_463b9f17f4608928d9c95ea1250f62b5301b8cc31c9a018d75d06c2ab88f0761 extends Twig_Template
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
        $__internal_6cf43b676a11bbc34c6079b9777bc6fc53fd63f989164d8997ca24f69db532e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf43b676a11bbc34c6079b9777bc6fc53fd63f989164d8997ca24f69db532e4->enter($__internal_6cf43b676a11bbc34c6079b9777bc6fc53fd63f989164d8997ca24f69db532e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        $__internal_9fccc28f049969585a150af94a47d41e50effeb4bddabe7dd5669bd1424b7d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fccc28f049969585a150af94a47d41e50effeb4bddabe7dd5669bd1424b7d2a->enter($__internal_9fccc28f049969585a150af94a47d41e50effeb4bddabe7dd5669bd1424b7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/show_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array())) > 0)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_6cf43b676a11bbc34c6079b9777bc6fc53fd63f989164d8997ca24f69db532e4->leave($__internal_6cf43b676a11bbc34c6079b9777bc6fc53fd63f989164d8997ca24f69db532e4_prof);

        
        $__internal_9fccc28f049969585a150af94a47d41e50effeb4bddabe7dd5669bd1424b7d2a->leave($__internal_9fccc28f049969585a150af94a47d41e50effeb4bddabe7dd5669bd1424b7d2a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  30 => 13,  27 => 12,  25 => 11,);
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
{% if admin.canAccessObject('show', object) and admin.show|length > 0 and admin.hasRoute('show') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('show', object) }}\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "@SonataAdmin/Button/show_button.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\show_button.html.twig");
    }
}
