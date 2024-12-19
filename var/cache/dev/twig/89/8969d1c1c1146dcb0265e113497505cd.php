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
class __TwigTemplate_7aeb2f91bf33e9a3a50e231a6b14a584 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield from $this->unwrap()->yieldBlock('style_cards', $context, $blocks);
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('content_cards', $context, $blocks);
        // line 95
        yield "
";
        // line 96
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}

\t\t.share-icon {
\t\t\tcursor: pointer;
\t\t\tcolor: #007bff;
\t\t\tfont-size: 1.5rem;
\t\t\tmargin-left: 10px;
\t\t}

\t\t.copied-message {
\t\t\tcolor: green;
\t\t\tfont-size: 0.9rem;
\t\t\tdisplay: none;
\t\t}

\t\t.copied-message.active {
\t\t\tdisplay: inline-block;
\t\t}

\t\t.modal-dialog {
\t\t\tposition: fixed;
\t\t\ttop: 50% !important;
\t\t\tleft: 50% !important;
\t\t\ttransform: translate(-50%, -50%) !important;
\t\t\tmargin: 0;
\t\t\tmax-width: 90%; /* Optionnel : Ajuste la largeur maximale */
\t\t}

\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
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

        // line 43
        yield "\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 45
            yield "\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 hover-card\" style=\"border-radius: 30px;\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCreation";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\">
\t\t\t\t\t<img src=\"/images/";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "image", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47), "html", null, true);
            yield "\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 47), "html", null, true);
            yield "\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t<div class=\"like share\">
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54) && CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)], "method", false, false, false, 54))) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 57
                yield "\t\t\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t\t\t\t<span class=\"js-likes\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "likes", [], "any", false, false, false, 59)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.comments", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t<span class=\"js-comments\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "comments", [], "any", false, false, false, 63)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"share-icon\" data-share-url=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" title=\"Partager\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-share\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"copied-message\">Lien copié !</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Modal pour chaque création -->
\t\t\t<div class=\"modal fade\" id=\"modalCreation";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"modalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalLabel";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 79), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t<img src=\"/images/";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "image", [], "any", false, false, false, 83), 0, [], "array", false, false, false, 83), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 83), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<p>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "description", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        yield "\t<!-- Masonry -->
\t<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

\t<!-- Bootstrap Bundle -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

\t<!-- Like Script -->
\t<script src=\"https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js\"></script>
\t<script>
\t\tfunction onClickBtnLike(event) {
\t\t\tevent.preventDefault();
\t\t\tconst url = this.href;
\t\t\tconst spanCount = this.querySelector('span.js-likes');
\t\t\tconst icone = this.querySelector('i');

\t\t\taxios.get(url).then(function (response) {
\t\t\t\tspanCount.textContent = response.data.likes;

\t\t\t\tif (icone.classList.contains('fas')) {
\t\t\t\t\ticone.classList.replace('fas', 'far');
\t\t\t\t} else {
\t\t\t\t\ticone.classList.replace('far', 'fas');
\t\t\t\t}
\t\t\t}).catch(function (error) {
\t\t\t\tif (error.response.status === 403) {
\t\t\t\t\twindow.alert('Vous ne pouvez pas liker une création si vous n\\'êtes pas connecté !');
\t\t\t\t} else {
\t\t\t\t\twindow.alert(\"Une erreur s'est produite\");
\t\t\t\t}
\t\t\t});
\t\t}

\t\tdocument.querySelectorAll('a.js-like').forEach(function(link) {
\t\t\tlink.addEventListener('click', onClickBtnLike);
\t\t});
\t</script>

\t<!-- Share Script -->
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst shareIcons = document.querySelectorAll('.share-icon');

\t\t\tshareIcons.forEach(icon => {
\t\t\t\ticon.addEventListener('click', function (event) {
\t\t\t\t\tevent.stopPropagation();

\t\t\t\t\tconst relativeUrl = this.getAttribute('data-share-url');
\t\t\t\t\tconst fullUrl = `\${window.location.origin}\${relativeUrl}`;

\t\t\t\t\tnavigator.clipboard.writeText(fullUrl).then(() => {
\t\t\t\t\t\tconst message = this.nextElementSibling;
\t\t\t\t\t\tmessage.classList.add('active');
\t\t\t\t\t\tsetTimeout(() => message.classList.remove('active'), 2000);
\t\t\t\t\t}).catch(err => console.error('Erreur lors de la copie du lien :', err));
\t\t\t\t});
\t\t\t});
\t\t});
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
        return "partials/_cards.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  282 => 97,  269 => 96,  257 => 93,  242 => 84,  236 => 83,  227 => 79,  218 => 75,  205 => 65,  200 => 63,  195 => 61,  189 => 59,  185 => 57,  181 => 55,  179 => 54,  175 => 53,  168 => 49,  161 => 47,  157 => 46,  154 => 45,  150 => 44,  147 => 43,  134 => 42,  85 => 2,  72 => 1,  61 => 96,  58 => 95,  56 => 42,  53 => 41,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block style_cards %}
