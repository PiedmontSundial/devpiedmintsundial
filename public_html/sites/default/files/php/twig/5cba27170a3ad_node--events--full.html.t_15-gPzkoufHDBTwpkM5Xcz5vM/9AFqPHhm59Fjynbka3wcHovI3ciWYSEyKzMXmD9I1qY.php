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

/* themes/custom/sundialtheme/templates/components/layouts/node--events--full.html.twig */
class __TwigTemplate_b69d067fea5bb99f3c01b445af7522b19216242ff50eb49a0c1fcea11ba0f2d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 79, "set" => 93, "for" => 94];
        $filters = ["length" => 156, "date" => 287, "number_format" => 301, "raw" => 343];
        $functions = ["file_url" => 81, "range" => 105];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'date', 'number_format', 'raw'],
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
  
  <div class=\"b-w-label block-title\">
    Event Details
  </div>
  
  ";
        // line 79
        if ($this->getAttribute(($context["content"] ?? null), "field_event_image", [])) {
            // line 80
            echo "    <div style=\"text-align:center;\">
      <img src=\"";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_image", []), "entity", []), "field_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\"
           alt=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_image", []), "entity", []), "field_image", []), "entity", []), "alt", []), "value", [])), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
  ";
        }
        // line 85
        echo "  
\t<h1 id=\"Event-title-box\" class=\"event-title-box title-box block-title\">
\t   ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "
\t</h1>
  
  <div style=\"font-family: roboto slab;\">
    ";
        // line 91
        if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_category", []), "value", []) == "Performance")) {
            // line 92
            echo "      <div class=\"performer-bill-display\">
        ";
            // line 93
            $context["numberOfPerformers"] = 0;
            // line 94
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_bill_performer_reference", []));
            foreach ($context['_seq'] as $context["_key"] => $context["performer"]) {
                // line 95
                echo "          ";
                $context["numberOfPerformers"] = (($context["numberOfPerformers"] ?? null) + 1);
                // line 96
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['performer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
            if ((($context["numberOfPerformers"] ?? null) > 0)) {
                // line 98
                echo "          <span class=\"bill-performing-style\">PERFORMING:</span><br>
        ";
            }
            // line 100
            echo "        ";
            $context["twigIndex"] = (($context["numberOfPerformers"] ?? null) - 1);
            // line 101
            echo "        <div class=\"block-title lead-performer-display\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_bill_performer_reference", []), 0, [], "array"), "entity", []), "title", []), "value", [])), "html", null, true);
            echo "</div>
        ";
            // line 102
            if ((($context["numberOfPerformers"] ?? null) > 1)) {
                // line 103
                echo "        <div class=\"secondary-bill\">
          <span class=\"bill-with-style\">WITH:</span><br>
          ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["twigIndex"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 106
                    echo "            <div class=\"block-title supporting-performer-display\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_bill_performer_reference", []), $context["i"], [], "array"), "entity", []), "title", []), "value", [])), "html", null, true);
                    echo "</div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "        </div>
        ";
            }
            // line 110
            echo "      </div>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 111
($context["node"] ?? null), "field_event_category", []), "value", []) == "Sports")) {
            // line 112
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_sports_event_type", []), "value", []) == "Contest")) {
                // line 113
                echo "        ";
                $context["teamOne"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_players_contestants", []), 0, []), "entity", []), "field_display_name", []), "value", []);
                // line 114
                echo "        ";
                $context["teamTwo"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_players_contestants", []), 1, []), "entity", []), "field_display_name", []), "value", []);
                // line 115
                echo "        <div class=\"event-sport-label\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_sport_type", []), "entity", []), "name", []), "value", [])), "html", null, true);
                echo ": </div>
        <p class=\"event-teams-match-display\">
          ";
                // line 117
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teamOne"] ?? null)), "html", null, true);
                echo " vs ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["teamTwo"] ?? null)), "html", null, true);
                echo "
        </p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 119
($context["node"] ?? null), "field_sports_event_type", []), "value", []) == "Tournament")) {
                // line 120
                echo "        <p class=\"event-tournament-list\">
          Competing:<br>
          ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_players_contestants", []));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 123
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["team"], "entity", []), "field_display_name", []), "value", [])), "html", null, true);
                    echo "<br>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "        </p>
      ";
            }
            // line 127
            echo "    ";
        } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_category", []), "value", []) == "Community")) {
            // line 128
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_class_type", []), "value", []) == "Adult")) {
                // line 129
                echo "        <p>Adult Class</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 130
