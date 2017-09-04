<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_9867872854685a84b5ea399c094f8ea0546ad0d9dbda55aa4c2c42f6a893bf5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb142e72e8c69bc6492f214324853603c9d08e1d01a94a6fea0ac918e4198e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb142e72e8c69bc6492f214324853603c9d08e1d01a94a6fea0ac918e4198e5->enter($__internal_8cb142e72e8c69bc6492f214324853603c9d08e1d01a94a6fea0ac918e4198e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_ed0544b9b1e9a88a97ab2c4f4919c0677091ccd126397e152301ff421476e122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0544b9b1e9a88a97ab2c4f4919c0677091ccd126397e152301ff421476e122->enter($__internal_ed0544b9b1e9a88a97ab2c4f4919c0677091ccd126397e152301ff421476e122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb142e72e8c69bc6492f214324853603c9d08e1d01a94a6fea0ac918e4198e5->leave($__internal_8cb142e72e8c69bc6492f214324853603c9d08e1d01a94a6fea0ac918e4198e5_prof);

        
        $__internal_ed0544b9b1e9a88a97ab2c4f4919c0677091ccd126397e152301ff421476e122->leave($__internal_ed0544b9b1e9a88a97ab2c4f4919c0677091ccd126397e152301ff421476e122_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
