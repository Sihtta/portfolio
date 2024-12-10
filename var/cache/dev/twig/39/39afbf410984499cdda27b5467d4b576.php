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
class __TwigTemplate_20d898baa66b5568972b659924383013 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        // line 1
        yield "<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

<div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 5
            yield "\t\t<div class=\"col\">
\t\t\t<div class=\"card h-100\">
\t\t\t\t<img src=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "image", [], "any", false, false, false, 7), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>
\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<small class=\"text-body-secondary\">Last updated 3 mins ago</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "</div>
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
        return "partials/_cards.html.twig";
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
        return array (  78 => 18,  61 => 7,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

<div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t{% for creation in creations %}
\t\t<div class=\"col\">
\t\t\t<div class=\"card h-100\">
\t\t\t\t<img src=\"{{ creation.image }}\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Card title</h5>
\t\t\t\t\t<p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<small class=\"text-body-secondary\">Last updated 3 mins ago</small>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endfor %}
</div>
", "partials/_cards.html.twig", "C:\\Users\\theos\\Documents\\GitHub\\portfolio\\templates\\partials\\_cards.html.twig");
    }
}
