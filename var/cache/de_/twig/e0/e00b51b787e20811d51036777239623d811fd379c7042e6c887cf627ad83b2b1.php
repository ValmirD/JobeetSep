<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_84963294b1ca0abd76fb1bb07d16c6959d6dd48e2728557d033723feb7a6fd2f extends Twig_Template
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
        $__internal_9c7412a59c23acca600c665c991661253d4e0c1e418bf520f56afc4cad2c0c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7412a59c23acca600c665c991661253d4e0c1e418bf520f56afc4cad2c0c43->enter($__internal_9c7412a59c23acca600c665c991661253d4e0c1e418bf520f56afc4cad2c0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1a37362a5762b8f9f6c34181228d6eb91c7a2984b48797947eb3fa7c2ded6d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a37362a5762b8f9f6c34181228d6eb91c7a2984b48797947eb3fa7c2ded6d9b->enter($__internal_1a37362a5762b8f9f6c34181228d6eb91c7a2984b48797947eb3fa7c2ded6d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c7412a59c23acca600c665c991661253d4e0c1e418bf520f56afc4cad2c0c43->leave($__internal_9c7412a59c23acca600c665c991661253d4e0c1e418bf520f56afc4cad2c0c43_prof);

        
        $__internal_1a37362a5762b8f9f6c34181228d6eb91c7a2984b48797947eb3fa7c2ded6d9b->leave($__internal_1a37362a5762b8f9f6c34181228d6eb91c7a2984b48797947eb3fa7c2ded6d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
