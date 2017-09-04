<?php

/* EnsJobeetBundle:Job:edit.html.twig */
class __TwigTemplate_53349e003b1efabe9d92ee3a7210d7deade1c22cb7d399eb481ae09d4ce4f650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJobeetBundle::layout.html.twig", "EnsJobeetBundle:Job:edit.html.twig", 1);
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
        $__internal_cc7708785a49072331113cbaedfbc7210c4bf3f87a22b1557a5df5a91cd9f1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7708785a49072331113cbaedfbc7210c4bf3f87a22b1557a5df5a91cd9f1c4->enter($__internal_cc7708785a49072331113cbaedfbc7210c4bf3f87a22b1557a5df5a91cd9f1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:edit.html.twig"));

        $__internal_213580319ece1902751fe3027e05b35b047c059cbce9f97433e0190fd6b986c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213580319ece1902751fe3027e05b35b047c059cbce9f97433e0190fd6b986c5->enter($__internal_213580319ece1902751fe3027e05b35b047c059cbce9f97433e0190fd6b986c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc7708785a49072331113cbaedfbc7210c4bf3f87a22b1557a5df5a91cd9f1c4->leave($__internal_cc7708785a49072331113cbaedfbc7210c4bf3f87a22b1557a5df5a91cd9f1c4_prof);

        
        $__internal_213580319ece1902751fe3027e05b35b047c059cbce9f97433e0190fd6b986c5->leave($__internal_213580319ece1902751fe3027e05b35b047c059cbce9f97433e0190fd6b986c5_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_909ae26fbb3d9ff1869af99fb133c01a548881937a6236464ae1532ae624c66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909ae26fbb3d9ff1869af99fb133c01a548881937a6236464ae1532ae624c66b->enter($__internal_909ae26fbb3d9ff1869af99fb133c01a548881937a6236464ae1532ae624c66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        $__internal_f03b32180de235941f155f4a269e0883b5c8230d2ac014e1d3eab2925769326c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03b32180de235941f155f4a269e0883b5c8230d2ac014e1d3eab2925769326c->enter($__internal_f03b32180de235941f155f4a269e0883b5c8230d2ac014e1d3eab2925769326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

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
        
        $__internal_f03b32180de235941f155f4a269e0883b5c8230d2ac014e1d3eab2925769326c->leave($__internal_f03b32180de235941f155f4a269e0883b5c8230d2ac014e1d3eab2925769326c_prof);

        
        $__internal_909ae26fbb3d9ff1869af99fb133c01a548881937a6236464ae1532ae624c66b->leave($__internal_909ae26fbb3d9ff1869af99fb133c01a548881937a6236464ae1532ae624c66b_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86d8cabae305a20a90389db00af1eb3bb4c582a679a1ce2763e59b07b0b1ebf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d8cabae305a20a90389db00af1eb3bb4c582a679a1ce2763e59b07b0b1ebf2->enter($__internal_86d8cabae305a20a90389db00af1eb3bb4c582a679a1ce2763e59b07b0b1ebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4511c7f0b40c744ddbe88296f7edb27dbd36e1e18320509f12730e12a54f3415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4511c7f0b40c744ddbe88296f7edb27dbd36e1e18320509f12730e12a54f3415->enter($__internal_4511c7f0b40c744ddbe88296f7edb27dbd36e1e18320509f12730e12a54f3415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4511c7f0b40c744ddbe88296f7edb27dbd36e1e18320509f12730e12a54f3415->leave($__internal_4511c7f0b40c744ddbe88296f7edb27dbd36e1e18320509f12730e12a54f3415_prof);

        
        $__internal_86d8cabae305a20a90389db00af1eb3bb4c582a679a1ce2763e59b07b0b1ebf2->leave($__internal_86d8cabae305a20a90389db00af1eb3bb4c582a679a1ce2763e59b07b0b1ebf2_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd6493b8964c552ed3ee15cd59ca7f88247330bca8ddbd9fedc9d20f7541edf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6493b8964c552ed3ee15cd59ca7f88247330bca8ddbd9fedc9d20f7541edf5->enter($__internal_bd6493b8964c552ed3ee15cd59ca7f88247330bca8ddbd9fedc9d20f7541edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b3627e909c0af7831c1247fc3fd3fa877426efc9f307dc6ad5f101b242042330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3627e909c0af7831c1247fc3fd3fa877426efc9f307dc6ad5f101b242042330->enter($__internal_b3627e909c0af7831c1247fc3fd3fa877426efc9f307dc6ad5f101b242042330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b3627e909c0af7831c1247fc3fd3fa877426efc9f307dc6ad5f101b242042330->leave($__internal_b3627e909c0af7831c1247fc3fd3fa877426efc9f307dc6ad5f101b242042330_prof);

        
        $__internal_bd6493b8964c552ed3ee15cd59ca7f88247330bca8ddbd9fedc9d20f7541edf5->leave($__internal_bd6493b8964c552ed3ee15cd59ca7f88247330bca8ddbd9fedc9d20f7541edf5_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:edit.html.twig";
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
", "EnsJobeetBundle:Job:edit.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Job/edit.html.twig");
    }
}
