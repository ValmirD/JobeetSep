<?php

/* EnsJobeetBundle:Job:index.atom.twig */
class __TwigTemplate_812b52b2aa09aa915bc06f8573fbe04e16f9426a81b7c3b0b73f3ac163b46390 extends Twig_Template
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
        $__internal_1273ebaddf71bf5e20e95332c63431c8eb243ceec9bfc977cfa662e627c3dd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1273ebaddf71bf5e20e95332c63431c8eb243ceec9bfc977cfa662e627c3dd3a->enter($__internal_1273ebaddf71bf5e20e95332c63431c8eb243ceec9bfc977cfa662e627c3dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:index.atom.twig"));

        $__internal_e7d7d902256dbcd1c3e6920643c48cd549f96ad425734b873b0c7a43ef391f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d7d902256dbcd1c3e6920643c48cd549f96ad425734b873b0c7a43ef391f5d->enter($__internal_e7d7d902256dbcd1c3e6920643c48cd549f96ad425734b873b0c7a43ef391f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Job:index.atom.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_job", array("_format" => "atom"));
        echo "\" rel=\"self\"/>
    <link href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("EnsJobeetBundle_homepage");
        echo "\"/>
    <updated>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : $this->getContext($context, "lastUpdated")), "html", null, true);
        echo "</updated>
    <author><name>Jobeet</name></author>
    <id>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : $this->getContext($context, "feedId")), "html", null, true);
        echo "</id>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "            <entry>
                <title>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo ")</title>
                <link href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\" />
                <id>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</id>
                <updated>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
                <summary type=\"xhtml\">
                    <div xmlns=\"http://www.w3.org/1999/xhtml\">
                        ";
                // line 20
                if ($this->getAttribute($context["entity"], "logo", array())) {
                    // line 21
                    echo "                            <div>
                                <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                    echo "\">
                                    <img src=\"http://";
                    // line 23
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
                // line 27
                echo "                        <div>
                            ";
                // line 28
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
                echo "
                        </div>
                        <h4>How to apply?</h4>
                        <p>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
                echo "</p>
                    </div>
                </summary>
                <author><name>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</name></author>
            </entry>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</feed>";
        
        $__internal_1273ebaddf71bf5e20e95332c63431c8eb243ceec9bfc977cfa662e627c3dd3a->leave($__internal_1273ebaddf71bf5e20e95332c63431c8eb243ceec9bfc977cfa662e627c3dd3a_prof);

        
        $__internal_e7d7d902256dbcd1c3e6920643c48cd549f96ad425734b873b0c7a43ef391f5d->leave($__internal_e7d7d902256dbcd1c3e6920643c48cd549f96ad425734b873b0c7a43ef391f5d_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  125 => 37,  116 => 34,  110 => 31,  104 => 28,  101 => 27,  90 => 23,  86 => 22,  83 => 21,  81 => 20,  75 => 17,  71 => 16,  67 => 15,  61 => 14,  58 => 13,  53 => 12,  49 => 11,  44 => 9,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
    <title>Jobeet</title>
    <subtitle>Latest Jobs</subtitle>
    <link href=\"{{ url('ens_job', {'_format': 'atom'}) }}\" rel=\"self\"/>
    <link href=\"{{ url('EnsJobeetBundle_homepage') }}\"/>
    <updated>{{ lastUpdated }}</updated>
    <author><name>Jobeet</name></author>
    <id>{{ feedId }}</id>

    {% for category in categories %}
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
    {% endfor %}
</feed>", "EnsJobeetBundle:Job:index.atom.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle/Resources/views/Job/index.atom.twig");
    }
}
