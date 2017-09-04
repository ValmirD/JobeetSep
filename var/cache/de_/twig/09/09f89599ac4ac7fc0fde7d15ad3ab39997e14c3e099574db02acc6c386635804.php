<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_9c5824e07b38ae45113065d1beb672eac5d1aab694526248903e1c898b853978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77e93961e6aa0a9f57877693f0c4542d3d7cfa50d8f7ae6ccfbe8cf4a025ad12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e93961e6aa0a9f57877693f0c4542d3d7cfa50d8f7ae6ccfbe8cf4a025ad12->enter($__internal_77e93961e6aa0a9f57877693f0c4542d3d7cfa50d8f7ae6ccfbe8cf4a025ad12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_b1e55925da8d10e8e633b25252d8fbb13112530cf32414086b8d62337875b29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e55925da8d10e8e633b25252d8fbb13112530cf32414086b8d62337875b29d->enter($__internal_b1e55925da8d10e8e633b25252d8fbb13112530cf32414086b8d62337875b29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_77e93961e6aa0a9f57877693f0c4542d3d7cfa50d8f7ae6ccfbe8cf4a025ad12->leave($__internal_77e93961e6aa0a9f57877693f0c4542d3d7cfa50d8f7ae6ccfbe8cf4a025ad12_prof);

        
        $__internal_b1e55925da8d10e8e633b25252d8fbb13112530cf32414086b8d62337875b29d->leave($__internal_b1e55925da8d10e8e633b25252d8fbb13112530cf32414086b8d62337875b29d_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_cffd6dfb2046087500a9ec07e8900773ab943e56fbc66c7bd334ef6888121f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffd6dfb2046087500a9ec07e8900773ab943e56fbc66c7bd334ef6888121f89->enter($__internal_cffd6dfb2046087500a9ec07e8900773ab943e56fbc66c7bd334ef6888121f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_af24141a07a4f5f7404f668104bb55245bc6d487e0256b1995f16b51419168a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af24141a07a4f5f7404f668104bb55245bc6d487e0256b1995f16b51419168a8->enter($__internal_af24141a07a4f5f7404f668104bb55245bc6d487e0256b1995f16b51419168a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_af24141a07a4f5f7404f668104bb55245bc6d487e0256b1995f16b51419168a8->leave($__internal_af24141a07a4f5f7404f668104bb55245bc6d487e0256b1995f16b51419168a8_prof);

        
        $__internal_cffd6dfb2046087500a9ec07e8900773ab943e56fbc66c7bd334ef6888121f89->leave($__internal_cffd6dfb2046087500a9ec07e8900773ab943e56fbc66c7bd334ef6888121f89_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
