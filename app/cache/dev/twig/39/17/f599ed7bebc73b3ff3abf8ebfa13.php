<?php

/* ::h5bp_base.html.twig */
class __TwigTemplate_3917f599ed7bebc73b3ff3abf8ebfa13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
  <meta charset=\"utf-8\">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <title> blaaaah </title>
  <meta name=\"description\" content=\"\">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- link rel=\"stylesheet\" href=\"css/style.css\"-->
   ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "25493a6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25493a6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/25493a6_style_1.css");
            // line 27
            echo "\t\t<link defer rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\">
\t";
        } else {
            // asset "25493a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25493a6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/25493a6.css");
            echo "\t\t<link defer rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\">
\t";
        }
        unset($context["asset_url"]);
        // line 29
        echo "  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <!-- script src=\"js/libs/modernizr-2.0.6.min.js\"></script-->
  
\t";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eb3cc7c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb3cc7c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb3cc7c_modernizr-2.0.6.min_1.js");
            // line 40
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "eb3cc7c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb3cc7c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eb3cc7c.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 42
        echo "
</head>

<body>
  <header>
";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "  </header>
  <div role=\"main\">
";
        // line 52
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo "  </div>
  <footer>
";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
  <script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.7.1.min.js\"><\\/script>')</script>


  <!-- scripts concatenated and minified via build script --
  <script defer src=\"js/plugins.js\"></script>
  <script defer src=\"js/script.js\"></script-->
  
\t";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f8bf3cd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8bf3cd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8bf3cd_knockout-2.0.0_1.js");
            // line 79
            echo "\t\t<script defer src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "f8bf3cd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8bf3cd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8bf3cd_plugins_2.js");
            echo "\t\t<script defer src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "f8bf3cd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8bf3cd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8bf3cd_script_3.js");
            echo "\t\t<script defer src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "f8bf3cd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f8bf3cd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f8bf3cd.js");
            echo "\t\t<script defer src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 81
        echo "  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src=\"//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js\"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "    Header content of the page...
";
    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        // line 53
        echo "    Main content of the page...
";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "    Footer content of the page...
";
    }

    public function getTemplateName()
    {
        return "::h5bp_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
