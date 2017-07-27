<?php

/* checkboxes-includes.twig */
class __TwigTemplate_0235e15f81a066cdbb4b109b6a5d86102a3f0a5bad8952b0619c87ca05a5f540 extends Twig_Template
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["template_slug"])) { $_template_slug_ = $context["template_slug"]; } else { $_template_slug_ = null; }
        $context["force"] = $this->getAttribute($this->getAttribute($this->getAttribute($_data_, "templates", array()), $_template_slug_, array(), "array"), "force_settings", array());
        // line 2
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $context["is_hierarchical"] = (($this->getAttribute($_slot_settings_, "slot_group", array()) == "menus") && $this->getAttribute($_slot_settings_, "is_hierarchical", array()));
        // line 3
        echo "
<h4>";
        // line 4
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "title_what_to_include", array()), "html", null, true);
        echo " ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "checkboxes-includes.twig", 4)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "what_to_include", array()))));
        echo "</h4>
<ul class=\"js-wpml-ls-to-include\">
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_flags js-wpml-ls-trigger-update\"
                      name=\"";
        // line 8
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[display_flags]";
        } else {
            echo "display_flags";
        }
        echo "\"
                      ";
        // line 9
        if (isset($context["force"])) { $_force_ = $context["force"]; } else { $_force_ = null; }
        if ($this->getAttribute($_force_, "display_flags", array(), "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 10
        echo "                      value=\"1\"";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ($this->getAttribute($_slot_settings_, "display_flags", array())) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_include_flag", array()), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_names_in_native_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 14
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[display_names_in_native_lang]";
        } else {
            echo "display_names_in_native_lang";
        }
        echo "\"
                      ";
        // line 15
        if (isset($context["force"])) { $_force_ = $context["force"]; } else { $_force_ = null; }
        if ($this->getAttribute($_force_, "display_names_in_native_lang", array(), "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        echo "                      value=\"1\"";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ($this->getAttribute($_slot_settings_, "display_names_in_native_lang", array())) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_include_native_lang", array()), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_names_in_current_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 20
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[display_names_in_current_lang]";
        } else {
            echo "display_names_in_current_lang";
        }
        echo "\"
                      ";
        // line 21
        if (isset($context["force"])) { $_force_ = $context["force"]; } else { $_force_ = null; }
        if ($this->getAttribute($_force_, "display_names_in_current_lang", array(), "any", true, true)) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        echo "                      value=\"1\"";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ((($this->getAttribute($_slot_settings_, "display_names_in_current_lang", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, "display_names_in_current_lang", array()), 1)) : (1))) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_include_display_lang", array()), "html", null, true);
        echo "</label>
    </li>
    <li>
        <label><input type=\"checkbox\" class=\"js-wpml-ls-setting-display_link_for_current_lang js-wpml-ls-trigger-update\"
                      name=\"";
        // line 26
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[display_link_for_current_lang]";
        } else {
            echo "display_link_for_current_lang";
        }
        echo "\"
                      ";
        // line 27
        if (isset($context["force"])) { $_force_ = $context["force"]; } else { $_force_ = null; }
        if (isset($context["is_hierarchical"])) { $_is_hierarchical_ = $context["is_hierarchical"]; } else { $_is_hierarchical_ = null; }
        if (($this->getAttribute($_force_, "display_link_for_current_lang", array(), "any", true, true) || $_is_hierarchical_)) {
            echo " disabled=\"disabled\"";
        }
        // line 28
        echo "                      value=\"1\"";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ((($this->getAttribute($_slot_settings_, "display_link_for_current_lang", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_slot_settings_, "display_link_for_current_lang", array()), 1)) : (1))) {
            echo " checked=\"checked\"";
        }
        echo "> ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_include_current_lang", array()), "html", null, true);
        echo "</label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "checkboxes-includes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 28,  141 => 27,  130 => 26,  116 => 22,  111 => 21,  100 => 20,  86 => 16,  81 => 15,  70 => 14,  56 => 10,  51 => 9,  40 => 8,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "checkboxes-includes.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/checkboxes-includes.twig");
    }
}
