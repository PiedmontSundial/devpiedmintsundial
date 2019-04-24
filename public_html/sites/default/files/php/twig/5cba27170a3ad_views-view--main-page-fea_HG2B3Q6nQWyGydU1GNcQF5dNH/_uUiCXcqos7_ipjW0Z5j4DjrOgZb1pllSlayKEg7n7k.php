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

/* themes/custom/sundialtheme/templates/components/views/views-view--main-page-featured-block.html.twig */
class __TwigTemplate_ad2a7f8f7b9ad2db0e6da9cb945baa64e5fab8c466f7fcb0f097e26bcae9bb45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 13, "if" => 15];
        $filters = ["merge" => 17, "length" => 40];
        $functions = ["range" => 45, "file_url" => 73];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['merge', 'length'],
                ['range', 'file_url']
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
        echo " id=\"Right-main-featured-element\">
  ";
        // line 7
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 8
        echo "  ";
        $context["performerArray"] = [];
        // line 9
        echo "  ";
        $context["venueArray"] = [];
        // line 10
        echo "  ";
        $context["eventArray"] = [];
        // line 11
        echo "  ";
        $context["hasPerformer"] = 0;
        // line 12
        echo "  ";
        $context["hasVenue"] = 0;
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 14
            echo "    ";
            $context["aNode"] = $this->getAttribute($context["row"], "#node", [], "array");
            // line 15
            echo "\t";
            if (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_performer")) {
                // line 16
                echo "\t  ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aNode"] ?? null), "field_featured_carousel_performe", []), "entity", []), "id", []) != $this->getAttribute(($context["aNode"] ?? null), "id", []))) {
                    // line 17
                    echo "\t    ";
                    $context["performerArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["performerArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                    // line 18
                    echo "\t\t";
                    $context["hasPerformer"] = 1;
                    // line 19
                    echo "\t  ";
                }
                // line 20
                echo "\t";
            } elseif (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_venue")) {
                // line 21
                echo "\t  ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aNode"] ?? null), "field_featured_carousel_venue", []), "entity", []), "id", []) != $this->getAttribute(($context["aNode"] ?? null), "id", []))) {
                    // line 22
                    echo "\t    ";
                    $context["venueArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["venueArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                    // line 23
                    echo "\t\t";
                    $context["hasVenue"] = 1;
                    // line 24
                    echo "      ";
                }
                // line 25
                echo "    ";
            } elseif (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_event")) {
                // line 26
                echo "\t  ";
                $context["eventArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["eventArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                // line 27
                echo "\t";
            }
            // line 28
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  ";
        $context["masterArray"] = [];
        // line 30
        echo "  ";
        $context["nonEventCount"] = 0;
        // line 31
        echo "  ";
        if (($context["hasPerformer"] ?? null)) {
            // line 32
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["performerArray"] ?? null), 0, [])]);
            // line 33
            echo "\t";
            $context["nonEventCount"] = (($context["nonEventCount"] ?? null) + 1);
            // line 34
            echo "  ";
        }
        // line 35
        echo "  ";
        if (($context["hasVenue"] ?? null)) {
            // line 36
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["venueArray"] ?? null), 0, [])]);
            // line 37
            echo "\t";
            $context["nonEventCount"] = (($context["nonEventCount"] ?? null) + 1);
            // line 38
            echo "  ";
        }
        // line 39
        echo "  ";
        $context["slotsToFill"] = (5 - ($context["nonEventCount"] ?? null));
        // line 40
        echo "  ";
        if ((($context["slotsToFill"] ?? null) <= twig_length_filter($this->env, ($context["eventArray"] ?? null)))) {
            // line 41
            echo "    ";
            $context["remainderIndex"] = (($context["slotsToFill"] ?? null) - 1);
            // line 42
            echo "  ";
        } else {
            // line 43
            echo "    ";
            $context["remainderIndex"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["eventArray"] ?? null))) - 1);
            // line 44
            echo "  ";
        }
        // line 45
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["remainderIndex"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["eventArray"] ?? null), $context["i"], [], "array")]);
            // line 47
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  ";
        $context["masterIndex"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null))) - 1);
        // line 49
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["masterIndex"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_performer")) {
                // line 51
                echo "\t  ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "field_performer_photo", []), "entity", []), "field_image", []), "entity", []);
                // line 52
                echo "\t  ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "title", []), "value", []);
                // line 53
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "id", []);
                // line 54
                echo "\t";
            } elseif (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_venue")) {
                // line 55
                echo "\t  ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "field_venue_cover_photo", []), "entity", []), "field_image", []), "entity", []);
                // line 56
                echo "\t  ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "title", []), "value", []);
                // line 57
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "id", []);
                // line 58
                echo "\t";
            } elseif (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_event")) {
                // line 59
                echo "\t  ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "field_event_image", []), "entity", []), "field_image", []), "entity", []);
                // line 60
                echo "\t  ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "title", []), "value", []);
                // line 61
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "id", []);
                // line 62
                echo "\t";
            }
            // line 63
            echo "    <div  class=\"right-main-featured-element\">
      <div class=\"block-title\" style=\"text-align: left;\">
        Featured
      </div>
      <a href=\"/node/";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodeId"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"featured-element\">
          <div>
            <div class=\"mx-auto\">
              <figure class=\"mx-auto\">
                <div class=\"featured-element-image-container\">
                  <img class=\"right-main-featured-element-image\" src=\"";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elementImage"] ?? null), "uri", []), "value", []))]), "html", null, true);
            echo "\"
                    alt=\"";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elementImage"] ?? null), "uri", []), "value", [])), "html", null, true);
            echo "\">
                </div>
                <figcaption class=\"right-main-featured-element-title\"\">";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["elementTitle"] ?? null)), "html", null, true);
            echo "</figcaption>
              </figure>
            </div>
          </div>
        </div>
        ";
            // line 82
            echo "        ";
            // line 83
            echo "      </a>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "  
  <script>
    var myBoxes = document.getElementsByClassName(\"featured-element-image-container\");
    var myBoxWidth = myBoxes[0].offsetWidth;
    for(var i = 0; i < myBoxes.length; i++) {
      myBoxes[i].style.height = myBoxWidth + \"px\";
    }
    
    var containers = document.getElementsByClassName(\"right-main-featured-element\");
    for(var i = 0; i < containers.length; i++) {
      containers[i].style.display = \"none\";
      containers[i].style.visibility = \"visible\";
    }
    containers[0].style.display = \"block\";
    
    window.addEventListener(\"resize\", function() {
      for(var i = 0; i < containers.length; i++) {
        if (containers[i].style.display == \"block\") {
          var currentIndex = i;
        }
        containers[i].style.visibility = \"hidden\";
        containers[i].style.display = \"block\";
      }
      
      var myBoxes = document.getElementsByClassName(\"featured-element-image-container\");
      var myBoxWidth = 0;
      for(var i = 0; i < myBoxes.length; i++) {
        if(myBoxes[i].offsetWidth > myBoxWidth) {
          myBoxWidth = myBoxes[i].offsetWidth;
        }
      }
      for(var i = 0; i < myBoxes.length; i++) {
        myBoxes[i].style.height = myBoxWidth + \"px\";
      }
      
      for(var i = 0; i < containers.length; i++) {
        containers[i].style.display = \"none\";
        containers[i].style.visibility = \"visible\";
      }
      
      containers[currentIndex].style.display = \"block\";
      
    });
    
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs() {
      showDivs(slideIndex += 1);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName(\"right-main-featured-element\");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = \"none\";
      }
      x[slideIndex-1].style.display = \"block\";
    }
    
    setInterval(plusDivs, 3000);
  </script>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--main-page-featured-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 86,  275 => 83,  273 => 82,  265 => 76,  260 => 74,  256 => 73,  247 => 67,  241 => 63,  238 => 62,  235 => 61,  232 => 60,  229 => 59,  226 => 58,  223 => 57,  220 => 56,  217 => 55,  214 => 54,  211 => 53,  208 => 52,  205 => 51,  202 => 50,  197 => 49,  194 => 48,  188 => 47,  185 => 46,  180 => 45,  177 => 44,  174 => 43,  171 => 42,  168 => 41,  165 => 40,  162 => 39,  159 => 38,  156 => 37,  153 => 36,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  126 => 28,  123 => 27,  120 => 26,  117 => 25,  114 => 24,  111 => 23,  108 => 22,  105 => 21,  102 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 6,  55 => 2,);
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
<article{{ attributes.addClass(classes) }} id=\"Right-main-featured-element\">
  {% set realRows = rows[0][\"#rows\"] %}
  {% set performerArray = [] %}
  {% set venueArray = [] %}
  {% set eventArray = [] %}
  {% set hasPerformer = 0 %}
  {% set hasVenue = 0 %}
  {% for rowKey, row in realRows %}
    {% set aNode = row[\"#node\"] %}
\t{% if aNode.bundle() == 'featured_performer' %}
\t  {% if aNode.field_featured_carousel_performe.entity.id != aNode.id %}
\t    {% set performerArray = performerArray|merge([aNode]) %}
\t\t{% set hasPerformer = 1 %}
\t  {% endif %}
\t{% elseif aNode.bundle() == 'featured_venue' %}
\t  {% if aNode.field_featured_carousel_venue.entity.id != aNode.id %}
\t    {% set venueArray = venueArray|merge([aNode]) %}
\t\t{% set hasVenue = 1 %}
      {% endif %}
    {% elseif aNode.bundle() == 'featured_event' %}
\t  {% set eventArray = eventArray|merge([aNode]) %}
\t{% endif %}
  {% endfor %}
  {% set masterArray = [] %}
  {% set nonEventCount = 0 %}
  {% if hasPerformer %}
    {% set masterArray = masterArray|merge([performerArray.0]) %}
\t{% set nonEventCount = nonEventCount + 1 %}
  {% endif %}
  {% if hasVenue %}
    {% set masterArray = masterArray|merge([venueArray.0]) %}
\t{% set nonEventCount = nonEventCount + 1 %}
  {% endif %}
  {% set slotsToFill = 5 - nonEventCount %}
  {% if slotsToFill <= eventArray|length %}
    {% set remainderIndex = slotsToFill - 1 %}
  {% else %}
    {% set remainderIndex = eventArray|length - 1 %}
  {% endif %}
  {% for i in 0..remainderIndex %}
    {% set masterArray = masterArray|merge([eventArray[i]]) %}
  {% endfor %}
  {% set masterIndex = masterArray|length - 1 %}
  {% for i in 0..masterIndex %}
    {% if masterArray[i].bundle() == 'featured_performer' %}
\t  {% set elementImage = masterArray[i].field_featured_carousel_performe.entity.field_performer_photo.entity.field_image.entity %}
\t  {% set elementTitle = masterArray[i].field_featured_carousel_performe.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_performe.entity.id %}
\t{% elseif masterArray[i].bundle() == 'featured_venue' %}
\t  {% set elementImage = masterArray[i].field_featured_carousel_venue.entity.field_venue_cover_photo.entity.field_image.entity %}
\t  {% set elementTitle = masterArray[i].field_featured_carousel_venue.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_venue.entity.id %}
\t{% elseif masterArray[i].bundle() == 'featured_event' %}
\t  {% set elementImage = masterArray[i].field_featured_carousel_event.entity.field_event_image.entity.field_image.entity %}
\t  {% set elementTitle = masterArray[i].field_featured_carousel_event.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_event.entity.id %}
\t{% endif %}
    <div  class=\"right-main-featured-element\">
      <div class=\"block-title\" style=\"text-align: left;\">
        Featured
      </div>
      <a href=\"/node/{{ nodeId }}\">
        <div class=\"featured-element\">
          <div>
            <div class=\"mx-auto\">
              <figure class=\"mx-auto\">
                <div class=\"featured-element-image-container\">
                  <img class=\"right-main-featured-element-image\" src=\"{{ file_url(elementImage.uri.value) }}\"
                    alt=\"{{ elementImage.uri.value }}\">
                </div>
                <figcaption class=\"right-main-featured-element-title\"\">{{ elementTitle }}</figcaption>
              </figure>
            </div>
          </div>
        </div>
        {#<span class=\"right_main_featured_element_title\">{{ elementTitle }}</span><br>#}
        {#<img class=\"right_main_featured_element_image\" style=\"max-width:100%;height:auto;\" src=\"{{ file_url(elementImage.uri.value) }}\">#}
      </a>
    </div>
  {% endfor %}
  
  <script>
    var myBoxes = document.getElementsByClassName(\"featured-element-image-container\");
    var myBoxWidth = myBoxes[0].offsetWidth;
    for(var i = 0; i < myBoxes.length; i++) {
      myBoxes[i].style.height = myBoxWidth + \"px\";
    }
    
    var containers = document.getElementsByClassName(\"right-main-featured-element\");
    for(var i = 0; i < containers.length; i++) {
      containers[i].style.display = \"none\";
      containers[i].style.visibility = \"visible\";
    }
    containers[0].style.display = \"block\";
    
    window.addEventListener(\"resize\", function() {
      for(var i = 0; i < containers.length; i++) {
        if (containers[i].style.display == \"block\") {
          var currentIndex = i;
        }
        containers[i].style.visibility = \"hidden\";
        containers[i].style.display = \"block\";
      }
      
      var myBoxes = document.getElementsByClassName(\"featured-element-image-container\");
      var myBoxWidth = 0;
      for(var i = 0; i < myBoxes.length; i++) {
        if(myBoxes[i].offsetWidth > myBoxWidth) {
          myBoxWidth = myBoxes[i].offsetWidth;
        }
      }
      for(var i = 0; i < myBoxes.length; i++) {
        myBoxes[i].style.height = myBoxWidth + \"px\";
      }
      
      for(var i = 0; i < containers.length; i++) {
        containers[i].style.display = \"none\";
        containers[i].style.visibility = \"visible\";
      }
      
      containers[currentIndex].style.display = \"block\";
      
    });
    
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs() {
      showDivs(slideIndex += 1);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName(\"right-main-featured-element\");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = \"none\";
      }
      x[slideIndex-1].style.display = \"block\";
    }
    
    setInterval(plusDivs, 3000);
  </script>
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--main-page-featured-block.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--main-page-featured-block.html.twig");
    }
}
