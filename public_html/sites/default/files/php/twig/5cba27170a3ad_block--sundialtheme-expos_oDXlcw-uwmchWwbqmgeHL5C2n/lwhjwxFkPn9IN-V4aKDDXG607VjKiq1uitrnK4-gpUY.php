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

/* themes/custom/sundialtheme/templates/components/blocks/block--sundialtheme-exposedformsundial-event-and-article-search-viewpage-1.html.twig */
class __TwigTemplate_e52353f3d85c1c9497124e48edaa2dc4dfd5614d5bff01035db38e011367bde1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29];
        $filters = ["clean_class" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class'],
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
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null))))];
        // line 35
        echo "<div>
  <form action=\"/sundial-event-and-article-search-view\" method=\"get\" id=\"views-exposed-form-sundial-event-and-article-search-view-page-1\" accept-charset=\"UTF-8\" _lpchecked=\"1\">
    <span id=\"Search-api-input-span\" style=\"margin-right:5px;\">
      <input id=\"Top-search-bar\" data-drupal-selector=\"edit-search-api-fulltext\" type=\"text\" name=\"search_api_fulltext\" placeholder=\" search\">
    </span>
    <input type=\"submit\" value=\"Go\">
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/blocks/block--sundialtheme-exposedformsundial-event-and-article-search-viewpage-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  57 => 32,  56 => 31,  55 => 29,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div>
  <form action=\"/sundial-event-and-article-search-view\" method=\"get\" id=\"views-exposed-form-sundial-event-and-article-search-view-page-1\" accept-charset=\"UTF-8\" _lpchecked=\"1\">
    <span id=\"Search-api-input-span\" style=\"margin-right:5px;\">
      <input id=\"Top-search-bar\" data-drupal-selector=\"edit-search-api-fulltext\" type=\"text\" name=\"search_api_fulltext\" placeholder=\" search\">
    </span>
    <input type=\"submit\" value=\"Go\">
  </form>
</div>
", "themes/custom/sundialtheme/templates/components/blocks/block--sundialtheme-exposedformsundial-event-and-article-search-viewpage-1.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/blocks/block--sundialtheme-exposedformsundial-event-and-article-search-viewpage-1.html.twig");
    }
}
