<?php

/* themes/nero/templates/menu--main.html.twig */
class __TwigTemplate_5d5ed23f1e65b80f34395fc45c2d46d72bd5a30d5cde9cc856696ab785c9c34c extends Twig_Template
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
        $tags = array("set" => 12, "for" => 14, "if" => 18);
        $filters = array();
        $functions = array("random" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array(),
                array('random')
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

        // line 10
        echo "
";
        // line 12
        $context["colors"] = array(0 => "blightblue", 1 => "bred", 2 => "bviolet", 3 => "bgreen", 4 => "borange", 5 => "bblue");
        // line 13
        echo "<ul>
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "
    ";
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 19
                echo "      <li>
\t";
                // line 20
                if (($this->getAttribute($context["item"], "title", array()) == "Home")) {
                    // line 21
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-home\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } elseif (($this->getAttribute(                // line 22
$context["item"], "title", array()) == "About")) {
                    // line 23
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-desktop\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } elseif (($this->getAttribute(                // line 24
$context["item"], "title", array()) == "Pages")) {
                    // line 25
                    echo "\t  <a href= ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\"  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-tablet\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } elseif (($this->getAttribute(                // line 26
$context["item"], "title", array()) == "Blogs")) {
                    // line 27
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-comments\"></i>  ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } elseif (($this->getAttribute(                // line 28
$context["item"], "title", array()) == "Porfolio")) {
                    // line 29
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-camera\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } elseif (($this->getAttribute(                // line 30
$context["item"], "title", array()) == "Contact")) {
                    // line 31
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                } else {
                    // line 33
                    echo "\t  <a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " rel=\"ddsubmenu2\" class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"down-arrow\"></span></a>
\t";
                }
                // line 35
                echo "\t<ul id=\"ddsubmenu2\" class=\"ddsubmenustyle\">
\t  ";
                // line 37
                echo "\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "\t    <li><a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"arrow-down\"></span></a></li>
