<?php

/* ProjektBundle:Default:index.html.twig */
class __TwigTemplate_dcaaefabfc5ce55350107d5f5739099378f2679801ec1750e9325673764bcdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjektBundle::index.html.twig", "ProjektBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjektBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512a30770e079f832ccc031d55f17f34ddce92f0b4fcb61105b5008bf7db3d57 = $this->env->getExtension("native_profiler");
        $__internal_512a30770e079f832ccc031d55f17f34ddce92f0b4fcb61105b5008bf7db3d57->enter($__internal_512a30770e079f832ccc031d55f17f34ddce92f0b4fcb61105b5008bf7db3d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512a30770e079f832ccc031d55f17f34ddce92f0b4fcb61105b5008bf7db3d57->leave($__internal_512a30770e079f832ccc031d55f17f34ddce92f0b4fcb61105b5008bf7db3d57_prof);

    }

    public function getTemplateName()
    {
        return "ProjektBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "ProjektBundle::index.html.twig" %}*/
/* */
