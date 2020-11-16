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

/* OPC100240_5/template/common/header.twig */
class __TwigTemplate_6f5f5bbfab6beeb6391123859909c1fbee78b31de95974fe0cd892d21428ff28 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.js\"></script>
<script src=\"catalog/view/javascript/myscript.js\"></script>

<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" /> 
<link href=\"catalog/view/theme/";
        // line 28
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\" rel=\"stylesheet\"> 
<link href=\"https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,300&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/megnor/lightbox.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 33
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/megnor/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 34
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/megnor/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 35
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/megnor/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 36
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/megnor/animate.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.transitions.css\" />
";
        // line 39
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 40
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo ($context["mytemplate"] ?? null);
            echo "/stylesheet/megnor/rtl.css\">
";
        }
        // line 42
        echo "
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 44
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 44);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 44);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 44);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 47
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 50
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 50);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 50);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 53
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "<!-- Megnor www.templatemela.com - Start -->
<script src=\"catalog/view/javascript/megnor/custom.js\"></script>
<script src=\"catalog/view/javascript/megnor/jstree.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/carousel.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/megnor.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/jquery.custom.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/jquery.formalize.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/jquery.elevatezoom.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/bootstrap-notify.min.js\"></script>  
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/megnor/tabs.js\"></script>
<script src=\"catalog/view/javascript/megnor/jquery.hoverdir.js\"></script>
<script src=\"catalog/view/javascript/megnor/modernizr.js\"></script>
<script src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>


<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
    \$('.quickview-button').magnificPopup({
      type:'iframe',
      delegate: 'a',
      preloader: true,
      tLoading: 'Loading image #%curr%...',
    });
 }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>

<!-- Megnor www.templatemela.com - End -->

<script src=\"catalog/view/javascript/common.js\"></script>

</head>

";
        // line 95
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 96
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 97
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 98
            if (($context["column_left"] ?? null)) {
                // line 99
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 100
($context["column_right"] ?? null)) {
                // line 101
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 104
            $context["layoutclass"] = "layout-1";
        }
        // line 106
        echo "
<body class=\"";
        // line 107
        echo ($context["class"] ?? null);
        echo " ";
        echo " ";
        echo " ";
        echo ($context["layoutclass"] ?? null);
        echo "\">
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"row\">
   
   <div class=\"lang-curr-wrapper\">
          ";
        // line 113
        echo ($context["language"] ?? null);
        echo "
          ";
        // line 114
        echo ($context["currency"] ?? null);
        echo "
          </div>
          ";
        // line 116
        echo ($context["headertopleft"] ?? null);
        echo "
  </div>
  </div>
</nav>
<header>
<div class=\"header_top\">
  <div class=\"container\">
\t<div class=\"row\">
    <!-- <div class=\"col-sm-5 header_search\">";
        // line 124
        echo ($context["search"] ?? null);
        echo "</div> -->
    
    <div class=\"col-sm-4 header-logo\">
      <div id=\"logo\">";
        // line 127
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 128
            echo "        <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 129
        echo "</div>
    </div>  
    <div class=\"account\">     
      <div class=\"dropdown myaccount\"><a href=\"";
        // line 132
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
      \t<ul>
      \t\t";
        // line 134
        if (($context["logged"] ?? null)) {
            // line 135
            echo "      \t\t";
            // line 136
            echo "      \t\t<span>";
            echo ($context["text_account"] ?? null);
            echo " <i class=\"fa fa-angle-down\"></i></span>
      \t";
        } else {
            // line 138
            echo "      \t\t";
            // line 139
            echo "      \t\t<span>";
            echo ($context["text_account"] ?? null);
            echo " <i class=\"fa fa-angle-down\"></i></span>
      \t";
        }
        // line 141
        echo "      \t</ul>
      </a>
          <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
            <span class=\"drop_account\">
        <div class=\"login_acc\">
         ";
        // line 146
        if (($context["logged"] ?? null)) {
            // line 147
            echo "          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 148
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
          <li><a class=\"account_logout1\" href=\"";
            // line 149
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
          ";
        } else {
            // line 151
            echo "          \t<li><a class=\"login\" href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
          <li><a class=\"reg\" href=\"";
            // line 152
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 153
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
        ";
        }
        // line 155
        echo "        </div>
          
          </span>      
         </ul>
        </div>
        <!--- <div class=\"header_compare\"><a href=\"";
        // line 160
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total-home\">";
        echo "</span></a></div> --->
      <div class=\"header_wishlist\"><a href=\"";
        // line 161
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\"><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
   </a></div>
      <div class=\"col-sm-3 header_cart\">";
        // line 163
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
    </div>
  </div>
</div>
<div class=\"header_bottom_cover\">
<div class=\"header_bottom\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<div class=\"header_center\">
\t\t\t";
        // line 173
        echo ($context["menu"] ?? null);
        echo "
\t\t</div>
     <div class=\"contact-no\"><span class=\"tel-icon\"></span><a href=\"";
        // line 175
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a></div>\t\t\t
\t</div> 
    </div>
  </div>
</div>
</header>
<div class=\"content-top-breadcum\">
<div class=\"container\">
<div class=\"row\">
<div id=\"title-content\"> 
</div>
</div>
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 175,  436 => 173,  423 => 163,  416 => 161,  411 => 160,  404 => 155,  395 => 153,  389 => 152,  382 => 151,  375 => 149,  367 => 148,  358 => 147,  356 => 146,  349 => 141,  343 => 139,  341 => 138,  335 => 136,  333 => 135,  331 => 134,  324 => 132,  319 => 129,  311 => 128,  299 => 127,  293 => 124,  282 => 116,  277 => 114,  273 => 113,  260 => 107,  257 => 106,  254 => 104,  250 => 101,  248 => 100,  246 => 99,  244 => 98,  242 => 97,  240 => 96,  238 => 95,  196 => 55,  188 => 53,  184 => 52,  173 => 50,  169 => 49,  160 => 47,  156 => 46,  143 => 44,  139 => 43,  136 => 42,  130 => 40,  128 => 39,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  99 => 28,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/common/header.twig", "");
    }
}
