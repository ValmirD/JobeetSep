<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_85cb27244b134e332e3169deb0701e019ad16bfcb4ddb08a814739e24406766b extends Twig_Template
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
        $__internal_9199ede311519d924b06e80ec31aa4a84a1a4a95f8c0b2ace5f8e8b32ee36d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9199ede311519d924b06e80ec31aa4a84a1a4a95f8c0b2ace5f8e8b32ee36d7c->enter($__internal_9199ede311519d924b06e80ec31aa4a84a1a4a95f8c0b2ace5f8e8b32ee36d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c95517aeac33e710be8f459361570a32329d79e4714178bc944eccd4abafd92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95517aeac33e710be8f459361570a32329d79e4714178bc944eccd4abafd92c->enter($__internal_c95517aeac33e710be8f459361570a32329d79e4714178bc944eccd4abafd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9199ede311519d924b06e80ec31aa4a84a1a4a95f8c0b2ace5f8e8b32ee36d7c->leave($__internal_9199ede311519d924b06e80ec31aa4a84a1a4a95f8c0b2ace5f8e8b32ee36d7c_prof);

        
        $__internal_c95517aeac33e710be8f459361570a32329d79e4714178bc944eccd4abafd92c->leave($__internal_c95517aeac33e710be8f459361570a32329d79e4714178bc944eccd4abafd92c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
