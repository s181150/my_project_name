<?php

/* base.html.twig */
class __TwigTemplate_a83ca57cf88a6a00f76c21f07a5c738e70152c13886ec43be048e97a2f8d7e7b extends Twig_Template
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
        $__internal_155b79b70d248d2739333443b4819b1f06681588109de3790c463e73ae1ab77a = $this->env->getExtension("native_profiler");
        $__internal_155b79b70d248d2739333443b4819b1f06681588109de3790c463e73ae1ab77a->enter($__internal_155b79b70d248d2739333443b4819b1f06681588109de3790c463e73ae1ab77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_155b79b70d248d2739333443b4819b1f06681588109de3790c463e73ae1ab77a->leave($__internal_155b79b70d248d2739333443b4819b1f06681588109de3790c463e73ae1ab77a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab3113593be3d0f90a4724b9f83f65ae07dc0dc1e2128d71bd27adaf2803e62d = $this->env->getExtension("native_profiler");
        $__internal_ab3113593be3d0f90a4724b9f83f65ae07dc0dc1e2128d71bd27adaf2803e62d->enter($__internal_ab3113593be3d0f90a4724b9f83f65ae07dc0dc1e2128d71bd27adaf2803e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab3113593be3d0f90a4724b9f83f65ae07dc0dc1e2128d71bd27adaf2803e62d->leave($__internal_ab3113593be3d0f90a4724b9f83f65ae07dc0dc1e2128d71bd27adaf2803e62d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e06d926ef872861d86b72196354a09859ede54fc96241cb135c1cdce2a3d022b = $this->env->getExtension("native_profiler");
        $__internal_e06d926ef872861d86b72196354a09859ede54fc96241cb135c1cdce2a3d022b->enter($__internal_e06d926ef872861d86b72196354a09859ede54fc96241cb135c1cdce2a3d022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e06d926ef872861d86b72196354a09859ede54fc96241cb135c1cdce2a3d022b->leave($__internal_e06d926ef872861d86b72196354a09859ede54fc96241cb135c1cdce2a3d022b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f463c9c2f6ee6441366275ae5c8cf67750737d8c97ca309f918b3f742a540418 = $this->env->getExtension("native_profiler");
        $__internal_f463c9c2f6ee6441366275ae5c8cf67750737d8c97ca309f918b3f742a540418->enter($__internal_f463c9c2f6ee6441366275ae5c8cf67750737d8c97ca309f918b3f742a540418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f463c9c2f6ee6441366275ae5c8cf67750737d8c97ca309f918b3f742a540418->leave($__internal_f463c9c2f6ee6441366275ae5c8cf67750737d8c97ca309f918b3f742a540418_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1955cf44146674e2f9c611ea0d599e5ca08e83c0766867b0b7e9cba52f3393c = $this->env->getExtension("native_profiler");
        $__internal_a1955cf44146674e2f9c611ea0d599e5ca08e83c0766867b0b7e9cba52f3393c->enter($__internal_a1955cf44146674e2f9c611ea0d599e5ca08e83c0766867b0b7e9cba52f3393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1955cf44146674e2f9c611ea0d599e5ca08e83c0766867b0b7e9cba52f3393c->leave($__internal_a1955cf44146674e2f9c611ea0d599e5ca08e83c0766867b0b7e9cba52f3393c_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
