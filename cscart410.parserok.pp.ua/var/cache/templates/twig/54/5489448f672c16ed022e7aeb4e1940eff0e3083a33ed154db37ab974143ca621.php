<?php

/* __string_template__7e67382ea051f345bf2f0b19c04126151b996dbbd57cf0ed76b398bd74f49af4 */
class __TwigTemplate_70ebbc6a7edc497232ba28aac3c61c3d3eeca157316c593b1fdfbb12911a43f2 extends Twig_Template
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
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment_text", array("[plan]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array()), "[price]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "price", array()), "[href]" => (isset($context["url"]) ? $context["url"] : null)));
        echo "
<br /><br />
";
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__7e67382ea051f345bf2f0b19c04126151b996dbbd57cf0ed76b398bd74f49af4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("vendor_plans.plan_payment_text", {"[plan]": plan.plan, "[price]": plan.price, "[href]": url}) }}*/
/* <br /><br />*/
/* {{ snippet("vendorplans.plandetails") }}*/
/* {{ snippet("footer") }}*/
