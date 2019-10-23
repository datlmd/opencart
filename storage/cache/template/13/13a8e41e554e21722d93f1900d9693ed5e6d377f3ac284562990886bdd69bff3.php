<?php

/* design/seo_url_list.twig */
class __TwigTemplate_e2037b5c3f627803d707f3a29b389432205c980b287f4d4818804554fb5ec056 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-seo').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-url-alias').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-seo\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label for=\"input-keyword\" class=\"col-form-label\">";
        // line 35
        echo ($context["entry_keyword"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_keyword\" value=\"";
        echo ($context["filter_keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_keyword"] ?? null);
        echo "\" id=\"input-keyword\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-query\" class=\"col-form-label\">";
        // line 38
        echo ($context["entry_query"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_query\" value=\"";
        echo ($context["filter_query"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_query"] ?? null);
        echo "\" id=\"input-query\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-store\" class=\"col-form-label\">";
        // line 41
        echo ($context["entry_store"] ?? null);
        echo "</label> <select name=\"filter_store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 43
        if ((($context["filter_store_id"] ?? null) == "0")) {
            // line 44
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        } else {
            // line 46
            echo "                  <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                ";
        }
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 49
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []) == ($context["filter_store_id"] ?? null))) {
                // line 50
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "</option>
                  ";
            } else {
                // line 52
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "</option>
                  ";
            }
            // line 54
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-language\" class=\"col-form-label\">";
        // line 58
        echo ($context["entry_language"] ?? null);
        echo "</label> <select name=\"filter_language_id\" id=\"input-language\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 61
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []) == ($context["filter_language_id"] ?? null))) {
                // line 62
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                  ";
            } else {
                // line 64
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                  ";
            }
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "              </select>
            </div>
            <div class=\"text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 70
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 77
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 79
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-url-alias\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 85
        if ((($context["sort"] ?? null) == "keyword")) {
            echo "<a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_keyword"] ?? null);
            echo "\">";
            echo ($context["column_keyword"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 86
        if ((($context["sort"] ?? null) == "query")) {
            echo "<a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_query"] ?? null);
            echo "\">";
            echo ($context["column_query"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 87
        if ((($context["sort"] ?? null) == "store")) {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-center\">";
        // line 88
        if ((($context["sort"] ?? null) == "language")) {
            echo "<a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_language"] ?? null);
            echo "\">";
            echo ($context["column_language"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 89
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 93
        if (($context["seo_urls"] ?? null)) {
            // line 94
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seo_urls"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_url"]) {
                // line 95
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 97
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", []), ($context["selected"] ?? null))) {
                    // line 98
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", []);
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 100
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "seo_url_id", []);
                    echo "\"/>
                            ";
                }
                // line 101
                echo "</td>
                          <td class=\"text-left\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "keyword", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "query", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "store", []);
                echo "</td>
                          <td class=\"text-center\"><img src=\"language/";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", []);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", []);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "language", []);
                echo "\"></td>
                          <td class=\"text-right\"><a href=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["seo_url"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    ";
        } else {
            // line 110
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"6\">";
            // line 111
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 114
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 119
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 120
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=design/seo_url&user_token=";
        // line 130
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_keyword = \$('input[name=\\'filter_keyword\\']').val();

\tif (filter_keyword) {
\t\turl += '&filter_keyword=' + encodeURIComponent(filter_keyword);
\t}

\tvar filter_query = \$('input[name=\\'filter_query\\']').val();

\tif (filter_query) {
\t\turl += '&filter_query=' + encodeURIComponent(filter_query);
\t}

\tvar filter_store_id = \$('select[name=\\'filter_store_id\\']').val();

\tif (filter_store_id) {
\t\turl += '&filter_store_id=' + encodeURIComponent(filter_store_id);
\t}

\tvar filter_language_id = \$('select[name=\\'filter_language_id\\']').val();

\tif (filter_language_id) {
\t\turl += '&filter_language_id=' + encodeURIComponent(filter_language_id);
\t}

\tlocation = url;
});
//--></script>
";
        // line 159
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/seo_url_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 159,  420 => 130,  407 => 120,  403 => 119,  396 => 114,  390 => 111,  387 => 110,  384 => 109,  373 => 106,  363 => 105,  359 => 104,  355 => 103,  351 => 102,  348 => 101,  342 => 100,  336 => 98,  334 => 97,  330 => 95,  325 => 94,  323 => 93,  316 => 89,  298 => 88,  280 => 87,  262 => 86,  244 => 85,  235 => 79,  230 => 77,  220 => 70,  215 => 67,  209 => 66,  201 => 64,  193 => 62,  190 => 61,  186 => 60,  181 => 58,  176 => 55,  170 => 54,  162 => 52,  154 => 50,  151 => 49,  146 => 48,  140 => 46,  134 => 44,  132 => 43,  127 => 41,  117 => 38,  107 => 35,  101 => 32,  96 => 29,  88 => 25,  85 => 24,  77 => 20,  75 => 19,  69 => 15,  58 => 13,  54 => 12,  49 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/seo_url_list.twig", "");
    }
}
