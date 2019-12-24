<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SDF</title>
        <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('codemirror/lib/bin/css/codemirror5.31.0.css') }}?v=1">
        <link rel="stylesheet" href="{{ Helper::loadAssetsFiles('codemirror/lib/bin/css/editor-js.css') }}?v=1">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="msvalidate.01" content="F13063B8299624F18B7C4E98367AE3E1" />
        <meta name="description" content="{{ $info->meta_description }}" />
        <meta name="keywords" content="{{ $info->meta_keywords }}" />
        <link rel="canonical" href="{{ Request::url() }}" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111558941-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-111558941-1');
        </script>
    </head>
    <body>
        
        <div class="row">
            <div class="col-md-12">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Ad 1 -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-9716398444039739"
                data-ad-slot="5095344703"
                data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="" style="height:400px">
                <h2>About Us</h2>
                
                <section id="static">
                                <pre>
                                    <code id="static-js">console.log("Hello World!");
                        // Hello World!
                                    </code>
                    </pre>
                </section>
                <section id="live" class="live hidden">
                    <div id="editor" class="editor">
                    </div>
                    <div class="output-container">
                        <div class="buttons-container">
                            <button id="execute" class="button run" type="button">Run &rsaquo;
                            </button>
                            <button id="reset" type="button" class="button">Reset
                            </button>
                        </div>
                        <div id="console" class="output">
                            <code>
                            </code>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </body>
    <script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/codemirror.5.31.0.js?v=1') }}"></script>
    <script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/editor.js?v=1') }}"></script>
</html>