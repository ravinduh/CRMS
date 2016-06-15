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
            'links' => array($this, 'block_links'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f39751e97180155c3a080fa574694ba731cc66a8036248778588cdb2c458ca9 = $this->env->getExtension("native_profiler");
        $__internal_0f39751e97180155c3a080fa574694ba731cc66a8036248778588cdb2c458ca9->enter($__internal_0f39751e97180155c3a080fa574694ba731cc66a8036248778588cdb2c458ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <li><a href='";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("reservation_home");
        echo "'><span>Reservations</span></a></li>

   <!-- <li class='last'><a href='#'><span>Contact</span></a></li> -->


    ";
        // line 41
        echo "
 


</ul>
</div>


      <!-- Content -->
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
        // line 51
        $this->displayBlock("title", $context, $blocks);
        echo "<div class=\"pull-right\">";
        $this->displayBlock('links', $context, $blocks);
        echo "</div></div>
        <div class=\"panel-body\">

          <div class='error_message'> ";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("form_error", $context)) ? (_twig_default_filter((isset($context["form_error"]) ? $context["form_error"] : $this->getContext($context, "form_error")), "")) : ("")), "html", null, true);
        echo " </div>
          ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        
        </div>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_0f39751e97180155c3a080fa574694ba731cc66a8036248778588cdb2c458ca9->leave($__internal_0f39751e97180155c3a080fa574694ba731cc66a8036248778588cdb2c458ca9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca09f07ea5debae92ed15d2d4cdcebdf0103790fa2d6a253b430734f9ad8974 = $this->env->getExtension("native_profiler");
        $__internal_4ca09f07ea5debae92ed15d2d4cdcebdf0103790fa2d6a253b430734f9ad8974->enter($__internal_4ca09f07ea5debae92ed15d2d4cdcebdf0103790fa2d6a253b430734f9ad8974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4ca09f07ea5debae92ed15d2d4cdcebdf0103790fa2d6a253b430734f9ad8974->leave($__internal_4ca09f07ea5debae92ed15d2d4cdcebdf0103790fa2d6a253b430734f9ad8974_prof);

    }

    // line 51
    public function block_links($context, array $blocks = array())
    {
        $__internal_edd072bec2f4a7b203f232843141bacea05573f9430c4ac10f2b712571937075 = $this->env->getExtension("native_profiler");
        $__internal_edd072bec2f4a7b203f232843141bacea05573f9430c4ac10f2b712571937075->enter($__internal_edd072bec2f4a7b203f232843141bacea05573f9430c4ac10f2b712571937075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        
        $__internal_edd072bec2f4a7b203f232843141bacea05573f9430c4ac10f2b712571937075->leave($__internal_edd072bec2f4a7b203f232843141bacea05573f9430c4ac10f2b712571937075_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eee1ed16c197806c356858d5c10f1a73d30f4a261aec88580d184d457abaf8e = $this->env->getExtension("native_profiler");
        $__internal_1eee1ed16c197806c356858d5c10f1a73d30f4a261aec88580d184d457abaf8e->enter($__internal_1eee1ed16c197806c356858d5c10f1a73d30f4a261aec88580d184d457abaf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1eee1ed16c197806c356858d5c10f1a73d30f4a261aec88580d184d457abaf8e->leave($__internal_1eee1ed16c197806c356858d5c10f1a73d30f4a261aec88580d184d457abaf8e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad525edca4c3636a5d517de7c43af7a47e88b884d0013de7b5986e136b337f8b = $this->env->getExtension("native_profiler");
        $__internal_ad525edca4c3636a5d517de7c43af7a47e88b884d0013de7b5986e136b337f8b->enter($__internal_ad525edca4c3636a5d517de7c43af7a47e88b884d0013de7b5986e136b337f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad525edca4c3636a5d517de7c43af7a47e88b884d0013de7b5986e136b337f8b->leave($__internal_ad525edca4c3636a5d517de7c43af7a47e88b884d0013de7b5986e136b337f8b_prof);

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
        return array (  187 => 56,  176 => 55,  165 => 51,  153 => 7,  142 => 65,  132 => 57,  129 => 56,  127 => 55,  123 => 54,  115 => 51,  103 => 41,  95 => 35,  91 => 34,  87 => 33,  82 => 32,  68 => 21,  63 => 18,  59 => 17,  54 => 16,  48 => 12,  44 => 11,  39 => 10,  34 => 7,  26 => 1,);
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
/*         {#{% block stylesheets %}{% endblock %}#}*/
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
/*     <li><a href='{{url('reservation_home')}}'><span>Reservations</span></a></li>*/
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
