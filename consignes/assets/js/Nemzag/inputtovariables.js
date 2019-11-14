/**
 * Created by PhpStorm.
 * User: nemzag
 * Date: 2018-06-11
 * Time: 19:30
 */

function inputToVariables() {

    /* CONDITIONAL VARIABLES CREATION */

    /* PREFIX */
    if (document.getElementsByName("taocodexprefix")[0] != null) {
        var taocodexPrefix = document.getElementsByName("taocodexprefix")[0].value;
    }

    /* ROOT */
    if(document.getElementsByName("taocodexletterone")[0] != null) {
        var taocodexLetterOne = document.getElementsByName("taocodexletterone")[0].value;
    }

    if(document.getElementsByName("taocodexvowelone")[0] != null) {
        var taocodexVowelOne = document.getElementsByName("taocodexvowelone")[0].value;
    }

    if(document.getElementsByName("taocodexlettertwo")[0] != null) {
        var taocodexLetterTwo = document.getElementsByName("taocodexlettertwo")[0].value;
    }

    if(document.getElementsByName("taocodexvoweltwo")[0] != null) {
        var taocodexVowelTwo = document.getElementsByName("taocodexvoweltwo")[0].value;
    }

    if(document.getElementsByName("taocodexletterthree")[0] != null) {
        var taocodexLetterThree = document.getElementsByName("taocodexletterthree")[0].value;
    }

    /* SUFFIX FIRST */
    if(document.getElementsByName("taocodexsuffix")[0] != null) {
        var taocodexSuffix = document.getElementsByName("taocodexsuffix")[0].value;
    }

    /* ROOT AND AGENCEMENTS */

    if ((document.getElementsByName("taocodexletterone")[0] != null) && (document.getElementsByName("taocodexlettertwo")[0] != null)) {
        var binary_positive_1 = taocodexLetterOne +
                                taocodexLetterTwo;

        var binary_negative_1 = taocodexLetterTwo +
                                taocodexLetterOne;

        document.getElementsByName("binary_positive_1")[0].value = binary_positive_1;
        document.getElementsByName("binary_negative_1")[0].value = binary_negative_1;
    }

    if ((document.getElementsByName("taocodexlettertwo")[0] != null) && (document.getElementsByName("taocodexletterthree")[0] != null)) {
        var binary_positive_2 = taocodexLetterTwo +
                                taocodexLetterThree;

        var binary_negative_2 = taocodexLetterThree +
                                taocodexLetterTwo;

        document.getElementsByName("binary_positive_2")[0].value = binary_positive_2;
        document.getElementsByName("binary_negative_2")[0].value = binary_negative_2;
    }

    if ((document.getElementsByName("taocodexletterone")[0] != null) && (document.getElementsByName("taocodexletterthree")[0] != null)) {
        var binary_positive_3 = taocodexLetterOne +
                                taocodexLetterThree;

        var binary_negative_3 = taocodexLetterThree +
                                taocodexLetterOne;

        document.getElementsByName("binary_positive_3")[0].value = binary_positive_3;
        document.getElementsByName("binary_negative_3")[0].value = binary_negative_3;
    }

    /* SIX COMBINATION */

    /* 1.2.3. */
    if (
        (document.getElementsByName("zhezhunishth_123")[0] !== undefined) &&

        (document.getElementsByName("taocodexprefix")[0] === undefined) &&
        (document.getElementsByName("taocodexletterone")[0] === undefined) &&
        (document.getElementsByName("taocodexvowelone")[0] === undefined) &&
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) &&
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) &&
        (document.getElementsByName("taocodexletterthree")[0] === undefined) &&
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
    {
        // alert("Zhezhunisht cas trois & n'est pas vide.");
        var zhezhunishth_123 = document.getElementsByName("zhezhunishth_123")[0].value;
    }
    else if (document.getElementsByName("zhezhunishth_123")[0] !== undefined) {
        if (
            (document.getElementsByName("zhezhunishth_123")[0].value != "") &&

            (document.getElementsByName("taocodexprefix")[0].value == "") &&

            (document.getElementsByName("taocodexletterone")[0].value == "") &&

            (document.getElementsByName("taocodexvowelone")[0].value == "") &&

            (document.getElementsByName("taocodexlettertwo")[0].value == "") &&

            (document.getElementsByName("taocodexvoweltwo")[0].value == "") &&

            (document.getElementsByName("taocodexletterthree")[0].value == "") &&

            (document.getElementsByName("taocodexsuffix")[0].value == "") &&

            (document.getElementsByName("zhezhunishth_123")[0] !== undefined) &&
            (document.getElementsByName("taocodexprefix")[0] !== undefined) &&
            (document.getElementsByName("taocodexletterone")[0] !== undefined) &&
            (document.getElementsByName("taocodexvowelone")[0] !== undefined) &&
            (document.getElementsByName("taocodexlettertwo")[0] !== undefined) &&
            (document.getElementsByName("taocodexvoweltwo")[0] !== undefined) &&
            (document.getElementsByName("taocodexletterthree")[0] !== undefined) &&
            (document.getElementsByName("taocodexsuffix")[0] !== undefined)
        )
        {
            // alert("Zhezhunisht prefix, racine et suffix pas encodé.");
            // alert("Zhezhunisht n'est pas vide.");
            var zhezhunishth_123 = document.getElementsByName("zhezhunishth_123")[0].value;
        }
        else if
        (
            (document.getElementsByName("taocodexprefix")[0].value != "") ||

            (document.getElementsByName("taocodexletterone")[0].value != "") ||

            (document.getElementsByName("taocodexvowelone")[0].value != "") ||

            (document.getElementsByName("taocodexlettertwo")[0].value != "") ||

            (document.getElementsByName("taocodexvoweltwo")[0].value != "") ||

            (document.getElementsByName("taocodexletterthree")[0].value != "") ||

            (document.getElementsByName("taocodexsuffix")[0].value != "") ||

            (document.getElementsByName("zhezhunishth_123")[0] !== undefined) ||
            (document.getElementsByName("taocodexprefix")[0] !== undefined) ||
            (document.getElementsByName("taocodexletterone")[0] !== undefined) ||
            (document.getElementsByName("taocodexvowelone")[0] !== undefined) ||
            (document.getElementsByName("taocodexlettertwo")[0] !== undefined) ||
            (document.getElementsByName("taocodexvoweltwo")[0] !== undefined) ||
            (document.getElementsByName("taocodexletterthree")[0] !== undefined) ||
            (document.getElementsByName("taocodexsuffix")[0] !== undefined)
        )
        {
            // alert("Zhezhunisht est égal à prefix + lettres & voyelles.");
            var zhezhunishth_123 = taocodexPrefix +
                                   taocodexLetterOne +
                                   taocodexVowelOne +
                                   taocodexLetterTwo +
                                   taocodexVowelTwo +
                                   taocodexLetterThree +
                                   taocodexSuffix;
        }
    }

    /*
    if(
        (document.getElementsByName("taocodexprefix")[0] === undefined) ||
        (document.getElementsByName("taocodexprefix")[0].value == "") ||

        (document.getElementsByName("taocodexletterone")[0] === undefined) ||
        (document.getElementsByName("taocodexletterone")[0].value == "") ||

        (document.getElementsByName("taocodexvowelone")[0] === undefined) ||
        (document.getElementsByName("taocodexvowelone")[0].value == "") ||

        (document.getElementsByName("taocodexlettertwo")[0] === undefined) ||
        (document.getElementsByName("taocodexlettertwo")[0].value == "") ||

        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) ||
        (document.getElementsByName("taocodexvoweltwo")[0].value == "") ||

        (document.getElementsByName("taocodexletterthree")[0] === undefined) ||
        (document.getElementsByName("taocodexletterthree")[0].value == "") ||

        (document.getElementsByName("taocodexsuffix")[0] === undefined) ||
        (document.getElementsByName("taocodexsuffix")[0].value == "")
    )
        alert("Zhezhunisht prefix, racine et suffix pas encodé.");

    if (document.getElementsByName("zhezhunishth_123")[0].value != "")
    {
        alert("Zhezhunisht n'est pas vide.");
        var zhezhunishth_123 = document.getElementsByName("zhezhunishth_123")[0].value;
    }

    else
    {

        alert("Zhezhunisht est égal à prefix + lettres & voyelles.");
        var zhezhunishth_123 = taocodexPrefix +
                                taocodexLetterOne +
                                taocodexVowelOne +
                                taocodexLetterTwo +
                                taocodexVowelTwo +
                                taocodexLetterThree +
                                taocodexSuffix;
    }
    */

    /* 1.3.2. */
    if(
        (document.getElementsByName("taocodexprefix")[0] === undefined) ||
        (document.getElementsByName("taocodexletterone")[0] === undefined) ||
        (document.getElementsByName("taocodexvowelone")[0] === undefined) ||
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) ||
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) ||
        (document.getElementsByName("taocodexletterthree")[0] === undefined) ||
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
    {
        if (document.getElementsByName("zhezhunishth_132")[0] !== undefined)
        {
            var zhezhunishth_132 = document.getElementsByName("zhezhunishth_132")[0].value;
        }
    } else {
            var zhezhunishth_132 = taocodexPrefix +
                                   taocodexLetterOne +
                                   taocodexVowelOne +
                                   taocodexLetterThree +
                                   taocodexVowelTwo +
                                   taocodexLetterTwo +
                                   taocodexSuffix;
    }

    /* 2.1.3. */
    if(
        (document.getElementsByName("taocodexprefix")[0] === undefined) ||
        (document.getElementsByName("taocodexletterone")[0] === undefined) ||
        (document.getElementsByName("taocodexvowelone")[0] === undefined) ||
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) ||
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) ||
        (document.getElementsByName("taocodexletterthree")[0] === undefined) ||
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
        {
        if (document.getElementsByName("zhezhunishth_132")[0] !== undefined) {
            var zhezhunishth_213 = document.getElementsByName("zhezhunishth_213")[0].value;
        }
    } else {
        var zhezhunishth_213 = taocodexPrefix +
                               taocodexLetterTwo +
                               taocodexVowelOne +
                               taocodexLetterOne +
                               taocodexVowelTwo +
                               taocodexLetterThree +
                               taocodexSuffix;
    }

    /* 2.1.3. */
    if(
        (document.getElementsByName("taocodexprefix")[0] === undefined) ||
        (document.getElementsByName("taocodexletterone")[0] === undefined) ||
        (document.getElementsByName("taocodexvowelone")[0] === undefined) ||
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) ||
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) ||
        (document.getElementsByName("taocodexletterthree")[0] === undefined) ||
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
        {
        if (document.getElementsByName("zhezhunishth_132")[0] !== undefined) {
            var zhezhunishth_231 = document.getElementsByName("zhezhunishth_231")[0].value;
        }
    } else {
        var zhezhunishth_231 = taocodexPrefix +
            taocodexLetterTwo +
            taocodexVowelOne +
            taocodexLetterThree +
            taocodexVowelTwo +
            taocodexLetterOne +
            taocodexSuffix;
    }

    /* 3.1.2. */
    if(
        (document.getElementsByName("taocodexprefix")[0] === undefined) ||
        (document.getElementsByName("taocodexletterone")[0] === undefined) ||
        (document.getElementsByName("taocodexvowelone")[0] === undefined) ||
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) ||
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) ||
        (document.getElementsByName("taocodexletterthree")[0] === undefined) ||
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
        {
        if (document.getElementsByName("zhezhunishth_132")[0] !== undefined) {
            var zhezhunishth_312 = document.getElementsByName("zhezhunishth_312")[0].value;
        }
    } else {
        var zhezhunishth_312 = taocodexPrefix +
                               taocodexLetterThree +
                               taocodexVowelOne +
                               taocodexLetterOne +
                               taocodexVowelTwo +
                               taocodexLetterTwo +
                               taocodexSuffix;
    }

    /* 3.2.1. */
    if (
        (document.getElementsByName("zhezhunishth_321")[0] !== undefined) &&

        (document.getElementsByName("taocodexprefix")[0] === undefined) &&
        (document.getElementsByName("taocodexletterone")[0] === undefined) &&
        (document.getElementsByName("taocodexvowelone")[0] === undefined) &&
        (document.getElementsByName("taocodexlettertwo")[0] === undefined) &&
        (document.getElementsByName("taocodexvoweltwo")[0] === undefined) &&
        (document.getElementsByName("taocodexletterthree")[0] === undefined) &&
        (document.getElementsByName("taocodexsuffix")[0] === undefined)
    )
    {
        // alert("Zhezhunisht cas trois & n'est pas vide.");
        var zhezhunishth_321 = document.getElementsByName("zhezhunishth_321")[0].value;
    }
    else if (document.getElementsByName("zhezhunishth_321")[0] !== undefined) {
        if (
            (document.getElementsByName("zhezhunishth_321")[0].value != "") &&

            (document.getElementsByName("taocodexprefix")[0].value == "") &&

            (document.getElementsByName("taocodexletterone")[0].value == "") &&

            (document.getElementsByName("taocodexvowelone")[0].value == "") &&

            (document.getElementsByName("taocodexlettertwo")[0].value == "") &&

            (document.getElementsByName("taocodexvoweltwo")[0].value == "") &&

            (document.getElementsByName("taocodexletterthree")[0].value == "") &&

            (document.getElementsByName("taocodexsuffix")[0].value == "") &&

            (document.getElementsByName("zhezhunishth_321")[0] !== undefined) &&
            (document.getElementsByName("taocodexprefix")[0] !== undefined) &&
            (document.getElementsByName("taocodexletterone")[0] !== undefined) &&
            (document.getElementsByName("taocodexvowelone")[0] !== undefined) &&
            (document.getElementsByName("taocodexlettertwo")[0] !== undefined) &&
            (document.getElementsByName("taocodexvoweltwo")[0] !== undefined) &&
            (document.getElementsByName("taocodexletterthree")[0] !== undefined) &&
            (document.getElementsByName("taocodexsuffix")[0] !== undefined)
        )
        {
            // alert("Zhezhunisht prefix, racine et suffix pas encodé.");
            // alert("Zhezhunisht n'est pas vide.");
            var zhezhunishth_321 = document.getElementsByName("zhezhunishth_321")[0].value;
        }
        else if
        (
            (document.getElementsByName("taocodexprefix")[0].value != "") ||

            (document.getElementsByName("taocodexletterone")[0].value != "") ||

            (document.getElementsByName("taocodexvowelone")[0].value != "") ||

            (document.getElementsByName("taocodexlettertwo")[0].value != "") ||

            (document.getElementsByName("taocodexvoweltwo")[0].value != "") ||

            (document.getElementsByName("taocodexletterthree")[0].value != "") ||

            (document.getElementsByName("taocodexsuffix")[0].value != "") ||

            (document.getElementsByName("zhezhunishth_321")[0] !== undefined) ||
            (document.getElementsByName("taocodexprefix")[0] !== undefined) ||
            (document.getElementsByName("taocodexletterone")[0] !== undefined) ||
            (document.getElementsByName("taocodexvowelone")[0] !== undefined) ||
            (document.getElementsByName("taocodexlettertwo")[0] !== undefined) ||
            (document.getElementsByName("taocodexvoweltwo")[0] !== undefined) ||
            (document.getElementsByName("taocodexletterthree")[0] !== undefined) ||
            (document.getElementsByName("taocodexsuffix")[0] !== undefined)
        )
        {
            // alert("Zhezhunisht est égal à prefix + lettres & voyelles.");
            var zhezhunishth_321 = taocodexPrefix +
                                   taocodexLetterThree +
                                   taocodexVowelOne +
                                   taocodexLetterTwo +
                                   taocodexVowelTwo +
                                   taocodexLetterOne +
                                   taocodexSuffix;
        }
    }

    console.log(taocodexLetterOne);

    /* zhezhunishth_123 agencement */

    console.log(zhezhunishth_123);

    document.getElementsByName("zhezhunishth_123")[0].value = latinScriptTransCodation(zhezhunishth_123);

    document.getElementsByName("phonetic_123")[0].value = ipaPhoneticTransCodation(zhezhunishth_123);

    document.getElementsByName("coene_123")[0].value = greekCoenicTransCodation(zhezhunishth_123);
    document.getElementsByName("neocoene_123")[0].value = greekNeocoenicTransCodation(zhezhunishth_123);
    document.getElementsByName("attic_123")[0].value = greekAtticTransCodation(zhezhunishth_123);
    document.getElementsByName("doric_123")[0].value = greekDoricTransCodation(zhezhunishth_123);
    document.getElementsByName("ionic_123")[0].value = greekIonicTransCodation(zhezhunishth_123);
    document.getElementsByName("aeolic_123")[0].value = greekAeolicTransCodation(zhezhunishth_123);
    document.getElementsByName("laconic_123")[0].value = greekLaconicTransCodation(zhezhunishth_123);
    document.getElementsByName("delphic_123")[0].value = greekDelphicTransCodation(zhezhunishth_123);
    document.getElementsByName("boeotic_123")[0].value = greekBoeoticTransCodation(zhezhunishth_123);
    document.getElementsByName("macedonic_123")[0].value = greekMacedonicTransCodation(zhezhunishth_123);
    document.getElementsByName("poetic_123")[0].value = greekPoeticTransCodation(zhezhunishth_123);
    document.getElementsByName("epic_123")[0].value = greekEpicTransCodation(zhezhunishth_123);

    document.getElementsByName("coptic_123")[0].value = copticTransCodation(zhezhunishth_123);

    document.getElementsByName("shalvunic_123")[0].value = shalvunicTransCodation(zhezhunishth_123);
    document.getElementsByName("slavonic_123")[0].value = slavonicTransCodation(zhezhunishth_123);

    document.getElementsByName("arabic_123")[0].value = arabicTransCodation(zhezhunishth_123);
    document.getElementsByName("persian_123")[0].value = persianTransCodation(zhezhunishth_123);
    document.getElementsByName("syriac_123")[0].value = syriacTransCodation(zhezhunishth_123);
    document.getElementsByName("hebrew_123")[0].value = hebrewTransCodation(zhezhunishth_123);

    document.getElementsByName("hindi_123")[0].value = hindiTransCodation(zhezhunishth_123);

    document.getElementsByName("albanian_123")[0].value = albanianTransCodation(zhezhunishth_123);
    document.getElementsByName("albanianals_123")[0].value = tosknishtTransCodation(zhezhunishth_123);
    document.getElementsByName("albanianaln_123")[0].value = gegnishtTransCodation(zhezhunishth_123);

    document.getElementsByName("latin_123")[0].value = latinTransCodation(zhezhunishth_123);

    document.getElementsByName("englishuk_123")[0].value = englishUKTransCodation(zhezhunishth_123);
    document.getElementsByName("englishus_123")[0].value = englishUSTransCodation(zhezhunishth_123);

    document.getElementsByName("french_123")[0].value = frenchTransCodation(zhezhunishth_123);

    document.getElementsByName("shia_123")[0].value = shiaTransCodation(zhezhunishth_123);

    document.getElementsByName("hanbali_123")[0].value = hanbaliTransCodation(zhezhunishth_123);
    document.getElementsByName("hanafi_123")[0].value = hanafiTransCodation(zhezhunishth_123);
    document.getElementsByName("maliki_123")[0].value = malikiTransCodation(zhezhunishth_123);

    document.getElementsByName("turk_123")[0].value = turkTransCodation(zhezhunishth_123);

    document.getElementsByName("combination_123")[0].value = taocodexLetterOne + taocodexLetterTwo + taocodexLetterThree;

    document.getElementsByName("root_123")[0].value = taocodexLetterOne + taocodexVowelOne + taocodexLetterTwo + taocodexVowelTwo + taocodexLetterThree;

    /* zhezhunishth_132 agencement */
    document.getElementsByName("zhezhunishth_132")[0].value = latinScriptTransCodation(zhezhunishth_132);

    document.getElementsByName("phonetic_132")[0].value = ipaPhoneticTransCodation(zhezhunishth_132);

    document.getElementsByName("coene_132")[0].value = greekCoenicTransCodation(zhezhunishth_132);
    document.getElementsByName("neocoene_132")[0].value = greekNeocoenicTransCodation(zhezhunishth_132);
    document.getElementsByName("attic_132")[0].value = greekAtticTransCodation(zhezhunishth_132);
    document.getElementsByName("doric_132")[0].value = greekDoricTransCodation(zhezhunishth_132);
    document.getElementsByName("ionic_132")[0].value = greekIonicTransCodation(zhezhunishth_132);
    document.getElementsByName("aeolic_132")[0].value = greekAeolicTransCodation(zhezhunishth_132);
    document.getElementsByName("laconic_132")[0].value = greekLaconicTransCodation(zhezhunishth_132);
    document.getElementsByName("delphic_132")[0].value = greekDelphicTransCodation(zhezhunishth_132);
    document.getElementsByName("boeotic_132")[0].value = greekBoeoticTransCodation(zhezhunishth_132);
    document.getElementsByName("macedonic_132")[0].value = greekMacedonicTransCodation(zhezhunishth_132);
    document.getElementsByName("poetic_132")[0].value = greekPoeticTransCodation(zhezhunishth_132);
    document.getElementsByName("epic_132")[0].value = greekEpicTransCodation(zhezhunishth_132);

    document.getElementsByName("coptic_132")[0].value = copticTransCodation(zhezhunishth_132);

    document.getElementsByName("shalvunic_132")[0].value = shalvunicTransCodation(zhezhunishth_132);
    document.getElementsByName("slavonic_132")[0].value = slavonicTransCodation(zhezhunishth_132);

    document.getElementsByName("arabic_132")[0].value = arabicTransCodation(zhezhunishth_132);
    document.getElementsByName("persian_132")[0].value = persianTransCodation(zhezhunishth_132);
    document.getElementsByName("syriac_132")[0].value = syriacTransCodation(zhezhunishth_132);
    document.getElementsByName("hebrew_132")[0].value = hebrewTransCodation(zhezhunishth_132);

    document.getElementsByName("hindi_132")[0].value = hindiTransCodation(zhezhunishth_132);

    document.getElementsByName("albanian_132")[0].value = albanianTransCodation(zhezhunishth_132);
    document.getElementsByName("albanianals_132")[0].value = tosknishtTransCodation(zhezhunishth_132);
    document.getElementsByName("albanianaln_132")[0].value = gegnishtTransCodation(zhezhunishth_132);

    document.getElementsByName("latin_132")[0].value = latinTransCodation(zhezhunishth_132);

    document.getElementsByName("englishuk_132")[0].value = englishUKTransCodation(zhezhunishth_132);
    document.getElementsByName("englishus_132")[0].value = englishUSTransCodation(zhezhunishth_132);

    document.getElementsByName("french_132")[0].value = frenchTransCodation(zhezhunishth_132);

    document.getElementsByName("shia_132")[0].value = shiaTransCodation(zhezhunishth_132);

    document.getElementsByName("hanbali_132")[0].value = hanbaliTransCodation(zhezhunishth_132);
    document.getElementsByName("hanafi_132")[0].value = hanafiTransCodation(zhezhunishth_132);
    document.getElementsByName("maliki_132")[0].value = malikiTransCodation(zhezhunishth_132);

    document.getElementsByName("turk_132")[0].value = turkTransCodation(zhezhunishth_132);

    document.getElementsByName("combination_132")[0].value = taocodexLetterOne + taocodexLetterThree + taocodexLetterTwo;

    document.getElementsByName("root_132")[0].value = taocodexLetterOne + taocodexVowelOne + taocodexLetterThree + taocodexVowelTwo + taocodexLetterTwo;

    /* zhezhunishth_213 agencement */
    document.getElementsByName("zhezhunishth_213")[0].value = latinScriptTransCodation(zhezhunishth_213);

    document.getElementsByName("phonetic_213")[0].value = ipaPhoneticTransCodation(zhezhunishth_213);

    document.getElementsByName("coene_213")[0].value = greekCoenicTransCodation(zhezhunishth_213);
    document.getElementsByName("neocoene_213")[0].value = greekNeocoenicTransCodation(zhezhunishth_213);
    document.getElementsByName("attic_213")[0].value = greekAtticTransCodation(zhezhunishth_213);
    document.getElementsByName("doric_213")[0].value = greekDoricTransCodation(zhezhunishth_213);
    document.getElementsByName("ionic_213")[0].value = greekIonicTransCodation(zhezhunishth_213);
    document.getElementsByName("aeolic_213")[0].value = greekAeolicTransCodation(zhezhunishth_213);
    document.getElementsByName("laconic_213")[0].value = greekLaconicTransCodation(zhezhunishth_213);
    document.getElementsByName("delphic_213")[0].value = greekDelphicTransCodation(zhezhunishth_213);
    document.getElementsByName("boeotic_213")[0].value = greekBoeoticTransCodation(zhezhunishth_213);
    document.getElementsByName("macedonic_213")[0].value = greekMacedonicTransCodation(zhezhunishth_213);
    document.getElementsByName("poetic_213")[0].value = greekPoeticTransCodation(zhezhunishth_213);
    document.getElementsByName("epic_213")[0].value = greekEpicTransCodation(zhezhunishth_213);

    document.getElementsByName("coptic_213")[0].value = copticTransCodation(zhezhunishth_213);

    document.getElementsByName("shalvunic_213")[0].value = shalvunicTransCodation(zhezhunishth_213);
    document.getElementsByName("slavonic_213")[0].value = slavonicTransCodation(zhezhunishth_213);

    document.getElementsByName("arabic_213")[0].value = arabicTransCodation(zhezhunishth_213);
    document.getElementsByName("persian_213")[0].value = persianTransCodation(zhezhunishth_213);
    document.getElementsByName("syriac_213")[0].value = syriacTransCodation(zhezhunishth_213);
    document.getElementsByName("hebrew_213")[0].value = hebrewTransCodation(zhezhunishth_213);

    document.getElementsByName("hindi_213")[0].value = hindiTransCodation(zhezhunishth_213);

    document.getElementsByName("albanian_213")[0].value = albanianTransCodation(zhezhunishth_213);
    document.getElementsByName("albanianals_213")[0].value = tosknishtTransCodation(zhezhunishth_213);
    document.getElementsByName("albanianaln_213")[0].value = gegnishtTransCodation(zhezhunishth_213);

    document.getElementsByName("latin_213")[0].value = latinTransCodation(zhezhunishth_213);

    document.getElementsByName("englishuk_213")[0].value = englishUKTransCodation(zhezhunishth_213);
    document.getElementsByName("englishus_213")[0].value = englishUSTransCodation(zhezhunishth_213);

    document.getElementsByName("french_213")[0].value = frenchTransCodation(zhezhunishth_213);

    document.getElementsByName("shia_213")[0].value = shiaTransCodation(zhezhunishth_213);

    document.getElementsByName("hanbali_213")[0].value = hanbaliTransCodation(zhezhunishth_213);
    document.getElementsByName("hanafi_213")[0].value = hanafiTransCodation(zhezhunishth_213);
    document.getElementsByName("maliki_213")[0].value = malikiTransCodation(zhezhunishth_213);

    document.getElementsByName("turk_213")[0].value = turkTransCodation(zhezhunishth_213);

    document.getElementsByName("combination_213")[0].value = taocodexLetterTwo + taocodexLetterOne + taocodexLetterThree;

    document.getElementsByName("root_213")[0].value = taocodexLetterTwo + taocodexVowelOne + taocodexLetterOne + taocodexVowelTwo + taocodexLetterThree;

    /* zhezhunishth_231 agencement */
    document.getElementsByName("zhezhunishth_231")[0].value = latinScriptTransCodation(zhezhunishth_231);

    document.getElementsByName("phonetic_231")[0].value = ipaPhoneticTransCodation(zhezhunishth_231);

    document.getElementsByName("coene_231")[0].value = greekCoenicTransCodation(zhezhunishth_231);
    document.getElementsByName("neocoene_231")[0].value = greekNeocoenicTransCodation(zhezhunishth_231);
    document.getElementsByName("attic_231")[0].value = greekAtticTransCodation(zhezhunishth_231);
    document.getElementsByName("doric_231")[0].value = greekDoricTransCodation(zhezhunishth_231);
    document.getElementsByName("ionic_231")[0].value = greekIonicTransCodation(zhezhunishth_231);
    document.getElementsByName("aeolic_231")[0].value = greekAeolicTransCodation(zhezhunishth_231);
    document.getElementsByName("laconic_231")[0].value = greekLaconicTransCodation(zhezhunishth_231);
    document.getElementsByName("delphic_231")[0].value = greekDelphicTransCodation(zhezhunishth_231);
    document.getElementsByName("boeotic_231")[0].value = greekBoeoticTransCodation(zhezhunishth_231);
    document.getElementsByName("macedonic_231")[0].value = greekMacedonicTransCodation(zhezhunishth_231);
    document.getElementsByName("poetic_231")[0].value = greekPoeticTransCodation(zhezhunishth_231);
    document.getElementsByName("epic_231")[0].value = greekEpicTransCodation(zhezhunishth_231);

    document.getElementsByName("coptic_231")[0].value = copticTransCodation(zhezhunishth_231);

    document.getElementsByName("shalvunic_231")[0].value = shalvunicTransCodation(zhezhunishth_231);
    document.getElementsByName("slavonic_231")[0].value = slavonicTransCodation(zhezhunishth_231);

    document.getElementsByName("arabic_231")[0].value = arabicTransCodation(zhezhunishth_231);
    document.getElementsByName("persian_231")[0].value = persianTransCodation(zhezhunishth_231);
    document.getElementsByName("syriac_231")[0].value = syriacTransCodation(zhezhunishth_231);
    document.getElementsByName("hebrew_231")[0].value = hebrewTransCodation(zhezhunishth_231);

    document.getElementsByName("hindi_231")[0].value = hindiTransCodation(zhezhunishth_231);

    document.getElementsByName("albanian_231")[0].value = albanianTransCodation(zhezhunishth_231);
    document.getElementsByName("albanianals_231")[0].value = tosknishtTransCodation(zhezhunishth_231);
    document.getElementsByName("albanianaln_231")[0].value = gegnishtTransCodation(zhezhunishth_231);

    document.getElementsByName("latin_231")[0].value = latinTransCodation(zhezhunishth_231);

    document.getElementsByName("englishuk_231")[0].value = englishUKTransCodation(zhezhunishth_231);
    document.getElementsByName("englishus_231")[0].value = englishUSTransCodation(zhezhunishth_231);

    document.getElementsByName("french_231")[0].value = frenchTransCodation(zhezhunishth_231);

    document.getElementsByName("shia_231")[0].value = shiaTransCodation(zhezhunishth_231);

    document.getElementsByName("hanbali_231")[0].value = hanbaliTransCodation(zhezhunishth_231);
    document.getElementsByName("hanafi_231")[0].value = hanafiTransCodation(zhezhunishth_231);
    document.getElementsByName("maliki_231")[0].value = malikiTransCodation(zhezhunishth_231);

    document.getElementsByName("turk_231")[0].value = turkTransCodation(zhezhunishth_231);

    document.getElementsByName("combination_231")[0].value = taocodexLetterTwo + taocodexLetterThree + taocodexLetterOne;

    document.getElementsByName("root_231")[0].value = taocodexLetterTwo + taocodexVowelOne + taocodexLetterThree + taocodexVowelTwo + taocodexLetterOne;

    /* zhezhunishth_312 agencement */
    document.getElementsByName("zhezhunishth_312")[0].value = latinScriptTransCodation(zhezhunishth_312);

    document.getElementsByName("phonetic_312")[0].value = ipaPhoneticTransCodation(zhezhunishth_312);

    document.getElementsByName("coene_312")[0].value = greekCoenicTransCodation(zhezhunishth_312);
    document.getElementsByName("neocoene_312")[0].value = greekNeocoenicTransCodation(zhezhunishth_312);
    document.getElementsByName("attic_312")[0].value = greekAtticTransCodation(zhezhunishth_312);
    document.getElementsByName("doric_312")[0].value = greekDoricTransCodation(zhezhunishth_312);
    document.getElementsByName("ionic_312")[0].value = greekIonicTransCodation(zhezhunishth_312);
    document.getElementsByName("aeolic_312")[0].value = greekAeolicTransCodation(zhezhunishth_312);
    document.getElementsByName("laconic_312")[0].value = greekLaconicTransCodation(zhezhunishth_312);
    document.getElementsByName("delphic_312")[0].value = greekDelphicTransCodation(zhezhunishth_312);
    document.getElementsByName("boeotic_312")[0].value = greekBoeoticTransCodation(zhezhunishth_312);
    document.getElementsByName("macedonic_312")[0].value = greekMacedonicTransCodation(zhezhunishth_312);
    document.getElementsByName("poetic_312")[0].value = greekPoeticTransCodation(zhezhunishth_312);
    document.getElementsByName("epic_312")[0].value = greekEpicTransCodation(zhezhunishth_312);

    document.getElementsByName("coptic_312")[0].value = copticTransCodation(zhezhunishth_312);

    document.getElementsByName("shalvunic_312")[0].value = shalvunicTransCodation(zhezhunishth_312);
    document.getElementsByName("slavonic_312")[0].value = slavonicTransCodation(zhezhunishth_312);

    document.getElementsByName("arabic_312")[0].value = arabicTransCodation(zhezhunishth_312);
    document.getElementsByName("persian_312")[0].value = persianTransCodation(zhezhunishth_312);
    document.getElementsByName("syriac_312")[0].value = syriacTransCodation(zhezhunishth_312);
    document.getElementsByName("hebrew_312")[0].value = hebrewTransCodation(zhezhunishth_312);

    document.getElementsByName("hindi_312")[0].value = hindiTransCodation(zhezhunishth_312);

    document.getElementsByName("albanian_312")[0].value = albanianTransCodation(zhezhunishth_312);
    document.getElementsByName("albanianals_312")[0].value = tosknishtTransCodation(zhezhunishth_312);
    document.getElementsByName("albanianaln_312")[0].value = gegnishtTransCodation(zhezhunishth_312);

    document.getElementsByName("latin_312")[0].value = latinTransCodation(zhezhunishth_312);

    document.getElementsByName("englishuk_312")[0].value = englishUKTransCodation(zhezhunishth_312);
    document.getElementsByName("englishus_312")[0].value = englishUSTransCodation(zhezhunishth_312);

    document.getElementsByName("french_312")[0].value = frenchTransCodation(zhezhunishth_312);

    document.getElementsByName("shia_312")[0].value = shiaTransCodation(zhezhunishth_312);

    document.getElementsByName("hanbali_312")[0].value = hanbaliTransCodation(zhezhunishth_312);
    document.getElementsByName("hanafi_312")[0].value = hanafiTransCodation(zhezhunishth_312);
    document.getElementsByName("maliki_312")[0].value = malikiTransCodation(zhezhunishth_312);

    document.getElementsByName("turk_312")[0].value = turkTransCodation(zhezhunishth_312);

    document.getElementsByName("combination_312")[0].value = taocodexLetterThree + taocodexLetterOne + taocodexLetterTwo;

    document.getElementsByName("root_312")[0].value = taocodexLetterThree + taocodexVowelOne + taocodexLetterOne + taocodexVowelTwo + taocodexLetterTwo;

    /* zhezhunishth_321 agencement */
    document.getElementsByName("zhezhunishth_321")[0].value = latinScriptTransCodation(zhezhunishth_321);

    document.getElementsByName("phonetic_321")[0].value = ipaPhoneticTransCodation(zhezhunishth_321);

    document.getElementsByName("coene_321")[0].value = greekCoenicTransCodation(zhezhunishth_321);
    document.getElementsByName("neocoene_321")[0].value = greekNeocoenicTransCodation(zhezhunishth_321);
    document.getElementsByName("attic_321")[0].value = greekAtticTransCodation(zhezhunishth_321);
    document.getElementsByName("doric_321")[0].value = greekDoricTransCodation(zhezhunishth_321);
    document.getElementsByName("ionic_321")[0].value = greekIonicTransCodation(zhezhunishth_321);
    document.getElementsByName("aeolic_321")[0].value = greekAeolicTransCodation(zhezhunishth_321);
    document.getElementsByName("laconic_321")[0].value = greekLaconicTransCodation(zhezhunishth_321);
    document.getElementsByName("delphic_321")[0].value = greekDelphicTransCodation(zhezhunishth_321);
    document.getElementsByName("boeotic_321")[0].value = greekBoeoticTransCodation(zhezhunishth_321);
    document.getElementsByName("macedonic_321")[0].value = greekMacedonicTransCodation(zhezhunishth_321);
    document.getElementsByName("poetic_321")[0].value = greekPoeticTransCodation(zhezhunishth_321);
    document.getElementsByName("epic_321")[0].value = greekEpicTransCodation(zhezhunishth_321);

    document.getElementsByName("coptic_321")[0].value = copticTransCodation(zhezhunishth_321);

    document.getElementsByName("shalvunic_321")[0].value = shalvunicTransCodation(zhezhunishth_321);
    document.getElementsByName("slavonic_321")[0].value = slavonicTransCodation(zhezhunishth_321);

    document.getElementsByName("arabic_321")[0].value = arabicTransCodation(zhezhunishth_321);
    document.getElementsByName("persian_321")[0].value = persianTransCodation(zhezhunishth_321);
    document.getElementsByName("syriac_321")[0].value = syriacTransCodation(zhezhunishth_321);
    document.getElementsByName("hebrew_321")[0].value = hebrewTransCodation(zhezhunishth_321);

    document.getElementsByName("hindi_321")[0].value = hindiTransCodation(zhezhunishth_321);

    document.getElementsByName("albanian_321")[0].value = albanianTransCodation(zhezhunishth_321);
    document.getElementsByName("albanianals_321")[0].value = tosknishtTransCodation(zhezhunishth_321);
    document.getElementsByName("albanianaln_321")[0].value = gegnishtTransCodation(zhezhunishth_321);

    document.getElementsByName("latin_321")[0].value = latinTransCodation(zhezhunishth_321);

    document.getElementsByName("englishuk_321")[0].value = englishUKTransCodation(zhezhunishth_321);
    document.getElementsByName("englishus_321")[0].value = englishUSTransCodation(zhezhunishth_321);

    document.getElementsByName("french_321")[0].value = frenchTransCodation(zhezhunishth_321);

    document.getElementsByName("shia_321")[0].value = shiaTransCodation(zhezhunishth_321);

    document.getElementsByName("hanbali_321")[0].value = hanbaliTransCodation(zhezhunishth_321);
    document.getElementsByName("hanafi_321")[0].value = hanafiTransCodation(zhezhunishth_321);
    document.getElementsByName("maliki_321")[0].value = malikiTransCodation(zhezhunishth_321);

    document.getElementsByName("turk_321")[0].value = turkTransCodation(zhezhunishth_321);

    document.getElementsByName("combination_321")[0].value = taocodexLetterThree + taocodexLetterTwo + taocodexLetterOne;

    document.getElementsByName("root_321")[0].value = taocodexLetterThree + taocodexVowelOne + taocodexLetterTwo + taocodexVowelTwo + taocodexLetterOne;

    // console.log(zhezhunishth_123);
}