($context["node"] ?? null), "field_class_type", []), "value", []) == "Youth")) {
                // line 131
                echo "        <p>Youth Class</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 132
($context["node"] ?? null), "field_league_types", []), "value", []) == "Youth")) {
                // line 133
                echo "        <p>Youth League</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 134
($context["node"] ?? null), "field_league_types", []), "value", []) == "Adult")) {
                // line 135
                echo "        <p>Adult League</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 136
($context["node"] ?? null), "field_league_types", []), "value", []) == "Parathlete")) {
                // line 137
                echo "        <p>Parathletics League</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 138
($context["node"] ?? null), "field_league_types", []), "value", []) == "Special Needs")) {
                // line 139
                echo "        <p>Special Needs League</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 140
($context["node"] ?? null), "field_group_meetup_type", []), "value", []) == "Support")) {
                // line 141
                echo "        <p>Support Group</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 142
($context["node"] ?? null), "field_group_meetup_type", []), "value", []) == "Volunteer")) {
                // line 143
                echo "        <p>Volunteer Group</p>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 144
($context["node"] ?? null), "field_group_meetup_type", []), "value", []) == "Auxiliary")) {
                // line 145
                echo "        <p>Auxiliary Group</p>
      ";
            }
            // line 147
            echo "      <p id=\"Community-Subject\">
        ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_subject", []), "value", [])), "html", null, true);
            echo "
      </p>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 150
($context["node"] ?? null), "field_event_category", []), "value", []) == "Government")) {
            // line 151
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "Municipal")) {
                // line 152
                echo "        Municipality: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_parent_city_town", []), "entity", []), "name", []), "value", [])), "html", null, true);
                echo "<br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 153
($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "County")) {
                // line 154
                echo "        County: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_parent_county", []), "entity", []), "name", []), "value", [])), "html", null, true);
                echo "<br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 155
