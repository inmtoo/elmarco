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

/* elmarco/view/template/common/footer.twig */
class __TwigTemplate_50c427f9bd69270b8cbf0099b147b4b041ed37f8ccbca045274e18599abe6e09 extends Template
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
        echo "<footer id=\"footer\">";
        echo ($context["text_footer"] ?? null);
        echo "<br/>";
        echo ($context["text_version"] ?? null);
        echo "</footer></div>
<script src=\"";
        // line 2
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "elmarco/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elmarco/view/template/common/footer.twig", "C:\\OpenServer\\domains\\elmarco\\elmarcosite\\elmarco\\view\\template\\common\\footer.twig");
    }
}
