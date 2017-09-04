<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_282641a2909597dc12b01f44cb94e099c6462eef6010fe3e268b21b73c61d42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69c924799b5dc61e25db5a4dfa72673806f701abc1e63ed22e9348d007abe362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c924799b5dc61e25db5a4dfa72673806f701abc1e63ed22e9348d007abe362->enter($__internal_69c924799b5dc61e25db5a4dfa72673806f701abc1e63ed22e9348d007abe362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_bb0d32c16ba2e07ffe4091fb659e5a3af98ba95d444978f99f31cfd4685afa26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0d32c16ba2e07ffe4091fb659e5a3af98ba95d444978f99f31cfd4685afa26->enter($__internal_bb0d32c16ba2e07ffe4091fb659e5a3af98ba95d444978f99f31cfd4685afa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_69c924799b5dc61e25db5a4dfa72673806f701abc1e63ed22e9348d007abe362->leave($__internal_69c924799b5dc61e25db5a4dfa72673806f701abc1e63ed22e9348d007abe362_prof);

        
        $__internal_bb0d32c16ba2e07ffe4091fb659e5a3af98ba95d444978f99f31cfd4685afa26->leave($__internal_bb0d32c16ba2e07ffe4091fb659e5a3af98ba95d444978f99f31cfd4685afa26_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_b3171595e8e8a6b5a22899f38532653051a4ebbe4355d346abc63b877df10160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3171595e8e8a6b5a22899f38532653051a4ebbe4355d346abc63b877df10160->enter($__internal_b3171595e8e8a6b5a22899f38532653051a4ebbe4355d346abc63b877df10160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_956cbac36d70b0e324a37af5f4f0ba89f3a4d243c5ebf60415bd34dc473d934a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956cbac36d70b0e324a37af5f4f0ba89f3a4d243c5ebf60415bd34dc473d934a->enter($__internal_956cbac36d70b0e324a37af5f4f0ba89f3a4d243c5ebf60415bd34dc473d934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 62
            echo "
            ";
            // line 63
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 66
            echo "
            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 69
            $this->displayBlock('formactions', $context, $blocks);
            // line 115
            echo "        </form>
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_956cbac36d70b0e324a37af5f4f0ba89f3a4d243c5ebf60415bd34dc473d934a->leave($__internal_956cbac36d70b0e324a37af5f4f0ba89f3a4d243c5ebf60415bd34dc473d934a_prof);

        
        $__internal_b3171595e8e8a6b5a22899f38532653051a4ebbe4355d346abc63b877df10160->leave($__internal_b3171595e8e8a6b5a22899f38532653051a4ebbe4355d346abc63b877df10160_prof);

    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_b7747847eded728448d28b39c808093dce607958e1f434765628740fcbff00be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7747847eded728448d28b39c808093dce607958e1f434765628740fcbff00be->enter($__internal_b7747847eded728448d28b39c808093dce607958e1f434765628740fcbff00be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_68ec72478daa73f64c166cf80e579ba4b48d5e1467287e98bb2a479bdd73ffd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ec72478daa73f64c166cf80e579ba4b48d5e1467287e98bb2a479bdd73ffd3->enter($__internal_68ec72478daa73f64c166cf80e579ba4b48d5e1467287e98bb2a479bdd73ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_68ec72478daa73f64c166cf80e579ba4b48d5e1467287e98bb2a479bdd73ffd3->leave($__internal_68ec72478daa73f64c166cf80e579ba4b48d5e1467287e98bb2a479bdd73ffd3_prof);

        
        $__internal_b7747847eded728448d28b39c808093dce607958e1f434765628740fcbff00be->leave($__internal_b7747847eded728448d28b39c808093dce607958e1f434765628740fcbff00be_prof);

    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_7780e8c3d1811a23bbbe988f2b1919ab361451cb572169495a6fe33985a73d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7780e8c3d1811a23bbbe988f2b1919ab361451cb572169495a6fe33985a73d69->enter($__internal_7780e8c3d1811a23bbbe988f2b1919ab361451cb572169495a6fe33985a73d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_80caf9361e6913c16fa9c3d479e97fc5cb07d352684563e302aa60a2d5814928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80caf9361e6913c16fa9c3d479e97fc5cb07d352684563e302aa60a2d5814928->enter($__internal_80caf9361e6913c16fa9c3d479e97fc5cb07d352684563e302aa60a2d5814928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_80caf9361e6913c16fa9c3d479e97fc5cb07d352684563e302aa60a2d5814928->leave($__internal_80caf9361e6913c16fa9c3d479e97fc5cb07d352684563e302aa60a2d5814928_prof);

        
        $__internal_7780e8c3d1811a23bbbe988f2b1919ab361451cb572169495a6fe33985a73d69->leave($__internal_7780e8c3d1811a23bbbe988f2b1919ab361451cb572169495a6fe33985a73d69_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_51913d30c98afbc9c8f4472d45d9d2eff9ef5ca6337317ab9147521d70867734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51913d30c98afbc9c8f4472d45d9d2eff9ef5ca6337317ab9147521d70867734->enter($__internal_51913d30c98afbc9c8f4472d45d9d2eff9ef5ca6337317ab9147521d70867734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_4e62af86fafa2ed8f9d6f38b29a9fde71cf24660c468b6e91ee965041de32534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e62af86fafa2ed8f9d6f38b29a9fde71cf24660c468b6e91ee965041de32534->enter($__internal_4e62af86fafa2ed8f9d6f38b29a9fde71cf24660c468b6e91ee965041de32534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_4e62af86fafa2ed8f9d6f38b29a9fde71cf24660c468b6e91ee965041de32534->leave($__internal_4e62af86fafa2ed8f9d6f38b29a9fde71cf24660c468b6e91ee965041de32534_prof);

        
        $__internal_51913d30c98afbc9c8f4472d45d9d2eff9ef5ca6337317ab9147521d70867734->leave($__internal_51913d30c98afbc9c8f4472d45d9d2eff9ef5ca6337317ab9147521d70867734_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_e17aefbca0ff3e5c48d62c44b16edf7f63b3a2de1750d77a6fb0936223839db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17aefbca0ff3e5c48d62c44b16edf7f63b3a2de1750d77a6fb0936223839db6->enter($__internal_e17aefbca0ff3e5c48d62c44b16edf7f63b3a2de1750d77a6fb0936223839db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_b90e87b7ec69e50b9e9d723d717e07a1fa0f8844cc40835e4392e0234dfac867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90e87b7ec69e50b9e9d723d717e07a1fa0f8844cc40835e4392e0234dfac867->enter($__internal_b90e87b7ec69e50b9e9d723d717e07a1fa0f8844cc40835e4392e0234dfac867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", array()), array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 43
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 46
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 47
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 49
                echo "
                                                ";
                // line 50
                echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 58
            echo "                        ";
            echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 60
        echo "                </div>
            ";
        
        $__internal_b90e87b7ec69e50b9e9d723d717e07a1fa0f8844cc40835e4392e0234dfac867->leave($__internal_b90e87b7ec69e50b9e9d723d717e07a1fa0f8844cc40835e4392e0234dfac867_prof);

        
        $__internal_e17aefbca0ff3e5c48d62c44b16edf7f63b3a2de1750d77a6fb0936223839db6->leave($__internal_e17aefbca0ff3e5c48d62c44b16edf7f63b3a2de1750d77a6fb0936223839db6_prof);

    }

    // line 63
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_54badcbfb3674032cf3fd989a872ad1578246482bd11f2e81416f3717dce7ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54badcbfb3674032cf3fd989a872ad1578246482bd11f2e81416f3717dce7ca4->enter($__internal_54badcbfb3674032cf3fd989a872ad1578246482bd11f2e81416f3717dce7ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_259bc10cfe5d0ea010ca628f5346cd11aee0151aba8d5c4d7bb3ca1ca9648358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259bc10cfe5d0ea010ca628f5346cd11aee0151aba8d5c4d7bb3ca1ca9648358->enter($__internal_259bc10cfe5d0ea010ca628f5346cd11aee0151aba8d5c4d7bb3ca1ca9648358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 64
        echo "                </div>
            ";
        
        $__internal_259bc10cfe5d0ea010ca628f5346cd11aee0151aba8d5c4d7bb3ca1ca9648358->leave($__internal_259bc10cfe5d0ea010ca628f5346cd11aee0151aba8d5c4d7bb3ca1ca9648358_prof);

        
        $__internal_54badcbfb3674032cf3fd989a872ad1578246482bd11f2e81416f3717dce7ca4->leave($__internal_54badcbfb3674032cf3fd989a872ad1578246482bd11f2e81416f3717dce7ca4_prof);

    }

    // line 69
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_a1746470ea49c21ec9d9f291d8351fc5b3a8a7da8349d09388204a772067c8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1746470ea49c21ec9d9f291d8351fc5b3a8a7da8349d09388204a772067c8f7->enter($__internal_a1746470ea49c21ec9d9f291d8351fc5b3a8a7da8349d09388204a772067c8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_5280519256fa230482b7bef2e2ee1bbc3c6249def96aa2b3511820211e903d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5280519256fa230482b7bef2e2ee1bbc3c6249def96aa2b3511820211e903d2e->enter($__internal_5280519256fa230482b7bef2e2ee1bbc3c6249def96aa2b3511820211e903d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 70
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 71
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 113
        echo "                </div>
            ";
        
        $__internal_5280519256fa230482b7bef2e2ee1bbc3c6249def96aa2b3511820211e903d2e->leave($__internal_5280519256fa230482b7bef2e2ee1bbc3c6249def96aa2b3511820211e903d2e_prof);

        
        $__internal_a1746470ea49c21ec9d9f291d8351fc5b3a8a7da8349d09388204a772067c8f7->leave($__internal_a1746470ea49c21ec9d9f291d8351fc5b3a8a7da8349d09388204a772067c8f7_prof);

    }

    // line 71
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_62c13160648a3d4c2d4db202cfabdf2add9c3fe2f83ff5feb8d4ba230ffcfa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c13160648a3d4c2d4db202cfabdf2add9c3fe2f83ff5feb8d4ba230ffcfa1a->enter($__internal_62c13160648a3d4c2d4db202cfabdf2add9c3fe2f83ff5feb8d4ba230ffcfa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_f5d2191361345a5a2405684eab0e21397b7d8d76f48fc5363c0d3d2def35064e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d2191361345a5a2405684eab0e21397b7d8d76f48fc5363c0d3d2def35064e->enter($__internal_f5d2191361345a5a2405684eab0e21397b7d8d76f48fc5363c0d3d2def35064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 72
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 73
            echo "                        ";
            // line 74
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
                // line 75
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 79
            echo "                    ";
        } else {
            // line 80
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 81
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 86
            echo "                        ";
            // line 87
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
                // line 88
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 90
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 91
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "
                            ";
                // line 99
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 100
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 102
                echo "                        ";
            } else {
                // line 103
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 104
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 106
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 107
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 109
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 111
            echo "                    ";
        }
        // line 112
        echo "                ";
        
        $__internal_f5d2191361345a5a2405684eab0e21397b7d8d76f48fc5363c0d3d2def35064e->leave($__internal_f5d2191361345a5a2405684eab0e21397b7d8d76f48fc5363c0d3d2def35064e_prof);

        
        $__internal_62c13160648a3d4c2d4db202cfabdf2add9c3fe2f83ff5feb8d4ba230ffcfa1a->leave($__internal_62c13160648a3d4c2d4db202cfabdf2add9c3fe2f83ff5feb8d4ba230ffcfa1a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  531 => 112,  528 => 111,  522 => 109,  516 => 107,  513 => 106,  507 => 104,  504 => 103,  501 => 102,  493 => 100,  491 => 99,  488 => 98,  481 => 96,  476 => 95,  474 => 94,  471 => 93,  465 => 91,  463 => 90,  457 => 88,  454 => 87,  452 => 86,  446 => 83,  442 => 81,  439 => 80,  436 => 79,  430 => 77,  424 => 75,  421 => 74,  419 => 73,  416 => 72,  407 => 71,  396 => 113,  394 => 71,  391 => 70,  382 => 69,  371 => 64,  362 => 63,  351 => 60,  345 => 58,  340 => 55,  321 => 50,  318 => 49,  312 => 47,  310 => 46,  297 => 43,  280 => 42,  276 => 40,  251 => 38,  234 => 37,  230 => 35,  228 => 34,  224 => 32,  221 => 31,  212 => 30,  201 => 27,  192 => 26,  175 => 21,  157 => 17,  144 => 118,  141 => 117,  137 => 115,  135 => 69,  130 => 67,  127 => 66,  125 => 63,  122 => 62,  120 => 30,  117 => 29,  115 => 26,  110 => 24,  106 => 22,  103 => 21,  99 => 20,  96 => 19,  92 => 18,  87 => 17,  84 => 15,  80 => 14,  77 => 13,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {# NEXT_MAJOR: remove default filter #}
    {% set url = objectId|default(admin.id(object)) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              {# NEXT_MAJOR: remove default filter #}
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': objectId|default(admin.id(object)), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}