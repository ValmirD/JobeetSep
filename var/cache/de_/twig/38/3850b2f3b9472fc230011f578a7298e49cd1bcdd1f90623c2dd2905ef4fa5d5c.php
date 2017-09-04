<?php

/* EnsJobeetBundle:JobAdmin:list_image.html.twig */
class __TwigTemplate_2cf45dba679452d00606fb64dd5c488b08792ce8fd5ab3a1199f782bab5b5ab9 extends Twig_Template
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
        $__internal_b4652f06f72db2ce44b21394f0ba136a5a9ef24ab2736b96f873e45323705fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4652f06f72db2ce44b21394f0ba136a5a9ef24ab2736b96f873e45323705fb8->enter($__internal_b4652f06f72db2ce44b21394f0ba136a5a9ef24ab2736b96f873e45323705fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:JobAdmin:list_image.html.twig"));

        $__internal_9fa8855a109c364797a5426b39ff1938e746c5b3580a0e8ee201a51cc7b5335b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa8855a109c364797a5426b39ff1938e746c5b3580a0e8ee201a51cc7b5335b->enter($__internal_9fa8855a109c364797a5426b39ff1938e746c5b3580a0e8ee201a51cc7b5335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:JobAdmin:list_image.html.twig"));

        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>
";
        
        $__internal_b4652f06f72db2ce44b21394f0ba136a5a9ef24ab2736b96f873e45323705fb8->leave($__internal_b4652f06f72db2ce44b21394f0ba136a5a9ef24ab2736b96f873e45323705fb8_prof);

        
        $__internal_9fa8855a109c364797a5426b39ff1938e746c5b3580a0e8ee201a51cc7b5335b->leave($__internal_9fa8855a109c364797a5426b39ff1938e746c5b3580a0e8ee201a51cc7b5335b_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:JobAdmin:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <th>Logo</th>
    <td><img src=\"{{ asset(object.webPath) }}\" /></td>
</tr>
", "EnsJobeetBundle:JobAdmin:list_image.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/JobAdmin/list_image.html.twig");
    }
}
