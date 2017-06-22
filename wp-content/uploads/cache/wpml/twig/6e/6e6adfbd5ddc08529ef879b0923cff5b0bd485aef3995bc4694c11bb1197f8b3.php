<?php

/* template.twig */
class __TwigTemplate_7588b7fa710e65595a863b4095caa449e003da74bc74ca4a4e92348047c69c91 extends Twig_Template
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
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_flag"] = twig_trim_filter(("wpml-ls-flag " . $this->getAttribute($_backward_compatibility_, "css_classes_flag", array())));
        // line 2
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_native"] = twig_trim_filter(("wpml-ls-native " . $this->getAttribute($_backward_compatibility_, "css_classes_native", array())));
        // line 3
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_display"] = twig_trim_filter(("wpml-ls-display " . $this->getAttribute($_backward_compatibility_, "css_classes_display", array())));
        // line 4
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_bracket"] = twig_trim_filter(("wpml-ls-bracket " . $this->getAttribute($_backward_compatibility_, "css_classes_bracket", array())));
        // line 6
        if (isset($context["flag_url"])) { $_flag_url_ = $context["flag_url"]; } else { $_flag_url_ = null; }
        if ($_flag_url_) {
            // line 7
            echo "<img class=\"";
            if (isset($context["css_classes_flag"])) { $_css_classes_flag_ = $context["css_classes_flag"]; } else { $_css_classes_flag_ = null; }
            echo twig_escape_filter($this->env, $_css_classes_flag_, "html", null, true);
            echo "\" src=\"";
            if (isset($context["flag_url"])) { $_flag_url_ = $context["flag_url"]; } else { $_flag_url_ = null; }
            echo twig_escape_filter($this->env, $_flag_url_, "html", null, true);
            echo "\" alt=\"";
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            echo twig_escape_filter($this->env, $_code_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["flag_title"])) { $_flag_title_ = $context["flag_title"]; } else { $_flag_title_ = null; }
            echo twig_escape_filter($this->env, $_flag_title_, "html", null, true);
            echo "\">";
        }
        // line 10
        if (isset($context["native_name"])) { $_native_name_ = $context["native_name"]; } else { $_native_name_ = null; }
        if ($_native_name_) {
            // line 11
            echo "<span class=\"";
            if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
            echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
            echo "\">";
            if (isset($context["native_name"])) { $_native_name_ = $context["native_name"]; } else { $_native_name_ = null; }
            echo twig_escape_filter($this->env, $_native_name_, "html", null, true);
            echo "</span>";
        }
        // line 14
        if (isset($context["display_name"])) { $_display_name_ = $context["display_name"]; } else { $_display_name_ = null; }
        if ($_display_name_) {
            // line 15
            echo "<span class=\"";
            if (isset($context["css_classes_display"])) { $_css_classes_display_ = $context["css_classes_display"]; } else { $_css_classes_display_ = null; }
            echo twig_escape_filter($this->env, $_css_classes_display_, "html", null, true);
            echo "\">";
            // line 16
            if (isset($context["native_name"])) { $_native_name_ = $context["native_name"]; } else { $_native_name_ = null; }
            if ($_native_name_) {
                echo "<span class=\"";
                if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                echo "\"> (</span>";
            }
            // line 17
            if (isset($context["display_name"])) { $_display_name_ = $context["display_name"]; } else { $_display_name_ = null; }
            echo twig_escape_filter($this->env, $_display_name_, "html", null, true);
            // line 18
            if (isset($context["native_name"])) { $_native_name_ = $context["native_name"]; } else { $_native_name_ = null; }
            if ($_native_name_) {
                echo "<span class=\"";
                if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                echo "\">)</span>";
            }
            // line 19
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  80 => 18,  77 => 17,  69 => 16,  64 => 15,  61 => 14,  52 => 11,  49 => 10,  34 => 7,  31 => 6,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/template.twig");
    }
}
