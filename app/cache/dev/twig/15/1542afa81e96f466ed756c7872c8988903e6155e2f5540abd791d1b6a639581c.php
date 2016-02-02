<?php

/* ProjektBundle::layout.html.twig */
class __TwigTemplate_185feedbb4c40eb0939ad1557331e9743fa469c1ec34736ebe632901e883eb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'glowna' => array($this, 'block_glowna'),
            'samochodyWszystkie' => array($this, 'block_samochodyWszystkie'),
            'najczesciejWypozyczane' => array($this, 'block_najczesciejWypozyczane'),
            'samochodyOceniane' => array($this, 'block_samochodyOceniane'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4288f229cb7bb35c143e6b75ece969fa4906753129dbec846fd0985b6bf7aa2 = $this->env->getExtension("native_profiler");
        $__internal_f4288f229cb7bb35c143e6b75ece969fa4906753129dbec846fd0985b6bf7aa2->enter($__internal_f4288f229cb7bb35c143e6b75ece969fa4906753129dbec846fd0985b6bf7aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle::layout.html.twig"));

        // line 1
        echo "<html lang=\"en\">

  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Wypożyczalnia samochodów</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body>
  ";
        // line 12
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "



      </div>
            <footer class=\"footer\">
    <center>
        <p>&copy; Danisz Mydlarz<br/>
    Sebastian Kuśnierz</p>
    </center>
      </footer>
</div>
    </div>
";
        
        $__internal_f4288f229cb7bb35c143e6b75ece969fa4906753129dbec846fd0985b6bf7aa2->leave($__internal_f4288f229cb7bb35c143e6b75ece969fa4906753129dbec846fd0985b6bf7aa2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1566734fbfadddf8dea0ba83466d6b38208dab319f0b1913c5891d4ae8b7d10 = $this->env->getExtension("native_profiler");
        $__internal_d1566734fbfadddf8dea0ba83466d6b38208dab319f0b1913c5891d4ae8b7d10->enter($__internal_d1566734fbfadddf8dea0ba83466d6b38208dab319f0b1913c5891d4ae8b7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills pull-right\">
            <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Główna</a></li>
\t\t\t      <li role=\"presentation\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("projekt_category");
        echo "\">Kategorie</a></li>
            <li role=\"presentation\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Rejestracja</a></li>
            <li role=\"presentation\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Logowanie</a></li>
          </ul>
        </nav>
        <h3><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("projekt_homepage");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/projekt/css/images/logo.png"), "html", null, true);
        echo "\"></a></h3>
      </div>
            <div class=\"row\">
   ";
        
        $__internal_d1566734fbfadddf8dea0ba83466d6b38208dab319f0b1913c5891d4ae8b7d10->leave($__internal_d1566734fbfadddf8dea0ba83466d6b38208dab319f0b1913c5891d4ae8b7d10_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_daaf97704eed7497c9008cc28bed98676fdc52c0b7f88e479c01ddaff90b275e = $this->env->getExtension("native_profiler");
        $__internal_daaf97704eed7497c9008cc28bed98676fdc52c0b7f88e479c01ddaff90b275e->enter($__internal_daaf97704eed7497c9008cc28bed98676fdc52c0b7f88e479c01ddaff90b275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('glowna', $context, $blocks);
        // line 32
        echo "            
                    ";
        // line 33
        $this->displayBlock('samochodyWszystkie', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('najczesciejWypozyczane', $context, $blocks);
        // line 44
        echo "  
        ";
        // line 45
        $this->displayBlock('samochodyOceniane', $context, $blocks);
        // line 50
        echo "            ";
        
        $__internal_daaf97704eed7497c9008cc28bed98676fdc52c0b7f88e479c01ddaff90b275e->leave($__internal_daaf97704eed7497c9008cc28bed98676fdc52c0b7f88e479c01ddaff90b275e_prof);

    }

    // line 29
    public function block_glowna($context, array $blocks = array())
    {
        $__internal_c7a56e615a2f020147c5ea88e04cae68aff8703ef055220f97fffe12e027b8f4 = $this->env->getExtension("native_profiler");
        $__internal_c7a56e615a2f020147c5ea88e04cae68aff8703ef055220f97fffe12e027b8f4->enter($__internal_c7a56e615a2f020147c5ea88e04cae68aff8703ef055220f97fffe12e027b8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "glowna"));

        // line 30
        echo "              <p>tekst</p>
            ";
        
        $__internal_c7a56e615a2f020147c5ea88e04cae68aff8703ef055220f97fffe12e027b8f4->leave($__internal_c7a56e615a2f020147c5ea88e04cae68aff8703ef055220f97fffe12e027b8f4_prof);

    }

    // line 33
    public function block_samochodyWszystkie($context, array $blocks = array())
    {
        $__internal_33d09b78edf506e9c4570adeddad33608fc962299c85a129c2c9604a9d2d33ac = $this->env->getExtension("native_profiler");
        $__internal_33d09b78edf506e9c4570adeddad33608fc962299c85a129c2c9604a9d2d33ac->enter($__internal_33d09b78edf506e9c4570adeddad33608fc962299c85a129c2c9604a9d2d33ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyWszystkie"));

        // line 34
        echo "        <center>
          <p>Tutaj będzie zawartość strony głównej</p>
          </center>
        ";
        
        $__internal_33d09b78edf506e9c4570adeddad33608fc962299c85a129c2c9604a9d2d33ac->leave($__internal_33d09b78edf506e9c4570adeddad33608fc962299c85a129c2c9604a9d2d33ac_prof);

    }

    // line 39
    public function block_najczesciejWypozyczane($context, array $blocks = array())
    {
        $__internal_1f3138e3dea41daa8e707769e9bfe8f3509a15035469bbeac6e56794f8cd2d57 = $this->env->getExtension("native_profiler");
        $__internal_1f3138e3dea41daa8e707769e9bfe8f3509a15035469bbeac6e56794f8cd2d57->enter($__internal_1f3138e3dea41daa8e707769e9bfe8f3509a15035469bbeac6e56794f8cd2d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "najczesciejWypozyczane"));

        // line 40
        echo "          <center>
            <p>Samochody najczęściej wypożyczane</p>
          </center>
        ";
        
        $__internal_1f3138e3dea41daa8e707769e9bfe8f3509a15035469bbeac6e56794f8cd2d57->leave($__internal_1f3138e3dea41daa8e707769e9bfe8f3509a15035469bbeac6e56794f8cd2d57_prof);

    }

    // line 45
    public function block_samochodyOceniane($context, array $blocks = array())
    {
        $__internal_cdec7c91374e40f90ecf0751f3116616b045b3fc39318a1f773960a0880fbd80 = $this->env->getExtension("native_profiler");
        $__internal_cdec7c91374e40f90ecf0751f3116616b045b3fc39318a1f773960a0880fbd80->enter($__internal_cdec7c91374e40f90ecf0751f3116616b045b3fc39318a1f773960a0880fbd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "samochodyOceniane"));

        // line 46
        echo "          <center>
            <p>Najczęściej oceniane</p>
          </center>
        ";
        
        $__internal_cdec7c91374e40f90ecf0751f3116616b045b3fc39318a1f773960a0880fbd80->leave($__internal_cdec7c91374e40f90ecf0751f3116616b045b3fc39318a1f773960a0880fbd80_prof);

    }

    public function getTemplateName()
    {
        return "ProjektBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 46,  191 => 45,  181 => 40,  175 => 39,  165 => 34,  159 => 33,  151 => 30,  145 => 29,  138 => 50,  136 => 45,  133 => 44,  131 => 39,  128 => 38,  126 => 33,  123 => 32,  121 => 29,  118 => 28,  112 => 27,  99 => 23,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  75 => 13,  69 => 12,  49 => 51,  46 => 27,  44 => 12,  37 => 8,  28 => 1,);
    }
}
/* <html lang="en">*/
/* */
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Wypożyczalnia samochodów</title>*/
/*     <link href="{{asset('bundles/projekt/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*   </head>*/
/* */
/*   <body>*/
/*   {% block menu %}*/
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*         <nav>*/
/*           <ul class="nav nav-pills pull-right">*/
/*             <li role="presentation" class="active"><a href="{{path('fos_user_security_login')}}">Główna</a></li>*/
/* 			      <li role="presentation"><a href="{{path('projekt_category')}}">Kategorie</a></li>*/
/*             <li role="presentation"><a href="{{path('fos_user_registration_register')}}">Rejestracja</a></li>*/
/*             <li role="presentation"><a href="{{path('fos_user_security_login')}}">Logowanie</a></li>*/
/*           </ul>*/
/*         </nav>*/
/*         <h3><a href="{{path('projekt_homepage')}}"><img id="logo" src="{{asset('bundles/projekt/css/images/logo.png')}}"></a></h3>*/
/*       </div>*/
/*             <div class="row">*/
/*    {% endblock %}*/
/*             {% block content %}*/
/* */
/*             {% block glowna %}*/
/*               <p>tekst</p>*/
/*             {% endblock %}*/
/*             */
/*                     {% block samochodyWszystkie %}*/
/*         <center>*/
/*           <p>Tutaj będzie zawartość strony głównej</p>*/
/*           </center>*/
/*         {% endblock %}*/
/* */
/*         {% block najczesciejWypozyczane %}*/
/*           <center>*/
/*             <p>Samochody najczęściej wypożyczane</p>*/
/*           </center>*/
/*         {% endblock %}*/
/*   */
/*         {% block samochodyOceniane %}*/
/*           <center>*/
/*             <p>Najczęściej oceniane</p>*/
/*           </center>*/
/*         {% endblock %}*/
/*             {% endblock %}*/
/* */
/* */
/* */
/* */
/*       </div>*/
/*             <footer class="footer">*/
/*     <center>*/
/*         <p>&copy; Danisz Mydlarz<br/>*/
/*     Sebastian Kuśnierz</p>*/
/*     </center>*/
/*       </footer>*/
/* </div>*/
/*     </div>*/
/* */
