<?php

/* videos.html.twig */
class __TwigTemplate_35324b490eb8204e9a1f2402f8eeda71f910e49db7395b079bacc3000667cb1a extends Twig_Template
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
        $this->loadTemplate("videos.html.twig", "videos.html.twig", 1, "1951804360")->display($context);
        // line 57
        echo "

";
    }

    public function getTemplateName()
    {
        return "videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 57,  19 => 1,);
    }
}


/* videos.html.twig */
class __TwigTemplate_35324b490eb8204e9a1f2402f8eeda71f910e49db7395b079bacc3000667cb1a_1951804360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "videos.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 5
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 7
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 12
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "        <div class=\"header\">
            <div class=\"container\">
                ";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">

                    ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 26
            echo "                        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "videos.html.twig", 26)->display($context);
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                </div>
                <div class=\"grid\">

                    

                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "                        ";
            $this->loadTemplate("partials/video_item.html.twig", "videos.html.twig", 34)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 35
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                </div>

        \t\t
            </div>
        </div>
\t";
    }

    // line 44
    public function block_pagination($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 46
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 text-center\">
                    ";
            // line 49
            $this->loadTemplate("partials/pagination.html.twig", "videos.html.twig", 49)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 50
            echo "                </div>
            </div>
        </div>
\t    ";
        }
        // line 54
        echo "\t";
    }

    public function getTemplateName()
    {
        return "videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  175 => 50,  173 => 49,  168 => 46,  165 => 45,  162 => 44,  152 => 36,  138 => 35,  135 => 34,  118 => 33,  111 => 28,  108 => 27,  105 => 26,  103 => 25,  93 => 18,  89 => 16,  86 => 15,  82 => 1,  79 => 12,  77 => 11,  74 => 8,  72 => 7,  70 => 5,  68 => 4,  66 => 3,  51 => 1,  21 => 57,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set collection = page.collection() %}*/
/* 	{% set base_url = page.url %}*/
/*     {% set feed_url = base_url %}*/
/* */
/*     {% if base_url == '/' %}*/
/*         {% set base_url = '' %}*/
/*     {% endif %}*/
/* */
/*     {% if base_url == base_url_relative %}*/
/*         {% set feed_url = base_url~'/'~page.slug %}*/
/*     {% endif  %}*/
/* */
/* 	{% block content %}*/
/*         <div class="header">*/
/*             <div class="container">*/
/*                 {{ page.content }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/* */
/*                     {% if config.plugins.breadcrumbs.enabled %}*/
/*                         {% include 'partials/breadcrumbs.html.twig' %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="grid">*/
/* */
/*                     */
/* */
/*                     {% for child in collection %}*/
/*                         {% include 'partials/video_item.html.twig' with {'page':child, 'truncate':true} %}*/
/*                     {% endfor %}*/
/* */
/*                 </div>*/
/* */
/*         		*/
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
/* */
/* */
/* */
