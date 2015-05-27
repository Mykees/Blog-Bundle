<?php

/* MvcBlogBundle:Blog:index.html.twig */
class __TwigTemplate_394f3a402a99c68189d491901cb384847456b34fe8cc9b4323c7dba7bbb5a642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MvcBlogBundle:Blog:index.html.twig", 1);
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
        <h1>Blog</h1>
        <p class=\"lead\">Welcome on my blog</p>
    </div>

    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "       <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mvc_blog_show", array("slug" => $this->getAttribute($context["post"], "slug", array()), "id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</a></h2>
        <p><small>Category : <a href=\"#\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "category", array()), "name", array()), "html", null, true);
            echo "</a>, by <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
            echo "</a> on <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo "</em></small></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "paginate", array(0 => (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MvcBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  61 => 13,  49 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
