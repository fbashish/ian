<?php

/* partials/instructor_item.html.twig */
class __TwigTemplate_271c15a6e7dd1d5ee0bf74ded44459230684beaef6443e30043fc282f2002f46 extends Twig_Template
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
        echo "<div class=\"list-item\">

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
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featured_img", array());
        // line 7
        echo "    ";
        $context["logo_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "logo", array());
        // line 8
        echo "

    <div class=\"list-blog-header\">


        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 14
            echo "            <h3>
                ";
            // line 15
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 16
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 18
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h3>
        ";
        } else {
            // line 21
            echo "            <h3><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h3>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 25
            echo "        <span class=\"tags pull-right\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
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
            // line 29
            echo "        </span>
        ";
        }
        // line 31
        echo "        ";
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 32
            echo "
            ";
            // line 33
            if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
                // line 34
                echo "                ";
                if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                    // line 35
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                    // line 36
                    echo "                ";
                } else {
                    // line 37
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                    // line 38
                    echo "                ";
                }
                // line 39
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
                echo "
            ";
            }
            // line 41
            echo "
            ";
        } else {
            // line 43
            echo "                ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["featured_img"]) ? $context["featured_img"] : null), array(), "array")), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array(0 => "featured_img", 1 => "blog-header-image"), "method");
            echo "

        ";
        }
        // line 46
        echo "    </div>

    <div class=\"list-blog-padding\">
        <p><a href=\" ";
        // line 49
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "website_url", array());
        echo "\" target=\"_blank\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "company_name", array());
        echo "</a><br />
        ";
        // line 50
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "phone", array());
        echo "<br />
        <a href=\"mailto:";
        // line 51
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "\">Email</a></p>

        <p>";
        // line 53
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "area", array());
        echo "<br />
        ";
        // line 54
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pool_location", array());
        echo "</p>
    <p><img src=\"";
        // line 55
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "logo", array());
        echo "\"></p>


    <ul>
        <li><a href=\"https://www.google.com/maps/place/";
        // line 59
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "company_name", array());
        echo "/@";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "latitude", array());
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "longitude", array());
        echo "<,17z/data=!3m1!4b1!4m5!3m4!1s0x876bf98e49c23b13:0x6102c5226ef8c69f!8m2!3d40.1505123!4d-105.1185022\" target=\"_blank\">Map Link</a> (";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "latitude", array());
        echo ", ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "longitude", array());
        echo ")</li>
    </ul>

     <ul id=\"social-links\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "sociallinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </ul>

         <ul id=\"side-links\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "sidelinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </ul>

        <h3>About The Instructor</h3>

    ";
        // line 76
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 77
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 78
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 79
                echo "        ";
                $context["show_prev_next"] = true;
                // line 80
                echo "        ";
            }
            // line 81
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 82
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
        <p><a href=\"";
            // line 83
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 84
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 85
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 86
                echo "            <p>";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "</p>
        ";
            } else {
                // line 88
                echo "            <p>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "</p>
        ";
            }
            // line 90
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 92
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 93
            $context["show_prev_next"] = true;
            // line 94
            echo "    ";
        }
        // line 95
        echo "

<div class=\"instructor-slideshow\">

    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 100
            echo "
            <div>";
            // line 101
            echo $context["image"];
            echo "</div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "



