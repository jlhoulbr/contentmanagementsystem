<?php

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_1d54d02b6dcd60602bae122155372e31034591ec5217a8b4a6a92cfd0511b950 extends Twig_Template
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
        echo "<div class=\"form-tabs ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
        echo "\">

";
        // line 3
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 4
            echo "
    ";
            // line 5
            $context["tabsKey"] = twig_join_filter(twig_get_array_keys_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())), ".");
            // line 6
            echo "    ";
            $context["storedValue"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie("grav-tabs-state"), "{}"));
            // line 7
            echo "    ";
            $context["storedTab"] = $this->getAttribute((isset($context["storedValue"]) ? $context["storedValue"] : null), ("tab-" . (isset($context["tabsKey"]) ? $context["tabsKey"] : null)));
            // line 8
            echo "
    ";
            // line 9
            if (twig_test_empty((isset($context["storedTab"]) ? $context["storedTab"] : null))) {
                // line 10
                echo "        ";
                if ($this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array())) {
                    // line 11
                    echo "            ";
                    $context["active"] = $this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array());
                    // line 12
                    echo "        ";
                } elseif ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "active", array())) {
                    // line 13
                    echo "            ";
                    $context["active"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "active", array());
                    // line 14
                    echo "        ";
                } else {
                    // line 15
                    echo "            ";
                    $context["active"] = 1;
                    // line 16
                    echo "        ";
                }
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <div class=\"tabs-nav\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 21
                echo "        ";
                if ((($this->getAttribute($context["tab"], "type", array()) == "tab") && (twig_test_empty($this->getAttribute($context["tab"], "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute($context["tab"], "security", array())))))) {
                    // line 22
                    echo "            <a class=\"tab__link ";
                    echo (((((isset($context["storedTab"]) ? $context["storedTab"] : null) == ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["tab"], "name", array()))) || ((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute($context["loop"], "index", array())))) ? ("active") : (""));
                    echo "\" data-tabid=\"tab-";
                    echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\" data-tabkey=\"tab-";
                    echo twig_escape_filter($this->env, (isset($context["tabsKey"]) ? $context["tabsKey"] : null), "html", null, true);
                    echo "\" data-scope=\"";
                    echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["tab"], "name", array())), "html", null, true);
                    echo "\">
                <span>
                ";
                    // line 24
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute($context["tab"], "title", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["tab"], "title", array())), "html", null, true);
                    }
                    // line 25
                    echo "                </span>
            </a>
        ";
                }
                // line 28
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                // line 30
                echo "            <a class=\"tab__link\" href=\"#\" data-tabid=\"tab-content.options4\" data-tabkey=\"tab-content.options\" data-scope=\"data.options\">
                <span>
                Form                </span>
            </a>
        ";
            }
            // line 35
            echo "    </div>
    <div class=\"tabs-content\">
      ";
            // line 37
            if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                // line 38
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 39
                    echo "            ";
                    if (($this->getAttribute($context["field"], "type", array()) == "tab")) {
                        // line 40
                        echo "
                ";
                        // line 41
                        if ((twig_test_empty($this->getAttribute($context["field"], "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute($context["field"], "security", array()))))) {
                            // line 42
                            echo "                    ";
                            $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "toArray", array())));
                            // line 43
                            echo "                    <div id=\"tab-";
                            echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                            echo "\" class=\"tab__content ";
                            echo (((((isset($context["storedTab"]) ? $context["storedTab"] : null) == ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["field"], "name", array()))) || ((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute($context["loop"], "index", array())))) ? ("active") : (""));
                            echo "\">
                        ";
                            // line 44
                            $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/editor/editor.html.twig", 2 => "forms/fields/text/text.html.twig"), "forms/fields/tabs/tabs.html.twig", 44)->display($context);
                            // line 45
                            echo "                    </div>
                ";
                        }
                        // line 47
                        echo "                ";
                    }
                    // line 48
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "      ";
            }
            // line 50
            echo "      ";
            if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                // line 51
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 52
                    echo "            ";
                    if (($this->getAttribute($context["field"], "type", array()) == "tab")) {
                        // line 53
                        echo "                ";
                        if ((twig_test_empty($this->getAttribute($context["field"], "security", array())) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize($this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFunc($this->getAttribute($context["field"], "security", array()))))) {
                            // line 54
                            echo "                    ";
                            $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "toArray", array())));
                            // line 55
                            echo "                    <div id=\"tab-";
                            echo twig_escape_filter($this->env, ((isset($context["tabsKey"]) ? $context["tabsKey"] : null) . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                            echo "\" class=\"tab__content ";
                            echo (((((isset($context["storedTab"]) ? $context["storedTab"] : null) == ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute($context["field"], "name", array()))) || ((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute($context["loop"], "index", array())))) ? ("active") : (""));
                            echo "\">
                        ";
                            // line 56
                            $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/tabs/tabs.html.twig", 56)->display($context);
                            // line 57
                            echo "                    </div>
                ";
                        }
                        // line 59
                        echo "            ";
                    }
                    // line 60
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          <div id=\"tab-content.options4\" class=\"tab__content ";
                echo (((((isset($context["storedTab"]) ? $context["storedTab"] : null) == ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) || ((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array())))) ? ("active") : (""));
                echo "\">
              ";
                // line 62
                $this->loadTemplate(array(0 => "forms/fields/formcreator/formcreator.html.twig"), "forms/fields/tabs/tabs.html.twig", 62)->display($context);
                // line 63
                echo "          </div>
      ";
            }
            // line 65
            echo "    </div>
