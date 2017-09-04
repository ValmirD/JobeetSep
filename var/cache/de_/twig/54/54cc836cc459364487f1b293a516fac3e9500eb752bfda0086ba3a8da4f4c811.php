<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_c910c034db2d5639ffa1de7457e368a8d54c2f324d444406320eff8df6837bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08bd94e25a1e938711427841be856e9ce114189328c69cd4284c3196c2a0afbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bd94e25a1e938711427841be856e9ce114189328c69cd4284c3196c2a0afbc->enter($__internal_08bd94e25a1e938711427841be856e9ce114189328c69cd4284c3196c2a0afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $__internal_314f83b0ce5ff342898363a4522209e562c40dc5f93442a5ae3d0d9aaa0cd659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314f83b0ce5ff342898363a4522209e562c40dc5f93442a5ae3d0d9aaa0cd659->enter($__internal_314f83b0ce5ff342898363a4522209e562c40dc5f93442a5ae3d0d9aaa0cd659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08bd94e25a1e938711427841be856e9ce114189328c69cd4284c3196c2a0afbc->leave($__internal_08bd94e25a1e938711427841be856e9ce114189328c69cd4284c3196c2a0afbc_prof);

        
        $__internal_314f83b0ce5ff342898363a4522209e562c40dc5f93442a5ae3d0d9aaa0cd659->leave($__internal_314f83b0ce5ff342898363a4522209e562c40dc5f93442a5ae3d0d9aaa0cd659_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "@SonataAdmin/Core/create_button.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\create_button.html.twig");
    }
}
