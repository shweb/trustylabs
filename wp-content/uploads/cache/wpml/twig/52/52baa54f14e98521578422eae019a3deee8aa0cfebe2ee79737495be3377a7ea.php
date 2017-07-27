<?php

/* panel-colors.twig */
class __TwigTemplate_40d0ceeecd19996c37b279571321d94a4b9de16fdba7cc3fd0d5de1d24bb9ca9 extends Twig_Template
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
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $context["wrapper_options"] = array(0 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background", array()), "name" => "background", "schemes" => array(0 => "normal"), "default" => ""), 1 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "border", array()), "name" => "border", "schemes" => array(0 => "normal"), "default" => ""));
        // line 6
        echo "
";
        // line 7
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $context["options"] = array(0 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "font_current", array()), "name" => "font_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 1 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background_current", array()), "name" => "background_current", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 2 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "font_other", array()), "name" => "font_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""), 3 => array("label" => $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "background_other", array()), "name" => "background_other", "schemes" => array(0 => "normal", 1 => "hover"), "default" => ""));
        // line 14
        echo "
";
        // line 15
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        if (($_slot_type_ != "menus")) {
            // line 16
            echo "    ";
            if (isset($context["wrapper_options"])) { $_wrapper_options_ = $context["wrapper_options"]; } else { $_wrapper_options_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context["options"] = twig_array_merge($_wrapper_options_, $_options_);
        }
        // line 18
        echo "
";
        // line 19
        if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
        $context["css_class"] = ((array_key_exists("css_class", $context)) ? (_twig_default_filter($_css_class_, "js-wpml-ls-colorpicker")) : ("js-wpml-ls-colorpicker"));
        // line 20
        echo "
<div class=\"js-wpml-ls-panel-colors wpml-ls-panel-colors\">
    <h4>";
        // line 22
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "panel_title", array()), "html", null, true);
        echo "</h4>

    <label for=\"wpml-ls-";
        // line 24
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-colorpicker-preset\">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_color_preset", array()), "html", null, true);
        echo "</label>
    <select name=\"wpml-ls-";
        // line 25
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "-colorpicker-preset\" class=\"js-wpml-ls-colorpicker-preset\">
        <option value=\"\">-- ";
        // line 26
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
        ";
        // line 27
        if (isset($context["color_schemes"])) { $_color_schemes_ = $context["color_schemes"]; } else { $_color_schemes_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_color_schemes_);
        foreach ($context['_seq'] as $context["scheme_id"] => $context["scheme"]) {
            // line 28
            echo "            <option value=\"";
            if (isset($context["scheme_id"])) { $_scheme_id_ = $context["scheme_id"]; } else { $_scheme_id_ = null; }
            echo twig_escape_filter($this->env, $_scheme_id_, "html", null, true);
            echo "\">";
            if (isset($context["scheme"])) { $_scheme_ = $context["scheme"]; } else { $_scheme_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_scheme_, "label", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['scheme_id'], $context['scheme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>

    <div>
        <table>
            <tr>
                <td>
                </td>
                <th>";
        // line 37
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_normal_scheme", array()), "html", null, true);
        echo "</th>
                <th>";
        // line 38
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "color_picker", array()), "label_hover_scheme", array()), "html", null, true);
        echo "</th>
            </tr>
            ";
        // line 40
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_option_, "label", array()), "html", null, true);
            echo "</td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 44
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (twig_in_filter("normal", $this->getAttribute($_option_, "schemes", array()))) {
                // line 45
                echo "                        ";
                if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                if ($_name_base_) {
                    // line 46
                    echo "                            ";
                    if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ((($_name_base_ . "[") . $this->getAttribute($_option_, "name", array())) . "_normal]");
                    // line 47
                    echo "                        ";
                } else {
                    // line 48
                    echo "                            ";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ($this->getAttribute($_option_, "name", array()) . "_normal");
                    // line 49
                    echo "                        ";
                }
                // line 50
                echo "                        <input class=\"";
                if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
                echo twig_escape_filter($this->env, $_css_class_, "html", null, true);
                echo " js-wpml-ls-color-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "_normal\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 51
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "-normal\" name=\"";
                if (isset($context["input_name"])) { $_input_name_ = $context["input_name"]; } else { $_input_name_ = null; }
                echo twig_escape_filter($this->env, $_input_name_, "html", null, true);
                echo "\"
                               value=\"";
                // line 52
                if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_normal"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_normal"), array(), "array"), $this->getAttribute($_option_, "default", array()))) : ($this->getAttribute($_option_, "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 54
            echo "                </td>
                <td class=\"js-wpml-ls-colorpicker-wrapper\">
                    ";
            // line 56
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (twig_in_filter("hover", $this->getAttribute($_option_, "schemes", array()))) {
                // line 57
                echo "                        ";
                if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                if ($_name_base_) {
                    // line 58
                    echo "                            ";
                    if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ((($_name_base_ . "[") . $this->getAttribute($_option_, "name", array())) . "_hover]");
                    // line 59
                    echo "                        ";
                } else {
                    // line 60
                    echo "                            ";
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    $context["input_name"] = ($this->getAttribute($_option_, "name", array()) . "_hover");
                    // line 61
                    echo "                        ";
                }
                // line 62
                echo "                        <input class=\"";
                if (isset($context["css_class"])) { $_css_class_ = $context["css_class"]; } else { $_css_class_ = null; }
                echo twig_escape_filter($this->env, $_css_class_, "html", null, true);
                echo " js-wpml-ls-color-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "_hover\" type=\"text\" size=\"7\"
                               id=\"wpml-ls-";
                // line 63
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "name", array()), "html", null, true);
                echo "-hover\" name=\"";
                if (isset($context["input_name"])) { $_input_name_ = $context["input_name"]; } else { $_input_name_ = null; }
                echo twig_escape_filter($this->env, $_input_name_, "html", null, true);
                echo "\"
                               value=\"";
                // line 64
                if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_hover"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, ($this->getAttribute($_option_, "name", array()) . "_hover"), array(), "array"), $this->getAttribute($_option_, "default", array()))) : ($this->getAttribute($_option_, "default", array()))), "html", null, true);
                echo "\" data-default-color=\"";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "default", array()), "html", null, true);
                echo "\" style=\"display: none;\">
                    ";
            }
            // line 66
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "panel-colors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 69,  234 => 66,  224 => 64,  213 => 63,  204 => 62,  201 => 61,  197 => 60,  194 => 59,  189 => 58,  185 => 57,  182 => 56,  178 => 54,  168 => 52,  157 => 51,  148 => 50,  145 => 49,  141 => 48,  138 => 47,  133 => 46,  129 => 45,  126 => 44,  120 => 42,  117 => 41,  112 => 40,  106 => 38,  101 => 37,  92 => 30,  79 => 28,  74 => 27,  69 => 26,  64 => 25,  56 => 24,  50 => 22,  46 => 20,  43 => 19,  40 => 18,  34 => 16,  31 => 15,  28 => 14,  25 => 7,  22 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "panel-colors.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/panel-colors.twig");
    }
}
