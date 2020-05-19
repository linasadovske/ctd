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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/header.htm */
class __TwigTemplate_2d07b687832e68aa558f4874a65fd5a8151161681a2a971e4f2d138d2e2251bd extends \Twig\Template
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
        $context["departments_fixed_by"] = (((isset($context["departments_fixed_by"]) || array_key_exists("departments_fixed_by", $context))) ? (_twig_default_filter(($context["departments_fixed_by"] ?? null), null)) : (null));
        // line 2
        $context["departments_fixed"] =  ! !($context["departments_fixed_by"] ?? null);
        // line 3
        $context["header_layout"] = (((isset($context["header_layout"]) || array_key_exists("header_layout", $context))) ? (_twig_default_filter(($context["header_layout"] ?? null), "default")) : ("default"));
        // line 4
        echo "
<div class=\"site-header\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/topbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 

    ";
        // line 8
        if ((($context["header_layout"] ?? null) == "default")) {
            // line 9
            echo "        <div class=\"site-header__middle container\">
            <div class=\"site-header__logo\">
                <a href=\"index.html\">
                    <!-- logo -->
                    <svg viewBox=\"0 0 1080 414\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"196px\" height=\"90px\"><linearGradient id=\"gradient1\" gradientUnits=\"userSpaceOnUse\" x1=\"30.87\" x2=\"334.26\" y1=\"166.21\" y2=\"166.21\"><stop offset=\"0\" stop-color=\"#75ec7a\"/><stop offset=\"1\" stop-color=\"#07afb8\"/></linearGradient><linearGradient id=\"gradient2\" gradientUnits=\"userSpaceOnUse\" x1=\"44.25\" x2=\"352.66\" y1=\"225.89\" y2=\"225.89\"><stop offset=\"0\" stop-color=\"#04bac7\"/><stop offset=\"1\" stop-color=\"#0458b1\"/></linearGradient><path d=\"m82.65 226.66 20.1-82.24c4.75-19.42 25.59-33.42 49.78-33.42h22.55c2.64 0 3.88 2.7 1.88 4.11-19.23 13.53-45.15 26.87-20.24 27h2.77c26.37 0 49.47-1.86 69.69-5.64 34.48-8.46 64.47-22.41 86-40.7a113.23 113.23 0 0 0 19.06-20.4h-181.71c-44.92 0-83.61 26-92.43 62.07l-29.23 119.61c14.32-11.96 31.9-22.18 51.78-30.39z\" fill=\"url(#gradient1)\" /><path d=\"m279 151.08-20.37 101.92a51.72 51.72 0 0 1 -50.58 41.45h-23a2.9 2.9 0 0 1 -1.89-5.1c19.49-16.68 45.37-33 20.21-33.18h-2.81c-26.64 0-50 2.28-70.46 6.92-35.17 10.47-65.76 27.79-87.73 50.54a134 134 0 0 0 -19 24.78l-.05.24h184.73a95.77 95.77 0 0 0 93.9-77l29.73-148.53c-14.53 14.95-32.41 27.71-52.68 37.96z\" fill=\"url(#gradient2)\"/><g fill=\"#424143\"><path d=\"m472.94 148.87h-64.66l9.62-47.22h188.58l-9.63 47.22h-64.36l-32.78 163.31h-59.55z\"/><path d=\"m628.74 101.65h91.43c65.56 0 105.57 34 105.57 88.42 0 74.59-54.14 122.11-131.44 122.11h-107.67zm67.37 163c44.51 0 69.47-30.68 69.47-71 0-28-17.74-44.51-52-44.51h-34.91l-22.86 115.52z\"/><path d=\"m839.28 223.76c0-73.09 53.83-126.32 132-126.32 38.8 0 70.38 14.13 85.42 39.7l-43 34.28c-9.93-15.94-25.26-24.66-46.32-24.66-40.9 0-68 31.58-68 73.09 0 28.27 19.25 47.22 51.43 47.22 18.95 0 36.39-7.22 51.43-24.37l35.19 34.59c-23.76 28.57-54.74 39.1-92.33 39.1-64.62 0-105.82-37.6-105.82-92.63z\"/></g></svg>
                    <!-- logo / end -->
                </a>
            </div>
            <div class=\"site-header__search\">
                ";
            // line 18
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['location'] = "header"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/search"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "                
            </div>
            <div class=\"site-header__phone\">
                <div class=\"site-header__phone-title\">Turite klausimų?</div>
                <div class=\"site-header__phone-number\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "phone", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "
    <div class=\"site-header__nav-panel\">
        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/nav-panel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "        
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  85 => 27,  78 => 23,  72 => 19,  67 => 18,  56 => 9,  54 => 8,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set departments_fixed_by = departments_fixed_by|default(null) %}
{% set departments_fixed = not (not departments_fixed_by) %}
{% set header_layout = header_layout|default('default') %}

