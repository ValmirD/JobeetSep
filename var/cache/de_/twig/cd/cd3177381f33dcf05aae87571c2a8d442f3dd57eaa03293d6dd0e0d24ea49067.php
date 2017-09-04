<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_7e1d9f6cac953d73547550d4f7b7abe9f216a44c24f637b70f88ac3d29f9aada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60b486b2d9e362c04c31f5eb30fa08ef0143309c8b27dd0165829bb8769a44f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b486b2d9e362c04c31f5eb30fa08ef0143309c8b27dd0165829bb8769a44f8->enter($__internal_60b486b2d9e362c04c31f5eb30fa08ef0143309c8b27dd0165829bb8769a44f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_47a6a844513a8bd712a75652ec5f8a49e2192eb67a90cfee2b1ed7e9e639e5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a6a844513a8bd712a75652ec5f8a49e2192eb67a90cfee2b1ed7e9e639e5bb->enter($__internal_47a6a844513a8bd712a75652ec5f8a49e2192eb67a90cfee2b1ed7e9e639e5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b486b2d9e362c04c31f5eb30fa08ef0143309c8b27dd0165829bb8769a44f8->leave($__internal_60b486b2d9e362c04c31f5eb30fa08ef0143309c8b27dd0165829bb8769a44f8_prof);

        
        $__internal_47a6a844513a8bd712a75652ec5f8a49e2192eb67a90cfee2b1ed7e9e639e5bb->leave($__internal_47a6a844513a8bd712a75652ec5f8a49e2192eb67a90cfee2b1ed7e9e639e5bb_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_416e14f1bcae43200be1ac0b7e9aa1e135211a9f70ed220f3b27018b60e22425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416e14f1bcae43200be1ac0b7e9aa1e135211a9f70ed220f3b27018b60e22425->enter($__internal_416e14f1bcae43200be1ac0b7e9aa1e135211a9f70ed220f3b27018b60e22425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_387b0f409dab44420e051a8d122ec35415a6ec05b6e6dd51a56eda136e99a961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387b0f409dab44420e051a8d122ec35415a6ec05b6e6dd51a56eda136e99a961->enter($__internal_387b0f409dab44420e051a8d122ec35415a6ec05b6e6dd51a56eda136e99a961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_387b0f409dab44420e051a8d122ec35415a6ec05b6e6dd51a56eda136e99a961->leave($__internal_387b0f409dab44420e051a8d122ec35415a6ec05b6e6dd51a56eda136e99a961_prof);

        
        $__internal_416e14f1bcae43200be1ac0b7e9aa1e135211a9f70ed220f3b27018b60e22425->leave($__internal_416e14f1bcae43200be1ac0b7e9aa1e135211a9f70ed220f3b27018b60e22425_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9238e075ed4020c3394af371ad000c7f2f9a3ab49b6fd995c9cfeee2609311db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9238e075ed4020c3394af371ad000c7f2f9a3ab49b6fd995c9cfeee2609311db->enter($__internal_9238e075ed4020c3394af371ad000c7f2f9a3ab49b6fd995c9cfeee2609311db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_18f45dea0ec94e14f19b01352df40bcce860388eb951e7f104af3bdb3ee2e5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f45dea0ec94e14f19b01352df40bcce860388eb951e7f104af3bdb3ee2e5b0->enter($__internal_18f45dea0ec94e14f19b01352df40bcce860388eb951e7f104af3bdb3ee2e5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18f45dea0ec94e14f19b01352df40bcce860388eb951e7f104af3bdb3ee2e5b0->leave($__internal_18f45dea0ec94e14f19b01352df40bcce860388eb951e7f104af3bdb3ee2e5b0_prof);

        
        $__internal_9238e075ed4020c3394af371ad000c7f2f9a3ab49b6fd995c9cfeee2609311db->leave($__internal_9238e075ed4020c3394af371ad000c7f2f9a3ab49b6fd995c9cfeee2609311db_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b3b3b4b276af6d4245363f41b90c055aef7e95ac8100d883ea0bb63091d4aaff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b3b4b276af6d4245363f41b90c055aef7e95ac8100d883ea0bb63091d4aaff->enter($__internal_b3b3b4b276af6d4245363f41b90c055aef7e95ac8100d883ea0bb63091d4aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_cc2b842c4caf498d560c714c812f465f23b8e154d49b739b1456501efddf6f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2b842c4caf498d560c714c812f465f23b8e154d49b739b1456501efddf6f50->enter($__internal_cc2b842c4caf498d560c714c812f465f23b8e154d49b739b1456501efddf6f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_cc2b842c4caf498d560c714c812f465f23b8e154d49b739b1456501efddf6f50->leave($__internal_cc2b842c4caf498d560c714c812f465f23b8e154d49b739b1456501efddf6f50_prof);

        
        $__internal_b3b3b4b276af6d4245363f41b90c055aef7e95ac8100d883ea0bb63091d4aaff->leave($__internal_b3b3b4b276af6d4245363f41b90c055aef7e95ac8100d883ea0bb63091d4aaff_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_5ab81fa11dbd893d0beca997679da832a4de6f97016869dc860908971341f062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab81fa11dbd893d0beca997679da832a4de6f97016869dc860908971341f062->enter($__internal_5ab81fa11dbd893d0beca997679da832a4de6f97016869dc860908971341f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_4a4907a19b065c31f5fd2552eb014345ff444e23ad82bd6ac4a0073055a404a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4907a19b065c31f5fd2552eb014345ff444e23ad82bd6ac4a0073055a404a0->enter($__internal_4a4907a19b065c31f5fd2552eb014345ff444e23ad82bd6ac4a0073055a404a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_4a4907a19b065c31f5fd2552eb014345ff444e23ad82bd6ac4a0073055a404a0->leave($__internal_4a4907a19b065c31f5fd2552eb014345ff444e23ad82bd6ac4a0073055a404a0_prof);

        
        $__internal_5ab81fa11dbd893d0beca997679da832a4de6f97016869dc860908971341f062->leave($__internal_5ab81fa11dbd893d0beca997679da832a4de6f97016869dc860908971341f062_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_44421b79c816831cd2c315526fd2280360e80f477c56b140d7135aac904bfe68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44421b79c816831cd2c315526fd2280360e80f477c56b140d7135aac904bfe68->enter($__internal_44421b79c816831cd2c315526fd2280360e80f477c56b140d7135aac904bfe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_6cee02172affabd6603801dc2adbe3d4b564ac75d45a74c68ad92dbb96a8e632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cee02172affabd6603801dc2adbe3d4b564ac75d45a74c68ad92dbb96a8e632->enter($__internal_6cee02172affabd6603801dc2adbe3d4b564ac75d45a74c68ad92dbb96a8e632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", array()), array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_6cee02172affabd6603801dc2adbe3d4b564ac75d45a74c68ad92dbb96a8e632->leave($__internal_6cee02172affabd6603801dc2adbe3d4b564ac75d45a74c68ad92dbb96a8e632_prof);

        
        $__internal_44421b79c816831cd2c315526fd2280360e80f477c56b140d7135aac904bfe68->leave($__internal_44421b79c816831cd2c315526fd2280360e80f477c56b140d7135aac904bfe68_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_f870af8e2577734f5c9055c81ba30f4bbcfeb2e0644829513afbb5407b223b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f870af8e2577734f5c9055c81ba30f4bbcfeb2e0644829513afbb5407b223b2e->enter($__internal_f870af8e2577734f5c9055c81ba30f4bbcfeb2e0644829513afbb5407b223b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_fc6033e14866b1cdd97f1f00f635f2fc07df98d5302c9f791ff2065e090e0d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6033e14866b1cdd97f1f00f635f2fc07df98d5302c9f791ff2065e090e0d04->enter($__internal_fc6033e14866b1cdd97f1f00f635f2fc07df98d5302c9f791ff2065e090e0d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_fc6033e14866b1cdd97f1f00f635f2fc07df98d5302c9f791ff2065e090e0d04->leave($__internal_fc6033e14866b1cdd97f1f00f635f2fc07df98d5302c9f791ff2065e090e0d04_prof);

        
        $__internal_f870af8e2577734f5c9055c81ba30f4bbcfeb2e0644829513afbb5407b223b2e->leave($__internal_f870af8e2577734f5c9055c81ba30f4bbcfeb2e0644829513afbb5407b223b2e_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_56cec0fca5a59b28105431beb897de732f33deff5098f22fc161c5ee90834ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56cec0fca5a59b28105431beb897de732f33deff5098f22fc161c5ee90834ed5->enter($__internal_56cec0fca5a59b28105431beb897de732f33deff5098f22fc161c5ee90834ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_a5dcc39e621af3fb9c5109c453a9a9e9b0172f74e0af40a5a9ea7bc72ba8050c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dcc39e621af3fb9c5109c453a9a9e9b0172f74e0af40a5a9ea7bc72ba8050c->enter($__internal_a5dcc39e621af3fb9c5109c453a9a9e9b0172f74e0af40a5a9ea7bc72ba8050c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
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
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
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
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            // line 110
            echo "                                </tbody>
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
        // line 116
        echo "        ";
        
        $__internal_a5dcc39e621af3fb9c5109c453a9a9e9b0172f74e0af40a5a9ea7bc72ba8050c->leave($__internal_a5dcc39e621af3fb9c5109c453a9a9e9b0172f74e0af40a5a9ea7bc72ba8050c_prof);

        
        $__internal_56cec0fca5a59b28105431beb897de732f33deff5098f22fc161c5ee90834ed5->leave($__internal_56cec0fca5a59b28105431beb897de732f33deff5098f22fc161c5ee90834ed5_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_f930b0aea9cb1a1e4972f18470003baf444243ba55a3ebd82a7f086e0b9d3463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f930b0aea9cb1a1e4972f18470003baf444243ba55a3ebd82a7f086e0b9d3463->enter($__internal_f930b0aea9cb1a1e4972f18470003baf444243ba55a3ebd82a7f086e0b9d3463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_e9be16b437262759ac109f5f2f49fab9d8df0136a285d636f0c7be43b1fa5352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9be16b437262759ac109f5f2f49fab9d8df0136a285d636f0c7be43b1fa5352->enter($__internal_e9be16b437262759ac109f5f2f49fab9d8df0136a285d636f0c7be43b1fa5352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_e9be16b437262759ac109f5f2f49fab9d8df0136a285d636f0c7be43b1fa5352->leave($__internal_e9be16b437262759ac109f5f2f49fab9d8df0136a285d636f0c7be43b1fa5352_prof);

        
        $__internal_f930b0aea9cb1a1e4972f18470003baf444243ba55a3ebd82a7f086e0b9d3463->leave($__internal_f930b0aea9cb1a1e4972f18470003baf444243ba55a3ebd82a7f086e0b9d3463_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_3a61b49acfe55fb91fcbaed30c9ed938951095e8814d63de47509cfabd84d9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a61b49acfe55fb91fcbaed30c9ed938951095e8814d63de47509cfabd84d9f1->enter($__internal_3a61b49acfe55fb91fcbaed30c9ed938951095e8814d63de47509cfabd84d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_50003ae30cfa0e9d33854268cd63e6a123c1af5ec3d7a6953b2715cf06760480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50003ae30cfa0e9d33854268cd63e6a123c1af5ec3d7a6953b2715cf06760480->enter($__internal_50003ae30cfa0e9d33854268cd63e6a123c1af5ec3d7a6953b2715cf06760480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_50003ae30cfa0e9d33854268cd63e6a123c1af5ec3d7a6953b2715cf06760480->leave($__internal_50003ae30cfa0e9d33854268cd63e6a123c1af5ec3d7a6953b2715cf06760480_prof);

        
        $__internal_3a61b49acfe55fb91fcbaed30c9ed938951095e8814d63de47509cfabd84d9f1->leave($__internal_3a61b49acfe55fb91fcbaed30c9ed938951095e8814d63de47509cfabd84d9f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
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

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
