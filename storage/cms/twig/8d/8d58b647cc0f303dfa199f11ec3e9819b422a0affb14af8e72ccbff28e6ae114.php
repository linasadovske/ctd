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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/social-links.htm */
class __TwigTemplate_e0ce9e1d65050c52b912f642d85380f329d6c55494ed67508b617a296be308f0 extends \Twig\Template
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
        echo "<!-- social-links -->
<div class=\"social-links footer-newsletter__social-links social-links--shape--circle\">
    <ul class=\"social-links__list\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "facebook", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <li class=\"social-links__item\">
            <a
                    class=\"social-links__link social-links__link--type--facebook\"
                    href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "facebook", [], "any", false, false, false, 8), "html", null, true);
            echo "\"
                    target=\"_blank\"
            >
            <i class=\"fab fa-facebook-f\"></i>
            </a>
        </li>
        ";
        }
        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 15), "instagram", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <li class=\"social-links__item\">
            <a
                    class=\"social-links__link social-links__link--type--instagram\"
                    href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "instagram", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                    target=\"_blank\"
            >
            <i class=\"fab fa-instagram\"></i>
            </a>
        </li>
        ";
        }
        // line 26
        echo "
    </ul>
</div>
<!-- social-links / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/social-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  67 => 19,  62 => 16,  59 => 15,  49 => 8,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- social-links -->
<div class=\"social-links footer-newsletter__social-links social-links--shape--circle\">
    <ul class=\"social-links__list\">
        {% if this.theme.facebook %}
        <li class=\"social-links__item\">
            <a
                    class=\"social-links__link social-links__link--type--facebook\"
                    href=\"{{ this.theme.facebook}}\"
                    target=\"_blank\"
            >
            <i class=\"fab fa-facebook-f\"></i>
            </a>
        </li>
        {% endif %}
        {% if this.theme.instagram %}
        <li class=\"social-links__item\">
            <a
                    class=\"social-links__link social-links__link--type--instagram\"
                    href=\"{{ this.theme.instagram}}\"
                    target=\"_blank\"
            >
            <i class=\"fab fa-instagram\"></i>
            </a>
        </li>
        {% endif %}

    </ul>
</div>
<!-- social-links / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/social-links.htm", "");
    }
}
