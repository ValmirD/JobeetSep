<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a10e500820228322cc30036e6940282713d3e274787a202fa5d3d448ac040cc9 extends Twig_Template
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
        $__internal_c8886b352435deea3fd21e4e34613aa7d7639a406eee7d9e5195bc9d1516779f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8886b352435deea3fd21e4e34613aa7d7639a406eee7d9e5195bc9d1516779f->enter($__internal_c8886b352435deea3fd21e4e34613aa7d7639a406eee7d9e5195bc9d1516779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_212cfc2a8dbcd2db08ff917072d7db5666decd36a880b0050e777391662824e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212cfc2a8dbcd2db08ff917072d7db5666decd36a880b0050e777391662824e1->enter($__internal_212cfc2a8dbcd2db08ff917072d7db5666decd36a880b0050e777391662824e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c8886b352435deea3fd21e4e34613aa7d7639a406eee7d9e5195bc9d1516779f->leave($__internal_c8886b352435deea3fd21e4e34613aa7d7639a406eee7d9e5195bc9d1516779f_prof);

        
        $__internal_212cfc2a8dbcd2db08ff917072d7db5666decd36a880b0050e777391662824e1->leave($__internal_212cfc2a8dbcd2db08ff917072d7db5666decd36a880b0050e777391662824e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
