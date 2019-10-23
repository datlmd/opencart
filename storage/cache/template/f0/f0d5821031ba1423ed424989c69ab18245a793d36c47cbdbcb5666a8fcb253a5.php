<?php

/* design/translation_list.twig */
class __TwigTemplate_610efdc9570d568042c7bc19bc0ea30851b715226fe03f8a7247d0bee35bbfae extends Twig_Template
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
        echo "') ? \$('#form-translation').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
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
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 27
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 29
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-translation\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 35
        if ((($context["sort"] ?? null) == "store")) {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-center\">";
        // line 36
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
                  <td class=\"text-left\">";
        // line 37
        if ((($context["sort"] ?? null) == "route")) {
            echo "<a href=\"";
            echo ($context["sort_route"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_route"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_route"] ?? null);
            echo "\">";
            echo ($context["column_route"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 38
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
        // line 39
        if ((($context["sort"] ?? null) == "value")) {
            echo "<a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_value"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_value"] ?? null);
            echo "\">";
            echo ($context["column_value"] ?? null);
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
        if (($context["translations"] ?? null)) {
            // line 45
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["translations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 46
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 47
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", []), ($context["selected"] ?? null))) {
                    // line 48
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", []);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 50
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["translation"], "translation_id", []);
                    echo "\"/>
                        ";
                }
                // line 51
                echo "</td>
                      <td class=\"text-left\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "store", []);
                echo "</td>
                      <td class=\"text-center\"><img src=\"language/";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "language", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "language", []);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "language", []);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "language", []);
                echo "\"></td>
                      <td class=\"text-left\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "route", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "key", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "value", []);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["translation"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                ";
        } else {
            // line 61
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 62
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 65
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 70
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 71
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "design/translation_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 77,  291 => 71,  287 => 70,  280 => 65,  274 => 62,  271 => 61,  268 => 60,  257 => 57,  253 => 56,  249 => 55,  245 => 54,  235 => 53,  231 => 52,  228 => 51,  222 => 50,  216 => 48,  214 => 47,  211 => 46,  206 => 45,  204 => 44,  197 => 40,  179 => 39,  161 => 38,  143 => 37,  125 => 36,  107 => 35,  98 => 29,  93 => 27,  90 => 26,  82 => 22,  79 => 21,  71 => 17,  69 => 16,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  37 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/translation_list.twig", "");
    }
}
