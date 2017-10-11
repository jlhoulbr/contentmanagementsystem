<?php

/* user-manager.html.twig */
class __TwigTemplate_175892fc291bfd804ce1c8f60e74a92d2c1031439c42843e58988f4fedd38357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user-manager.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("user-manager-macros.html.twig", "user-manager.html.twig", 2);
        // line 12
        $context["ps"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        // line 13
        $context["appendUrl"] = ("?filter=" . twig_urlencode_filter((isset($context["filter"]) ? $context["filter"] : null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titlebar($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        echo "</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> Manage Users</h1>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        $context["style"] = ((array_key_exists("listStyle", $context)) ? (_twig_default_filter((isset($context["listStyle"]) ? $context["listStyle"] : null), "grid")) : ("grid"));
        // line 17
        echo "
  <h1>Users</h1>

  ";
        // line 20
        if ((isset($context["filterException"]) ? $context["filterException"] : null)) {
            // line 21
            echo "  <div class=\"notices red\"><h2>Filter Error</h2><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filterException"]) ? $context["filterException"] : null), "message", array()), "html", null, true);
            echo "</p></div>
  ";
        }
        // line 23
        echo "
  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : null), "html", null, true);
        echo "\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : null), "html", null, true);
        echo "\" type=\"text\" placeholder=\"Filter users\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP"), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    ";
        // line 45
        if (((isset($context["style"]) ? $context["style"] : null) != "grid")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ((((((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/listStyle") . (isset($context["ps"]) ? $context["ps"] : null)) . "grid") . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array())) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
            echo "\"><i class=\"fa fa-th\"></i></a>";
        } else {
            echo "<i class=\"fa fa-th\"></i>";
        }
        // line 46
        echo "    ";
        if (((isset($context["style"]) ? $context["style"] : null) != "list")) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ((((((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/listStyle") . (isset($context["ps"]) ? $context["ps"] : null)) . "list") . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array())) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
            echo "\"><i class=\"fa fa-list\"></i></a>";
        } else {
            echo "<i class=\"fa fa-list\"></i>";
        }
        // line 47
        echo "  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : null), "html", null, true);
        echo "\">
      ";
        // line 51
        if (twig_test_empty((isset($context["users"]) ? $context["users"] : null))) {
            // line 52
            echo "        <h2>No results</h2>
      ";
        } else {
            // line 54
            echo "          ";
            if (((isset($context["style"]) ? $context["style"] : null) == "list")) {
                // line 55
                echo "          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">Username</div>
              <div class=\"user__email\">Email</div>
              <div class=\"user__actions\">Actions</div>
            </div>
          </div>
          ";
            }
            // line 64
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 65
                echo "          <div class=\"cell\">
            <div class=\"user\">
              ";
                // line 67
                if (((isset($context["style"]) ? $context["style"] : null) == "grid")) {
                    // line 68
                    echo "              <div class=\"user__avatar\"><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                    echo "/user/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatarUrl", array()), "html", null, true);
                    echo "\" /></a></div>
              ";
                } else {
                    // line 70
                    echo "              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\" /></div>
              ";
                }
                // line 72
                echo "              <div class=\"user__username\"><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/user/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a></div>
              <div class=\"user__email\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</div>
              <div class=\"user__actions\">
                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, (((isset($context["base_url"]) ? $context["base_url"] : null) . "/user-expert/") . $this->getAttribute($context["user"], "username", array())), "html", null, true);
                echo "\" class=\"Expert\">Expert</a>
                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url"]) ? $context["base_url"] : null) . "/user/") . $this->getAttribute($context["user"], "username", array())) . "/task") . (isset($context["ps"]) ? $context["ps"] : null)) . "userDelete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"delete\">Delete</a>
              </div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      ";
        }
        // line 82
        echo "    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">Bulk action</a>
    </div>
  </form>

  ";
        // line 89
        echo $context["macros"]->getpagination((isset($context["pagination"]) ? $context["pagination"] : null), ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/listStyle") . (isset($context["ps"]) ? $context["ps"] : null)) . (isset($context["listStyle"]) ? $context["listStyle"] : null)), (isset($context["ps"]) ? $context["ps"] : null), (isset($context["appendUrl"]) ? $context["appendUrl"] : null));
        echo "

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
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
            // line 94
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 95
                echo "          ";
                if (($this->getAttribute($context["field"], "name", array()) == "username")) {
                    // line 96
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], array("validate" => twig_array_merge($this->getAttribute($context["field"], "validate", array()), array("pattern" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "system", array()), "username_regex", array())))));
                    // line 97
                    echo "          ";
                }
                // line 98
                echo "          <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
            ";
                // line 99
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "user-manager.html.twig", 99)->display($context);
                // line 100
                echo "          </div>
        ";
            }
            // line 102
            echo "      ";
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
        // line 103
        echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bulkFields"]) ? $context["bulkFields"] : null));
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
            // line 113
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 114
                echo "          ";
                if (($this->getAttribute($context["field"], "name", array()) == "groups")) {
                    // line 115
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], array("options" => (isset($context["groupnames"]) ? $context["groupnames"] : null)));
                    // line 116
                    echo "          ";
                }
                // line 117
                echo "          ";
                if (($this->getAttribute($context["field"], "name", array()) == "permissions")) {
                    // line 118
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], array("selectize" => array("options" => (isset($context["permissions"]) ? $context["permissions"] : null))));
                    // line 119
                    echo "          ";
                }
                // line 120
                echo "          <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
            ";
                // line 121
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "user-manager.html.twig", 121)->display($context);
                // line 122
                echo "          </div>
        ";
            }
            // line 124
            echo "      ";
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
        // line 125
        echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/user/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
