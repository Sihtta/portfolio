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

/* pages/creationDetail.html.twig */
class __TwigTemplate_fa17ff27ee90e60e1342f21ee1945240 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/creationDetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/creationDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/creationDetail.html.twig", 1);
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "
\t- Détails
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "\t<style>
\t\t.creation-image {
\t\t\tmax-width: 100%;
\t\t\theight: auto;
\t\t\tborder-radius: 10px;
\t\t\t/ display: block;
\t\t\tmargin: 0 auto;
\t\t}

\t\t.creation-image-container {
\t\t\tmax-width: 500px;
\t\t\tmargin: 20px auto;
\t\t\ttext-align: center;
\t\t}
\t</style>

\t<div class=\"container mt-4\">
\t\t<h1>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "</h1>

\t\t";
        // line 28
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28))) {
            // line 29
            yield "\t\t\t<div class=\"creation-image-container\">
\t\t\t\t<img src=\"/images/";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 30, $this->source); })()), "image", [], "any", false, false, false, 30), 0, [], "array", false, false, false, 30), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "\" class=\"creation-image\">
\t\t\t</div>

\t\t";
        } else {
            // line 34
            yield "\t\t\t<p>No image available</p>
\t\t";
        }
        // line 36
        yield "
\t\t<p>
\t\t\t<strong>Description :</strong>
\t\t\t";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>

\t\t<h3>Outils utilisés :</h3>
\t\t<ul>
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 43, $this->source); })()), "Tool", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 44
            yield "\t\t\t\t<li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tool'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "\t\t</ul>

\t\t<h3>Catégories :</h3>
\t\t<ul>
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 50, $this->source); })()), "category", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 51
            yield "\t\t\t\t<li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "\t\t</ul>
\t</div>
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
        return "pages/creationDetail.html.twig";
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
        return array (  191 => 53,  182 => 51,  178 => 50,  172 => 46,  163 => 44,  159 => 43,  152 => 39,  147 => 36,  143 => 34,  134 => 30,  131 => 29,  129 => 28,  124 => 26,  105 => 9,  92 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\t{{ creation.name }}
\t- Détails
{% endblock %}

{% block body %}
\t<style>
\t\t.creation-image {
\t\t\tmax-width: 100%;
\t\t\theight: auto;
\t\t\tborder-radius: 10px;
\t\t\t/ display: block;
\t\t\tmargin: 0 auto;
\t\t}

\t\t.creation-image-container {
\t\t\tmax-width: 500px;
\t\t\tmargin: 20px auto;
\t\t\ttext-align: center;
\t\t}
\t</style>

\t<div class=\"container mt-4\">
\t\t<h1>{{ creation.name }}</h1>

\t\t{% if creation.image is not empty %}
\t\t\t<div class=\"creation-image-container\">
\t\t\t\t<img src=\"/images/{{ creation.image[0] }}\" alt=\"{{ creation.name }}\" class=\"creation-image\">
\t\t\t</div>

\t\t{% else %}
\t\t\t<p>No image available</p>
\t\t{% endif %}

\t\t<p>
\t\t\t<strong>Description :</strong>
\t\t\t{{ creation.description }}</p>

\t\t<h3>Outils utilisés :</h3>
\t\t<ul>
\t\t\t{% for tool in creation.Tool %}
\t\t\t\t<li>{{ tool.name }}</li>
\t\t\t{% endfor %}
\t\t</ul>

\t\t<h3>Catégories :</h3>
\t\t<ul>
\t\t\t{% for category in creation.category %}
\t\t\t\t<li>{{ category.name }}</li>
\t\t\t{% endfor %}
\t\t</ul>
\t</div>
{% endblock %}
", "pages/creationDetail.html.twig", "C:\\xampp\\htdocs\\portfoliofinalfinal\\master\\templates\\pages\\creationDetail.html.twig");
    }
}
