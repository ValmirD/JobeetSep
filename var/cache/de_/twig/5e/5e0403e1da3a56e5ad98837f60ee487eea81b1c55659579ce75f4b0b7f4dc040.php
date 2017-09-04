<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ba9e87230870608c3d33ce59af7f393414f42abfe3dcbf6325fed6f69976c0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_967d9058a0d422a82f7371eef58278eded23ce70f5f704cc2bdeef49c7aacb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967d9058a0d422a82f7371eef58278eded23ce70f5f704cc2bdeef49c7aacb1a->enter($__internal_967d9058a0d422a82f7371eef58278eded23ce70f5f704cc2bdeef49c7aacb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7aec946954a3f8621727cf00bfe482ec174ea6c2844c35814634e95890ec2f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aec946954a3f8621727cf00bfe482ec174ea6c2844c35814634e95890ec2f3c->enter($__internal_7aec946954a3f8621727cf00bfe482ec174ea6c2844c35814634e95890ec2f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_967d9058a0d422a82f7371eef58278eded23ce70f5f704cc2bdeef49c7aacb1a->leave($__internal_967d9058a0d422a82f7371eef58278eded23ce70f5f704cc2bdeef49c7aacb1a_prof);

        
        $__internal_7aec946954a3f8621727cf00bfe482ec174ea6c2844c35814634e95890ec2f3c->leave($__internal_7aec946954a3f8621727cf00bfe482ec174ea6c2844c35814634e95890ec2f3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_585fc8e58cac2b2b1e2926e9f02ba7a61ee2b26a700b3511e49b9c833dab106f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585fc8e58cac2b2b1e2926e9f02ba7a61ee2b26a700b3511e49b9c833dab106f->enter($__internal_585fc8e58cac2b2b1e2926e9f02ba7a61ee2b26a700b3511e49b9c833dab106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3a7a1162c927f1a76ad443855a441fb96d42f72ff9b3f4293fab470b3e8a67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a7a1162c927f1a76ad443855a441fb96d42f72ff9b3f4293fab470b3e8a67c->enter($__internal_d3a7a1162c927f1a76ad443855a441fb96d42f72ff9b3f4293fab470b3e8a67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d3a7a1162c927f1a76ad443855a441fb96d42f72ff9b3f4293fab470b3e8a67c->leave($__internal_d3a7a1162c927f1a76ad443855a441fb96d42f72ff9b3f4293fab470b3e8a67c_prof);

        
        $__internal_585fc8e58cac2b2b1e2926e9f02ba7a61ee2b26a700b3511e49b9c833dab106f->leave($__internal_585fc8e58cac2b2b1e2926e9f02ba7a61ee2b26a700b3511e49b9c833dab106f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_506e406e373426f488bb4b08d8777acf09aaa7936a229a87d6db62f9cbdf76f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506e406e373426f488bb4b08d8777acf09aaa7936a229a87d6db62f9cbdf76f3->enter($__internal_506e406e373426f488bb4b08d8777acf09aaa7936a229a87d6db62f9cbdf76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15eede19870bd2cea70c5f244450056fbfe676c736d59eae5be987cc9a183479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15eede19870bd2cea70c5f244450056fbfe676c736d59eae5be987cc9a183479->enter($__internal_15eede19870bd2cea70c5f244450056fbfe676c736d59eae5be987cc9a183479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15eede19870bd2cea70c5f244450056fbfe676c736d59eae5be987cc9a183479->leave($__internal_15eede19870bd2cea70c5f244450056fbfe676c736d59eae5be987cc9a183479_prof);

        
        $__internal_506e406e373426f488bb4b08d8777acf09aaa7936a229a87d6db62f9cbdf76f3->leave($__internal_506e406e373426f488bb4b08d8777acf09aaa7936a229a87d6db62f9cbdf76f3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_70f35e10dd699ef29385708b0a5b1e9046206a8530e511ccfd5775321ec1845b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f35e10dd699ef29385708b0a5b1e9046206a8530e511ccfd5775321ec1845b->enter($__internal_70f35e10dd699ef29385708b0a5b1e9046206a8530e511ccfd5775321ec1845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c03dc95be2d6a61721f5d8b19eb15f9697f2c01152c5536a3ca1dc693e8cc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c03dc95be2d6a61721f5d8b19eb15f9697f2c01152c5536a3ca1dc693e8cc5b->enter($__internal_3c03dc95be2d6a61721f5d8b19eb15f9697f2c01152c5536a3ca1dc693e8cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3c03dc95be2d6a61721f5d8b19eb15f9697f2c01152c5536a3ca1dc693e8cc5b->leave($__internal_3c03dc95be2d6a61721f5d8b19eb15f9697f2c01152c5536a3ca1dc693e8cc5b_prof);

        
        $__internal_70f35e10dd699ef29385708b0a5b1e9046206a8530e511ccfd5775321ec1845b->leave($__internal_70f35e10dd699ef29385708b0a5b1e9046206a8530e511ccfd5775321ec1845b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
