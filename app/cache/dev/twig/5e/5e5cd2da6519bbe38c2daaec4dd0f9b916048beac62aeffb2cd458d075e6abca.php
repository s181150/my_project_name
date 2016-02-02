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
        $__internal_5310d0fb58b3807caee6f478c9b76c5191fb2deb9933b2913552659d221de419 = $this->env->getExtension("native_profiler");
        $__internal_5310d0fb58b3807caee6f478c9b76c5191fb2deb9933b2913552659d221de419->enter($__internal_5310d0fb58b3807caee6f478c9b76c5191fb2deb9933b2913552659d221de419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5310d0fb58b3807caee6f478c9b76c5191fb2deb9933b2913552659d221de419->leave($__internal_5310d0fb58b3807caee6f478c9b76c5191fb2deb9933b2913552659d221de419_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_173d5b3d011192aef24c12b5d44cdd2722b35ab6dfa13d3bf996badf5e273206 = $this->env->getExtension("native_profiler");
        $__internal_173d5b3d011192aef24c12b5d44cdd2722b35ab6dfa13d3bf996badf5e273206->enter($__internal_173d5b3d011192aef24c12b5d44cdd2722b35ab6dfa13d3bf996badf5e273206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_173d5b3d011192aef24c12b5d44cdd2722b35ab6dfa13d3bf996badf5e273206->leave($__internal_173d5b3d011192aef24c12b5d44cdd2722b35ab6dfa13d3bf996badf5e273206_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4328d4f4369ba55c321b64546bd06ad2c7dd408894bbad2ea036a141be37f03 = $this->env->getExtension("native_profiler");
        $__internal_f4328d4f4369ba55c321b64546bd06ad2c7dd408894bbad2ea036a141be37f03->enter($__internal_f4328d4f4369ba55c321b64546bd06ad2c7dd408894bbad2ea036a141be37f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4328d4f4369ba55c321b64546bd06ad2c7dd408894bbad2ea036a141be37f03->leave($__internal_f4328d4f4369ba55c321b64546bd06ad2c7dd408894bbad2ea036a141be37f03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa55a6a9869357ccecbbf587babb6aec42e734e96cc084501e8b1bff782e0d8c = $this->env->getExtension("native_profiler");
        $__internal_aa55a6a9869357ccecbbf587babb6aec42e734e96cc084501e8b1bff782e0d8c->enter($__internal_aa55a6a9869357ccecbbf587babb6aec42e734e96cc084501e8b1bff782e0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa55a6a9869357ccecbbf587babb6aec42e734e96cc084501e8b1bff782e0d8c->leave($__internal_aa55a6a9869357ccecbbf587babb6aec42e734e96cc084501e8b1bff782e0d8c_prof);

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
