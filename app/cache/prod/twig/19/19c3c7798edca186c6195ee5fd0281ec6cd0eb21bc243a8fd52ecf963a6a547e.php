<?php

/* base.html.twig */
class __TwigTemplate_0ca2a21a5051e880b7fc7fc99dbf29be275e3806e177a311345e27a618f85f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/italy.png"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Italy for me";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/lr6.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/DateFormat.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  81 => 16,  76 => 15,  73 => 14,  68 => 13,  61 => 8,  58 => 7,  52 => 6,  47 => 19,  45 => 14,  43 => 13,  36 => 10,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <title>{% block title %}Italy for me{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('img/italy.png') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>*/
/*     <script src="{{ asset('js/lr6.js') }}"></script>*/
/*     <script src="{{ asset('js/DateFormat.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
