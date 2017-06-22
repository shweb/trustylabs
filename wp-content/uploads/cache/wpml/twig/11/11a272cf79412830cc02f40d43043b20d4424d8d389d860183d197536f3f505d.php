<?php

/* slot-subform-statics-footer.twig */
class __TwigTemplate_f0a14ddf9ad8a138a65be449d322c796b53bea2c00248905cf56f3de96ae73ac extends Twig_Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-footer.twig", 1)->display(array_merge($context, array("preview" => $this->getAttribute($this->getAttribute($_previews_, "statics", array()), "footer", array()))));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">

\t";
        // line 5
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-footer.twig", 5)->display(array_merge($context, array("id" => "in-footer", "name" => "statics[footer][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "statics", array()), "footer", array()), "template", array()), "slot_type" => "footer")));
        // line 13
        echo "
\t";
        // line 14
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-footer.twig", 14)->display(array_merge($context, array("name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute($_settings_, "statics", array()), "footer", array()), "template_slug" => $this->getAttribute($_slot_settings_, "template", array()))));
        // line 21
        echo "
\t";
        // line 22
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-footer.twig", 22)->display(array_merge($context, array("id" => "static-footer", "name_base" => "statics[footer]", "slot_settings" => $this->getAttribute($this->getAttribute($_settings_, "statics", array()), "footer", array()))));
        // line 29
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 29,  40 => 22,  37 => 21,  33 => 14,  30 => 13,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "slot-subform-statics-footer.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-footer.twig");
    }
}
