/**
 * Created by PhpStorm.
 * User: nemzag aka Arifi Gazmen.
 * Date: 2018-09-30
 * Time: 20:06
 */
 
function nl2br (str, is_xhtml) {   
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}