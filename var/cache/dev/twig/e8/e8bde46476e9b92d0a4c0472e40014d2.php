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
.nav-link-custom {
    font-size: 1.1rem; 
    color: rgba(255, 255, 255, 0.75); 
    transition: transform 0.3s ease, color 0.3s ease;
}

.nav-link-custom:hover {
    color: #fff;
    transform: scale(1.1);
}

</style>

<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand fs-3\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        yield "\">Portfolio</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-custom\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        yield "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "roles", [], "any", false, false, false, 27)))) {
            // line 28
            yield "                        <a class=\"nav-link nav-link-custom\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.index");
            yield "\">Créations</a>
                    ";
        } else {
            // line 30
            yield "                        <a class=\"nav-link nav-link-custom\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_.index.public");
            yield "\">Créations</a>
                    ";
        }
        // line 32
        yield "                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto\">
                ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">Mon Profil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            yield "\">Déconnexion</a>
                    </li>
                ";
        } else {
            // line 43
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
            yield "\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
            yield "\">Inscription</a>
                    </li>
                ";
        }
        // line 50
        yield "            </ul>
        </div>
    </div>
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
        return array (  133 => 50,  127 => 47,  121 => 44,  118 => 43,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  96 => 32,  90 => 30,  84 => 28,  82 => 27,  76 => 24,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
.nav-link-custom {
    font-size: 1.1rem; 
    color: rgba(255, 255, 255, 0.75); 
    transition: transform 0.3s ease, color 0.3s ease;
}

.nav-link-custom:hover {
    color: #fff;
    transform: scale(1.1);
}

</style>

<nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand fs-3\" href=\"{{ path('home.index') }}\">Portfolio</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link-custom\" href=\"{{ path('home.index') }}\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('creation.index') }}\">Créations</a>
                    {% else %}
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('creation_.index.public') }}\">Créations</a>
                    {% endif %}
                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('user.edit', {'id': app.user.id}) }}\">Mon Profil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('security.login') }}\">Connexion</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-custom\" href=\"{{ path('security.registration') }}\">Inscription</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

", "partials/_header.html.twig", "C:\\Users\\matth\\Projet\\Principal\\templates\\partials\\_header.html.twig");
    }
}
