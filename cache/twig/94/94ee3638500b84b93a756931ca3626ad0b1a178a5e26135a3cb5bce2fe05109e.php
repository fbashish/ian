<?php

/* page_sidebar.html.twig */
class __TwigTemplate_32409e6971fd9872c60371a77217e4be90a664ddeff077e4ca25189300c8d831 extends Twig_Template
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
        echo "
";
        // line 2
        $this->loadTemplate("page_sidebar.html.twig", "page_sidebar.html.twig", 2, "156536900")->display($context);
    }

    public function getTemplateName()
    {
        return "page_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}


/* page_sidebar.html.twig */
class __TwigTemplate_32409e6971fd9872c60371a77217e4be90a664ddeff077e4ca25189300c8d831_156536900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "page_sidebar.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
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
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "

    <div class=\"container\">

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
        echo "    </div>




     
        <div class=\"header\">
            <div class=\"container\">
               ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "            <h1><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
        ";
        }
        // line 40
        echo "            </div>
        </div>
        <div id=\"main-content\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 blog-main\">

                     ";
        // line 46
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

                </div>

        \t\t<div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
       \t\t\t\t";
        // line 51
        $this->loadTemplate("partials/page_sidebar.html.twig", "page_sidebar.html.twig", 51)->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
        // line 52
        echo "        \t\t</div>
            </div>
        </div>
\t";
    }

    // line 57
    public function block_pagination($context, array $blocks = array())
    {
        // line 58
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 59
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 text-center\">
                    ";
            // line 62
            $this->loadTemplate("partials/pagination.html.twig", "page_sidebar.html.twig", 62)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 63
            echo "                </div>
            </div>
        </div>
\t    ";
        }
        // line 67
        echo "\t";
    }

    public function getTemplateName()
    {
        return "page_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 67,  181 => 63,  179 => 62,  174 => 59,  171 => 58,  168 => 57,  161 => 52,  159 => 51,  151 => 46,  143 => 40,  135 => 38,  132 => 37,  130 => 36,  120 => 28,  117 => 27,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  87 => 17,  85 => 16,  79 => 12,  76 => 11,  72 => 2,  70 => 7,  68 => 6,  66 => 5,  64 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(1080) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(500) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/* */
/* 	*/
/* 	{% block content %}*/
/* */
/* */
/*     <div class="container">*/
/* */
/*     {% if big_header %}*/
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
/*     </div>*/
/* */
/* */
/* */
/* */
/*      */
/*         <div class="header">*/
/*             <div class="container">*/
/*                {% if page.header.link %}*/
/*         {% else %}*/
/*             <h1><a href="{{ page.url }}">{{ page.title }}</a></h1>*/
/*         {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div id="main-content" class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 blog-main">*/
/* */
/*                      {{ page.content }}*/
/* */
/*                 </div>*/
/* */
/*         		<div class="col-sm-3 col-sm-offset-1 blog-sidebar">*/
/*        				{% include 'partials/page_sidebar.html.twig' with {'page':page} %}*/
/*         		</div>*/
/*             </div>*/
/*         </div>*/
/* 	{% endblock %}*/
/* */
/* 	{% block pagination %}*/
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 text-center">*/
/*                     {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 	    {% endif %}*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
