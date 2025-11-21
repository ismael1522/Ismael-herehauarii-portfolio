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

/* porfolio/index.html.twig */
class __TwigTemplate_e3036629dd9a33ebb5c302d33e919cd4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "porfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "porfolio/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Portfolio Étudiant – Ismael Herehauarii";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<header>
    <div class=\"hero\">
        <h2>Étudiant en BUT Réseaux Télécommunication</h2>
        <p>Passionné par l'informatique, je suis à la recherche d’un stage ou d’une alternance.</p>
        <a href=\"#projects\" class=\"btn\">Voir mes projets</a>
    </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "
<section id=\"about\" class=\"section\">
    <h2>À propos</h2>
    <p>
        Je m’appelle <strong>Ismael Herehauarii</strong>, j’ai <strong>19 ans</strong>
        et je suis actuellement étudiant en <strong>BUT Réseaux Télécommunication</strong>.
    </p>
    <p>Je suis motivé, curieux et j’aime apprendre de nouvelles choses.</p>
</section>

<section id=\"skills\" class=\"section\">
    <h2>Compétences</h2>
    <div class=\"skills-list\">
        <span>Compétence 1</span>
        <span>Compétence 2</span>
        <span>Compétence 3</span>
        <span>Compétence 4</span>
    </div>
</section>

<section id=\"projects\" class=\"section\">
    <h2>Projets</h2>
    <div class=\"projects-container\">
        <div class=\"project-card\">
            <h3>Projet 1</h3>
            <p>Courte description : ce que tu as fait, technologies, objectif.</p>
        </div>
        <div class=\"project-card\">
            <h3>Projet 2</h3>
            <p>Courte description.</p>
        </div>
        <div class=\"project-card\">
            <h3>Projet 3</h3>
            <p>Courte description.</p>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"section\">
    <h2>Contact</h2>
    <p>
        Tu peux me contacter au : <strong>06 01 92 15 02</strong><br>
        Ou par email : <strong>ismaelherehau@gmail.com</strong>
    </p>
</section>


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
        return "porfolio/index.html.twig";
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
        return array (  160 => 19,  147 => 18,  129 => 9,  116 => 8,  102 => 5,  89 => 4,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Portfolio Étudiant – Ismael Herehauarii{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
{% endblock %}

{% block header %}
<header>
    <div class=\"hero\">
        <h2>Étudiant en BUT Réseaux Télécommunication</h2>
        <p>Passionné par l'informatique, je suis à la recherche d’un stage ou d’une alternance.</p>
        <a href=\"#projects\" class=\"btn\">Voir mes projets</a>
    </div>
</header>
{% endblock %}

{% block body %}

<section id=\"about\" class=\"section\">
    <h2>À propos</h2>
    <p>
        Je m’appelle <strong>Ismael Herehauarii</strong>, j’ai <strong>19 ans</strong>
        et je suis actuellement étudiant en <strong>BUT Réseaux Télécommunication</strong>.
    </p>
    <p>Je suis motivé, curieux et j’aime apprendre de nouvelles choses.</p>
</section>

<section id=\"skills\" class=\"section\">
    <h2>Compétences</h2>
    <div class=\"skills-list\">
        <span>Compétence 1</span>
        <span>Compétence 2</span>
        <span>Compétence 3</span>
        <span>Compétence 4</span>
    </div>
</section>

<section id=\"projects\" class=\"section\">
    <h2>Projets</h2>
    <div class=\"projects-container\">
        <div class=\"project-card\">
            <h3>Projet 1</h3>
            <p>Courte description : ce que tu as fait, technologies, objectif.</p>
        </div>
        <div class=\"project-card\">
            <h3>Projet 2</h3>
            <p>Courte description.</p>
        </div>
        <div class=\"project-card\">
            <h3>Projet 3</h3>
            <p>Courte description.</p>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"section\">
    <h2>Contact</h2>
    <p>
        Tu peux me contacter au : <strong>06 01 92 15 02</strong><br>
        Ou par email : <strong>ismaelherehau@gmail.com</strong>
    </p>
</section>


{% endblock %}
", "porfolio/index.html.twig", "/Users/herehauismael/ismael_Portfolio/templates/porfolio/index.html.twig");
    }
}
