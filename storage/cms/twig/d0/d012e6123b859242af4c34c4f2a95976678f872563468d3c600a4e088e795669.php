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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-finder.htm */
class __TwigTemplate_35fa90a32f0298219eccd0530850a0fe56ab56bda716a1214cca1e39aa50a526 extends \Twig\Template
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
        // line 5
        echo "
";
        // line 6
        $context["_body"] = ('' === $tmp = "    <div class=\"block-finder__body\" style=\"background-image: url('images/finder/left.png');\">
        <div class=\"block-finder__header\">
            <div class=\"block-finder__title\">Ieškoti pagal Jūsų sunkiąją techniką</div>
            <div class=\"block-finder__subtitle\">Pas mus rasite tūkstančius dalių ieškodami pagal gamintoją</div>
        </div>

        <div class=\"block-finder__form\">
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Gamintojas</option>
                    <option>Audi</option>
                    <option>BMW</option>
                    <option>Ferrari</option>
                    <option>Ford</option>
                    <option>KIA</option>
                    <option>Nissan</option>
                    <option>Tesla</option>
                    <option>Toyota</option>
                </select>
            </div>
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Modelis</option>
                    <option>Explorer</option>
                    <option>Focus S</option>
                    <option>Fusion SE</option>
                    <option>Mustang</option>
                </select>
            </div>
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Kategorija</option>
                    <option>Gas 1.6L 125 hp AT/L4</option>
                    <option>Diesel 2.5L 200 hp AT/L5</option>
                    <option>Diesel 3.0L 250 hp MT/L5</option>
                </select>
            </div>
        </div>
        <button type=\"submit\" class=\"block-finder__button btn btn-primary\">Ieškoti</button>
    </div>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
<!-- .block-finder -->
<div class=\"block-finder block-finder--layout--";
        // line 50
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " block\">
    <form>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 54
        if ((($context["layout"] ?? null) == "full")) {
            // line 55
            echo "                    <div class=\"col-12\">
                        ";
            // line 56
            echo twig_escape_filter($this->env, ($context["_body"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 59
            echo "                    <div class=\"col-lg-3 d-none d-lg-block\"></div>
                    <div class=\"col-12 col-lg-9\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, ($context["_body"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 64
        echo "            </div>
        </div>
    </form>
</div>
<!-- .block-finder / end -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-finder.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 64,  108 => 61,  104 => 59,  98 => 56,  95 => 55,  93 => 54,  86 => 50,  82 => 48,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
// inputs:
// - layout: string - one of [full, with-departments] (required)
#}

{% set _body %}
    <div class=\"block-finder__body\" style=\"background-image: url('images/finder/left.png');\">
        <div class=\"block-finder__header\">
            <div class=\"block-finder__title\">Ieškoti pagal Jūsų sunkiąją techniką</div>
            <div class=\"block-finder__subtitle\">Pas mus rasite tūkstančius dalių ieškodami pagal gamintoją</div>
        </div>

        <div class=\"block-finder__form\">
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Gamintojas</option>
                    <option>Audi</option>
                    <option>BMW</option>
                    <option>Ferrari</option>
                    <option>Ford</option>
                    <option>KIA</option>
                    <option>Nissan</option>
                    <option>Tesla</option>
                    <option>Toyota</option>
                </select>
            </div>
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Modelis</option>
                    <option>Explorer</option>
                    <option>Focus S</option>
                    <option>Fusion SE</option>
                    <option>Mustang</option>
                </select>
            </div>
            <div class=\"block-finder__form-item\">
                <select class=\"block-finder__select\" disabled>
                    <option value=\"none\">Kategorija</option>
                    <option>Gas 1.6L 125 hp AT/L4</option>
                    <option>Diesel 2.5L 200 hp AT/L5</option>
                    <option>Diesel 3.0L 250 hp MT/L5</option>
                </select>
            </div>
        </div>
        <button type=\"submit\" class=\"block-finder__button btn btn-primary\">Ieškoti</button>
    </div>
{% endset %}

<!-- .block-finder -->
<div class=\"block-finder block-finder--layout--{{ layout }} block\">
    <form>
        <div class=\"container\">
            <div class=\"row\">
                {% if layout == 'full' %}
                    <div class=\"col-12\">
                        {{ _body }}
                    </div>
                {% else %}
                    <div class=\"col-lg-3 d-none d-lg-block\"></div>
                    <div class=\"col-12 col-lg-9\">
                        {{ _body }}
                    </div>
                {% endif %}
            </div>
        </div>
    </form>
</div>
<!-- .block-finder / end -->", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/blocks/block-finder.htm", "");
    }
}
