<?php

/* {{ config.plugins.admin.twofa_enabled }} */
class __TwigTemplate_08c4f7bc248810781eb531864cf61ce11efe836beaf68d2fbc5cec8ecc6fb8ec extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "twofa_enabled", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{ config.plugins.admin.twofa_enabled }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ config.plugins.admin.twofa_enabled }}", "{{ config.plugins.admin.twofa_enabled }}", "");
    }
}
