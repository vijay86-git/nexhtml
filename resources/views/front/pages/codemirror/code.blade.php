<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Editor - nexladder</title>
	<meta name="description" content="Try and test code online and see the real-time results." />
	<meta charset="UTF-8" />
	<meta property="og:title" content="Test Code Online" />
    <meta property="og:description" content="View the live example as well as try and test it using the online HTML editor." />
	<meta property="og:image" content="/lib/images/signature.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="{{ URL::asset('codemirror/lib/bin/css/codemirror.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('codemirror/lib/bin/css/html-mode-1.3.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/js/jquery-1.7.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/js/codemirror.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/js/html-mode-1.1.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/mode/xml.js') }}"></script>    
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/mode/javascript.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/mode/css.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/mode/htmlmixed.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('codemirror/lib/bin/js/active-line.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
        	updatePreview();
    	});    
	</script>
	<style type="text/css">
		.CodeMirror{font-size: 12px; line-height: 16px; font-family:MenschRegular,Menlo,Monaco,consolas,monospace;background: url("lib/images/gutter-bg.gif") repeat-y -26px 0 transparent;}
		.CodeMirror-activeline-background {background: #e8f2ff !important;}
		.CodeMirror-scroll{overflow:auto;}
	</style>

</head>
<body>

    <form name="myForm" id="myForm" class="codelab">
        <div class="header-wrapper">
            <div class="header-top">
                <div class="pattern">&nbsp;</div>
            </div>
            <div class="header">
                <div class="logo-box">
                    <div class="logo">
                        <img src="{{ URL::asset('codemirror/lib/bin/images/logo.png') }}" alt="CodeLab" />
                    </div>
                </div>
                <div class="control-bar">
                    <div class="buttons">
                        <a href="javascript:void(0);" onClick="updatePreview();" class="btn btn-primary">Show Output</a>
						<a href="javascript:void(0);" onClick="toggleView();" class="toggle-view" title="Change Editor Layout"><i></i></a>
                    </div>                            
                </div>
                <div class="top-ad-box">

                </div>
            <div class="clear">&nbsp;</div>
            </div>
        </div>
        <div class="frame-box vr">
            <div class="pane-wrapper">
                <div class="pane" id="code-pane">
                    <div class="outer-area">
                        <span class="show-preview-pane">&nbsp;</span>
                        <div class="inner-area">
                            <input type="hidden" id="current-code" name="current-code" />
                            <textarea id="code" name="code">
@php 
include_once($file) 
@endphp 
                            </textarea>	
                            <script>
                                var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                                    mode: "text/html",
                                    tabMode: "indent",
                                    styleActiveLine: true,
                                    lineNumbers: true,
                                    lineWrapping: true
                                });
                            </script>									
                        </div>
                    </div>
                </div>
                <div class="pane" id="preview-pane">
                    <div class="outer-wrapper">
                        <span class="hide-preview-pane">&nbsp;</span>
                        <div class="output-area">
                            <iframe id="preview" name="preview"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
        
</body>
</html>

