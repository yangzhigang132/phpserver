<?php

/* default/template/extension/module/press_category.twig */
class __TwigTemplate_226cac77edde7a16c03464729b24a71e3378220d7efdd37cb3e99c4fe757c8f2 extends Twig_Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["press_categories"]) ? $context["press_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["press_category"]) {
            // line 3
            echo "  ";
            if (($this->getAttribute($context["press_category"], "press_category_id", array()) == (isset($context["press_category_id"]) ? $context["press_category_id"] : null))) {
                echo " 
  <a href=\"";
                // line 4
                echo $this->getAttribute($context["press_category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["press_category"], "name", array());
                echo "</a> 
  ";
                // line 5
                if ($this->getAttribute($context["press_category"], "children", array())) {
                    // line 6
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["press_category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        echo "  ";
                        if (($this->getAttribute($context["child"], "press_category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 8
                            echo "  <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
  ";
                        } else {
                            // line 9
                            echo " 
  <a href=\"";
                            // line 10
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
  ";
                        }
                        // line 12
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "  ";
                }
                // line 14
                echo "  ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["press_category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["press_category"], "name", array());
                echo "</a>
  ";
            }
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['press_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/press_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  84 => 16,  74 => 14,  71 => 13,  65 => 12,  58 => 10,  55 => 9,  47 => 8,  44 => 7,  39 => 6,  37 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="list-group">*/
/*   {% for press_category in press_categories %}*/
/*   {% if press_category.press_category_id == press_category_id %} */
/*   <a href="{{ press_category.href }}" class="list-group-item active">{{ press_category.name }}</a> */
/*   {% if press_category.children %}*/
/*   {% for child in press_category.children %}*/
/*   {% if child.press_category_id == child_id %}*/
/*   <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a> */
/*   {% else %} */
/*   <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   {% else %} <a href="{{ press_category.href }}" class="list-group-item">{{ press_category.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */
