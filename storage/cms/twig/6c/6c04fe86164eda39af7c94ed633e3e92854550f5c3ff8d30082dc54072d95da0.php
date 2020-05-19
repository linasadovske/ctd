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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/block-header.htm */
class __TwigTemplate_66c59211df8bdbf3750826a3cbe9a41b7ed262bdc8b168fb06d861292d4dee29 extends \Twig\Template
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
";
        // line 8
        $context["arrows"] = (((isset($context["arrows"]) || array_key_exists("arrows", $context))) ? (_twig_default_filter(($context["arrows"] ?? null), false)) : (false));
        // line 9
        $context["groups"] = (((isset($context["groups"]) || array_key_exists("groups", $context))) ? (_twig_default_filter(($context["groups"] ?? null), false)) : (false));
        // line 10
        echo "
<div class=\"block-header\">
    <h3 class=\"block-header__title\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h3>
    <div class=\"block-header__divider\"></div>

    ";
        // line 15
        if (($context["groups"] ?? null)) {
            // line 16
            echo "        <ul class=\"block-header__groups-list\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 18
                echo "                <li><button type=\"button\" class=\"block-header__group ";
                if (twig_get_attribute($this->env, $this->source, $context["group"], "active", [], "any", false, false, false, 18)) {
                    echo " block-header__group--active ";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</button></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (($context["arrows"] ?? null)) {
            // line 24
            echo "        <div class=\"block-header__arrows-list\">
            <button class=\"block-header__arrow block-header__arrow--left\" type=\"button\">
                <svg width=\"7px\" height=\"11px\"><use xlink:href=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-left-7x11");
            echo "\"></use></svg>
            </button>
            <button class=\"block-header__arrow block-header__arrow--right\" type=\"button\">
                <svg width=\"7px\" height=\"11px\"><use xlink:href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-right-7x11");
            echo "\"></use></svg>
            </button>
        </div>
    ";
        }
        // line 33
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/block-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  95 => 29,  89 => 26,  85 => 24,  83 => 23,  80 => 22,  76 => 20,  63 => 18,  59 => 17,  56 => 16,  54 => 15,  48 => 12,  44 => 10,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - title:  string         - block title (required)
// - arrows: boolean        - show arrows if true (default: false)
// - groups: object[]|false - array of group objects (e.g., {'name': '', 'active': false}, default: false)
#}

{% set arrows = arrows|default(false) %}
{% set groups = groups|default(false) %}

<div class=\"block-header\">
    <h3 class=\"block-header__title\">{{ title }}</h3>
    <div class=\"block-header__divider\"></div>

    {% if groups %}
        <ul class=\"block-header__groups-list\">
            {% for group in groups %}
                <li><button type=\"button\" class=\"block-header__group {% if group.active %} block-header__group--active {% endif %}\">{{ group.name }}</button></li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if arrows %}
        <div class=\"block-header__arrows-list\">
            <button class=\"block-header__arrow block-header__arrow--left\" type=\"button\">
                <svg width=\"7px\" height=\"11px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-left-7x11'|theme }}\"></use></svg>
            </button>
            <button class=\"block-header__arrow block-header__arrow--right\" type=\"button\">
                <svg width=\"7px\" height=\"11px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-right-7x11'|theme }}\"></use></svg>
            </button>
        </div>
    {% endif %}
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/block-header.htm", "");
    }
}
