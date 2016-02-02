<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4f2a8a9d6cf23bb0f21dc9efb975832538bfffb2779f65c7a7fd1483ea2a92d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1edf89e88e31090e4251ac54bdbcf776c37a5cb6f05cf0c9d5ddc859eb8adc3 = $this->env->getExtension("native_profiler");
        $__internal_a1edf89e88e31090e4251ac54bdbcf776c37a5cb6f05cf0c9d5ddc859eb8adc3->enter($__internal_a1edf89e88e31090e4251ac54bdbcf776c37a5cb6f05cf0c9d5ddc859eb8adc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1edf89e88e31090e4251ac54bdbcf776c37a5cb6f05cf0c9d5ddc859eb8adc3->leave($__internal_a1edf89e88e31090e4251ac54bdbcf776c37a5cb6f05cf0c9d5ddc859eb8adc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_266830ccba23b9349890184435ae42c5abde16b4a19896eb054dd6e478e2afce = $this->env->getExtension("native_profiler");
        $__internal_266830ccba23b9349890184435ae42c5abde16b4a19896eb054dd6e478e2afce->enter($__internal_266830ccba23b9349890184435ae42c5abde16b4a19896eb054dd6e478e2afce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_266830ccba23b9349890184435ae42c5abde16b4a19896eb054dd6e478e2afce->leave($__internal_266830ccba23b9349890184435ae42c5abde16b4a19896eb054dd6e478e2afce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
