<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_95a13655728cf0a00844dcacf6b2dcbc4d2bb42fdad2d6744dd8689d3fe5a9b8 extends Twig_Template
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
        $__internal_a2d4f08ea3f8d9f1fdab067b0a6038405ffcc3146c706f25919a3d19889731e9 = $this->env->getExtension("native_profiler");
        $__internal_a2d4f08ea3f8d9f1fdab067b0a6038405ffcc3146c706f25919a3d19889731e9->enter($__internal_a2d4f08ea3f8d9f1fdab067b0a6038405ffcc3146c706f25919a3d19889731e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d4f08ea3f8d9f1fdab067b0a6038405ffcc3146c706f25919a3d19889731e9->leave($__internal_a2d4f08ea3f8d9f1fdab067b0a6038405ffcc3146c706f25919a3d19889731e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36b14273d6ff8a0ffce5a25dbf93f5e2127787f1e93322126eff3e0e03e97a10 = $this->env->getExtension("native_profiler");
        $__internal_36b14273d6ff8a0ffce5a25dbf93f5e2127787f1e93322126eff3e0e03e97a10->enter($__internal_36b14273d6ff8a0ffce5a25dbf93f5e2127787f1e93322126eff3e0e03e97a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36b14273d6ff8a0ffce5a25dbf93f5e2127787f1e93322126eff3e0e03e97a10->leave($__internal_36b14273d6ff8a0ffce5a25dbf93f5e2127787f1e93322126eff3e0e03e97a10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f4ecedc974b5eeb156d880e45c7aa6af45965799af346a37ff7ef0de1cc6174 = $this->env->getExtension("native_profiler");
        $__internal_9f4ecedc974b5eeb156d880e45c7aa6af45965799af346a37ff7ef0de1cc6174->enter($__internal_9f4ecedc974b5eeb156d880e45c7aa6af45965799af346a37ff7ef0de1cc6174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f4ecedc974b5eeb156d880e45c7aa6af45965799af346a37ff7ef0de1cc6174->leave($__internal_9f4ecedc974b5eeb156d880e45c7aa6af45965799af346a37ff7ef0de1cc6174_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41dc34035a36c047a631245d7e3700dc015c3a0be15ad34f42ec36c2e266900b = $this->env->getExtension("native_profiler");
        $__internal_41dc34035a36c047a631245d7e3700dc015c3a0be15ad34f42ec36c2e266900b->enter($__internal_41dc34035a36c047a631245d7e3700dc015c3a0be15ad34f42ec36c2e266900b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41dc34035a36c047a631245d7e3700dc015c3a0be15ad34f42ec36c2e266900b->leave($__internal_41dc34035a36c047a631245d7e3700dc015c3a0be15ad34f42ec36c2e266900b_prof);

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
