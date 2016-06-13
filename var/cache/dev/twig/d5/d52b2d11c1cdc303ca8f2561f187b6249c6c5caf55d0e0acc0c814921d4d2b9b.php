<?php

/* base.html.twig */
class __TwigTemplate_9a375f79542d146dd7f3eb28534111eba23216dc461a545b7c9661bd0897b0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'links' => array($this, 'block_links'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe390e0ce69b5602c1702560c28d1785e8fe3e4040a511f5c06b9492ac9aeac = $this->env->getExtension("native_profiler");
        $__internal_cbe390e0ce69b5602c1702560c28d1785e8fe3e4040a511f5c06b9492ac9aeac->enter($__internal_cbe390e0ce69b5602c1702560c28d1785e8fe3e4040a511f5c06b9492ac9aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mora2.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" />


        ";
        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/chosen.min.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 21
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />


    </head>
    <body style=\"font-size: 16px\">

<!-- Navbar -->
<div id='cssmenu'>
<ul>

    ";
        // line 32
        echo "    <li ><a href='";
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "'><span>Home</span></a></li>
    <li><a href='";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("vehicle_home");
        echo "'><span>Vehicles</span></a></li>
    <li><a href='";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("customer_home");
        echo "'><span>Customers</span></a></li>

   <!-- <li class='last'><a href='#'><span>Contact</span></a></li> -->


    ";
        // line 40
        echo "
 


</ul>
</div>


      <!-- Content -->
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 50
        $this->displayBlock("title", $context, $blocks);
        echo "<div class=\"pull-right\">";
        $this->displayBlock('links', $context, $blocks);
        echo "</div></div>
        <div class=\"panel-body\">

          <div class='error_message'> ";
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("form_error", $context)) ? (_twig_default_filter((isset($context["form_error"]) ? $context["form_error"] : $this->getContext($context, "form_error")), "")) : ("")), "html", null, true);
        echo " </div>
          ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "        
        </div>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_cbe390e0ce69b5602c1702560c28d1785e8fe3e4040a511f5c06b9492ac9aeac->leave($__internal_cbe390e0ce69b5602c1702560c28d1785e8fe3e4040a511f5c06b9492ac9aeac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b8f668be3e0afa5ddee969ef8fe4201f39d1201379d069ee8d5a93358fa1cb1 = $this->env->getExtension("native_profiler");
        $__internal_2b8f668be3e0afa5ddee969ef8fe4201f39d1201379d069ee8d5a93358fa1cb1->enter($__internal_2b8f668be3e0afa5ddee969ef8fe4201f39d1201379d069ee8d5a93358fa1cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b8f668be3e0afa5ddee969ef8fe4201f39d1201379d069ee8d5a93358fa1cb1->leave($__internal_2b8f668be3e0afa5ddee969ef8fe4201f39d1201379d069ee8d5a93358fa1cb1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc98a883dabbc26391d39867723efe2a30393caa4d07c9ba4f1c35b1fe26da3b = $this->env->getExtension("native_profiler");
        $__internal_dc98a883dabbc26391d39867723efe2a30393caa4d07c9ba4f1c35b1fe26da3b->enter($__internal_dc98a883dabbc26391d39867723efe2a30393caa4d07c9ba4f1c35b1fe26da3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc98a883dabbc26391d39867723efe2a30393caa4d07c9ba4f1c35b1fe26da3b->leave($__internal_dc98a883dabbc26391d39867723efe2a30393caa4d07c9ba4f1c35b1fe26da3b_prof);

    }

    // line 50
    public function block_links($context, array $blocks = array())
    {
        $__internal_0e52e6a4ac1ac103baf2353256ead44a58e886a90ca50ed9df788cfae7205b68 = $this->env->getExtension("native_profiler");
        $__internal_0e52e6a4ac1ac103baf2353256ead44a58e886a90ca50ed9df788cfae7205b68->enter($__internal_0e52e6a4ac1ac103baf2353256ead44a58e886a90ca50ed9df788cfae7205b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        
        $__internal_0e52e6a4ac1ac103baf2353256ead44a58e886a90ca50ed9df788cfae7205b68->leave($__internal_0e52e6a4ac1ac103baf2353256ead44a58e886a90ca50ed9df788cfae7205b68_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_df8ee2b3891068f64d909e37177631c5e9fc97102eb8ada324f331e432f600fb = $this->env->getExtension("native_profiler");
        $__internal_df8ee2b3891068f64d909e37177631c5e9fc97102eb8ada324f331e432f600fb->enter($__internal_df8ee2b3891068f64d909e37177631c5e9fc97102eb8ada324f331e432f600fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df8ee2b3891068f64d909e37177631c5e9fc97102eb8ada324f331e432f600fb->leave($__internal_df8ee2b3891068f64d909e37177631c5e9fc97102eb8ada324f331e432f600fb_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1d1703dc9544d3282082d0c9b0e722cac359caae7e8604bcab7a11b4fd88882 = $this->env->getExtension("native_profiler");
        $__internal_f1d1703dc9544d3282082d0c9b0e722cac359caae7e8604bcab7a11b4fd88882->enter($__internal_f1d1703dc9544d3282082d0c9b0e722cac359caae7e8604bcab7a11b4fd88882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1d1703dc9544d3282082d0c9b0e722cac359caae7e8604bcab7a11b4fd88882->leave($__internal_f1d1703dc9544d3282082d0c9b0e722cac359caae7e8604bcab7a11b4fd88882_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  186 => 54,  175 => 50,  164 => 9,  152 => 7,  141 => 64,  131 => 56,  128 => 55,  126 => 54,  122 => 53,  114 => 50,  102 => 40,  94 => 34,  90 => 33,  85 => 32,  71 => 21,  66 => 18,  62 => 17,  57 => 16,  51 => 12,  47 => 11,  42 => 10,  40 => 9,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('img/mora2.png') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />*/
/* */
/* */
/*         {#Chosen#}*/
/*         <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}" />*/
/*         <script src="{{ asset('js/jquery-1.10.2.js')}}"></script>*/
/*         <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>*/
/* */
/*         {#Custom Style#}*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/* */
/*     </head>*/
/*     <body style="font-size: 16px">*/
/* */
/* <!-- Navbar -->*/
/* <div id='cssmenu'>*/
/* <ul>*/
/* */
/*     {#{% if is_granted('ROLE_ADMIN') %}#}*/
/*     <li ><a href='{{url('homepage')}}'><span>Home</span></a></li>*/
/*     <li><a href='{{url('vehicle_home')}}'><span>Vehicles</span></a></li>*/
/*     <li><a href='{{url('customer_home')}}'><span>Customers</span></a></li>*/
/* */
/*    <!-- <li class='last'><a href='#'><span>Contact</span></a></li> -->*/
/* */
/* */
/*     {#{% endif %}#}*/
/* */
/*  */
/* */
/* */
/* </ul>*/
/* </div>*/
/* */
/* */
/*       <!-- Content -->*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">{{ block('title') }}<div class="pull-right">{% block links %}{% endblock %}</div></div>*/
/*         <div class="panel-body">*/
/* */
/*           <div class='error_message'> {{ form_error | default("") }} </div>*/
/*           {% block body %}{% endblock %}*/
/*           {% block javascripts %}{% endblock %}*/
/*         */
/*         </div>*/
/*       </div>*/
/* */
/* */
/*       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*       <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*       <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     </body>*/
/* </html>*/
/* */
