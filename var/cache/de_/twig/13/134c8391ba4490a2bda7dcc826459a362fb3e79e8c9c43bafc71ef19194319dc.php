<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ac4425e6ae9ff06a1699da4aa487ed4d1382a00a1eeabbe6624de4af6e3e2ef9 extends Twig_Template
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
        $__internal_7b9ea30d2c5511a7a96476b92b9e511257cb68178fdf1d96fd41a8ca6fd36fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9ea30d2c5511a7a96476b92b9e511257cb68178fdf1d96fd41a8ca6fd36fc8->enter($__internal_7b9ea30d2c5511a7a96476b92b9e511257cb68178fdf1d96fd41a8ca6fd36fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_649ff6a1efe439ed3166873085e0f4e3154c36670bbd9f9c9253640f7d1e0a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649ff6a1efe439ed3166873085e0f4e3154c36670bbd9f9c9253640f7d1e0a58->enter($__internal_649ff6a1efe439ed3166873085e0f4e3154c36670bbd9f9c9253640f7d1e0a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7b9ea30d2c5511a7a96476b92b9e511257cb68178fdf1d96fd41a8ca6fd36fc8->leave($__internal_7b9ea30d2c5511a7a96476b92b9e511257cb68178fdf1d96fd41a8ca6fd36fc8_prof);

        
        $__internal_649ff6a1efe439ed3166873085e0f4e3154c36670bbd9f9c9253640f7d1e0a58->leave($__internal_649ff6a1efe439ed3166873085e0f4e3154c36670bbd9f9c9253640f7d1e0a58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
