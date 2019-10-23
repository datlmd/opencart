<?php

/* design/translation_form.twig */
class __TwigTemplate_899d3071d2e94f17f1e54887dbfa93cad72a3d3774b03654c964de4741f2bd00 extends Twig_Template
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
        <button type=\"submit\" form=\"form-translation\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-translation\">
          <div class=\"form-group row\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 27
        echo ($context["entry_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"0\">";
        // line 30
        echo ($context["text_default"] ?? null);
        echo "</option>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 32
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []) == ($context["store_id"] ?? null))) {
                // line 33
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "</option>
                  ";
            } else {
                // line 35
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "</option>
                  ";
            }
            // line 37
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_language"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-control\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []) == ($context["language_id"] ?? null))) {
                // line 47
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                  ";
            } else {
                // line 49
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>
                  ";
            }
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-route\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_route"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-control\"></select>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 62
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select id=\"input-key\" class=\"form-control\"></select><input type=\"text\" name=\"key\" value=\"";
        // line 64
        echo ($context["key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" class=\"form-control\"/>
              ";
        // line 65
        if (($context["error_key"] ?? null)) {
            // line 66
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
              ";
        }
        // line 68
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-default\" class=\"col-sm-2 col-form-label\">";
        // line 71
        echo ($context["entry_default"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" placeholder=\"";
        // line 73
        echo ($context["entry_default"] ?? null);
        echo "\" rows=\"5\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">";
        if (($context["default"] ?? null)) {
            echo ($context["default"] ?? null);
        }
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_value"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"";
        // line 79
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">";
        echo ($context["value"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'language_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=design/translation/path&user_token=";
        // line 90
        echo ($context["user_token"] ?? null);
        echo "&language_id=' + \$('select[name=\\'language_id\\']').val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'language_id\\']').prop('disabled', true);
\t\t\t\$('select[name=\\'route\\']').prop('disabled', true);
\t\t\t\$('#input-key').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'language_id\\']').prop('disabled', false);
\t\t\t\$('select[name=\\'route\\']').prop('disabled', false);
\t\t\t\$('#input-key').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '';

\t\t\tif (json) {
\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tif (json[i] == '";
        // line 107
        echo ($context["route"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += '<option value=\"' + json[i] + '\" selected=\"selected\">' + json[i] + '</option>';
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('select[name=\\'route\\']').html(html);

\t\t\t\$('select[name=\\'route\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'route\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=design/translation/translation&user_token=";
        // line 127
        echo ($context["user_token"] ?? null);
        echo "&language_id=' + \$('select[name=\\'language_id\\']').val() + '&path=' + \$('select[name=\\'route\\']').val(),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'language_id\\']').prop('disabled', true);
\t\t\t\$('select[name=\\'route\\']').prop('disabled', true);
\t\t\t\$('#input-key').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'language_id\\']').prop('disabled', false);
\t\t\t\$('select[name=\\'route\\']').prop('disabled', false);
\t\t\t\$('#input-key').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\ttranslation = [];

\t\t\thtml = '<option value=\"\"></option>';

\t\t\tif (json) {
\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tif (json[i]['key'] == \$('input[name=\\'key\\']').val()) {
\t\t\t\t\t\thtml += '<option value=\"' + json[i]['key'] + '\" selected=\"selected\">' + json[i]['key'] + '</option>';
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
\t\t\t\t\t}

\t\t\t\t\ttranslation[json[i]['key']] = json[i]['value'];
\t\t\t\t}
\t\t\t}

\t\t\t\$('#input-key').html(html);

\t\t\t\$('#input-key').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#input-key').on('change', function() {
\tif (translation[\$('#input-key').val()]) {
\t\t\$('textarea[name=\\'default\\']').val(translation[\$('#input-key').val()]);

\t\t\$('input[name=\\'key\\']').val(\$('#input-key').val());
\t} else {
\t\t\$('textarea[name=\\'default\\']').val('');
\t}
});

\$('select[name=\\'language_id\\']').trigger('change');
//--></script>
";
        // line 178
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/translation_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 178,  290 => 127,  267 => 107,  247 => 90,  231 => 79,  226 => 77,  215 => 73,  210 => 71,  205 => 68,  199 => 66,  197 => 65,  191 => 64,  186 => 62,  177 => 56,  171 => 52,  165 => 51,  157 => 49,  149 => 47,  146 => 46,  142 => 45,  136 => 42,  130 => 38,  124 => 37,  116 => 35,  108 => 33,  105 => 32,  101 => 31,  97 => 30,  91 => 27,  86 => 25,  81 => 23,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "design/translation_form.twig", "");
    }
}
