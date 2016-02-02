<?php

/* ProjektBundle:Kategorie:category.html.twig */
class __TwigTemplate_4440a4599ace0d1668d2237fa27891531348a5ceed32d2107865c1be89e08d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjektBundle::layout.html.twig", "ProjektBundle:Kategorie:category.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjektBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856e4cafc59b2e01d82a047c16cf0f71a80d9abf0d322a8b22a41c3e0c0058c7 = $this->env->getExtension("native_profiler");
        $__internal_856e4cafc59b2e01d82a047c16cf0f71a80d9abf0d322a8b22a41c3e0c0058c7->enter($__internal_856e4cafc59b2e01d82a047c16cf0f71a80d9abf0d322a8b22a41c3e0c0058c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle:Kategorie:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_856e4cafc59b2e01d82a047c16cf0f71a80d9abf0d322a8b22a41c3e0c0058c7->leave($__internal_856e4cafc59b2e01d82a047c16cf0f71a80d9abf0d322a8b22a41c3e0c0058c7_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7188197cfb86958343ebd3005a2f4a6e0410389f1e937bc76b44dc6007a8dcbb = $this->env->getExtension("native_profiler");
        $__internal_7188197cfb86958343ebd3005a2f4a6e0410389f1e937bc76b44dc6007a8dcbb->enter($__internal_7188197cfb86958343ebd3005a2f4a6e0410389f1e937bc76b44dc6007a8dcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills pull-right\">
            <li role=\"presentation\" ><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("projekt_homepage");
        echo "\">Główna</a></li>
            <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("projekt_category");
        echo "\">Kategorie</a></li>
            <li role=\"presentation\"><a href=\"#\">Rejestracja</a></li>
            <li role=\"presentation\"><a href=\"#\">Logowanie</a></li>
          </ul>
        </nav>
        <h3><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("projekt_homepage");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/css/images/logo.png"), "html", null, true);
        echo "\"></a></h3>
      </div>
            <div class=\"row\">

";
        
        $__internal_7188197cfb86958343ebd3005a2f4a6e0410389f1e937bc76b44dc6007a8dcbb->leave($__internal_7188197cfb86958343ebd3005a2f4a6e0410389f1e937bc76b44dc6007a8dcbb_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_be08a2b82a5cdd1a6466c1234386c8583300ae655f33c795aa42a51232a81d34 = $this->env->getExtension("native_profiler");
        $__internal_be08a2b82a5cdd1a6466c1234386c8583300ae655f33c795aa42a51232a81d34->enter($__internal_be08a2b82a5cdd1a6466c1234386c8583300ae655f33c795aa42a51232a81d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "


<div class=\"row\">
\t  <div class=\"row marketing\">
        <div class=\"col-lg-12\">
\t\t<center>
          <h2>Kategrie:</h2>
          <p>Wybierz kategorię, która Cię interesuje</p>
\t\t </center>
\t\t</div>
\t</div>
\t  
\t  <div class = \"col-sm-4 col-md-12\">
      <a href = \"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("projekt_subcategory");
        echo "\" class = \"thumbnail\">
         <img src = \"http://www.kimballstock.com/pix/AUT/06/AUT-06-IZ0027-01P.JPG\" alt = \"Generic placeholder thumbnail\">
           <p>Sportowe</p>
                 
        </a>
   </div>
   
   <div class = \"col-sm-6 col-md-12\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg\" alt = \"Generic placeholder thumbnail\">
           <p>Jeepy</p>
                 
        </a>
   </div>
   
   <div class = \"col-sm-6 col-md-12\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.auto8.pl/images/volkswagen-passat-bluemotion_black_12.jpg\" alt = \"Generic placeholder thumbnail\">
           <p>Sedan</p>
                 
        </a>
   </div>
   
   

      </div>

    </div>
";
        
        $__internal_be08a2b82a5cdd1a6466c1234386c8583300ae655f33c795aa42a51232a81d34->leave($__internal_be08a2b82a5cdd1a6466c1234386c8583300ae655f33c795aa42a51232a81d34_prof);

    }

    public function getTemplateName()
    {
        return "ProjektBundle:Kategorie:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  79 => 22,  73 => 21,  59 => 15,  51 => 10,  47 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "ProjektBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block menu %}*/
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*         <nav>*/
/*           <ul class="nav nav-pills pull-right">*/
/*             <li role="presentation" ><a href="{{path('projekt_homepage')}}">Główna</a></li>*/
/*             <li role="presentation" class="active"><a href="{{path('projekt_category')}}">Kategorie</a></li>*/
/*             <li role="presentation"><a href="#">Rejestracja</a></li>*/
/*             <li role="presentation"><a href="#">Logowanie</a></li>*/
/*           </ul>*/
/*         </nav>*/
/*         <h3><a href="{{path('projekt_homepage')}}"><img id="logo" src="{{asset('bundles/projekt/css/images/logo.png')}}"></a></h3>*/
/*       </div>*/
/*             <div class="row">*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* */
/* */
/* <div class="row">*/
/* 	  <div class="row marketing">*/
/*         <div class="col-lg-12">*/
/* 		<center>*/
/*           <h2>Kategrie:</h2>*/
/*           <p>Wybierz kategorię, która Cię interesuje</p>*/
/* 		 </center>*/
/* 		</div>*/
/* 	</div>*/
/* 	  */
/* 	  <div class = "col-sm-4 col-md-12">*/
/*       <a href = "{{path('projekt_subcategory')}}" class = "thumbnail">*/
/*          <img src = "http://www.kimballstock.com/pix/AUT/06/AUT-06-IZ0027-01P.JPG" alt = "Generic placeholder thumbnail">*/
/*            <p>Sportowe</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-12">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg" alt = "Generic placeholder thumbnail">*/
/*            <p>Jeepy</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-12">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.auto8.pl/images/volkswagen-passat-bluemotion_black_12.jpg" alt = "Generic placeholder thumbnail">*/
/*            <p>Sedan</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    */
/* */
/*       </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