";
        }
        // line 67
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 67,  279 => 65,  275 => 63,  273 => 62,  268 => 61,  254 => 60,  251 => 59,  247 => 57,  245 => 56,  238 => 55,  235 => 54,  232 => 53,  229 => 52,  211 => 51,  208 => 50,  205 => 49,  191 => 48,  188 => 47,  184 => 45,  182 => 44,  175 => 43,  172 => 42,  170 => 41,  167 => 40,  164 => 39,  146 => 38,  144 => 37,  140 => 35,  133 => 30,  130 => 29,  116 => 28,  111 => 25,  105 => 24,  93 => 22,  90 => 21,  73 => 20,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-tabs {{ field.class }} {{ field.classes }}\">

{% if field.fields %}

    {% set tabsKey = field.fields|keys|join('.') %}
    {% set storedValue = get_cookie('grav-tabs-state')|default('{}')|json_decode %}
    {% set storedTab = attribute(storedValue, 'tab-' ~ tabsKey) %}

    {% if storedTab is empty %}
        {% if uri.params.tab %}
            {% set active = uri.params.tab %}
        {% elseif field.active %}
            {% set active = field.active %}
        {% else %}
            {% set active = 1 %}
        {% endif %}
    {% endif %}

    <div class=\"tabs-nav\">
    {% for tab in field.fields %}
        {% if tab.type == 'tab' and (tab.security is empty or authorize(array(tab.security))) %}
            <a class=\"tab__link {{ (storedTab == scope ~ tab.name) or active == loop.index ? 'active' : '' }}\" data-tabid=\"tab-{{ tabsKey ~ loop.index }}\" data-tabkey=\"tab-{{ tabsKey }}\" data-scope=\"{{ scope ~ tab.name }}\">
                <span>
                {% if grav.twig.twig.filters['tu'] is defined %}{{ tab.title|tu }}{% else %}{{ tab.title|t }}{% endif %}
                </span>
            </a>
        {% endif %}
    {% endfor %}
        {% if admin.session.expert == '0' %}
            <a class=\"tab__link\" href=\"#\" data-tabid=\"tab-content.options4\" data-tabkey=\"tab-content.options\" data-scope=\"data.options\">
                <span>
                Form                </span>
            </a>
        {% endif %}
    </div>
    <div class=\"tabs-content\">
      {% if admin.session.expert == '1' %}
        {% for field in field.fields %}
            {% if field.type == 'tab' %}

                {% if field.security is empty or authorize(array(field.security)) %}
                    {% set value = field.name ? data.value(field.name) : data.toArray %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/editor/editor.html.twig', 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
                {% endif %}
        {% endfor %}
      {% endif %}
      {% if admin.session.expert == '0' %}
        {% for field in field.fields %}
            {% if field.type == 'tab' %}
                {% if field.security is empty or authorize(array(field.security)) %}
                    {% set value = field.name ? data.value(field.name) : data.toArray %}
                    <div id=\"tab-{{ tabsKey ~ loop.index }}\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
          <div id=\"tab-content.options4\" class=\"tab__content {{ (storedTab == scope ~ field.name) or active == loop.index ? 'active' : '' }}\">
              {% include [\"forms/fields/formcreator/formcreator.html.twig\"] %}
          </div>
      {% endif %}
    </div>
{% endif %}
</div>

", "forms/fields/tabs/tabs.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\tabs\\tabs.html.twig");
    }
}
