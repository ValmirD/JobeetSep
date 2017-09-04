<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d633c8575c9008485c69a1985e4a90f37920a92feb060c467120d487e14d3a77 extends Twig_Template
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
        $__internal_520f5573e7604021748b343124d355432fa3932755505ee819a769aba7b4bc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520f5573e7604021748b343124d355432fa3932755505ee819a769aba7b4bc53->enter($__internal_520f5573e7604021748b343124d355432fa3932755505ee819a769aba7b4bc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9ef6c60cc0a4f43d5deefbe6cbbc8e92897923ea9906b5d7bec6209f2b8e5fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef6c60cc0a4f43d5deefbe6cbbc8e92897923ea9906b5d7bec6209f2b8e5fb8->enter($__internal_9ef6c60cc0a4f43d5deefbe6cbbc8e92897923ea9906b5d7bec6209f2b8e5fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_520f5573e7604021748b343124d355432fa3932755505ee819a769aba7b4bc53->leave($__internal_520f5573e7604021748b343124d355432fa3932755505ee819a769aba7b4bc53_prof);

        
        $__internal_9ef6c60cc0a4f43d5deefbe6cbbc8e92897923ea9906b5d7bec6209f2b8e5fb8->leave($__internal_9ef6c60cc0a4f43d5deefbe6cbbc8e92897923ea9906b5d7bec6209f2b8e5fb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
