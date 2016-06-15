<?php

/* vehicle/viewall.html.twig */
class __TwigTemplate_ebc31a55ef2d8ffb2529cea95427497d4d1f334bdf2d33149955c0f312fdac6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/viewall.html.twig", 2);
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
        $__internal_a76019576a7e56152a65e61b0544886c30d094c6b7785f5de134669ae49c0cf5 = $this->env->getExtension("native_profiler");
        $__internal_a76019576a7e56152a65e61b0544886c30d094c6b7785f5de134669ae49c0cf5->enter($__internal_a76019576a7e56152a65e61b0544886c30d094c6b7785f5de134669ae49c0cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/viewall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76019576a7e56152a65e61b0544886c30d094c6b7785f5de134669ae49c0cf5->leave($__internal_a76019576a7e56152a65e61b0544886c30d094c6b7785f5de134669ae49c0cf5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_61558d51ed19e89d15255f335de64b99d317afdb011f5c766050f495063a88df = $this->env->getExtension("native_profiler");
        $__internal_61558d51ed19e89d15255f335de64b99d317afdb011f5c766050f495063a88df->enter($__internal_61558d51ed19e89d15255f335de64b99d317afdb011f5c766050f495063a88df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "All Vehicles
";
        
        $__internal_61558d51ed19e89d15255f335de64b99d317afdb011f5c766050f495063a88df->leave($__internal_61558d51ed19e89d15255f335de64b99d317afdb011f5c766050f495063a88df_prof);

    }

    // line 8
    public function block_links($context, array $blocks = array())
    {
        $__internal_03391f2252e09881cf76e31aa33cffd4c4797c70fbb4a3fcac2b1c2a5401d560 = $this->env->getExtension("native_profiler");
        $__internal_03391f2252e09881cf76e31aa33cffd4c4797c70fbb4a3fcac2b1c2a5401d560->enter($__internal_03391f2252e09881cf76e31aa33cffd4c4797c70fbb4a3fcac2b1c2a5401d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 9
        echo "    <div class=\"btn-group\" >
       <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("vehicle_create");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Create Vehicle</button></a>
    </div>
";
        
        $__internal_03391f2252e09881cf76e31aa33cffd4c4797c70fbb4a3fcac2b1c2a5401d560->leave($__internal_03391f2252e09881cf76e31aa33cffd4c4797c70fbb4a3fcac2b1c2a5401d560_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b4d3c8d4e01f10ae97c7b8479f3329300afe59a552529b14aaa6714804d8d1f = $this->env->getExtension("native_profiler");
        $__internal_0b4d3c8d4e01f10ae97c7b8479f3329300afe59a552529b14aaa6714804d8d1f->enter($__internal_0b4d3c8d4e01f10ae97c7b8479f3329300afe59a552529b14aaa6714804d8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<table class=\"table table-striped table-responsive\" width=\"100%\">
\t<tr>
\t\t<th>Name</th>
        <th>Type</th>
        <th>Plate</th>
\t\t<th>Fuel</th>
\t\t<th>Transmission</th>
\t\t<th>Description</th>
\t\t<th>Status</th>
\t</tr>



    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) ? $context["vehicles"] : $this->getContext($context, "vehicles")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehi"]) {
            // line 30
            echo "        <tr>
        <td>
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("vehicle_view", array("id" => $this->getAttribute($context["vehi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "name", array()));
            echo "</a><br>
            <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("img/" . $this->getAttribute($context["vehi"], "id", array())) . ".jpg")), "html", null, true);
            echo "\" width=\"200\" height=\"200\" alt=\"Symfony!\" />
        </td>

        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "type", array()));
            echo "
        </td>

\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "plate", array()));
            echo "
        </td>


        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "fuel", array()));
            echo "
        </td>

        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "transmission", array()));
            echo "
        </td>

        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "description", array()));
            echo "
        </td>


       \t<td>";
            // line 53
            if (($this->getAttribute($context["vehi"], "status", array()) == "available")) {
                echo " Available ";
            }
            // line 54
            echo "            ";
            if (($this->getAttribute($context["vehi"], "status", array()) == "rented")) {
                echo " Rented ";
            }
            // line 55
            echo "            ";
            if (($this->getAttribute($context["vehi"], "status", array()) == "reserved")) {
                echo " Reserved ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (($this->getAttribute($context["vehi"], "status", array()) == "available")) {
                // line 58
                echo "
            <div class=\"btn-group\" >

                <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("vehicle_dispatch", array("id" => $this->getAttribute($context["vehi"], "id", array()), "status" => "rented")), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-xs btn-success\">Dispatch</button></a>
            </div>
        ";
            }
            // line 64
            echo "
            ";
            // line 65
            if (($this->getAttribute($context["vehi"], "status", array()) == "rented")) {
                // line 66
                echo "
                <div class=\"btn-group\" >

                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("vehicle_dispatch", array("id" => $this->getAttribute($context["vehi"], "id", array()), "status" => "available")), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-xs btn-success\">Finish</button></a>
                </div>
            ";
            }
            // line 72
            echo "
        </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</ul>

