<?php

/* instructor.html.twig */
class __TwigTemplate_9cf7c006658ac5a3dc270302eb24bd1ba363f4c2b8d8bd81c82cdc483725aba3 extends Twig_Template
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
        $this->loadTemplate("instructor.html.twig", "instructor.html.twig", 1, "209119008")->display($context);
    }

    public function getTemplateName()
    {
        return "instructor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* instructor.html.twig */
class __TwigTemplate_9cf7c006658ac5a3dc270302eb24bd1ba363f4c2b8d8bd81c82cdc483725aba3_209119008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "instructor.html.twig", 1);
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
        echo "
            <div id=\"main-content\" class=\"container\">


    \t\t<div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">
    \t\t\t\t\t";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 22
            echo "    \t\t\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "instructor.html.twig", 22)->display($context);
            // line 23
            echo "    \t\t\t\t\t";
        }
        // line 24
        echo "
        \t\t\t    ";
        // line 25
        $this->loadTemplate("partials/instructor_item.html.twig", "instructor.html.twig", 25)->display(array_merge($context, array("instructors" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false, "big_header" => true)));
        // line 26
        echo "        \t\t\t</div>

                    <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
        \t\t\t\t";
        // line 29
        $this->loadTemplate("partials/instructor_sidebar.html.twig", "instructor.html.twig", 29)->display(array_merge($context, array("instructors" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()))));
        // line 30
        echo "        \t\t\t</div>
        \t\t</div>
            </div>

\t";
    }

    public function getTemplateName()
    {
        return "instructor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  102 => 29,  97 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  76 => 15,  73 => 14,  69 => 1,  66 => 11,  64 => 10,  61 => 7,  59 => 6,  57 => 4,  55 => 3,  19 => 1,);
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
/* */
/*             <div id="main-content" class="container">*/
/* */
/* */
/*     		<div class="row">*/
/*                     <div class="col-sm-8 blog-main">*/
/*     					{% if config.plugins.breadcrumbs.enabled %}*/
/*     						{% include 'partials/breadcrumbs.html.twig' %}*/
/*     					{% endif %}*/
/* */
/*         			    {% include 'partials/instructor_item.html.twig' with {'instructors':page.parent, 'truncate':false, 'big_header':true} %}*/
/*         			</div>*/
/* */
/*                     <div class="col-sm-3 col-sm-offset-1 blog-sidebar">*/
/*         				{% include 'partials/instructor_sidebar.html.twig' with {'instructors':page.parent}%}*/
/*         			</div>*/
/*         		</div>*/
/*             </div>*/
/* */
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
