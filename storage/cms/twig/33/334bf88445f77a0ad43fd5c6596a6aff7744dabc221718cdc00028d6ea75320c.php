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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/photoswipe.htm */
class __TwigTemplate_6702fabb451039b610382c967a3cc5bd6402eb7c5fe66d7e9567187f2217d080 extends \Twig\Template
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
        // line 4
        echo "
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"pswp__bg\"></div>
    <div class=\"pswp__scroll-wrap\">
        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>
        <div class=\"pswp__ui pswp__ui--hidden\">
            <div class=\"pswp__top-bar\">
                <div class=\"pswp__counter\"></div>
                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                <!--<button class=\"pswp__button pswp__button&#45;&#45;share\" title=\"Share\"></button>-->
                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div>
            </div>
            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/photoswipe.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
#}

<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"pswp__bg\"></div>
    <div class=\"pswp__scroll-wrap\">
        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>
        <div class=\"pswp__ui pswp__ui--hidden\">
            <div class=\"pswp__top-bar\">
                <div class=\"pswp__counter\"></div>
                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                <!--<button class=\"pswp__button pswp__button&#45;&#45;share\" title=\"Share\"></button>-->
                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>
                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                <div class=\"pswp__share-tooltip\"></div>
            </div>
            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\"></div>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/photoswipe.htm", "");
    }
}
