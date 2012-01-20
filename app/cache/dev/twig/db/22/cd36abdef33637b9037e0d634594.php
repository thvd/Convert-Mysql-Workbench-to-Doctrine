<?php

/* DoctrineWorkbenchConverterBundle:Default:index.html.twig */
class __TwigTemplate_db22cd36abdef33637b9037e0d634594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "\t<form enctype=\"multipart/form-data\" method=\"POST\">
\t\t<input type=\"file\" name=\"database\">
\t\t<input type=\"submit\">
\t</form>
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
