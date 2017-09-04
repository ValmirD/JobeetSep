<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_01671082f369c50201d3ae91cf5aa1461d98ec7991b87aadd4615d480a7dd3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33440e20a18a58481a2d3af82ba79b72e2c7d3ff2be3472f6e8a8a4e0bcf0d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33440e20a18a58481a2d3af82ba79b72e2c7d3ff2be3472f6e8a8a4e0bcf0d87->enter($__internal_33440e20a18a58481a2d3af82ba79b72e2c7d3ff2be3472f6e8a8a4e0bcf0d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_9bca0521d938fc2a1d21410113547c05d859b159137e35172f543659c1e4e4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bca0521d938fc2a1d21410113547c05d859b159137e35172f543659c1e4e4b4->enter($__internal_9bca0521d938fc2a1d21410113547c05d859b159137e35172f543659c1e4e4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_33440e20a18a58481a2d3af82ba79b72e2c7d3ff2be3472f6e8a8a4e0bcf0d87->leave($__internal_33440e20a18a58481a2d3af82ba79b72e2c7d3ff2be3472f6e8a8a4e0bcf0d87_prof);

        
        $__internal_9bca0521d938fc2a1d21410113547c05d859b159137e35172f543659c1e4e4b4->leave($__internal_9bca0521d938fc2a1d21410113547c05d859b159137e35172f543659c1e4e4b4_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_d2b5beb37119925e593d22b7ac3111a214b6ecd237602593bd231062119a0149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b5beb37119925e593d22b7ac3111a214b6ecd237602593bd231062119a0149->enter($__internal_d2b5beb37119925e593d22b7ac3111a214b6ecd237602593bd231062119a0149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_a332f39e4d27405427ae43db84a735f02ffce353577e50bb22d7e902afd4425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a332f39e4d27405427ae43db84a735f02ffce353577e50bb22d7e902afd4425f->enter($__internal_a332f39e4d27405427ae43db84a735f02ffce353577e50bb22d7e902afd4425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_a332f39e4d27405427ae43db84a735f02ffce353577e50bb22d7e902afd4425f->leave($__internal_a332f39e4d27405427ae43db84a735f02ffce353577e50bb22d7e902afd4425f_prof);

        
        $__internal_d2b5beb37119925e593d22b7ac3111a214b6ecd237602593bd231062119a0149->leave($__internal_d2b5beb37119925e593d22b7ac3111a214b6ecd237602593bd231062119a0149_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_e965b10822767ec024b3ff6dc61621fd3228247fa96efd13959d6b9e4ad6cce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e965b10822767ec024b3ff6dc61621fd3228247fa96efd13959d6b9e4ad6cce3->enter($__internal_e965b10822767ec024b3ff6dc61621fd3228247fa96efd13959d6b9e4ad6cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_4319a24de03358476ae62c4e4782934a9484ffb21da0c3791d2c41d1a4630403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4319a24de03358476ae62c4e4782934a9484ffb21da0c3791d2c41d1a4630403->enter($__internal_4319a24de03358476ae62c4e4782934a9484ffb21da0c3791d2c41d1a4630403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_4319a24de03358476ae62c4e4782934a9484ffb21da0c3791d2c41d1a4630403->leave($__internal_4319a24de03358476ae62c4e4782934a9484ffb21da0c3791d2c41d1a4630403_prof);

        
        $__internal_e965b10822767ec024b3ff6dc61621fd3228247fa96efd13959d6b9e4ad6cce3->leave($__internal_e965b10822767ec024b3ff6dc61621fd3228247fa96efd13959d6b9e4ad6cce3_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_2a37338bee9d529efff8e18086e1a2c741f4bc038138c8c9fa6e6186ec2a643b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a37338bee9d529efff8e18086e1a2c741f4bc038138c8c9fa6e6186ec2a643b->enter($__internal_2a37338bee9d529efff8e18086e1a2c741f4bc038138c8c9fa6e6186ec2a643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_c7aeb537dcb9105ea1d8851766aa3c47ffabe1efc15e906c0530d11922789965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7aeb537dcb9105ea1d8851766aa3c47ffabe1efc15e906c0530d11922789965->enter($__internal_c7aeb537dcb9105ea1d8851766aa3c47ffabe1efc15e906c0530d11922789965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_c7aeb537dcb9105ea1d8851766aa3c47ffabe1efc15e906c0530d11922789965->leave($__internal_c7aeb537dcb9105ea1d8851766aa3c47ffabe1efc15e906c0530d11922789965_prof);

        
        $__internal_2a37338bee9d529efff8e18086e1a2c741f4bc038138c8c9fa6e6186ec2a643b->leave($__internal_2a37338bee9d529efff8e18086e1a2c741f4bc038138c8c9fa6e6186ec2a643b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
