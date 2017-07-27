<?php

/* table-slots.twig */
class __TwigTemplate_768a46b08ccfa5bd60c64c764a4a1ceff181d7ef3c0f1fcbae6c92232c785c95 extends Twig_Template
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
        if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
        if (($_slot_type_ == "statics")) {
            // line 2
            echo "\t";
            $context["is_static"] = true;
            // line 3
            echo "\t";
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            $context["table_id"] = ((("wpml-ls-slot-list-" . $_slot_type_) . "-") . $_slug_);
        } else {
            // line 5
            echo "\t";
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            $context["table_id"] = ("wpml-ls-slot-list-" . $_slot_type_);
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
        if (twig_in_filter($_slug_, array(0 => "footer", 1 => "post_translations"))) {
            // line 9
            echo "    ";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            $context["label_action"] = $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_action", array());
        } else {
            // line 11
            echo "    ";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            $context["label_action"] = $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_actions", array());
        }
        // line 13
        echo "
<table id=\"";
        // line 14
        if (isset($context["table_id"])) { $_table_id_ = $context["table_id"]; } else { $_table_id_ = null; }
        echo twig_escape_filter($this->env, $_table_id_, "html", null, true);
        echo "\" class=\"js-wpml-ls-slot-list wpml-ls-slot-list\"";
        if (isset($context["slots_settings"])) { $_slots_settings_ = $context["slots_settings"]; } else { $_slots_settings_ = null; }
        if ( !$_slots_settings_) {
            echo " style=\"display:none;\"";
        }
        echo ">
    <thead>
    <tr>
        <th>";
        // line 17
        if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_preview", array()), "html", null, true);
        echo "</th>
        ";
        // line 18
        if (isset($context["is_static"])) { $_is_static_ = $context["is_static"]; } else { $_is_static_ = null; }
        if ( !$_is_static_) {
            echo "<th>";
            if (isset($context["strings"])) { $_strings_ = $context["strings"]; } else { $_strings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_strings_, "misc", array()), "label_position", array()), "html", null, true);
            echo "</th>";
        }
        // line 19
        echo "        <th";
        if (isset($context["is_static"])) { $_is_static_ = $context["is_static"]; } else { $_is_static_ = null; }
        if ( !$_is_static_) {
            echo " colspan=\"2\"";
        }
        echo ">";
        if (isset($context["label_action"])) { $_label_action_ = $context["label_action"]; } else { $_label_action_ = null; }
        echo twig_escape_filter($this->env, $_label_action_, "html", null, true);
        echo "</th></tr>
    </thead>
    <tbody>
    ";
        // line 22
        if (isset($context["slots_settings"])) { $_slots_settings_ = $context["slots_settings"]; } else { $_slots_settings_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_slots_settings_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["slot_settings"]) {
            // line 23
            echo "        ";
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if (isset($context["slot_type"])) { $_slot_type_ = $context["slot_type"]; } else { $_slot_type_ = null; }
            if (isset($context["slot_settings"])) { $_slot_settings_ = $context["slot_settings"]; } else { $_slot_settings_ = null; }
            if (isset($context["slots"])) { $_slots_ = $context["slots"]; } else { $_slots_ = null; }
            $this->loadTemplate("table-slot-row.twig", "table-slots.twig", 23)->display(array_merge($context, array("slug" => $_slug_, "slot_type" => $_slot_type_, "slot_settings" => $_slot_settings_, "slots" => $_slots_)));
            // line 31
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['slot_settings'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "table-slots.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  118 => 31,  111 => 23,  93 => 22,  80 => 19,  72 => 18,  67 => 17,  55 => 14,  52 => 13,  47 => 11,  42 => 9,  39 => 8,  36 => 7,  31 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table-slots.twig", "/var/www/html/trustylabs.mg/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/table-slots.twig");
    }
}
