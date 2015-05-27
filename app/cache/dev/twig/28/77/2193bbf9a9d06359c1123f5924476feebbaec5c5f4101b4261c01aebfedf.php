<?php

/* ::elements/sidebar.html.twig */
class __TwigTemplate_28772193bbf9a9d06359c1123f5924476feebbaec5c5f4101b4261c01aebfedf extends Twig_Template
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
        echo "<h4>Categories</h4>
<div class=\"list-group\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mvc_blog_by_category", array("slug" => $this->getAttribute($this->getAttribute($context["category"], 0, array(), "array"), "slug", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">
            <span class=\"badge\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "postCount", array()), "html", null, true);
            echo "</span>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["category"], 0, array(), "array"), "name", array()), "html", null, true);
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>

<h4>Last posts</h4>
<div class=\"list-group\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mvc_blog_show", array("slug" => $this->getAttribute($context["post"], "slug", array()), "id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "::elements/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  60 => 15,  55 => 14,  51 => 13,  45 => 9,  36 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
