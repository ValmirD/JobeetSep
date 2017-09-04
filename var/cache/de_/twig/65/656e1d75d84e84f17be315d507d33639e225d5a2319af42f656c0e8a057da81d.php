<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_abf66a987c68f7479148befd9b50836cddcaf59f3590fc8d1575061e84ef4129 extends Twig_Template
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
        $__internal_148de597d4d4c69beb8dad75a1ae100677a02ec1f749037e98ca2dfa3171ddc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148de597d4d4c69beb8dad75a1ae100677a02ec1f749037e98ca2dfa3171ddc1->enter($__internal_148de597d4d4c69beb8dad75a1ae100677a02ec1f749037e98ca2dfa3171ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_f1fbc22a46b8d95c38055deb79e9ca33504d7039490043b208c9526e48828f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fbc22a46b8d95c38055deb79e9ca33504d7039490043b208c9526e48828f83->enter($__internal_f1fbc22a46b8d95c38055deb79e9ca33504d7039490043b208c9526e48828f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_148de597d4d4c69beb8dad75a1ae100677a02ec1f749037e98ca2dfa3171ddc1->leave($__internal_148de597d4d4c69beb8dad75a1ae100677a02ec1f749037e98ca2dfa3171ddc1_prof);

        
        $__internal_f1fbc22a46b8d95c38055deb79e9ca33504d7039490043b208c9526e48828f83->leave($__internal_f1fbc22a46b8d95c38055deb79e9ca33504d7039490043b208c9526e48828f83_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_6d7ecccad3492fc9724af72013a97c656969b92a98d43dea9803cb3629d727ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7ecccad3492fc9724af72013a97c656969b92a98d43dea9803cb3629d727ba->enter($__internal_6d7ecccad3492fc9724af72013a97c656969b92a98d43dea9803cb3629d727ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_3f263de29da12d4c57a89e5f3cfaf9486ddfc85bdebbf8af2d61343e2b66fea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f263de29da12d4c57a89e5f3cfaf9486ddfc85bdebbf8af2d61343e2b66fea0->enter($__internal_3f263de29da12d4c57a89e5f3cfaf9486ddfc85bdebbf8af2d61343e2b66fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_3f263de29da12d4c57a89e5f3cfaf9486ddfc85bdebbf8af2d61343e2b66fea0->leave($__internal_3f263de29da12d4c57a89e5f3cfaf9486ddfc85bdebbf8af2d61343e2b66fea0_prof);

        
        $__internal_6d7ecccad3492fc9724af72013a97c656969b92a98d43dea9803cb3629d727ba->leave($__internal_6d7ecccad3492fc9724af72013a97c656969b92a98d43dea9803cb3629d727ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
        return new Twig_Source("{% block user_block %}<a href=\"{{ path('logout') }}\">Logout</a>{% endblock %}", "SonataAdminBundle:Core:user_block.html.twig", "C:\\wamp64\\www\\Jobeet\\app/Resources/SonataAdminBundle/views/Core/user_block.html.twig");
    }
}
