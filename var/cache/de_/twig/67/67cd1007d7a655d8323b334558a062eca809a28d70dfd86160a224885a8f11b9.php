<?php

/* @EnsJobeet/Job/admin.html.twig */
class __TwigTemplate_247ecd74e7ad2f26b8411a4ee76e8bd94e80ce2bb55044b4cbef134afb6b4b04 extends Twig_Template
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
        $__internal_a0b4ffefd67ada59b29b5857f07fa7b50f2c0f0452bab1e7581e5aef333eaa61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b4ffefd67ada59b29b5857f07fa7b50f2c0f0452bab1e7581e5aef333eaa61->enter($__internal_a0b4ffefd67ada59b29b5857f07fa7b50f2c0f0452bab1e7581e5aef333eaa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/admin.html.twig"));

        $__internal_ee8e10efdca7eb64ee832df668ebecab1a68bb97ceefc96cc89efaec78211fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8e10efdca7eb64ee832df668ebecab1a68bb97ceefc96cc89efaec78211fb0->enter($__internal_ee8e10efdca7eb64ee832df668ebecab1a68bb97ceefc96cc89efaec78211fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Job/admin.html.twig"));

        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">Edit</a></li>
            <li>
                <form action=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 8
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 13
        echo "        <li>
            <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"GET\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if (!confirm('Are you sure?')) {
                            return false;
                        }\">Delete</button>
            </form>
        </li>
        ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 22
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 23
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired", array())) {
                // line 24
                echo "                    Expired
                ";
            } else {
                // line 26
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 28
            echo "
                ";
            // line 29
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                // line 30
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ens_job_extend", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
                echo "\" method=\"post\">
                        ";
                // line 31
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : $this->getContext($context, "extend_form")), 'widget');
                echo "
                        <button type=\"submit\">Extend</button> for another 30 days
                    </form>
                ";
            }
            // line 35
            echo "            </li>
        ";
        } else {
            // line 37
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ens_job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug", array()), "location" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug", array()))), "html", null, true);
            echo "\">URL</a> to manage this job in the future.]
            </li>
        ";
        }
        // line 41
        echo "    </ul>
</div>
";
        
        $__internal_a0b4ffefd67ada59b29b5857f07fa7b50f2c0f0452bab1e7581e5aef333eaa61->leave($__internal_a0b4ffefd67ada59b29b5857f07fa7b50f2c0f0452bab1e7581e5aef333eaa61_prof);

        
        $__internal_ee8e10efdca7eb64ee832df668ebecab1a68bb97ceefc96cc89efaec78211fb0->leave($__internal_ee8e10efdca7eb64ee832df668ebecab1a68bb97ceefc96cc89efaec78211fb0_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Job/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  111 => 38,  108 => 37,  104 => 35,  97 => 31,  92 => 30,  90 => 29,  87 => 28,  81 => 26,  77 => 24,  75 => 23,  68 => 22,  66 => 21,  57 => 15,  53 => 14,  50 => 13,  42 => 8,  38 => 7,  32 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        {% if not job.isActivated %}
            <li><a href=\"{{ path('ens_job_edit', { 'token': job.token }) }}\">Edit</a></li>
            <li>
                <form action=\"{{ path('ens_job_publish', { 'token': job.token }) }}\" method=\"post\">
                    {{ form_widget(publish_form) }}
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        {% endif %}
        <li>
            <form action=\"{{ path('ens_job_delete', { 'token': job.token }) }}\" method=\"GET\">
                {{ form_widget(delete_form) }}
                <button type=\"submit\" onclick=\"if (!confirm('Are you sure?')) {
                            return false;
                        }\">Delete</button>
            </form>
        </li>
        {% if job.isActivated %}
            <li {% if job.expiresSoon %} class=\"expires_soon\" {% endif %}>
                {% if job.isExpired %}
                    Expired
                {% else %}
                    Expires in <strong>{{ job.getDaysBeforeExpires }}</strong> days
                {% endif %}

                {% if job.expiresSoon %}
                    <form action=\"{{ path('ens_job_extend', { 'token': job.token }) }}\" method=\"post\">
                        {{ form_widget(extend_form) }}
                        <button type=\"submit\">Extend</button> for another 30 days
                    </form>
                {% endif %}
            </li>
        {% else %}
            <li>
                [Bookmark this <a href=\"{{ url('ens_job_preview', { 'token': job.token, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}\">URL</a> to manage this job in the future.]
            </li>
        {% endif %}
    </ul>
</div>
", "@EnsJobeet/Job/admin.html.twig", "C:\\wamp64\\www\\Jobeet\\src\\Ens\\JobeetBundle\\Resources\\views\\Job\\admin.html.twig");
    }
}
