<?php

/* ProjektBundle:Kategorie:subcategory.html.twig */
class __TwigTemplate_a9be3dd3917550b9ef756ddfcea56dee6e4de7e4c4df35390b702c359303bb11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjektBundle:Kategorie:category.html.twig", "ProjektBundle:Kategorie:subcategory.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjektBundle:Kategorie:category.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5f002e9b2def19ff79d1af93b3cb51ebf0a2e4675f7f28a18aac7ddbd309e80 = $this->env->getExtension("native_profiler");
        $__internal_f5f002e9b2def19ff79d1af93b3cb51ebf0a2e4675f7f28a18aac7ddbd309e80->enter($__internal_f5f002e9b2def19ff79d1af93b3cb51ebf0a2e4675f7f28a18aac7ddbd309e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle:Kategorie:subcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f002e9b2def19ff79d1af93b3cb51ebf0a2e4675f7f28a18aac7ddbd309e80->leave($__internal_f5f002e9b2def19ff79d1af93b3cb51ebf0a2e4675f7f28a18aac7ddbd309e80_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_68fe1b830e6a89c295f4b187e8ee0c9e982e7dd8e8641a55ad64c33ce5246b8a = $this->env->getExtension("native_profiler");
        $__internal_68fe1b830e6a89c295f4b187e8ee0c9e982e7dd8e8641a55ad64c33ce5246b8a->enter($__internal_68fe1b830e6a89c295f4b187e8ee0c9e982e7dd8e8641a55ad64c33ce5246b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
\t   <div class=\"row\">
    <div class=\"row marketing\">
        <div class=\"col-lg-6\">
        <center><br><br>
          <h1>Samochody sportowe:</h1>
      \t</center>
    </div>
  </div>
    
    <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://bestcarmag.com/sites/default/files/9295571volkswagen-golf-02.jpg\" alt = \"Generic placeholder thumbnail\">
           <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
   <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg\" alt = \"Generic placeholder thumbnail\">
           <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
   <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.kimballstock.com/pix/AUT/44/AUT-44-IZ0286-01P.JPG\" alt = \"Generic placeholder thumbnail\">
           <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
   

      </div>
 
    </div>
  <br>
  

</div>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_68fe1b830e6a89c295f4b187e8ee0c9e982e7dd8e8641a55ad64c33ce5246b8a->leave($__internal_68fe1b830e6a89c295f4b187e8ee0c9e982e7dd8e8641a55ad64c33ce5246b8a_prof);

    }

    public function getTemplateName()
    {
        return "ProjektBundle:Kategorie:subcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  85 => 48,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "ProjektBundle:Kategorie:category.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* 	   <div class="row">*/
/*     <div class="row marketing">*/
/*         <div class="col-lg-6">*/
/*         <center><br><br>*/
/*           <h1>Samochody sportowe:</h1>*/
/*       	</center>*/
/*     </div>*/
/*   </div>*/
/*     */
/*     <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://bestcarmag.com/sites/default/files/9295571volkswagen-golf-02.jpg" alt = "Generic placeholder thumbnail">*/
/*            <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg" alt = "Generic placeholder thumbnail">*/
/*            <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.kimballstock.com/pix/AUT/44/AUT-44-IZ0286-01P.JPG" alt = "Generic placeholder thumbnail">*/
/*            <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*    */
/* */
/*       </div>*/
/*  */
/*     </div>*/
/*   <br>*/
/*   */
/* */
/* </div>*/
/*     <script src="{{asset('bundles/projekt/js/jquery.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/projekt/js/bootstrap.min.js')}}"></script>*/
/* */
/* */
/* {% endblock %}*/
