<?php

/* section-options.twig */
class __TwigTemplate_bd68c4efcf13e2040ba11b83db7a61daaf70cc2cda091d24fc9f24b03ec2c720 extends Twig_Template
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
        echo "<div class=\"js-wpml-ls-option wpml-ls-language_order\">
\t<h4><label>";
        // line 2
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_language_order", array()), "html", null, true);
        echo "</label> ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "section-options.twig", 2)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "languages_order", array()))));
        // line 3
        echo "\t\t";
        $this->loadTemplate("save-notification.twig", "section-options.twig", 3)->display($context);
        // line 4
        echo "\t</h4>
\t<p class=\"explanation-text\">";
        // line 5
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "tip_drag_languages", array()), "html", null, true);
        echo "</p>
\t<ul id=\"wpml-ls-languages-order\" class=\"wpml-ls-languages-order\">
\t\t";
        // line 7
        if (isset($context["ordered_languages"])) { $_ordered_languages_ = $context["ordered_languages"]; } else { $_ordered_languages_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_ordered_languages_);
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "\t\t<li class=\"js-wpml-languages-order-item\" data-language-code=\"";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "code", array()), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 9
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "flag_url", array()), "html", null, true);
            echo "\"> ";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "display_name", array()), "html", null, true);
            echo "<input type=\"hidden\" name=\"languages_order[]\" value=\"";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "code", array()), "html", null, true);
            echo "\">
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
</div>

<div class=\"js-wpml-ls-option wpml-ls-languages_with_no_translations\">
\t<h4><label>";
        // line 16
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_languages_with_no_translations", array()), "html", null, true);
        echo " ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "section-options.twig", 16)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "languages_without_translation", array()))));
        // line 17
        echo "\t\t</label>
\t\t";
        // line 18
        $this->loadTemplate("save-notification.twig", "section-options.twig", 18)->display($context);
        // line 19
        echo "\t</h4>
\t<ul>
\t\t<li>
\t\t\t<label for=\"link_empty_off\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_off\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"0\"";
        // line 25
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "link_empty", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "option_skip_link", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<label for=\"link_empty_on\">
\t\t\t\t<input type=\"radio\" name=\"link_empty\" id=\"link_empty_on\"
\t\t\t\t\t   class=\"js-wpml-ls-trigger-save\"
\t\t\t\t\t   value=\"1\"";
        // line 32
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "link_empty", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "option_link_home", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t</ul>
</div>

<div class=\"js-wpml-ls-option wpml-ls-preserve_url_args\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 40
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "copy_parameters", array())) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 41
        echo "\t\t\t<label for=\"copy_parameters\">
\t\t\t\t";
        // line 42
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_preserve_url_args", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "copy_parameters", array())) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 43
        echo "</label>";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "copy_parameters", array())) {
            echo "</a>";
        }
        // line 44
        echo "
\t\t";
        // line 45
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "section-options.twig", 45)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "preserve_url_arguments", array()))));
        // line 46
        echo "
\t\t";
        // line 47
        $this->loadTemplate("save-notification.twig", "section-options.twig", 47)->display($context);
        // line 48
        echo "
\t\t<input type=\"text\" size=\"100\" id=\"copy_parameters\" name=\"copy_parameters\"
\t\t\t   value=\"";
        // line 50
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "copy_parameters", array()), "html", null, true);
        echo "\"
\t\t\t   class=\"js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 51
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "copy_parameters", array())) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">
\t</p>
</div>

<div class=\"js-wpml-ls-option wpml-ls-additional_css\">
\t<p class=\"wpml-ls-form-line\">
\t\t";
        // line 57
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "additional_css", array())) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 58
        echo "\t\t\t<label for=\"additional_css\">
\t\t\t\t";
        // line 59
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_additional_css", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "additional_css", array())) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 60
        echo "</label>";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "additional_css", array())) {
            echo "</a>";
        }
        // line 61
        echo "

\t\t";
        // line 63
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "section-options.twig", 63)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "additional_css", array()))));
        // line 64
        echo "
\t\t";
        // line 65
        $this->loadTemplate("save-notification.twig", "section-options.twig", 65)->display($context);
        // line 66
        echo "
