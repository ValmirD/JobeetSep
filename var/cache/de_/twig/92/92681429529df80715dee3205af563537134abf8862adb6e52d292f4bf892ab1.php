<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_6b1d9fc43193eb954bad77fb242abaf824ffeb411de81c5b141e5081e91e18be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96b933f384ea8c95f5f43cb229b222d5dbad68919b4c5879af4a44d8b5ab5752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b933f384ea8c95f5f43cb229b222d5dbad68919b4c5879af4a44d8b5ab5752->enter($__internal_96b933f384ea8c95f5f43cb229b222d5dbad68919b4c5879af4a44d8b5ab5752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_0fdcb89d733119afe98cb325b192ed238e547982f5d7591247f1c31c88633a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdcb89d733119afe98cb325b192ed238e547982f5d7591247f1c31c88633a2d->enter($__internal_0fdcb89d733119afe98cb325b192ed238e547982f5d7591247f1c31c88633a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_96b933f384ea8c95f5f43cb229b222d5dbad68919b4c5879af4a44d8b5ab5752->leave($__internal_96b933f384ea8c95f5f43cb229b222d5dbad68919b4c5879af4a44d8b5ab5752_prof);

        
        $__internal_0fdcb89d733119afe98cb325b192ed238e547982f5d7591247f1c31c88633a2d->leave($__internal_0fdcb89d733119afe98cb325b192ed238e547982f5d7591247f1c31c88633a2d_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_becd60bfdc5a662d8efe5ae73b26ecf277e091679b0d119dab6d6b0a6974e112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becd60bfdc5a662d8efe5ae73b26ecf277e091679b0d119dab6d6b0a6974e112->enter($__internal_becd60bfdc5a662d8efe5ae73b26ecf277e091679b0d119dab6d6b0a6974e112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_ed2f235e506fa4bd4797cb6d9076a84b390f146c0344fafd563e33fb72891d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2f235e506fa4bd4797cb6d9076a84b390f146c0344fafd563e33fb72891d9c->enter($__internal_ed2f235e506fa4bd4797cb6d9076a84b390f146c0344fafd563e33fb72891d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ed2f235e506fa4bd4797cb6d9076a84b390f146c0344fafd563e33fb72891d9c->leave($__internal_ed2f235e506fa4bd4797cb6d9076a84b390f146c0344fafd563e33fb72891d9c_prof);

        
        $__internal_becd60bfdc5a662d8efe5ae73b26ecf277e091679b0d119dab6d6b0a6974e112->leave($__internal_becd60bfdc5a662d8efe5ae73b26ecf277e091679b0d119dab6d6b0a6974e112_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_4b95c6285570bccc196358c9e17c8e8097e8b2b4a29a55a56118c8b2b4726ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b95c6285570bccc196358c9e17c8e8097e8b2b4a29a55a56118c8b2b4726ea9->enter($__internal_4b95c6285570bccc196358c9e17c8e8097e8b2b4a29a55a56118c8b2b4726ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_fe72fd41e2bcbd5f81420afc4f4e23f6612c86fdb44f7b52d858a86e93b07ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe72fd41e2bcbd5f81420afc4f4e23f6612c86fdb44f7b52d858a86e93b07ad8->enter($__internal_fe72fd41e2bcbd5f81420afc4f4e23f6612c86fdb44f7b52d858a86e93b07ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_fe72fd41e2bcbd5f81420afc4f4e23f6612c86fdb44f7b52d858a86e93b07ad8->leave($__internal_fe72fd41e2bcbd5f81420afc4f4e23f6612c86fdb44f7b52d858a86e93b07ad8_prof);

        
        $__internal_4b95c6285570bccc196358c9e17c8e8097e8b2b4a29a55a56118c8b2b4726ea9->leave($__internal_4b95c6285570bccc196358c9e17c8e8097e8b2b4a29a55a56118c8b2b4726ea9_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_63bebe749bf0eaaefcbd97d9fb99b1e56a89489b55db387501a0ea7776b83b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bebe749bf0eaaefcbd97d9fb99b1e56a89489b55db387501a0ea7776b83b70->enter($__internal_63bebe749bf0eaaefcbd97d9fb99b1e56a89489b55db387501a0ea7776b83b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_ca945cfc242b03161fb49d9b854023bb6a4cae27c6ff114cfdd5c599ba94d40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca945cfc242b03161fb49d9b854023bb6a4cae27c6ff114cfdd5c599ba94d40e->enter($__internal_ca945cfc242b03161fb49d9b854023bb6a4cae27c6ff114cfdd5c599ba94d40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_ca945cfc242b03161fb49d9b854023bb6a4cae27c6ff114cfdd5c599ba94d40e->leave($__internal_ca945cfc242b03161fb49d9b854023bb6a4cae27c6ff114cfdd5c599ba94d40e_prof);

        
        $__internal_63bebe749bf0eaaefcbd97d9fb99b1e56a89489b55db387501a0ea7776b83b70->leave($__internal_63bebe749bf0eaaefcbd97d9fb99b1e56a89489b55db387501a0ea7776b83b70_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_265c9e2e73ac7e1fdaa83286e8262f079a49ed06893be3716916dd28092f9c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_265c9e2e73ac7e1fdaa83286e8262f079a49ed06893be3716916dd28092f9c12->enter($__internal_265c9e2e73ac7e1fdaa83286e8262f079a49ed06893be3716916dd28092f9c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_ba9630272721b9c71f0803d2511719c8ed7f9ca1ffb940640ed40ff66dc5b8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ba9630272721b9c71f0803d2511719c8ed7f9ca1ffb940640ed40ff66dc5b8b8->enter($__internal_ba9630272721b9c71f0803d2511719c8ed7f9ca1ffb940640ed40ff66dc5b8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_ba9630272721b9c71f0803d2511719c8ed7f9ca1ffb940640ed40ff66dc5b8b8->leave($__internal_ba9630272721b9c71f0803d2511719c8ed7f9ca1ffb940640ed40ff66dc5b8b8_prof);

            
            $__internal_265c9e2e73ac7e1fdaa83286e8262f079a49ed06893be3716916dd28092f9c12->leave($__internal_265c9e2e73ac7e1fdaa83286e8262f079a49ed06893be3716916dd28092f9c12_prof);

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
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
