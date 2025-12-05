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

/* cv/index.html.twig */
class __TwigTemplate_c4f6dd9e570e738b2202113d7506b51a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Mon CV - Ismael Herehauarii";
        
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
        yield "
<style>
    /* Petite personnalisation pour les titres de sections */
    .section-title {
        color: #5e84c0;
        font-weight: bold;
        text-transform: uppercase;
        border-bottom: 2px solid #5e84c0;
        padding-bottom: 10px;
        margin-bottom: 20px;
        display: inline-block;
    }

    /* Style pour la timeline des expériences/formations */
    .timeline-item {
        border-left: 3px solid #5e84c0;
        padding-left: 20px;
        margin-bottom: 30px;
        position: relative;
    }

    /* Le petit point sur la ligne temporelle */
    .timeline-item::before {
        content: '';
        width: 12px;
        height: 12px;
        background: #5e84c0;
        border-radius: 50%;
        position: absolute;
        left: -7.5px;
        top: 5px;
    }

    .date-badge {
        background-color: #333;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.85rem;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

<div class=\"container mt-5 mb-5\">
   
    <div class=\"text-center mb-5 p-5 bg-light rounded-3 shadow-sm border\">
        <h1 class=\"display-4 fw-bold text-dark\">ISMAEL Herehauarii</h1>
        <h2 class=\"h3 mt-3\" style=\"color: #5e84c0;\">ADMINISTRATEUR RÉSEAUX & SÉCURITÉ</h2>
        <p class=\"lead text-muted mt-3\">Étudiant passionné qui cherche une alternance</p>
    </div>

    <div class=\"row\">
       
        <div class=\"col-lg-8\">
           
            <div class=\"mb-5\">
                <h3 class=\"section-title\"><i class=\"fas fa-briefcase me-2\"></i>Projets & Expériences</h3>
               
                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025 - Présent</span>
                    <h4 class=\"fw-bold\">Projets Tutorés (SAÉ)</h4>
                    <h5 class=\"text-muted\">IUT de Roanne</h5>
                    <p class=\"mt-2\">
                        Mise en situation professionnelle à travers divers projets techniques :
                    </p>
                    <ul>
                        <li>Configuration d'équipements réseaux (Cisco).</li>
                        <li>Déploiement de services sous Linux.</li>
                        <li>Développement d'un site web dynamique (Portfolio).</li>
                    </ul>
                </div>

                </div>

            <div class=\"mb-5\">
                <h3 class=\"section-title\"><i class=\"fas fa-graduation-cap me-2\"></i>Formations</h3>
               
                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025 - Présent</span>
                    <h4 class=\"fw-bold\">BUT Réseaux et Télécommunications</h4>
                    <h5 class=\"text-muted\">IUT de Roanne</h5>
                    <p>Apprentissage des architectures réseaux, administration système et développement.</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025</span>
                    <h4 class=\"fw-bold\">Baccalauréat Général</h4>
                    <h5 class=\"text-muted\">Lycée Sacré-Coeur de Taravao</h5>
                    <p>Spécialités : Mathématiques, Physique. Section Européenne.</p>
                </div>
            </div>

        </div>

        <div class=\"col-lg-4\">
           
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-body\">
                    <h3 class=\"section-title h4\"><i class=\"fas fa-laptop-code me-2\"></i>Compétences</h3>
                   
                    <h5 class=\"fw-bold mt-3 h6\">Développement Web</h5>
                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        <span class=\"badge bg-primary\">HTML5 / CSS3</span>
                        <span class=\"badge bg-primary\">Symfony 6/7</span>
                        <span class=\"badge bg-secondary\">Bootstrap</span>
                    </div>

                    <h5 class=\"fw-bold mt-3 h6\">Réseaux & Systèmes</h5>
                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        <span class=\"badge bg-dark\">Cisco IOS</span>
                        <span class=\"badge bg-dark\">Linux (Debian/Ubuntu)</span>
                        <span class=\"badge bg-dark\">Windows Server</span>
                        <span class=\"badge bg-dark\">Python</span>
                    </div>

                    <h5 class=\"fw-bold mt-3 h6\">Outils & Autres</h5>
                    <div class=\"d-flex flex-wrap gap-2\">
                        <span class=\"badge bg-info text-dark\">Git / GitHub</span>
                        <span class=\"badge bg-info text-dark\">VS Code</span>
                        <span class=\"badge bg-info text-dark\">Packet Tracer</span>
                        <span class=\"badge bg-info text-dark\">Anglais (B2)</span>
                        </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm bg-light\">
                <div class=\"card-body\">
                    <h3 class=\"section-title h4\"><i class=\"fas fa-user-check me-2\"></i>Atouts</h3>
                    <ul class=\"list-unstyled mt-3\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Sérieux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>rigoureux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Curieux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Autonomie</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
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
        return "cv/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon CV - Ismael Herehauarii{% endblock %}

{% block body %}

<style>
    /* Petite personnalisation pour les titres de sections */
    .section-title {
        color: #5e84c0;
        font-weight: bold;
        text-transform: uppercase;
        border-bottom: 2px solid #5e84c0;
        padding-bottom: 10px;
        margin-bottom: 20px;
        display: inline-block;
    }

    /* Style pour la timeline des expériences/formations */
    .timeline-item {
        border-left: 3px solid #5e84c0;
        padding-left: 20px;
        margin-bottom: 30px;
        position: relative;
    }

    /* Le petit point sur la ligne temporelle */
    .timeline-item::before {
        content: '';
        width: 12px;
        height: 12px;
        background: #5e84c0;
        border-radius: 50%;
        position: absolute;
        left: -7.5px;
        top: 5px;
    }

    .date-badge {
        background-color: #333;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.85rem;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

<div class=\"container mt-5 mb-5\">
   
    <div class=\"text-center mb-5 p-5 bg-light rounded-3 shadow-sm border\">
        <h1 class=\"display-4 fw-bold text-dark\">ISMAEL Herehauarii</h1>
        <h2 class=\"h3 mt-3\" style=\"color: #5e84c0;\">ADMINISTRATEUR RÉSEAUX & SÉCURITÉ</h2>
        <p class=\"lead text-muted mt-3\">Étudiant passionné qui cherche une alternance</p>
    </div>

    <div class=\"row\">
       
        <div class=\"col-lg-8\">
           
            <div class=\"mb-5\">
                <h3 class=\"section-title\"><i class=\"fas fa-briefcase me-2\"></i>Projets & Expériences</h3>
               
                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025 - Présent</span>
                    <h4 class=\"fw-bold\">Projets Tutorés (SAÉ)</h4>
                    <h5 class=\"text-muted\">IUT de Roanne</h5>
                    <p class=\"mt-2\">
                        Mise en situation professionnelle à travers divers projets techniques :
                    </p>
                    <ul>
                        <li>Configuration d'équipements réseaux (Cisco).</li>
                        <li>Déploiement de services sous Linux.</li>
                        <li>Développement d'un site web dynamique (Portfolio).</li>
                    </ul>
                </div>

                </div>

            <div class=\"mb-5\">
                <h3 class=\"section-title\"><i class=\"fas fa-graduation-cap me-2\"></i>Formations</h3>
               
                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025 - Présent</span>
                    <h4 class=\"fw-bold\">BUT Réseaux et Télécommunications</h4>
                    <h5 class=\"text-muted\">IUT de Roanne</h5>
                    <p>Apprentissage des architectures réseaux, administration système et développement.</p>
                </div>

                <div class=\"timeline-item\">
                    <span class=\"date-badge\">2025</span>
                    <h4 class=\"fw-bold\">Baccalauréat Général</h4>
                    <h5 class=\"text-muted\">Lycée Sacré-Coeur de Taravao</h5>
                    <p>Spécialités : Mathématiques, Physique. Section Européenne.</p>
                </div>
            </div>

        </div>

        <div class=\"col-lg-4\">
           
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-body\">
                    <h3 class=\"section-title h4\"><i class=\"fas fa-laptop-code me-2\"></i>Compétences</h3>
                   
                    <h5 class=\"fw-bold mt-3 h6\">Développement Web</h5>
                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        <span class=\"badge bg-primary\">HTML5 / CSS3</span>
                        <span class=\"badge bg-primary\">Symfony 6/7</span>
                        <span class=\"badge bg-secondary\">Bootstrap</span>
                    </div>

                    <h5 class=\"fw-bold mt-3 h6\">Réseaux & Systèmes</h5>
                    <div class=\"d-flex flex-wrap gap-2 mb-3\">
                        <span class=\"badge bg-dark\">Cisco IOS</span>
                        <span class=\"badge bg-dark\">Linux (Debian/Ubuntu)</span>
                        <span class=\"badge bg-dark\">Windows Server</span>
                        <span class=\"badge bg-dark\">Python</span>
                    </div>

                    <h5 class=\"fw-bold mt-3 h6\">Outils & Autres</h5>
                    <div class=\"d-flex flex-wrap gap-2\">
                        <span class=\"badge bg-info text-dark\">Git / GitHub</span>
                        <span class=\"badge bg-info text-dark\">VS Code</span>
                        <span class=\"badge bg-info text-dark\">Packet Tracer</span>
                        <span class=\"badge bg-info text-dark\">Anglais (B2)</span>
                        </div>
                </div>
            </div>

            <div class=\"card border-0 shadow-sm bg-light\">
                <div class=\"card-body\">
                    <h3 class=\"section-title h4\"><i class=\"fas fa-user-check me-2\"></i>Atouts</h3>
                    <ul class=\"list-unstyled mt-3\">
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Sérieux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>rigoureux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Curieux</li>
                        <li class=\"mb-2\"><i class=\"fas fa-check text-success me-2\"></i>Autonomie</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}", "cv/index.html.twig", "/Users/herehauismael/ismael_Portfolio/templates/cv/index.html.twig");
    }
}
