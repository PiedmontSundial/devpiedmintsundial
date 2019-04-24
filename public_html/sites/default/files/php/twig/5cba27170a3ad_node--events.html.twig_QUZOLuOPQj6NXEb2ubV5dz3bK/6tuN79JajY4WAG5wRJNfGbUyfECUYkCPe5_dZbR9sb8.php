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

/* themes/custom/sundialtheme/templates/components/layouts/node--events.html.twig */
class __TwigTemplate_c06cbd5c4254c3e8b97bf74c2a7162d3f2c0f892376761c61611d507f7240915 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["date" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<a class=\"events-temlpate-link\" href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">
  <div class=\"event-listing\" onclick=\"clickEventDiv(this)\">
    <div class=\"event-listing-date-box-container\">
      <div class=\"event-listing-date-box\">
        <div class=\"event-listing-date\">
          ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_date", []), "value", [])), "d"), "html", null, true);
        echo "<br>
          ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_date", []), "value", [])), "M"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    <div class=\"event-listing-basic float-left\">
      <div class=\"event-listing-title\">
        ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"event-listing-info float-right\">
      ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo "<br><br>
      ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_city", []), "entity", []), "name", []), "value", [])), "html", null, true);
        echo "
    </div><br>
  </div>
</a>

<script>
  function clickEventDiv(div) {
    div.style.backgroundColor = \"#dedede\";
  }
</script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/layouts/node--events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  77 => 13,  68 => 7,  64 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"events-temlpate-link\" href=\"{{ url }}\" rel=\"bookmark\">
  <div class=\"event-listing\" onclick=\"clickEventDiv(this)\">
    <div class=\"event-listing-date-box-container\">
      <div class=\"event-listing-date-box\">
        <div class=\"event-listing-date\">
          {{ node.field_event_date.value|date(\"d\") }}<br>
          {{ node.field_event_date.value|date(\"M\") }}
        </div>
      </div>
    </div>
    <div class=\"event-listing-basic float-left\">
      <div class=\"event-listing-title\">
        {{ node.title.value }}
      </div>
    </div>
    <div class=\"event-listing-info float-right\">
      {{ node.field_venue.entity.title.value }}<br><br>
      {{ node.field_venue.entity.field_city.entity.name.value }}
    </div><br>
  </div>
</a>

<script>
  function clickEventDiv(div) {
    div.style.backgroundColor = \"#dedede\";
  }
</script>", "themes/custom/sundialtheme/templates/components/layouts/node--events.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/layouts/node--events.html.twig");
    }
}
