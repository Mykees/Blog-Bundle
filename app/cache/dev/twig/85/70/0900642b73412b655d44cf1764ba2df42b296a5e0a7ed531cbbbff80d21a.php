<?php

/* ::elements/header_admin.html.twig */
class __TwigTemplate_85700900642b73412b655d44cf1764ba2df42b296a5e0a7ed531cbbbff80d21a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("posts_admin_index");
        echo "\">Admin</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Sections <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("posts_admin_index");
        echo "\">Articles</a></li>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("categories_admin_index");
        echo "\">Categories</a></li>
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("users_admin_index");
        echo "\">Users</a></li>
                </ul>
            </li>
        </ul>

        <div class=\"collapse navbar-collapse navbar-ex1-collapse navbar-right\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("mvc_blog_homepage");
        echo "\">< back to the front </a></li>
                <li><a href=\"login.html\">logout</a></li>
            </ul>
        </div>

    </div><!-- /.container -->
</div>";
    }

    public function getTemplateName()
    {
        return "::elements/header_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  46 => 17,  42 => 16,  38 => 15,  29 => 9,  19 => 1,);
    }
}
