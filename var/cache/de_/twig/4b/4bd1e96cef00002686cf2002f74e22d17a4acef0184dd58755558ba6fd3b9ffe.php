<?php

/* @EnsJobeet/JobAdmin/list_image.html.twig */
class __TwigTemplate_780cb4923926865c4238e9ac4c7a7c8773233179e3f2dfaea2bd31e22c20ba35 extends Twig_Template
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
        $__internal_f8b16803ecd8d1ae755a82badd3b133b21ddb77849594471dbba9dc442530fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b16803ecd8d1ae755a82badd3b133b21ddb77849594471dbba9dc442530fff->enter($__internal_f8b16803ecd8d1ae755a82badd3b133b21ddb77849594471dbba9dc442530fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/JobAdmin/list_image.html.twig"));

        $__internal_c04c0bf7d640191c0e7ef9a5a467ed7fb681c9aad084c145aa21eea480437f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04c0bf7d640191c0e7ef9a5a467ed7fb681c9aad084c145aa21eea480437f65->enter($__internal_c04c0bf7d640191c0e7ef9a5a467ed7fb681c9aad084c145aa21eea480437f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/JobAdmin/list_image.html.twig"));

        // line 1
        echo "<tr>
    <th>Logo</th>
    <td><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
        echo "\" /></td>
</tr>
";
        
        $__internal_f8b16803ecd8d1ae755a82badd3b133b21ddb77849594471dbba9dc442530fff->leave($__internal_f8b16803ecd8d1ae755a82badd3b133b21ddb77849594471dbba9dc442530fff_prof);

        
        $__internal_c04c0bf7d640191c0e7ef9a5a467ed7fb681c9aad084c145aa21eea480437f65->leave($__internal_c04c0bf7d640191c0e7ef9a5a467ed7fb681c9aad084c145aa21eea480437f65_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/JobAdmin/list_image.html.twig";
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
", "@EnsJobeet/JobAdmin/list_image.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\JobAdmin\\list_image.html.twig");
    }
}
