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

/* OPC100240_5/template/common/footer.twig */
class __TwigTemplate_98f17b01364228480183007d74680184860086c122698730869c0fb1428ede19 extends \Twig\Template
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
        echo "
<footer>
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
    ";
        // line 6
        echo ($context["footertop"] ?? null);
        echo "
  </div>
  </div>
</div>
<div class=\"container\">
  <div class=\"row\">
    
</div>
</div>
  <div id=\"footer\" class=\"container\">
     <div class=\"row\">
     <div class=\"footer-blocks\">
";
        // line 18
        echo ($context["footerright"] ?? null);
        echo "
      ";
        // line 19
        if (($context["informations"] ?? null)) {
            // line 20
            echo "      <div id=\"info\" class=\"col-sm-3 column\">
        <h5>";
            // line 21
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 24
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 24);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          <li><a href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
        </ul>
      </div>
      ";
        }
        // line 30
        echo "    <div class=\"col-sm-3 column\">
        <h5>";
        // line 31
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
           <li><a href=\"";
        // line 33
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      
     ";
        // line 51
        echo "      <div id=\"account_link\" class=\"col-sm-3 column\">
        <h5>";
        // line 52
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 54
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 55
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 56
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 57
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 58
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div> 
    </div>
</div>
  </div>


<div class=\"manufacture_block\">
    <div class=\"container\">
      <div class=\"row\">
       ";
        // line 69
        if (($context["manufacturer_list"] ?? null)) {
            // line 70
            echo "        <h5 class=\"manufacturer_title\">";
            echo ($context["text_manufacturer"] ?? null);
            echo " :</h5>
        <ul>
       ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["manufacturer_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 73
                echo "           <li class=\"manufacturer_item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 73);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </ul>
     ";
        }
        // line 77
        echo "    </div>
    </div>
  </div>



<div class=\"bottomfooter\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"content_footer_bottom\"> ";
        // line 86
        echo ($context["footerbottom"] ?? null);
        echo "</div>\t
 <p class=\"powered\">";
        // line 87
        echo ($context["powered"] ?? null);
        echo "</p>
</div>
</div>
</div>
</footer>
";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 93
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  241 => 93,  237 => 92,  229 => 87,  225 => 86,  214 => 77,  210 => 75,  199 => 73,  195 => 72,  189 => 70,  187 => 69,  171 => 58,  165 => 57,  159 => 56,  153 => 55,  147 => 54,  142 => 52,  139 => 51,  130 => 37,  124 => 36,  118 => 35,  112 => 34,  106 => 33,  101 => 31,  98 => 30,  88 => 26,  77 => 24,  73 => 23,  68 => 21,  65 => 20,  63 => 19,  59 => 18,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/common/footer.twig", "");
    }
}
