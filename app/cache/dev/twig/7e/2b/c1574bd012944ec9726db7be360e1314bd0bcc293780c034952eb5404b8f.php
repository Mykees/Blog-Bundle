<?php

/* MvcBlogBundle:Admin:Posts/index.html.twig */
class __TwigTemplate_7e2bc1574bd012944ec9726db7be360e1314bd0bcc293780c034952eb5404b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "MvcBlogBundle:Admin:Posts/index.html.twig", 1);
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
        <h1>Manage Posts</h1>
    </div>
    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("posts_admin_add");
        echo "\" class=\"btn btn-primary\">Add a new post</a></p>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Publication date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posts_admin_update", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("posts_admin_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure ?')\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "paginate", array(0 => (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MvcBlogBundle:Admin:Posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  90 => 32,  80 => 28,  76 => 27,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  56 => 21,  52 => 20,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
