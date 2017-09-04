<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_159f16804e8b0835323be53e15abe3ec1d4256446b630f49ee4d7620ad6fbfd4 extends Twig_Template
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
        $__internal_98390fbcd7e4a1219ca988994eb466ef9eeafcee78c9ee0b0f259a5c86ea2083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98390fbcd7e4a1219ca988994eb466ef9eeafcee78c9ee0b0f259a5c86ea2083->enter($__internal_98390fbcd7e4a1219ca988994eb466ef9eeafcee78c9ee0b0f259a5c86ea2083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7f18bc50c1765b7555114479bb1ebf26bdc7d435dc12c5985087be8d457eb548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f18bc50c1765b7555114479bb1ebf26bdc7d435dc12c5985087be8d457eb548->enter($__internal_7f18bc50c1765b7555114479bb1ebf26bdc7d435dc12c5985087be8d457eb548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98390fbcd7e4a1219ca988994eb466ef9eeafcee78c9ee0b0f259a5c86ea2083->leave($__internal_98390fbcd7e4a1219ca988994eb466ef9eeafcee78c9ee0b0f259a5c86ea2083_prof);

        
        $__internal_7f18bc50c1765b7555114479bb1ebf26bdc7d435dc12c5985087be8d457eb548->leave($__internal_7f18bc50c1765b7555114479bb1ebf26bdc7d435dc12c5985087be8d457eb548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
