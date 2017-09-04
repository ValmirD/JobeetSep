<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_005bd2921dd413d27b9a0496a7d6d8fb45a7d763ba6469330c4a0a0776bfb43f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97419e27e4ce8e1d51661bc956870f7ff154e72d2989e9491c57bbbf476a8177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97419e27e4ce8e1d51661bc956870f7ff154e72d2989e9491c57bbbf476a8177->enter($__internal_97419e27e4ce8e1d51661bc956870f7ff154e72d2989e9491c57bbbf476a8177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_00d570f9a04ef86743cb55e8964cc18403e31fad0ac4460f4483f4d9da48e420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d570f9a04ef86743cb55e8964cc18403e31fad0ac4460f4483f4d9da48e420->enter($__internal_00d570f9a04ef86743cb55e8964cc18403e31fad0ac4460f4483f4d9da48e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97419e27e4ce8e1d51661bc956870f7ff154e72d2989e9491c57bbbf476a8177->leave($__internal_97419e27e4ce8e1d51661bc956870f7ff154e72d2989e9491c57bbbf476a8177_prof);

        
        $__internal_00d570f9a04ef86743cb55e8964cc18403e31fad0ac4460f4483f4d9da48e420->leave($__internal_00d570f9a04ef86743cb55e8964cc18403e31fad0ac4460f4483f4d9da48e420_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c73be9a014144e8d8cab9d963957038b89c7d47fe5ac734c6fcfa3137b1b76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c73be9a014144e8d8cab9d963957038b89c7d47fe5ac734c6fcfa3137b1b76b->enter($__internal_7c73be9a014144e8d8cab9d963957038b89c7d47fe5ac734c6fcfa3137b1b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_15555eb6a7e4bfc9273e5595f46217f6fbc974ecdc81749493cfe2cfa0dc822b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15555eb6a7e4bfc9273e5595f46217f6fbc974ecdc81749493cfe2cfa0dc822b->enter($__internal_15555eb6a7e4bfc9273e5595f46217f6fbc974ecdc81749493cfe2cfa0dc822b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_15555eb6a7e4bfc9273e5595f46217f6fbc974ecdc81749493cfe2cfa0dc822b->leave($__internal_15555eb6a7e4bfc9273e5595f46217f6fbc974ecdc81749493cfe2cfa0dc822b_prof);

        
        $__internal_7c73be9a014144e8d8cab9d963957038b89c7d47fe5ac734c6fcfa3137b1b76b->leave($__internal_7c73be9a014144e8d8cab9d963957038b89c7d47fe5ac734c6fcfa3137b1b76b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
