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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/layouts/Default.htm */
class __TwigTemplate_238c07b5920cc009ba93a3028400f4a37394a2da48883b431137472482ef30f3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"";
        // line 2
        echo twig_escape_filter($this->env, (((isset($context["direction"]) || array_key_exists("direction", $context))) ? (_twig_default_filter(($context["direction"] ?? null), "ltr")) : ("ltr")), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <title>";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_description", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"noindex, nofollow\"> 
     
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\">

    <!-- css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl-carousel/assets/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/default-skin/default-skin.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/select2/css/select2.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

    <!-- font - fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome/css/all.min.css");
        echo "\">
    <!-- font - stroyka -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/stroyka/stroyka.css");
        echo "\">

    ";
        // line 26
        echo twig_escape_filter($this->env, (((isset($context["analytics"]) || array_key_exists("analytics", $context))) ? (_twig_default_filter(($context["analytics"] ?? null), "")) : ("")), "html", null, true);
        echo "
</head>
<body>

<!-- site -->
<div class=\"site\">
    <!-- mobile site__header -->
    <header class=\"site__header d-lg-none\">
        ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/mobile-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    </header>
    <!-- mobile site__header / end -->

    <!-- desktop site__header -->
    <header class=\"site__header d-lg-block d-none\">
        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "    </header>
    <!-- desktop site__header / end -->

    <!-- site__body -->
    <div class=\"site__body\">
        ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 47
        echo "    </div>
    <!-- site__body / end -->

    <!-- site__footer -->
    <footer class=\"site__footer\">
        ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "    </footer>
    <!-- site__footer / end -->
</div>
<!-- site / end -->

<!-- quickview-modal -->
<div id=\"quickview-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-xl\">
        <div class=\"modal-content\"></div>
    </div>
</div>
<!-- quickview-modal / end -->

<!-- mobilemenu -->
";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/mobilemenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "<!-- mobilemenu / end -->

";
        // line 70
        if ((($context["cart_style"] ?? null) == "offcanvas")) {
            // line 71
            echo "    ";
            $this->loadTemplate("/header/dropcart.twig", "/Applications/MAMP/htdocs/tdc/themes/tdc/layouts/Default.htm", 71)->display(twig_array_merge($context, ["style" => "offcanvas"]));
        }
        // line 73
        echo "
<!-- photoswipe -->
";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("photoswipe"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "<!-- photoswipe / end -->

<!-- js -->
<script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
<script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl-carousel/owl.carousel.min.js");
        echo "\"></script>
<script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/nouislider/nouislider.min.js");
        echo "\"></script>
<script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe-ui-default.min.js");
        echo "\"></script>
<script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/select2/js/select2.min.js");
        echo "\"></script>
<script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/number.js");
        echo "\"></script>
<script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
<script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/header.js");
        echo "\"></script>
<script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/svg4everybody/svg4everybody.min.js");
        echo "\"></script>
<script>svg4everybody();</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/layouts/Default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 89,  229 => 88,  225 => 87,  221 => 86,  217 => 85,  213 => 84,  209 => 83,  205 => 82,  201 => 81,  197 => 80,  193 => 79,  188 => 76,  184 => 75,  180 => 73,  176 => 71,  174 => 70,  170 => 68,  166 => 67,  150 => 53,  146 => 52,  139 => 47,  137 => 46,  130 => 41,  126 => 40,  119 => 35,  115 => 34,  104 => 26,  99 => 24,  94 => 22,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  62 => 11,  56 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"{{ direction|default('ltr') }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <title>{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.page.title }}{% endif %}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"robots\" content=\"noindex, nofollow\"> 
     
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">

    <!-- css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/owl-carousel/assets/owl.carousel.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/photoswipe/photoswipe.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/photoswipe/default-skin/default-skin.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/select2/css/select2.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">

    <!-- font - fontawesome -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/fontawesome/css/all.min.css'|theme }}\">
    <!-- font - stroyka -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/stroyka/stroyka.css'|theme }}\">

    {{ analytics|default('') }}
</head>
<body>

<!-- site -->
<div class=\"site\">
    <!-- mobile site__header -->
    <header class=\"site__header d-lg-none\">
        {% partial 'header/mobile-header' %}
    </header>
    <!-- mobile site__header / end -->

    <!-- desktop site__header -->
    <header class=\"site__header d-lg-block d-none\">
        {% partial 'header/header' %}
    </header>
    <!-- desktop site__header / end -->

    <!-- site__body -->
    <div class=\"site__body\">
        {% page %}
    </div>
    <!-- site__body / end -->

    <!-- site__footer -->
    <footer class=\"site__footer\">
        {% partial 'footer/footer' %}
    </footer>
    <!-- site__footer / end -->
</div>
<!-- site / end -->

<!-- quickview-modal -->
<div id=\"quickview-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-xl\">
        <div class=\"modal-content\"></div>
    </div>
</div>
<!-- quickview-modal / end -->

<!-- mobilemenu -->
{% partial 'header/mobilemenu' %}
<!-- mobilemenu / end -->

{% if cart_style == 'offcanvas' %}
    {% include '/header/dropcart.twig' with {style: 'offcanvas'} %}
{% endif %}

<!-- photoswipe -->
{% partial 'photoswipe' %}
<!-- photoswipe / end -->

<!-- js -->
<script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/owl-carousel/owl.carousel.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/nouislider/nouislider.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/photoswipe/photoswipe.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/photoswipe/photoswipe-ui-default.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/select2/js/select2.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/number.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/header.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/svg4everybody/svg4everybody.min.js'|theme }}\"></script>
<script>svg4everybody();</script>
</body>
</html>", "/Applications/MAMP/htdocs/tdc/themes/tdc/layouts/Default.htm", "");
    }
}
