<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c7db69305f384bcbdaedb0dc6d636d41a4d9c85ec0b61feb1fb48e6a04be433d extends Twig_Template
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
        $__internal_6cc2f0b338b87a668e36afb6461d32d15d1432f9c245107ac25b50c7ebaf84dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc2f0b338b87a668e36afb6461d32d15d1432f9c245107ac25b50c7ebaf84dd->enter($__internal_6cc2f0b338b87a668e36afb6461d32d15d1432f9c245107ac25b50c7ebaf84dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2ddc61aa047b2d04d2232e64f51742f06302fdbffc900cd943cb1ee7da42fbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddc61aa047b2d04d2232e64f51742f06302fdbffc900cd943cb1ee7da42fbcd->enter($__internal_2ddc61aa047b2d04d2232e64f51742f06302fdbffc900cd943cb1ee7da42fbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6cc2f0b338b87a668e36afb6461d32d15d1432f9c245107ac25b50c7ebaf84dd->leave($__internal_6cc2f0b338b87a668e36afb6461d32d15d1432f9c245107ac25b50c7ebaf84dd_prof);

        
        $__internal_2ddc61aa047b2d04d2232e64f51742f06302fdbffc900cd943cb1ee7da42fbcd->leave($__internal_2ddc61aa047b2d04d2232e64f51742f06302fdbffc900cd943cb1ee7da42fbcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
