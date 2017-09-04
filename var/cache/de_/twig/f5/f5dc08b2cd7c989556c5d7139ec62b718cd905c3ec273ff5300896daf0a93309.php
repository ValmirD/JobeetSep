<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_6e7548e4886673ce85877cef7c801df73061ee566e2cbdce193b5c3898f49948 extends Twig_Template
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
        $__internal_0a5507d4124761e1136e7675a9644cad891ac0e709a4e89db8eb00c99ba27eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5507d4124761e1136e7675a9644cad891ac0e709a4e89db8eb00c99ba27eb1->enter($__internal_0a5507d4124761e1136e7675a9644cad891ac0e709a4e89db8eb00c99ba27eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        $__internal_e37fe2035a4d9f5c65f582181df44537ecb2d67e832e1ffb182c61adb21adbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37fe2035a4d9f5c65f582181df44537ecb2d67e832e1ffb182c61adb21adbb6->enter($__internal_e37fe2035a4d9f5c65f582181df44537ecb2d67e832e1ffb182c61adb21adbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_0a5507d4124761e1136e7675a9644cad891ac0e709a4e89db8eb00c99ba27eb1->leave($__internal_0a5507d4124761e1136e7675a9644cad891ac0e709a4e89db8eb00c99ba27eb1_prof);

        
        $__internal_e37fe2035a4d9f5c65f582181df44537ecb2d67e832e1ffb182c61adb21adbb6->leave($__internal_e37fe2035a4d9f5c65f582181df44537ecb2d67e832e1ffb182c61adb21adbb6_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_73f80b25d2ada4badcdcff321a34b29876505d544e078cf221be3f644c517caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f80b25d2ada4badcdcff321a34b29876505d544e078cf221be3f644c517caa->enter($__internal_73f80b25d2ada4badcdcff321a34b29876505d544e078cf221be3f644c517caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_817b09aae6db127c27ee2aa3e0f0f9e6eaa7c21d7f3bb71363cade8e9dbc1cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817b09aae6db127c27ee2aa3e0f0f9e6eaa7c21d7f3bb71363cade8e9dbc1cea->enter($__internal_817b09aae6db127c27ee2aa3e0f0f9e6eaa7c21d7f3bb71363cade8e9dbc1cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_817b09aae6db127c27ee2aa3e0f0f9e6eaa7c21d7f3bb71363cade8e9dbc1cea->leave($__internal_817b09aae6db127c27ee2aa3e0f0f9e6eaa7c21d7f3bb71363cade8e9dbc1cea_prof);

        
        $__internal_73f80b25d2ada4badcdcff321a34b29876505d544e078cf221be3f644c517caa->leave($__internal_73f80b25d2ada4badcdcff321a34b29876505d544e078cf221be3f644c517caa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
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
", "@SonataCore/Form/colorpicker.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\core-bundle\\Resources\\views\\Form\\colorpicker.html.twig");
    }
}
