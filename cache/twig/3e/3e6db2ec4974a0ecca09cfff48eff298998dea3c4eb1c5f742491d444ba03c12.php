<?php

/* page.html.twig */
class __TwigTemplate_24f098a3c26141671c4ea4e45472820e2785ee9cd8a53a5e92a701739d4313b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 5
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 1080);
        // line 6
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 500);
        // line 7
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "


     <div id=\"main-content\" class=\"container\">

     ";
        // line 16
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 17
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array(0 => "", 1 => "blog-header-image"), "method");
            echo "
        ";
        } else {
            // line 19
            echo "            ";
            if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
                // line 20
                echo "                ";
                if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                    // line 21
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                    // line 22
                    echo "                ";
                } else {
                    // line 23
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                    // line 24
                    echo "                ";
                }
                // line 25
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
                echo "
            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "



     ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 33
            echo "            <h3>
                ";
            // line 34
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 35
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 37
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h3>
        ";
        } else {
            // line 40
            echo "            <h3><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h3>
        ";
        }
        // line 42
        echo "\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  110 => 40,  101 => 37,  95 => 35,  93 => 34,  90 => 33,  88 => 32,  82 => 28,  79 => 27,  73 => 25,  70 => 24,  67 => 23,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  49 => 17,  47 => 16,  40 => 11,  37 => 10,  33 => 1,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* */
/* 	{% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(1080) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(500) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* */
/* */
/*      <div id="main-content" class="container">*/
/* */
/*      {% if big_header %}*/
/*             {{ page.media.images|first.cropResize(900,600).html('','blog-header-image') }}*/
/*         {% else %}*/
/*             {% if header_image %}*/
/*                 {% if header_image_file %}*/
/*                     {% set header_image_media = page.media.images[header_image_file] %}*/
/*                 {% else %}*/
/*                     {% set header_image_media = page.media.images|first %}*/
/*                 {% endif %}*/
/*                 {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/*      {% if page.header.link %}*/
/*             <h3>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h3>*/
/*         {% else %}*/
/*             <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>*/
/*         {% endif %}*/
/* 	{{ page.content }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
