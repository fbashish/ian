<?php

/* partials/base.html.twig */
class __TwigTemplate_dac43442b8596ee1c4b376e4101f06f694c6ebf3289933343838bdeb9ffcf6c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    </head>

      <body class=\"";
        // line 25
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 27
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 35
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
        ";
        // line 41
        $this->displayBlock('bottom', $context, $blocks);
        // line 42
        echo "
         ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "       <!--  <title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "page_title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "page_title", array()), "html");
        } elseif ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title> -->
        <title>";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

         <script src=\"/infantaquatics/system/assets/jquery/jquery-2.x.min.js\" type=\"text/javascript\" ></script>

       

        ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 99), "method");
        // line 14
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/stylesheets/theme.css", 1 => 98), "method");
        // line 15
        echo "        ";
    }

    // line 25
    public function block_body_classes($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
    }

    // line 29
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 41
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 45
        echo "           ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/javascript/theme.js", 1 => 100), "method");
        // line 46
        echo "             ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/javascript/app.js", 1 => 100), "method");
        // line 47
        echo "
            ";
        // line 48
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 49
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 50
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 51
            echo "            ";
        }
        // line 52
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 52,  202 => 51,  199 => 50,  196 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  179 => 43,  174 => 41,  169 => 34,  164 => 33,  160 => 31,  157 => 30,  154 => 29,  148 => 25,  144 => 15,  141 => 14,  138 => 13,  135 => 12,  123 => 16,  121 => 12,  117 => 11,  109 => 10,  98 => 9,  96 => 8,  91 => 5,  88 => 4,  79 => 54,  77 => 43,  74 => 42,  72 => 41,  64 => 35,  61 => 34,  59 => 33,  56 => 32,  53 => 29,  50 => 28,  47 => 27,  45 => 26,  41 => 25,  37 => 23,  35 => 4,  30 => 2,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*        <!--  <title>{% if header.page_title %}{{ header.page_title|e('html') }}{% elseif header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title> -->*/
/*         <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*         {% block stylesheets %}*/
/*             {% do assets.add('theme://css/font-awesome.min.css',99) %}*/
/*             {% do assets.add('theme://assets/stylesheets/theme.css',98) %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*          <script src="/infantaquatics/system/assets/jquery/jquery-2.x.min.js" type="text/javascript" ></script>*/
/* */
/*        */
/* */
/*         {% endblock head%}*/
/*     </head>*/
/* */
/*       <body class="{% block body_classes %}{{ page.header.body_classes }}{% endblock %}">*/
/*         {% if config.plugins.langswitcher.enabled %}*/
/*             {% include 'partials/langswitcher.html.twig' %}*/
/*         {% endif %}*/
/*         {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block content %}{% endblock %}*/
/*         {% block pagination %}{% endblock %}*/
/* */
/*         <div class="footer">*/
/*             <div class="container">*/
/*                 <p class="text-muted">Bootstrap Theme for <a href="http://getgrav.org">Grav</a></p>*/
/*             </div>*/
/*         </div>*/
/*         {% block bottom %}{% endblock %}*/
/* */
/*          {% block javascripts %}*/
/*             {% do assets.add('jquery', 101) %}*/
/*            {% do assets.add('theme://assets/javascript/theme.js', 100) %}*/
/*              {% do assets.add('theme://assets/javascript/app.js', 100) %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*                 {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}*/
/*             {% endif %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/*     </body>*/
/* </html>*/
/* */
