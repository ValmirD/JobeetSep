<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b09bd0d6dc78c82c937a9096c11426ff7eb5accba83341da4e72b5cce08a75b5 extends Twig_Template
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
        $__internal_dfa2e8ec9ebe9e0bb7c832136de47196c140c9a23caba45a438f9d6a5355edc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa2e8ec9ebe9e0bb7c832136de47196c140c9a23caba45a438f9d6a5355edc9->enter($__internal_dfa2e8ec9ebe9e0bb7c832136de47196c140c9a23caba45a438f9d6a5355edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e13c98dc6605cecf64d81f9901fdaeda6af775042332ee09aab7105d06846663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13c98dc6605cecf64d81f9901fdaeda6af775042332ee09aab7105d06846663->enter($__internal_e13c98dc6605cecf64d81f9901fdaeda6af775042332ee09aab7105d06846663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dfa2e8ec9ebe9e0bb7c832136de47196c140c9a23caba45a438f9d6a5355edc9->leave($__internal_dfa2e8ec9ebe9e0bb7c832136de47196c140c9a23caba45a438f9d6a5355edc9_prof);

        
        $__internal_e13c98dc6605cecf64d81f9901fdaeda6af775042332ee09aab7105d06846663->leave($__internal_e13c98dc6605cecf64d81f9901fdaeda6af775042332ee09aab7105d06846663_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
