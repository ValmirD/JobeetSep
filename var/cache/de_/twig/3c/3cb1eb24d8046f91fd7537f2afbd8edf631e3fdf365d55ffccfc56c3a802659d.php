<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_217dff411a738cb482abbde8ddc0d7c4474f90e1b56feeeb50ec18a8d646e3bc extends Twig_Template
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
        $__internal_50089d16f27af1573b46d62467660ccdf224e89a358e4ffcb3dcdd56de985596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50089d16f27af1573b46d62467660ccdf224e89a358e4ffcb3dcdd56de985596->enter($__internal_50089d16f27af1573b46d62467660ccdf224e89a358e4ffcb3dcdd56de985596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e8671a634df621c2b22d49ed089187a148ace62313094173d204f6585c5f07a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8671a634df621c2b22d49ed089187a148ace62313094173d204f6585c5f07a9->enter($__internal_e8671a634df621c2b22d49ed089187a148ace62313094173d204f6585c5f07a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_50089d16f27af1573b46d62467660ccdf224e89a358e4ffcb3dcdd56de985596->leave($__internal_50089d16f27af1573b46d62467660ccdf224e89a358e4ffcb3dcdd56de985596_prof);

        
        $__internal_e8671a634df621c2b22d49ed089187a148ace62313094173d204f6585c5f07a9->leave($__internal_e8671a634df621c2b22d49ed089187a148ace62313094173d204f6585c5f07a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
