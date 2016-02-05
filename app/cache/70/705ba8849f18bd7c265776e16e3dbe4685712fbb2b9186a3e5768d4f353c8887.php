<?php

/* index.twig */
class __TwigTemplate_30bb5277709e62c0241783c7b8aeeb3f5ad9ffba2520693bc8d7ec200d274831 extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edg  e,chrome=1\">
    <title>Portfolio</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,900,400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/css/main.css\">

    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/images/apple-touch-icon.png\"/>
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/images/apple-touch-icon-72x72.png\"/>
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/images/apple-touch-icon-114x114.png\"/>

</head>

<body id=\"app\">

<header id=\"head\">

    <hgroup>
        <h1>Stijn van der Vegt</h1>

        <h2>Web developer</h2>
    </hgroup>

    <nav id=\"navigation\" v-bind:class=\"classObject\">
        <a href=\"#\" @click=\"navigate('head', \$event)\">Home</a>
        <a href=\"\" @click=\"navigate('about-me', \$event)\">About me</a>
        <a href=\"\" @click=\"navigate('experience', \$event)\">Expierence</a>
        <a href=\"\" @click=\"navigate('education', \$event)\">Education</a>
        <a href=\"\" @click=\"navigate('portfolio', \$event)\">Portfolio</a>
        <a href=\"\" @click=\"navigate('contact', \$event)\">Contact</a>
    </nav>

</header>

<section id=\"about-me\">
    <div class=\"container\">
        <header>
            <h2 class=\"white\">";
        // line 42
        echo $this->env->getExtension('Bolt')->trans("Over mij");
        echo "</h2>
            <span class=\"subtitle white\">";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("Een korte introductie");
        echo "</span>
        </header>
        <div class=\"row\">
            <article>
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body", array()), "html", null, true);
        echo "
                <a href=\"\" class=\"btn\" target=\"_blank\">";
        // line 48
        echo $this->env->getExtension('Bolt')->trans("Prinbaar CV");
        echo "</a>
            </article>
            <figure>
                <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/img/profile.jpg\" alt=\"profile photo\"/>
            </figure>
        </div>
    </div>
</section>

<!-- <section id=\"skills\">
     <header>
         <h2>Technical skills</h2>
         <span class=\"subtitle\"></span>
     </header>
     <div class=\"skills\">
         <div class=\"skill\">
             <canvas></canvas>
             <hgroup>
                 <h3>PHP</h3>
                 <p>Donec accumsan Ligula vitae mag na crabitur id</p>
             </hgroup>
         </div>
     </div>
 </section>-->
<section id=\"experience\">
    <div class=\"container\">
        <header>
            <h2>Werkervaring</h2>
            <span class=\"subtitle\">Mijn recente werkgevers</span>
        </header>
        <div class=\"row\">
            <div class=\"work-year\">
                <span>08-2013 - heden</span>
            </div>
            <div class=\"item\">
                <h4>Draad internetprojecten</h4>
                <h5>Web developer</h5>

                <p>Ontwikkelen van applicaties op basis van Laravel. Custom Wordpress development. Front-end development op basis van Angular. </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"work-year\">
                <span>01-2012 - 07-2013</span>
            </div>
            <div class=\"item\">
                <h4>Hoteliers</h4>
                <h5>Web developer</h5>

                <p>Als allround webdeveloper werkzaam voor vele hotelwebsites. Werkzaamheden vooral op het gebied van PHP development en het ontwikkelen van een nieuwe websitebuilder in Zend Framework.
                    Daarnaast was ik verantwoordelijk voor de doorontwikkeling van een aantal maatwerk projecten zoals en webshops.</p>
            </div>
        </div>
    </div>
</section>
<section id=\"education\">
    <div class=\"container\">
        <header>
            <h2>Opleidingen</h2>
            <span class=\"subtitle\">Studierichting</span>
        </header>

        <div class=\"row\">
            <div class=\"work-year\">
                <span>2009 - juni 2015</span>
            </div>
            <div class=\"item\">
                <h4>Communication and multimedia design</h4>
                <h5>Web developer</h5>

                <p>Studierichting techniek, design & interinteractie</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"work-year\">
                <span>2005 – 2009</span>
            </div>
            <div class=\"item\">
                <h4>CIOS Sport en Bewegen</h4>
                <h5>Web developer</h5>

                <p>Studierichting onderwijs.</p>
            </div>
        </div>
    </div>
