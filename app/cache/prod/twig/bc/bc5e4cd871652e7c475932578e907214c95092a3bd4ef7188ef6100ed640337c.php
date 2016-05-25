<?php

/* blocks/layout.html.twig */
class __TwigTemplate_9961cba0ff7eb7a8b578b75018fd4b904dfa12b1e4b924208cc919cfd20fa009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blocks/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div  id=\"header\">
        ";
        // line 4
        $this->loadTemplate("blocks/header.html.twig", "blocks/layout.html.twig", 4)->display($context);
        // line 5
        echo "    </div>
    <div class=\"search\">
        <form>
            <input type=\"search\" name=\"q\" placeholder=\"Поиск по сайту\"> 
            <input type=\"submit\" value=\"Найти\">
        </form>
    </div>
    ";
        // line 12
        $this->loadTemplate("blocks/admin.html.twig", "blocks/layout.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"content regular \">
        <div class=\"caside\">
            <div class=\"menu main\">
                ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu", array("currentUri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "pathInfo", array()))));
        echo "
            </div>
            <div class=\"contact copy\">
                <p>Телефон: 0994389911 </p>
            </div>
        </div>
        <div class=\"ccontent\">
            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "            <div>
                <p class=\"center\">
                    <a href=\"http://www.edimdoma.ru/\"><img  src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partner1.gif"), "html", null, true);
        echo "\" width=100 height=50 alt=\"Едим дома\"></a>
                    <a href=\"https://www.facebook.com/MasterChefUA\"><img  src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partner3.png"), "html", null, true);
        echo "\" width=100 height=50 alt=\"Мастер Шеф\"></a>
                    <a href=\"http://www.1tv.ru/sprojects_editions/si=23\"><img  src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/partner2.png"), "html", null, true);
        echo "\" width=100 height=50 alt=\"Смак\"></a>
                </p>
            </div>
        </div>
        <div class=\"center bottommenu \">
            ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu", array("currentUri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "pathInfo", array()))));
        echo "
        </div>
    </div>
    <div class=\"aside\">
        ";
        // line 38
        $this->loadTemplate("blocks/aside.html.twig", "blocks/layout.html.twig", 38)->display($context);
        // line 39
        echo "        <div class=\"copy\"> 
            <label id=\"copyright\">Date/Time</label>
            <p>
                Maria Gulko&copy;2016 
            </p>
        </div>
    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "blocks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  105 => 23,  94 => 39,  92 => 38,  85 => 34,  77 => 29,  73 => 28,  69 => 27,  65 => 25,  63 => 23,  53 => 16,  48 => 13,  46 => 12,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div  id="header">*/
/*         {% include 'blocks/header.html.twig' %}*/
/*     </div>*/
/*     <div class="search">*/
/*         <form>*/
/*             <input type="search" name="q" placeholder="Поиск по сайту"> */
/*             <input type="submit" value="Найти">*/
/*         </form>*/
/*     </div>*/
/*     {% include 'blocks/admin.html.twig' %}*/
/*     <div class="content regular ">*/
/*         <div class="caside">*/
/*             <div class="menu main">*/
/*                 {{ render(controller('AppBundle:Default:menu', {'currentUri': app.request.pathInfo})) }}*/
/*             </div>*/
/*             <div class="contact copy">*/
/*                 <p>Телефон: 0994389911 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="ccontent">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*             <div>*/
/*                 <p class="center">*/
/*                     <a href="http://www.edimdoma.ru/"><img  src="{{ asset('img/partner1.gif') }}" width=100 height=50 alt="Едим дома"></a>*/
/*                     <a href="https://www.facebook.com/MasterChefUA"><img  src="{{ asset('img/partner3.png') }}" width=100 height=50 alt="Мастер Шеф"></a>*/
/*                     <a href="http://www.1tv.ru/sprojects_editions/si=23"><img  src="{{ asset('img/partner2.png') }}" width=100 height=50 alt="Смак"></a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="center bottommenu ">*/
/*             {{ render(controller('AppBundle:Default:menu', {'currentUri': app.request.pathInfo})) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="aside">*/
/*         {% include 'blocks/aside.html.twig' %}*/
/*         <div class="copy"> */
/*             <label id="copyright">Date/Time</label>*/
/*             <p>*/
/*                 Maria Gulko&copy;2016 */
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
