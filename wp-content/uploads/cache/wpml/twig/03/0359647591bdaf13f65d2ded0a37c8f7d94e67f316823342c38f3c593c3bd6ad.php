<?php

/* layout-main.twig */
class __TwigTemplate_784ed6718d26d47b9fdf00d5d1dc7f1540d1c63ba7e028ba87a07842162247e1 extends Twig_Template
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
        echo "<form id=\"wpml-ls-settings-form\" name=\"wpml_ls_settings_form\">

\t<input type=\"hidden\" name=\"wpml-ls-refresh-on-browser-back-button\" id=\"wpml-ls-refresh-on-browser-back-button\" value=\"no\">

    ";
        // line 5
        if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
        if ($this->getAttribute($_notifications_, "css_not_loaded", array())) {
            // line 6
            echo "        <div class=\"wpml-ls-message notice notice-info\">
            <p>";
            // line 7
            if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notifications_, "css_not_loaded", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 10
        echo "
    <div id=\"wpml-language-switcher-options\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>";
        // line 13
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "section_title", array()), "html", null, true);
        echo "</h3>
\t\t\t<p>";
        // line 14
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "section_description", array()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 18
        $this->loadTemplate("section-options.twig", "layout-main.twig", 18)->display($context);
        // line 19
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-menus\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 25
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "section_title", array()), "html", null, true);
        echo "
            </h3>
            ";
        // line 27
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 27)->display($context);
        // line 28
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 31
        $this->loadTemplate("section-menus.twig", "layout-main.twig", 31)->display($context);
        // line 32
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-sidebars\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 38
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "section_title", array()), "html", null, true);
        echo "
            </h3>
            ";
        // line 40
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 40)->display($context);
        // line 41
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 44
        $this->loadTemplate("section-sidebars.twig", "layout-main.twig", 44)->display($context);
        // line 45
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-footer\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 51
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "footer", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 52
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "layout-main.twig", 52)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "show_in_footer", array()))));
        // line 53
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 57
        $this->loadTemplate("section-footer.twig", "layout-main.twig", 57)->display($context);
        // line 58
        echo "        </div>

    </div>

    <div id=\"wpml-language-switcher-post-translations\" class=\"js-wpml-ls-section wpml-section\">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 65
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 66
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "layout-main.twig", 66)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "section_post_translations", array()))));
        // line 67
        echo "            </h3>
        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 71
        $this->loadTemplate("section-post-translations.twig", "layout-main.twig", 71)->display($context);
        // line 72
        echo "        </div>
    </div>

    <div id=\"wpml-language-switcher-shortcode-action\" class=\"js-wpml-ls-section wpml-section\"
        ";
        // line 76
        if (isset($context["setup_complete"])) { $_setup_complete_ = $context["setup_complete"]; } else { $_setup_complete_ = null; }
        if ( !$_setup_complete_) {
            echo " style=\"display:none;\"";
        }
        echo ">
        <div class=\"wpml-section-header\">
            <h3>
                ";
        // line 79
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "shortcode_actions", array()), "section_title", array()), "html", null, true);
        echo "
                ";
        // line 81
        echo "            </h3>
            ";
        // line 82
        $this->loadTemplate("save-notification.twig", "layout-main.twig", 82)->display($context);
        // line 83
        echo "        </div>

        <div class=\"js-setting-group wpml-ls-settings-group wpml-section-content\">
            ";
        // line 86
        $this->loadTemplate("section-shortcode-action.twig", "layout-main.twig", 86)->display($context);
        // line 87
        echo "        </div>
    </div>

    ";
        // line 90
        $this->loadTemplate("setup-wizard-buttons.twig", "layout-main.twig", 90)->display($context);
        // line 91
        echo "
    ";
        // line 92
        $this->loadTemplate("dialog-box.twig", "layout-main.twig", 92)->display($context);
        // line 93
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 93,  195 => 92,  192 => 91,  190 => 90,  185 => 87,  183 => 86,  178 => 83,  176 => 82,  173 => 81,  168 => 79,  159 => 76,  153 => 72,  151 => 71,  145 => 67,  142 => 66,  137 => 65,  128 => 58,  126 => 57,  120 => 53,  117 => 52,  112 => 51,  104 => 45,  102 => 44,  97 => 41,  95 => 40,  89 => 38,  81 => 32,  79 => 31,  74 => 28,  72 => 27,  66 => 25,  58 => 19,  56 => 18,  48 => 14,  43 => 13,  38 => 10,  31 => 7,  28 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout-main.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/layout-main.twig");
    }
}
