<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_346969cccbf007f6470a159b4a1f241167c7fa4435e697e9db5c7f11f8bf72a1 extends Twig_Template
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
        $__internal_01204db017b00c710dd6d8a08328b3988f4d5074b3c4ff88412cce3f4a2f400c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01204db017b00c710dd6d8a08328b3988f4d5074b3c4ff88412cce3f4a2f400c->enter($__internal_01204db017b00c710dd6d8a08328b3988f4d5074b3c4ff88412cce3f4a2f400c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6e5beb566b6d3ef5457c477abcf08216bdee4ceaaf2d5616bc3863b7c8815dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5beb566b6d3ef5457c477abcf08216bdee4ceaaf2d5616bc3863b7c8815dd5->enter($__internal_6e5beb566b6d3ef5457c477abcf08216bdee4ceaaf2d5616bc3863b7c8815dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_01204db017b00c710dd6d8a08328b3988f4d5074b3c4ff88412cce3f4a2f400c->leave($__internal_01204db017b00c710dd6d8a08328b3988f4d5074b3c4ff88412cce3f4a2f400c_prof);

        
        $__internal_6e5beb566b6d3ef5457c477abcf08216bdee4ceaaf2d5616bc3863b7c8815dd5->leave($__internal_6e5beb566b6d3ef5457c477abcf08216bdee4ceaaf2d5616bc3863b7c8815dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
