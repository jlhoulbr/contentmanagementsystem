<?php

/* revisions.html.twig */
class __TwigTemplate_f49f285631da924145479375e0f08826233d3f1a6e17ac8e289c1291c3d26880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "revisions.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlebar($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"button-bar\">
    ";
        // line 5
        if (((isset($context["action"]) ? $context["action"] : null) == "list-revisions")) {
            // line 6
            echo "      <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/revisions\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (((isset($context["action"]) ? $context["action"] : null) == "diff")) {
            // line 10
            echo "      <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/revisions";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
      <a class=\"button disable-after-click\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "revRevert") . "/rev") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "name", array())), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" ><i class=\"fa fa-reply\"></i> Revert</a>
      <a class=\"button disable-after-click\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "revDelete") . "/rev") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "name", array())), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" ><i class=\"fa fa-close\"></i> Delete</a>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (((isset($context["action"]) ? $context["action"] : null) == "list-pages")) {
            // line 16
            echo "      <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "revDeleteAll"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-close\"></i> Delete All</a>
    ";
        }
        // line 18
        echo "  </div>

  ";
        // line 20
        if ((((isset($context["action"]) ? $context["action"] : null) == "list-pages") || ((isset($context["action"]) ? $context["action"] : null) == "list-revisions"))) {
            echo "<h1><i class=\"fa fa-fw fa-file-text-o\"></i> Manage Revisions</h1>";
        }
        // line 21
        echo "  ";
        if (((isset($context["action"]) ? $context["action"] : null) == "diff")) {
            echo "<h1><i class=\"fa fa-fw fa-file-text-o\"></i> Manage Revision</h1>";
        }
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "  <h1>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array())) ? ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array())) : ("Pages")), "html", null, true);
        echo "</h1>
  <div class=\"revision-container\">
    ";
        // line 27
        if (((isset($context["action"]) ? $context["action"] : null) == "list-pages")) {
            // line 28
            echo "      <div class=\"revision-list\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["revPages"]) ? $context["revPages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 30
                echo "          ";
                if (($this->getAttribute($context["page"], "revisions", array()) > 0)) {
                    // line 31
                    echo "            <div><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                    echo twig_escape_filter($this->env, ((($this->getAttribute($context["page"], "revisions", array()) > 0)) ? (("/revisions" . $this->getAttribute($context["page"], "route", array()))) : ("#")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "revisions", array()), "html", null, true);
                    echo ") (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFilter($this->getAttribute($context["page"], "lastRevision", array()), true), "html", null, true);
                    echo ")</div>
          ";
                } else {
                    // line 33
                    echo "            <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "revisions", array()), "html", null, true);
                    echo ")</div>
          ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (((isset($context["action"]) ? $context["action"] : null) == "list-revisions")) {
            // line 40
            echo "      <h2>Revisions</h2>
      <div class=\"revision-list\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["revisions"]) ? $context["revisions"] : null), "instances", array())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
                // line 43
                echo "          ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 44
                    echo "            <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "name", array()), "html", null, true);
                    echo " (Current)</div>
          ";
                } else {
                    // line 46
                    echo "            <div><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                    echo "/revisions";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()), "html", null, true);
                    echo "/action:diff/rev:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "name", array()), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFilter($this->getAttribute($context["revision"], "createdAt", array()), true), "html", null, true);
                    echo ")</div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </div>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (((isset($context["action"]) ? $context["action"] : null) == "diff")) {
            // line 53
            echo "      <p>All changes since the <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "name", array()), "html", null, true);
            echo "</strong> revision (Comparing <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "name", array()), "html", null, true);
            echo "</strong> to current content)</p>
      ";
            // line 54
            if ( !twig_test_empty((isset($context["added"]) ? $context["added"] : null))) {
                // line 55
                echo "        <h2>Added</h2>
        <ul>
        ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["added"]) ? $context["added"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 58
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "        </ul>
      ";
            }
            // line 62
            echo "
      ";
            // line 63
            if ( !twig_test_empty((isset($context["removed"]) ? $context["removed"] : null))) {
                // line 64
                echo "        <h2>Removed</h2>
        <ul>
        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["removed"]) ? $context["removed"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 67
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "        </ul>
      ";
            }
            // line 71
            echo "
      ";
            // line 72
            if ( !twig_test_empty((isset($context["renamed"]) ? $context["renamed"] : null))) {
                // line 73
                echo "        <h2>Renamed</h2>
        <ul>
        ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["renamed"]) ? $context["renamed"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 76
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "from", array()), "html", null, true);
                    echo " -> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "to", array()), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "        </ul>
      ";
            }
            // line 80
            echo "
      ";
            // line 81
            if ( !twig_test_empty((isset($context["changed"]) ? $context["changed"] : null))) {
                // line 82
                echo "        <h2>Changes</h2>
        <div>
        ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["changed"]) ? $context["changed"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 85
                    echo "          <div class=\"revision-change revision-change--type-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "type", array()), "html", null, true);
                    echo "\">
            ";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "
            ";
                    // line 87
                    if (($this->getAttribute($context["file"], "type", array()) == "text")) {
                        // line 88
                        echo "            <pre class=\"revision-change__changes\">";
                        echo $this->getAttribute($context["file"], "diff", array());
                        echo "</pre>
            ";
                    } elseif (($this->getAttribute(                    // line 89
$context["file"], "type", array()) == "image")) {
                        // line 90
                        echo "            <div class=\"revision-change__changes\">
                <div><img src=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "oldUrl", array()), "html", null, true);
                        echo "\" /></div>
                <span></span>
                <div><img src=\"";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "newUrl", array()), "html", null, true);
                        echo "\" /></div>
            </div>
            ";
                    }
                    // line 96
                    echo "          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "        </div>
      ";
            }
            // line 100
            echo "
      ";
            // line 101
            if ( !twig_test_empty((isset($context["equal"]) ? $context["equal"] : null))) {
                // line 102
                echo "        <h2>No changes</h2>
        <ul>
        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["equal"]) ? $context["equal"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 105
                    echo "          <li>";
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "        </ul>
      ";
            }
            // line 109
            echo "    ";
        }
        // line 110
        echo "  </div>

  <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
    <form>
      <h1>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
      <br>
      <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
        <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
      </div>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "revisions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 118,  399 => 117,  393 => 114,  387 => 110,  384 => 109,  380 => 107,  371 => 105,  367 => 104,  363 => 102,  361 => 101,  358 => 100,  354 => 98,  347 => 96,  341 => 93,  336 => 91,  333 => 90,  331 => 89,  326 => 88,  324 => 87,  320 => 86,  315 => 85,  311 => 84,  307 => 82,  305 => 81,  302 => 80,  298 => 78,  287 => 76,  283 => 75,  279 => 73,  277 => 72,  274 => 71,  270 => 69,  261 => 67,  257 => 66,  253 => 64,  251 => 63,  248 => 62,  244 => 60,  235 => 58,  231 => 57,  227 => 55,  225 => 54,  218 => 53,  216 => 52,  213 => 51,  209 => 49,  195 => 48,  181 => 46,  175 => 44,  172 => 43,  155 => 42,  151 => 40,  149 => 39,  146 => 38,  142 => 36,  136 => 35,  128 => 33,  115 => 31,  112 => 30,  108 => 29,  105 => 28,  103 => 27,  97 => 25,  94 => 24,  87 => 21,  83 => 20,  79 => 18,  73 => 16,  71 => 15,  68 => 14,  63 => 12,  59 => 11,  50 => 10,  48 => 9,  45 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block titlebar %}
  <div class=\"button-bar\">
    {% if action == 'list-revisions' %}
      <a class=\"button\" href=\"{{ base_url }}/revisions\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
    {% endif %}

    {% if action == 'diff' %}
      <a class=\"button\" href=\"{{base_url}}/revisions{{ context.route }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
      <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'revRevert' ~ '/rev' ~ config.system.param_sep ~ revision.name, 'admin-form', 'admin-nonce') }}\" ><i class=\"fa fa-reply\"></i> Revert</a>
      <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'revDelete' ~ '/rev' ~ config.system.param_sep ~ revision.name, 'admin-form', 'admin-nonce') }}\" ><i class=\"fa fa-close\"></i> Delete</a>
    {% endif %}

    {% if action == 'list-pages' %}
      <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'revDeleteAll', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> Delete All</a>
    {% endif %}
  </div>

  {% if action == 'list-pages' or action == 'list-revisions' %}<h1><i class=\"fa fa-fw fa-file-text-o\"></i> Manage Revisions</h1>{% endif %}
  {% if action == 'diff' %}<h1><i class=\"fa fa-fw fa-file-text-o\"></i> Manage Revision</h1>{% endif %}
{% endblock %}

