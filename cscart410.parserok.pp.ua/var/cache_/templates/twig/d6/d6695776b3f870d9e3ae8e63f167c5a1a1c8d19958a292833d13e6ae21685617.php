<?php

/* __string_template__eaf6350bb10bac4c3c219b27e00a796ebe30c5fd9377afaff7163c14e8657cbc */
class __TwigTemplate_a7a96da21cb2b4906c3d393eb8fcdf77feed50cc20c1374f599e90d944e080d1 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_approval_pending");
    }

    public function getTemplateName()
    {
        return "__string_template__eaf6350bb10bac4c3c219b27e00a796ebe30c5fd9377afaff7163c14e8657cbc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ __("vendor_approval_pending") }}*/
