<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6e46b22d3ae33e13916c645310695c583dd41ac792d1dfb3a495e009273eeb23 extends Twig_Template
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
        $__internal_039b18397598495c94893d8042aa162554bd69f3c794dae565679b926ee40c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039b18397598495c94893d8042aa162554bd69f3c794dae565679b926ee40c69->enter($__internal_039b18397598495c94893d8042aa162554bd69f3c794dae565679b926ee40c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dc2c139c8e274d1abe313e8be139876eb4f798961ba3729e7546f81810d0b71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2c139c8e274d1abe313e8be139876eb4f798961ba3729e7546f81810d0b71f->enter($__internal_dc2c139c8e274d1abe313e8be139876eb4f798961ba3729e7546f81810d0b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_039b18397598495c94893d8042aa162554bd69f3c794dae565679b926ee40c69->leave($__internal_039b18397598495c94893d8042aa162554bd69f3c794dae565679b926ee40c69_prof);

        
        $__internal_dc2c139c8e274d1abe313e8be139876eb4f798961ba3729e7546f81810d0b71f->leave($__internal_dc2c139c8e274d1abe313e8be139876eb4f798961ba3729e7546f81810d0b71f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
