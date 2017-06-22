<?php

/* slot-subform-sidebars.twig */
class __TwigTemplate_feecd7ad20b50d02547224ad9d1379fc449a61da16db17c53bd2a03ee49dcf8a extends Twig_Template
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
        if ( !array_key_exists("slot_settings", $context)) {
            // line 2
            echo "    ";
            if (isset($context["default_sidebars_slot"])) { $_default_sidebars_slot_ = $context["default_sidebars_slot"]; } else { $_default_sidebars_slot_ = null; }
            $context["slot_settings"] = $_default_sidebars_slot_;
        }
        // line 4
        echo "
";
        // line 5
        if (isset($context["preview"])) { $_preview_ = $context["preview"]; } else { $_preview_ = null; }
        $this->loadTemplate("preview.twig", "slot-subform-sidebars.twig", 5)->display(array_merge($context, array("preview" => $_preview_)));
        // line 6
        echo "
<div class=\"wpml-ls-subform-options\">

    ";
        // line 9
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["slots"])) { $_slots_ = $context["slots"]; } else { $_slots_ = null; }
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("dropdown-sidebars.twig", "slot-subform-sidebars.twig", 9)->display(array_merge($context, array("slug" => $_slug_, "settings" => $_settings_, "sidebars" => $_slots_, "strings" => $_strings_)));
        // line 17
        echo "
    ";
        // line 18
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-sidebars.twig", 18)->display(array_merge($context, array("id" => ("in-sidebars-" . $_slug_), "name" => (("sidebars[" . $_slug_) . "][template]"), "value" => $this->getAttribute($_slot_settings_, "template", array()), "slot_type" => "sidebars")));
        // line 26
        echo "
    ";
        // line 27
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-sidebars.twig", 27)->display(array_merge($context, array("name_base" => (("sidebars[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_, "strings" => $_strings_, "template_slug" => $this->getAttribute($_slot_settings_, "template", array()))));
        // line 35
        echo "
    <h4><label for=\"widget-title-in-";
        // line 36
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        echo twig_escape_filter($this->env, $_slug_, "html", null, true);
        echo "\">
            ";
        // line 37
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "label_widget_title", array()), "html", null, true);
        echo "  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "slot-subform-sidebars.twig", 37)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "widget_title", array()))));
        echo "</label></h4>

    <input type=\"text\" id=\"widget-title-in-";
        // line 39
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        echo twig_escape_filter($this->env, $_slug_, "html", null, true);
        echo "\"
           name=\"sidebars[";
        // line 40
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        echo twig_escape_filter($this->env, $_slug_, "html", null, true);
        echo "][widget_title]\" value=\"";
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_slot_settings_, "widget_title", array()), "html", null, true);
        echo "\" size=\"40\">


    ";
        // line 43
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if (isset($context["color_schemes"])) { $_color_schemes_ = $context["color_schemes"]; } else { $_color_schemes_ = null; }
        $this->loadTemplate("panel-colors.twig", "slot-subform-sidebars.twig", 43)->display(array_merge($context, array("strings" => $_strings_, "id" => ("in-sidebars-" . $_slug_), "name_base" => (("sidebars[" . $_slug_) . "]"), "slot_settings" => $_slot_settings_, "color_schemes" => $_color_schemes_)));
        // line 52
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  90 => 43,  80 => 40,  75 => 39,  66 => 37,  61 => 36,  58 => 35,  53 => 27,  50 => 26,  46 => 18,  43 => 17,  37 => 9,  32 => 6,  29 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "slot-subform-sidebars.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-sidebars.twig");
    }
}