</section>

<section id=\"portfolio\">
    <div class=\"container\">
        <header>
            <h2 class=\"white\">Portfolio</h2>
            <span class=\"subtitle white\">Laatste werk</span>
        </header>
        <!-- <div class=\"filter\">
             <a href=\"\">All</a>
             <a href=\"\">Application</a>
             <a href=\"\">Frontend</a>
             <a href=\"\">Backend</a>
         </div>-->
        <div class=\"portfolio-container\">
            <portfolio></portfolio>
        </div>
    </div>

</section>



<footer id=\"contact\">
    <div class=\"container\">
        <div class=\"contact\">
            <h3>Contact details</h3>
            <ul>
                <li>Commelinstraat 21-1</li>
                <li>0629622814</li>
                <li>stijnvandervegt@gmail.com</li>
            </ul>
        </div>
        <div class=\"form\">
            <h3>Contact details</h3>

            ";
        // line 169
        echo $this->env->getExtension('boltforms.extension')->twigBoltForms("contact");
        echo "

        </div>
    </div>
</footer>

<!-- Templates -->
<template id=\"portfolioTemplate\">
    <div class=\"item\" v-for=\"project in projects\">
        <div class=\"hover-box\">
                <span class=\"smallIcon\">
                    <a rel=\"lightbox-demo\" href=\"images/big-1.jpg\" title=\"Project Title1\" class=\"zoom lb lb_warsaw1\">
                        <i class=\"fa fa-search fa-2x\"></i>
                    </a>
                    <a href=\"#\" title=\"Project Link\" target=\"_blank\" class=\"linKed\"><i class=\"fa fa-link fa-2x\"></i></a>
                </span>
        </div>

        <a href=\"#portfolio\" @click=\"showModal(project.attributes)\" >
            <img v-bind:src=\"project.attributes.image.url\" alt=\"\$";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo "\">
        </a>
        ";
        // line 212
        echo "
        <modal :show.sync=\"checkModal(project.attributes)\" :project.sync=\"project\">

            <h3 slot=\"header\">\${{ project.attributes.title }}
                <a href=\"#portfolio\" class=\"modal-default-button modal-close\" @click=\"project.attributes.showmodal = false\">

                </a>
            </h3>
            <div slot=\"body\">
                <figure>
                    <img v-bind:src=\"project.attributes.image.url\" alt=\"\${{ project.attributes.title }}\">
                </figure>
                <div class=\"content\">
                    <p>{{{ project.attributes.html }}}</p>
                </div>
            </div>
            <div slot=\"footer\">
                <em>Keywords: {{{ project.attributes.taxonomy.tags }}}</em>
                <a href=\"\${{ project.attributes.url }}\" class=\"btn\" target=\"_blank\">Bekijk het project</a>

            </div>
        </modal>
        ";
        echo "
    </div>
</template>

<!-- template for the modal component -->
<script type=\"x/template\" id=\"modal-template\">
    <div class=\"modal-mask\" v-show=\"show\" transition=\"modal\">
        <div class=\"modal-wrapper\">
            <div class=\"modal-container modal\">

                <div class=\"modal-header\">
                    <slot name=\"header\">
                        default header
                    </slot>
                </div>

                <div class=\"modal-body\">
                    <slot name=\"body\">
                        default body
                    </slot>
                </div>

                <div class=\"modal-footer\">
                    <slot name=\"footer\">
                        default footer
                        <button class=\"modal-default-button\"
                                @click=\"show = false\">
                            Sluiten
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</script>

