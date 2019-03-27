<?php

/* default/template/extension/module/press_latest.twig */
class __TwigTemplate_b3f62a5fd8b2c1acca3862d20d048117cc4748e6c2437e99e9aa5e14834a62bf extends Twig_Template
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
        echo "<h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h3>
";
        // line 2
        if ((isset($context["presses"]) ? $context["presses"] : null)) {
            echo " 
<div class=\"list-group\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["presses"]) ? $context["presses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["press"]) {
                echo " 
  <a href=\"";
                // line 5
                echo $this->getAttribute($context["press"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["press"], "name", array());
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['press'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/press_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  35 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <h3>{{ heading_title }} </h3>*/
/* {% if presses %} */
/* <div class="list-group">*/
/* 	{% for press in presses %} */
/*   <a href="{{ press.href }}" class="list-group-item">{{ press.name }}</a>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endif %}*/
