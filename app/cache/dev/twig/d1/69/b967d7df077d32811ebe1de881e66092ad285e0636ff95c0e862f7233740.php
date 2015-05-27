<?php

/* MvcBlogBundle:Admin:Posts/add.html.twig */
class __TwigTemplate_d169b967d7df077d32811ebe1de881e66092ad285e0636ff95c0e862f7233740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "MvcBlogBundle:Admin:Posts/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-header\">
        <h1>Edit Post</h1>
    </div>
    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("posts_admin_index");
        echo "\" class=\"btn btn-primary\">< Back to posts</a></p>


    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "slug", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control", "rows" => 6, "cols" => 30)));
        echo "
    </div>


    <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\">

    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
    }

    public function getTemplateName()
    {
        return "MvcBlogBundle:Admin:Posts/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  78 => 31,  69 => 25,  63 => 22,  55 => 17,  49 => 14,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
