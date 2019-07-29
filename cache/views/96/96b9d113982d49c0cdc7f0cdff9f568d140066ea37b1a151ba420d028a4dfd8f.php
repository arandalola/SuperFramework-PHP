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

/* postViews.twig.html */
class __TwigTemplate_d68ec9e4cea062b3dffc29053e35fe8bf83e966b14cc123e786dae2370eb3922 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig.html", "postViews.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <h1 class=\"my-4\">Blog</h1>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <div class=\"card mb-4\">
                <img class=\"card-img-top\" src=\"http://picsum.photos/1280/768?random='";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
            echo "'\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                    <a href=\"#\" class=\"btn btn-primary\">Read More &rarr;</a>
                </div>
                <div class=\"card-footer text-muted\">Posted on ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo " by
                    <a href=\"#\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
        <div class=\"col-md-4\">
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Search</h5>
                <div class=\"card-body\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Categories</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li>
                                    <a href=\"#\">Web Design</a>
                                </li>
                                <li>
                                    <a href=\"#\">HTML</a>
                                </li>
                                <li>
                                    <a href=\"#\">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li>
                                    <a href=\"#\">JavaScript</a>
                                </li>
                                <li>
                                    <a href=\"#\">CSS</a>
                                </li>
                                <li>
                                    <a href=\"#\">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card my-4\">
                <h5 class=\"card-header\">Side Widget</h5>
                <div class=\"card-body\">You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!</div>
            </div>
            [13:51]
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "postViews.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  95 => 17,  91 => 16,  85 => 13,  81 => 12,  76 => 10,  73 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "postViews.twig.html", "C:\\Users\\lall2\\Desktop\\BOOTCAMP\\php\\superFramework\\templates\\postViews.twig.html");
    }
}
