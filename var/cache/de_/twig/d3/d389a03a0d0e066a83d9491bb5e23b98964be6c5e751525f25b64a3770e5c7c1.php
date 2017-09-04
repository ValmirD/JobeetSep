<?php

/* EnsJobeetBundle:Default:login.html.twig */
class __TwigTemplate_dc74cf9356d092c5097376f5c466e9c043cf371a90baac76f9e2151a8cfa315c extends Twig_Template
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
        $__internal_9b8a6c2b6d574f1770c5d37fb5c48815a522ca819a38100895ba20e850d8ca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8a6c2b6d574f1770c5d37fb5c48815a522ca819a38100895ba20e850d8ca5f->enter($__internal_9b8a6c2b6d574f1770c5d37fb5c48815a522ca819a38100895ba20e850d8ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Default:login.html.twig"));

        $__internal_121af4b8283fe0f7bc41faafa7f5aab45d86abec8a718df0167039d86f924832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121af4b8283fe0f7bc41faafa7f5aab45d86abec8a718df0167039d86f924832->enter($__internal_121af4b8283fe0f7bc41faafa7f5aab45d86abec8a718df0167039d86f924832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Default:login.html.twig"));

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
        
        $__internal_9b8a6c2b6d574f1770c5d37fb5c48815a522ca819a38100895ba20e850d8ca5f->leave($__internal_9b8a6c2b6d574f1770c5d37fb5c48815a522ca819a38100895ba20e850d8ca5f_prof);

        
        $__internal_121af4b8283fe0f7bc41faafa7f5aab45d86abec8a718df0167039d86f924832->leave($__internal_121af4b8283fe0f7bc41faafa7f5aab45d86abec8a718df0167039d86f924832_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:login.html.twig";
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
</form>", "EnsJobeetBundle:Default:login.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Default/login.html.twig");
    }
}