{% block content %}
  <h1>{{ context.title ?: 'Pages' }}</h1>
  <div class=\"revision-container\">
    {% if action == 'list-pages' %}
      <div class=\"revision-list\">
        {% for page in revPages %}
          {% if page.revisions > 0 %}
            <div><a href=\"{{base_url}}{{ page.revisions > 0 ? '/revisions' ~ page.route : '#' }}\">{{ page.title }}</a> ({{ page.revisions }}) ({{ page.lastRevision|nicetime(true) }})</div>
          {% else %}
            <div>{{ page.title }} ({{ page.revisions }})</div>
          {% endif %}
        {% endfor %}
      </div>
    {% endif %}

    {% if action == 'list-revisions' %}
      <h2>Revisions</h2>
      <div class=\"revision-list\">
        {% for revision in revisions.instances|reverse %}
          {% if loop.first %}
            <div>{{ revision.name }} (Current)</div>
          {% else %}
            <div><a href=\"{{base_url}}/revisions{{ context.route }}/action:diff/rev:{{ revision.name }}\">{{ revision.name }}</a> ({{ revision.createdAt|nicetime(true) }})</div>
          {% endif %}
        {% endfor %}
      </div>
    {% endif %}

    {% if action == 'diff' %}
      <p>All changes since the <strong>{{ revision.name }}</strong> revision (Comparing <strong>{{ revision.name }}</strong> to current content)</p>
      {% if added is not empty %}
        <h2>Added</h2>
        <ul>
        {% for file in added %}
          <li>{{ file }}</li>
        {% endfor %}
        </ul>
      {% endif %}

      {% if removed is not empty %}
        <h2>Removed</h2>
        <ul>
        {% for file in removed %}
          <li>{{ file }}</li>
        {% endfor %}
        </ul>
      {% endif %}

      {% if renamed is not empty %}
        <h2>Renamed</h2>
        <ul>
        {% for file in renamed %}
          <li>{{ file.from }} -> {{ file.to }}</li>
        {% endfor %}
        </ul>
      {% endif %}

      {% if changed is not empty %}
        <h2>Changes</h2>
        <div>
        {% for file in changed %}
          <div class=\"revision-change revision-change--type-{{ file.type }}\">
            {{ file.filename }}
            {% if file.type == 'text' %}
            <pre class=\"revision-change__changes\">{{ file.diff|raw }}</pre>
            {% elseif file.type == 'image' %}
            <div class=\"revision-change__changes\">
                <div><img src=\"{{ file.oldUrl }}\" /></div>
                <span></span>
                <div><img src=\"{{ file.newUrl }}\" /></div>
            </div>
            {% endif %}
          </div>
        {% endfor %}
        </div>
      {% endif %}

      {% if equal is not empty %}
        <h2>No changes</h2>
        <ul>
        {% for file in equal %}
          <li>{{ file }}</li>
        {% endfor %}
        </ul>
      {% endif %}
    {% endif %}
  </div>

  <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
    <form>
      <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
      <br>
      <div class=\"button-bar\">
        <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
        <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
      </div>
    </form>
  </div>
{% endblock %}
", "revisions.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin-addon-revisions\\templates\\revisions.html.twig");
    }
}
