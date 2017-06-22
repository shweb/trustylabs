<?php

/* setup-wizard-buttons.twig */
class __TwigTemplate_bfb9113a1cc651c4fd181db0a67185e6554322d5dd41f29fd9bff323973e000b extends Twig_Template
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
        if (isset($context["setup_complete"])) { $_setup_complete_ = $context["setup_complete"]; } else { $_setup_complete_ = null; }
        if ( !$_setup_complete_) {
            // line 2
            echo "\t<footer id=\"icl_setup_nav_3\" class=\"js-wpml-ls-section wpml-section clearfix text-right\">
\t\t<input id=\"icl_setup_back_2\" class=\"button-secondary alignleft\" name=\"save\" value=\"";
            // line 3
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "button_back", array()), "html", null, true);
            echo "\" type=\"button\" />
\t\t";
            // line 4
            if (isset($context["setup_step_2_nonce_field"])) { $_setup_step_2_nonce_field_ = $context["setup_step_2_nonce_field"]; } else { $_setup_step_2_nonce_field_ = null; }
            echo $_setup_step_2_nonce_field_;
            echo "
\t\t<input class=\"button-primary alignright\" name=\"save\" value=\"";
            // line 5
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "button_next", array()), "html", null, true);
            echo "\" type=\"submit\" />
\t\t<input type=\"hidden\" name=\"submit_setup_wizard\" value=\"0\" />
\t</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "setup-wizard-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setup-wizard-buttons.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/setup-wizard-buttons.twig");
    }
}