\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t</ul>
      </li>

    ";
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "      ";
                // line 46
                echo "      ";
                if (($this->getAttribute($context["item"], "title", array()) == "Home")) {
                    // line 47
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-home\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } elseif (($this->getAttribute(                // line 48
$context["item"], "title", array()) == "About")) {
                    // line 49
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-desktop\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } elseif (($this->getAttribute(                // line 50
$context["item"], "title", array()) == "Pages")) {
                    // line 51
                    echo "\t<li><a href= ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-tablet\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } elseif (($this->getAttribute(                // line 52
$context["item"], "title", array()) == "Blogs")) {
                    // line 53
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "  class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-comments\"></i>  ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } elseif (($this->getAttribute(                // line 54
$context["item"], "title", array()) == "Porfolio")) {
                    // line 55
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-camera\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } elseif (($this->getAttribute(                // line 56
$context["item"], "title", array()) == "Contact")) {
                    // line 57
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                } else {
                    // line 59
                    echo "\t<li><a href=";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo " class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_random($this->env, (isset($context["colors"]) ? $context["colors"] : null)), "html", null, true));
                    echo "\"> <i class=\"fa fa-envelope-o\"></i> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " </a></li>
      ";
                }
                // line 61
                echo "    ";
            }
            // line 62
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 63,  253 => 62,  250 => 61,  240 => 59,  230 => 57,  228 => 56,  219 => 55,  217 => 54,  208 => 53,  206 => 52,  197 => 51,  195 => 50,  186 => 49,  184 => 48,  175 => 47,  172 => 46,  170 => 45,  167 => 44,  162 => 40,  151 => 38,  146 => 37,  143 => 35,  133 => 33,  123 => 31,  121 => 30,  112 => 29,  110 => 28,  101 => 27,  99 => 26,  90 => 25,  88 => 24,  79 => 23,  77 => 22,  68 => 21,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 10,);
    }
}
/* {#  https://api.drupal.org/api/drupal/core!modules!system!templates!menu.html.twig/8*/
/*     menu_name: The machine name of the menu.*/
/*     items: A nested list of menu items. Each menu item contains:*/
/*       attributes: HTML attributes for the menu item.*/
/*       below: The menu item child items.*/
/*       title: The menu link title.*/
/*       url: The menu link url, instance of \Drupal\Core\Url*/
/*       localized_options: Menu link localized options.*/
/* #}*/
/* */
/* {# All menu and submenu items #}*/
/* {% set colors = ['blightblue', 'bred', 'bviolet', 'bgreen', 'borange', 'bblue'] %}*/
/* <ul>*/
/*   {% for item in items %}*/
/* */
/*     {# Menu with submenu #}*/
/* */
/*     {% if item.below %}*/
/*       <li>*/
/* 	{% if item.title == 'Home' %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2"  class="{{ random(colors) }}"> <i class="fa fa-home"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% elseif item.title == 'About' %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2"  class="{{ random(colors) }}"> <i class="fa fa-desktop"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% elseif item.title == 'Pages' %}*/
/* 	  <a href= {{ item.url }} rel="ddsubmenu2"  class="{{ random(colors) }}"> <i class="fa fa-tablet"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% elseif item.title == 'Blogs' %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2" class="{{ random(colors) }}"> <i class="fa fa-comments"></i>  {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% elseif item.title == 'Porfolio' %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2" class="{{ random(colors) }}"> <i class="fa fa-camera"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% elseif item.title == 'Contact' %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2" class="{{ random(colors) }}"> <i class="fa fa-envelope-o"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% else %}*/
/* 	  <a href={{ item.url }} rel="ddsubmenu2" class="{{ random(colors) }}"> <i class="fa fa-envelope-o"></i> {{ item.title }} <span class="down-arrow"></span></a>*/
/* 	{% endif %}*/
/* 	<ul id="ddsubmenu2" class="ddsubmenustyle">*/
/* 	  {# Menu -> Submenu #}*/
/* 	  {% for item in item.below %}*/
/* 	    <li><a href="{{ item.url }}"> {{ item.title }} <span class="arrow-down"></span></a></li>*/
/* 	  {% endfor %}*/
/* 	</ul>*/
/*       </li>*/
/* */
/*     {# Menu without submenu #}*/
/*     {% else %}*/
/*       {# Menu - Link #}*/
/*       {% if item.title == 'Home' %}*/
/* 	<li><a href={{ item.url }}  class="{{ random(colors) }}"> <i class="fa fa-home"></i> {{ item.title }} </a></li>*/
/*       {% elseif item.title == 'About' %}*/
/* 	<li><a href={{ item.url }}  class="{{ random(colors) }}"> <i class="fa fa-desktop"></i> {{ item.title }} </a></li>*/
/*       {% elseif item.title == 'Pages' %}*/
/* 	<li><a href= {{ item.url }}  class="{{ random(colors) }}"> <i class="fa fa-tablet"></i> {{ item.title }} </a></li>*/
/*       {% elseif item.title == 'Blogs' %}*/
/* 	<li><a href={{ item.url }}  class="{{ random(colors) }}"> <i class="fa fa-comments"></i>  {{ item.title }} </a></li>*/
/*       {% elseif item.title == 'Porfolio' %}*/
/* 	<li><a href={{ item.url }} class="{{ random(colors) }}"> <i class="fa fa-camera"></i> {{ item.title }} </a></li>*/
/*       {% elseif item.title == 'Contact' %}*/
/* 	<li><a href={{ item.url }} class="{{ random(colors) }}"> <i class="fa fa-envelope-o"></i> {{ item.title }} </a></li>*/
/*       {% else %}*/
/* 	<li><a href={{ item.url }} class="{{ random(colors) }}"> <i class="fa fa-envelope-o"></i> {{ item.title }} </a></li>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </ul>*/
/* */
