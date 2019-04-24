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

/* themes/custom/sundialtheme/templates/components/layouts/page--node--sundial-article.html.twig */
class __TwigTemplate_349b9fefd045773df405e04cadb5f2d82aebc1f11078d14b5c156d1b2ff063b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["date" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['date'],
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
        // line 1
        echo "<div id=\"Mobile-layout\">
\t<div id=\"Mobile-nav-top-container\" class=\"nav-top-container\">
\t\t";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "navbar_top", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_top", [])), "html", null, true);
        }
        // line 4
        echo "\t</div>
\t<script>
\t  var topNavBrands = document.getElementsByClassName(\"navbar-brand\");
\t  var topNavBrandOne = topNavBrands[0];
\t  //topNavBrandOne.style.visibility = \"hidden\";
\t</script>
\t<div class=\"page-setup\">
\t\t<div id=\"mobile-container\">
\t\t\t<div class=\"date-bar clearfix\">
\t\t\t\t<span class=\"float-left\">Real News For North Carolina</span>
\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "M. j", "America/New_York"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t\t";
        // line 19
        echo "\t\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "mobile_events_and_articles", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mobile_events_and_articles", [])), "html", null, true);
        }
        // line 21
        echo "\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "mobile_below_content", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mobile_below_content", [])), "html", null, true);
        }
        // line 22
        echo "\t\t</div>
\t</div>
</div>

<div id=\"Desktop-layout\">
\t<div id=\"Desk-nav-top-container\" class=\"nav-top-container\">
\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "navbar_top", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_top", [])), "html", null, true);
        }
        // line 29
        echo "\t</div>
\t<script>
\t  var topNavBrandTwo = topNavBrands[1];
\t  topNavBrandTwo.style.visibility = \"hidden\";
\t</script>
\t<div class=\"page-setup\">
\t\t<div class=\"container\">
\t\t\t<div class=\"date-bar clearfix\">
\t\t\t\t<span class=\"float-left\">Real News For North Carolina</span>
\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "D, F j Y", "America/New_York"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t\t";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
        }
        // line 43
        echo "\t\t\t<section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo " class=\"main-section\">
