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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
    .creation-image {
        max-width: 100%; 
        height: auto; 
        border-radius: 10px; /
        display: block; 
        margin: 0 auto; 
    }

    .creation-image-container {
        max-width: 500px; 
        margin: 20px auto; 
        text-align: center; 
    }

</style>

    <div class=\"container mt-4\">
        <h1>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>

        ";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26))) {
            // line 27
            yield "            <div class=\"creation-image-container\">
                <img src=\"/images/";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            yield "\" class=\"creation-image\">
            </div>

        ";
        } else {
            // line 32
            yield "            <p>No image available</p>
        ";
        }
        // line 34
        yield "
        <p><strong>Description :</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>

        <h3>Outils utilisés :</h3>
        <ul>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 39, $this->source); })()), "Tool", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 40
            yield "                <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tool'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </ul>

        <h3>Catégories :</h3>
        <ul>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 46, $this->source); })()), "category", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            yield "                <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47), "html", null, true);
            yield "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "        </ul>
    </div>
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
        return array (  186 => 49,  177 => 47,  173 => 46,  167 => 42,  158 => 40,  154 => 39,  147 => 35,  144 => 34,  140 => 32,  131 => 28,  128 => 27,  126 => 26,  121 => 24,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ creation.name }} - Détails{% endblock %}

{% block body %}
    <style>
    .creation-image {
        max-width: 100%; 
        height: auto; 
        border-radius: 10px; /
        display: block; 
        margin: 0 auto; 
    }

    .creation-image-container {
        max-width: 500px; 
        margin: 20px auto; 
        text-align: center; 
    }

</style>

    <div class=\"container mt-4\">
        <h1>{{ creation.name }}</h1>

        {% if creation.image is not empty %}
            <div class=\"creation-image-container\">
                <img src=\"/images/{{ creation.image[0] }}\" alt=\"{{ creation.name }}\" class=\"creation-image\">
            </div>

        {% else %}
            <p>No image available</p>
        {% endif %}

        <p><strong>Description :</strong> {{ creation.description }}</p>

        <h3>Outils utilisés :</h3>
        <ul>
            {% for tool in creation.Tool %}
                <li>{{ tool.name }}</li>
            {% endfor %}
        </ul>

        <h3>Catégories :</h3>
        <ul>
            {% for category in creation.category %}
                <li>{{ category.name }}</li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}
", "pages/creationDetail.html.twig", "C:\\Users\\matth\\Projet\\Principal\\templates\\pages\\creationDetail.html.twig");
    }
}
