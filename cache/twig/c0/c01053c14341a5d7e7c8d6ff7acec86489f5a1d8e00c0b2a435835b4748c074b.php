<?php

/* modular/showcase.html.twig */
class __TwigTemplate_a273f9947268735ff17d9ea32895cec7e79198e9a459fd469afc2bbe1a725b3a extends Twig_Template
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
        echo "<div class=\"modular-row showcase header\">
    <div class=\"container\">
        ";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 6
            echo "            <a class=\"btn";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " btn-default";
            }
            echo "\" href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="modular-row showcase header">*/
/*     <div class="container">*/
/*         {{ content }}*/
/* */
/*         {% for button in page.header.buttons %}*/
/*             <a class="btn{% if button.primary %} btn-default{% endif %}" href="{{ base_url_relative }}{{ button.url }}">{{ button.text }}</a>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
