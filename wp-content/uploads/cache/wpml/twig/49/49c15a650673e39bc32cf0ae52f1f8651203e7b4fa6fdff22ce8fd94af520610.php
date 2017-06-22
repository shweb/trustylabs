<?php

/* radio-hierarchical-menu.twig */
class __TwigTemplate_e079ad5f47406d80bf7d15cf14b14e4ec326a07ea2a97ecbf343283ce47a4416 extends Twig_Template
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
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        if ( !$this->getAttribute($_slot_settings_, "is_hierarchical", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context["is_hierarchical"] = 1;
        } else {
            // line 4
            echo "    ";
            if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
            $context["is_hierarchical"] = $this->getAttribute($_slot_settings_, "is_hierarchical", array());
        }
        // line 6
        echo "
<h4><label>";
        // line 7
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "is_hierarchical_label", array()), "html", null, true);
        echo "</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "radio-hierarchical-menu.twig", 7)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "menu_style_type", array()))));
        echo "</h4>
<ul>
    <li>
        <label>
            <input type=\"radio\" class=\"js-wpml-ls-trigger-update js-wpml-ls-menu-is-hierarchical\"
                   name=\"";
        // line 12
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[is_hierarchical]";
        } else {
            echo "is_hierarchical";
        }
        echo "\"
                   value=\"1\"";
        // line 13
        if (isset($context["is_hierarchical"])) { $_is_hierarchical_ = $context["is_hierarchical"]; } else { $_is_hierarchical_ = null; }
        if (($_is_hierarchical_ == 1)) {
            echo " checked=\"checked\"";
        }
        echo "><b>";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "hierarchical", array()), "html", null, true);
        echo "</b> - ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "hierarchical_desc", array()), "html", null, true);
        echo "
        </label>
    </li>
    <li>
        <label>
            <input type=\"radio\" class=\"js-wpml-ls-trigger-update js-wpml-ls-menu-is-hierarchical\"
                   name=\"";
        // line 19
        if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
        if ($_name_base_) {
            if (isset($context["name_base"])) { $_name_base_ = $context["name_base"]; } else { $_name_base_ = null; }
            echo twig_escape_filter($this->env, $_name_base_, "html", null, true);
            echo "[is_hierarchical]";
        } else {
            echo "is_hierarchical";
        }
        echo "\"
                   value=\"0\"";
        // line 20
        if (isset($context["is_hierarchical"])) { $_is_hierarchical_ = $context["is_hierarchical"]; } else { $_is_hierarchical_ = null; }
        if (($_is_hierarchical_ == 0)) {
            echo " checked=\"checked\"";
        }
        echo "><b>";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "flat", array()), "html", null, true);
        echo "</b> - ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "menus", array()), "flat_desc", array()), "html", null, true);
        echo "
        </label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "radio-hierarchical-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  75 => 19,  57 => 13,  46 => 12,  34 => 7,  31 => 6,  26 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "radio-hierarchical-menu.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/radio-hierarchical-menu.twig");
    }
}