\t\t<textarea id=\"additional_css\" name=\"additional_css\" rows=\"4\"
\t\t\t\t  class=\"large-text js-wpml-ls-additional-css js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save";
        // line 68
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($_settings_, "additional_css", array())) {
            echo " js-wpml-ls-toggle-target hidden";
        }
        echo "\">";
        // line 69
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "additional_css", array()), "html", null, true);
        // line 70
        echo "</textarea>
\t</p>
</div>

<div class=\"js-wpml-ls-option wpml-ls-backwards_compatibility\">
\t<div class=\"wpml-ls-form-line\">
\t\t";
        // line 76
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "migrated", array()) == 1)) {
            // line 77
            echo "\t\t\t";
            $context["hide_backwards_compatibility"] = true;
            // line 78
            echo "\t\t";
        }
        // line 79
        echo "
\t\t";
        // line 80
        if (isset($context["hide_backwards_compatibility"])) { $_hide_backwards_compatibility_ = $context["hide_backwards_compatibility"]; } else { $_hide_backwards_compatibility_ = null; }
        if ($_hide_backwards_compatibility_) {
            echo "<a href=\"#\" class=\"js-wpml-ls-toggle-once\">";
        }
        // line 81
        echo "\t\t\t<label>
\t\t\t\t";
        // line 82
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_migrated_toggle", array()), "html", null, true);
        if (isset($context["hide_backwards_compatibility"])) { $_hide_backwards_compatibility_ = $context["hide_backwards_compatibility"]; } else { $_hide_backwards_compatibility_ = null; }
        if ($_hide_backwards_compatibility_) {
            echo "<span class=\"otgs-ico-caret-down js-arrow-toggle\"></span>";
        }
        // line 83
        echo "</label>";
        if (isset($context["hide_backwards_compatibility"])) { $_hide_backwards_compatibility_ = $context["hide_backwards_compatibility"]; } else { $_hide_backwards_compatibility_ = null; }
        if ($_hide_backwards_compatibility_) {
            echo "</a>";
        }
        // line 84
        echo "
\t\t";
        // line 85
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "section-options.twig", 85)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "backwards_compatibility", array()))));
        // line 86
        echo "
\t\t";
        // line 87
        $this->loadTemplate("save-notification.twig", "section-options.twig", 87)->display($context);
        // line 88
        echo "
\t\t<p";
        // line 89
        if (isset($context["hide_backwards_compatibility"])) { $_hide_backwards_compatibility_ = $context["hide_backwards_compatibility"]; } else { $_hide_backwards_compatibility_ = null; }
        if ($_hide_backwards_compatibility_) {
            echo " class=\"js-wpml-ls-toggle-target hidden\"";
        }
        echo ">
\t\t\t<input type=\"checkbox\" id=\"wpml-ls-backwards-compatibility\" name=\"migrated\"
\t\t\t\t   value=\"0\"";
        // line 91
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "migrated", array()) == 0)) {
            echo " checked=\"checked\"";
        }
        // line 92
        echo "\t\t\t\t   class=\"js-wpml-ls-migrated js-wpml-ls-trigger-save js-wpml-ls-trigger-need-save\">

\t\t\t<label for=\"wpml-ls-backwards-compatibility\">
\t\t\t\t";
        // line 95
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "options", array()), "label_skip_backwards_compatibility", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</p>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "section-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 95,  292 => 92,  287 => 91,  279 => 89,  276 => 88,  274 => 87,  271 => 86,  268 => 85,  265 => 84,  259 => 83,  252 => 82,  249 => 81,  244 => 80,  241 => 79,  238 => 78,  235 => 77,  232 => 76,  224 => 70,  221 => 69,  215 => 68,  211 => 66,  209 => 65,  206 => 64,  203 => 63,  199 => 61,  193 => 60,  186 => 59,  183 => 58,  178 => 57,  166 => 51,  161 => 50,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  140 => 43,  133 => 42,  130 => 41,  125 => 40,  108 => 32,  92 => 25,  84 => 19,  82 => 18,  79 => 17,  73 => 16,  67 => 12,  51 => 9,  45 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-options.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-options.twig");
    }
}
