<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_d8fc90a550cb695bad70ac7ca046347bc4a17dae308ebc5a624bf84f51163a11 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee3740a221f986c3d185e925a5c936b1ea2bf54e4d6964b83a0d3db36bdd1b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3740a221f986c3d185e925a5c936b1ea2bf54e4d6964b83a0d3db36bdd1b20->enter($__internal_ee3740a221f986c3d185e925a5c936b1ea2bf54e4d6964b83a0d3db36bdd1b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $__internal_0fdf10899833bf38d5f1417d3a6fa680f91b556504e1e27734412e9d467969ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdf10899833bf38d5f1417d3a6fa680f91b556504e1e27734412e9d467969ce->enter($__internal_0fdf10899833bf38d5f1417d3a6fa680f91b556504e1e27734412e9d467969ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3740a221f986c3d185e925a5c936b1ea2bf54e4d6964b83a0d3db36bdd1b20->leave($__internal_ee3740a221f986c3d185e925a5c936b1ea2bf54e4d6964b83a0d3db36bdd1b20_prof);

        
        $__internal_0fdf10899833bf38d5f1417d3a6fa680f91b556504e1e27734412e9d467969ce->leave($__internal_0fdf10899833bf38d5f1417d3a6fa680f91b556504e1e27734412e9d467969ce_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_3536a18310992bba00723a0194768dcc0f7319fd5ce5687b6933e7ebce77f538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3536a18310992bba00723a0194768dcc0f7319fd5ce5687b6933e7ebce77f538->enter($__internal_3536a18310992bba00723a0194768dcc0f7319fd5ce5687b6933e7ebce77f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_2d8d3b3c80b22fdc53d15c15f18843090cf861e03bd39c6626b8e4aa07f404ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8d3b3c80b22fdc53d15c15f18843090cf861e03bd39c6626b8e4aa07f404ed->enter($__internal_2d8d3b3c80b22fdc53d15c15f18843090cf861e03bd39c6626b8e4aa07f404ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_2d8d3b3c80b22fdc53d15c15f18843090cf861e03bd39c6626b8e4aa07f404ed->leave($__internal_2d8d3b3c80b22fdc53d15c15f18843090cf861e03bd39c6626b8e4aa07f404ed_prof);

        
        $__internal_3536a18310992bba00723a0194768dcc0f7319fd5ce5687b6933e7ebce77f538->leave($__internal_3536a18310992bba00723a0194768dcc0f7319fd5ce5687b6933e7ebce77f538_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_275730ee119cfd09ac6fe1cb09663f1271323b147213e989b897363dd4362448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275730ee119cfd09ac6fe1cb09663f1271323b147213e989b897363dd4362448->enter($__internal_275730ee119cfd09ac6fe1cb09663f1271323b147213e989b897363dd4362448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_ef8065adf6369c8a6fb13ec631d4a1bd7206009afc4a279423f1e3719b45fd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8065adf6369c8a6fb13ec631d4a1bd7206009afc4a279423f1e3719b45fd1b->enter($__internal_ef8065adf6369c8a6fb13ec631d4a1bd7206009afc4a279423f1e3719b45fd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_ef8065adf6369c8a6fb13ec631d4a1bd7206009afc4a279423f1e3719b45fd1b->leave($__internal_ef8065adf6369c8a6fb13ec631d4a1bd7206009afc4a279423f1e3719b45fd1b_prof);

        
        $__internal_275730ee119cfd09ac6fe1cb09663f1271323b147213e989b897363dd4362448->leave($__internal_275730ee119cfd09ac6fe1cb09663f1271323b147213e989b897363dd4362448_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_ab333d9728150d3f2d927b7656514c7dad798524c4cb1f18aedaecdec90c7e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab333d9728150d3f2d927b7656514c7dad798524c4cb1f18aedaecdec90c7e44->enter($__internal_ab333d9728150d3f2d927b7656514c7dad798524c4cb1f18aedaecdec90c7e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f02dad66e271d3edd77de2996ba8ab750819887aa5e993e1bd7fd8f78ab2e7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02dad66e271d3edd77de2996ba8ab750819887aa5e993e1bd7fd8f78ab2e7b8->enter($__internal_f02dad66e271d3edd77de2996ba8ab750819887aa5e993e1bd7fd8f78ab2e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_f02dad66e271d3edd77de2996ba8ab750819887aa5e993e1bd7fd8f78ab2e7b8->leave($__internal_f02dad66e271d3edd77de2996ba8ab750819887aa5e993e1bd7fd8f78ab2e7b8_prof);

        
        $__internal_ab333d9728150d3f2d927b7656514c7dad798524c4cb1f18aedaecdec90c7e44->leave($__internal_ab333d9728150d3f2d927b7656514c7dad798524c4cb1f18aedaecdec90c7e44_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_8fa378f0ad6aa5c0e139d195ccd61f16cf6203c6a999bce05307c739a841fa13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa378f0ad6aa5c0e139d195ccd61f16cf6203c6a999bce05307c739a841fa13->enter($__internal_8fa378f0ad6aa5c0e139d195ccd61f16cf6203c6a999bce05307c739a841fa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_0e8578155b92ad1259905cec540092847dd5a06f4f8a8d03985715c2999469d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8578155b92ad1259905cec540092847dd5a06f4f8a8d03985715c2999469d4->enter($__internal_0e8578155b92ad1259905cec540092847dd5a06f4f8a8d03985715c2999469d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_0e8578155b92ad1259905cec540092847dd5a06f4f8a8d03985715c2999469d4->leave($__internal_0e8578155b92ad1259905cec540092847dd5a06f4f8a8d03985715c2999469d4_prof);

        
        $__internal_8fa378f0ad6aa5c0e139d195ccd61f16cf6203c6a999bce05307c739a841fa13->leave($__internal_8fa378f0ad6aa5c0e139d195ccd61f16cf6203c6a999bce05307c739a841fa13_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
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
", "@SonataBlock/Block/block_container.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
