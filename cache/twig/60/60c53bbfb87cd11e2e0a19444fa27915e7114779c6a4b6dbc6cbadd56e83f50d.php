<?php

/* forms/fields/tab/tab.html.twig */
class __TwigTemplate_2462ed16295541a198ab41ea8f26affae54a881d0bb645890e668bede6f93deb extends Twig_Template
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
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 2
            echo "    <div class=\"form-tab\">
        ";
            // line 3
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
                // line 4
                echo "            ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 5
                    echo "                ";
                    $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "toArray", array())));
                    // line 6
                    echo "                ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1") && ($this->getAttribute($context["field"], "type", array()) == "tinymce"))) {
                        // line 7
                        echo "                    ";
                        $this->loadTemplate(array(0 => "forms/fields/editor/editor.html.twig", 1 => "forms/fields/text/text.html.twig"), "forms/fields/tab/tab.html.twig", 7)->display($context);
                        // line 8
                        echo "                ";
                    } else {
                        // line 9
                        echo "                    ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/tab/tab.html.twig", 9)->display($context);
                        // line 10
                        echo "                ";
                    }
                    // line 11
                    echo "            ";
                }
                // line 12
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
            // line 13
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/tab/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field.fields %}
    <div class=\"form-tab\">
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = field.name ? data.value(field.name) : data.toArray %}
                {% if admin.session.expert == '1' and field.type =='tinymce' %}
                    {% include [\"forms/fields/editor/editor.html.twig\", 'forms/fields/text/text.html.twig'] %}
                {% else %}
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endif %}
", "forms/fields/tab/tab.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\tab\\tab.html.twig");
    }
}
