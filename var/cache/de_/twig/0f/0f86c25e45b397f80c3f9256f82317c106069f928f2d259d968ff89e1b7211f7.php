<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1e5950e3db6373d165b90c25278d16802c0b99420734e96b10d4cf0112104961 extends Twig_Template
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
        $__internal_bf298524416a72c23e22b445a5e2791170072d47f33073250d2533f916b266fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf298524416a72c23e22b445a5e2791170072d47f33073250d2533f916b266fd->enter($__internal_bf298524416a72c23e22b445a5e2791170072d47f33073250d2533f916b266fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e6b91800b52c4ef9ecab64333c437d35246fdbb3be25d509639b51d4ffd6a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6b91800b52c4ef9ecab64333c437d35246fdbb3be25d509639b51d4ffd6a57->enter($__internal_6e6b91800b52c4ef9ecab64333c437d35246fdbb3be25d509639b51d4ffd6a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_bf298524416a72c23e22b445a5e2791170072d47f33073250d2533f916b266fd->leave($__internal_bf298524416a72c23e22b445a5e2791170072d47f33073250d2533f916b266fd_prof);

        
        $__internal_6e6b91800b52c4ef9ecab64333c437d35246fdbb3be25d509639b51d4ffd6a57->leave($__internal_6e6b91800b52c4ef9ecab64333c437d35246fdbb3be25d509639b51d4ffd6a57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
