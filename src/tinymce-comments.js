tinymce.init({ 
    selector: '#comment',
    paste_as_text: true,
    remove_trailing_brs: true,
    menubar: false,
    statusbar: true,
    elementpath: false,
    branding: true,
    contextmenu: 'cut copy paste | bold italic strikethrough | link',
    contextmenu_never_use_native: true,
    plugins: 'link paste',
    toolbar: 'cut copy paste | bold italic strikethrough | link',
    valid_elements: 's/span,span[style=text-decoration: line-through;],div,p,strong/b,em/i,a[href|title|target]'
});