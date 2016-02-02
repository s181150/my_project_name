<?php

/* ::base.html.twig */
class __TwigTemplate_b86fbc0c4b59e44e5ecd37084db8d2bc495fb1c785a00beb7b05f6617425284f extends Twig_Template
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
        $__internal_b14064276a62a3b12fe652545350913fffbeb31a09cce792a2552c2a0bba85c8 = $this->env->getExtension("native_profiler");
        $__internal_b14064276a62a3b12fe652545350913fffbeb31a09cce792a2552c2a0bba85c8->enter($__internal_b14064276a62a3b12fe652545350913fffbeb31a09cce792a2552c2a0bba85c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b14064276a62a3b12fe652545350913fffbeb31a09cce792a2552c2a0bba85c8->leave($__internal_b14064276a62a3b12fe652545350913fffbeb31a09cce792a2552c2a0bba85c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_500f3808f87bf01d3130db3561f08115ba08a08f86aec3b7b2214e9452e0697a = $this->env->getExtension("native_profiler");
        $__internal_500f3808f87bf01d3130db3561f08115ba08a08f86aec3b7b2214e9452e0697a->enter($__internal_500f3808f87bf01d3130db3561f08115ba08a08f86aec3b7b2214e9452e0697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_500f3808f87bf01d3130db3561f08115ba08a08f86aec3b7b2214e9452e0697a->leave($__internal_500f3808f87bf01d3130db3561f08115ba08a08f86aec3b7b2214e9452e0697a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4afb0336cda99cc93ef4971f87a14c0f566b2ec4e048fb39053bf8f3d7ea2039 = $this->env->getExtension("native_profiler");
        $__internal_4afb0336cda99cc93ef4971f87a14c0f566b2ec4e048fb39053bf8f3d7ea2039->enter($__internal_4afb0336cda99cc93ef4971f87a14c0f566b2ec4e048fb39053bf8f3d7ea2039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4afb0336cda99cc93ef4971f87a14c0f566b2ec4e048fb39053bf8f3d7ea2039->leave($__internal_4afb0336cda99cc93ef4971f87a14c0f566b2ec4e048fb39053bf8f3d7ea2039_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffed1970143edd7203e43e3f888f6ab2342031756ca8cff8b51c93d9e21423c1 = $this->env->getExtension("native_profiler");
        $__internal_ffed1970143edd7203e43e3f888f6ab2342031756ca8cff8b51c93d9e21423c1->enter($__internal_ffed1970143edd7203e43e3f888f6ab2342031756ca8cff8b51c93d9e21423c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffed1970143edd7203e43e3f888f6ab2342031756ca8cff8b51c93d9e21423c1->leave($__internal_ffed1970143edd7203e43e3f888f6ab2342031756ca8cff8b51c93d9e21423c1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25b74932b6106924d67f07868afc5667fc7ba5de696b580fe150a1a4e360dd09 = $this->env->getExtension("native_profiler");
        $__internal_25b74932b6106924d67f07868afc5667fc7ba5de696b580fe150a1a4e360dd09->enter($__internal_25b74932b6106924d67f07868afc5667fc7ba5de696b580fe150a1a4e360dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25b74932b6106924d67f07868afc5667fc7ba5de696b580fe150a1a4e360dd09->leave($__internal_25b74932b6106924d67f07868afc5667fc7ba5de696b580fe150a1a4e360dd09_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
