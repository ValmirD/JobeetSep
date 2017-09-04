<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9211ffb05c8da6705178e2a592a9cedd0179280d9254b14252d09dd2128306fe extends Twig_Template
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
        $__internal_132729e461b3d1f4c820f8632a8b996b09bca7c55d739bfc1cf8829ab322ba9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132729e461b3d1f4c820f8632a8b996b09bca7c55d739bfc1cf8829ab322ba9b->enter($__internal_132729e461b3d1f4c820f8632a8b996b09bca7c55d739bfc1cf8829ab322ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_222834c25374b1571a9a35fdbd52a6dc233581ef3ffc3bc6d4379514a7f587f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222834c25374b1571a9a35fdbd52a6dc233581ef3ffc3bc6d4379514a7f587f4->enter($__internal_222834c25374b1571a9a35fdbd52a6dc233581ef3ffc3bc6d4379514a7f587f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_132729e461b3d1f4c820f8632a8b996b09bca7c55d739bfc1cf8829ab322ba9b->leave($__internal_132729e461b3d1f4c820f8632a8b996b09bca7c55d739bfc1cf8829ab322ba9b_prof);

        
        $__internal_222834c25374b1571a9a35fdbd52a6dc233581ef3ffc3bc6d4379514a7f587f4->leave($__internal_222834c25374b1571a9a35fdbd52a6dc233581ef3ffc3bc6d4379514a7f587f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
