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
class __TwigTemplate_428236f0d0457b9a56aafdd24a25ea5f extends Template
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
        yield "<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"#\">Navbar</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        yield "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.index");
        yield "\">Créations</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "security.login")) {
            // line 17
            yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
            yield "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", ["_route"], "method", false, false, false, 20) == "security.registration")) {
            // line 21
            yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
            yield "\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 25
            yield "\t\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
                // line 26
                yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\">Mon Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\">Mon Mot de Passe</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
                yield "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            } else {
                // line 36
                yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 37
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
                yield "\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 40
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
                yield "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 43
            yield "\t\t\t\t";
        }
        // line 44
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
        return array (  134 => 44,  131 => 43,  125 => 40,  119 => 37,  116 => 36,  110 => 33,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  86 => 22,  83 => 21,  81 => 20,  76 => 18,  73 => 17,  71 => 16,  65 => 13,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"#\">Navbar</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('home.index') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('creation.index') }}\">Créations</a>
\t\t\t\t</li>

\t\t\t\t{% if app.request.attributes.get('_route') == 'security.login' %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.registration') }}\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t{% elseif app.request.attributes.get('_route') == 'security.registration' %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.login') }}\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('user.edit', {'id': app.user.id}) }}\">Mon Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('user.edit.password', {'id': app.user.id}) }}\">Mon Mot de Passe</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.registration') }}\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.login') }}\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partials/_header.html.twig", "C:\\Users\\matth\\Projet\\Principal\\templates\\partials\\_header.html.twig");
    }
}
