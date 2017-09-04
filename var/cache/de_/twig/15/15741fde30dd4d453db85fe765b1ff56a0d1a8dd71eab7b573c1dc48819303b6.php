<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_586fe4c83964ec0b931003906f79fb4beb1eebc7d459a40c02eaa085c456f7ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5709cafe68b478830e06c6bcd4b6430d3d795dd891fefc8eab7a9d12cfce55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5709cafe68b478830e06c6bcd4b6430d3d795dd891fefc8eab7a9d12cfce55a->enter($__internal_e5709cafe68b478830e06c6bcd4b6430d3d795dd891fefc8eab7a9d12cfce55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_39a69b623ce9c6bbf922f8958d702ef1cddea6f4895a84293f51b618e4a730ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a69b623ce9c6bbf922f8958d702ef1cddea6f4895a84293f51b618e4a730ce->enter($__internal_39a69b623ce9c6bbf922f8958d702ef1cddea6f4895a84293f51b618e4a730ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_e5709cafe68b478830e06c6bcd4b6430d3d795dd891fefc8eab7a9d12cfce55a->leave($__internal_e5709cafe68b478830e06c6bcd4b6430d3d795dd891fefc8eab7a9d12cfce55a_prof);

        
        $__internal_39a69b623ce9c6bbf922f8958d702ef1cddea6f4895a84293f51b618e4a730ce->leave($__internal_39a69b623ce9c6bbf922f8958d702ef1cddea6f4895a84293f51b618e4a730ce_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_3f01f8840bb71bf55bf0c33c22648c54e14fd06e1aaa2e2f5a475d20e752d229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f01f8840bb71bf55bf0c33c22648c54e14fd06e1aaa2e2f5a475d20e752d229->enter($__internal_3f01f8840bb71bf55bf0c33c22648c54e14fd06e1aaa2e2f5a475d20e752d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_7de57909d6f099ef82065f0a978313c5aa962f2482d6e098624e5b04b602c9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de57909d6f099ef82065f0a978313c5aa962f2482d6e098624e5b04b602c9d6->enter($__internal_7de57909d6f099ef82065f0a978313c5aa962f2482d6e098624e5b04b602c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_7de57909d6f099ef82065f0a978313c5aa962f2482d6e098624e5b04b602c9d6->leave($__internal_7de57909d6f099ef82065f0a978313c5aa962f2482d6e098624e5b04b602c9d6_prof);

        
        $__internal_3f01f8840bb71bf55bf0c33c22648c54e14fd06e1aaa2e2f5a475d20e752d229->leave($__internal_3f01f8840bb71bf55bf0c33c22648c54e14fd06e1aaa2e2f5a475d20e752d229_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4bd2c0a61dc820696a1b89d9d330443ee0d717963bb0997be02032b16eba68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bd2c0a61dc820696a1b89d9d330443ee0d717963bb0997be02032b16eba68f->enter($__internal_c4bd2c0a61dc820696a1b89d9d330443ee0d717963bb0997be02032b16eba68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_61fde8c7898f35c86a0e43291de664544cdb51dc88c7b49197379b7d1551e116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fde8c7898f35c86a0e43291de664544cdb51dc88c7b49197379b7d1551e116->enter($__internal_61fde8c7898f35c86a0e43291de664544cdb51dc88c7b49197379b7d1551e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_61fde8c7898f35c86a0e43291de664544cdb51dc88c7b49197379b7d1551e116->leave($__internal_61fde8c7898f35c86a0e43291de664544cdb51dc88c7b49197379b7d1551e116_prof);

        
        $__internal_c4bd2c0a61dc820696a1b89d9d330443ee0d717963bb0997be02032b16eba68f->leave($__internal_c4bd2c0a61dc820696a1b89d9d330443ee0d717963bb0997be02032b16eba68f_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_91e456636871d467ada74304a0739129596f5beda431578733635a0a2b8e140d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e456636871d467ada74304a0739129596f5beda431578733635a0a2b8e140d->enter($__internal_91e456636871d467ada74304a0739129596f5beda431578733635a0a2b8e140d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_c69186a8da224bf716db2724a0272a9f3448dafc641cbb5a06966d0eb6cb0e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69186a8da224bf716db2724a0272a9f3448dafc641cbb5a06966d0eb6cb0e3a->enter($__internal_c69186a8da224bf716db2724a0272a9f3448dafc641cbb5a06966d0eb6cb0e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_c69186a8da224bf716db2724a0272a9f3448dafc641cbb5a06966d0eb6cb0e3a->leave($__internal_c69186a8da224bf716db2724a0272a9f3448dafc641cbb5a06966d0eb6cb0e3a_prof);

        
        $__internal_91e456636871d467ada74304a0739129596f5beda431578733635a0a2b8e140d->leave($__internal_91e456636871d467ada74304a0739129596f5beda431578733635a0a2b8e140d_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5201c25b6ac8b47bb718a9a81acc91c73ebcc749ac7c57cd8044b320555b2e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5201c25b6ac8b47bb718a9a81acc91c73ebcc749ac7c57cd8044b320555b2e64->enter($__internal_5201c25b6ac8b47bb718a9a81acc91c73ebcc749ac7c57cd8044b320555b2e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_05312dd244aedc05f810633f9cc56820d009b02de6406c4d8d66fff8fe9a09a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05312dd244aedc05f810633f9cc56820d009b02de6406c4d8d66fff8fe9a09a2->enter($__internal_05312dd244aedc05f810633f9cc56820d009b02de6406c4d8d66fff8fe9a09a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_05312dd244aedc05f810633f9cc56820d009b02de6406c4d8d66fff8fe9a09a2->leave($__internal_05312dd244aedc05f810633f9cc56820d009b02de6406c4d8d66fff8fe9a09a2_prof);

        
        $__internal_5201c25b6ac8b47bb718a9a81acc91c73ebcc749ac7c57cd8044b320555b2e64->leave($__internal_5201c25b6ac8b47bb718a9a81acc91c73ebcc749ac7c57cd8044b320555b2e64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
