<?php

	session_start();
?>
    <?php
		unset($_SESSION['usuarioId'],			
		      $_SESSION['usuarioNome'], 		
		      $_SESSION['usuarioNivelAcesso'], 
		      $_SESSION['usuarioLogin'], 		
		      $_SESSION['usuarioSenha']);
	?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Fancy navbar login / sign in form - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body{
    background:url('http://www.wallpaperup.com/uploads/wallpapers/2012/10/21/20181/cad2441dd3252cf53f12154412286ba0.jpg');
    padding:50px;
}

#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
?>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Login dropdown</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="">
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required="">
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



	<script type="text/javascript">
	
	</script>


</body></html>
        <!DOCTYPE html>
        <html lang="en" class=" is-copy-enabled is-u2f-enabled">

        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
            <meta charset='utf-8'>
            <meta content="origin-when-cross-origin" name="referrer" />

            <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-62b8737f6b231559e237d8e84948a713c3b0bc4aa6fcb45856eacbb9aae68ae2.css" integrity="sha256-Yrhzf2sjFVniN9joSUinE8OwvEqm/LRYVurLuarmiuI=" media="all" rel="stylesheet" />
            <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-bbfd8c2ee3a1579f17abdb11ec3415bfa3ccb7961b794a884b0aba7e7016838c.css" integrity="sha256-u/2MLuOhV58Xq9sR7DQVv6PMt5YbeUqISwq6fnAWg4w=" media="all" rel="stylesheet" />


            <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/site-91bffc855652d82269fbff3471ad1815b97dad55b6ceff378fb5d11ba1234628.css" integrity="sha256-kb/8hVZS2CJp+/80ca0YFbl9rVW2zv83j7XRG6EjRig=" media="all" rel="stylesheet" />


            <link as="script" href="https://assets-cdn.github.com/assets/frameworks-411d610e4b2b1ffa3d063904534406d08c8351d9ba9b4b3f339bab35e86bb4f3.js" rel="preload" />

            <link as="script" href="https://assets-cdn.github.com/assets/github-52a631b0fed6cace95dbc79ae8f778091e0cef04a525e4ad1091877502ccc091.js" rel="preload" />

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="Content-Language" content="en">
            <meta name="viewport" content="width=device-width">

            <title>Sign in</title>
            <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
            <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
            <link rel="apple-touch-icon" href="/apple-touch-icon.png">
            <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
            <meta property="fb:app_id" content="1401488693436528">

            <link rel="assets" href="https://assets-cdn.github.com/">

            <meta name="pjax-timeout" content="1000">

            <meta name="request-id" content="B156C152:358B:B3AFB06:57ED7D5D" data-pjax-transient>

            <meta name="msapplication-TileImage" content="/windows-tile.png">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="selected-link" value="/session" data-pjax-transient>

            <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
            <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
            <meta name="google-analytics" content="UA-3769691-2">

            <meta content="collector.githubapp.com" name="octolytics-host" />
            <meta content="github" name="octolytics-app-id" />
            <meta content="B156C152:358B:B3AFB06:57ED7D5D" name="octolytics-dimension-request_id" />




            <meta class="js-ga-set" name="dimension1" content="Logged Out">



            <meta name="hostname" content="github.com">
            <meta name="user-login" content="">

            <meta name="expected-hostname" content="github.com">
            <meta name="js-proxy-site-detection-payload" content="NzU5MmU5NmI2MmJiYmMyYmM1YTE3MThmYTQ4MmExNTRiNWYwMmVjYjAyYzZhMWIxZDMzNDgwZTc3NGI3NjFkMnx7InJlbW90ZV9hZGRyZXNzIjoiMTc3Ljg2LjE5My44MiIsInJlcXVlc3RfaWQiOiJCMTU2QzE1MjozNThCOkIzQUZCMDY6NTdFRDdENUQiLCJ0aW1lc3RhbXAiOjE0NzUxODE5MjN9">


            <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
            <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

            <meta name="html-safe-nonce" content="9ce7ae0f08c5e7869fa473b6b538e34c709265c3">
            <meta content="20e617f4d1b629c0c45ca7d6f89bc99ab58f8bed" name="form-nonce" />

            <meta http-equiv="x-pjax-version" content="dc3b5550e17f9e647ae6fb315a4b12c5">


            <meta name="description" content="GitHub is where people build software. More than 15 million people use GitHub to discover, fork, and contribute to over 38 million projects.">

            <link rel="canonical" href="https://github.com/login" data-pjax-transient>
        </head>


        <body class="logged-out  env-production windows  session-authentication page-responsive min-width-0">
            <div id="js-pjax-loader-bar" class="pjax-loader-bar">
                <div class="progress"></div>
            </div>
            <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>







            <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
                <div class="container clearfix width-full">
                    <a class="header-logo" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
                        <svg aria-hidden="true" class="octicon octicon-mark-github" height="48" version="1.1" viewBox="0 0 16 16" width="48"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
                    </a>
                </div>
            </div>



            <div id="start-of-content" class="accessibility-aid"></div>


            <div role="main">

                <div id="js-pjax-container" data-pjax-container>


                    <div class="auth-form px-3" id="login">

                        <!-- </textarea> -->
                        <!-- '"` -->
                        <form accept-charset="UTF-8" action="valida_login.php" data-form-nonce="20e617f4d1b629c0c45ca7d6f89bc99ab58f8bed" method="post">
                            <div style="margin:0;padding:0;display:inline">
                               <input name="utf8" type="hidden" value="&#x2713;" />
                               <input name="authenticity_token" type="hidden"/></div>
                            <div class="auth-form-header p-0">
                                <h1>Sign in to </h1>
                            </div>   
 
                                        
                               

                            <div class="auth-form-body mt-3">

                                <label for="login_field">
          usuario
        </label>
                                <input autocapitalize="off" autocorrect="off" class="form-control input-block" id="login_field" name="usuario" tabindex="1" type="text" value="brenoduarte.ti@gmail.r34r3r4" />

                                <label for="password">
         senha<a href="/password_reset" class="label-link">Forgot password?</a>
        </label>
                                <input autofocus="autofocus" class="form-control form-control input-block" id="password" name="senha" tabindex="2" type="password" />

                                <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit" tabindex="3" type="submit" value="Sign in" />
                            </div>
                        </form>

                        <p class="create-account-callout mt-3">
                            New to GitHub?
                            <a href="/join?source=login" data-ga-click="Sign in, switch to sign up">Create an account</a>.
                        </p>
                    </div>

                </div>
                <div class="modal-backdrop js-touch-events"></div>
            </div>



            <div class="site-footer" role="contentinfo">
                <ul class="site-footer-links">
                    <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
                    <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
                    <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
                    <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
                </ul>
            </div>





            <div id="ajax-error-message" class="ajax-error-message flash flash-error">
                <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
                <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
      </button> You can't perform that action at this time.
            </div>


            <script crossorigin="anonymous" integrity="sha256-QR1hDksrH/o9BjkEU0QG0IyDUdm6m0s/M5urNehrtPM=" src="https://assets-cdn.github.com/assets/frameworks-411d610e4b2b1ffa3d063904534406d08c8351d9ba9b4b3f339bab35e86bb4f3.js"></script>
            <script async="async" crossorigin="anonymous" integrity="sha256-UqYxsP7Wys6V28ea6Pd4CR4M7wSlJeStEJGHdQLMwJE=" src="https://assets-cdn.github.com/assets/github-52a631b0fed6cace95dbc79ae8f778091e0cef04a525e4ad1091877502ccc091.js"></script>




            <div class="facebox" id="facebox" style="display:none;">
                <div class="facebox-popup">
                    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
                    </div>
                    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
    </button>
                </div>


            <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
                <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
                <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
                <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
            </div>
            <div class="facebox" id="facebox" style="display:none;">
                <div class="facebox-popup">
                    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
                    </div>
                    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
    </button>
                </div>
            </div>

        </body>

        </html>
