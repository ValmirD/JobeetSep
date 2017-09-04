<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_88cef9613aacab665bc46cec0b20e01291cc61483b294c456081a9e4f67b63f8 extends Twig_Template
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
        $__internal_95a5ee013ab8022add45589b38c8d3414c4f6cae06f6ee4852111766a3984c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a5ee013ab8022add45589b38c8d3414c4f6cae06f6ee4852111766a3984c27->enter($__internal_95a5ee013ab8022add45589b38c8d3414c4f6cae06f6ee4852111766a3984c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3937b7dfa55f9db5d01a50d8231241ea6ad015b380e3c2c92f9a8310bca0369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3937b7dfa55f9db5d01a50d8231241ea6ad015b380e3c2c92f9a8310bca0369c->enter($__internal_3937b7dfa55f9db5d01a50d8231241ea6ad015b380e3c2c92f9a8310bca0369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_95a5ee013ab8022add45589b38c8d3414c4f6cae06f6ee4852111766a3984c27->leave($__internal_95a5ee013ab8022add45589b38c8d3414c4f6cae06f6ee4852111766a3984c27_prof);

        
        $__internal_3937b7dfa55f9db5d01a50d8231241ea6ad015b380e3c2c92f9a8310bca0369c->leave($__internal_3937b7dfa55f9db5d01a50d8231241ea6ad015b380e3c2c92f9a8310bca0369c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