</div>





    ";
        // line 114
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 115
            echo "
        <p class=\"text-center\">
            ";
            // line 117
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 118
                echo "                <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 122
                echo "                <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 124
            echo "        </p>
    ";
        }
        // line 126
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/instructor_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 126,  355 => 124,  349 => 122,  347 => 121,  344 => 120,  338 => 118,  336 => 117,  332 => 115,  330 => 114,  318 => 104,  309 => 101,  306 => 100,  302 => 99,  296 => 95,  293 => 94,  291 => 93,  286 => 92,  280 => 90,  274 => 88,  268 => 86,  265 => 85,  263 => 84,  259 => 83,  254 => 82,  251 => 81,  248 => 80,  245 => 79,  243 => 78,  238 => 77,  236 => 76,  230 => 72,  219 => 70,  215 => 69,  210 => 66,  199 => 64,  195 => 63,  181 => 59,  172 => 55,  168 => 54,  164 => 53,  159 => 51,  155 => 50,  149 => 49,  144 => 46,  137 => 43,  133 => 41,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  115 => 35,  112 => 34,  110 => 33,  107 => 32,  104 => 31,  100 => 29,  86 => 27,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  66 => 21,  57 => 18,  51 => 16,  49 => 15,  46 => 14,  44 => 13,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(900) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(300) %}*/
/*     {% set header_image_file = page.header.featured_img %}*/
/*     {% set logo_image_file = page.header.logo %}*/
/* */
/* */
/*     <div class="list-blog-header">*/
/* */
/* */
/*         {% if page.header.link %}*/
/*             <h3>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h3>*/
/*         {% else %}*/
/*             <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>*/
/*         {% endif %}*/
/* */
/*         {% if page.taxonomy.tag %}*/
/*         <span class="tags pull-right">*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a class="label label-primary" href="{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% endif %}*/
/*         {% if big_header %}*/
/* */
/*             {% if header_image %}*/
/*                 {% if header_image_file %}*/
/*                     {% set header_image_media = page.media.images[header_image_file] %}*/
/*                 {% else %}*/
/*                     {% set header_image_media = page.media.images|first %}*/
/*                 {% endif %}*/
/*                 {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*             {% endif %}*/
/* */
/*             {% else %}*/
/*                 {{ page.media.images[featured_img]|first.cropResize(900,600).html('featured_img','blog-header-image') }}*/
/* */
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <div class="list-blog-padding">*/
/*         <p><a href=" {{ page.header.website_url }}" target="_blank">{{ page.header.company_name }}</a><br />*/
/*         {{ page.header.phone }}<br />*/
/*         <a href="mailto:{{ page.header.email }}">Email</a></p>*/
/* */
/*         <p>{{ page.header.area }}<br />*/
/*         {{ page.header.pool_location }}</p>*/
/*     <p><img src="{{ page.url }}/{{ page.header.logo }}"></p>*/
/* */
/* */
/*     <ul>*/
/*         <li><a href="https://www.google.com/maps/place/{{ page.header. company_name }}/@{{ page.header.latitude }}{{ page.header.longitude }}<,17z/data=!3m1!4b1!4m5!3m4!1s0x876bf98e49c23b13:0x6102c5226ef8c69f!8m2!3d40.1505123!4d-105.1185022" target="_blank">Map Link</a> ({{ page.header.latitude }}, {{ page.header.longitude }})</li>*/
/*     </ul>*/
/* */
/*      <ul id="social-links">*/
/*         {% for item in header.sociallinks %}*/
/*             <li><a href="{{ item.url }}" target="_blank">{{ item.text }}</a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*          <ul id="side-links">*/
/*         {% for item in header.sidelinks %}*/
/*             <li><a href="{{ item.url }}" target="_blank">{{ item.text }}</a></li>*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*         <h3>About The Instructor</h3>*/
/* */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         <p>{{ page.content }}</p>*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         <p>{{ page.summary }}</p>*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% elseif truncate %}*/
/*         {% if page.summary != page.content %}*/
/*             <p>{{ page.content|truncate(550) }}</p>*/
/*         {% else %}*/
/*             <p>{{ page.content }}</p>*/
/*         {% endif %}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% else %}*/
/*         <p>{{ page.content }}</p>*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/* */
/* */
/* <div class="instructor-slideshow">*/
/* */
/*     {% for image in page.media.images %}*/
/* */
/*             <div>{{ image }}</div>*/
/*         */
/*     {% endfor %}*/
/* */
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/*     {% if show_prev_next %}*/
/* */
/*         <p class="text-center">*/
/*             {% if not page.isFirst %}*/
/*                 <a class="btn btn-default" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> Next Post</a>*/
/*             {% endif %}*/
/* */
/*             {% if not page.isLast %}*/
/*                 <a class="btn btn-default" href="{{ page.prevSibling.url }}">Previous Post <i class="fa fa-chevron-right"></i></a>*/
/*             {% endif %}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
