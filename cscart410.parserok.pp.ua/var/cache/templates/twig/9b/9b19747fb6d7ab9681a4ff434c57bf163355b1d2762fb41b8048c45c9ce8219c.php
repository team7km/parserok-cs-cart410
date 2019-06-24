<?php

/* __string_template__8deb421bd56f14e71717b427e4532c029379d0935564b6596082f790cba6dc1d */
class __TwigTemplate_8ec90920f1b27589195d83f038c751335e969749c5b3a160848d2066d23ee925 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "low_stock_subj", array("[product]" => (((isset($context["product"]) ? $context["product"] : null) . " #") . (isset($context["product_id"]) ? $context["product_id"] : null))))));
        echo "

    <table class=\"info\">
      <tr>
        <td>";
        // line 5
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "product");
        echo ":</td>
        <td>";
        // line 6
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 9
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "id");
        echo ":</td>
        <td>";
        // line 10
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "sku");
        echo ":</td>
        <td>";
        // line 14
        echo (isset($context["product_code"]) ? $context["product_code"] : null);
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 17
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "qty");
        echo ":</td>
        <td><b>";
        // line 18
        echo (isset($context["new_qty"]) ? $context["new_qty"] : null);
        echo "</b></td>
      </tr>
      ";
        // line 20
        if ((isset($context["product_options"]) ? $context["product_options"] : null)) {
            // line 21
            echo "      <tr>
        <td colspan=\"2\">";
            // line 22
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "product_options");
            echo ":
          <br>
          <hr>
        </td>
      </tr>
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "      <tr>
        <td>";
                // line 29
                echo $this->getAttribute($context["option"], "option_name", array());
                echo ":</td>
        <td>";
                // line 30
                echo $this->getAttribute($context["option"], "variant_name", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo " ";
        }
        // line 33
        echo "    </table>

";
        // line 35
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__8deb421bd56f14e71717b427e4532c029379d0935564b6596082f790cba6dc1d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  101 => 33,  98 => 32,  89 => 30,  85 => 29,  82 => 28,  78 => 27,  70 => 22,  67 => 21,  65 => 20,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  40 => 10,  36 => 9,  30 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ snippet("header", {"title":__("low_stock_subj", {"[product]": "#{product} ##{product_id}"}) } ) }}*/
/* */
/*     <table class="info">*/
/*       <tr>*/
/*         <td>{{ __("product") }}:</td>*/
/*         <td>{{ product }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("id") }}:</td>*/
/*         <td>{{ product_id }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("sku") }}:</td>*/
/*         <td>{{ product_code }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>{{ __("qty") }}:</td>*/
/*         <td><b>{{ new_qty }}</b></td>*/
/*       </tr>*/
/*       {% if product_options %}*/
/*       <tr>*/
/*         <td colspan="2">{{ __("product_options") }}:*/
/*           <br>*/
/*           <hr>*/
/*         </td>*/
/*       </tr>*/
/*       {% for option in product_options %}*/
/*       <tr>*/
/*         <td>{{ option.option_name }}:</td>*/
/*         <td>{{ option.variant_name }}</td>*/
/*       </tr>*/
/*       {% endfor %} {% endif %}*/
/*     </table>*/
/* */
/* {{ snippet("footer") }}*/
