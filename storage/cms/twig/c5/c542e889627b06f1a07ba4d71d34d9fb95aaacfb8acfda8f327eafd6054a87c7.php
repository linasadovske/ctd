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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-features.htm */
class __TwigTemplate_c9d58fecb95b2737266375a50e8573c3154e16b00a2cc9aefcfcbc6cbf993f04 extends \Twig\Template
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
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#fi-free-delivery-48");
        echo "\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">TDC</div>
                    <div class=\"block-features__subtitle\">Servisas</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#fi-24-hours-48");
        echo "\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Nemokamas</div>
                    <div class=\"block-features__subtitle\">Pristatymas nuo 50€‎</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#fi-payment-security-48");
        echo "\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">100% saugūs</div>
                    <div class=\"block-features__subtitle\">Atsiskaitymai internetu</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#fi-tag-48");
        echo "\"></use></svg>
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
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 42,  75 => 32,  62 => 22,  49 => 12,  41 => 7,  37 => 5,);
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
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#fi-free-delivery-48'|theme }}\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">TDC</div>
                    <div class=\"block-features__subtitle\">Servisas</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#fi-24-hours-48'|theme }}\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Nemokamas</div>
                    <div class=\"block-features__subtitle\">Pristatymas nuo 50€‎</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#fi-payment-security-48'|theme }}\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">100% saugūs</div>
                    <div class=\"block-features__subtitle\">Atsiskaitymai internetu</div>
                </div>
            </div>
            <div class=\"block-features__divider\"></div>
            <div class=\"block-features__item\">
                <div class=\"block-features__icon\">
                    <svg width=\"48px\" height=\"48px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#fi-tag-48'|theme }}\"></use></svg>
                </div>
                <div class=\"block-features__content\">
                    <div class=\"block-features__title\">Platus</div>
                    <div class=\"block-features__subtitle\">Dalių pasirinkimas</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-features / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-features.htm", "");
    }
}
