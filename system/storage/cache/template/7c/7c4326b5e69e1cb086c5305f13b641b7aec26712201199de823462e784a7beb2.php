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

/* OPC100240_5/template/product/product.twig */
class __TwigTemplate_2c34296ac25ac7daf14bc4c7c19a32111a393640792423d944a0296647dc2681 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
  \t\t";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
        ";
        // line 14
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "        ";
            $context["class"] = "col-sm-6 product-left";
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "        ";
            $context["class"] = "col-sm-8 product-left";
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
    <div class=\"product-info\">    
     ";
        // line 21
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 22
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 23
            if (($context["thumb"] ?? null)) {
                echo "      
    <!-- Megnor Cloud-Zoom Image Effect Start -->
      <div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 25
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
      ";
            }
            // line 27
            echo "      ";
            if (($context["images"] ?? null)) {
                // line 28
                echo "       ";
                $context["sliderFor"] = 5;
                // line 29
                echo "      ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
      
     <div class=\"additional-carousel\">  
      ";
                // line 32
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    // line 33
                    echo "        <div class=\"customNavigation\">
        <span class=\"fa prev fa-arrow-left\">&nbsp;</span>
      <span class=\"fa next fa-arrow-right\">&nbsp;</span>
      </div> 
     ";
                }
                // line 37
                echo "        
      <div id=\"additional-carousel\" class=\"image-additional";
                // line 38
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo " product-carousel";
                }
                echo "\">
          
     ";
                // line 44
                echo "   
        
      ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 47
                    echo "        <div class=\"slider-item\">
        <div class=\"product-block\">   
              <a href=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 49);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 49);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 49);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 49);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
        </div>
        </div>    
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "        
        </div>
      <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
      </div>
    ";
            }
            // line 56
            echo "         

  <!-- Megnor Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 61
        echo "        </div>
        </div>
        ";
        // line 63
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 64
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 65
            echo "        ";
        } else {
            // line 66
            echo "        ";
            $context["class"] = "col-sm-4 product-right";
            // line 67
            echo "        ";
        }
        // line 68
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          
          <h3 class=\"product-title\">";
        // line 70
        echo ($context["heading_title"] ?? null);
        echo "</h3>
          ";
        // line 71
        if (($context["review_status"] ?? null)) {
            echo "  
          <div class=\"rating-wrapper\">
            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 74
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 75
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
              ";
                } else {
                    // line 77
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                }
                // line 79
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "              <a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>  
              <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            // line 81
            echo ($context["text_write"] ?? null);
            echo "</a>
          </div>
         ";
        }
        // line 83
        echo " 
            <div class=\"description\">
        <table class=\"product-description\">

            ";
        // line 87
        if (($context["manufacturer"] ?? null)) {
            // line 88
            echo "            <tr><td><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span></td><td class=\"description-right\"><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></td></tr>
            ";
        }
        // line 90
        echo "            <tr><td><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span></td><td  class=\"description-right\"> ";
        echo ($context["model"] ?? null);
        echo "</td></tr>
            ";
        // line 91
        if (($context["reward"] ?? null)) {
            // line 92
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> </td><td class=\"description-right\" >";
            echo ($context["reward"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 94
        echo "            ";
        if (($context["sku"] ?? null)) {
            // line 95
            echo "           <tr><td><span class=\"desc\">SKU :</span> </td><td class=\"description-right\" >";
            echo ($context["sku"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 97
        echo "             ";
        if ((($context["stock_qty"] ?? null) == "false")) {
            // line 98
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_stock"] ?? null);
            echo "</span> </td><td class=\"description-right\" >
            <span style=\"color:#ff0000;\">";
            // line 99
            echo ($context["stock"] ?? null);
            echo "</span>
          </td></tr> ";
        }
        // line 101
        echo "    
          </table>
          ";
        // line 103
        if ((($context["stock_qty"] ?? null) == "true")) {
            // line 104
            echo "          \t<span class=\"stock_msg\" style=\"color:#228B22;\">";
            echo ($context["text_productavail"] ?? null);
            echo " : ";
            echo ($context["qty_stock"] ?? null);
            echo "</span>
          ";
        }
        // line 106
        echo "
      </div>

          ";
        // line 109
        if (($context["price"] ?? null)) {
            // line 110
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 111
            if ( !($context["special"] ?? null)) {
                // line 112
                echo "            <li>
              <h4 class=\"special-price\"><span class=\"old-prices\">";
                // line 113
                echo ($context["price"] ?? null);
                echo "</span></h4>
            </li>
            ";
            } else {
                // line 116
                echo "            <li><h4 class=\"special-price\"><span class=\"new-prices\">";
                echo ($context["special"] ?? null);
                echo "</span></h4>
            \t<span class=\"old-price\" style=\"text-decoration: line-through;\"><span class=\"old-prices\">";
                // line 117
                echo ($context["price"] ?? null);
                echo "</span></span>
            \t<span class=\"discount-per\">&nbsp;&nbsp;";
                // line 118
                echo ($context["percentsaving"] ?? null);
                echo "% off</span>
            </li>
            ";
            }
            // line 121
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 122
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " <span class=\"product-tax\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
            ";
            }
            // line 124
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 125
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 127
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 128
                echo "           
            ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 130
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 130);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 130);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            ";
            }
            // line 133
            echo "          </ul>
          ";
        }
        // line 135
        echo "          <div id=\"product\">
       ";
        // line 136
        if (($context["options"] ?? null)) {
            // line 137
            echo "            <h3 class=\"product-option\">";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 139
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "select")) {
                    // line 140
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 140)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141);
                    echo "</label>
              <select name=\"option[";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 143
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 144));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 145
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 145);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                        echo "
                ";
                        // line 146
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146)) {
                            // line 147
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 147);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147);
                            echo ")
                ";
                        }
                        // line 148
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "              </select>
            </div>
            ";
                }
                // line 153
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "radio")) {
                    // line 154
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 154)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "</label>
              <div id=\"input-option";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 156));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 157
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 159);
                        echo "\" />
                    ";
                        // line 160
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 160)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 160);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 160);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 160);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 161);
                        echo "
                    ";
                        // line 162
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 162)) {
                            // line 163
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 163);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 163);
                            echo ")
                    ";
                        }
                        // line 164
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo " </div>
            </div>
            ";
                }
                // line 169
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "checkbox")) {
                    // line 170
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
              <div id=\"input-option";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 173
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 175);
                        echo "\" />
                    ";
                        // line 176
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 176)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 176);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 176);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 177
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 177);
                        echo "
                    ";
                        // line 178
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178)) {
                            // line 179
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 179);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179);
                            echo ")
                    ";
                        }
                        // line 180
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo " </div>
            </div>
            ";
                }
                // line 185
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "text")) {
                    // line 186
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 188);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 191
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 191) == "textarea")) {
                    // line 192
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 192)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 193);
                    echo "</label>
              <textarea name=\"option[";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 194);
                    echo "</textarea>
            </div>
            ";
                }
                // line 197
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 197) == "file")) {
                    // line 198
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 198)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\" />
            </div>
            ";
                }
                // line 204
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "date")) {
                    // line 205
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 214
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 214) == "datetime")) {
                    // line 215
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 215)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 216);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 218);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 224
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 224) == "time")) {
                    // line 225
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 225)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 228);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 234
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "            ";
        }
        // line 236
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 237
            echo "            <hr>
            <h3>";
            // line 238
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 241
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 243
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 243);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 249
        echo "            <div class=\"form-group qty\">
              ";
        // line 250
        if ((($context["stock_qty"] ?? null) == "true")) {
            echo " 
              <label class=\"control-label\" for=\"input-quantity\">";
            // line 251
            echo ($context["entry_qty"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 252
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 253
            echo ($context["product_id"] ?? null);
            echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 254
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
              ";
        } else {
            // line 256
            echo "                 <label class=\"control-label\" for=\"input-quantity\">";
            echo ($context["entry_qty"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 257
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 258
            echo ($context["product_id"] ?? null);
            echo "\" />
              <button type=\"button\" id=\"button\" onclick=\"alert('";
            // line 259
            echo ($context["text_outstock"] ?? null);
            echo "');\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block disabled\">";
            echo ($context["button_cart"] ?? null);
            echo "</button> 
              ";
        }
        // line 261
        echo "               <div class=\"btn-group prd_page\">

            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 263
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 264
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          </div>
            
          ";
        // line 268
        if ((($context["minimum"] ?? null) > 1)) {
            // line 269
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 271
        echo "            </div>

        

           <hr>
       <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 277
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
            <div class=\"content_product_block\">";
        // line 280
        echo ($context["productblock"] ?? null);
        echo "</div>
      </div>
         
      ";
        // line 283
        if (($context["tags"] ?? null)) {
            // line 284
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 286
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 286);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 286);
                    echo "</a>,
        ";
                } else {
                    // line 287
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 287);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 287);
                    echo "</a> ";
                }
                // line 288
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 290
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 292
        echo ($context["column_right"] ?? null);
        echo "
     <!-- product page tab code start-->
     ";
        // line 294
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 295
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 296
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 297
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 298
            echo "         ";
        } else {
            // line 299
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 300
            echo "        ";
        }
        // line 301
        echo "    <div id=\"tabs_info\" class=\"product-tab ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 303
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 304
        if (($context["attribute_groups"] ?? null)) {
            // line 305
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 307
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 308
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 310
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 312
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 313
        if (($context["attribute_groups"] ?? null)) {
            // line 314
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 317
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 319);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 324
                    echo "                <tr>
                  <td>";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 325);
                    echo "</td>
                  <td>";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 326);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "              </table>
            </div>
            ";
        }
        // line 334
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 335
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 338
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 339
            if (($context["review_guest"] ?? null)) {
                // line 340
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 342
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 343
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 348
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 350
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 355
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 356
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 366
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 368
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 371
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 375
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 377
            echo "              </form>
            </div>
            ";
        }
        // line 379
        echo "</div>
      </div>
        ";
        // line 381
        if (($context["products"] ?? null)) {
            // line 382
            echo "      <div class=\"box related_prd\">
     <div class=\"box-head\"> <div class=\"box-heading\">";
            // line 383
            echo ($context["text_related"] ?? null);
            echo "</div></div>
    <div class=\"box-content\">
    <div id=\"products-related\" class=\"related-products\">
      
      ";
            // line 387
            $context["sliderFor"] = 5;
            // line 388
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
      
        ";
            // line 390
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 391
                echo "          <div class=\"customNavigation\">
            <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
            <a class=\"fa next fa-arrow-right\">&nbsp;</a>
          </div>  
        ";
            }
            // line 396
            echo "        
        <div class=\"box-product ";
            // line 397
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
            ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 399
                echo "        <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
           <div class=\"product-block product-thumb transition\">
              <div class=\"product-block-inner\"> 

      <div class=\"image_cover\">
      <div class=\"image ";
                // line 404
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 404) == 0)) {
                    echo "outstock";
                }
                echo "\">
     ";
                // line 405
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 405)) {
                    // line 406
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 406);
                    echo "\">
      <img src=\"";
                    // line 407
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 407);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 407);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 407);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 408);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 408);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 408);
                    echo "\"/>
      </div>
      </a>
      ";
                } else {
                    // line 412
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 412);
                    echo "\">
      <img src=\"";
                    // line 413
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 413);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 413);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 413);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 415
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 415)) {
                    // line 416
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 416);
                    echo "%</span>
      ";
                }
                // line 418
                echo "      
      </div>
      <div class=\"product_hover_block\">
        <div class=\"action\">
         <div class=\"quickview-button\">
          <a class=\"quickbox\"  title=\"";
                // line 423
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 423);
                echo "\"></a>
         </div>
         <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 425
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 425);
                echo " ');\"></button>
         <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 426
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 426);
                echo " ');\"></button>
        </div>
      </div>
      <div class=\"product_hover_block_cart\">
        <div class=\"action\">
          ";
                // line 431
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 431) > 0)) {
                    // line 432
                    echo "         <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 432);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
            ";
                } else {
                    // line 434
                    echo "         <span class=\"stock_status\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
          ";
                }
                // line 436
                echo "        </div>
      </div>
    </div>

    
      <div class=\"product-details\">
      <div class=\"caption\">
     
  ";
                // line 445
                echo "       <div class=\"rating\">
       ";
                // line 446
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 447
                    echo "       ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 447) < $context["i"])) {
                        // line 448
                        echo "       <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
         ";
                    } else {
                        // line 450
                        echo "         <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
         ";
                    }
                    // line 452
                    echo "         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "         &nbsp;<span style=\"cursor:pointer;\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 453);
                echo "\" class=\"total-review";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 453);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 453);
                echo " Review</span>
       </div>
  ";
                // line 456
                echo "       <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 456);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 456);
                echo " </a></h4>
      ";
                // line 457
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 457)) {
                    // line 458
                    echo "      <p class=\"price\">
      ";
                    // line 459
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 459)) {
                        // line 460
                        echo "      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 460);
                        echo "
      ";
                    } else {
                        // line 462
                        echo "      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 462);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 462);
                        echo "</span>
      ";
                    }
                    // line 464
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 464)) {
                        // line 465
                        echo "      <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 465);
                        echo "</span>
      ";
                    }
                    // line 467
                    echo "      </p>
      ";
                }
                // line 469
                echo "     
      </div>                  
    </div>
    </div>
          </div>
        </div>
        <script> 
            \$('.total-review";
                // line 476
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 476);
                echo "').on('click', function() { 
             var t='";
                // line 477
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 477);
                echo "'; 
            const parseResult = new DOMParser().parseFromString(t, \"text/html\");
            const parsedUrl = parseResult.documentElement.textContent;
            window.location.href = parsedUrl + '&review';
            return false;
          });
      </script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        </div>
        <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
    </div>
    </div>
    </div>
        ";
        }
        // line 491
        echo "  </div>
