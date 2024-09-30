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

/* default/home.html.twig */
class __TwigTemplate_d89a673b1cece39896d5f49c78d5b07b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "default/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<section id=\"articleHeader\">
    <div>
        <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/32/400/200\"></video>
        <article>
            <h3>Video title</h3>
            <p>Description de la vidéo</p>
        </article>
        <article class=\"miniatures\">
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/32/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/33/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/34/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/35/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/36/400/200\"></video>
        </article>
    </div>
    <div>
        <nav id=\"tabs\">
            <div class=\"rounded-tab left active\">CSS left tab</div>
            <div class=\"rounded-tab\">CSS round tab</div>
            <div class=\"rounded-tab right\">CSS right tab</div>
        </nav>
        <article>
            <h2>Titre du chapitre</h2>
            <aside>
                <i class=\"date\">17/06/2024</i>
                <p>notes</p>
            </aside>
        </article>
        <p>Texte de l'introduction</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
    </div>
</section>
<section id=\"chapterContent\">
    <h2>Tab navigation</h2>
    <article>

    </article>
</section>
<section id=\"comments\">
    <article class=\"comment\">
        <h4>Titre commentaire</h4>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
            <p>&starf;&starf;&starf;&star;&star;</p>
        </div>
    </article>
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
<section id=\"articleHeader\">
    <div>
        <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/32/400/200\"></video>
        <article>
            <h3>Video title</h3>
            <p>Description de la vidéo</p>
        </article>
        <article class=\"miniatures\">
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/32/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/33/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/34/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/35/400/200\"></video>
            <video src=\"https://mistertea.fr/selene/video/placeholder.mp4\" poster=\"https://picsum.photos/id/36/400/200\"></video>
        </article>
    </div>
    <div>
        <nav id=\"tabs\">
            <div class=\"rounded-tab left active\">CSS left tab</div>
            <div class=\"rounded-tab\">CSS round tab</div>
            <div class=\"rounded-tab right\">CSS right tab</div>
        </nav>
        <article>
            <h2>Titre du chapitre</h2>
            <aside>
                <i class=\"date\">17/06/2024</i>
                <p>notes</p>
            </aside>
        </article>
        <p>Texte de l'introduction</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
    </div>
</section>
<section id=\"chapterContent\">
    <h2>Tab navigation</h2>
    <article>

    </article>
</section>
<section id=\"comments\">
    <article class=\"comment\">
        <h4>Titre commentaire</h4>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste repellat dolorem perferendis numquam itaque nihil facere fugiat eveniet dicta modi?</p>
            <p>&starf;&starf;&starf;&star;&star;</p>
        </div>
    </article>
</section>


{% endblock %}", "default/home.html.twig", "D:\\SecondarySSD\\2024_projet\\docker\\moc-symfony\\templates\\default\\home.html.twig");
    }
}
