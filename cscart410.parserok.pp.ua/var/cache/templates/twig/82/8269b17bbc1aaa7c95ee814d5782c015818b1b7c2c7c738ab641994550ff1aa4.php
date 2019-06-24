<?php

/* __string_template__5181f9046210f86013969c4f8f8f0e6b66d8fc54b5ae35d85b6db9dbf520ac1f */
class __TwigTemplate_c5d3d6be710195ecf7be984fc4c0817ca06ed834021b003bed902ce3c2283e76 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "

";
        // line 3
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_has_been_changed_text", array("[plan]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array())));
        echo "
<br /><br />
";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 6
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__5181f9046210f86013969c4f8f8f0e6b66d8fc54b5ae35d85b6db9dbf520ac1f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/* {{ __("vendor_plans.plan_has_been_changed_text", {"[plan]": plan.plan}) }}*/
/* <br /><br />*/
/* {{ snippet("vendorplans.plandetails") }}*/
/* {{ snippet("footer") }}*/
