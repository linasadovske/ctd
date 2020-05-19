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

/* /Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_88ff11b628831a35993cc0a808078bdb3d2f89d10293974ca6fe2f12a85c4e44 extends \Twig\Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, false, 1);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ __SELF__.content|raw }}", "/Applications/MAMP/htdocs/tdc/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
