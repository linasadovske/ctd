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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/links.htm */
class __TwigTemplate_efe3faa23c2fd12aef2b5dbab584175743d1d02f421c21d6609d82bf158eee42 extends \Twig\Template
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
        echo "<div class=\"site-footer__widget footer-links\">
    <h5 class=\"footer-links__title\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h5>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <ul class=\"footer-links__list\">
        ";
            // line 5
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 5)            ;
            $context['__cms_partial_params']['location'] = "footer"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    </ul>
";
        }
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  55 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer__widget footer-links\">
    <h5 class=\"footer-links__title\">{{ title }}</h5>
    {% if staticMenu.menuItems %}
    <ul class=\"footer-links__list\">
        {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems location=\"footer\" %}
    </ul>
{% endif %}
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/links.htm", "");
    }
}
