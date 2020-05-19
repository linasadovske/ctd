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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/menu.htm */
class __TwigTemplate_b1a3ec2a0992fd738c14857def887b7376c0e6eb191fe736bddc1b95e78399f2 extends \Twig\Template
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
        $context["layout"] = (((isset($context["layout"]) || array_key_exists("layout", $context))) ? (_twig_default_filter(($context["layout"] ?? null), "classic")) : ("classic"));
        // line 8
        $context["with_icons"] = (((isset($context["with_icons"]) || array_key_exists("with_icons", $context))) ? (_twig_default_filter(($context["with_icons"] ?? null), false)) : (false));
        // line 9
        echo "
<!-- .menu -->
<div class=\"menu menu--layout--";
        // line 11
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " ";
        if (($context["with_icons"] ?? null)) {
            echo " menu--with-icons ";
        }
        echo "\">
    <div class=\"menu__submenus-container\"></div>
    <ul class=\"menu__list\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_links"] ?? null));
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
            // line 15
            echo "            <li class=\"menu__item\">
                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                <div class=\"menu__item-submenu-offset\"></div>

                <a class=\"menu__item-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                    ";
            // line 20
            if ((($context["with_icons"] ?? null) && twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 20))) {
                // line 21
                echo "                        <div class=\"menu__item-icon\"><img ";
                if (twig_get_attribute($this->env, $this->source, $context["link"], "icon_srcset", [], "any", false, false, false, 21)) {
                    echo " srcset=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon_srcset", [], "any", false, false, false, 21), "html", null, true);
                    echo "\" ";
                }
                echo " src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 21), "html", null, true);
                echo "\" alt=\"\"></div>
                    ";
            }
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "
                    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 24)) {
                // line 25
                echo "                        <svg class=\"menu__item-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"";
                // line 26
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-right-6x9");
                echo "\"></use>
                        </svg>
                    ";
            }
            // line 29
            echo "                </a>
                ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["link"], "submenu", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <div class=\"menu__submenu\">
                        ";
                // line 32
                $this->loadTemplate("/header/menu.twig", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/menu.htm", 32)->display(twig_array_merge($context, ["menu_links" => twig_get_attribute($this->env, $this->source,                 // line 33
$context["link"], "submenu", [], "any", false, false, false, 33)]));
                // line 35
                echo "                    </div>
                ";
            }
            // line 37
            echo "            </li>
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
        // line 39
        echo "    </ul>
</div>
<!-- .menu / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  130 => 37,  126 => 35,  124 => 33,  123 => 32,  120 => 31,  118 => 30,  115 => 29,  109 => 26,  106 => 25,  104 => 24,  99 => 23,  87 => 21,  85 => 20,  81 => 19,  75 => 15,  58 => 14,  48 => 11,  44 => 9,  42 => 8,  40 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - layout: string, one of [classic, topbar] (default: classic)
// - with_icons: boolean, (default: false)
#}

{% set layout = layout|default('classic') %}
{% set with_icons = with_icons|default(false) %}

<!-- .menu -->
<div class=\"menu menu--layout--{{ layout }} {% if with_icons %} menu--with-icons {% endif %}\">
    <div class=\"menu__submenus-container\"></div>
    <ul class=\"menu__list\">
        {% for link in menu_links %}
            <li class=\"menu__item\">
                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                <div class=\"menu__item-submenu-offset\"></div>

                <a class=\"menu__item-link\" href=\"{{ link.url }}\">
                    {% if with_icons and link.icon %}
                        <div class=\"menu__item-icon\"><img {% if link.icon_srcset %} srcset=\"{{ link.icon_srcset }}\" {% endif %} src=\"{{ link.icon }}\" alt=\"\"></div>
                    {% endif %}
                    {{ link.title }}
                    {% if link.submenu %}
                        <svg class=\"menu__item-arrow\" width=\"6px\" height=\"9px\">
                            <use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-right-6x9'|theme }}\"></use>
                        </svg>
                    {% endif %}
                </a>
                {% if link.submenu %}
                    <div class=\"menu__submenu\">
                        {% include '/header/menu.twig' with {
                            menu_links: link.submenu
                        } %}
                    </div>
                {% endif %}
            </li>
        {% endfor %}
    </ul>
</div>
<!-- .menu / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/menu.htm", "");
    }
}
