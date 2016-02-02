<?php

/* EpopeeBundle::bars.html.twig */
class __TwigTemplate_9e2c69919b61152827e42946f771ad08dfeffbf917959e08eec64448ab426ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpopeeBundle::layout.html.twig", "EpopeeBundle::bars.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpopeeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da8c1035e0e0bcbb310770d0ff9b5a33460171b43ffeb5553f0f980ed7101991 = $this->env->getExtension("native_profiler");
        $__internal_da8c1035e0e0bcbb310770d0ff9b5a33460171b43ffeb5553f0f980ed7101991->enter($__internal_da8c1035e0e0bcbb310770d0ff9b5a33460171b43ffeb5553f0f980ed7101991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpopeeBundle::bars.html.twig"));

        // line 3
        $context["roman"] = array(1 => "I", 2 => "II", 3 => "III", 4 => "IV", 5 => "V", 6 => "VI", 7 => "VII", 8 => "VIII", 9 => "IX", 10 => "X", 11 => "XI", 12 => "XII");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8c1035e0e0bcbb310770d0ff9b5a33460171b43ffeb5553f0f980ed7101991->leave($__internal_da8c1035e0e0bcbb310770d0ff9b5a33460171b43ffeb5553f0f980ed7101991_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fa7251d04b989332fd9ca06f98a48cf4e84beadf8a87634db3a407a39bf4c4a = $this->env->getExtension("native_profiler");
        $__internal_8fa7251d04b989332fd9ca06f98a48cf4e84beadf8a87634db3a407a39bf4c4a->enter($__internal_8fa7251d04b989332fd9ca06f98a48cf4e84beadf8a87634db3a407a39bf4c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "\t<ul class=\"nav nav-tabs\">
";
        // line 12
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "\t\t\t";
            if ((array_key_exists("book", $context) && ((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")) == $context["i"]))) {
                // line 14
                echo "\t\t\t\t<li role='presentation' class='active'><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epopee_book", array("book" => $context["i"])), "html", null, true);
                echo "\">Księga ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["roman"]) ? $context["roman"] : $this->getContext($context, "roman")), $context["i"], array(), "array"), "html", null, true);
                echo "</a></li>
\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t<li role='presentation'><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("epopee_book", array("book" => $context["i"])), "html", null, true);
                echo "\">Księga ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["roman"]) ? $context["roman"] : $this->getContext($context, "roman")), $context["i"], array(), "array"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 18
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</ul>
";
        
        $__internal_8fa7251d04b989332fd9ca06f98a48cf4e84beadf8a87634db3a407a39bf4c4a->leave($__internal_8fa7251d04b989332fd9ca06f98a48cf4e84beadf8a87634db3a407a39bf4c4a_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e06452cb4f506ad2a91b8154873ac4da3f1a8d78de94d9fab0982db6502a6570 = $this->env->getExtension("native_profiler");
        $__internal_e06452cb4f506ad2a91b8154873ac4da3f1a8d78de94d9fab0982db6502a6570->enter($__internal_e06452cb4f506ad2a91b8154873ac4da3f1a8d78de94d9fab0982db6502a6570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "\t<p>tu jest pasek boczny z barsów</p>
";
        
        $__internal_e06452cb4f506ad2a91b8154873ac4da3f1a8d78de94d9fab0982db6502a6570->leave($__internal_e06452cb4f506ad2a91b8154873ac4da3f1a8d78de94d9fab0982db6502a6570_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_20fd48060e7e1c99410c86d95088de661654f8112a8cad2dfbd993f9b6ab5640 = $this->env->getExtension("native_profiler");
        $__internal_20fd48060e7e1c99410c86d95088de661654f8112a8cad2dfbd993f9b6ab5640->enter($__internal_20fd48060e7e1c99410c86d95088de661654f8112a8cad2dfbd993f9b6ab5640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t<p>tu jest treść strony z barsów</p>
";
        
        $__internal_20fd48060e7e1c99410c86d95088de661654f8112a8cad2dfbd993f9b6ab5640->leave($__internal_20fd48060e7e1c99410c86d95088de661654f8112a8cad2dfbd993f9b6ab5640_prof);

    }

    public function getTemplateName()
    {
        return "EpopeeBundle::bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  100 => 26,  92 => 23,  86 => 22,  78 => 19,  72 => 18,  64 => 16,  56 => 14,  53 => 13,  48 => 12,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends "EpopeeBundle::layout.html.twig" %}*/
/* */
/* {% set roman = {1:'I', 2:'II', 3:'III', 4:'IV', 5:'V', 6:'VI', 7:'VII', 8:'VIII', 9:'IX', 10:'X', 11:'XI', 12:'XII'} %}*/
/* */
/* {% block menu %}*/
/* 	<ul class="nav nav-tabs">*/
/* {# 		{% if book is not defined %}*/
/* 			<li role='presentation' class='active'><a href="{{path('epopee_homepage')}}"><span class="glyphicon glyphicon-home"></span></a></li>*/
/* 		{% else %}*/
/* 			<li role='presentation'><a href="{{path('epopee_homepage')}}"><span class="glyphicon glyphicon-home"></span></a></li>*/
/* 		{% endif %} #}*/
/* 		{% for i in 1..12 %}*/
/* 			{% if book is defined and book == i %}*/
/* 				<li role='presentation' class='active'><a href="{{path('epopee_book', {'book': i})}}">Księga {{roman[i]}}</a></li>*/
/* 			{% else %}*/
/* 				<li role='presentation'><a href="{{path('epopee_book', {'book': i})}}">Księga {{roman[i]}}</a></li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* 	<p>tu jest pasek boczny z barsów</p>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<p>tu jest treść strony z barsów</p>*/
/* {% endblock %}*/
