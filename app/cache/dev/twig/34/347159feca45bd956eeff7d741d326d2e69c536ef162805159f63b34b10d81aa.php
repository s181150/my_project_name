<?php

/* base.html.twig */
class __TwigTemplate_d481790f466b904024790e723b9cd413507f5e725f0857938bf62d936ae1528e extends Twig_Template
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
        $__internal_01f97411ae38706fc3d4c3b81a96dc1629fd66c671d675198a40b80d7cf36897 = $this->env->getExtension("native_profiler");
        $__internal_01f97411ae38706fc3d4c3b81a96dc1629fd66c671d675198a40b80d7cf36897->enter($__internal_01f97411ae38706fc3d4c3b81a96dc1629fd66c671d675198a40b80d7cf36897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01f97411ae38706fc3d4c3b81a96dc1629fd66c671d675198a40b80d7cf36897->leave($__internal_01f97411ae38706fc3d4c3b81a96dc1629fd66c671d675198a40b80d7cf36897_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6c0492c45c02afc80c9fa8c03c8b43ac9117611ecf992854d23e808b44f0928 = $this->env->getExtension("native_profiler");
        $__internal_a6c0492c45c02afc80c9fa8c03c8b43ac9117611ecf992854d23e808b44f0928->enter($__internal_a6c0492c45c02afc80c9fa8c03c8b43ac9117611ecf992854d23e808b44f0928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a6c0492c45c02afc80c9fa8c03c8b43ac9117611ecf992854d23e808b44f0928->leave($__internal_a6c0492c45c02afc80c9fa8c03c8b43ac9117611ecf992854d23e808b44f0928_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85e5c9c8a7a65793426b7cc18650311334dc6ce12b9ce2405c0a677b30436d8d = $this->env->getExtension("native_profiler");
        $__internal_85e5c9c8a7a65793426b7cc18650311334dc6ce12b9ce2405c0a677b30436d8d->enter($__internal_85e5c9c8a7a65793426b7cc18650311334dc6ce12b9ce2405c0a677b30436d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85e5c9c8a7a65793426b7cc18650311334dc6ce12b9ce2405c0a677b30436d8d->leave($__internal_85e5c9c8a7a65793426b7cc18650311334dc6ce12b9ce2405c0a677b30436d8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08e7bda71ad78298d806713a2095a9dcb5974b7647618c1bec1626ceddf6d0d2 = $this->env->getExtension("native_profiler");
        $__internal_08e7bda71ad78298d806713a2095a9dcb5974b7647618c1bec1626ceddf6d0d2->enter($__internal_08e7bda71ad78298d806713a2095a9dcb5974b7647618c1bec1626ceddf6d0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08e7bda71ad78298d806713a2095a9dcb5974b7647618c1bec1626ceddf6d0d2->leave($__internal_08e7bda71ad78298d806713a2095a9dcb5974b7647618c1bec1626ceddf6d0d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1fb5a9f8f1bd050df111d676d70e9f752c6ad705ed47186d7388683aedb58a3 = $this->env->getExtension("native_profiler");
        $__internal_f1fb5a9f8f1bd050df111d676d70e9f752c6ad705ed47186d7388683aedb58a3->enter($__internal_f1fb5a9f8f1bd050df111d676d70e9f752c6ad705ed47186d7388683aedb58a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1fb5a9f8f1bd050df111d676d70e9f752c6ad705ed47186d7388683aedb58a3->leave($__internal_f1fb5a9f8f1bd050df111d676d70e9f752c6ad705ed47186d7388683aedb58a3_prof);

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
