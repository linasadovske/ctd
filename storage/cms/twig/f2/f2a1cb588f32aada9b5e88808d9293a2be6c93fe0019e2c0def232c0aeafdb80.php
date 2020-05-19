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

/* /blocks/block-features.twig */
class __TwigTemplate_62c188f1e5b030691b2d24cb8bb8d372eb9146ce204c0cc6779aa06e5ef07d78 extends \Twig\Template
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
<!-- .block-features -->
<div class=\"block block-features block-features--layout--";
        // line 7
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"block-features__list\">
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-free-delivery-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">TDC</div>
                    <div class=\"block-features__subtitle\">Servisas</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-24-hours-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Nemokamas</div>
                    <div class=\"block-features__subtitle\">Pristatymas nuo 50€‎</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-payment-security-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">100% saugūs</div>
                    <div class=\"block-features__subtitle\">Atsiskaitymai internetu</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-tag-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Platus</div>
                    <div class=\"block-features__subtitle\">Dalių pasirinkimas</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-features / end -->";
    }

    public function getTemplateName()
    {
        return "/blocks/block-features.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - layout: string - one of [classic, boxed] (required)
#}

<!-- .block-features -->
<div class=\"block block-features block-features--layout--{{ layout }}\">
    <div class=\"container\">
        <div class=\"block-features__list\">
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-free-delivery-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">TDC</div>
                    <div class=\"block-features__subtitle\">Servisas</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-24-hours-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Nemokamas</div>
                    <div class=\"block-features__subtitle\">Pristatymas nuo 50€‎</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-payment-security-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">100% saugūs</div>
                    <div class=\"block-features__subtitle\">Atsiskaitymai internetu</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"images/sprite.svg#fi-tag-48\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Platus</div>
                    <div class=\"block-features__subtitle\">Dalių pasirinkimas</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-features / end -->", "/blocks/block-features.twig", "");
    }
}
