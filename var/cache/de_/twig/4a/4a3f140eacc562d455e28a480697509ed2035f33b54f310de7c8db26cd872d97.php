<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_7aeae02ef6e17740b7ed314906f8e18345a8ac9b66d244a89a9d177ffb5553bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f31deb693a4d637701aa67fff46a896940f91e0360a264a8dab045b5fc87d9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31deb693a4d637701aa67fff46a896940f91e0360a264a8dab045b5fc87d9ce->enter($__internal_f31deb693a4d637701aa67fff46a896940f91e0360a264a8dab045b5fc87d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_83c9cce719da7baf116069eaee143565208b854e1a0f793f8be0920574431780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c9cce719da7baf116069eaee143565208b854e1a0f793f8be0920574431780->enter($__internal_83c9cce719da7baf116069eaee143565208b854e1a0f793f8be0920574431780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31deb693a4d637701aa67fff46a896940f91e0360a264a8dab045b5fc87d9ce->leave($__internal_f31deb693a4d637701aa67fff46a896940f91e0360a264a8dab045b5fc87d9ce_prof);

        
        $__internal_83c9cce719da7baf116069eaee143565208b854e1a0f793f8be0920574431780->leave($__internal_83c9cce719da7baf116069eaee143565208b854e1a0f793f8be0920574431780_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_61bdfbdc62bd246caa6a9368a9555ac861d6e55b224b7e218e09fa0c0017e5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bdfbdc62bd246caa6a9368a9555ac861d6e55b224b7e218e09fa0c0017e5e0->enter($__internal_61bdfbdc62bd246caa6a9368a9555ac861d6e55b224b7e218e09fa0c0017e5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e367079ca75b04b6b2509033110142bfa1edde3bac556b53fda0cf6852ca2194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e367079ca75b04b6b2509033110142bfa1edde3bac556b53fda0cf6852ca2194->enter($__internal_e367079ca75b04b6b2509033110142bfa1edde3bac556b53fda0cf6852ca2194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e367079ca75b04b6b2509033110142bfa1edde3bac556b53fda0cf6852ca2194->leave($__internal_e367079ca75b04b6b2509033110142bfa1edde3bac556b53fda0cf6852ca2194_prof);

        
        $__internal_61bdfbdc62bd246caa6a9368a9555ac861d6e55b224b7e218e09fa0c0017e5e0->leave($__internal_61bdfbdc62bd246caa6a9368a9555ac861d6e55b224b7e218e09fa0c0017e5e0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
