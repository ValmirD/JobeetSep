<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ed540043b2ff8e185de05734d144ddff127c723d60a3491f8ef760a88fee7d0a extends Twig_Template
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
        $__internal_3105c93afb827e2d0040679ad565390bbc3225100a4b002d09bfb1333ba6786b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3105c93afb827e2d0040679ad565390bbc3225100a4b002d09bfb1333ba6786b->enter($__internal_3105c93afb827e2d0040679ad565390bbc3225100a4b002d09bfb1333ba6786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_aba4198174a0273c2be198817c577ee35d1dfa95ee3dbeb278f671e084112dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba4198174a0273c2be198817c577ee35d1dfa95ee3dbeb278f671e084112dce->enter($__internal_aba4198174a0273c2be198817c577ee35d1dfa95ee3dbeb278f671e084112dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3105c93afb827e2d0040679ad565390bbc3225100a4b002d09bfb1333ba6786b->leave($__internal_3105c93afb827e2d0040679ad565390bbc3225100a4b002d09bfb1333ba6786b_prof);

        
        $__internal_aba4198174a0273c2be198817c577ee35d1dfa95ee3dbeb278f671e084112dce->leave($__internal_aba4198174a0273c2be198817c577ee35d1dfa95ee3dbeb278f671e084112dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
