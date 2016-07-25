<?php

/* partials/video_item.html.twig */
class __TwigTemplate_c80e7fac79d2be44e898d3736af924f99feacc3c0ffe3b86cede45df7a4b2f3b extends Twig_Template
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
        echo "<div class=\"list-item col-xs-12 col-sm-4 col-md-3\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">

        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 11
            echo "            <h3>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 13
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h3>
        ";
        } else {
            // line 18
            echo "            <a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link", array());
            echo "\"><h3>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h3></a>
        ";
        }
        // line 20
        echo "
        
<!--         ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 23
            echo "        <span class=\"tags pull-right\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
                echo "            <a class=\"label label-primary\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </span>
        ";
        }
        // line 28
        echo " -->
        ";
        // line 29
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 30
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array(0 => "", 1 => "blog-header-image"), "method");
            echo "
        ";
        } else {
            // line 32
            echo "            ";
            if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
                // line 33
                echo "                ";
                if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                    // line 34
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                    // line 35
                    echo "                ";
                } else {
                    // line 36
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
                echo "
            ";
            }
            // line 40
            echo "        ";
        }
        // line 41
        echo "    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 46
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 47
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 48
                echo "        ";
                $context["show_prev_next"] = true;
                // line 49
                echo "        ";
            }
            // line 50
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 51
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
    ";
        } elseif (        // line 52
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 53
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 54
                echo "            <p>";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "</p>
        ";
            } else {
                // line 56
                echo "            <p>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "</p>
        ";
            }
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 60
            $context["show_prev_next"] = true;
            // line 61
            echo "    ";
        }
        // line 62
        echo "
   

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/video_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 62,  194 => 61,  192 => 60,  187 => 59,  184 => 58,  178 => 56,  172 => 54,  169 => 53,  167 => 52,  162 => 51,  159 => 50,  156 => 49,  153 => 48,  151 => 47,  146 => 46,  144 => 45,  138 => 41,  135 => 40,  129 => 38,  126 => 37,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  105 => 30,  103 => 29,  100 => 28,  96 => 27,  82 => 25,  78 => 24,  75 => 23,  73 => 22,  69 => 20,  61 => 18,  52 => 15,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item col-xs-12 col-sm-4 col-md-3">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(900) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(300) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <div class="list-blog-header">*/
/* */
/*         {% if page.header.link %}*/
/*             <h3>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h3>*/
/*         {% else %}*/
/*             <a href="{{ page.link }}"><h3>{{ page.title }}</h3></a>*/
/*         {% endif %}*/
/* */
/*         */
/* <!--         {% if page.taxonomy.tag %}*/
/*         <span class="tags pull-right">*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a class="label label-primary" href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% endif %} -->*/
/*         {% if big_header %}*/
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
/*     <div class="list-blog-padding">*/
/* */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         <p>{{ page.content }}</p>*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         <p>{{ page.summary }}</p>*/
/*     {% elseif truncate %}*/
/*         {% if page.summary != page.content %}*/
/*             <p>{{ page.content|truncate(550) }}</p>*/
/*         {% else %}*/
/*             <p>{{ page.content }}</p>*/
/*         {% endif %}*/
/*     {% else %}*/
/*         <p>{{ page.content }}</p>*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/* */
/*    */
/* */
/*     </div>*/
/* </div>*/
/* */
