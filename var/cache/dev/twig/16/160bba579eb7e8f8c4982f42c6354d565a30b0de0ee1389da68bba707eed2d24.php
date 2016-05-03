<?php

/* customer/viewAll.html.twig */
class __TwigTemplate_828e70f25e619bc3a103df3abaca3e9cac32d2a1f6e11a3155fcef7aef896010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "customer/viewAll.html.twig", 2);
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
        $__internal_e29b60c7239b137c815069927008305f381f5c67b4da715c844bd1a26b052294 = $this->env->getExtension("native_profiler");
        $__internal_e29b60c7239b137c815069927008305f381f5c67b4da715c844bd1a26b052294->enter($__internal_e29b60c7239b137c815069927008305f381f5c67b4da715c844bd1a26b052294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/viewAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29b60c7239b137c815069927008305f381f5c67b4da715c844bd1a26b052294->leave($__internal_e29b60c7239b137c815069927008305f381f5c67b4da715c844bd1a26b052294_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a8038b10f3a1e4dfb653e84e678c4f58a16d46243979dcfb6643dd3f5263ee2 = $this->env->getExtension("native_profiler");
        $__internal_4a8038b10f3a1e4dfb653e84e678c4f58a16d46243979dcfb6643dd3f5263ee2->enter($__internal_4a8038b10f3a1e4dfb653e84e678c4f58a16d46243979dcfb6643dd3f5263ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "All Customers
";
        
        $__internal_4a8038b10f3a1e4dfb653e84e678c4f58a16d46243979dcfb6643dd3f5263ee2->leave($__internal_4a8038b10f3a1e4dfb653e84e678c4f58a16d46243979dcfb6643dd3f5263ee2_prof);

    }

    // line 8
    public function block_links($context, array $blocks = array())
    {
        $__internal_3d9980d006bb47a5f7d8cfdbe0fa3a204b7aef6b252135b94ca4f6a5f4346166 = $this->env->getExtension("native_profiler");
        $__internal_3d9980d006bb47a5f7d8cfdbe0fa3a204b7aef6b252135b94ca4f6a5f4346166->enter($__internal_3d9980d006bb47a5f7d8cfdbe0fa3a204b7aef6b252135b94ca4f6a5f4346166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 9
        echo "    <div class=\"btn-group\" >
       <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("customer_create");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Create Customer</button></a>
    </div>
";
        
        $__internal_3d9980d006bb47a5f7d8cfdbe0fa3a204b7aef6b252135b94ca4f6a5f4346166->leave($__internal_3d9980d006bb47a5f7d8cfdbe0fa3a204b7aef6b252135b94ca4f6a5f4346166_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e908cf7f4d45b49d205410ccaaa2d888e833835407d3ddd5fbcfc82a64f8285d = $this->env->getExtension("native_profiler");
        $__internal_e908cf7f4d45b49d205410ccaaa2d888e833835407d3ddd5fbcfc82a64f8285d->enter($__internal_e908cf7f4d45b49d205410ccaaa2d888e833835407d3ddd5fbcfc82a64f8285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<table width=\"100%\">
\t<tr>
\t\t<th>Name</th>
        <th>NIC</th>
        <th>Contact Number</th>
\t\t<th>Address</th>
\t\t<th>Email</th>

\t</tr>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["cus"]) {
            // line 27
            echo "        <tr>
        <td>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("customer_view", array("id" => $this->getAttribute($context["cus"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "name", array()));
            echo "</a>
        </td>

        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "nic", array()));
            echo "
        </td>

\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "contactNumber", array()));
            echo "
        </td>


        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "address", array()));
            echo "
        </td>

        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["cus"], "email", array()));
            echo "
        </td>



      
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</ul>

";
        
        $__internal_e908cf7f4d45b49d205410ccaaa2d888e833835407d3ddd5fbcfc82a64f8285d->leave($__internal_e908cf7f4d45b49d205410ccaaa2d888e833835407d3ddd5fbcfc82a64f8285d_prof);

    }

    public function getTemplateName()
    {
        return "customer/viewAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  122 => 42,  116 => 39,  109 => 35,  103 => 32,  95 => 29,  91 => 27,  87 => 26,  75 => 16,  69 => 15,  59 => 10,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* All Customers*/
/* {% endblock %}*/
/* */
/* {% block links %}*/
/*     <div class="btn-group" >*/
/*        <a href="{{url('customer_create')}}"> <button type="button" class="btn btn-xs btn-success">Create Customer</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <table width="100%">*/
/* 	<tr>*/
/* 		<th>Name</th>*/
/*         <th>NIC</th>*/
/*         <th>Contact Number</th>*/
/* 		<th>Address</th>*/
/* 		<th>Email</th>*/
/* */
/* 	</tr>*/
/* */
/*     {% for cus in customers %}*/
/*         <tr>*/
/*         <td>*/
/*         <a href="{{url('customer_view',{'id':cus.id})}}">{{ cus.name|e }}</a>*/
/*         </td>*/
/* */
/*         <td>{{ cus.nic|e}}*/
/*         </td>*/
/* */
/* 		<td>{{ cus.contactNumber|e }}*/
/*         </td>*/
/* */
/* */
/*         <td>{{ cus.address|e }}*/
/*         </td>*/
/* */
/*         <td>{{ cus.email|e }}*/
/*         </td>*/
/* */
/* */
/* */
/*       */
/*         </tr>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
