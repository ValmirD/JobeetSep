<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_28e728f5685d8fc26823f31c5e8af5d352adf8ae6b2244a6b0cf0d7269ed9399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285f697f50170019eac882567cef8611696d6ffa870562119693af5d6231b5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285f697f50170019eac882567cef8611696d6ffa870562119693af5d6231b5b1->enter($__internal_285f697f50170019eac882567cef8611696d6ffa870562119693af5d6231b5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_f5ceb4e127495cb641adef40b47aa54f02862ae083477d7752d46897364fd453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ceb4e127495cb641adef40b47aa54f02862ae083477d7752d46897364fd453->enter($__internal_f5ceb4e127495cb641adef40b47aa54f02862ae083477d7752d46897364fd453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285f697f50170019eac882567cef8611696d6ffa870562119693af5d6231b5b1->leave($__internal_285f697f50170019eac882567cef8611696d6ffa870562119693af5d6231b5b1_prof);

        
        $__internal_f5ceb4e127495cb641adef40b47aa54f02862ae083477d7752d46897364fd453->leave($__internal_f5ceb4e127495cb641adef40b47aa54f02862ae083477d7752d46897364fd453_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
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
", "SonataAdminBundle:Core:create_button.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
