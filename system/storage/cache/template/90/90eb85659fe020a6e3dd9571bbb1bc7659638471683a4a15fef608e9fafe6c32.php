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

/* OPC100240_5/template/product/category.twig */
class __TwigTemplate_4a90dfe25646723f049963660abb6c4d3706f71ce440815d5fb40886bd750d23 extends \Twig\Template
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
<div id=\"product-special\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"page-title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t   ";
        // line 19
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            echo " 
      <div class=\"row category_thumb\">
        ";
            // line 21
            if (($context["thumb"] ?? null)) {
                // line 22
                echo "        <div class=\"col-sm-2 category_img\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t
        ";
            }
            // line 25
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 26
                echo "        <div class=\"col-sm-10 category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>     
      ";
        }
        // line 30
        echo "       ";
        if (($context["categories"] ?? null)) {
            // line 31
            echo "      <h3 class=\"refine-search\">";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 category_list\">
          <ul>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          </ul>
        </div>
      </div>
       ";
        }
        // line 42
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 43
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" data-toggle=\"tooltip\" title=\"";
            // line 47
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          </div>
        </div>
    <div class=\"compare-total\"><a href=\"";
            // line 50
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
    <div class=\"pagination-right\">
     <div class=\"sort-by-wrapper\">
      <div class=\"col-md-2 text-right sort-by\">
        <label class=\"control-label\" for=\"input-sort\">";
            // line 54
            echo ($context["text_sort"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-3 text-right sort\">
        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
        ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 59) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 60
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 60);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 60);
                    echo "</option>
        ";
                } else {
                    // line 62
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 62);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 62);
                    echo " </option>
         ";
                }
                // line 64
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </select>
      </div>
     </div>
     <div class=\"show-wrapper\">
      <div class=\"col-md-1 text-right show\">
        <label class=\"control-label\" for=\"input-limit\">";
            // line 70
            echo ($context["text_limit"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-2 text-right limit\">
        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 75) == ($context["limit"] ?? null))) {
                    // line 76
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 76);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 76);
                    echo "</option>
        ";
                } else {
                    // line 78
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 78);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 78);
                    echo " </option>
        ";
                }
                // line 80
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </select>
      </div>
    </div>
      </div>
    </div>
    <div class=\"product_combine\">
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 88
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">
         \t<div class=\"image_cover\">
      <div class=\"image ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 92) == 0)) {
                    echo "outstock";
                }
                echo "\">
        ";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 94);
                    echo "\">
      <img src=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 95);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 96);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                    echo "\"/></div>
      </a>
      ";
                } else {
                    // line 99
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
                    echo "\">
      <img src=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 102
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 103);
                    echo "%</span>
      ";
                }
                // line 104
                echo "  
          </div>
          <div class=\"product_hover_block\">
                <div class=\"action\">
\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 109
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 109);
                echo "\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 111
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                echo " ');\"></button>
\t\t\t\t\t<!--- <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 112
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                echo " ');\"></button> --->
                   </div>
\t\t      </div>
     
      <div class=\"product_hover_block_cart\">
        <div class=\"action\">
          ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 118) > 0)) {
                    // line 119
                    echo "            <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
          ";
                } else {
                    // line 121
                    echo "            <span class=\"stock_status\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
          ";
                }
                // line 123
                echo "        </div>
      </div>
</div>
            <div class=\"product-details\">
              <div class=\"caption\">
  
              
\t\t";
                // line 131
                echo "              <div class=\"rating\">
                ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 133
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 133) < $context["i"])) {
                        // line 134
                        echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                      ";
                    } else {
                        // line 136
                        echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                   ";
                    }
                    // line 138
                    echo "                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                   &nbsp;<span style=\"cursor:pointer;\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 139);
                echo "\" class=\"total-review";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 139);
                echo " Review</span>
                   </div>
         ";
                // line 142
                echo "                <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 142);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 142);
                echo "</a></h4> 
             <p class=\"description\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 143);
                echo "</p>
\t\t\t ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "              <p class=\"price\">
                ";
                    // line 146
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 146)) {
                        // line 147
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                        echo "
              ";
                    } else {
                        // line 149
                        echo "              <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 149);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 149);
                        echo "</span>
              ";
                    }
                    // line 151
                    echo "              </p>
              ";
                }
                // line 153
                echo "
              <div class=\"product_hover_block_cart\">
                <div class=\"action\">
                  ";
                // line 156
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 156) > 0)) {
                    // line 157
                    echo "                    <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                  ";
                } else {
                    // line 159
                    echo "                    <span class=\"stock_status\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
                  ";
                }
                // line 161
                echo "                </div>
              </div>

              
              </div>
            </div>
      </div>
          </div>
        </div>
        <script> 
            \$('.total-review";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                echo "').on('click', function() { 
             var t='";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 172);
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
            // line 180
            echo "</div>
      <div class=\"pagination-wrapper\">
      <div class=\"col-sm-6 text-left page-link\">";
            // line 182
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right page-result\">";
            // line 183
            echo ($context["results"] ?? null);
            echo "</div>
     </div>     
      ";
        } else {
            // line 186
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 188
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 191
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 192
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 194
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 194,  558 => 192,  553 => 191,  545 => 188,  539 => 186,  533 => 183,  529 => 182,  525 => 180,  511 => 172,  507 => 171,  495 => 161,  487 => 159,  477 => 157,  475 => 156,  470 => 153,  466 => 151,  458 => 149,  452 => 147,  450 => 146,  447 => 145,  445 => 144,  441 => 143,  434 => 142,  424 => 139,  418 => 138,  414 => 136,  410 => 134,  407 => 133,  403 => 132,  400 => 131,  391 => 123,  383 => 121,  373 => 119,  371 => 118,  360 => 112,  354 => 111,  347 => 109,  340 => 104,  334 => 103,  331 => 102,  322 => 100,  317 => 99,  307 => 96,  299 => 95,  294 => 94,  292 => 93,  286 => 92,  280 => 88,  276 => 87,  268 => 81,  262 => 80,  254 => 78,  246 => 76,  243 => 75,  239 => 74,  232 => 70,  225 => 65,  219 => 64,  211 => 62,  203 => 60,  201 => 59,  195 => 58,  188 => 54,  179 => 50,  173 => 47,  169 => 46,  164 => 43,  161 => 42,  155 => 38,  144 => 36,  140 => 35,  132 => 31,  129 => 30,  125 => 28,  119 => 26,  116 => 25,  105 => 22,  103 => 21,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  76 => 14,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/product/category.twig", "");
    }
}
