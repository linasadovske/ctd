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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-banner.htm */
class __TwigTemplate_e0354d8f468b47e746b5b011365e9573c2453ba128351c2a9e352ca79e774cba extends \Twig\Template
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
        echo "<!-- .block-banner -->
<div class=\"block block-banner\">
    <div class=\"container\">
        <a href=\"\" class=\"block-banner__body\">
            <div class=\"block-banner__image block-banner__image--desktop\" style=\"background-image: url('images/banners/servisas.png')\"></div>
            <div class=\"block-banner__image block-banner__image--mobile\" style=\"background-image: url('images/banners/banner-1-mobile.jpg')\"></div>
            <div class=\"block-banner__title\">Servisas <br class=\"block-banner__mobile-br\"></div>
            <div class=\"block-banner__text\"></div>
            <div class=\"block-banner__button\">
                <span class=\"btn btn-sm btn-primary\">Registruotis</span>
            </div>
        </a>
    </div>
</div>
<!-- .block-banner / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- .block-banner -->
<div class=\"block block-banner\">
    <div class=\"container\">
        <a href=\"\" class=\"block-banner__body\">
            <div class=\"block-banner__image block-banner__image--desktop\" style=\"background-image: url('images/banners/servisas.png')\"></div>
            <div class=\"block-banner__image block-banner__image--mobile\" style=\"background-image: url('images/banners/banner-1-mobile.jpg')\"></div>
            <div class=\"block-banner__title\">Servisas <br class=\"block-banner__mobile-br\"></div>
            <div class=\"block-banner__text\"></div>
            <div class=\"block-banner__button\">
                <span class=\"btn btn-sm btn-primary\">Registruotis</span>
            </div>
        </a>
    </div>
</div>
<!-- .block-banner / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-banner.htm", "");
    }
}
