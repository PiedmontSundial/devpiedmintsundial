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

/* themes/custom/sundialtheme/templates/components/layouts/node--featured_article_container--full.html.twig */
class __TwigTemplate_6c14f361e93be9adc3d8ec3139a247b3b6c2e20468cbf3ccd1556bff43388835 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 102, "set" => 120, "for" => 121];
        $filters = ["length" => 102, "date" => 117, "raw" => 131];
        $functions = ["file_url" => 129, "range" => 149];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'date', 'raw'],
                ['file_url', 'range']
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
        // line 73
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div id=\"Title-wrapper\" class=\"row\">
    <div class=\"article-side-mark-container\">
      <div class=\"event-title-side-mark article-yellow-side-mark\">
      </div>
    </div>
    <div class=\"event-title-box article-title-box\">
      <div class=\"title-box block-title\">
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
  <script>
    var subBoxes = document.getElementsByClassName(\"event-title-box\");
\tvar subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
\tfor(var i = 0; i < subBoxes.length; i++) {
\t  var height = subBoxes[i].offsetHeight;
\t  subSideBoxes[i].style.height = height + \"px\";
\t}
    window.addEventListener(\"resize\", function() {
      var subBoxes = document.getElementsByClassName(\"event-title-box\");
      var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
      for(var i = 0; i < subBoxes.length; i++) {
\t    var height = subBoxes[i].offsetHeight;
\t    subSideBoxes[i].style.height = height + \"px\";
      }
    });
  </script>
  
  ";
        // line 102
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_subhead_1", []), "value", []))) {
            // line 103
            echo "    <div class=\"subhead-1\">
      ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_subhead_1", []), "value", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "  
  ";
        // line 108
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_subhead_2", []), "value", []))) {
            // line 109
            echo "    <div class=\"subhead-2\">
      ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_subhead_2", []), "value", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 113
        echo "  <br>
  <footer>
    <div";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null)), "html", null, true);
        echo ">
      by <span class=\"author\">";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo "</span>
      <span class=\"article-date float-right\">";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_date_filed", []), "value", [])), "F j, Y g:i a", "America/New_York"), "html", null, true);
        echo "
      </span>
    </div>
    ";
        // line 120
        $context["imageCount"] = 0;
        // line 121
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 122
            echo "      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["image"], "entity", []), "field_attributed_image", []), "entity", []), "uri", []), "value", []) != "")) {
                // line 123
                echo "        ";
                $context["imageCount"] = (($context["imageCount"] ?? null) + 1);
                // line 124
                echo "      ";
            }
            // line 125
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t<br>
    ";
        // line 127
        if (($context["imageCount"] ?? null)) {
            // line 128
            echo "      <div class=\"article-first-image\">
        <img src=\"";
            // line 129
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), 0, []), "entity", []), "field_attributed_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\"
          alt=\"";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), 0, []), "entity", []), "field_attributed_image", []), "entity", []), "alt", []), "value", [])), "html", null, true);
            echo "\" class=\"img-fluid\">
        ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), 0, []), "entity", []), "field_attributed_photo_caption", []), "value", [])));
            echo "<br>
        ";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), 0, []), "entity", []), "field_attributed_source", []), "value", [])), "html", null, true);
            echo "<br>
      </div>
    ";
        }
        // line 135
        echo "    
    ";
        // line 136
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_leader", []), "value", []))) {
            // line 137
            echo "      <div class=\"article-body\">
        ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_leader", []), "value", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 141
        echo "    <div class=\"article-body\">
      <p>";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "body", []), "value", [])));
        echo "</p>
    </div>
  </footer>
\t
\t<footer>
\t  ";
        // line 147
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 148
            echo "\t    ";
            $context["loopMax"] = (($context["imageCount"] ?? null) - 1);
            // line 149
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["loopMax"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 150
                echo "\t\t  <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), $context["i"], [], "array"), "entity", []), "field_attributed_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
                echo "\"
        alt=\"";
                // line 151
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), $context["i"], [], "array"), "entity", []), "field_attributed_image", []), "entity", []), "alt", []), "value", [])), "html", null, true);
                echo "\" class=\"img-fluid\">
      ";
                // line 152
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), $context["i"], [], "array"), "entity", []), "field_attributed_photo_caption", []), "value", [])));
                echo "<br>
