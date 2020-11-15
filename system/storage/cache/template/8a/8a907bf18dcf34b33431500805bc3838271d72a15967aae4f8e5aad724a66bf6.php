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

/* OPC100240_5/template/information/blogger_blogs.twig */
class __TwigTemplate_89c301522f296095087f73275faee6a24e00add1294d80229e051016ebd436cc extends \Twig\Template
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
        echo "   
    <div id=\"content\" class=\"";
        // line 18
        echo ($context["class"] ?? null);
        echo "  all-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
     <h1>";
        // line 19
        echo ($context["text_blogs"] ?? null);
        echo "</h1>
      ";
        // line 20
        if (($context["blogs"] ?? null)) {
            echo " 
      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
      <div class=\"panel-default\" >
       ";
                // line 24
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 24)) {
                    echo " 
        ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
      
       ";
                        // line 29
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 29)) {
                            echo " 
       <div class=\"blog-left-content\">
      <div class=\"blog-image\">
        <img src=\"";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 32);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-thumbnail\" />
        </div>
      </div>
      ";
                        }
                        // line 35
                        echo " 
      <div class=\"blog-right-content\">
            <h5><a href=\"";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 37);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 37);
                        echo "</a></h5>
             <div class=\"blog-date\"><i class=\"fa fa-calendar\"></i>&nbsp;";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 38);
                        echo "</div>
             <div class=\"write-comment\"> <a href=\"";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 39);
                        echo "\"><i class=\"fa fa-comments\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "total_comments", [], "any", false, false, false, 39);
                        echo "  ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</a> </div>
            <div class=\"blog-desc\">";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 40);
                        echo "  </div>
      <div class=\"read-more\"> <a href=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 41);
                        echo "\">  ";
                        echo ($context["text_read_more"] ?? null);
                        echo "</a> </div>
           
            </div>
          </div>
        </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "        
         ";
                } else {
                    // line 48
                    echo "   
        <div class=\"panel-body text-center\">";
                    // line 49
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
        ";
                }
                // line 50
                echo " 
        </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "       ";
        } else {
            echo "   
      <div class=\"panel-body text-center\">";
            // line 54
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
               ";
        }
        // line 55
        echo " 
    ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 57
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 59,  220 => 57,  216 => 56,  213 => 55,  208 => 54,  203 => 53,  195 => 50,  190 => 49,  187 => 48,  183 => 47,  169 => 41,  165 => 40,  157 => 39,  153 => 38,  147 => 37,  143 => 35,  132 => 32,  126 => 29,  117 => 25,  112 => 24,  105 => 21,  101 => 20,  97 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/information/blogger_blogs.twig", "");
    }
}
