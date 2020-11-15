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

/* extension/module/blogger/list.twig */
class __TwigTemplate_4f101e26facd1ac12bb9b694cffa0dc564ccb9c3dea9b44590ac2cdcd77672a9 extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        ";
        // line 6
        if (($context["return"] ?? null)) {
            echo " 
        <a href=\"";
            // line 7
            echo ($context["return"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        ";
        }
        // line 8
        echo " 
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo " ') ? \$('#form-blogger').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
       <li><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  
         
      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
     ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo " 

 ";
        // line 29
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 30
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 33
        echo " 
    
     <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 37
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 40
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 46
        if ((($context["sort"] ?? null) == "b.title")) {
            echo " 
                    <a href=\"";
            // line 47
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                     ";
        } else {
            // line 48
            echo "   
                    <a href=\"";
            // line 49
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                    ";
        }
        // line 50
        echo " </td>
                  <td class=\"text-left\">";
        // line 51
        if ((($context["sort"] ?? null) == "b.module_id")) {
            echo " 
                    <a href=\"";
            // line 52
            echo ($context["sort_module"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_module"] ?? null);
            echo "</a>
                     ";
        } else {
            // line 53
            echo "   
                    <a href=\"";
            // line 54
            echo ($context["sort_module"] ?? null);
            echo "\">";
            echo ($context["column_module"] ?? null);
            echo "</a>
                    ";
        }
        // line 55
        echo " </td>
                  <td class=\"text-left\">";
        // line 56
        echo ($context["column_status"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 57
        echo ($context["column_comments"] ?? null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 58
        if ((($context["sort"] ?? null) == "b.date_added")) {
            echo " 
                    <a href=\"";
            // line 59
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                     ";
        } else {
            // line 60
            echo "   
                    <a href=\"";
            // line 61
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 62
        echo " </td>
                  <td class=\"text-right\">";
        // line 63
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 67
        if (($context["bloggers"] ?? null)) {
            echo " 
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bloggers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "selected", [], "any", false, false, false, 70)) {
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blogger_id", [], "any", false, false, false, 71);
                    echo "\" checked=\"checked\" />
                     ";
                } else {
                    // line 72
                    echo "   
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blogger_id", [], "any", false, false, false, 73);
                    echo "\" />
                    ";
                }
                // line 74
                echo " </td>
                  <td class=\"text-left\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 75);
                echo "</td>
                  <td class=\"text-left\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "module", [], "any", false, false, false, 76);
                echo "</td>
                  <td class=\"text-left\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "status", [], "any", false, false, false, 77);
                echo "</td>
                  <td class=\"text-right\">";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 78);
                echo "</td>
                  <td class=\"text-right\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 79);
                echo "</td>
                  <td class=\"text-right\">
                      <a href=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "comments", [], "any", false, false, false, 81);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                      <a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "edit", [], "any", false, false, false, 82);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo " 
                 ";
        } else {
            // line 86
            echo "   
                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 88
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                   ";
        }
        // line 90
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 96
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 97
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/blogger/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 103,  340 => 97,  336 => 96,  328 => 90,  322 => 88,  318 => 86,  314 => 85,  302 => 82,  296 => 81,  291 => 79,  287 => 78,  283 => 77,  279 => 76,  275 => 75,  272 => 74,  267 => 73,  264 => 72,  259 => 71,  255 => 70,  248 => 68,  244 => 67,  237 => 63,  234 => 62,  227 => 61,  224 => 60,  215 => 59,  211 => 58,  207 => 57,  203 => 56,  200 => 55,  193 => 54,  190 => 53,  181 => 52,  177 => 51,  174 => 50,  167 => 49,  164 => 48,  155 => 47,  151 => 46,  142 => 40,  136 => 37,  130 => 33,  123 => 30,  119 => 29,  115 => 27,  108 => 24,  104 => 23,  95 => 16,  85 => 15,  79 => 14,  74 => 12,  67 => 10,  61 => 9,  58 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger/list.twig", "");
    }
}
