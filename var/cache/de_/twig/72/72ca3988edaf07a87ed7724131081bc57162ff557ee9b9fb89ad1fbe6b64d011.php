<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_d9150dd9b2c2c133ab926a97c876ac0a32f483b391bacdf68e2e2c9afb6c9b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9120e65ea21edb4b627b021c3e6511bf734fe4aa8ef2836830f71d90f06cbc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9120e65ea21edb4b627b021c3e6511bf734fe4aa8ef2836830f71d90f06cbc24->enter($__internal_9120e65ea21edb4b627b021c3e6511bf734fe4aa8ef2836830f71d90f06cbc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_0d17960c5fd244c60b38ea46b5b9a42e000d1ecce763c35436169090fec07399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d17960c5fd244c60b38ea46b5b9a42e000d1ecce763c35436169090fec07399->enter($__internal_0d17960c5fd244c60b38ea46b5b9a42e000d1ecce763c35436169090fec07399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9120e65ea21edb4b627b021c3e6511bf734fe4aa8ef2836830f71d90f06cbc24->leave($__internal_9120e65ea21edb4b627b021c3e6511bf734fe4aa8ef2836830f71d90f06cbc24_prof);

        
        $__internal_0d17960c5fd244c60b38ea46b5b9a42e000d1ecce763c35436169090fec07399->leave($__internal_0d17960c5fd244c60b38ea46b5b9a42e000d1ecce763c35436169090fec07399_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_1a7740228d919148bd2abe3d2262241630967fee72946bd55fa742c0760f1dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7740228d919148bd2abe3d2262241630967fee72946bd55fa742c0760f1dc1->enter($__internal_1a7740228d919148bd2abe3d2262241630967fee72946bd55fa742c0760f1dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_b66f4912737502e5d9d27d834236861009e1ec9540a442e3edace0d941c53ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66f4912737502e5d9d27d834236861009e1ec9540a442e3edace0d941c53ae8->enter($__internal_b66f4912737502e5d9d27d834236861009e1ec9540a442e3edace0d941c53ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_b66f4912737502e5d9d27d834236861009e1ec9540a442e3edace0d941c53ae8->leave($__internal_b66f4912737502e5d9d27d834236861009e1ec9540a442e3edace0d941c53ae8_prof);

        
        $__internal_1a7740228d919148bd2abe3d2262241630967fee72946bd55fa742c0760f1dc1->leave($__internal_1a7740228d919148bd2abe3d2262241630967fee72946bd55fa742c0760f1dc1_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_5b63a3e76c69425af3c56b65fa0724d0d50e8f43bd2e700928369cc65fcf5eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b63a3e76c69425af3c56b65fa0724d0d50e8f43bd2e700928369cc65fcf5eb8->enter($__internal_5b63a3e76c69425af3c56b65fa0724d0d50e8f43bd2e700928369cc65fcf5eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_0a6f0b554d4a486ad8e8c7c1b7a9b4d46c85a83750fdd8229435be77c308c13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6f0b554d4a486ad8e8c7c1b7a9b4d46c85a83750fdd8229435be77c308c13c->enter($__internal_0a6f0b554d4a486ad8e8c7c1b7a9b4d46c85a83750fdd8229435be77c308c13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_0a6f0b554d4a486ad8e8c7c1b7a9b4d46c85a83750fdd8229435be77c308c13c->leave($__internal_0a6f0b554d4a486ad8e8c7c1b7a9b4d46c85a83750fdd8229435be77c308c13c_prof);

        
        $__internal_5b63a3e76c69425af3c56b65fa0724d0d50e8f43bd2e700928369cc65fcf5eb8->leave($__internal_5b63a3e76c69425af3c56b65fa0724d0d50e8f43bd2e700928369cc65fcf5eb8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
