<?php

/* blocks/header.html.twig */
class __TwigTemplate_f6c025d24e75c34e404fec7e6e753f160b5d463eeb5993c2a4576eaf5b5cef3f extends Twig_Template
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
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("show_page");
        echo "\">\t
    <img  src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo1_1.png"), "html", null, true);
        echo "\" width=\"300\"
          alt=\"Логотип\">
    <img id=\"logo\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pizza.png"), "html", null, true);
        echo "\" width=\"100\"
         alt=\"Логотип\">
</a>";
    }

    public function getTemplateName()
    {
        return "blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <a href="{{ path('show_page') }}">	*/
/*     <img  src="{{ asset('img/logo1_1.png') }}" width="300"*/
/*           alt="Логотип">*/
/*     <img id="logo" src="{{ asset('img/pizza.png') }}" width="100"*/
/*          alt="Логотип">*/
/* </a>*/
