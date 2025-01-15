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

/* menu/index.html.twig */
class __TwigTemplate_09968e9557112bc2f7c71c05b6f7381d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu/index.html.twig", 1);
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

        yield "Hello MenuController!";
        
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

    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Menu Gratuit</h4>
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 0<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Maki</li>
              <li>Uramaki</li>
              <li>Nigiriii</li>
              <li>Sashimi</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-outline-primary\">Inscrivez-vous gratuitement</button>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Menu Premium</h4> 
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 15<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Gyoza</li>
              <li>Okonomiyaki</li>
              <li>Ramen</li>
              <li>Kōcha</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\">Commencer </button>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm border-primary\">
          <div class=\"card-header py-3 text-bg-primary border-primary\">
            <h4 class=\"my-0 fw-normal\">Menu VIP </h4>
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 29<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Yakitori</li>
              <li>Tempura</li>
              <li>Temaki</li>
              <li>Sake</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\">Contactez-nous </button>
          </div>
        </div>
      </div>
    </div>

    <h2 class=\"display-6 text-center mb-4\">Comparer les menus</h2>

    <div class=\"table-responsive\">
      <table class=\"table text-center\">
        <thead>
          <tr>
            <th style=\"width: 34%;\"></th>
            <th style=\"width: 22%;\">Menu Gratuit</th>
            <th style=\"width: 22%;\">Menu Premium</th>
            <th style=\"width: 22%;\">Menu VIP</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Pour tous</th> 
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Réservation privée“</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Accès réservé</th>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">À partager</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Membres VIP illimités</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Sécurité renforcée</th>
            <td></td>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
        
          </tr>
        </tbody>
      </table>
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
        return "menu/index.html.twig";
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

{% block title %}Hello MenuController!{% endblock %}

{% block body %}


    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Menu Gratuit</h4>
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 0<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Maki</li>
              <li>Uramaki</li>
              <li>Nigiriii</li>
              <li>Sashimi</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-outline-primary\">Inscrivez-vous gratuitement</button>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Menu Premium</h4> 
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 15<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Gyoza</li>
              <li>Okonomiyaki</li>
              <li>Ramen</li>
              <li>Kōcha</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\">Commencer </button>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm border-primary\">
          <div class=\"card-header py-3 text-bg-primary border-primary\">
            <h4 class=\"my-0 fw-normal\">Menu VIP </h4>
          </div>
          <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">€ 29<small class=\"text-body-secondary fw-light\">/1 boîte</small></h1>
            <ul class=\"list-unstyled mt-3 mb-4\">
              <li>Yakitori</li>
              <li>Tempura</li>
              <li>Temaki</li>
              <li>Sake</li>
            </ul>
            <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\">Contactez-nous </button>
          </div>
        </div>
      </div>
    </div>

    <h2 class=\"display-6 text-center mb-4\">Comparer les menus</h2>

    <div class=\"table-responsive\">
      <table class=\"table text-center\">
        <thead>
          <tr>
            <th style=\"width: 34%;\"></th>
            <th style=\"width: 22%;\">Menu Gratuit</th>
            <th style=\"width: 22%;\">Menu Premium</th>
            <th style=\"width: 22%;\">Menu VIP</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Pour tous</th> 
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Réservation privée“</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope=\"row\" class=\"text-start\">Accès réservé</th>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">À partager</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Membres VIP illimités</th>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
            <td><i class=\"bi bi-check\"></i></td>
          </tr>
          <tr>
            <th scope=\"row\" class=\"text-start\">Sécurité renforcée</th>
            <td></td>
            <td></td>
            <td><i class=\"bi bi-check\"></i></td>
        
          </tr>
        </tbody>
      </table>
    </div>


{% endblock %}
", "menu/index.html.twig", "/home/dudu/Symfony/Sushi/templates/menu/index.html.twig");
    }
}
