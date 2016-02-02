<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62436efa56d3b41d63631678ae89efb72295158a525ae87447328f0a4b27e5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287b1ce4672f5204346022135ac52996bc02fa10a7bbbb61a4ba5e8cffef1699 = $this->env->getExtension("native_profiler");
        $__internal_287b1ce4672f5204346022135ac52996bc02fa10a7bbbb61a4ba5e8cffef1699->enter($__internal_287b1ce4672f5204346022135ac52996bc02fa10a7bbbb61a4ba5e8cffef1699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287b1ce4672f5204346022135ac52996bc02fa10a7bbbb61a4ba5e8cffef1699->leave($__internal_287b1ce4672f5204346022135ac52996bc02fa10a7bbbb61a4ba5e8cffef1699_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f192b1fa5b748ce70e461b52d9f89fdb976b2edafce4c9cde18aeabf45addb24 = $this->env->getExtension("native_profiler");
        $__internal_f192b1fa5b748ce70e461b52d9f89fdb976b2edafce4c9cde18aeabf45addb24->enter($__internal_f192b1fa5b748ce70e461b52d9f89fdb976b2edafce4c9cde18aeabf45addb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f192b1fa5b748ce70e461b52d9f89fdb976b2edafce4c9cde18aeabf45addb24->leave($__internal_f192b1fa5b748ce70e461b52d9f89fdb976b2edafce4c9cde18aeabf45addb24_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f5a57002a3eca3903122212d3d4b12a73bdd05e696ab90f221058fc63158ca = $this->env->getExtension("native_profiler");
        $__internal_f9f5a57002a3eca3903122212d3d4b12a73bdd05e696ab90f221058fc63158ca->enter($__internal_f9f5a57002a3eca3903122212d3d4b12a73bdd05e696ab90f221058fc63158ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9f5a57002a3eca3903122212d3d4b12a73bdd05e696ab90f221058fc63158ca->leave($__internal_f9f5a57002a3eca3903122212d3d4b12a73bdd05e696ab90f221058fc63158ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2c0a91e8f159d794fa33cf88dbabe09a2811c7c264a1aba408252045c53e5d = $this->env->getExtension("native_profiler");
        $__internal_ea2c0a91e8f159d794fa33cf88dbabe09a2811c7c264a1aba408252045c53e5d->enter($__internal_ea2c0a91e8f159d794fa33cf88dbabe09a2811c7c264a1aba408252045c53e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea2c0a91e8f159d794fa33cf88dbabe09a2811c7c264a1aba408252045c53e5d->leave($__internal_ea2c0a91e8f159d794fa33cf88dbabe09a2811c7c264a1aba408252045c53e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
