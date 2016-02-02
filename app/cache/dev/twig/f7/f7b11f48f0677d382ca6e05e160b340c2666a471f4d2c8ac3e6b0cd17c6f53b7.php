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
        $__internal_099d064a5cdb60bcd5f3fcf32e63508534a498196ba53019962e674065841727 = $this->env->getExtension("native_profiler");
        $__internal_099d064a5cdb60bcd5f3fcf32e63508534a498196ba53019962e674065841727->enter($__internal_099d064a5cdb60bcd5f3fcf32e63508534a498196ba53019962e674065841727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099d064a5cdb60bcd5f3fcf32e63508534a498196ba53019962e674065841727->leave($__internal_099d064a5cdb60bcd5f3fcf32e63508534a498196ba53019962e674065841727_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6dd7ac1f25697695657a04daec8dbfdded281920639bac52bfb7d7ba128c683 = $this->env->getExtension("native_profiler");
        $__internal_e6dd7ac1f25697695657a04daec8dbfdded281920639bac52bfb7d7ba128c683->enter($__internal_e6dd7ac1f25697695657a04daec8dbfdded281920639bac52bfb7d7ba128c683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e6dd7ac1f25697695657a04daec8dbfdded281920639bac52bfb7d7ba128c683->leave($__internal_e6dd7ac1f25697695657a04daec8dbfdded281920639bac52bfb7d7ba128c683_prof);

    }

    // line 4
    public function block_glowna($context, array $blocks = array())
    {
        $__internal_2223713354475a89fbb9e75b6aa048f3e648b453f3057aa3c8d6df97488af414 = $this->env->getExtension("native_profiler");
        $__internal_2223713354475a89fbb9e75b6aa048f3e648b453f3057aa3c8d6df97488af414->enter($__internal_2223713354475a89fbb9e75b6aa048f3e648b453f3057aa3c8d6df97488af414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "glowna"));

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
        
        $__internal_2223713354475a89fbb9e75b6aa048f3e648b453f3057aa3c8d6df97488af414->leave($__internal_2223713354475a89fbb9e75b6aa048f3e648b453f3057aa3c8d6df97488af414_prof);

    }

    // line 25
    public function block_samochodyWszystkie($context, array $blocks = array())
    {
        $__internal_a3f561f6a3dc25b8bac7e66dfeb6cb0711a949a9dfbbc9b8cdc8aa7f84d36f46 = $this->env->getExtension("native_profiler");
        $__internal_a3f561f6a3dc25b8bac7e66dfeb6cb0711a949a9dfbbc9b8cdc8aa7f84d36f46->enter($__internal_a3f561f6a3dc25b8bac7e66dfeb6cb0711a949a9dfbbc9b8cdc8aa7f84d36f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyWszystkie"));

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
        
        $__internal_a3f561f6a3dc25b8bac7e66dfeb6cb0711a949a9dfbbc9b8cdc8aa7f84d36f46->leave($__internal_a3f561f6a3dc25b8bac7e66dfeb6cb0711a949a9dfbbc9b8cdc8aa7f84d36f46_prof);

    }

    // line 113
    public function block_najczesciejWypozyczane($context, array $blocks = array())
    {
        $__internal_08740332e52178ee1474ef1ea8ab9c7c858f9fc534ee2191c7618d37a4a5b29c = $this->env->getExtension("native_profiler");
        $__internal_08740332e52178ee1474ef1ea8ab9c7c858f9fc534ee2191c7618d37a4a5b29c->enter($__internal_08740332e52178ee1474ef1ea8ab9c7c858f9fc534ee2191c7618d37a4a5b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "najczesciejWypozyczane"));

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
        
        $__internal_08740332e52178ee1474ef1ea8ab9c7c858f9fc534ee2191c7618d37a4a5b29c->leave($__internal_08740332e52178ee1474ef1ea8ab9c7c858f9fc534ee2191c7618d37a4a5b29c_prof);

    }

    // line 154
    public function block_samochodyOceniane($context, array $blocks = array())
    {
        $__internal_4fda85f2a35d01a23f71bde60fdf71b7a10d8d902f49ae11ab88c053f4baa18e = $this->env->getExtension("native_profiler");
        $__internal_4fda85f2a35d01a23f71bde60fdf71b7a10d8d902f49ae11ab88c053f4baa18e->enter($__internal_4fda85f2a35d01a23f71bde60fdf71b7a10d8d902f49ae11ab88c053f4baa18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyOceniane"));

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
        
        $__internal_4fda85f2a35d01a23f71bde60fdf71b7a10d8d902f49ae11ab88c053f4baa18e->leave($__internal_4fda85f2a35d01a23f71bde60fdf71b7a10d8d902f49ae11ab88c053f4baa18e_prof);

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