\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}

\t\t.share-icon {
\t\t\tcursor: pointer;
\t\t\tcolor: #007bff;
\t\t\tfont-size: 1.5rem;
\t\t\tmargin-left: 10px;
\t\t}

\t\t.copied-message {
\t\t\tcolor: green;
\t\t\tfont-size: 0.9rem;
\t\t\tdisplay: none;
\t\t}

\t\t.copied-message.active {
\t\t\tdisplay: inline-block;
\t\t}

\t\t.modal-dialog {
\t\t\tposition: fixed;
\t\t\ttop: 50% !important;
\t\t\tleft: 50% !important;
\t\t\ttransform: translate(-50%, -50%) !important;
\t\t\tmargin: 0;
\t\t\tmax-width: 90%; /* Optionnel : Ajuste la largeur maximale */
\t\t}

\t</style>
{% endblock %}

{% block content_cards %}
\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t{% for creation in creations %}
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 hover-card\" style=\"border-radius: 30px;\" data-bs-toggle=\"modal\" data-bs-target=\"#modalCreation{{ creation.id }}\">
\t\t\t\t\t<img src=\"/images/{{ creation.image[0] }}\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"{{ creation.name }}\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">{{ creation.name }}</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t<div class=\"like share\">
\t\t\t\t\t\t\t<a href=\"{{ path('creation.like', { 'id': creation.id }) }}\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t{% if app.user and creation.isLikedByUser(app.user) %}
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<span class=\"js-likes\">{{ creation.likes | length }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('creation.comments', {'id': creation.id}) }}\" class=\"btn btn-link\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t<span class=\"js-comments\">{{ creation.comments | length }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"share-icon\" data-share-url=\"{{ path('creation_show', {'id': creation.id}) }}\" title=\"Partager\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-share\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"copied-message\">Lien copié !</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Modal pour chaque création -->
\t\t\t<div class=\"modal fade\" id=\"modalCreation{{ creation.id }}\" tabindex=\"-1\" aria-labelledby=\"modalLabel{{ creation.id }}\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalLabel{{ creation.id }}\">{{ creation.name }}</h5>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body text-center\">
\t\t\t\t\t\t\t<img src=\"/images/{{ creation.image[0] }}\" class=\"img-fluid rounded mb-3\" alt=\"{{ creation.name }}\">
\t\t\t\t\t\t\t<p>{{ creation.description }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}

{% block javascripts %}
\t<!-- Masonry -->
\t<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>

\t<!-- Bootstrap Bundle -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

\t<!-- Like Script -->
\t<script src=\"https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js\"></script>
\t<script>
\t\tfunction onClickBtnLike(event) {
\t\t\tevent.preventDefault();
\t\t\tconst url = this.href;
\t\t\tconst spanCount = this.querySelector('span.js-likes');
\t\t\tconst icone = this.querySelector('i');

\t\t\taxios.get(url).then(function (response) {
\t\t\t\tspanCount.textContent = response.data.likes;

\t\t\t\tif (icone.classList.contains('fas')) {
\t\t\t\t\ticone.classList.replace('fas', 'far');
\t\t\t\t} else {
\t\t\t\t\ticone.classList.replace('far', 'fas');
\t\t\t\t}
\t\t\t}).catch(function (error) {
\t\t\t\tif (error.response.status === 403) {
\t\t\t\t\twindow.alert('Vous ne pouvez pas liker une création si vous n\\'êtes pas connecté !');
\t\t\t\t} else {
\t\t\t\t\twindow.alert(\"Une erreur s'est produite\");
\t\t\t\t}
\t\t\t});
\t\t}

\t\tdocument.querySelectorAll('a.js-like').forEach(function(link) {
\t\t\tlink.addEventListener('click', onClickBtnLike);
\t\t});
\t</script>

\t<!-- Share Script -->
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst shareIcons = document.querySelectorAll('.share-icon');

\t\t\tshareIcons.forEach(icon => {
\t\t\t\ticon.addEventListener('click', function (event) {
\t\t\t\t\tevent.stopPropagation();

\t\t\t\t\tconst relativeUrl = this.getAttribute('data-share-url');
\t\t\t\t\tconst fullUrl = `\${window.location.origin}\${relativeUrl}`;

\t\t\t\t\tnavigator.clipboard.writeText(fullUrl).then(() => {
\t\t\t\t\t\tconst message = this.nextElementSibling;
\t\t\t\t\t\tmessage.classList.add('active');
\t\t\t\t\t\tsetTimeout(() => message.classList.remove('active'), 2000);
\t\t\t\t\t}).catch(err => console.error('Erreur lors de la copie du lien :', err));
\t\t\t\t});
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "partials/_cards.html.twig", "C:\\xampp\\htdocs\\portfolio\\commentaires\\templates\\partials\\_cards.html.twig");
    }
}
