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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobile-links.htm */
class __TwigTemplate_e85a4e2fc819a9ea4b325699413f106c120fc34cec24d86c07dcd94171931f6a extends \Twig\Template
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
        $context["level"] = (((isset($context["level"]) || array_key_exists("level", $context))) ? (_twig_default_filter(($context["level"] ?? null), 0)) : (0));
        // line 8
        echo "
<ul class=\"mobile-links mobile-links--level--";
        // line 9
        echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["level"] ?? null) == 0)) {
            echo " data-collapse data-collapse-opened-class=\"mobile-links__item--open\" ";
        }
        echo ">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
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
            // line 11
            echo "        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 11), [0 => "link", 1 => "button"])) {
                // line 12
                echo "            <li class=\"mobile-links__item\" data-collapse-item>
                <div class=\"mobile-links__item-title\">
                    <a ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 14) == "link")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" ";
                } else {
                    echo " data-collapse-trigger ";
                }
                echo " class=\"mobile-links__item-link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>
                    ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sub", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                        <button class=\"mobile-links__item-toggle\" type=\"button\" data-collapse-trigger>
                            <svg class=\"mobile-links__item-arrow\" width=\"12px\" height=\"7px\"><use xlink:href=\"";
                    // line 17
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-down-12x7");
                    echo "\"></use></svg>
                        </button>
                    ";
                }
                // line 20
                echo "                </div>
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sub", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                    <div class=\"mobile-links__item-sub-links\" data-collapse-content>
                        ";
                    // line 23
                    $this->loadTemplate("/header/mobile-links.twig", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobile-links.htm", 23)->display(twig_array_merge($context, ["links" => twig_get_attribute($this->env, $this->source,                     // line 24
$context["link"], "sub", [], "any", false, false, false, 24), "level" => (                    // line 25
($context["level"] ?? null) + 1)]));
                    // line 27
                    echo "                    </div>
                ";
                }
                // line 29
                echo "            </li>
        ";
            }
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 31) == "divider")) {
                // line 32
                echo "            <li class=\"mobile-links__divider\"></li>
        ";
            }
            // line 34
            echo "    ";
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
        // line 35
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobile-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  127 => 34,  123 => 32,  120 => 31,  116 => 29,  112 => 27,  110 => 25,  109 => 24,  108 => 23,  105 => 22,  103 => 21,  100 => 20,  94 => 17,  91 => 16,  89 => 15,  77 => 14,  73 => 12,  70 => 11,  53 => 10,  45 => 9,  42 => 8,  40 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - links: array
// - level: integer (default: 0)
#}

{% set level = level|default(0) %}

<ul class=\"mobile-links mobile-links--level--{{ level }}\" {% if level == 0 %} data-collapse data-collapse-opened-class=\"mobile-links__item--open\" {% endif %}>
    {% for link in links %}
        {% if link.type in ['link', 'button'] %}
            <li class=\"mobile-links__item\" data-collapse-item>
                <div class=\"mobile-links__item-title\">
                    <a {% if link.type == 'link' %} href=\"{{ link.url }}\" {% else %} data-collapse-trigger {% endif %} class=\"mobile-links__item-link\">{{ link.title }}</a>
                    {% if link.sub %}
                        <button class=\"mobile-links__item-toggle\" type=\"button\" data-collapse-trigger>
                            <svg class=\"mobile-links__item-arrow\" width=\"12px\" height=\"7px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-down-12x7'|theme }}\"></use></svg>
                        </button>
                    {% endif %}
                </div>
                {% if link.sub %}
                    <div class=\"mobile-links__item-sub-links\" data-collapse-content>
                        {% include '/header/mobile-links.twig' with {
                            links: link.sub,
                            level: level + 1
                        } %}
                    </div>
                {% endif %}
            </li>
        {% endif %}
        {% if link.type == 'divider' %}
            <li class=\"mobile-links__divider\"></li>
        {% endif %}
    {% endfor %}
</ul>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobile-links.htm", "");
    }
}
