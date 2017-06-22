<?php

/* dropdown-templates.twig */
class __TwigTemplate_996a48ba38cc4d3080ac6b296b4f2a4b9cae14083fcb3f8dbe3075232cd2697b extends Twig_Template
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
        $context["supported_core_templates"] = array();
        // line 2
        $context["supported_custom_templates"] = array();
        // line 3
        echo "
";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "templates", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if (twig_in_filter($_slot_type_, $this->getAttribute($_template_, "supported_slot_types", array()))) {
                // line 5
                echo "\t";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                if ($this->getAttribute($_template_, "is_core", array())) {
                    // line 6
                    echo "\t\t";
                    if (isset($context["supported_core_templates"])) { $_supported_core_templates_ = $context["supported_core_templates"]; } else { $_supported_core_templates_ = null; }
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    $context["supported_core_templates"] = twig_array_merge($_supported_core_templates_, array(0 => $_template_));
                    // line 7
                    echo "\t";
                } else {
                    // line 8
                    echo "\t\t";
                    if (isset($context["supported_custom_templates"])) { $_supported_custom_templates_ = $context["supported_custom_templates"]; } else { $_supported_custom_templates_ = null; }
                    if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                    $context["supported_custom_templates"] = twig_array_merge($_supported_custom_templates_, array(0 => $_template_));
                    // line 9
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        if (isset($context["supported_core_templates"])) { $_supported_core_templates_ = $context["supported_core_templates"]; } else { $_supported_core_templates_ = null; }
        if (isset($context["supported_custom_templates"])) { $_supported_custom_templates_ = $context["supported_custom_templates"]; } else { $_supported_custom_templates_ = null; }
        $context["total_templates"] = (twig_length_filter($this->env, $_supported_core_templates_) + twig_length_filter($this->env, $_supported_custom_templates_));
        // line 13
        echo "
<div";
        // line 14
        if (isset($context["total_templates"])) { $_total_templates_ = $context["total_templates"]; } else { $_total_templates_ = null; }
        if (($_total_templates_ <= 1)) {
            echo " class=\"hidden\"";
        }
        echo ">

\t<h4><label for=\"template-";
        // line 16
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "templates_dropdown_label", array()), "html", null, true);
        echo "</label>  ";
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        $this->loadTemplate("tooltip.twig", "dropdown-templates.twig", 16)->display(array_merge($context, array("content" => $this->getAttribute($this->getAttribute($_strings_, "tooltips", array()), "available_templates", array()))));
        echo "</h4>

\t<select id=\"template-";
        // line 18
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" name=\"";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "\" class=\"js-wpml-ls-template-selector js-wpml-ls-trigger-update\">

\t\t<optgroup label=\"";
        // line 20
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "templates_wpml_group", array()), "html", null, true);
        echo "\">
\t\t";
        // line 21
        if (isset($context["supported_core_templates"])) { $_supported_core_templates_ = $context["supported_core_templates"]; } else { $_supported_core_templates_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_supported_core_templates_);
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 22
            echo "\t\t\t";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            $context["template_data"] = $this->getAttribute($_template_, "get_template_data", array(), "method");
            // line 23
            echo "\t\t\t<option value=\"";
            if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_data_, "slug", array()), "html", null, true);
            echo "\" ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
            if (($_value_ == $this->getAttribute($_template_data_, "slug", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_data_, "name", array()), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</optgroup>

\t\t";
        // line 27
        if (isset($context["supported_custom_templates"])) { $_supported_custom_templates_ = $context["supported_custom_templates"]; } else { $_supported_custom_templates_ = null; }
        if ((twig_length_filter($this->env, $_supported_custom_templates_) > 0)) {
            // line 28
            echo "\t\t\t<optgroup label=\"";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "templates_custom_group", array()), "html", null, true);
            echo "\">
\t\t\t";
            // line 29
            if (isset($context["supported_custom_templates"])) { $_supported_custom_templates_ = $context["supported_custom_templates"]; } else { $_supported_custom_templates_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_supported_custom_templates_);
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 30
                echo "\t\t\t\t";
                if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
                $context["template_data"] = $this->getAttribute($_template_, "get_template_data", array(), "method");
                // line 31
                echo "\t\t\t\t<option value=\"";
                if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_template_data_, "slug", array()), "html", null, true);
                echo "\" ";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
                if (($_value_ == $this->getAttribute($_template_data_, "slug", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["template_data"])) { $_template_data_ = $context["template_data"]; } else { $_template_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_template_data_, "name", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 35
        echo "
\t</select>

</div>
";
    }

    public function getTemplateName()
    {
        return "dropdown-templates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 35,  172 => 33,  153 => 31,  149 => 30,  144 => 29,  138 => 28,  135 => 27,  131 => 25,  112 => 23,  108 => 22,  103 => 21,  98 => 20,  89 => 18,  77 => 16,  69 => 14,  66 => 13,  62 => 12,  59 => 11,  51 => 9,  46 => 8,  43 => 7,  38 => 6,  34 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dropdown-templates.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/dropdown-templates.twig");
    }
}
