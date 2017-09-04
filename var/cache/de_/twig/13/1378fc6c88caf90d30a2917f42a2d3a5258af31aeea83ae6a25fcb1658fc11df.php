<?php

/* @EnsJobeet/Job/new.html.twig */
class __TwigTemplate_91caed3135d90868c7fff5e2dd2045dff36eec14f4b0489f8401f95be6b79838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/Job/new.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43cb08967e857ede6e0b78c2d37e31e5ac4ca0513536b9dcc5e4b4c6d89b6684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cb08967e857ede6e0b78c2d37e31e5ac4ca0513536b9dcc5e4b4c6d89b6684->enter($__internal_43cb08967e857ede6e0b78c2d37e31e5ac4ca0513536b9dcc5e4b4c6d89b6684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/new.html.twig"));

        $__internal_43b183b7a498e62702234c0b85453474b48d55c25c41cf51cee4023f062e3d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b183b7a498e62702234c0b85453474b48d55c25c41cf51cee4023f062e3d55->enter($__internal_43b183b7a498e62702234c0b85453474b48d55c25c41cf51cee4023f062e3d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/new.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43cb08967e857ede6e0b78c2d37e31e5ac4ca0513536b9dcc5e4b4c6d89b6684->leave($__internal_43cb08967e857ede6e0b78c2d37e31e5ac4ca0513536b9dcc5e4b4c6d89b6684_prof);

        
        $__internal_43b183b7a498e62702234c0b85453474b48d55c25c41cf51cee4023f062e3d55->leave($__internal_43b183b7a498e62702234c0b85453474b48d55c25c41cf51cee4023f062e3d55_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_d1a8015cecce1e2e10aa8e2c1658df06f3a7587f597922ec65d6e45e4e6dfeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a8015cecce1e2e10aa8e2c1658df06f3a7587f597922ec65d6e45e4e6dfeff->enter($__internal_d1a8015cecce1e2e10aa8e2c1658df06f3a7587f597922ec65d6e45e4e6dfeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        $__internal_bb7b5afb617a59061bc54128fee0ecd49a60ac466bfc0ee25d9f4732117e126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7b5afb617a59061bc54128fee0ecd49a60ac466bfc0ee25d9f4732117e126f->enter($__internal_bb7b5afb617a59061bc54128fee0ecd49a60ac466bfc0ee25d9f4732117e126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul class=\"error_list\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb7b5afb617a59061bc54128fee0ecd49a60ac466bfc0ee25d9f4732117e126f->leave($__internal_bb7b5afb617a59061bc54128fee0ecd49a60ac466bfc0ee25d9f4732117e126f_prof);

        
        $__internal_d1a8015cecce1e2e10aa8e2c1658df06f3a7587f597922ec65d6e45e4e6dfeff->leave($__internal_d1a8015cecce1e2e10aa8e2c1658df06f3a7587f597922ec65d6e45e4e6dfeff_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_004c024fdf9f97d23668b87485778b7746242372c80a50451ce90d1814f9f792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004c024fdf9f97d23668b87485778b7746242372c80a50451ce90d1814f9f792->enter($__internal_004c024fdf9f97d23668b87485778b7746242372c80a50451ce90d1814f9f792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2941026c473677bc494fe136e872084f8dd032e8e039d4bcdf7cf5a2489c3841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2941026c473677bc494fe136e872084f8dd032e8e039d4bcdf7cf5a2489c3841->enter($__internal_2941026c473677bc494fe136e872084f8dd032e8e039d4bcdf7cf5a2489c3841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2941026c473677bc494fe136e872084f8dd032e8e039d4bcdf7cf5a2489c3841->leave($__internal_2941026c473677bc494fe136e872084f8dd032e8e039d4bcdf7cf5a2489c3841_prof);

        
        $__internal_004c024fdf9f97d23668b87485778b7746242372c80a50451ce90d1814f9f792->leave($__internal_004c024fdf9f97d23668b87485778b7746242372c80a50451ce90d1814f9f792_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e9ce67827294b2a9147453eb1763e9f0d5ea7422e89214b96f3643c27c75c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9ce67827294b2a9147453eb1763e9f0d5ea7422e89214b96f3643c27c75c80->enter($__internal_8e9ce67827294b2a9147453eb1763e9f0d5ea7422e89214b96f3643c27c75c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f9fa8c282249f9965dd316eb240e4360628a3c1ee074d0084349c8102ac9f191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fa8c282249f9965dd316eb240e4360628a3c1ee074d0084349c8102ac9f191->enter($__internal_f9fa8c282249f9965dd316eb240e4360628a3c1ee074d0084349c8102ac9f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <h1>Job creation</h1>
    <form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_new");
        echo "\" method=\"post\" ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <table id=\"job_form\">
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"submit\" value=\"Preview your job\" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <th>";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryId", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryId", array()), 'errors');
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryId", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "howToApply", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "howToApply", array()), 'errors');
        echo "
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "howToApply", array()), 'widget');
        echo "
                    </td>
                </tr>

                <tr>
                    <th>";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPublic", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPublic", array()), 'errors');
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPublic", array()), 'widget');
        echo "
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    </td>
                </tr>
            </tbody>
        </table>

        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
        
";
        
        $__internal_f9fa8c282249f9965dd316eb240e4360628a3c1ee074d0084349c8102ac9f191->leave($__internal_f9fa8c282249f9965dd316eb240e4360628a3c1ee074d0084349c8102ac9f191_prof);

        
        $__internal_8e9ce67827294b2a9147453eb1763e9f0d5ea7422e89214b96f3643c27c75c80->leave($__internal_8e9ce67827294b2a9147453eb1763e9f0d5ea7422e89214b96f3643c27c75c80_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 116,  316 => 110,  312 => 109,  307 => 107,  299 => 102,  295 => 101,  290 => 99,  282 => 94,  278 => 93,  273 => 91,  266 => 87,  262 => 86,  257 => 84,  250 => 80,  246 => 79,  241 => 77,  234 => 73,  230 => 72,  225 => 70,  218 => 66,  214 => 65,  209 => 63,  202 => 59,  198 => 58,  193 => 56,  186 => 52,  182 => 51,  177 => 49,  170 => 45,  166 => 44,  161 => 42,  154 => 38,  150 => 37,  145 => 35,  129 => 24,  126 => 23,  117 => 22,  105 => 19,  100 => 18,  91 => 17,  80 => 14,  76 => 12,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EnsJobeetBundle::layout.html.twig' %}

{% form_theme form _self %}

{% block field_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul class=\"error_list\">
                {% for error in errors %}
                    <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>
                    {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock field_errors %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/ensjobeet/css/job.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block content %}
    <h1>Job creation</h1>
    <form action=\"{{ path('ens_job_new') }}\" method=\"post\" {{ form_start(form) }}
          <table id=\"job_form\">
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"submit\" value=\"Preview your job\" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <th>{{ form_label(form.categoryId) }}</th>
                    <td>
                        {{ form_errors(form.categoryId) }}
                        {{ form_widget(form.categoryId) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.type) }}</th>
                    <td>
                        {{ form_errors(form.type) }}
                        {{ form_widget(form.type) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.company) }}</th>
                    <td>
                        {{ form_errors(form.company) }}
                        {{ form_widget(form.company) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.file) }}</th>
                    <td>
                        {{ form_errors(form.file) }}
                        {{ form_widget(form.file) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.url) }}</th>
                    <td>
                        {{ form_errors(form.url) }}
                        {{ form_widget(form.url) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.position) }}</th>
                    <td>
                        {{ form_errors(form.position) }}
                        {{ form_widget(form.position) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.location) }}</th>
                    <td>
                        {{ form_errors(form.location) }}
                        {{ form_widget(form.location) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.description) }}</th>
                    <td>
                        {{ form_errors(form.description) }}
                        {{ form_widget(form.description) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.howToApply) }}</th>
                    <td>
                        {{ form_errors(form.howToApply) }}
                        {{ form_widget(form.howToApply) }}
                    </td>
                </tr>

                <tr>
                    <th>{{ form_label(form.isPublic) }}</th>
                    <td>
                        {{ form_errors(form.isPublic) }}
                        {{ form_widget(form.isPublic) }}
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(form.email) }}</th>
                    <td>
                        {{ form_errors(form.email) }}
                        {{ form_widget(form.email) }}
                    </td>
                </tr>
            </tbody>
        </table>

        {{ form_rest(form) }}
    </form>
        
{% endblock %}
", "@EnsJobeet/Job/new.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Job\\new.html.twig");
    }
}
