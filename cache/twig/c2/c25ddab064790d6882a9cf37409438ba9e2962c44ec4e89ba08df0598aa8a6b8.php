<?php

/* partials/recaptchaform.html.twig */
class __TwigTemplate_565a513c1aac40da13289ba874d4a43f75151d9904c68dd1b4453a592fdc06fb extends Twig_Template
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
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "modular", array()) == true)) {
            // line 2
            echo "    ";
            $context["target_slug"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array());
        } else {
            // line 4
            echo "    ";
            $context["target_slug"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
        }
        // line 6
        echo "
<div class=\"recaptcha-form-container\" id=\"contact-form\"> ";
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "message", array())) {
            // line 9
            echo "        ";
            $this->loadTemplate("partials/recaptcha_message.html.twig", "partials/recaptchaform.html.twig", 9)->display(array_merge($context, array("message" => $this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "message", array()))));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <form action=\"";
        echo (isset($context["target_slug"]) ? $context["target_slug"] : null);
        echo "\" method=\"post\" id=\"recaptchacontact\" class=\"recaptcha-form\">
        <fieldset>
            <h3>
                <legend class=\"legend\">";
        // line 14
        echo (($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "form_legend", array())) ? ($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "form_legend", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FORM_LEGEND")));
        echo "</legend>
            </h3>

            ";
        // line 18
        echo "            <div id=\"recaptchacontact-messages\"></div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"control-label\" for=\"name\" class=\"recaptcha-label\">";
        // line 21
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "name", array()), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "name", array()), "label", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.NAME.LABEL")));
        echo "</label>
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"";
        // line 22
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "name", array()), "placeholder", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "name", array()), "placeholder", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.NAME.PLACEHOLDER")));
        echo "\" class=\"recaptcha-field form-control\" value=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "session", array()), "name", array());
        echo "\"/>
            </div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"recaptcha-label control-label\" for=\"email\">";
        // line 26
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "email", array()), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "email", array()), "label", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.EMAIL.LABEL")));
        echo "</label>
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"";
        // line 27
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "email", array()), "placeholder", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "email", array()), "placeholder", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.EMAIL.PLACEHOLDER")));
        echo "\" class=\"recaptcha-field form-control\" value=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "session", array()), "email", array());
        echo "\"/>
            </div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"recaptcha-label control-label\" for=\"message\">";
        // line 31
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "message", array()), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "message", array()), "label", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.MESSAGE.LABEL")));
        echo "</label>
                <textarea class=\"recaptcha-textarea form-control\" id=\"message\" name=\"message\" placeholder=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "message", array()), "placeholder", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "message", array()), "placeholder", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.MESSAGE.PLACEHOLDER")));
        echo "\" rows=\"5\">";
        echo $this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "session", array()), "message", array());
        echo "</textarea>
            </div>

            <div class=\"g-recaptcha\" data-sitekey=";
        // line 35
        echo $this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "grecaptcha_sitekey", array());
        if ($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "grecaptcha_callback", array())) {
            echo " data-callback=\"";
            echo $this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "grecaptcha_callback", array());
            echo "\"";
        }
        echo "></div>

            <div class=\"recaptcha-hidden form-group antispam-div\">
                <label class=\"control-label\" for=\"antispam\">";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.ANTISPAM.LABEL");
        echo "</label>
                <input id=\"antispam\" name=\"antispam\" type=\"text\" placeholder=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.ANTISPAM.PLACEHOLDER");
        echo "\" class=\"form-control\" />
            </div>

            <div class=\"recaptcha-submit form-group\">
                <div class=\"text-right\">
                    <button type=\"submit\" class=\"recaptcha-submit-button button\">";
        // line 44
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "submit", array()), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "fields", array()), "submit", array()), "label", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RECAPTCHACONTACT.FIELDS.SUBMIT.LABEL")));
        echo "</button>
                </div>
            </div>
        </fieldset>
    </form>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl=";
        // line 49
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "default_lang", array())));
        echo "\" defer></script>
    ";
        // line 50
        if ($this->getAttribute((isset($context["recaptchacontact"]) ? $context["recaptchacontact"] : null), "message", array())) {
            // line 51
            echo "        ";
            $this->loadTemplate("partials/recaptcha_js.html.twig", "partials/recaptchaform.html.twig", 51)->display($context);
            // line 52
            echo "    ";
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/recaptchaform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 53,  137 => 52,  134 => 51,  132 => 50,  128 => 49,  120 => 44,  112 => 39,  108 => 38,  97 => 35,  89 => 32,  85 => 31,  76 => 27,  72 => 26,  63 => 22,  59 => 21,  54 => 18,  48 => 14,  41 => 11,  38 => 10,  35 => 9,  32 => 8,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.modular == true %}
    {% set target_slug = page.parent.slug %}
{% else %}
    {% set target_slug = page.slug %}
{% endif %}

