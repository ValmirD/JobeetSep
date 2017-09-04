<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1bfde4e61a1afb0bebeb152635ec3991b05207d234d7bbd41e2795b11932dec2 extends Twig_Template
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
        $__internal_f86ab1f42918ddc2e4974a6a1b23febdd9564b47ebb5c02eff957c53c2885539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86ab1f42918ddc2e4974a6a1b23febdd9564b47ebb5c02eff957c53c2885539->enter($__internal_f86ab1f42918ddc2e4974a6a1b23febdd9564b47ebb5c02eff957c53c2885539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_130b5ac22cf7549d7689cf4bd750c59a435c6c407feb0afdddf791f024120e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130b5ac22cf7549d7689cf4bd750c59a435c6c407feb0afdddf791f024120e7f->enter($__internal_130b5ac22cf7549d7689cf4bd750c59a435c6c407feb0afdddf791f024120e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f86ab1f42918ddc2e4974a6a1b23febdd9564b47ebb5c02eff957c53c2885539->leave($__internal_f86ab1f42918ddc2e4974a6a1b23febdd9564b47ebb5c02eff957c53c2885539_prof);

        
        $__internal_130b5ac22cf7549d7689cf4bd750c59a435c6c407feb0afdddf791f024120e7f->leave($__internal_130b5ac22cf7549d7689cf4bd750c59a435c6c407feb0afdddf791f024120e7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
