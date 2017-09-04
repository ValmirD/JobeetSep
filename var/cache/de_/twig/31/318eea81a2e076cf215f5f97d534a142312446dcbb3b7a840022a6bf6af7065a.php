<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f6091255b450eaa68c3f3fc17e24c27c0156b0242ed7a181f419d76766c6ed6a extends Twig_Template
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
        $__internal_d7b33e9736100a945d509f19266cfa98c850847ed2b033868f936dec495dbc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b33e9736100a945d509f19266cfa98c850847ed2b033868f936dec495dbc29->enter($__internal_d7b33e9736100a945d509f19266cfa98c850847ed2b033868f936dec495dbc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_99ea715ef19af5bc4d2043fc40d97ff210c76206ab6120d3ef6e487fd85c0b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea715ef19af5bc4d2043fc40d97ff210c76206ab6120d3ef6e487fd85c0b93->enter($__internal_99ea715ef19af5bc4d2043fc40d97ff210c76206ab6120d3ef6e487fd85c0b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d7b33e9736100a945d509f19266cfa98c850847ed2b033868f936dec495dbc29->leave($__internal_d7b33e9736100a945d509f19266cfa98c850847ed2b033868f936dec495dbc29_prof);

        
        $__internal_99ea715ef19af5bc4d2043fc40d97ff210c76206ab6120d3ef6e487fd85c0b93->leave($__internal_99ea715ef19af5bc4d2043fc40d97ff210c76206ab6120d3ef6e487fd85c0b93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
