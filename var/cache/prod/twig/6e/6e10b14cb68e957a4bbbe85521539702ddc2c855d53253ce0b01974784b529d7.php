<?php

/* @SonataAdmin/CRUD/show_array.html.twig */
class __TwigTemplate_feda4332c43e806488271ebdd46b3d9cb4b5ce076e9b85044ddb449519aabcc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_array.html.twig", 13);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "@SonataAdmin/CRUD/show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : null), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  27 => 13,  25 => 11,  11 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/show_array.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_array.html.twig");
    }
}
