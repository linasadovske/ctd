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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/pages/faq.htm */
class __TwigTemplate_323bd84726e8f96701358f6e4e2172ce0c156b2559eb9582cda145f99d690ac3 extends \Twig\Template
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
        echo "    
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("page-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <div class=\"block faq\">
        <div class=\"container\">
            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Shipping Information</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("shipping.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>

                                <h6>Do you ship internationally?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Payment Information</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Orders and Returns</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/faq.htm";
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 15,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block site_body %}
    
    {% partial 'page-header' %}

    <div class=\"block faq\">
        <div class=\"container\">
            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Shipping Information</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                {% content 'shipping.htm' %}
                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>

                                <h6>Do you ship internationally?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Payment Information</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"faq__section\">
                <div class=\"faq__section-title\">
                    <h3>Orders and Returns</h3>
                </div>
                <div class=\"faq__section-body\">
                    <div class=\"row\">
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                        <div class=\"faq__section-column col-12 col-lg-6\">
                            <div class=\"typography\">
                                <h6>What shipping methods are available?</h6>

                                <p>
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/faq.htm", "");
    }
}
