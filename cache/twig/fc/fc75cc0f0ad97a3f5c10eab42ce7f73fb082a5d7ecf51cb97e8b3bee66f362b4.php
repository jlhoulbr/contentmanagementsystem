<?php

/* maintenance.html.twig */
class __TwigTemplate_b1940059b7a00f43dcd12a9d7e0708420e509a82f4ad105a6545cd18c6124983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "maintenance.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_MAINTENANCE.OFFLINE_MARKDOWN"));
        echo "

    ";
        // line 7
        if (($this->getAttribute((isset($context["maintenance"]) ? $context["maintenance"] : null), "allow_login", array()) &&  !$this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "authenticated", array()))) {
            // line 8
            echo "        <div id=\"maintenance-login\" style=\"text-align: center;\">
            ";
            // line 9
            $this->loadTemplate("partials/login-form.html.twig", "maintenance.html.twig", 9)->display(array_merge($context, array("content" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_MAINTENANCE.AUTHORIZED_ACCESS")), "show_login_form" => true)));
            // line 10
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  44 => 9,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

    {{ 'PLUGIN_MAINTENANCE.OFFLINE_MARKDOWN'|t|markdown|raw }}

    {% if maintenance.allow_login and not grav.user.authenticated %}
        <div id=\"maintenance-login\" style=\"text-align: center;\">
            {% include 'partials/login-form.html.twig' with {content: 'PLUGIN_MAINTENANCE.AUTHORIZED_ACCESS'|t|markdown, show_login_form: true }%}
        </div>
    {% endif %}
{% endblock %}", "maintenance.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\maintenance\\templates\\maintenance.html.twig");
    }
}
