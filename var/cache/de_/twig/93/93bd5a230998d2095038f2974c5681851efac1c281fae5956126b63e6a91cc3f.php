<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e8a89f0b735ebfe31e480f844ab8332189ab1aec985b9f734258552db552774 extends Twig_Template
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
        $__internal_52eb09e29af116c35c03be04f52331038d1da078d12206d10f3afadbd3105897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52eb09e29af116c35c03be04f52331038d1da078d12206d10f3afadbd3105897->enter($__internal_52eb09e29af116c35c03be04f52331038d1da078d12206d10f3afadbd3105897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_59fa5b0ba3471b189adf8835336039581c9eeb45e44597ed261d1f17b542a0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fa5b0ba3471b189adf8835336039581c9eeb45e44597ed261d1f17b542a0b7->enter($__internal_59fa5b0ba3471b189adf8835336039581c9eeb45e44597ed261d1f17b542a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_52eb09e29af116c35c03be04f52331038d1da078d12206d10f3afadbd3105897->leave($__internal_52eb09e29af116c35c03be04f52331038d1da078d12206d10f3afadbd3105897_prof);

        
        $__internal_59fa5b0ba3471b189adf8835336039581c9eeb45e44597ed261d1f17b542a0b7->leave($__internal_59fa5b0ba3471b189adf8835336039581c9eeb45e44597ed261d1f17b542a0b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
