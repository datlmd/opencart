<?php

/* default/template/common/column_left.twig */
class __TwigTemplate_2c22f06e51d6441d2057b5f133ad5c5c9a9d82c1655edbfabecaeed2590e8226 extends Twig_Template
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
        if (($context["modules"] ?? null)) {
            // line 2
            echo "<aside id=\"column-left\" class=\"col-3 d-none d-md-block\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/common/column_left.twig", "");
    }
}