<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "dist/assets/js/scripts.js\" type=\"text/javascript\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 248,  243 => 212,  238 => 188,  216 => 169,  95 => 51,  89 => 48,  85 => 47,  78 => 43,  74 => 42,  43 => 14,  39 => 13,  35 => 12,  29 => 9,  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edg  e,chrome=1">*/
/*     <title>Portfolio</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,900,400,700,400italic' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{ paths.theme }}dist/assets/css/main.css">*/
/* */
/*     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>*/
/*     <link rel="apple-touch-icon" href="{{ paths.theme }}dist/assets/images/apple-touch-icon.png"/>*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="{{ paths.theme }}dist/assets/images/apple-touch-icon-72x72.png"/>*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="{{ paths.theme }}dist/assets/images/apple-touch-icon-114x114.png"/>*/
/* */
/* </head>*/
/* */
/* <body id="app">*/
/* */
/* <header id="head">*/
/* */
/*     <hgroup>*/
/*         <h1>Stijn van der Vegt</h1>*/
/* */
/*         <h2>Web developer</h2>*/
/*     </hgroup>*/
/* */
/*     <nav id="navigation" v-bind:class="classObject">*/
/*         <a href="#" @click="navigate('head', $event)">Home</a>*/
/*         <a href="" @click="navigate('about-me', $event)">About me</a>*/
/*         <a href="" @click="navigate('experience', $event)">Expierence</a>*/
/*         <a href="" @click="navigate('education', $event)">Education</a>*/
/*         <a href="" @click="navigate('portfolio', $event)">Portfolio</a>*/
/*         <a href="" @click="navigate('contact', $event)">Contact</a>*/
/*     </nav>*/
/* */
/* </header>*/
/* */
/* <section id="about-me">*/
/*     <div class="container">*/
/*         <header>*/
/*             <h2 class="white">{{ __('Over mij') }}</h2>*/
/*             <span class="subtitle white">{{ __('Een korte introductie') }}</span>*/
/*         </header>*/
/*         <div class="row">*/
/*             <article>*/
/*                 {{  page.body }}*/
/*                 <a href="" class="btn" target="_blank">{{  __('Prinbaar CV') }}</a>*/
/*             </article>*/
/*             <figure>*/
/*                 <img src="{{ paths.theme }}dist/assets/img/profile.jpg" alt="profile photo"/>*/
/*             </figure>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- <section id="skills">*/
/*      <header>*/
/*          <h2>Technical skills</h2>*/
/*          <span class="subtitle"></span>*/
/*      </header>*/
/*      <div class="skills">*/
/*          <div class="skill">*/
/*              <canvas></canvas>*/
/*              <hgroup>*/
/*                  <h3>PHP</h3>*/
/*                  <p>Donec accumsan Ligula vitae mag na crabitur id</p>*/
/*              </hgroup>*/
/*          </div>*/
/*      </div>*/
/*  </section>-->*/
/* <section id="experience">*/
/*     <div class="container">*/
/*         <header>*/
/*             <h2>Werkervaring</h2>*/
/*             <span class="subtitle">Mijn recente werkgevers</span>*/
/*         </header>*/
/*         <div class="row">*/
/*             <div class="work-year">*/
/*                 <span>08-2013 - heden</span>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <h4>Draad internetprojecten</h4>*/
/*                 <h5>Web developer</h5>*/
/* */
/*                 <p>Ontwikkelen van applicaties op basis van Laravel. Custom Wordpress development. Front-end development op basis van Angular. </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="work-year">*/
/*                 <span>01-2012 - 07-2013</span>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <h4>Hoteliers</h4>*/
/*                 <h5>Web developer</h5>*/
/* */
/*                 <p>Als allround webdeveloper werkzaam voor vele hotelwebsites. Werkzaamheden vooral op het gebied van PHP development en het ontwikkelen van een nieuwe websitebuilder in Zend Framework.*/
/*                     Daarnaast was ik verantwoordelijk voor de doorontwikkeling van een aantal maatwerk projecten zoals en webshops.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <section id="education">*/
/*     <div class="container">*/
/*         <header>*/
/*             <h2>Opleidingen</h2>*/
/*             <span class="subtitle">Studierichting</span>*/
/*         </header>*/
/* */
/*         <div class="row">*/
/*             <div class="work-year">*/
/*                 <span>2009 - juni 2015</span>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <h4>Communication and multimedia design</h4>*/
/*                 <h5>Web developer</h5>*/
/* */
/*                 <p>Studierichting techniek, design & interinteractie</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="work-year">*/
/*                 <span>2005 – 2009</span>*/
/*             </div>*/
/*             <div class="item">*/
/*                 <h4>CIOS Sport en Bewegen</h4>*/
/*                 <h5>Web developer</h5>*/
/* */
/*                 <p>Studierichting onderwijs.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="portfolio">*/
/*     <div class="container">*/
/*         <header>*/
/*             <h2 class="white">Portfolio</h2>*/
/*             <span class="subtitle white">Laatste werk</span>*/
/*         </header>*/
/*         <!-- <div class="filter">*/
/*              <a href="">All</a>*/
/*              <a href="">Application</a>*/
/*              <a href="">Frontend</a>*/
/*              <a href="">Backend</a>*/
/*          </div>-->*/
/*         <div class="portfolio-container">*/
/*             <portfolio></portfolio>*/
/*         </div>*/
/*     </div>*/
/* */
/* </section>*/
/* */
/* */
/* */
/* <footer id="contact">*/
/*     <div class="container">*/
/*         <div class="contact">*/
/*             <h3>Contact details</h3>*/
/*             <ul>*/
/*                 <li>Commelinstraat 21-1</li>*/
/*                 <li>0629622814</li>*/
/*                 <li>stijnvandervegt@gmail.com</li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="form">*/
/*             <h3>Contact details</h3>*/
/* */
/*             {{ boltforms('contact') }}*/
/* */
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <!-- Templates -->*/
/* <template id="portfolioTemplate">*/
/*     <div class="item" v-for="project in projects">*/
/*         <div class="hover-box">*/
/*                 <span class="smallIcon">*/
/*                     <a rel="lightbox-demo" href="images/big-1.jpg" title="Project Title1" class="zoom lb lb_warsaw1">*/
/*                         <i class="fa fa-search fa-2x"></i>*/
/*                     </a>*/
/*                     <a href="#" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></a>*/
/*                 </span>*/
/*         </div>*/
/* */
/*         <a href="#portfolio" @click="showModal(project.attributes)" >*/
/*             <img v-bind:src="project.attributes.image.url" alt="${{ project.attributes.name }}">*/
/*         </a>*/
/*         {% verbatim %}*/
/*         <modal :show.sync="checkModal(project.attributes)" :project.sync="project">*/
/* */
/*             <h3 slot="header">${{ project.attributes.title }}*/
/*                 <a href="#portfolio" class="modal-default-button modal-close" @click="project.attributes.showmodal = false">*/
/* */
/*                 </a>*/
/*             </h3>*/
/*             <div slot="body">*/
/*                 <figure>*/
/*                     <img v-bind:src="project.attributes.image.url" alt="${{ project.attributes.title }}">*/
/*                 </figure>*/
/*                 <div class="content">*/
/*                     <p>{{{ project.attributes.html }}}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div slot="footer">*/
/*                 <em>Keywords: {{{ project.attributes.taxonomy.tags }}}</em>*/
/*                 <a href="${{ project.attributes.url }}" class="btn" target="_blank">Bekijk het project</a>*/
/* */
/*             </div>*/
/*         </modal>*/
/*         {% endverbatim %}*/
/*     </div>*/
/* </template>*/
/* */
/* <!-- template for the modal component -->*/
/* <script type="x/template" id="modal-template">*/
/*     <div class="modal-mask" v-show="show" transition="modal">*/
/*         <div class="modal-wrapper">*/
/*             <div class="modal-container modal">*/
/* */
/*                 <div class="modal-header">*/
/*                     <slot name="header">*/
/*                         default header*/
/*                     </slot>*/
/*                 </div>*/
/* */
/*                 <div class="modal-body">*/
/*                     <slot name="body">*/
/*                         default body*/
/*                     </slot>*/
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/*                     <slot name="footer">*/
/*                         default footer*/
/*                         <button class="modal-default-button"*/
/*                                 @click="show = false">*/
/*                             Sluiten*/
/*                         </button>*/
/*                     </slot>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </script>*/
/* */
/* <script src="{{ paths.theme }}dist/assets/js/scripts.js" type="text/javascript"></script>*/
/* </body>*/
/* </html>*/
