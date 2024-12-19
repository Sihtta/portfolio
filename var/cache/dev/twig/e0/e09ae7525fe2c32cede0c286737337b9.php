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

/* pages/home.html.twig */
class __TwigTemplate_266a21b791cf79e6bf5888f0cd410552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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

        yield "Portfolio - Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
\t<style>
        .main-section {
            display: flex;
            height: 85.2vh;
            background-color: #1a1a1a; 
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .left-side {
            flex: 1;
            background: url('/images/2024-12-13-72f878a2-a5e2-4891-b30e-e599efedfda1.avif') no-repeat center center;
            background-size: cover;
        }

        .right-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 50px;
        }

        .right-side h1 {
            font-size: 4rem;
            color: white;
            margin: 0;
        }

        .right-side p {
            font-size: 1.2rem;
            margin: 20px 0 40px;
            line-height: 1.6;
        }


        .buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #fff;
            color: #1a1a1a;
        }


\t\t.fade-overlay {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: #1A1A1A;
\t\t\tz-index: 9999;
\t\t\tanimation: fadeOut 2.5s ease-in-out forwards;
\t\t}

\t\t@keyframes fadeOut {
\t\t\tfrom {
\t\t\t\topacity: 1;
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 0;
\t\t\t\tvisibility: hidden;
\t\t\t}
\t\t}

       #typed-text {
        font-size: 4rem;
        color: #fff;
        white-space: nowrap;
        overflow: hidden;
        border-right: 4px solid #fff;
        padding-right: 5px;
    }

\t</style>
\t<div class=\"fade-overlay\"></div>
\t<div class=\"main-section\">
        <div class=\"left-side\">
        </div>

        <div class=\"right-side\">
            <h1 id=\"typed-text\"></h1>
            <p>
                Découvrez les plus belles créations. Explorez, inspirez-vous et admirez !
            </p>
            <div class=\"buttons\">
                <a href=\"#\" class=\"btn\">Explorer</a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const text = \"Mon Portfolio\";  
        const element = document.getElementById('typed-text');  
        let index = 0;

        function type() {
            if (index < text.length) {
                element.textContent += text.charAt(index);  
                index++;
                setTimeout(type, 100);  
            }
        }

        type(); 
    });
</script>

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
        return "pages/home.html.twig";
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
        return array (  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Portfolio - Accueil
{% endblock %}

{% block body %}

\t<style>
        .main-section {
            display: flex;
            height: 85.2vh;
            background-color: #1a1a1a; 
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .left-side {
            flex: 1;
            background: url('/images/2024-12-13-72f878a2-a5e2-4891-b30e-e599efedfda1.avif') no-repeat center center;
            background-size: cover;
        }

        .right-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 50px;
        }

        .right-side h1 {
            font-size: 4rem;
            color: white;
            margin: 0;
        }

        .right-side p {
            font-size: 1.2rem;
            margin: 20px 0 40px;
            line-height: 1.6;
        }


        .buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #fff;
            color: #1a1a1a;
        }


\t\t.fade-overlay {
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: #1A1A1A;
\t\t\tz-index: 9999;
\t\t\tanimation: fadeOut 2.5s ease-in-out forwards;
\t\t}

\t\t@keyframes fadeOut {
\t\t\tfrom {
\t\t\t\topacity: 1;
\t\t\t}
\t\t\tto {
\t\t\t\topacity: 0;
\t\t\t\tvisibility: hidden;
\t\t\t}
\t\t}

       #typed-text {
        font-size: 4rem;
        color: #fff;
        white-space: nowrap;
        overflow: hidden;
        border-right: 4px solid #fff;
        padding-right: 5px;
    }

\t</style>
\t<div class=\"fade-overlay\"></div>
\t<div class=\"main-section\">
        <div class=\"left-side\">
        </div>

        <div class=\"right-side\">
            <h1 id=\"typed-text\"></h1>
            <p>
                Découvrez les plus belles créations. Explorez, inspirez-vous et admirez !
            </p>
            <div class=\"buttons\">
                <a href=\"#\" class=\"btn\">Explorer</a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const text = \"Mon Portfolio\";  
        const element = document.getElementById('typed-text');  
        let index = 0;

        function type() {
            if (index < text.length) {
                element.textContent += text.charAt(index);  
                index++;
                setTimeout(type, 100);  
            }
        }

        type(); 
    });
</script>

{% endblock %}
", "pages/home.html.twig", "C:\\xampp\\htdocs\\portfolio\\commentaires\\templates\\pages\\home.html.twig");
    }
}
