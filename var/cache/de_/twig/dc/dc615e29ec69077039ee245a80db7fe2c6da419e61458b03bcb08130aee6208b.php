<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_40a1697a39e0e7a708e1985f49cc29985ef8a9b9d34957f9a9b2eaa52a6825b2 extends Twig_Template
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
        $__internal_c226f3a869eb04433a8529f16b087a334499964d16e1666fd30949c95273b09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c226f3a869eb04433a8529f16b087a334499964d16e1666fd30949c95273b09f->enter($__internal_c226f3a869eb04433a8529f16b087a334499964d16e1666fd30949c95273b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bba434c15d49bf69fe754c71e8b46c7135b9e3581b479c17aef9329ba15bac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba434c15d49bf69fe754c71e8b46c7135b9e3581b479c17aef9329ba15bac98->enter($__internal_bba434c15d49bf69fe754c71e8b46c7135b9e3581b479c17aef9329ba15bac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c226f3a869eb04433a8529f16b087a334499964d16e1666fd30949c95273b09f->leave($__internal_c226f3a869eb04433a8529f16b087a334499964d16e1666fd30949c95273b09f_prof);

        
        $__internal_bba434c15d49bf69fe754c71e8b46c7135b9e3581b479c17aef9329ba15bac98->leave($__internal_bba434c15d49bf69fe754c71e8b46c7135b9e3581b479c17aef9329ba15bac98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
