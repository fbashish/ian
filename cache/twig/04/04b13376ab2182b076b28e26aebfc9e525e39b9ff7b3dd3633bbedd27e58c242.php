<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_16533f6562f5f72aa78499eaaaf2285c846a89d4f44e9b1927fd3da4fdf59364 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
            // line 4
            echo "
<span class=\"tags\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "
        <a class=\"label label-default\" href=\"";
                // line 8
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag:";
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  37 => 8,  34 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set taxlist = taxonomylist.get() %}*/
/* */
/* {% if taxlist %}*/
/* */
/* <span class="tags">*/
/*     {% for tax,value in taxlist[taxonomy] %}*/
/* */
/*         <a class="label label-default" href="{{ base_url }}/tag:{{ tax }}">{{ tax }}</a>*/
/* */
/*     {% endfor %}*/
/* </span>*/
/* {% endif %}*/
/* */
