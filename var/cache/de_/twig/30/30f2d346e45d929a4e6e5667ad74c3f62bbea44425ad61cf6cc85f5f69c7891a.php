<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_598be89a91030112709aef46fe6f9bb7e8e091a702b6cb46b6ece96c37e74820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9782e9490ceac933b4b07f32fdb2a2cd5c7e3753068eea6993966c52bde5759e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9782e9490ceac933b4b07f32fdb2a2cd5c7e3753068eea6993966c52bde5759e->enter($__internal_9782e9490ceac933b4b07f32fdb2a2cd5c7e3753068eea6993966c52bde5759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_b32da20a94ff5dce0e00e625718b7ab332ed5d343add25ddd09beca992395a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32da20a94ff5dce0e00e625718b7ab332ed5d343add25ddd09beca992395a72->enter($__internal_b32da20a94ff5dce0e00e625718b7ab332ed5d343add25ddd09beca992395a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9782e9490ceac933b4b07f32fdb2a2cd5c7e3753068eea6993966c52bde5759e->leave($__internal_9782e9490ceac933b4b07f32fdb2a2cd5c7e3753068eea6993966c52bde5759e_prof);

        
        $__internal_b32da20a94ff5dce0e00e625718b7ab332ed5d343add25ddd09beca992395a72->leave($__internal_b32da20a94ff5dce0e00e625718b7ab332ed5d343add25ddd09beca992395a72_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_54bd8c269b472b20a58b994d93ff88534136329fc85a34eead1b010fba19aafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bd8c269b472b20a58b994d93ff88534136329fc85a34eead1b010fba19aafe->enter($__internal_54bd8c269b472b20a58b994d93ff88534136329fc85a34eead1b010fba19aafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9826228254b1046c3a4378f04a2d3c903aee763b8361cf8286ef694a7f3e91cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9826228254b1046c3a4378f04a2d3c903aee763b8361cf8286ef694a7f3e91cc->enter($__internal_9826228254b1046c3a4378f04a2d3c903aee763b8361cf8286ef694a7f3e91cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_9826228254b1046c3a4378f04a2d3c903aee763b8361cf8286ef694a7f3e91cc->leave($__internal_9826228254b1046c3a4378f04a2d3c903aee763b8361cf8286ef694a7f3e91cc_prof);

        
        $__internal_54bd8c269b472b20a58b994d93ff88534136329fc85a34eead1b010fba19aafe->leave($__internal_54bd8c269b472b20a58b994d93ff88534136329fc85a34eead1b010fba19aafe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
