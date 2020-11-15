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

/* OPC100240_5/template/extension/module/latest.twig */
class __TwigTemplate_e13830fa6e55cd62d2e1711eef3065dfc3fae7e1789afc5a7872192923939bff extends \Twig\Template
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
        echo "<div class=\"box\">
\t<div class=\"container\">
\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"product-column\">
  <div class=\"box-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 5;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 9
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 10
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 15
        echo "\t
\t<div class=\"box-product ";
        // line 16
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "product-carousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "latest-carousel";
        } else {
            echo " latest-grid";
        }
        echo "\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image_cover\"> 
\t\t\t<div class=\"image ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 22) == 0)) {
                echo "outstock";
            }
            echo "\">
\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\"/></div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 32
            echo "\t\t\t</div>
\t\t\t<div class=\"product_hover_block\">
\t\t\t\t<div class=\"action\">
\t\t\t\t   <div class=\"quickview-button\">
\t\t\t\t   <a class=\"quickbox\"  title=\"";
            // line 36
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 36);
            echo "\"></a>
\t\t\t\t   </div>
\t\t\t\t   <button class=\"wishlist\" type=\"button\"  title=\"";
            // line 38
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo " ');\"></button>
\t\t\t\t   <!--- <button class=\"compare_button\" type=\"button\"  title=\"";
            // line 39
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo " ');\"></button> --->
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"product_hover_block_cart\">
\t\t\t\t<div class=\"action\">
\t\t\t\t\t";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 44) > 0)) {
                // line 45
                echo "<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t  ";
            } else {
                // line 46
                echo " 
\t\t\t\t\t  <span class=\"stock_status\" title=\"";
                // line 47
                echo ($context["text_outstock"] ?? null);
                echo "\">";
                echo ($context["text_outstock"] ?? null);
                echo "</i></span>
\t\t\t\t\t ";
            }
            // line 49
            echo "\t\t\t\t  </div>
\t\t\t</div>
\t\t</div>
      \t<div class=\"product-details\">
\t\t\t  ";
            // line 54
            echo "\t\t\t  <div class=\"rating\">
\t\t\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56) < $context["i"])) {
                    // line 57
                    echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t ";
                } else {
                    // line 59
                    echo "\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t ";
                }
                // line 61
                echo "\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t  </div>
\t  ";
            // line 64
            echo "\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo " </a></h4>
\t\t\t\t";
            // line 67
            echo "\t\t\t
\t\t\t\t";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68)) {
                // line 69
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 70
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
                    echo "
         \t\t\t";
                } else {
                    // line 73
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73);
                    echo "</span>
\t\t\t        ";
                }
                // line 75
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 76);
                    echo "</span>
          \t\t\t";
                }
                // line 78
                echo "\t\t\t        </p>
\t            ";
            }
            // line 80
            echo "\t\t\t</div>\t\t
 \t    
\t\t\t
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "</div>
</div>
  </div>
\t\t</div>
\t</div>
</div>
<span class=\"latest_default_width\" style=\"display:none; visibility:hidden\"></span>
";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 89,  273 => 80,  269 => 78,  261 => 76,  258 => 75,  250 => 73,  244 => 71,  242 => 70,  239 => 69,  237 => 68,  234 => 67,  228 => 65,  225 => 64,  222 => 62,  216 => 61,  212 => 59,  208 => 57,  205 => 56,  201 => 55,  198 => 54,  192 => 49,  185 => 47,  182 => 46,  172 => 45,  170 => 44,  160 => 39,  154 => 38,  147 => 36,  141 => 32,  132 => 30,  127 => 29,  117 => 26,  109 => 25,  104 => 24,  102 => 23,  96 => 22,  84 => 18,  80 => 17,  66 => 16,  63 => 15,  56 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/extension/module/latest.twig", "");
    }
}
