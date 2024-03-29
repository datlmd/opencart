<?php

/* localisation/language_list.twig */
class __TwigTemplate_5f4460414e15d62da91704313f5ba9a7204aef0d1494f6e9295900329e7afd73 extends Twig_Template
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
      <div class=\"float-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-language').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
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
  <div class=\"container-fluid\">
    ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 36
        if ((($context["sort"] ?? null) == "name")) {
            // line 37
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 39
            echo "                      <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 40
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "code")) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-right\">";
        // line 46
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 47
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                      <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"text-right\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 55
        if (($context["languages"] ?? null)) {
            // line 56
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 57
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 58
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []), ($context["selected"] ?? null))) {
                    // line 59
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 61
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\"/>
                        ";
                }
                // line 62
                echo "</td>
                      <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "</td>
                      <td class=\"text-right\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["language"], "sort_order", []);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["language"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                ";
        } else {
            // line 70
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 74
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 79
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 80
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 86
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/language_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 86,  257 => 80,  253 => 79,  246 => 74,  240 => 71,  237 => 70,  234 => 69,  223 => 66,  219 => 65,  215 => 64,  211 => 63,  208 => 62,  202 => 61,  196 => 59,  194 => 58,  191 => 57,  186 => 56,  184 => 55,  177 => 51,  174 => 50,  166 => 49,  156 => 47,  154 => 46,  151 => 45,  143 => 44,  133 => 42,  131 => 41,  128 => 40,  120 => 39,  110 => 37,  108 => 36,  99 => 30,  94 => 28,  91 => 27,  83 => 23,  80 => 22,  72 => 18,  70 => 17,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  37 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/language_list.twig", "");
    }
}
