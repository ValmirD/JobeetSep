<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b33c7c7c7f53c58cce3db4c1e9b5bba587a990746ffdb986d30b9e6372c939d8 extends Twig_Template
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
        $__internal_3b40e4401111dceabca76b3ea82ff1539588f3256d4bcc2bc89e82828046f10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b40e4401111dceabca76b3ea82ff1539588f3256d4bcc2bc89e82828046f10d->enter($__internal_3b40e4401111dceabca76b3ea82ff1539588f3256d4bcc2bc89e82828046f10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_52ef005819e3441d6ba822d9ea74ae86dfaafa50bc0f2ba7575dfc64f9673f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ef005819e3441d6ba822d9ea74ae86dfaafa50bc0f2ba7575dfc64f9673f50->enter($__internal_52ef005819e3441d6ba822d9ea74ae86dfaafa50bc0f2ba7575dfc64f9673f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3b40e4401111dceabca76b3ea82ff1539588f3256d4bcc2bc89e82828046f10d->leave($__internal_3b40e4401111dceabca76b3ea82ff1539588f3256d4bcc2bc89e82828046f10d_prof);

        
        $__internal_52ef005819e3441d6ba822d9ea74ae86dfaafa50bc0f2ba7575dfc64f9673f50->leave($__internal_52ef005819e3441d6ba822d9ea74ae86dfaafa50bc0f2ba7575dfc64f9673f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
