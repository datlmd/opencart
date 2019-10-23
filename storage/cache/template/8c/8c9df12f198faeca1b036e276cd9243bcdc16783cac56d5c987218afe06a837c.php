<?php

/* setting/setting.twig */
class __TwigTemplate_f0448f55974e35adba332c3c586b7b39f3bc33c39be5eb4954b966ff2dbbdf40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 26
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"form-group row required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 44
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  ";
        // line 45
        if (($context["error_meta_title"] ?? null)) {
            // line 46
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 47
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 62
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 66
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", []) == ($context["config_theme"] ?? null))) {
                // line 67
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", []);
                echo "</option>
                      ";
            } else {
                // line 69
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", []);
                echo "</option>
                      ";
            }
            // line 71
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []) == ($context["config_layout_id"] ?? null))) {
                // line 82
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                echo "</option>
                      ";
            } else {
                // line 84
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                echo "</option>
                      ";
            }
            // line 86
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"form-group row required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 95
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 96
        if (($context["error_name"] ?? null)) {
            // line 97
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 98
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 101
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 103
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  ";
        // line 104
        if (($context["error_owner"] ?? null)) {
            // line 105
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 106
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 112
        if (($context["error_address"] ?? null)) {
            // line 113
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 114
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 117
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 119
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 120
        echo ($context["help_geocode"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 124
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 126
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  ";
        // line 127
        if (($context["error_email"] ?? null)) {
            // line 128
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 132
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 134
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  ";
        // line 135
        if (($context["error_telephone"] ?? null)) {
            // line 136
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 137
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-fax\" class=\"col-sm-2 col-form-label\">";
        // line 140
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 142
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 146
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 149
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 151
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 152
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 158
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 160
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 161
        echo ($context["help_open"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 165
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 167
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 168
        echo ($context["help_comment"] ?? null);
        echo "</small>
                </div>
              </div>
              ";
        // line 171
        if (($context["locations"] ?? null)) {
            // line 172
            echo "                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 173
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 177
                echo "                        <label class=\"form-check\">
                          ";
                // line 178
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []), ($context["config_location"] ?? null))) {
                    // line 179
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []);
                    echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", []);
                    echo "
                          ";
                } else {
                    // line 182
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []);
                    echo "\" class=\"form-check-input\"/>
                            ";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", []);
                    echo "
                          ";
                }
                // line 185
                echo "                        </label>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                    </div>
                    <small class=\"form-text text-muted\">";
            // line 188
            echo ($context["help_location"] ?? null);
            echo "</small>
                  </div>
                </div>
              ";
        }
        // line 192
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["config_country_id"] ?? null))) {
                // line 200
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>
                      ";
            } else {
                // line 202
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>
                      ";
            }
            // line 204
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 215
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 219
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []) == ($context["config_timezone"] ?? null))) {
                // line 220
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", []);
                echo "</option>
                      ";
            } else {
                // line 222
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", []);
                echo "</option>
                      ";
            }
            // line 224
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 229
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 233
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", []) == ($context["config_language"] ?? null))) {
                // line 234
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                      ";
            } else {
                // line 236
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                      ";
            }
            // line 238
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-admin-language\" class=\"col-sm-2 col-form-label\">";
        // line 243
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", []) == ($context["config_admin_language"] ?? null))) {
                // line 248
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                      ";
            } else {
                // line 250
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                      ";
            }
            // line 252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 257
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 261
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", []) == ($context["config_currency"] ?? null))) {
                // line 262
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", []);
                echo "</option>
                      ";
            } else {
                // line 264
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", []);
                echo "</option>
                      ";
            }
            // line 266
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 268
        echo ($context["help_currency"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 272
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 276
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []) == ($context["config_currency_engine"] ?? null))) {
                // line 277
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", []);
                echo "</option>
                      ";
            } else {
                // line 279
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", []);
                echo "</option>
                      ";
            }
            // line 281
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 286
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                    ";
        // line 289
        if (($context["config_currency_auto"] ?? null)) {
            // line 290
            echo "                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/> ";
            // line 291
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 293
            echo "                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 294
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        }
        // line 296
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 297
        echo ($context["help_currency_auto"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 301
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []) == ($context["config_length_class_id"] ?? null))) {
                // line 306
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>
                      ";
            } else {
                // line 308
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>
                      ";
            }
            // line 310
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 315
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 319
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []) == ($context["config_weight_class_id"] ?? null))) {
                // line 320
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>
                      ";
            } else {
                // line 322
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>
                      ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">

              <fieldset>
                <legend><a href=\"#collapse-product\" data-toggle=\"collapse\">";
        // line 332
        echo ($context["text_product"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-product\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 335
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 338
        if (($context["config_product_count"] ?? null)) {
            // line 339
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"0\"/> ";
            // line 340
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 342
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/> ";
            // line 343
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 345
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 346
        echo ($context["help_product_count"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-admin-limit\" class=\"col-sm-2 col-form-label\">";
        // line 350
        echo ($context["entry_limit_admin"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 352
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 353
        echo ($context["help_limit_admin"] ?? null);
        echo "</small>
                      ";
        // line 354
        if (($context["error_limit_admin"] ?? null)) {
            // line 355
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                      ";
        }
        // line 356
        echo "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-review\" data-toggle=\"collapse\">";
        // line 362
        echo ($context["text_review"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-review\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 365
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 368
        if (($context["config_review_status"] ?? null)) {
            // line 369
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"0\"/> ";
            // line 370
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 372
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/> ";
            // line 373
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 375
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 376
        echo ($context["help_review"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 380
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 383
        if (($context["config_review_guest"] ?? null)) {
            // line 384
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\"/> ";
            // line 385
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 387
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 388
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 390
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 391
        echo ($context["help_review_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-voucher\" data-toggle=\"collapse\">";
        // line 398
        echo ($context["text_voucher"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-voucher\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 401
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 403
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 404
        echo ($context["help_voucher_min"] ?? null);
        echo "</small>
                      ";
        // line 405
        if (($context["error_voucher_min"] ?? null)) {
            // line 406
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                      ";
        }
        // line 407
        echo "</div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 410
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 412
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 413
        echo ($context["help_voucher_max"] ?? null);
        echo "</small>
                      ";
        // line 414
        if (($context["error_voucher_max"] ?? null)) {
            // line 415
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                      ";
        }
        // line 416
        echo "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-legal\" data-toggle=\"collapse\">";
        // line 422
        echo ($context["text_legal"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-legal\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 425
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-control\">
                        <option value=\"0\">";
        // line 428
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 429
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 430
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_cookie_id"] ?? null))) {
                // line 431
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 433
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 435
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 437
        echo ($context["help_cookie"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 441
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-control\">
                        <option value=\"0\">";
        // line 444
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 446
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_gdpr_id"] ?? null))) {
                // line 447
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 449
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 451
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 453
        echo ($context["help_gdpr"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 457
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 459
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 460
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-tax\" data-toggle=\"collapse\">";
        // line 467
        echo ($context["text_tax"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-tax\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 470
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 473
        if (($context["config_tax"] ?? null)) {
            // line 474
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"0\"/> ";
            // line 475
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 477
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/> ";
            // line 478
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 480
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 484
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                        <option value=\"\">";
        // line 487
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 488
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 489
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 491
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        }
        // line 493
        echo "                        ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 494
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 496
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        }
        // line 498
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 499
        echo ($context["help_tax_default"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 503
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                        <option value=\"\">";
        // line 506
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 507
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 508
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 510
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                        ";
        }
        // line 512
        echo "                        ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 513
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 515
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
                        ";
        }
        // line 517
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 518
        echo ($context["help_tax_customer"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-account\" data-toggle=\"collapse\">";
        // line 525
        echo ($context["text_account"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-account\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 528
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 531
        if (($context["config_customer_online"] ?? null)) {
            // line 532
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\"/> ";
            // line 533
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 535
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/> ";
            // line 536
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 538
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 539
        echo ($context["help_customer_online"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 543
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 546
        if (($context["config_customer_activity"] ?? null)) {
            // line 547
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/> ";
            // line 548
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 550
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/> ";
            // line 551
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 553
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 554
        echo ($context["help_customer_activity"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 558
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 561
        if (($context["config_customer_search"] ?? null)) {
            // line 562
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\"/> ";
            // line 563
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 565
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/> ";
            // line 566
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 568
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 572
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                        ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 576
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == ($context["config_customer_group_id"] ?? null))) {
                // line 577
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 579
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>
                          ";
            }
            // line 581
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 583
        echo ($context["help_customer_group"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 587
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 591
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []), ($context["config_customer_group_display"] ?? null))) {
                // line 592
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 593
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "
                            ";
            } else {
                // line 595
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 596
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "
                            ";
            }
            // line 597
            echo "</label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 600
        echo ($context["help_customer_group_display"] ?? null);
        echo "</small>
                      ";
        // line 601
        if (($context["error_customer_group_display"] ?? null)) {
            // line 602
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                      ";
        }
        // line 603
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 606
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 609
        if (($context["config_customer_price"] ?? null)) {
            // line 610
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\"/> ";
            // line 611
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 613
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/> ";
            // line 614
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 616
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 617
        echo ($context["help_customer_price"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 621
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 623
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 624
        echo ($context["help_login_attempts"] ?? null);
        echo "</small>
                      ";
        // line 625
        if (($context["error_login_attempts"] ?? null)) {
            // line 626
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                      ";
        }
        // line 627
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 630
        echo ($context["entry_account"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                        <option value=\"0\">";
        // line 633
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 634
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 635
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_account_id"] ?? null))) {
                // line 636
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 638
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 640
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 642
        echo ($context["help_account"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-checkout\" data-toggle=\"collapse\">";
        // line 649
        echo ($context["text_checkout"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-checkout\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 652
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 654
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 655
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 659
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 662
        if (($context["config_cart_weight"] ?? null)) {
            // line 663
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/> ";
            // line 664
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 666
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/> ";
            // line 667
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 669
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 670
        echo ($context["help_cart_weight"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 674
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 677
        if (($context["config_checkout_guest"] ?? null)) {
            // line 678
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/> ";
            // line 679
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 681
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/> ";
            // line 682
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 684
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 685
        echo ($context["help_checkout_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 689
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                        <option value=\"0\">";
        // line 692
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 693
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 694
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_checkout_id"] ?? null))) {
                // line 695
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 697
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 699
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 701
        echo ($context["help_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 705
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                        ";
        // line 708
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 709
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []) == ($context["config_order_status_id"] ?? null))) {
                // line 710
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 712
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>
                          ";
            }
            // line 714
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 716
        echo ($context["help_order_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-process-status\" class=\"col-sm-2 col-form-label\">";
        // line 720
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 724
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []), ($context["config_processing_status"] ?? null))) {
                // line 725
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 726
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "
                            ";
            } else {
                // line 728
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 729
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "
                            ";
            }
            // line 731
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 733
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 734
        echo ($context["help_processing_status"] ?? null);
        echo "</small>
                      ";
        // line 735
        if (($context["error_processing_status"] ?? null)) {
            // line 736
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                      ";
        }
        // line 738
        echo "                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-complete-status\" class=\"col-sm-2 col-form-label\">";
        // line 741
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 745
            echo "                          <label class=\"form-check\">
                            ";
            // line 746
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []), ($context["config_complete_status"] ?? null))) {
                // line 747
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 748
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "
                            ";
            } else {
                // line 750
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "
                            ";
            }
            // line 753
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 756
        echo ($context["help_complete_status"] ?? null);
        echo "</small>
                      ";
        // line 757
        if (($context["error_complete_status"] ?? null)) {
            // line 758
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                      ";
        }
        // line 759
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 762
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                        ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 766
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []) == ($context["config_fraud_status_id"] ?? null))) {
                // line 767
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 769
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>
                          ";
            }
            // line 771
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 773
        echo ($context["help_fraud_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 777
        echo ($context["entry_api"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                        <option value=\"0\">";
        // line 780
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 781
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 782
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []) == ($context["config_api_id"] ?? null))) {
                // line 783
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", []);
                echo "</option>
                          ";
            } else {
                // line 785
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", []);
                echo "</option>
                          ";
            }
            // line 787
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 788
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 789
        echo ($context["help_api"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-stock\" data-toggle=\"collapse\">";
        // line 796
        echo ($context["text_stock"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-stock\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 799
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 802
        if (($context["config_stock_display"] ?? null)) {
            // line 803
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\"/> ";
            // line 804
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 806
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/> ";
            // line 807
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 809
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 810
        echo ($context["help_stock_display"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 814
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 817
        if (($context["config_stock_warning"] ?? null)) {
            // line 818
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/> ";
            // line 819
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 821
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/> ";
            // line 822
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 824
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 825
        echo ($context["help_stock_warning"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 829
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 832
        if (($context["config_stock_checkout"] ?? null)) {
            // line 833
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/> ";
            // line 834
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 836
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/> ";
            // line 837
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 839
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 840
        echo ($context["help_stock_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-affiliate\" data-toggle=\"collapse\">";
        // line 847
        echo ($context["text_affiliate"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-affiliate\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 850
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                        ";
        // line 853
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 854
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 855
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 857
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>
                          ";
            }
            // line 859
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 860
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 864
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 867
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 868
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/> ";
            // line 869
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 871
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/> ";
            // line 872
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 874
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 875
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 879
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                        ";
        // line 882
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 883
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/> ";
            // line 884
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 886
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/> ";
            // line 887
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 889
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 890
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 894
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 896
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 897
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 901
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                        <option value=\"0\">";
        // line 904
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 906
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_affiliate_id"] ?? null))) {
                // line 907
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 909
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 911
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 913
        echo ($context["help_affiliate"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-return\" data-toggle=\"collapse\">";
        // line 920
        echo ($context["text_return"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-return\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 923
        echo ($context["entry_return"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                        <option value=\"0\">";
        // line 926
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 927
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 928
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_return_id"] ?? null))) {
                // line 929
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 931
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>
                          ";
            }
            // line 933
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 934
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 935
        echo ($context["help_return"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 939
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                        ";
        // line 942
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 943
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []) == ($context["config_return_status_id"] ?? null))) {
                // line 944
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 946
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", []);
                echo "</option>
                          ";
            }
            // line 948
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 949
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 950
        echo ($context["help_return_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-captcha\" data-toggle=\"collapse\">";
        // line 957
        echo ($context["text_captcha"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-captcha\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 960
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                        <option value=\"\">";
        // line 963
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 964
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 965
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []) == ($context["config_captcha"] ?? null))) {
                // line 966
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", []);
                echo "</option>
                          ";
            } else {
                // line 968
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", []);
                echo "</option>
                          ";
            }
            // line 970
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 971
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 972
        echo ($context["help_captcha"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 976
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 979
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 980
            echo "                          <label class=\"form-check\">
                            ";
            // line 981
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []), ($context["config_captcha_page"] ?? null))) {
                // line 982
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                              ";
                // line 983
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", []);
                echo "
                            ";
            } else {
                // line 985
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []);
                echo "\" class=\"form-check-input\"/>
                              ";
                // line 986
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", []);
                echo "
                            ";
            }
            // line 988
            echo "                          </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 990
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 1000
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1003
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1005
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1006
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 1012
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1015
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1017
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1018
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                  <small class=\"form-text text-muted\">";
        // line 1021
        echo ($context["help_icon"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>

            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1028
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1030
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      ";
        // line 1033
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1034
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1036
            echo "                        <option value=\"mail\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      ";
        }
        // line 1038
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1039
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 1041
            echo "                        <option value=\"smtp\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      ";
        }
        // line 1043
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 1044
        echo ($context["help_mail_engine"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1048
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1050
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1051
        echo ($context["help_mail_parameter"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1055
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1057
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1058
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1062
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1064
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1068
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1070
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1071
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1075
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1077
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1081
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1083
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1088
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1090
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1093
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1094
            echo "                        <label class=\"form-check\">
                          ";
            // line 1095
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []), ($context["config_mail_alert"] ?? null))) {
                // line 1096
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 1097
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", []);
                echo "
                          ";
            } else {
                // line 1099
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []);
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 1100
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", []);
                echo "
                          ";
            }
            // line 1102
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1104
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1105
        echo ($context["help_mail_alert"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1109
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1111
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1112
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1119
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1121
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1124
        if (($context["config_maintenance"] ?? null)) {
            // line 1125
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\"/> ";
            // line 1126
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1128
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/> ";
            // line 1129
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1131
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1132
        echo ($context["help_maintenance"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1136
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1139
        if (($context["config_seo_url"] ?? null)) {
            // line 1140
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\"/> ";
            // line 1141
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1143
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/> ";
            // line 1144
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1146
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1147
        echo ($context["help_seo_url"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1151
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1153
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1154
        echo ($context["help_robots"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1158
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1160
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1161
        echo ($context["help_compression"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1166
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1168
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1171
        if (($context["config_password"] ?? null)) {
            // line 1172
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"0\"/> ";
            // line 1173
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1175
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/> ";
            // line 1176
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1178
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1179
        echo ($context["help_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1183
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1186
        if (($context["config_shared"] ?? null)) {
            // line 1187
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"0\"/> ";
            // line 1188
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1190
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/> ";
            // line 1191
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1193
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1194
        echo ($context["help_shared"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1198
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1200
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1201
        echo ($context["help_encryption"] ?? null);
        echo "</small>
                    ";
        // line 1202
        if (($context["error_encryption"] ?? null)) {
            // line 1203
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1204
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1208
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1210
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1212
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1213
        echo ($context["help_file_max_size"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1217
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1219
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1220
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1221
        if (($context["error_extension"] ?? null)) {
            // line 1222
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_extension"] ?? null);
            echo "</div>
                    ";
        }
        // line 1224
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1227
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1229
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1230
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</small>
                    ";
        // line 1231
        if (($context["error_mime"] ?? null)) {
            // line 1232
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_mime"] ?? null);
            echo "</div>
                    ";
        }
        // line 1234
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1238
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1240
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1243
        if (($context["config_error_display"] ?? null)) {
            // line 1244
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"0\"/> ";
            // line 1245
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1247
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/> ";
            // line 1248
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1250
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1254
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                      ";
        // line 1257
        if (($context["config_error_log"] ?? null)) {
            // line 1258
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"0\"/> ";
            // line 1259
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        } else {
            // line 1261
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/> ";
            // line 1262
            echo ($context["text_no"] ?? null);
            echo "</label>
                      ";
        }
        // line 1264
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1268
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1270
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    ";
        // line 1271
        if (($context["error_log"] ?? null)) {
            // line 1272
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1273
        echo "</div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1286
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1308
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1317
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1323
        echo ($context["config_zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1330
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
";
        // line 1345
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3477 => 1345,  3459 => 1330,  3449 => 1323,  3440 => 1317,  3428 => 1308,  3403 => 1286,  3388 => 1273,  3382 => 1272,  3380 => 1271,  3374 => 1270,  3369 => 1268,  3363 => 1264,  3358 => 1262,  3353 => 1261,  3348 => 1259,  3343 => 1258,  3341 => 1257,  3335 => 1254,  3329 => 1250,  3324 => 1248,  3319 => 1247,  3314 => 1245,  3309 => 1244,  3307 => 1243,  3301 => 1240,  3296 => 1238,  3290 => 1234,  3284 => 1232,  3282 => 1231,  3278 => 1230,  3272 => 1229,  3267 => 1227,  3262 => 1224,  3256 => 1222,  3254 => 1221,  3250 => 1220,  3244 => 1219,  3239 => 1217,  3232 => 1213,  3226 => 1212,  3221 => 1210,  3216 => 1208,  3210 => 1204,  3204 => 1203,  3202 => 1202,  3198 => 1201,  3192 => 1200,  3187 => 1198,  3180 => 1194,  3177 => 1193,  3172 => 1191,  3167 => 1190,  3162 => 1188,  3157 => 1187,  3155 => 1186,  3149 => 1183,  3142 => 1179,  3139 => 1178,  3134 => 1176,  3129 => 1175,  3124 => 1173,  3119 => 1172,  3117 => 1171,  3111 => 1168,  3106 => 1166,  3098 => 1161,  3092 => 1160,  3087 => 1158,  3080 => 1154,  3074 => 1153,  3069 => 1151,  3062 => 1147,  3059 => 1146,  3054 => 1144,  3049 => 1143,  3044 => 1141,  3039 => 1140,  3037 => 1139,  3031 => 1136,  3024 => 1132,  3021 => 1131,  3016 => 1129,  3011 => 1128,  3006 => 1126,  3001 => 1125,  2999 => 1124,  2993 => 1121,  2988 => 1119,  2978 => 1112,  2972 => 1111,  2967 => 1109,  2960 => 1105,  2957 => 1104,  2950 => 1102,  2945 => 1100,  2940 => 1099,  2935 => 1097,  2930 => 1096,  2928 => 1095,  2925 => 1094,  2921 => 1093,  2915 => 1090,  2910 => 1088,  2900 => 1083,  2895 => 1081,  2886 => 1077,  2881 => 1075,  2874 => 1071,  2868 => 1070,  2863 => 1068,  2854 => 1064,  2849 => 1062,  2842 => 1058,  2836 => 1057,  2831 => 1055,  2824 => 1051,  2818 => 1050,  2813 => 1048,  2806 => 1044,  2803 => 1043,  2797 => 1041,  2791 => 1039,  2788 => 1038,  2782 => 1036,  2776 => 1034,  2774 => 1033,  2768 => 1030,  2763 => 1028,  2753 => 1021,  2747 => 1018,  2743 => 1017,  2734 => 1015,  2728 => 1012,  2719 => 1006,  2715 => 1005,  2706 => 1003,  2700 => 1000,  2688 => 990,  2681 => 988,  2676 => 986,  2671 => 985,  2666 => 983,  2661 => 982,  2659 => 981,  2656 => 980,  2652 => 979,  2646 => 976,  2639 => 972,  2636 => 971,  2630 => 970,  2622 => 968,  2614 => 966,  2611 => 965,  2607 => 964,  2603 => 963,  2597 => 960,  2591 => 957,  2581 => 950,  2578 => 949,  2572 => 948,  2564 => 946,  2556 => 944,  2553 => 943,  2549 => 942,  2543 => 939,  2536 => 935,  2533 => 934,  2527 => 933,  2519 => 931,  2511 => 929,  2508 => 928,  2504 => 927,  2500 => 926,  2494 => 923,  2488 => 920,  2478 => 913,  2475 => 912,  2469 => 911,  2461 => 909,  2453 => 907,  2450 => 906,  2446 => 905,  2442 => 904,  2436 => 901,  2429 => 897,  2423 => 896,  2418 => 894,  2411 => 890,  2408 => 889,  2403 => 887,  2398 => 886,  2393 => 884,  2388 => 883,  2386 => 882,  2380 => 879,  2373 => 875,  2370 => 874,  2365 => 872,  2360 => 871,  2355 => 869,  2350 => 868,  2348 => 867,  2342 => 864,  2336 => 860,  2330 => 859,  2322 => 857,  2314 => 855,  2311 => 854,  2307 => 853,  2301 => 850,  2295 => 847,  2285 => 840,  2282 => 839,  2277 => 837,  2272 => 836,  2267 => 834,  2262 => 833,  2260 => 832,  2254 => 829,  2247 => 825,  2244 => 824,  2239 => 822,  2234 => 821,  2229 => 819,  2224 => 818,  2222 => 817,  2216 => 814,  2209 => 810,  2206 => 809,  2201 => 807,  2196 => 806,  2191 => 804,  2186 => 803,  2184 => 802,  2178 => 799,  2172 => 796,  2162 => 789,  2159 => 788,  2153 => 787,  2145 => 785,  2137 => 783,  2134 => 782,  2130 => 781,  2126 => 780,  2120 => 777,  2113 => 773,  2110 => 772,  2104 => 771,  2096 => 769,  2088 => 767,  2085 => 766,  2081 => 765,  2075 => 762,  2070 => 759,  2064 => 758,  2062 => 757,  2058 => 756,  2055 => 755,  2048 => 753,  2043 => 751,  2038 => 750,  2033 => 748,  2028 => 747,  2026 => 746,  2023 => 745,  2019 => 744,  2013 => 741,  2008 => 738,  2002 => 736,  2000 => 735,  1996 => 734,  1993 => 733,  1986 => 731,  1981 => 729,  1976 => 728,  1971 => 726,  1966 => 725,  1963 => 724,  1959 => 723,  1953 => 720,  1946 => 716,  1943 => 715,  1937 => 714,  1929 => 712,  1921 => 710,  1918 => 709,  1914 => 708,  1908 => 705,  1901 => 701,  1898 => 700,  1892 => 699,  1884 => 697,  1876 => 695,  1873 => 694,  1869 => 693,  1865 => 692,  1859 => 689,  1852 => 685,  1849 => 684,  1844 => 682,  1839 => 681,  1834 => 679,  1829 => 678,  1827 => 677,  1821 => 674,  1814 => 670,  1811 => 669,  1806 => 667,  1801 => 666,  1796 => 664,  1791 => 663,  1789 => 662,  1783 => 659,  1776 => 655,  1770 => 654,  1765 => 652,  1759 => 649,  1749 => 642,  1746 => 641,  1740 => 640,  1732 => 638,  1724 => 636,  1721 => 635,  1717 => 634,  1713 => 633,  1707 => 630,  1702 => 627,  1696 => 626,  1694 => 625,  1690 => 624,  1684 => 623,  1679 => 621,  1672 => 617,  1669 => 616,  1664 => 614,  1659 => 613,  1654 => 611,  1649 => 610,  1647 => 609,  1641 => 606,  1636 => 603,  1630 => 602,  1628 => 601,  1624 => 600,  1621 => 599,  1614 => 597,  1609 => 596,  1604 => 595,  1599 => 593,  1594 => 592,  1591 => 591,  1587 => 590,  1581 => 587,  1574 => 583,  1571 => 582,  1565 => 581,  1557 => 579,  1549 => 577,  1546 => 576,  1542 => 575,  1536 => 572,  1530 => 568,  1525 => 566,  1520 => 565,  1515 => 563,  1510 => 562,  1508 => 561,  1502 => 558,  1495 => 554,  1492 => 553,  1487 => 551,  1482 => 550,  1477 => 548,  1472 => 547,  1470 => 546,  1464 => 543,  1457 => 539,  1454 => 538,  1449 => 536,  1444 => 535,  1439 => 533,  1434 => 532,  1432 => 531,  1426 => 528,  1420 => 525,  1410 => 518,  1407 => 517,  1401 => 515,  1395 => 513,  1392 => 512,  1386 => 510,  1380 => 508,  1378 => 507,  1374 => 506,  1368 => 503,  1361 => 499,  1358 => 498,  1352 => 496,  1346 => 494,  1343 => 493,  1337 => 491,  1331 => 489,  1329 => 488,  1325 => 487,  1319 => 484,  1313 => 480,  1308 => 478,  1303 => 477,  1298 => 475,  1293 => 474,  1291 => 473,  1285 => 470,  1279 => 467,  1269 => 460,  1263 => 459,  1258 => 457,  1251 => 453,  1248 => 452,  1242 => 451,  1234 => 449,  1226 => 447,  1223 => 446,  1219 => 445,  1215 => 444,  1209 => 441,  1202 => 437,  1199 => 436,  1193 => 435,  1185 => 433,  1177 => 431,  1174 => 430,  1170 => 429,  1166 => 428,  1160 => 425,  1154 => 422,  1146 => 416,  1140 => 415,  1138 => 414,  1134 => 413,  1128 => 412,  1123 => 410,  1118 => 407,  1112 => 406,  1110 => 405,  1106 => 404,  1100 => 403,  1095 => 401,  1089 => 398,  1079 => 391,  1076 => 390,  1071 => 388,  1066 => 387,  1061 => 385,  1056 => 384,  1054 => 383,  1048 => 380,  1041 => 376,  1038 => 375,  1033 => 373,  1028 => 372,  1023 => 370,  1018 => 369,  1016 => 368,  1010 => 365,  1004 => 362,  996 => 356,  990 => 355,  988 => 354,  984 => 353,  978 => 352,  973 => 350,  966 => 346,  963 => 345,  958 => 343,  953 => 342,  948 => 340,  943 => 339,  941 => 338,  935 => 335,  929 => 332,  920 => 325,  914 => 324,  906 => 322,  898 => 320,  895 => 319,  891 => 318,  885 => 315,  879 => 311,  873 => 310,  865 => 308,  857 => 306,  854 => 305,  850 => 304,  844 => 301,  837 => 297,  834 => 296,  829 => 294,  824 => 293,  819 => 291,  814 => 290,  812 => 289,  806 => 286,  800 => 282,  794 => 281,  786 => 279,  778 => 277,  775 => 276,  771 => 275,  765 => 272,  758 => 268,  755 => 267,  749 => 266,  741 => 264,  733 => 262,  730 => 261,  726 => 260,  720 => 257,  714 => 253,  708 => 252,  700 => 250,  692 => 248,  689 => 247,  685 => 246,  679 => 243,  673 => 239,  667 => 238,  659 => 236,  651 => 234,  648 => 233,  644 => 232,  638 => 229,  632 => 225,  626 => 224,  618 => 222,  610 => 220,  607 => 219,  603 => 218,  597 => 215,  588 => 209,  582 => 205,  576 => 204,  568 => 202,  560 => 200,  557 => 199,  553 => 198,  547 => 195,  542 => 192,  535 => 188,  532 => 187,  525 => 185,  520 => 183,  515 => 182,  510 => 180,  505 => 179,  503 => 178,  500 => 177,  496 => 176,  490 => 173,  487 => 172,  485 => 171,  479 => 168,  473 => 167,  468 => 165,  461 => 161,  455 => 160,  450 => 158,  441 => 152,  437 => 151,  428 => 149,  422 => 146,  413 => 142,  408 => 140,  403 => 137,  397 => 136,  395 => 135,  389 => 134,  384 => 132,  379 => 129,  373 => 128,  371 => 127,  365 => 126,  360 => 124,  353 => 120,  347 => 119,  342 => 117,  337 => 114,  331 => 113,  329 => 112,  323 => 111,  318 => 109,  313 => 106,  307 => 105,  305 => 104,  299 => 103,  294 => 101,  289 => 98,  283 => 97,  281 => 96,  275 => 95,  270 => 93,  262 => 87,  256 => 86,  248 => 84,  240 => 82,  237 => 81,  233 => 80,  227 => 77,  220 => 72,  214 => 71,  206 => 69,  198 => 67,  195 => 66,  191 => 65,  185 => 62,  176 => 58,  171 => 56,  162 => 52,  157 => 50,  152 => 47,  146 => 46,  144 => 45,  138 => 44,  133 => 42,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  96 => 29,  91 => 27,  88 => 26,  80 => 22,  77 => 21,  69 => 17,  67 => 16,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/setting.twig", "");
    }
}
