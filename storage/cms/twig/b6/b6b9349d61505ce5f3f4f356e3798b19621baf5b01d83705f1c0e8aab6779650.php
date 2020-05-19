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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/pages/returns.htm */
class __TwigTemplate_3dc5695b2a7148a834ac010e2a83be7465740c2ad3fe75f58e60047cc130caf2 extends \Twig\Template
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
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['without_title'] = true        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("page-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    <div class=\"block\">
        <div class=\"container\">
            <div class=\"document\">
                <div class=\"document__header\">
                    <h1 class=\"document__title\">Grąžinimo sąlygos</h1>
                    <div class=\"document__subtitle\">This Agreement was last modified on 27 May 2018.</div>
                </div>
                <div class=\"document__content typography\">
                    ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/returns.htm";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  62 => 12,  51 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block site_body %}
    {% partial 'page-header' without_title=true %}

    <div class=\"block\">
        <div class=\"container\">
            <div class=\"document\">
                <div class=\"document__header\">
                    <h1 class=\"document__title\">Grąžinimo sąlygos</h1>
                    <div class=\"document__subtitle\">This Agreement was last modified on 27 May 2018.</div>
                </div>
                <div class=\"document__content typography\">
                    {% page %}{% component 'staticPage2' %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/returns.htm", "");
    }
}
