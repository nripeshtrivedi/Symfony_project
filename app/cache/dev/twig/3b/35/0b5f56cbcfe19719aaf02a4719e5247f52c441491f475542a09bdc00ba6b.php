<?php

/* AcmeTaskBundle:Default:new.html.twig */
class __TwigTemplate_3b350b5f56cbcfe19719aaf02a4719e5247f52c441491f475542a09bdc00ba6b extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
\t <style type=\"text/css\"> 
\t\t#mydiv 
\t\t{
\t\t\tposition:absolute;
\t\t\ttop: 50%;
\t\t\tleft: 50%;
\t\t\twidth:30em;
\t\t\theight:6em;
\t\t\tmargin-top: -9em; /*set to a negative number 1/2 of your height*/
\t\t\tmargin-left: -15em; /*set to a negative number 1/2 of your width*/
\t\t\tborder: 1px solid #ccc;
\t\t\tbackground-color: #f3f3f3;
\t\t}

\t</style>
        <title>All Records</title>
   </head>
    <body>
\t\t<div id=\"mydiv\">
\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t\t<ol id=\"task\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "task"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "dueDate"), "Y-m-d"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</ol>
\t\t</mydiv>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AcmeTaskBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  57 => 27,  52 => 26,  48 => 25,  43 => 23,  19 => 1,);
    }
}
