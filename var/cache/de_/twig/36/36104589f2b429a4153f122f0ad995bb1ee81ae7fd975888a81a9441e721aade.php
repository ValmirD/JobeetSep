<?php

/* knp_menu.html.twig */
class __TwigTemplate_932a43807a6801d58f4f9f10f785fc1ef366873093cf6083bdd3118cf9bf575b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da9efd23751ee63d0769164dfec16c09c6ebf847cac761223dedd0e159aeb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da9efd23751ee63d0769164dfec16c09c6ebf847cac761223dedd0e159aeb05->enter($__internal_0da9efd23751ee63d0769164dfec16c09c6ebf847cac761223dedd0e159aeb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_c200c0101de24190f68213aca07bbf5185c2555fee9ff6cd618edbbbcfe36ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c200c0101de24190f68213aca07bbf5185c2555fee9ff6cd618edbbbcfe36ee1->enter($__internal_c200c0101de24190f68213aca07bbf5185c2555fee9ff6cd618edbbbcfe36ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da9efd23751ee63d0769164dfec16c09c6ebf847cac761223dedd0e159aeb05->leave($__internal_0da9efd23751ee63d0769164dfec16c09c6ebf847cac761223dedd0e159aeb05_prof);

        
        $__internal_c200c0101de24190f68213aca07bbf5185c2555fee9ff6cd618edbbbcfe36ee1->leave($__internal_c200c0101de24190f68213aca07bbf5185c2555fee9ff6cd618edbbbcfe36ee1_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_0a178b2db4ec80993ff3a37ef6411940a898b476e7552c269dc7f29bed0dd1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a178b2db4ec80993ff3a37ef6411940a898b476e7552c269dc7f29bed0dd1ab->enter($__internal_0a178b2db4ec80993ff3a37ef6411940a898b476e7552c269dc7f29bed0dd1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_bc9f2ca81a1a4fd46d3fbd7a75021ee367840d44ebeedfb5b012e6c8ba8950e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9f2ca81a1a4fd46d3fbd7a75021ee367840d44ebeedfb5b012e6c8ba8950e8->enter($__internal_bc9f2ca81a1a4fd46d3fbd7a75021ee367840d44ebeedfb5b012e6c8ba8950e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bc9f2ca81a1a4fd46d3fbd7a75021ee367840d44ebeedfb5b012e6c8ba8950e8->leave($__internal_bc9f2ca81a1a4fd46d3fbd7a75021ee367840d44ebeedfb5b012e6c8ba8950e8_prof);

        
        $__internal_0a178b2db4ec80993ff3a37ef6411940a898b476e7552c269dc7f29bed0dd1ab->leave($__internal_0a178b2db4ec80993ff3a37ef6411940a898b476e7552c269dc7f29bed0dd1ab_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_7e944a7017bc7a64edd5abfa8e6457b520a7a31e354b0d260ff8dd153767a759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e944a7017bc7a64edd5abfa8e6457b520a7a31e354b0d260ff8dd153767a759->enter($__internal_7e944a7017bc7a64edd5abfa8e6457b520a7a31e354b0d260ff8dd153767a759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_172c258f346dad25b8d7dd6983df89f70d6f85431a63940056b070d70429bb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172c258f346dad25b8d7dd6983df89f70d6f85431a63940056b070d70429bb9b->enter($__internal_172c258f346dad25b8d7dd6983df89f70d6f85431a63940056b070d70429bb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_172c258f346dad25b8d7dd6983df89f70d6f85431a63940056b070d70429bb9b->leave($__internal_172c258f346dad25b8d7dd6983df89f70d6f85431a63940056b070d70429bb9b_prof);

        
        $__internal_7e944a7017bc7a64edd5abfa8e6457b520a7a31e354b0d260ff8dd153767a759->leave($__internal_7e944a7017bc7a64edd5abfa8e6457b520a7a31e354b0d260ff8dd153767a759_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_cf83c5ebc0773cbdb63794b30c2375d69e990263286b389ec903ba3a45b6934d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf83c5ebc0773cbdb63794b30c2375d69e990263286b389ec903ba3a45b6934d->enter($__internal_cf83c5ebc0773cbdb63794b30c2375d69e990263286b389ec903ba3a45b6934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_b4ff721eb50ac1757d6b2db87970a474f540e7188ff535fd1ea8f6fc30f3e6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ff721eb50ac1757d6b2db87970a474f540e7188ff535fd1ea8f6fc30f3e6c8->enter($__internal_b4ff721eb50ac1757d6b2db87970a474f540e7188ff535fd1ea8f6fc30f3e6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_b4ff721eb50ac1757d6b2db87970a474f540e7188ff535fd1ea8f6fc30f3e6c8->leave($__internal_b4ff721eb50ac1757d6b2db87970a474f540e7188ff535fd1ea8f6fc30f3e6c8_prof);

        
        $__internal_cf83c5ebc0773cbdb63794b30c2375d69e990263286b389ec903ba3a45b6934d->leave($__internal_cf83c5ebc0773cbdb63794b30c2375d69e990263286b389ec903ba3a45b6934d_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_3991dd527db9c94846af307d8c627f2c5168ceedd987e5094a1e24f660eb47ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3991dd527db9c94846af307d8c627f2c5168ceedd987e5094a1e24f660eb47ec->enter($__internal_3991dd527db9c94846af307d8c627f2c5168ceedd987e5094a1e24f660eb47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_4607886890e0b8e289a23fe34aec2dfc8455589c713c890f411409aa87e25825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4607886890e0b8e289a23fe34aec2dfc8455589c713c890f411409aa87e25825->enter($__internal_4607886890e0b8e289a23fe34aec2dfc8455589c713c890f411409aa87e25825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_4607886890e0b8e289a23fe34aec2dfc8455589c713c890f411409aa87e25825->leave($__internal_4607886890e0b8e289a23fe34aec2dfc8455589c713c890f411409aa87e25825_prof);

        
        $__internal_3991dd527db9c94846af307d8c627f2c5168ceedd987e5094a1e24f660eb47ec->leave($__internal_3991dd527db9c94846af307d8c627f2c5168ceedd987e5094a1e24f660eb47ec_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_b8542f249a2f46b8794ba4aaf9a9dabe65c89c357c7658f9219b168208404308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8542f249a2f46b8794ba4aaf9a9dabe65c89c357c7658f9219b168208404308->enter($__internal_b8542f249a2f46b8794ba4aaf9a9dabe65c89c357c7658f9219b168208404308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_86d83d090a2089f0a6dcfab64fc65be78c67a06b82d6cb919c2c1da575b59d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d83d090a2089f0a6dcfab64fc65be78c67a06b82d6cb919c2c1da575b59d17->enter($__internal_86d83d090a2089f0a6dcfab64fc65be78c67a06b82d6cb919c2c1da575b59d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_86d83d090a2089f0a6dcfab64fc65be78c67a06b82d6cb919c2c1da575b59d17->leave($__internal_86d83d090a2089f0a6dcfab64fc65be78c67a06b82d6cb919c2c1da575b59d17_prof);

        
        $__internal_b8542f249a2f46b8794ba4aaf9a9dabe65c89c357c7658f9219b168208404308->leave($__internal_b8542f249a2f46b8794ba4aaf9a9dabe65c89c357c7658f9219b168208404308_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_169316d318811d437067965bbfe598edb29fdf5cb8937d382bcd083b22a2e9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169316d318811d437067965bbfe598edb29fdf5cb8937d382bcd083b22a2e9d6->enter($__internal_169316d318811d437067965bbfe598edb29fdf5cb8937d382bcd083b22a2e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_78e2e8a1f4cbae57a3b601c7fcfd71900bbb0b4c3722741f6aad2bb2840c9e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e2e8a1f4cbae57a3b601c7fcfd71900bbb0b4c3722741f6aad2bb2840c9e9d->enter($__internal_78e2e8a1f4cbae57a3b601c7fcfd71900bbb0b4c3722741f6aad2bb2840c9e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_78e2e8a1f4cbae57a3b601c7fcfd71900bbb0b4c3722741f6aad2bb2840c9e9d->leave($__internal_78e2e8a1f4cbae57a3b601c7fcfd71900bbb0b4c3722741f6aad2bb2840c9e9d_prof);

        
        $__internal_169316d318811d437067965bbfe598edb29fdf5cb8937d382bcd083b22a2e9d6->leave($__internal_169316d318811d437067965bbfe598edb29fdf5cb8937d382bcd083b22a2e9d6_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_88c1984a71961cb380857c329bf6d87c41d698eec04b8b9de5eb42191794c053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c1984a71961cb380857c329bf6d87c41d698eec04b8b9de5eb42191794c053->enter($__internal_88c1984a71961cb380857c329bf6d87c41d698eec04b8b9de5eb42191794c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_e2473cc57933a9de1c639632659d745fed3492ec50dd3e7ecd45b9009d60941b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2473cc57933a9de1c639632659d745fed3492ec50dd3e7ecd45b9009d60941b->enter($__internal_e2473cc57933a9de1c639632659d745fed3492ec50dd3e7ecd45b9009d60941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_e2473cc57933a9de1c639632659d745fed3492ec50dd3e7ecd45b9009d60941b->leave($__internal_e2473cc57933a9de1c639632659d745fed3492ec50dd3e7ecd45b9009d60941b_prof);

        
        $__internal_88c1984a71961cb380857c329bf6d87c41d698eec04b8b9de5eb42191794c053->leave($__internal_88c1984a71961cb380857c329bf6d87c41d698eec04b8b9de5eb42191794c053_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_702f884fbdec23e4ff9af7a3278fa5178e8991febcb697ad3b509d313d07776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702f884fbdec23e4ff9af7a3278fa5178e8991febcb697ad3b509d313d07776a->enter($__internal_702f884fbdec23e4ff9af7a3278fa5178e8991febcb697ad3b509d313d07776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d3e5be29253515018442fbd392055d9a009426f7b7e831842b8888880fbec3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e5be29253515018442fbd392055d9a009426f7b7e831842b8888880fbec3b6->enter($__internal_d3e5be29253515018442fbd392055d9a009426f7b7e831842b8888880fbec3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_d3e5be29253515018442fbd392055d9a009426f7b7e831842b8888880fbec3b6->leave($__internal_d3e5be29253515018442fbd392055d9a009426f7b7e831842b8888880fbec3b6_prof);

        
        $__internal_702f884fbdec23e4ff9af7a3278fa5178e8991febcb697ad3b509d313d07776a->leave($__internal_702f884fbdec23e4ff9af7a3278fa5178e8991febcb697ad3b509d313d07776a_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e6b3d7d4294ea65cb7572f8b374511e4a7b12187f712d52d7d90ef85b21baa21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e6b3d7d4294ea65cb7572f8b374511e4a7b12187f712d52d7d90ef85b21baa21->enter($__internal_e6b3d7d4294ea65cb7572f8b374511e4a7b12187f712d52d7d90ef85b21baa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_fa61df8d0bf085d4e5602011b97a3871006fdf14306d132647d3b1a0efde6583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fa61df8d0bf085d4e5602011b97a3871006fdf14306d132647d3b1a0efde6583->enter($__internal_fa61df8d0bf085d4e5602011b97a3871006fdf14306d132647d3b1a0efde6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_fa61df8d0bf085d4e5602011b97a3871006fdf14306d132647d3b1a0efde6583->leave($__internal_fa61df8d0bf085d4e5602011b97a3871006fdf14306d132647d3b1a0efde6583_prof);

            
            $__internal_e6b3d7d4294ea65cb7572f8b374511e4a7b12187f712d52d7d90ef85b21baa21->leave($__internal_e6b3d7d4294ea65cb7572f8b374511e4a7b12187f712d52d7d90ef85b21baa21_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
