<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a485f94076f9bd8875bcef49c3d8cd661d3429786bd1a0cdb4f1ece2ee1302ef extends Twig_Template
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
        $__internal_5fd9316d9b507ce14345e8136375fcf4fa8dd407faad3358ac17d28da3b764ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd9316d9b507ce14345e8136375fcf4fa8dd407faad3358ac17d28da3b764ff->enter($__internal_5fd9316d9b507ce14345e8136375fcf4fa8dd407faad3358ac17d28da3b764ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_97a49f530ae540f5b8a9a1745c5bffc3ac4383c2f03cb6f314f7d4f0fbb6970f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a49f530ae540f5b8a9a1745c5bffc3ac4383c2f03cb6f314f7d4f0fbb6970f->enter($__internal_97a49f530ae540f5b8a9a1745c5bffc3ac4383c2f03cb6f314f7d4f0fbb6970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5fd9316d9b507ce14345e8136375fcf4fa8dd407faad3358ac17d28da3b764ff->leave($__internal_5fd9316d9b507ce14345e8136375fcf4fa8dd407faad3358ac17d28da3b764ff_prof);

        
        $__internal_97a49f530ae540f5b8a9a1745c5bffc3ac4383c2f03cb6f314f7d4f0fbb6970f->leave($__internal_97a49f530ae540f5b8a9a1745c5bffc3ac4383c2f03cb6f314f7d4f0fbb6970f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