<div class=\"site-header\">
    {% partial 'header/topbar' %} 

    {% if header_layout == 'default' %}
        <div class=\"site-header__middle container\">
            <div class=\"site-header__logo\">
                <a href=\"index.html\">
                    <!-- logo -->
                    <svg viewBox=\"0 0 1080 414\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"196px\" height=\"90px\"><linearGradient id=\"gradient1\" gradientUnits=\"userSpaceOnUse\" x1=\"30.87\" x2=\"334.26\" y1=\"166.21\" y2=\"166.21\"><stop offset=\"0\" stop-color=\"#75ec7a\"/><stop offset=\"1\" stop-color=\"#07afb8\"/></linearGradient><linearGradient id=\"gradient2\" gradientUnits=\"userSpaceOnUse\" x1=\"44.25\" x2=\"352.66\" y1=\"225.89\" y2=\"225.89\"><stop offset=\"0\" stop-color=\"#04bac7\"/><stop offset=\"1\" stop-color=\"#0458b1\"/></linearGradient><path d=\"m82.65 226.66 20.1-82.24c4.75-19.42 25.59-33.42 49.78-33.42h22.55c2.64 0 3.88 2.7 1.88 4.11-19.23 13.53-45.15 26.87-20.24 27h2.77c26.37 0 49.47-1.86 69.69-5.64 34.48-8.46 64.47-22.41 86-40.7a113.23 113.23 0 0 0 19.06-20.4h-181.71c-44.92 0-83.61 26-92.43 62.07l-29.23 119.61c14.32-11.96 31.9-22.18 51.78-30.39z\" fill=\"url(#gradient1)\" /><path d=\"m279 151.08-20.37 101.92a51.72 51.72 0 0 1 -50.58 41.45h-23a2.9 2.9 0 0 1 -1.89-5.1c19.49-16.68 45.37-33 20.21-33.18h-2.81c-26.64 0-50 2.28-70.46 6.92-35.17 10.47-65.76 27.79-87.73 50.54a134 134 0 0 0 -19 24.78l-.05.24h184.73a95.77 95.77 0 0 0 93.9-77l29.73-148.53c-14.53 14.95-32.41 27.71-52.68 37.96z\" fill=\"url(#gradient2)\"/><g fill=\"#424143\"><path d=\"m472.94 148.87h-64.66l9.62-47.22h188.58l-9.63 47.22h-64.36l-32.78 163.31h-59.55z\"/><path d=\"m628.74 101.65h91.43c65.56 0 105.57 34 105.57 88.42 0 74.59-54.14 122.11-131.44 122.11h-107.67zm67.37 163c44.51 0 69.47-30.68 69.47-71 0-28-17.74-44.51-52-44.51h-34.91l-22.86 115.52z\"/><path d=\"m839.28 223.76c0-73.09 53.83-126.32 132-126.32 38.8 0 70.38 14.13 85.42 39.7l-43 34.28c-9.93-15.94-25.26-24.66-46.32-24.66-40.9 0-68 31.58-68 73.09 0 28.27 19.25 47.22 51.43 47.22 18.95 0 36.39-7.22 51.43-24.37l35.19 34.59c-23.76 28.57-54.74 39.1-92.33 39.1-64.62 0-105.82-37.6-105.82-92.63z\"/></g></svg>
                    <!-- logo / end -->
                </a>
            </div>
            <div class=\"site-header__search\">
                {% partial 'header/search' location='header' %}
                
            </div>
            <div class=\"site-header__phone\">
                <div class=\"site-header__phone-title\">Turite klausimų?</div>
                <div class=\"site-header__phone-number\">{{ this.theme.phone}}</div>
            </div>
        </div>
    {% endif %}

    <div class=\"site-header__nav-panel\">
        {% partial 'header/nav-panel' %}        
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/header.htm", "");
    }
}
