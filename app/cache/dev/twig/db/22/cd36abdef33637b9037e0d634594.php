<?php

/* DoctrineWorkbenchConverterBundle:Default:index.html.twig */
class __TwigTemplate_db22cd36abdef33637b9037e0d634594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::h5bp_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<script> 
\t\tvar convert_path = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DoctrineWorkbenchConverterBundle_convert"), "html", null, true);
        echo "\",
\t\t\tcsrf_token = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\";
\t</script>
\t<h1> On this page you can convert a Mysql Workbench file to an yml Doctrine file. </h1>
";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "\t<form enctype=\"multipart/form-data\" method=\"POST\">
\t\t<input type=\"file\" name=\"database\">
\t\t<input type=\"submit\">
\t</form>
\t
\t<div id=\"list\"></div>
\t
\t<button id=\"convert\"> Click to convert! </button>
\t
\t<textarea id=\"output\"></textarea>
";
    }

    public function getTemplateName()
    {
        return "DoctrineWorkbenchConverterBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
