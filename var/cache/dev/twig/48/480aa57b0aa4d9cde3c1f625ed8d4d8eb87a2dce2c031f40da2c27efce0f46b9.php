<?php

/* reservation/viewall.html.twig */
class __TwigTemplate_d0f57ec0640feefc35e75984c93390dab774fddfef48cefa7369f50f204b8da3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/viewall.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2b4c8a96aa08221801f1e22f3e8f74a13e66983d80616ce6139c0fceb8a6a9 = $this->env->getExtension("native_profiler");
        $__internal_ae2b4c8a96aa08221801f1e22f3e8f74a13e66983d80616ce6139c0fceb8a6a9->enter($__internal_ae2b4c8a96aa08221801f1e22f3e8f74a13e66983d80616ce6139c0fceb8a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/viewall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2b4c8a96aa08221801f1e22f3e8f74a13e66983d80616ce6139c0fceb8a6a9->leave($__internal_ae2b4c8a96aa08221801f1e22f3e8f74a13e66983d80616ce6139c0fceb8a6a9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8192337dd6b6a196f03568e6c6995b58fbe130c586d0b49f0c086cb3eda84693 = $this->env->getExtension("native_profiler");
        $__internal_8192337dd6b6a196f03568e6c6995b58fbe130c586d0b49f0c086cb3eda84693->enter($__internal_8192337dd6b6a196f03568e6c6995b58fbe130c586d0b49f0c086cb3eda84693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    All Reservations
";
        
        $__internal_8192337dd6b6a196f03568e6c6995b58fbe130c586d0b49f0c086cb3eda84693->leave($__internal_8192337dd6b6a196f03568e6c6995b58fbe130c586d0b49f0c086cb3eda84693_prof);

    }

    // line 8
    public function block_links($context, array $blocks = array())
    {
        $__internal_6fe23b9489a4f38c91255e5b9a64f4aa779800bb67c86fcdfe401df966c3a1e1 = $this->env->getExtension("native_profiler");
        $__internal_6fe23b9489a4f38c91255e5b9a64f4aa779800bb67c86fcdfe401df966c3a1e1->enter($__internal_6fe23b9489a4f38c91255e5b9a64f4aa779800bb67c86fcdfe401df966c3a1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 9
        echo "    <div class=\"btn-group\" >
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("reservation_create");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Make Reservation</button></a>
    </div>
";
        
        $__internal_6fe23b9489a4f38c91255e5b9a64f4aa779800bb67c86fcdfe401df966c3a1e1->leave($__internal_6fe23b9489a4f38c91255e5b9a64f4aa779800bb67c86fcdfe401df966c3a1e1_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_385e219c13b9314acef7a1c299c02e8ee45c345f29cdffaa275e51efc17d1c06 = $this->env->getExtension("native_profiler");
        $__internal_385e219c13b9314acef7a1c299c02e8ee45c345f29cdffaa275e51efc17d1c06->enter($__internal_385e219c13b9314acef7a1c299c02e8ee45c345f29cdffaa275e51efc17d1c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <table width=\"100%\">
    <tr>
        <th>Customer Name</th>
        <th>Car</th>
        <th>Start Date</th>
        <th>End Date</th>

    </tr>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 26
            echo "        <tr>
            <td>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("customer_view", array("id" => $this->getAttribute($context["r"], "customerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "customerName", array()));
            echo "</a>
            </td>

            <td>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("vehicle_view", array("id" => $this->getAttribute($context["r"], "vehicleId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "vehicleName", array()));
            echo "</a>
            </td>


            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "startDate", array()));
            echo "
            </td>


            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "endDate", array()));
            echo "
            </td>






        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ul>

";
        
        $__internal_385e219c13b9314acef7a1c299c02e8ee45c345f29cdffaa275e51efc17d1c06->leave($__internal_385e219c13b9314acef7a1c299c02e8ee45c345f29cdffaa275e51efc17d1c06_prof);

    }

    public function getTemplateName()
    {
        return "reservation/viewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  119 => 40,  112 => 36,  103 => 32,  94 => 28,  90 => 26,  86 => 25,  75 => 16,  69 => 15,  59 => 10,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     All Reservations*/
/* {% endblock %}*/
/* */
/* {% block links %}*/
/*     <div class="btn-group" >*/
/*         <a href="{{url('reservation_create')}}"> <button type="button" class="btn btn-xs btn-success">Make Reservation</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <table width="100%">*/
/*     <tr>*/
/*         <th>Customer Name</th>*/
/*         <th>Car</th>*/
/*         <th>Start Date</th>*/
/*         <th>End Date</th>*/
/* */
/*     </tr>*/
/* */
/*     {% for r in reservations %}*/
/*         <tr>*/
/*             <td>*/
/*                 <a href="{{url('customer_view',{'id':r.customerId})}}">{{r.customerName|e }}</a>*/
/*             </td>*/
/* */
/*             <td>*/
/*                 <a href="{{url('vehicle_view',{'id':r.vehicleId})}}">{{r.vehicleName|e }}</a>*/
/*             </td>*/
/* */
/* */
/*             <td>{{ r.startDate|e }}*/
/*             </td>*/
/* */
/* */
/*             <td>{{ r.endDate|e }}*/
/*             </td>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         </tr>*/
/*     {% endfor %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
