<?php

/* slot-subform-statics-post_translations.twig */
class __TwigTemplate_d21c0fd6f25466208925730b175f100cfbd8007ca187481842ff7a6b7034f00b extends Twig_Template
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
        if (isset($context["previews"])) { $_previews_ = $context["previews"]; } else { $_previews_ = null; }
        $this->loadTemplate("preview.twig", "slot-subform-statics-post_translations.twig", 1)->display(array_merge($context, array("preview" => $this->getAttribute($this->getAttribute($_previews_, "statics", array()), "post_translations", array()))));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">

\t";
        // line 5
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-post_translations.twig", 5)->display(array_merge($context, array("id" => "in-post-translations", "name" => "statics[post_translations][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "template", array()), "slot_type" => "post_translations")));
        // line 13
        echo "
\t";
        // line 14
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-post_translations.twig", 14)->display(array_merge($context, array("name_base" => "statics[post_translations]", "slot_settings" => $this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "template_slug" => $this->getAttribute($_slot_settings_, "template", array()))));
        // line 21
        echo "
\t<h4><label>";
        // line 22
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "position_label", array()), "html", null, true);
        echo "</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "slot-subform-statics-post_translations.twig", 22)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "post_translation_position", array()))));
        echo "</h4>
\t<ul>
\t\t<li>
\t\t\t<label>
\t\t\t\t<input type=\"checkbox\" name=\"statics[post_translations][display_before_content]\"
\t\t\t\t\t   id=\"wpml-ls-before-in-post-translations\"
\t\t\t\t\t   value=\"1\"";
        // line 28
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "display_before_content", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "position_above", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t\t<li>
\t\t\t<label>
\t\t\t\t<input type=\"checkbox\"  name=\"statics[post_translations][display_after_content]\"
\t\t\t\t\t   id=\"wpml-ls-after-in-post-translations\"
\t\t\t\t\t   value=\"1\"";
        // line 35
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "display_after_content", array())) {
            echo " checked=\"checked\"";
        }
        echo ">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "position_below", array()), "html", null, true);
        echo "
\t\t\t</label>
\t\t</li>
\t</ul>

\t";
        // line 40
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "availability_text", array()))) {
            // line 41
            echo "\t\t";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            $context["availability_text"] = $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "default_alternative_languages_text", array());
            // line 42
            echo "\t";
        } else {
            // line 43
            echo "\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["availability_text"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "post_translations", array()), "availability_text", array());
            // line 44
            echo "\t";
        }
        // line 45
        echo "
\t<h4><label>";
        // line 46
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "post_translations", array()), "label_alternative_languages_text", array()), "html", null, true);
        echo "</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "slot-subform-statics-post_translations.twig", 46)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "alternative_languages_text", array()))));
        echo "</h4>
\t<input type=\"text\" class=\"js-wpml-ls-trigger-update\"
\t\t   name=\"statics[post_translations][availability_text]\" value=\"";
        // line 48
        if (isset($context["availability_text"])) { $_availability_text_ = $context["availability_text"]; } else { $_availability_text_ = null; }
        echo twig_escape_filter($this->env, $_availability_text_, "html", null, true);
        echo "\" size=\"40\">

</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-post_translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  103 => 46,  100 => 45,  97 => 44,  93 => 43,  90 => 42,  86 => 41,  83 => 40,  69 => 35,  53 => 28,  40 => 22,  37 => 21,  33 => 14,  30 => 13,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "slot-subform-statics-post_translations.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-post_translations.twig");
    }
}
