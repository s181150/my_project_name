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
        $__internal_d4f7caf9e957d3538f05d82171d7788a265776373b84a8eeec6a5e58d830219b = $this->env->getExtension("native_profiler");
        $__internal_d4f7caf9e957d3538f05d82171d7788a265776373b84a8eeec6a5e58d830219b->enter($__internal_d4f7caf9e957d3538f05d82171d7788a265776373b84a8eeec6a5e58d830219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjektBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f7caf9e957d3538f05d82171d7788a265776373b84a8eeec6a5e58d830219b->leave($__internal_d4f7caf9e957d3538f05d82171d7788a265776373b84a8eeec6a5e58d830219b_prof);

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
