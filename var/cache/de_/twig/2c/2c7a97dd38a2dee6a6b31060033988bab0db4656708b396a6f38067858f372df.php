<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9397481b884d417c64ec2ec678e1bbebc4503cb158843cbe1ca87b19c79627d8 extends Twig_Template
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
        $__internal_984c097878856fe8b31ade15ddbcb8cb0bbbd68f159f32adff262b6cf363f643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984c097878856fe8b31ade15ddbcb8cb0bbbd68f159f32adff262b6cf363f643->enter($__internal_984c097878856fe8b31ade15ddbcb8cb0bbbd68f159f32adff262b6cf363f643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e974dc35622e616cee7b4af30ffa4c89987d6a49b389a382c2181a0811192a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e974dc35622e616cee7b4af30ffa4c89987d6a49b389a382c2181a0811192a6->enter($__internal_3e974dc35622e616cee7b4af30ffa4c89987d6a49b389a382c2181a0811192a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_984c097878856fe8b31ade15ddbcb8cb0bbbd68f159f32adff262b6cf363f643->leave($__internal_984c097878856fe8b31ade15ddbcb8cb0bbbd68f159f32adff262b6cf363f643_prof);

        
        $__internal_3e974dc35622e616cee7b4af30ffa4c89987d6a49b389a382c2181a0811192a6->leave($__internal_3e974dc35622e616cee7b4af30ffa4c89987d6a49b389a382c2181a0811192a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
