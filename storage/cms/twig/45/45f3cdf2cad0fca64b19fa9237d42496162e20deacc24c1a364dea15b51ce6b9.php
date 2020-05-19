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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/contacts.htm */
class __TwigTemplate_9bbb51c9c4d4679c8a3b12f5f7e359afc3fa4512a888aa01764caa3543e821e1 extends \Twig\Template
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
        echo "<div class=\"site-footer__widget footer-contacts\">
    <h5 class=\"footer-contacts__title\">UAB „IRLIDA“</h5>

    <div class=\"footer-contacts__text\">
        Sunkiasvorės technikos ekspertai. Dalių pardavimas, servisas ir konsultacijos.
    </div>

    <ul class=\"footer-contacts__contacts\">        
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "address", [], "any", false, false, false, 9)) {
            echo "<li><i class=\"footer-contacts__icon fas fa-globe-americas\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "address", [], "any", false, false, false, 9), "html", null, true);
            echo "</li>";
        }
        // line 10
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10)) {
            echo "<li><i class=\"footer-contacts__icon far fa-envelope\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>";
        }
        // line 11
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "phone", [], "any", false, false, false, 11)) {
            echo "<li><i class=\"footer-contacts__icon fas fa-mobile-alt\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "phone", [], "any", false, false, false, 11), "html", null, true);
            echo "</li>";
        }
        // line 12
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "hours", [], "any", false, false, false, 12)) {
            echo "<li><i class=\"footer-contacts__icon far fa-clock\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "hours", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>";
        }
        // line 13
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  67 => 12,  60 => 11,  53 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"site-footer__widget footer-contacts\">
    <h5 class=\"footer-contacts__title\">UAB „IRLIDA“</h5>

    <div class=\"footer-contacts__text\">
        Sunkiasvorės technikos ekspertai. Dalių pardavimas, servisas ir konsultacijos.
    </div>

    <ul class=\"footer-contacts__contacts\">        
        {% if this.theme.address %}<li><i class=\"footer-contacts__icon fas fa-globe-americas\"></i> {{ this.theme.address }}</li>{% endif %}
        {% if this.theme.email %}<li><i class=\"footer-contacts__icon far fa-envelope\"></i> {{ this.theme.email }}</li>{% endif %}
        {% if this.theme.phone %}<li><i class=\"footer-contacts__icon fas fa-mobile-alt\"></i> {{ this.theme.phone }}</li>{% endif %}
        {% if this.theme.hours %}<li><i class=\"footer-contacts__icon far fa-clock\"></i> {{ this.theme.hours}}</li>{% endif %}
    </ul>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/footer/contacts.htm", "");
    }
}