($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "State")) {
                // line 156
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_state_level_government", []), "value", []))) {
                    // line 157
                    echo "          State Level: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_state_level_government", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 159
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "Debate")) {
                // line 160
                echo "        Public Debate<br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 161
($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "Town Hall")) {
                // line 162
                echo "        Town Hall<br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 163
($context["node"] ?? null), "field_government_meeting_type", []), "value", []) == "Public Hearing")) {
                // line 164
                echo "        Public Hearing<br>
      ";
            }
            // line 166
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_meeting_type", []), "value", []))) {
                // line 167
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_meeting_type", []), "value", [])), "html", null, true);
                echo "
      ";
            }
            // line 169
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_deliberative_body", []), "value", []))) {
                // line 170
                echo "        <div id=\"Government-Deliberative\">
          Deliberative Body: ";
                // line 171
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_deliberative_body", []), "value", [])), "html", null, true);
                echo "<br>
        </div>
      ";
            }
            // line 174
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_committee_name", []), "value", []))) {
                // line 175
                echo "        <div id=\"Goverenmet-Committee\">
          Committe Name: ";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_committee_name", []), "value", [])), "html", null, true);
                echo "<br>
        </div>
      ";
            }
            // line 179
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_board_name", []), "value", []))) {
                // line 180
                echo "        <div id=\"Government-Board\">
          Board Name: ";
                // line 181
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_board_name", []), "value", [])), "html", null, true);
                echo "<br>
        </div>
      ";
            }
            // line 184
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_issue_info", []), "value", []))) {
                // line 185
                echo "        <div id=\"Government-Issue\">
          Issue Information: ";
                // line 186
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_issue_info", []), "value", [])), "html", null, true);
                echo "<br>
        </div>
      ";
            }
            // line 189
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_moderators", []), 0, []), "value", []))) {
                // line 190
                echo "        <div id=\"Governmet-Moderators\">
          ";
                // line 191
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_moderators", []), 1, []), "value", []))) {
                    // line 192
                    echo "            Moderators:<br>
            ";
                    // line 193
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_moderators", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["Moderator"]) {
                        // line 194
                        echo "              ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["Moderator"], "value", [])), "html", null, true);
                        echo "<br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Moderator'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo "          ";
                } else {
                    // line 197
                    echo "            Moderator: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_moderators", []), "value", [])), "html", null, true);
                    echo "<br>
          ";
                }
                // line 199
                echo "        </div>
      ";
            }
            // line 201
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_speakers", []), 0, []), "value", []))) {
                // line 202
                echo "        <div id=\"Government-Speaker\">
          ";
                // line 203
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_speakers", []), 1, []), "value", []))) {
                    // line 204
                    echo "            Speakers:<br>
            ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_speakers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["Speaker"]) {
                        // line 206
                        echo "              ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["Speaker"], "value", [])), "html", null, true);
                        echo "<br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Speaker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "          ";
                } else {
                    // line 209
                    echo "            Speaker: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_speakers", []), "value", [])), "html", null, true);
                    echo "<br>
          ";
                }
                // line 211
                echo "        </div>
      ";
            }
            // line 213
            echo "    ";
        } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_category", []), "value", []) == "Theatre")) {
            // line 214
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theatre_type", []), "value", []) == "Cinema")) {
                // line 215
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_cinema_type", []), "value", []))) {
                    // line 216
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_cinema_type", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 218
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theatre_type", []), "value", []) == "Community Theater")) {
                // line 219
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_opening_performance", []), "value", []) == "1")) {
                    // line 220
                    echo "          <p>Opening Performance</p>
        ";
                }
                // line 222
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_practices", []), "value", []))) {
                    // line 223
                    echo "          Practice: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_practices", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 225
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theatre_type", []), "value", []) == "Professional")) {
                // line 226
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_opening_performance", []), "value", []) == "1")) {
                    // line 227
                    echo "          <p>Opening Performance</p>
        ";
                }
                // line 229
                echo "      ";
            }
            // line 230
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_production_name", []), "value", []))) {
                // line 231
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_production_name", []), "value", [])), "html", null, true);
                echo "<br>
      ";
            }
            // line 233
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_directors", []), "value", []))) {
                // line 234
                echo "        Director: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_directors", []), "value", [])), "html", null, true);
                echo "<br>
      ";
            }
            // line 236
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_producers", []), "value", []))) {
                // line 237
                echo "        Producer: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_producers", []), "value", [])), "html", null, true);
                echo "<br>
      ";
            }
            // line 239
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_lead_actors", []), 0, []), "value", []))) {
                // line 240
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_lead_actors", []), 1, []), "value", []))) {
                    // line 241
                    echo "          Lead Actors:<br>
          ";
                    // line 242
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_lead_actors", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["Actor"]) {
                        // line 243
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["Actor"], "entity", []), "title", []), "value", [])), "html", null, true);
                        echo "<br>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Actor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "        ";
                } else {
                    // line 246
                    echo "          Lead Actor: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_lead_actors", []), "entity", []), "title", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 248
                echo "      ";
            }
            // line 249
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_musical", []), "value", []) == "1")) {
                // line 250
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_songbook_writers", []), 1, []), "value", []))) {
                    // line 251
                    echo "          Songbook Writers:<br>
          ";
                    // line 252
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_soongbook_writers", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["Writer"]) {
                        // line 253
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["Writer"], "value", [])), "html", null, true);
                        echo "<br>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Writer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "        ";
                } else {
                    // line 256
                    echo "          Songbook Writer: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_soongbook_writers", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 258
                echo "      ";
            }
            // line 259
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theater_group_page", []), "uri", []), "value", []))) {
                // line 260
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theater_group_page", []), "uri", [])), "html", null, true);
                echo "\" target=\"_blank\">
          See ";
                // line 261
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_theater_group_page", []), "title", [])), "html", null, true);
                echo " for more information
        </a>
      ";
            }
            // line 264
            echo "    ";
        } elseif (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_category", []), "value", []) == "Activity")) {
            // line 265
            echo "      ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_activity_event_type", []), "vaule", []))) {
                // line 266
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_activity_event_type", []), "value", [])), "html", null, true);
                echo "<br>
        ";
                // line 267
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_how_to_join", []), "value", []))) {
                    // line 268
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_how_to_join", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 270
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_requirements", []), "value", []))) {
                    // line 271
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_requirements", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 273
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_participant", []), 1, []), "value", []))) {
                    // line 274
                    echo "          Participants:<br>
          ";
                    // line 275
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_participant", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["Participant"]) {
                        // line 276
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["Participant"], "value", [])), "html", null, true);
                        echo "<br>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Participant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 278
                    echo "        ";
                } else {
                    // line 279
                    echo "          Participant: ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_participant", []), "value", [])), "html", null, true);
                    echo "<br>
        ";
                }
                // line 281
                echo "      ";
            }
            // line 282
            echo "    ";
        }
        // line 283
        echo "  </div>
  
  <div class=\"venue-and-time\">
    ";
        // line 286
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "title", []), "value", [])), "html", null, true);
        echo "<br>
      ";
        // line 287
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_date", []), "value", [])), "l, F j", "America/New_York"), "html", null, true);
        echo "<br>
    ";
        // line 288
        if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_show_time", []), "value", []) == "0")) {
            // line 289
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_date", []), "value", [])), "g:i a", "America/New_York"), "html", null, true);
            echo "<br>
    ";
        } else {
            // line 291
            echo "      Door: ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_date", []), "value", [])), "g:i a", "America/New_York"), "html", null, true);
            echo "<br>
      Show: ";
            // line 292
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_time_of_show", []), "value", [])), "g:i a", "America/New_York"), "html", null, true);
            echo "<br>
    ";
        }
        // line 294
        echo "  </div>
  
  <div class=\"event-ticket-info\">
    ";
        // line 297
        if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_is_the_event_free", []), "value", []) == "1")) {
            // line 298
            echo "      <p>This event is free to the public.</p>
    ";
        } else {
            // line 300
            echo "      ";
            // line 301
            echo "      ";
            $context["basicCostDisplay"] = ("\$" . twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_bottom_cost_range", []), "value", [])), 2, ".", ","));
            // line 302
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_cost_range", []), "value", []) == "1")) {
                // line 303
                echo "        ";
                $context["basicCostDisplay"] = ((("\$" . twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_bottom_cost_range", []), "value", [])), 2, ".", ",")) . " - ") . twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_top_cost_range", []), "value", [])), 2, ".", ","));
                // line 304
                echo "      ";
            }
            // line 305
            echo "      ";
            // line 306
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_at_door_price", []), "value", []) == "1")) {
                // line 307
                echo "        Tickets: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basicCostDisplay"] ?? null)), "html", null, true);
                echo "</span> advance <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_at_door", []), "value", [])), 2, ".", ","), "html", null, true);
                echo "</span> day of<br>
      ";
            } else {
                // line 309
                echo "        Tickets: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basicCostDisplay"] ?? null)), "html", null, true);
                echo "</span><br>
      ";
            }
            // line 311
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_childrens_price_discount", []), "value", []) == "1")) {
                // line 312
                echo "        Children: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_childrens_price", []), "value", [])), 2, ".", ","), "html", null, true);
                echo "</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 313
