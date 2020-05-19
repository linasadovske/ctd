<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products-carousel.htm */
class __TwigTemplate_187003909dcd510a167e0123d46e8bd4b794c19c1231f5cb37ffe8a11aa1f661 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        $context["rows"] = (((isset($context["rows"]) || array_key_exists("rows", $context))) ? (_twig_default_filter(($context["rows"] ?? null), 1)) : (1));
        // line 12
        $context["groups"] = (((isset($context["groups"]) || array_key_exists("groups", $context))) ? (_twig_default_filter(($context["groups"] ?? null), false)) : (false));
        // line 13
        $context["with_sidebar"] = (((isset($context["with_sidebar"]) || array_key_exists("with_sidebar", $context))) ? (_twig_default_filter(($context["with_sidebar"] ?? null), false)) : (false));
        // line 14
        echo "
<!-- .block-products-carousel -->
<div class=\"block block-products-carousel\" data-layout=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo "\" data-mobile-grid-columns=\"2\">
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        // line 23
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("block-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

        <div class=\"block-products-carousel__slider\">
            <div class=\"block-products-carousel__preloader\"></div>

            <div class=\"owl-carousel\">
                ";
        // line 40
        echo "            </div>
        </div>
    ";
        $context["_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
    ";
        // line 44
        if (($context["with_sidebar"] ?? null)) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, ($context["_content"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 47
            echo "        <div class=\"container\">
            ";
            // line 48
            echo twig_escape_filter($this->env, ($context["_content"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 51
        echo "</div>
<!-- .block-products-carousel / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products-carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 51,  89 => 48,  86 => 47,  80 => 45,  78 => 44,  75 => 43,  70 => 40,  58 => 23,  56 => 18,  54 => 17,  50 => 16,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - title:        string         - block title (required)
// - products:     object[]       - array of product data objects (required)
// - layout:       string         - one of [grid-4, grid-4-sm, grid-5, horizontal] (required)
// - rows:         integer        - number of rows (default: 1)
// - groups:       object[]|false - array of group objects (e.g., {'name': '', 'active': false}, default: false)
// - with_sidebar: boolean        - (default: false)
#}

{% set rows   = rows|default(1) %}
{% set groups = groups|default(false) %}
{% set with_sidebar = with_sidebar|default(false) %}

<!-- .block-products-carousel -->
<div class=\"block block-products-carousel\" data-layout=\"{{ layout }}\" data-mobile-grid-columns=\"2\">
    {% set _content %}
        {# {% include '/partials/block-header.twig' with {
            title: title,
            groups: groups,
            arrows: true
        } only %} #}
        {% partial 'block-header' %} 

        <div class=\"block-products-carousel__slider\">
            <div class=\"block-products-carousel__preloader\"></div>

            <div class=\"owl-carousel\">
                {# {% for column in products|batch(rows) %}
                    <div class=\"block-products-carousel__column\">
                        {% for product in column %}
                            <div class=\"block-products-carousel__cell\">
                                {% include '/partials/product-card.twig' with {
                                    product: product
                                } only %}
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %} #}
            </div>
        </div>
    {% endset %}

    {% if with_sidebar %}
        {{ _content }}
    {% else %}
        <div class=\"container\">
            {{ _content }}
        </div>
    {% endif %}
</div>
<!-- .block-products-carousel / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products-carousel.htm", "");
    }
}
