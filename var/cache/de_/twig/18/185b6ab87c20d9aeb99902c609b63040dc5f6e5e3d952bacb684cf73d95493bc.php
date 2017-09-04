<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_02f85a2c8153d2f5d077c5fb32b04087ea269117355be618cba90f9dbe396272 extends Twig_Template
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
        $__internal_ea9d8651f76b8fd1ea5d19e29729ba7cf114a283ebca8d3d9d9d03c10063498a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9d8651f76b8fd1ea5d19e29729ba7cf114a283ebca8d3d9d9d03c10063498a->enter($__internal_ea9d8651f76b8fd1ea5d19e29729ba7cf114a283ebca8d3d9d9d03c10063498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_c2f3d087e329375b15beef9e9fe34fb84152fe4510f586172235b7081bf0280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f3d087e329375b15beef9e9fe34fb84152fe4510f586172235b7081bf0280a->enter($__internal_c2f3d087e329375b15beef9e9fe34fb84152fe4510f586172235b7081bf0280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_ea9d8651f76b8fd1ea5d19e29729ba7cf114a283ebca8d3d9d9d03c10063498a->leave($__internal_ea9d8651f76b8fd1ea5d19e29729ba7cf114a283ebca8d3d9d9d03c10063498a_prof);

        
        $__internal_c2f3d087e329375b15beef9e9fe34fb84152fe4510f586172235b7081bf0280a->leave($__internal_c2f3d087e329375b15beef9e9fe34fb84152fe4510f586172235b7081bf0280a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
