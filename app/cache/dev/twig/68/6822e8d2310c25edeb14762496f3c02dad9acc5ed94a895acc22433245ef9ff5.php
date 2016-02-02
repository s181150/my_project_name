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
        $__internal_f1aaa4851a72cbcb68a97353a0046e85b4202566e3474d6f6011fbae67e17700 = $this->env->getExtension("native_profiler");
        $__internal_f1aaa4851a72cbcb68a97353a0046e85b4202566e3474d6f6011fbae67e17700->enter($__internal_f1aaa4851a72cbcb68a97353a0046e85b4202566e3474d6f6011fbae67e17700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpopeeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1aaa4851a72cbcb68a97353a0046e85b4202566e3474d6f6011fbae67e17700->leave($__internal_f1aaa4851a72cbcb68a97353a0046e85b4202566e3474d6f6011fbae67e17700_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_19ca3510590abe81ec8953f5eed4aa57e1bd1671b6e5605344cb0a0bb2943e26 = $this->env->getExtension("native_profiler");
        $__internal_19ca3510590abe81ec8953f5eed4aa57e1bd1671b6e5605344cb0a0bb2943e26->enter($__internal_19ca3510590abe81ec8953f5eed4aa57e1bd1671b6e5605344cb0a0bb2943e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div>
\t\t
\t</div>
";
        
        $__internal_19ca3510590abe81ec8953f5eed4aa57e1bd1671b6e5605344cb0a0bb2943e26->leave($__internal_19ca3510590abe81ec8953f5eed4aa57e1bd1671b6e5605344cb0a0bb2943e26_prof);

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
