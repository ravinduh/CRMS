<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ddf5741cc0170c78493324a1db090e46e1bc6f1e9c22785283c2ff613283ece5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12d4eee05285e8d7a3c3ad9211944c74a89daedc584cd002732d1c48a913f7b1 = $this->env->getExtension("native_profiler");
        $__internal_12d4eee05285e8d7a3c3ad9211944c74a89daedc584cd002732d1c48a913f7b1->enter($__internal_12d4eee05285e8d7a3c3ad9211944c74a89daedc584cd002732d1c48a913f7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d4eee05285e8d7a3c3ad9211944c74a89daedc584cd002732d1c48a913f7b1->leave($__internal_12d4eee05285e8d7a3c3ad9211944c74a89daedc584cd002732d1c48a913f7b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea1dc5bc043c5477818392f4d22949770a01ca2c56e7ddb00a63ec285de78429 = $this->env->getExtension("native_profiler");
        $__internal_ea1dc5bc043c5477818392f4d22949770a01ca2c56e7ddb00a63ec285de78429->enter($__internal_ea1dc5bc043c5477818392f4d22949770a01ca2c56e7ddb00a63ec285de78429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ea1dc5bc043c5477818392f4d22949770a01ca2c56e7ddb00a63ec285de78429->leave($__internal_ea1dc5bc043c5477818392f4d22949770a01ca2c56e7ddb00a63ec285de78429_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93404814a43fa53ffcaf7763830e18254d90959c0ec21e4173ea187d46671e6b = $this->env->getExtension("native_profiler");
        $__internal_93404814a43fa53ffcaf7763830e18254d90959c0ec21e4173ea187d46671e6b->enter($__internal_93404814a43fa53ffcaf7763830e18254d90959c0ec21e4173ea187d46671e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93404814a43fa53ffcaf7763830e18254d90959c0ec21e4173ea187d46671e6b->leave($__internal_93404814a43fa53ffcaf7763830e18254d90959c0ec21e4173ea187d46671e6b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8040100b1f6c534d163f1f06bef4313f5883164ff440355f061b0f67073b2b2a = $this->env->getExtension("native_profiler");
        $__internal_8040100b1f6c534d163f1f06bef4313f5883164ff440355f061b0f67073b2b2a->enter($__internal_8040100b1f6c534d163f1f06bef4313f5883164ff440355f061b0f67073b2b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8040100b1f6c534d163f1f06bef4313f5883164ff440355f061b0f67073b2b2a->leave($__internal_8040100b1f6c534d163f1f06bef4313f5883164ff440355f061b0f67073b2b2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
