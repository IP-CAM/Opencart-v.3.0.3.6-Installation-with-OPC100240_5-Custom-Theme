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

/* OPC100240_5/template/common/home.twig */
class __TwigTemplate_d494c9001a20eefb33ec14b4bf5d84b202eea36c793a18d625dee68be5e61690 extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 3
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 4
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 5
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <div id=\"content\" class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
        <div class=\"content-top\">   
             ";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
        </div>
    ";
        // line 15
        echo ($context["content_bottom"] ?? null);
        echo "
    ";
        // line 16
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 18
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "OPC100240_5/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  82 => 16,  78 => 15,  73 => 13,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "OPC100240_5/template/common/home.twig", "");
    }
}
