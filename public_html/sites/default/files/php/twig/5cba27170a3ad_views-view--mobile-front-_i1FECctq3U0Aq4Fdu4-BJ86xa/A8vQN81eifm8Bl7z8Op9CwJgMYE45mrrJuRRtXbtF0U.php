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

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-local-events.html.twig */
class __TwigTemplate_09bdde02e2bd8766a72f99b619a6320aa37e8f0238797beef8867860b05acae9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 17];
        $filters = ["date" => 24];
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
  <script>
    function clickEventDiv(div) {
      div.style.backgroundColor = \"#dedede\";
    }
  </script>
  ";
        // line 12
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 13
        echo "  ";
        $context["totalArticleNumber"] = 0;
        // line 14
        echo "  ";
        $context["articleArray"] = [];
        // line 15
        echo "  ";
        $context["myFeatured"] = 0;
        // line 16
        echo "  <div id=\"Mobile-front-page-local-events-body\" class=\"mobile-front-page-local-events-body\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 18
            echo "\t  ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 19
            echo "      <a class=\"events-temlpate-link\" href=\"/node/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["anEntity"] ?? null), "id", [])), "html", null, true);
            echo "\" rel=\"bookmark\">
        <div class=\"event-listing\" onclick=\"clickEventDiv(this)\">
          <div class=\"event-listing-date-box-container\">
            <div class=\"event-listing-date-box\">
              <div class=\"event-listing-date\">
                ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_date_of_event", []), 0, []), "value", [])), "d"), "html", null, true);
            echo "<br>
                ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_date_of_event", []), 0, []), "value", [])), "M"), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          <div class=\"event-listing-basic float-left\">
            <div class=\"event-listing-title\">
              ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "
            </div>
          </div>
          <div class=\"event-listing-info float-right\">
            ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_venue", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "<br><br>
            ";
            // line 36
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
        // line 41
        echo "  </div>
</article>
<script>
  var i;
  var eventBigBoxes = document.getElementsByClassName(\"event-listing\");
  for (i=0; i<eventBigBoxes.length; i++) {
    var oldDivHeight = eventBigBoxes[i].offsetHeight;
    var newHeight = oldDivHeight;
    eventBigBoxes[i].style.height = newHeight + \"px\";
  }
  var basicBoxes = document.getElementsByClassName(\"event-listing-basic\");
  var parentBoxes = new Array();
  for (i=0; i<basicBoxes.length; i++) {
    parentBoxes[i] = basicBoxes[i].parentElement;
  }
  for (i=0; i<basicBoxes.length; i++) {
    var divHeight = parentBoxes[i].offsetHeight - 10;
    basicBoxes[i].style.height = divHeight + \"px\";
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-local-events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  121 => 36,  117 => 35,  110 => 31,  101 => 25,  97 => 24,  88 => 19,  85 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  67 => 12,  57 => 6,  55 => 2,);
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
  <script>
    function clickEventDiv(div) {
      div.style.backgroundColor = \"#dedede\";
    }
  </script>
  {% set realRows = rows[0][\"#rows\"] %}
  {% set totalArticleNumber = 0 %}
  {% set articleArray = [] %}
  {% set myFeatured = 0 %}
  <div id=\"Mobile-front-page-local-events-body\" class=\"mobile-front-page-local-events-body\">
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
<script>
  var i;
  var eventBigBoxes = document.getElementsByClassName(\"event-listing\");
  for (i=0; i<eventBigBoxes.length; i++) {
    var oldDivHeight = eventBigBoxes[i].offsetHeight;
    var newHeight = oldDivHeight;
    eventBigBoxes[i].style.height = newHeight + \"px\";
  }
  var basicBoxes = document.getElementsByClassName(\"event-listing-basic\");
  var parentBoxes = new Array();
  for (i=0; i<basicBoxes.length; i++) {
    parentBoxes[i] = basicBoxes[i].parentElement;
  }
  for (i=0; i<basicBoxes.length; i++) {
    var divHeight = parentBoxes[i].offsetHeight - 10;
    basicBoxes[i].style.height = divHeight + \"px\";
  }
</script>
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-local-events.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-local-events.html.twig");
    }
}
