<?php

/* base.html.twig */
class __TwigTemplate_a53e09d561e3505982ef92b160ad9bb3a11bd33c44166448684e5b2a228a8e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["paginator"] = $this->loadTemplate("MvcBlogBundle:Paginator:paginate.html.twig", "base.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    ";
        // line 13
        $this->loadTemplate("::elements/header.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MvcBlogBundle:Blog:sidebar"));
        echo "
            </div>
        </div>
    </div>



    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  93 => 19,  88 => 7,  82 => 6,  76 => 32,  74 => 31,  62 => 22,  58 => 20,  56 => 19,  49 => 14,  47 => 13,  40 => 9,  37 => 8,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }
}
