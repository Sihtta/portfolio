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

/* partials/_carroussel.html.twig */
class __TwigTemplate_0d13b089e74cfae0b10ae6423c1b6518 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_carroussel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_carroussel.html.twig"));

        // line 1
        yield "<style>
    .carousel-image-container {
        height: 500px; 
        width: 100%; 
        overflow: hidden;
    }

    .carousel-item {
        height: 100%; 
    }

    .carousel-image-container img {
        object-fit: cover;
        width: 100%;
        height: 100%; 
    }
</style>


";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20))) {
            // line 21
            yield "<div id=\"carouselCreation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-inner\">
\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                yield "\t\t\t<div class=\"carousel-item ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) {
                    yield "active";
                }
                yield "\">
\t\t\t\t<div class=\"carousel-image-container\">
\t\t\t\t\t<img src=\"/images/";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                yield "\" class=\"d-block w-100\" alt=\"Image de la création\">
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "\t</div>

\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselCreation-";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselCreation-";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creation"]) || array_key_exists("creation", $context) ? $context["creation"] : (function () { throw new RuntimeError('Variable "creation" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>
</div>
";
        } else {
            // line 42
            yield "\t<p>No image available</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_carroussel.html.twig";
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
        return array (  140 => 42,  131 => 36,  124 => 32,  120 => 30,  102 => 26,  94 => 24,  77 => 23,  71 => 21,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .carousel-image-container {
        height: 500px; 
        width: 100%; 
        overflow: hidden;
    }

    .carousel-item {
        height: 100%; 
    }

    .carousel-image-container img {
        object-fit: cover;
        width: 100%;
        height: 100%; 
    }
</style>


{% if creation.image is not empty %}
<div id=\"carouselCreation-{{ creation.id }}\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-inner\">
\t\t{% for image in creation.image %}
\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t<div class=\"carousel-image-container\">
\t\t\t\t\t<img src=\"/images/{{ image }}\" class=\"d-block w-100\" alt=\"Image de la création\">
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>

\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselCreation-{{ creation.id }}\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Previous</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselCreation-{{ creation.id }}\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Next</span>
\t</button>
</div>
{% else %}
\t<p>No image available</p>
{% endif %}", "partials/_carroussel.html.twig", "C:\\xampp\\htdocs\\portfoliofinalfinal\\master\\templates\\partials\\_carroussel.html.twig");
    }
}
