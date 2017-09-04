<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_ad91039d828c3981177ff4ed803c91f4be0327faea1eca1e9d3bfe755ae8a7ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_277686ab91e5a3273df2a5a5161e09b36846b6c455fdc9be2ad8ba3a7b085707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277686ab91e5a3273df2a5a5161e09b36846b6c455fdc9be2ad8ba3a7b085707->enter($__internal_277686ab91e5a3273df2a5a5161e09b36846b6c455fdc9be2ad8ba3a7b085707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_974ec8ea6ab7f8d5af118b292a4c362595e308a341605124a0c06619bc66098a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974ec8ea6ab7f8d5af118b292a4c362595e308a341605124a0c06619bc66098a->enter($__internal_974ec8ea6ab7f8d5af118b292a4c362595e308a341605124a0c06619bc66098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277686ab91e5a3273df2a5a5161e09b36846b6c455fdc9be2ad8ba3a7b085707->leave($__internal_277686ab91e5a3273df2a5a5161e09b36846b6c455fdc9be2ad8ba3a7b085707_prof);

        
        $__internal_974ec8ea6ab7f8d5af118b292a4c362595e308a341605124a0c06619bc66098a->leave($__internal_974ec8ea6ab7f8d5af118b292a4c362595e308a341605124a0c06619bc66098a_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_55640efb41ad0b9820387d2e23bbce833ad61347dfc2fd5065b749595d7f6b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55640efb41ad0b9820387d2e23bbce833ad61347dfc2fd5065b749595d7f6b5b->enter($__internal_55640efb41ad0b9820387d2e23bbce833ad61347dfc2fd5065b749595d7f6b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_1612ed96c817c20f33cb393853402ada2660a5e11e2060b5b5ebca2a58589fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1612ed96c817c20f33cb393853402ada2660a5e11e2060b5b5ebca2a58589fff->enter($__internal_1612ed96c817c20f33cb393853402ada2660a5e11e2060b5b5ebca2a58589fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_1612ed96c817c20f33cb393853402ada2660a5e11e2060b5b5ebca2a58589fff->leave($__internal_1612ed96c817c20f33cb393853402ada2660a5e11e2060b5b5ebca2a58589fff_prof);

        
        $__internal_55640efb41ad0b9820387d2e23bbce833ad61347dfc2fd5065b749595d7f6b5b->leave($__internal_55640efb41ad0b9820387d2e23bbce833ad61347dfc2fd5065b749595d7f6b5b_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_2707239732bfd0b172eaa4e203a8e0b51b653711be275a8ce5b278e8b8d0369b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2707239732bfd0b172eaa4e203a8e0b51b653711be275a8ce5b278e8b8d0369b->enter($__internal_2707239732bfd0b172eaa4e203a8e0b51b653711be275a8ce5b278e8b8d0369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_940c580667157ea6e05002b6834a352ae507ffb7ad1d651546728b14af55ac3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940c580667157ea6e05002b6834a352ae507ffb7ad1d651546728b14af55ac3f->enter($__internal_940c580667157ea6e05002b6834a352ae507ffb7ad1d651546728b14af55ac3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_940c580667157ea6e05002b6834a352ae507ffb7ad1d651546728b14af55ac3f->leave($__internal_940c580667157ea6e05002b6834a352ae507ffb7ad1d651546728b14af55ac3f_prof);

        
        $__internal_2707239732bfd0b172eaa4e203a8e0b51b653711be275a8ce5b278e8b8d0369b->leave($__internal_2707239732bfd0b172eaa4e203a8e0b51b653711be275a8ce5b278e8b8d0369b_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_355d2dc67316b5bd6e5cfbd34e4f73566f89b8dd62e9f11f9912ff3908303f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355d2dc67316b5bd6e5cfbd34e4f73566f89b8dd62e9f11f9912ff3908303f57->enter($__internal_355d2dc67316b5bd6e5cfbd34e4f73566f89b8dd62e9f11f9912ff3908303f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0cc7f1b85a7163b41adeefce26ce09e9e02132b9fde796a099551e66faffd99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc7f1b85a7163b41adeefce26ce09e9e02132b9fde796a099551e66faffd99d->enter($__internal_0cc7f1b85a7163b41adeefce26ce09e9e02132b9fde796a099551e66faffd99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_0cc7f1b85a7163b41adeefce26ce09e9e02132b9fde796a099551e66faffd99d->leave($__internal_0cc7f1b85a7163b41adeefce26ce09e9e02132b9fde796a099551e66faffd99d_prof);

        
        $__internal_355d2dc67316b5bd6e5cfbd34e4f73566f89b8dd62e9f11f9912ff3908303f57->leave($__internal_355d2dc67316b5bd6e5cfbd34e4f73566f89b8dd62e9f11f9912ff3908303f57_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_39384161b00743299d2b0b3534a8203ace0326fca642415919297dc0d83df7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39384161b00743299d2b0b3534a8203ace0326fca642415919297dc0d83df7e6->enter($__internal_39384161b00743299d2b0b3534a8203ace0326fca642415919297dc0d83df7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_11fc6c453e27d55fe493a8c553b8571ed2e0c90478996f1ded3b69daa432abb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fc6c453e27d55fe493a8c553b8571ed2e0c90478996f1ded3b69daa432abb0->enter($__internal_11fc6c453e27d55fe493a8c553b8571ed2e0c90478996f1ded3b69daa432abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_11fc6c453e27d55fe493a8c553b8571ed2e0c90478996f1ded3b69daa432abb0->leave($__internal_11fc6c453e27d55fe493a8c553b8571ed2e0c90478996f1ded3b69daa432abb0_prof);

        
        $__internal_39384161b00743299d2b0b3534a8203ace0326fca642415919297dc0d83df7e6->leave($__internal_39384161b00743299d2b0b3534a8203ace0326fca642415919297dc0d83df7e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
