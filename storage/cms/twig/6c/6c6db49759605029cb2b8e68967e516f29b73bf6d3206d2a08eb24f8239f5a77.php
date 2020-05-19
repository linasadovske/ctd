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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/topbar.htm */
class __TwigTemplate_aa8d587f50e28e6c9acfbc892ab88b0dc7fa3a2ce4bcbf59079337de972ef4b7 extends \Twig\Template
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
        echo "<!-- .topbar -->
<div class=\"site-header__topbar topbar\">
    <div class=\"topbar__container container\">
        <div class=\"topbar__row\">
            <div class=\"topbar__item topbar__item--link\">
                <a class=\"topbar-link\" href=\"track-order.html\">Užsakymų statusas</a>
            </div>
            <div class=\"topbar__spring\"></div>
            <div class=\"topbar__item\">
                <div class=\"topbar-dropdown\">
                    <button class=\"topbar-dropdown__btn\" type=\"button\">
                        Mano paskyra
                        <svg width=\"7px\" height=\"5px\"><use xlink:href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-down-7x5");
        echo "\"></use></svg>
                    </button>

                    <div class=\"topbar-dropdown__body\">
                        ";
        // line 28
        echo "
                        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "                    </div>
                </div>
            </div>
            <div class=\"topbar__item\">
                <div class=\"topbar-dropdown\">
                    <button class=\"topbar-dropdown__btn\" type=\"button\">
                        Kalba: <span class=\"topbar__item-value\">LT</span>
                        <svg width=\"7px\" height=\"5px\"><use xlink:href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-down-7x5");
        echo "\"></use></svg>
                    </button>

                    <div class=\"topbar-dropdown__body\">
                        ";
        // line 49
        echo "                        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .topbar / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/topbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 50,  81 => 49,  74 => 37,  65 => 30,  61 => 29,  58 => 28,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- .topbar -->
<div class=\"site-header__topbar topbar\">
    <div class=\"topbar__container container\">
        <div class=\"topbar__row\">
            <div class=\"topbar__item topbar__item--link\">
                <a class=\"topbar-link\" href=\"track-order.html\">Užsakymų statusas</a>
            </div>
            <div class=\"topbar__spring\"></div>
            <div class=\"topbar__item\">
                <div class=\"topbar-dropdown\">
                    <button class=\"topbar-dropdown__btn\" type=\"button\">
                        Mano paskyra
                        <svg width=\"7px\" height=\"5px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-down-7x5'|theme }}\"></use></svg>
                    </button>

                    <div class=\"topbar-dropdown__body\">
                        {# {% include '/header/menu.twig' with {
                            layout: 'topbar',
                            menu_links: [
                                {title: 'Mano paskyra',     url: 'account-dashboard.html'},
                                {title: 'Asmeninė informacija',  url: 'account-profile.html'},
                                {title: 'Užsakymo istorija', url: 'account-orders.html'},
                                {title: 'Adresai',     url: 'account-addresses.html'},
                                {title: 'Slaptažodis',      url: 'account-password.html'},
                                {title: 'Atsijungti',        url: 'account-login.html'}
                            ]
                        } %} #}

                        {% partial 'header/menu' %}
                    </div>
                </div>
            </div>
            <div class=\"topbar__item\">
                <div class=\"topbar-dropdown\">
                    <button class=\"topbar-dropdown__btn\" type=\"button\">
                        Kalba: <span class=\"topbar__item-value\">LT</span>
                        <svg width=\"7px\" height=\"5px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-down-7x5'|theme }}\"></use></svg>
                    </button>

                    <div class=\"topbar-dropdown__body\">
                        {# {% include '/header/menu.twig' with {
                            layout: 'topbar',
                            with_icons: true,
                            menu_links: [
                                {'title': 'English', 'url': '', 'icon': 'images/languages/language-1.png', 'icon_srcset': 'images/languages/language-1.png 1x, images/languages/language-1@2x.png 2x'},
                                {'title': 'Lietuvių', 'url': '', 'icon': 'images/languages/language-5.png', 'icon_srcset': 'images/languages/language-5.png 1x, images/languages/language-5@2x.png 2x'},
                            ]
                        } %} #}
                        {% partial 'header/menu' %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .topbar / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/topbar.htm", "");
    }
}
