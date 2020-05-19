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

/* /Applications/MAMP/htdocs/tdc/themes/tdc/pages/privacy.htm */
class __TwigTemplate_8d3208881ae5c83caf1765cd3027e2b622b6cae17287ec29de08b454aad520f9 extends \Twig\Template
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
        $context['__cms_partial_params']['without_title'] = true        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("page-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <div class=\"block\">
        <div class=\"container\">
            <div class=\"document\">
                <div class=\"document__header\">
                    <h1 class=\"document__title\">Privatumo ir slapukų politika</h1>
                    <div class=\"document__subtitle\">This Agreement was last modified on 27 May 2018.</div>
                </div>
                <div class=\"document__content typography\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                        nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                        Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate. Suspendisse potenti. Pellentesque et
                        molestie ante. In feugiat ante vitae ultricies malesuada.
                    </p>

                    <h2>Definitions</h2>

                    <ol>
                        <li>
                            <strong>Risus</strong> — Morbi posuere eleifend sollicitudin. Praesent eget ante in enim scelerisque
                            scelerisque. Donec mi lorem, molestie a sapien non, laoreet convallis felis. In semper felis in lacus
                            venenatis, sit amet commodo leo interdum. Maecenas congue ut leo et auctor.
                        </li>
                        <li>
                            <strong>Praesent</strong> — Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Nulla orci ante, viverra in imperdiet in, pharetra et leo
                        </li>
                        <li>
                            <strong>Vestibulum</strong> — Vestibulum arcu tellus, aliquam vel fermentum vestibulum, lacinia pulvinar
                            ipsum. In hac habitasse platea dictumst. Integer felis libero, blandit scelerisque mauris eget, porta
                            elementum sapien. Mauris luctus arcu non enim lobortis gravida.
                        </li>
                    </ol>

                    <h2>Ornare dolor</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                        nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                        Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate. Suspendisse potenti. Pellentesque et
                        molestie ante. In feugiat ante vitae ultricies malesuada.
                    </p>

                    <p>For information about how to contact us, please visit our <a href=\"contact-us.html\">contact page</a>.</p>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/privacy.htm";
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block site_body %}

    {% partial 'page-header' without_title=true %}

    <div class=\"block\">
        <div class=\"container\">
            <div class=\"document\">
                <div class=\"document__header\">
                    <h1 class=\"document__title\">Privatumo ir slapukų politika</h1>
                    <div class=\"document__subtitle\">This Agreement was last modified on 27 May 2018.</div>
                </div>
                <div class=\"document__content typography\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                        nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                        Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate. Suspendisse potenti. Pellentesque et
                        molestie ante. In feugiat ante vitae ultricies malesuada.
                    </p>

                    <h2>Definitions</h2>

                    <ol>
                        <li>
                            <strong>Risus</strong> — Morbi posuere eleifend sollicitudin. Praesent eget ante in enim scelerisque
                            scelerisque. Donec mi lorem, molestie a sapien non, laoreet convallis felis. In semper felis in lacus
                            venenatis, sit amet commodo leo interdum. Maecenas congue ut leo et auctor.
                        </li>
                        <li>
                            <strong>Praesent</strong> — Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Nulla orci ante, viverra in imperdiet in, pharetra et leo
                        </li>
                        <li>
                            <strong>Vestibulum</strong> — Vestibulum arcu tellus, aliquam vel fermentum vestibulum, lacinia pulvinar
                            ipsum. In hac habitasse platea dictumst. Integer felis libero, blandit scelerisque mauris eget, porta
                            elementum sapien. Mauris luctus arcu non enim lobortis gravida.
                        </li>
                    </ol>

                    <h2>Ornare dolor</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis neque ut purus fermentum, ac pretium
                        nibh facilisis. Vivamus venenatis viverra iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus.
                        Suspendisse at velit diam. Donec pharetra nec enim blandit vulputate. Suspendisse potenti. Pellentesque et
                        molestie ante. In feugiat ante vitae ultricies malesuada.
                    </p>

                    <p>For information about how to contact us, please visit our <a href=\"contact-us.html\">contact page</a>.</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "/Applications/MAMP/htdocs/tdc/themes/tdc/pages/privacy.htm", "");
    }
}
