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

/* extension/module/supercarousel.twig */
class __TwigTemplate_d030c9fb2b23c6596cdb0f7ae96b04a7a33addf0897b39fa5c060e91483bd8b4 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input_hits\">";
        // line 38
        echo ($context["entry_hits"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"hits\" id=\"input_hits\" class=\"form-control\">
                ";
        // line 41
        if (($context["hits"] ?? null)) {
            // line 42
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 45
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 48
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input_sales\">";
        // line 52
        echo ($context["entry_sales"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"sales\" id=\"input_sales\" class=\"form-control\">
                ";
        // line 55
        if (($context["sales"] ?? null)) {
            // line 56
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 60
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 62
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input_new_products\">";
        // line 66
        echo ($context["entry_new_products"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"new_products\" id=\"input_new_products\" class=\"form-control\">
                ";
        // line 69
        if (($context["new_products"] ?? null)) {
            // line 70
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 71
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 73
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 74
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 76
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input_liquidation\">";
        // line 81
        echo ($context["entry_liquidation"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"liquidation\" id=\"input_liquidation\" class=\"form-control\">
                ";
        // line 84
        if (($context["liquidation"] ?? null)) {
            // line 85
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 86
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 88
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 89
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 91
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 96
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 99
        if (($context["status"] ?? null)) {
            // line 100
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 101
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 103
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 104
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 106
        echo "              </select>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 116
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/supercarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 116,  297 => 106,  292 => 104,  287 => 103,  282 => 101,  277 => 100,  275 => 99,  269 => 96,  262 => 91,  257 => 89,  252 => 88,  247 => 86,  242 => 85,  240 => 84,  234 => 81,  227 => 76,  222 => 74,  217 => 73,  212 => 71,  207 => 70,  205 => 69,  199 => 66,  193 => 62,  188 => 60,  183 => 59,  178 => 57,  173 => 56,  171 => 55,  165 => 52,  159 => 48,  154 => 46,  149 => 45,  144 => 43,  139 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/supercarousel.twig", "");
    }
}
