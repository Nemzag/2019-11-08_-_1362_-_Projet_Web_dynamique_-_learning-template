/**
 * Created by PhpStorm.
 * User: nemzag aka Gazmen Arifi
 * Date: 2018-10-03
 * Time: 06:36
 */

// Simple Tag converter to &lt; and &gt;
// Pro use in <pre>, <code> & <samp>

$('document').ready(function() {

    $('#textareaOne').on('change keyup', transmutation);
    // $('#activate').on('click', transmutation);

    function transmutation() {

        let $textarea = String($('#textareaOne').val());

        // console.log($textarea);

        $result = $textarea.replace(/</g, '&amp;lt;').replace(/>/g, '&amp;gt;');

        // console.log($result);

        $('#result').html($result);
    }

    $('#copy').click(function() {
        /* Copy to ClipBoard */

        /* Get the text field */
        let copyText = (document.getElementById("result"));
        console.log(copyText);

        var range = document.createRange();
        range.selectNodeContents(copyText);

        var selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Text copied in ClipBoard !");
    })
});
