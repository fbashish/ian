<?php

/* modular/text.html.twig */
class __TwigTemplate_05eec17a2f8eb60a041955dbbadebdd63a962aff2705ab4a16d8490da991cf8e extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    <div class=\"container\">
        ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 4
        echo "        ";
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_align", array()))), "method");
            echo "
        ";
        }
        // line 7
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="modular-row callout">*/
/*     <div class="container">*/
/*         {% set image = page.media.images|first %}*/
/*         {% if image %}*/
/*             {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}*/
/*         {% endif %}*/
/*         {{ content }}*/
/*     </div>*/
/* </div>*/
/* */
