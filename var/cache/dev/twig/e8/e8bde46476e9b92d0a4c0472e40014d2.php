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

/* partials/_header.html.twig */
class __TwigTemplate_715dfe2f1882db197de87be80308d926 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "<style>
\t.nav-link-custom {
\t\tfont-size: 1.1rem;
\t\tcolor: rgba(255, 255, 255, 0.75);
\t\ttransition: transform 0.3s ease, color 0.3s ease;
\t}

\t.nav-link-custom:hover {
\t\tcolor: #fff;
\t\ttransform: scale(1.1);
\t}

\t.nav-link-active {
\t\tfont-weight: bold;
\t\tcolor: #fff;
\t}
</style>


<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand fs-3\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        yield "\">Portfolio</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29) == "home.index")) ? ("nav-link-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        yield "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)))) {
            // line 33
            yield "\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "creation.index")) ? ("nav-link-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.index");
            yield "\">Créations</a>
\t\t\t\t\t";
        } else {
            // line 35
            yield "\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", ["_route"], "method", false, false, false, 35) == "creation_.index.public")) ? ("nav-link-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_.index.public");
            yield "\">Créations</a>
\t\t\t\t\t";
        }
        // line 37
        yield "\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "attributes", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39) == "contact.index")) ? ("nav-link-active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact.index");
        yield "\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
            // line 45
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "user.edit")) ? ("nav-link-active") : (""));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">Mon Profil</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47)))) {
                // line 48
                yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
                // line 49
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "admin")) ? ("nav-link-active") : (""));
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                yield "\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 52
            yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom\" href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            yield "\">Déconnexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 56
            yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57) == "security.login")) ? ("nav-link-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
            yield "\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom ";
            // line 60
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60) == "security.registration")) ? ("nav-link-active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
            yield "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 63
        yield "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
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
        return "partials/_header.html.twig";
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
        return array (  173 => 63,  165 => 60,  157 => 57,  154 => 56,  148 => 53,  145 => 52,  137 => 49,  134 => 48,  132 => 47,  125 => 45,  122 => 44,  120 => 43,  111 => 39,  107 => 37,  99 => 35,  91 => 33,  89 => 32,  81 => 29,  71 => 22,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
\t.nav-link-custom {
\t\tfont-size: 1.1rem;
\t\tcolor: rgba(255, 255, 255, 0.75);
\t\ttransition: transform 0.3s ease, color 0.3s ease;
\t}

\t.nav-link-custom:hover {
\t\tcolor: #fff;
\t\ttransform: scale(1.1);
\t}

\t.nav-link-active {
\t\tfont-weight: bold;
\t\tcolor: #fff;
\t}
</style>


<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand fs-3\" href=\"{{ path('home.index') }}\">Portfolio</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'home.index' ? 'nav-link-active' : '' }}\" href=\"{{ path('home.index') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t{% if app.user and 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'creation.index' ? 'nav-link-active' : '' }}\" href=\"{{ path('creation.index') }}\">Créations</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'creation_.index.public' ? 'nav-link-active' : '' }}\" href=\"{{ path('creation_.index.public') }}\">Créations</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'contact.index' ? 'nav-link-active' : '' }}\" href=\"{{ path('contact.index') }}\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'user.edit' ? 'nav-link-active' : '' }}\" href=\"{{ path('user.edit', {'id': app.user.id}) }}\">Mon Profil</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if app.user and 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'admin' ? 'nav-link-active' : '' }}\" href=\"{{ path('admin') }}\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'security.login' ? 'nav-link-active' : '' }}\" href=\"{{ path('security.login') }}\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link-custom {{ app.request.attributes.get('_route') == 'security.registration' ? 'nav-link-active' : '' }}\" href=\"{{ path('security.registration') }}\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partials/_header.html.twig", "C:\\xampp\\htdocs\\portfoliofinalfinal\\master\\templates\\partials\\_header.html.twig");
    }
}