\t\t\t\t<div class=\"col-12 mb-5 p-0\">
\t\t\t\t\t<div id=\"Desktop-main-content-div\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-2 border-right\">
\t\t\t\t\t\t\t";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "main_column_one", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_column_one", [])), "html", null, true);
        }
        // line 48
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "main_content", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content", [])), "html", null, true);
        }
        // line 51
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"Desktop-region-four-div\" class=\"col-3 border-left\">
\t\t\t\t\t\t\t";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "main_column_four", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_column_four", [])), "html", null, true);
        }
        // line 55
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "mid_left", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mid_left", [])), "html", null, true);
        }
        // line 61
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "mid_right", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mid_right", [])), "html", null, true);
        }
        // line 64
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "footer_about_us", [])) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_about_us", [])), "html", null, true);
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section><br><br>
\t\t</div>
\t</div>
</div>
<script>
\tvar navContainerMob = document.getElementById(\"Mobile-nav-top-container\");
\tvar scrollAwayMob = document.getElementById(\"block-mobilesitelogo\");
\tvar navContainer = document.getElementById(\"Desk-nav-top-container\");
\tvar scrollAway = document.getElementById(\"block-sitelogohorizontal\");
\twindow.onscroll = function (e) {
\t\tvar rect = scrollAway.getBoundingClientRect();
\t\tvar rectTwo = navContainer.getBoundingClientRect();
\t\tvar diff = rect.bottom - rectTwo.bottom;
\t\tif(diff <= 0) {
\t\t\ttopNavBrandTwo.style.visibility = \"visible\";
\t\t} else {
\t\t\ttopNavBrandTwo.style.visibility = \"hidden\";
\t\t}
\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/layouts/page--node--sundial-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 74,  196 => 73,  192 => 71,  188 => 70,  180 => 64,  176 => 63,  172 => 61,  168 => 60,  161 => 55,  157 => 54,  150 => 51,  146 => 50,  142 => 48,  138 => 47,  130 => 43,  126 => 42,  120 => 39,  108 => 29,  104 => 28,  96 => 22,  91 => 21,  87 => 20,  82 => 19,  76 => 15,  63 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"Mobile-layout\">
\t<div id=\"Mobile-nav-top-container\" class=\"nav-top-container\">
\t\t{% if page.navbar_top %}{{ page.navbar_top }}{% endif %}
\t</div>
\t<script>
\t  var topNavBrands = document.getElementsByClassName(\"navbar-brand\");
\t  var topNavBrandOne = topNavBrands[0];
\t  //topNavBrandOne.style.visibility = \"hidden\";
\t</script>
\t<div class=\"page-setup\">
\t\t<div id=\"mobile-container\">
\t\t\t<div class=\"date-bar clearfix\">
\t\t\t\t<span class=\"float-left\">Real News For North Carolina</span>
\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t{{ \"now\"|date(\"M. j\", \"America/New_York\") }}
\t\t\t\t</span>
\t\t\t</div>
\t\t\t{#{% if page.mobile_above_content %}{{ page.mobile_above_content }}{% endif %}#}
\t\t\t{{ page.content }}
\t\t\t{% if page.mobile_events_and_articles %}{{ page.mobile_events_and_articles }}{% endif %}
\t\t\t{% if page.mobile_below_content %}{{ page.mobile_below_content }}{% endif %}
\t\t</div>
\t</div>
</div>

<div id=\"Desktop-layout\">
\t<div id=\"Desk-nav-top-container\" class=\"nav-top-container\">
\t\t{% if page.navbar_top %}{{ page.navbar_top }}{% endif %}
\t</div>
\t<script>
\t  var topNavBrandTwo = topNavBrands[1];
\t  topNavBrandTwo.style.visibility = \"hidden\";
\t</script>
\t<div class=\"page-setup\">
\t\t<div class=\"container\">
\t\t\t<div class=\"date-bar clearfix\">
\t\t\t\t<span class=\"float-left\">Real News For North Carolina</span>
\t\t\t\t<span class=\"float-right\">
\t\t\t\t\t{{ \"now\"|date(\"D, F j Y\", \"America/New_York\") }}
\t\t\t\t</span>
\t\t\t</div>
\t\t\t{% if page.main_menu %}{{ page.main_menu }}{% endif %}
\t\t\t<section{{ attributes }} class=\"main-section\">
\t\t\t\t<div class=\"col-12 mb-5 p-0\">
\t\t\t\t\t<div id=\"Desktop-main-content-div\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-2 border-right\">
\t\t\t\t\t\t\t{% if page.main_column_one %}{{ page.main_column_one }}{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t{% if page.main_content %}{{ page.main_content }}{% endif %}
\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"Desktop-region-four-div\" class=\"col-3 border-left\">
\t\t\t\t\t\t\t{% if page.main_column_four %}{{ page.main_column_four }}{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t{% if page.mid_left %}{{ page.mid_left }}{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t{% if page.mid_right %}{{ page.mid_right }}{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t{% if page.footer_menu %}{{ page.footer_menu }}{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t{% if page.footer_about_us %}{{ page.footer_about_us }}{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section><br><br>
\t\t</div>
\t</div>
</div>
<script>
\tvar navContainerMob = document.getElementById(\"Mobile-nav-top-container\");
\tvar scrollAwayMob = document.getElementById(\"block-mobilesitelogo\");
\tvar navContainer = document.getElementById(\"Desk-nav-top-container\");
\tvar scrollAway = document.getElementById(\"block-sitelogohorizontal\");
\twindow.onscroll = function (e) {
\t\tvar rect = scrollAway.getBoundingClientRect();
\t\tvar rectTwo = navContainer.getBoundingClientRect();
\t\tvar diff = rect.bottom - rectTwo.bottom;
\t\tif(diff <= 0) {
\t\t\ttopNavBrandTwo.style.visibility = \"visible\";
\t\t} else {
\t\t\ttopNavBrandTwo.style.visibility = \"hidden\";
\t\t}
\t}
</script>
", "themes/custom/sundialtheme/templates/components/layouts/page--node--sundial-article.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/layouts/page--node--sundial-article.html.twig");
    }
}
