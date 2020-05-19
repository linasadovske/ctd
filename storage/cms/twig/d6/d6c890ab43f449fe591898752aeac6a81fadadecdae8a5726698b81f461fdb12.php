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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/footer.htm */
class __TwigTemplate_779bab4c1a115ea5d3c82ffe4bee792c2b0572e53d232a2804df0b2b4eb4aa29 extends \Twig\Template
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
        echo "<div class=\"site-footer\">
    <div class=\"container\">
        <div class=\"site-footer__widgets\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-4\">

                    ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/contacts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
                    
                </div>
                <div class=\"col-12 col-md-3 col-lg-4\">
                    ";
        // line 20
        echo "                    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Informacija"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
                </div>
                <div class=\"col-12 col-md-12 col-lg-4\">
                    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/newsletter"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
                </div>
            </div>
        </div>

        <div class=\"site-footer__bottom\">
            <div class=\"site-footer__copyright\">

                Sprendimas: <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "homepage", [], "any", false, false, false, 31), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "author", [], "any", false, false, false, 31), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "author", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>

            </div>

        </div>
    </div>
    <div class=\"totop\">
        <div class=\"totop__body\">
            <div class=\"totop__start\"></div>
            <div class=\"totop__container container\"></div>
            <div class=\"totop__end\">
                <button type=\"button\" class=\"totop__button\">
                    <svg width=\"13px\" height=\"8px\"><use xlink:href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sprite.svg#arrow-rounded-up-13x8");
        echo "\"></use></svg>
                </button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  77 => 31,  64 => 23,  54 => 20,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer\">
    <div class=\"container\">
        <div class=\"site-footer__widgets\">
            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-4\">

                    {% partial 'footer/contacts' %} 
                    
                </div>
                <div class=\"col-12 col-md-3 col-lg-4\">
                    {# {% include '/footer/links.twig' with {
                        title: 'Informacija',
                        links: [
                            {title: 'Pirkimo taisyklės', url: 'terms-and-conditions.html'},
                            {title: 'Grąžinimo sąlygos', url: 'returns.html'},
                            {title: 'Privatumo ir slapukų politika', url: 'privacy.html'},
                            {title: 'D.U.K.', url: 'faq.html'}
                        ]
                    } %} #}
                    {% partial 'footer/links' title='Informacija' %} 
                </div>
                <div class=\"col-12 col-md-12 col-lg-4\">
                    {% partial 'footer/newsletter' %} 
                </div>
            </div>
        </div>

        <div class=\"site-footer__bottom\">
            <div class=\"site-footer__copyright\">

                Sprendimas: <a href=\"{{ this.theme.config.homepage }}\" target=\"_blank\" title=\"{{ this.theme.config.author }}\">{{ this.theme.config.author }}</a>

            </div>

        </div>
    </div>
    <div class=\"totop\">
        <div class=\"totop__body\">
            <div class=\"totop__start\"></div>
            <div class=\"totop__container container\"></div>
            <div class=\"totop__end\">
                <button type=\"button\" class=\"totop__button\">
                    <svg width=\"13px\" height=\"8px\"><use xlink:href=\"{{ 'assets/images/sprite.svg#arrow-rounded-up-13x8'|theme }}\"></use></svg>
                </button>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/footer.htm", "");
    }
}
