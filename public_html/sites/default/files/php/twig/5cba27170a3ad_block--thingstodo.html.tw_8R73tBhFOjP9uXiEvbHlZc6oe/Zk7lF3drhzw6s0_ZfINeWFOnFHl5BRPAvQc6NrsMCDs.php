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

/* themes/custom/sundialtheme/templates/components/blocks/block--thingstodo.html.twig */
class __TwigTemplate_3b9c4803053d907b41773aac656088c58336119f778ba276c8def4650e9a81a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 10, "block" => 17];
        $filters = ["clean_class" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null))))];
        // line 8
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 10
        if (($context["label"] ?? null)) {
            // line 11
            echo "  \t<div class=\"block-header\">
    \t<div class=\"block-title\">";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
\t</div>
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  
  ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "</div>";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        // line 18
        echo "    <div class=\"block-body block\">
\t\t<div class=\"item-list pt-2\">
\t\t\t<ul class=\"list-unstyled row\">
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/art-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/arts.jpg\" width=\"960\" height=\"540\" alt=\"Arts Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Art 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/art-list\">
\t\t\t\t\t\t\tArts
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/food-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/food.jpg\" width=\"960\" height=\"540\" alt=\"Food Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Food 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/food-list\">
\t\t\t\t\t\t\tFood
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/music-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/music.jpg\" width=\"960\" height=\"540\" alt=\"Music Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Music 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/music-list\">
\t\t\t\t\t\t\tMusic
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/outside-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/outdoors.jpg\" width=\"960\" height=\"540\" alt=\"Outdoors Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Outdoor 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/outside-list\">
\t\t\t\t\t\t\tOutdoors
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/blocks/block--thingstodo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  92 => 17,  88 => 85,  86 => 17,  80 => 15,  74 => 12,  71 => 11,  69 => 10,  65 => 9,  60 => 8,  58 => 5,  57 => 4,  56 => 2,);
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
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
  \t<div class=\"block-header\">
    \t<div class=\"block-title\">{{ label }}</div>
\t</div>
  {% endif %}
  {{ title_suffix }}
  
  {% block content %}
    <div class=\"block-body block\">
\t\t<div class=\"item-list pt-2\">
\t\t\t<ul class=\"list-unstyled row\">
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/art-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/arts.jpg\" width=\"960\" height=\"540\" alt=\"Arts Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Art 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/art-list\">
\t\t\t\t\t\t\tArts
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/food-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/food.jpg\" width=\"960\" height=\"540\" alt=\"Food Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Food 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/food-list\">
\t\t\t\t\t\t\tFood
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/music-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/music.jpg\" width=\"960\" height=\"540\" alt=\"Music Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Music 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/music-list\">
\t\t\t\t\t\t\tMusic
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"mb-2 col-6\">
\t\t\t\t\t<div class=\"img-thumbnail mb-2 shadow\" tabindex=\"-1\">
\t\t\t\t\t\t<a href=\"/outside-list\" class=\"img-container\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/sundialtheme/images/temp/outdoors.jpg\" width=\"960\" height=\"540\" alt=\"Outdoors Place Holder\" typeof=\"foaf:Image\" class=\"img-fluid\">
              <div class='img-credit' onclick=\"window.open('http://delta.piedmontsundial.com/credits','_blank');\">
                Outdoor 1
              </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h5 text-center\" style=\"font-weight: 900;\">
\t\t\t\t\t\t<a href=\"/outside-list\">
\t\t\t\t\t\t\tOutdoors
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
  {% endblock %}
</div>", "themes/custom/sundialtheme/templates/components/blocks/block--thingstodo.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/blocks/block--thingstodo.html.twig");
    }
}
