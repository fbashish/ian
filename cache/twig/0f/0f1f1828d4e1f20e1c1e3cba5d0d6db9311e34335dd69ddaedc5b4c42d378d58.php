<?php

/* partials/archives.html.twig */
class __TwigTemplate_df2cda4a7c9929935665d139db758f8d4d19d4be475d61d52eee082e9e4e049b extends Twig_Template
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
        echo "<ul class=\"list-group\">
";
        // line 2
        $context["month"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 4
            echo "\t";
            $context["month"] = twig_date_modify_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "-1 month");
            // line 5
            echo "    <li class=\"list-group-item\"><a href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/month:";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "M_Y")), "url");
            echo "\">";
            echo twig_date_format_filter($this->env, (isset($context["month"]) ? $context["month"] : null), "F Y");
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  31 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="list-group">*/
/* {% set month = "now"|date("m/d/Y") %}*/
/* {% for j in range(1, 12) %}*/
/* 	{% set month = month|date_modify('-1 month') %}*/
/*     <li class="list-group-item"><a href="{{ base_url }}/month:{{ month|date('M_Y')|lower|e('url') }}">{{ month|date('F Y') }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
