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

/* themes/custom/sundialtheme/templates/components/layouts/node--sundial-article.html.twig */
class __TwigTemplate_3fe2104bb89ad0ad276d4a331242e4a9c9bd20e48a6f722931000da3bbdd0944 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 103];
        $filters = ["striptags" => 103, "length" => 104, "slice" => 104, "date" => 110];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['striptags', 'length', 'slice', 'date'],
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
        // line 73
        echo "<div class=\"article-listing\">
  <div class=\"\">
    <div id=\"Title-wrapper\" class=\"row\">
      ";
        // line 80
        echo "      <div class=\"article-listing-title\">
        <a id=\"Event-title-box\" class=\"article-title-box title-box\" href=\"";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">
          ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <script>
    var subBoxes = document.getElementsByClassName(\"event-title-box\");
    var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
    for(var i = 0; i < subBoxes.length; i++) {
      var height = subBoxes[i].offsetHeight;
      subSideBoxes[i].style.height = height + \"px\";
    }
      window.addEventListener(\"resize\", function() {
        var subBoxes = document.getElementsByClassName(\"event-title-box\");
        var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
        for(var i = 0; i < subBoxes.length; i++) {
        var height = subBoxes[i].offsetHeight;
        subSideBoxes[i].style.height = height + \"px\";
        }
      });
    </script>
    <div>
      ";
        // line 103
        $context["text"] = strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", []), "value", [])));
        // line 104
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) >= 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 260) . "...")) : (($context["text"] ?? null))), "html", null, true);
        echo "
    </div>
    by <span class=\"article-listing-author\">
      ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_author", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo " 
    </span>
    <span class=\"article-date float-right\">
      ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_date_filed", []), "value", [])), "F j, Y g:i a", "America/New_York"), "html", null, true);
        echo "
    </span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/layouts/node--sundial-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 110,  100 => 107,  93 => 104,  91 => 103,  67 => 82,  63 => 81,  60 => 80,  55 => 73,);
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
<div class=\"article-listing\">
  <div class=\"\">
    <div id=\"Title-wrapper\" class=\"row\">
      {#<div class=\"article-side-mark-container event-title-box\">
        <div class=\"article-yellow-side-mark event-title-side-mark\">
        </div>
      </div>#}
      <div class=\"article-listing-title\">
        <a id=\"Event-title-box\" class=\"article-title-box title-box\" href=\"{{ url }}\" rel=\"bookmark\">
          {{ node.title.value }}
        </a>
      </div>
    </div>
    <script>
    var subBoxes = document.getElementsByClassName(\"event-title-box\");
    var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
    for(var i = 0; i < subBoxes.length; i++) {
      var height = subBoxes[i].offsetHeight;
      subSideBoxes[i].style.height = height + \"px\";
    }
      window.addEventListener(\"resize\", function() {
        var subBoxes = document.getElementsByClassName(\"event-title-box\");
        var subSideBoxes = document.getElementsByClassName(\"event-title-side-mark\");
        for(var i = 0; i < subBoxes.length; i++) {
        var height = subBoxes[i].offsetHeight;
        subSideBoxes[i].style.height = height + \"px\";
        }
      });
    </script>
    <div>
      {% set text = node.body.value|striptags %}
      {{ text|length >= 200 ? text|slice(0, 260) ~ '...' : text }}
    </div>
    by <span class=\"article-listing-author\">
      {{ node.field_author.entity.title.value }} 
    </span>
    <span class=\"article-date float-right\">
      {{ node.field_date_filed.value|date(\"F j, Y g:i a\", \"America/New_York\") }}
    </span>
  </div>
</div>
", "themes/custom/sundialtheme/templates/components/layouts/node--sundial-article.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/layouts/node--sundial-article.html.twig");
    }
}
