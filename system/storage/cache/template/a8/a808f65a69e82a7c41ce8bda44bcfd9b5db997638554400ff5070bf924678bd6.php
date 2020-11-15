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

/* OPC100240_5/template/extension/module/megnortabs.twig */
class __TwigTemplate_7dc1c22bfb0b8d95634e6745ec7b8c6a52ecc626b41ed2e24bd72be2b7a6bd62 extends \Twig\Template
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
        echo "<div class=\"hometab box\">
<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"tab-head\">
\t<div class=\"hometab-heading box-heading\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
<div id=\"tabs\" class=\"htabs\">
  <ul class='etabs'>
\t<li class='tab'>
\t\t";
        // line 9
        if (($context["latestproducts"] ?? null)) {
            // line 10
            echo "\t\t\t<a href=\"#tab-latest\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a>
\t\t";
        }
        // line 12
        echo "\t</li>
\t<li class='tab middle'>
\t\t";
        // line 14
        if (($context["bestsellersproducts"] ?? null)) {
            // line 15
            echo "\t\t<a href=\"#tab-bestseller\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a>
\t\t";
        }
        // line 17
        echo "\t</li>\t
\t<li class='tab'>
\t\t";
        // line 19
        if (($context["specialproducts"] ?? null)) {
            // line 20
            echo "\t\t\t<a href=\"#tab-special\">";
            echo ($context["tab_special"] ?? null);
            echo "</a>
\t\t";
        }
        // line 22
        echo "\t</li>
\t</ul>

 </div>
</div>
<div class=\"product-column\">
";
        // line 28
        if (($context["bestsellersproducts"] ?? null)) {
            // line 29
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 32
            $context["sliderFor"] = 5;
            // line 33
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestsellersproducts"] ?? null));
            // line 34
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 35
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 36
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestsellersproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t\t <div class=\"image_cover\"> \t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 47) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 50);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 52);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 55);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 56);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 59);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t <a class=\"quickbox\"  title=\"";
                // line 65
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 65);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 67
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 68
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 73) > 0)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t  <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock_status\" title=\"";
                    // line 76
                    echo ($context["text_outstock"] ?? null);
                    echo "\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89) < $context["i"])) {
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 95);
                echo " Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t";
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 101
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 104);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 107);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 134
        if (($context["latestproducts"] ?? null)) {
            // line 135
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 139
            $context["sliderFor"] = 5;
            // line 140
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["latestproducts"] ?? null));
            // line 141
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 142
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 143
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 150
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">
\t\t\t\t\t\t\t\t\t <div class=\"image_cover\"> \t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 154
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 154) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 155
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 156);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 157);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 159);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 159);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 159);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 162
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 162);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 163);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 163);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 163);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 166);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 172
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 172);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 174
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 175
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 175);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                // line 180
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 180) > 0)) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t  <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                } else {
                    // line 182
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t   <span class=\"stock_status\" title=\"";
                    // line 183
                    echo ($context["text_outstock"] ?? null);
                    echo "\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">

\t\t\t\t\t\t\t\t\t\t";
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 194) < $context["i"])) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t &nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 200);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 200);
                echo " Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t";
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 203);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 203);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 204
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 204)) {
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 206
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 206)) {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 207);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 209);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 209);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 211)) {
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 212);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 222);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 223);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 238
        echo "
";
        // line 239
        if (($context["specialproducts"] ?? null)) {
            // line 240
            echo " <div id=\"tab-special\" class=\"tab-content\">
    \t <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 244
            $context["sliderFor"] = 5;
            // line 245
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["specialproducts"] ?? null));
            // line 246
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 247
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 248
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-product ";
            // line 254
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabspecial-carousel";
            } else {
                echo "tabspecial-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["specialproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 256
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t
\t\t\t\t\t\t\t\t\t\t <div class=\"image_cover\"> 
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 260
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 260) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 261
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 261)) {
                    // line 262
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 262);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <img src=\"";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 263);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 263);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 263);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 265);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 265);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 265);
                    echo "\"/></div>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 268);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <img src=\"";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 269);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 269);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 269);
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t  ";
                }
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 271)) {
                    // line 272
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 272);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 274
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 278
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 278);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 280
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 280);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 281
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 281);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                // line 287
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 287) > 0)) {
                    // line 288
                    echo "\t\t\t\t\t\t\t\t  <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 288);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 290
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <span class=\"stock_status\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\"><i class=\"fa fa-exclamation-triangle\"></i>";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                }
                // line 292
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t";
                // line 298
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 300) < $context["i"])) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    } else {
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 305
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 306);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 306);
                echo " Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t";
                // line 309
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 309);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 309);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 310
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 310)) {
                    // line 311
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 312
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 312)) {
                        // line 313
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 313);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 315
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 315);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 315);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 317)) {
                        // line 318
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 318);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 320
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 322
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 328
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 328);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 329
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 329);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t <span class=\"tabspecial_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 344
        echo "</div>

</div></div>
</div>
<script>
\$('#tabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/extension/module/megnortabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  935 => 344,  927 => 338,  912 => 329,  908 => 328,  900 => 322,  896 => 320,  888 => 318,  885 => 317,  877 => 315,  871 => 313,  869 => 312,  866 => 311,  864 => 310,  857 => 309,  849 => 306,  843 => 305,  839 => 303,  835 => 301,  832 => 300,  828 => 299,  825 => 298,  818 => 292,  810 => 290,  800 => 288,  798 => 287,  787 => 281,  781 => 280,  774 => 278,  768 => 274,  762 => 272,  759 => 271,  750 => 269,  745 => 268,  735 => 265,  726 => 263,  721 => 262,  719 => 261,  713 => 260,  701 => 256,  697 => 255,  683 => 254,  680 => 253,  673 => 248,  671 => 247,  668 => 246,  665 => 245,  663 => 244,  657 => 240,  655 => 239,  652 => 238,  644 => 232,  629 => 223,  625 => 222,  617 => 216,  613 => 214,  605 => 212,  602 => 211,  594 => 209,  588 => 207,  586 => 206,  583 => 205,  581 => 204,  574 => 203,  566 => 200,  560 => 199,  556 => 197,  552 => 195,  549 => 194,  545 => 193,  542 => 192,  534 => 185,  527 => 183,  524 => 182,  514 => 181,  512 => 180,  502 => 175,  496 => 174,  489 => 172,  483 => 168,  477 => 166,  474 => 165,  465 => 163,  460 => 162,  450 => 159,  441 => 157,  436 => 156,  434 => 155,  428 => 154,  416 => 150,  412 => 149,  397 => 148,  390 => 143,  388 => 142,  385 => 141,  382 => 140,  380 => 139,  374 => 135,  372 => 134,  364 => 128,  349 => 119,  345 => 118,  336 => 111,  332 => 109,  324 => 107,  321 => 106,  313 => 104,  307 => 102,  305 => 101,  302 => 100,  300 => 99,  293 => 98,  285 => 95,  279 => 94,  275 => 92,  271 => 90,  268 => 89,  264 => 88,  261 => 87,  251 => 78,  244 => 76,  241 => 75,  231 => 74,  229 => 73,  219 => 68,  213 => 67,  206 => 65,  200 => 61,  194 => 59,  191 => 58,  182 => 56,  177 => 55,  167 => 52,  158 => 50,  153 => 49,  151 => 48,  145 => 47,  133 => 43,  129 => 42,  114 => 41,  107 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  92 => 29,  90 => 28,  82 => 22,  76 => 20,  74 => 19,  70 => 17,  64 => 15,  62 => 14,  58 => 12,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/extension/module/megnortabs.twig", "");
    }
}
