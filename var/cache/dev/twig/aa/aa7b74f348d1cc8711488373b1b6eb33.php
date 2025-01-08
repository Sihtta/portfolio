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

/* pages/security/login.html.twig */
class __TwigTemplate_d1a7f0284b66c104e1c8669ad93568df extends Template
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
            'nav_links' => [$this, 'block_nav_links'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/security/login.html.twig", 1);
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

        yield "Portfolio - Connexion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_links"));

        // line 7
        yield "\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        yield "\">Inscription</a>
\t</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "\t<div class=\"container\">
\t\t<h1 class=\"mt-4\">Formulaire de connexion</h1>

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
\t\t";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 27
        yield "
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
\t\t<form id=\"loginForm\" action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
        yield "\" method=\"post\" class=\"mt-4\">
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"username\" class=\"form-label\">Adresse email</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"exemple@portfolio.fr\" required value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">
\t\t\t\t\tNous ne partagerons jamais votre e-mail.
\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\" autocomplete=\"off\" required>
\t\t\t</div>

\t\t\t<input type=\"hidden\" id=\"js-enabled\" name=\"js_enabled\" value=\"0\">
\t\t\t<script>
\t\t\t\tdocument.getElementById('js-enabled').value = '1';
\t\t\t</script>

\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4\" id=\"submitBtn\">Se connecter</button>
\t\t</form>
\t</div>

\t<script src=\"https://www.google.com/recaptcha/api.js?render=";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "\"></script>
\t<script>
\t\tdocument.getElementById('loginForm').addEventListener('submit', function (event) {
event.preventDefault();

grecaptcha.ready(function () {
grecaptcha.execute('";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "', {action: 'login'}).then(function (token) {
var recaptchaInput = document.createElement('input');
recaptchaInput.type = 'hidden';
recaptchaInput.name = 'g-recaptcha-response';
recaptchaInput.value = token;
document.getElementById('loginForm').appendChild(recaptchaInput);

document.getElementById('loginForm').submit();
});
});
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
        return "pages/security/login.html.twig";
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
        return array (  226 => 62,  217 => 56,  195 => 37,  189 => 34,  186 => 33,  177 => 30,  174 => 29,  170 => 28,  167 => 27,  161 => 24,  158 => 23,  156 => 22,  153 => 21,  144 => 18,  141 => 17,  137 => 16,  132 => 13,  119 => 12,  105 => 8,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio - Connexion
{% endblock %}

{% block nav_links %}
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"{{ path('inscription') }}\">Inscription</a>
\t</li>
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<h1 class=\"mt-4\">Formulaire de connexion</h1>

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t</div>
\t\t{% endif %}

\t\t{% for message in app.flashes('danger') %}
\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<form id=\"loginForm\" action=\"{{ path('security.login') }}\" method=\"post\" class=\"mt-4\">
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"username\" class=\"form-label\">Adresse email</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"exemple@portfolio.fr\" required value=\"{{ last_username }}\">
\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">
\t\t\t\t\tNous ne partagerons jamais votre e-mail.
\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"mb-3\">
\t\t\t\t<label for=\"password\" class=\"form-label\">Mot de passe</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\" autocomplete=\"off\" required>
\t\t\t</div>

\t\t\t<input type=\"hidden\" id=\"js-enabled\" name=\"js_enabled\" value=\"0\">
\t\t\t<script>
\t\t\t\tdocument.getElementById('js-enabled').value = '1';
\t\t\t</script>

\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4\" id=\"submitBtn\">Se connecter</button>
\t\t</form>
\t</div>

\t<script src=\"https://www.google.com/recaptcha/api.js?render={{ recaptcha_site_key }}\"></script>
\t<script>
\t\tdocument.getElementById('loginForm').addEventListener('submit', function (event) {
event.preventDefault();

grecaptcha.ready(function () {
grecaptcha.execute('{{ recaptcha_site_key }}', {action: 'login'}).then(function (token) {
var recaptchaInput = document.createElement('input');
recaptchaInput.type = 'hidden';
recaptchaInput.name = 'g-recaptcha-response';
recaptchaInput.value = token;
document.getElementById('loginForm').appendChild(recaptchaInput);

document.getElementById('loginForm').submit();
});
});
});
\t</script>
{% endblock %}
", "pages/security/login.html.twig", "C:\\xampp\\htdocs\\portfoliofinalfinal\\master\\templates\\pages\\security\\login.html.twig");
    }
}
