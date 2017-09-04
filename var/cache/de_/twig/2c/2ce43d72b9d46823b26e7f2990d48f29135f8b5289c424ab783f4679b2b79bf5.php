<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9958f165f445d3b68513dd520ae5f68ab9c19f58da620d6d290ef79f091bcc8e extends Twig_Template
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
        $__internal_aa26e42dd5dcfdc95a84dc017bf1349854fe56ce83ae19f59a9115f7b0b35481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa26e42dd5dcfdc95a84dc017bf1349854fe56ce83ae19f59a9115f7b0b35481->enter($__internal_aa26e42dd5dcfdc95a84dc017bf1349854fe56ce83ae19f59a9115f7b0b35481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c2ad92b9635735b8c438c0386fa452ec477f178cd039f41348fb1d11d77e73ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ad92b9635735b8c438c0386fa452ec477f178cd039f41348fb1d11d77e73ae->enter($__internal_c2ad92b9635735b8c438c0386fa452ec477f178cd039f41348fb1d11d77e73ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_aa26e42dd5dcfdc95a84dc017bf1349854fe56ce83ae19f59a9115f7b0b35481->leave($__internal_aa26e42dd5dcfdc95a84dc017bf1349854fe56ce83ae19f59a9115f7b0b35481_prof);

        
        $__internal_c2ad92b9635735b8c438c0386fa452ec477f178cd039f41348fb1d11d77e73ae->leave($__internal_c2ad92b9635735b8c438c0386fa452ec477f178cd039f41348fb1d11d77e73ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
