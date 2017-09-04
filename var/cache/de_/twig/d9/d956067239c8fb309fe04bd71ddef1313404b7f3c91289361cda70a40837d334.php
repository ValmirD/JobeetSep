<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_d8677a0489a2e71ac4dfd77bd9235bddaa8a9f328611d441e33c48741d4117d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d99d4600f66bf9f7adb33dade331939b7db7288fcb162867c27ea27dce50e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d99d4600f66bf9f7adb33dade331939b7db7288fcb162867c27ea27dce50e6a->enter($__internal_4d99d4600f66bf9f7adb33dade331939b7db7288fcb162867c27ea27dce50e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_8c056b82feba3e53a5985202dbdde0132e261b426165ac8073b59bc838088c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c056b82feba3e53a5985202dbdde0132e261b426165ac8073b59bc838088c20->enter($__internal_8c056b82feba3e53a5985202dbdde0132e261b426165ac8073b59bc838088c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_4d99d4600f66bf9f7adb33dade331939b7db7288fcb162867c27ea27dce50e6a->leave($__internal_4d99d4600f66bf9f7adb33dade331939b7db7288fcb162867c27ea27dce50e6a_prof);

        
        $__internal_8c056b82feba3e53a5985202dbdde0132e261b426165ac8073b59bc838088c20->leave($__internal_8c056b82feba3e53a5985202dbdde0132e261b426165ac8073b59bc838088c20_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_8c4fd07f2bee14a5406a211d511f77b3d61d83af043becbcdf81dffce9fbf899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4fd07f2bee14a5406a211d511f77b3d61d83af043becbcdf81dffce9fbf899->enter($__internal_8c4fd07f2bee14a5406a211d511f77b3d61d83af043becbcdf81dffce9fbf899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_5b2312f23970b9f1637cc726d3bce749c336605c14da6a655d0d0c0feaa4d2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2312f23970b9f1637cc726d3bce749c336605c14da6a655d0d0c0feaa4d2d9->enter($__internal_5b2312f23970b9f1637cc726d3bce749c336605c14da6a655d0d0c0feaa4d2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_5b2312f23970b9f1637cc726d3bce749c336605c14da6a655d0d0c0feaa4d2d9->leave($__internal_5b2312f23970b9f1637cc726d3bce749c336605c14da6a655d0d0c0feaa4d2d9_prof);

        
        $__internal_8c4fd07f2bee14a5406a211d511f77b3d61d83af043becbcdf81dffce9fbf899->leave($__internal_8c4fd07f2bee14a5406a211d511f77b3d61d83af043becbcdf81dffce9fbf899_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_04d3f010999e71e352bfd6e225187ba8f82402a7be89bc46e4743f074c4b13e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d3f010999e71e352bfd6e225187ba8f82402a7be89bc46e4743f074c4b13e6->enter($__internal_04d3f010999e71e352bfd6e225187ba8f82402a7be89bc46e4743f074c4b13e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_b01869b309d6c158c121fdcd773874417b1b77fdb6acbad8bae03ad2748bd37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01869b309d6c158c121fdcd773874417b1b77fdb6acbad8bae03ad2748bd37e->enter($__internal_b01869b309d6c158c121fdcd773874417b1b77fdb6acbad8bae03ad2748bd37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_b01869b309d6c158c121fdcd773874417b1b77fdb6acbad8bae03ad2748bd37e->leave($__internal_b01869b309d6c158c121fdcd773874417b1b77fdb6acbad8bae03ad2748bd37e_prof);

        
        $__internal_04d3f010999e71e352bfd6e225187ba8f82402a7be89bc46e4743f074c4b13e6->leave($__internal_04d3f010999e71e352bfd6e225187ba8f82402a7be89bc46e4743f074c4b13e6_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c437e41779a19de7544a5e35fa5175a6ff65dbe91f119cb007a2070f643db00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c437e41779a19de7544a5e35fa5175a6ff65dbe91f119cb007a2070f643db00->enter($__internal_8c437e41779a19de7544a5e35fa5175a6ff65dbe91f119cb007a2070f643db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0edaf49e615174f2d8b1ddc2e80278c7b60275cdd33f1f6afe1af4f66f93dbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edaf49e615174f2d8b1ddc2e80278c7b60275cdd33f1f6afe1af4f66f93dbca->enter($__internal_0edaf49e615174f2d8b1ddc2e80278c7b60275cdd33f1f6afe1af4f66f93dbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_0edaf49e615174f2d8b1ddc2e80278c7b60275cdd33f1f6afe1af4f66f93dbca->leave($__internal_0edaf49e615174f2d8b1ddc2e80278c7b60275cdd33f1f6afe1af4f66f93dbca_prof);

        
        $__internal_8c437e41779a19de7544a5e35fa5175a6ff65dbe91f119cb007a2070f643db00->leave($__internal_8c437e41779a19de7544a5e35fa5175a6ff65dbe91f119cb007a2070f643db00_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_236a5890574bfc8c7240204386b1e5796a0bd3d8174498b1ba4fde97af6c56ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236a5890574bfc8c7240204386b1e5796a0bd3d8174498b1ba4fde97af6c56ec->enter($__internal_236a5890574bfc8c7240204386b1e5796a0bd3d8174498b1ba4fde97af6c56ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c34db1d3177221e7a4949b10c458f90da31513a2c382ebcc19b146437d064fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34db1d3177221e7a4949b10c458f90da31513a2c382ebcc19b146437d064fcd->enter($__internal_c34db1d3177221e7a4949b10c458f90da31513a2c382ebcc19b146437d064fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_c34db1d3177221e7a4949b10c458f90da31513a2c382ebcc19b146437d064fcd->leave($__internal_c34db1d3177221e7a4949b10c458f90da31513a2c382ebcc19b146437d064fcd_prof);

        
        $__internal_236a5890574bfc8c7240204386b1e5796a0bd3d8174498b1ba4fde97af6c56ec->leave($__internal_236a5890574bfc8c7240204386b1e5796a0bd3d8174498b1ba4fde97af6c56ec_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_066be61c20b859234389a0f0fe338b90f6c42e91d8f87395a6498f2b02d77dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066be61c20b859234389a0f0fe338b90f6c42e91d8f87395a6498f2b02d77dab->enter($__internal_066be61c20b859234389a0f0fe338b90f6c42e91d8f87395a6498f2b02d77dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_97dd7671a7ad855f2b8c26c79ecc44a528fc19d50ac6cd264596b092cafb0c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dd7671a7ad855f2b8c26c79ecc44a528fc19d50ac6cd264596b092cafb0c32->enter($__internal_97dd7671a7ad855f2b8c26c79ecc44a528fc19d50ac6cd264596b092cafb0c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_97dd7671a7ad855f2b8c26c79ecc44a528fc19d50ac6cd264596b092cafb0c32->leave($__internal_97dd7671a7ad855f2b8c26c79ecc44a528fc19d50ac6cd264596b092cafb0c32_prof);

        
        $__internal_066be61c20b859234389a0f0fe338b90f6c42e91d8f87395a6498f2b02d77dab->leave($__internal_066be61c20b859234389a0f0fe338b90f6c42e91d8f87395a6498f2b02d77dab_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_b5dad5076608fe339da9d5c337c669c09fb0a3fd55ab1b3ed486f5eff54db62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dad5076608fe339da9d5c337c669c09fb0a3fd55ab1b3ed486f5eff54db62c->enter($__internal_b5dad5076608fe339da9d5c337c669c09fb0a3fd55ab1b3ed486f5eff54db62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_f3a4ff3b8913926c20fc7b29f57d73f82b95369cd72515315882d189701d9a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a4ff3b8913926c20fc7b29f57d73f82b95369cd72515315882d189701d9a7c->enter($__internal_f3a4ff3b8913926c20fc7b29f57d73f82b95369cd72515315882d189701d9a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_f3a4ff3b8913926c20fc7b29f57d73f82b95369cd72515315882d189701d9a7c->leave($__internal_f3a4ff3b8913926c20fc7b29f57d73f82b95369cd72515315882d189701d9a7c_prof);

        
        $__internal_b5dad5076608fe339da9d5c337c669c09fb0a3fd55ab1b3ed486f5eff54db62c->leave($__internal_b5dad5076608fe339da9d5c337c669c09fb0a3fd55ab1b3ed486f5eff54db62c_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_32fb7ca80d9716e1d509fbe1288e888aaba0825af46e3d383f927a0a4f38930d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fb7ca80d9716e1d509fbe1288e888aaba0825af46e3d383f927a0a4f38930d->enter($__internal_32fb7ca80d9716e1d509fbe1288e888aaba0825af46e3d383f927a0a4f38930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_f599c4ac157e7170f67170bf2f0a4db864e7d8ada52a68fc0a1a0ec186821cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f599c4ac157e7170f67170bf2f0a4db864e7d8ada52a68fc0a1a0ec186821cab->enter($__internal_f599c4ac157e7170f67170bf2f0a4db864e7d8ada52a68fc0a1a0ec186821cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo strip_tags((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_f599c4ac157e7170f67170bf2f0a4db864e7d8ada52a68fc0a1a0ec186821cab->leave($__internal_f599c4ac157e7170f67170bf2f0a4db864e7d8ada52a68fc0a1a0ec186821cab_prof);

        
        $__internal_32fb7ca80d9716e1d509fbe1288e888aaba0825af46e3d383f927a0a4f38930d->leave($__internal_32fb7ca80d9716e1d509fbe1288e888aaba0825af46e3d383f927a0a4f38930d_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_941961fb3773f6eaa7568fb6f0ecfb0c0bf438a6a8874a2c8d8c631326f004b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941961fb3773f6eaa7568fb6f0ecfb0c0bf438a6a8874a2c8d8c631326f004b4->enter($__internal_941961fb3773f6eaa7568fb6f0ecfb0c0bf438a6a8874a2c8d8c631326f004b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_cd63db5a9443461bf27f0f6a2376f09563e1caf71326344eb0bb924a43938cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd63db5a9443461bf27f0f6a2376f09563e1caf71326344eb0bb924a43938cea->enter($__internal_cd63db5a9443461bf27f0f6a2376f09563e1caf71326344eb0bb924a43938cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_cd63db5a9443461bf27f0f6a2376f09563e1caf71326344eb0bb924a43938cea->leave($__internal_cd63db5a9443461bf27f0f6a2376f09563e1caf71326344eb0bb924a43938cea_prof);

        
        $__internal_941961fb3773f6eaa7568fb6f0ecfb0c0bf438a6a8874a2c8d8c631326f004b4->leave($__internal_941961fb3773f6eaa7568fb6f0ecfb0c0bf438a6a8874a2c8d8c631326f004b4_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a2461ec10b69d62a5f0cc25b66504e92f72f135f44928d0923d1425166df43d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2461ec10b69d62a5f0cc25b66504e92f72f135f44928d0923d1425166df43d1->enter($__internal_a2461ec10b69d62a5f0cc25b66504e92f72f135f44928d0923d1425166df43d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_72a4a52314b600eb0dae6f6e96a0340495e6f8e084b82cd9674a1567c49105ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a4a52314b600eb0dae6f6e96a0340495e6f8e084b82cd9674a1567c49105ad->enter($__internal_72a4a52314b600eb0dae6f6e96a0340495e6f8e084b82cd9674a1567c49105ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_72a4a52314b600eb0dae6f6e96a0340495e6f8e084b82cd9674a1567c49105ad->leave($__internal_72a4a52314b600eb0dae6f6e96a0340495e6f8e084b82cd9674a1567c49105ad_prof);

        
        $__internal_a2461ec10b69d62a5f0cc25b66504e92f72f135f44928d0923d1425166df43d1->leave($__internal_a2461ec10b69d62a5f0cc25b66504e92f72f135f44928d0923d1425166df43d1_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_0fe35885b3d42da7e41099ea73f0256bc535bd8720a91bf38fa7ab7af4789819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe35885b3d42da7e41099ea73f0256bc535bd8720a91bf38fa7ab7af4789819->enter($__internal_0fe35885b3d42da7e41099ea73f0256bc535bd8720a91bf38fa7ab7af4789819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_faf97f9d35885a12f9e17aa9223a7c7929961a82d1fa9bac8a8700caf2cde40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf97f9d35885a12f9e17aa9223a7c7929961a82d1fa9bac8a8700caf2cde40e->enter($__internal_faf97f9d35885a12f9e17aa9223a7c7929961a82d1fa9bac8a8700caf2cde40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_faf97f9d35885a12f9e17aa9223a7c7929961a82d1fa9bac8a8700caf2cde40e->leave($__internal_faf97f9d35885a12f9e17aa9223a7c7929961a82d1fa9bac8a8700caf2cde40e_prof);

        
        $__internal_0fe35885b3d42da7e41099ea73f0256bc535bd8720a91bf38fa7ab7af4789819->leave($__internal_0fe35885b3d42da7e41099ea73f0256bc535bd8720a91bf38fa7ab7af4789819_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3ba74ea283ca287960c8b724babccf63163d4dbab2ed3f316919153574fdf587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba74ea283ca287960c8b724babccf63163d4dbab2ed3f316919153574fdf587->enter($__internal_3ba74ea283ca287960c8b724babccf63163d4dbab2ed3f316919153574fdf587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_047547dbff0bce68283db89c5cca98e3ddfa498577e159adf0dcb6a82e5c5d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047547dbff0bce68283db89c5cca98e3ddfa498577e159adf0dcb6a82e5c5d00->enter($__internal_047547dbff0bce68283db89c5cca98e3ddfa498577e159adf0dcb6a82e5c5d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_047547dbff0bce68283db89c5cca98e3ddfa498577e159adf0dcb6a82e5c5d00->leave($__internal_047547dbff0bce68283db89c5cca98e3ddfa498577e159adf0dcb6a82e5c5d00_prof);

        
        $__internal_3ba74ea283ca287960c8b724babccf63163d4dbab2ed3f316919153574fdf587->leave($__internal_3ba74ea283ca287960c8b724babccf63163d4dbab2ed3f316919153574fdf587_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e02acda01d64f77f2cf4471893d8730f5aabdd03144bff8a1579c84c41a94a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02acda01d64f77f2cf4471893d8730f5aabdd03144bff8a1579c84c41a94a53->enter($__internal_e02acda01d64f77f2cf4471893d8730f5aabdd03144bff8a1579c84c41a94a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_a047bf504316a7cebe12a45260f89d2a716703628d599e3ebecde4fff8454c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a047bf504316a7cebe12a45260f89d2a716703628d599e3ebecde4fff8454c1f->enter($__internal_a047bf504316a7cebe12a45260f89d2a716703628d599e3ebecde4fff8454c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_a047bf504316a7cebe12a45260f89d2a716703628d599e3ebecde4fff8454c1f->leave($__internal_a047bf504316a7cebe12a45260f89d2a716703628d599e3ebecde4fff8454c1f_prof);

        
        $__internal_e02acda01d64f77f2cf4471893d8730f5aabdd03144bff8a1579c84c41a94a53->leave($__internal_e02acda01d64f77f2cf4471893d8730f5aabdd03144bff8a1579c84c41a94a53_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_44ee579c09eba7db302aafb4c9f610484fd3ca23f78853e91245e20711b2f823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ee579c09eba7db302aafb4c9f610484fd3ca23f78853e91245e20711b2f823->enter($__internal_44ee579c09eba7db302aafb4c9f610484fd3ca23f78853e91245e20711b2f823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_32588287a0fd71a31b37eee427e815b6ea528033bb3ae87ba9d4c915bf27a877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32588287a0fd71a31b37eee427e815b6ea528033bb3ae87ba9d4c915bf27a877->enter($__internal_32588287a0fd71a31b37eee427e815b6ea528033bb3ae87ba9d4c915bf27a877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_32588287a0fd71a31b37eee427e815b6ea528033bb3ae87ba9d4c915bf27a877->leave($__internal_32588287a0fd71a31b37eee427e815b6ea528033bb3ae87ba9d4c915bf27a877_prof);

        
        $__internal_44ee579c09eba7db302aafb4c9f610484fd3ca23f78853e91245e20711b2f823->leave($__internal_44ee579c09eba7db302aafb4c9f610484fd3ca23f78853e91245e20711b2f823_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_b0256cd6f432ca778f1aaa087839611fbe7155dbe31e6e7b540cd5756412e542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0256cd6f432ca778f1aaa087839611fbe7155dbe31e6e7b540cd5756412e542->enter($__internal_b0256cd6f432ca778f1aaa087839611fbe7155dbe31e6e7b540cd5756412e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_2783f8a8c8692bb110bd921d97ff59128ed7a422944662b5bdd8ba81d15d49cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2783f8a8c8692bb110bd921d97ff59128ed7a422944662b5bdd8ba81d15d49cc->enter($__internal_2783f8a8c8692bb110bd921d97ff59128ed7a422944662b5bdd8ba81d15d49cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_2783f8a8c8692bb110bd921d97ff59128ed7a422944662b5bdd8ba81d15d49cc->leave($__internal_2783f8a8c8692bb110bd921d97ff59128ed7a422944662b5bdd8ba81d15d49cc_prof);

        
        $__internal_b0256cd6f432ca778f1aaa087839611fbe7155dbe31e6e7b540cd5756412e542->leave($__internal_b0256cd6f432ca778f1aaa087839611fbe7155dbe31e6e7b540cd5756412e542_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_ec5155d10ab700d08801f70f04c5a9d845fc44057e8e1580cb1785349369cbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5155d10ab700d08801f70f04c5a9d845fc44057e8e1580cb1785349369cbc9->enter($__internal_ec5155d10ab700d08801f70f04c5a9d845fc44057e8e1580cb1785349369cbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_e1c8da796cd87ea06833a6ccb7e045d88884d7c957b1e2e29f406e89eee19805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c8da796cd87ea06833a6ccb7e045d88884d7c957b1e2e29f406e89eee19805->enter($__internal_e1c8da796cd87ea06833a6ccb7e045d88884d7c957b1e2e29f406e89eee19805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_e1c8da796cd87ea06833a6ccb7e045d88884d7c957b1e2e29f406e89eee19805->leave($__internal_e1c8da796cd87ea06833a6ccb7e045d88884d7c957b1e2e29f406e89eee19805_prof);

        
        $__internal_ec5155d10ab700d08801f70f04c5a9d845fc44057e8e1580cb1785349369cbc9->leave($__internal_ec5155d10ab700d08801f70f04c5a9d845fc44057e8e1580cb1785349369cbc9_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_c4e5207feb1c5e4bb667ed8828ddc10bbbcc9ba7f28e4c102dc42512ea7852a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e5207feb1c5e4bb667ed8828ddc10bbbcc9ba7f28e4c102dc42512ea7852a9->enter($__internal_c4e5207feb1c5e4bb667ed8828ddc10bbbcc9ba7f28e4c102dc42512ea7852a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_109f84332fa4df366bc0703e7681413b998099f2da9133d39986892ee6dff697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109f84332fa4df366bc0703e7681413b998099f2da9133d39986892ee6dff697->enter($__internal_109f84332fa4df366bc0703e7681413b998099f2da9133d39986892ee6dff697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_109f84332fa4df366bc0703e7681413b998099f2da9133d39986892ee6dff697->leave($__internal_109f84332fa4df366bc0703e7681413b998099f2da9133d39986892ee6dff697_prof);

        
        $__internal_c4e5207feb1c5e4bb667ed8828ddc10bbbcc9ba7f28e4c102dc42512ea7852a9->leave($__internal_c4e5207feb1c5e4bb667ed8828ddc10bbbcc9ba7f28e4c102dc42512ea7852a9_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_29f1e8a69ab008352de3d8d0f53031474bf164d255c34190c1caa8b99c726f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f1e8a69ab008352de3d8d0f53031474bf164d255c34190c1caa8b99c726f37->enter($__internal_29f1e8a69ab008352de3d8d0f53031474bf164d255c34190c1caa8b99c726f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_26e7704fc30af19006f7ac5494464184035456ee378db5224fd57ddf3172baba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7704fc30af19006f7ac5494464184035456ee378db5224fd57ddf3172baba->enter($__internal_26e7704fc30af19006f7ac5494464184035456ee378db5224fd57ddf3172baba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_26e7704fc30af19006f7ac5494464184035456ee378db5224fd57ddf3172baba->leave($__internal_26e7704fc30af19006f7ac5494464184035456ee378db5224fd57ddf3172baba_prof);

        
        $__internal_29f1e8a69ab008352de3d8d0f53031474bf164d255c34190c1caa8b99c726f37->leave($__internal_29f1e8a69ab008352de3d8d0f53031474bf164d255c34190c1caa8b99c726f37_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_cff592d027ec6a6a13ee9ac4dc1223090f7c98c57188691df52da8f34272380d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff592d027ec6a6a13ee9ac4dc1223090f7c98c57188691df52da8f34272380d->enter($__internal_cff592d027ec6a6a13ee9ac4dc1223090f7c98c57188691df52da8f34272380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_71a68e23482d877b499bd285b2349bf55d201d28668a0bbb237d2a16d1971b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a68e23482d877b499bd285b2349bf55d201d28668a0bbb237d2a16d1971b8f->enter($__internal_71a68e23482d877b499bd285b2349bf55d201d28668a0bbb237d2a16d1971b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_71a68e23482d877b499bd285b2349bf55d201d28668a0bbb237d2a16d1971b8f->leave($__internal_71a68e23482d877b499bd285b2349bf55d201d28668a0bbb237d2a16d1971b8f_prof);

        
        $__internal_cff592d027ec6a6a13ee9ac4dc1223090f7c98c57188691df52da8f34272380d->leave($__internal_cff592d027ec6a6a13ee9ac4dc1223090f7c98c57188691df52da8f34272380d_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_39a3e16f787723611f812f604c3978846804edccfb939a0e3002509f894461ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a3e16f787723611f812f604c3978846804edccfb939a0e3002509f894461ef->enter($__internal_39a3e16f787723611f812f604c3978846804edccfb939a0e3002509f894461ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_b50e0151208656bd79650b8484a2561ab938313223e59ec8b889c4ad3d56ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50e0151208656bd79650b8484a2561ab938313223e59ec8b889c4ad3d56ddeb->enter($__internal_b50e0151208656bd79650b8484a2561ab938313223e59ec8b889c4ad3d56ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_b50e0151208656bd79650b8484a2561ab938313223e59ec8b889c4ad3d56ddeb->leave($__internal_b50e0151208656bd79650b8484a2561ab938313223e59ec8b889c4ad3d56ddeb_prof);

        
        $__internal_39a3e16f787723611f812f604c3978846804edccfb939a0e3002509f894461ef->leave($__internal_39a3e16f787723611f812f604c3978846804edccfb939a0e3002509f894461ef_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_9a4cc438302d95935fd92f5aa0ae6d975939bc01f8570e74de4de9d1bc61d402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4cc438302d95935fd92f5aa0ae6d975939bc01f8570e74de4de9d1bc61d402->enter($__internal_9a4cc438302d95935fd92f5aa0ae6d975939bc01f8570e74de4de9d1bc61d402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_c5d22bb32289ffd449502c3b6b45a5fe089f4d59b9cec093cda6992b86faefc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d22bb32289ffd449502c3b6b45a5fe089f4d59b9cec093cda6992b86faefc2->enter($__internal_c5d22bb32289ffd449502c3b6b45a5fe089f4d59b9cec093cda6992b86faefc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_c5d22bb32289ffd449502c3b6b45a5fe089f4d59b9cec093cda6992b86faefc2->leave($__internal_c5d22bb32289ffd449502c3b6b45a5fe089f4d59b9cec093cda6992b86faefc2_prof);

        
        $__internal_9a4cc438302d95935fd92f5aa0ae6d975939bc01f8570e74de4de9d1bc61d402->leave($__internal_9a4cc438302d95935fd92f5aa0ae6d975939bc01f8570e74de4de9d1bc61d402_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_fe5efb6c05f3b9036aa5decaa8a5a21e4dabd457deed2b2a0414ecceb68ca953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5efb6c05f3b9036aa5decaa8a5a21e4dabd457deed2b2a0414ecceb68ca953->enter($__internal_fe5efb6c05f3b9036aa5decaa8a5a21e4dabd457deed2b2a0414ecceb68ca953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_c64b771241d86db3f70edbd9d7695df5cd68572885f5d162f17a70d0f0156011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64b771241d86db3f70edbd9d7695df5cd68572885f5d162f17a70d0f0156011->enter($__internal_c64b771241d86db3f70edbd9d7695df5cd68572885f5d162f17a70d0f0156011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_c64b771241d86db3f70edbd9d7695df5cd68572885f5d162f17a70d0f0156011->leave($__internal_c64b771241d86db3f70edbd9d7695df5cd68572885f5d162f17a70d0f0156011_prof);

        
        $__internal_fe5efb6c05f3b9036aa5decaa8a5a21e4dabd457deed2b2a0414ecceb68ca953->leave($__internal_fe5efb6c05f3b9036aa5decaa8a5a21e4dabd457deed2b2a0414ecceb68ca953_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_ad63c60f75d64a69fe044d3b7cb7051a258474faf56f426a49e85a53cf2159d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad63c60f75d64a69fe044d3b7cb7051a258474faf56f426a49e85a53cf2159d2->enter($__internal_ad63c60f75d64a69fe044d3b7cb7051a258474faf56f426a49e85a53cf2159d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_49056cdcbc0bcad2f0ed3562bc51ed90901eeeb18903e6f5bc6eb42d362b2e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49056cdcbc0bcad2f0ed3562bc51ed90901eeeb18903e6f5bc6eb42d362b2e61->enter($__internal_49056cdcbc0bcad2f0ed3562bc51ed90901eeeb18903e6f5bc6eb42d362b2e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_49056cdcbc0bcad2f0ed3562bc51ed90901eeeb18903e6f5bc6eb42d362b2e61->leave($__internal_49056cdcbc0bcad2f0ed3562bc51ed90901eeeb18903e6f5bc6eb42d362b2e61_prof);

        
        $__internal_ad63c60f75d64a69fe044d3b7cb7051a258474faf56f426a49e85a53cf2159d2->leave($__internal_ad63c60f75d64a69fe044d3b7cb7051a258474faf56f426a49e85a53cf2159d2_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_f9c9ea4ad9e812e9e46ee49d314783b39df8754969a125b12d9338619fc53d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c9ea4ad9e812e9e46ee49d314783b39df8754969a125b12d9338619fc53d08->enter($__internal_f9c9ea4ad9e812e9e46ee49d314783b39df8754969a125b12d9338619fc53d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_9cf6eb5ce43dc6700b5e8498f28aed989926b6bc7ad7382304d68b60bc2f3221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf6eb5ce43dc6700b5e8498f28aed989926b6bc7ad7382304d68b60bc2f3221->enter($__internal_9cf6eb5ce43dc6700b5e8498f28aed989926b6bc7ad7382304d68b60bc2f3221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_9cf6eb5ce43dc6700b5e8498f28aed989926b6bc7ad7382304d68b60bc2f3221->leave($__internal_9cf6eb5ce43dc6700b5e8498f28aed989926b6bc7ad7382304d68b60bc2f3221_prof);

        
        $__internal_f9c9ea4ad9e812e9e46ee49d314783b39df8754969a125b12d9338619fc53d08->leave($__internal_f9c9ea4ad9e812e9e46ee49d314783b39df8754969a125b12d9338619fc53d08_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_41b0af37dac48c37835179ff59d865ef6e324cc450a20f81bebd2eef41bf62ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b0af37dac48c37835179ff59d865ef6e324cc450a20f81bebd2eef41bf62ec->enter($__internal_41b0af37dac48c37835179ff59d865ef6e324cc450a20f81bebd2eef41bf62ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_2dc1a2f28067d89a3a1613d669481945abe85990ec9c76ab41cc652cd927792f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc1a2f28067d89a3a1613d669481945abe85990ec9c76ab41cc652cd927792f->enter($__internal_2dc1a2f28067d89a3a1613d669481945abe85990ec9c76ab41cc652cd927792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_2dc1a2f28067d89a3a1613d669481945abe85990ec9c76ab41cc652cd927792f->leave($__internal_2dc1a2f28067d89a3a1613d669481945abe85990ec9c76ab41cc652cd927792f_prof);

        
        $__internal_41b0af37dac48c37835179ff59d865ef6e324cc450a20f81bebd2eef41bf62ec->leave($__internal_41b0af37dac48c37835179ff59d865ef6e324cc450a20f81bebd2eef41bf62ec_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3632851ed33b524724b266f007c729c5fc5cbc7e05206ce1c98c5c6045d8c1e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3632851ed33b524724b266f007c729c5fc5cbc7e05206ce1c98c5c6045d8c1e5->enter($__internal_3632851ed33b524724b266f007c729c5fc5cbc7e05206ce1c98c5c6045d8c1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_5f70eef45905c17cf257d61422ae85a75c6c3f76ce3d0ec5412fd28b61810191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f70eef45905c17cf257d61422ae85a75c6c3f76ce3d0ec5412fd28b61810191->enter($__internal_5f70eef45905c17cf257d61422ae85a75c6c3f76ce3d0ec5412fd28b61810191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_5f70eef45905c17cf257d61422ae85a75c6c3f76ce3d0ec5412fd28b61810191->leave($__internal_5f70eef45905c17cf257d61422ae85a75c6c3f76ce3d0ec5412fd28b61810191_prof);

        
        $__internal_3632851ed33b524724b266f007c729c5fc5cbc7e05206ce1c98c5c6045d8c1e5->leave($__internal_3632851ed33b524724b266f007c729c5fc5cbc7e05206ce1c98c5c6045d8c1e5_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4ddadc43cbba3ac7e1d1e85fc7769939c40c567983762f2c325f75c1afcafcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddadc43cbba3ac7e1d1e85fc7769939c40c567983762f2c325f75c1afcafcbc->enter($__internal_4ddadc43cbba3ac7e1d1e85fc7769939c40c567983762f2c325f75c1afcafcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_8b78176fc998599884c92b32b7e113ba01eb4d4187cace713ce67ecc2475cda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b78176fc998599884c92b32b7e113ba01eb4d4187cace713ce67ecc2475cda9->enter($__internal_8b78176fc998599884c92b32b7e113ba01eb4d4187cace713ce67ecc2475cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_8b78176fc998599884c92b32b7e113ba01eb4d4187cace713ce67ecc2475cda9->leave($__internal_8b78176fc998599884c92b32b7e113ba01eb4d4187cace713ce67ecc2475cda9_prof);

        
        $__internal_4ddadc43cbba3ac7e1d1e85fc7769939c40c567983762f2c325f75c1afcafcbc->leave($__internal_4ddadc43cbba3ac7e1d1e85fc7769939c40c567983762f2c325f75c1afcafcbc_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_06c45065f59c2558572d073366140bce7e6ea961fab9fbf43172908f5607a6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c45065f59c2558572d073366140bce7e6ea961fab9fbf43172908f5607a6f8->enter($__internal_06c45065f59c2558572d073366140bce7e6ea961fab9fbf43172908f5607a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_f48e08b37638e92e82e72fd1b438cd820d6402172e328d076f0f4cc6e18849f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48e08b37638e92e82e72fd1b438cd820d6402172e328d076f0f4cc6e18849f8->enter($__internal_f48e08b37638e92e82e72fd1b438cd820d6402172e328d076f0f4cc6e18849f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_f48e08b37638e92e82e72fd1b438cd820d6402172e328d076f0f4cc6e18849f8->leave($__internal_f48e08b37638e92e82e72fd1b438cd820d6402172e328d076f0f4cc6e18849f8_prof);

        
        $__internal_06c45065f59c2558572d073366140bce7e6ea961fab9fbf43172908f5607a6f8->leave($__internal_06c45065f59c2558572d073366140bce7e6ea961fab9fbf43172908f5607a6f8_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_1b9514b106b87d2980aa9389efff1ed605031932525180ed3c56b4e336b4c1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9514b106b87d2980aa9389efff1ed605031932525180ed3c56b4e336b4c1cd->enter($__internal_1b9514b106b87d2980aa9389efff1ed605031932525180ed3c56b4e336b4c1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_64223c59e4174c79eae445bb8705ed71252cbb8879b305adabff0f984767840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64223c59e4174c79eae445bb8705ed71252cbb8879b305adabff0f984767840e->enter($__internal_64223c59e4174c79eae445bb8705ed71252cbb8879b305adabff0f984767840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_64223c59e4174c79eae445bb8705ed71252cbb8879b305adabff0f984767840e->leave($__internal_64223c59e4174c79eae445bb8705ed71252cbb8879b305adabff0f984767840e_prof);

        
        $__internal_1b9514b106b87d2980aa9389efff1ed605031932525180ed3c56b4e336b4c1cd->leave($__internal_1b9514b106b87d2980aa9389efff1ed605031932525180ed3c56b4e336b4c1cd_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_b068ae88e94cd6855a97b3cde947453a8ddfdb26d6139f12710ad3d88db36c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b068ae88e94cd6855a97b3cde947453a8ddfdb26d6139f12710ad3d88db36c43->enter($__internal_b068ae88e94cd6855a97b3cde947453a8ddfdb26d6139f12710ad3d88db36c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_de3d67645c6d83a838cfa034e96a27a1596fcd7a42089609d4af1c4ec6298432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3d67645c6d83a838cfa034e96a27a1596fcd7a42089609d4af1c4ec6298432->enter($__internal_de3d67645c6d83a838cfa034e96a27a1596fcd7a42089609d4af1c4ec6298432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_de3d67645c6d83a838cfa034e96a27a1596fcd7a42089609d4af1c4ec6298432->leave($__internal_de3d67645c6d83a838cfa034e96a27a1596fcd7a42089609d4af1c4ec6298432_prof);

        
        $__internal_b068ae88e94cd6855a97b3cde947453a8ddfdb26d6139f12710ad3d88db36c43->leave($__internal_b068ae88e94cd6855a97b3cde947453a8ddfdb26d6139f12710ad3d88db36c43_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_b5eed906930d8f6b9061d08769a6ec00e0e5b473ccf9ca7cac432a4691cfe342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5eed906930d8f6b9061d08769a6ec00e0e5b473ccf9ca7cac432a4691cfe342->enter($__internal_b5eed906930d8f6b9061d08769a6ec00e0e5b473ccf9ca7cac432a4691cfe342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_9a3f066e174cc665fda4343958a43165f01228cc2c3e0146eb4ce4f632b4dc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3f066e174cc665fda4343958a43165f01228cc2c3e0146eb4ce4f632b4dc9c->enter($__internal_9a3f066e174cc665fda4343958a43165f01228cc2c3e0146eb4ce4f632b4dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_9a3f066e174cc665fda4343958a43165f01228cc2c3e0146eb4ce4f632b4dc9c->leave($__internal_9a3f066e174cc665fda4343958a43165f01228cc2c3e0146eb4ce4f632b4dc9c_prof);

        
        $__internal_b5eed906930d8f6b9061d08769a6ec00e0e5b473ccf9ca7cac432a4691cfe342->leave($__internal_b5eed906930d8f6b9061d08769a6ec00e0e5b473ccf9ca7cac432a4691cfe342_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_be38809b0f8a950c5a1e604ebecc7ca846b1f328f8eabbde41008f07d27547e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be38809b0f8a950c5a1e604ebecc7ca846b1f328f8eabbde41008f07d27547e6->enter($__internal_be38809b0f8a950c5a1e604ebecc7ca846b1f328f8eabbde41008f07d27547e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_69cf1d4d6eb5ce4bf3cc2b929de7726e08549e0b6bddf8c21e5f31a6015ef805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cf1d4d6eb5ce4bf3cc2b929de7726e08549e0b6bddf8c21e5f31a6015ef805->enter($__internal_69cf1d4d6eb5ce4bf3cc2b929de7726e08549e0b6bddf8c21e5f31a6015ef805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_69cf1d4d6eb5ce4bf3cc2b929de7726e08549e0b6bddf8c21e5f31a6015ef805->leave($__internal_69cf1d4d6eb5ce4bf3cc2b929de7726e08549e0b6bddf8c21e5f31a6015ef805_prof);

        
        $__internal_be38809b0f8a950c5a1e604ebecc7ca846b1f328f8eabbde41008f07d27547e6->leave($__internal_be38809b0f8a950c5a1e604ebecc7ca846b1f328f8eabbde41008f07d27547e6_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_5d2c9d26c7c2679e4f55aae5209f60cb08ad3684603e3e0313b1f72125f14206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2c9d26c7c2679e4f55aae5209f60cb08ad3684603e3e0313b1f72125f14206->enter($__internal_5d2c9d26c7c2679e4f55aae5209f60cb08ad3684603e3e0313b1f72125f14206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_10fd21d0c2fe3f7f17c20476119b0a026eb97fd73296629a7c163bd13ee49419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fd21d0c2fe3f7f17c20476119b0a026eb97fd73296629a7c163bd13ee49419->enter($__internal_10fd21d0c2fe3f7f17c20476119b0a026eb97fd73296629a7c163bd13ee49419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_10fd21d0c2fe3f7f17c20476119b0a026eb97fd73296629a7c163bd13ee49419->leave($__internal_10fd21d0c2fe3f7f17c20476119b0a026eb97fd73296629a7c163bd13ee49419_prof);

        
        $__internal_5d2c9d26c7c2679e4f55aae5209f60cb08ad3684603e3e0313b1f72125f14206->leave($__internal_5d2c9d26c7c2679e4f55aae5209f60cb08ad3684603e3e0313b1f72125f14206_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
