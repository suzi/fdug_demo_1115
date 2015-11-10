<?php

/* themes/custom/fdug_demo/templates/page.html.twig */
class __TwigTemplate_10020def8ee32e119344bd6b09cacb89a57802dbe22596af3734ee766bb5b342 extends Twig_Template
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
        $tags = array("if" => 87);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 53
        echo "
<!--[if lt IE 8]>
  <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class=\"bg-ios\"></div>

<div class=\"layout-container\">

  <div class=\"header-container\">
    ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </div>
  <div class=\"clearfix\"></div>


  ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 75
        echo "
    <div class=\"layout-content main-container\">
      <div class=\"main-container__content main wrapper clearfix\">
        ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
        ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "

        ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>
    </div>";
        // line 84
        echo "
  </main>

  ";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 88
            echo "    <div class=\"footer-container clearfix\">
      <footer role=\"contentinfo\" class=\"footer-container__content wrapper\">
        ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </footer>
    </div>
  ";
        }
        // line 94
        echo "



</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/fdug_demo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 94,  108 => 90,  104 => 88,  102 => 87,  97 => 84,  92 => 81,  87 => 79,  83 => 78,  78 => 75,  72 => 71,  67 => 69,  62 => 67,  54 => 62,  43 => 53,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* <!--[if lt IE 8]>*/
/*   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>*/
/* <![endif]-->*/
/* <div class="bg-ios"></div>*/
/* */
/* <div class="layout-container">*/
/* */
/*   <div class="header-container">*/
/*     {{ page.header }}*/
/*   </div>*/
/*   <div class="clearfix"></div>*/
/* */
/* */
/*   {{ page.breadcrumb }}*/
/* */
/*   {{ page.highlighted }}*/
/* */
/*   {{ page.help }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content main-container">*/
/*       <div class="main-container__content main wrapper clearfix">*/
/*         {{ page.primary_menu }}*/
/*         {{ page.secondary_menu }}*/
/* */
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>{# /.layout-content #}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <div class="footer-container clearfix">*/
/*       <footer role="contentinfo" class="footer-container__content wrapper">*/
/*         {{ page.footer }}*/
/*       </footer>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* */
/* */
/* */
/* </div>{# /.layout-container #}*/
/* */
