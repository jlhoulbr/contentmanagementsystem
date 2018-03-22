<?php

/* forms/fields/formcreator/formcreator.html.twig */
class __TwigTemplate_a4bc8e71251aa89c787a0f4fb853d08561328badb8afb863e96257215e9ba68e extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/grav-admin/formcreator/formcreator.css\" name=\"form-css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"/grav-admin/formcreator/formcreator.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<div id=\"select-from\">
    <h1>Select form</h1>
<div id=\"form-list\">
    <div id=\"form-added\"></div>
<select id=\"form-selector\" name=\"select-form\">

</select>
    <button style=\"background: #41bea8;color: #fff;\" onclick=\"return importForm()\">Insert form on this page</button>
    <button style=\"color: #eee;background: #737c81;\" onclick=\"return deleteForm()\">Delete Form</button>
</div>
</div>
<div id=\"main-panel\">
    <h1>Create Form</h1>
    <div id=\"options-panel\">
        <h2 style=\"padding-left: 3rem;\">Add field</h2>
        <div id=\"buttons\">
            <ul class=\"button-column\">
                <li><a href=\"javascript:addLineForm('text')\">Line Text</a></li>
                <li><a href=\"javascript:addLineForm('number')\">Line Number</a></li>
                <li><a href=\"javascript:addLineForm('textarea')\">Text Area</a></li>
                <li><a href=\"javascript:addLineForm('dropdown')\">Dropdown</a></li>
                <li><a href=\"javascript:addLineForm('radio')\">Multiple Choice</a></li>
                <li><a href=\"javascript:addLineForm('checkbox')\">Checkboxes</a></li>
            </ul>
            <button onclick=\"return saveForm()\" style=\"cursor: pointer\" class=\"save-form\">Save</button>
        </div>
    </div>

    <div id=\"form-panel\">

        <div id=\"main-form\">
            <span style=\"display: block;margin-top: 30px;\" class=\"form-message\">Use the buttons to create a new form.</span>
            <input type=\"text\" class=\"empty\">
        </div>

    </div>

</div>
<br>
<span class=\"target-page\"
      style=\"display: none\">";
        // line 45
        echo twig_escape_filter($this->env, ((("../user/pages/" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "order", array())) . twig_trim_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/")) . "/"), "html", null, true);
        echo "</span>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/formcreator/formcreator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 45,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"/grav-admin/formcreator/formcreator.css\" name=\"form-css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"/grav-admin/formcreator/formcreator.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<div id=\"select-from\">
    <h1>Select form</h1>
<div id=\"form-list\">
    <div id=\"form-added\"></div>
<select id=\"form-selector\" name=\"select-form\">

</select>
    <button style=\"background: #41bea8;color: #fff;\" onclick=\"return importForm()\">Insert form on this page</button>
    <button style=\"color: #eee;background: #737c81;\" onclick=\"return deleteForm()\">Delete Form</button>
</div>
</div>
<div id=\"main-panel\">
    <h1>Create Form</h1>
    <div id=\"options-panel\">
        <h2 style=\"padding-left: 3rem;\">Add field</h2>
        <div id=\"buttons\">
            <ul class=\"button-column\">
                <li><a href=\"javascript:addLineForm('text')\">Line Text</a></li>
                <li><a href=\"javascript:addLineForm('number')\">Line Number</a></li>
                <li><a href=\"javascript:addLineForm('textarea')\">Text Area</a></li>
                <li><a href=\"javascript:addLineForm('dropdown')\">Dropdown</a></li>
                <li><a href=\"javascript:addLineForm('radio')\">Multiple Choice</a></li>
                <li><a href=\"javascript:addLineForm('checkbox')\">Checkboxes</a></li>
            </ul>
            <button onclick=\"return saveForm()\" style=\"cursor: pointer\" class=\"save-form\">Save</button>
        </div>
    </div>

    <div id=\"form-panel\">

        <div id=\"main-form\">
            <span style=\"display: block;margin-top: 30px;\" class=\"form-message\">Use the buttons to create a new form.</span>
            <input type=\"text\" class=\"empty\">
        </div>

    </div>

</div>
<br>
<span class=\"target-page\"
      style=\"display: none\">{{ '../user/pages/' ~ context.order ~  context.rawRoute|trim('/') ~ '/' }}</span>

", "forms/fields/formcreator/formcreator.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\formcreator\\formcreator.html.twig");
    }
}
