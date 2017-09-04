<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_c3a9106ec759fa8b4809d37c966cafc608caf216b20e883064d4817e338737ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52555a9e28e02854442dedbfae85121a76b24fe763ed3950c2590191854845f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52555a9e28e02854442dedbfae85121a76b24fe763ed3950c2590191854845f->enter($__internal_b52555a9e28e02854442dedbfae85121a76b24fe763ed3950c2590191854845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_d4220c84c113c709b2bce003fc3b8189472b68c822dc3d9e5e260573a00b421a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4220c84c113c709b2bce003fc3b8189472b68c822dc3d9e5e260573a00b421a->enter($__internal_d4220c84c113c709b2bce003fc3b8189472b68c822dc3d9e5e260573a00b421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52555a9e28e02854442dedbfae85121a76b24fe763ed3950c2590191854845f->leave($__internal_b52555a9e28e02854442dedbfae85121a76b24fe763ed3950c2590191854845f_prof);

        
        $__internal_d4220c84c113c709b2bce003fc3b8189472b68c822dc3d9e5e260573a00b421a->leave($__internal_d4220c84c113c709b2bce003fc3b8189472b68c822dc3d9e5e260573a00b421a_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_6ceedbe629628a256fadbf97fe4766e2a7085110037a0c5636d242d1d460588c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ceedbe629628a256fadbf97fe4766e2a7085110037a0c5636d242d1d460588c->enter($__internal_6ceedbe629628a256fadbf97fe4766e2a7085110037a0c5636d242d1d460588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d48d93c774f0641b69abb07c3689897a251087c6906a5690176d54b375ce1740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48d93c774f0641b69abb07c3689897a251087c6906a5690176d54b375ce1740->enter($__internal_d48d93c774f0641b69abb07c3689897a251087c6906a5690176d54b375ce1740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_d48d93c774f0641b69abb07c3689897a251087c6906a5690176d54b375ce1740->leave($__internal_d48d93c774f0641b69abb07c3689897a251087c6906a5690176d54b375ce1740_prof);

        
        $__internal_6ceedbe629628a256fadbf97fe4766e2a7085110037a0c5636d242d1d460588c->leave($__internal_6ceedbe629628a256fadbf97fe4766e2a7085110037a0c5636d242d1d460588c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
