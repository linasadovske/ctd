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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobilemenu.htm */
class __TwigTemplate_948b2e377264fe3b8c53f677a1ec49057ca13f29887e7c3d06d5e66a46bdf44e extends \Twig\Template
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
        echo "<div class=\"mobilemenu\">
    <div class=\"mobilemenu__backdrop\"></div>
    <div class=\"mobilemenu__body\">
        <div class=\"mobilemenu__header\">
            <div class=\"mobilemenu__title\">Meniu</div>
            <button type=\"button\" class=\"mobilemenu__close\">
                <svg width=\"20px\" height=\"20px\"><use xlink:href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cross-20");
        echo "\"></use></svg>
            </button>
        </div>
        <div class=\"mobilemenu__content\">            
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/mobile-links.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobilemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mobilemenu\">
    <div class=\"mobilemenu__backdrop\"></div>
    <div class=\"mobilemenu__body\">
        <div class=\"mobilemenu__header\">
            <div class=\"mobilemenu__title\">Meniu</div>
            <button type=\"button\" class=\"mobilemenu__close\">
                <svg width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#cross-20'|theme }}\"></use></svg>
            </button>
        </div>
        <div class=\"mobilemenu__content\">            
            {% partial \"header/mobile-links.htm\" %}
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/mobilemenu.htm", "");
    }
}
