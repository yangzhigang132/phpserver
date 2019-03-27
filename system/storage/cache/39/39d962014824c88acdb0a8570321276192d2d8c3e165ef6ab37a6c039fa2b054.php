<?php

/* default/template/faq/faq.twig */
class __TwigTemplate_0898e77adc389b4c8dca751290a772a249d01c2f852c89463ccd40a74360bd2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " 
";
        // line 2
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            echo " 
<div class=\"container visible-xs\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 5
            echo (isset($context["text_faq_category"]) ? $context["text_faq_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex2-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
        ";
                // line 11
                if ($this->getAttribute($context["category"], "children", array())) {
                    echo " 
        <li class=\"dropdown\"><a href=\"";
                    // line 12
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        echo " 
              <ul class=\"list-unstyled\">
                <li><a href=\"";
                        // line 17
                        echo $this->getAttribute($context["children"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children"], "name", array());
                        echo "</a></li>
              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo " 
            </div>
          </div>
        </li>
        ";
                } else {
                    // line 23
                    echo "   
        <li><a href=\"";
                    // line 24
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 25
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo " 
      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 31
        echo " 
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 35
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " 
  </ul>
  <div class=\"row\">";
        // line 38
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 39
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 41
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 42
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 45
            echo "    ";
        }
        echo " 
     
    <div id=\"content\" class=\"";
        // line 47
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 
      ";
        // line 48
        if ((isset($context["faqs"]) ? $context["faqs"] : null)) {
            echo " 
      
        <div class=\"panel-group\" id=\"accordion\">
       \t  ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
                echo " 
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
                // line 54
                echo $this->getAttribute($context["faq"], "faq_id", array());
                echo "\"><h4 class=\"panel-title\">";
                echo $this->getAttribute($context["faq"], "title", array());
                echo "</h4></a>
            </div>
            <div id=\"collapse";
                // line 56
                echo $this->getAttribute($context["faq"], "faq_id", array());
                echo "\" class=\"panel-collapse collapse\">
              <div class=\"panel-body\">";
                // line 57
                echo $this->getAttribute($context["faq"], "answer", array());
                echo "</div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " 
        </div>
        
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 64
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 65
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        } else {
            // line 67
            echo "   
      <p>";
            // line 68
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 70
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 72
        echo " 
      
      ";
        // line 74
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 75
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 77
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/faq/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 77,  238 => 75,  234 => 74,  230 => 72,  222 => 70,  217 => 68,  214 => 67,  208 => 65,  204 => 64,  198 => 60,  188 => 57,  184 => 56,  177 => 54,  169 => 51,  163 => 48,  157 => 47,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  136 => 40,  134 => 39,  130 => 38,  126 => 36,  116 => 35,  110 => 34,  105 => 31,  97 => 26,  90 => 25,  83 => 24,  80 => 23,  73 => 19,  62 => 17,  55 => 15,  47 => 12,  43 => 11,  37 => 10,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {{ header }} */
/* {% if categories %} */
/* <div class="container visible-xs">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_faq_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex2-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %} */
/*         {% if category.children %} */
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               {% for children in category %} */
/*               <ul class="list-unstyled">*/
/*                 <li><a href="{{ children.href }}">{{ children.name }}</a></li>*/
/*               </ul>*/
/*               {% endfor %} */
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% else %}   */
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %} */
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} */
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   <div class="row">{{ column_left }} */
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %} */
/*      */
/*     <div id="content" class="{{ class }}">{{ content_top }} */
/*       {% if faqs %} */
/*       */
/*         <div class="panel-group" id="accordion">*/
/*        	  {% for faq in faqs %} */
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ faq.faq_id }}"><h4 class="panel-title">{{ faq.title }}</h4></a>*/
/*             </div>*/
/*             <div id="collapse{{ faq.faq_id }}" class="panel-collapse collapse">*/
/*               <div class="panel-body">{{ faq.answer }}</div>*/
/*             </div>*/
/*           </div>*/
/*           {% endfor %} */
/*         </div>*/
/*         */
/*         <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       {% else %}   */
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %} */
/*       */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
