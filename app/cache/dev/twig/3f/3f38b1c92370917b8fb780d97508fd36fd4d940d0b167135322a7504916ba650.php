<?php

/* EpopeeBundle::layout.html.twig */
class __TwigTemplate_6a49496e02570322b99010ec0bc3e269e127d8c39d000b569768230a044f5360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707444c2781dd0b6ba190a0120b3288047c4894ba1b56f4fb1d862d5a4e2c478 = $this->env->getExtension("native_profiler");
        $__internal_707444c2781dd0b6ba190a0120b3288047c4894ba1b56f4fb1d862d5a4e2c478->enter($__internal_707444c2781dd0b6ba190a0120b3288047c4894ba1b56f4fb1d862d5a4e2c478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EpopeeBundle::layout.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta charset=\"UTF-8\">

\t\t<!-- Latest compiled and minified CSS -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" integrity=\"sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==\" crossorigin=\"anonymous\">

\t\t<!-- Optional theme -->
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css\" integrity=\"sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX\" crossorigin=\"anonymous\">

\t\t<!-- Latest compiled and minified JavaScript -->
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>

\t\t<title>Pan Tadeusz</title>
\t</head>\t
\t<body>
\t\t<header class=\"page-header\">
\t\t\t<div class=\"container text-center\">
\t\t\t\t<h1>Pan Tadeusz, czyli ostatni zajazd na Litwie</h1>
\t\t\t\t<h2>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h2>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container\" id=\"menu\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 28
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"sidebar\" class=\"col-sm-12 col-lg-4\">
\t\t\t\t\t";
        // line 33
        $this->displayBlock('sidebar', $context, $blocks);
        // line 36
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-sm-12 col-lg-8\">
\t\t\t\t\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer>
\t\t\t<div class=\"container\">
\t\t\t\t<p>(c) Katarzyna Wójcik Uniwersytet Ekonomiczny w Krakowie</p>
\t\t\t</div>
\t\t</footer>
\t</body>\t
</html>";
        
        $__internal_707444c2781dd0b6ba190a0120b3288047c4894ba1b56f4fb1d862d5a4e2c478->leave($__internal_707444c2781dd0b6ba190a0120b3288047c4894ba1b56f4fb1d862d5a4e2c478_prof);

    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a31cdb444e04a87facf1a6d3bdfc3725bfbed87048a493396407c64d327c7af = $this->env->getExtension("native_profiler");
        $__internal_8a31cdb444e04a87facf1a6d3bdfc3725bfbed87048a493396407c64d327c7af->enter($__internal_8a31cdb444e04a87facf1a6d3bdfc3725bfbed87048a493396407c64d327c7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 26
        echo "\t\t\t\t\t<p>tu będzie menu</p>
\t\t\t\t";
        
        $__internal_8a31cdb444e04a87facf1a6d3bdfc3725bfbed87048a493396407c64d327c7af->leave($__internal_8a31cdb444e04a87facf1a6d3bdfc3725bfbed87048a493396407c64d327c7af_prof);

    }

    // line 33
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d075c9885235b9c27c6e97d26e8a14aafc22fd270049b7ebbe180f4e099eb2e0 = $this->env->getExtension("native_profiler");
        $__internal_d075c9885235b9c27c6e97d26e8a14aafc22fd270049b7ebbe180f4e099eb2e0->enter($__internal_d075c9885235b9c27c6e97d26e8a14aafc22fd270049b7ebbe180f4e099eb2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 34
        echo "\t\t\t\t\t\t<p>tu jest pasek boczny</p>
\t\t\t\t\t";
        
        $__internal_d075c9885235b9c27c6e97d26e8a14aafc22fd270049b7ebbe180f4e099eb2e0->leave($__internal_d075c9885235b9c27c6e97d26e8a14aafc22fd270049b7ebbe180f4e099eb2e0_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_efdf8657c66cb98d9c431cdab34c549fbf50d80a9aa98f61ef9e0b28e685d577 = $this->env->getExtension("native_profiler");
        $__internal_efdf8657c66cb98d9c431cdab34c549fbf50d80a9aa98f61ef9e0b28e685d577->enter($__internal_efdf8657c66cb98d9c431cdab34c549fbf50d80a9aa98f61ef9e0b28e685d577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "\t\t\t\t\t\t<p>tu jest treść strony</p>
\t\t\t\t\t";
        
        $__internal_efdf8657c66cb98d9c431cdab34c549fbf50d80a9aa98f61ef9e0b28e685d577->leave($__internal_efdf8657c66cb98d9c431cdab34c549fbf50d80a9aa98f61ef9e0b28e685d577_prof);

    }

    public function getTemplateName()
    {
        return "EpopeeBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 38,  104 => 34,  98 => 33,  90 => 26,  84 => 25,  68 => 41,  66 => 38,  62 => 36,  60 => 33,  53 => 28,  51 => 25,  25 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">*/
/* */
/* 		<!-- Latest compiled and minified CSS -->*/
/* 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">*/
/* */
/* 		<!-- Optional theme -->*/
/* 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">*/
/* */
/* 		<!-- Latest compiled and minified JavaScript -->*/
/* 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>*/
/* */
/* 		<title>Pan Tadeusz</title>*/
/* 	</head>	*/
/* 	<body>*/
/* 		<header class="page-header">*/
/* 			<div class="container text-center">*/
/* 				<h1>Pan Tadeusz, czyli ostatni zajazd na Litwie</h1>*/
/* 				<h2>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h2>*/
/* 			</div>*/
/* 		</header>*/
/* 		<div class="container" id="menu">*/
/* 			<div class="row">*/
/* 				{% block menu %}*/
/* 					<p>tu będzie menu</p>*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div id="sidebar" class="col-sm-12 col-lg-4">*/
/* 					{% block sidebar %}*/
/* 						<p>tu jest pasek boczny</p>*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 				<div id="content" class="col-sm-12 col-lg-8">*/
/* 					{% block content %}*/
/* 						<p>tu jest treść strony</p>*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<footer>*/
/* 			<div class="container">*/
/* 				<p>(c) Katarzyna Wójcik Uniwersytet Ekonomiczny w Krakowie</p>*/
/* 			</div>*/
/* 		</footer>*/
/* 	</body>	*/
/* </html>*/
