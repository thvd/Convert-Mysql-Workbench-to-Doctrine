<?php

/* DoctrineWorkbenchConverterBundle:Default:convert.html.twig */
class __TwigTemplate_051e1816d68107cf856d2dd7a636bea4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->getContext($context, "output");
        echo "
<form action=\"\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t";
        // line 3
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t
\t";
        // line 5
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "workbenchfile"));
        echo "
\t
\t";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t
\t<input type=\"submit\">
</form>";
    }

    public function getTemplateName()
    {
        return "DoctrineWorkbenchConverterBundle:Default:convert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
