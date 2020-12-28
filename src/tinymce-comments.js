tinymce.init({ 
    selector: '#comment',
    paste_as_text: true,
    remove_trailing_brs: true,
    menubar: false,
    statusbar: false,
    plugins: 'link paste',
    toolbar: 'bold italic strikethrough | link unlink',
    valid_elements: '-s/span,-span[style=text-decoration: line-through;],-div,-p,-strong/b,-em/i,-a[href|title|target]',
});