<?php

/* table-slot-row.twig */
class __TwigTemplate_ac0e20a36c52955cefae2b3669d8db5c6e530604ec1383a54a06cd4452f4ec24 extends Twig_Template
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
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        if (($_slot_type_ == "statics")) {
            // line 2
            echo "\t";
            $context["is_static"] = true;
            // line 3
            echo "\t";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            $context["dialog_title"] = $this->getAttribute($this->getAttribute($_strings_, $_slug_, array(), "array"), "dialog_title", array());
            // line 4
            echo "\t";
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            $context["include_row"] = (((("slot-subform-" . $_slot_type_) . "-") . $_slug_) . ".twig");
        } else {
            // line 6
            echo "\t";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            $context["dialog_title"] = $this->getAttribute($this->getAttribute($_strings_, $_slot_type_, array(), "array"), "dialog_title", array());
            // line 7
            echo "\t";
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            $context["include_row"] = (("slot-subform-" . $_slot_type_) . ".twig");
        }
        // line 9
        echo "
";
        // line 10
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        $context["slot_row_id"] = ((("wpml-ls-" . $_slot_type_) . "-row-") . $_slug_);
        // line 11
        echo "<tr id=\"";
        if (isset($context["slot_row_id"])) { $_slot_row_id_ = $context["slot_row_id"]; } else { $_slot_row_id_ = null; }
        echo twig_escape_filter($this->env, $_slot_row_id_, "html", null, true);
        echo "\" class=\"js-wpml-ls-row\" data-item-slug=\"";
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        echo twig_escape_filter($this->env, $_slug_, "html", null, true);
        echo "\" data-item-type=\"";
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        echo twig_escape_filter($this->env, $_slot_type_, "html", null, true);
        echo "\">
    <td class=\"wpml-ls-cell-preview\">
        <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-origin-id=\"";
        // line 13
        if (isset($context["slot_row_id"])) { $_slot_row_id_ = $context["slot_row_id"]; } else { $_slot_row_id_ = null; }
        echo twig_escape_filter($this->env, $_slot_row_id_, "html", null, true);
        echo "\" data-title=\"";
        if (isset($context["dialog_title"])) { $_dialog_title_ = $context["dialog_title"]; } else { $_dialog_title_ = null; }
        echo twig_escape_filter($this->env, $_dialog_title_, "html", null, true);
        echo "\" data-item-slug=\"";
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        echo twig_escape_filter($this->env, $_slug_, "html", null, true);
        echo "\" data-item-type=\"";
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        echo twig_escape_filter($this->env, $_slot_type_, "html", null, true);
        echo "\">
            ";
        // line 14
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ($_slot_settings_) {
            // line 15
            echo "                ";
            if (isset($context["include_row"])) { $_include_row_ = $context["include_row"]; } else { $_include_row_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["slots"])) { $_slots_ = $context["slots"]; } else { $_slots_ = null; }
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            if (isset($context["previews"])) { $_previews_ = $context["previews"]; } else { $_previews_ = null; }
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            if (isset($context["color_schemes"])) { $_color_schemes_ = $context["color_schemes"]; } else { $_color_schemes_ = null; }
            $this->loadTemplate($_include_row_, "table-slot-row.twig", 15)->display(array_merge($context, array("slug" => $_slug_, "slot_settings" => $_slot_settings_, "settings" => $_settings_, "slots" => $_slots_, "strings" => $_strings_, "preview" => $this->getAttribute($this->getAttribute($_previews_, $_slot_type_, array(), "array"), $_slug_, array(), "array"), "color_schemes" => $_color_schemes_)));
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div>
    </td>

\t";
        // line 30
        if (isset($context["is_static"])) { $_is_static_ = $context["is_static"]; } else { $_is_static_ = null; }
        if ( !$_is_static_) {
            // line 31
            echo "    <td>
        <span class=\"js-wpml-ls-row-title\">";
            // line 32
            if (isset($context["slots"])) { $_slots_ = $context["slots"]; } else { $_slots_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_slots_, $_slug_, array(), "array"), "name", array()), "html", null, true);
            echo "</span>
    </td>
\t";
        }
        // line 35
        echo "
\t<td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"";
        // line 37
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "title_action_edit", array()), "html", null, true);
        echo "\" class=\"js-wpml-ls-row-edit wpml-ls-row-edit\"><i class=\"otgs-ico-edit\"></i></a>
    </td>

\t";
        // line 40
        if (isset($context["is_static"])) { $_is_static_ = $context["is_static"]; } else { $_is_static_ = null; }
        if ( !$_is_static_) {
            // line 41
            echo "    <td class=\"wpml-ls-cell-action\">
        <a href=\"#\" title=\"";
            // line 42
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "title_action_delete", array()), "html", null, true);
            echo "\" class=\"js-wpml-ls-row-remove wpml-ls-row-remove\"><i class=\"otgs-ico-delete\"></i></a>
    </td>
\t";
        }
        // line 45
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "table-slot-row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  134 => 42,  131 => 41,  128 => 40,  121 => 37,  117 => 35,  109 => 32,  106 => 31,  103 => 30,  98 => 27,  95 => 26,  83 => 15,  80 => 14,  66 => 13,  53 => 11,  49 => 10,  46 => 9,  41 => 7,  36 => 6,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table-slot-row.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/table-slot-row.twig");
    }
}
