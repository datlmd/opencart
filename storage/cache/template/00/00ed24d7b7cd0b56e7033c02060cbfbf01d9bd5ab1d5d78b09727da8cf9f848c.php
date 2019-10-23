<?php

/* catalog/product_form.twig */
class __TwigTemplate_b10ed17f98ad542437ab66ee4a10d2baef5dd4c97015ed466236b637118c4b21 extends Twig_Template
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
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 6
        echo ($context["action"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
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
        ";
        // line 25
        if (($context["master_id"] ?? null)) {
            // line 26
            echo "          <div class=\"alert alert-warning\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["text_variant"] ?? null);
            echo "</div>
        ";
        }
        // line 28
        echo "        <form method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-recurring\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-special\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 38
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 39
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 40
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 41
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            echo "                  <li class=\"nav-item\"><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" data-toggle=\"tab\" class=\"nav-link\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\">
                    <div class=\"form-group row required\">
                      <label for=\"input-name";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][name]\" value=\"";
            echo (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["product_description"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["product_description"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "name", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\"/>
                          ";
            // line 58
            if (($context["master_id"] ?? null)) {
                // line 59
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 62
                if (twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "name", [])) {
                    // line 63
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][name]\" value=\"1\" id=\"input-variant-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 65
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][name]\" value=\"1\" id=\"input-variant-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-name";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 67
                echo "                                  <label for=\"input-variant-name";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 72
            echo "                        </div>
                        ";
            // line 73
            if ((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_name"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 74
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["error_name"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 76
            echo "                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-description";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" data-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"w-100 position-relative\">";
            echo (((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["product_description"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["product_description"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "description", [])) : (""));
            echo "</textarea>
                          </div>
                          ";
            // line 85
            if (($context["master_id"] ?? null)) {
                // line 86
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "description", [])) {
                    // line 90
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][description]\" value=\"1\" id=\"input-variant-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 92
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][description]\" value=\"1\" id=\"input-variant-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 94
                echo "                                  <label for=\"input-variant-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 99
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label for=\"input-meta-title";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["product_description"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["product_description"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_title", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\"/>
                          ";
            // line 107
            if (($context["master_id"] ?? null)) {
                // line 108
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 111
                if (twig_get_attribute($this->env, $this->source, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_title", [])) {
                    // line 112
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 114
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_title]\" value=\"1\" id=\"input-variant-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 116
                echo "                                  <label for=\"input-variant-meta-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 121
            echo "                        </div>
                        ";
            // line 122
            if ((($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_meta_title"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 123
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["error_meta_title"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 125
            echo "                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-description";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\">";
            echo (((($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["product_description"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["product_description"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_description", [])) : (""));
            echo "</textarea>
                          ";
            // line 132
            if (($context["master_id"] ?? null)) {
                // line 133
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 136
                if (twig_get_attribute($this->env, $this->source, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_description", [])) {
                    // line 137
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 139
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_description]\" value=\"1\" id=\"input-variant-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-description";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 141
                echo "                                  <label for=\"input-variant-meta-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 146
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-keyword";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\">";
            echo (((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["product_description"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["product_description"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_keyword", [])) : (""));
            echo "</textarea>
                          ";
            // line 154
            if (($context["master_id"] ?? null)) {
                // line 155
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_keyword", [])) {
                    // line 159
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 161
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-meta-keyword";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 163
                echo "                                  <label for=\"input-variant-meta-keyword";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 168
            echo "                        </div>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-tag";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_tag"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][tag]\" value=\"";
            echo (((($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["product_description"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["product_description"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "tag", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\"/>
                          ";
            // line 176
            if (($context["master_id"] ?? null)) {
                // line 177
                echo "                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                // line 180
                if (twig_get_attribute($this->env, $this->source, (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [])) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "tag", [])) {
                    // line 181
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][tag]\" value=\"1\" id=\"input-variant-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\" checked/>
                                  ";
                } else {
                    // line 183
                    echo "                                    <input type=\"checkbox\" name=\"override[product_description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "][tag]\" value=\"1\" id=\"input-variant-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" data-toggle=\"switch\" data-target=\"#input-tag";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                    echo "\" class=\"custom-control-input\"/>
                                  ";
                }
                // line 185
                echo "                                  <label for=\"input-variant-tag";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          ";
            }
            // line 190
            echo "                        </div>
                        <small class=\"form-text text-muted\">";
            // line 191
            echo ($context["help_tag"] ?? null);
            echo "</small>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 199
        echo ($context["master_id"] ?? null);
        echo "\"/>
              <fieldset>
                <legend>";
        // line 201
        echo ($context["text_model"] ?? null);
        echo "</legend>
                <div class=\"form-group row required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 203
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 206
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 207
        if (($context["master_id"] ?? null)) {
            // line 208
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "model", [])) {
                // line 212
                echo "                                <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-toggle=\"switch\" data-target=\"#input-model\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 214
                echo "                                <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-toggle=\"switch\" data-target=\"#input-model\" class=\"custom-control-input\"/>
                              ";
            }
            // line 216
            echo "                              <label for=\"input-variant-model\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 221
        echo "                    </div>
                    ";
        // line 222
        if (($context["error_model"] ?? null)) {
            // line 223
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                    ";
        }
        // line 225
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-sku\" class=\"col-sm-2 col-form-label\">";
        // line 228
        echo ($context["entry_sku"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sku\" value=\"";
        // line 231
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                      ";
        // line 232
        if (($context["master_id"] ?? null)) {
            // line 233
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sku", [])) {
                // line 237
                echo "                                <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-toggle=\"switch\" data-target=\"#input-sku\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 239
                echo "                                <input type=\"checkbox\" name=\"override[sku]\" value=\"1\" id=\"input-variant-sku\" data-toggle=\"switch\" data-target=\"#input-sku\" class=\"custom-control-input\"/>
                              ";
            }
            // line 241
            echo "                              <label for=\"input-variant-sku\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 246
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 247
        echo ($context["help_sku"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-upc\" class=\"col-sm-2 col-form-label\">";
        // line 251
        echo ($context["entry_upc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"upc\" value=\"";
        // line 254
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                      ";
        // line 255
        if (($context["master_id"] ?? null)) {
            // line 256
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 259
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "upc", [])) {
                // line 260
                echo "                                <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-toggle=\"switch\" data-target=\"#input-upc\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 262
                echo "                                <input type=\"checkbox\" name=\"override[upc]\" value=\"1\" id=\"input-variant-upc\" data-toggle=\"switch\" data-target=\"#input-upc\" class=\"custom-control-input\"/>
                              ";
            }
            // line 264
            echo "                              <label for=\"input-variant-upc\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 269
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 270
        echo ($context["help_upc"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-ean\" class=\"col-sm-2 col-form-label\">";
        // line 274
        echo ($context["entry_ean"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"ean\" value=\"";
        // line 277
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                      ";
        // line 278
        if (($context["master_id"] ?? null)) {
            // line 279
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "ean", [])) {
                // line 283
                echo "                                <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-toggle=\"switch\" data-target=\"#input-ean\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 285
                echo "                                <input type=\"checkbox\" name=\"override[ean]\" value=\"1\" id=\"input-variant-ean\" data-toggle=\"switch\" data-target=\"#input-ean\" class=\"custom-control-input\"/>
                              ";
            }
            // line 287
            echo "                              <label for=\"input-variant-ean\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 292
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 293
        echo ($context["help_ean"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-jan\" class=\"col-sm-2 col-form-label\">";
        // line 297
        echo ($context["entry_jan"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"jan\" value=\"";
        // line 300
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                      ";
        // line 301
        if (($context["master_id"] ?? null)) {
            // line 302
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "jan", [])) {
                // line 306
                echo "                                <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-toggle=\"switch\" data-target=\"#input-jan\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 308
                echo "                                <input type=\"checkbox\" name=\"override[jan]\" value=\"1\" id=\"input-variant-jan\" data-toggle=\"switch\" data-target=\"#input-jan\" class=\"custom-control-input\"/>
                              ";
            }
            // line 310
            echo "                              <label for=\"input-variant-jan\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 315
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 316
        echo ($context["help_jan"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-isbn\" class=\"col-sm-2 col-form-label\">";
        // line 320
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"isbn\" value=\"";
        // line 323
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                      ";
        // line 324
        if (($context["master_id"] ?? null)) {
            // line 325
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 328
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "isbn", [])) {
                // line 329
                echo "                                <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-toggle=\"switch\" data-target=\"#input-isbn\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 331
                echo "                                <input type=\"checkbox\" name=\"override[isbn]\" value=\"1\" id=\"input-variant-isbn\" data-toggle=\"switch\" data-target=\"#input-isbn\" class=\"custom-control-input\"/>
                              ";
            }
            // line 333
            echo "                              <label for=\"input-variant-isbn\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 338
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 339
        echo ($context["help_isbn"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mpn\" class=\"col-sm-2 col-form-label\">";
        // line 343
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"mpn\" value=\"";
        // line 346
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                      ";
        // line 347
        if (($context["master_id"] ?? null)) {
            // line 348
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "mpn", [])) {
                // line 352
                echo "                                <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-toggle=\"switch\" data-target=\"#input-mpn\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 354
                echo "                                <input type=\"checkbox\" name=\"override[mpn]\" value=\"1\" id=\"input-variant-mpn\" data-toggle=\"switch\" data-target=\"#input-mpn\" class=\"custom-control-input\"/>
                              ";
            }
            // line 356
            echo "                              <label for=\"input-variant-mpn\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 361
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 362
        echo ($context["help_mpn"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 366
        echo ($context["entry_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 369
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 370
        if (($context["master_id"] ?? null)) {
            // line 371
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "location", [])) {
                // line 375
                echo "                                <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-toggle=\"switch\" data-target=\"#input-location\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 377
                echo "                                <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-toggle=\"switch\" data-target=\"#input-location\" class=\"custom-control-input\"/>
                              ";
            }
            // line 379
            echo "                              <label for=\"input-variant-location\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 384
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 389
        echo ($context["text_price"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 391
        echo ($context["entry_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 394
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 395
        if (($context["master_id"] ?? null)) {
            // line 396
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 399
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "price", [])) {
                // line 400
                echo "                                <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-toggle=\"switch\" data-target=\"#input-price\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 402
                echo "                                <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-toggle=\"switch\" data-target=\"#input-price\" class=\"custom-control-input\"/>
                              ";
            }
            // line 404
            echo "                              <label for=\"input-variant-price\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 409
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 413
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                        <option value=\"0\">";
        // line 417
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 419
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", []) == ($context["tax_class_id"] ?? null))) {
                // line 420
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 422
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", []);
                echo "</option>
                          ";
            }
            // line 424
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "                      </select>
                      ";
        // line 426
        if (($context["master_id"] ?? null)) {
            // line 427
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 430
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [])) {
                // line 431
                echo "                                <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-toggle=\"switch\" data-target=\"#input-tax-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 433
                echo "                                <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-toggle=\"switch\" data-target=\"#input-tax-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 435
            echo "                              <label for=\"input-variant-tax-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 440
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 445
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 447
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 449
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 453
        echo ($context["entry_minimum"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 456
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 457
        if (($context["master_id"] ?? null)) {
            // line 458
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 461
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [])) {
                // line 462
                echo "                                <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-toggle=\"switch\" data-target=\"#input-minimum\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 464
                echo "                                <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-toggle=\"switch\" data-target=\"#input-minimum\" class=\"custom-control-input\"/>
                              ";
            }
            // line 466
            echo "                              <label for=\"input-variant-minimum\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 471
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 472
        echo ($context["help_minimum"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 476
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" id=\"input-subtract\">
                        ";
        // line 480
        if (($context["subtract"] ?? null)) {
            // line 481
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"subtract\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"subtract\" value=\"0\"/> ";
            // line 482
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 484
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"subtract\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"subtract\" value=\"0\" checked=\"checked\"/> ";
            // line 485
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 487
        echo "                      </div>
                      ";
        // line 488
        if (($context["master_id"] ?? null)) {
            // line 489
            echo "                        <div class=\"input-group-append align-items-center\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 491
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [])) {
                // line 492
                echo "                              <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-toggle=\"switch\" data-target=\"#input-subtract\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 494
                echo "                              <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-toggle=\"switch\" data-target=\"#input-subtract\" class=\"custom-control-input\"/>
                            ";
            }
            // line 496
            echo "                            <label for=\"input-variant-subtract\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 500
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 504
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                        ";
        // line 508
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 509
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", []) == ($context["stock_status_id"] ?? null))) {
                // line 510
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", []);
                echo "</option>
                          ";
            } else {
                // line 512
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", []);
                echo "</option>
                          ";
            }
            // line 514
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        echo "                      </select>
                      ";
        // line 516
        if (($context["master_id"] ?? null)) {
            // line 517
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 520
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [])) {
                // line 521
                echo "                                <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-toggle=\"switch\" data-target=\"#input-stock-status\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 523
                echo "                                <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-toggle=\"switch\" data-target=\"#input-stock-status\" class=\"custom-control-input\"/>
                              ";
            }
            // line 525
            echo "                              <label for=\"input-variant-stock-status\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 530
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 531
        echo ($context["help_stock_status"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 535
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"date_available\" value=\"";
        // line 538
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" id=\"input-date-available\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      ";
        // line 542
        if (($context["master_id"] ?? null)) {
            // line 543
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 546
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [])) {
                // line 547
                echo "                                <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-toggle=\"switch\" data-target=\"#input-date-available\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 549
                echo "                                <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-toggle=\"switch\" data-target=\"#input-date-available\" class=\"custom-control-input\"/>
                              ";
            }
            // line 551
            echo "                              <label for=\"input-variant-date-available\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 556
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 561
        echo ($context["text_specification"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 563
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\" id=\"input-shipping\">
                        ";
        // line 567
        if (($context["shipping"] ?? null)) {
            // line 568
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"shipping\" value=\"0\"/> ";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        } else {
            // line 571
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"shipping\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/> ";
            // line 572
            echo ($context["text_no"] ?? null);
            echo "</label>
                        ";
        }
        // line 574
        echo "                      </div>
                      ";
        // line 575
        if (($context["master_id"] ?? null)) {
            // line 576
            echo "                        <div class=\"input-group-append align-items-center\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 578
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [])) {
                // line 579
                echo "                              <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-toggle=\"switch\" data-target=\"#input-shipping\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 581
                echo "                              <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-toggle=\"switch\" data-target=\"#input-shipping\" class=\"custom-control-input\"/>
                            ";
            }
            // line 583
            echo "                            <label for=\"input-variant-shipping\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 587
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 591
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 594
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 595
        if (($context["master_id"] ?? null)) {
            // line 596
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 599
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length", [])) {
                // line 600
                echo "                                <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-toggle=\"switch\" data-target=\"#input-length\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 602
                echo "                                <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-toggle=\"switch\" data-target=\"#input-length\" class=\"custom-control-input\"/>
                              ";
            }
            // line 604
            echo "                              <label for=\"input-variant-length\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 609
        echo "                      <input type=\"text\" name=\"width\" value=\"";
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 610
        if (($context["master_id"] ?? null)) {
            // line 611
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 614
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "width", [])) {
                // line 615
                echo "                                <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-toggle=\"switch\" data-target=\"#input-width\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 617
                echo "                                <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-toggle=\"switch\" data-target=\"#input-width\" class=\"custom-control-input\"/>
                              ";
            }
            // line 619
            echo "                              <label for=\"input-variant-width\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 624
        echo "                      <input type=\"text\" name=\"height\" value=\"";
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 625
        if (($context["master_id"] ?? null)) {
            // line 626
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 629
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "height", [])) {
                // line 630
                echo "                                <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-toggle=\"switch\" data-target=\"#input-height\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 632
                echo "                                <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-toggle=\"switch\" data-target=\"#input-height\" class=\"custom-control-input\"/>
                              ";
            }
            // line 634
            echo "                              <label for=\"input-variant-height\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 639
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 643
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                        ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 648
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []) == ($context["length_class_id"] ?? null))) {
                // line 649
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 651
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>
                          ";
            }
            // line 653
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        echo "                      </select>
                      ";
        // line 655
        if (($context["master_id"] ?? null)) {
            // line 656
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 659
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [])) {
                // line 660
                echo "                                <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-toggle=\"switch\" data-target=\"#input-length-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 662
                echo "                                <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-toggle=\"switch\" data-target=\"#input-length-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 664
            echo "                              <label for=\"input-variant-length-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 669
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 673
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 676
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 677
        if (($context["master_id"] ?? null)) {
            // line 678
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 681
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight", [])) {
                // line 682
                echo "                                <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-toggle=\"switch\" data-target=\"#input-weight\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 684
                echo "                                <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-toggle=\"switch\" data-target=\"#input-weight\" class=\"custom-control-input\"/>
                              ";
            }
            // line 686
            echo "                              <label for=\"input-variant-weight\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 691
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 695
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                        ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 700
            echo "                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []) == ($context["weight_class_id"] ?? null))) {
                // line 701
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>
                          ";
            } else {
                // line 703
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>
                          ";
            }
            // line 705
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo "                      </select>
                      ";
        // line 707
        if (($context["master_id"] ?? null)) {
            // line 708
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 711
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [])) {
                // line 712
                echo "                                <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-toggle=\"switch\" data-target=\"#input-weight-class\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 714
                echo "                                <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-toggle=\"switch\" data-target=\"#input-weight-class\" class=\"custom-control-input\"/>
                              ";
            }
            // line 716
            echo "                              <label for=\"input-variant-weight-class\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 721
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 725
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 729
        if (($context["status"] ?? null)) {
            // line 730
            echo "                          <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 731
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 733
            echo "                          <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 734
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        }
        // line 736
        echo "                      </select>
                      ";
        // line 737
        if (($context["master_id"] ?? null)) {
            // line 738
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 741
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "status", [])) {
                // line 742
                echo "                                <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-toggle=\"switch\" data-target=\"#input-status\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 744
                echo "                                <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-toggle=\"switch\" data-target=\"#input-status\" class=\"custom-control-input\"/>
                              ";
            }
            // line 746
            echo "                              <label for=\"input-variant-status\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 751
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 755
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"sort_order\" value=\"";
        // line 758
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 759
        if (($context["master_id"] ?? null)) {
            // line 760
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 763
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [])) {
                // line 764
                echo "                                <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-toggle=\"switch\" data-target=\"#input-sort-order\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 766
                echo "                                <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-toggle=\"switch\" data-target=\"#input-sort-order\" class=\"custom-control-input\"/>
                              ";
            }
            // line 768
            echo "                              <label for=\"input-variant-sort-order\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 773
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 780
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 783
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                    ";
        // line 784
        if (($context["master_id"] ?? null)) {
            // line 785
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 788
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [])) {
                // line 789
                echo "                              <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-toggle=\"switch\" data-target=\"#input-manufacturer\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 791
                echo "                              <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-toggle=\"switch\" data-target=\"#input-manufacturer\" class=\"custom-control-input\"/>
                            ";
            }
            // line 793
            echo "                            <label for=\"input-variant-manufacturer\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 798
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 799
        echo ($context["help_manufacturer"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 803
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 805
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table table-sm m-0\">
                        <tbody>
                          ";
        // line 810
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 811
            echo "                            <tr id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", []);
            echo "\">
                              <td>";
            // line 812
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", []);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", []);
            echo "\"/></td>
                              <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 816
        echo "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 819
        if (($context["master_id"] ?? null)) {
            // line 820
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 823
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [])) {
                // line 824
                echo "                              <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-toggle=\"switch\" data-target=\"#input-category, #product-category\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 826
                echo "                              <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-toggle=\"switch\" data-target=\"#input-category, #product-category\" class=\"custom-control-input\"/>
                            ";
            }
            // line 828
            echo "                            <label for=\"input-variant-category\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 833
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 834
        echo ($context["help_category"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 838
        echo ($context["entry_filter"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 840
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table table-sm m-0\">
                        ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 845
            echo "                          <tr id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", []);
            echo "\">
                            <td>";
            // line 846
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", []);
            echo "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", []);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "                      </table>
                    </div>
                    ";
        // line 852
        if (($context["master_id"] ?? null)) {
            // line 853
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 856
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [])) {
                // line 857
                echo "                              <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-toggle=\"switch\" data-target=\"#input-filter, #product-filter\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 859
                echo "                              <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-toggle=\"switch\" data-target=\"#input-filter, #product-filter\" class=\"custom-control-input\"/>
                            ";
            }
            // line 861
            echo "                            <label for=\"input-variant-filter\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 866
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 867
        echo ($context["help_filter"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 871
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 875
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 876
            echo "                        <label class=\"form-check\">
                          ";
            // line 877
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []), ($context["product_store"] ?? null))) {
                // line 878
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                            ";
                // line 879
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "
                          ";
            } else {
                // line 881
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" class=\"form-check-input\"/>
                            ";
                // line 882
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "
                          ";
            }
            // line 884
            echo "                        </label>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 886
        echo "                    </div>
                    ";
        // line 887
        if (($context["master_id"] ?? null)) {
            // line 888
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 891
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [])) {
                // line 892
                echo "                              <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-toggle=\"switch\" data-target=\"#product-store\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 894
                echo "                              <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-toggle=\"switch\" data-target=\"#product-store\" class=\"custom-control-input\"/>
                            ";
            }
            // line 896
            echo "                            <label for=\"input-variant-store\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 901
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 905
        echo ($context["entry_download"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 907
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table table-sm m-0\">
                        ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 912
            echo "                          <tr id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", []);
            echo "\">
                            <td>";
            // line 913
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", []);
            echo "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", []);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 917
        echo "                      </table>
                    </div>
                    ";
        // line 919
        if (($context["master_id"] ?? null)) {
            // line 920
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 923
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [])) {
                // line 924
                echo "                              <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-toggle=\"switch\" data-target=\"#input-download, #product-download\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 926
                echo "                              <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-toggle=\"switch\" data-target=\"#input-download, #product-download\" class=\"custom-control-input\"/>
                            ";
            }
            // line 928
            echo "                            <label for=\"input-variant-download\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 933
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 934
        echo ($context["help_download"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 938
        echo ($context["entry_related"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 940
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table table-sm m-0\">
                        ";
        // line 944
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 945
            echo "                          <tr id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", []);
            echo "\">
                            <td>";
            // line 946
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", []);
            echo "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", []);
            echo "\"/></td>
                            <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 950
        echo "                      </table>
                    </div>
                    ";
        // line 952
        if (($context["master_id"] ?? null)) {
            // line 953
            echo "                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                          <div class=\"custom-control custom-switch\">
                            ";
            // line 956
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [])) {
                // line 957
                echo "                              <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-toggle=\"switch\" data-target=\"#input-related, #product-related\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 959
                echo "                              <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-toggle=\"switch\" data-target=\"#input-related, #product-related\" class=\"custom-control-input\"/>
                            ";
            }
            // line 961
            echo "                            <label for=\"input-variant-related\" class=\"custom-control-label\"></label>
                          </div>
                        </div>
                      </div>
                    ";
        }
        // line 966
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 967
        echo ($context["help_related"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>

            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 977
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 978
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td class=\"text-right\">
                        ";
        // line 980
        if (($context["master_id"] ?? null)) {
            // line 981
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 982
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [])) {
                // line 983
                echo "                              <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-toggle=\"switch\" data-target=\"#product-attribute\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 985
                echo "                              <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-toggle=\"switch\" data-target=\"#product-attribute\" class=\"custom-control-input\"/>
                            ";
            }
            // line 987
            echo "                            <label for=\"input-variant-product-attribute\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 990
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 994
        $context["attribute_row"] = 0;
        // line 995
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 996
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><input type=\"text\" name=\"product_attribute[";
            // line 997
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", []);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", []);
            echo "\"/></td>
                        <td class=\"text-left\">
                          ";
            // line 999
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1000
                echo "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><img src=\"language/";
                // line 1002
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "\"/></span>
                              </div>
                              <textarea name=\"product_attribute[";
                // line 1004
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [])) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [])) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "text", [])) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1006
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 1007
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1009
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 1010
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-attribute\" data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            ";
        // line 1022
        if ( !($context["master_id"] ?? null)) {
            // line 1023
            echo "              <div id=\"tab-option\" class=\"tab-pane\">
                <div id=\"option\">
                  ";
            // line 1025
            $context["option_row"] = 0;
            // line 1026
            echo "                  ";
            $context["option_value_row"] = 0;
            // line 1027
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 1028
                echo "                    <fieldset id=\"option-row";
                echo ($context["option_row"] ?? null);
                echo "\">
                      <legend>";
                // line 1029
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", []);
                echo " <button type=\"button\" class=\"btn btn-danger btn-sm float-right\" onclick=\"\$('#option-row";
                echo ($context["option_row"] ?? null);
                echo "').remove();\"><i class=\"fas fa-minus-circle\"></i></button></legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 1030
                echo ($context["option_row"] ?? null);
                echo "][product_option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", []);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", []);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][option_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", []);
                echo "\"/> <input type=\"hidden\" name=\"product_option[";
                echo ($context["option_row"] ?? null);
                echo "][type]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []);
                echo "\"/>
                      <div class=\"form-group row\">
                        <label for=\"input-required";
                // line 1032
                echo ($context["option_row"] ?? null);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo ($context["entry_required"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
                // line 1034
                echo ($context["option_row"] ?? null);
                echo "][required]\" id=\"input-required";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">
                            ";
                // line 1035
                if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [])) {
                    // line 1036
                    echo "                              <option value=\"1\" selected=\"selected\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
                              <option value=\"0\">";
                    // line 1037
                    echo ($context["text_no"] ?? null);
                    echo "</option>
                            ";
                } else {
                    // line 1039
                    echo "                              <option value=\"1\">";
                    echo ($context["text_yes"] ?? null);
                    echo "</option>
                              <option value=\"0\" selected=\"selected\">";
                    // line 1040
                    echo ($context["text_no"] ?? null);
                    echo "</option>
                            ";
                }
                // line 1042
                echo "                          </select>
                        </div>
                      </div>
                      ";
                // line 1045
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "text")) {
                    // line 1046
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1047
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 1048
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 1051
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "textarea")) {
                    // line 1052
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1053
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_option[";
                    // line 1055
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" rows=\"5\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-value";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "</textarea>
                          </div>
                        </div>
                      ";
                }
                // line 1059
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "file")) {
                    // line 1060
                    echo "                        <div class=\"form-group row d-none\">
                          <label for=\"input-option";
                    // line 1061
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[";
                    // line 1062
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/></div>
                        </div>
                      ";
                }
                // line 1065
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "date")) {
                    // line 1066
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1067
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1070
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1078
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "time")) {
                    // line 1079
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1080
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1083
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1091
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "datetime")) {
                    // line 1092
                    echo "                        <div class=\"form-group row\">
                          <label for=\"input-option";
                    // line 1093
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo ($context["entry_option_value"] ?? null);
                    echo "</label>
                          <div class=\"col-sm-10 col-md-4\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"product_option[";
                    // line 1096
                    echo ($context["option_row"] ?? null);
                    echo "][value]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", []);
                    echo "\" placeholder=\"";
                    echo ($context["entry_option_value"] ?? null);
                    echo "\" id=\"input-option";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"form-control\"/>
                              <div class=\"input-group-append\">
                                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      ";
                }
                // line 1104
                echo "                      ";
                if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", []) == "image"))) {
                    // line 1105
                    echo "                        <div class=\"table-responsive\">
                          <table class=\"table table-bordered table-hover\">
                            <thead>
                              <tr>
                                <td class=\"text-left\">";
                    // line 1109
                    echo ($context["entry_option_value"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1110
                    echo ($context["entry_quantity"] ?? null);
                    echo "</td>
                                <td class=\"text-left\">";
                    // line 1111
                    echo ($context["entry_subtract"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1112
                    echo ($context["entry_price"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1113
                    echo ($context["entry_points"] ?? null);
                    echo "</td>
                                <td class=\"text-right\">";
                    // line 1114
                    echo ($context["entry_weight"] ?? null);
                    echo "</td>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody id=\"option-value";
                    // line 1118
                    echo ($context["option_row"] ?? null);
                    echo "\">
                              ";
                    // line 1119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 1120
                        echo "                                <tr id=\"option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "\">
                                  <td class=\"text-left\">";
                        // line 1121
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "name", []);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1122
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", []);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][product_option_value_id]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", []);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1123
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", []);
                        echo " <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][quantity]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", []);
                        echo "\"/></td>
                                  <td class=\"text-left\">";
                        // line 1124
                        if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [])) {
                            // line 1125
                            echo "                                      ";
                            echo ($context["text_yes"] ?? null);
                            echo "
                                    ";
                        } else {
                            // line 1127
                            echo "                                      ";
                            echo ($context["text_no"] ?? null);
                            echo "
                                    ";
                        }
                        // line 1129
                        echo "                                    <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][subtract]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", []);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1130
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", []);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", []);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1131
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", []);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][price]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", []);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1132
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", []);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", []);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1133
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", []);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][points]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", []);
                        echo "\"/></td>
                                  <td class=\"text-right\">";
                        // line 1134
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", []);
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", []);
                        echo "
                                    <input type=\"hidden\" name=\"product_option[";
                        // line 1135
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight_prefix]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", []);
                        echo "\"/> <input type=\"hidden\" name=\"product_option[";
                        echo ($context["option_row"] ?? null);
                        echo "][product_option_value][";
                        echo ($context["option_value_row"] ?? null);
                        echo "][weight]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", []);
                        echo "\"/></td>
                                  <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 1136
                        echo ($context["button_edit"] ?? null);
                        echo "\" data-option-row=\"";
                        echo ($context["option_row"] ?? null);
                        echo "\" data-option-value-row=\"";
                        echo ($context["option_value_row"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></button> <button type=\"button\" onclick=\"\$(this).tooltip('dispose'); \$('#option-value-row";
                        echo ($context["option_value_row"] ?? null);
                        echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                </tr>
                                ";
                        // line 1138
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 1139
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1140
                    echo "                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan=\"6\"></td>
                                <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 1144
                    echo ($context["button_option_value_add"] ?? null);
                    echo "\" data-option-row=\"";
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                              </tr>
                            </tfoot>
                          </table>
                          <select id=\"product-option-values";
                    // line 1148
                    echo ($context["option_row"] ?? null);
                    echo "\" class=\"d-none\">
                            ";
                    // line 1149
                    if ((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["option_values"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [])] ?? null) : null)) {
                        // line 1150
                        echo "                              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["option_values"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [])] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 1151
                            echo "                                <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                            echo "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1153
                        echo "                            ";
                    }
                    // line 1154
                    echo "                          </select>
                        </div>
                      ";
                }
                // line 1157
                echo "                    </fieldset>
                    ";
                // line 1158
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 1159
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1160
            echo "                </div>
                <fieldset>
                  <legend>";
            // line 1162
            echo ($context["text_option_add"] ?? null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 1164
            echo ($context["entry_option"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 1166
            echo ($context["entry_option"] ?? null);
            echo "\" id=\"input-option\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
            // line 1167
            echo ($context["help_option"] ?? null);
            echo "</small>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 1173
            echo "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 1174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 1175
                echo "                  <fieldset>
                    <legend>";
                // line 1176
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                echo "</legend>
                    ";
                // line 1177
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "select")) {
                    // line 1178
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 1182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 1183
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 1184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1185
                        echo "                                ";
                        if (((($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["variant"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []) == (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["variant"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)))) {
                            // line 1186
                            echo "                                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\" selected>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                            echo "
                                    ";
                            // line 1187
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                                // line 1188
                                echo "                                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                                echo ")
                                    ";
                            }
                            // line 1189
                            echo "</option>
                                ";
                        } else {
                            // line 1191
                            echo "                                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                            echo "
                                    ";
                            // line 1192
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                                // line 1193
                                echo "                                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                                echo ")
                                    ";
                            }
                            // line 1194
                            echo "</option>
                                ";
                        }
                        // line 1196
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1197
                    echo "                            </select>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1201
                    if ((($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1202
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1204
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1206
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1211
                    if ((($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["error_variant"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1212
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["error_variant"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1214
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1217
                echo "
                    ";
                // line 1218
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "radio")) {
                    // line 1219
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option";
                    // line 1223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1224
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1225
                        echo "                                <div class=\"form-check\">
                                  <label>
                                    ";
                        // line 1227
                        if (((($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["variant"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []) == (($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["variant"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)))) {
                            // line 1228
                            echo "                                      <input type=\"radio\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\" class=\"form-check-input\" checked/>
                                    ";
                        } else {
                            // line 1230
                            echo "                                      <input type=\"radio\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\" class=\"form-check-input\"/>
                                    ";
                        }
                        // line 1232
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [])) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", []);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1233
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                        echo "
                                    ";
                        // line 1234
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                            // line 1235
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                            echo ")
                                    ";
                        }
                        // line 1237
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1240
                    echo "                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1244
                    if ((($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1245
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1247
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1249
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1254
                    if ((($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["error_variant"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1255
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["error_variant"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1257
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1260
                echo "
                    ";
                // line 1261
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "checkbox")) {
                    // line 1262
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option";
                    // line 1266
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 1267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1268
                        echo "                                <div class=\"form-check\">
                                  <label>
                                    ";
                        // line 1270
                        if (((($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 = ($context["variant"] ?? null)) && is_array($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47) || $__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47 instanceof ArrayAccess ? ($__internal_1f87e440d7b5ac0d3821fd704a87cfd009d5f0cfaa151c63b53e5d2f3e117b47[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []), (($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 = ($context["variant"] ?? null)) && is_array($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63) || $__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63 instanceof ArrayAccess ? ($__internal_5f0601c6aca043f0871c692399d8a4b50f756908e693f6dc8217a09ebec49d63[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)))) {
                            // line 1271
                            echo "                                      <input type=\"checkbox\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\" class=\"form-check-input\" checked/>
                                    ";
                        } else {
                            // line 1273
                            echo "                                      <input type=\"checkbox\" name=\"variant[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", []);
                            echo "\" class=\"form-check-input\"/>
                                    ";
                        }
                        // line 1275
                        echo "                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [])) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", []);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 1276
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", []);
                        echo "
                                    ";
                        // line 1277
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [])) {
                            // line 1278
                            echo "                                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", []);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", []);
                            echo ")
                                    ";
                        }
                        // line 1280
                        echo "                                  </label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1283
                    echo "                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1287
                    if ((($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c) || $__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c instanceof ArrayAccess ? ($__internal_2ca27bbf98b4159f4f59a7748003a9c780384782aa02798832bfdb1e4413f68c[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1288
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1290
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1292
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1297
                    if ((($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 = ($context["error_variant"] ?? null)) && is_array($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8) || $__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8 instanceof ArrayAccess ? ($__internal_76fb338ba58f80d23455c79f0abb5764e150448d58ab4aec9c47558465bff0b8[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1298
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 = ($context["error_variant"] ?? null)) && is_array($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9) || $__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9 instanceof ArrayAccess ? ($__internal_63f73f0dc37a3f090f2879710955e3129a524d5e1461c1d27648aa08f83349f9[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1300
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1303
                echo "
                    ";
                // line 1304
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "text")) {
                    // line 1305
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1306
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 1309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" value=\"";
                    echo (((($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 = ($context["variant"] ?? null)) && is_array($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7) || $__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7 instanceof ArrayAccess ? ($__internal_ee6f5eb48ecbf75fb04eb4b2c7995d0eec850c575001fd8d9630e7a478f36fb7[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 = ($context["variant"] ?? null)) && is_array($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6) || $__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6 instanceof ArrayAccess ? ($__internal_77af6e16e7409de2d04b8ff1737ff0494a0d4416ab4470927b19e8c18449b0d6[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1313
                    if ((($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca) || $__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca instanceof ArrayAccess ? ($__internal_21a7ab6cfaa4777b496f234972e3a437102bfda4972492e3e4ebd25921b49fca[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1314
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1316
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1318
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1323
                    if ((($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b = ($context["error_variant"] ?? null)) && is_array($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b) || $__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b instanceof ArrayAccess ? ($__internal_5b22c47bf69a7c58f9441235c68752cfde2c3566ac2df8c7c449610a0de4a42b[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1324
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 = ($context["error_variant"] ?? null)) && is_array($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642) || $__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642 instanceof ArrayAccess ? ($__internal_07434facb388bc291c6ac048cf590692daf8842ec4451c9383f47ec378036642[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1326
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1329
                echo "
                    ";
                // line 1330
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "textarea")) {
                    // line 1331
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 1335
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 = ($context["variant"] ?? null)) && is_array($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333) || $__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333 instanceof ArrayAccess ? ($__internal_2c9253d871b0d69e25a57011dd780abf88e92dcba4b36f70af4717cd81e15333[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 = ($context["variant"] ?? null)) && is_array($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923) || $__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923 instanceof ArrayAccess ? ($__internal_061dccfb25fdf2e8c86df832785bce8036d6b7154e5456c6bad32ae413349923[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "</textarea>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1339
                    if ((($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e) || $__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e instanceof ArrayAccess ? ($__internal_0afc03374acd15e85d1311fdbd190736569aaa1f2e1936730ea3993f463bdd9e[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1340
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1342
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1344
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1349
                    if ((($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 = ($context["error_variant"] ?? null)) && is_array($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646) || $__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646 instanceof ArrayAccess ? ($__internal_e63c8ce4e34b45529c9c2166e26c2c8fbc432f7a854c225f59f58e296df9b646[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1350
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 = ($context["error_variant"] ?? null)) && is_array($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3) || $__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3 instanceof ArrayAccess ? ($__internal_2ece1c3e1f50bca9244dd4c555dec7da811cc2cf5534f2c877fb41db9cf7c2f3[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1352
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1355
                echo "
                    ";
                // line 1356
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "file")) {
                    // line 1357
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1358
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" id=\"button-upload";
                    // line 1361
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"hidden\" name=\"variant[";
                    // line 1362
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" value=\"";
                    echo (((($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 = ($context["variant"] ?? null)) && is_array($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427) || $__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427 instanceof ArrayAccess ? ($__internal_2a85c9614fea73f24b66b1cb5423773b4b3db33a1d88c103663819b36ebdb427[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f = ($context["variant"] ?? null)) && is_array($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f) || $__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f instanceof ArrayAccess ? ($__internal_6b8cb62d8575f82b44644a8959c5aad7457537f62b3f95fc5564d4571b201f1f[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\"/>
                            <div class=\"input-group-append align-items-center\">
                              <div class=\"custom-control custom-switch\">
                                ";
                    // line 1365
                    if ((($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79) || $__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79 instanceof ArrayAccess ? ($__internal_21e652934f7cae41b4b91555f7968af6aaced7c293174aa09edcf77c2b65ce79[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1366
                        echo "                                  <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                ";
                    } else {
                        // line 1368
                        echo "                                  <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#button-upload";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                ";
                    }
                    // line 1370
                    echo "                                <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1374
                    if ((($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 = ($context["error_variant"] ?? null)) && is_array($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48) || $__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48 instanceof ArrayAccess ? ($__internal_38786113ede825133e0c0c459886851df8e13425ff8ed8deba84858f5bfcee48[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1375
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 = ($context["error_variant"] ?? null)) && is_array($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497) || $__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497 instanceof ArrayAccess ? ($__internal_b300990ac10db04573b0d13f9c4f5d0839a2051e80d4665727ee9f108a42e497[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1377
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1380
                echo "
                    ";
                // line 1381
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "date")) {
                    // line 1382
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1383
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"variant[";
                    // line 1386
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" value=\"";
                    echo (((($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 = ($context["variant"] ?? null)) && is_array($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776) || $__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776 instanceof ArrayAccess ? ($__internal_4790ce43a59a024be760c8754d57cb4d0dee400b0bd854e4fc1ea0c99930e776[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee = ($context["variant"] ?? null)) && is_array($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee) || $__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee instanceof ArrayAccess ? ($__internal_76f1e304d8fe1536a815be93e2e7330863cec351a71136eed8be1a3f6c4c82ee[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1393
                    if ((($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096) || $__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096 instanceof ArrayAccess ? ($__internal_9b2395a0e04441d25c8e8002301fdff3c7a807a997fb50080df6d8f1ec427096[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1394
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1396
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1398
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1403
                    if ((($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 = ($context["error_variant"] ?? null)) && is_array($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9) || $__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9 instanceof ArrayAccess ? ($__internal_ae8761103bd1c60af04d19feefa0b4fd823162d6076a3eaf1a1bfa47302417e9[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1404
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 = ($context["error_variant"] ?? null)) && is_array($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92) || $__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92 instanceof ArrayAccess ? ($__internal_1b8137deccaa0819494754263c6b5c7c39d8063c2f480f55364fc27d89358c92[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1406
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1409
                echo "
                    ";
                // line 1410
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "time")) {
                    // line 1411
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1412
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"variant[";
                    // line 1415
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" value=\"";
                    echo (((($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 = ($context["variant"] ?? null)) && is_array($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536) || $__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536 instanceof ArrayAccess ? ($__internal_a978e3f1f39c5d1b109bc6bebe1afcf574f31134f8bdd7c0af11fef3af04f536[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a = ($context["variant"] ?? null)) && is_array($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a) || $__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a instanceof ArrayAccess ? ($__internal_a06639e8aea06553231587fc16ca0ea1a21699883635a45d666a35a97d9ece7a[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1422
                    if ((($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8) || $__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8 instanceof ArrayAccess ? ($__internal_39a5cce6fa2bff30530676887bb316ac8354eec8913360d5daac86f4c858f6c8[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1423
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1425
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1427
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1432
                    if ((($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc = ($context["error_variant"] ?? null)) && is_array($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc) || $__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc instanceof ArrayAccess ? ($__internal_050c04bce2a3631e67983e8362fe17b4134f5f81b57055bbf2a7b9cf6efe1bfc[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1433
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb = ($context["error_variant"] ?? null)) && is_array($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb) || $__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb instanceof ArrayAccess ? ($__internal_fa6a0e85ff0cd5606fb475c64fbbf1f2467c8021b9df7a12d157d8f459855bbb[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1435
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1438
                echo "
                    ";
                // line 1439
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", []) == "datetime")) {
                    // line 1440
                    echo "                      <div class=\"form-group row";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [])) {
                        echo " required";
                    }
                    echo "\">
                        <label for=\"input-option";
                    // line 1441
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", []);
                    echo "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"variant[";
                    // line 1444
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "]\" value=\"";
                    echo (((($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 = ($context["variant"] ?? null)) && is_array($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74) || $__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74 instanceof ArrayAccess ? ($__internal_513ddf1022810cf682376066d54fc43f60e596daf4c87118aaccf513f1067c74[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) ? ((($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee = ($context["variant"] ?? null)) && is_array($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee) || $__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee instanceof ArrayAccess ? ($__internal_9a5e489a5a31742be6ab32c5389abee952577e6f85e6982e4dbd62730c4792ee[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["option"], "value", [])));
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                            </div>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\">
                                <div class=\"custom-control custom-switch\">
                                  ";
                    // line 1451
                    if ((($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d = twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "variant", [])) && is_array($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d) || $__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d instanceof ArrayAccess ? ($__internal_a0d4b9c24ecc1069804d5ffd2fb2deb773c447124ee995206d1d298ddc01ef9d[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1452
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\" checked/>
                                  ";
                    } else {
                        // line 1454
                        echo "                                    <input type=\"checkbox\" name=\"override[variant][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "]\" value=\"1\" id=\"input-variant-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" data-toggle=\"switch\" data-target=\"#input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                        echo "\" class=\"custom-control-input\"/>
                                  ";
                    }
                    // line 1456
                    echo "                                  <label for=\"input-variant-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", []);
                    echo "\" class=\"custom-control-label\"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                          ";
                    // line 1461
                    if ((($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd = ($context["error_variant"] ?? null)) && is_array($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd) || $__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd instanceof ArrayAccess ? ($__internal_c0bd37fb023ceb7cdf58c4e1bdb0246219e73ab515a5dbed1e281006a23a53cd[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null)) {
                        // line 1462
                        echo "                            <div class=\"invalid-tooltip\">";
                        echo (($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 = ($context["error_variant"] ?? null)) && is_array($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4) || $__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4 instanceof ArrayAccess ? ($__internal_f47b62a1eaad3f095a3657c8ea134dd4d4d1bd718b4a5ba8e5ae4a2885d114d4[twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [])] ?? null) : null);
                        echo "</div>
                          ";
                    }
                    // line 1464
                    echo "                        </div>
                      </div>
                    ";
                }
                // line 1467
                echo "
                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1470
            echo "              </div>
            ";
        }
        // line 1472
        echo "
            <div id=\"tab-recurring\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-recurring\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1478
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1479
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">
                        ";
        // line 1481
        if (($context["master_id"] ?? null)) {
            // line 1482
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1483
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_recurring", [])) {
                // line 1484
                echo "                              <input type=\"checkbox\" name=\"override[product_recurring]\" value=\"1\" id=\"input-variant-product-recurring\" data-toggle=\"switch\" data-target=\"#product-recurring\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1486
                echo "                              <input type=\"checkbox\" name=\"override[product_recurring]\" value=\"1\" id=\"input-variant-product-recurring\" data-toggle=\"switch\" data-target=\"#product-recurring\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1488
            echo "                            <label for=\"input-variant-product-recurring\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1491
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1495
        $context["recurring_row"] = 0;
        // line 1496
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1497
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1498
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">
                            ";
            // line 1499
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1500
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", []) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", []))) {
                    // line 1501
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 1503
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", []);
                    echo "</option>
                              ";
                }
                // line 1505
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1506
            echo "                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 1507
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1509
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", []))) {
                    // line 1510
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 1512
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                }
                // line 1514
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1515
            echo "                          </select></td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 1516
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1518
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1519
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1520
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-recurring\" data-toggle=\"tooltip\" title=\"";
        // line 1524
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1536
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1537
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1538
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1539
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1540
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1541
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1542
        if (($context["master_id"] ?? null)) {
            // line 1543
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1544
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [])) {
                // line 1545
                echo "                              <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-toggle=\"switch\" data-target=\"#product-discount\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1547
                echo "                              <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-toggle=\"switch\" data-target=\"#product-discount\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1549
            echo "                            <label for=\"input-variant-product-discount\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1551
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1555
        $context["discount_row"] = 0;
        // line 1556
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1557
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 1558
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1559
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1560
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", []))) {
                    // line 1561
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 1563
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                }
                // line 1565
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1566
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1567
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", []);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1568
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", []);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 1569
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", []);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1572
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", []);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1580
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", []);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1586
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1588
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1589
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-discount\" data-toggle=\"tooltip\" title=\"";
        // line 1594
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-special\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-special\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1606
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1607
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1608
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1609
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1610
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1611
        if (($context["master_id"] ?? null)) {
            // line 1612
            echo "                          <div class=\"custom-control custom-switch\">
                            ";
            // line 1613
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_special", [])) {
                // line 1614
                echo "                              <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-toggle=\"switch\" data-target=\"#product-special\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1616
                echo "                              <input type=\"checkbox\" name=\"override[product_special]\" value=\"1\" id=\"input-variant-special\" data-toggle=\"switch\" data-target=\"#product-special\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1618
            echo "                            <label for=\"input-variant-special\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1620
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1624
        $context["special_row"] = 0;
        // line 1625
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1626
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1627
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 1628
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1629
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", []))) {
                    // line 1630
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 1632
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                    echo "</option>
                              ";
                }
                // line 1634
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1635
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1636
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", []);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1637
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", []);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1640
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", []);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-left\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1648
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", []);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" class=\"form-control\"/>
                            <div class=\"input-group-append\">
                              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                            </div>
                          </div>
                        </td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1654
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1656
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1657
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1658
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-special\" data-toggle=\"tooltip\" title=\"";
        // line 1662
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1671
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"row\">
                  <div class=\"col-sm-4 col-md-3 mb-3\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 1675
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                      <div class=\"card-body\">
                        <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 1677
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 1678
        echo ($context["button_clear"] ?? null);
        echo "</button>
                        ";
        // line 1679
        if (($context["master_id"] ?? null)) {
            // line 1680
            echo "                          <div class=\"mx-auto w-25\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1682
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [])) {
                // line 1683
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-image\" data-toggle=\"switch\" data-target=\"#image\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1685
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-image\" data-toggle=\"switch\" data-target=\"#image\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1687
            echo "                              <label for=\"input-variant-image\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        ";
        }
        // line 1691
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1697
        echo ($context["text_image_additional"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 1702
        echo ($context["entry_image"] ?? null);
        echo "</td>
                        <td class=\"text-left\">";
        // line 1703
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                        <td class=\"text-right\">";
        // line 1704
        if (($context["master_id"] ?? null)) {
            // line 1705
            echo "                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1706
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [])) {
                // line 1707
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-toggle=\"switch\" data-target=\"#product-image\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1709
                echo "                                <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-toggle=\"switch\" data-target=\"#product-image\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1711
            echo "                              <label for=\"input-variant-product-image\" class=\"custom-control-label\"></label>
                            </div>
                          ";
        }
        // line 1713
        echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1717
        $context["image_row"] = 0;
        // line 1718
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1719
            echo "                        <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"card image\">
                              <img src=\"";
            // line 1722
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", []);
            echo "\" alt=\"\" title=\"\" id=\"thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", []);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image";
            // line 1724
            echo ($context["image_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image";
            // line 1725
            echo ($context["image_row"] ?? null);
            echo "\" data-thumb=\"#thumb-image";
            echo ($context["image_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </td>
                          <td class=\"text-left\"><input type=\"text\" name=\"product_image[";
            // line 1729
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", []);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1730
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1732
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1733
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1734
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-right\"><button type=\"button\" id=\"button-image\" data-toggle=\"tooltip\" title=\"";
        // line 1738
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1748
        echo ($context["text_reward"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1750
        echo ($context["entry_points"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1753
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1754
        if (($context["master_id"] ?? null)) {
            // line 1755
            echo "                        <div class=\"input-group-append\">
                          <div class=\"input-group-text\">
                            <div class=\"custom-control custom-switch\">
                              ";
            // line 1758
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "points", [])) {
                // line 1759
                echo "                                <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-toggle=\"switch\" data-target=\"#input-points\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1761
                echo "                                <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-toggle=\"switch\" data-target=\"#input-points\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1763
            echo "                              <label for=\"input-variant-points\" class=\"custom-control-label\"></label>
                            </div>
                          </div>
                        </div>
                      ";
        }
        // line 1768
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1769
        echo ($context["help_points"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1774
        echo ($context["text_points"] ?? null);
        echo "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 1779
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                        <td class=\"text-right\">";
        // line 1780
        echo ($context["entry_reward"] ?? null);
        echo "
                          ";
        // line 1781
        if (($context["master_id"] ?? null)) {
            // line 1782
            echo "                            <div class=\"custom-control custom-switch float-right\">
                              ";
            // line 1783
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [])) {
                // line 1784
                echo "                                <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-toggle=\"switch\" data-target=\"#product-reward\" class=\"custom-control-input\" checked/>
                              ";
            } else {
                // line 1786
                echo "                                <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-toggle=\"switch\" data-target=\"#product-reward\" class=\"custom-control-input\"/>
                              ";
            }
            // line 1788
            echo "                              <label for=\"input-variant-product-reward\" class=\"custom-control-label\"></label>
                            </div>
                          ";
        }
        // line 1791
        echo "                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1796
            echo "                        <tr>
                          <td class=\"text-left\">";
            // line 1797
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
            echo "</td>
                          <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1798
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
            echo "][points]\" value=\"";
            echo (((($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc = ($context["product_reward"] ?? null)) && is_array($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc) || $__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc instanceof ArrayAccess ? ($__internal_5709e2677b4b83eb2a2d5be30b568b45a9fd42d601be7779abeb037c5bb82bbc[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588 = ($context["product_reward"] ?? null)) && is_array($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588) || $__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588 instanceof ArrayAccess ? ($__internal_85a94be24d27f400d3754518c0fed891a2870cf6c9f7930ecbbd2c0667dcb588[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [])] ?? null) : null), "points", [])) : (""));
            echo "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1801
        echo "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        // line 1808
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1813
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1814
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1818
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1819
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1820
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
            echo "</td>
                        <td class=\"text-left\">
                          ";
            // line 1822
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1823
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><img src=\"language/";
                // line 1825
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "\"/></span>
                              </div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1827
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "]\" value=\"";
                if ((($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42 = (($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a = ($context["product_seo_url"] ?? null)) && is_array($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a) || $__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a instanceof ArrayAccess ? ($__internal_99ec2c161ffe4e6b1c6173e61d1085b2976b25fe9aa10f6d1365c01c6de88d6a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42) || $__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42 instanceof ArrayAccess ? ($__internal_b048cdecd09f3f66f869521ec789beb4047339137104742ed6d8d5f15ebd5d42[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                    echo (($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954 = (($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905 = ($context["product_seo_url"] ?? null)) && is_array($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905) || $__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905 instanceof ArrayAccess ? ($__internal_199f0b4662f2e9f66318b338fecc6de4eee0110c7a2fc576d0d2e36c815fa905[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954) || $__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954 instanceof ArrayAccess ? ($__internal_92767120bd05cd58560300830639c67569c47de084f3b54ba8e8e21eadc07954[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1829
                if ((($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306 = (($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf = ($context["error_keyword"] ?? null)) && is_array($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf) || $__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf instanceof ArrayAccess ? ($__internal_a6322c45d8a03cd4e2f489c65d81c5d915130866fcc6a19176188fece10886bf[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306) || $__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306 instanceof ArrayAccess ? ($__internal_076cdfde217cc2dcb1d192bf072c0dd51444fc0425859e28ebe2ca6327b0b306[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                    // line 1830
                    echo "                              <div class=\"invalid-tooltip\">";
                    echo (($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286 = (($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92 = ($context["error_keyword"] ?? null)) && is_array($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92) || $__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92 instanceof ArrayAccess ? ($__internal_032b7072de262a2d66087c5c8f28da6c904ac1f2bb347e8ebc99ad09bdeacf92[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286) || $__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286 instanceof ArrayAccess ? ($__internal_9977e4a47300a28f3fabe9fc1356138549dcaec21b8dfbaa725c5311e8f93286[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1832
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1835
        echo "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1845
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1846
        echo ($context["entry_layout"] ?? null);
        echo "
                        ";
        // line 1847
        if (($context["master_id"] ?? null)) {
            // line 1848
            echo "                          <div class=\"custom-control custom-switch float-right\">
                            ";
            // line 1849
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [])) {
                // line 1850
                echo "                              <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-toggle=\"switch\" data-target=\"#product-layout\" class=\"custom-control-input\" checked/>
                            ";
            } else {
                // line 1852
                echo "                              <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-toggle=\"switch\" data-target=\"#product-layout\" class=\"custom-control-input\"/>
                            ";
            }
            // line 1854
            echo "                            <label for=\"input-variant-product-layout\" class=\"custom-control-label\"></label>
                          </div>
                        ";
        }
        // line 1857
        echo "                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1861
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1862
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1863
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1864
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>
                            ";
            // line 1866
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1867
                echo "                              ";
                if (((($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c = ($context["product_layout"] ?? null)) && is_array($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c) || $__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c instanceof ArrayAccess ? ($__internal_c35e1971207bbad1f7fcc864afa407b459932b6e3c12cb3a8906d5b68c37aa0c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null) && ((($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de = ($context["product_layout"] ?? null)) && is_array($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de) || $__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de instanceof ArrayAccess ? ($__internal_53651af1e29ae89d05c98683d3795d07d9e1bebbf7ae5b8b6829934e0ba455de[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [])))) {
                    // line 1868
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 1870
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                    echo "</option>
                              ";
                }
                // line 1872
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1873
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1876
        echo "                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-toggle=\\'ckeditor\\']').ckeditor();

// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1894
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tmanufacturer_id: 0,
\t\t\t\t\tname: '";
        // line 1899
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t\$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1921
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\thtml = '<tr id=\"product-category' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-category').append(html);
\t}
});

\$('#product-category').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1955
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\thtml = '<tr id=\"product-filter' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-filter').append(html);
\t}
});

\$('#product-filter').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1989
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\thtml = '<tr id=\"product-download' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-download').append(html);
\t}
});

\$('#product-download').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 2023
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\thtml = '<tr id=\"product-related' + item['value'] + '\">';
\t\thtml += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\t\$('#product-related').append(html);
\t}
});

\$('#product-related').on('click', '.btn', function() {
\t\$(this).parent().parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 2054
        echo ($context["attribute_row"] ?? null);
        echo ";

\$('#button-attribute').on('click', function() {
\thtml = '<tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 2058
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-left\">';
  ";
        // line 2060
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2061
            echo "\thtml += '<div class=\"input-group\">';
\thtml += '  <div class=\"input-group-prepend\"><span class=\"input-group-text\"><img src=\"language/";
            // line 2062
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\" /></span></div>';
\thtml += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 2063
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea>';
\thtml += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2066
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2067
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-attribute').append(html);

\tattributeautocomplete(attribute_row);

\tattribute_row++;
});

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 2081
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#product-attribute tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script>
<script type=\"text/javascript\"><!--
";
        // line 2106
        if ( !($context["master_id"] ?? null)) {
            // line 2107
            echo "var option_row = ";
            echo ($context["option_row"] ?? null);
            echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
            // line 2112
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml = '<fieldset id=\"option-row' + option_row + '\">';
\t\thtml += '  <legend>' + item['label'] + ' <button type=\"button\" class=\"btn btn-danger btn-sm float-right\" onclick=\"\$(\\'#option-row' + option_row + '\\').remove();\"><i class=\"fas fa-minus-circle\"></i></button></legend>';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\thtml += '  <div class=\"form-group row\">';
\t\thtml += '    <label for=\"input-required' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2136
            echo ($context["entry_required"] ?? null);
            echo "</label>';
\t\thtml += '\t <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t   <option value=\"1\">";
            // line 2138
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '\t   <option value=\"0\">";
            // line 2139
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t\thtml += '\t </select></div>';
\t\thtml += '  </div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2145
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2146
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2152
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 2153
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group row d-none\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2159
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 d-none\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2160
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2166
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2167
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2173
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2174
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group row\">';
\t\t\thtml += '\t  <label for=\"input-option' + option_row + '\" class=\"col-sm-2 col-form-label\">";
            // line 2180
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10 col-md-4\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 2181
            echo ($context["entry_option_value"] ?? null);
            echo "\" id=\"input-option' + option_row + '\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div></div></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 2190
            echo ($context["entry_option_value"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2191
            echo ($context["entry_quantity"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
            // line 2192
            echo ($context["entry_subtract"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2193
            echo ($context["entry_price"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2194
            echo ($context["entry_points"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
            // line 2195
            echo ($context["entry_weight"] ?? null);
            echo "</td>';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </thead>';
\t\t\thtml += '    <tbody></tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"5\"></td>';
\t\t\thtml += '        <td class=\"text-right\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-toggle=\"tooltip\" title=\"";
            // line 2203
            echo ($context["button_option_value_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';

\t\t\thtml += '  <select id=\"product-option-values' + option_row + '\" class=\"d-none\">';

\t\t\tfor (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t}

\t\t\thtml += '  </select>';
\t\t\thtml += '</fieldset>';
\t\t}

\t\t\$('#option').append(html);

\t\t\$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\tcontainer: 'body',
\t\t\thtml: true
\t\t});

\t\t\$('.date').datetimepicker({
\t\t\t'format': 'YYYY-MM-DD',
\t\t\t'locale': '";
            // line 2228
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\t'format': 'HH:mm',
\t\t\t'locale': '";
            // line 2234
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\t'format': 'YYYY-MM-DD HH:mm',
\t\t\t'locale': '";
            // line 2240
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\t'allowInputToggle': true
\t\t});

\t\toption_row++;
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
var option_value_row = ";
            // line 2249
            echo ($context["option_value_row"] ?? null);
            echo ";

\$('#option').on('click', '.btn-primary', function() {
\tvar element = this;

\tif (\$(element).attr('data-option-value-row')) {
\t\telement.option_value_row = \$(element).attr('data-option-value-row');
\t} else {
\t\telement.option_value_row = option_value_row;
\t}

\t\$('.modal').remove();

\thtml = '<div id=\"modal-option\" class=\"modal fade\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <h5 class=\"modal-title\"><i class=\"fas fa-pencil-alt\"></i> ";
            // line 2266
            echo ($context["text_option_value"] ?? null);
            echo "</h5> <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-option-value\" class=\"col-form-label\">";
            // line 2270
            echo ($context["entry_option_value"] ?? null);
            echo "</label>';
\thtml += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-control\">';

\toption_value = \$('#product-option-values' + \$(element).attr('data-option-row') + ' option');

\tfor (i = 0; i < option_value.length; i++) {
\t\tif (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
\t\t\thtml += '<option value=\"' + \$(option_value[i]).val() + '\" selected=\"selected\">' + \$(option_value[i]).text() + '</option>';
\t\t} else {
\t\t\thtml += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
\t\t}
\t}

\thtml += '      \t   </select>';
\thtml += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-quantity\" class=\"col-form-label\">";
            // line 2288
            echo ($context["entry_quantity"] ?? null);
            echo "</label>';
\thtml += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 2289
            echo ($context["entry_quantity"] ?? null);
            echo "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-subtract\" class=\"col-form-label\">";
            // line 2293
            echo ($context["entry_subtract"] ?? null);
            echo "</label>';
\thtml += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-control\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
\t\thtml += '        <option value=\"1\" selected=\"selected\">";
            // line 2297
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '      \t <option value=\"0\">";
            // line 2298
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t} else {
\t\thtml += '      \t <option value=\"1\">";
            // line 2300
            echo ($context["text_yes"] ?? null);
            echo "</option>';
\t\thtml += '      \t <option value=\"0\" selected=\"selected\">";
            // line 2301
            echo ($context["text_no"] ?? null);
            echo "</option>';
\t}

\thtml += '      \t   </select>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-price\" class=\"col-form-label\">";
            // line 2308
            echo ($context["entry_price"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '            <select name=\"price_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
\t\thtml += '      \t   <option value=\"+\" selected=\"selected\">+</option>';
\t} else {
\t\thtml += '      \t   <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected=\"selected\">-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 2325
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"input-modal-price\" class=\"form-control\"/>';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-points\" class=\"col-form-label\">";
            // line 2330
            echo ($context["entry_points"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '      \t     <select name=\"points_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
\t\thtml += '      \t       <option value=\"+\" selected>+</option>';
\t} else {
\t\thtml += '      \t       <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected>-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 2347
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-modal-points\" class=\"form-control\"/>';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '        <div class=\"form-group\">';
\thtml += '      \t   <label for=\"input-modal-weight\" class=\"col-form-label\">";
            // line 2352
            echo ($context["entry_weight"] ?? null);
            echo "</label>';
\thtml += '          <div class=\"input-group\">';
\thtml += '      \t     <select name=\"weight_prefix\" class=\"form-control col-2\">';

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
\t\thtml += '      \t       <option value=\"+\" selected>+</option>';
\t} else {
\t\thtml += '      \t       <option value=\"+\">+</option>';
\t}

\tif (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
\t\thtml += '      \t       <option value=\"-\" selected>-</option>';
\t} else {
\t\thtml += '      \t       <option value=\"-\">-</option>';
\t}

\thtml += '      \t     </select>';
\thtml += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 2369
            echo ($context["entry_weight"] ?? null);
            echo "\" id=\"input-modal-weight\" class=\"form-control\" />';
\thtml += '          </div>';
\thtml += '        </div>';

\thtml += '      </div>';

\thtml += '      <div class=\"modal-footer\">';
\thtml += '\t     <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 2376
            echo ($context["button_save"] ?? null);
            echo "</button> <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">";
            echo ($context["button_cancel"] ?? null);
            echo "</button>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-option').modal('show');

\t\$('#modal-option #button-save').on('click', function() {
\t\thtml = '<tr id=\"option-value-row' + element.option_value_row + '\">';
\t\thtml += '  <td class=\"text-left\">' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-left\">' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 2390
            echo ($context["text_yes"] ?? null);
            echo "' : '";
            echo ($context["text_no"] ?? null);
            echo "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
\t\thtml += '  <td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 2394
            echo ($context["button_edit"] ?? null);
            echo "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></button> <button type=\"button\" onclick=\"\$(this).tooltip(\\'dispose\\'); \$(\\'#option-value-row' + element.option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';

\t\tif (\$(element).attr('data-option-value-row')) {
\t\t\t\$('#option-value-row' + element.option_value_row).replaceWith(html);
\t\t} else {
\t\t\t\$('#option-value' + \$(element).attr('data-option-row') + ' tbody').append(html);

\t\t\toption_value_row++;
\t\t}

\t\t\$('[rel=tooltip]').tooltip();

\t\t\$('#modal-option').modal('hide');
\t});
});
";
        }
        // line 2411
        echo "//--></script>
<script type=\"text/javascript\"><!--
var discount_row = ";
        // line 2413
        echo ($context["discount_row"] ?? null);
        echo ";

\$('#button-discount').on('click', function() {
\thtml = '<tr id=\"discount-row' + discount_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2419
            echo "\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2421
        echo "\thtml += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 2422
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2423
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 2424
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2425
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2426
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2427
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-discount').append(html);

\t\$('.date').datetimepicker({
\t\t'format': 'YYYY-MM-DD',
\t\t'locale': '";
        // line 2434
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\tdiscount_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var special_row = ";
        // line 2442
        echo ($context["special_row"] ?? null);
        echo ";

\$('#button-special').on('click', function() {
\thtml = '<tr id=\"special-row' + special_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2448
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2450
        echo "\thtml += '  </select><input type=\"hidden\" name=\"product_special[' + special_row + '][product_special_id]\" value=\"\"/></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2451
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2452
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2453
        echo ($context["entry_date_start"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-left\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2454
        echo ($context["entry_date_end"] ?? null);
        echo "\" class=\"form-control\" /><div class=\"input-group-append\"><div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div></div></div></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2455
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-special').append(html);

\t\$('.date').datetimepicker({
\t\t'format': 'YYYY-MM-DD',
\t\t'locale': '";
        // line 2462
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t'allowInputToggle': true
\t});

\tspecial_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 2470
        echo ($context["image_row"] ?? null);
        echo ";

\$('#button-image').on('click', function() {
\thtml = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td><div class=\"card image\">';
\thtml += '    <img src=\"";
        // line 2475
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + image_row + '\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\"/>';
\thtml += '    <div class=\"card-body\">';
\thtml += '      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image' + image_row + '\" data-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 2477
        echo ($context["button_edit"] ?? null);
        echo "</button>';
\thtml += '      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image' + image_row + '\" data-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 2478
        echo ($context["button_clear"] ?? null);
        echo "</button>';
\thtml += '    </div>';
\thtml += '  </div></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 2481
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\"/></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2482
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-image').append(html);

\timage_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 2491
        echo ($context["recurring_row"] ?? null);
        echo ";

\$('#button-recurring').on('click', function() {
\thtml = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">';
  ";
        // line 2496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2497
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recurring"], "name", []), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2499
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 2501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2502
            echo "\thtml += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2504
        echo "\thtml += '  <select></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2505
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#product-recurring').append(html);

\trecurring_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#content').on('click', 'button[id^=\\'button-upload\\']', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 2532
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.invalid-tooltip').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 2570
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 2576
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 2582
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});


";
        // line 2587
        if (($context["master_id"] ?? null)) {
            // line 2588
            echo "// Variable products
\$('input[data-toggle=\\'switch\\']').on('change', function(e) {
\tvar element = this;

\tvar target = \$(this).attr('data-target');


\t// First we need to grab the default values
\t\$(target).each(function() {


\t\t// Table
\t\tif (\$(this).is('table')) {
\t\t\tif (!\$(element).prop('checked')) {

\t\t\t\t\$(element).html(\$(this).html());
\t\t\t}

\t\t\tconsole.log(this);

\t\t\t//\$(this).prop('disabled', !\$(element).prop('checked'));
\t\t}
\t});


\t// Now we need to enable or disable any fields in the targets
\t\$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('.custom-control-input').each(function() {
\t\t// Text Textarea
\t\tif (\$(this).is('input[type=\\'text\\'], textarea')) {
\t\t\t\$(this).prop('readonly', !\$(element).prop('checked'));
\t\t}

\t\t// CKEditor readonly
\t\tif (\$(this).is('[data-toggle=\\'ckeditor\\']')) {
\t\t\tvar editor = CKEDITOR.instances[\$(this).attr('id')];

\t\t\tif (editor.editable() == undefined) {
\t\t\t\teditor.on('instanceReady', function() {
\t\t\t\t\tthis.setReadOnly(!\$(element).prop('checked'));
\t\t\t\t});
\t\t\t} else {
\t\t\t\teditor.setReadOnly(!\$(element).prop('checked'));
\t\t\t}
\t\t}

\t\t// Radio Checkbox
\t\tif (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-toggle=\\'buttons\\']')) {
\t\t\tif (!\$(element).prop('checked')) {
\t\t\t\t\$(this).on('click', function(e) {
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t} else {
\t\t\t\t\$(this).off('click');
\t\t\t}
\t\t}

\t\t// Select
\t\tif (\$(this).is('select')) {
\t\t\tif (!\$(element).prop('checked')) {
\t\t\t\t\$(this).attr('readonly', 'readonly');
\t\t\t} else {
\t\t\t\t\$(this).removeAttr('readonly');
\t\t\t}

\t\t\t\$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
\t\t}

\t\t// Button
\t\tif (\$(this).is('button')) {
\t\t\t\$(this).prop('disabled', !\$(element).prop('checked'));
\t\t}


\t});


});

\$('.custom-control-input').trigger('change');

/*
\$(document).ready(function() {

\$.ajax({
    url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
            // line 2672
            echo ($context["user_token"] ?? null);
            echo "&filter_name=',
    dataType: 'json',
    success: function(json) {
        html = '<tr id=\"product-category' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-right\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category').append(html);
    }
});
});

\$('input[data-toggle=\\'switch\\']').on('change', function(e) {


});
*/
";
        }
        // line 2691
        echo "//--></script>
<script type=\"text/javascript\"><!--
\$('#language li:first-child a').tab('show');
//--></script>
";
        // line 2695
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5932 => 2695,  5926 => 2691,  5904 => 2672,  5818 => 2588,  5816 => 2587,  5808 => 2582,  5799 => 2576,  5790 => 2570,  5749 => 2532,  5719 => 2505,  5716 => 2504,  5705 => 2502,  5701 => 2501,  5697 => 2499,  5686 => 2497,  5682 => 2496,  5674 => 2491,  5662 => 2482,  5658 => 2481,  5652 => 2478,  5648 => 2477,  5641 => 2475,  5633 => 2470,  5622 => 2462,  5612 => 2455,  5608 => 2454,  5604 => 2453,  5600 => 2452,  5596 => 2451,  5593 => 2450,  5582 => 2448,  5578 => 2447,  5570 => 2442,  5559 => 2434,  5549 => 2427,  5545 => 2426,  5541 => 2425,  5537 => 2424,  5533 => 2423,  5529 => 2422,  5526 => 2421,  5515 => 2419,  5511 => 2418,  5503 => 2413,  5499 => 2411,  5477 => 2394,  5468 => 2390,  5449 => 2376,  5439 => 2369,  5419 => 2352,  5411 => 2347,  5391 => 2330,  5383 => 2325,  5363 => 2308,  5353 => 2301,  5349 => 2300,  5344 => 2298,  5340 => 2297,  5333 => 2293,  5326 => 2289,  5322 => 2288,  5301 => 2270,  5294 => 2266,  5274 => 2249,  5262 => 2240,  5253 => 2234,  5244 => 2228,  5216 => 2203,  5205 => 2195,  5201 => 2194,  5197 => 2193,  5193 => 2192,  5189 => 2191,  5185 => 2190,  5173 => 2181,  5169 => 2180,  5160 => 2174,  5156 => 2173,  5147 => 2167,  5143 => 2166,  5134 => 2160,  5130 => 2159,  5121 => 2153,  5117 => 2152,  5108 => 2146,  5104 => 2145,  5095 => 2139,  5091 => 2138,  5086 => 2136,  5059 => 2112,  5050 => 2107,  5048 => 2106,  5020 => 2081,  5003 => 2067,  5000 => 2066,  4989 => 2063,  4981 => 2062,  4978 => 2061,  4974 => 2060,  4969 => 2058,  4962 => 2054,  4928 => 2023,  4891 => 1989,  4854 => 1955,  4817 => 1921,  4792 => 1899,  4784 => 1894,  4764 => 1876,  4756 => 1873,  4750 => 1872,  4742 => 1870,  4734 => 1868,  4731 => 1867,  4727 => 1866,  4722 => 1864,  4718 => 1863,  4715 => 1862,  4711 => 1861,  4705 => 1857,  4700 => 1854,  4696 => 1852,  4692 => 1850,  4690 => 1849,  4687 => 1848,  4685 => 1847,  4681 => 1846,  4677 => 1845,  4665 => 1835,  4652 => 1832,  4646 => 1830,  4644 => 1829,  4631 => 1827,  4622 => 1825,  4618 => 1823,  4614 => 1822,  4609 => 1820,  4606 => 1819,  4602 => 1818,  4595 => 1814,  4591 => 1813,  4583 => 1808,  4574 => 1801,  4563 => 1798,  4559 => 1797,  4556 => 1796,  4552 => 1795,  4546 => 1791,  4541 => 1788,  4537 => 1786,  4533 => 1784,  4531 => 1783,  4528 => 1782,  4526 => 1781,  4522 => 1780,  4518 => 1779,  4510 => 1774,  4502 => 1769,  4499 => 1768,  4492 => 1763,  4488 => 1761,  4484 => 1759,  4482 => 1758,  4477 => 1755,  4475 => 1754,  4469 => 1753,  4463 => 1750,  4458 => 1748,  4445 => 1738,  4439 => 1734,  4433 => 1733,  4431 => 1732,  4424 => 1730,  4416 => 1729,  4405 => 1725,  4397 => 1724,  4382 => 1722,  4375 => 1719,  4370 => 1718,  4368 => 1717,  4362 => 1713,  4357 => 1711,  4353 => 1709,  4349 => 1707,  4347 => 1706,  4344 => 1705,  4342 => 1704,  4338 => 1703,  4334 => 1702,  4326 => 1697,  4318 => 1691,  4312 => 1687,  4308 => 1685,  4304 => 1683,  4302 => 1682,  4298 => 1680,  4296 => 1679,  4292 => 1678,  4288 => 1677,  4279 => 1675,  4272 => 1671,  4260 => 1662,  4254 => 1658,  4248 => 1657,  4246 => 1656,  4239 => 1654,  4226 => 1648,  4211 => 1640,  4201 => 1637,  4193 => 1636,  4190 => 1635,  4184 => 1634,  4176 => 1632,  4168 => 1630,  4165 => 1629,  4161 => 1628,  4157 => 1627,  4152 => 1626,  4147 => 1625,  4145 => 1624,  4139 => 1620,  4134 => 1618,  4130 => 1616,  4126 => 1614,  4124 => 1613,  4121 => 1612,  4119 => 1611,  4115 => 1610,  4111 => 1609,  4107 => 1608,  4103 => 1607,  4099 => 1606,  4084 => 1594,  4078 => 1590,  4072 => 1589,  4070 => 1588,  4063 => 1586,  4050 => 1580,  4035 => 1572,  4025 => 1569,  4017 => 1568,  4009 => 1567,  4006 => 1566,  4000 => 1565,  3992 => 1563,  3984 => 1561,  3981 => 1560,  3977 => 1559,  3973 => 1558,  3968 => 1557,  3963 => 1556,  3961 => 1555,  3955 => 1551,  3950 => 1549,  3946 => 1547,  3942 => 1545,  3940 => 1544,  3937 => 1543,  3935 => 1542,  3931 => 1541,  3927 => 1540,  3923 => 1539,  3919 => 1538,  3915 => 1537,  3911 => 1536,  3896 => 1524,  3890 => 1520,  3884 => 1519,  3882 => 1518,  3875 => 1516,  3872 => 1515,  3866 => 1514,  3858 => 1512,  3850 => 1510,  3847 => 1509,  3843 => 1508,  3839 => 1507,  3836 => 1506,  3830 => 1505,  3822 => 1503,  3814 => 1501,  3811 => 1500,  3807 => 1499,  3803 => 1498,  3798 => 1497,  3793 => 1496,  3791 => 1495,  3785 => 1491,  3780 => 1488,  3776 => 1486,  3772 => 1484,  3770 => 1483,  3767 => 1482,  3765 => 1481,  3760 => 1479,  3756 => 1478,  3748 => 1472,  3744 => 1470,  3736 => 1467,  3731 => 1464,  3725 => 1462,  3723 => 1461,  3714 => 1456,  3704 => 1454,  3694 => 1452,  3692 => 1451,  3678 => 1444,  3670 => 1441,  3663 => 1440,  3661 => 1439,  3658 => 1438,  3653 => 1435,  3647 => 1433,  3645 => 1432,  3636 => 1427,  3626 => 1425,  3616 => 1423,  3614 => 1422,  3600 => 1415,  3592 => 1412,  3585 => 1411,  3583 => 1410,  3580 => 1409,  3575 => 1406,  3569 => 1404,  3567 => 1403,  3558 => 1398,  3548 => 1396,  3538 => 1394,  3536 => 1393,  3522 => 1386,  3514 => 1383,  3507 => 1382,  3505 => 1381,  3502 => 1380,  3497 => 1377,  3491 => 1375,  3489 => 1374,  3481 => 1370,  3471 => 1368,  3461 => 1366,  3459 => 1365,  3449 => 1362,  3441 => 1361,  3435 => 1358,  3428 => 1357,  3426 => 1356,  3423 => 1355,  3418 => 1352,  3412 => 1350,  3410 => 1349,  3401 => 1344,  3391 => 1342,  3381 => 1340,  3379 => 1339,  3366 => 1335,  3358 => 1332,  3351 => 1331,  3349 => 1330,  3346 => 1329,  3341 => 1326,  3335 => 1324,  3333 => 1323,  3324 => 1318,  3314 => 1316,  3304 => 1314,  3302 => 1313,  3289 => 1309,  3281 => 1306,  3274 => 1305,  3272 => 1304,  3269 => 1303,  3264 => 1300,  3258 => 1298,  3256 => 1297,  3247 => 1292,  3237 => 1290,  3227 => 1288,  3225 => 1287,  3219 => 1283,  3211 => 1280,  3204 => 1278,  3202 => 1277,  3197 => 1276,  3180 => 1275,  3172 => 1273,  3164 => 1271,  3162 => 1270,  3158 => 1268,  3154 => 1267,  3150 => 1266,  3144 => 1263,  3137 => 1262,  3135 => 1261,  3132 => 1260,  3127 => 1257,  3121 => 1255,  3119 => 1254,  3110 => 1249,  3100 => 1247,  3090 => 1245,  3088 => 1244,  3082 => 1240,  3074 => 1237,  3067 => 1235,  3065 => 1234,  3060 => 1233,  3043 => 1232,  3035 => 1230,  3027 => 1228,  3025 => 1227,  3021 => 1225,  3017 => 1224,  3013 => 1223,  3007 => 1220,  3000 => 1219,  2998 => 1218,  2995 => 1217,  2990 => 1214,  2984 => 1212,  2982 => 1211,  2973 => 1206,  2963 => 1204,  2953 => 1202,  2951 => 1201,  2945 => 1197,  2939 => 1196,  2935 => 1194,  2928 => 1193,  2926 => 1192,  2919 => 1191,  2915 => 1189,  2908 => 1188,  2906 => 1187,  2899 => 1186,  2896 => 1185,  2892 => 1184,  2888 => 1183,  2882 => 1182,  2876 => 1179,  2869 => 1178,  2867 => 1177,  2863 => 1176,  2860 => 1175,  2856 => 1174,  2853 => 1173,  2844 => 1167,  2840 => 1166,  2835 => 1164,  2830 => 1162,  2826 => 1160,  2820 => 1159,  2818 => 1158,  2815 => 1157,  2810 => 1154,  2807 => 1153,  2796 => 1151,  2791 => 1150,  2789 => 1149,  2785 => 1148,  2776 => 1144,  2770 => 1140,  2764 => 1139,  2762 => 1138,  2749 => 1136,  2735 => 1135,  2730 => 1134,  2716 => 1133,  2711 => 1132,  2697 => 1131,  2692 => 1130,  2683 => 1129,  2677 => 1127,  2671 => 1125,  2669 => 1124,  2659 => 1123,  2645 => 1122,  2641 => 1121,  2636 => 1120,  2632 => 1119,  2628 => 1118,  2621 => 1114,  2617 => 1113,  2613 => 1112,  2609 => 1111,  2605 => 1110,  2601 => 1109,  2595 => 1105,  2592 => 1104,  2575 => 1096,  2567 => 1093,  2564 => 1092,  2561 => 1091,  2544 => 1083,  2536 => 1080,  2533 => 1079,  2530 => 1078,  2513 => 1070,  2505 => 1067,  2502 => 1066,  2499 => 1065,  2487 => 1062,  2481 => 1061,  2478 => 1060,  2475 => 1059,  2462 => 1055,  2455 => 1053,  2452 => 1052,  2449 => 1051,  2437 => 1048,  2431 => 1047,  2428 => 1046,  2426 => 1045,  2421 => 1042,  2416 => 1040,  2411 => 1039,  2406 => 1037,  2401 => 1036,  2399 => 1035,  2393 => 1034,  2386 => 1032,  2367 => 1030,  2361 => 1029,  2356 => 1028,  2351 => 1027,  2348 => 1026,  2346 => 1025,  2342 => 1023,  2340 => 1022,  2330 => 1015,  2324 => 1011,  2318 => 1010,  2316 => 1009,  2309 => 1007,  2306 => 1006,  2291 => 1004,  2282 => 1002,  2278 => 1000,  2274 => 999,  2261 => 997,  2256 => 996,  2251 => 995,  2249 => 994,  2243 => 990,  2238 => 987,  2234 => 985,  2230 => 983,  2228 => 982,  2225 => 981,  2223 => 980,  2218 => 978,  2214 => 977,  2201 => 967,  2198 => 966,  2191 => 961,  2187 => 959,  2183 => 957,  2181 => 956,  2176 => 953,  2174 => 952,  2170 => 950,  2158 => 946,  2153 => 945,  2149 => 944,  2142 => 940,  2137 => 938,  2130 => 934,  2127 => 933,  2120 => 928,  2116 => 926,  2112 => 924,  2110 => 923,  2105 => 920,  2103 => 919,  2099 => 917,  2087 => 913,  2082 => 912,  2078 => 911,  2071 => 907,  2066 => 905,  2060 => 901,  2053 => 896,  2049 => 894,  2045 => 892,  2043 => 891,  2038 => 888,  2036 => 887,  2033 => 886,  2026 => 884,  2021 => 882,  2016 => 881,  2011 => 879,  2006 => 878,  2004 => 877,  2001 => 876,  1997 => 875,  1990 => 871,  1983 => 867,  1980 => 866,  1973 => 861,  1969 => 859,  1965 => 857,  1963 => 856,  1958 => 853,  1956 => 852,  1952 => 850,  1940 => 846,  1935 => 845,  1931 => 844,  1924 => 840,  1919 => 838,  1912 => 834,  1909 => 833,  1902 => 828,  1898 => 826,  1894 => 824,  1892 => 823,  1887 => 820,  1885 => 819,  1880 => 816,  1868 => 812,  1863 => 811,  1859 => 810,  1851 => 805,  1846 => 803,  1839 => 799,  1836 => 798,  1829 => 793,  1825 => 791,  1821 => 789,  1819 => 788,  1814 => 785,  1812 => 784,  1804 => 783,  1798 => 780,  1789 => 773,  1782 => 768,  1778 => 766,  1774 => 764,  1772 => 763,  1767 => 760,  1765 => 759,  1759 => 758,  1753 => 755,  1747 => 751,  1740 => 746,  1736 => 744,  1732 => 742,  1730 => 741,  1725 => 738,  1723 => 737,  1720 => 736,  1715 => 734,  1710 => 733,  1705 => 731,  1700 => 730,  1698 => 729,  1691 => 725,  1685 => 721,  1678 => 716,  1674 => 714,  1670 => 712,  1668 => 711,  1663 => 708,  1661 => 707,  1658 => 706,  1652 => 705,  1644 => 703,  1636 => 701,  1633 => 700,  1629 => 699,  1622 => 695,  1616 => 691,  1609 => 686,  1605 => 684,  1601 => 682,  1599 => 681,  1594 => 678,  1592 => 677,  1586 => 676,  1580 => 673,  1574 => 669,  1567 => 664,  1563 => 662,  1559 => 660,  1557 => 659,  1552 => 656,  1550 => 655,  1547 => 654,  1541 => 653,  1533 => 651,  1525 => 649,  1522 => 648,  1518 => 647,  1511 => 643,  1505 => 639,  1498 => 634,  1494 => 632,  1490 => 630,  1488 => 629,  1483 => 626,  1481 => 625,  1474 => 624,  1467 => 619,  1463 => 617,  1459 => 615,  1457 => 614,  1452 => 611,  1450 => 610,  1443 => 609,  1436 => 604,  1432 => 602,  1428 => 600,  1426 => 599,  1421 => 596,  1419 => 595,  1413 => 594,  1407 => 591,  1401 => 587,  1395 => 583,  1391 => 581,  1387 => 579,  1385 => 578,  1381 => 576,  1379 => 575,  1376 => 574,  1371 => 572,  1366 => 571,  1361 => 569,  1356 => 568,  1354 => 567,  1347 => 563,  1342 => 561,  1335 => 556,  1328 => 551,  1324 => 549,  1320 => 547,  1318 => 546,  1313 => 543,  1311 => 542,  1302 => 538,  1296 => 535,  1289 => 531,  1286 => 530,  1279 => 525,  1275 => 523,  1271 => 521,  1269 => 520,  1264 => 517,  1262 => 516,  1259 => 515,  1253 => 514,  1245 => 512,  1237 => 510,  1234 => 509,  1230 => 508,  1223 => 504,  1217 => 500,  1211 => 496,  1207 => 494,  1203 => 492,  1201 => 491,  1197 => 489,  1195 => 488,  1192 => 487,  1187 => 485,  1182 => 484,  1177 => 482,  1172 => 481,  1170 => 480,  1163 => 476,  1156 => 472,  1153 => 471,  1146 => 466,  1142 => 464,  1138 => 462,  1136 => 461,  1131 => 458,  1129 => 457,  1123 => 456,  1117 => 453,  1108 => 449,  1103 => 447,  1098 => 445,  1091 => 440,  1084 => 435,  1080 => 433,  1076 => 431,  1074 => 430,  1069 => 427,  1067 => 426,  1064 => 425,  1058 => 424,  1050 => 422,  1042 => 420,  1039 => 419,  1035 => 418,  1031 => 417,  1024 => 413,  1018 => 409,  1011 => 404,  1007 => 402,  1003 => 400,  1001 => 399,  996 => 396,  994 => 395,  988 => 394,  982 => 391,  977 => 389,  970 => 384,  963 => 379,  959 => 377,  955 => 375,  953 => 374,  948 => 371,  946 => 370,  940 => 369,  934 => 366,  927 => 362,  924 => 361,  917 => 356,  913 => 354,  909 => 352,  907 => 351,  902 => 348,  900 => 347,  894 => 346,  888 => 343,  881 => 339,  878 => 338,  871 => 333,  867 => 331,  863 => 329,  861 => 328,  856 => 325,  854 => 324,  848 => 323,  842 => 320,  835 => 316,  832 => 315,  825 => 310,  821 => 308,  817 => 306,  815 => 305,  810 => 302,  808 => 301,  802 => 300,  796 => 297,  789 => 293,  786 => 292,  779 => 287,  775 => 285,  771 => 283,  769 => 282,  764 => 279,  762 => 278,  756 => 277,  750 => 274,  743 => 270,  740 => 269,  733 => 264,  729 => 262,  725 => 260,  723 => 259,  718 => 256,  716 => 255,  710 => 254,  704 => 251,  697 => 247,  694 => 246,  687 => 241,  683 => 239,  679 => 237,  677 => 236,  672 => 233,  670 => 232,  664 => 231,  658 => 228,  653 => 225,  647 => 223,  645 => 222,  642 => 221,  635 => 216,  631 => 214,  627 => 212,  625 => 211,  620 => 208,  618 => 207,  612 => 206,  606 => 203,  601 => 201,  596 => 199,  591 => 196,  580 => 191,  577 => 190,  568 => 185,  558 => 183,  548 => 181,  546 => 180,  541 => 177,  539 => 176,  529 => 175,  521 => 172,  515 => 168,  506 => 163,  496 => 161,  486 => 159,  484 => 158,  479 => 155,  477 => 154,  467 => 153,  459 => 150,  453 => 146,  444 => 141,  434 => 139,  424 => 137,  422 => 136,  417 => 133,  415 => 132,  405 => 131,  397 => 128,  392 => 125,  386 => 123,  384 => 122,  381 => 121,  372 => 116,  362 => 114,  352 => 112,  350 => 111,  345 => 108,  343 => 107,  333 => 106,  325 => 103,  319 => 99,  310 => 94,  300 => 92,  290 => 90,  288 => 89,  283 => 86,  281 => 85,  268 => 83,  259 => 79,  254 => 76,  248 => 74,  246 => 73,  243 => 72,  234 => 67,  224 => 65,  214 => 63,  212 => 62,  207 => 59,  205 => 58,  195 => 57,  187 => 54,  181 => 52,  177 => 51,  173 => 49,  156 => 47,  152 => 46,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 28,  90 => 26,  88 => 25,  83 => 23,  80 => 22,  72 => 18,  70 => 17,  64 => 13,  53 => 11,  49 => 10,  44 => 8,  38 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/product_form.twig", "");
    }
}
