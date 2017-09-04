<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_884ac82e70d47ac00b959d68f89d6821f6171d5577c0a5b210f5571528cc5766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f5ce48abf21fd1943db2ee8bd985332c0d5dd5eda82ef821429bc1240e543ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5ce48abf21fd1943db2ee8bd985332c0d5dd5eda82ef821429bc1240e543ef->enter($__internal_3f5ce48abf21fd1943db2ee8bd985332c0d5dd5eda82ef821429bc1240e543ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_c9bd4f921310c3f356f886861a0dce4b38d13498bdee4c7aa0e0fbce0ac00c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bd4f921310c3f356f886861a0dce4b38d13498bdee4c7aa0e0fbce0ac00c12->enter($__internal_c9bd4f921310c3f356f886861a0dce4b38d13498bdee4c7aa0e0fbce0ac00c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_3f5ce48abf21fd1943db2ee8bd985332c0d5dd5eda82ef821429bc1240e543ef->leave($__internal_3f5ce48abf21fd1943db2ee8bd985332c0d5dd5eda82ef821429bc1240e543ef_prof);

        
        $__internal_c9bd4f921310c3f356f886861a0dce4b38d13498bdee4c7aa0e0fbce0ac00c12->leave($__internal_c9bd4f921310c3f356f886861a0dce4b38d13498bdee4c7aa0e0fbce0ac00c12_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2a371383b5843a0b2feaebf3bb6b51a5ab5fab9096b804ce2ad8fea7677c8352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a371383b5843a0b2feaebf3bb6b51a5ab5fab9096b804ce2ad8fea7677c8352->enter($__internal_2a371383b5843a0b2feaebf3bb6b51a5ab5fab9096b804ce2ad8fea7677c8352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5ff1c11ecbe28a9a3e2f8a5cf500f9ec933f6dfe0dfd0958febba67a31489b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff1c11ecbe28a9a3e2f8a5cf500f9ec933f6dfe0dfd0958febba67a31489b7b->enter($__internal_5ff1c11ecbe28a9a3e2f8a5cf500f9ec933f6dfe0dfd0958febba67a31489b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_5ff1c11ecbe28a9a3e2f8a5cf500f9ec933f6dfe0dfd0958febba67a31489b7b->leave($__internal_5ff1c11ecbe28a9a3e2f8a5cf500f9ec933f6dfe0dfd0958febba67a31489b7b_prof);

        
        $__internal_2a371383b5843a0b2feaebf3bb6b51a5ab5fab9096b804ce2ad8fea7677c8352->leave($__internal_2a371383b5843a0b2feaebf3bb6b51a5ab5fab9096b804ce2ad8fea7677c8352_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_4f8eca3efdcfc37d50ddb1f04a1999854337bf1617f21cff965094d60d0f0688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8eca3efdcfc37d50ddb1f04a1999854337bf1617f21cff965094d60d0f0688->enter($__internal_4f8eca3efdcfc37d50ddb1f04a1999854337bf1617f21cff965094d60d0f0688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4173ebedb8d469c09b592e2c506456f6a5ca0209b5a0332e00f121837b73f049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4173ebedb8d469c09b592e2c506456f6a5ca0209b5a0332e00f121837b73f049->enter($__internal_4173ebedb8d469c09b592e2c506456f6a5ca0209b5a0332e00f121837b73f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_4173ebedb8d469c09b592e2c506456f6a5ca0209b5a0332e00f121837b73f049->leave($__internal_4173ebedb8d469c09b592e2c506456f6a5ca0209b5a0332e00f121837b73f049_prof);

        
        $__internal_4f8eca3efdcfc37d50ddb1f04a1999854337bf1617f21cff965094d60d0f0688->leave($__internal_4f8eca3efdcfc37d50ddb1f04a1999854337bf1617f21cff965094d60d0f0688_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_645f4d78a5e9107c388a00593ea0844edf4ae9d96467175ade6b2291f70c045b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645f4d78a5e9107c388a00593ea0844edf4ae9d96467175ade6b2291f70c045b->enter($__internal_645f4d78a5e9107c388a00593ea0844edf4ae9d96467175ade6b2291f70c045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_a0c3a45d5dce6ec2f288193d7efcf04f89a6de8244fc702c4a78efa7a66e362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c3a45d5dce6ec2f288193d7efcf04f89a6de8244fc702c4a78efa7a66e362d->enter($__internal_a0c3a45d5dce6ec2f288193d7efcf04f89a6de8244fc702c4a78efa7a66e362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_a0c3a45d5dce6ec2f288193d7efcf04f89a6de8244fc702c4a78efa7a66e362d->leave($__internal_a0c3a45d5dce6ec2f288193d7efcf04f89a6de8244fc702c4a78efa7a66e362d_prof);

        
        $__internal_645f4d78a5e9107c388a00593ea0844edf4ae9d96467175ade6b2291f70c045b->leave($__internal_645f4d78a5e9107c388a00593ea0844edf4ae9d96467175ade6b2291f70c045b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
