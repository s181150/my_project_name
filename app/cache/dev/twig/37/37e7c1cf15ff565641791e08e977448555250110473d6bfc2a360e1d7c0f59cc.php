<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4357d20c516cf38e607ecd7d5f9036ddf7254a3840f63326788bf08a9ef2e6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48b2e82add1a004e04b9e2087b432f24b87bd04c1d9ac037d4aa846d8f818383 = $this->env->getExtension("native_profiler");
        $__internal_48b2e82add1a004e04b9e2087b432f24b87bd04c1d9ac037d4aa846d8f818383->enter($__internal_48b2e82add1a004e04b9e2087b432f24b87bd04c1d9ac037d4aa846d8f818383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b2e82add1a004e04b9e2087b432f24b87bd04c1d9ac037d4aa846d8f818383->leave($__internal_48b2e82add1a004e04b9e2087b432f24b87bd04c1d9ac037d4aa846d8f818383_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e00ccdcf3b86f59fe10bb2327ebd7a922660a4278d76749e6a0a0a9ee4f1756 = $this->env->getExtension("native_profiler");
        $__internal_2e00ccdcf3b86f59fe10bb2327ebd7a922660a4278d76749e6a0a0a9ee4f1756->enter($__internal_2e00ccdcf3b86f59fe10bb2327ebd7a922660a4278d76749e6a0a0a9ee4f1756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e00ccdcf3b86f59fe10bb2327ebd7a922660a4278d76749e6a0a0a9ee4f1756->leave($__internal_2e00ccdcf3b86f59fe10bb2327ebd7a922660a4278d76749e6a0a0a9ee4f1756_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61f2e4f3c2f869fc556a7cdcb14723f36cc67f2a9ebe9452e814c0e9188c2f01 = $this->env->getExtension("native_profiler");
        $__internal_61f2e4f3c2f869fc556a7cdcb14723f36cc67f2a9ebe9452e814c0e9188c2f01->enter($__internal_61f2e4f3c2f869fc556a7cdcb14723f36cc67f2a9ebe9452e814c0e9188c2f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61f2e4f3c2f869fc556a7cdcb14723f36cc67f2a9ebe9452e814c0e9188c2f01->leave($__internal_61f2e4f3c2f869fc556a7cdcb14723f36cc67f2a9ebe9452e814c0e9188c2f01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0e20fe33757fe8f2c9c5b7093416f3b023580f71fbc10b3628b9778ede3d3c7 = $this->env->getExtension("native_profiler");
        $__internal_a0e20fe33757fe8f2c9c5b7093416f3b023580f71fbc10b3628b9778ede3d3c7->enter($__internal_a0e20fe33757fe8f2c9c5b7093416f3b023580f71fbc10b3628b9778ede3d3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0e20fe33757fe8f2c9c5b7093416f3b023580f71fbc10b3628b9778ede3d3c7->leave($__internal_a0e20fe33757fe8f2c9c5b7093416f3b023580f71fbc10b3628b9778ede3d3c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
