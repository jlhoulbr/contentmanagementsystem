<?php

/* forms/fields/tinymce/tinymce.html.twig */
class __TwigTemplate_72ca015e175e34a2bbaa9b8d249893a4527340d3f7608f01da453aae001444fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 7
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 8
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 10
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 11
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 12
        echo "\t\t\t\t";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 13
        echo "\t\t\t>";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html");
        echo "</textarea>
\t\t</div>
\t</div>
\t<script>(function(){function run(){tinymce.init({selector:\"textarea.tinymce\",document_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\",language_url:langs+lang+js,plugins:\"";
        // line 16
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "plugins", array()), " "), "js"), "html", null, true);
        echo "\",";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array()), $context["key"], array(), "array"), "name", array()), "js"), "html", null, true);
            echo "\":\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "parameters", array()), $context["key"], array(), "array"), "value", array()), "js"), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "menubar:";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menubar", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",menu:{ ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ":{title:\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array()), $context["key"], array(), "array"), "title", array()), "js"), "html", null, true);
            echo "\",items:\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "menu", array()), $context["key"], array(), "array"), "items", array()), "js"), "html", null, true);
            echo "\"},";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "},toolbar:[";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "toolbar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["fields"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["row"], "js"), "html", null, true);
                echo "',";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],branding:";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "branding", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",statusbar:";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "tinymce-editor", array(), "array"), "statusbar", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "})};var langs=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://tinymce-editor/js/tinymce/langs"), "html", null, true);
        echo "/\";var lang=window.GravAdmin.config.language;var js=\".js\";\$.get(langs+lang+js).done(function(){run()}).fail(function(){lang=lang+\"_\"+lang.toUpperCase();\$.get(langs+lang+js).done(function(){run()}).fail(function(){langs=\"\";lang=\"\";js=\"\";run()})});function insert(a,b,c){if(a===0){\$(\"[aria-label=\\\"Insert/edit image\\\"] button\").click()}else if(a===1){tinyMCE.activeEditor.plugins.media.showDialog()}else{\$(\"[aria-label=\\\"Insert/edit link\\\"] button\").click();\$(\"div.mce-window input.mce-textbox:eq(1)\").val(c)};\$(\"div.mce-window input.mce-textbox:first\").val(b+c)};\$(window).on(\"load\",function(){\$(\"div.dropzone\").on(\"click\",\"a.dz-insert\",function(){var dir=\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";var pre=\$(\"[name=\\\"data[folder]\\\"]\").attr(\"value\")+\"/\";var src=\$(this).parent().find(\"[data-dz-name]\").text();var file=new Image();file.onload=function(){insert(0,pre,src)};file.onerror=function(){file=new Audio();file.onload=function(){insert(1,pre,src)};file.onerror=function(){insert(2,pre,src)};file.src=dir+src};file.src=dir+src})})}())</script>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/tinymce/tinymce.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  69 => 13,  64 => 12,  59 => 11,  54 => 10,  49 => 9,  42 => 8,  38 => 7,  34 => 6,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block field %}
\t<div class=\"form-field {{ field.classes|default('') }}\">
\t\t<div class=\"form-data\">
\t\t\t<textarea
\t\t\t\tclass=\"tinymce\"
\t\t\t\tname=\"{{ (scope ~ field.name)|fieldName }}\"
\t\t\t\t{% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
\t\t\t\t{% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
\t\t\t\t{% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
\t\t\t\t{% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
\t\t\t\t{% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
\t\t\t\t{% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
\t\t\t>{{ value|join(\"\\n\")|e(\"html\") }}</textarea>
\t\t</div>
\t</div>
\t<script>(function(){function run(){tinymce.init({selector:\"textarea.tinymce\",document_base_url:\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/../\",language_url:langs+lang+js,plugins:\"{{ config.plugins[\"tinymce-editor\"].plugins|join(\" \")|e(\"js\") }}\",{% for key in config.plugins[\"tinymce-editor\"].parameters|keys %}\"{{ config.plugins[\"tinymce-editor\"].parameters[key].name|e(\"js\") }}\":\"{{ config.plugins[\"tinymce-editor\"].parameters[key].value|e(\"js\") }}\",{% endfor %}menubar:{% if config.plugins[\"tinymce-editor\"].menubar %}true{% else %}false{% endif %},menu:{ {% for key in config.plugins[\"tinymce-editor\"].menu|keys %}{{ key }}:{title:\"{{ config.plugins[\"tinymce-editor\"].menu[key].title|e(\"js\") }}\",items:\"{{ config.plugins[\"tinymce-editor\"].menu[key].items|e(\"js\") }}\"},{% endfor %}},toolbar:[{% for fields in config.plugins[\"tinymce-editor\"].toolbar %}{% for row in fields %}'{{ row|e(\"js\") }}',{% endfor %}{% endfor %}],branding:{% if config.plugins[\"tinymce-editor\"].branding %}true{% else %}false{% endif %},statusbar:{% if config.plugins[\"tinymce-editor\"].statusbar %}true{% else %}false{% endif %}})};var langs=\"{{ url(\"plugin://tinymce-editor/js/tinymce/langs\") }}/\";var lang=window.GravAdmin.config.language;var js=\".js\";\$.get(langs+lang+js).done(function(){run()}).fail(function(){lang=lang+\"_\"+lang.toUpperCase();\$.get(langs+lang+js).done(function(){run()}).fail(function(){langs=\"\";lang=\"\";js=\"\";run()})});function insert(a,b,c){if(a===0){\$(\"[aria-label=\\\"Insert/edit image\\\"] button\").click()}else if(a===1){tinyMCE.activeEditor.plugins.media.showDialog()}else{\$(\"[aria-label=\\\"Insert/edit link\\\"] button\").click();\$(\"div.mce-window input.mce-textbox:eq(1)\").val(c)};\$(\"div.mce-window input.mce-textbox:first\").val(b+c)};\$(window).on(\"load\",function(){\$(\"div.dropzone\").on(\"click\",\"a.dz-insert\",function(){var dir=\$(\"[id=grav-dropzone]\").attr(\"data-media-local\")+\"/\";var pre=\$(\"[name=\\\"data[folder]\\\"]\").attr(\"value\")+\"/\";var src=\$(this).parent().find(\"[data-dz-name]\").text();var file=new Image();file.onload=function(){insert(0,pre,src)};file.onerror=function(){file=new Audio();file.onload=function(){insert(1,pre,src)};file.onerror=function(){insert(2,pre,src)};file.src=dir+src};file.src=dir+src})})}())</script>
{% endblock %}
", "forms/fields/tinymce/tinymce.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\tinymce-editor\\templates\\forms\\fields\\tinymce\\tinymce.html.twig");
    }
}
