<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_9a6c5a392f6a1c526bde84474103b5ad7c24ee2841c91e1391ae3f31e1c3468a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_121723139c780d8ac1caaa9c026834a1f95ce2174e2ae4c01b5746fedeb8ab64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121723139c780d8ac1caaa9c026834a1f95ce2174e2ae4c01b5746fedeb8ab64->enter($__internal_121723139c780d8ac1caaa9c026834a1f95ce2174e2ae4c01b5746fedeb8ab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_d5156b61da6217ad86d01cf2b1b7cdff94e549a1407c59d7ba011a1f155f1c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5156b61da6217ad86d01cf2b1b7cdff94e549a1407c59d7ba011a1f155f1c1c->enter($__internal_d5156b61da6217ad86d01cf2b1b7cdff94e549a1407c59d7ba011a1f155f1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121723139c780d8ac1caaa9c026834a1f95ce2174e2ae4c01b5746fedeb8ab64->leave($__internal_121723139c780d8ac1caaa9c026834a1f95ce2174e2ae4c01b5746fedeb8ab64_prof);

        
        $__internal_d5156b61da6217ad86d01cf2b1b7cdff94e549a1407c59d7ba011a1f155f1c1c->leave($__internal_d5156b61da6217ad86d01cf2b1b7cdff94e549a1407c59d7ba011a1f155f1c1c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_396184e7e0746bab56bf2ba3afe2999aaea46bf9646baab450a830060310cf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396184e7e0746bab56bf2ba3afe2999aaea46bf9646baab450a830060310cf37->enter($__internal_396184e7e0746bab56bf2ba3afe2999aaea46bf9646baab450a830060310cf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_26abc25d9c3a99fc9e9fce8549e12b351d80746544edff8ea8a60ba4229e5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26abc25d9c3a99fc9e9fce8549e12b351d80746544edff8ea8a60ba4229e5328->enter($__internal_26abc25d9c3a99fc9e9fce8549e12b351d80746544edff8ea8a60ba4229e5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_26abc25d9c3a99fc9e9fce8549e12b351d80746544edff8ea8a60ba4229e5328->leave($__internal_26abc25d9c3a99fc9e9fce8549e12b351d80746544edff8ea8a60ba4229e5328_prof);

        
        $__internal_396184e7e0746bab56bf2ba3afe2999aaea46bf9646baab450a830060310cf37->leave($__internal_396184e7e0746bab56bf2ba3afe2999aaea46bf9646baab450a830060310cf37_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
