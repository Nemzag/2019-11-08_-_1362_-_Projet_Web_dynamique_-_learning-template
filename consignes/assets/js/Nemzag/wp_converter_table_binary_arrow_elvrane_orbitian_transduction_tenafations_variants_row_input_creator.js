/**
 * Created by PhpStorm.
 * User: nemzag aka Arifi Gazmen.
 * Date: 2018-09-30
 * Time: 14:20
 */

// console.clear();

let numberOfRow = Number(prompt('How many row\'s ?'));

// Loop to create DIV & INPUT  & TEXTAREA
for (let iZero = 1; iZero <= numberOfRow; iZero++) {

    $('#formulary').append('<div id="divForm' + iZero + '">').append('<div id="divSub' + iZero + '">');

    // alert(iZero);

    $("#divSub" + iZero).append('<label style="text-align: right; display: inline-block; width: 100px;"><strong>Row ' + iZero + ' :</strong></label>' +
        
        '<input type="text"' +
        ' id="binary' + iZero + '"' +
        ' placeholder="bin ' + iZero + '"' +
        ' style="background-color: white; color: black; width: 60px; height: 3em; text-align: justify;"/>' +        
                                
        '<input type="text"' +
        ' id="arrow' + iZero + '"' +
        ' placeholder="arrow ' + iZero + '"' +
        ' style="background-color: white; color: black; width: 90px; height: 3em; text-align: justify;"/>' +        
                                
        '<!-- Row 0' + iZero + ' Spoitive Negative -->' +
        '<input type="text"' +
        ' id="gegonistNeg' + iZero + '"' +
        ' name="gegonistNeg' + iZero + '"' +
        ' placeholder="Negative' + iZero + '"' +
        ' style="background-color: black; color: white; width:200px; height: 3em; text-align: right;"/>' +

        ' <!-- Row 0' + iZero + ' Positive Genative -->' +
        '<input type="text"' + '' +
        ' id="gegonistPos' + iZero + '"' +
        ' name="gegonistPos' + iZero + '"' +
        ' placeholder="Positive ' + iZero + '"' +
        ' style="background-color: white; color: black; width: 200px; height: 3em; text-align: justify;"/>' +

        '<textarea id="root' + iZero + '"' +
        ' placeholder="root\'s ' + iZero + '"' +
        ' style="background-color: white; color: black; width: 200px; height: 3em; text-align: justify; vertical-align: bottom;"></textarea>' +

        '<textarea id="transduction' + iZero + '"' +
        ' placeholder="transduction ' + iZero + '"' +
        ' style="background-color: white; color: black; width: 200px; height: 3em; text-align: justify; vertical-align: bottom;"></textarea>' +

        '<textarea id="tenafations' + iZero + '"' +
        ' placeholder="tenafation\'s ' + iZero + '"' +
        ' style="background-color: white; color: black; width:200px; height: 3em; text-align: justify; vertical-align: bottom;"></textarea>');

    // alert(iZero);

    $('#tbody').append('<tr id="row' + iZero + '"></tr>\n');

}