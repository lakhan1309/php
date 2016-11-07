$(document).ready(function(){

var code=$('.highlight')[0];
var editor=CodeMirror.fromTextArea(code,{
	
	lineNumbers:true,
	lineWrap:true,
	styleActiveLine:true,
	autoCloseBrackets:true,
	autoCloseTags:true,
	matchBrackets: true,
	mode: "text/html",
	scrollbarStyle:"overlay",
	matchTags:{bothTags: true},
	extraKeys: {"Ctrl-J": "toMatchingTag",
				"Alt-F": "findPersistent",
				"Ctrl-F": "find",
				"Ctrl-Space":"autocomplete",
				"F11":function(cm){
					cm.setOption("fullScreen",!cm.getOption("fullScreen"))
				},
				"Esc":function(cm){
					if(cm.getOption("fullScreen"))cm.setOption("fullScreen",false)
				}
	}
	});
	//theme change
$('#theme').on('change', function() {

	var theme=this.value;
	var style1= '<link rel="stylesheet" href="codemirror-5.16.0\\theme\\'+theme+'.css">';
	
	$('head').append(style1);
	
   editor.setOption("theme",this.value);
  
   
   
});
	
	//live_preview
	editor.on('change', function (){
		var iframeContents=document.getElementById('iframe');
	var iframepreview=iframeContents.contentDocument||iframeContents.contentWindow.document;
		iframepreview.open();
		iframepreview.write(editor.getValue());
		iframepreview.close();
	
	
	});
});