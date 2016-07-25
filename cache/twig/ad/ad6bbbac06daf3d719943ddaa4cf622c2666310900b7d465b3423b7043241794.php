<?php

/* video.html.twig */
class __TwigTemplate_5a1a9b872b51325b24f86c430ef3da7d085a6cf18eb517f45ddb5fd3455c044f extends Twig_Template
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
        $this->loadTemplate("video.html.twig", "video.html.twig", 1, "2049298886")->display($context);
    }

    public function getTemplateName()
    {
        return "video.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* video.html.twig */
class __TwigTemplate_5a1a9b872b51325b24f86c430ef3da7d085a6cf18eb517f45ddb5fd3455c044f_2049298886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "video.html.twig", 1);
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
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 6
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 7
            $context["base_url"] = "";
        }
        // line 10
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 11
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"container\">

\t\t<div class=\"row\">
                <div class=\"col-sm-8 blog-main\">
\t\t\t\t\t";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 20
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "video.html.twig", 20)->display($context);
            // line 21
            echo "\t\t\t\t\t";
        }
        // line 22
        echo "
    \t\t\t    ";
        // line 23
        $this->loadTemplate("partials/blog_item.html.twig", "video.html.twig", 23)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false, "big_header" => true)));
        // line 24
        echo "    \t\t\t</div>

                <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
    \t\t\t\t";
        // line 27
        $this->loadTemplate("partials/sidebar.html.twig", "video.html.twig", 27)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 28
        echo "    \t\t\t</div>
    \t\t</div>
        </div>
\t";
    }

    public function getTemplateName()
    {
        return "video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  100 => 27,  95 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  82 => 19,  76 => 15,  73 => 14,  69 => 1,  66 => 11,  64 => 10,  61 => 7,  59 => 6,  57 => 4,  55 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set base_url = page.parent.url %}*/
/*     {% set feed_url = base_url %}*/
/* */
/*     {% if base_url == '/' %}*/
/*         {% set base_url = '' %}*/
/*     {% endif %}*/
/* */
/*     {% if base_url == base_url_relative %}*/
/*         {% set feed_url = base_url~'/'~page.parent.slug %}*/
/*     {% endif  %}*/
/* */
/* 	{% block content %}*/
/*         <div class="container">*/
/* */
/* 		<div class="row">*/
/*                 <div class="col-sm-8 blog-main">*/
/* 					{% if config.plugins.breadcrumbs.enabled %}*/
/* 						{% include 'partials/breadcrumbs.html.twig' %}*/
/* 					{% endif %}*/
/* */
/*     			    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false, 'big_header':true} %}*/
/*     			</div>*/
/* */
/*                 <div class="col-sm-3 col-sm-offset-1 blog-sidebar">*/
/*     				{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}*/
/*     			</div>*/
/*     		</div>*/
/*         </div>*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
