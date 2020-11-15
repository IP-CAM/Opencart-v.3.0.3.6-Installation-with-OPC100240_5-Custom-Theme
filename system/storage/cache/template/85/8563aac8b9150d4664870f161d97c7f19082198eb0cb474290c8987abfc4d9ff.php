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

/* OPC100240_5/template/common/menu.twig */
class __TwigTemplate_7b7c58ded8702645675d331f45d30f92ac16ed38bc6e1deee9f3e11736928cd3 extends \Twig\Template
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
        echo "<nav class=\"nav-container\">
<div class=\"nav-inner\">
<!-- ======= Menu Code START ========= -->
";
        // line 4
        if (($context["categories"] ?? null)) {
            // line 5
            echo "<!-- Opencart 3 level Category Menu-->
<div id=\"menu\" class=\"main-menu\">
<div class=\"nav-responsive\"><div class=\"expandable\"><i class=\"fa fa-bars\"></i> Menu</div> </div>     
 
      <ul class=\"nav navbar-nav\">
\t  \t<li class=\"top_level home\"><a href=\"";
            // line 10
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></li>
    \t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "\t\t\t<li class=\"top_level dropdown\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</a>

\t\t\t<div class=\"dropdown-menu megamenu column";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 15);
                    echo "\">
            <div class=\"dropdown-inner\">
\t\t\t  ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 17), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 18
                        echo "\t\t\t\t<ul class=\"list-unstyled childs_1\">
                ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories START -->
\t\t\t\t\t";
                            // line 21
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 21)) {
                                // line 22
                                echo "\t\t\t\t\t  <li class=\"dropdown\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 22);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 22);
                                echo "</a>

\t\t\t\t\t\t  <div class=\"dropdown-menu\">
\t\t\t              <div class=\"dropdown-inner\">
\t\t\t              ";
                                // line 26
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 26), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 26)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 26), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 27
                                    echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t\t  ";
                                    // line 28
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 29
                                        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 29);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 29);
                                        echo "</a></li>
\t\t\t\t\t\t\t  ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 31
                                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t  ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 33
                                echo "\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t  </li>
\t\t\t\t\t";
                            } else {
                                // line 38
                                echo "\t\t\t\t\t  <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 38);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                                echo "</a></li>
\t\t\t\t\t";
                            }
                            // line 40
                            echo "\t\t\t\t\t<!-- 2 Level Sub Categories END -->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "              
\t\t\t    </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "            </div>
\t\t\t</div>

\t\t\t</li>
        ";
                } else {
                    // line 50
                    echo "\t\t\t<li class=\"top_level\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 50);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 50);
                    echo "</a></li>
       ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        <li> <a href=\"";
            echo ($context["all_blogs"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li> 
  </ul>
  
</div>
";
        }
        // line 58
        echo "
</div>
</nav>   
";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 58,  183 => 53,  177 => 52,  169 => 50,  162 => 45,  154 => 42,  147 => 40,  139 => 38,  132 => 33,  125 => 31,  114 => 29,  110 => 28,  107 => 27,  103 => 26,  93 => 22,  91 => 21,  88 => 20,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  64 => 13,  61 => 12,  57 => 11,  51 => 10,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/common/menu.twig", "");
    }
}
