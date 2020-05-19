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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/page-header.htm */
class __TwigTemplate_b92877de6f7f4668d3d12e29962fa2ef82ba3c960e0d9fb835a1de3559a6ed5c extends \Twig\Template
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
        // line 1
        echo "<div class=\"page-header\">
    <div class=\"page-header__container container\">
        <div class=\"page-header__breadcrumb\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"index.html\">Pagrindinis puslapis</a>
                        <svg class=\"breadcrumb-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-right-6x9");
        echo "\"></use>
                        </svg>
                    </li>
                    <li class=\"breadcrumb-item\"> ";
        // line 13
        echo "                        <a href=\"\">Kategorija</a>
                        <svg class=\"breadcrumb-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-right-6x9");
        echo "\"></use>
                        </svg>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                </ol>
            </nav>
        </div>
        ";
        // line 22
        if ( !($context["without_title"] ?? null)) {
            // line 23
            echo "            <div class=\"page-header__title\">
                <h1>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</h1>
            </div>
        ";
        }
        // line 27
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/page-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 24,  72 => 23,  70 => 22,  63 => 18,  57 => 15,  53 => 13,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-header\">
    <div class=\"page-header__container container\">
        <div class=\"page-header__breadcrumb\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"index.html\">Pagrindinis puslapis</a>
                        <svg class=\"breadcrumb-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-right-6x9'|theme }}\"></use>
                        </svg>
                    </li>
                    <li class=\"breadcrumb-item\"> {# if product #}
                        <a href=\"\">Kategorija</a>
                        <svg class=\"breadcrumb-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-right-6x9'|theme }}\"></use>
                        </svg>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ this.page.title }}</li>
                </ol>
            </nav>
        </div>
        {% if not without_title %}
            <div class=\"page-header__title\">
                <h1>{{ this.page.title }}</h1>
            </div>
        {% endif %}
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/page-header.htm", "");
    }
}
