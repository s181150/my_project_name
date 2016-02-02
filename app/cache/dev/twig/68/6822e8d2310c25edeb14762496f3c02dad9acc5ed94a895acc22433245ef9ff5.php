<?php

/* EpopeeBundle:Default:index.html.twig */
class __TwigTemplate_70209e8f2c3b82e946a67c5d1c8ece91067d5d451c3eac8a50b9507c1ecfa737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpopeeBundle::bars.html.twig", "EpopeeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpopeeBundle::bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0c1ca241d0a2598b7179a4f16c2aa5486dc10de84accc3183e391974e292320 = $this->env->getExtension("native_profiler");
        $__internal_c0c1ca241d0a2598b7179a4f16c2aa5486dc10de84accc3183e391974e292320->enter($__internal_c0c1ca241d0a2598b7179a4f16c2aa5486dc10de84accc3183e391974e292320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpopeeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c1ca241d0a2598b7179a4f16c2aa5486dc10de84accc3183e391974e292320->leave($__internal_c0c1ca241d0a2598b7179a4f16c2aa5486dc10de84accc3183e391974e292320_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fde3076f2e749ac27f4c1b77b842750c43ac22a3e9187fca39416e1d365111e7 = $this->env->getExtension("native_profiler");
        $__internal_fde3076f2e749ac27f4c1b77b842750c43ac22a3e9187fca39416e1d365111e7->enter($__internal_fde3076f2e749ac27f4c1b77b842750c43ac22a3e9187fca39416e1d365111e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div>
\t\t
\t</div>
";
        
        $__internal_fde3076f2e749ac27f4c1b77b842750c43ac22a3e9187fca39416e1d365111e7->leave($__internal_fde3076f2e749ac27f4c1b77b842750c43ac22a3e9187fca39416e1d365111e7_prof);

    }

    public function getTemplateName()
    {
        return "EpopeeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "EpopeeBundle::bars.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<div>*/
/* 		*/
/* 	</div>*/
/* {% endblock %}*/
/* */
