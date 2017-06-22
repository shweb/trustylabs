<?php

/* template.twig */
class __TwigTemplate_0aa57d112f6cfe200c977995b28e796f67dbde97b002f3a17ef18f6adc0353f3 extends Twig_Template
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
";
        // line 6
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_languages_);
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 7
            echo "    ";
            ob_start();
            // line 8
            echo "    <span class=\"";
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_language_, "css_classes", array()), "html", null, true);
            echo " wpml-ls-item-legacy-post-translations\">
        <a href=\"";
            // line 9
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
            // line 10
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if ($this->getAttribute($_language_, "flag_url", array())) {
                // line 11
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
            // line 14
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if (($this->getAttribute($_language_, "is_current", array()) && ($this->getAttribute($_language_, "native_name", array()) || $this->getAttribute($_language_, "display_name", array())))) {
                // line 16
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                $context["current_language_name"] = (($this->getAttribute($_language_, "native_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_language_, "native_name", array()), $this->getAttribute($_language_, "display_name", array()))) : ($this->getAttribute($_language_, "display_name", array())));
                // line 17
                echo "<span class=\"";
                if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
                echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
                echo "\">";
                if (isset($context["current_language_name"])) { $_current_language_name_ = $context["current_language_name"]; } else { $_current_language_name_ = null; }
                echo twig_escape_filter($this->env, $_current_language_name_, "html", null, true);
                echo "</span>";
            } else {
                // line 21
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "native_name", array())) {
                    // line 22
                    echo "<span class=\"";
                    if (isset($context["css_classes_native"])) { $_css_classes_native_ = $context["css_classes_native"]; } else { $_css_classes_native_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_native_, "html", null, true);
                    echo "\">";
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "native_name", array()), "html", null, true);
                    echo "</span>";
                }
                // line 25
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if ($this->getAttribute($_language_, "display_name", array())) {
                    // line 26
                    echo "<span class=\"";
                    if (isset($context["css_classes_display"])) { $_css_classes_display_ = $context["css_classes_display"]; } else { $_css_classes_display_ = null; }
                    echo twig_escape_filter($this->env, $_css_classes_display_, "html", null, true);
                    echo "\">";
                    // line 27
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 28
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_language_, "display_name", array()), "html", null, true);
                    // line 29
                    if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                    if ($this->getAttribute($_language_, "native_name", array())) {
                        echo "<span class=\"";
                        if (isset($context["css_classes_bracket"])) { $_css_classes_bracket_ = $context["css_classes_bracket"]; } else { $_css_classes_bracket_ = null; }
                        echo twig_escape_filter($this->env, $_css_classes_bracket_, "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 30
                    echo "</span>";
                }
            }
            // line 34
            echo "</a>
    </span>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  136 => 34,  132 => 30,  124 => 29,  121 => 28,  113 => 27,  108 => 26,  105 => 25,  96 => 22,  93 => 21,  84 => 17,  81 => 16,  78 => 14,  63 => 11,  60 => 10,  48 => 9,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-post-translations/template.twig");
    }
}
