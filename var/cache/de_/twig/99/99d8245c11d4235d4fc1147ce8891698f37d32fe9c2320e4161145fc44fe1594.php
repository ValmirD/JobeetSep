<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fefd663334931346878b104f4c22652e2c0bab191cd1f009a23c5571a9c1d4b9 extends Twig_Template
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
        $__internal_d2d694718fcda0398a4e6c54a4eaf4eb52794ed0a794df8780b0864306df13b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d694718fcda0398a4e6c54a4eaf4eb52794ed0a794df8780b0864306df13b4->enter($__internal_d2d694718fcda0398a4e6c54a4eaf4eb52794ed0a794df8780b0864306df13b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_617b459bdde91f28f88023802efce3582ef56eb214bffb1c6fba88e35ddc2ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617b459bdde91f28f88023802efce3582ef56eb214bffb1c6fba88e35ddc2ebd->enter($__internal_617b459bdde91f28f88023802efce3582ef56eb214bffb1c6fba88e35ddc2ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d2d694718fcda0398a4e6c54a4eaf4eb52794ed0a794df8780b0864306df13b4->leave($__internal_d2d694718fcda0398a4e6c54a4eaf4eb52794ed0a794df8780b0864306df13b4_prof);

        
        $__internal_617b459bdde91f28f88023802efce3582ef56eb214bffb1c6fba88e35ddc2ebd->leave($__internal_617b459bdde91f28f88023802efce3582ef56eb214bffb1c6fba88e35ddc2ebd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
