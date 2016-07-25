<?php

/* modular.html.twig */
class __TwigTemplate_fe8f3635aacfc5f15539f02bf8807c6532096dd8c0f49a27858d962dd3f988b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t<div class=\"modular-row showcase header\">
\t    <div class=\"container\">
\t        <h1>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>

\t        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 17
            echo "\t            <a class=\"btn";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " btn-default";
            }
            echo "\" href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t    </div>
\t</div>

    ";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 24
            echo "        <div class=\"modular-anchor\" id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
        ";
            // line 25
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 31
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 32
        echo "
        ";
        // line 33
        $this->displayParentBlock("header_navigation", $context, $blocks);
        echo "
";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
        // line 40
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 4,  112 => 40,  109 => 39,  106 => 38,  100 => 33,  97 => 32,  94 => 31,  84 => 25,  79 => 24,  75 => 23,  71 => 22,  66 => 19,  50 => 17,  46 => 16,  41 => 14,  36 => 11,  33 => 10,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}*/
/* {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block content %}*/
/* */
/* 	<div class="modular-row showcase header">*/
/* 	    <div class="container">*/
/* 	        <h1>{{ page.title }}</h1>*/
/* */
/* 	        {% for button in page.header.buttons %}*/
/* 	            <a class="btn{% if button.primary %} btn-default{% endif %}" href="{{ base_url_relative }}{{ button.url }}">{{ button.text }}</a>*/
/* 	        {% endfor %}*/
/* 	    </div>*/
/* 	</div>*/
/* */
/*     {{ page.content }}*/
/*     {% for module in page.collection() %}*/
/*         <div class="modular-anchor" id="{{ _self.pageLinkName(module.menu) }}"></div>*/
/*         {{ module.content }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block header_navigation %}*/
/* */
/*         {{  parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock %}*/
