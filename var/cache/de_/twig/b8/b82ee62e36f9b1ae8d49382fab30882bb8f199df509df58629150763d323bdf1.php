<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_23893f434a07dd3802763d397d2a4d089571dd97896bf6aa3eb9a70515a58972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63eaad132177225e431cdd3116e2fb4bd4f9c5109c04e4b7e1732dcb950cd6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63eaad132177225e431cdd3116e2fb4bd4f9c5109c04e4b7e1732dcb950cd6bb->enter($__internal_63eaad132177225e431cdd3116e2fb4bd4f9c5109c04e4b7e1732dcb950cd6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3ca8ebd0febf6b452da87228c3d2bac801eb23c9293d353093a344e145a224b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca8ebd0febf6b452da87228c3d2bac801eb23c9293d353093a344e145a224b2->enter($__internal_3ca8ebd0febf6b452da87228c3d2bac801eb23c9293d353093a344e145a224b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_63eaad132177225e431cdd3116e2fb4bd4f9c5109c04e4b7e1732dcb950cd6bb->leave($__internal_63eaad132177225e431cdd3116e2fb4bd4f9c5109c04e4b7e1732dcb950cd6bb_prof);

        
        $__internal_3ca8ebd0febf6b452da87228c3d2bac801eb23c9293d353093a344e145a224b2->leave($__internal_3ca8ebd0febf6b452da87228c3d2bac801eb23c9293d353093a344e145a224b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eec96f3aae08e52f9a89777157c906813dec8f17632d128153716ef7155fded1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec96f3aae08e52f9a89777157c906813dec8f17632d128153716ef7155fded1->enter($__internal_eec96f3aae08e52f9a89777157c906813dec8f17632d128153716ef7155fded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a7e905f13cb513ca11926f5dd204bfd63e476577b678f1e672c611667b864ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7e905f13cb513ca11926f5dd204bfd63e476577b678f1e672c611667b864ee->enter($__internal_8a7e905f13cb513ca11926f5dd204bfd63e476577b678f1e672c611667b864ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8a7e905f13cb513ca11926f5dd204bfd63e476577b678f1e672c611667b864ee->leave($__internal_8a7e905f13cb513ca11926f5dd204bfd63e476577b678f1e672c611667b864ee_prof);

        
        $__internal_eec96f3aae08e52f9a89777157c906813dec8f17632d128153716ef7155fded1->leave($__internal_eec96f3aae08e52f9a89777157c906813dec8f17632d128153716ef7155fded1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
