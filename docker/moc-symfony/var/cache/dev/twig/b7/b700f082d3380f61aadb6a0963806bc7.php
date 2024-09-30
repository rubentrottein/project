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

/* landing.html.twig */
class __TwigTemplate_5153265e4db69a688b87c1052ca49e7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing.html.twig"));

        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>UI elements</title>
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"css/home.css\">
</head>
<body>
<header>
    <h1>🦔 Hedgehog School 🦔</h1>
    <nav>
        <a href=\"#home\">Home</a>
        <a href=\"articles.html\">Articles</a>
        <a href=\"#profile\">Profil</a>
        <a href=\"#connexion\" class=\"connexion\">Connexion</a>
    </nav>
</header>
<video src=\"media/1.webm\" autoplay muted loop></video>
<main>
    <section id=\"hero\">
        <h1>Des tutos et cours pour tout</h1>
        <article>
            <p>Apprendre</p>
            <p>Savoir</p>
            <p>Transmettre</p>
        </article>
        <button>S'inscrire</button>
        <a href=\"#search\">Chercher un cours</a>
    </section>
    <section>
        <h2>Nos derniers cours</h2>
        <article>
            <h3>Slider</h3>
            <aside id=\"slider\">
                <a href=\"#2\">
                    <img id='1' src=\"https://picsum.photos/id/18/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#3\">
                    <img id='2' src=\"https://picsum.photos/id/111/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#4\">
                    <img id='3' src=\"https://picsum.photos/id/213/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#1\">
                    <img id='4' src=\"https://picsum.photos/id/33/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
            </aside>
        </article>
    </section>
</main>
<section class=\"modal\">
    <article id=\"modalContent\">
        <a href=\"#\" class=\"connexion close\">X</a>
        <h2>Connexion</h2>
        <form action=\"\">
            <label for=\"email\">email
                <input type=\"text\" name=\"email\">
            </label>
            <label for=\"password\">password
                <input type=\"password\" name=\"password\">
            </label>
            <input type=\"submit\" value=\"Connexion\">
            <a href=\"#\" id=\"registerLink\">Pas encore inscrit? s'inscrire ici</a>
        </form>
    </article>
</section>
<script>

</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "landing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>UI elements</title>
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"css/home.css\">
</head>
<body>
<header>
    <h1>🦔 Hedgehog School 🦔</h1>
    <nav>
        <a href=\"#home\">Home</a>
        <a href=\"articles.html\">Articles</a>
        <a href=\"#profile\">Profil</a>
        <a href=\"#connexion\" class=\"connexion\">Connexion</a>
    </nav>
</header>
<video src=\"media/1.webm\" autoplay muted loop></video>
<main>
    <section id=\"hero\">
        <h1>Des tutos et cours pour tout</h1>
        <article>
            <p>Apprendre</p>
            <p>Savoir</p>
            <p>Transmettre</p>
        </article>
        <button>S'inscrire</button>
        <a href=\"#search\">Chercher un cours</a>
    </section>
    <section>
        <h2>Nos derniers cours</h2>
        <article>
            <h3>Slider</h3>
            <aside id=\"slider\">
                <a href=\"#2\">
                    <img id='1' src=\"https://picsum.photos/id/18/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#3\">
                    <img id='2' src=\"https://picsum.photos/id/111/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#4\">
                    <img id='3' src=\"https://picsum.photos/id/213/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
                <a href=\"#1\">
                    <img id='4' src=\"https://picsum.photos/id/33/1980/1280\" alt=\"Image d'illustration\">
                    <h4>Titre du cours</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ex, obcaecati saepe consectetur, illo dolorem iste numquam doloremque maiores beatae pariatur voluptatem libero consequuntur inventore.</p>
                </a>
            </aside>
        </article>
    </section>
</main>
<section class=\"modal\">
    <article id=\"modalContent\">
        <a href=\"#\" class=\"connexion close\">X</a>
        <h2>Connexion</h2>
        <form action=\"\">
            <label for=\"email\">email
                <input type=\"text\" name=\"email\">
            </label>
            <label for=\"password\">password
                <input type=\"password\" name=\"password\">
            </label>
            <input type=\"submit\" value=\"Connexion\">
            <a href=\"#\" id=\"registerLink\">Pas encore inscrit? s'inscrire ici</a>
        </form>
    </article>
</section>
<script>

</script>
</body>
</html>", "landing.html.twig", "D:\\SecondarySSD\\2024_projet\\docker\\moc-symfony\\templates\\landing.html.twig");
    }
}
