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

/* paiement/index.html.twig */
class __TwigTemplate_b8d740a8deacca1340dd9c63b23b38b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/index.html.twig", 1);
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

        yield "Hello PaiementController!";
        
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
   
    <div class=\"py-5 text-center\">
      
      
      <h2>Formulaire de commande</h2>
      <p class=\"lead\"> La faim vous rend fou ? Une réponse délicieuse en un clic ! </p>
    </div>

    <div class=\"row g-5\">
      <div class=\"col-md-5 col-lg-4 order-md-last\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
          <span class=\"text-primary\"> Votre panier </span>
          <span class=\"badge bg-primary rounded-pill\">3</span>
        </h4>
        <ul class=\"list-group mb-3\">
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Nom du produit </h6>
              <small class=\"text-body-secondary\">Brève description</small>
            </div>
            <span class=\"text-body-secondary\">€ 12</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Deuxième produit </h6>
              <small class=\"text-body-secondary\"> Brève description </small>
            </div>
            <span class=\"text-body-secondary\">€ 8</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Troisième produit</h6>
              <small class=\"text-body-secondary\"> Brève description</small>
            </div>
            <span class=\"text-body-secondary\">€ 5</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between bg-body-tertiary\">
            <div class=\"text-success\">
              <h6 class=\"my-0\"> Code promo </h6>
              <small> 666 </small>
            </div>
            <span class=\"text-success\">− € 5</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <span> Total (EU)</span>
            <strong> € 20</strong>
          </li>
        </ul>

        <form class=\"card p-2\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Code promo\">
            <button type=\"submit\" class=\"btn btn-secondary\"> Échanger </button>
          </div>
        </form>
      </div>
      <div class=\"col-md-7 col-lg-8\">
        <h4 class=\"mb-3\"> Adresse de facturation </h4>
        <form class=\"needs-validation\" novalidate=\"\">
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">
              <label for=\"firstName\" class=\"form-label\"> Prénom </label>
              <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"\" value=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Valid first name is required.
              </div>
            </div>

            <div class=\"col-sm-6\">
              <label for=\"lastName\" class=\"form-label\"> Nom de famille</label>
              <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"\" value=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Valid last name is required.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\"> Nom d'utilisateur</label>
              <div class=\"input-group has-validation\">
                <span class=\"input-group-text\">@</span>
                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Nom d'utilisateur\" required=\"\">
              <div class=\"invalid-feedback\">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"email\" class=\"form-label\"> E-mail <span class=\"text-body-secondary\">(Facultatif)</span></label>
              <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"catastrophe@gmail.com\">
              <div class=\"invalid-feedback\">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"address\" class=\"form-label\"> Adresse</label>
              <input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\" 0 rue Satoshi Nakamoto \" required=\"\">
              <div class=\"invalid-feedback\">
                Please enter your shipping address.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"address2\" class=\"form-label\"> Adresse 2 <span class=\"text-body-secondary\">(facultatif)</span></label>
              <input type=\"text\" class=\"form-control\" id=\"address2\" placeholder=\"Appartement ou suite\">
            </div>

            <div class=\"col-md-5\">
              <label for=\"country\" class=\"form-label\"> Pays</label>
              <select class=\"form-select\" id=\"country\" required=\"\">
                <option value=\"\">Choisir...</option>
                <option> France</option>
              </select>
              <div class=\"invalid-feedback\">
                Please select a valid country.
              </div>
            </div>

            <div class=\"col-md-4\">
              <label for=\"state\" class=\"form-label\"> Région</label>
              <select class=\"form-select\" id=\"state\" required=\"\">
                <option value=\"\">Choisir...</option>
                <option> Hauts-de-France</option>
              </select>
              <div class=\"invalid-feedback\">
                Please provide a valid state.
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"zip\" class=\"form-label\"> postal</label>
              <input type=\"text\" class=\"form-control\" id=\"zip\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class=\"my-4\">

          <div class=\"form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"same-address\">
            <label class=\"form-check-label\" for=\"same-address\">L'adresse de livraison est la même que mon adresse de facturation </label>
          </div>

          <div class=\"form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"save-info\">
            <label class=\"form-check-label\" for=\"save-info\">Enregistrer ces informations pour la prochaine fois</label>
          </div>

          <hr class=\"my-4\">

          <h4 class=\"mb-3\">Paiement </h4>

          <div class=\"my-3\">
            <div class=\"form-check\">
              <input id=\"credit\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" checked=\"\" required=\"\">
              <label class=\"form-check-label\" for=\"credit\">Carte de crédit </label>
            </div>
            <div class=\"form-check\">
              <input id=\"debit\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" required=\"\">
              <label class=\"form-check-label\" for=\"debit\"> Carte de débit</label>
            </div>
            <div class=\"form-check\">
              <input id=\"paypal\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" required=\"\">
              <label class=\"form-check-label\" for=\"paypal\">PayPal</label>
            </div>
          </div>

          <div class=\"row gy-3\">
            <div class=\"col-md-6\">
              <label for=\"cc-name\" class=\"form-label\"> Nom sur la carte</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-name\" placeholder=\"\" required=\"\">
              <small class=\"text-body-secondary\">Nom complet tel qu'il apparaît sur la carte </small>
              <div class=\"invalid-feedback\">
                Name on card is required
              </div>
            </div>

            <div class=\"col-md-6\">
              <label for=\"cc-number\" class=\"form-label\">Numéro de carte</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-number\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Credit card number is required
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"cc-expiration\" class=\"form-label\"> Expiration</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-expiration\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Expiration date required
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"cc-cvv\" class=\"form-label\">CVV</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-cvv\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Security code required
              </div>
            </div>
          </div>

          <hr class=\"my-4\">

          <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Continuer vers le paiement</button>
        </form>
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
        return "paiement/index.html.twig";
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

