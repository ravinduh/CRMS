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
        $__internal_dd91876b1ebd86c6f1dfef84864fe39d705a6ba86496fd226cd211bfc374a3d2 = $this->env->getExtension("native_profiler");
        $__internal_dd91876b1ebd86c6f1dfef84864fe39d705a6ba86496fd226cd211bfc374a3d2->enter($__internal_dd91876b1ebd86c6f1dfef84864fe39d705a6ba86496fd226cd211bfc374a3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/viewall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd91876b1ebd86c6f1dfef84864fe39d705a6ba86496fd226cd211bfc374a3d2->leave($__internal_dd91876b1ebd86c6f1dfef84864fe39d705a6ba86496fd226cd211bfc374a3d2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f0898101496a7b46379473ad3f6417457e9f4aea2ec8cbfc358ab23ef0abc24 = $this->env->getExtension("native_profiler");
        $__internal_1f0898101496a7b46379473ad3f6417457e9f4aea2ec8cbfc358ab23ef0abc24->enter($__internal_1f0898101496a7b46379473ad3f6417457e9f4aea2ec8cbfc358ab23ef0abc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "All Vehicles
";
        
        $__internal_1f0898101496a7b46379473ad3f6417457e9f4aea2ec8cbfc358ab23ef0abc24->leave($__internal_1f0898101496a7b46379473ad3f6417457e9f4aea2ec8cbfc358ab23ef0abc24_prof);

    }

    // line 8
    public function block_links($context, array $blocks = array())
    {
        $__internal_e61ce9b59a6fd13a65227862e45d2b7c8165bd87dce8b8fc66d446b4c0198fb5 = $this->env->getExtension("native_profiler");
        $__internal_e61ce9b59a6fd13a65227862e45d2b7c8165bd87dce8b8fc66d446b4c0198fb5->enter($__internal_e61ce9b59a6fd13a65227862e45d2b7c8165bd87dce8b8fc66d446b4c0198fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 9
        echo "    <div class=\"btn-group\" >
       <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("vehicle_create");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Create Vehicle</button></a>
    </div>
";
        
        $__internal_e61ce9b59a6fd13a65227862e45d2b7c8165bd87dce8b8fc66d446b4c0198fb5->leave($__internal_e61ce9b59a6fd13a65227862e45d2b7c8165bd87dce8b8fc66d446b4c0198fb5_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef159892e70572a8d2e75615228ee86e311728490f8dc05199f6065156f692b = $this->env->getExtension("native_profiler");
        $__internal_cef159892e70572a8d2e75615228ee86e311728490f8dc05199f6065156f692b->enter($__internal_cef159892e70572a8d2e75615228ee86e311728490f8dc05199f6065156f692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            if (($this->getAttribute($context["vehi"], "status", array()) == 1)) {
                echo " Available ";
            }
            // line 54
            echo "            ";
            if (($this->getAttribute($context["vehi"], "status", array()) == 0)) {
                echo " Unavailable ";
            }
            // line 55
            echo "
        </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</ul>

";
        
        $__internal_cef159892e70572a8d2e75615228ee86e311728490f8dc05199f6065156f692b->leave($__internal_cef159892e70572a8d2e75615228ee86e311728490f8dc05199f6065156f692b_prof);

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
        return array (  160 => 59,  151 => 55,  146 => 54,  142 => 53,  135 => 49,  129 => 46,  123 => 43,  116 => 39,  110 => 36,  104 => 33,  98 => 32,  94 => 30,  90 => 29,  75 => 16,  69 => 15,  59 => 10,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 2,);
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
/*        	<td>{%if vehi.status==1 %} Available {% endif %}*/
/*             {%if vehi.status==0 %} Unavailable {% endif %}*/
/* */
/*         </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
