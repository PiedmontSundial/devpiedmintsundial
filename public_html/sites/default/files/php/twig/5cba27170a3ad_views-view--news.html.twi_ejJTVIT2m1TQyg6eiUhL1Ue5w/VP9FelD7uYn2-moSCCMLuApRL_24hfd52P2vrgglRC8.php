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

/* themes/custom/sundialtheme/templates/components/views/views-view--news.html.twig */
class __TwigTemplate_46693e5ed7f34c3b70be043525af119e4a505718d2a7c36595b01c012ceac240 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 11, "if" => 14];
        $filters = ["merge" => 19, "striptags" => 39, "render" => 39, "length" => 40, "slice" => 40, "date" => 43];
        $functions = ["range" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'striptags', 'render', 'length', 'slice', 'date'],
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
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "  <div class=\"border-bottom pb-2 mb-2\">
    <div class=\"heading-style-1\">
      <a href=\"/node/";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "id", [])), "html", null, true);
            echo "\" hreflang=\"en\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "title", []), "value", [])), "html", null, true);
            echo "</a>
\t</div>
\t<div class=\"byline text-sm mb-1 pb-0 text-muted small\">by
\t  <span class=\"author\">";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "</span>
\t</div>
\t<p class=\"summary\">
\t  ";
            // line 39
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "body", []), "value", []))));
            // line 40
            echo "\t  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) >= 68)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 65) . "...")) : (($context["text"] ?? null))), "html", null, true);
            echo "
\t</p>
\t<div class=\"small\">
\t  ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["displayArticleArray"] ?? null), $context["i"], [], "array"), "field_date_filed", []), 0, []), "value", [])), "D, d M Y"), "html", null, true);
            echo "
\t</div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  172 => 43,  165 => 40,  163 => 39,  157 => 36,  149 => 33,  145 => 31,  140 => 30,  134 => 29,  131 => 28,  128 => 27,  125 => 26,  120 => 25,  117 => 24,  114 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  78 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  55 => 2,);
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
  {% for i in 0..5 %}
  <div class=\"border-bottom pb-2 mb-2\">
    <div class=\"heading-style-1\">
      <a href=\"/node/{{ displayArticleArray[i].id }}\" hreflang=\"en\">{{ displayArticleArray[i].title.value }}</a>
\t</div>
\t<div class=\"byline text-sm mb-1 pb-0 text-muted small\">by
\t  <span class=\"author\">{{ displayArticleArray[i].field_author.entity.title.value }}</span>
\t</div>
\t<p class=\"summary\">
\t  {% set text = displayArticleArray[i].body.value|render|striptags %}
\t  {{ text|length >= 68 ? text|slice(0, 65) ~ '...' : text }}
\t</p>
\t<div class=\"small\">
\t  {{ displayArticleArray[i].field_date_filed.0.value|date('D, d M Y') }}
\t</div>
  </div>
  {% endfor %}
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--news.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--news.html.twig");
    }
}
