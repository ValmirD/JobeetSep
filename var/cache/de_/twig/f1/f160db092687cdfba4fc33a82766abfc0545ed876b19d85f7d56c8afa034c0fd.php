<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_f27104e099711bd336995447841cc64b52ead728d870c7df891c5bfaa1fc6fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7ce2bff9134936ddba24fd40e687a07ea871d66650f26a092f12d1514367643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ce2bff9134936ddba24fd40e687a07ea871d66650f26a092f12d1514367643->enter($__internal_b7ce2bff9134936ddba24fd40e687a07ea871d66650f26a092f12d1514367643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        $__internal_45a8d38014280fed44b698800dd33f0fa340df717e645738678a85b52dda3347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a8d38014280fed44b698800dd33f0fa340df717e645738678a85b52dda3347->enter($__internal_45a8d38014280fed44b698800dd33f0fa340df717e645738678a85b52dda3347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_b7ce2bff9134936ddba24fd40e687a07ea871d66650f26a092f12d1514367643->leave($__internal_b7ce2bff9134936ddba24fd40e687a07ea871d66650f26a092f12d1514367643_prof);

        
        $__internal_45a8d38014280fed44b698800dd33f0fa340df717e645738678a85b52dda3347->leave($__internal_45a8d38014280fed44b698800dd33f0fa340df717e645738678a85b52dda3347_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_34fbc1783116b82a097288284ecc832396c9a57fbaa821713c4f07a0ec81ff4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fbc1783116b82a097288284ecc832396c9a57fbaa821713c4f07a0ec81ff4c->enter($__internal_34fbc1783116b82a097288284ecc832396c9a57fbaa821713c4f07a0ec81ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_fa6e18088a37fc98b77220b040c379863aff1b8922adc0469f06009e2dd1987d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6e18088a37fc98b77220b040c379863aff1b8922adc0469f06009e2dd1987d->enter($__internal_fa6e18088a37fc98b77220b040c379863aff1b8922adc0469f06009e2dd1987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_fa6e18088a37fc98b77220b040c379863aff1b8922adc0469f06009e2dd1987d->leave($__internal_fa6e18088a37fc98b77220b040c379863aff1b8922adc0469f06009e2dd1987d_prof);

        
        $__internal_34fbc1783116b82a097288284ecc832396c9a57fbaa821713c4f07a0ec81ff4c->leave($__internal_34fbc1783116b82a097288284ecc832396c9a57fbaa821713c4f07a0ec81ff4c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}<a href=\"{{ path('logout') }}\">Logout</a>{% endblock %}", "@SonataAdmin/Core/user_block.html.twig", "C:\\wamp64\\www\\Jobeet\\app\\Resources\\SonataAdminBundle\\views\\Core\\user_block.html.twig");
    }
}