($context["node"] ?? null), "field_childrens_discount_dollar", []), "value", []) == "1")) {
                // line 314
                echo "        Children: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_childrens_dollars_discount", []), "value", [])), 2, ".", ","), "html", null, true);
                echo " off</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 315
($context["node"] ?? null), "field_childrens_discount_percent", []), "value", []) == "1")) {
                // line 316
                echo "        Children: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_childrens_percent_off", []), "value", [])), "html", null, true);
                echo "% off</span><br>
      ";
            }
            // line 318
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_senior_price_discount", []), "value", []) == "1")) {
                // line 319
                echo "        Seniors: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_senior_price", []), "value", [])), 2, ".", ","), "html", null, true);
                echo "</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 320
($context["node"] ?? null), "field_senior_discount_dollar", []), "value", []) == "1")) {
                // line 321
                echo "        Seniors: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_senior_dollars_discount", []), "value", [])), 2, ".", ","), "html", null, true);
                echo " off</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 322
($context["node"] ?? null), "field_senior_discount_percent", []), "value", []) == "1")) {
                // line 323
                echo "        Seniors: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_senior_percent_off", []), "value", [])), "html", null, true);
                echo "% off</span><br>
      ";
            }
            // line 325
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_student_price_discount", []), "value", []) == "1")) {
                // line 326
                echo "        Students: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_student_price", []), "value", [])), 2, ".", ","), "html", null, true);
                echo "</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 327
($context["node"] ?? null), "field_student_discount_dollar", []), "value", []) == "1")) {
                // line 328
                echo "        Students: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_student_dollars_off", []), "value", [])), 2, ".", ","), "html", null, true);
                echo " off</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 329
($context["node"] ?? null), "field_student_discount_percent", []), "value", []) == "1")) {
                // line 330
                echo "        Students: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_student_percent_off", []), "value", [])), "html", null, true);
                echo "% off</span><br>
      ";
            }
            // line 332
            echo "      ";
            if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_veterans_price_discount", []), "value", []) == "1")) {
                // line 333
                echo "        Veterans: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_veterans_price", []), "value", [])), 2, ".", ","), "html", null, true);
                echo "</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 334
($context["node"] ?? null), "field_veterans_discount_dollar", []), "value", []) == "1")) {
                // line 335
                echo "        Veterans: <span class=\"price\">\$";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_veterans_dollars_off", []), "value", [])), 2, ".", ","), "html", null, true);
                echo " off</span><br>
      ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 336
($context["node"] ?? null), "field_veterans_discount_percent", []), "value", []) == "1")) {
                // line 337
                echo "        Veterans: <span class=\"price\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_veterans_percent_off", []), "value", [])), "html", null, true);
                echo "% off</span><br>
      ";
            }
            // line 339
            echo "    ";
        }
        // line 340
        echo "  </div><br>
  
  <div class=\"event-blurb\">
    <p>";
        // line 343
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_event_description", []), "value", [])));
        echo "</p>
  </div>
  
  <div class=\"address-info\">
    ";
        // line 347
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_venue_address", []), "value", [])), "html", null, true);
        echo "<br>
\t  ";
        // line 348
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_city", []), "entity", []), "name", []), "value", [])), "html", null, true);
        echo ", ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_venue_state", []), "value", [])), "html", null, true);
        echo "
    ";
        // line 349
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_zip_code", []), "value", [])), "html", null, true);
        echo "<br>
    ";
        // line 359
        echo "    <div style=\"padding: 13px 0;\">
      <div class=\"map-box\" style=\"display:block;\">
        <iframe class=\"map-itself\" src=\"https://www.google.com/maps/embed/v1/place?q=";
        // line 361
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_venue_address", []), "value", [])), "html", null, true);
        echo "
          ";
        // line 362
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_city", []), "entity", []), "name", []), "value", [])), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_venue", []), "entity", []), "field_zip_code", []), "value", [])), "html", null, true);
        echo "
            &zoom=17&key=AIzaSyCdQhB6gNRYJLkPLpOsmWOHSf5LTFo_-tg\" height=\"500\">
        </iframe>
      </div
    </div>
  </div>
  <script>
