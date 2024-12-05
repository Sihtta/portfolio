<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Icon/http-client.svg */
<<<<<<<< HEAD:var/cache/dev/twig/24/fea1b2f66170cb78ee4fe89372529258.php
class __TwigTemplate_c2a56c07200ca25140214ab6c4bb3222 extends Template
========
class __TwigTemplate_897d8d396c9b1d9594ffbb66e3d4837c extends Template
>>>>>>>> Entity:var/cache/dev/twig/da/da16a1001768ee2e36fd29cc6c0eb6b7.php
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/http-client.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/http-client.svg"));

        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.4 12c-1 0-1.8.6-2.2 1.4l-2.6-.9c.1-.3.1-.5.1-.8 0-1.2-.6-2.2-1.5-2.9l1.5-2.6c.3.1.6.2 1 .2 1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5-2.5 1.1-2.5 2.5c0 .8.4 1.5.9 1.9l-1.5 2.6c-.5-.3-1-.4-1.6-.4-.9 0-1.7.3-2.3.9L7.4 6.6c.3-.4.5-.9.5-1.5 0-1.4-1.1-2.5-2.5-2.5S2.7 3.7 2.7 5.1s1.1 2.5 2.5 2.5c.6 0 1.1-.2 1.5-.5L9 9.4c-.5.6-.8 1.4-.8 2.3 0 .7.2 1.4.6 2l-3.9 3.8c-.4-.3-.9-.5-1.5-.5C2 17 .9 18.1.9 19.5S2.2 22 3.6 22s2.5-1.1 2.5-2.5c0-.5-.2-1-.5-1.5l3.8-3.7c.7.7 1.6 1.1 2.6 1.1h.2l.4 2.4c-1 .3-1.7 1.3-1.7 2.4 0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5l-.4-2.5c1-.3 1.9-1 2.3-2l2.6.9v.4c0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5c.1-1.4-1.1-2.5-2.5-2.5z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Icon/http-client.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.4 12c-1 0-1.8.6-2.2 1.4l-2.6-.9c.1-.3.1-.5.1-.8 0-1.2-.6-2.2-1.5-2.9l1.5-2.6c.3.1.6.2 1 .2 1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5-2.5 1.1-2.5 2.5c0 .8.4 1.5.9 1.9l-1.5 2.6c-.5-.3-1-.4-1.6-.4-.9 0-1.7.3-2.3.9L7.4 6.6c.3-.4.5-.9.5-1.5 0-1.4-1.1-2.5-2.5-2.5S2.7 3.7 2.7 5.1s1.1 2.5 2.5 2.5c.6 0 1.1-.2 1.5-.5L9 9.4c-.5.6-.8 1.4-.8 2.3 0 .7.2 1.4.6 2l-3.9 3.8c-.4-.3-.9-.5-1.5-.5C2 17 .9 18.1.9 19.5S2.2 22 3.6 22s2.5-1.1 2.5-2.5c0-.5-.2-1-.5-1.5l3.8-3.7c.7.7 1.6 1.1 2.6 1.1h.2l.4 2.4c-1 .3-1.7 1.3-1.7 2.4 0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5l-.4-2.5c1-.3 1.9-1 2.3-2l2.6.9v.4c0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5c.1-1.4-1.1-2.5-2.5-2.5z\"/></svg>
<<<<<<<< HEAD:var/cache/dev/twig/24/fea1b2f66170cb78ee4fe89372529258.php
", "@WebProfiler/Icon/http-client.svg", "C:\\Users\\matth\\Projet\\authentication\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\http-client.svg");
========
", "@WebProfiler/Icon/http-client.svg", "C:\\xampp\\htdocs\\portfolio\\portfolio\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\http-client.svg");
>>>>>>>> Entity:var/cache/dev/twig/da/da16a1001768ee2e36fd29cc6c0eb6b7.php
    }
}
