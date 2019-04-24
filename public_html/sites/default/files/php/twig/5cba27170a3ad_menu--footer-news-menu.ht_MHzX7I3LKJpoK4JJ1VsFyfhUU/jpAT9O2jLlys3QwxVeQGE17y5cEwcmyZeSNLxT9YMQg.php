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

/* themes/custom/sundialtheme/templates/components/menus/nav/menu--footer-news-menu.html.twig */
class __TwigTemplate_17476e2b8a2e8c2e51774acd3029d66c8eaf4174a902dc6e9d0dd2884ecf27ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 31, "set" => 39, "for" => 40];
        $filters = [];
        $functions = ["link" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                [],
                ['link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        // line 106
        echo "
<div class=\"footer-social-section\"> Follow Us On
    <a href=\"https://www.facebook.com/piedmontsundialnews/\">
      <img src=\"/themes/custom/sundialtheme/images/social_facebook.png\" class=\"social-links\">
    </a>
    <a href=\"https://twitter.com/piedmontsundial?lang=en\">
      <img src=\"/themes/custom/sundialtheme/images/social_twitter.png\" class=\"social-links\">
    </a>
</div>";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    <div class=\"row\">
      <div class=\"col-6\">
        ";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "          <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "topics-menu footer-menu"], "method")), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 37
                    echo "          <ul class=\"menu footer-menu\">
        ";
                }
                // line 39
                echo "        ";
                $context["itemCount"] = 0;
                // line 40
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "          ";
                    if ((($context["itemCount"] ?? null) < 5)) {
                        // line 42
                        echo "            ";
                        // line 43
                        $context["classes"] = [0 => "nav-item", 1 => (($this->getAttribute(                        // line 45
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                        // line 46
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                        // line 47
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => "border-bottom"];
                        // line 51
                        echo "            <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
              ";
                        // line 53
                        $context["link_classes"] = [0 => "nav-link", 1 => (($this->getAttribute(                        // line 55
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 58
                        echo "              ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
              ";
                        // line 59
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 60
                            echo "                ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
              ";
                        }
                        // line 62
                        echo "            </li>
          ";
                    }
                    // line 64
                    echo "          ";
                    $context["itemCount"] = (($context["itemCount"] ?? null) + 1);
                    // line 65
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "        </ul>
      </div>
      <div class=\"col-6\">
        ";
                // line 69
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 70
                    echo "          <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "topics-menu footer-menu"], "method")), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 72
                    echo "          <ul class=\"menu footer-menu\">
        ";
                }
                // line 74
                echo "        ";
                $context["itemCount"] = 0;
                // line 75
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 76
                    echo "          ";
                    if ((($context["itemCount"] ?? null) > 4)) {
                        // line 77
                        echo "            ";
                        // line 78
                        $context["classes"] = [0 => "nav-item", 1 => (($this->getAttribute(                        // line 80
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                        // line 81
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                        // line 82
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => "border-bottom"];
                        // line 86
                        echo "            <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
              ";
                        // line 88
                        $context["link_classes"] = [0 => "nav-link", 1 => (($this->getAttribute(                        // line 90
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 93
                        echo "              ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                        echo "
              ";
                        // line 94
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 95
                            echo "                ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
              ";
                        }
                        // line 97
                        echo "            </li>
          ";
                    }
                    // line 99
                    echo "          ";
                    $context["itemCount"] = (($context["itemCount"] ?? null) + 1);
                    // line 100
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "        </ul>
      </div>
    </div>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/menus/nav/menu--footer-news-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 101,  228 => 100,  225 => 99,  221 => 97,  215 => 95,  213 => 94,  208 => 93,  206 => 90,  205 => 88,  200 => 86,  198 => 82,  197 => 81,  196 => 80,  195 => 78,  193 => 77,  190 => 76,  185 => 75,  182 => 74,  178 => 72,  172 => 70,  170 => 69,  165 => 66,  159 => 65,  156 => 64,  152 => 62,  146 => 60,  144 => 59,  139 => 58,  137 => 55,  136 => 53,  131 => 51,  129 => 47,  128 => 46,  127 => 45,  126 => 43,  124 => 42,  121 => 41,  116 => 40,  113 => 39,  109 => 37,  103 => 35,  101 => 34,  97 => 32,  94 => 31,  91 => 30,  77 => 29,  65 => 106,  60 => 27,  57 => 22,  55 => 21,);
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
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    <div class=\"row\">
      <div class=\"col-6\">
        {% if menu_level == 0 %}
          <ul{{ attributes.addClass('topics-menu footer-menu') }}>
        {% else %}
          <ul class=\"menu footer-menu\">
        {% endif %}
        {% set itemCount = 0 %}
        {% for item in items %}
          {% if itemCount < 5 %}
            {%
              set classes = [
                'nav-item',
                item.is_expanded ? 'menu-item--expanded',
                item.is_collapsed ? 'menu-item--collapsed',
                item.in_active_trail ? 'menu-item--active-trail',
                'border-bottom',
              ]
            %}
            <li{{ item.attributes.addClass(classes) }}>
              {%
                set link_classes = [
                  'nav-link',
                  item.in_active_trail ? 'active',
                ]
              %}
              {{ link(item.title, item.url, {'class': link_classes}) }}
              {% if item.below %}
                {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
              {% endif %}
            </li>
          {% endif %}
          {% set itemCount = itemCount + 1 %}
        {% endfor %}
        </ul>
      </div>
      <div class=\"col-6\">
        {% if menu_level == 0 %}
          <ul{{ attributes.addClass('topics-menu footer-menu') }}>
        {% else %}
          <ul class=\"menu footer-menu\">
        {% endif %}
        {% set itemCount = 0 %}
        {% for item in items %}
          {% if itemCount > 4 %}
            {%
              set classes = [
                'nav-item',
                item.is_expanded ? 'menu-item--expanded',
                item.is_collapsed ? 'menu-item--collapsed',
                item.in_active_trail ? 'menu-item--active-trail',
                'border-bottom',
              ]
            %}
            <li{{ item.attributes.addClass(classes) }}>
              {%
                set link_classes = [
                  'nav-link',
                  item.in_active_trail ? 'active',
                ]
              %}
              {{ link(item.title, item.url, {'class': link_classes}) }}
              {% if item.below %}
                {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
              {% endif %}
            </li>
          {% endif %}
          {% set itemCount = itemCount + 1 %}
        {% endfor %}
        </ul>
      </div>
    </div>
  {% endif %}
{% endmacro %}

<div class=\"footer-social-section\"> Follow Us On
    <a href=\"https://www.facebook.com/piedmontsundialnews/\">
      <img src=\"/themes/custom/sundialtheme/images/social_facebook.png\" class=\"social-links\">
    </a>
    <a href=\"https://twitter.com/piedmontsundial?lang=en\">
      <img src=\"/themes/custom/sundialtheme/images/social_twitter.png\" class=\"social-links\">
    </a>
</div>", "themes/custom/sundialtheme/templates/components/menus/nav/menu--footer-news-menu.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/menus/nav/menu--footer-news-menu.html.twig");
    }
}
