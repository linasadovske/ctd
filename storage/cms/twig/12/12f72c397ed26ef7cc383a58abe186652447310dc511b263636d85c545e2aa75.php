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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products.htm */
class __TwigTemplate_164c4b788a6f034c9ab50c39c8bdf919b3353dadd3d6ce55f0c13f6b16503a92 extends \Twig\Template
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
        // line 7
        echo "
<!-- .block-products -->
<div class=\"block block-products block-products--layout--";
        // line 9
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo "\" data-mobile-grid-columns=\"2\">
    <div class=\"container\">
        ";
        // line 14
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("block-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

        ";
        // line 16
        $context["_products"] = twig_slice($this->env, ($context["products"] ?? null), 0, 7);
        // line 17
        echo "
        <div class=\"block-products__body\">
            ";
        // line 19
        ob_start();
        // line 20
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["_products"] ?? null), "length", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    <div class=\"block-products__featured\">
                        <div class=\"block-products__featured-item\">
                            ";
            // line 26
            echo "                            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-card"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " 
                        </div>
                    </div>
                ";
        }
        // line 30
        echo "            ";
        $context["_large_product"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "            ";
        ob_start();
        // line 32
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["_products"] ?? null), "length", [], "any", false, false, false, 32) > 1)) {
            // line 33
            echo "                    <div class=\"block-products__list\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["_products"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 35
                echo "                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                                <div class=\"block-products__list-item\">
                                    ";
                    // line 40
                    echo "                                    ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product-card"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo " 
                                </div>
                            ";
                }
                // line 43
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                    </div>
                ";
        }
        // line 46
        echo "            ";
        $context["_small_products"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
            ";
        // line 48
        if ((($context["layout"] ?? null) == "large-first")) {
            // line 49
            echo "                ";
            echo twig_escape_filter($this->env, ($context["_large_product"] ?? null), "html", null, true);
            echo "
                ";
            // line 50
            echo twig_escape_filter($this->env, ($context["_small_products"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 52
            echo "                ";
            echo twig_escape_filter($this->env, ($context["_small_products"] ?? null), "html", null, true);
            echo "
                ";
            // line 53
            echo twig_escape_filter($this->env, ($context["_large_product"] ?? null), "html", null, true);
            echo "
            ";
        }
        // line 55
        echo "        </div>
    </div>
</div>
<!-- .block-products / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  164 => 53,  159 => 52,  154 => 50,  149 => 49,  147 => 48,  144 => 47,  141 => 46,  137 => 44,  123 => 43,  114 => 40,  111 => 36,  108 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  79 => 30,  69 => 26,  65 => 21,  62 => 20,  60 => 19,  56 => 17,  54 => 16,  46 => 14,  41 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - title:    string   - block title (required)
// - layout:   string   - one of [large-first, large-last] (required)
// - products: object[] - array of product data objects (required)
#}

<!-- .block-products -->
<div class=\"block block-products block-products--layout--{{ layout }}\" data-mobile-grid-columns=\"2\">
    <div class=\"container\">
        {# {% include '/partials/block-header.twig' with {
            title: title
        } only %} #}
        {% partial 'block-header' %} 

        {% set _products = products[:7] %}

        <div class=\"block-products__body\">
            {% set _large_product %}
                {% if _products.length %}
                    <div class=\"block-products__featured\">
                        <div class=\"block-products__featured-item\">
                            {# {% include '/partials/product-card.twig' with {
                                product: _products[0]
                            } only %} #}
                            {% partial 'product-card' %} 
                        </div>
                    </div>
                {% endif %}
            {% endset %}
            {% set _small_products %}
                {% if _products.length > 1 %}
                    <div class=\"block-products__list\">
                        {% for product in _products %}
                            {% if not loop.first %}
                                <div class=\"block-products__list-item\">
                                    {# {% include '/partials/product-card.twig' with {
                                        product: product
                                    } only %} #}
                                    {% partial 'product-card' %} 
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endset %}

            {% if layout == 'large-first' %}
                {{ _large_product }}
                {{ _small_products }}
            {% else %}
                {{ _small_products }}
                {{ _large_product }}
            {% endif %}
        </div>
    </div>
</div>
<!-- .block-products / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-products.htm", "");
    }
}
