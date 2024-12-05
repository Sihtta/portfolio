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

/* @WebProfiler/Icon/cache.svg */
<<<<<<<< HEAD:var/cache/dev/twig/64/64e4f472a4745274a667b878b7ac8438.php
class __TwigTemplate_ad72dd389886006a049a986994e31da9 extends Template
========
class __TwigTemplate_2647af11cf89a36fcec8aaff35b838cb extends Template
>>>>>>>> Entity:var/cache/dev/twig/1d/1d0f8d1c6fd9cdfd97dd8a287acd1da7.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/cache.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/cache.svg"));

        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.3 6l9-4.6a1.5 1.5 0 0 1 1.4 0l9 4.7a1.5 1.5 0 0 1 0 2.6l-9 4.7a1.5 1.5 0 0 1-1.4 0l-9-4.7a1.5 1.5 0 0 1 0-2.6zm18.3 5L12 15.4 3.4 11a1.4 1.4 0 0 0-1.2 2.4l9.2 4.8a1.4 1.4 0 0 0 1.2 0l9.2-4.8a1.4 1.4 0 0 0-1.3-2.4zm0 4.5L12 19.9l-8.6-4.4a1.4 1.4 0 0 0-1.2 2.4l9.2 4.7a1.4 1.4 0 0 0 1.2 0l9.2-4.7a1.4 1.4 0 0 0-1.3-2.5z\"/></svg>
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
        return "@WebProfiler/Icon/cache.svg";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.3 6l9-4.6a1.5 1.5 0 0 1 1.4 0l9 4.7a1.5 1.5 0 0 1 0 2.6l-9 4.7a1.5 1.5 0 0 1-1.4 0l-9-4.7a1.5 1.5 0 0 1 0-2.6zm18.3 5L12 15.4 3.4 11a1.4 1.4 0 0 0-1.2 2.4l9.2 4.8a1.4 1.4 0 0 0 1.2 0l9.2-4.8a1.4 1.4 0 0 0-1.3-2.4zm0 4.5L12 19.9l-8.6-4.4a1.4 1.4 0 0 0-1.2 2.4l9.2 4.7a1.4 1.4 0 0 0 1.2 0l9.2-4.7a1.4 1.4 0 0 0-1.3-2.5z\"/></svg>
<<<<<<<< HEAD:var/cache/dev/twig/64/64e4f472a4745274a667b878b7ac8438.php
", "@WebProfiler/Icon/cache.svg", "C:\\Users\\matth\\Projet\\authentication\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\cache.svg");
========
", "@WebProfiler/Icon/cache.svg", "C:\\xampp\\htdocs\\portfolio\\portfolio\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\cache.svg");
>>>>>>>> Entity:var/cache/dev/twig/1d/1d0f8d1c6fd9cdfd97dd8a287acd1da7.php
    }
}
