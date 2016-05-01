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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cbf865c9aff1f57be214d64d5b094e825a359d0e16c983679305255c76fb8db = $this->env->getExtension("native_profiler");
        $__internal_3cbf865c9aff1f57be214d64d5b094e825a359d0e16c983679305255c76fb8db->enter($__internal_3cbf865c9aff1f57be214d64d5b094e825a359d0e16c983679305255c76fb8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3cbf865c9aff1f57be214d64d5b094e825a359d0e16c983679305255c76fb8db->leave($__internal_3cbf865c9aff1f57be214d64d5b094e825a359d0e16c983679305255c76fb8db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f25f72bedfbb09d3b986be2e103be0097cb2962db8ed9a7c44ee696d141588d4 = $this->env->getExtension("native_profiler");
        $__internal_f25f72bedfbb09d3b986be2e103be0097cb2962db8ed9a7c44ee696d141588d4->enter($__internal_f25f72bedfbb09d3b986be2e103be0097cb2962db8ed9a7c44ee696d141588d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f25f72bedfbb09d3b986be2e103be0097cb2962db8ed9a7c44ee696d141588d4->leave($__internal_f25f72bedfbb09d3b986be2e103be0097cb2962db8ed9a7c44ee696d141588d4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bc7e9ad2fca06b11ee6efe0308589c429907999c3604a176551aa036d3958be = $this->env->getExtension("native_profiler");
        $__internal_4bc7e9ad2fca06b11ee6efe0308589c429907999c3604a176551aa036d3958be->enter($__internal_4bc7e9ad2fca06b11ee6efe0308589c429907999c3604a176551aa036d3958be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4bc7e9ad2fca06b11ee6efe0308589c429907999c3604a176551aa036d3958be->leave($__internal_4bc7e9ad2fca06b11ee6efe0308589c429907999c3604a176551aa036d3958be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_088194369de17eb740aa332fb43b21e9fd4b90be1c0da47f2b8a6ef8a942cfdd = $this->env->getExtension("native_profiler");
        $__internal_088194369de17eb740aa332fb43b21e9fd4b90be1c0da47f2b8a6ef8a942cfdd->enter($__internal_088194369de17eb740aa332fb43b21e9fd4b90be1c0da47f2b8a6ef8a942cfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_088194369de17eb740aa332fb43b21e9fd4b90be1c0da47f2b8a6ef8a942cfdd->leave($__internal_088194369de17eb740aa332fb43b21e9fd4b90be1c0da47f2b8a6ef8a942cfdd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_968c35e117648030b3e73fd1f8c6626af09a80cce3922c9c5f259742da06ef89 = $this->env->getExtension("native_profiler");
        $__internal_968c35e117648030b3e73fd1f8c6626af09a80cce3922c9c5f259742da06ef89->enter($__internal_968c35e117648030b3e73fd1f8c6626af09a80cce3922c9c5f259742da06ef89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_968c35e117648030b3e73fd1f8c6626af09a80cce3922c9c5f259742da06ef89->leave($__internal_968c35e117648030b3e73fd1f8c6626af09a80cce3922c9c5f259742da06ef89_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
