<?php

/* themes/custom/fdug_demo/templates/field--node--title--reference-page.html.twig */
class __TwigTemplate_c6ab6dba8e2ccd82d78d866264534bca14bdf148a9c7e73f374aa8ce0d449065 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    public function getTemplateName()
    {
        return "themes/custom/fdug_demo/templates/field--node--title--reference-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
/* {#*/
/* /***/
/*  * @file field--node--title--reference-page.html.twig*/
/*  * this content type should not have a node title on display*/
/*  * so we removed the markup here*/
/*  * @todo find a better way to manage titles in d8 but this is fine for the demo*/
/*  *//* */
/* #}*/
/* */
