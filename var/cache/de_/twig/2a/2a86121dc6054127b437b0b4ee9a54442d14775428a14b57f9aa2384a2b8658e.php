<?php

/* @EnsJobeet/layout.html.twig */
class __TwigTemplate_53c69d4b74b7d58f7ac3918aa41bec56fc9023d876066347865e08e2e2865b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24603057bde434d08d47b1cee811d397f0b743e2b67ba66081992e85fadae5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24603057bde434d08d47b1cee811d397f0b743e2b67ba66081992e85fadae5e1->enter($__internal_24603057bde434d08d47b1cee811d397f0b743e2b67ba66081992e85fadae5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/layout.html.twig"));

        $__internal_192567ba52cdc80d6802cf58c782266e2d362cd8d84cca313332c2cbe7b431ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192567ba52cdc80d6802cf58c782266e2d362cd8d84cca313332c2cbe7b431ba->enter($__internal_192567ba52cdc80d6802cf58c782266e2d362cd8d84cca313332c2cbe7b431ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_job", array("_format" => "atom"));
        echo "\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_homepage");
        echo "\">
                            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                        </a></h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_new");
        echo "\">Post a Job</a>
                            </div>
                        </div>

                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"job_history\">
                Recent viewed jobs:
                <ul>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "                        <li>
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute($context["job"], "locationslug", array()), "position" => $this->getAttribute($context["job"], "positionslug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>


            <div id=\"content\">
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "notice"), "method")) {
            // line 61
            echo "                    <div class=\"flash_notice\">
                        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 63
                echo "
                            ";
                // line 64
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                    </div>
                ";
        }
        // line 69
        echo "
                ";
        // line 70
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "error"), "method")) {
            // line 71
            echo "                    <div class=\"flash_error\">
                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 73
                echo "
                            ";
                // line 74
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </div>
                ";
        }
        // line 79
        echo "
                <div class=\"content\">
                    ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "                </div>
            </div>

            <div id=\"footer\">
                <div class=\"content\">
                    <span class=\"symfony\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                        powered by <a href=\"http://www.symfony.com/\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                        </a>
                    </span>
                    <ul>
                        <li><a href=\"\">About Jobeet</a></li>
                        <li class=\"feed\"><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job", array("_format" => "atom"));
        echo "\">Full feed</a></li>
                        <li><a href=\"\">Jobeet API</a></li>
                        <li class=\"last\"><a href=\"\">Affiliates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_24603057bde434d08d47b1cee811d397f0b743e2b67ba66081992e85fadae5e1->leave($__internal_24603057bde434d08d47b1cee811d397f0b743e2b67ba66081992e85fadae5e1_prof);

        
        $__internal_192567ba52cdc80d6802cf58c782266e2d362cd8d84cca313332c2cbe7b431ba->leave($__internal_192567ba52cdc80d6802cf58c782266e2d362cd8d84cca313332c2cbe7b431ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a72ba5141cfdb8fce8476722a614ccc467e996d3047ac7272f5ced65512236f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72ba5141cfdb8fce8476722a614ccc467e996d3047ac7272f5ced65512236f0->enter($__internal_a72ba5141cfdb8fce8476722a614ccc467e996d3047ac7272f5ced65512236f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e80500a0d5c7558733ef0c1fc3cc264b53ff4b0a5c818e2fa47864c115a4420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e80500a0d5c7558733ef0c1fc3cc264b53ff4b0a5c818e2fa47864c115a4420->enter($__internal_3e80500a0d5c7558733ef0c1fc3cc264b53ff4b0a5c818e2fa47864c115a4420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "                Jobeet - Your best job board
            ";
        
        $__internal_3e80500a0d5c7558733ef0c1fc3cc264b53ff4b0a5c818e2fa47864c115a4420->leave($__internal_3e80500a0d5c7558733ef0c1fc3cc264b53ff4b0a5c818e2fa47864c115a4420_prof);

        
        $__internal_a72ba5141cfdb8fce8476722a614ccc467e996d3047ac7272f5ced65512236f0->leave($__internal_a72ba5141cfdb8fce8476722a614ccc467e996d3047ac7272f5ced65512236f0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3308cbfe79d122b8f7ff45a899cf0fdda48f68ce70ff84bb9b7b0da1dd636772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3308cbfe79d122b8f7ff45a899cf0fdda48f68ce70ff84bb9b7b0da1dd636772->enter($__internal_3308cbfe79d122b8f7ff45a899cf0fdda48f68ce70ff84bb9b7b0da1dd636772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a24f01d3548ccd07d8d738de821d1e2d3e399146505c012cdb31ad7cd6b5c9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24f01d3548ccd07d8d738de821d1e2d3e399146505c012cdb31ad7cd6b5c9d2->enter($__internal_a24f01d3548ccd07d8d738de821d1e2d3e399146505c012cdb31ad7cd6b5c9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_a24f01d3548ccd07d8d738de821d1e2d3e399146505c012cdb31ad7cd6b5c9d2->leave($__internal_a24f01d3548ccd07d8d738de821d1e2d3e399146505c012cdb31ad7cd6b5c9d2_prof);

        
        $__internal_3308cbfe79d122b8f7ff45a899cf0fdda48f68ce70ff84bb9b7b0da1dd636772->leave($__internal_3308cbfe79d122b8f7ff45a899cf0fdda48f68ce70ff84bb9b7b0da1dd636772_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_107b3b8c0423add181233c06525864a890a322bd60a25708fbe7b159f157da78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107b3b8c0423add181233c06525864a890a322bd60a25708fbe7b159f157da78->enter($__internal_107b3b8c0423add181233c06525864a890a322bd60a25708fbe7b159f157da78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_acff7fd999a0adbd57d96e14bef28e9e3f730147b95de4763e8568eb8853824d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acff7fd999a0adbd57d96e14bef28e9e3f730147b95de4763e8568eb8853824d->enter($__internal_acff7fd999a0adbd57d96e14bef28e9e3f730147b95de4763e8568eb8853824d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        ";
        
        $__internal_acff7fd999a0adbd57d96e14bef28e9e3f730147b95de4763e8568eb8853824d->leave($__internal_acff7fd999a0adbd57d96e14bef28e9e3f730147b95de4763e8568eb8853824d_prof);

        
        $__internal_107b3b8c0423add181233c06525864a890a322bd60a25708fbe7b159f157da78->leave($__internal_107b3b8c0423add181233c06525864a890a322bd60a25708fbe7b159f157da78_prof);

    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a29a7ff5b8f33ccd809434c58799a308e7c4ad906fb258195985dccd0d9e2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a29a7ff5b8f33ccd809434c58799a308e7c4ad906fb258195985dccd0d9e2f8->enter($__internal_0a29a7ff5b8f33ccd809434c58799a308e7c4ad906fb258195985dccd0d9e2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5cf80f29fac844a8a3668e6e84252d7f9d36935e63e48446236330f53c40f8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf80f29fac844a8a3668e6e84252d7f9d36935e63e48446236330f53c40f8f4->enter($__internal_5cf80f29fac844a8a3668e6e84252d7f9d36935e63e48446236330f53c40f8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 82
        echo "                    ";
        
        $__internal_5cf80f29fac844a8a3668e6e84252d7f9d36935e63e48446236330f53c40f8f4->leave($__internal_5cf80f29fac844a8a3668e6e84252d7f9d36935e63e48446236330f53c40f8f4_prof);

        
        $__internal_0a29a7ff5b8f33ccd809434c58799a308e7c4ad906fb258195985dccd0d9e2f8->leave($__internal_0a29a7ff5b8f33ccd809434c58799a308e7c4ad906fb258195985dccd0d9e2f8_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 82,  285 => 81,  275 => 14,  266 => 13,  253 => 11,  244 => 10,  233 => 6,  224 => 5,  204 => 96,  196 => 91,  191 => 89,  183 => 83,  181 => 81,  177 => 79,  173 => 77,  164 => 74,  161 => 73,  157 => 72,  154 => 71,  152 => 70,  149 => 69,  145 => 67,  136 => 64,  133 => 63,  129 => 62,  126 => 61,  124 => 60,  117 => 55,  104 => 52,  101 => 51,  97 => 50,  74 => 30,  64 => 23,  60 => 22,  51 => 16,  46 => 15,  43 => 13,  41 => 10,  37 => 8,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>
            {% block title %}
                Jobeet - Your best job board
            {% endblock %}
        </title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/ensjobeet/css/main.css') }}\" type=\"text/css\" media=\"all\" />
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('bundles/ensjobeet/images/favicon.ico') }}\" />
        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"{{ url('ens_job', {'_format': 'atom'}) }}\" />
    </head>
    <body>
        <div id=\"container\">
            <div id=\"header\">
                <div class=\"content\">
                    <h1><a href=\"{{ path('ens_job_homepage') }}\">
                            <img src=\"{{ asset('bundles/ensjobeet/images/logo.jpg') }}\" alt=\"Jobeet Job Board\" />
                        </a></h1>

                    <div id=\"sub_header\">
                        <div class=\"post\">
                            <h2>Ask for people</h2>
                            <div>
                                <a href=\"{{ path('ens_job_new') }}\">Post a Job</a>
                            </div>
                        </div>

                        <div class=\"search\">
                            <h2>Ask for a job</h2>
                            <form action=\"\" method=\"get\">
                                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                                <input type=\"submit\" value=\"search\" />
                                <div class=\"help\">
                                    Enter some keywords (city, country, position, ...)
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"job_history\">
                Recent viewed jobs:
                <ul>
                    {% for job in app.session.get('job_history') %}
                        <li>
                            <a href=\"{{ path('ens_job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}\">{{ job.position }} - {{ job.company }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </div>


            <div id=\"content\">
                {% if app.session.flashbag.has('notice') %}
                    <div class=\"flash_notice\">
                        {% for flashMessage in app.session.flashbag.get('notice') %}

                            {{ flashMessage }}

                        {% endfor %}
                    </div>
                {% endif %}

                {% if app.session.flashbag.has('error') %}
                    <div class=\"flash_error\">
                        {% for flashMessage in app.session.flashbag.get('error') %}

                            {{ flashMessage }}

                        {% endfor %}
                    </div>
                {% endif %}

                <div class=\"content\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>

            <div id=\"footer\">
                <div class=\"content\">
                    <span class=\"symfony\">
                        <img src=\"{{ asset('bundles/ensjobeet/images/jobeet-mini.png') }}\" />
                        powered by <a href=\"http://www.symfony.com/\">
                            <img src=\"{{ asset('bundles/ensjobeet/images/symfony.gif') }}\" alt=\"symfony framework\" />
                        </a>
                    </span>
                    <ul>
                        <li><a href=\"\">About Jobeet</a></li>
                        <li class=\"feed\"><a href=\"{{ path('ens_job', {'_format': 'atom'}) }}\">Full feed</a></li>
                        <li><a href=\"\">Jobeet API</a></li>
                        <li class=\"last\"><a href=\"\">Affiliates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
", "@EnsJobeet/layout.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\layout.html.twig");
    }
}
