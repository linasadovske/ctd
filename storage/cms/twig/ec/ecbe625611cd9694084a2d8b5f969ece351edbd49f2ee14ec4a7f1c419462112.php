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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/search.htm */
class __TwigTemplate_eeacb5158d04cd28c3eb887250b32999fdea8e2fae3f0e2be2b1cb1a73068318 extends \Twig\Template
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
        // line 6
        echo "
";
        // line 7
        $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context))) ? (_twig_default_filter(($context["classes"] ?? null), "")) : (""));
        // line 8
        echo "<div class=\"search search--location--";
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
    <div class=\"search__body\">
        <form class=\"search__form\" action=\"\">
            <input class=\"search__input\" name=\"search\" placeholder=\"Įveskite detalės kodą ar pavadinimą\" aria-label=\"Site search\" type=\"text\" autocomplete=\"off\">
            <button class=\"search__button search__button--type--submit\" type=\"submit\">
                <svg width=\"20px\" height=\"20px\">
                    <use xlink:href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#search-20");
        echo "\"></use>
                </svg>
            </button>
            ";
        // line 17
        if ((($context["location"] ?? null) == "mobile-header")) {
            // line 18
            echo "                <button class=\"search__button search__button--type--close\" type=\"button\">
                    <svg width=\"20px\" height=\"20px\"><use xlink:href=\"";
            // line 19
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cross-20");
            echo "\"></use></svg>
                </button>
            ";
        }
        // line 22
        echo "            <div class=\"search__border\"></div>
        </form>

        <div class=\"search__suggestions suggestions suggestions--location--";
        // line 25
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
        echo "\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  71 => 22,  65 => 19,  62 => 18,  60 => 17,  54 => 14,  42 => 8,  40 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - location: string - Location where the search will be used, for exmaple: header.
// - classes:  string - CSS classes.
#}

{% set classes = classes|default('') %}
<div class=\"search search--location--{{ location }} {{ classes }}\">
    <div class=\"search__body\">
        <form class=\"search__form\" action=\"\">
            <input class=\"search__input\" name=\"search\" placeholder=\"Įveskite detalės kodą ar pavadinimą\" aria-label=\"Site search\" type=\"text\" autocomplete=\"off\">
            <button class=\"search__button search__button--type--submit\" type=\"submit\">
                <svg width=\"20px\" height=\"20px\">
                    <use xlink:href=\"{{ 'assets/images/sprite.svg#search-20'|theme }}\"></use>
                </svg>
            </button>
            {% if location == 'mobile-header' %}
                <button class=\"search__button search__button--type--close\" type=\"button\">
                    <svg width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#cross-20'|theme }}\"></use></svg>
                </button>
            {% endif %}
            <div class=\"search__border\"></div>
        </form>

        <div class=\"search__suggestions suggestions suggestions--location--{{ location }}\"></div>
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/search.htm", "");
    }
}
