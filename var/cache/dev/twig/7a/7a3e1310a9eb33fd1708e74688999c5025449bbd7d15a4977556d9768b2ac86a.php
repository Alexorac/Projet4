<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b2f1322aecbd6429255ca3351a305b06309771a4c82f5950163391c7ff39c1ca extends Twig_Template
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
        $__internal_7179b0250d5b0fcb80cfd4c609ee03eaba4547192c841ef66edd884ca82837a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7179b0250d5b0fcb80cfd4c609ee03eaba4547192c841ef66edd884ca82837a6->enter($__internal_7179b0250d5b0fcb80cfd4c609ee03eaba4547192c841ef66edd884ca82837a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_42a89be70123c8d6c5ce63b55a24ece1e57d40cad61967452f76e7c06c2afc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a89be70123c8d6c5ce63b55a24ece1e57d40cad61967452f76e7c06c2afc61->enter($__internal_42a89be70123c8d6c5ce63b55a24ece1e57d40cad61967452f76e7c06c2afc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7179b0250d5b0fcb80cfd4c609ee03eaba4547192c841ef66edd884ca82837a6->leave($__internal_7179b0250d5b0fcb80cfd4c609ee03eaba4547192c841ef66edd884ca82837a6_prof);

        
        $__internal_42a89be70123c8d6c5ce63b55a24ece1e57d40cad61967452f76e7c06c2afc61->leave($__internal_42a89be70123c8d6c5ce63b55a24ece1e57d40cad61967452f76e7c06c2afc61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
