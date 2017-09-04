<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_669828743d0267d1e317697a66b382ff246bb1b5192a523327f3c6c16040d534 extends Twig_Template
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
        $__internal_e9161c1cf53c042b78494d740632f7f58b2c97e31279f561d520e6c06c25b789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9161c1cf53c042b78494d740632f7f58b2c97e31279f561d520e6c06c25b789->enter($__internal_e9161c1cf53c042b78494d740632f7f58b2c97e31279f561d520e6c06c25b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cfbb67be0965c1d63122c26671300109cd36bdacd253af810ef029a1bb92f201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbb67be0965c1d63122c26671300109cd36bdacd253af810ef029a1bb92f201->enter($__internal_cfbb67be0965c1d63122c26671300109cd36bdacd253af810ef029a1bb92f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e9161c1cf53c042b78494d740632f7f58b2c97e31279f561d520e6c06c25b789->leave($__internal_e9161c1cf53c042b78494d740632f7f58b2c97e31279f561d520e6c06c25b789_prof);

        
        $__internal_cfbb67be0965c1d63122c26671300109cd36bdacd253af810ef029a1bb92f201->leave($__internal_cfbb67be0965c1d63122c26671300109cd36bdacd253af810ef029a1bb92f201_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