\t  var x = document.getElementsByClassName(\"map-icon-box\");
\t  x[0].style.display = \"none\";
\t  x[1].style.display = \"none\";
\t  
\t  var y = document.getElementsByClassName(\"map-itself\");
\t  y[0].width = \"250\";
\t  y[1].width = \"500\";
\t  
\t  var z = document.getElementsByClassName(\"map-box\");
\t  z[0].style.display = \"block\";
\t  z[1].style.display = \"block\";
  </script>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sundialtheme/templates/components/layouts/node--events--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 362,  852 => 361,  848 => 359,  844 => 349,  838 => 348,  834 => 347,  827 => 343,  822 => 340,  819 => 339,  813 => 337,  811 => 336,  806 => 335,  804 => 334,  799 => 333,  796 => 332,  790 => 330,  788 => 329,  783 => 328,  781 => 327,  776 => 326,  773 => 325,  767 => 323,  765 => 322,  760 => 321,  758 => 320,  753 => 319,  750 => 318,  744 => 316,  742 => 315,  737 => 314,  735 => 313,  730 => 312,  727 => 311,  721 => 309,  713 => 307,  710 => 306,  708 => 305,  705 => 304,  702 => 303,  699 => 302,  696 => 301,  694 => 300,  690 => 298,  688 => 297,  683 => 294,  678 => 292,  673 => 291,  667 => 289,  665 => 288,  661 => 287,  657 => 286,  652 => 283,  649 => 282,  646 => 281,  640 => 279,  637 => 278,  628 => 276,  624 => 275,  621 => 274,  618 => 273,  612 => 271,  609 => 270,  603 => 268,  601 => 267,  596 => 266,  593 => 265,  590 => 264,  584 => 261,  579 => 260,  576 => 259,  573 => 258,  567 => 256,  564 => 255,  555 => 253,  551 => 252,  548 => 251,  545 => 250,  542 => 249,  539 => 248,  533 => 246,  530 => 245,  521 => 243,  517 => 242,  514 => 241,  511 => 240,  508 => 239,  502 => 237,  499 => 236,  493 => 234,  490 => 233,  484 => 231,  481 => 230,  478 => 229,  474 => 227,  471 => 226,  468 => 225,  462 => 223,  459 => 222,  455 => 220,  452 => 219,  449 => 218,  443 => 216,  440 => 215,  437 => 214,  434 => 213,  430 => 211,  424 => 209,  421 => 208,  412 => 206,  408 => 205,  405 => 204,  403 => 203,  400 => 202,  397 => 201,  393 => 199,  387 => 197,  384 => 196,  375 => 194,  371 => 193,  368 => 192,  366 => 191,  363 => 190,  360 => 189,  354 => 186,  351 => 185,  348 => 184,  342 => 181,  339 => 180,  336 => 179,  330 => 176,  327 => 175,  324 => 174,  318 => 171,  315 => 170,  312 => 169,  306 => 167,  303 => 166,  299 => 164,  297 => 163,  294 => 162,  292 => 161,  289 => 160,  286 => 159,  280 => 157,  277 => 156,  275 => 155,  270 => 154,  268 => 153,  263 => 152,  260 => 151,  258 => 150,  253 => 148,  250 => 147,  246 => 145,  244 => 144,  241 => 143,  239 => 142,  236 => 141,  234 => 140,  231 => 139,  229 => 138,  226 => 137,  224 => 136,  221 => 135,  219 => 134,  216 => 133,  214 => 132,  211 => 131,  209 => 130,  206 => 129,  203 => 128,  200 => 127,  196 => 125,  187 => 123,  183 => 122,  179 => 120,  177 => 119,  170 => 117,  164 => 115,  161 => 114,  158 => 113,  155 => 112,  153 => 111,  150 => 110,  146 => 108,  137 => 106,  133 => 105,  129 => 103,  127 => 102,  122 => 101,  119 => 100,  115 => 98,  112 => 97,  106 => 96,  103 => 95,  98 => 94,  96 => 93,  93 => 92,  91 => 91,  84 => 87,  80 => 85,  74 => 82,  70 => 81,  67 => 80,  65 => 79,  55 => 73,);
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
  
  <div class=\"b-w-label block-title\">
    Event Details
  </div>
  
  {% if content.field_event_image %}
    <div style=\"text-align:center;\">
      <img src=\"{{ file_url(node.field_event_image.entity.field_image.entity.uri.value) }}\"
           alt=\"{{ node.field_event_image.entity.field_image.entity.alt.value }}\" class=\"img-fluid\">
    </div>
  {% endif %}
  
\t<h1 id=\"Event-title-box\" class=\"event-title-box title-box block-title\">
\t   {{ node.title.value }}
\t</h1>
  
  <div style=\"font-family: roboto slab;\">
    {% if node.field_event_category.value == 'Performance' %}
      <div class=\"performer-bill-display\">
        {% set numberOfPerformers = 0 %}
        {% for performer in node.field_bill_performer_reference %}
          {% set numberOfPerformers = numberOfPerformers + 1 %}
        {% endfor %}
        {% if numberOfPerformers > 0 %}
          <span class=\"bill-performing-style\">PERFORMING:</span><br>
        {% endif %}
        {% set twigIndex = numberOfPerformers - 1 %}
        <div class=\"block-title lead-performer-display\">{{ node.field_bill_performer_reference[0].entity.title.value }}</div>
        {% if numberOfPerformers > 1 %}
        <div class=\"secondary-bill\">
          <span class=\"bill-with-style\">WITH:</span><br>
          {% for i in 1..twigIndex %}
            <div class=\"block-title supporting-performer-display\">{{ node.field_bill_performer_reference[i].entity.title.value }}</div>
          {% endfor %}
        </div>
        {% endif %}
      </div>
    {% elseif node.field_event_category.value == 'Sports' %}
      {% if node.field_sports_event_type.value == 'Contest' %}
        {% set teamOne = node.field_players_contestants.0.entity.field_display_name.value %}
        {% set teamTwo = node.field_players_contestants.1.entity.field_display_name.value %}
        <div class=\"event-sport-label\">{{ node.field_sport_type.entity.name.value }}: </div>
        <p class=\"event-teams-match-display\">
          {{ teamOne }} vs {{ teamTwo }}
        </p>
      {% elseif node.field_sports_event_type.value == 'Tournament' %}
        <p class=\"event-tournament-list\">
          Competing:<br>
          {% for team in node.field_players_contestants %}
            {{ team.entity.field_display_name.value }}<br>
          {% endfor %}
        </p>
      {% endif %}
    {% elseif node.field_event_category.value == 'Community' %}
      {% if node.field_class_type.value == 'Adult' %}
        <p>Adult Class</p>
      {% elseif node.field_class_type.value == 'Youth' %}
        <p>Youth Class</p>
      {% elseif node.field_league_types.value == 'Youth' %}
        <p>Youth League</p>
      {% elseif node.field_league_types.value == 'Adult' %}
        <p>Adult League</p>
      {% elseif node.field_league_types.value == 'Parathlete' %}
        <p>Parathletics League</p>
      {% elseif node.field_league_types.value == 'Special Needs' %}
        <p>Special Needs League</p>
      {% elseif node.field_group_meetup_type.value == 'Support' %}
        <p>Support Group</p>
      {% elseif node.field_group_meetup_type.value == 'Volunteer' %}
        <p>Volunteer Group</p>
      {% elseif node.field_group_meetup_type.value == 'Auxiliary' %}
        <p>Auxiliary Group</p>
      {% endif %}
      <p id=\"Community-Subject\">
        {{ node.field_subject.value }}
      </p>
    {% elseif node.field_event_category.value == 'Government' %}
      {% if node.field_government_meeting_type.value == 'Municipal' %}
        Municipality: {{ node.field_parent_city_town.entity.name.value }}<br>
      {% elseif node.field_government_meeting_type.value == 'County' %}
        County: {{ node.field_parent_county.entity.name.value }}<br>
      {% elseif node.field_government_meeting_type.value == 'State' %}
        {% if node.field_state_level_government.value|length %}
          State Level: {{ node.field_state_level_government.value }}<br>
        {% endif %}
      {% elseif node.field_government_meeting_type.value == 'Debate' %}
        Public Debate<br>
      {% elseif node.field_government_meeting_type.value == 'Town Hall' %}
        Town Hall<br>
      {% elseif node.field_government_meeting_type.value == 'Public Hearing' %}
        Public Hearing<br>
      {% endif %}
      {% if node.field_meeting_type.value|length %}
        {{ node.field_meeting_type.value }}
      {% endif %}
      {% if node.field_deliberative_body.value|length %}
        <div id=\"Government-Deliberative\">
          Deliberative Body: {{ node.field_deliberative_body.value }}<br>
        </div>
      {% endif %}
      {% if node.field_committee_name.value|length %}
        <div id=\"Goverenmet-Committee\">
          Committe Name: {{ node.field_committee_name.value }}<br>
        </div>
      {% endif %}
      {% if node.field_board_name.value|length %}
        <div id=\"Government-Board\">
          Board Name: {{ node.field_board_name.value }}<br>
        </div>
      {% endif %}
      {% if node.field_issue_info.value|length %}
        <div id=\"Government-Issue\">
          Issue Information: {{ node.field_issue_info.value }}<br>
        </div>
      {% endif %}
      {% if node.field_moderators.0.value|length %}
        <div id=\"Governmet-Moderators\">
          {% if node.field_moderators.1.value|length %}
            Moderators:<br>
            {% for Moderator in node.field_moderators %}
              {{ Moderator.value }}<br>
            {% endfor %}
          {% else %}
            Moderator: {{ node.field_moderators.value }}<br>
          {% endif %}
        </div>
      {% endif %}
      {% if node.field_speakers.0.value|length %}
        <div id=\"Government-Speaker\">
          {% if node.field_speakers.1.value|length %}
            Speakers:<br>
            {% for Speaker in node.field_speakers %}
              {{ Speaker.value }}<br>
            {% endfor %}
          {% else %}
            Speaker: {{ node.field_speakers.value }}<br>
          {% endif %}
        </div>
      {% endif %}
    {% elseif node.field_event_category.value == 'Theatre' %}
      {% if node.field_theatre_type.value == 'Cinema' %}
        {% if node.field_cinema_type.value|length %}
          {{ node.field_cinema_type.value }}<br>
        {% endif %}
      {% elseif node.field_theatre_type.value == 'Community Theater' %}
        {% if node.field_opening_performance.value == \"1\" %}
          <p>Opening Performance</p>
        {% endif %}
        {% if node.field_practices.value|length %}
          Practice: {{ node.field_practices.value }}<br>
        {% endif %}
      {% elseif node.field_theatre_type.value == 'Professional' %}
        {% if node.field_opening_performance.value == \"1\" %}
          <p>Opening Performance</p>
        {% endif %}
      {% endif %}
      {% if node.field_production_name.value|length %}
        {{ node.field_production_name.value }}<br>
      {% endif %}
      {% if node.field_directors.value|length %}
        Director: {{ node.field_directors.value }}<br>
      {% endif %}
      {% if node.field_producers.value|length %}
        Producer: {{ node.field_producers.value }}<br>
      {% endif %}
      {% if node.field_lead_actors.0.value|length %}
        {% if node.field_lead_actors.1.value|length %}
          Lead Actors:<br>
          {% for Actor in node.field_lead_actors %}
            {{ Actor.entity.title.value }}<br>
          {% endfor %}
        {% else %}
          Lead Actor: {{ node.field_lead_actors.entity.title.value }}<br>
        {% endif %}
      {% endif %}
      {% if node.field_musical.value == \"1\" %}
        {% if node.field_songbook_writers.1.value|length %}
          Songbook Writers:<br>
          {% for Writer in node.field_soongbook_writers %}
            {{ Writer.value }}<br>
          {% endfor %}
        {% else %}
          Songbook Writer: {{ node.field_soongbook_writers.value }}<br>
        {% endif %}
      {% endif %}
      {% if node.field_theater_group_page.uri.value|length %}
        <a href=\"{{ node.field_theater_group_page.uri }}\" target=\"_blank\">
          See {{ node.field_theater_group_page.title }} for more information
        </a>
      {% endif %}
    {% elseif node.field_event_category.value == 'Activity' %}
      {% if node.field_activity_event_type.vaule|length %}
        {{ node.field_activity_event_type.value }}<br>
        {% if node.field_how_to_join.value|length %}
          {{ node.field_how_to_join.value }}<br>
        {% endif %}
        {% if node.field_requirements.value|length %}
          {{ node.field_requirements.value }}<br>
        {% endif %}
        {% if node.field_participant.1.value|length %}
          Participants:<br>
          {% for Participant in node.field_participant %}
            {{ Participant.value }}<br>
          {% endfor %}
        {% else %}
          Participant: {{ node.field_participant.value }}<br>
        {% endif %}
      {% endif %}
    {% endif %}
  </div>
  
  <div class=\"venue-and-time\">
    {{ node.field_venue.entity.title.value }}<br>
      {{ node.field_event_date.value|date(\"l, F j\", \"America/New_York\") }}<br>
    {% if node.field_show_time.value == \"0\" %}
      {{ node.field_event_date.value|date(\"g:i a\", \"America/New_York\") }}<br>
    {% else %}
      Door: {{ node.field_event_date.value|date(\"g:i a\", \"America/New_York\") }}<br>
      Show: {{ node.field_time_of_show.value|date(\"g:i a\", \"America/New_York\") }}<br>
    {% endif %}
  </div>
  
  <div class=\"event-ticket-info\">
    {% if node.field_is_the_event_free.value == \"1\" %}
      <p>This event is free to the public.</p>
    {% else %}
      {# see if you need to display a range #}
      {% set basicCostDisplay = \"\$\"~node.field_bottom_cost_range.value|number_format(2, '.', ',') %}
      {% if node.field_cost_range.value == \"1\" %}
        {% set basicCostDisplay = \"\$\"~node.field_bottom_cost_range.value|number_format(2, '.', ',')~\" - \"~node.field_top_cost_range.value|number_format(2, '.', ',') %}
      {% endif %}
      {# now display the basic cost or door and advnce costs #}
      {% if node.field_at_door_price.value == \"1\" %}
        Tickets: <span class=\"price\">{{ basicCostDisplay }}</span> advance <span class=\"price\">\${{ node.field_at_door.value|number_format(2, '.', ',') }}</span> day of<br>
      {% else %}
        Tickets: <span class=\"price\">{{ basicCostDisplay }}</span><br>
      {% endif %}
      {% if node.field_childrens_price_discount.value == \"1\" %}
        Children: <span class=\"price\">\${{ node.field_childrens_price.value|number_format(2, '.', ',') }}</span><br>
      {% elseif node.field_childrens_discount_dollar.value == \"1\" %}
        Children: <span class=\"price\">\${{ node.field_childrens_dollars_discount.value|number_format(2, '.', ',') }} off</span><br>
      {% elseif node.field_childrens_discount_percent.value == \"1\" %}
        Children: <span class=\"price\">{{ node.field_childrens_percent_off.value }}% off</span><br>
      {% endif %}
      {% if node.field_senior_price_discount.value == \"1\" %}
        Seniors: <span class=\"price\">\${{ node.field_senior_price.value|number_format(2, '.', ',') }}</span><br>
      {% elseif node.field_senior_discount_dollar.value == \"1\" %}
        Seniors: <span class=\"price\">\${{ node.field_senior_dollars_discount.value|number_format(2, '.', ',') }} off</span><br>
      {% elseif node.field_senior_discount_percent.value == \"1\" %}
        Seniors: <span class=\"price\">{{ node.field_senior_percent_off.value }}% off</span><br>
      {% endif %}
      {% if node.field_student_price_discount.value == \"1\" %}
        Students: <span class=\"price\">\${{ node.field_student_price.value|number_format(2, '.', ',') }}</span><br>
      {% elseif node.field_student_discount_dollar.value == \"1\" %}
        Students: <span class=\"price\">\${{ node.field_student_dollars_off.value|number_format(2, '.', ',') }} off</span><br>
      {% elseif node.field_student_discount_percent.value == \"1\" %}
        Students: <span class=\"price\">{{ node.field_student_percent_off.value }}% off</span><br>
      {% endif %}
      {% if node.field_veterans_price_discount.value == \"1\" %}
        Veterans: <span class=\"price\">\${{ node.field_veterans_price.value|number_format(2, '.', ',') }}</span><br>
      {% elseif node.field_veterans_discount_dollar.value == \"1\" %}
        Veterans: <span class=\"price\">\${{ node.field_veterans_dollars_off.value|number_format(2, '.', ',') }} off</span><br>
      {% elseif node.field_veterans_discount_percent.value == \"1\" %}
        Veterans: <span class=\"price\">{{ node.field_veterans_percent_off.value }}% off</span><br>
      {% endif %}
    {% endif %}
  </div><br>
  
  <div class=\"event-blurb\">
    <p>{{ node.field_event_description.value|raw }}</p>
  </div>
  
  <div class=\"address-info\">
    {{ node.field_venue.entity.field_venue_address.value }}<br>
\t  {{ node.field_venue.entity.field_city.entity.name.value }}, {{ node.field_venue.entity.field_venue_state.value }}
    {{ node.field_venue.entity.field_zip_code.value }}<br>
    {#
    <div style=\"float: right\">
      <a>
        <img src=\"/themes/custom/sundialtheme/images/social_facebook.png\" class=\"social-links\">
      </a>
      <a>
        <img src=\"/themes/custom/sundialtheme/images/social_twitter.png\" class=\"social-links\">
      </a>
    </div>#}
    <div style=\"padding: 13px 0;\">
      <div class=\"map-box\" style=\"display:block;\">
        <iframe class=\"map-itself\" src=\"https://www.google.com/maps/embed/v1/place?q={{ node.field_venue.entity.field_venue_address.value }}
          {{ node.field_venue.entity.field_city.entity.name.value }},{{ node.field_venue.entity.field_zip_code.value }}
            &zoom=17&key=AIzaSyCdQhB6gNRYJLkPLpOsmWOHSf5LTFo_-tg\" height=\"500\">
        </iframe>
      </div
    </div>
  </div>
  <script>
\t  var x = document.getElementsByClassName(\"map-icon-box\");
\t  x[0].style.display = \"none\";
\t  x[1].style.display = \"none\";
\t  
\t  var y = document.getElementsByClassName(\"map-itself\");
\t  y[0].width = \"250\";
\t  y[1].width = \"500\";
\t  
\t  var z = document.getElementsByClassName(\"map-box\");
\t  z[0].style.display = \"block\";
\t  z[1].style.display = \"block\";
  </script>
</article>
", "themes/custom/sundialtheme/templates/components/layouts/node--events--full.html.twig", "/home/devpiedmont/public_html/themes/custom/sundialtheme/templates/components/layouts/node--events--full.html.twig");
    }
}
