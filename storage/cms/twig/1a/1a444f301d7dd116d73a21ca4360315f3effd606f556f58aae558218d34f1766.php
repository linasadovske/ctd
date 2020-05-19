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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/newsletter.htm */
class __TwigTemplate_e3827272b79a44cf1fdf04bc47db2a6eef8c7bec60effb83103f5b75bef628d2 extends \Twig\Template
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
        echo "<div class=\"site-footer__widget footer-newsletter\">
    <h5 class=\"footer-newsletter__title\">Prenumerata</h5>
    <div class=\"footer-newsletter__text\">
        Užsiprenumeruokite naujienlaiškį. Prenumeratos galite atsisakyti bet kuriuo metu.
    </div>

    <form action=\"\" class=\"footer-newsletter__form\">
        <label class=\"sr-only\" for=\"footer-newsletter-address\">El. paštas</label>
        <input type=\"text\" class=\"footer-newsletter__form-input form-control\" id=\"footer-newsletter-address\" placeholder=\"El. paštas...\">

        <button class=\"footer-newsletter__form-button btn btn-primary\">Prenumeruoti</button>
    </form>

    <div class=\"footer-newsletter__text footer-newsletter__text--social\">
        TDC socialiniuose tinkluose
    </div>

    ";
        // line 22
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("social-links"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/newsletter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer__widget footer-newsletter\">
    <h5 class=\"footer-newsletter__title\">Prenumerata</h5>
    <div class=\"footer-newsletter__text\">
        Užsiprenumeruokite naujienlaiškį. Prenumeratos galite atsisakyti bet kuriuo metu.
    </div>

    <form action=\"\" class=\"footer-newsletter__form\">
        <label class=\"sr-only\" for=\"footer-newsletter-address\">El. paštas</label>
        <input type=\"text\" class=\"footer-newsletter__form-input form-control\" id=\"footer-newsletter-address\" placeholder=\"El. paštas...\">

        <button class=\"footer-newsletter__form-button btn btn-primary\">Prenumeruoti</button>
    </form>

    <div class=\"footer-newsletter__text footer-newsletter__text--social\">
        TDC socialiniuose tinkluose
    </div>

    {# {% include '/partials/social-links.twig' with {
        classes: 'footer-newsletter__social-links',
        shape: 'circle',
    } %} #}
    {% partial 'social-links' %} 
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/newsletter.htm", "");
    }
}
