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

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-article.html.twig */
class __TwigTemplate_25436da90d294fec3968c11056b45a839f7439ee4fc9365589264b8945283633 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 11, "if" => 13];
        $filters = ["date" => 48, "striptags" => 55, "render" => 55, "length" => 56, "slice" => 56];
        $functions = ["file_url" => 19, "date" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['date', 'striptags', 'render', 'length', 'slice'],
                ['file_url', 'date']
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
  <div class=\"block bbd-5\">
  <div class=\"block\">
    ";
        // line 9
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 10
        echo "    ";
        $context["myEntity"] = 0;
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 12
            echo "      ";
            $context["anEntity"] = $this->getAttribute($this->getAttribute($context["row"], "#row", [], "array"), "_entity", []);
            // line 13
            echo "\t  ";
            if (($this->getAttribute($this->getAttribute(($context["anEntity"] ?? null), "field_section", []), "value", []) == "general")) {
                // line 14
                echo "\t    ";
                $context["myEntity"] = ($context["anEntity"] ?? null);
                // line 15
                echo "\t  ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context["article"] = $this->getAttribute($this->getAttribute(($context["myEntity"] ?? null), "field_article", []), "entity", []);
        // line 18
        echo "    <div class=\"field-content shadow img-thumbnail\" style=\"margin-bottom: 1rem!important;\">
      <img src=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["article"] ?? null), "field_featured_image", []), "entity", []), "field_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\"
           alt=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["article"] ?? null), "field_featured_image", []), "entity", []), "field_image", []), "entity", []), "alt", []), "value", [])), "html", null, true);
        echo "\" class=\"img-fluid\">
    </div>
    <h3 class=\"bensFeaturedHeadline-3\"><a href=\"/node/";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["article"] ?? null), "id", [])), "html", null, true);
        echo "\" hreflang=\"en\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["article"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</a></h3>
    ";
        // line 23
        $context["currentTimeStamp"] = $this->getAttribute(twig_date_converter($this->env), "timestamp", []);
        // line 24
        echo "    ";
        $context["timeDifference"] = (($context["currentTimeStamp"] ?? null) - $this->getAttribute($this->getAttribute(($context["article"] ?? null), "created", []), "value", []));
        // line 25
        echo "    ";
        if ((($context["timeDifference"] ?? null) >= 31570560)) {
            // line 26
            echo "      ";
            $context["yearsAgo"] = (int) floor((($context["timeDifference"] ?? null) / 31570560));
            // line 27
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["yearsAgo"] ?? null)) . " years ago");
            // line 28
            echo "    ";
        } elseif ((($context["timeDifference"] ?? null) >= 2630880)) {
            // line 29
            echo "      ";
            $context["monthsAgo"] = (int) floor((($context["timeDifference"] ?? null) / 2630880));
            // line 30
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["monthsAgo"] ?? null)) . " months ago");
            // line 31
            echo "    ";
        } elseif ((($context["timeDifference"] ?? null) >= 604800)) {
            // line 32
            echo "      ";
            $context["weeksAgo"] = (int) floor((($context["timeDifference"] ?? null) / 604800));
            // line 33
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["weeksAgo"] ?? null)) . " weeks ago");
            // line 34
            echo "    ";
        } elseif ((($context["timeDifference"] ?? null) >= 86400)) {
            // line 35
            echo "      ";
            $context["daysAgo"] = (int) floor((($context["timeDifference"] ?? null) / 86400));
            // line 36
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["daysAgo"] ?? null)) . " days ago");
            // line 37
            echo "    ";
        } elseif ((($context["timeDifference"] ?? null) >= 3600)) {
            // line 38
            echo "      ";
            $context["hoursAgo"] = (int) floor((($context["timeDifference"] ?? null) / 3600));
            // line 39
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["hoursAgo"] ?? null)) . " hours ago");
            // line 40
            echo "    ";
        } elseif ((($context["timeDifference"] ?? null) >= 60)) {
            // line 41
            echo "      ";
            $context["minutesAgo"] = (int) floor((($context["timeDifference"] ?? null) / 60));
            // line 42
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["minutesAgo"] ?? null)) . " minutes ago");
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "\t  ";
            $context["timeMssg"] = ($this->sandbox->ensureToStringAllowed(($context["timeDifference"] ?? null)) . " seconds ago");
            // line 45
            echo "    ";
        }
        // line 46
        echo "    <div class=\"mobile-byline\">
      by <span class=\"author\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["article"] ?? null), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo "</span>,
      <span class=\"date\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["article"] ?? null), "field_date_filed", []), 0, []), "value", [])), "D, d M Y", "America/New_York"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"mobile-summary\">
      ";
        // line 51
        $context["summaryLength"] = 6300;
        // line 52
        echo "      ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["article"] ?? null), "field_featured_image", []), "entity", []), "field_image", []), "entity", []), "uri", []), "value", []) != "")) {
            // line 53
            echo "\t    ";
            $context["summaryLength"] = 200;
            // line 54
            echo "\t  ";
        }
        // line 55
        echo "      ";
        $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["article"] ?? null), "body", []), "value", []))));
        // line 56
        echo "\t  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) >= ($context["summaryLength"] ?? null))) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, $this->sandbox->ensureToStringAllowed(($context["summaryLength"] ?? null))) . "...")) : (($context["text"] ?? null))), "html", null, true);
        echo "
      <a href=\"/node/";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["article"] ?? null), "id", [])), "html", null, true);
        echo "\" class=\"views-more-link\">Read Full Story</a>
    </div>
  </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 57,  208 => 56,  205 => 55,  202 => 54,  199 => 53,  196 => 52,  194 => 51,  188 => 48,  184 => 47,  181 => 46,  178 => 45,  175 => 44,  172 => 43,  169 => 42,  166 => 41,  163 => 40,  160 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  124 => 27,  121 => 26,  118 => 25,  115 => 24,  113 => 23,  107 => 22,  102 => 20,  98 => 19,  95 => 18,  92 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  69 => 11,  66 => 10,  64 => 9,  57 => 6,  55 => 2,);
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
  <div class=\"block bbd-5\">
  <div class=\"block\">
    {% set realRows = rows[0][\"#rows\"] %}
    {% set myEntity = 0 %}
    {% for rowKey, row in realRows %}
      {% set anEntity = row[\"#row\"]._entity %}
\t  {% if anEntity.field_section.value == 'general' %}
\t    {% set myEntity = anEntity %}
\t  {% endif %}
    {% endfor %}
    {% set article = myEntity.field_article.entity %}
    <div class=\"field-content shadow img-thumbnail\" style=\"margin-bottom: 1rem!important;\">
      <img src=\"{{ file_url(article.field_featured_image.entity.field_image.entity.uri.value) }}\"
           alt=\"{{ article.field_featured_image.entity.field_image.entity.alt.value }}\" class=\"img-fluid\">
    </div>
    <h3 class=\"bensFeaturedHeadline-3\"><a href=\"/node/{{ article.id }}\" hreflang=\"en\">{{ article.title.value }}</a></h3>
    {% set currentTimeStamp = date().timestamp %}
    {% set timeDifference = currentTimeStamp - article.created.value %}
    {% if timeDifference >= 31570560 %}
      {% set yearsAgo = timeDifference // 31570560 %}
\t  {% set timeMssg = yearsAgo ~ ' years ago' %}
    {% elseif timeDifference >= 2630880 %}
      {% set monthsAgo = timeDifference // 2630880 %}
\t  {% set timeMssg = monthsAgo ~ ' months ago' %}
    {% elseif timeDifference >= 604800 %}
      {% set weeksAgo = timeDifference // 604800 %}
\t  {% set timeMssg = weeksAgo ~ ' weeks ago' %}
    {% elseif timeDifference >= 86400 %}
      {% set daysAgo = timeDifference // 86400 %}
\t  {% set timeMssg = daysAgo ~ ' days ago' %}
    {% elseif timeDifference >= 3600 %}
      {% set hoursAgo = timeDifference // 3600 %}
\t  {% set timeMssg = hoursAgo ~ ' hours ago' %}
    {% elseif timeDifference >= 60 %}
      {% set minutesAgo = timeDifference // 60 %}
\t  {% set timeMssg = minutesAgo ~ ' minutes ago' %}
    {% else %}
\t  {% set timeMssg = timeDifference ~ ' seconds ago' %}
    {% endif %}
    <div class=\"mobile-byline\">
      by <span class=\"author\">{{ article.field_author.entity.title.value }}</span>,
      <span class=\"date\">{{ article.field_date_filed.0.value|date('D, d M Y', \"America/New_York\") }}</span>
    </div>
    <div class=\"mobile-summary\">
      {% set summaryLength = 6300 %}
      {% if article.field_featured_image.entity.field_image.entity.uri.value != '' %}
\t    {% set summaryLength = 200 %}
\t  {% endif %}
      {% set text = article.body.value|render|striptags %}
\t  {{ text|length >= summaryLength ? text|slice(0, summaryLength) ~ '...' : text }}
      <a href=\"/node/{{ article.id }}\" class=\"views-more-link\">Read Full Story</a>
    </div>
  </div>
  </div>
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-article.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-article.html.twig");
    }
}
