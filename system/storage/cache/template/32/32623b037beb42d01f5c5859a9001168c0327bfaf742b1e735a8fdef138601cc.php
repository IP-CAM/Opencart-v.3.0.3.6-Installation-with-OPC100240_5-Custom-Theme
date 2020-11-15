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

/* OPC100240_5/template/information/blogger.twig */
class __TwigTemplate_a35ba66f777b638f8b336cebed3768ef936dcac1454ed05df6e254d19c6ef648 extends \Twig\Template
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
        echo " 
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
   <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  
     
  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "     <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "  single-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["blogs"] ?? null), "image", [], "any", false, false, false, 19)) {
            echo " 
        <div class=\"blog-img\">
          <img src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["blogs"] ?? null), "image", [], "any", false, false, false, 21);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-thumbnail\" />
        </div>
    ";
        }
        // line 23
        echo " 
    
    <div class=\"blog-desc\"> ";
        // line 25
        echo ($context["description"] ?? null);
        echo "  </div>

    
 ";
        // line 28
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 29
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 32
        echo " 

      
      ";
        // line 35
        if (($context["blog_comments"] ?? null)) {
            echo " 
      <h4>";
            // line 36
            echo ($context["text_your_comments"] ?? null);
            echo "</h4>
      ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_comment"]) {
                echo " 
      <div class=\"view-comment\">
    <div class=\"panel panel-default\" style=\"margin-bottom: 10px;\">
        <div class=\"row\">          
            <div class=\"col-sm-3\">
              <div class=\"user_icon\"><i class=\"fa fa-user\"></i></div>
              <div class=\"name\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "author", [], "any", false, false, false, 43);
                echo "</div>
              <div class=\"date\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "date_added", [], "any", false, false, false, 44);
                echo "</div>
            </div>
           <!-- <div class=\"col-sm-3\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "author", [], "any", false, false, false, 46);
                echo "</div>
            <label class=\"col-sm-3 control-label text-right\"><b>";
                // line 47
                echo ($context["text_date_added"] ?? null);
                echo "</b></label>
            <div class=\"col-sm-3\"></div>-->
         
        </div>
        <div class=\"row\">
          <div class=\"form-group\">
             <div class=\"col-sm-8\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "comment", [], "any", false, false, false, 53);
                echo "</div>
          </div>
        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " 
      ";
        }
        // line 59
        echo " 
       
      ";
        // line 61
        if (($context["allow_comments"] ?? null)) {
            echo " 
    <div class=\"block-title\"><h3>";
            // line 62
            echo ($context["button_comment_add"] ?? null);
            echo "</h3></div>
      <div class=\"panel panel-default\" id=\"add-comment\" style=\"margin-bottom: 10px;\">

        ";
            // line 65
            if ((($context["login_required"] ?? null) &&  !($context["is_logged"] ?? null))) {
                echo " 
            <h4 class=\"text-center\">";
                // line 66
                echo ($context["text_login_required"] ?? null);
                echo "</h4>
         ";
            } else {
                // line 67
                echo "   
        <form action=\"";
                // line 68
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <div class=\"form-group required\" style=\"margin-top: 10px;\">
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"author\" value=\"";
                // line 71
                echo ($context["author"] ?? null);
                echo "\" id=\"input-author\" placeholder=\"";
                echo ($context["entry_author"] ?? null);
                echo "\" class=\"form-control\" />
              ";
                // line 72
                if (($context["error_author"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 73
                    echo ($context["error_author"] ?? null);
                    echo "</div>
              ";
                }
                // line 74
                echo " 
            </div>
          </div>
          <div class=\"form-group required\" style=\"margin-top: 10px;\">
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"email\" value=\"";
                // line 79
                echo ($context["email"] ?? null);
                echo "\" id=\"input-email\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" class=\"form-control\" />
              ";
                // line 80
                if (($context["error_email"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 81
                    echo ($context["error_email"] ?? null);
                    echo "</div>
              ";
                }
                // line 82
                echo " 
            </div>
          </div>
          <div class=\"form-group\" style=\"margin-top: 10px;\">
            <div class=\"col-sm-8\">
              <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" placeholder=\"";
                // line 87
                echo ($context["entry_comment"] ?? null);
                echo "\" class=\"form-control\" />";
                echo ($context["comment"] ?? null);
                echo "</textarea>
              ";
                // line 88
                if (($context["error_comment"] ?? null)) {
                    echo " 
              <div class=\"text-danger\">";
                    // line 89
                    echo ($context["error_comment"] ?? null);
                    echo "</div>
              ";
                }
                // line 90
                echo " 
            </div>
          </div>
          ";
                // line 93
                echo ($context["captcha"] ?? null);
                echo " 
          <input type=\"hidden\" name=\"auto_approve\" value=\"";
                // line 94
                echo ($context["auto_approve"] ?? null);
                echo "\" />
          <div class=\"buttons text-right\"><input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 95
                echo ($context["button_submit"] ?? null);
                echo "\"  title=\"";
                echo ($context["button_submit"] ?? null);
                echo "\" /></div>
        </form>
          ";
            }
            // line 97
            echo " 
      </div>

       
       </div>
        ";
        }
        // line 102
        echo " 
    ";
        // line 103
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 104
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 106
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/information/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 106,  324 => 104,  320 => 103,  317 => 102,  309 => 97,  301 => 95,  297 => 94,  293 => 93,  288 => 90,  283 => 89,  279 => 88,  273 => 87,  266 => 82,  261 => 81,  257 => 80,  251 => 79,  244 => 74,  239 => 73,  235 => 72,  229 => 71,  223 => 68,  220 => 67,  215 => 66,  211 => 65,  205 => 62,  201 => 61,  197 => 59,  193 => 58,  181 => 53,  172 => 47,  168 => 46,  163 => 44,  159 => 43,  148 => 37,  144 => 36,  140 => 35,  135 => 32,  128 => 29,  124 => 28,  118 => 25,  114 => 23,  104 => 21,  99 => 19,  95 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/information/blogger.twig", "");
    }
}
