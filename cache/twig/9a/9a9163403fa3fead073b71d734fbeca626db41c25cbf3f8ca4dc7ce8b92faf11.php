<?php

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_e5ba3affa2d502d1551360a80a9eaf17bdef2e4ef1e7bef3b7ba2a04e403c09b extends Twig_Template
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
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($this->env, $context, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "condition", array())) == "true")) {
            // line 2
            echo "    ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array())) {
                // line 3
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
                echo "\">
    ";
            }
            // line 5
            echo "
    ";
            // line 6
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
                // line 7
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
                    // line 8
                    echo "            ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 9
                        echo "                ";
                        $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                        // line 10
                        echo "                ";
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/conditional/conditional.html.twig", 10)->display($context);
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
                echo "    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array())) {
                // line 16
                echo "    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/conditional/conditional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  85 => 15,  82 => 14,  79 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if evaluate(field.condition) == 'true' %}
    {% if field.classes %}
    <div class=\"{{ field.classes }}\">
    {% endif %}

    {% if field.fields %}
        {% for field in field.fields %}
            {% if field.type %}
                {% set value = data.value(field.name) %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% if field.classes %}
    </div>
    {% endif %}
{% endif %}
", "forms/fields/conditional/conditional.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\form\\templates\\forms\\fields\\conditional\\conditional.html.twig");
    }
}
