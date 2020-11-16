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

/* extension/payment/SSLCommerce.twig */
class __TwigTemplate_934591662e93a6535535a9b867cd2bf708511c7f1ed606f449e90ed60bade7c3 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
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
    <div class=\"container-fluid\">
    ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 28
        echo ($context["enter_store_id"] ?? null);
        echo "\">";
        echo ($context["enter_store_id"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_SSLCommerce_merchant\" value=\"";
        // line 30
        echo ($context["payment_SSLCommerce_merchant"] ?? null);
        echo "\" />
              ";
        // line 31
        if (($context["error_merchant"] ?? null)) {
            // line 32
            echo "              <span class=\"error\">";
            echo ($context["error_merchant"] ?? null);
            echo "</span>
              ";
        }
        // line 34
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 37
        echo ($context["entry_store_password"] ?? null);
        echo "\">";
        echo ($context["entry_store_password"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_SSLCommerce_password\" value=\"";
        // line 39
        echo ($context["payment_SSLCommerce_password"] ?? null);
        echo "\" />
            </div>
          </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\">";
        // line 43
        echo ($context["entry_test"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_test\" class=\"form-control\">
                ";
        // line 46
        if ((($context["payment_SSLCommerce_test"] ?? null) == "live")) {
            // line 47
            echo "                <option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t\t
                ";
        } else {
            // line 50
            echo "                <option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
               ";
        }
        // line 52
        echo "               ";
        if ((($context["payment_SSLCommerce_test"] ?? null) == "successful")) {
            // line 53
            echo "                <option value=\"successful\" selected=\"selected\">";
            echo ($context["text_successful"] ?? null);
            echo "</option>
                ";
        } else {
            // line 55
            echo "                <option value=\"successful\">";
            echo ($context["text_successful"] ?? null);
            echo "</option>
                ";
        }
        // line 57
        echo "              
              </select>
            </div>
          </div>
            
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\">";
        // line 63
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_order_status_id\" class=\"form-control\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 67
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 67) == ($context["payment_SSLCommerce_order_status_id"] ?? null))) {
                // line 68
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 68);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 68);
                echo "</option>
\t\t\t\t
               ";
            } else {
                // line 71
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 71);
                echo "</option>
               ";
            }
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "              </select>
            </div>
          </div>
            
            
            
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 81
        echo ($context["entry_order_fail_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_order_fail_id\" class=\"form-control\">
               ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 85
            echo "                 ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 85) == ($context["payment_SSLCommerce_order_fail_id"] ?? null))) {
                // line 86
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 86);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 86);
                echo "</option>
                 ";
            } else {
                // line 88
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 88);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 88);
                echo "</option>
                 ";
            }
            // line 90
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </select>
            </div>
          </div>
          
           <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 96
        echo ($context["entry_order_risk_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_order_risk_id\" class=\"form-control\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 100
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 100) == ($context["payment_SSLCommerce_order_risk_id"] ?? null))) {
                // line 101
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 101);
                echo " \" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 101);
                echo "</option>
                ";
            } else {
                // line 103
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 103);
                echo " </option>
                 ";
            }
            // line 105
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "              </select>
            </div>
          </div>
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 112
        echo ($context["entry_geo_zone"] ?? null);
        echo " </label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_geo_zone_id\" class=\"form-control\">
                <option value=\"0\">";
        // line 115
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
               ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 117
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 117) == ($context["payment_SSLCommerce_geo_zone_id"] ?? null))) {
                // line 118
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 118);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 118);
                echo "</option>
                ";
            } else {
                // line 120
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 120);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 120);
                echo "</option>
               ";
            }
            // line 122
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 127
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_SSLCommerce_status\" class=\"form-control\">
                ";
        // line 130
        if (($context["payment_SSLCommerce_status"] ?? null)) {
            // line 131
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 132
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 134
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 135
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                 ";
        }
        // line 137
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 141
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_SSLCommerce_sort_order\" value=\"";
        // line 143
        echo ($context["payment_SSLCommerce_sort_order"] ?? null);
        echo "\" size=\"1\" />
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"ipn-url\">";
        // line 148
        echo ($context["ipn_url"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
            <label class=\"col-sm-10 control-label\" for=\"ipn-url\">";
        // line 150
        echo ($context["payment_SSLCommerce_ipn_url"] ?? null);
        echo "</label>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 159
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/payment/SSLCommerce.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 159,  412 => 150,  407 => 148,  399 => 143,  394 => 141,  388 => 137,  383 => 135,  378 => 134,  373 => 132,  368 => 131,  366 => 130,  360 => 127,  354 => 123,  348 => 122,  340 => 120,  332 => 118,  329 => 117,  325 => 116,  321 => 115,  315 => 112,  307 => 106,  301 => 105,  293 => 103,  285 => 101,  282 => 100,  278 => 99,  272 => 96,  265 => 91,  259 => 90,  251 => 88,  243 => 86,  240 => 85,  236 => 84,  230 => 81,  221 => 74,  215 => 73,  207 => 71,  198 => 68,  195 => 67,  191 => 66,  185 => 63,  177 => 57,  171 => 55,  165 => 53,  162 => 52,  156 => 50,  149 => 47,  147 => 46,  141 => 43,  134 => 39,  127 => 37,  122 => 34,  116 => 32,  114 => 31,  110 => 30,  103 => 28,  98 => 26,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/SSLCommerce.twig", "");
    }
}
