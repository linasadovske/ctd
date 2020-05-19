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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/dropcart.htm */
class __TwigTemplate_9e3524a8027b178f170b2334a22edb2dedf336d3fc074d793a751b5f70e87a4e extends \Twig\Template
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
        // line 5
        echo "
";
        // line 6
        $context["style"] = (((isset($context["style"]) || array_key_exists("style", $context))) ? (_twig_default_filter(($context["style"] ?? null), "dropdown")) : ("dropdown"));
        // line 7
        echo "
<!-- .dropcart -->
<div class=\"dropcart dropcart--style--";
        // line 9
        echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 10
        if ((($context["style"] ?? null) == "offcanvas")) {
            // line 11
            echo "        <div class=\"dropcart__backdrop\"></div>
    ";
        }
        // line 13
        echo "    <div class=\"dropcart__body\">
        ";
        // line 14
        if ((($context["style"] ?? null) == "offcanvas")) {
            // line 15
            echo "            <div class=\"dropcart__header\">
                <div class=\"dropcart__title\">Prekių krepšelis</div>
                <button class=\"dropcart__close\" type=\"button\">
                    <svg width=\"12px\" height=\"12px\">
                        <use xlink:href=\"";
            // line 19
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cross-12");
            echo "\"></use>
                    </svg>
                </button>
            </div>
        ";
        }
        // line 24
        echo "
        <div class=\"dropcart__products-list\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                <div class=\"dropcart__product\">
                    <div class=\"product-image dropcart__product-image\">
                        <a href=\"product.html\" class=\"product-image__body\">
                            <img class=\"product-image__img\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 30), "html", null, true);
            echo ".jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"dropcart__product-info\">
                        <div class=\"dropcart__product-name\"><a href=\"product.html\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></div>
                        ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 35)) {
                // line 36
                echo "                            <ul class=\"dropcart__product-options\">
                                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 38
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 38), "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                            </ul>
                        ";
            }
            // line 42
            echo "                        <div class=\"dropcart__product-meta\">
                            <span class=\"dropcart__product-quantity\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "</span> ×
                            <span class=\"dropcart__product-price\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                        </div>
                    </div>

                    <button type=\"button\" class=\"dropcart__product-remove btn btn-light btn-sm btn-svg-icon\">
                        <svg width=\"10px\" height=\"10px\">
                            <use xlink:href=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cross-10");
            echo "\"></use>
                        </svg>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>

        <div class=\"dropcart__totals\">
            <table>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 60
            echo "                    <tr>
                        <th>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</th>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </table>
        </div>

        <div class=\"dropcart__buttons\">
            <a class=\"btn btn-secondary\" href=\"cart.html\">Krepšelis</a>
            <a class=\"btn btn-primary\" href=\"checkout.html\">Užsakymas</a>
        </div>
    </div>
</div>
<!-- .dropcart / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/dropcart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 65,  167 => 62,  163 => 61,  160 => 60,  156 => 59,  150 => 55,  139 => 50,  130 => 44,  126 => 43,  123 => 42,  119 => 40,  108 => 38,  104 => 37,  101 => 36,  99 => 35,  95 => 34,  88 => 30,  83 => 27,  79 => 26,  75 => 24,  67 => 19,  61 => 15,  59 => 14,  56 => 13,  52 => 11,  50 => 10,  46 => 9,  42 => 7,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - style: string - one of [dropdown, offcanvas] (default: dropdown)
#}

{% set style = style|default('dropdown') %}

<!-- .dropcart -->
<div class=\"dropcart dropcart--style--{{ style }}\">
    {% if style == 'offcanvas' %}
        <div class=\"dropcart__backdrop\"></div>
    {% endif %}
    <div class=\"dropcart__body\">
        {% if style == 'offcanvas' %}
            <div class=\"dropcart__header\">
                <div class=\"dropcart__title\">Prekių krepšelis</div>
                <button class=\"dropcart__close\" type=\"button\">
                    <svg width=\"12px\" height=\"12px\">
                        <use xlink:href=\"{{ 'assets/images/sprite.svg#cross-12'|theme }}\"></use>
                    </svg>
                </button>
            </div>
        {% endif %}

        <div class=\"dropcart__products-list\">
            {% for product in cart.products %}
                <div class=\"dropcart__product\">
                    <div class=\"product-image dropcart__product-image\">
                        <a href=\"product.html\" class=\"product-image__body\">
                            <img class=\"product-image__img\" src=\"{{ product.image }}.jpg\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"dropcart__product-info\">
                        <div class=\"dropcart__product-name\"><a href=\"product.html\">{{ product.name }}</a></div>
                        {% if product.options %}
                            <ul class=\"dropcart__product-options\">
                                {% for option in product.options %}
                                    <li>{{ option.name }}: {{ option.value }}</li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                        <div class=\"dropcart__product-meta\">
                            <span class=\"dropcart__product-quantity\">{{ product.quantity }}</span> ×
                            <span class=\"dropcart__product-price\">{{ product.price }}</span>
                        </div>
                    </div>

                    <button type=\"button\" class=\"dropcart__product-remove btn btn-light btn-sm btn-svg-icon\">
                        <svg width=\"10px\" height=\"10px\">
                            <use xlink:href=\"{{ 'assets/images/sprite.svg#cross-10'|theme }}\"></use>
                        </svg>
                    </button>
                </div>
            {% endfor %}
        </div>

        <div class=\"dropcart__totals\">
            <table>
                {% for total in cart.totals %}
                    <tr>
                        <th>{{ total.title }}</th>
                        <td>{{ total.value }}</td>
                    </tr>
                {% endfor %}
            </table>
        </div>

        <div class=\"dropcart__buttons\">
            <a class=\"btn btn-secondary\" href=\"cart.html\">Krepšelis</a>
            <a class=\"btn btn-primary\" href=\"checkout.html\">Užsakymas</a>
        </div>
    </div>
</div>
<!-- .dropcart / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/dropcart.htm", "");
    }
}
