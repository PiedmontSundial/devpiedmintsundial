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

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-latest-news.html.twig */
class __TwigTemplate_48bbc94c347ee050846bc3daa23ea37a200c3db1c3d0b1edc859fafe9f9d28b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 11, "if" => 14];
        $filters = ["merge" => 19, "date" => 38];
        $functions = ["range" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'date'],
                ['range']
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
        $context["totalArticleNumber"] = 0;
        // line 9
        echo "  ";
        $context["articleArray"] = [];
        // line 10
        echo "  ";
        $context["myFeatured"] = 0;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 12
            echo "    ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 13
            echo "    ";
            $context["rowNumber"] = (($context["rowNumber"] ?? null) + 1);
            // line 14
            echo "\t";
            if (($this->getAttribute(($context["anEntity"] ?? null), "bundle", [], "method") == "featured_article_container")) {
                // line 15
                echo "\t  ";
                if (($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_section", []), "value", []) == "general")) {
                    // line 16
                    echo "\t    ";
                    $context["myFeatured"] = ($context["anEntity"] ?? null);
                    // line 17
                    echo "\t  ";
                }
                // line 18
                echo "\t";
            } elseif (($this->getAttribute(($context["anEntity"] ?? null), "bundle", [], "method") == "sundial_article")) {
                // line 19
                echo "\t  ";
                $context["articleArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["articleArray"] ?? null)), [0 => ($context["anEntity"] ?? null)]);
                // line 20
                echo "\t  ";
                $context["totalArticleNumber"] = (($context["totalArticleNumber"] ?? null) + 1);
                // line 21
                echo "\t";
            }
            // line 22
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  ";
        $context["currentTopArticleIndex"] = 1;
        // line 24
        echo "  ";
        $context["displayArticleArray"] = [];
        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "    ";
            if (($this->getAttribute($context["article"], "id", []) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["myFeatured"] ?? null), "field_article", []), "entity", []), "id", []))) {
                // line 27
                echo "      ";
                $context["displayArticleArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["displayArticleArray"] ?? null)), [0 => $context["article"]]);
                // line 28
                echo "\t";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <div id=\"Mobile-front-page-latest-news-body\" class=\"mobile-front-page-latest-news-body\" style=\"margin-top: .5rem;\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "    <div class=\"border-bottom\">
      <div class=\"heading-style-mobile\">
        <a href=\"/node/";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "id", [])), "html", null, true);
            echo "\" hreflang=\"en\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "title", []), "value", [])), "html", null, true);
            echo "</a>
      </div>
      <div class=\"mobile-byline\">
        <div style=\"float: left;\">by <span class=\"author\">";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "</span></div>
        <div class=\"date\" style=\"float: right;\">";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_filed_on", []), 0, []), "value", [])), "M. j"), "html", null, true);
            echo "</div>
      </div><br>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-latest-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  163 => 38,  159 => 37,  151 => 34,  147 => 32,  143 => 31,  140 => 30,  134 => 29,  131 => 28,  128 => 27,  125 => 26,  120 => 25,  117 => 24,  114 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  55 => 2,);
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
  {% set totalArticleNumber = 0 %}
  {% set articleArray = [] %}
  {% set myFeatured = 0 %}
  {% for rowKey, row in realRows %}
    {% set anEntity = row[\"#row\"]._entity %}
    {% set rowNumber = rowNumber + 1 %}
\t{% if anEntity.bundle() == 'featured_article_container' %}
\t  {% if anEntity.field_section.value == 'general' %}
\t    {% set myFeatured = anEntity %}
\t  {% endif %}
\t{% elseif anEntity.bundle() == 'sundial_article' %}
\t  {% set articleArray = articleArray|merge([anEntity]) %}
\t  {% set totalArticleNumber = totalArticleNumber + 1 %}
\t{% endif %}
  {% endfor %}
  {% set currentTopArticleIndex = 1 %}
  {% set displayArticleArray = [] %}
  {% for article in articleArray %}
    {% if article.id != myFeatured.field_article.entity.id %}
      {% set displayArticleArray = displayArticleArray|merge([article]) %}
\t{% endif %}
  {% endfor %}
  <div id=\"Mobile-front-page-latest-news-body\" class=\"mobile-front-page-latest-news-body\" style=\"margin-top: .5rem;\">
    {% for i in 0..5 %}
    <div class=\"border-bottom\">
      <div class=\"heading-style-mobile\">
        <a href=\"/node/{{ displayArticleArray[i].id }}\" hreflang=\"en\">{{ displayArticleArray[i].title.value }}</a>
      </div>
      <div class=\"mobile-byline\">
        <div style=\"float: left;\">by <span class=\"author\">{{ displayArticleArray[i].field_author.entity.title.value }}</span></div>
        <div class=\"date\" style=\"float: right;\">{{ displayArticleArray[i].field_filed_on.0.value|date('M. j') }}</div>
      </div><br>
    </div>
    {% endfor %}
  </div>
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-latest-news.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-front-page-latest-news.html.twig");
    }
}
