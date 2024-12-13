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

/* partials/_cards.html.twig */
class __TwigTemplate_5f6676c08948e23b8f229471da9a3774 extends Template
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
            'style_cards' => [$this, 'block_style_cards'],
            'content_cards' => [$this, 'block_content_cards'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        // line 1
        yield "<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

";
        // line 3
        yield from $this->unwrap()->yieldBlock('style_cards', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('content_cards', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style_cards(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_cards"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_cards"));

        // line 4
        yield "\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_cards(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_cards"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_cards"));

        // line 18
        yield "\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 20
            yield "\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"card h-100 hover-card\" style=\"border-radius: 30px; text-decoration: none; color: black;\">
\t\t\t\t\t<img src=\"/images/";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "image", [], "any", false, false, false, 22), 0, [], "array", false, false, false, 22), "html", null, true);
            yield "\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "\t</div>
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
        return "partials/_cards.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  150 => 29,  139 => 24,  132 => 22,  128 => 21,  125 => 20,  121 => 19,  118 => 18,  105 => 17,  83 => 4,  70 => 3,  59 => 17,  56 => 16,  54 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

{% block style_cards %}
\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}
\t</style>
{% endblock %}

{% block content_cards %}
\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t{% for creation in creations %}
\t\t\t<div class=\"col\">
\t\t\t\t<a href=\"{{ path('creation_show', {'id': creation.id}) }}\" class=\"card h-100 hover-card\" style=\"border-radius: 30px; text-decoration: none; color: black;\">
\t\t\t\t\t<img src=\"/images/{{ creation.image[0] }}\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"{{ creation.name }}\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">{{ creation.name }}</h5>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "partials/_cards.html.twig", "C:\\Users\\theos\\Documents\\GitHub\\portfolio\\templates\\partials\\_cards.html.twig");
    }
}
