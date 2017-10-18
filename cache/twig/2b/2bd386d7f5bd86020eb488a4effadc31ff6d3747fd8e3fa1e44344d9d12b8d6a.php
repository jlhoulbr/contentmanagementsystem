<?php

/* partials/cookieconsent.html.twig */
class __TwigTemplate_e29f423dec4e4c7a9f42054c65dfd4514dcca1bb914b8673cf07e4970aa9eea4 extends Twig_Template
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
        echo "window.addEventListener(\"load\", function(){
window.cookieconsent.initialise({
\"palette\": {
    \"popup\": {
        \"background\": \"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "popup_background_color", array());
        echo "\",
        \"text\": \"";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "popup_text_color", array());
        echo "\"
    },
    \"button\": {
        \"background\": \"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "button_background_color", array());
        echo "\",
        \"text\": \"";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "button_text_color", array());
        echo "\",
        \"border\": \"";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "button_border_color", array());
        echo "\"
    }
},
";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "position", array()) == "top-pushdown")) {
            // line 15
            echo "\"position\": \"top\",
\"static\": true,
";
        } else {
            // line 18
            echo "\"position\": \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "position", array());
            echo "\",
";
        }
        // line 20
        echo "\"theme\": \"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "theme", array());
        echo "\",
\"content\": {
    \"message\": \"";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "content_message", array());
        echo "\",
    \"dismiss\": \"";
        // line 23
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "content_dismiss", array());
        echo "\",
    \"link\": \"";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "content_link", array());
        echo "\",
    \"href\": \"";
        // line 25
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "cookieconsent", array()), "content_href", array());
        echo "\"
}
})});";
    }

    public function getTemplateName()
    {
        return "partials/cookieconsent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  72 => 23,  68 => 22,  62 => 20,  56 => 18,  51 => 15,  49 => 14,  43 => 11,  39 => 10,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("window.addEventListener(\"load\", function(){
window.cookieconsent.initialise({
\"palette\": {
    \"popup\": {
        \"background\": \"{{ config.plugins.cookieconsent.popup_background_color }}\",
        \"text\": \"{{ config.plugins.cookieconsent.popup_text_color }}\"
    },
    \"button\": {
        \"background\": \"{{ config.plugins.cookieconsent.button_background_color }}\",
        \"text\": \"{{ config.plugins.cookieconsent.button_text_color }}\",
        \"border\": \"{{ config.plugins.cookieconsent.button_border_color }}\"
    }
},
{% if config.plugins.cookieconsent.position == 'top-pushdown' %}
\"position\": \"top\",
\"static\": true,
{% else %}
\"position\": \"{{ config.plugins.cookieconsent.position }}\",
{% endif %}
\"theme\": \"{{ config.plugins.cookieconsent.theme }}\",
\"content\": {
    \"message\": \"{{ config.plugins.cookieconsent.content_message }}\",
    \"dismiss\": \"{{ config.plugins.cookieconsent.content_dismiss }}\",
    \"link\": \"{{ config.plugins.cookieconsent.content_link }}\",
    \"href\": \"{{ config.plugins.cookieconsent.content_href }}\"
}
})});", "partials/cookieconsent.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\cookieconsent\\templates\\partials\\cookieconsent.html.twig");
    }
}
