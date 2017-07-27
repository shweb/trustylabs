<?php

/* layout-reset.twig */
class __TwigTemplate_1445cf08b5fdb9abcc78d83b8546ad691e388fb558d26b2e6734d3b76a1e02df extends Twig_Template
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
        echo "<div class=\"wpml-section\" id=\"wpml_ls_reset\">
\t<div class=\"wpml-section-header\">
\t\t<h3>";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"wpml-section-content\">
\t\t<p>";
        // line 6
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        echo $_description_;
        echo "</p>

\t\t";
        // line 8
        if (isset($context["theme_config_file"])) { $_theme_config_file_ = $context["theme_config_file"]; } else { $_theme_config_file_ = null; }
        if ($_theme_config_file_) {
            // line 9
            echo "\t\t\t<p class=\"explanation-text\">";
            if (isset($context["explanation_text"])) { $_explanation_text_ = $context["explanation_text"]; } else { $_explanation_text_ = null; }
            echo $_explanation_text_;
            echo "</p>
\t\t";
        }
        // line 11
        echo "
\t\t<p class=\"buttons-wrap\">
\t\t\t<a class=\"button button-secondary\" onclick=\"if(!confirm('";
        // line 13
        if (isset($context["confirmation_message"])) { $_confirmation_message_ = $context["confirmation_message"]; } else { $_confirmation_message_ = null; }
        echo twig_escape_filter($this->env, $_confirmation_message_, "html", null, true);
        echo "')) return false;\"
\t\t\t   href=\"";
        // line 14
        if (isset($context["restore_page_url"])) { $_restore_page_url_ = $context["restore_page_url"]; } else { $_restore_page_url_ = null; }
        echo twig_escape_filter($this->env, $_restore_page_url_, "html", null, true);
        echo "\">";
        if (isset($context["restore_button_label"])) { $_restore_button_label_ = $context["restore_button_label"]; } else { $_restore_button_label_ = null; }
        echo twig_escape_filter($this->env, $_restore_button_label_, "html", null, true);
        if (isset($context["theme_config_file"])) { $_theme_config_file_ = $context["theme_config_file"]; } else { $_theme_config_file_ = null; }
        if ($_theme_config_file_) {
            echo " *";
        }
        echo "</a>
\t\t</p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "layout-reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  50 => 13,  46 => 11,  39 => 9,  36 => 8,  30 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout-reset.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/layout-reset.twig");
    }
}
