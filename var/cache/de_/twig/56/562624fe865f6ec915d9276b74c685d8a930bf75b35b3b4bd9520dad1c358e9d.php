<?php

/* @EnsJobeet/Job/edit.html.twig */
class __TwigTemplate_7cb207a328278bf8d46add4eee7237a6b76264a434df2094d6ce30f9cf006628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "@EnsJobeet/Job/edit.html.twig", 1);
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
        $__internal_67d1dc8a9a2ca9a39a6655250309b6c47e4b240d8e147d5392bf5c66eaa1327b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d1dc8a9a2ca9a39a6655250309b6c47e4b240d8e147d5392bf5c66eaa1327b->enter($__internal_67d1dc8a9a2ca9a39a6655250309b6c47e4b240d8e147d5392bf5c66eaa1327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/edit.html.twig"));

        $__internal_680e2e6f2296ab5a6f5cd0b64e700f1e8e15182a10cd993d306d88555719c9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680e2e6f2296ab5a6f5cd0b64e700f1e8e15182a10cd993d306d88555719c9bd->enter($__internal_680e2e6f2296ab5a6f5cd0b64e700f1e8e15182a10cd993d306d88555719c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d1dc8a9a2ca9a39a6655250309b6c47e4b240d8e147d5392bf5c66eaa1327b->leave($__internal_67d1dc8a9a2ca9a39a6655250309b6c47e4b240d8e147d5392bf5c66eaa1327b_prof);

        
        $__internal_680e2e6f2296ab5a6f5cd0b64e700f1e8e15182a10cd993d306d88555719c9bd->leave($__internal_680e2e6f2296ab5a6f5cd0b64e700f1e8e15182a10cd993d306d88555719c9bd_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_60bba2c013c34d1080e237b4dedb89c8632328e6f50a129bae9b8524370ddd1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bba2c013c34d1080e237b4dedb89c8632328e6f50a129bae9b8524370ddd1c->enter($__internal_60bba2c013c34d1080e237b4dedb89c8632328e6f50a129bae9b8524370ddd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        $__internal_2184a3b1384d11e27ea52be6741860a6e8ccc9922404549162bd9a9856543d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2184a3b1384d11e27ea52be6741860a6e8ccc9922404549162bd9a9856543d11->enter($__internal_2184a3b1384d11e27ea52be6741860a6e8ccc9922404549162bd9a9856543d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul>
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
        
        $__internal_2184a3b1384d11e27ea52be6741860a6e8ccc9922404549162bd9a9856543d11->leave($__internal_2184a3b1384d11e27ea52be6741860a6e8ccc9922404549162bd9a9856543d11_prof);

        
        $__internal_60bba2c013c34d1080e237b4dedb89c8632328e6f50a129bae9b8524370ddd1c->leave($__internal_60bba2c013c34d1080e237b4dedb89c8632328e6f50a129bae9b8524370ddd1c_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3edd5e462f782e24e216c55762bc309254cdd5cc2daf0f662044a9f4c14b1b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edd5e462f782e24e216c55762bc309254cdd5cc2daf0f662044a9f4c14b1b04->enter($__internal_3edd5e462f782e24e216c55762bc309254cdd5cc2daf0f662044a9f4c14b1b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b1072d051838d1f41cce2d92538eee2fab35b836eaf43bd42df37f32313ce34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1072d051838d1f41cce2d92538eee2fab35b836eaf43bd42df37f32313ce34->enter($__internal_0b1072d051838d1f41cce2d92538eee2fab35b836eaf43bd42df37f32313ce34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b1072d051838d1f41cce2d92538eee2fab35b836eaf43bd42df37f32313ce34->leave($__internal_0b1072d051838d1f41cce2d92538eee2fab35b836eaf43bd42df37f32313ce34_prof);

        
        $__internal_3edd5e462f782e24e216c55762bc309254cdd5cc2daf0f662044a9f4c14b1b04->leave($__internal_3edd5e462f782e24e216c55762bc309254cdd5cc2daf0f662044a9f4c14b1b04_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_c195f5f72af409f6b53ef72bc7b5c72ea78af495b047e795b73cedac428b31d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c195f5f72af409f6b53ef72bc7b5c72ea78af495b047e795b73cedac428b31d3->enter($__internal_c195f5f72af409f6b53ef72bc7b5c72ea78af495b047e795b73cedac428b31d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d2403dff0c010ade625be3fb83c6a304eb7fed4238714f51618c85588712730a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2403dff0c010ade625be3fb83c6a304eb7fed4238714f51618c85588712730a->enter($__internal_d2403dff0c010ade625be3fb83c6a304eb7fed4238714f51618c85588712730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <h1>Job edit</h1>
    <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoryId", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoryId", array()), 'errors');
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoryId", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'label');
        echo "</th>
                    <td>

                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'errors');
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "company", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'errors');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'errors');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "howToApply", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "howToApply", array()), 'errors');
        echo "
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "howToApply", array()), 'widget');
        echo "
                    </td>
                </tr>

                <tr>
                    <th>";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isPublic", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isPublic", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isPublic", array()), 'widget');
        echo "
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "</th>
                    <td>
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                    </td>
                </tr>
            </tbody>
        </table>

        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
    </form>
        
