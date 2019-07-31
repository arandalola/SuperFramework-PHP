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

/* template.twig.html */
class __TwigTemplate_0143bab006c7fef30cfd69e83538d9f4904e5fe0188383681fd1abf5900c69f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <title>PHP</title>
</head>
<body>
    <header>
        <ul class=\"nav justify-content-end\">
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/users\">Usuarios</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/post\">Blog</a>
            </li>
            ";
        // line 22
        if (twig_test_empty(($context["user"] ?? null))) {
            // line 23
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/login\">Login</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/register\">Registro</a>
            </li>
            ";
        }
        // line 30
        echo "            ";
        if (($context["user"] ?? null)) {
            // line 31
            echo "            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">
                    <a class=\"dropdown-item\" type=\"button\" href=\"/paneldecontrol\">Panel de Control</a>
                    <a class=\"dropdown-item\" type=\"button\" href=\"/perfil\">Perfil</a>
                    <a class=\"dropdown-item\" type=\"button\" href=\"/salir\">Salir</a>
                </div>
            </div>
            ";
        }
        // line 42
        echo "        </ul>
    </header>
    ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
    }

    public function getTemplateName()
    {
        return "template.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  106 => 44,  97 => 46,  95 => 44,  91 => 42,  79 => 33,  75 => 31,  72 => 30,  63 => 23,  61 => 22,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig.html", "C:\\Users\\lall2\\Desktop\\BOOTCAMP\\php\\superFramework\\templates\\template.twig.html");
    }
}
