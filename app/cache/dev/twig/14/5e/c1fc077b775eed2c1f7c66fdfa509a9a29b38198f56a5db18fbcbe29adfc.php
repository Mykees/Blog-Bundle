<?php

/* admin.html.twig */
class __TwigTemplate_145ec1fc077b775eed2c1f7c66fdfa509a9a29b38198f56a5db18fbcbe29adfc extends Twig_Template
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
        $context["paginator"] = $this->loadTemplate("MvcBlogBundle:Paginator:paginate.html.twig", "admin.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 13
        $this->loadTemplate("::elements/header_admin.html.twig", "admin.html.twig", 13)->display($context);
        // line 14
        echo "

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    </div>
</div>



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>
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

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  85 => 18,  80 => 7,  74 => 6,  68 => 27,  66 => 26,  57 => 19,  55 => 18,  49 => 14,  47 => 13,  40 => 9,  37 => 8,  35 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }
}
