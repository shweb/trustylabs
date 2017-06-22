<?php

/* template.twig */
class __TwigTemplate_147754f9b25831d21f4eb73d90a5f8cc2d8edf03f3b56bf407a4fa253b474eb4 extends Twig_Template
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
        // line 5
        echo "
<div class=\"";
        // line 6
        if (isset($context["css_classes"])) { $_css_classes_ = $context["css_classes"]; } else { $_css_classes_ = null; }
        echo twig_escape_filter($this->env, $_css_classes_, "html", null, true);
        echo " wpml-ls-legacy-list-horizontal\"";
        if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
        if ($this->getAttribute($_backward_compatibility_, "css_id", array())) {
            echo " id=\"";
            if (isset($context["backward_compatibility"])) { $_backward_compatibility_ = $context["backward_compatibility"]; } else { $_backward_compatibility_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_backward_compatibility_, "css_id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>";
        // line 9
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_languages_);
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 10
            echo "<li class=\"";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "css_classes", array()), "html", null, true);
            echo " wpml-ls-item-legacy-list-horizontal\">
\t\t\t\t<a href=\"";
            // line 11
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "url", array()), "html", null, true);
            echo "\"";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if ($this->getAttribute($this->getAttribute($_language_, "backward_compatibility", array()), "css_classes_a", array())) {
                echo " class=\"";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_language_, "backward_compatibility", array()), "css_classes_a", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 12
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if ($this->getAttribute($_language_, "flag_url", array())) {
                // line 13
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
            // line 16
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if (($this->getAttribute($_language_, "is_current", array()) && ($this->getAttribute($_language_, "native_name", array()) || $this->getAttribute($_language_, "display_name", array())))) {
                // line 18
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                $context["current_language_name"] = (($this->getAttribute($_language_, "native_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_language_, "native_name", array()), $this->getAttribute($_language_, "display_name", array()))) : ($this->getAttribute($_language_, "display_name", array())));
                // line 19
                echo "<span class=\"";
                if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
                echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
                echo "\">";
                if (isset($context["current_language_name"])) { $_current_language_name_ = $context["current_language_name"]; } else { $_current_language_name_ = null; }
                echo twig_escape_filter($this->env, $_current_language_name_, "html", null, true);
                echo "</span>";
            } else {
                // line 23
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "native_name", array())) {
                    // line 24
                    echo "<span class=\"";
                    if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
                    echo "\">";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 27
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "display_name", array())) {
                    // line 28
                    echo "<span class=\"";
                    if (isset($context["css_classes_display"])) { $_css_classes_display_ = $context["css_classes_display"]; } else { $_css_classes_display_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_display_, "html", null, true);
                    echo "\">";
                    // line 29
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 30
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "display_name", array()), "html", null, true);
                    // line 31
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 32
                    echo "</span>";
                }
            }
            // line 36
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>
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
        return array (  153 => 40,  146 => 36,  142 => 32,  134 => 31,  131 => 30,  123 => 29,  118 => 28,  115 => 27,  106 => 24,  103 => 23,  94 => 19,  91 => 18,  88 => 16,  73 => 13,  70 => 12,  58 => 11,  52 => 10,  47 => 9,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/template.twig");
    }
}
