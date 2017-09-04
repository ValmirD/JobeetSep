<?php

/* @SonataAdmin/CRUD/Association/edit_modal.html.twig */
class __TwigTemplate_06bf1fb641adc0f11e63a3c18bc61a08a98290caa3523c44aeec3df7f10711be extends Twig_Template
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
        $__internal_7acf3f6b7c4bf2377b63b409dda8e5fb3d06513fe65096e376687ff08480603f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acf3f6b7c4bf2377b63b409dda8e5fb3d06513fe65096e376687ff08480603f->enter($__internal_7acf3f6b7c4bf2377b63b409dda8e5fb3d06513fe65096e376687ff08480603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_modal.html.twig"));

        $__internal_c3aae2431b1301d3c99a45a15b244986f677c1d9c74a391e9775f103e8bd1218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3aae2431b1301d3c99a45a15b244986f677c1d9c74a391e9775f103e8bd1218->enter($__internal_c3aae2431b1301d3c99a45a15b244986f677c1d9c74a391e9775f103e8bd1218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7acf3f6b7c4bf2377b63b409dda8e5fb3d06513fe65096e376687ff08480603f->leave($__internal_7acf3f6b7c4bf2377b63b409dda8e5fb3d06513fe65096e376687ff08480603f_prof);

        
        $__internal_c3aae2431b1301d3c99a45a15b244986f677c1d9c74a391e9775f103e8bd1218->leave($__internal_c3aae2431b1301d3c99a45a15b244986f677c1d9c74a391e9775f103e8bd1218_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "@SonataAdmin/CRUD/Association/edit_modal.html.twig", "C:\\wamp64\\www\\Jobeet\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\Association\\edit_modal.html.twig");
    }
}
