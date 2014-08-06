<?php

/* base.html */
class __TwigTemplate_0174e77033fc06d77fb54d170eddee574f4c553a9c42732b663ee1db5af230dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'extra_head_css' => array($this, 'block_extra_head_css'),
            'extra_head_js' => array($this, 'block_extra_head_js'),
            'header' => array($this, 'block_header'),
            'left_sidebar' => array($this, 'block_left_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'right_sidebar' => array($this, 'block_right_sidebar'),
            'footer' => array($this, 'block_footer'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <title>
            ";
        // line 5
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 6
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
            ";
        } else {
            // line 8
            echo "                    ";
            $this->displayBlock('title', $context, $blocks);
            // line 9
            echo "            ";
        }
        // line 10
        echo "        </title>
        <meta charset=\"utf-8\" />
        ";
        // line 12
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" />
        ";
        // line 15
        $this->displayBlock('extra_head_css', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('extra_head_js', $context, $blocks);
        // line 17
        echo "    </head>
    <body";
        // line 18
        if ((isset($context["body_class"]) ? $context["body_class"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["body_class"]) ? $context["body_class"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["body_style"]) ? $context["body_style"] : null)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["body_style"]) ? $context["body_style"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "        <div class=\"container";
        if ((isset($context["wide"]) ? $context["wide"] : null)) {
            echo "-fluid";
        }
        echo "\">
            ";
        // line 21
        $this->displayBlock('left_sidebar', $context, $blocks);
        // line 22
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('right_sidebar', $context, $blocks);
        // line 25
        echo "            <div class=\"footer\">
                ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "            </div>
        </div>
        ";
        // line 29
        $this->displayBlock('footer_js', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Phlask Powered";
    }

    // line 12
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_extra_head_css($context, array $blocks = array())
    {
    }

    // line 16
    public function block_extra_head_js($context, array $blocks = array())
    {
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
    }

    // line 21
    public function block_left_sidebar($context, array $blocks = array())
    {
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    // line 24
    public function block_right_sidebar($context, array $blocks = array())
    {
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer_js($context, array $blocks = array())
    {
        // line 30
        echo "            <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 30,  169 => 29,  164 => 26,  159 => 24,  154 => 23,  149 => 22,  144 => 21,  139 => 19,  134 => 16,  129 => 15,  124 => 12,  118 => 8,  112 => 33,  110 => 29,  106 => 27,  104 => 26,  95 => 23,  92 => 22,  90 => 21,  83 => 20,  65 => 17,  62 => 16,  60 => 15,  56 => 13,  50 => 10,  47 => 9,  44 => 8,  38 => 6,  36 => 5,  30 => 1,  111 => 35,  108 => 34,  101 => 25,  98 => 24,  93 => 27,  87 => 25,  85 => 24,  81 => 19,  78 => 21,  71 => 17,  68 => 18,  61 => 12,  58 => 11,  54 => 12,  51 => 9,  48 => 8,  43 => 6,  41 => 5,  37 => 3,  34 => 2,);
    }
}
