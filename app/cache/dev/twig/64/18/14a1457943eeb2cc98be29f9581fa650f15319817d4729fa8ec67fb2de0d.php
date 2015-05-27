<?php

/* MvcBlogBundle:Blog:show.html.twig */
class __TwigTemplate_641814a1457943eeb2cc98be29f9581fa650f15319817d4729fa8ec67fb2de0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MvcBlogBundle:Blog:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "name", array()), "html", null, true);
        echo "</h1>
        <p><small>Category : <a href=\"#\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "category", array()), "name", array()), "html", null, true);
        echo "</a>, by <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
        echo "</a> on <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo "</em></small></p>
    </div>

    <article>
        ";
        // line 10
        echo $this->env->getExtension('markdown_extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "
    </article>
    <hr/>

";
    }

    public function getTemplateName()
    {
        return "MvcBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
