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
        $__internal_6912f05b1073784ca741cf2539be9c00624f9f4645212e41f6ff59764f147022 = $this->env->getExtension("native_profiler");
        $__internal_6912f05b1073784ca741cf2539be9c00624f9f4645212e41f6ff59764f147022->enter($__internal_6912f05b1073784ca741cf2539be9c00624f9f4645212e41f6ff59764f147022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6912f05b1073784ca741cf2539be9c00624f9f4645212e41f6ff59764f147022->leave($__internal_6912f05b1073784ca741cf2539be9c00624f9f4645212e41f6ff59764f147022_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cae9f0c8e564447fc22f8742e920108c4a34ccbfc4eb9e067463390d54e481e5 = $this->env->getExtension("native_profiler");
        $__internal_cae9f0c8e564447fc22f8742e920108c4a34ccbfc4eb9e067463390d54e481e5->enter($__internal_cae9f0c8e564447fc22f8742e920108c4a34ccbfc4eb9e067463390d54e481e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cae9f0c8e564447fc22f8742e920108c4a34ccbfc4eb9e067463390d54e481e5->leave($__internal_cae9f0c8e564447fc22f8742e920108c4a34ccbfc4eb9e067463390d54e481e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ba2a6d0841d274b96ad93e5b0de88fe59ab34d8745b1224398ae131cc9a98eb = $this->env->getExtension("native_profiler");
        $__internal_5ba2a6d0841d274b96ad93e5b0de88fe59ab34d8745b1224398ae131cc9a98eb->enter($__internal_5ba2a6d0841d274b96ad93e5b0de88fe59ab34d8745b1224398ae131cc9a98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ba2a6d0841d274b96ad93e5b0de88fe59ab34d8745b1224398ae131cc9a98eb->leave($__internal_5ba2a6d0841d274b96ad93e5b0de88fe59ab34d8745b1224398ae131cc9a98eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29317aa68474b73d1999b9f526d60599c410aaf86707b24d0e3798342e20a750 = $this->env->getExtension("native_profiler");
        $__internal_29317aa68474b73d1999b9f526d60599c410aaf86707b24d0e3798342e20a750->enter($__internal_29317aa68474b73d1999b9f526d60599c410aaf86707b24d0e3798342e20a750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29317aa68474b73d1999b9f526d60599c410aaf86707b24d0e3798342e20a750->leave($__internal_29317aa68474b73d1999b9f526d60599c410aaf86707b24d0e3798342e20a750_prof);

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
