<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_f7bc336715ff3f52ecc60fbcf37889722e568c0522488d9eeb132e69c739aa14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3b0ac1c10b4abd2e995e24be6ace1b86ed2101acf281573138bd26c6b021f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b0ac1c10b4abd2e995e24be6ace1b86ed2101acf281573138bd26c6b021f99->enter($__internal_a3b0ac1c10b4abd2e995e24be6ace1b86ed2101acf281573138bd26c6b021f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_affdbd45440d3685fabd772b36365ddf3fed2c64d7a819c0b953bf49254284d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affdbd45440d3685fabd772b36365ddf3fed2c64d7a819c0b953bf49254284d7->enter($__internal_affdbd45440d3685fabd772b36365ddf3fed2c64d7a819c0b953bf49254284d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b0ac1c10b4abd2e995e24be6ace1b86ed2101acf281573138bd26c6b021f99->leave($__internal_a3b0ac1c10b4abd2e995e24be6ace1b86ed2101acf281573138bd26c6b021f99_prof);

        
        $__internal_affdbd45440d3685fabd772b36365ddf3fed2c64d7a819c0b953bf49254284d7->leave($__internal_affdbd45440d3685fabd772b36365ddf3fed2c64d7a819c0b953bf49254284d7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