/**
 * Created by PhpStorm.
 * User: nemzag
 * Date: 2018-06-11
 * Time: 19:30
 */

function zhezhunishthToTranscodations() {



    /* zhezhunishth_123 agencement */
    document.getElementsByName("zhezhunishth_123")[0].value = zhezhunishth_123;
    console.log(zhezhunishth_123);

    if (document.getElementsByName("zhezhunishth_321")[0] !== undefined) {
        document.getElementsByName("zhezhunishth_321")[0].value = latinScriptTransCodation(zhezhunishth_321)
    }

    document.getElementsByName("zhezhunishth_123")[0].value = latinScriptTransCodation(zhezhunishth_123);

    document.getElementsByName("phonetic_123")[0].value = ipaPhoneticTransCodation(zhezhunishth_123);

    document.getElementsByName("coene_123")[0].value = greekCoenicTransCodation(zhezhunishth_123);
    document.getElementsByName("neocoene_123")[0].value = greekNeocoenicTransCodation(zhezhunishth_123);
    document.getElementsByName("attic_123")[0].value = greekAtticTransCodation(zhezhunishth_123);
    document.getElementsByName("doric_123")[0].value = greekDoricTransCodation(zhezhunishth_123);
    document.getElementsByName("ionic_123")[0].value = greekIonicTransCodation(zhezhunishth_123);
    document.getElementsByName("aeolic_123")[0].value = greekAeolicTransCodation(zhezhunishth_123);
    document.getElementsByName("laconic_123")[0].value = greekLaconicTransCodation(zhezhunishth_123);
    document.getElementsByName("delphic_123")[0].value = greekDelphicTransCodation(zhezhunishth_123);
    document.getElementsByName("boeotic_123")[0].value = greekBoeoticTransCodation(zhezhunishth_123);
    document.getElementsByName("macedonic_123")[0].value = greekMacedonicTransCodation(zhezhunishth_123);
    document.getElementsByName("poetic_123")[0].value = greekPoeticTransCodation(zhezhunishth_123);
    document.getElementsByName("epic_123")[0].value = greekEpicTransCodation(zhezhunishth_123);

    document.getElementsByName("coptic_123")[0].value = copticTransCodation(zhezhunishth_123);

    document.getElementsByName("shalvunic_123")[0].value = shalvunicTransCodation(zhezhunishth_123);
    document.getElementsByName("slavonic_123")[0].value = slavonicTransCodation(zhezhunishth_123);

    document.getElementsByName("arabic_123")[0].value = arabicTransCodation(zhezhunishth_123);
    document.getElementsByName("persian_123")[0].value = persianTransCodation(zhezhunishth_123);
    document.getElementsByName("syriac_123")[0].value = syriacTransCodation(zhezhunishth_123);
    document.getElementsByName("hebrew_123")[0].value = hebrewTransCodation(zhezhunishth_123);

    document.getElementsByName("hindi_123")[0].value = hindiTransCodation(zhezhunishth_123);

    document.getElementsByName("albanian_123")[0].value = albanianTransCodation(zhezhunishth_123);
    document.getElementsByName("albanianals_123")[0].value = tosknishtTransCodation(zhezhunishth_123);
    document.getElementsByName("albanianaln_123")[0].value = gegnishtTransCodation(zhezhunishth_123);

    document.getElementsByName("latin_123")[0].value = latinTransCodation(zhezhunishth_123);

    document.getElementsByName("englishuk_123")[0].value = englishUKTransCodation(zhezhunishth_123);
    document.getElementsByName("englishus_123")[0].value = englishUSTransCodation(zhezhunishth_123);

    document.getElementsByName("french_123")[0].value = frenchTransCodation(zhezhunishth_123);

    document.getElementsByName("shia_123")[0].value = shiaTransCodation(zhezhunishth_123);

    document.getElementsByName("hanbali_123")[0].value = hanbaliTransCodation(zhezhunishth_123);
    document.getElementsByName("hanafi_123")[0].value = hanafiTransCodation(zhezhunishth_123);
    document.getElementsByName("maliki_123")[0].value = malikiTransCodation(zhezhunishth_123);

    document.getElementsByName("turk_123")[0].value = turkTransCodation(zhezhunishth_123);

    /* zhezhunishth_132 agencement */
    if (zhezhunishth_132 !== undefined) {
        document.getElementsByName("zhezhunishth_132")[0].value = zhezhunishth_132;

        document.getElementsByName("coene_132")[0].value = greekCoenicTransCodation(zhezhunishth_132);
        document.getElementsByName("attic_132")[0].value = greekAtticTransCodation(zhezhunishth_132);
        document.getElementsByName("doric_132")[0].value = greekDoricTransCodation(zhezhunishth_132);

        document.getElementsByName("phonetic_132")[0].value = phoneticTransCodation(zhezhunishth_132);

        document.getElementsByName("arabic_132")[0].value = arabicTransCodation(zhezhunishth_132);
        document.getElementsByName("hebrew_132")[0].value = hebrewTransCodation(zhezhunishth_132);

        document.getElementsByName("french_132")[0].value = frenchTransCodation(zhezhunishth_132);
    }

    /* zhezhunishth_213 agencement */
    if (zhezhunishth_213 !== undefined) {
        document.getElementsByName("zhezhunishth_213")[0].value = zhezhunishth_213;

        document.getElementsByName("coene_213")[0].value = greekCoenicTransCodation(zhezhunishth_213);
        document.getElementsByName("attic_213")[0].value = greekAtticTransCodation(zhezhunishth_213);
        document.getElementsByName("doric_213")[0].value = greekDoricTransCodation(zhezhunishth_213);

        document.getElementsByName("phonetic_213")[0].value = phoneticTransCodation(zhezhunishth_213);

        document.getElementsByName("arabic_213")[0].value = arabicTransCodation(zhezhunishth_213);
        document.getElementsByName("hebrew_213")[0].value = hebrewTransCodation(zhezhunishth_213);

        document.getElementsByName("french_213")[0].value = frenchTransCodation(zhezhunishth_213);
    }

    /* zhezhunishth_231 agencement */
    document.getElementsByName("zhezhunishth_231")[0].value = zhezhunishth_231;

    document.getElementsByName("coene_231")[0].value = greekCoenicTransCodation(zhezhunishth_231);
    document.getElementsByName("attic_231")[0].value = greekAtticTransCodation(zhezhunishth_231);
    document.getElementsByName("doric_231")[0].value = greekDoricTransCodation(zhezhunishth_231);

    document.getElementsByName("phonetic_231")[0].value = phoneticTransCodation(zhezhunishth_231);

    document.getElementsByName("arabic_231")[0].value = arabicTransCodation(zhezhunishth_231);
    document.getElementsByName("hebrew_231")[0].value = hebrewTransCodation(zhezhunishth_231);

    document.getElementsByName("french_231")[0].value = frenchTransCodation(zhezhunishth_231);

    /* zhezhunishth_312 agencement */
    document.getElementsByName("zhezhunishth_312")[0].value = zhezhunishth_312;

    document.getElementsByName("coene_312")[0].value = greekCoenicTransCodation(zhezhunishth_312);
    document.getElementsByName("attic_312")[0].value = greekAtticTransCodation(zhezhunishth_312);
    document.getElementsByName("doric_312")[0].value = greekDoricTransCodation(zhezhunishth_312);

    document.getElementsByName("phonetic_312")[0].value = phoneticTransCodation(zhezhunishth_312);

    document.getElementsByName("arabic_312")[0].value = arabicTransCodation(zhezhunishth_312);
    document.getElementsByName("hebrew_312")[0].value = hebrewTransCodation(zhezhunishth_312);

    document.getElementsByName("french_312")[0].value = frenchTransCodation(zhezhunishth_312);

    /* zhezhunishth_321 agencement */
    document.getElementsByName("zhezhunishth_321")[0].value = zhezhunishth_321;

    document.getElementsByName("coene_321")[0].value = greekCoenicTransCodation(zhezhunishth_321);
    document.getElementsByName("attic_321")[0].value = greekAtticTransCodation(zhezhunishth_321);
    document.getElementsByName("doric_321")[0].value = greekDoricTransCodation(zhezhunishth_321);

    document.getElementsByName("phonetic_321")[0].value = phoneticTransCodation(zhezhunishth_321);

    document.getElementsByName("arabic_321")[0].value = arabicTransCodation(zhezhunishth_321);
    document.getElementsByName("hebrew_321")[0].value = hebrewTransCodation(zhezhunishth_321);

    document.getElementsByName("french_321")[0].value = frenchTransCodation(zhezhunishth_321);

    console.log(zhezhunishth_123);
}