<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_caf2a62d326f1d7310de994432b2a458ac425dbea45dba446edd3c352f5601a0 extends Twig_Template
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
        $__internal_7d1fa061cd4753b5eca79c0805e87dfbf1a57662cb7897abc8c9c32db4111398 = $this->env->getExtension("native_profiler");
        $__internal_7d1fa061cd4753b5eca79c0805e87dfbf1a57662cb7897abc8c9c32db4111398->enter($__internal_7d1fa061cd4753b5eca79c0805e87dfbf1a57662cb7897abc8c9c32db4111398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1fa061cd4753b5eca79c0805e87dfbf1a57662cb7897abc8c9c32db4111398->leave($__internal_7d1fa061cd4753b5eca79c0805e87dfbf1a57662cb7897abc8c9c32db4111398_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d16b497397b5d80db73520b1f99fb68b3fb13d9b171e359e80446a2a6b4ff2a = $this->env->getExtension("native_profiler");
        $__internal_3d16b497397b5d80db73520b1f99fb68b3fb13d9b171e359e80446a2a6b4ff2a->enter($__internal_3d16b497397b5d80db73520b1f99fb68b3fb13d9b171e359e80446a2a6b4ff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d16b497397b5d80db73520b1f99fb68b3fb13d9b171e359e80446a2a6b4ff2a->leave($__internal_3d16b497397b5d80db73520b1f99fb68b3fb13d9b171e359e80446a2a6b4ff2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db6f03d312c63da6870653e38db9113d2b3d96953b36890b6b8a292ec414d9c8 = $this->env->getExtension("native_profiler");
        $__internal_db6f03d312c63da6870653e38db9113d2b3d96953b36890b6b8a292ec414d9c8->enter($__internal_db6f03d312c63da6870653e38db9113d2b3d96953b36890b6b8a292ec414d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db6f03d312c63da6870653e38db9113d2b3d96953b36890b6b8a292ec414d9c8->leave($__internal_db6f03d312c63da6870653e38db9113d2b3d96953b36890b6b8a292ec414d9c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f654452e46c40d31a7f35fdbf6f87a680637cc91fd889142ba6b181460a7316 = $this->env->getExtension("native_profiler");
        $__internal_8f654452e46c40d31a7f35fdbf6f87a680637cc91fd889142ba6b181460a7316->enter($__internal_8f654452e46c40d31a7f35fdbf6f87a680637cc91fd889142ba6b181460a7316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f654452e46c40d31a7f35fdbf6f87a680637cc91fd889142ba6b181460a7316->leave($__internal_8f654452e46c40d31a7f35fdbf6f87a680637cc91fd889142ba6b181460a7316_prof);

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
