<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ede4fdc8003d3904b9d4ee86fbd8a7bb2b8df4ac621195bd67d30ea03782d73f extends Twig_Template
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
        $__internal_528c8e5004fff843f0d183a752a987483ae4c8ff41b2a2f1fb3e137978b2f6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528c8e5004fff843f0d183a752a987483ae4c8ff41b2a2f1fb3e137978b2f6a1->enter($__internal_528c8e5004fff843f0d183a752a987483ae4c8ff41b2a2f1fb3e137978b2f6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b9e5479e8fc0a9e7ef929edeee2c0482b5a8db634224f0d137817ef7e0dde16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e5479e8fc0a9e7ef929edeee2c0482b5a8db634224f0d137817ef7e0dde16c->enter($__internal_b9e5479e8fc0a9e7ef929edeee2c0482b5a8db634224f0d137817ef7e0dde16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_528c8e5004fff843f0d183a752a987483ae4c8ff41b2a2f1fb3e137978b2f6a1->leave($__internal_528c8e5004fff843f0d183a752a987483ae4c8ff41b2a2f1fb3e137978b2f6a1_prof);

        
        $__internal_b9e5479e8fc0a9e7ef929edeee2c0482b5a8db634224f0d137817ef7e0dde16c->leave($__internal_b9e5479e8fc0a9e7ef929edeee2c0482b5a8db634224f0d137817ef7e0dde16c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
