
function ftsPadEmptyParagraphs(e) {
	if (!(e.source_view || e.contextual) && e.format === "html") {
		e.content = e.content.replace(/<p>\s*<\/p>/g, "<p>&nbsp;</p>");
	}
}

tinymce.init({
    selector: '#comment',
    paste_as_text: true,
    paste_block_drop: true,
    menubar: false,
    statusbar: true,
    elementpath: true,
    branding: true,
    contextmenu: false,
    contextmenu_never_use_native: false,
    plugins: 'link paste',
    toolbar: 'bold italic strikethrough | link',
    valid_elements: 's/span,div,p,br,strong/b,em/i,a[href|title|target]',
    
    setup: function (editor) {
		editor.on('GetContent', ftsPadEmptyParagraphs);
    },

    /*
    paste_preprocess: function(plugin, args) {
        console.log("PREPROCESS: " + args.content);
        //args.content += ' preprocess';
    },

    paste_postprocess: function(plugin, args) {
        console.log("POSTPROCESS: " + args.node.innerHTML);
        //args.content += ' postprocess';
    },
    */
    
});