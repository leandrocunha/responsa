<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">
        	<div class="container">
        		<h1>Respon%a</h1>
        	</div>
        </header>

        <section id="main-wrapper">

            <div class="headline">
                <h2 class="call">Designers free to create, Developers free to responsive easily</h2>                
            </div>

            <div class="description">
                <div class="container">
                    <h3 class="title">Simple and real workflows to modern and pixel-perfect apps</h3>
                    <p class="subtitle">But how this works?</p>

                    <ul class="steps"
                        <li>1) Designers can be frameworks-grid free</li>
                        <li>2) Fron-End developers can set customs grid exactly within Photoshop pixel sizes</li>
                        <li>3) After be prepocessed, your custom grid will be all converted to responsive format</li>
                    </ul>

                </div>
            </div>

            <div class="example">
            	<div class="container">
                    <h3 class="title">Example</h3>
                    <p class="subtitle">A little layout example to explain visually</p>

                    <div class="layout">
                		<div class="col-left">
                			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                		</div>
                		<div class="col-right">
                			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        				</div>
                    </div>
                </div>
                <div class="container">
                    <div class="code">
                        <div class="styl">
                            <h3>app.styl</h3>
                            <pre>
                                .container
                                    container(1024px)

                                .col-left
                                    float left      
                                    column(200px)
                                    
                                .col-right
                                    float left
                                    column(824px, col: 'last')
                            </pre>
                        </div>
                        <div class="css">
                            <h3>app.css</h3>
                            <pre>
                                .container {
                                    margin: 0 auto;
                                    max-width: 1024px;
                                }

                                .container .col-left {
                                    float: left;
                                    max-width: 17.578125%;
                                    margin-right: 1.953125%;
                                }

                                .col-right {
                                    float: left;
                                    max-width: 78.515625%;
                                    margin-right: 0;
                                }
                            </pre>
                        </div>
                    </div>
            	</div>
            </div>

        </section>

        <footer id="footer">
        	<div class="container">
        		<p>all rights reserved</p>
        	</div>
            <?php wp_footer(); ?>
        </footer>
    </body>
</html>