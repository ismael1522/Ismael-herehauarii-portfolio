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

/* base.html.twig */
class __TwigTemplate_450eac7393e8d8616b2ee8ac9163c0ca extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/materia/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 9
        yield "    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: \"Arial\", sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #222;
            padding-top: 70px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
        }

        nav ul {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        header {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #007bff, #00d4ff);
            color: white;
        }

        .btn {
            display: inline-block;
            background: white;
            padding: 10px 20px;
            color: #007bff;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: none;
        }

        .section {
            padding: 60px 40px;
        }

        .section h2 {
            margin-bottom: 20px;
            color: #007bff;
        }

        .skills-list span {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            margin: 8px;
            border-radius: 6px;
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .project-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        main {
            padding-bottom: 100px;
        }

        footer {
            text-align: center;
            padding: 30px 20px;
            background: #222;
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 999;
            font-size: 1.1rem;
        }

        footer a {
            color: #00d4ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #66e0ff;
        }

    </style>

    ";
        // line 125
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 126
        yield "</head>

<body>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_porfolio");
        yield "\">
            Mon E-Portfolio
        </a>


        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarContent\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_porfolio");
        yield "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence");
        yield "\">Compétences</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\">Loisirs</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cv");
        yield "\">CV</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_porfolio");
        yield "#contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    ";
        // line 164
        yield "    ";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 170
        yield "
    ";
        // line 172
        yield "    <main>
        ";
        // line 173
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 174
        yield "    </main>

    <footer id=\"contact\">
        <p>© 2025 – Ismael Herehauarii — Mon E-Portfolio</p>
    </footer>

    ";
        // line 180
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 181
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Mon Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 165
        yield "    <header>
        <h1>Bienvenue sur mon E-Portfolio</h1>
        <a href=\"#projects\" class=\"btn\">Voir mes projets</a>
    </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 180
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  370 => 180,  348 => 173,  333 => 165,  320 => 164,  298 => 125,  275 => 6,  263 => 181,  261 => 180,  253 => 174,  251 => 173,  248 => 172,  245 => 170,  242 => 164,  231 => 155,  225 => 152,  219 => 149,  213 => 146,  207 => 143,  193 => 132,  185 => 126,  183 => 125,  65 => 9,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Mon Portfolio{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/materia/bootstrap.min.css\" rel=\"stylesheet\">
    {# Feuille de style principale #}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: \"Arial\", sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #222;
            padding-top: 70px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
        }

        nav ul {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        header {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #007bff, #00d4ff);
            color: white;
        }

        .btn {
            display: inline-block;
            background: white;
            padding: 10px 20px;
            color: #007bff;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 20px;
            text-decoration: none;
        }

        .section {
            padding: 60px 40px;
        }

        .section h2 {
            margin-bottom: 20px;
            color: #007bff;
        }

        .skills-list span {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            margin: 8px;
            border-radius: 6px;
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .project-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        main {
            padding-bottom: 100px;
        }

        footer {
            text-align: center;
            padding: 30px 20px;
            background: #222;
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 999;
            font-size: 1.1rem;
        }

        footer a {
            color: #00d4ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #66e0ff;
        }

    </style>

    {% block stylesheets %}{% endblock %}
</head>

<body>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold\" href=\"{{ path('app_porfolio') }}\">
            Mon E-Portfolio
        </a>


        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarContent\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"{{ path('app_porfolio') }}\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"{{ path('app_competence') }}\">Compétences</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"{{ path('app_loisirs')}}\">Loisirs</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"{{ path('app_cv')}}\">CV</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link fw-bold\" href=\"{{ path('app_porfolio') }}#contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    {# HEADER optionnel #}
    {% block header %}
    <header>
        <h1>Bienvenue sur mon E-Portfolio</h1>
        <a href=\"#projects\" class=\"btn\">Voir mes projets</a>
    </header>
    {% endblock %}

    {# Contenu principal #}
    <main>
        {% block body %}{% endblock %}
    </main>

    <footer id=\"contact\">
        <p>© 2025 – Ismael Herehauarii — Mon E-Portfolio</p>
    </footer>

    {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/Users/herehauismael/ismael_Portfolio/templates/base.html.twig");
    }
}
