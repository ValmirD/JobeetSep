<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_b4d4be7152048191742c155b40ed3f22da66cae3119bfb5f811b7d0e1fcde679 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6cf117252a0cbb93ee514cd1cde9d7abef43372534eb718896671e2ccd416d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6cf117252a0cbb93ee514cd1cde9d7abef43372534eb718896671e2ccd416d->enter($__internal_7c6cf117252a0cbb93ee514cd1cde9d7abef43372534eb718896671e2ccd416d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_a9edaea3e7de1ad089a4ab33577624cecb64266d2fc15d0ba0d402b3a1589959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9edaea3e7de1ad089a4ab33577624cecb64266d2fc15d0ba0d402b3a1589959->enter($__internal_a9edaea3e7de1ad089a4ab33577624cecb64266d2fc15d0ba0d402b3a1589959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6cf117252a0cbb93ee514cd1cde9d7abef43372534eb718896671e2ccd416d->leave($__internal_7c6cf117252a0cbb93ee514cd1cde9d7abef43372534eb718896671e2ccd416d_prof);

        
        $__internal_a9edaea3e7de1ad089a4ab33577624cecb64266d2fc15d0ba0d402b3a1589959->leave($__internal_a9edaea3e7de1ad089a4ab33577624cecb64266d2fc15d0ba0d402b3a1589959_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
