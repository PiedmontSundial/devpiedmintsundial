<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-local-events.html.twig */
class __TwigTemplate_33918bab8f9ec46a53e331ec1d511cd9deec341c8c510ba78b8eb6956254c020 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 18];
        $filters = ["date" => 25];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["classes"] = [0 => "clearfix"];
        // line 6
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div id=\"Mobile-local-events-title=div\" class=\"block-title-mobile mb-2 border-bottom mobile-news-and-events\" onclick=\"toggleMobileLocalEvents()\">
    UPCOMING EVENTS <img src=\"/themes/custom/sundialtheme/images/arrow_left.png\" id=\"Mobile-local-events-left-arrow\"
      class=\"mobile-left-arrow\">
    <img src=\"/themes/custom/sundialtheme/images/arrow_down.png\" id=\"Mobile-local-events-down-arrow\" class=\"mobile-down-arrow\"
      style=\"display:none;\">
  </div>
  ";
        // line 13
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 14
        echo "  ";
        $context["totalArticleNumber"] = 0;
        // line 15
        echo "  ";
        $context["articleArray"] = [];
        // line 16
        echo "  ";
        $context["myFeatured"] = 0;
        // line 17
        echo "  <div id=\"Mobile-local-events-body\" class=\"mobile-local-events-body\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 19
            echo "\t  ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 20
            echo "      <a class=\"events-temlpate-link\" href=\"/node/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["anEntity"] ?? null), "id", [])), "html", null, true);
            echo "\" rel=\"bookmark\">
        <div class=\"event-listing\" onclick=\"clickEventDiv(this)\">
          <div class=\"event-listing-date-box-container\">
            <div class=\"event-listing-date-box\">
              <div class=\"event-listing-date\">
                ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_date_of_event", []), 0, []), "value", [])), "d"), "html", null, true);
            echo "<br>
                ";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_date_of_event", []), 0, []), "value", [])), "M"), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          <div class=\"event-listing-basic float-left\">
            <div class=\"event-listing-title\">
              ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "
            </div>
          </div>
          <div class=\"event-listing-info float-right\">
            ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_venue", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "<br><br>
            ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_venue", []), "entity", []), "field_city", []), "entity", []), "name", []), "value", [])), "html", null, true);
            echo "
          </div>
        </div>
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-local-events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  122 => 37,  118 => 36,  111 => 32,  102 => 26,  98 => 25,  89 => 20,  86 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  57 => 6,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>
  <div id=\"Mobile-local-events-title=div\" class=\"block-title-mobile mb-2 border-bottom mobile-news-and-events\" onclick=\"toggleMobileLocalEvents()\">
    UPCOMING EVENTS <img src=\"/themes/custom/sundialtheme/images/arrow_left.png\" id=\"Mobile-local-events-left-arrow\"
      class=\"mobile-left-arrow\">
    <img src=\"/themes/custom/sundialtheme/images/arrow_down.png\" id=\"Mobile-local-events-down-arrow\" class=\"mobile-down-arrow\"
      style=\"display:none;\">
  </div>
  {% set realRows = rows[0][\"#rows\"] %}
  {% set totalArticleNumber = 0 %}
  {% set articleArray = [] %}
  {% set myFeatured = 0 %}
  <div id=\"Mobile-local-events-body\" class=\"mobile-local-events-body\">
    {% for rowKey, row in realRows %}
\t  {% set anEntity = row[\"#row\"]._entity %}
      <a class=\"events-temlpate-link\" href=\"/node/{{ anEntity.id }}\" rel=\"bookmark\">
        <div class=\"event-listing\" onclick=\"clickEventDiv(this)\">
          <div class=\"event-listing-date-box-container\">
            <div class=\"event-listing-date-box\">
              <div class=\"event-listing-date\">
                {{ anEntity.field_date_of_event.0.value|date(\"d\") }}<br>
                {{ anEntity.field_date_of_event.0.value|date(\"M\") }}
              </div>
            </div>
          </div>
          <div class=\"event-listing-basic float-left\">
            <div class=\"event-listing-title\">
              {{ anEntity.title.value }}
            </div>
          </div>
          <div class=\"event-listing-info float-right\">
            {{ anEntity.field_venue.entity.title.value }}<br><br>
            {{ anEntity.field_venue.entity.field_city.entity.name.value }}
          </div>
        </div>
      </a>
    {% endfor %}
  </div>
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-local-events.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-local-events.html.twig");
    }
}
