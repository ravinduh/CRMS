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
        $__internal_70be51a1e8074eb215965ef5543c5bd6d64ac87a0d095e70e2c162fddef4d3fd = $this->env->getExtension("native_profiler");
        $__internal_70be51a1e8074eb215965ef5543c5bd6d64ac87a0d095e70e2c162fddef4d3fd->enter($__internal_70be51a1e8074eb215965ef5543c5bd6d64ac87a0d095e70e2c162fddef4d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <body>

<!-- Navbar -->
<div id='cssmenu'>
<ul>

    ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
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
        }
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
        
        $__internal_70be51a1e8074eb215965ef5543c5bd6d64ac87a0d095e70e2c162fddef4d3fd->leave($__internal_70be51a1e8074eb215965ef5543c5bd6d64ac87a0d095e70e2c162fddef4d3fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_643e01a29a21f5bc1b2d72ef0745bd98481c0575324aa8f55f73e576dbdff2a7 = $this->env->getExtension("native_profiler");
        $__internal_643e01a29a21f5bc1b2d72ef0745bd98481c0575324aa8f55f73e576dbdff2a7->enter($__internal_643e01a29a21f5bc1b2d72ef0745bd98481c0575324aa8f55f73e576dbdff2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_643e01a29a21f5bc1b2d72ef0745bd98481c0575324aa8f55f73e576dbdff2a7->leave($__internal_643e01a29a21f5bc1b2d72ef0745bd98481c0575324aa8f55f73e576dbdff2a7_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31d4e1b8f19200883579cf13491c9f0ed2709fd2d5d59bdc7800e54905d91c56 = $this->env->getExtension("native_profiler");
        $__internal_31d4e1b8f19200883579cf13491c9f0ed2709fd2d5d59bdc7800e54905d91c56->enter($__internal_31d4e1b8f19200883579cf13491c9f0ed2709fd2d5d59bdc7800e54905d91c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31d4e1b8f19200883579cf13491c9f0ed2709fd2d5d59bdc7800e54905d91c56->leave($__internal_31d4e1b8f19200883579cf13491c9f0ed2709fd2d5d59bdc7800e54905d91c56_prof);

    }

    // line 50
    public function block_links($context, array $blocks = array())
    {
        $__internal_e426e6c177be8abf73b9fa65c02dce556f4fbd3258b947a96b5dfa18ea81ac30 = $this->env->getExtension("native_profiler");
        $__internal_e426e6c177be8abf73b9fa65c02dce556f4fbd3258b947a96b5dfa18ea81ac30->enter($__internal_e426e6c177be8abf73b9fa65c02dce556f4fbd3258b947a96b5dfa18ea81ac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        
        $__internal_e426e6c177be8abf73b9fa65c02dce556f4fbd3258b947a96b5dfa18ea81ac30->leave($__internal_e426e6c177be8abf73b9fa65c02dce556f4fbd3258b947a96b5dfa18ea81ac30_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_5681ffc23fe1f52745925725e3b11e15c687d54f65cf0766c18ed29cddc103d2 = $this->env->getExtension("native_profiler");
        $__internal_5681ffc23fe1f52745925725e3b11e15c687d54f65cf0766c18ed29cddc103d2->enter($__internal_5681ffc23fe1f52745925725e3b11e15c687d54f65cf0766c18ed29cddc103d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5681ffc23fe1f52745925725e3b11e15c687d54f65cf0766c18ed29cddc103d2->leave($__internal_5681ffc23fe1f52745925725e3b11e15c687d54f65cf0766c18ed29cddc103d2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a15bfb33eda1e8eefe2d30dd87c37988122036dbe961b83b280c3d81d17192d = $this->env->getExtension("native_profiler");
        $__internal_4a15bfb33eda1e8eefe2d30dd87c37988122036dbe961b83b280c3d81d17192d->enter($__internal_4a15bfb33eda1e8eefe2d30dd87c37988122036dbe961b83b280c3d81d17192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a15bfb33eda1e8eefe2d30dd87c37988122036dbe961b83b280c3d81d17192d->leave($__internal_4a15bfb33eda1e8eefe2d30dd87c37988122036dbe961b83b280c3d81d17192d_prof);

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
        return array (  200 => 55,  189 => 54,  178 => 50,  167 => 9,  155 => 7,  144 => 64,  134 => 56,  131 => 55,  129 => 54,  125 => 53,  117 => 50,  105 => 40,  96 => 34,  92 => 33,  87 => 32,  85 => 31,  71 => 21,  66 => 18,  62 => 17,  57 => 16,  51 => 12,  47 => 11,  42 => 10,  40 => 9,  35 => 7,  27 => 1,);
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
/*     <body>*/
/* */
/* <!-- Navbar -->*/
/* <div id='cssmenu'>*/
/* <ul>*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*     <li ><a href='{{url('homepage')}}'><span>Home</span></a></li>*/
/*     <li><a href='{{url('vehicle_home')}}'><span>Vehicles</span></a></li>*/
/*     <li><a href='{{url('customer_home')}}'><span>Customers</span></a></li>*/
/* */
/*    <!-- <li class='last'><a href='#'><span>Contact</span></a></li> -->*/
/* */
/* */
/*     {% endif %}*/
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