";
        
        $__internal_d2403dff0c010ade625be3fb83c6a304eb7fed4238714f51618c85588712730a->leave($__internal_d2403dff0c010ade625be3fb83c6a304eb7fed4238714f51618c85588712730a_prof);

        
        $__internal_c195f5f72af409f6b53ef72bc7b5c72ea78af495b047e795b73cedac428b31d3->leave($__internal_c195f5f72af409f6b53ef72bc7b5c72ea78af495b047e795b73cedac428b31d3_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 117,  317 => 111,  313 => 110,  308 => 108,  300 => 103,  296 => 102,  291 => 100,  283 => 95,  279 => 94,  274 => 92,  267 => 88,  263 => 87,  258 => 85,  251 => 81,  247 => 80,  242 => 78,  235 => 74,  231 => 73,  226 => 71,  219 => 67,  215 => 66,  210 => 64,  203 => 60,  199 => 59,  194 => 57,  187 => 53,  183 => 52,  178 => 50,  171 => 46,  167 => 45,  161 => 42,  154 => 38,  150 => 37,  145 => 35,  129 => 24,  126 => 23,  117 => 22,  105 => 19,  100 => 18,  91 => 17,  80 => 14,  76 => 12,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% form_theme edit_form _self %}

{% block field_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul>
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
    <h1>Job edit</h1>
    <form action=\"{{ path('ens_job_edit', { 'token': job.token }) }}\" method=\"post\" {{ form_start(edit_form) }}
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
                    <th>{{ form_label(edit_form.categoryId) }}</th>
                    <td>
                        {{ form_errors(edit_form.categoryId) }}
                        {{ form_widget(edit_form.categoryId) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.type) }}</th>
                    <td>

                        {{ form_errors(edit_form.type) }}
                        {{ form_widget(edit_form.type) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.company) }}</th>
                    <td>
                        {{ form_errors(edit_form.company) }}
                        {{ form_widget(edit_form.company) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.file) }}</th>
                    <td>
                        {{ form_errors(edit_form.file) }}
                        {{ form_widget(edit_form.file) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.url) }}</th>
                    <td>
                        {{ form_errors(edit_form.url) }}
                        {{ form_widget(edit_form.url) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.position) }}</th>
                    <td>
                        {{ form_errors(edit_form.position) }}
                        {{ form_widget(edit_form.position) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.location) }}</th>
                    <td>
                        {{ form_errors(edit_form.location) }}
                        {{ form_widget(edit_form.location) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.description) }}</th>
                    <td>
                        {{ form_errors(edit_form.description) }}
                        {{ form_widget(edit_form.description) }}
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.howToApply) }}</th>
                    <td>
                        {{ form_errors(edit_form.howToApply) }}
                        {{ form_widget(edit_form.howToApply) }}
                    </td>
                </tr>

                <tr>
                    <th>{{ form_label(edit_form.isPublic) }}</th>
                    <td>
                        {{ form_errors(edit_form.isPublic) }}
                        {{ form_widget(edit_form.isPublic) }}
                        <br /> Whether the job can also be published on affiliate websites or not.
                    </td>
                </tr>
                <tr>
                    <th>{{ form_label(edit_form.email) }}</th>
                    <td>
                        {{ form_errors(edit_form.email) }}
                        {{ form_widget(edit_form.email) }}
                    </td>
                </tr>
            </tbody>
        </table>

        {{ form_rest(edit_form) }}
    </form>
        
{% endblock %}
", "@EnsJobeet/Job/edit.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Job\\edit.html.twig");
    }
}