\t\t  ";
                // line 153
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article", []), "entity", []), "field_attributed_photos", []), $context["i"], [], "array"), "entity", []), "field_attributed_source", []), "value", [])), "html", null, true);
                echo "<br>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t  ";
        }
        // line 156
        echo "\t</footer>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/layouts/node--featured_article_container--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 156,  238 => 155,  230 => 153,  226 => 152,  222 => 151,  217 => 150,  212 => 149,  209 => 148,  207 => 147,  199 => 142,  196 => 141,  190 => 138,  187 => 137,  185 => 136,  182 => 135,  176 => 132,  172 => 131,  168 => 130,  164 => 129,  161 => 128,  159 => 127,  156 => 126,  150 => 125,  147 => 124,  144 => 123,  141 => 122,  136 => 121,  134 => 120,  128 => 117,  124 => 116,  120 => 115,  116 => 113,  110 => 110,  107 => 109,  105 => 108,  102 => 107,  96 => 104,  93 => 103,  91 => 102,  67 => 81,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
<article{{ attributes }}>
  <div id=\"Title-wrapper\" class=\"row\">
    <div class=\"article-side-mark-container\">
      <div class=\"event-title-side-mark article-yellow-side-mark\">
      </div>
    </div>
    <div class=\"event-title-box article-title-box\">
      <div class=\"title-box block-title\">
        {{ node.field_article.entity.title.value }}
      </div>
    </div>
  </div>
  <script>
    var subBoxes = document.getElementsByClassName(\"event-title-box\");
\tvar subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
\tfor(var i = 0; i < subBoxes.length; i++) {
\t  var height = subBoxes[i].offsetHeight;
\t  subSideBoxes[i].style.height = height + \"px\";
\t}
    window.addEventListener(\"resize\", function() {
      var subBoxes = document.getElementsByClassName(\"event-title-box\");
      var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
      for(var i = 0; i < subBoxes.length; i++) {
\t    var height = subBoxes[i].offsetHeight;
\t    subSideBoxes[i].style.height = height + \"px\";
      }
    });
  </script>
  
  {% if node.field_article.entity.field_subhead_1.value|length %}
    <div class=\"subhead-1\">
      {{ node.field_article.entity.field_subhead_1.value }}
    </div>
  {% endif %}
  
  {% if node.field_article.entity.field_subhead_2.value|length %}
    <div class=\"subhead-2\">
      {{ node.field_article.entity.field_subhead_2.value }}
    </div>
  {% endif %}
  <br>
  <footer>
    <div{{ author_attributes }}>
      by <span class=\"author\">{{ node.field_article.entity.field_author.entity.title.value }}</span>
      <span class=\"article-date float-right\">{{ node.field_article.entity.field_date_filed.value|date(\"F j, Y g:i a\", \"America/New_York\") }}
      </span>
    </div>
    {% set imageCount = 0 %}
    {% for image in node.field_article.entity.field_attributed_photos %}
      {% if image.entity.field_attributed_image.entity.uri.value != '' %}
        {% set imageCount = imageCount + 1 %}
      {% endif %}
    {% endfor %}
\t\t<br>
    {% if imageCount %}
      <div class=\"article-first-image\">
        <img src=\"{{ file_url(node.field_article.entity.field_attributed_photos.0.entity.field_attributed_image.entity.uri.value) }}\"
          alt=\"{{ node.field_article.entity.field_attributed_photos.0.entity.field_attributed_image.entity.alt.value }}\" class=\"img-fluid\">
        {{ node.field_article.entity.field_attributed_photos.0.entity.field_attributed_photo_caption.value|raw }}<br>
        {{ node.field_article.entity.field_attributed_photos.0.entity.field_attributed_source.value }}<br>
      </div>
    {% endif %}
    
    {% if node.field_article.entity.field_leader.value|length %}
      <div class=\"article-body\">
        {{ node.field_article.entity.field_leader.value }}
      </div>
    {% endif %}
    <div class=\"article-body\">
      <p>{{ node.field_article.entity.body.value|raw }}</p>
    </div>
  </footer>
\t
\t<footer>
\t  {% if imageCount > 1 %}
\t    {% set loopMax = imageCount -1 %}
\t\t{% for i in 1..loopMax %}
\t\t  <img src=\"{{ file_url(node.field_article.entity.field_attributed_photos[i].entity.field_attributed_image.entity.uri.value) }}\"
        alt=\"{{ node.field_article.entity.field_attributed_photos[i].entity.field_attributed_image.entity.alt.value }}\" class=\"img-fluid\">
      {{ node.field_article.entity.field_attributed_photos[i].entity.field_attributed_photo_caption.value|raw }}<br>
\t\t  {{ node.field_article.entity.field_attributed_photos[i].entity.field_attributed_source.value }}<br>
\t\t{% endfor %}
\t  {% endif %}
\t</footer>
</article>", "themes/custom/sundialtheme/templates/components/layouts/node--featured_article_container--full.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/layouts/node--featured_article_container--full.html.twig");
    }
}
