<?php

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_e2246b899bb011be1017dd6798386ebf416ec52f5fbf913d791baed6f0a5f215 extends Twig_Template
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
        $context["crumbs"] = $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["crumbs"]) ? $context["crumbs"] : null)) > 1)) {
            // line 4
            echo "<ol class=\"breadcrumb\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 6
                echo "    <li><a href=\"";
                echo $this->getAttribute($context["crumb"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["crumb"], "menu", array());
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set crumbs = breadcrumbs.get() %}*/
/* */
/* {% if crumbs|length > 1 %}*/
/* <ol class="breadcrumb">*/
/*     {% for crumb in crumbs %}*/
/*     <li><a href="{{ crumb.url }}">{{ crumb.menu }}</a></li>*/
/*     {% endfor %}*/
/* </ol>*/
/* {% endif %}*/
/* */
