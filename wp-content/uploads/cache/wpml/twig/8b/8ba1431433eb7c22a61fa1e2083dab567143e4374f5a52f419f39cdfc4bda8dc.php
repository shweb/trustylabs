<?php

/* dropdown-sidebars.twig */
class __TwigTemplate_1b72de019f482c49b377f1c75098fa9e206a45234a7193631abe8218ce515102 extends Twig_Template
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
        echo "<h4><label for=\"wpml-ls-available-sidebars\">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "select_label", array()), "html", null, true);
        echo ":</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "dropdown-sidebars.twig", 1)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "available_sidebars", array()))));
        echo "</h4>
<select name=\"wpml_ls_available_sidebars\" class=\"js-wpml-ls-available-slots js-wpml-ls-available-sidebars\">
    <option disabled=\"disabled\">-- ";
        // line 3
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "sidebars", array()), "select_option_choose", array()), "html", null, true);
        echo " --</option>
    ";
        // line 4
        if (isset($context["sidebars"])) { $_sidebars_ = $context["sidebars"]; } else { $_sidebars_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_sidebars_);
        foreach ($context['_seq'] as $context["sidebar_key"] => $context["sidebar"]) {
            // line 5
            echo "        ";
            if (isset($context["sidebar_key"])) { $_sidebar_key_ = $context["sidebar_key"]; } else { $_sidebar_key_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($_sidebar_key_ == $_slug_)) {
                // line 6
                echo "            ";
                $context["attr"] = " selected=\"selected\"";
                // line 7
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute($_sidebar_, "id", array()), twig_get_array_keys_filter($this->getAttribute($_settings_, "sidebar", array())))) {
                // line 8
                echo "            ";
                $context["attr"] = " disabled=\"disabled\"";
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["attr"] = "";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <option value=\"";
            if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sidebar_, "id", array()), "html", null, true);
            echo "\"";
            if (isset($context["attr"])) { $_attr_ = $context["attr"]; } else { $_attr_ = null; }
            echo twig_escape_filter($this->env, $_attr_, "html", null, true);
            echo ">";
            if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_sidebar_, "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sidebar_key'], $context['sidebar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "dropdown-sidebars.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  39 => 5,  34 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dropdown-sidebars.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/dropdown-sidebars.twig");
    }
}
