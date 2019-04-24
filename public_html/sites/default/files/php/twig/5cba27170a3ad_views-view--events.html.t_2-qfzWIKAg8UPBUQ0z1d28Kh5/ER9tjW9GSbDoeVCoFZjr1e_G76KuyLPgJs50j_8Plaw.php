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

/* themes/custom/sundialtheme/templates/components/views/views-view--events.html.twig */
class __TwigTemplate_e2fd2ffbe6e12fd32be099c3a8729c305c173ccbf88cdc91b8a16a2be328b4bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 8];
        $filters = ["date" => 18];
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
  ";
        // line 7
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 8
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 9
            echo "    ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 10
            echo "\t<div class=\"border-bottom pb-2 mb-2\">
\t  <div class=\"heading-style-1\">
        <a href=\"/node/";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["anEntity"] ?? null), "id", [])), "html", null, true);
            echo "\" hreflang=\"en\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "title", []), "value", [])), "html", null, true);
            echo "</a>
\t  </div>
\t  <div>
\t    <span class=\"venue-line\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_venue", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "</span>
\t  </div>
\t  <div>
      <span class=\"date-line\">";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_event_date", []), 0, []), "value", [])), "D, d M Y g:i A", "America/New_York"), "html", null, true);
            echo "</span>
\t    ";
            // line 20
            echo "\t  </div>
\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  94 => 20,  90 => 18,  84 => 15,  76 => 12,  72 => 10,  69 => 9,  64 => 8,  62 => 7,  57 => 6,  55 => 2,);
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
  {% set realRows = rows[0][\"#rows\"] %}
  {% for rowKey, row in realRows %}
    {% set anEntity = row[\"#row\"]._entity %}
\t<div class=\"border-bottom pb-2 mb-2\">
\t  <div class=\"heading-style-1\">
        <a href=\"/node/{{ anEntity.id }}\" hreflang=\"en\">{{ anEntity.title.value }}</a>
\t  </div>
\t  <div>
\t    <span class=\"venue-line\">{{ anEntity.field_venue.entity.title.value }}</span>
\t  </div>
\t  <div>
      <span class=\"date-line\">{{ anEntity.field_event_date.0.value|date('D, d M Y g:i A', \"America/New_York\") }}</span>
\t    {#<span class=\"date-line\">{{ anEntity.field_event_date.value|date('D, d M Y g:i A') }}</span>#}
\t  </div>
\t</div>
  {% endfor %}
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--events.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--events.html.twig");
    }
}
