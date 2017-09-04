<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_7192fe8db5d2ac2f6da9e4e3fe452e6a776b2fbafb9e42a2e13b2675f617a3ae extends Twig_Template
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
        $__internal_bdbfd9fe0f18d525956c63505847c10a329e8d5565d3d3af992092f6cf10a512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbfd9fe0f18d525956c63505847c10a329e8d5565d3d3af992092f6cf10a512->enter($__internal_bdbfd9fe0f18d525956c63505847c10a329e8d5565d3d3af992092f6cf10a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_98cdb163975851fc479bbd18009d93c733816c3e547330af960634cb22b5fe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cdb163975851fc479bbd18009d93c733816c3e547330af960634cb22b5fe60->enter($__internal_98cdb163975851fc479bbd18009d93c733816c3e547330af960634cb22b5fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_bdbfd9fe0f18d525956c63505847c10a329e8d5565d3d3af992092f6cf10a512->leave($__internal_bdbfd9fe0f18d525956c63505847c10a329e8d5565d3d3af992092f6cf10a512_prof);

        
        $__internal_98cdb163975851fc479bbd18009d93c733816c3e547330af960634cb22b5fe60->leave($__internal_98cdb163975851fc479bbd18009d93c733816c3e547330af960634cb22b5fe60_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