";
        
        $__internal_0b4d3c8d4e01f10ae97c7b8479f3329300afe59a552529b14aaa6714804d8d1f->leave($__internal_0b4d3c8d4e01f10ae97c7b8479f3329300afe59a552529b14aaa6714804d8d1f_prof);

    }

    public function getTemplateName()
    {
        return "vehicle/viewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  188 => 72,  182 => 69,  177 => 66,  175 => 65,  172 => 64,  166 => 61,  161 => 58,  159 => 57,  156 => 56,  151 => 55,  146 => 54,  142 => 53,  135 => 49,  129 => 46,  123 => 43,  116 => 39,  110 => 36,  104 => 33,  98 => 32,  94 => 30,  90 => 29,  75 => 16,  69 => 15,  59 => 10,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* All Vehicles*/
/* {% endblock %}*/
/* */
/* {% block links %}*/
/*     <div class="btn-group" >*/
/*        <a href="{{url('vehicle_create')}}"> <button type="button" class="btn btn-xs btn-success">Create Vehicle</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <table class="table table-striped table-responsive" width="100%">*/
/* 	<tr>*/
/* 		<th>Name</th>*/
/*         <th>Type</th>*/
/*         <th>Plate</th>*/
/* 		<th>Fuel</th>*/
/* 		<th>Transmission</th>*/
/* 		<th>Description</th>*/
/* 		<th>Status</th>*/
/* 	</tr>*/
/* */
/* */
/* */
/*     {% for vehi in vehicles %}*/
/*         <tr>*/
/*         <td>*/
/*         <a href="{{url('vehicle_view',{'id':vehi.id})}}">{{ vehi.name|e }}</a><br>*/
/*             <img src="{{ asset('img/'~vehi.id~'.jpg') }}" width="200" height="200" alt="Symfony!" />*/
/*         </td>*/
/* */
/*         <td>{{ vehi.type|e}}*/
/*         </td>*/
/* */
/* 		<td>{{ vehi.plate|e }}*/
/*         </td>*/
/* */
/* */
/*         <td>{{ vehi.fuel|e }}*/
/*         </td>*/
/* */
/*         <td>{{ vehi.transmission|e }}*/
/*         </td>*/
/* */
/*         <td>{{ vehi.description|e }}*/
/*         </td>*/
/* */
/* */
/*        	<td>{%if vehi.status=='available' %} Available {% endif %}*/
/*             {%if vehi.status=='rented' %} Rented {% endif %}*/
/*             {%if vehi.status=='reserved' %} Reserved {% endif %}*/
/* */
/*         {% if vehi.status=='available' %}*/
/* */
/*             <div class="btn-group" >*/
/* */
/*                 <a href="{{ url('vehicle_dispatch', {'id': vehi.id ,'status':'rented'}) }}"><button type="button" class="btn btn-xs btn-success">Dispatch</button></a>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*             {% if vehi.status=='rented' %}*/
/* */
/*                 <div class="btn-group" >*/
/* */
/*                     <a href="{{ url('vehicle_dispatch', {'id': vehi.id ,'status':'available'}) }}"><button type="button" class="btn btn-xs btn-success">Finish</button></a>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
