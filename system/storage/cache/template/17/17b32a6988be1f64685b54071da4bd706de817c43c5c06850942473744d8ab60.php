<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/supercarousel.twig */
class __TwigTemplate_86102f901630b64b197af9c465e0595dcda65e0080d578c4ae4079b6c187d051 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div class=\"carousel swiper-viewport\">
  <div id=\"carousel";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  \t<div class=\"swiper-slide text-center\">
\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t<div class=\"image\"><a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" class=\"img-responsive\" /></a></div>
\t\t\t<div class=\"caption\">
\t\t\t\t<h4><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "</a></h4>
\t\t\t\t<p>";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 12);
            echo "</p>
\t\t\t\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 16
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                        // line 17
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t<p class=\"price\">
\t\t\t\t";
                // line 26
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27);
                    echo "
\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    echo "</span>
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32);
                    echo "</span>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t</p>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</div>
\t\t\t<div class=\"button-group\">
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 39
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 40
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </div>
  <div class=\"swiper-pagination carousel";
        // line 47
        echo ($context["super_module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 54
        echo ($context["super_module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: '.carousel";
        // line 57
        echo ($context["super_module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.carousel .swiper-button-next',
    prevButton: '.carousel .swiper-button-prev',
\tautoplay: 2500,
\tloop: true
});
--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/supercarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  186 => 54,  176 => 47,  173 => 46,  159 => 40,  153 => 39,  147 => 38,  143 => 36,  139 => 34,  131 => 32,  128 => 31,  120 => 29,  114 => 27,  112 => 26,  109 => 25,  106 => 24,  102 => 22,  96 => 21,  92 => 19,  88 => 17,  85 => 16,  81 => 15,  78 => 14,  76 => 13,  72 => 12,  66 => 11,  55 => 9,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/supercarousel.twig", "");
    }
}