<div class=\"recaptcha-form-container\" id=\"contact-form\"> {# Twig or Parsedown will render this template as raw HTML without this DIV. #}
    {% if recaptchacontact.message %}
        {% include 'partials/recaptcha_message.html.twig' with { 'message': recaptchacontact.message } %}
    {% endif %}
    <form action=\"{{ target_slug }}\" method=\"post\" id=\"recaptchacontact\" class=\"recaptcha-form\">
        <fieldset>
            <h3>
                <legend class=\"legend\">{{ recaptchacontact.form_legend ?:'RECAPTCHACONTACT.FORM_LEGEND'|t }}</legend>
            </h3>

            {# @todo: you can use to integrate with ajax response #}
            <div id=\"recaptchacontact-messages\"></div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"control-label\" for=\"name\" class=\"recaptcha-label\">{{ recaptchacontact.fields.name.label ?:'RECAPTCHACONTACT.FIELDS.NAME.LABEL'|t }}</label>
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"{{ recaptchacontact.fields.name.placeholder ?:'RECAPTCHACONTACT.FIELDS.NAME.PLACEHOLDER'|t }}\" class=\"recaptcha-field form-control\" value=\"{{ recaptchacontact.session.name }}\"/>
            </div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"recaptcha-label control-label\" for=\"email\">{{ recaptchacontact.fields.email.label ?:'RECAPTCHACONTACT.FIELDS.EMAIL.LABEL'|t }}</label>
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"{{ recaptchacontact.fields.email.placeholder ?:'RECAPTCHACONTACT.FIELDS.EMAIL.PLACEHOLDER'|t }}\" class=\"recaptcha-field form-control\" value=\"{{ recaptchacontact.session.email }}\"/>
            </div>

            <div class=\"recaptcha-form-group form-group\">
                <label class=\"recaptcha-label control-label\" for=\"message\">{{ recaptchacontact.fields.message.label ?:'RECAPTCHACONTACT.FIELDS.MESSAGE.LABEL'|t }}</label>
                <textarea class=\"recaptcha-textarea form-control\" id=\"message\" name=\"message\" placeholder=\"{{ recaptchacontact.fields.message.placeholder ?:'RECAPTCHACONTACT.FIELDS.MESSAGE.PLACEHOLDER'|t }}\" rows=\"5\">{{ recaptchacontact.session.message }}</textarea>
            </div>

            <div class=\"g-recaptcha\" data-sitekey={{ recaptchacontact.grecaptcha_sitekey }}{% if recaptchacontact.grecaptcha_callback %} data-callback=\"{{ recaptchacontact.grecaptcha_callback }}\"{% endif %}></div>

            <div class=\"recaptcha-hidden form-group antispam-div\">
                <label class=\"control-label\" for=\"antispam\">{{ 'RECAPTCHACONTACT.FIELDS.ANTISPAM.LABEL'|t }}</label>
                <input id=\"antispam\" name=\"antispam\" type=\"text\" placeholder=\"{{ 'RECAPTCHACONTACT.FIELDS.ANTISPAM.PLACEHOLDER'|t }}\" class=\"form-control\" />
            </div>

            <div class=\"recaptcha-submit form-group\">
                <div class=\"text-right\">
                    <button type=\"submit\" class=\"recaptcha-submit-button button\">{{ recaptchacontact.fields.submit.label ?:'RECAPTCHACONTACT.FIELDS.SUBMIT.LABEL'|t }}</button>
                </div>
            </div>
        </fieldset>
    </form>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl={{ grav.language.getActive ?: recaptchacontact.default_lang }}\" defer></script>
    {% if recaptchacontact.message %}
        {% include 'partials/recaptcha_js.html.twig' %}
    {% endif %}
</div>
", "partials/recaptchaform.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\recaptchacontact\\templates\\partials\\recaptchaform.html.twig");
    }
}
