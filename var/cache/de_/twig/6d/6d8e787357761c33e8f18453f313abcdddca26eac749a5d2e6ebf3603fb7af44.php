<?php

/* EnsJobeetBundle:Category:show.atom.twig */
class __TwigTemplate_8c3ec302cd926e120e13518ea645ad8c0b0ccd849af82b38f97dd5ebeaa8145c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be1b733bf6d1da886e52d94ce9e4e305b8a868b1fbfe5cccf8e3ed742002b712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1b733bf6d1da886e52d94ce9e4e305b8a868b1fbfe5cccf8e3ed742002b712->enter($__internal_be1b733bf6d1da886e52d94ce9e4e305b8a868b1fbfe5cccf8e3ed742002b712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.atom.twig"));

        $__internal_91dacf5385760817b2159f902878dc3a97dc0f5675774c8f87e75dc7aa3fac89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dacf5385760817b2159f902878dc3a97dc0f5675774c8f87e75dc7aa3fac89->enter($__internal_91dacf5385760817b2159f902878dc3a97dc0f5675774c8f87e75dc7aa3fac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.atom.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo ")</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()))), "html", null, true);
        echo "\" />
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()), 0, array(), "array"), "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "        <entry>
            <title>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo ")</title>
            <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\" />
            <id>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</id>
            <updated>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    ";
            // line 19
            if ($this->getAttribute($context["entity"], "logo", array())) {
                // line 20
                echo "                        <div>
                            <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                echo "\">
                                <img src=\"http://";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo " logo\" />
                            </a>
                        </div>
                    ";
            }
            // line 26
            echo "                    <div>
                        ";
            // line 27
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
            echo "
                    </div>
                    <h4>How to apply?</h4>
                    <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
            echo "</p>
                </div>
            </summary>
            <author><name>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</name></author>
        </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</feed>
";
        
        $__internal_be1b733bf6d1da886e52d94ce9e4e305b8a868b1fbfe5cccf8e3ed742002b712->leave($__internal_be1b733bf6d1da886e52d94ce9e4e305b8a868b1fbfe5cccf8e3ed742002b712_prof);

        
        $__internal_91dacf5385760817b2159f902878dc3a97dc0f5675774c8f87e75dc7aa3fac89->leave($__internal_91dacf5385760817b2159f902878dc3a97dc0f5675774c8f87e75dc7aa3fac89_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  114 => 33,  108 => 30,  102 => 27,  99 => 26,  88 => 22,  84 => 21,  81 => 20,  79 => 19,  73 => 16,  69 => 15,  65 => 14,  59 => 13,  56 => 12,  52 => 11,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet ({{ category.name }})</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"{{ url('ens_category_show', { 'slug': category.slug, '_format': 'atom' }) }}\" rel=\"self\" />
    <link href=\"{{ url('ens_category_show', { 'slug': category.slug }) }}\" />
    <updated>{{ category.activejobs[0].createdAt.format(constant('DATE_ATOM')) }}</updated>
    <author><name>Jobeet</name></author>
    <id>{{ feedId }}</id>

    {% for entity in category.activejobs %}
        <entry>
            <title>{{ entity.position }} ({{ entity.location }})</title>
            <link href=\"{{ url('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}\" />
            <id>{{ entity.id }}</id>
            <updated>{{ entity.createdAt.format(constant('DATE_ATOM')) }}</updated>
            <summary type=\"xhtml\">
                <div xmlns=\"http://www.w3.org/1999/xhtml\">
                    {% if entity.logo %}
                        <div>
                            <a href=\"{{ entity.url }}\">
                                <img src=\"http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }}\" alt=\"{{ entity.company }} logo\" />
                            </a>
                        </div>
                    {% endif %}
                    <div>
                        {{ entity.description|nl2br }}
                    </div>
                    <h4>How to apply?</h4>
                    <p>{{ entity.howtoapply }}</p>
                </div>
            </summary>
            <author><name>{{ entity.company }}</name></author>
        </entry>
    {% endfor %}
</feed>
", "EnsJobeetBundle:Category:show.atom.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Category/show.atom.twig");
    }
}
