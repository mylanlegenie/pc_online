<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/sort_by_key.twig */
class __TwigTemplate_aff8a8de2b4444e64940f889affb90a3ab27ebcf456692801fa1dbba6aa4221b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/sql");
        echo "\" method=\"post\" class=\"print_ignore\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenFields(($context["hidden_fields"] ?? null));
        echo "
  ";
        // line 3
        echo _gettext("Sort by key:");
        // line 4
        echo "  <select name=\"sql_query\" class=\"autosubmit\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 6
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 6)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "content", [], "any", false, false, false, 6), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </select>
</form>
";
    }

    public function getTemplateName()
    {
        return "display/results/sort_by_key.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  55 => 6,  51 => 5,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/sort_by_key.twig", "/Users/mylan/Web/pc_online/PhpMyAdmin/templates/display/results/sort_by_key.twig");
    }
}
