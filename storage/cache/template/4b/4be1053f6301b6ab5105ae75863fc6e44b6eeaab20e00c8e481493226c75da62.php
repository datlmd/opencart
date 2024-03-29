<?php

/* localisation/location_list.twig */
class __TwigTemplate_e68477da590065673a6628560e6c40d8f9c049b229a35b910b4b8cbee375b226 extends Twig_Template
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
        echo "') ? \$('#form-location').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-location\">
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
        if ((($context["sort"] ?? null) == "address")) {
            // line 42
            echo "                      <a href=\"";
            echo ($context["sort_address"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_address"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                      <a href=\"";
            echo ($context["sort_address"] ?? null);
            echo "\">";
            echo ($context["column_address"] ?? null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-right\">";
        // line 46
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 50
        if (($context["location"] ?? null)) {
            // line 51
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["location"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locations"]) {
                // line 52
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 53
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["locations"], "location_id", []), ($context["selected"] ?? null))) {
                    // line 54
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["locations"], "location_id", []);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 56
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["locations"], "location_id", []);
                    echo "\"/>
                        ";
                }
                // line 57
                echo "</td>
                      <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["locations"], "name", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["locations"], "address", []);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["locations"], "edit", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        } else {
            // line 64
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"6\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 68
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 73
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 74
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 80
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "localisation/location_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 80,  230 => 74,  226 => 73,  219 => 68,  213 => 65,  210 => 64,  207 => 63,  196 => 60,  192 => 59,  188 => 58,  185 => 57,  179 => 56,  173 => 54,  171 => 53,  168 => 52,  163 => 51,  161 => 50,  154 => 46,  151 => 45,  143 => 44,  133 => 42,  131 => 41,  128 => 40,  120 => 39,  110 => 37,  108 => 36,  99 => 30,  94 => 28,  91 => 27,  83 => 23,  80 => 22,  72 => 18,  70 => 17,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  37 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/location_list.twig", "");
    }
}
