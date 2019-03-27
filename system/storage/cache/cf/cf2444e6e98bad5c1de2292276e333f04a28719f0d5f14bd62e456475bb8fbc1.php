<?php

/* default/template/press/all.twig */
class __TwigTemplate_9a36637ceff91cc935eb88dbc1af1beb45485b83bde8ca6a91c8ed4036de05a1 extends Twig_Template
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
            echo (isset($context["text_press_category"]) ? $context["text_press_category"] : null);
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
        if ((isset($context["presses"]) ? $context["presses"] : null)) {
            echo " 
      
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["presses"]) ? $context["presses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["press"]) {
                echo " 
      
          <h4><a href=\"";
                // line 52
                echo $this->getAttribute($context["press"], "link", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["press"], "title", array());
                echo "\">";
                echo $this->getAttribute($context["press"], "title", array());
                echo "</a></h4>
          
        <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['press'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo " 
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 57
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 58
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
       ";
        } else {
            // line 60
            echo "   
      <p>";
            // line 61
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 63
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 65
        echo " 
      ";
        // line 66
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 67
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 69
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/press/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 69,  226 => 67,  222 => 66,  219 => 65,  211 => 63,  206 => 61,  203 => 60,  197 => 58,  193 => 57,  189 => 55,  175 => 52,  168 => 50,  163 => 48,  157 => 47,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  136 => 40,  134 => 39,  130 => 38,  126 => 36,  116 => 35,  110 => 34,  105 => 31,  97 => 26,  90 => 25,  83 => 24,  80 => 23,  73 => 19,  62 => 17,  55 => 15,  47 => 12,  43 => 11,  37 => 10,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {{ header }} */
/* {% if categories %} */
/* <div class="container visible-xs">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_press_category }}</span>*/
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
/*       {% if presses %} */
/*       */
/*         {% for press in presses %} */
/*       */
/*           <h4><a href="{{ press.link }}" title="{{ press.title }}">{{ press.title }}</a></h4>*/
/*           */
/*         <hr>*/
/*         {% endfor %} */
/*         <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*        {% else %}   */
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %} */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
