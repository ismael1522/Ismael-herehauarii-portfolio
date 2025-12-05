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

/* Loisirs/index.html.twig */
class __TwigTemplate_87ef47716be02468ba9634ea6e479b5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Loisirs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Loisirs/index.html.twig"));

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
<style>
/* Conteneur de la section loisirs */
.section#loisirs {
  width: 100%;
}

/* Liste en flex pour aligner les cartes côte à côte */
.skills-list {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  width: 100%;
}

/* Carte agrandie */
.card {
  width: 30%; /* 30% pour laisser de l’espace entre les cartes */
  height: 300px; /* Hauteur augmentée */
  perspective: 1000px;
}

/* Intérieur de la carte */
.card-inner {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.999s;
}

/* Effet flip */
.card:hover .card-inner {
  transform: rotateY(180deg);
}

/* Faces avant / arrière */
.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Face avant */
.card-front {
  background-color: #6A2C70;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #6A2C70;
  border-radius: 10px;
  justify-content: center;
  font-size: 28px; /* Texte agrandi */
  transform: rotateY(0deg);
}

/* Face arrière */
.card-back {
  color: #fff;
  display: flex;
  align-items: stretch;
  border: 10px solid #F08A5D;
  border-radius: 10px;
  justify-content: center;
  font-size: 18px; /* Texte agrandi */
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 12px;
}

/* Partie image */
.card-back .card-image {
  flex: 1 1 50%;
  background-size: cover;
  background-position: center;
  border-radius: 6px;
  min-width: 40%;
}

/* Partie texte */
.card-back .card-text {
  flex: 1 1 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px;
  box-sizing: border-box;
  color: #222;
  background: rgba(255,255,255,0.92);
  border-radius: 6px;
}

/* Responsive mobile */
@media (max-width: 520px) {
  .skills-list {
    flex-direction: column;
    align-items: center;
  }
  .card {
    width: 100%;
    height: 250px; /* Hauteur adaptée en mobile */
    margin: 10px 0;
  }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "<section id=\"loisirs\" class=\"section\">
  <h2>Loisirs</h2>
  <div class=\"skills-list\">

    <!-- Athlétisme -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Athlétisme</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/malleval.jpg"), "html", null, true);
        yield "');\"></div>
          <div class=\"card-text\">
            <p>Je pratique l'athlétisme depuis à peu près 1 an. Cette pratique me permet de me dépenser et de me donner à fond.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Informatique -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Informatique</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/informatique.jpeg"), "html", null, true);
        yield "');\"></div>
          <div class=\"card-text\">
            <p>Passionné par le développement et la résolution de problèmes. L'informatique me passionne et m'aide à être rigoureux.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Musique -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Musique</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/music.jpg"), "html", null, true);
        yield "');\"></div>
          <div class=\"card-text\">
            <p>La musique m'aide à me concentrer et à me détendre. J'écoute et pratique différents styles selon l'humeur.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
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
        return "Loisirs/index.html.twig";
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
        return array (  307 => 160,  289 => 145,  271 => 130,  258 => 119,  245 => 118,  223 => 115,  102 => 5,  89 => 4,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Portfolio Étudiant – Ismael Herehauarii{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
<style>
/* Conteneur de la section loisirs */
.section#loisirs {
  width: 100%;
}

/* Liste en flex pour aligner les cartes côte à côte */
.skills-list {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  width: 100%;
}

/* Carte agrandie */
.card {
  width: 30%; /* 30% pour laisser de l’espace entre les cartes */
  height: 300px; /* Hauteur augmentée */
  perspective: 1000px;
}

/* Intérieur de la carte */
.card-inner {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.999s;
}

/* Effet flip */
.card:hover .card-inner {
  transform: rotateY(180deg);
}

/* Faces avant / arrière */
.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

/* Face avant */
.card-front {
  background-color: #6A2C70;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #6A2C70;
  border-radius: 10px;
  justify-content: center;
  font-size: 28px; /* Texte agrandi */
  transform: rotateY(0deg);
}

/* Face arrière */
.card-back {
  color: #fff;
  display: flex;
  align-items: stretch;
  border: 10px solid #F08A5D;
  border-radius: 10px;
  justify-content: center;
  font-size: 18px; /* Texte agrandi */
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 12px;
}

/* Partie image */
.card-back .card-image {
  flex: 1 1 50%;
  background-size: cover;
  background-position: center;
  border-radius: 6px;
  min-width: 40%;
}

/* Partie texte */
.card-back .card-text {
  flex: 1 1 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px;
  box-sizing: border-box;
  color: #222;
  background: rgba(255,255,255,0.92);
  border-radius: 6px;
}

/* Responsive mobile */
@media (max-width: 520px) {
  .skills-list {
    flex-direction: column;
    align-items: center;
  }
  .card {
    width: 100%;
    height: 250px; /* Hauteur adaptée en mobile */
    margin: 10px 0;
  }
}
</style>
{% endblock %}

{% block header %}
{% endblock %}

{% block body %}
<section id=\"loisirs\" class=\"section\">
  <h2>Loisirs</h2>
  <div class=\"skills-list\">

    <!-- Athlétisme -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Athlétisme</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('{{ asset('images/malleval.jpg') }}');\"></div>
          <div class=\"card-text\">
            <p>Je pratique l'athlétisme depuis à peu près 1 an. Cette pratique me permet de me dépenser et de me donner à fond.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Informatique -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Informatique</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('{{ asset('images/informatique.jpeg') }}');\"></div>
          <div class=\"card-text\">
            <p>Passionné par le développement et la résolution de problèmes. L'informatique me passionne et m'aide à être rigoureux.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Musique -->
    <div class=\"card\">
      <div class=\"card-inner\">
        <div class=\"card-front\">
          <p>Musique</p>
        </div>
        <div class=\"card-back\">
          <div class=\"card-image\" style=\"background-image: url('{{ asset('images/music.jpg') }}');\"></div>
          <div class=\"card-text\">
            <p>La musique m'aide à me concentrer et à me détendre. J'écoute et pratique différents styles selon l'humeur.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
{% endblock %}
", "Loisirs/index.html.twig", "/Users/herehauismael/ismael_Portfolio/templates/Loisirs/index.html.twig");
    }
}
