<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cb54a2c89c6e0ddfad2aceed3a9ceaf51235ae500ac6cd774c7b5180d53331c2 extends Twig_Template
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
        $__internal_f35db7b2e6e6e7dfa3a7ad610febb9c52f6869360ab129e77ab90b7ed2d46e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35db7b2e6e6e7dfa3a7ad610febb9c52f6869360ab129e77ab90b7ed2d46e2a->enter($__internal_f35db7b2e6e6e7dfa3a7ad610febb9c52f6869360ab129e77ab90b7ed2d46e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8a992e9fd55017b0c2099fa07187f12bcc26c98fd24ff41db1bbab899f099d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a992e9fd55017b0c2099fa07187f12bcc26c98fd24ff41db1bbab899f099d92->enter($__internal_8a992e9fd55017b0c2099fa07187f12bcc26c98fd24ff41db1bbab899f099d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f35db7b2e6e6e7dfa3a7ad610febb9c52f6869360ab129e77ab90b7ed2d46e2a->leave($__internal_f35db7b2e6e6e7dfa3a7ad610febb9c52f6869360ab129e77ab90b7ed2d46e2a_prof);

        
        $__internal_8a992e9fd55017b0c2099fa07187f12bcc26c98fd24ff41db1bbab899f099d92->leave($__internal_8a992e9fd55017b0c2099fa07187f12bcc26c98fd24ff41db1bbab899f099d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
