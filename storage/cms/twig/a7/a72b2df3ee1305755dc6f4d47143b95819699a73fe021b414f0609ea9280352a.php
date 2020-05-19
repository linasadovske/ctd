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

/* /Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_8fc43ff23255a792561fe72d0bd4bf8afc6d2506b085032c23ab79f049f4bf21 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 1), "isHidden", [], "any", false, false, false, 1)) {
                // line 2
                echo "    <li role=\"presentation\" class=\"";
                echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
                echo "-links__item";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 2)) ? ("active") : (""));
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 2)) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 2), "cssClass", [], "any", false, false, false, 2), "html", null, true);
                echo "\">
        ";
                // line 3
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 4), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 4), "isExternal", [], "any", false, false, false, 4)) ? ("target=\"_blank\"") : (""));
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 4), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
                    echo "-links__link\">
                ";
                    // line 5
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 8
                    echo "            <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8), "html", null, true);
                    echo "</span>
        ";
                }
                // line 10
                echo "
        ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "            <ul>";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 12)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
        ";
                }
                // line 14
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  82 => 12,  80 => 11,  77 => 10,  71 => 8,  65 => 5,  54 => 4,  52 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
    <li role=\"presentation\" class=\"{{location}}-links__item{{ item.isActive ? 'active' : '' }}{{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
        {% if item.url %}
            <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }} title=\"{{ item.title }}\" class=\"{{location}}-links__link\">
                {{ item.title }}
            </a>
        {% else %}
            <span>{{ item.title }}</span>
        {% endif %}

        {% if item.items %}
            <ul>{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
        {% endif %}
    </li>
{% endfor %}", "/Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
