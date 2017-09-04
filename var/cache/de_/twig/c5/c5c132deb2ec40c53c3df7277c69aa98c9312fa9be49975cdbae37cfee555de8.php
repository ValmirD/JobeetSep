<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0b35412f1cb606d5f65cb6698a6799bf254358a538631fdf6aaf7eecae93e211 extends Twig_Template
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
        $__internal_d9361bee0fcff2454f9d57c6a4a60b543bc8329335f7700bbbee1720855f305c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9361bee0fcff2454f9d57c6a4a60b543bc8329335f7700bbbee1720855f305c->enter($__internal_d9361bee0fcff2454f9d57c6a4a60b543bc8329335f7700bbbee1720855f305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_81a7a3b2cbae4bfaa16af03eb7119d7dbf6afe1831938af3171e6a2ebace496a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a7a3b2cbae4bfaa16af03eb7119d7dbf6afe1831938af3171e6a2ebace496a->enter($__internal_81a7a3b2cbae4bfaa16af03eb7119d7dbf6afe1831938af3171e6a2ebace496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d9361bee0fcff2454f9d57c6a4a60b543bc8329335f7700bbbee1720855f305c->leave($__internal_d9361bee0fcff2454f9d57c6a4a60b543bc8329335f7700bbbee1720855f305c_prof);

        
        $__internal_81a7a3b2cbae4bfaa16af03eb7119d7dbf6afe1831938af3171e6a2ebace496a->leave($__internal_81a7a3b2cbae4bfaa16af03eb7119d7dbf6afe1831938af3171e6a2ebace496a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