</div>

<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$.notify({
          message: json['success'],
          target: '_blank'
        },{
          // settings
          element: 'body',
          position: null,
          type: \"info\",
          allow_dismiss: true,
          newest_on_top: false,
          placement: {
            from: \"top\",
            align: \"center\"
          },
          offset: 0,
          spacing: 10,
          z_index: 2031,
          delay: 5000,
          timer: 1000,
          url_target: '_blank',
          mouse_over: null,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: 'class',
          template: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
            '<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
              '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
          '</div>' 
        });

        \$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');

        //\$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 608
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 613
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 619
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 686
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 690
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

//\$(document).ready(function() {
//  \$('.thumbnails').magnificPopup({
//    type:'image',
//    delegate: 'a',
//    gallery: {
//      enabled: true
//    }
//  });
//});


\$(document).ready(function() {
  var ramswaroop = new URLSearchParams(window.location.search);
  var tarun = ramswaroop.has('review');
  if (tarun == true) {
    setTimeout(function(){ 
      \$('html, body').animate({scrollTop: \$('#tabs_info').offset().top}, 'slow'); 
      \$('a[href=\\'#tab-review\\']').trigger('click');
    }, 1000);
    return false;
  }
});

\$(document).ready(function() {
if (\$(window).width() > 767) {
    \$(\"#tmzoom\").elevateZoom({
        
        gallery:'additional-carousel',
        //inner zoom         
                 
        zoomType : \"inner\", 
        cursor: \"crosshair\" 
        
        /*//tint
        
        tint:true, 
        tintColour:'#F90', 
        tintOpacity:0.5
        
        //lens zoom
        
        zoomType : \"lens\", 
        lensShape : \"round\", 
        lensSize : 200 
        
        //Mousewheel zoom
        
        scrollZoom : true*/
        
        
      });
    var z_index = 0;
                  
                  \$(document).on('click', '.thumbnail', function () {
                    \$('.thumbnails').magnificPopup('open', z_index);
                    return false;
                  });
              
                  \$('.additional-carousel a').click(function() {
                    var smallImage = \$(this).attr('data-image');
                    var largeImage = \$(this).attr('data-zoom-image');
                    var ez =   \$('#tmzoom').data('elevateZoom');  
                    \$('.thumbnail').attr('href', largeImage);  
                    ez.swaptheimage(smallImage, largeImage); 
                    z_index = \$(this).index('.additional-carousel a');
                    return false;
                  });
      
  }else{
    \$(document).on('click', '.thumbnail', function () {
    \$('.thumbnails').magnificPopup('open', 0);
    return false;
    });
  }
});
\$(document).ready(function() {     
  \$('.thumbnails').magnificPopup({
    delegate: 'a.elevatezoom-gallery',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title');
      }
    }
  });
});

