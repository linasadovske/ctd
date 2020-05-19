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

/* /blocks/block-products-carousel.twig */
class __TwigTemplate_5b34ba0e3cab38992d1a934a5d7a13f0e2033758faca5a6cea66435f93422de5 extends \Twig\Template
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
        $this->loadTemplate("/partials/block-header.twig", "/blocks/block-products-carousel.twig", 18)->display(twig_to_array(["title" =>         // line 19
($context["title"] ?? null), "groups" =>         // line 20
($context["groups"] ?? null), "arrows" => true]));
        // line 23
        echo "
        <div class=\"block-products-carousel__slider\">
            <div class=\"block-products-carousel__preloader\"></div>

            <div class=\"owl-carousel\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["products"] ?? null), ($context["rows"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 29
            echo "                    <div class=\"block-products-carousel__column\">
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 31
                echo "                            <div class=\"block-products-carousel__cell\">
                                ";
                // line 32
                $this->loadTemplate("/partials/product-card.twig", "/blocks/block-products-carousel.twig", 32)->display(twig_to_array(["product" =>                 // line 33
$context["product"]]));
                // line 35
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
    ";
        $context["_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
    ";
        // line 43
        if (($context["with_sidebar"] ?? null)) {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, ($context["_content"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 46
            echo "        <div class=\"container\">
            ";
            // line 47
            echo twig_escape_filter($this->env, ($context["_content"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 50
        echo "</div>
<!-- .block-products-carousel / end -->";
    }

    public function getTemplateName()
    {
        return "/blocks/block-products-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  118 => 47,  115 => 46,  109 => 44,  107 => 43,  104 => 42,  99 => 39,  92 => 37,  85 => 35,  83 => 33,  82 => 32,  79 => 31,  75 => 30,  72 => 29,  68 => 28,  61 => 23,  59 => 20,  58 => 19,  56 => 18,  54 => 17,  50 => 16,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  37 => 10,);
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
        {% include '/partials/block-header.twig' with {
            title: title,
            groups: groups,
            arrows: true
        } only %}

        <div class=\"block-products-carousel__slider\">
            <div class=\"block-products-carousel__preloader\"></div>

            <div class=\"owl-carousel\">
                {% for column in products|batch(rows) %}
                    <div class=\"block-products-carousel__column\">
                        {% for product in column %}
                            <div class=\"block-products-carousel__cell\">
                                {% include '/partials/product-card.twig' with {
                                    product: product
                                } only %}
                            </div>
                        {% endfor %}
                    </div>
                {% endfor %}
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
<!-- .block-products-carousel / end -->", "/blocks/block-products-carousel.twig", "");
    }
}
