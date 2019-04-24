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

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-latest-news.html.twig */
class __TwigTemplate_26b795112bba7aa3e73d69eb63c020c41e146544cb0c26a7345f8a099b3c14a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 16, "if" => 19];
        $filters = ["merge" => 24, "date" => 43];
        $functions = ["range" => 36];

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
  <div id=\"Mobile-latest-news-title-div\" class=\"block-title-mobile border-bottom mobile-news-and-events\" onclick=\"toggleMobileLatestNews()\">
    LATEST NEWS <img src=\"/themes/custom/sundialtheme/images/arrow_left.png\" id=\"Mobile-latest-news-left-arrow\" class=\"mobile-left-arrow\">
    <img src=\"/themes/custom/sundialtheme/images/arrow_down.png\" id=\"Mobile-latest-news-down-arrow\" class=\"mobile-down-arrow\"
      style=\"display:none;\">
  </div>
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
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 17
            echo "    ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 18
            echo "    ";
            $context["rowNumber"] = (($context["rowNumber"] ?? null) + 1);
            // line 19
            echo "\t";
            if (($this->getAttribute(($context["anEntity"] ?? null), "bundle", [], "method") == "featured_article_container")) {
                // line 20
                echo "\t  ";
                if (($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_section", []), "value", []) == "general")) {
                    // line 21
                    echo "\t    ";
                    $context["myFeatured"] = ($context["anEntity"] ?? null);
                    // line 22
                    echo "\t  ";
                }
                // line 23
                echo "\t";
            } elseif (($this->getAttribute(($context["anEntity"] ?? null), "bundle", [], "method") == "sundial_article")) {
                // line 24
                echo "\t  ";
                $context["articleArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["articleArray"] ?? null)), [0 => ($context["anEntity"] ?? null)]);
                // line 25
                echo "\t  ";
                $context["totalArticleNumber"] = (($context["totalArticleNumber"] ?? null) + 1);
                // line 26
                echo "\t";
            }
            // line 27
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  ";
        $context["currentTopArticleIndex"] = 1;
        // line 29
        echo "  ";
        $context["displayArticleArray"] = [];
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "    ";
            if (($this->getAttribute($context["article"], "id", []) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["myFeatured"] ?? null), "field_article", []), "entity", []), "id", []))) {
                // line 32
                echo "      ";
                $context["displayArticleArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["displayArticleArray"] ?? null)), [0 => $context["article"]]);
                // line 33
                echo "\t";
            }
            // line 34
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  <div id=\"Mobile-latest-news-body\" class=\"mobile-latest-news-body\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "    <div class=\"border-bottom\">
      <div class=\"heading-style-mobile\">
        <a href=\"/node/";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "id", [])), "html", null, true);
            echo "\" hreflang=\"en\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "title", []), "value", [])), "html", null, true);
            echo "</a>
      </div>
      <div class=\"mobile-byline\">
        <div style=\"float: left;\">by <span class=\"author\">";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "</span></div>
        <div class=\"date\" style=\"float: right;\">";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_filed_on", []), 0, []), "value", [])), "M. j"), "html", null, true);
            echo "</div>
      </div><br>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-latest-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 47,  168 => 43,  164 => 42,  156 => 39,  152 => 37,  148 => 36,  145 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  125 => 30,  122 => 29,  119 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  67 => 12,  57 => 6,  55 => 2,);
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
  <div id=\"Mobile-latest-news-title-div\" class=\"block-title-mobile border-bottom mobile-news-and-events\" onclick=\"toggleMobileLatestNews()\">
    LATEST NEWS <img src=\"/themes/custom/sundialtheme/images/arrow_left.png\" id=\"Mobile-latest-news-left-arrow\" class=\"mobile-left-arrow\">
    <img src=\"/themes/custom/sundialtheme/images/arrow_down.png\" id=\"Mobile-latest-news-down-arrow\" class=\"mobile-down-arrow\"
      style=\"display:none;\">
  </div>
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
  <div id=\"Mobile-latest-news-body\" class=\"mobile-latest-news-body\">
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
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-latest-news.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-latest-news.html.twig");
    }
}