\$('#custom_tab a').tabs();
 \$('#tabs a').tabs();

//--></script>

";
        // line 818
        if ((array_key_exists("update_price_status", $context) && ($context["update_price_status"] ?? null))) {
            // line 819
            echo "          
          <script type=\"text/javascript\">
          
            \$(\"#product input[type='checkbox']\").click(function() {
              changePrice();
            });
            
            \$(\"#product input[type='radio']\").click(function() {
              changePrice();
            });
            
            \$(\"#product select\").change(function() {
              changePrice();
            });
            
            \$(\"#input-quantity\").keyup(function() {
              changePrice();
            });
            
            function changePrice() {
              \$.ajax({
                url: 'index.php?route=product/product/updatePrice&product_id=";
            // line 840
            echo ($context["product_id"] ?? null);
            echo "',
                type: 'post',
                dataType: 'json',
                data: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
                beforeSend: function() {
                  
                },
                complete: function() {
                  
                },
                success: function(json) {
                  \$('.alert-success, .alert-danger').remove();
                  
                  if(json['new_price_found']) {
                    \$('.new-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  } else {
                    \$('.old-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  }
                }
              });
            }
          </script>
          
        ";
        }
        // line 866
        echo " 
";
        // line 867
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1905 => 867,  1902 => 866,  1873 => 840,  1850 => 819,  1848 => 818,  1717 => 690,  1710 => 686,  1640 => 619,  1631 => 613,  1623 => 608,  1504 => 491,  1496 => 485,  1482 => 477,  1478 => 476,  1469 => 469,  1465 => 467,  1457 => 465,  1454 => 464,  1446 => 462,  1440 => 460,  1438 => 459,  1435 => 458,  1433 => 457,  1426 => 456,  1416 => 453,  1410 => 452,  1406 => 450,  1402 => 448,  1399 => 447,  1395 => 446,  1392 => 445,  1382 => 436,  1374 => 434,  1364 => 432,  1362 => 431,  1352 => 426,  1346 => 425,  1339 => 423,  1332 => 418,  1326 => 416,  1323 => 415,  1314 => 413,  1309 => 412,  1298 => 408,  1290 => 407,  1285 => 406,  1283 => 405,  1277 => 404,  1264 => 399,  1260 => 398,  1246 => 397,  1243 => 396,  1236 => 391,  1234 => 390,  1228 => 388,  1226 => 387,  1219 => 383,  1216 => 382,  1214 => 381,  1210 => 379,  1205 => 377,  1199 => 375,  1190 => 371,  1184 => 368,  1179 => 366,  1166 => 356,  1162 => 355,  1154 => 350,  1149 => 348,  1141 => 343,  1137 => 342,  1133 => 340,  1131 => 339,  1127 => 338,  1122 => 335,  1119 => 334,  1114 => 331,  1107 => 329,  1098 => 326,  1094 => 325,  1091 => 324,  1087 => 323,  1080 => 319,  1076 => 317,  1072 => 316,  1068 => 314,  1066 => 313,  1062 => 312,  1058 => 310,  1052 => 308,  1049 => 307,  1043 => 305,  1041 => 304,  1037 => 303,  1031 => 301,  1028 => 300,  1025 => 299,  1022 => 298,  1019 => 297,  1016 => 296,  1013 => 295,  1011 => 294,  1006 => 292,  1000 => 290,  991 => 288,  984 => 287,  974 => 286,  970 => 285,  965 => 284,  963 => 283,  957 => 280,  951 => 277,  943 => 271,  937 => 269,  935 => 268,  924 => 264,  916 => 263,  912 => 261,  903 => 259,  899 => 258,  895 => 257,  890 => 256,  883 => 254,  879 => 253,  875 => 252,  871 => 251,  867 => 250,  864 => 249,  858 => 245,  847 => 243,  843 => 242,  839 => 241,  833 => 238,  830 => 237,  827 => 236,  824 => 235,  818 => 234,  805 => 228,  798 => 226,  791 => 225,  788 => 224,  775 => 218,  768 => 216,  761 => 215,  758 => 214,  745 => 208,  738 => 206,  731 => 205,  728 => 204,  720 => 201,  712 => 200,  708 => 199,  701 => 198,  698 => 197,  686 => 194,  680 => 193,  673 => 192,  670 => 191,  658 => 188,  652 => 187,  645 => 186,  642 => 185,  637 => 182,  629 => 180,  622 => 179,  620 => 178,  615 => 177,  599 => 176,  593 => 175,  589 => 173,  583 => 172,  579 => 171,  572 => 170,  569 => 169,  564 => 166,  556 => 164,  549 => 163,  547 => 162,  543 => 161,  525 => 160,  519 => 159,  515 => 157,  509 => 156,  505 => 155,  498 => 154,  495 => 153,  490 => 150,  483 => 148,  476 => 147,  474 => 146,  467 => 145,  463 => 144,  459 => 143,  453 => 142,  447 => 141,  440 => 140,  437 => 139,  433 => 138,  428 => 137,  426 => 136,  423 => 135,  419 => 133,  416 => 132,  405 => 130,  401 => 129,  398 => 128,  395 => 127,  387 => 125,  384 => 124,  376 => 122,  373 => 121,  367 => 118,  363 => 117,  358 => 116,  352 => 113,  349 => 112,  347 => 111,  344 => 110,  342 => 109,  337 => 106,  329 => 104,  327 => 103,  323 => 101,  318 => 99,  313 => 98,  310 => 97,  304 => 95,  301 => 94,  293 => 92,  291 => 91,  284 => 90,  274 => 88,  272 => 87,  266 => 83,  260 => 81,  255 => 80,  249 => 79,  245 => 77,  241 => 75,  238 => 74,  234 => 73,  229 => 71,  225 => 70,  219 => 68,  216 => 67,  213 => 66,  210 => 65,  207 => 64,  205 => 63,  201 => 61,  194 => 56,  187 => 52,  165 => 49,  161 => 47,  157 => 46,  153 => 44,  146 => 38,  143 => 37,  136 => 33,  134 => 32,  127 => 29,  124 => 28,  121 => 27,  106 => 25,  101 => 23,  98 => 22,  96 => 21,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  72 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/product/product.twig", "");
    }
}
