<?php

/* design/seo_regex_list.twig */
class __TwigTemplate_509f029f215df22f473df54b6388f4d08e0252e0498f41f0f882be7ae2163767 extends Twig_Template
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
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-seo-regex').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 28
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seo-regex\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((($context["sort"] ?? null) == "name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 37
        if ((($context["sort"] ?? null) == "key")) {
            echo "<a href=\"";
            echo ($context["sort_key"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_key"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_key"] ?? null);
            echo "\">";
            echo ($context["column_key"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "regex")) {
            echo "<a href=\"";
            echo ($context["sort_regex"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_regex"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_regex"] ?? null);
            echo "\">";
            echo ($context["column_regex"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 39
        if ((($context["sort"] ?? null) == "sort_order")) {
            echo "<a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 40
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 44
        if (($context["seo_regexes"] ?? null)) {
            // line 45
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seo_regexes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_regex"]) {
                // line 46
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 47
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["seo_regex"], "seo_regex_id", []), ($context["selected"] ?? null))) {
                    // line 48
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "seo_regex_id", []);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 50
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "seo_regex_id", []);
                    echo "\"/>
                        ";
                }
                // line 51
                echo "</td>
                      <td class=\"text-left\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "name", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "key", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "regex", []);
                echo "</td>
                      <td class=\"text-right\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "sort_order", []);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["seo_regex"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_regex'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                ";
        } else {
            // line 60
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 61
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 64
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 69
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 70
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 76
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/seo_regex_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 76,  264 => 70,  260 => 69,  253 => 64,  247 => 61,  244 => 60,  241 => 59,  230 => 56,  226 => 55,  222 => 54,  218 => 53,  214 => 52,  211 => 51,  205 => 50,  199 => 48,  197 => 47,  194 => 46,  189 => 45,  187 => 44,  180 => 40,  162 => 39,  144 => 38,  126 => 37,  108 => 36,  99 => 30,  94 => 28,  91 => 27,  83 => 23,  80 => 22,  72 => 18,  70 => 17,  65 => 14,  54 => 12,  50 => 11,  45 => 9,  38 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/seo_regex_list.twig", "");
    }
}
