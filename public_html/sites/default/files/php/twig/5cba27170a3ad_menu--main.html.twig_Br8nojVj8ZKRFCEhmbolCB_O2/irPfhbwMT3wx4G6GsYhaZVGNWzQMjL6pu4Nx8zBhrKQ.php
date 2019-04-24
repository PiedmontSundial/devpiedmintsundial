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

/* themes/custom/sundialtheme/templates/components/menus/navbars/menu--main.html.twig */
class __TwigTemplate_a9fb24b8f263517f806f15c2fd7c2d63c62c42bb5be7f4fc0c913d2bb4ae3e21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 2, "macro" => 10, "if" => 12, "for" => 19, "set" => 22];
        $filters = [];
        $functions = ["link" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
        // line 1
        echo "
";
        // line 2
        $context["menus"] = $this;
        // line 3
        echo "
";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 10
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
            // line 11
            echo "\t";
            $context["menus"] = $this;
            // line 12
            echo "\t";
            if (($context["items"] ?? null)) {
                // line 13
                echo "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 14
                    echo "\t\t\t<div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "navbar-nav"], "method")), "html", null, true);
                    echo ">
\t\t";
                } else {
                    // line 16
                    echo "\t\t<div class=\"dropdown-menu\">
\t\t";
                }
                // line 18
                echo "
\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "\t\t\t";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 21
                        echo "\t\t\t";
                        // line 22
                        $context["item_classes"] = [0 => "dropdown-item"];
                        // line 26
                        echo "\t\t\t";
                    } else {
                        // line 27
                        echo "\t\t\t
\t\t\t";
                        // line 29
                        $context["item_classes"] = [0 => "nav-item", 1 => (($this->getAttribute(                        // line 31
$context["item"], "is_expanded", [])) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                        // line 32
$context["item"], "is_collapsed", [])) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 33
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : (""))];
                        // line 36
                        echo "\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t
\t\t\t<div";
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
\t\t\t\t";
                    // line 40
                    $context["link_classes"] = [0 => "nav-link", 1 => (($this->getAttribute(                    // line 42
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 45
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "
\t\t\t\t";
                    // line 46
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 47
                        echo "\t\t\t\t\t
\t\t\t\t\t";
                        // line 48
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
\t\t\t\t\t
\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t</div>
\t\t\t
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "
\t\t\t</div>
\t";
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
        return "themes/custom/sundialtheme/templates/components/menus/navbars/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  157 => 51,  151 => 48,  148 => 47,  146 => 46,  141 => 45,  139 => 42,  138 => 40,  134 => 38,  131 => 37,  128 => 36,  126 => 33,  125 => 32,  124 => 31,  123 => 29,  120 => 27,  117 => 26,  115 => 22,  113 => 21,  110 => 20,  106 => 19,  103 => 18,  99 => 16,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  70 => 10,  63 => 8,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{% if menu_level == 0 %}
\t\t\t<div{{ attributes.addClass('navbar-nav') }}>
\t\t{% else %}
\t\t<div class=\"dropdown-menu\">
\t\t{% endif %}

\t\t{% for item in items %}
\t\t\t{% if item.below %}
\t\t\t{%
\t\t\t\tset item_classes = [
\t\t\t\t\t'dropdown-item',
\t\t\t\t]
\t\t\t%}
\t\t\t{% else %}
\t\t\t
\t\t\t{%
\t\t\t\tset item_classes = [
\t\t\t\t\t'nav-item',
\t\t\t\t\titem.is_expanded ? 'dropdown',
\t\t\t\t\titem.is_collapsed ? 'dropdown',
\t\t\t\t\titem.in_active_trail ? 'menu-item--active-trail',
\t\t\t\t]
\t\t\t%}
\t\t\t{% endif %}
\t\t\t
\t\t\t<div{{ item.attributes.addClass(item_classes) }}>
\t\t\t\t{%
\t\t\t\t\tset link_classes = [
\t\t\t\t\t\t'nav-link',
\t\t\t\t\t\titem.in_active_trail ? 'active',
\t\t\t\t\t]
\t\t\t\t%}
\t\t\t\t{{ link(item.title, item.url, {'class': link_classes}) }}
\t\t\t\t{% if item.below %}
\t\t\t\t\t
\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t
\t\t{% endfor %}

\t\t\t</div>
\t{% endif %}
{% endmacro %}
", "themes/custom/sundialtheme/templates/components/menus/navbars/menu--main.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/menus/navbars/menu--main.html.twig");
    }
}
