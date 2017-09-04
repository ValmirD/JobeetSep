<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ced4450933ba54266105f47cfe4000955f62cf607aa66eb945d23c4b6f36f10 extends Twig_Template
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
        $__internal_05c923fb7acb1e1533b3bb8491e451d5c9b1390cc850509a75673e2c70928257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c923fb7acb1e1533b3bb8491e451d5c9b1390cc850509a75673e2c70928257->enter($__internal_05c923fb7acb1e1533b3bb8491e451d5c9b1390cc850509a75673e2c70928257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_996918644b41e4258cad572cac7eea10cd3073b3bd98a46023b73e09767854ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996918644b41e4258cad572cac7eea10cd3073b3bd98a46023b73e09767854ca->enter($__internal_996918644b41e4258cad572cac7eea10cd3073b3bd98a46023b73e09767854ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_05c923fb7acb1e1533b3bb8491e451d5c9b1390cc850509a75673e2c70928257->leave($__internal_05c923fb7acb1e1533b3bb8491e451d5c9b1390cc850509a75673e2c70928257_prof);

        
        $__internal_996918644b41e4258cad572cac7eea10cd3073b3bd98a46023b73e09767854ca->leave($__internal_996918644b41e4258cad572cac7eea10cd3073b3bd98a46023b73e09767854ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
