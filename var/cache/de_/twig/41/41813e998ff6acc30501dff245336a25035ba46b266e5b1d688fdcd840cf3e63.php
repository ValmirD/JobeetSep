<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79bacca76f7ed267f2c970117ebb24d7a147bcf574d2f0acbf0af49433d4ccdc extends Twig_Template
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
        $__internal_f156e0b07fb3b3022202adae82f5e5f010bc11724cc27a6dbca844a026e1cc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f156e0b07fb3b3022202adae82f5e5f010bc11724cc27a6dbca844a026e1cc51->enter($__internal_f156e0b07fb3b3022202adae82f5e5f010bc11724cc27a6dbca844a026e1cc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c8031b19de243faf0a447146101842938e2a6947c4078a096609ee29ffb110ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8031b19de243faf0a447146101842938e2a6947c4078a096609ee29ffb110ef->enter($__internal_c8031b19de243faf0a447146101842938e2a6947c4078a096609ee29ffb110ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f156e0b07fb3b3022202adae82f5e5f010bc11724cc27a6dbca844a026e1cc51->leave($__internal_f156e0b07fb3b3022202adae82f5e5f010bc11724cc27a6dbca844a026e1cc51_prof);

        
        $__internal_c8031b19de243faf0a447146101842938e2a6947c4078a096609ee29ffb110ef->leave($__internal_c8031b19de243faf0a447146101842938e2a6947c4078a096609ee29ffb110ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
