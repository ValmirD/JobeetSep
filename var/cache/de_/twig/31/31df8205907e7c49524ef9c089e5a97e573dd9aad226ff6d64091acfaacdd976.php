<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_2974885b3b1bbea8147d2bee77aea87fef55eaca35c20cacb02bd327badaf8fa extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81e4166adfb7f785737977b0d17bae8f95f905e3e96fbc603739b9602bcb9aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e4166adfb7f785737977b0d17bae8f95f905e3e96fbc603739b9602bcb9aaf->enter($__internal_81e4166adfb7f785737977b0d17bae8f95f905e3e96fbc603739b9602bcb9aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_9afa6f4d9dabc2062570d1ae528bf6f800b9f9e8e7cdc1e76bf16570ec415006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afa6f4d9dabc2062570d1ae528bf6f800b9f9e8e7cdc1e76bf16570ec415006->enter($__internal_9afa6f4d9dabc2062570d1ae528bf6f800b9f9e8e7cdc1e76bf16570ec415006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e4166adfb7f785737977b0d17bae8f95f905e3e96fbc603739b9602bcb9aaf->leave($__internal_81e4166adfb7f785737977b0d17bae8f95f905e3e96fbc603739b9602bcb9aaf_prof);

        
        $__internal_9afa6f4d9dabc2062570d1ae528bf6f800b9f9e8e7cdc1e76bf16570ec415006->leave($__internal_9afa6f4d9dabc2062570d1ae528bf6f800b9f9e8e7cdc1e76bf16570ec415006_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7c17402b977da6c8dea03766777315f6a5cb28cd43de8c54a728bc0363b334d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c17402b977da6c8dea03766777315f6a5cb28cd43de8c54a728bc0363b334d->enter($__internal_c7c17402b977da6c8dea03766777315f6a5cb28cd43de8c54a728bc0363b334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1eb0a6bee134cc50d6edf1757c157c385cababfa07fb9a00bdfdb1f07ea5e9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb0a6bee134cc50d6edf1757c157c385cababfa07fb9a00bdfdb1f07ea5e9a3->enter($__internal_1eb0a6bee134cc50d6edf1757c157c385cababfa07fb9a00bdfdb1f07ea5e9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_1eb0a6bee134cc50d6edf1757c157c385cababfa07fb9a00bdfdb1f07ea5e9a3->leave($__internal_1eb0a6bee134cc50d6edf1757c157c385cababfa07fb9a00bdfdb1f07ea5e9a3_prof);

        
        $__internal_c7c17402b977da6c8dea03766777315f6a5cb28cd43de8c54a728bc0363b334d->leave($__internal_c7c17402b977da6c8dea03766777315f6a5cb28cd43de8c54a728bc0363b334d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
