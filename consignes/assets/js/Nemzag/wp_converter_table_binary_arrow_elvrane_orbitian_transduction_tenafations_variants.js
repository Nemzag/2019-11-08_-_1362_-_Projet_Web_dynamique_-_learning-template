/**
 * Created by PhpStorm.
 * User: nemzag aka Arifi Gazmen.
 * Date: 2018-09-29
 * Time: 14:47
 */

$('document').ready(function () {

    console.clear();

    // Make Input both input void !
    // ???? Que mettre, quand je refrechis l'info est toujours la, comment tout clear, je fais ceci n'y a t'il pas une autre methode ?

    $('input').val('').html();
    $('textarea').val('').html();

    // Je souheterais appellé la methode mais avec les deux parametre qui sont les Tags de ID... Mais cela ne fonctionne pas.
    /*
        console.log($('#gegonistNeg01'));
        console.log($('#gegonistPos01'));
    */

    // let numberOfRow = Number(prompt('How many row\'s ?'));

    for (let iOne = 1; iOne <= numberOfRow; iOne++) {
        
        $('#gegonistNeg' + iOne).on("keyup", choiceOfAction);
        $('#gegonistPos' + iOne).on("keyup", choiceOfAction);

        // console.log(j);

        // console.log($('#gegonistNeg' + j));
        // console.log($('#gegonistPos' + j));

        // Choice of action, we set variable pro the if
        function choiceOfAction() {

            for (let iTwo = 1; iTwo <= iOne; iTwo++) {
                /////////////////////////////////
                // FUNCTION OPERATION PHASE 01 //
                /////////////////////////////////

                // console.log(iTwo);

                let gegonistNeg = $('#gegonistNeg' + iTwo).val();
                let gegonistPos = $('#gegonistPos' + iTwo).val();

                // console.log(gegonistNeg);
                // console.log(gegonistPos);

                if (gegonistNeg !== '') {

                    // AT "KEY UP" : ACTION 
                    ($('#gegonistNeg' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);
                    ($('#root' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);
                    ($('#transduction' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);
                    ($('#tenafations' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);
                    ($('#binary' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);
                    ($('#arrow' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative);

                    // console.log(iTwo);

                    function wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative() {

                        // alert('function negative active');

                        for (let iThree = 1; iThree <= iOne; iThree++) {

                            // console.log(iThree);

                            let parameter1 = String($('#gegonistNeg' + iThree).val());
                            let parameter3 = String($('#transduction' + iThree).val());
                            let parameter4 = String($('#tenafations' + iThree).val());
                            let parameter5 = String($('#binary' + iThree).val());
                            let parameter6 = String($('#arrow' + iThree).val());
                            let parameter7 = String($('#root' + iThree).val());

                            if (parameter1 !== '' && parameter1 !== undefined) {

                                ($('#row' + iThree).css("background-color", "black").css("color", "white").html(
                                    '\n<td>' + parameter5 + '</td>\n' + /* Arrow */
                                    '<td>' + parameter6 + '</td>\n' + /* Binary */
                                    '<td>' +
                                    parameter1.toUpperCase() + '<br>\n' +
                                    greekNeocoenicTransCodation(parameter1.toUpperCase()) + ' (Neo‑Coenic.)<br>\n' +
                                    greekCoenicTransCodation(parameter1.toUpperCase()) + ' (Neo‑Coenic.)<br>\n' +
                                    shalvunicTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    '<span style=\'color:#800000;\'>' + ipaPhoneticTransCodation(parameter1.toUpperCase()) + '</span></td>\n' +
                                    '<td>-</td>\n' +
                                    '<td>' +
                                    arabicTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    syriacTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    hebrewTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    hindiTransCodation(parameter1.toUpperCase()) + '</td>\n' +
                                    '<td>/</td>\n' +
                                    '<td>' + nl2br(parameter7) + '</td>\n' + /* Root */
                                    '<td>' + nl2br(parameter3) + '</td>\n' + /* Transduction */
                                    '<td>' + nl2br(parameter4) + '</td>\n' + /* Tenafations */
                                    '<td>' +
                                    'Sq. ' + albanianTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'Ʃk. ' + gegnishtTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'Fr. ' + frenchTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'En. ' + englishUKTransCodation(parameter1.toUpperCase()) +
                                    '</td>\n'));

                                let parameter2 = $('#gegonistPos' + iThree);

                                // alert('bizarre');

                                console.log(parameter2);

                                if (parameter2 !== '') {

                                    parameter2.prop("disabled", true).css('background-color', 'red').html();

                                } // End if

                            } // End if

                        } // End For iThree


                    } // End Function wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsNegative

                } // End if

                else if (gegonistPos !== '') {

                    // AT "KEY UP" : ACTION 
                    ($('#gegonistPos' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    ($('#root' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    ($('#transduction' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    ($('#tenafations' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    ($('#binary' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    ($('#arrow' + iTwo)).on("keyup", wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive);
                    
                    // console.log(iTwo);

                    function wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive() {

                        // alert('function negative active');

                        for (let iThree = 1; iThree <= iOne; iThree++) {

                            // console.log(iThree);

                            let parameter1 = String($('#gegonistPos' + iThree).val());
                            let parameter3 = String($('#transduction' + iThree).val());
                            let parameter4 = String($('#tenafations' + iThree).val());
                            let parameter5 = String($('#binary' + iThree).val());
                            let parameter6 = String($('#arrow' + iThree).val());
                            let parameter7 = String($('#root' + iThree).val());

                            if (parameter1 !== '' && parameter1 !== undefined && parameter1 != null) {

                                ($('#row' + iThree).css("background-color", "white").css("color", "black").html(
                                    '\n<td>' + parameter5 + '</td>\n' + /* Arrow */
                                    '<td>' + parameter6 + '</td>\n' + /* Binary */
                                    '<td>' +
                                    parameter1.toUpperCase() + '<br>\n' +
                                    greekNeocoenicTransCodation(parameter1.toUpperCase()) + ' (Neo‑Coenic.)<br>\n' +
                                    greekCoenicTransCodation(parameter1.toUpperCase()) + ' (Coenic.)<br>\n' +
                                    shalvunicTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    '<span style=\'color:#800000;\'>' + ipaPhoneticTransCodation(parameter1.toUpperCase()) + '</span></td>\n' +
                                    '<td>-</td>\n' +
                                    '<td>' +
                                    arabicTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    syriacTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    hebrewTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    hindiTransCodation(parameter1.toUpperCase()) + '</td>\n' +
                                    '<td>/</td>\n' +
                                    '<td>' + nl2br(parameter7) + '</td>\n' + /* Root */
                                    '<td>' + nl2br(parameter3) + '</td>\n' + /* Transduction */
                                    '<td>' + nl2br(parameter4) + '</td>\n' + /* Tenafations */
                                    '<td>' +
                                    'Sq. ' + albanianTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'Ʃk. ' + gegnishtTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'Fr. ' + frenchTransCodation(parameter1.toUpperCase()) + '<br>\n' +
                                    'En. ' + englishUKTransCodation(parameter1.toUpperCase()) +
                                    '</td>\n'));

                                let parameter2 = $('#gegonistNeg' + iThree);

                                // alert('bizarre');

                                console.log(parameter2);

                                if (parameter2 !== '') {

                                    parameter2.prop("disabled", true).css('background-color', 'red').html();

                                } // End if

                            } // End if

                        } // End For iThree


                    } // End Function wpConverterTableBinaryArrowElvraneOrbitianTransductionTenafationsVariantsPositive

                } // End if

            } // End For Two

        } // Enf Function Choice of Action

    } // End For iOne
    
}); // Total end