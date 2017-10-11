<?php

/* user-manager-macros.html.twig */
class __TwigTemplate_b8b31b79bd717ff8adf8032dac3e5058ecd773ed93100e8f52b81d3ee12af22e extends Twig_Template
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
    }

    // line 1
    public function getpagination($__pagination__ = null, $__url__ = null, $__ps__ = null, $__appendUrl__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pagination" => $__pagination__,
            "url" => $__url__,
            "ps" => $__ps__,
            "appendUrl" => $__appendUrl__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array()) > 1)) {
                // line 3
                echo "    <div class=\"admin-addon-user-manager-pagination\">
      <ul class=\"admin-addon-user-manager-pagination__pages\">
        ";
                // line 5
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) > 1)) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, (((((isset($context["url"]) ? $context["url"] : null) . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . "1") . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
                    echo "\"><<</a></li>
        ";
                }
                // line 8
                echo "        ";
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) > 2)) {
                    // line 9
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, (((((isset($context["url"]) ? $context["url"] : null) . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) - 1)) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
                    echo "\"><</a></li>
        ";
                }
                // line 11
                echo "        ";
                $context["fromPage"] = (((($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) - 2) < 1)) ? (1) : (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) - 2)));
                // line 12
                echo "        ";
                $context["toPage"] = (((($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) + 2) > $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array()))) ? ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array())) : (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) + 2)));
                // line 13
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((isset($context["fromPage"]) ? $context["fromPage"] : null), (isset($context["toPage"]) ? $context["toPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "          ";
                    if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) == $context["i"])) {
                        // line 15
                        echo "            <li class=\"current\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</li>
          ";
                    } else {
                        // line 17
                        echo "            <li><a href=\"";
                        echo twig_escape_filter($this->env, (((((isset($context["url"]) ? $context["url"] : null) . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . $context["i"]) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
          ";
                    }
                    // line 19
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        ";
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) < ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array()) - 1))) {
                    // line 21
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, (((((isset($context["url"]) ? $context["url"] : null) . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) + 1)) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
                    echo "\">></a></li>
        ";
                }
                // line 23
                echo "        ";
                if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "current", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array()))) {
                    // line 24
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, (((((isset($context["url"]) ? $context["url"] : null) . "/page") . (isset($context["ps"]) ? $context["ps"] : null)) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "count", array())) . (isset($context["appendUrl"]) ? $context["appendUrl"] : null)), "html", null, true);
                    echo "\">>></a></li>
        ";
                }
                // line 26
                echo "      </ul>

      <div class=\"admin-addon-user-manager-pagination__text\">Showing ";
                // line 28
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "startOffset", array()) + 1), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "endOffset", array()), "html", null, true);
                echo " of ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "total", array()), "html", null, true);
                echo "</div>
    </div>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "user-manager-macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  112 => 26,  106 => 24,  103 => 23,  97 => 21,  94 => 20,  88 => 19,  80 => 17,  74 => 15,  71 => 14,  66 => 13,  63 => 12,  60 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  39 => 3,  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro pagination(pagination, url, ps, appendUrl) %}
  {% if pagination.count > 1 %}
    <div class=\"admin-addon-user-manager-pagination\">
      <ul class=\"admin-addon-user-manager-pagination__pages\">
        {% if pagination.current > 1 %}
        <li><a href=\"{{ url ~ '/page' ~ ps ~ '1' ~ appendUrl }}\"><<</a></li>
        {% endif %}
        {% if pagination.current > 2 %}
        <li><a href=\"{{ url ~ '/page' ~ ps ~ (pagination.current - 1) ~ appendUrl }}\"><</a></li>
        {% endif %}
        {% set fromPage = (pagination.current - 2 < 1) ? 1 : pagination.current - 2 %}
        {% set toPage = (pagination.current + 2 > pagination.count) ? pagination.count : pagination.current + 2 %}
        {% for i in fromPage..toPage %}
          {% if pagination.current == i %}
            <li class=\"current\">{{ i }}</li>
          {% else %}
            <li><a href=\"{{ url ~ '/page' ~ ps ~ i ~ appendUrl }}\">{{ i }}</a></li>
          {% endif %}
        {% endfor %}
        {% if pagination.current < pagination.count - 1 %}
        <li><a href=\"{{ url ~ '/page' ~ ps ~ (pagination.current + 1) ~ appendUrl }}\">></a></li>
        {% endif %}
        {% if pagination.current < pagination.count %}
        <li><a href=\"{{ url ~ '/page' ~ ps ~ pagination.count ~ appendUrl }}\">>></a></li>
        {% endif %}
      </ul>

      <div class=\"admin-addon-user-manager-pagination__text\">Showing {{ pagination.startOffset + 1 }} - {{ pagination.endOffset }} of {{ pagination.total }}</div>
    </div>
  {% endif %}
{% endmacro %}", "user-manager-macros.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin-addon-user-manager\\templates\\user-manager-macros.html.twig");
    }
}
