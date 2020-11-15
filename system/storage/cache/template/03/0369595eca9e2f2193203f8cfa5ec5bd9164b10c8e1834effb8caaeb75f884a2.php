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

/* OPC100240_5/template/extension/module/blogger.twig */
class __TwigTemplate_1137e2c652770c939e92f7577d32f50ef0ed931ed9df49fb68b6528b4e072cf5 extends \Twig\Template
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
        echo "<div class=\"blog-mainhead\">
<div class=\"container\">
<div class=\"row\">
<div class=\"box megnorblog\">
\t";
        // line 5
        $context["sliderFor"] = 1;
        // line 6
        echo "\t";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 7
        echo "\t
 <div class=\"box-heading\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"box-content\">
    <div class=\"box-product ";
        // line 10
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo " owl-carousel blogcarousel ";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo "blog-grid";
        }
        echo "\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
    <div class=\"";
            // line 12
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t<div class=\"product-block\">
     ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14)) {
                echo " 
\t  <div class=\"blog-left\">
\t  <div class=\"blog-image\">
\t  <img src=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 18);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a></p>
\t  </div>
\t  </div>
\t ";
            }
            // line 21
            echo " \t
\t <div class=\"blog-right\">  
\t   <div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 23);
            echo "</div>
\t  \t<div class=\"write-comment\"> <a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 24);
            echo "\"><i class=\"fa fa-comments\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 24);
            echo "  ";
            echo ($context["entry_comment"] ?? null);
            echo "</a> </div>
\t  \t <h4><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 25);
            echo "</a> </h4>
      <div class=\"blog-desc\"> ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 26);
            echo "  </div> 
      <div class=\"read-more\"> <a href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a> </div>
\t </div> 
    </div>
\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " \t 
   
  </div>
  ";
        // line 37
        echo "  </div>
 
</div>
<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>
</div>
</div>
</div>
<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\$('.blogcarousel').owlCarousel({
\t\titems: 3,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,
\t\tnavigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
\t\tpagination: true,
\t\titemsDesktop : [980,3],
\t\titemsDesktopSmall:[979,2],
\t\titemsTablet :\t[479,1]
\t});
});\t
--></script>";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 37,  145 => 31,  132 => 27,  128 => 26,  122 => 25,  114 => 24,  110 => 23,  106 => 21,  99 => 18,  91 => 17,  85 => 14,  76 => 12,  70 => 11,  56 => 10,  51 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/extension/module/blogger.twig", "");
    }
}
