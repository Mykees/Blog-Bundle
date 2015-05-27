<?php

/* MvcBlogBundle:Paginator:paginate.html.twig */
class __TwigTemplate_809a5e65af59853d4dcf2ebc6c61a3d9144d1377842c709ea1dec84d527560cc extends Twig_Template
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
    }

    // line 1
    public function getpaginate($__paginator__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["page"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page"), "method")) : (1));
            // line 3
            echo "    ";
            $context["countPages"] = (intval(floor((twig_length_filter($this->env, (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))) / $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "query", array()), "maxResults", array())))) + 1);
            // line 4
            echo "
    ";
            // line 5
            if (((isset($context["countPages"]) ? $context["countPages"] : $this->getContext($context, "countPages")) > 1)) {
                // line 6
                echo "
        <ul class=\"pagination\">
            ";
                // line 8
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
                    // line 9
                    echo "                <li class=\"prev\"><a href=\"?page=";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "html", null, true);
                    echo "\" rel=\"prev\">Previous</a></li>
            ";
                } else {
                    // line 11
                    echo "                <li class=\"disabled\"><a>Previous</a></li>
            ";
                }
                // line 13
                echo "
            ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["countPages"]) ? $context["countPages"] : $this->getContext($context, "countPages"))));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 15
                    echo "                ";
                    if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                        // line 16
                        echo "                    <li class=\"active\"><a>";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 18
                        echo "                    <li><a href=\"?page=";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                    // line 20
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "
            ";
                // line 22
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["countPages"]) ? $context["countPages"] : $this->getContext($context, "countPages")))) {
                    // line 23
                    echo "                <li class=\"next\"><a href=\"?page=";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "html", null, true);
                    echo "\" rel=\"next\">Next</a></li>
            ";
                } else {
                    // line 25
                    echo "                <li class=\"disabled\"><a>Next</a></li>
            ";
                }
                // line 27
                echo "        </ul>

    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MvcBlogBundle:Paginator:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 25,  94 => 23,  92 => 22,  89 => 21,  83 => 20,  75 => 18,  69 => 16,  66 => 15,  62 => 14,  59 => 13,  55 => 11,  49 => 9,  47 => 8,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  21 => 1,);
    }
}
