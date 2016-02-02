<?php

/* ProjektBundle::index.html.twig */
class __TwigTemplate_4763d24d2dc253d821535344285bdb4d2009138757c0890d4f416b3c51ed3be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjektBundle::layout.html.twig", "ProjektBundle::index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'glowna' => array($this, 'block_glowna'),
            'samochodyWszystkie' => array($this, 'block_samochodyWszystkie'),
            'najczesciejWypozyczane' => array($this, 'block_najczesciejWypozyczane'),
            'samochodyOceniane' => array($this, 'block_samochodyOceniane'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjektBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de622d9a227f09be1b1cb8c09d214cbb4c77397da151f2e88825f8f456ca919 = $this->env->getExtension("native_profiler");
        $__internal_2de622d9a227f09be1b1cb8c09d214cbb4c77397da151f2e88825f8f456ca919->enter($__internal_2de622d9a227f09be1b1cb8c09d214cbb4c77397da151f2e88825f8f456ca919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de622d9a227f09be1b1cb8c09d214cbb4c77397da151f2e88825f8f456ca919->leave($__internal_2de622d9a227f09be1b1cb8c09d214cbb4c77397da151f2e88825f8f456ca919_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_40b4eee9069f218b87afeda285d1d450ad25a823e44025f8a84ddb27b5596836 = $this->env->getExtension("native_profiler");
        $__internal_40b4eee9069f218b87afeda285d1d450ad25a823e44025f8a84ddb27b5596836->enter($__internal_40b4eee9069f218b87afeda285d1d450ad25a823e44025f8a84ddb27b5596836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        ";
        $this->displayBlock('glowna', $context, $blocks);
        // line 25
        echo "      ";
        $this->displayBlock('samochodyWszystkie', $context, $blocks);
        // line 112
        echo "    
    ";
        // line 113
        $this->displayBlock('najczesciejWypozyczane', $context, $blocks);
        // line 153
        echo "
     ";
        // line 154
        $this->displayBlock('samochodyOceniane', $context, $blocks);
        // line 199
        echo "    ";
        
        $__internal_40b4eee9069f218b87afeda285d1d450ad25a823e44025f8a84ddb27b5596836->leave($__internal_40b4eee9069f218b87afeda285d1d450ad25a823e44025f8a84ddb27b5596836_prof);

    }

    // line 4
    public function block_glowna($context, array $blocks = array())
    {
        $__internal_f2cbdbb1e38aacb4046a1b7131f71cea239bcd911a190a729f58480f43a76381 = $this->env->getExtension("native_profiler");
        $__internal_f2cbdbb1e38aacb4046a1b7131f71cea239bcd911a190a729f58480f43a76381->enter($__internal_f2cbdbb1e38aacb4046a1b7131f71cea239bcd911a190a729f58480f43a76381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "glowna"));

        // line 5
        echo "        <center>
            <div class=\"jumbotron\">
    
  <table>
  
    <tr>
    
  <td width=\"55%\">
      <center><h1>Potrzebujesz samochodu?</h1></center>
  </td>
  
  <td>
        <center><p><a class=\"btn btn-xlarge btn-success\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" role=\"button\">Zaloguj się</a></p></center>
  </td>
    </tr>
  </table>
  
      </div>

      ";
        
        $__internal_f2cbdbb1e38aacb4046a1b7131f71cea239bcd911a190a729f58480f43a76381->leave($__internal_f2cbdbb1e38aacb4046a1b7131f71cea239bcd911a190a729f58480f43a76381_prof);

    }

    // line 25
    public function block_samochodyWszystkie($context, array $blocks = array())
    {
        $__internal_5433e3ebf93ab98039bf34b9cd76660bafbb674cae5a93a26439ee6c9ca1ab2b = $this->env->getExtension("native_profiler");
        $__internal_5433e3ebf93ab98039bf34b9cd76660bafbb674cae5a93a26439ee6c9ca1ab2b->enter($__internal_5433e3ebf93ab98039bf34b9cd76660bafbb674cae5a93a26439ee6c9ca1ab2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyWszystkie"));

        // line 26
        echo "  <div class=\"row\">
    <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <h1>Nasze samochody:</h1>
          <p>Poniższe samochody dostępne są do Twojej dyspozycji!</p>
    </div>
  </div>
    
    <div class = \"col-sm-6 col-md-3\">
      <a href = \"subpage.php\" class = \"thumbnail\">
         <img src = \"http://bestcarmag.com/sites/default/files/9295571volkswagen-golf-02.jpg\" alt = \"Generic placeholder thumbnail\">
      
      <p>Voklswagen Golf</p>
                 
        </a> 
   </div>
   
   <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg\" alt = \"Generic placeholder thumbnail\">
       <p>BMW X6</p>
                 
        </a> 
   </div>
   
   <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.kimballstock.com/pix/AUT/06/AUT-06-IZ0027-01P.JPG\" alt = \"Generic placeholder thumbnail\">
       <p>Aston Martin DB9</p>
                 
        </a> 
   </div>
   
   <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.bristolstreet.co.uk/new/vertu/car/alfa-romeo/giulietta/giulietta%5E640x480%5E.jpg\" alt = \"Generic placeholder thumbnail\">
       <p>Alfa Romeo Gulietta</p>
                 
        </a> 
   </div>
   
      <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.auto8.pl/images/volkswagen-passat-bluemotion_black_12.jpg\" alt = \"Generic placeholder thumbnail\">
      <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
      <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.thepricelist.in/wp-content/uploads/2014/10/fiat_car-brand-price-list-in-india.jpg\" alt = \"Generic placeholder thumbnail\">
      <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
      <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://1.bp.blogspot.com/-VdAcMhAUTX8/UeLgy279OGI/AAAAAAAAJDQ/0N1IDk76CEA/s1600/Mercedes-Benz-S600-Sedan-12.jpg\" alt = \"Generic placeholder thumbnail\">
      <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>

      <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.jacksonsci.com/newcar_images/detail_swift-sport.jpg\" alt = \"Generic placeholder thumbnail\">
      <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
      <div class = \"col-sm-6 col-md-3\">
      <a href = \"#\" class = \"thumbnail\">
         <img src = \"http://www.kimballstock.com/pix/AUT/45/AUT-45-IZ0234-01P.JPG\" alt = \"Generic placeholder thumbnail\">
      <p>Alfa Romeo Gulietta</p>
                 
        </a>
   </div>
   
      </div>
    
    
    <br>
    ";
        
        $__internal_5433e3ebf93ab98039bf34b9cd76660bafbb674cae5a93a26439ee6c9ca1ab2b->leave($__internal_5433e3ebf93ab98039bf34b9cd76660bafbb674cae5a93a26439ee6c9ca1ab2b_prof);

    }

    // line 113
    public function block_najczesciejWypozyczane($context, array $blocks = array())
    {
        $__internal_9d2dd8bcc7df993d3bf40dfd77c36a38499a01007b5ad6bc9672f597e2ace16a = $this->env->getExtension("native_profiler");
        $__internal_9d2dd8bcc7df993d3bf40dfd77c36a38499a01007b5ad6bc9672f597e2ace16a->enter($__internal_9d2dd8bcc7df993d3bf40dfd77c36a38499a01007b5ad6bc9672f597e2ace16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "najczesciejWypozyczane"));

        // line 114
        echo "    <div class=\"row\">
    <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <h2>Najczęściej wypożyczane samochody:</h2>
          <p>Poniższe samochody użytkownicy wybierali najczęściej!</p>
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
    
    
    <br>
    
    ";
        
        $__internal_9d2dd8bcc7df993d3bf40dfd77c36a38499a01007b5ad6bc9672f597e2ace16a->leave($__internal_9d2dd8bcc7df993d3bf40dfd77c36a38499a01007b5ad6bc9672f597e2ace16a_prof);

    }

    // line 154
    public function block_samochodyOceniane($context, array $blocks = array())
    {
        $__internal_0655a6533265e2747992a6c9686449e1b056f66ddbd9ede00e4b2700ea24f362 = $this->env->getExtension("native_profiler");
        $__internal_0655a6533265e2747992a6c9686449e1b056f66ddbd9ede00e4b2700ea24f362->enter($__internal_0655a6533265e2747992a6c9686449e1b056f66ddbd9ede00e4b2700ea24f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyOceniane"));

        // line 155
        echo "    <div class=\"row\">
    <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <h2>Najczęściej oceniane samochody:</h2>
          <p>Poniższe samochody użytkownicy oceniali najczęściej!</p>
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
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_0655a6533265e2747992a6c9686449e1b056f66ddbd9ede00e4b2700ea24f362->leave($__internal_0655a6533265e2747992a6c9686449e1b056f66ddbd9ede00e4b2700ea24f362_prof);

    }

    public function getTemplateName()
    {
        return "ProjektBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 197,  300 => 196,  257 => 155,  251 => 154,  206 => 114,  200 => 113,  108 => 26,  102 => 25,  87 => 17,  73 => 5,  67 => 4,  60 => 199,  58 => 154,  55 => 153,  53 => 113,  50 => 112,  47 => 25,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "ProjektBundle::layout.html.twig" %}*/
/* */
/*  {% block content %}*/
/*         {% block glowna %}*/
/*         <center>*/
/*             <div class="jumbotron">*/
/*     */
/*   <table>*/
/*   */
/*     <tr>*/
/*     */
/*   <td width="55%">*/
/*       <center><h1>Potrzebujesz samochodu?</h1></center>*/
/*   </td>*/
/*   */
/*   <td>*/
/*         <center><p><a class="btn btn-xlarge btn-success" href="{{path('fos_user_security_login')}}" role="button">Zaloguj się</a></p></center>*/
/*   </td>*/
/*     </tr>*/
/*   </table>*/
/*   */
/*       </div>*/
/* */
/*       {% endblock %}*/
/*       {% block samochodyWszystkie %}*/
/*   <div class="row">*/
/*     <div class="row marketing">*/
/*         <div class="col-lg-6">*/
/*           <h1>Nasze samochody:</h1>*/
/*           <p>Poniższe samochody dostępne są do Twojej dyspozycji!</p>*/
/*     </div>*/
/*   </div>*/
/*     */
/*     <div class = "col-sm-6 col-md-3">*/
/*       <a href = "subpage.php" class = "thumbnail">*/
/*          <img src = "http://bestcarmag.com/sites/default/files/9295571volkswagen-golf-02.jpg" alt = "Generic placeholder thumbnail">*/
/*       */
/*       <p>Voklswagen Golf</p>*/
/*                  */
/*         </a> */
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.everythingmotoring.com/DataEditorUploads/BMW%20X6-Northern-Ireland.jpg" alt = "Generic placeholder thumbnail">*/
/*        <p>BMW X6</p>*/
/*                  */
/*         </a> */
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.kimballstock.com/pix/AUT/06/AUT-06-IZ0027-01P.JPG" alt = "Generic placeholder thumbnail">*/
/*        <p>Aston Martin DB9</p>*/
/*                  */
/*         </a> */
/*    </div>*/
/*    */
/*    <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.bristolstreet.co.uk/new/vertu/car/alfa-romeo/giulietta/giulietta%5E640x480%5E.jpg" alt = "Generic placeholder thumbnail">*/
/*        <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a> */
/*    </div>*/
/*    */
/*       <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.auto8.pl/images/volkswagen-passat-bluemotion_black_12.jpg" alt = "Generic placeholder thumbnail">*/
/*       <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*       <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.thepricelist.in/wp-content/uploads/2014/10/fiat_car-brand-price-list-in-india.jpg" alt = "Generic placeholder thumbnail">*/
/*       <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*       <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://1.bp.blogspot.com/-VdAcMhAUTX8/UeLgy279OGI/AAAAAAAAJDQ/0N1IDk76CEA/s1600/Mercedes-Benz-S600-Sedan-12.jpg" alt = "Generic placeholder thumbnail">*/
/*       <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/* */
/*       <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.jacksonsci.com/newcar_images/detail_swift-sport.jpg" alt = "Generic placeholder thumbnail">*/
/*       <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*       <div class = "col-sm-6 col-md-3">*/
/*       <a href = "#" class = "thumbnail">*/
/*          <img src = "http://www.kimballstock.com/pix/AUT/45/AUT-45-IZ0234-01P.JPG" alt = "Generic placeholder thumbnail">*/
/*       <p>Alfa Romeo Gulietta</p>*/
/*                  */
/*         </a>*/
/*    </div>*/
/*    */
/*       </div>*/
/*     */
/*     */
/*     <br>*/
/*     {% endblock %}*/
/*     */
/*     {% block najczesciejWypozyczane %}*/
/*     <div class="row">*/
/*     <div class="row marketing">*/
/*         <div class="col-lg-6">*/
/*           <h2>Najczęściej wypożyczane samochody:</h2>*/
/*           <p>Poniższe samochody użytkownicy wybierali najczęściej!</p>*/
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
/*       </div>*/
/*     */
/*     */
/*     <br>*/
/*     */
/*     {% endblock %}*/
/* */
/*      {% block samochodyOceniane %}*/
/*     <div class="row">*/
/*     <div class="row marketing">*/
/*         <div class="col-lg-6">*/
/*           <h2>Najczęściej oceniane samochody:</h2>*/
/*           <p>Poniższe samochody użytkownicy oceniali najczęściej!</p>*/
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
/*       {% endblock %}*/
/*     {% endblock %}*/
