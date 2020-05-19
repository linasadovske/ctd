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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-panel.htm */
class __TwigTemplate_1891ddf1b9cfa63941ed92e794908321645a66c457ec0ff79ab67d104917741d extends \Twig\Template
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
        echo "<!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
<div class=\"nav-panel nav-panel--sticky\" data-sticky-mode=\"pullToShow\">
    <div class=\"nav-panel__container container\">
        <div class=\"nav-panel__row\">
            ";
        // line 5
        if ((($context["header_layout"] ?? null) != "default")) {
            // line 6
            echo "                <div class=\"nav-panel__logo\">
                    <a href=\"index.html\">
                        <!-- logo -->
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"120px\" height=\"20px\">
                            <path d=\"M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z\"></path>
                        </svg>
                        <!-- logo / end -->
                    </a>
                </div>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if ((($context["header_layout"] ?? null) == "default")) {
            // line 34
            echo "                <div class=\"nav-panel__departments\">
                    ";
            // line 35
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/departments"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "  
                </div>
            ";
        }
        // line 38
        echo "
            <!-- .nav-links -->
            <div class=\"nav-panel__nav-links nav-links\">
                ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/nav-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
            </div>
            <!-- .nav-links / end -->

            <div class=\"nav-panel__indicators\">
                ";
        // line 46
        if ((($context["header_layout"] ?? null) != "default")) {
            // line 47
            echo "                    <div class=\"indicator indicator--trigger--click\">
                        <button type=\"button\" class=\"indicator__button\">
                            <span class=\"indicator__area\">
                                <svg class=\"indicator__icon\" width=\"20px\" height=\"20px\"><use xlink:href=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#search-20");
            echo "\"></use></svg>
                                <svg class=\"indicator__icon indicator__icon--open\" width=\"20px\" height=\"20px\"><use xlink:href=\"";
            // line 51
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cross-20");
            echo "\"></use></svg>
                            </span>
                        </button>

                        <div class=\"indicator__dropdown\">
                            ";
            // line 56
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/search"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " 
                        </div>
                    </div>
                ";
        }
        // line 60
        echo "
                <div class=\"indicator\">
                    <a href=\"wishlist.html\" class=\"indicator__button\">
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#heart-20");
        echo "\"></use></svg>
                            <span class=\"indicator__value\">0</span>
                        </span>
                    </a>
                </div>

                <div class=\"indicator";
        // line 70
        if ((($context["cart_style"] ?? null) != "offcanvas")) {
            echo " indicator--trigger--click";
        }
        echo "\">
                    <a href=\"cart.html\" class=\"indicator__button\"";
        // line 71
        if ((($context["cart_style"] ?? null) == "offcanvas")) {
            echo " data-open=\"offcanvas-cart\"";
        }
        echo ">
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#cart-20");
        echo "\"></use></svg>
                            <span class=\"indicator__value\">3</span>
                        </span>
                    </a>

                    ";
        // line 78
        if ((($context["cart_style"] ?? null) != "offcanvas")) {
            // line 79
            echo "                        <div class=\"indicator__dropdown\">
                            ";
            // line 81
            echo "                            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/dropcart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " 
                        </div>
                    ";
        }
        // line 84
        echo "                </div>

                <div class=\"indicator indicator--trigger--click\">
                    <a href=\"account-login.html\" class=\"indicator__button\">
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#person-20");
        echo "\"></use></svg>
                        </span>
                    </a>

                    <div class=\"indicator__dropdown\">
                        ";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/account-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-panel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 94,  189 => 89,  182 => 84,  173 => 81,  170 => 79,  168 => 78,  160 => 73,  153 => 71,  147 => 70,  138 => 64,  132 => 60,  123 => 56,  115 => 51,  111 => 50,  106 => 47,  104 => 46,  94 => 41,  89 => 38,  81 => 35,  78 => 34,  76 => 33,  73 => 32,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
<div class=\"nav-panel nav-panel--sticky\" data-sticky-mode=\"pullToShow\">
    <div class=\"nav-panel__container container\">
        <div class=\"nav-panel__row\">
            {% if header_layout != 'default' %}
                <div class=\"nav-panel__logo\">
                    <a href=\"index.html\">
                        <!-- logo -->
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"120px\" height=\"20px\">
                            <path d=\"M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z\"></path>
                        </svg>
                        <!-- logo / end -->
                    </a>
                </div>
            {% endif %}

            {% if header_layout == 'default' %}
                <div class=\"nav-panel__departments\">
                    {% partial 'header/departments' %}  
                </div>
            {% endif %}

            <!-- .nav-links -->
            <div class=\"nav-panel__nav-links nav-links\">
                {% partial 'header/nav-links' %}  
            </div>
            <!-- .nav-links / end -->

            <div class=\"nav-panel__indicators\">
                {% if header_layout != 'default' %}
                    <div class=\"indicator indicator--trigger--click\">
                        <button type=\"button\" class=\"indicator__button\">
                            <span class=\"indicator__area\">
                                <svg class=\"indicator__icon\" width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#search-20'|theme }}\"></use></svg>
                                <svg class=\"indicator__icon indicator__icon--open\" width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#cross-20'|theme }}\"></use></svg>
                            </span>
                        </button>

                        <div class=\"indicator__dropdown\">
                            {% partial 'header/search' %} 
                        </div>
                    </div>
                {% endif %}

                <div class=\"indicator\">
                    <a href=\"wishlist.html\" class=\"indicator__button\">
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#heart-20'|theme }}\"></use></svg>
                            <span class=\"indicator__value\">0</span>
                        </span>
                    </a>
                </div>

                <div class=\"indicator{% if cart_style != 'offcanvas' %} indicator--trigger--click{% endif %}\">
                    <a href=\"cart.html\" class=\"indicator__button\"{% if cart_style == 'offcanvas' %} data-open=\"offcanvas-cart\"{% endif %}>
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#cart-20'|theme }}\"></use></svg>
                            <span class=\"indicator__value\">3</span>
                        </span>
                    </a>

                    {% if cart_style != 'offcanvas' %}
                        <div class=\"indicator__dropdown\">
                            {# {% include '/header/dropcart.twig' with {style: 'dropdown'} %} #}
                            {% partial 'header/dropcart' %} 
                        </div>
                    {% endif %}
                </div>

                <div class=\"indicator indicator--trigger--click\">
                    <a href=\"account-login.html\" class=\"indicator__button\">
                        <span class=\"indicator__area\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#person-20'|theme }}\"></use></svg>
                        </span>
                    </a>

                    <div class=\"indicator__dropdown\">
                        {% partial 'header/account-menu' %} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/nav-panel.htm", "");
    }
}