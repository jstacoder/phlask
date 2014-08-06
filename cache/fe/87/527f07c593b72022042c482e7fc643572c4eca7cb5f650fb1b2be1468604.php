<?php

/* new.html */
class __TwigTemplate_fe87527f07c593b72022042c482e7fc643572c4eca7cb5f650fb1b2be1468604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'extra_head_css' => array($this, 'block_extra_head_css'),
            'header' => array($this, 'block_header'),
            'left_sidebar' => array($this, 'block_left_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'right_sidebar' => array($this, 'block_right_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_head_css($context, array $blocks = array())
    {
        // line 3
        echo "        <link rel=\"text/stylesheet\" href=\"http://174.140.227.137/static/css/style.css\" />
    ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->env->loadTemplate("_header.html")->display($context);
        // line 7
        echo "    ";
    }

    // line 8
    public function block_left_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "        <div class=\"left-side\">
            <p>This should be left sidebar</p>
        </div>
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"body\">
            <p>This is the body text</p>
        </div>
    ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "        <div class=\"main-content\">
            <h2>Main content</h2>
            ";
        // line 21
        if ((isset($context["data"]) ? $context["data"] : null)) {
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
            echo "</p>
            ";
        }
        // line 24
        echo "        </div>
    ";
    }

    // line 26
    public function block_right_sidebar($context, array $blocks = array())
    {
        // line 27
        echo "        <div class=\"right-side\">
            <h3>right</h3>
        </div>
    ";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "        <p>Footer</p>
    ";
    }

    public function getTemplateName()
    {
        return "new.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  102 => 31,  95 => 27,  92 => 26,  87 => 24,  81 => 22,  79 => 21,  75 => 19,  72 => 18,  65 => 14,  62 => 13,  55 => 9,  52 => 8,  48 => 7,  45 => 6,  42 => 5,  37 => 3,  34 => 2,);
    }
}
