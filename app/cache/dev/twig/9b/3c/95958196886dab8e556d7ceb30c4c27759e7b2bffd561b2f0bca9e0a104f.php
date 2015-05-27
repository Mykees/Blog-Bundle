<?php

/* ::elements/header.html.twig */
class __TwigTemplate_9b3c95958196886dab8e556d7ceb30c4c27759e7b2bffd561b2f0bca9e0a104f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("mvc_blog_homepage");
        echo "\">Blog</a>
        </div>

        <div class=\"collapse navbar-collapse navbar-ex1-collapse navbar-right\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("posts_admin_index");
        echo "\">Admin</a></li>
            </ul>
        </div>

    </div><!-- /.container -->
</div>";
    }

    public function getTemplateName()
    {
        return "::elements/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  29 => 9,  19 => 1,);
    }
}
