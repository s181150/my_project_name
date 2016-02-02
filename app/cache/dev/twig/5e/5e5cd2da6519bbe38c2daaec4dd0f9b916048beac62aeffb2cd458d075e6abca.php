<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dad8d074a1ba0c318a0ff31a85892ca916ce3f61d1959cd3be1b5501f4e5a54f extends Twig_Template
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
        $__internal_4fefbf7754db37dbe59dc82f7f5dda8789139a162b5f173b9213fd7ec5f8ac68 = $this->env->getExtension("native_profiler");
        $__internal_4fefbf7754db37dbe59dc82f7f5dda8789139a162b5f173b9213fd7ec5f8ac68->enter($__internal_4fefbf7754db37dbe59dc82f7f5dda8789139a162b5f173b9213fd7ec5f8ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fefbf7754db37dbe59dc82f7f5dda8789139a162b5f173b9213fd7ec5f8ac68->leave($__internal_4fefbf7754db37dbe59dc82f7f5dda8789139a162b5f173b9213fd7ec5f8ac68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f35984602a9e61d4f0b1dd041cc63a9bdd7bb2454cf7c5debf5f128aab414f43 = $this->env->getExtension("native_profiler");
        $__internal_f35984602a9e61d4f0b1dd041cc63a9bdd7bb2454cf7c5debf5f128aab414f43->enter($__internal_f35984602a9e61d4f0b1dd041cc63a9bdd7bb2454cf7c5debf5f128aab414f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f35984602a9e61d4f0b1dd041cc63a9bdd7bb2454cf7c5debf5f128aab414f43->leave($__internal_f35984602a9e61d4f0b1dd041cc63a9bdd7bb2454cf7c5debf5f128aab414f43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2460c9c325c0bc7642f26eca0f44a25612956de1a7c2c77aaed5ec78b3afb2c6 = $this->env->getExtension("native_profiler");
        $__internal_2460c9c325c0bc7642f26eca0f44a25612956de1a7c2c77aaed5ec78b3afb2c6->enter($__internal_2460c9c325c0bc7642f26eca0f44a25612956de1a7c2c77aaed5ec78b3afb2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2460c9c325c0bc7642f26eca0f44a25612956de1a7c2c77aaed5ec78b3afb2c6->leave($__internal_2460c9c325c0bc7642f26eca0f44a25612956de1a7c2c77aaed5ec78b3afb2c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd1a9c104c106bc4b02380f31ffd8fe83764a33ec81960e5197fa8fb05db169 = $this->env->getExtension("native_profiler");
        $__internal_8dd1a9c104c106bc4b02380f31ffd8fe83764a33ec81960e5197fa8fb05db169->enter($__internal_8dd1a9c104c106bc4b02380f31ffd8fe83764a33ec81960e5197fa8fb05db169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8dd1a9c104c106bc4b02380f31ffd8fe83764a33ec81960e5197fa8fb05db169->leave($__internal_8dd1a9c104c106bc4b02380f31ffd8fe83764a33ec81960e5197fa8fb05db169_prof);

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
