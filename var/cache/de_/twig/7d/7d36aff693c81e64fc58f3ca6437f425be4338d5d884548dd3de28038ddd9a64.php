<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_598146ec957e24f62bcb74ba7ab7047355b7297da2c4e14a96dfc5eb6834346c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1be7668cd3933af17b10aaeb05c402d6fa02eee3a2460a0a497ba1b0fdc51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1be7668cd3933af17b10aaeb05c402d6fa02eee3a2460a0a497ba1b0fdc51d->enter($__internal_ec1be7668cd3933af17b10aaeb05c402d6fa02eee3a2460a0a497ba1b0fdc51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_8fab5b2722842a4b5477c32abd5588e0e2d1efaebfbba7ba7a04a4e2ffe5ad93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fab5b2722842a4b5477c32abd5588e0e2d1efaebfbba7ba7a04a4e2ffe5ad93->enter($__internal_8fab5b2722842a4b5477c32abd5588e0e2d1efaebfbba7ba7a04a4e2ffe5ad93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1be7668cd3933af17b10aaeb05c402d6fa02eee3a2460a0a497ba1b0fdc51d->leave($__internal_ec1be7668cd3933af17b10aaeb05c402d6fa02eee3a2460a0a497ba1b0fdc51d_prof);

        
        $__internal_8fab5b2722842a4b5477c32abd5588e0e2d1efaebfbba7ba7a04a4e2ffe5ad93->leave($__internal_8fab5b2722842a4b5477c32abd5588e0e2d1efaebfbba7ba7a04a4e2ffe5ad93_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ddba87a24b300231317f90fd5430168b7990ddb8ce42e602f0682d6bedeb3c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddba87a24b300231317f90fd5430168b7990ddb8ce42e602f0682d6bedeb3c78->enter($__internal_ddba87a24b300231317f90fd5430168b7990ddb8ce42e602f0682d6bedeb3c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_d276c178265328ccee2cc97eb4e1b4b45bd62c7a3aa6f621a03480f466b2e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d276c178265328ccee2cc97eb4e1b4b45bd62c7a3aa6f621a03480f466b2e1d4->enter($__internal_d276c178265328ccee2cc97eb4e1b4b45bd62c7a3aa6f621a03480f466b2e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d276c178265328ccee2cc97eb4e1b4b45bd62c7a3aa6f621a03480f466b2e1d4->leave($__internal_d276c178265328ccee2cc97eb4e1b4b45bd62c7a3aa6f621a03480f466b2e1d4_prof);

        
        $__internal_ddba87a24b300231317f90fd5430168b7990ddb8ce42e602f0682d6bedeb3c78->leave($__internal_ddba87a24b300231317f90fd5430168b7990ddb8ce42e602f0682d6bedeb3c78_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5072fcd59ce7443a39343748c6cf523245ecf159f732b8611c7cf9acfad3ee9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5072fcd59ce7443a39343748c6cf523245ecf159f732b8611c7cf9acfad3ee9d->enter($__internal_5072fcd59ce7443a39343748c6cf523245ecf159f732b8611c7cf9acfad3ee9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_ead1346e0966cdebd22ef4645dc524d9eecb09aed2067f77516f3e6bd8828ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead1346e0966cdebd22ef4645dc524d9eecb09aed2067f77516f3e6bd8828ba9->enter($__internal_ead1346e0966cdebd22ef4645dc524d9eecb09aed2067f77516f3e6bd8828ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ead1346e0966cdebd22ef4645dc524d9eecb09aed2067f77516f3e6bd8828ba9->leave($__internal_ead1346e0966cdebd22ef4645dc524d9eecb09aed2067f77516f3e6bd8828ba9_prof);

        
        $__internal_5072fcd59ce7443a39343748c6cf523245ecf159f732b8611c7cf9acfad3ee9d->leave($__internal_5072fcd59ce7443a39343748c6cf523245ecf159f732b8611c7cf9acfad3ee9d_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a18f743f8e4cd191b1b1a1b3f7985eff3a0ee9db6e322a0c56c42c79a1b2ae91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18f743f8e4cd191b1b1a1b3f7985eff3a0ee9db6e322a0c56c42c79a1b2ae91->enter($__internal_a18f743f8e4cd191b1b1a1b3f7985eff3a0ee9db6e322a0c56c42c79a1b2ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_7a299cd8cef49f72fa319845e830098f1de02ea76258c9f968cfa9ef2a2765c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a299cd8cef49f72fa319845e830098f1de02ea76258c9f968cfa9ef2a2765c9->enter($__internal_7a299cd8cef49f72fa319845e830098f1de02ea76258c9f968cfa9ef2a2765c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7a299cd8cef49f72fa319845e830098f1de02ea76258c9f968cfa9ef2a2765c9->leave($__internal_7a299cd8cef49f72fa319845e830098f1de02ea76258c9f968cfa9ef2a2765c9_prof);

        
        $__internal_a18f743f8e4cd191b1b1a1b3f7985eff3a0ee9db6e322a0c56c42c79a1b2ae91->leave($__internal_a18f743f8e4cd191b1b1a1b3f7985eff3a0ee9db6e322a0c56c42c79a1b2ae91_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_831d5c65f55556383bf6b348e4a602365f24dbf28335dd212ec71f3c829be48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831d5c65f55556383bf6b348e4a602365f24dbf28335dd212ec71f3c829be48b->enter($__internal_831d5c65f55556383bf6b348e4a602365f24dbf28335dd212ec71f3c829be48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_411036efa2fb410a99d4d29273fb6821435a5c3e560084851fdc98c3c3452851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411036efa2fb410a99d4d29273fb6821435a5c3e560084851fdc98c3c3452851->enter($__internal_411036efa2fb410a99d4d29273fb6821435a5c3e560084851fdc98c3c3452851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_411036efa2fb410a99d4d29273fb6821435a5c3e560084851fdc98c3c3452851->leave($__internal_411036efa2fb410a99d4d29273fb6821435a5c3e560084851fdc98c3c3452851_prof);

        
        $__internal_831d5c65f55556383bf6b348e4a602365f24dbf28335dd212ec71f3c829be48b->leave($__internal_831d5c65f55556383bf6b348e4a602365f24dbf28335dd212ec71f3c829be48b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1f7c43ac86b450dd5301b861781bb56175d766f42a94e694f7685f6276b2934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f7c43ac86b450dd5301b861781bb56175d766f42a94e694f7685f6276b2934->enter($__internal_b1f7c43ac86b450dd5301b861781bb56175d766f42a94e694f7685f6276b2934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b277ff425872cd4556798a624588dbcf2479486465c79760488b42201a0b92ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b277ff425872cd4556798a624588dbcf2479486465c79760488b42201a0b92ff->enter($__internal_b277ff425872cd4556798a624588dbcf2479486465c79760488b42201a0b92ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_b277ff425872cd4556798a624588dbcf2479486465c79760488b42201a0b92ff->leave($__internal_b277ff425872cd4556798a624588dbcf2479486465c79760488b42201a0b92ff_prof);

        
        $__internal_b1f7c43ac86b450dd5301b861781bb56175d766f42a94e694f7685f6276b2934->leave($__internal_b1f7c43ac86b450dd5301b861781bb56175d766f42a94e694f7685f6276b2934_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_1d18dd2d438e8fd81cf978f4dd6eabc2f77b55d5f02901b3497151bd20845b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d18dd2d438e8fd81cf978f4dd6eabc2f77b55d5f02901b3497151bd20845b35->enter($__internal_1d18dd2d438e8fd81cf978f4dd6eabc2f77b55d5f02901b3497151bd20845b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_d9ccd785c74ff0c8b03f7fea567c5125400358a0320ada0ee2acaea234f6e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ccd785c74ff0c8b03f7fea567c5125400358a0320ada0ee2acaea234f6e24a->enter($__internal_d9ccd785c74ff0c8b03f7fea567c5125400358a0320ada0ee2acaea234f6e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_d9ccd785c74ff0c8b03f7fea567c5125400358a0320ada0ee2acaea234f6e24a->leave($__internal_d9ccd785c74ff0c8b03f7fea567c5125400358a0320ada0ee2acaea234f6e24a_prof);

        
        $__internal_1d18dd2d438e8fd81cf978f4dd6eabc2f77b55d5f02901b3497151bd20845b35->leave($__internal_1d18dd2d438e8fd81cf978f4dd6eabc2f77b55d5f02901b3497151bd20845b35_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f84784acd4f66332d7b87c8a897b53de3f9ce611f55f857eb3040cfe8e76a49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84784acd4f66332d7b87c8a897b53de3f9ce611f55f857eb3040cfe8e76a49e->enter($__internal_f84784acd4f66332d7b87c8a897b53de3f9ce611f55f857eb3040cfe8e76a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_602902cf6443d45784f6018c483d398804f09ddbfea20821913e59c76c1d38e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602902cf6443d45784f6018c483d398804f09ddbfea20821913e59c76c1d38e9->enter($__internal_602902cf6443d45784f6018c483d398804f09ddbfea20821913e59c76c1d38e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_602902cf6443d45784f6018c483d398804f09ddbfea20821913e59c76c1d38e9->leave($__internal_602902cf6443d45784f6018c483d398804f09ddbfea20821913e59c76c1d38e9_prof);

        
        $__internal_f84784acd4f66332d7b87c8a897b53de3f9ce611f55f857eb3040cfe8e76a49e->leave($__internal_f84784acd4f66332d7b87c8a897b53de3f9ce611f55f857eb3040cfe8e76a49e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
