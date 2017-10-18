<?php

/* forms/default/field.html.twig */
class __TwigTemplate_e08d11a957cee3c18bb06c474ccfec18c64e1c870ea23e6aa516037bfa7719b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) && ( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) &&  !(isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null));
        // line 4
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        $context["errors"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"";
        echo (((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) ? ((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array());
        echo " ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 9
        $this->displayBlock('contents', $context, $blocks);
        // line 80
        echo "    </div>
";
    }

    // line 8
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()) === false)) {
            // line 11
            echo "                <div class=\"";
            echo (((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) ? ((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "labelclasses", array());
            echo "\">
                    <label class=\"";
            // line 12
            echo (((isset($context["form_field_label_classes"]) ? $context["form_field_label_classes"] : null)) ? ((isset($context["form_field_label_classes"]) ? $context["form_field_label_classes"] : null)) : ("inline"));
            echo "\" ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
                echo "\" ";
            }
            echo " >
                    ";
            // line 13
            $this->displayBlock('label', $context, $blocks);
            // line 21
            echo "                    </label>
                </div>
            ";
        }
        // line 24
        echo "            <div class=\"";
        echo (((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) ? ((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "dataclasses", array());
        echo "\"
                ";
        // line 25
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 30
        echo "            >
                ";
        // line 31
        $this->displayBlock('group', $context, $blocks);
        // line 72
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 73
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">";
            // line 74
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array());
            echo "</span>
                    </div>
                ";
        }
        // line 77
        echo "
            </div>
        ";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 15
            echo "                        <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "</span>
                        ";
        } else {
            // line 17
            echo "                        ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "
                        ";
        }
        // line 19
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 25
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 26
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 27
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 31
    public function block_group($context, array $blocks = array())
    {
        // line 32
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 71
        echo "                ";
    }

    // line 32
    public function block_input($context, array $blocks = array())
    {
        // line 33
        echo "                        <div class=\"";
        echo (((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) ? ((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 34
        $this->displayBlock('prepend', $context, $blocks);
        // line 35
        echo "                            <input
                                ";
        // line 37
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html_attr");
        echo "\"
                                ";
        // line 40
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 60
        echo "                            />
                            ";
        // line 61
        $this->displayBlock('append', $context, $blocks);
        // line 62
        echo "                            ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "inline_errors", array()) && (isset($context["errors"]) ? $context["errors"] : null))) {
            // line 63
            echo "                                <div class=\"";
            echo (((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) ? ((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                </div>
                            ";
        }
        // line 69
        echo "                        </div>
                    ";
    }

    // line 34
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 40
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 41
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 42
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 43
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 44
        echo "                                    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 45
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()));
            echo "\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 47
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 48
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 49
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 50
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array(), "any", true, true)) {
            // line 51
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 52
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                                    ";
        }
        // line 55
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 56
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 57
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 58
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 59
        echo "                                ";
    }

    // line 61
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 61,  368 => 59,  362 => 58,  355 => 57,  348 => 56,  343 => 55,  340 => 54,  329 => 52,  324 => 51,  321 => 50,  314 => 49,  309 => 48,  304 => 47,  299 => 46,  292 => 45,  287 => 44,  280 => 43,  273 => 42,  266 => 41,  263 => 40,  258 => 34,  253 => 69,  249 => 67,  240 => 65,  236 => 64,  231 => 63,  228 => 62,  226 => 61,  223 => 60,  220 => 40,  216 => 38,  211 => 37,  208 => 35,  206 => 34,  197 => 33,  194 => 32,  190 => 71,  187 => 32,  184 => 31,  178 => 28,  174 => 27,  169 => 26,  166 => 25,  159 => 19,  153 => 17,  145 => 15,  142 => 14,  139 => 13,  133 => 77,  127 => 74,  120 => 73,  117 => 72,  115 => 31,  112 => 30,  110 => 25,  103 => 24,  98 => 21,  96 => 13,  86 => 12,  79 => 11,  76 => 10,  73 => 9,  68 => 8,  63 => 80,  61 => 9,  48 => 8,  42 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    <label class=\"{{ form_field_label_classes ?: 'inline' }}\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                        <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                        {% else %}
                        {{ field.label|default(field.name|capitalize)|t }}
                        {% endif %}
                        {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                    {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|raw }}</span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}
