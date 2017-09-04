<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ee60b10c9e2ee7788f202ef5aa857e0e4846036b00e8bdb70dfdc11dd2ea0def extends Twig_Template
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
        $__internal_3e50082241ff571b259e53007fa7214f848e9da70953f510d0c39201191aacfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e50082241ff571b259e53007fa7214f848e9da70953f510d0c39201191aacfd->enter($__internal_3e50082241ff571b259e53007fa7214f848e9da70953f510d0c39201191aacfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6f2363c28d53b0e4d79570584f4dcfba9bf8864bb15e26868fdc4b7501c442a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2363c28d53b0e4d79570584f4dcfba9bf8864bb15e26868fdc4b7501c442a0->enter($__internal_6f2363c28d53b0e4d79570584f4dcfba9bf8864bb15e26868fdc4b7501c442a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3e50082241ff571b259e53007fa7214f848e9da70953f510d0c39201191aacfd->leave($__internal_3e50082241ff571b259e53007fa7214f848e9da70953f510d0c39201191aacfd_prof);

        
        $__internal_6f2363c28d53b0e4d79570584f4dcfba9bf8864bb15e26868fdc4b7501c442a0->leave($__internal_6f2363c28d53b0e4d79570584f4dcfba9bf8864bb15e26868fdc4b7501c442a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
