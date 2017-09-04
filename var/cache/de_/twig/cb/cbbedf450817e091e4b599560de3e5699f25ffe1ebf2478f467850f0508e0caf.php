<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2c72fada43f6b8957e25e55371ffe440ffd785efbefbc83975fcca2b30b97156 extends Twig_Template
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
        $__internal_247706d8f5304b1620823e31b60e5658b790563ec795f91970f8f326823e275f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247706d8f5304b1620823e31b60e5658b790563ec795f91970f8f326823e275f->enter($__internal_247706d8f5304b1620823e31b60e5658b790563ec795f91970f8f326823e275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_112ac7d611d64514eda7a3799f4c249c2baaabff4cd95a4a5d2608671c9ed7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112ac7d611d64514eda7a3799f4c249c2baaabff4cd95a4a5d2608671c9ed7cb->enter($__internal_112ac7d611d64514eda7a3799f4c249c2baaabff4cd95a4a5d2608671c9ed7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_247706d8f5304b1620823e31b60e5658b790563ec795f91970f8f326823e275f->leave($__internal_247706d8f5304b1620823e31b60e5658b790563ec795f91970f8f326823e275f_prof);

        
        $__internal_112ac7d611d64514eda7a3799f4c249c2baaabff4cd95a4a5d2608671c9ed7cb->leave($__internal_112ac7d611d64514eda7a3799f4c249c2baaabff4cd95a4a5d2608671c9ed7cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
