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

/* pages/home.html.twig */
class __TwigTemplate_266a21b791cf79e6bf5888f0cd410552 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Portfolio - Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
\t<style>
\t\t.main-section {
\t\t\tdisplay: flex;
\t\t\theight: 85.2vh;
\t\t\tbackground-color: #1a1a1a;
\t\t\tcolor: #fff;
\t\t\tfont-family: Arial, sans-serif;
\t\t}

\t\t.left-side {
\t\t\tflex: 1;
\t\t\tbackground: url('/images/2024-12-13-72f878a2-a5e2-4891-b30e-e599efedfda1.avif') no-repeat center center;
\t\t\tbackground-size: cover;
\t\t}

\t\t.right-side {
\t\t\tflex: 1;
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: center;
\t\t\tpadding: 0 50px;
\t\t}

\t\t.right-side h1 {
\t\t\tfont-size: 4rem;
\t\t\tcolor: white;
\t\t\tmargin: 0;
\t\t}

\t\t.right-side p {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin: 20px 0 40px;
\t\t\tline-height: 1.6;
\t\t}


\t\t.buttons {
\t\t\tdisplay: flex;
\t\t\tgap: 20px;
\t\t}

\t\t.btn {
\t\t\ttext-decoration: none;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 20px;
\t\t\tborder: 2px solid #fff;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t.btn:hover {
\t\t\tbackground-color: #fff;
\t\t\tcolor: #1a1a1a;
\t\t}


\t\t.fade-overlay {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: #1A1A1A;
\t\t\tz-index: 9999;
\t\t\tanimation: fadeOut 2.5s ease-in-out forwards;
\t\t}

\t\t@keyframes fadeOut {
\t\t\tfrom {
\t\t\t\topacity: 1;
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 0;
\t\t\t\tvisibility: hidden;
\t\t\t}
\t\t}

\t\t#typed-text {
\t\t\tfont-size: 4rem;
\t\t\tcolor: #fff;
\t\t\twhite-space: nowrap;
\t\t\toverflow: hidden;
\t\t\tborder-right: 4px solid #fff;
\t\t\tpadding-right: 5px;
\t\t}
\t</style>
\t<div class=\"fade-overlay\"></div>
\t<div class=\"main-section\">
\t\t<div class=\"left-side\"></div>

\t\t<div class=\"right-side\">
\t\t\t<h1 id=\"typed-text\"></h1>
\t\t\t<p>
\t\t\t\tDécouvrez les plus belles créations. Explorez, inspirez-vous et admirez !
\t\t\t</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "roles", [], "any", false, false, false, 103)))) {
            // line 104
            yield "\t\t\t\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.index");
            yield "\" class=\"btn\">Explorer</a>
\t\t\t\t";
        } else {
            // line 106
            yield "\t\t\t\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_.index.public");
            yield "\" class=\"btn\">Explorer</a>
\t\t\t\t";
        }
        // line 108
        yield "\t\t\t</div>

\t\t</div>
\t</div>

\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const text = \"Mon Portfolio\";
const element = document.getElementById('typed-text');
let index = 0;

function type() {
if (index < script text.length) {
element.textContent += text.charAt(index);
index++;
setTimeout(type, 100);
}
}

type();
});
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  213 => 108,  207 => 106,  201 => 104,  199 => 103,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Portfolio - Accueil
{% endblock %}

{% block body %}

\t<style>
\t\t.main-section {
\t\t\tdisplay: flex;
\t\t\theight: 85.2vh;
\t\t\tbackground-color: #1a1a1a;
\t\t\tcolor: #fff;
\t\t\tfont-family: Arial, sans-serif;
\t\t}

\t\t.left-side {
\t\t\tflex: 1;
\t\t\tbackground: url('/images/2024-12-13-72f878a2-a5e2-4891-b30e-e599efedfda1.avif') no-repeat center center;
\t\t\tbackground-size: cover;
\t\t}

\t\t.right-side {
\t\t\tflex: 1;
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: center;
\t\t\tpadding: 0 50px;
\t\t}

\t\t.right-side h1 {
\t\t\tfont-size: 4rem;
\t\t\tcolor: white;
\t\t\tmargin: 0;
\t\t}

\t\t.right-side p {
\t\t\tfont-size: 1.2rem;
\t\t\tmargin: 20px 0 40px;
\t\t\tline-height: 1.6;
\t\t}


\t\t.buttons {
\t\t\tdisplay: flex;
\t\t\tgap: 20px;
\t\t}

\t\t.btn {
\t\t\ttext-decoration: none;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px 20px;
\t\t\tborder: 2px solid #fff;
\t\t\ttransition: all 0.3s ease;
\t\t}

\t\t.btn:hover {
\t\t\tbackground-color: #fff;
\t\t\tcolor: #1a1a1a;
\t\t}


\t\t.fade-overlay {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: #1A1A1A;
\t\t\tz-index: 9999;
\t\t\tanimation: fadeOut 2.5s ease-in-out forwards;
\t\t}

\t\t@keyframes fadeOut {
\t\t\tfrom {
\t\t\t\topacity: 1;
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 0;
\t\t\t\tvisibility: hidden;
\t\t\t}
\t\t}

\t\t#typed-text {
\t\t\tfont-size: 4rem;
\t\t\tcolor: #fff;
\t\t\twhite-space: nowrap;
\t\t\toverflow: hidden;
\t\t\tborder-right: 4px solid #fff;
\t\t\tpadding-right: 5px;
\t\t}
\t</style>
\t<div class=\"fade-overlay\"></div>
\t<div class=\"main-section\">
\t\t<div class=\"left-side\"></div>

\t\t<div class=\"right-side\">
\t\t\t<h1 id=\"typed-text\"></h1>
\t\t\t<p>
\t\t\t\tDécouvrez les plus belles créations. Explorez, inspirez-vous et admirez !
\t\t\t</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t{% if app.user and 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t<a href=\"{{ path('creation.index') }}\" class=\"btn\">Explorer</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ path('creation_.index.public') }}\" class=\"btn\">Explorer</a>
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t</div>
\t</div>

\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const text = \"Mon Portfolio\";
const element = document.getElementById('typed-text');
let index = 0;

function type() {
if (index < script text.length) {
element.textContent += text.charAt(index);
index++;
setTimeout(type, 100);
}
}

type();
});
\t</script>

{% endblock %}
", "pages/home.html.twig", "C:\\xampp\\htdocs\\portfoliofinalfinal\\master\\templates\\pages\\home.html.twig");
    }
}
