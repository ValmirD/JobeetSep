<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_24f945b769a0ce17a981c3968234cae1c31232fea18c7e9dc3ae329417b2b7c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d9c4cc8e560fe58125fec647c28266ddfcc8161cf0840621afa22af926c4d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9c4cc8e560fe58125fec647c28266ddfcc8161cf0840621afa22af926c4d8a->enter($__internal_4d9c4cc8e560fe58125fec647c28266ddfcc8161cf0840621afa22af926c4d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_7fa0499b9b543419a8645a5dfa1be5a070249ab16cd94a4e3152286356490b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa0499b9b543419a8645a5dfa1be5a070249ab16cd94a4e3152286356490b03->enter($__internal_7fa0499b9b543419a8645a5dfa1be5a070249ab16cd94a4e3152286356490b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9c4cc8e560fe58125fec647c28266ddfcc8161cf0840621afa22af926c4d8a->leave($__internal_4d9c4cc8e560fe58125fec647c28266ddfcc8161cf0840621afa22af926c4d8a_prof);

        
        $__internal_7fa0499b9b543419a8645a5dfa1be5a070249ab16cd94a4e3152286356490b03->leave($__internal_7fa0499b9b543419a8645a5dfa1be5a070249ab16cd94a4e3152286356490b03_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5dd85e139f125ad7b2271320f8a55f5a5f457423ad01198c305adb49bd2bddc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd85e139f125ad7b2271320f8a55f5a5f457423ad01198c305adb49bd2bddc2->enter($__internal_5dd85e139f125ad7b2271320f8a55f5a5f457423ad01198c305adb49bd2bddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_476800a2a506ee90594f9d7227bf3f1f9e3a4956ae7edd486bb41cb7828c509a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476800a2a506ee90594f9d7227bf3f1f9e3a4956ae7edd486bb41cb7828c509a->enter($__internal_476800a2a506ee90594f9d7227bf3f1f9e3a4956ae7edd486bb41cb7828c509a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_476800a2a506ee90594f9d7227bf3f1f9e3a4956ae7edd486bb41cb7828c509a->leave($__internal_476800a2a506ee90594f9d7227bf3f1f9e3a4956ae7edd486bb41cb7828c509a_prof);

        
        $__internal_5dd85e139f125ad7b2271320f8a55f5a5f457423ad01198c305adb49bd2bddc2->leave($__internal_5dd85e139f125ad7b2271320f8a55f5a5f457423ad01198c305adb49bd2bddc2_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
