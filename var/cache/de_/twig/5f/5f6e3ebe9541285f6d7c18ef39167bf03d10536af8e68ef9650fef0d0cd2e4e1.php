<?php

/* @SonataAdmin/CRUD/base_array_macro.html.twig */
class __TwigTemplate_399ae59816701cd4c2657e37db8828756f9bb74bf22f723dbd496ea9c5ea395c extends Twig_Template
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
        $__internal_a625cc04983895580000d79fb06e1b979d0592096287d71fd1c1edf80e23bbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a625cc04983895580000d79fb06e1b979d0592096287d71fd1c1edf80e23bbcf->enter($__internal_a625cc04983895580000d79fb06e1b979d0592096287d71fd1c1edf80e23bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        $__internal_b1ee4cf148dca0206c56e65bf33c3f4fb73c3694ed91b194cb8b0d782ab73dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ee4cf148dca0206c56e65bf33c3f4fb73c3694ed91b194cb8b0d782ab73dc2->enter($__internal_b1ee4cf148dca0206c56e65bf33c3f4fb73c3694ed91b194cb8b0d782ab73dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_array_macro.html.twig"));

        
        $__internal_a625cc04983895580000d79fb06e1b979d0592096287d71fd1c1edf80e23bbcf->leave($__internal_a625cc04983895580000d79fb06e1b979d0592096287d71fd1c1edf80e23bbcf_prof);

        
        $__internal_b1ee4cf148dca0206c56e65bf33c3f4fb73c3694ed91b194cb8b0d782ab73dc2->leave($__internal_b1ee4cf148dca0206c56e65bf33c3f4fb73c3694ed91b194cb8b0d782ab73dc2_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cf15839a91a6d3acfa65e033765889782310407eda6e0fa9f76724ca65988ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cf15839a91a6d3acfa65e033765889782310407eda6e0fa9f76724ca65988ea2->enter($__internal_cf15839a91a6d3acfa65e033765889782310407eda6e0fa9f76724ca65988ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_6af8c17902cc224a827a391f1143489ab2364facc7060cfdc569155cabff4c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6af8c17902cc224a827a391f1143489ab2364facc7060cfdc569155cabff4c15->enter($__internal_6af8c17902cc224a827a391f1143489ab2364facc7060cfdc569155cabff4c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"], 1 => (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))), "method");
                    echo "]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "
        ";
                // line 19
                if (( !$this->getAttribute($context["loop"], "last", array()) &&  !(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                    // line 20
                    echo "            <br>
        ";
                }
                // line 22
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6af8c17902cc224a827a391f1143489ab2364facc7060cfdc569155cabff4c15->leave($__internal_6af8c17902cc224a827a391f1143489ab2364facc7060cfdc569155cabff4c15_prof);

            
            $__internal_cf15839a91a6d3acfa65e033765889782310407eda6e0fa9f76724ca65988ea2->leave($__internal_cf15839a91a6d3acfa65e033765889782310407eda6e0fa9f76724ca65988ea2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 20,  92 => 19,  89 => 18,  81 => 16,  73 => 14,  70 => 13,  52 => 12,  33 => 11,);
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
{% macro render_array(value, inline) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "@SonataAdmin/CRUD/base_array_macro.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_array_macro.html.twig");
    }
}
