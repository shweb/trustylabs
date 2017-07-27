<?php

/* section-sidebars.twig */
class __TwigTemplate_cf56d74c4147e932edae90268168f5ca91ed4b6651408027fcb66ba046f7a913 extends Twig_Template
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
        $context["slug_placeholder"] = "%id%";
        // line 2
        echo "
";
        // line 3
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $this->loadTemplate("table-slots.twig", "section-sidebars.twig", 3)->display(array_merge($context, array("slot_type" => "sidebars", "slots_settings" => $this->getAttribute($_settings_, "sidebars", array()), "slots" => $this->getAttribute($_data_, "sidebars", array()))));
        // line 10
        echo "
";
        // line 11
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("button-add-new-ls.twig", "section-sidebars.twig", 11)->display(array_merge($context, array("existing_items" => twig_length_filter($this->env, $this->getAttribute($_data_, "sidebars", array())), "settings_items" => twig_length_filter($this->env, $this->getAttribute($_settings_, "sidebars", array())), "tooltip_all_assigned" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "add_sidebar_all_assigned", array()), "tooltip_no_item" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "add_sidebar_no_sidebar", array()), "button_target" => "#wpml-ls-new-sidebars-template", "button_label" => $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "add_button_label", array()))));
        // line 21
        echo "
<script type=\"text/html\" id=\"wpml-ls-new-sidebars-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 23
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "dialog_title_new", array()), "html", null, true);
        echo "\" data-item-slug=\"";
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        echo twig_escape_filter($this->env, $_slug_placeholder_, "html", null, true);
        echo "\" data-item-type=\"sidebars\">

        ";
        // line 25
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        if (isset($context["slots_settings"])) { $_slots_settings_ = $context["slots_settings"]; } else { $_slots_settings_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["previews"])) { $_previews_ = $context["previews"]; } else { $_previews_ = null; }
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        $this->loadTemplate("slot-subform-sidebars.twig", "section-sidebars.twig", 25)->display(array_merge($context, array("slug" => $_slug_placeholder_, "slots_settings" => $_slots_settings_, "slots" => $this->getAttribute($_data_, "sidebars", array()), "preview" => $this->getAttribute($this->getAttribute($_previews_, "sidebars", array()), $_slug_, array(), "array"))));
        // line 33
        echo "
    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-sidebars-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 38
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        if (isset($context["sidebars"])) { $_sidebars_ = $context["sidebars"]; } else { $_sidebars_ = null; }
        $this->loadTemplate("table-slot-row.twig", "section-sidebars.twig", 38)->display(array_merge($context, array("slug" => $_slug_placeholder_, "slots" => $_sidebars_)));
        // line 44
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 44,  63 => 38,  56 => 33,  49 => 25,  40 => 23,  36 => 21,  31 => 11,  28 => 10,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-sidebars.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-sidebars.twig");
    }
}
