<?php

/* sitemap.xml.twig */
class __TwigTemplate_9060643063dcb7a79babc605ff54829892c67c8051cb9156e5ec952fe83eade2 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"";
        // line 2
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array());
        echo "/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitemap"]) ? $context["sitemap"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "  <url>
    <loc>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "location", array()));
            echo "</loc>
";
            // line 7
            if ($this->getAttribute($context["entry"], "translated", array())) {
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "translated", array()));
                foreach ($context['_seq'] as $context["language"] => $context["page_route"]) {
                    // line 9
                    echo "    <xhtml:link rel=\"alternate\" hreflang=\"";
                    echo $context["language"];
                    echo "\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array(0 => true), "method");
                    echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguageURLPrefix", array(0 => $context["language"]), "method");
                    echo $context["page_route"];
                    echo "\" />
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['language'], $context['page_route'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 12
            echo "    <lastmod>";
            echo $this->getAttribute($context["entry"], "lastmod", array());
            echo "</lastmod>
";
            // line 13
            if ($this->getAttribute($context["entry"], "changefreq", array())) {
                // line 14
                echo "    <changefreq>";
                echo $this->getAttribute($context["entry"], "changefreq", array());
                echo "</changefreq>
";
            }
            // line 16
            if ($this->getAttribute($context["entry"], "priority", array())) {
                // line 17
                echo "    <priority>";
                echo twig_number_format_filter($this->env, $this->getAttribute($context["entry"], "priority", array()), 1);
                echo "</priority>
";
            }
            // line 19
            echo "  </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</urlset>
";
    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  79 => 19,  73 => 17,  71 => 16,  65 => 14,  63 => 13,  58 => 12,  44 => 9,  40 => 8,  38 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"{{ uri.rootUrl }}/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
{% for entry in sitemap %}
  <url>
    <loc>{{ entry.location|e }}</loc>
{% if entry.translated %}
{% for language, page_route in entry.translated %}
    <xhtml:link rel=\"alternate\" hreflang=\"{{ language }}\" href=\"{{uri.rootUrl(true)}}{{grav.language.getLanguageURLPrefix(language)}}{{ page_route }}\" />
{% endfor %}
{% endif %}
    <lastmod>{{ entry.lastmod }}</lastmod>
{% if entry.changefreq %}
    <changefreq>{{ entry.changefreq }}</changefreq>
{% endif %}
{% if entry.priority %}
    <priority>{{ entry.priority|number_format(1) }}</priority>
{% endif %}
  </url>
{% endfor %}
</urlset>
", "sitemap.xml.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\sitemap\\templates\\sitemap.xml.twig");
    }
}
