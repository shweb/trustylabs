<?php

/* section-menus.twig */
class __TwigTemplate_89619863d7c4f17102dfbff16af9f9821938df7e2084b0a239880bf4c8183418 extends Twig_Template
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
        $this->loadTemplate("table-slots.twig", "section-menus.twig", 3)->display(array_merge($context, array("slot_type" => "menus", "slots_settings" => $this->getAttribute($_settings_, "menus", array()), "slots" => $this->getAttribute($_data_, "menus", array()))));
        // line 10
        echo "
";
        // line 11
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("button-add-new-ls.twig", "section-menus.twig", 11)->display(array_merge($context, array("existing_items" => twig_length_filter($this->env, $this->getAttribute($_data_, "menus", array())), "settings_items" => twig_length_filter($this->env, $this->getAttribute($_settings_, "menus", array())), "tooltip_all_assigned" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "add_menu_all_assigned", array()), "tooltip_no_item" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "add_menu_no_menu", array()), "button_target" => "#wpml-ls-new-menus-template", "button_label" => $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "add_button_label", array()))));
        // line 21
        echo "
<script type=\"text/html\" id=\"wpml-ls-new-menus-template\" class=\"js-wpml-ls-template\">
    <div class=\"js-wpml-ls-subform wpml-ls-subform\" data-title=\"";
        // line 23
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "dialog_title_new", array()), "html", null, true);
        echo "\" data-item-slug=\"";
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        echo twig_escape_filter($this->env, $_slug_placeholder_, "html", null, true);
        echo "\" data-item-type=\"menus\">

        ";
        // line 25
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        if (isset($context["slots_settings"])) { $_slots_settings_ = $context["slots_settings"]; } else { $_slots_settings_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["previews"])) { $_previews_ = $context["previews"]; } else { $_previews_ = null; }
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        $this->loadTemplate("slot-subform-menus.twig", "section-menus.twig", 25)->display(array_merge($context, array("slug" => $_slug_placeholder_, "slots_settings" => $_slots_settings_, "slots" => $this->getAttribute($_data_, "menus", array()), "preview" => $this->getAttribute($this->getAttribute($_previews_, "menu", array()), $_slug_, array(), "array"))));
        // line 33
        echo "    </div>
</script>

<script type=\"text/html\" id=\"wpml-ls-new-menus-row-template\" class=\"js-wpml-ls-template\">
    ";
        // line 37
        if (isset($context["slug_placeholder"])) { $_slug_placeholder_ = $context["slug_placeholder"]; } else { $_slug_placeholder_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $this->loadTemplate("table-slot-row.twig", "section-menus.twig", 37)->display(array_merge($context, array("slug" => $_slug_placeholder_, "slots" => $_menus_)));
        // line 43
        echo "</script>";
    }

    public function getTemplateName()
    {
        return "section-menus.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  62 => 37,  56 => 33,  49 => 25,  40 => 23,  36 => 21,  31 => 11,  28 => 10,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-menus.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-menus.twig");
    }
}
