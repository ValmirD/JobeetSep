<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_58926789f9c508ea128b2b2dd925b38609aa56bab5f9a8575adcdf293703d9ca extends Twig_Template
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
        $__internal_120449efc7f509a52854e7aceba86d705ecfef8d059392a6f3f2947a6f550773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120449efc7f509a52854e7aceba86d705ecfef8d059392a6f3f2947a6f550773->enter($__internal_120449efc7f509a52854e7aceba86d705ecfef8d059392a6f3f2947a6f550773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle::layout.html.twig"));

        $__internal_022addd84e4e129ea1dd923cb1246e443b7b9783ddfd0a580bd778b8d1f9882a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022addd84e4e129ea1dd923cb1246e443b7b9783ddfd0a580bd778b8d1f9882a->enter($__internal_022addd84e4e129ea1dd923cb1246e443b7b9783ddfd0a580bd778b8d1f9882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle::layout.html.twig"));

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
        
        $__internal_120449efc7f509a52854e7aceba86d705ecfef8d059392a6f3f2947a6f550773->leave($__internal_120449efc7f509a52854e7aceba86d705ecfef8d059392a6f3f2947a6f550773_prof);

        
        $__internal_022addd84e4e129ea1dd923cb1246e443b7b9783ddfd0a580bd778b8d1f9882a->leave($__internal_022addd84e4e129ea1dd923cb1246e443b7b9783ddfd0a580bd778b8d1f9882a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88372500f008b0dba53eba1846d7679e9edd902d337ba638a243caed6635a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88372500f008b0dba53eba1846d7679e9edd902d337ba638a243caed6635a22->enter($__internal_f88372500f008b0dba53eba1846d7679e9edd902d337ba638a243caed6635a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b6086f4f92cc0659a93eff2a083ac76a20c00b048a3716c9cb3331c4cbc36d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6086f4f92cc0659a93eff2a083ac76a20c00b048a3716c9cb3331c4cbc36d9->enter($__internal_6b6086f4f92cc0659a93eff2a083ac76a20c00b048a3716c9cb3331c4cbc36d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "                Jobeet - Your best job board
            ";
        
        $__internal_6b6086f4f92cc0659a93eff2a083ac76a20c00b048a3716c9cb3331c4cbc36d9->leave($__internal_6b6086f4f92cc0659a93eff2a083ac76a20c00b048a3716c9cb3331c4cbc36d9_prof);

        
        $__internal_f88372500f008b0dba53eba1846d7679e9edd902d337ba638a243caed6635a22->leave($__internal_f88372500f008b0dba53eba1846d7679e9edd902d337ba638a243caed6635a22_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54bd595fd9f98ba920384a1118fdd35a91f8e01602fa240a5c13f55c26b58067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bd595fd9f98ba920384a1118fdd35a91f8e01602fa240a5c13f55c26b58067->enter($__internal_54bd595fd9f98ba920384a1118fdd35a91f8e01602fa240a5c13f55c26b58067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_371a787b8f21b3439fe75ab2b38cf01e5bb4bd1b656b37c509653812e96ee128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371a787b8f21b3439fe75ab2b38cf01e5bb4bd1b656b37c509653812e96ee128->enter($__internal_371a787b8f21b3439fe75ab2b38cf01e5bb4bd1b656b37c509653812e96ee128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_371a787b8f21b3439fe75ab2b38cf01e5bb4bd1b656b37c509653812e96ee128->leave($__internal_371a787b8f21b3439fe75ab2b38cf01e5bb4bd1b656b37c509653812e96ee128_prof);

        
        $__internal_54bd595fd9f98ba920384a1118fdd35a91f8e01602fa240a5c13f55c26b58067->leave($__internal_54bd595fd9f98ba920384a1118fdd35a91f8e01602fa240a5c13f55c26b58067_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_562eba16b2d57d0355950e7f070a9dd9d141a333b66067d944571632d92fd827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562eba16b2d57d0355950e7f070a9dd9d141a333b66067d944571632d92fd827->enter($__internal_562eba16b2d57d0355950e7f070a9dd9d141a333b66067d944571632d92fd827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ceb6e697c5207005dfc8302fe6b77e90d051843d7af8ce0582ac482ade82d3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb6e697c5207005dfc8302fe6b77e90d051843d7af8ce0582ac482ade82d3aa->enter($__internal_ceb6e697c5207005dfc8302fe6b77e90d051843d7af8ce0582ac482ade82d3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        ";
        
        $__internal_ceb6e697c5207005dfc8302fe6b77e90d051843d7af8ce0582ac482ade82d3aa->leave($__internal_ceb6e697c5207005dfc8302fe6b77e90d051843d7af8ce0582ac482ade82d3aa_prof);

        
        $__internal_562eba16b2d57d0355950e7f070a9dd9d141a333b66067d944571632d92fd827->leave($__internal_562eba16b2d57d0355950e7f070a9dd9d141a333b66067d944571632d92fd827_prof);

    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        $__internal_a23c3c553e9d06eb1dc727051f81f85263fe07fd4b982a793bf18e4c35dae8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23c3c553e9d06eb1dc727051f81f85263fe07fd4b982a793bf18e4c35dae8c3->enter($__internal_a23c3c553e9d06eb1dc727051f81f85263fe07fd4b982a793bf18e4c35dae8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_115469d3b70fc0c46075cff77f24e32d2ee9e0294ccf6fb68daf2759a7eb1e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115469d3b70fc0c46075cff77f24e32d2ee9e0294ccf6fb68daf2759a7eb1e1a->enter($__internal_115469d3b70fc0c46075cff77f24e32d2ee9e0294ccf6fb68daf2759a7eb1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 82
        echo "                    ";
        
        $__internal_115469d3b70fc0c46075cff77f24e32d2ee9e0294ccf6fb68daf2759a7eb1e1a->leave($__internal_115469d3b70fc0c46075cff77f24e32d2ee9e0294ccf6fb68daf2759a7eb1e1a_prof);

        
        $__internal_a23c3c553e9d06eb1dc727051f81f85263fe07fd4b982a793bf18e4c35dae8c3->leave($__internal_a23c3c553e9d06eb1dc727051f81f85263fe07fd4b982a793bf18e4c35dae8c3_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
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
", "EnsJobeetBundle::layout.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/layout.html.twig");
    }
}
