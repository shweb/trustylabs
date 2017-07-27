<?php

/* template.twig */
class __TwigTemplate_103d7ccf573a61d92edc3a6762a14da7b154d49d1aa297bb2ededd40932824a9 extends Twig_Template
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
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        if (isset($context["current_language_code"])) { $_current_language_code_ = $context["current_language_code"]; } else { $_current_language_code_ = null; }
        $context["current_language"] = $this->getAttribute($_languages_, $_current_language_code_, array(), "array");
        // line 2
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_flag"] = twig_trim_filter(("wpml-ls-flag " . $this->getAttribute($_backward_compatibility_, "css_classes_flag", array())));
        // line 3
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_native"] = twig_trim_filter(("wpml-ls-native " . $this->getAttribute($_backward_compatibility_, "css_classes_native", array())));
        // line 4
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_display"] = twig_trim_filter(("wpml-ls-display " . $this->getAttribute($_backward_compatibility_, "css_classes_display", array())));
        // line 5
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        $context["css_classes_bracket"] = twig_trim_filter(("wpml-ls-bracket " . $this->getAttribute($_backward_compatibility_, "css_classes_bracket", array())));
        // line 6
        echo "
<div
\t class=\"";
        // line 8
        if (isset($context["css_classes"])) { $_css_classes_ = $context["css_classes"]; } else { $_css_classes_ = null; }
        echo twig_escape_filter($this->env, $_css_classes_, "html", null, true);
        echo " wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown\"";
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        if ($this->getAttribute($_backward_compatibility_, "css_id", array())) {
            echo " id=\"";
            if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_backward_compatibility_, "css_id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>

\t\t<li tabindex=\"0\" class=\"";
        // line 11
        if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_current_language_, "css_classes", array()), "html", null, true);
        echo " wpml-ls-item-legacy-dropdown\">
\t\t\t<a href=\"#\" class=\"";
        // line 12
        if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter(("js-wpml-ls-item-toggle wpml-ls-item-toggle " . $this->getAttribute($this->getAttribute($_current_language_, "backward_compatibility", array()), "css_classes_a", array()))), "html", null, true);
        echo "\">";
        // line 13
        if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
        if ($this->getAttribute($_current_language_, "flag_url", array())) {
            // line 14
            echo "<img class=\"";
            if (isset($context["css_classes_flag"])) { $_css_classes_flag_ = $context["css_classes_flag"]; } else { $_css_classes_flag_ = null; }
            echo twig_escape_filter($this->env, $_css_classes_flag_, "html", null, true);
            echo "\" src=\"";
            if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_current_language_, "flag_url", array()), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["current_language_code"])) { $_current_language_code_ = $context["current_language_code"]; } else { $_current_language_code_ = null; }
            echo twig_escape_filter($this->env, $_current_language_code_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_current_language_, "flag_title", array()), "html", null, true);
            echo "\">";
        }
        // line 17
        if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
        if (($this->getAttribute($_current_language_, "display_name", array()) || $this->getAttribute($_current_language_, "native_name", array()))) {
            // line 18
            if (isset($context["current_language"])) { $_current_language_ = $context["current_language"]; } else { $_current_language_ = null; }
            $context["current_language_name"] = (($this->getAttribute($_current_language_, "display_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_current_language_, "display_name", array()), $this->getAttribute($_current_language_, "native_name", array()))) : ($this->getAttribute($_current_language_, "native_name", array())));
            // line 19
            echo "<span class=\"";
            if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
            echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
            echo "\">";
            if (isset($context["current_language_name"])) { $_current_language_name_ = $context["current_language_name"]; } else { $_current_language_name_ = null; }
            echo twig_escape_filter($this->env, $_current_language_name_, "html", null, true);
            echo "</span>";
        }
        // line 21
        echo "</a>

\t\t\t<ul class=\"wpml-ls-sub-menu\">
\t\t\t\t";
        // line 24
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_languages_);
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if ( !$this->getAttribute($_language_, "is_current", array())) {
                // line 25
                echo "
\t\t\t\t\t<li class=\"";
                // line 26
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_language_, "css_classes", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 27
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_language_, "url", array()), "html", null, true);
                echo "\">";
                // line 28
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "flag_url", array())) {
                    // line 29
                    echo "<img class=\"";
                    if (isset($context["css_classes_flag"])) { $_css_classes_flag_ = $context["css_classes_flag"]; } else { $_css_classes_flag_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_flag_, "html", null, true);
                    echo "\" src=\"";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "flag_url", array()), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "code", array()), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "flag_title", array()), "html", null, true);
                    echo "\">";
                }
                // line 32
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "native_name", array())) {
                    // line 33
                    echo "<span class=\"";
                    if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
                    echo "\">";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 35
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "display_name", array())) {
                    // line 36
                    echo "<span class=\"";
                    if (isset($context["css_classes_display"])) { $_css_classes_display_ = $context["css_classes_display"]; } else { $_css_classes_display_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_display_, "html", null, true);
                    echo "\">";
                    // line 37
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 38
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "display_name", array()), "html", null, true);
                    // line 39
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 40
                    echo "</span>";
                }
                // line 42
                echo "</a>
\t\t\t\t\t</li>

\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</ul>

\t\t</li>

\t</ul>
</div>";
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
        return array (  190 => 46,  180 => 42,  177 => 40,  169 => 39,  166 => 38,  158 => 37,  153 => 36,  150 => 35,  141 => 33,  138 => 32,  123 => 29,  120 => 28,  116 => 27,  111 => 26,  108 => 25,  101 => 24,  96 => 21,  87 => 19,  84 => 18,  81 => 17,  66 => 14,  63 => 13,  59 => 12,  54 => 11,  39 => 8,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/template.twig");
    }
}
