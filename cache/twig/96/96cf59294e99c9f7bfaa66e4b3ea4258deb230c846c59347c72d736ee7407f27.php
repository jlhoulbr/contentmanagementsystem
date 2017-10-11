<?php

/* partials/recaptcha_container.html.twig */
class __TwigTemplate_561ec78323b6da330f20b14463b4fe2d9e029564752765b4bfa485769f97a8b4 extends Twig_Template
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
        // line 1
        echo "<div id=\"contact\" class=\"recaptcha-contact container\">
    <div class=\"row\">
        ";
        // line 3
        $this->loadTemplate("partials/recaptchaform.html.twig", "partials/recaptcha_container.html.twig", 3)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null), "recaptchacontact" => (isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null))));
        // line 4
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/recaptcha_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"contact\" class=\"recaptcha-contact container\">
    <div class=\"row\">
        {% include 'partials/recaptchaform.html.twig' with {'page': page, 'recaptchacontact': recaptchacontact} %}
    </div>
</div>", "partials/recaptcha_container.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\recaptchacontact\\templates\\partials\\recaptcha_container.html.twig");
    }
}
