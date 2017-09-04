<?php

/* @EnsJobeet/Default/login.html.twig */
class __TwigTemplate_1243c90c9e56339b499e5ad7d526da0880c3f7284e3bb7ae3d360c938bff9021 extends Twig_Template
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
        $__internal_75c63b5a003a3efaf7305ef9f50723b4402ffbd7b2c59271835e2a30aaab39eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c63b5a003a3efaf7305ef9f50723b4402ffbd7b2c59271835e2a30aaab39eb->enter($__internal_75c63b5a003a3efaf7305ef9f50723b4402ffbd7b2c59271835e2a30aaab39eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Default/login.html.twig"));

        $__internal_2b4ce59a78aae83356af8ae1c54c07f70dbff925e7e2491d3e6e27060557fbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4ce59a78aae83356af8ae1c54c07f70dbff925e7e2491d3e6e27060557fbca->enter($__internal_2b4ce59a78aae83356af8ae1c54c07f70dbff925e7e2491d3e6e27060557fbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Default/login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>";
        
        $__internal_75c63b5a003a3efaf7305ef9f50723b4402ffbd7b2c59271835e2a30aaab39eb->leave($__internal_75c63b5a003a3efaf7305ef9f50723b4402ffbd7b2c59271835e2a30aaab39eb_prof);

        
        $__internal_2b4ce59a78aae83356af8ae1c54c07f70dbff925e7e2491d3e6e27060557fbca->leave($__internal_2b4ce59a78aae83356af8ae1c54c07f70dbff925e7e2491d3e6e27060557fbca_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.message }}</div>
{% endif %}

<form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>", "@EnsJobeet/Default/login.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
