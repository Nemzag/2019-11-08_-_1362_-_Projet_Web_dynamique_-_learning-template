/**
 * Created by PhpStorm.
 * User: nemzag aka Arifi Gazmen.
 * Date: 2018-09-30
 * Time: 23:03
 */

// var html = $("#thesis").html(); // normaly it's $("html");

$('document').ready(function() {
    
    $("#view-source").on("click", sourceCode);

    $("source-code").removeProp("childNodes", "children");
    
    function sourceCode() {
        
    alert('function');
        
        $("<pre />", {
            "html":   '&lt;!DOCTYPE html>\n&lt;html>\n' + 
                    $("#thesis")
                        .html()
                        .replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
                        .replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>') + 
                    '\n&lt;/html>',
            "class": "prettyprint"
        }).prependTo("#source-code");

        console.log($('#source-code'));
        
        prettyPrint();
    }
    
});