{% block title %}Hello PaiementController!{% endblock %}

{% block body %}

   
    <div class=\"py-5 text-center\">
      
      
      <h2>Formulaire de commande</h2>
      <p class=\"lead\"> La faim vous rend fou ? Une réponse délicieuse en un clic ! </p>
    </div>

    <div class=\"row g-5\">
      <div class=\"col-md-5 col-lg-4 order-md-last\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
          <span class=\"text-primary\"> Votre panier </span>
          <span class=\"badge bg-primary rounded-pill\">3</span>
        </h4>
        <ul class=\"list-group mb-3\">
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Nom du produit </h6>
              <small class=\"text-body-secondary\">Brève description</small>
            </div>
            <span class=\"text-body-secondary\">€ 12</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Deuxième produit </h6>
              <small class=\"text-body-secondary\"> Brève description </small>
            </div>
            <span class=\"text-body-secondary\">€ 8</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between lh-sm\">
            <div>
              <h6 class=\"my-0\"> Troisième produit</h6>
              <small class=\"text-body-secondary\"> Brève description</small>
            </div>
            <span class=\"text-body-secondary\">€ 5</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between bg-body-tertiary\">
            <div class=\"text-success\">
              <h6 class=\"my-0\"> Code promo </h6>
              <small> 666 </small>
            </div>
            <span class=\"text-success\">− € 5</span>
          </li>
          <li class=\"list-group-item d-flex justify-content-between\">
            <span> Total (EU)</span>
            <strong> € 20</strong>
          </li>
        </ul>

        <form class=\"card p-2\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Code promo\">
            <button type=\"submit\" class=\"btn btn-secondary\"> Échanger </button>
          </div>
        </form>
      </div>
      <div class=\"col-md-7 col-lg-8\">
        <h4 class=\"mb-3\"> Adresse de facturation </h4>
        <form class=\"needs-validation\" novalidate=\"\">
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">
              <label for=\"firstName\" class=\"form-label\"> Prénom </label>
              <input type=\"text\" class=\"form-control\" id=\"firstName\" placeholder=\"\" value=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Valid first name is required.
              </div>
            </div>

            <div class=\"col-sm-6\">
              <label for=\"lastName\" class=\"form-label\"> Nom de famille</label>
              <input type=\"text\" class=\"form-control\" id=\"lastName\" placeholder=\"\" value=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Valid last name is required.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\"> Nom d'utilisateur</label>
              <div class=\"input-group has-validation\">
                <span class=\"input-group-text\">@</span>
                <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Nom d'utilisateur\" required=\"\">
              <div class=\"invalid-feedback\">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"email\" class=\"form-label\"> E-mail <span class=\"text-body-secondary\">(Facultatif)</span></label>
              <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"catastrophe@gmail.com\">
              <div class=\"invalid-feedback\">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"address\" class=\"form-label\"> Adresse</label>
              <input type=\"text\" class=\"form-control\" id=\"address\" placeholder=\" 0 rue Satoshi Nakamoto \" required=\"\">
              <div class=\"invalid-feedback\">
                Please enter your shipping address.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"address2\" class=\"form-label\"> Adresse 2 <span class=\"text-body-secondary\">(facultatif)</span></label>
              <input type=\"text\" class=\"form-control\" id=\"address2\" placeholder=\"Appartement ou suite\">
            </div>

            <div class=\"col-md-5\">
              <label for=\"country\" class=\"form-label\"> Pays</label>
              <select class=\"form-select\" id=\"country\" required=\"\">
                <option value=\"\">Choisir...</option>
                <option> France</option>
              </select>
              <div class=\"invalid-feedback\">
                Please select a valid country.
              </div>
            </div>

            <div class=\"col-md-4\">
              <label for=\"state\" class=\"form-label\"> Région</label>
              <select class=\"form-select\" id=\"state\" required=\"\">
                <option value=\"\">Choisir...</option>
                <option> Hauts-de-France</option>
              </select>
              <div class=\"invalid-feedback\">
                Please provide a valid state.
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"zip\" class=\"form-label\"> postal</label>
              <input type=\"text\" class=\"form-control\" id=\"zip\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class=\"my-4\">

          <div class=\"form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"same-address\">
            <label class=\"form-check-label\" for=\"same-address\">L'adresse de livraison est la même que mon adresse de facturation </label>
          </div>

          <div class=\"form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"save-info\">
            <label class=\"form-check-label\" for=\"save-info\">Enregistrer ces informations pour la prochaine fois</label>
          </div>

          <hr class=\"my-4\">

          <h4 class=\"mb-3\">Paiement </h4>

          <div class=\"my-3\">
            <div class=\"form-check\">
              <input id=\"credit\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" checked=\"\" required=\"\">
              <label class=\"form-check-label\" for=\"credit\">Carte de crédit </label>
            </div>
            <div class=\"form-check\">
              <input id=\"debit\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" required=\"\">
              <label class=\"form-check-label\" for=\"debit\"> Carte de débit</label>
            </div>
            <div class=\"form-check\">
              <input id=\"paypal\" name=\"paymentMethod\" type=\"radio\" class=\"form-check-input\" required=\"\">
              <label class=\"form-check-label\" for=\"paypal\">PayPal</label>
            </div>
          </div>

          <div class=\"row gy-3\">
            <div class=\"col-md-6\">
              <label for=\"cc-name\" class=\"form-label\"> Nom sur la carte</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-name\" placeholder=\"\" required=\"\">
              <small class=\"text-body-secondary\">Nom complet tel qu'il apparaît sur la carte </small>
              <div class=\"invalid-feedback\">
                Name on card is required
              </div>
            </div>

            <div class=\"col-md-6\">
              <label for=\"cc-number\" class=\"form-label\">Numéro de carte</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-number\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Credit card number is required
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"cc-expiration\" class=\"form-label\"> Expiration</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-expiration\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Expiration date required
              </div>
            </div>

            <div class=\"col-md-3\">
              <label for=\"cc-cvv\" class=\"form-label\">CVV</label>
              <input type=\"text\" class=\"form-control\" id=\"cc-cvv\" placeholder=\"\" required=\"\">
              <div class=\"invalid-feedback\">
                Security code required
              </div>
            </div>
          </div>

          <hr class=\"my-4\">

          <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Continuer vers le paiement</button>
        </form>
      </div>
    </div>
 


{% endblock %}
", "paiement/index.html.twig", "/home/dudu/Symfony/Sushi/templates/paiement/index.html.twig");
    }
}
