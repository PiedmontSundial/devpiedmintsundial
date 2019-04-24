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

/* themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-block.html.twig */
class __TwigTemplate_ef90559b8b532f2be3dd57e956398c6c356dcc43105ed4f84f0c66f295b033f5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "for" => 14, "if" => 16];
        $filters = ["merge" => 18, "length" => 41];
        $functions = ["range" => 46, "file_url" => 71];

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
        echo " id=\"Mobile-featured-area-article-div\" style=\"border: solid 3px;\">
  <div class=\"mobile-featured-title\">Featured</div>
  ";
        // line 8
        $context["realRows"] = $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, [], "array"), "#rows", [], "array");
        // line 9
        echo "  ";
        $context["performerArray"] = [];
        // line 10
        echo "  ";
        $context["venueArray"] = [];
        // line 11
        echo "  ";
        $context["eventArray"] = [];
        // line 12
        echo "  ";
        $context["hasPerformer"] = 0;
        // line 13
        echo "  ";
        $context["hasVenue"] = 0;
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realRows"] ?? null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 15
            echo "    ";
            $context["aNode"] = $this->getAttribute($context["row"], "#node", [], "array");
            // line 16
            echo "\t  ";
            if (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_performer")) {
                // line 17
                echo "\t    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aNode"] ?? null), "field_featured_carousel_performe", []), "entity", []), "id", []) != $this->getAttribute(($context["aNode"] ?? null), "id", []))) {
                    // line 18
                    echo "\t      ";
                    $context["performerArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["performerArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                    // line 19
                    echo "\t\t    ";
                    $context["hasPerformer"] = 1;
                    // line 20
                    echo "\t    ";
                }
                // line 21
                echo "\t  ";
            } elseif (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_venue")) {
                // line 22
                echo "\t    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aNode"] ?? null), "field_featured_carousel_venue", []), "entity", []), "id", []) != $this->getAttribute(($context["aNode"] ?? null), "id", []))) {
                    // line 23
                    echo "\t      ";
                    $context["venueArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["venueArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                    // line 24
                    echo "\t\t    ";
                    $context["hasVenue"] = 1;
                    // line 25
                    echo "      ";
                }
                // line 26
                echo "    ";
            } elseif (($this->getAttribute(($context["aNode"] ?? null), "bundle", [], "method") == "featured_event")) {
                // line 27
                echo "\t    ";
                $context["eventArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["eventArray"] ?? null)), [0 => ($context["aNode"] ?? null)]);
                // line 28
                echo "\t  ";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context["masterArray"] = [];
        // line 31
        echo "  ";
        $context["nonEventCount"] = 0;
        // line 32
        echo "  ";
        if (($context["hasPerformer"] ?? null)) {
            // line 33
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["performerArray"] ?? null), 0, [])]);
            // line 34
            echo "\t  ";
            $context["nonEventCount"] = (($context["nonEventCount"] ?? null) + 1);
            // line 35
            echo "  ";
        }
        // line 36
        echo "  ";
        if (($context["hasVenue"] ?? null)) {
            // line 37
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["venueArray"] ?? null), 0, [])]);
            // line 38
            echo "\t  ";
            $context["nonEventCount"] = (($context["nonEventCount"] ?? null) + 1);
            // line 39
            echo "  ";
        }
        // line 40
        echo "  ";
        $context["slotsToFill"] = (5 - ($context["nonEventCount"] ?? null));
        // line 41
        echo "  ";
        if ((($context["slotsToFill"] ?? null) <= twig_length_filter($this->env, ($context["eventArray"] ?? null)))) {
            // line 42
            echo "    ";
            $context["remainderIndex"] = (($context["slotsToFill"] ?? null) - 1);
            // line 43
            echo "  ";
        } else {
            // line 44
            echo "    ";
            $context["remainderIndex"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["eventArray"] ?? null))) - 1);
            // line 45
            echo "  ";
        }
        // line 46
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["remainderIndex"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "    ";
            $context["masterArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null)), [0 => $this->getAttribute(($context["eventArray"] ?? null), $context["i"], [], "array")]);
            // line 48
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  ";
        $context["masterIndex"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["masterArray"] ?? null))) - 1);
        // line 50
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["masterIndex"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_performer")) {
                // line 52
                echo "\t    ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "field_performer_photo", []), "entity", []), "field_image", []), "entity", []);
                // line 53
                echo "\t    ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "title", []), "value", []);
                // line 54
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_performe", []), "entity", []), "id", []);
                // line 55
                echo "\t  ";
            } elseif (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_venue")) {
                // line 56
                echo "\t    ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "field_venue_cover_photo", []), "entity", []), "field_image", []), "entity", []);
                // line 57
                echo "\t    ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "title", []), "value", []);
                // line 58
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_venue", []), "entity", []), "id", []);
                // line 59
                echo "\t  ";
            } elseif (($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "bundle", [], "method") == "featured_event")) {
                // line 60
                echo "\t    ";
                $context["elementImage"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "field_event_image", []), "entity", []), "field_image", []), "entity", []);
                // line 61
                echo "\t    ";
                $context["elementTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "title", []), "value", []);
                // line 62
                echo "      ";
                $context["nodeId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["masterArray"] ?? null), $context["i"], [], "array"), "field_featured_carousel_event", []), "entity", []), "id", []);
                // line 63
                echo "\t  ";
            }
            // line 64
            echo "    <div class=\"mobile-featured-element\">
      <div class=\"featured-element-mobile\">
        <div>
          <div class=\"mx-auto\">
            <figure class=\"mx-auto\">
              <a href=\"/node/";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodeId"] ?? null)), "html", null, true);
            echo "\">
                <div class=\"mobile-featured-image-container\">
                  <img class=\"right_mobile_featured_element_image\" src=\"";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elementImage"] ?? null), "uri", []), "value", []))]), "html", null, true);
            echo "\" style=\"position: absolute; z-index: 1;\"
                    alt=\"";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["elementImage"] ?? null), "uri", []), "value", [])), "html", null, true);
            echo "\">
                </div>
              </a>
              <div style=\"width:100%;height:30px;\">
                <img id=\"Left-mobile-carousel-arrow\" class=\"left-carousel-arrow\"
                     src=\"/themes/custom/sundialtheme/images/CarouselArrowLeft_small01.png\" onclick=\"moveSlidesLeft()\">
                <img id=\"Right-mobile-carousel-arrow\" class=\"right-carousel-arrow\"
                     src=\"/themes/custom/sundialtheme/images/CarouselArrowRight_small01.png\" onclick=\"moveSlidesRight()\">
              </div>
              <a href=\"/node/";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nodeId"] ?? null)), "html", null, true);
            echo "\">
                <figcaption class=\"right-mobile-featured-element-title\">";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["elementTitle"] ?? null)), "html", null, true);
            echo "</figcaption>
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>
    ";
            // line 89
            $context["tempFigcaptionPositiom"] = (10000 + ($context["i"] * 1000));
            // line 90
            echo "    <fakeFigcaption class=\"caption-height-grab\" style=\"font-family: roboto slab;font-size: 22px;text-decoration: none;height: 66px;
    position:absolute;top:";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tempFigcaptionPositiom"] ?? null)), "html", null, true);
            echo "px;width:100%;\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["elementTitle"] ?? null)), "html", null, true);
            echo "</fakeFigcaption>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "  
  <script>
    var myMobileBoxes = document.getElementsByClassName(\"mobile-featured-image-container\");
    var myMobileBoxWidth = myMobileBoxes[0].offsetWidth;
    for(var i = 0; i < myMobileBoxes.length; i++) {
      myMobileBoxes[i].style.height = myMobileBoxWidth + \"px\";
    }
    
    var mobileContainers = document.getElementsByClassName(\"mobile-featured-element\");
    for(var i = 0; i < mobileContainers.length; i++) {
      mobileContainers[i].style.display = \"none\";
      mobileContainers[i].style.visibility = \"visible\";
    }
    mobileContainers[0].style.display = \"block\";
    
    window.addEventListener(\"resize\", function() {
      for(var i = 0; i < mobileContainers.length; i++) {
        if (mobileContainers[i].style.display == \"block\") {
          var currentIndex = i;
        }
        mobileContainers[i].style.visibility = \"hidden\";
        mobileContainers[i].style.display = \"block\";
      }
      
      var myMobileBoxes = document.getElementsByClassName(\"mobile-featured-image-container\");
      var myMobileBoxWidth = 0;
      for(var i = 0; i < myMobileBoxes.length; i++) {
        if(myMobileBoxes[i].offsetWidth > myMobileBoxWidth) {
          myMobileBoxWidth = myMobileBoxes[i].offsetWidth;
        }
      }
      for(var i = 0; i < myMobileBoxes.length; i++) {
        myMobileBoxes[i].style.height = myMobileBoxWidth + \"px\";
      }
      
      for(var i = 0; i < mobileContainers.length; i++) {
        mobileContainers[i].style.display = \"none\";
        mobileContainers[i].style.visibility = \"visible\";
      }
      
      mobileContainers[currentIndex].style.display = \"block\";
      
    });
    
    var mobileSlideIndex = 1;
    showMobileDivs(mobileSlideIndex);
    
    function plusMobileDivs() {
      showMobileDivs(mobileSlideIndex += 1);
    }
    
    function showMobileDivs(n) {
      var i;
      var x = document.getElementsByClassName(\"mobile-featured-element\");
      if (n > x.length) {mobileSlideIndex = 1}    
      if (n < 1) {mobileSlideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = \"none\";
      }
      x[mobileSlideIndex-1].style.display = \"block\";
    }
    
    var myMobileDivsVar;
    
    function restartMobileDivSlides() {
      myMobileDivsVar = setInterval(plusMobileDivs, 3000);
    }
    
    restartMobileDivSlides();
    
    function moveSlidesRight() {
      clearInterval(myMobileDivsVar);
      mobileSlideIndex++;
      showMobileDivs(mobileSlideIndex);
      restartMobileDivSlides();
    }
    
    function moveSlidesLeft() {
      clearInterval(myMobileDivsVar);
      mobileSlideIndex --;
      showMobileDivs(mobileSlideIndex);
      restartMobileDivSlides();
    }
    
    var figCaptionsForHeight = document.getElementsByClassName(\"caption-height-grab\");
    
    /*
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"block\";
    }
    
    var maxFigcaptionsHeight = 0;
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      var tempHeight = figCaptionsForHeight[i].offsetHeight;
      if (tempHeight > maxFigcaptionsHeight) {
        maxFigcaptionsHeight = tempHeight;
      }
    }
    
    maxFigcaptionsHeight = maxFigcaptionsHeight + 20;
    
    //window.alert(maxFigcaptionsHeight);
    
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"none\";
    }
    */
    
    var screenWidth = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;
    screenWidth = screenWidth - 10;
    
    var mobileElements = document.getElementsByClassName(\"mobile-featured-element\");
    var mobileImageContainers = document.getElementsByClassName(\"mobile-featured-image-container\");
    var mobileFeaturedImages = document.getElementsByClassName(\"right_mobile_featured_element_image\");
    
    if (screenWidth > 500) {
      for (var i = 0; i < mobileElements.length; i++) {
        mobileElements[i].style.width = \"478px\";
        var mobileElementsHeight = 478 + maxFigcaptionsHeight;
        mobileElements[i].style.height = mobileElementsHeight + \"px\";
        mobileImageContainers[i].style.width = \"478px\";
        mobileImageContainers[i].style.height = \"478px\";
        mobileFeaturedImages[i].style.width = \"478px\";
        mobileFeaturedImages[i].style.height = \"auto\";
        mobileFeaturedImages[i].style.maxWidth = \"100%\";
        mobileFeaturedImages[i].style.maxHeight = \"100%\";
        mobileFeaturedImages[i].style.position = \"relative\";
        var imageNaturalWidth = mobileFeaturedImages[i].width;
        //window.alert(\"image N width = \" + imageNaturalWidth);
        var imageNaturalHeight = mobileFeaturedImages[i].height;
        //window.alert(\"image N height = \" + imageNaturalHeight);
        var imageWidthPercentage = 478 / imageNaturalWidth;
        //window.alert(\"image width P = \" + imageWidthPercentage);
        var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
        //window.alert(\"image new H = \" + imageNewHeight);
        var imagePosition = (478 - imageNewHeight) / 2;
        //window.alert(imagePosition);
        if (imagePosition <= 0) {
          imagePosition = 0;
        }
        mobileFeaturedImages[i].style.top = imagePosition + \"px\";
      }
    } else {
      var mobileArticleDiv = document.getElementById(\"Mobile-featured-area-article-div\");
      var articleWidth = mobileArticleDiv.offsetWidth - 6;
      for (var i = 0; i < mobileElements.length; i++) {
        mobileElements[i].style.width = articleWidth + \"px\";
        var mobElHeight = screenWidth + maxFigcaptionsHeight;
        mobileElements[i].style.height = mobElHeight + \"px\";
        mobileImageContainers[i].style.width = articleWidth + \"px\";
        mobileImageContainers[i].style.height = articleWidth + \"px\";
        mobileFeaturedImages[i].style.width = articleWidth + \"px\";
        mobileFeaturedImages[i].style.height = \"auto\";
        mobileFeaturedImages[i].style.maxWidth = \"100%\";
        mobileFeaturedImages[i].style.maxHeight = \"100%\";
        mobileFeaturedImages[i].style.position = \"relative\";
        var imageNaturalWidth = mobileFeaturedImages[i].width;
        var imageNaturalHeight = mobileFeaturedImages[i].height;
        var imageWidthPercentage = articleWidth / imageNaturalWidth;
        var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
        var imagePosition = (articleWidth - imageNewHeight) / 2;
        if (imagePosition <= 0) {
          imagePosition = 0;
        }
        mobileFeaturedImages[i].style.top = imagePosition + \"px\";
      }
    }
    
    function redoMobileFeatured() {
      //window.alert(maxFigcaptionsHeight);
      var screenWidth = window.innerWidth
      || document.documentElement.clientWidth
      || document.body.clientWidth;
      screenWidth = screenWidth - 10;
      
      var mobileElements = document.getElementsByClassName(\"mobile-featured-element\");
      var mobileImageContainers = document.getElementsByClassName(\"mobile-featured-image-container\");
      var mobileFeaturedImages = document.getElementsByClassName(\"right_mobile_featured_element_image\");
      
      if (screenWidth > 500) {
        for (var i = 0; i < mobileElements.length; i++) {
          mobileElements[i].style.width = \"478px\";
          var mobileElementsHeight = 478 + maxFigcaptionsHeight;
          mobileElements[i].style.height = mobileElementsHeight + \"px\";
          mobileImageContainers[i].style.width = \"478px\";
          mobileImageContainers[i].style.height = \"478px\";
          mobileFeaturedImages[i].style.width = \"478px\";
          mobileFeaturedImages[i].style.height = \"auto\";
          mobileFeaturedImages[i].style.maxWidth = \"100%\";
          mobileFeaturedImages[i].style.maxHeight = \"100%\";
          mobileFeaturedImages[i].style.position = \"relative\";
          var imageNaturalWidth = mobileFeaturedImages[i].width;
          //window.alert(\"image N width = \" + imageNaturalWidth);
          var imageNaturalHeight = mobileFeaturedImages[i].height;
          //window.alert(\"image N height = \" + imageNaturalHeight);
          var imageWidthPercentage = 478 / imageNaturalWidth;
          //window.alert(\"image width P = \" + imageWidthPercentage);
          var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
          //window.alert(\"image new H = \" + imageNewHeight);
          var imagePosition = (478 - imageNewHeight) / 2;
          //window.alert(imagePosition);
          if (imagePosition <= 0) {
            imagePosition = 0;
          }
          mobileFeaturedImages[i].style.top = imagePosition + \"px\";
        }
      } else {
        var mobileArticleDiv = document.getElementById(\"Mobile-featured-area-article-div\");
        var articleWidth = mobileArticleDiv.offsetWidth - 6;
        for (var i = 0; i < mobileElements.length; i++) {
          mobileElements[i].style.width = articleWidth + \"px\";
          var mobElHeight = screenWidth + maxFigcaptionsHeight;
          mobileElements[i].style.height = mobElHeight + \"px\";
          mobileImageContainers[i].style.width = articleWidth + \"px\";
          mobileImageContainers[i].style.height = articleWidth + \"px\";
          mobileFeaturedImages[i].style.width = articleWidth + \"px\";
          mobileFeaturedImages[i].style.height = \"auto\";
          mobileFeaturedImages[i].style.maxWidth = \"100%\";
          mobileFeaturedImages[i].style.maxHeight = \"100%\";
          mobileFeaturedImages[i].style.position = \"relative\";
          var imageNaturalWidth = mobileFeaturedImages[i].width;
          var imageNaturalHeight = mobileFeaturedImages[i].height;
          var imageWidthPercentage = articleWidth / imageNaturalWidth;
          var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
          var imagePosition = (articleWidth - imageNewHeight) / 2;
          if (imagePosition <= 0) {
            imagePosition = 0;
          }
          mobileFeaturedImages[i].style.top = imagePosition + \"px\";
        }
      }
    }
    
    var figCaptionsForHeight = document.getElementsByClassName(\"caption-height-grab\");
    var maxFigcaptionsHeight = 0;
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      var tempHeight = figCaptionsForHeight[i].offsetHeight;
      if (tempHeight > maxFigcaptionsHeight) {
        maxFigcaptionsHeight = tempHeight;
      }
    }
    
    maxFigcaptionsHeight = maxFigcaptionsHeight + 20;
    
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"none\";
    }
    
    var realFigcaptions = document.getElementsByClassName(\"right-mobile-featured-element-title\");
    for (var i = 0; i < realFigcaptions.length; i++) {
      realFigcaptions[i].style.height = maxFigcaptionsHeight + \"px\";
    }
    
    window.addEventListener('resize', redoMobileFeatured);
  </script>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 93,  289 => 91,  286 => 90,  284 => 89,  274 => 82,  270 => 81,  258 => 72,  254 => 71,  249 => 69,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  230 => 60,  227 => 59,  224 => 58,  221 => 57,  218 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  198 => 50,  195 => 49,  189 => 48,  186 => 47,  181 => 46,  178 => 45,  175 => 44,  172 => 43,  169 => 42,  166 => 41,  163 => 40,  160 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  139 => 32,  136 => 31,  133 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  63 => 8,  57 => 6,  55 => 2,);
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
<article{{ attributes.addClass(classes) }} id=\"Mobile-featured-area-article-div\" style=\"border: solid 3px;\">
  <div class=\"mobile-featured-title\">Featured</div>
  {% set realRows = rows[0][\"#rows\"] %}
  {% set performerArray = [] %}
  {% set venueArray = [] %}
  {% set eventArray = [] %}
  {% set hasPerformer = 0 %}
  {% set hasVenue = 0 %}
  {% for rowKey, row in realRows %}
    {% set aNode = row[\"#node\"] %}
\t  {% if aNode.bundle() == 'featured_performer' %}
\t    {% if aNode.field_featured_carousel_performe.entity.id != aNode.id %}
\t      {% set performerArray = performerArray|merge([aNode]) %}
\t\t    {% set hasPerformer = 1 %}
\t    {% endif %}
\t  {% elseif aNode.bundle() == 'featured_venue' %}
\t    {% if aNode.field_featured_carousel_venue.entity.id != aNode.id %}
\t      {% set venueArray = venueArray|merge([aNode]) %}
\t\t    {% set hasVenue = 1 %}
      {% endif %}
    {% elseif aNode.bundle() == 'featured_event' %}
\t    {% set eventArray = eventArray|merge([aNode]) %}
\t  {% endif %}
  {% endfor %}
  {% set masterArray = [] %}
  {% set nonEventCount = 0 %}
  {% if hasPerformer %}
    {% set masterArray = masterArray|merge([performerArray.0]) %}
\t  {% set nonEventCount = nonEventCount + 1 %}
  {% endif %}
  {% if hasVenue %}
    {% set masterArray = masterArray|merge([venueArray.0]) %}
\t  {% set nonEventCount = nonEventCount + 1 %}
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
\t    {% set elementImage = masterArray[i].field_featured_carousel_performe.entity.field_performer_photo.entity.field_image.entity %}
\t    {% set elementTitle = masterArray[i].field_featured_carousel_performe.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_performe.entity.id %}
\t  {% elseif masterArray[i].bundle() == 'featured_venue' %}
\t    {% set elementImage = masterArray[i].field_featured_carousel_venue.entity.field_venue_cover_photo.entity.field_image.entity %}
\t    {% set elementTitle = masterArray[i].field_featured_carousel_venue.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_venue.entity.id %}
\t  {% elseif masterArray[i].bundle() == 'featured_event' %}
\t    {% set elementImage = masterArray[i].\tfield_featured_carousel_event.entity.field_event_image.entity.field_image.entity %}
\t    {% set elementTitle = masterArray[i].\tfield_featured_carousel_event.entity.title.value %}
      {% set nodeId = masterArray[i].field_featured_carousel_event.entity.id %}
\t  {% endif %}
    <div class=\"mobile-featured-element\">
      <div class=\"featured-element-mobile\">
        <div>
          <div class=\"mx-auto\">
            <figure class=\"mx-auto\">
              <a href=\"/node/{{ nodeId }}\">
                <div class=\"mobile-featured-image-container\">
                  <img class=\"right_mobile_featured_element_image\" src=\"{{ file_url(elementImage.uri.value) }}\" style=\"position: absolute; z-index: 1;\"
                    alt=\"{{ elementImage.uri.value }}\">
                </div>
              </a>
              <div style=\"width:100%;height:30px;\">
                <img id=\"Left-mobile-carousel-arrow\" class=\"left-carousel-arrow\"
                     src=\"/themes/custom/sundialtheme/images/CarouselArrowLeft_small01.png\" onclick=\"moveSlidesLeft()\">
                <img id=\"Right-mobile-carousel-arrow\" class=\"right-carousel-arrow\"
                     src=\"/themes/custom/sundialtheme/images/CarouselArrowRight_small01.png\" onclick=\"moveSlidesRight()\">
              </div>
              <a href=\"/node/{{ nodeId }}\">
                <figcaption class=\"right-mobile-featured-element-title\">{{ elementTitle }}</figcaption>
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>
    {% set tempFigcaptionPositiom = 10000 + (i * 1000) %}
    <fakeFigcaption class=\"caption-height-grab\" style=\"font-family: roboto slab;font-size: 22px;text-decoration: none;height: 66px;
    position:absolute;top:{{ tempFigcaptionPositiom }}px;width:100%;\">{{ elementTitle }}</fakeFigcaption>
  {% endfor %}
  
  <script>
    var myMobileBoxes = document.getElementsByClassName(\"mobile-featured-image-container\");
    var myMobileBoxWidth = myMobileBoxes[0].offsetWidth;
    for(var i = 0; i < myMobileBoxes.length; i++) {
      myMobileBoxes[i].style.height = myMobileBoxWidth + \"px\";
    }
    
    var mobileContainers = document.getElementsByClassName(\"mobile-featured-element\");
    for(var i = 0; i < mobileContainers.length; i++) {
      mobileContainers[i].style.display = \"none\";
      mobileContainers[i].style.visibility = \"visible\";
    }
    mobileContainers[0].style.display = \"block\";
    
    window.addEventListener(\"resize\", function() {
      for(var i = 0; i < mobileContainers.length; i++) {
        if (mobileContainers[i].style.display == \"block\") {
          var currentIndex = i;
        }
        mobileContainers[i].style.visibility = \"hidden\";
        mobileContainers[i].style.display = \"block\";
      }
      
      var myMobileBoxes = document.getElementsByClassName(\"mobile-featured-image-container\");
      var myMobileBoxWidth = 0;
      for(var i = 0; i < myMobileBoxes.length; i++) {
        if(myMobileBoxes[i].offsetWidth > myMobileBoxWidth) {
          myMobileBoxWidth = myMobileBoxes[i].offsetWidth;
        }
      }
      for(var i = 0; i < myMobileBoxes.length; i++) {
        myMobileBoxes[i].style.height = myMobileBoxWidth + \"px\";
      }
      
      for(var i = 0; i < mobileContainers.length; i++) {
        mobileContainers[i].style.display = \"none\";
        mobileContainers[i].style.visibility = \"visible\";
      }
      
      mobileContainers[currentIndex].style.display = \"block\";
      
    });
    
    var mobileSlideIndex = 1;
    showMobileDivs(mobileSlideIndex);
    
    function plusMobileDivs() {
      showMobileDivs(mobileSlideIndex += 1);
    }
    
    function showMobileDivs(n) {
      var i;
      var x = document.getElementsByClassName(\"mobile-featured-element\");
      if (n > x.length) {mobileSlideIndex = 1}    
      if (n < 1) {mobileSlideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = \"none\";
      }
      x[mobileSlideIndex-1].style.display = \"block\";
    }
    
    var myMobileDivsVar;
    
    function restartMobileDivSlides() {
      myMobileDivsVar = setInterval(plusMobileDivs, 3000);
    }
    
    restartMobileDivSlides();
    
    function moveSlidesRight() {
      clearInterval(myMobileDivsVar);
      mobileSlideIndex++;
      showMobileDivs(mobileSlideIndex);
      restartMobileDivSlides();
    }
    
    function moveSlidesLeft() {
      clearInterval(myMobileDivsVar);
      mobileSlideIndex --;
      showMobileDivs(mobileSlideIndex);
      restartMobileDivSlides();
    }
    
    var figCaptionsForHeight = document.getElementsByClassName(\"caption-height-grab\");
    
    /*
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"block\";
    }
    
    var maxFigcaptionsHeight = 0;
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      var tempHeight = figCaptionsForHeight[i].offsetHeight;
      if (tempHeight > maxFigcaptionsHeight) {
        maxFigcaptionsHeight = tempHeight;
      }
    }
    
    maxFigcaptionsHeight = maxFigcaptionsHeight + 20;
    
    //window.alert(maxFigcaptionsHeight);
    
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"none\";
    }
    */
    
    var screenWidth = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;
    screenWidth = screenWidth - 10;
    
    var mobileElements = document.getElementsByClassName(\"mobile-featured-element\");
    var mobileImageContainers = document.getElementsByClassName(\"mobile-featured-image-container\");
    var mobileFeaturedImages = document.getElementsByClassName(\"right_mobile_featured_element_image\");
    
    if (screenWidth > 500) {
      for (var i = 0; i < mobileElements.length; i++) {
        mobileElements[i].style.width = \"478px\";
        var mobileElementsHeight = 478 + maxFigcaptionsHeight;
        mobileElements[i].style.height = mobileElementsHeight + \"px\";
        mobileImageContainers[i].style.width = \"478px\";
        mobileImageContainers[i].style.height = \"478px\";
        mobileFeaturedImages[i].style.width = \"478px\";
        mobileFeaturedImages[i].style.height = \"auto\";
        mobileFeaturedImages[i].style.maxWidth = \"100%\";
        mobileFeaturedImages[i].style.maxHeight = \"100%\";
        mobileFeaturedImages[i].style.position = \"relative\";
        var imageNaturalWidth = mobileFeaturedImages[i].width;
        //window.alert(\"image N width = \" + imageNaturalWidth);
        var imageNaturalHeight = mobileFeaturedImages[i].height;
        //window.alert(\"image N height = \" + imageNaturalHeight);
        var imageWidthPercentage = 478 / imageNaturalWidth;
        //window.alert(\"image width P = \" + imageWidthPercentage);
        var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
        //window.alert(\"image new H = \" + imageNewHeight);
        var imagePosition = (478 - imageNewHeight) / 2;
        //window.alert(imagePosition);
        if (imagePosition <= 0) {
          imagePosition = 0;
        }
        mobileFeaturedImages[i].style.top = imagePosition + \"px\";
      }
    } else {
      var mobileArticleDiv = document.getElementById(\"Mobile-featured-area-article-div\");
      var articleWidth = mobileArticleDiv.offsetWidth - 6;
      for (var i = 0; i < mobileElements.length; i++) {
        mobileElements[i].style.width = articleWidth + \"px\";
        var mobElHeight = screenWidth + maxFigcaptionsHeight;
        mobileElements[i].style.height = mobElHeight + \"px\";
        mobileImageContainers[i].style.width = articleWidth + \"px\";
        mobileImageContainers[i].style.height = articleWidth + \"px\";
        mobileFeaturedImages[i].style.width = articleWidth + \"px\";
        mobileFeaturedImages[i].style.height = \"auto\";
        mobileFeaturedImages[i].style.maxWidth = \"100%\";
        mobileFeaturedImages[i].style.maxHeight = \"100%\";
        mobileFeaturedImages[i].style.position = \"relative\";
        var imageNaturalWidth = mobileFeaturedImages[i].width;
        var imageNaturalHeight = mobileFeaturedImages[i].height;
        var imageWidthPercentage = articleWidth / imageNaturalWidth;
        var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
        var imagePosition = (articleWidth - imageNewHeight) / 2;
        if (imagePosition <= 0) {
          imagePosition = 0;
        }
        mobileFeaturedImages[i].style.top = imagePosition + \"px\";
      }
    }
    
    function redoMobileFeatured() {
      //window.alert(maxFigcaptionsHeight);
      var screenWidth = window.innerWidth
      || document.documentElement.clientWidth
      || document.body.clientWidth;
      screenWidth = screenWidth - 10;
      
      var mobileElements = document.getElementsByClassName(\"mobile-featured-element\");
      var mobileImageContainers = document.getElementsByClassName(\"mobile-featured-image-container\");
      var mobileFeaturedImages = document.getElementsByClassName(\"right_mobile_featured_element_image\");
      
      if (screenWidth > 500) {
        for (var i = 0; i < mobileElements.length; i++) {
          mobileElements[i].style.width = \"478px\";
          var mobileElementsHeight = 478 + maxFigcaptionsHeight;
          mobileElements[i].style.height = mobileElementsHeight + \"px\";
          mobileImageContainers[i].style.width = \"478px\";
          mobileImageContainers[i].style.height = \"478px\";
          mobileFeaturedImages[i].style.width = \"478px\";
          mobileFeaturedImages[i].style.height = \"auto\";
          mobileFeaturedImages[i].style.maxWidth = \"100%\";
          mobileFeaturedImages[i].style.maxHeight = \"100%\";
          mobileFeaturedImages[i].style.position = \"relative\";
          var imageNaturalWidth = mobileFeaturedImages[i].width;
          //window.alert(\"image N width = \" + imageNaturalWidth);
          var imageNaturalHeight = mobileFeaturedImages[i].height;
          //window.alert(\"image N height = \" + imageNaturalHeight);
          var imageWidthPercentage = 478 / imageNaturalWidth;
          //window.alert(\"image width P = \" + imageWidthPercentage);
          var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
          //window.alert(\"image new H = \" + imageNewHeight);
          var imagePosition = (478 - imageNewHeight) / 2;
          //window.alert(imagePosition);
          if (imagePosition <= 0) {
            imagePosition = 0;
          }
          mobileFeaturedImages[i].style.top = imagePosition + \"px\";
        }
      } else {
        var mobileArticleDiv = document.getElementById(\"Mobile-featured-area-article-div\");
        var articleWidth = mobileArticleDiv.offsetWidth - 6;
        for (var i = 0; i < mobileElements.length; i++) {
          mobileElements[i].style.width = articleWidth + \"px\";
          var mobElHeight = screenWidth + maxFigcaptionsHeight;
          mobileElements[i].style.height = mobElHeight + \"px\";
          mobileImageContainers[i].style.width = articleWidth + \"px\";
          mobileImageContainers[i].style.height = articleWidth + \"px\";
          mobileFeaturedImages[i].style.width = articleWidth + \"px\";
          mobileFeaturedImages[i].style.height = \"auto\";
          mobileFeaturedImages[i].style.maxWidth = \"100%\";
          mobileFeaturedImages[i].style.maxHeight = \"100%\";
          mobileFeaturedImages[i].style.position = \"relative\";
          var imageNaturalWidth = mobileFeaturedImages[i].width;
          var imageNaturalHeight = mobileFeaturedImages[i].height;
          var imageWidthPercentage = articleWidth / imageNaturalWidth;
          var imageNewHeight = imageNaturalHeight * imageWidthPercentage;
          var imagePosition = (articleWidth - imageNewHeight) / 2;
          if (imagePosition <= 0) {
            imagePosition = 0;
          }
          mobileFeaturedImages[i].style.top = imagePosition + \"px\";
        }
      }
    }
    
    var figCaptionsForHeight = document.getElementsByClassName(\"caption-height-grab\");
    var maxFigcaptionsHeight = 0;
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      var tempHeight = figCaptionsForHeight[i].offsetHeight;
      if (tempHeight > maxFigcaptionsHeight) {
        maxFigcaptionsHeight = tempHeight;
      }
    }
    
    maxFigcaptionsHeight = maxFigcaptionsHeight + 20;
    
    for (var i = 0; i < figCaptionsForHeight.length; i++) {
      figCaptionsForHeight[i].style.display = \"none\";
    }
    
    var realFigcaptions = document.getElementsByClassName(\"right-mobile-featured-element-title\");
    for (var i = 0; i < realFigcaptions.length; i++) {
      realFigcaptions[i].style.height = maxFigcaptionsHeight + \"px\";
    }
    
    window.addEventListener('resize', redoMobileFeatured);
  </script>
</article>
", "themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-block.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/views/views-view--mobile-featured-block.html.twig");
    }
}