";
    }

    public function getTemplateName()
    {
        return "user-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 135,  359 => 127,  355 => 125,  341 => 124,  337 => 122,  335 => 121,  330 => 120,  327 => 119,  324 => 118,  321 => 117,  318 => 116,  315 => 115,  312 => 114,  309 => 113,  292 => 112,  282 => 105,  278 => 103,  264 => 102,  260 => 100,  258 => 99,  253 => 98,  250 => 97,  247 => 96,  244 => 95,  241 => 94,  224 => 93,  217 => 89,  208 => 82,  205 => 81,  194 => 76,  190 => 75,  185 => 73,  176 => 72,  170 => 70,  160 => 68,  158 => 67,  154 => 65,  149 => 64,  138 => 55,  135 => 54,  131 => 52,  129 => 51,  125 => 50,  120 => 47,  111 => 46,  103 => 45,  95 => 40,  83 => 31,  78 => 29,  70 => 23,  64 => 21,  62 => 20,  57 => 17,  54 => 16,  51 => 15,  42 => 6,  39 => 5,  36 => 4,  32 => 1,  30 => 13,  28 => 12,  26 => 2,  11 => 1,);
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
{% import 'user-manager-macros.html.twig' as macros %}

{% block titlebar %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> Manage Users</h1>
{% endblock %}

{% set ps = config.system.param_sep %}
{% set appendUrl = '?filter=' ~ filter|url_encode %}

{% block content %}
  {% set style = listStyle|default('grid') %}

  <h1>Users</h1>

  {% if filterException %}
  <div class=\"notices red\"><h2>Filter Error</h2><p>{{ filterException.message }}</p></div>
  {% endif %}

  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"{{ filter }}\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"{{ filter }}\" type=\"text\" placeholder=\"Filter users\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP\"|tu }}</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    {% if style != 'grid' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'grid' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-th\"></i></a>{% else %}<i class=\"fa fa-th\"></i>{% endif %}
    {% if style != 'list' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'list' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-list\"></i></a>{% else %}<i class=\"fa fa-list\"></i>{% endif %}
  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--{{ style }}\">
      {% if users is empty %}
        <h2>No results</h2>
      {% else %}
          {% if style == 'list' %}
          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">Username</div>
              <div class=\"user__email\">Email</div>
              <div class=\"user__actions\">Actions</div>
            </div>
          </div>
          {% endif %}
          {% for user in users %}
          <div class=\"cell\">
            <div class=\"user\">
              {% if style == 'grid' %}
              <div class=\"user__avatar\"><a href=\"{{ base_url }}/user/{{ user.username }}\"><img src=\"{{ user.avatarUrl }}\" /></a></div>
              {% else %}
              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ user.username }}\" /></div>
              {% endif %}
              <div class=\"user__username\"><a href=\"{{ base_url }}/user/{{ user.username }}\">{{ user.username }}</a></div>
              <div class=\"user__email\">{{ user.email }}</div>
              <div class=\"user__actions\">
                <a href=\"{{ base_url ~ '/user-expert/' ~ user.username }}\" class=\"Expert\">Expert</a>
                <a href=\"{{ uri.addNonce(base_url ~ '/user/' ~ user.username ~ '/task' ~ ps ~ 'userDelete', 'admin-form', 'admin-nonce') }}\" class=\"delete\">Delete</a>
              </div>
            </div>
          </div>
          {% endfor %}
      {% endif %}
    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">Bulk action</a>
    </div>
  </form>

  {{ macros.pagination(pagination, uri.route(true) ~ '/listStyle' ~ ps ~ listStyle, ps, appendUrl) }}

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      {% for field in fields %}
        {% if field.type %}
          {% if field.name == 'username' %}
          {% set field = field|merge({ validate: field.validate|merge({ pattern: grav.config.system.username_regex })}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      {% for field in bulkFields %}
        {% if field.type %}
          {% if field.name == 'groups' %}
          {% set field = field|merge({options: groupnames}) %}
          {% endif %}
          {% if field.name == 'permissions' %}
          {% set field = field|merge({selectize: { options: permissions }}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '{{ base_url }}/user/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
{% endblock %}
", "user-manager.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin-addon-user-manager\\templates\\user-manager.html.twig");
    }
}
