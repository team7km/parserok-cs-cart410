<?php

/* __string_template__bd0364c39a2b83be93bdec23baa51f92f75d811e92cc417f70b6c9ad248fa771 */
class __TwigTemplate_58cca8fa180e07049185ff1bfc0a3672c32da86afa46a5821aa36ef74afcf719 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header", array("title" => $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_subj", array("[order]" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()), "[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())))));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "dear");
        echo " ";
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array())) {
            echo $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "firstname", array());
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        echo ",
    <br />
    ";
        // line 4
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "change_order_status_default_text", array("[status]" => $this->getAttribute((isset($context["order_status"]) ? $context["order_status"] : null), "description", array())));
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('tygh.core')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : null), "order_id", array()));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__bd0364c39a2b83be93bdec23baa51f92f75d811e92cc417f70b6c9ad248fa771";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 6,  37 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header", {"title": __("change_order_status_default_subj", {"[order]": order_info.order_id, "[status]": order_status.description}) } ) }}*/
/*     {{ __("dear") }} {% if order_info.firstname %}{{ order_info.firstname }} {% else %} {{ __("customer") }} {% endif %},*/
/*     <br />*/
/*     {{ __("change_order_status_default_text", {"[status]": order_status.description}) }}*/
/*     <br />*/
/*     <br /> {{ include_doc("order.summary", order_info.order_id) }}*/
/*   {{ snippet("footer") }}*/
