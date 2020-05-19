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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/pages/404.htm */
class __TwigTemplate_fb082396e7da43a5c6a64ff97f84f3f5e38ac56082471fb653cf20d1dcdde0e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'site_body' => [$this, 'block_site_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('site_body', $context, $blocks);
    }

    public function block_site_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"block\">
        <div class=\"container\">
            <div class=\"not-found\">
                <div class=\"not-found__404\">
                    Klaida 404
                </div>

                <div class=\"not-found__content\">
                    <h1 class=\"not-found__title\">Puslapis nerastas</h1>

                    <p class=\"not-found__text\">
                        Panašu, kad negalime rasti ieškomo puslapio. <br>
                        Pabandykite naudoti paiešką.
                    </p>

                    <form class=\"not-found__search\">
                        <input type=\"text\" class=\"not-found__search-input form-control\" placeholder=\"Paieška...\">
                        <button type=\"submit\" class=\"not-found__search-button btn btn-primary\">Ieškoti</button>
                    </form>

                    <p class=\"not-found__text\">
                        Arba grįžkite į pagrindinį puslapį.
                    </p>

                    <a class=\"btn btn-secondary btn-sm\" href=\"index.html\">Grįžti</a>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block site_body %}
    <div class=\"block\">
        <div class=\"container\">
            <div class=\"not-found\">
                <div class=\"not-found__404\">
                    Klaida 404
                </div>

                <div class=\"not-found__content\">
                    <h1 class=\"not-found__title\">Puslapis nerastas</h1>

                    <p class=\"not-found__text\">
                        Panašu, kad negalime rasti ieškomo puslapio. <br>
                        Pabandykite naudoti paiešką.
                    </p>

                    <form class=\"not-found__search\">
                        <input type=\"text\" class=\"not-found__search-input form-control\" placeholder=\"Paieška...\">
                        <button type=\"submit\" class=\"not-found__search-button btn btn-primary\">Ieškoti</button>
                    </form>

                    <p class=\"not-found__text\">
                        Arba grįžkite į pagrindinį puslapį.
                    </p>

                    <a class=\"btn btn-secondary btn-sm\" href=\"index.html\">Grįžti</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/404.htm", "");
    }
}
