<?php

/* button-add-new-ls.twig */
class __TwigTemplate_7da9c4811f25d4476486c24af838f0df8402c2b01f3634ec6eba03f7cf6b9b89 extends Twig_Template
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
        echo "<p class=\"alignright\">

\t";
        // line 3
        if (isset($context["tooltip_all_assigned"])) { $_tooltip_all_assigned_ = $context["tooltip_all_assigned"]; } else { $_tooltip_all_assigned_ = null; }
        $context["add_tooltip"] = $_tooltip_all_assigned_;
        // line 4
        echo "
\t";
        // line 5
        if (isset($context["existing_items"])) { $_existing_items_ = $context["existing_items"]; } else { $_existing_items_ = null; }
        if (($_existing_items_ == 0)) {
            // line 6
            echo "\t\t";
            if (isset($context["tooltip_no_item"])) { $_tooltip_no_item_ = $context["tooltip_no_item"]; } else { $_tooltip_no_item_ = null; }
            $context["add_tooltip"] = $_tooltip_no_item_;
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if (isset($context["settings_items"])) { $_settings_items_ = $context["settings_items"]; } else { $_settings_items_ = null; }
        if (isset($context["existing_items"])) { $_existing_items_ = $context["existing_items"]; } else { $_existing_items_ = null; }
        if (($_settings_items_ >= $_existing_items_)) {
            // line 10
            echo "\t\t";
            $context["disabled"] = true;
            // line 11
            echo "\t";
        }
        // line 12
        echo "
\t<span class=\"js-wpml-ls-tooltip-wrapper";
        // line 13
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ( !$_disabled_) {
            echo " hidden";
        }
        echo "\">
        ";
        // line 14
        if (isset($context["add_tooltip"])) { $_add_tooltip_ = $context["add_tooltip"]; } else { $_add_tooltip_ = null; }
        $this->loadTemplate("tooltip.twig", "button-add-new-ls.twig", 14)->display(array_merge($context, array("content" => $_add_tooltip_)));
        // line 15
        echo "    </span>

\t<button class=\"js-wpml-ls-open-dialog button-secondary\"";
        // line 17
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ($_disabled_) {
            echo " disabled=\"disabled\"";
        }
        // line 18
        echo "\t\t\tdata-target=\"";
        if (isset($context["button_target"])) { $_button_target_ = $context["button_target"]; } else { $_button_target_ = null; }
        echo twig_escape_filter($this->env, $_button_target_, "html", null, true);
        echo "\">+ ";
        if (isset($context["button_label"])) { $_button_label_ = $context["button_label"]; } else { $_button_label_ = null; }
        echo twig_escape_filter($this->env, $_button_label_, "html", null, true);
        echo "</button>
</p>";
    }

    public function getTemplateName()
    {
        return "button-add-new-ls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 17,  65 => 15,  62 => 14,  55 => 13,  52 => 12,  49 => 11,  46 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 6,  29 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button-add-new-ls.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/button-add-new-ls.twig");
    }
}
