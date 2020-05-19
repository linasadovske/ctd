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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/account-menu.htm */
class __TwigTemplate_c6c4fa58b4c162d3edae0c4b032057aa7cfa3343879c58c76b4ff86ace9e8741 extends \Twig\Template
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
        echo "<div class=\"account-menu\">
    <form class=\"account-menu__form\">
        <div class=\"account-menu__form-title\">Prisijungti</div>
        <div class=\"form-group\">
            <label for=\"header-signin-email\" class=\"sr-only\">El. paštas</label>
            <input id=\"header-signin-email\" type=\"email\" class=\"form-control form-control-sm\" placeholder=\"El. paštas\">
        </div>
        <div class=\"form-group\">
            <label for=\"header-signin-password\" class=\"sr-only\">Slaptažodis</label>
            <div class=\"account-menu__form-forgot\">
                <input id=\"header-signin-password\" type=\"password\" class=\"form-control form-control-sm\" placeholder=\"Slaptažodis\">
                <a href=\"\" class=\"account-menu__form-forgot-link\">Pamiršote slaptažodį?</a>
            </div>
        </div>
        <div class=\"form-group account-menu__form-button\">
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Prisijungti</button>
        </div>
        <div class=\"account-menu__form-link\"><a href=\"account-login.html\">Registruotis</a></div>
    </form>
    <div class=\"account-menu__divider\"></div>
    <a href=\"account-dashboard.html\" class=\"account-menu__user\">
        <div class=\"account-menu__user-avatar\">
            <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatars/avatar-3.jpg");
        echo "\" alt=\"\">
        </div>
        <div class=\"account-menu__user-info\">
            <div class=\"account-menu__user-name\">Helena Garcia</div>
            <div class=\"account-menu__user-email\">stroyka@example.com</div>
        </div>
    </a>
    <div class=\"account-menu__divider\"></div>
    <ul class=\"account-menu__links\">
        <li><a href=\"account-profile.html\">Asmeninė informacija</a></li>
        <li><a href=\"account-orders.html\">Užsakymų istorija</a></li>
        <li><a href=\"account-addresses.html\">Adresai</a></li>
        <li><a href=\"account-password.html\">Slaptažodis</a></li>
    </ul>
    <div class=\"account-menu__divider\"></div>
    <ul class=\"account-menu__links\">
        <li><a href=\"account-login.html\">Atsijungti</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/account-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"account-menu\">
    <form class=\"account-menu__form\">
        <div class=\"account-menu__form-title\">Prisijungti</div>
        <div class=\"form-group\">
            <label for=\"header-signin-email\" class=\"sr-only\">El. paštas</label>
            <input id=\"header-signin-email\" type=\"email\" class=\"form-control form-control-sm\" placeholder=\"El. paštas\">
        </div>
        <div class=\"form-group\">
            <label for=\"header-signin-password\" class=\"sr-only\">Slaptažodis</label>
            <div class=\"account-menu__form-forgot\">
                <input id=\"header-signin-password\" type=\"password\" class=\"form-control form-control-sm\" placeholder=\"Slaptažodis\">
                <a href=\"\" class=\"account-menu__form-forgot-link\">Pamiršote slaptažodį?</a>
            </div>
        </div>
        <div class=\"form-group account-menu__form-button\">
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">Prisijungti</button>
        </div>
        <div class=\"account-menu__form-link\"><a href=\"account-login.html\">Registruotis</a></div>
    </form>
    <div class=\"account-menu__divider\"></div>
    <a href=\"account-dashboard.html\" class=\"account-menu__user\">
        <div class=\"account-menu__user-avatar\">
            <img src=\"{{ 'assets/images/avatars/avatar-3.jpg'|theme }}\" alt=\"\">
        </div>
        <div class=\"account-menu__user-info\">
            <div class=\"account-menu__user-name\">Helena Garcia</div>
            <div class=\"account-menu__user-email\">stroyka@example.com</div>
        </div>
    </a>
    <div class=\"account-menu__divider\"></div>
    <ul class=\"account-menu__links\">
        <li><a href=\"account-profile.html\">Asmeninė informacija</a></li>
        <li><a href=\"account-orders.html\">Užsakymų istorija</a></li>
        <li><a href=\"account-addresses.html\">Adresai</a></li>
        <li><a href=\"account-password.html\">Slaptažodis</a></li>
    </ul>
    <div class=\"account-menu__divider\"></div>
    <ul class=\"account-menu__links\">
        <li><a href=\"account-login.html\">Atsijungti</a></li>
    </ul>
</div>", "/Applications/MAMP/htdocs/tdc/themes/tdc/partials/header/account-menu.htm", "");
    }
}
