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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-links.htm */
class __TwigTemplate_4df1b5c050fee0d4e5fd853ac7c494feaca6fcc71643235be3df4359531c6de9 extends \Twig\Template
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
        echo "<ul class=\"nav-links__list\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nav_links"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "        <li class=\"nav-links__item ";
            if (twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 3)) {
                echo " nav-links__item--has-submenu ";
            }
            echo "\">
            <a class=\"nav-links__item-link\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
                <div class=\"nav-links__item-body\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "
                    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 7)) {
                // line 8
                echo "                        <svg class=\"nav-links__item-arrow\" width=\"9px\" height=\"6px\"><use xlink:href=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-down-9x6");
                echo "\"></use></svg>
                    ";
            }
            // line 10
            echo "                </div>
            </a>
            ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 12), "type", [], "any", false, false, false, 12) == "menu"))) {
                // line 13
                echo "                <div class=\"nav-links__submenu nav-links__submenu--type--menu\">
                    ";
                // line 14
                $this->loadTemplate("/header/menu.twig", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-links.htm", 14)->display(twig_array_merge($context, ["menu_links" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 15
$context["link"], "submenu", [], "any", false, false, false, 15), "menu", [], "any", false, false, false, 15)]));
                // line 17
                echo "                </div>
            ";
            }
            // line 19
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 19) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "megamenu"))) {
                // line 20
                echo "                <div class=\"nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 20), "menu", [], "any", false, false, false, 20), "size", [], "any", false, false, false, 20), "html", null, true);
                echo "\">
                    ";
                // line 21
                $this->loadTemplate("/header/megamenu.twig", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-links.htm", 21)->display(twig_array_merge($context, ["megamenu" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 22
$context["link"], "submenu", [], "any", false, false, false, 22), "menu", [], "any", false, false, false, 22)]));
                // line 24
                echo "                </div>
            ";
            }
            // line 26
            echo "        </li>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  112 => 26,  108 => 24,  106 => 22,  105 => 21,  100 => 20,  97 => 19,  93 => 17,  91 => 15,  90 => 14,  87 => 13,  85 => 12,  81 => 10,  75 => 8,  73 => 7,  69 => 6,  64 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav-links__list\">
    {% for link in nav_links %}
        <li class=\"nav-links__item {% if link.submenu %} nav-links__item--has-submenu {% endif %}\">
            <a class=\"nav-links__item-link\" href=\"{{ link.url }}\">
                <div class=\"nav-links__item-body\">
                    {{ link.title }}
                    {% if link.submenu %}
                        <svg class=\"nav-links__item-arrow\" width=\"9px\" height=\"6px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-down-9x6'|theme }}\"></use></svg>
                    {% endif %}
                </div>
            </a>
            {% if link.submenu and link.submenu.type == 'menu' %}
                <div class=\"nav-links__submenu nav-links__submenu--type--menu\">
                    {% include '/header/menu.twig' with {
                        menu_links: link.submenu.menu
                    } %}
                </div>
            {% endif %}
            {% if link.submenu and link.submenu.type == 'megamenu' %}
                <div class=\"nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--{{ link.submenu.menu.size }}\">
                    {% include '/header/megamenu.twig' with {
                        megamenu: link.submenu.menu
                    } %}
                </div>
            {% endif %}
        </li>
    {% endfor %}
</ul>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-links.htm", "");
    }
}
