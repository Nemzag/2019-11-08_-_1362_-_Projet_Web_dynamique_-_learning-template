/**
 * Created by PhpStorm.
 * User: nemzag
 * Date: 2018-06-11
 * Time: 22:39
 */

/* LATIN SCRIPT FUNCTION */

function latinScriptTransCodation ($gegnisht) {

    // if($gegnisht.endsWith("ËË") {
    if($gegnisht.endsWith("ËË")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    $gegnisht = $gegnisht.replace(/HHH/g, "Ħ");
    $gegnisht = $gegnisht.replace(/ZHZHZH/g, "Ʒ");
    $gegnisht = $gegnisht.replace(/SHSHSH/g, "Ʃ");
    $gegnisht = $gegnisht.replace(/GHGHGH/g, "Ɣ");
    $gegnisht = $gegnisht.replace(/THTHTH/g, "Þ");
    $gegnisht = $gegnisht.replace(/DHDHDH/g, "Ð");
    $gegnisht = $gegnisht.replace(/QHQHQH/g, "ɕ");
    $gegnisht = $gegnisht.replace(/JHJHJH/g, "ɟ");
    $gegnisht = $gegnisht.replace(/RHRHRH/g, "ʀ");
    $gegnisht = $gegnisht.replace(/PHPHPH/g, "ɸ");
    $gegnisht = $gegnisht.replace(/---/g, "‑");
    $gegnisht = $gegnisht.replace(/:::/g, "‧⁠");

    // NASAL
    $gegnisht = $gegnisht.replace(/~E/g, "Ẽ");
    $gegnisht = $gegnisht.replace(/~I/g, "Ĩ");
    $gegnisht = $gegnisht.replace(/~Y/g, "Ỹ");
    $gegnisht = $gegnisht.replace(/~U/g, "Ũ");

    $gegnisht = $gegnisht.replace(/OEOEOE/g, "Œ");
    $gegnisht = $gegnisht.replace(/\/O\/O\/O/g, "Ø");
    $gegnisht = $gegnisht.replace(/AEAEAE/g, "Æ");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

/* GREEK SCRIPT FUNCTION */

function greekTransCodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/DƷ/g, "Ϫ");

    $gegnisht = $gegnisht.replace(/A/g, "Α");
    $gegnisht = $gegnisht.replace(/B/g, "Β");
    $gegnisht = $gegnisht.replace(/G/g, "Γ");
    $gegnisht = $gegnisht.replace(/D/g, "Δ");
    $gegnisht = $gegnisht.replace(/E/g, "Ε");
    $gegnisht = $gegnisht.replace(/V/g, "Ϝ");
    $gegnisht = $gegnisht.replace(/Z/g, "Ζ");
    $gegnisht = $gegnisht.replace(/Ê/g, "Η");
    $gegnisht = $gegnisht.replace(/Þ/g, "Θ");
    $gegnisht = $gegnisht.replace(/I/g, "Ι");
    $gegnisht = $gegnisht.replace(/J/g, "Ϳ");
    $gegnisht = $gegnisht.replace(/K/g, "Κ");
    $gegnisht = $gegnisht.replace(/L/g, "Λ");
    $gegnisht = $gegnisht.replace(/M/g, "Μ");
    $gegnisht = $gegnisht.replace(/N/g, "Ν");
    $gegnisht = $gegnisht.replace(/S/g, "Σ");
    $gegnisht = $gegnisht.replace(/P/g, "Π");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "Ϻ");
    $gegnisht = $gegnisht.replace(/Q/g, "Ϙ");
    $gegnisht = $gegnisht.replace(/R/g, "Ρ");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "Ϸ");
    $gegnisht = $gegnisht.replace(/T/g, "Τ");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "Ϯ");
    $gegnisht = $gegnisht.replace(/Θ/g, "Θ");
    $gegnisht = $gegnisht.replace(/Y/g, "Υ");
    $gegnisht = $gegnisht.replace(/U/g, "ϒ");
    $gegnisht = $gegnisht.replace(/W/g, "Ͷ");
    $gegnisht = $gegnisht.replace(/ɸ/g, "Φ");
    $gegnisht = $gegnisht.replace(/F/g, "Φ");
    $gegnisht = $gegnisht.replace(/X/g, "Χ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "Ϡ");
    $gegnisht = $gegnisht.replace(/Ô/g, "Ω");
    $gegnisht = $gegnisht.replace(/H/g, "Ϩ");
    $gegnisht = $gegnisht.replace(/Ħ/g, "Ͱ");

    $gegnisht = $gegnisht.replace(/Ɣ/g, "΄Γ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "΄Ζ");
    $gegnisht = $gegnisht.replace(/Ð/g, "΄Δ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "΄Ϙ");
    $gegnisht = $gegnisht.replace(/ɟ/g, "΄Ϳ");

    $gegnisht = $gegnisht.replace(/Â/g, "Α");
    $gegnisht = $gegnisht.replace(/Ä/g, "Α");
    $gegnisht = $gegnisht.replace(/Ã/g, "Α");

    $gegnisht = $gegnisht.replace(/Ö/g, "Ø");
    $gegnisht = $gegnisht.replace(/O/g, "Ο");
    $gegnisht = $gegnisht.replace(/Œ/g, "ΟΕ");

    $gegnisht = $gegnisht.replace(/Ë/g, "Ə");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "Η");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "Ι");
    $gegnisht = $gegnisht.replace(/Õ/g, "Ω");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ϒ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Υ");

    $gegnisht = $gegnisht.replace(/C/g, "Ϲ");

    /*
     * γάμμα
     * indecl, third letter in Gr. alphabet; as Numeral γ᾽ = three, third: but ,γ ῀ 3000.
     * I. γ is the medial palatal mute, between tenuis κ and asp. χ. Before the palatals γ, κ, χ and before ξ, pronounced like n in ng, as in ἄγγος, ἄγκος, ἄγχι, ἄγξω: before the same letters ἐν- in compos. becomes ἐγ-.
     */

    return $gegnisht.toUpperCase();
}

function greekInversePiPhiTransCodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/Π/g, "451");
    $gegnisht = $gegnisht.replace(/Φ/g, "Π");
    $gegnisht = $gegnisht.replace(/451/g, "Φ");

    return $gegnisht;
}


function greekInverseTauThetaTransCodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/Τ/g, "327");
    $gegnisht = $gegnisht.replace(/Θ/g, "Τ");
    $gegnisht = $gegnisht.replace(/327/g, "Θ");

    return $gegnisht;
}

/* GREEK DUPLO REMOVING */
function greekDuploRemove ($gegnisht) {
    $gegnisht = $gegnisht.replace(/ΠΤΠΤ/g, "ΠΤ");
    $gegnisht = $gegnisht.replace(/ΜΜΜΜ/g, "ΜΜ");
    $gegnisht = $gegnisht.replace(/ΠΠΠΠ/g, "ΠΠ");
    $gegnisht = $gegnisht.replace(/ΣΣΣΣ/g, "ΣΣ");

    return $gegnisht;
}

/* GREEK LIGATURE MODIFICATION */

function greekLigatureTranscodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/ΠΣ/g, "Ψ");
    $gegnisht = $gegnisht.replace(/ΦΣ/g, "Ψ");
    $gegnisht = $gegnisht.replace(/ΒΣ/g, "Ψ");
    /* ψ is a double Consonant, compounded of the labial π or φ with ς, ῀ πς, φς */

    $gegnisht = $gegnisht.replace(/ΓΣ/g, "Ξ");
    $gegnisht = $gegnisht.replace(/ΚΣ/g, "Ξ");
    $gegnisht = $gegnisht.replace(/ϘΣ/g, "Ξ");
    /* 1.ξ in aeolic and attic appears as an aspirated form of κ, cf. ξυνός with κοινός, ξύν with cum;— or of ς, cf. ξύν with σύν, ξέστης with Lat. sextarius; and so in doric fut. of Verbs in -ζω, κομίξω κλᾳξῶ παιξῶ for κομίσω κλῄσω παίσω. */

    return $gegnisht;
}

/* GREEK SUFFIX MODIFICATION */

function greekEndToOsTranscodation($gegnisht)
{

    // if ($gegnisht.endsWith("ƏƏ") {
    if ($gegnisht.endsWith("ƏƏ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΜ";
    }
    // if ($gegnisht.endsWith("Ə") {
    if ($gegnisht.endsWith("Ə")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ΟΜ";
    }
    return $gegnisht;
}

function greekEndToUsTranscodation($gegnisht) {
    if($gegnisht.endsWith("ƏƏ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }
    if($gegnisht.endsWith("Ə")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ϒΣ";
    }

    return $gegnisht;
}

function greekEndSuffixModificationTranscodation($gegnisht) {

    if(($gegnisht.length) > 10) {
        if($gegnisht.toUpperCase().endsWith("ΩͿΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -3) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.toUpperCase().endsWith("ΩͿϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -3) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.toUpperCase().endsWith("ΩͿƏ‑ΣƏ")) {
            $gegnisht = $gegnisht.slice(-0, -5) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΤΩΡΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΤΩΝΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 12) {
        if($gegnisht.slice(-6).endsWith("ΤΙΩΝΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΤΩΡϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΤΩΝϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 12) {
        if($gegnisht.slice(-6).endsWith("ΤΙΩΝϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-6).endsWith("ΘΩΡƏΣƏ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }
    if(($gegnisht.length) > 12) {
        if($gegnisht.slice(-7).endsWith("ΘΙΩΝƏΣƏ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΘΩΡϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΘΩΝϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 12) {
        if($gegnisht.slice(-6).endsWith("ΘΙΩΝϒΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΘΩΡΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 10) {
        if($gegnisht.slice(-5).endsWith("ΘΩΝΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    if(($gegnisht.length) > 12) {
        if ($gegnisht.slice(-6).endsWith("ΘΙΩΝΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "";
        }
    }

    return $gegnisht;
}

/* GREEK DIALECT SCRIPT FUNCTION */

function greekCoenicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = $gegnisht.replace(/ϒ/g, "ου");

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    $gegnisht = greekLigatureTranscodation($gegnisht);

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function greekAtticTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = $gegnisht.replace(/ϒ/g, "ου");

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */

    $gegnisht = $gegnisht.replace(/Λ/g, "467");
    $gegnisht = $gegnisht.replace(/Ρ/g, "Λ");
    $gegnisht = $gegnisht.replace(/467/g, "Ρ");
    /* 1.attic λ is sometimes represented by π, as κλίβανος κρίβανος, γλώσσαλγος γλώσσαργος, ναύκραρος ναύκληρος, ἀλκ-ή ἀρκ-εῖν: so, ὁλᾷς Θέωλος κόλαξ were lisping pronunc. for ὁρᾷς Θέωρος κόραξ, Ar. */

    $gegnisht = $gegnisht.replace(/Ν/g, "Λ");
    /* λάμβδα */
    /* 2.doric λ becomes ν, as, ἦνθον φίντατος for ἦλθον φίλτατος; whereas attic λ sometimes replaces ν, as, λίτρον πλεύμων for νίτρον πνεύμων. */

    $gegnisht = $gegnisht.replace(/Μ/g, "Ν");
    /* μῦ
     * * 2. attic and doric into ν, as νιν for μιν; so Lat. ne, num = μή, μῶν.
     * νῦ
     * 2. attic and doric for μ, v. Μ μ. II. 2.
     */

    $gegnisht = $gegnisht.replace(/ϒ/g, "ΟΥ");

    $gegnisht = $gegnisht.replace(/ΣΣ/g, "ΤΤ");
    /* 2.in new attic, as in doric and Boeot., ττ for σς, mostly in Verbs, πράττω for πράσσω, etc. */

    $gegnisht = $gegnisht.replace(/ΣΔ/g, "Ζ");
    /*  Ζ ζ is composed of ς and δ, so that in aeolic it becomes σδ, as Σδεύς κωμάσδω ψιθυρίσδω for Ζεύς κωμάζω ψιθυρίζω reversely, in attic, σδ becomes ζ, Ἀθήναζε θύραζε for Ἀθήνασδε θύρασδε. */

    $gegnisht = $gegnisht.replace(/ΡΗ/g, "ΡΑ");
    /* 1.the vowel η was much used by the ionic, being in aeolic and doric replaced by α_, as also in attic, but mostly after ρ or a vowel, πρήσσω θώρηξ ἰητρός, attic πράσσω θώραξ ἰατρός. */

    $gegnisht = $gegnisht.replace(/ΡΣ/g, "ΡΡ");
    /* 2.in attic, ρρ replaced the ionic and old attic ρς, as ἄρρην, θάρρος for ἄρσην, θάρσος. */

    $gegnisht = greekLigatureTranscodation($gegnisht);

    $gegnisht = $gegnisht.replace(/ΘΘ/g, "ΤΘ");
    /* θῆτα
     * 3. when θ was repeated in two foll. syllables, the former became τ, as Ἀτθίς.*/

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekNeocoenicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);

    $gegnisht = greekInversePiPhiTransCodation($gegnisht);

    if($gegnisht.endsWith("ƏƏ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "Ə‑ΣƏ";
    }
    if($gegnisht.endsWith("Ə")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "Ə‑ΣƏ";
    }

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */

    if($gegnisht.endsWith("ΟΞ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekDoricTransCodation($gegnisht)
{
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);
    /* 2.aeolic and doric into τ, as αὖτις ἐντεῦθεν for αὖθις ἐντεῦθεν. */

    $gegnisht = greekInversePiPhiTransCodation($gegnisht);
    /* 2.in aeolic and ionic, it stands for the asp. φ, ἀμπί for ἀμφί, πανός for φανός, ἀπικέσθαι for ἀφικ-: in ionic it was retained in apostrophe before an aspirate, ἀπ᾽ ἡμῶν, ἐπ᾽ ἡμέρην, ὑπ᾽ ὑμῶν, etc.: on the contrary the aspirated form was preferred in attic, ἀσφάραγος for ἀσπάραγος, σφόνδυλος for σπόνδυλος. */
    /* 1.in aeolic, doric and ionic the aspirate was often dropped, and φ became π, as in ἀσπάραγος σπόγγος σπυράς for ἀσφάραγος σφόγγος σφυράς, whereas the attic sometimes used φ for π, as φανός φάτρα for πανός πάτρα. */

    $gegnisht = greekEndToUsTranscodation($gegnisht);
    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */
    if ($gegnisht.slice(0, 1) === "Β") {
        $gegnisht = $gegnisht.slice(0, 0) + "Γ" + $gegnisht.slice(1);
    }
    /* 1. for γ, as βλήχων γληχών, βλέφαρον doric γλέφαρον, βουνός γουνός: βεμβράς for μεμβράς, βροτός for μορτός (mortalis). */

    $gegnisht = $gegnisht.replace(/Ζ/g, "000");

    $gegnisht = $gegnisht.replace(/Β/g, "001");
    /* 1.aeolic into β, as σάμβαλον for σάνδαλον:— reversely, ὀβελός becomes ὀδελός in doric */

    $gegnisht = $gegnisht.replace(/ΣΟΜΑΙ/g, "ΞΟΜΑΙ");
    $gegnisht = $gegnisht.replace(/ΙΣΙΣ/g, "ΙΞΙΣ");
    /* 5. doric into ξ, in fut. and aor1 of Verbs, with their deriv. Nouns, as ἐργάξομαι χείριξις for ἐργάσομαι χείρισις:—so in ionic, διξός τριξός for δισσός τρισσός; and in old attic, the prep. σύν, with all its Compds., was written ξύν. */

    $gegnisht = $gegnisht.replace(/Σ/g, "Τ");
    /* σύ -> τύ (tú) – Doric */

    $gegnisht = $gegnisht.replace(/Λ/g, "003");
    $gegnisht = $gegnisht.replace(/Ν/g, "Λ");
    $gegnisht = $gegnisht.replace(/003/g, "Ν");
    /* λάμβδα */
    /* 2.doric λ becomes ν, as, ἦνθον φίντατος for ἦλθον φίλτατος; whereas attic λ sometimes replaces ν, as, λίτρον πλεύμων for νίτρον πνεύμων. */
    /* νῦ
     * 1. doric, ν represents λ, v. Λ λ. 2. */
    /*
    $gegnisht = $gegnisht.replace(/Τ/g, "Φ");
    */
    /* 2.in aeolic, doric, and ionic φ is sometimes put for θ, as φήρ φλάω for θήρ θλάω. */

    $gegnisht = $gegnisht.replace(/Θ/g, "002");
    $gegnisht = $gegnisht.replace(/Κ/g, "Τ");
    $gegnisht = $gegnisht.replace(/002/g, "Ϙ");
    /* 2.doric κ is interchanged with τ, as ὅκα ἄλλοκα τῆνος for ὅτε ἄλλοτε κεῖνος. */

    /* 1.doric for θ, as ὄρνιχος for ὄρνιθος. */

    $gegnisht = $gegnisht.replace(/Δ/g, "Ζ");
    /* δ 2.aeolic or doric into ζ, or ζ into δ and σδ, v. ζῆτα II. 2 */
    /*  Ζ ζ is composed of ς and δ, so that in aeolic it becomes σδ, as Σδεύς κωμάσδω ψιθυρίσδω for Ζεύς κωμάζω ψιθυρίζω */

    $gegnisht = $gegnisht.replace(/001/g, "Δ");
    /* 1.aeolic into β, as σάμβαλον for σάνδαλον:— reversely, ὀβελός becomes ὀδελός in doric */

    $gegnisht = $gegnisht.replace(/000/g, "ΣΔ");
    /* But ς often disappears in aeolic, where ζά ῀ δια, see ζά, ζα-so in aeolic and doric, as we have Δεύς Δάν for Ζεύς Ζάν, δορκάς ῀ ζορκάς:—so also ἀρίζηλος for ἀρίδηλος; ἀλαπαδνός from ἀλαπάζω, παιδνός from παίζω:—doric, in the middle of words, it becomes δδ, as θερίδδω for -ίζω, μάδδα for μᾶζα. */

    $gegnisht = $gegnisht.replace(/ΕΙ/g, "Η");
    /* ἦτα
     * 3. doric and aeolic for ει, as τῆνος, κῆνος for κεῖνος. */

    $gegnisht = $gegnisht.replace(/Ϸ/g, "Σ");

    if($gegnisht.slice(1, 1) === "Ε") {
        $gegnisht = $gegnisht.slice(0, 1) + "Α" + $gegnisht.slice(2);
    }

    /*
    if($gegnisht.slice(1, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 1) + "Α" + $gegnisht.slice(2);
    }
    if($gegnisht.slice(2, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 2) + "Α" + $gegnisht.slice(3);
    }
    if($gegnisht.slice(3, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 3) + "Α" + $gegnisht.slice(4);
    }
    if($gegnisht.slice(4, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 4) + "Α" + $gegnisht.slice(5);
    }
    if($gegnisht.slice(5, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 5) + "Α" + $gegnisht.slice(6);
    }
    if($gegnisht.slice(6, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 6) + "Α" + $gegnisht.slice(7);
    }
    if($gegnisht.slice(7, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 7) + "Α" + $gegnisht.slice(8);
    }
    if($gegnisht.slice(8, 1) === "Η") {
        $gegnisht = $gegnisht.slice(0, 8) + "Α" + $gegnisht.slice(9);
    }
    */
    /* 1.the vowel η was much used by the ionic, being in aeolic and doric replaced by α_, as also in attic, but mostly after ρ or a vowel, πρήσσω θώρηξ ἰητρός, attic πράσσω θώραξ ἰατρός. */

    /* GREEK SUFFIX MODIFICATION */
    if($gegnisht.endsWith("ΟΞ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }

    if($gegnisht.endsWith("ΟΤ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΣ";
    }

    if($gegnisht.endsWith("ϒΤ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }

    if($gegnisht.endsWith("Ε")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "Α";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekIonicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    /*
    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);
    */
    /* 3.in ionic the tenius τ for its aspirate θ, as αὖτις for αὖθις; so, the tenuis remains unchanged before an aspirate, as κατεῖλον, κατ᾽ ἡσυχίην. */

    /*
    $gegnisht = greekInversePiPhiTransCodation($gegnisht);
    */
    /* 2.in aeolic and ionic, it stands for the asp. φ, ἀμπί for ἀμφί, πανός for φανός, ἀπικέσθαι for ἀφικ-: in ionic it was retained in apostrophe before an aspirate, ἀπ᾽ ἡμῶν, ἐπ᾽ ἡμέρην, ὑπ᾽ ὑμῶν, etc.: on the contrary the aspirated form was preferred in attic, ἀσφάραγος for ἀσπάραγος, σφόνδυλος for σπόνδυλος. */
    /* 1.in aeolic, doric and ionic the aspirate was often dropped, and φ became π, as in ἀσπάραγος σπόγγος σπυράς for ἀσφάραγος σφόγγος σφυράς, whereas the attic sometimes used φ for π, as φανός φάτρα for πανός πάτρα. */

    $gegnisht = greekEndToOsTranscodation($gegnisht);
    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */
    $gegnisht = $gegnisht.replace(/Α/g, "Η");
    /*  */

    $gegnisht = $gegnisht.replace(/ΣΣ/g, "Ξ");
    /* 2. interchanged with σς, ionic διξός, τριξός for δισσός, τρισσός. */

    $gegnisht = $gegnisht.replace(/Φ/g, "001");
    /* 2.in aeolic and ionic, it stands for the asp. φ, ἀμπί for ἀμφί, πανός for φανός, ἀπικέσθαι for ἀφικ-: in ionic it was retained in apostrophe before an aspirate, ἀπ᾽ ἡμῶν, ἐπ᾽ ἡμέρην, ὑπ᾽ ὑμῶν, etc.: on the contrary the aspirated form was preferred in attic, ἀσφάραγος for ἀσπάραγος, σφόνδυλος for σπόνδυλος. */
    /* 1.in aeolic, doric and ionic the aspirate was often dropped, and φ became π, as in ἀσπάραγος σπόγγος σπυράς for ἀσφάραγος σφόγγος σφυράς, whereas the attic sometimes used φ for π, as φανός φάτρα for πανός πάτρα. */

    $gegnisht = $gegnisht.replace(/Π/g, "Φ");

    $gegnisht = $gegnisht.replace(/001/g, "Π");

    $gegnisht = $gegnisht.replace(/Κ/g, "058");

    /*
    $gegnisht = $gegnisht.replace(/Π/g, "Κ");
    */
    /* —it represents π, as κου κοτε κως, etc., for που ποτε πως, etc.; so, ἴσκε ῀ ἔσπεν, ἵππος Lat. equus. */
    /* in ionic Prose, π becomes κ in relatives and interrogatives, κῶς ὅκως ὁκοῖος ὁκόσος for πῶς ὅπως ὁποῖος ὁπόσος. */

    $gegnisht = $gegnisht.replace(/Χ/g, "Κ");
    /* 1. ionic κ replaces χ, as κιθών δέκομαι κύθρη for χιτών δέχομαι χύτρα:—it represents π, as κου κοτε κως, etc., for που ποτε πως, etc.; so, ἴσκε ῀ ἔσπεν, ἵππος Lat. equus. */
    /* 2.ionic represented by κ, as δέκομαι κιθών for δέχομαι χιτών. */

    $gegnisht = $gegnisht.replace(/058/g, "Χ");

    $gegnisht = $gegnisht.replace(/ΣΜ/g, "ΔΜ");
    /* 1. aeolic and ionic into δ, as ὀδμή ἴδμεν for ὀσμή ἴσμεν. */

    $gegnisht = $gegnisht.replace(/Θ/g, "371"); /* αὖθις -> αὖτις */
    /* 2.in aeolic, doric, and ionic φ is sometimes put for θ, as φήρ φλάω for θήρ θλάω. */

    $gegnisht = $gegnisht.replace(/Τ/g, "Θ"); /* χιτών χύτρα -> κιθών κύθρη */
    /* 3.in ionic the tenius τ for its aspirate θ, as αὖτις for αὖθις; so, the tenuis remains unchanged before an aspirate, as κατεῖλον, κατ᾽ ἡσυχίην. */

    $gegnisht = $gegnisht.replace(/371/g, "Τ"); /* αὖθις -> αὖτις */
    /* 2.in aeolic, doric, and ionic φ is sometimes put for θ, as φήρ φλάω for θήρ θλάω. */

    /* TERM MUTATION */
    if($gegnisht.length < 9) {
        $gegnisht = $gegnisht.replace(/ΚΟΘΕ/g, "ΚΟΤΕ");
    }

    if($gegnisht.endsWith("ΟΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΣ";
    }
    if($gegnisht.endsWith("ΥΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΣ";
    }
    if($gegnisht.endsWith("ϒΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΣ";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekAeolicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);
    /* 2.aeolic and doric into τ, as αὖτις ἐντεῦθεν for αὖθις ἐντεῦθεν. */

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /*  DIALECTAL MUTATION */

    $gegnisht = $gegnisht.replace(/ΠΣ/g, "Ψ");

    $gegnisht = $gegnisht.replace(/Τ/g, "675");
    /* θ is sometimes represented by φ, as θλάω φλάω; so in Lat. θήρ (aeolic φήρ) fera; θύρα fores; */
    /* 2.in aeolic, doric, and ionic φ is sometimes put for θ, as φήρ φλάω for θήρ θλάω. */

    $gegnisht = $gegnisht.replace(/ΣΜ/g, "841");
    /* 1.aeolic and ionic into δ, as ὀδμή ἴδμεν for ὀσμή ἴσμεν. */

    $gegnisht = $gegnisht.replace(/ΝΔ/g, "999");
    /* δέλτα1
     * 1. aeolic into β, as σάμβαλον for σάνδαλον. */


    $gegnisht = $gegnisht.replace(/Ζ/g, "Δ");
    /* δ 2.aeolic or doric into ζ, or ζ into δ and σδ, v. ζῆτα II. 2 */
    /* But ς often disappears in aeolic, where ζά ῀ δια, see ζά, ζα-so in aeolic and doric, as we have Δεύς Δάν for Ζεύς Ζάν, δορκάς ῀ ζορκάς:—so also ἀρίζηλος for ἀρίδηλος; ἀλαπαδνός from ἀλαπάζω, παιδνός from παίζω:—doric, in the middle of words, it becomes δδ, as θερίδδω for -ίζω, μάδδα for μᾶζα. */

    $gegnisht = $gegnisht.replace(/Δ/g, "001");

    $gegnisht = $gegnisht.replace(/Μ/g, "222");
    $gegnisht = $gegnisht.replace(/Π/g, "Μ");
    /* πατέω -> μάτημῐ */
    $gegnisht = $gegnisht.replace(/675/g, "Φ");
    /* θ is sometimes represented by φ, as θλάω φλάω; so in Lat. θήρ (aeolic φήρ) fera; θύρα fores; */
    /* 2.in aeolic, doric, and ionic φ is sometimes put for θ, as φήρ φλάω for θήρ θλάω. */
    $gegnisht = $gegnisht.replace(/222/g, "Π");
    /* 1. aeolic and Lacon. into π, as πεδά for μετά. */
    /* 4. in aeolic, π is used for μ, ὄππα for ὄμμα, πεδά for μετά. */

    /* 2.in aeolic and ionic, it stands for the asp. φ, ἀμπί for ἀμφί, πανός for φανός, ἀπικέσθαι for ἀφικ-: in ionic it was retained in apostrophe before an aspirate, ἀπ᾽ ἡμῶν, ἐπ᾽ ἡμέρην, ὑπ᾽ ὑμῶν, etc.: on the contrary the aspirated form was preferred in attic, ἀσφάραγος for ἀσπάραγος, σφόνδυλος for σπόνδυλος. */
    /* 1.in aeolic, doric and ionic the aspirate was often dropped, and φ became π, as in ἀσπάραγος σπόγγος σπυράς for ἀσφάραγος σφόγγος σφυράς, whereas the attic sometimes used φ for π, as φανός φάτρα for πανός πάτρα. */

    $gegnisht = $gegnisht.replace(/Μ/g, "ΜΜ");
    /* 3. μ is doubled, b.aeolic, as ἄμμες ὔμμες ἐμμί, for ἡμεῖς ὑμεῖς εἰμί. */

    $gegnisht = greekDuploRemove($gegnisht);

    $gegnisht = $gegnisht.replace(/999/g, "ΜΒ");
    /* δέλτα1
     * 1. aeolic into β, as σάμβαλον for σάνδαλον. */

    $gegnisht = $gegnisht.replace(/841/g, "ΔΜ");
    /* 1.aeolic and ionic into δ, as ὀδμή ἴδμεν for ὀσμή ἴσμεν. */

    $gegnisht = $gegnisht.replace(/Σ/g, "Τ"); /* σύ -> τύ (tú) – Doric */
    /* 1. aeolic and doric, τ for ς, as τύ (Lat. tu, thou) for σύ; τοί τέ τῦκον φατί for σοί σέ σῦκον φησί. */

    $gegnisht = $gegnisht.replace(/001/g, "ΣΔ");
    /*  Ζ ζ is composed of ς and δ, so that in aeolic it becomes σδ, as Σδεύς κωμάσδω ψιθυρίσδω for Ζεύς κωμάζω ψιθυρίζω */
    $gegnisht = $gegnisht.replace(/ΣΔ΄/g, "Ζ΄");

    $gegnisht = $gegnisht.replace(/Υ/g, "Ι");
    /* 1.doric, ι for υ in the 3rd pl. and part. pres., as φιλέοισι ἐοῖσα for φιλέουσι, etc.; so also Μοῖσα Ἀρέθοισα for Μοῦσα, etc.:—it was added to α in some Adjs., and in the aor1 part., as μέλαις τάλαις ῥίψαις for μέλας, etc.; and in the acc. pl. fem. of 1st decl., as ταῖς νύμφαις for τὰς νύμφας. */

    $gegnisht = $gegnisht.replace(/Α/g, "Ο");
    /* ὂμικρόν
     * Dialect. changes: aeolic for α, as στροτός for στρατός; */

    /*
    $gegnisht = $gegnisht.replace(/η/g, "Α");
    */
    /* 1.the vowel η was much used by the ionic, being in aeolic and doric replaced by α_, as also in attic, but mostly after ρ or a vowel, πρήσσω θώρηξ ἰητρός, attic πράσσω θώραξ ἰατρός. */

    $gegnisht = $gegnisht.replace(/ΕΙ/g, "Η");
    /* ἦτα
     * 3. doric and aeolic for ει, as τῆνος, κῆνος for κεῖνος. */

    /*
    if (($gegnisht.length) < 7) {
        if ($gegnisht.slice(-3).toUpperCase() === "ΦΑΡ") {
            $gegnisht = $gegnisht.slice(-0, 3) + "φηρ";
        }
    }
    */

    $gegnisht = $gegnisht.replace(/ΟΥ/g, "ΟΙ");
    /* 2. aeolic, the diphth. ου became οι, Μοῖσα for Μοῦσα, λέγοισα for λέγουσα. */

    $gegnisht = $gegnisht.replace(/ΝΘ/g, "ΜΠ");
    /* πῖ
     * 5. in aeolic and doric, π for τ, πέτορες for τέσσαρες, πέμπε for πέντε. */

    $gegnisht = $gegnisht.replace(/ΘΕΣ/g, "ΠΕ");
    /* πῖ
     * 5. in aeolic and doric, π for τ, πέτορες for τέσσαρες, πέμπε for πέντε. */

    /* $gegnisht = $gegnisht.replace(/Θ/g, "Τ"); */

    /* GREEK START MODIFICATION */

    if($gegnisht.slice(0, 2) === "ΜΜ") {
        $gegnisht = $gegnisht.slice(0, 1) + $gegnisht.slice(2);
    }

    /* GREEK SUFFIX MODIFICATION */
    if($gegnisht.endsWith("ΟΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΟΣ";
    }
    if($gegnisht.endsWith("ΥΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ΥΣ";
    }
    if($gegnisht.endsWith("ϒΔ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }

    if($gegnisht.endsWith("ϒΤ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ϒΣ";
    }

    if($gegnisht.endsWith("ΟΤ")) {
        if($gegnisht.endsWith("Τ")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Ρ";
        }
    }
    /* ῥῶ
     * 1.aeolic, at the end of words ς passed into ρ, as οὗτορ, ἵππορ for οὗτος, ἵππος; cf. Lat. arbor arbos, honor honos. */

    /* TERM MUTATION */
    if($gegnisht.length < 9) {
        $gegnisht = $gegnisht.replace(/ΠΕΤΟ/g, "ΠΕΔΑ");
        /* ΜΕΤΑ -> ΠΕΔΑ */
    }

    /* GREEK SUFFIX MODIFICATION */

    if($gegnisht.endsWith("ΕΤ")) {
        if($gegnisht.endsWith("Τ")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Σ";
        }
    }

    if($gegnisht.endsWith("ΟΣ")) {
        if($gegnisht.endsWith("Σ")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Ρ";
        }
    }

    if($gegnisht.endsWith("Ο")) {
        if($gegnisht.endsWith("Ο")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Α";
        }
    }

    /* GREEK SUFFIX MODIFICATION */
    if($gegnisht.endsWith("Ε")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "Α";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekLaconicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */

    $gegnisht = $gegnisht.replace(/ΘΕ/g, "ΣΙ"); /* θεός -> σιός */
    /* 2. Boeot. and Lacon. as σιός, σεῖος, for θεός, θεῖος. */

    $gegnisht = $gegnisht.replace(/Θ/g, "Σ");
    /* 1.Lacon., into ς, as σάλασσα σεῖος σιός Ἀσάνα παρσένος for θάλασσα θεῖος θεός Ἀθάνα παρθένος. */

    $gegnisht = $gegnisht.replace(/Μ/g, "Π");
    $gegnisht = $gegnisht.replace(/ϝ/g, "Β");
    /* εἴκοσι -> ϝίκᾰτῐ (D.)-> βείκᾰτῐ (L.) */
    /* β , βῆτα
     * II. to represent ϝ, freq. in Hsch., esp. in Lacon. words, cf. βείκατι, etc. */


    $gegnisht = $gegnisht.replace(/Δ/g, "111");
    $gegnisht = $gegnisht.replace(/Ζ/g, "Δ");
    $gegnisht = $gegnisht.replace(/111/g, "Ζ");

    /* GREEK SUFFIX MODIFICATION */

    if($gegnisht.endsWith("ΟΣ")) {
        if($gegnisht.endsWith("ΟΣ")) {
            $gegnisht = $gegnisht.slice(-0, -2) + "ϒΡ";
        }
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekDelphicTransCodation($gegnisht) {

    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekEndToUsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */
    $gegnisht = $gegnisht.replace(/Β/g, "Δ"); /* βούλομαι -> δείλομαι */
    $gegnisht = $gegnisht.replace(/Π/g, "Β"); /* πατέω -> βᾰτέω */


    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekBoeoticTransCodation($gegnisht) {

    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekInverseTauThetaTransCodation($gegnisht); /* TEST */

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */
    $gegnisht = $gegnisht.replace(/Ω/g, "Υ"); /* βούλομαι -> δείλομαι */
    /* 4.Boeot. υ_ for ω, as χελύνη for χελώνη. */

    $gegnisht = $gegnisht.replace(/ΘΕ/g, "ΘΙ"); /* θεός -> θιός */
    /* 2. Boeot. and Lacon. as σιός, σεῖος, for θεός, θεῖος. */

    $gegnisht = $gegnisht.replace(/Σ/g, "Τ"); /* σῦκον -> τῦκον (tûkon) – Boeotian */

    /* SUFFIX MUTATION */
    if($gegnisht.endsWith("Υ")) {
        if($gegnisht.endsWith("Υ")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Ω";
        }
    }

    /* SUFFIX MUTATION */
    if($gegnisht.length > 7) {
        if ($gegnisht.endsWith("ΟΤ")) {
            $gegnisht = $gegnisht.slice(-0, -1) + "Σ";
        }
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function greekMacedonicTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekEndToUsTranscodation($gegnisht);
    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    $gegnisht = $gegnisht.replace(/Θ/g, "Δ");
    /* ἀδραία , Maced. for αἰθρία
     * δάνος (B), [α^], ὁ, Maced. for θάνατος
     * δαλάγχαν: θάλασσαν (Maced.) */

    $gegnisht = $gegnisht.replace(/Φ/g, "Β");
    /* βαλακρός , Maced. A.= φαλ-, Plu.2.292e.
     * Βερενίκη is Maced. for Φερενίκη.）*/


    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function greekPoeticTransCodation($gegnisht) {
    $gegnisht = greekTransCodation($gegnisht);

    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);
    /*
    $gegnisht = greekInversePiPhiTransCodation($gegnisht);
    */

    $gegnisht = greekEndToUsTranscodation($gegnisht);
    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    /* DIALECTAL MUTATION */
    /*
     * $gegnisht = $gegnisht.replace(/Α/g, "Η");
     * $gegnisht = $gegnisht.replace(/Δ/g, "123");
     * $gegnisht = $gegnisht.replace(/Ζ/g, "Δ");
     * $gegnisht = $gegnisht.replace(/123/g, "Ζ");
     */

    $gegnisht = $gegnisht.replace(/Μ/g, "ΜΜ");
    /* 3. μ is doubled, a.poet. in compds., as ἄμμορος, φιλομμειδής; and after the augm., as ἔλλαβον. */

    $gegnisht = $gegnisht.replace(/Σ/g, "ΣΣ");
    /* 3. in aeolic and doric, and in Poets, ς was often doubled, as ὅσσος μέσσος ὀπίσσω for ὅσος μέσος ὀπίσω, and in fut. and aor. 1 forms, as δαμάσσω ὀλέσσω, etc. for δαμάσω ὀλέσω, etc. */

    $gegnisht = $gegnisht.replace(/Π/g, "ΠΤ");
    /* πῖ
     * 8. in Poets, τ is inserted after π, as in πτόλις, πτόλεμος for πόλις, πόλεμος. */

    $gegnisht = $gegnisht.replace(/ΑΡ/g, "ΡΑ");
    /* ῥῶ
     * 3.in some words ρ is transposed, as κάρτος epic for κράτος, ἀταρπός for ἀτραπός, κραδίη for καρδία:—mostly in Poets. */

    $gegnisht = greekDuploRemove ($gegnisht);

    if($gegnisht.endsWith("ΣΣ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "Σ";
    }

    /* GREEK START MODIFICATION */
    if($gegnisht.slice(0, 2) === "ΜΜ") {
        $gegnisht = $gegnisht.slice(0, 1) + $gegnisht.slice(2);
    }

    /* GREEK START MODIFICATION */
    if($gegnisht.slice(0, 2) === "ΣΣ") {
        $gegnisht = $gegnisht.slice(0, 1) + $gegnisht.slice(2);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function greekEpicTransCodation($gegnisht)
{
    $gegnisht = greekTransCodation($gegnisht);

    /*
    $gegnisht = greekInverseTauThetaTransCodation($gegnisht);
    */

    $gegnisht = greekEndToOsTranscodation($gegnisht);

    $gegnisht = greekEndSuffixModificationTranscodation($gegnisht);

    $gegnisht = $gegnisht.replace(/Θ/g, "Σ");
    /* εἴκοσι -> ϝίκᾰτῐ (D.) -> βείκᾰτῐ (L.) -> ἐείκοσῐ (E.) */

    /* DUPLO */
    $gegnisht = $gegnisht.replace(/Π/g, "ΠΠ");
    /* 7.in aeolic and epic Poetry, π is often doubled in relatives, as ὅππη ὅππως ὁπποῖος for ὅπη, etc. */

    $gegnisht = $gegnisht.replace(/Λ/g, "ΛΛ");
    /*  λάμβδα
     * 4. epic Poets double λ, metri grat., esp. after the augment, as, ἔλλαβε ἐλλιτάνευε; and in compds., as in τρίλλιστος:—and Homer omits λ, where two come together, metri grat., as Ἀχιλεύς. */

    $gegnisht = $gegnisht.replace(/ΡΑ/g, "ΑΡ");
    /* ῥῶ
     * 3.in some words ρ is transposed, as κάρτος epic for κράτος, ἀταρπός for ἀτραπός, κραδίη for καρδία:—mostly in Poets. */

    /* GREEK START MODIFICATION */

    if($gegnisht.slice(0, 2) === "ΛΛ") {
        $gegnisht = $gegnisht.slice(0, 1) + $gegnisht.slice(2);
    }

    if($gegnisht.slice(0, 2) === "ΠΠ") {
        $gegnisht = $gegnisht.slice(0, 1) + $gegnisht.slice(2);
    }

    /* GREEK DUPLO REMOVE */

    $gegnisht = greekDuploRemove($gegnisht);

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function copticTransCodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/DƷ/g, "Ϫ");
    $gegnisht = $gegnisht.replace(/A/g, "Ⲁ");
    $gegnisht = $gegnisht.replace(/B/g, "Ⲃ");
    $gegnisht = $gegnisht.replace(/G/g, "Ⲅ");
    $gegnisht = $gegnisht.replace(/D/g, "Ⲇ");
    $gegnisht = $gegnisht.replace(/E/g, "Ⲉ");
    $gegnisht = $gegnisht.replace(/V/g, "ϝ");
    $gegnisht = $gegnisht.replace(/Z/g, "Ⲍ");
    $gegnisht = $gegnisht.replace(/Ê/g, "Ⲏ");
    $gegnisht = $gegnisht.replace(/Þ/g, "Ⲑ");
    $gegnisht = $gegnisht.replace(/I/g, "Ⲓ");
    $gegnisht = $gegnisht.replace(/J/g, "ϳ");
    $gegnisht = $gegnisht.replace(/Kʰ/g, "Ⲭ");
    $gegnisht = $gegnisht.replace(/K/g, "Ⲕ");
    $gegnisht = $gegnisht.replace(/L/g, "Ⲗ");
    $gegnisht = $gegnisht.replace(/M/g, "Ⲙ");
    $gegnisht = $gegnisht.replace(/N/g, "Ⲛ");
    $gegnisht = $gegnisht.replace(/S/g, "Ⲥ");
    $gegnisht = $gegnisht.replace(/O/g, "Ⲟ");
    $gegnisht = $gegnisht.replace(/P/g, "Ⲡ");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "ϻ");
    $gegnisht = $gegnisht.replace(/Q/g, "Ϙ");
    $gegnisht = $gegnisht.replace(/R/g, "Ⲣ");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "Ϣ");
    $gegnisht = $gegnisht.replace(/T/g, "Ⲧ");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "Ϯ");
    $gegnisht = $gegnisht.replace(/Θ/g, "Ⲑ");
    $gegnisht = $gegnisht.replace(/Y/g, "Ⲩ");
    $gegnisht = $gegnisht.replace(/U/g, "ⲞⲨ");
    $gegnisht = $gegnisht.replace(/W/g, "ͷ");
    $gegnisht = $gegnisht.replace(/ɸ/g, "Ⲫ");
    $gegnisht = $gegnisht.replace(/F/g, "Ϥ");
    $gegnisht = $gegnisht.replace(/X/g, "Ϧ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "Ⳁ");
    $gegnisht = $gegnisht.replace(/Ô/g, "Ⲱ");
    $gegnisht = $gegnisht.replace(/H/g, "Ϩ");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ͱ");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "Ⲅ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "Ⲍ");
    $gegnisht = $gegnisht.replace(/Ð/g, "Ⲇ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "Ϙ");
    $gegnisht = $gegnisht.replace(/Â/g, "Ⲁ");
    $gegnisht = $gegnisht.replace(/Ä/g, "Ⲁ");
    $gegnisht = $gegnisht.replace(/Ö/g, "Ⲟ");
    $gegnisht = $gegnisht.replace(/Œ/g, "ⲞⲈ");
    $gegnisht = $gegnisht.replace(/Ã/g, "Ⲁ");
    $gegnisht = $gegnisht.replace(/Ë/g, "Ə");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "Ⲏ");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "Ⲓ");
    $gegnisht = $gegnisht.replace(/Õ/g, "Ⲱ");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ⲞⲨ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Ⲩ");
    $gegnisht = $gegnisht.replace(/C/g, "Ⲥ");

    $gegnisht = $gegnisht.replace(/ⲤⲦ/g, "Ⲋ");
    $gegnisht = $gegnisht.replace(/ⲔⲤ/g, "Ⲝ");
    $gegnisht = $gegnisht.replace(/ⲠⲤ/g, "Ⲯ");
    $gegnisht = $gegnisht.replace(/ⲦϢ/g, "Ϭ");


    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }

    return '';
}



function cyrillicTransCodation($gegnisht)
{
    $gegnisht = $gegnisht.replace(/A/g, "а");
    $gegnisht = $gegnisht.replace(/B/g, "б");
    $gegnisht = $gegnisht.replace(/G/g, "г");
    $gegnisht = $gegnisht.replace(/D/g, "д");
    $gegnisht = $gegnisht.replace(/E/g, "е");
    $gegnisht = $gegnisht.replace(/V/g, "в");
    $gegnisht = $gegnisht.replace(/Z/g, "з");
    $gegnisht = $gegnisht.replace(/Ê/g, "и");
    $gegnisht = $gegnisht.replace(/Þ/g, "ѳ");
    $gegnisht = $gegnisht.replace(/Θ/g, "ѳ");
    $gegnisht = $gegnisht.replace(/I/g, "і");
    $gegnisht = $gegnisht.replace(/J/g, "ј");
    $gegnisht = $gegnisht.replace(/K/g, "к");
    $gegnisht = $gegnisht.replace(/L/g, "л");
    $gegnisht = $gegnisht.replace(/M/g, "м");
    $gegnisht = $gegnisht.replace(/N/g, "н");
    $gegnisht = $gegnisht.replace(/S/g, "с");
    $gegnisht = $gegnisht.replace(/O/g, "о");
    $gegnisht = $gegnisht.replace(/P/g, "п");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "ԇ");
    $gegnisht = $gegnisht.replace(/Q/g, "ҁ");
    $gegnisht = $gegnisht.replace(/R/g, "р");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ш");
    $gegnisht = $gegnisht.replace(/T/g, "т");
    $gegnisht = $gegnisht.replace(/Y/g, "ү");
    $gegnisht = $gegnisht.replace(/U/g, "у");
    $gegnisht = $gegnisht.replace(/W/g, "ԝ");
    $gegnisht = $gegnisht.replace(/ɸ/g, "ф");
    $gegnisht = $gegnisht.replace(/F/g, "ф");
    $gegnisht = $gegnisht.replace(/X/g, "х");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "Ӡ");
    $gegnisht = $gegnisht.replace(/Ô/g, "ѻ");
    $gegnisht = $gegnisht.replace(/H/g, "һ");
    $gegnisht = $gegnisht.replace(/Ħ/g, "Ꚕ");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "Ҕ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ж");
    $gegnisht = $gegnisht.replace(/Ð/g, "Ҙ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "Ҫ");
    $gegnisht = $gegnisht.replace(/Â/g, "а");
    $gegnisht = $gegnisht.replace(/Ä/g, "а");
    $gegnisht = $gegnisht.replace(/Ö/g, "Ө");
    $gegnisht = $gegnisht.replace(/Œ/g, "ое");
    $gegnisht = $gegnisht.replace(/Ã/g, "а");
    $gegnisht = $gegnisht.replace(/Ë/g, "ъ");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ѧ");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "і");
    $gegnisht = $gegnisht.replace(/Õ/g, "ѫ");
    $gegnisht = $gegnisht.replace(/Ũ/g, "у");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "ү");
    $gegnisht = $gegnisht.replace(/C/g, "ћ");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function ShalvunicEndSuffixModificationTranscodation($gegnisht)
{
    if (($gegnisht.length) > 10) {
        if ($gegnisht.slice(-3).toUpperCase() === "ѺЈЪ") {
            $gegnisht = $gegnisht.slice(-0, 2) + "";
        }
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function shalvunicTransCodation($gegnisht)
{
    $gegnisht = cyrillicTransCodation($gegnisht);

    $gegnisht = ShalvunicEndSuffixModificationTranscodation($gegnisht);

    if ($gegnisht.slice(-1).toUpperCase() === "Ѻ") {
        $gegnisht = $gegnisht.slice(-0, 1) + "ИѲЪ";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}


function slavonicTransCodation($gegnisht)
{

    $gegnisht = cyrillicTransCodation($gegnisht);

    $gegnisht =  ShalvunicEndSuffixModificationTranscodation($gegnisht).toLowerCase();

    /* CRASE */
    $gegnisht = $gegnisht.replace(/тш/g, "Ч");
    $gegnisht = $gegnisht.replace(/тс/g, "Ц");
    $gegnisht = $gegnisht.replace(/дж/g, "Џ");
    $gegnisht = $gegnisht.replace(/пс/g, "Ѱ");
    $gegnisht = $gegnisht.replace(/кс/g, "Ѯ");
    $gegnisht = $gegnisht.replace(/лј/g, "Љ");
    $gegnisht = $gegnisht.replace(/нј/g, "Њ");
    $gegnisht = $gegnisht.replace(/шт/g, "Щ");
    $gegnisht = $gegnisht.replace(/ја/g, "Я");

    if($gegnisht.endsWith("ъъ")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }
/*
    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

// SEMANTIC ENDWITH SUPPRESSION

function endWithSuppression($gegnisht) {

    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    if($gegnisht.endsWith("ÔJ")) {
        $gegnisht = $gegnisht.slice(-0, -2);
    }

    if($gegnisht.endsWith("ÔJË")) {
        $gegnisht = $gegnisht.slice(-0, -3);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}

// ARABIC TRANSCODATION
function arabicTransCodation($gegnisht) {

    $gegnisht = endWithSuppression($gegnisht);

    $gegnisht = $gegnisht.replace(/A/g, "ا");
    $gegnisht = $gegnisht.replace(/B/g, "ب");
    $gegnisht = $gegnisht.replace(/G/g, "ج");
    $gegnisht = $gegnisht.replace(/D/g, "د");
    $gegnisht = $gegnisht.replace(/E/g, "ه");
    $gegnisht = $gegnisht.replace(/V/g, "ۋ");
    $gegnisht = $gegnisht.replace(/Z/g, "ز");
    $gegnisht = $gegnisht.replace(/Ê/g, "ح");
    $gegnisht = $gegnisht.replace(/Þ/g, "ث");
    $gegnisht = $gegnisht.replace(/I/g, "اِ");
    $gegnisht = $gegnisht.replace(/J/g, "ي");
    $gegnisht = $gegnisht.replace(/K/g, "ك");
    $gegnisht = $gegnisht.replace(/L/g, "ل");
    $gegnisht = $gegnisht.replace(/M/g, "م");
    $gegnisht = $gegnisht.replace(/N/g, "ن");
    $gegnisht = $gegnisht.replace(/S/g, "س");
    $gegnisht = $gegnisht.replace(/O/g, "ع");
    $gegnisht = $gegnisht.replace(/P/g, "ڡ");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "ص");
    $gegnisht = $gegnisht.replace(/Q/g, "ق");
    $gegnisht = $gegnisht.replace(/R/g, "ر");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ش");
    $gegnisht = $gegnisht.replace(/T/g, "ت");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "ط");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "ط");
    $gegnisht = $gegnisht.replace(/Θ/g, "ث");
    $gegnisht = $gegnisht.replace(/Y/g, "ۈ");
    $gegnisht = $gegnisht.replace(/U/g, "و");
    $gegnisht = $gegnisht.replace(/W/g, "و");
    $gegnisht = $gegnisht.replace(/ɸ/g, "ف");
    $gegnisht = $gegnisht.replace(/F/g, "ف");
    $gegnisht = $gegnisht.replace(/X/g, "خ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "ظ");
    $gegnisht = $gegnisht.replace(/Ô/g, "غ");
    $gegnisht = $gegnisht.replace(/H/g, "ه");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ح");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "غ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ج");
    $gegnisht = $gegnisht.replace(/Ð/g, "ذ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ݭ");
    $gegnisht = $gegnisht.replace(/Â/g, "اَ");
    $gegnisht = $gegnisht.replace(/Ä/g, "ع");
    $gegnisht = $gegnisht.replace(/Ö/g, "ع");
    $gegnisht = $gegnisht.replace(/Œ/g, "عه");
    $gegnisht = $gegnisht.replace(/Ã/g, "أ");
    $gegnisht = $gegnisht.replace(/Ë/g, "اْ");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ځ");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "إ");
    $gegnisht = $gegnisht.replace(/Õ/g, "غٴ");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ؤ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "ۈٴ");
    $gegnisht = $gegnisht.replace(/C/g, "ݭ");

    if($gegnisht.endsWith("اْاْ")) {
        $gegnisht = $gegnisht.slice(-0, -4);
    }

    if($gegnisht.endsWith("اْ")) {
        $gegnisht = $gegnisht.slice(-0, -2);
    }

    console.log($gegnisht);

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}


function persianTransCodation($gegnisht)
{

    $gegnisht = endWithSuppression($gegnisht);

    $gegnisht = $gegnisht.replace(/A/g, "ا");
    $gegnisht = $gegnisht.replace(/B/g, "ب");
    $gegnisht = $gegnisht.replace(/G/g, "گ");
    $gegnisht = $gegnisht.replace(/D/g, "د");
    $gegnisht = $gegnisht.replace(/E/g, "ه");
    $gegnisht = $gegnisht.replace(/V/g, "ڤ");
    $gegnisht = $gegnisht.replace(/Z/g, "ز");
    $gegnisht = $gegnisht.replace(/Ê/g, "ح");
    $gegnisht = $gegnisht.replace(/Þ/g, "ث");
    $gegnisht = $gegnisht.replace(/I/g, "اِ");
    $gegnisht = $gegnisht.replace(/J/g, "ي");
    $gegnisht = $gegnisht.replace(/K/g, "ك");
    $gegnisht = $gegnisht.replace(/L/g, "ل");
    $gegnisht = $gegnisht.replace(/M/g, "م");
    $gegnisht = $gegnisht.replace(/N/g, "ن");
    $gegnisht = $gegnisht.replace(/S/g, "س");
    $gegnisht = $gegnisht.replace(/O/g, "ع");
    $gegnisht = $gegnisht.replace(/P/g, "پ");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "ص");
    $gegnisht = $gegnisht.replace(/Q/g, "ق");
    $gegnisht = $gegnisht.replace(/R/g, "ر");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ش");
    $gegnisht = $gegnisht.replace(/T/g, "ت");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "ط");
    $gegnisht = $gegnisht.replace(/Θ/g, "ث");
    $gegnisht = $gegnisht.replace(/Y/g, "ۈ");
    $gegnisht = $gegnisht.replace(/U/g, "و");
    $gegnisht = $gegnisht.replace(/W/g, "و");
    $gegnisht = $gegnisht.replace(/ɸ/g, "ف");
    $gegnisht = $gegnisht.replace(/F/g, "ف");
    $gegnisht = $gegnisht.replace(/X/g, "خ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "ظ");
    $gegnisht = $gegnisht.replace(/Ô/g, "غ");
    $gegnisht = $gegnisht.replace(/H/g, "ه");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ح");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "غ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ژ");
    $gegnisht = $gegnisht.replace(/Ð/g, "ذ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ݭ");
    $gegnisht = $gegnisht.replace(/Â/g, "اَ");
    $gegnisht = $gegnisht.replace(/Ä/g, "ع");
    $gegnisht = $gegnisht.replace(/Ã/g, "أ");
    $gegnisht = $gegnisht.replace(/Ö/g, "ع");
    $gegnisht = $gegnisht.replace(/Œ/g, "عه");
    $gegnisht = $gegnisht.replace(/Ë/g, "اْ");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ځ");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "إ");
    $gegnisht = $gegnisht.replace(/Õ/g, "غٴ");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ؤ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "ۈٴ");
    $gegnisht = $gegnisht.replace(/C/g, "ݭ");

    if($gegnisht.endsWith("اْاْ")) {
        $gegnisht = $gegnisht.slice(-0, -4);
    }
    if($gegnisht.endsWith("اْ")) {
        $gegnisht = $gegnisht.slice(-0, -2);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}


function syriacTransCodation($gegnisht)
{
    $gegnisht = $gegnisht.replace(/A/g, "ܐ");
    $gegnisht = $gegnisht.replace(/B/g, "ܒ");
    $gegnisht = $gegnisht.replace(/G/g, "ܓ");
    $gegnisht = $gegnisht.replace(/D/g, "ܕ");
    $gegnisht = $gegnisht.replace(/E/g, "ܗ");
    $gegnisht = $gegnisht.replace(/V/g, "ܘ");
    $gegnisht = $gegnisht.replace(/Z/g, "ܙ");
    $gegnisht = $gegnisht.replace(/Ê/g, "ܚ");
    $gegnisht = $gegnisht.replace(/Þ/g, "ܬ");
    $gegnisht = $gegnisht.replace(/I/g, "ܝ");
    $gegnisht = $gegnisht.replace(/J/g, "ܝ");
    $gegnisht = $gegnisht.replace(/K/g, "ܟ");
    $gegnisht = $gegnisht.replace(/L/g, "ܠ");
    $gegnisht = $gegnisht.replace(/M/g, "ܡ");
    $gegnisht = $gegnisht.replace(/N/g, "ܢ");
    $gegnisht = $gegnisht.replace(/S/g, "ܣ");
    $gegnisht = $gegnisht.replace(/O/g, "ܥ");
    $gegnisht = $gegnisht.replace(/P/g, "ܦ");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "ܨ");
    $gegnisht = $gegnisht.replace(/Q/g, "ܩ");
    $gegnisht = $gegnisht.replace(/R/g, "ܪ");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ܫ");
    $gegnisht = $gegnisht.replace(/T/g, "ܛ");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "ܛ");
    $gegnisht = $gegnisht.replace(/Θ/g, "ܬ");
    $gegnisht = $gegnisht.replace(/Y/g, "ܘ");
    $gegnisht = $gegnisht.replace(/U/g, "ܘ");
    $gegnisht = $gegnisht.replace(/W/g, "ܘ");
    $gegnisht = $gegnisht.replace(/Ð/g, "ܕ");
    $gegnisht = $gegnisht.replace(/Ð/g, "ܕ");
    $gegnisht = $gegnisht.replace(/ɸ/g, "ܦ");
    $gegnisht = $gegnisht.replace(/F/g, "ܦ");
    $gegnisht = $gegnisht.replace(/X/g, "ܟ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "ܛ");
    $gegnisht = $gegnisht.replace(/Ô/g, "ܥ");
    $gegnisht = $gegnisht.replace(/H/g, "ܗ");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ܚ");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "ܓ");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ܙ");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ܩ");
    $gegnisht = $gegnisht.replace(/Â/g, "ܐ");
    $gegnisht = $gegnisht.replace(/Ä/g, "ܥ");
    $gegnisht = $gegnisht.replace(/Ö/g, "ܥ");
    $gegnisht = $gegnisht.replace(/Œ/g, "ܥܗ");
    $gegnisht = $gegnisht.replace(/Ë/g, "ܐ");
    $gegnisht = $gegnisht.replace(/Ã/g, "ܐ");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ܚ");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "ܝ");
    $gegnisht = $gegnisht.replace(/Õ/g, "ܥ");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ܘ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "ܘ");
    $gegnisht = $gegnisht.replace(/C/g, "ܫ");

    if($gegnisht.endsWith("ܐܐ")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}

function endWithHebrewSuppression($gegnisht) {

    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ה";
    }

    if($gegnisht.endsWith("ÔJ")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "ה";
    }

    if($gegnisht.endsWith("ÔJË")) {
        $gegnisht = $gegnisht.slice(-0, -3) + "ה";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}

function hebrewTransCodation($gegnisht)
{

    $gegnisht = endWithHebrewSuppression($gegnisht);

    $gegnisht = $gegnisht.replace(/A/g, "א");
    $gegnisht = $gegnisht.replace(/B/g, "ב");
    $gegnisht = $gegnisht.replace(/G/g, "ג");
    $gegnisht = $gegnisht.replace(/D/g, "ד");
    $gegnisht = $gegnisht.replace(/E/g, "ה");
    $gegnisht = $gegnisht.replace(/V/g, "ו");
    $gegnisht = $gegnisht.replace(/Z/g, "ז");
    $gegnisht = $gegnisht.replace(/Ê/g, "ח");
    $gegnisht = $gegnisht.replace(/Þ/g, "ת");
    $gegnisht = $gegnisht.replace(/I/g, "י");
    $gegnisht = $gegnisht.replace(/J/g, "י");
    $gegnisht = $gegnisht.replace(/K/g, "כ");
    $gegnisht = $gegnisht.replace(/L/g, "ל");
    $gegnisht = $gegnisht.replace(/M/g, "מ");
    $gegnisht = $gegnisht.replace(/N/g, "נ");
    $gegnisht = $gegnisht.replace(/S/g, "ס");
    $gegnisht = $gegnisht.replace(/O/g, "ע");
    $gegnisht = $gegnisht.replace(/P/g, "פ");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "צ");
    $gegnisht = $gegnisht.replace(/Q/g, "ק");
    $gegnisht = $gegnisht.replace(/R/g, "ר");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ש");
    $gegnisht = $gegnisht.replace(/T/g, "ט");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "ט");
    $gegnisht = $gegnisht.replace(/Θ/g, "ת");
    $gegnisht = $gegnisht.replace(/Y/g, "י׳");
    $gegnisht = $gegnisht.replace(/U/g, "ו");
    $gegnisht = $gegnisht.replace(/W/g, "ו");
    $gegnisht = $gegnisht.replace(/ɸ/g, "פ׳");
    $gegnisht = $gegnisht.replace(/F/g, "פ׳");
    $gegnisht = $gegnisht.replace(/X/g, "כ׳");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "ט׳");
    $gegnisht = $gegnisht.replace(/Ô/g, "ע");
    $gegnisht = $gegnisht.replace(/H/g, "ה");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ח");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "ג׳");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ז׳");
    $gegnisht = $gegnisht.replace(/Ð/g, "ד׳");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ק׳");
    $gegnisht = $gegnisht.replace(/Â/g, "א");
    $gegnisht = $gegnisht.replace(/Ä/g, "ע");
    $gegnisht = $gegnisht.replace(/Ö/g, "ע");
    $gegnisht = $gegnisht.replace(/Œ/g, "עה");
    $gegnisht = $gegnisht.replace(/Ã/g, "א");
    $gegnisht = $gegnisht.replace(/Ë/g, "א");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ח");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "י");
    $gegnisht = $gegnisht.replace(/Õ/g, "ע");
    $gegnisht = $gegnisht.replace(/Ũ/g, "ו");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "י׳");
    $gegnisht = $gegnisht.replace(/C/g, "ש");

    if($gegnisht.endsWith("אא")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    if($gegnisht.endsWith("כ")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ך";
    }

    if($gegnisht.endsWith("מ")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ם";
    }

    if($gegnisht.endsWith("נ")) {
      $gegnisht = $gegnisht.slice(-0, -1) + "ן";
    }

    if($gegnisht.endsWith("פ")) {
      $gegnisht = $gegnisht.slice(-0, -1) + "ף";
    }

    if($gegnisht.endsWith("צ")) {
      $gegnisht = $gegnisht.slice(-0, -1) + "ץ";
    }

    if($gegnisht.endsWith("כ׳")) {
      $gegnisht = $gegnisht.slice(-0, -2) + "ך׳";
    }

    if($gegnisht.endsWith("פ׳")) {
          $gegnisht = $gegnisht.slice(-0, -2) + "ף׳";
          }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}


function hindiTransCodation($gegnisht)
{

    if($gegnisht.startsWith("AU")) {
        $gegnisht = "औ" + $gegnisht.slice(2);
    }

    $gegnisht = $gegnisht.replace(/AU/g, "ौ");

    if($gegnisht.startsWith("AI")) {
        $gegnisht = "ऐ" + $gegnisht.slice(2);
    }

    $gegnisht = $gegnisht.replace(/AI/g, "ै");

    if($gegnisht.startsWith("A")) {
        $gegnisht = "आ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/A/g, "ा");

    if($gegnisht.startsWith("Â")) {
        $gegnisht = "आ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Â/g, "ा");

    $gegnisht = $gegnisht.replace(/E/g, "हे");

    $gegnisht = $gegnisht.replace(/Ê/g, "ह़ॅ");

    $gegnisht = $gegnisht.replace(/Ẽ/g, "ह़ॅँ");

    if($gegnisht.startsWith("I")) {
        $gegnisht = "ई" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/I/g, "ी");

    if($gegnisht.startsWith("O")) {
        $gegnisht = "ओ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/O/g, "ो");

    if($gegnisht.startsWith("U")) {
        $gegnisht = "ऊ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/U/g, "ू");

    if($gegnisht.startsWith("Y")) {
        $gegnisht = "ई़" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Y/g, "ी़");

    if($gegnisht.startsWith("Ä")) {
        $gegnisht = "ओ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ä/g, "ो");

    if($gegnisht.startsWith("Ö")) {
        $gegnisht = "ओ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ö/g, "ो");

    if($gegnisht.startsWith("Œ")) {
        $gegnisht = "ओहे" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Œ/g, "ोहे");

    if($gegnisht.startsWith("Ô")) {
        $gegnisht = "ऑ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ô/g, "ॉ");

    if($gegnisht.startsWith("Ã")) {
        $gegnisht = "आँ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ã/g, "ाँ");

    if($gegnisht.startsWith("Ĩ")) {
        $gegnisht = "ईँ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ĩ/g, "ीँ");

    if($gegnisht.startsWith("Õ")) {
        $gegnisht = "ऑँ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Õ/g, "ॉँ");

    if($gegnisht.startsWith("Ũ")) {
        $gegnisht = "ऊँ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ũ/g, "ूँ");

    if($gegnisht.startsWith("Ỹ")) {
        $gegnisht = "ई़ँ" + $gegnisht.slice(1);
    }

    $gegnisht = $gegnisht.replace(/Ỹ/g, "ी़ँ");
    $gegnisht = $gegnisht.replace(/B/g, "ब्");
    $gegnisht = $gegnisht.replace(/G/g, "ग्");
    $gegnisht = $gegnisht.replace(/D/g, "द्");
    $gegnisht = $gegnisht.replace(/V/g, "व्");
    $gegnisht = $gegnisht.replace(/Z/g, "ज़्");
    $gegnisht = $gegnisht.replace(/Þ/g, "थ़्");
    $gegnisht = $gegnisht.replace(/J/g, "य्");
    $gegnisht = $gegnisht.replace(/K/g, "क्");
    $gegnisht = $gegnisht.replace(/L/g, "ल्");
    $gegnisht = $gegnisht.replace(/M/g, "म्");
    $gegnisht = $gegnisht.replace(/N/g, "न्");
    $gegnisht = $gegnisht.replace(/S/g, "स्");
    $gegnisht = $gegnisht.replace(/P/g, "प्");
    $gegnisht = $gegnisht.replace(/Ṣ/g, "स़्");
    $gegnisht = $gegnisht.replace(/Q/g, "क़्");
    $gegnisht = $gegnisht.replace(/R/g, "र्");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "श्");
    $gegnisht = $gegnisht.replace(/T/g, "त्");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "त़्");
    $gegnisht = $gegnisht.replace(/Θ/g, "थ़्");
    $gegnisht = $gegnisht.replace(/W/g, "व़्");
    $gegnisht = $gegnisht.replace(/ɸ/g, "फ़्");
    $gegnisht = $gegnisht.replace(/F/g, "फ़्");
    $gegnisht = $gegnisht.replace(/X/g, "ख़्");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "ज़्");
    $gegnisht = $gegnisht.replace(/H/g, "ह्");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ह़्");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "ग़्");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "झ़्");
    $gegnisht = $gegnisht.replace(/Ð/g, "ध़");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ष्");
    $gegnisht = $gegnisht.replace(/C/g, "श्");
    $gegnisht = $gegnisht.replace(/्ा/g, "ा");
    $gegnisht = $gegnisht.replace(/्ी/g, "ी");
    $gegnisht = $gegnisht.replace(/्ू/g, "ू");
    $gegnisht = $gegnisht.replace(/्ॅ/g, "ॅ");
    $gegnisht = $gegnisht.replace(/्े/g, "े");
    $gegnisht = $gegnisht.replace(/्ॉ/g, "ॉ");
    $gegnisht = $gegnisht.replace(/्ो/g, "ो");
    $gegnisht = $gegnisht.replace(/्ौ/g, "ौ");
    $gegnisht = $gegnisht.replace(/्ै/g, "ै");
    $gegnisht = $gegnisht.replace(/ह़्ह़/g, "ह़");
    $gegnisht = $gegnisht.replace(/ह्ह/g, "ह");
    $gegnisht = $gegnisht.replace(/्Ë/g, "");

    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht;
    }
    else
    {
        return '';
    }
}

function endWithEnglishSuppresion($gegnisht) {
    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ING";
    }
    if($gegnisht.endsWith("QWË")) {
        $gegnisht = $gegnisht.slice(-0, -3) + "C";
    }
    if($gegnisht.endsWith("IË")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "Y";
    }
    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }
    if($gegnisht.endsWith("Ə")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toUpperCase();
    }
    else
    {
        return '';
    }
}

function englishUKTransCodation($gegnisht)
{

    $gegnisht = endWithEnglishSuppresion($gegnisht);

    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/Ë‑/g, "‑");
    $gegnisht = $gegnisht.replace(/É/g, "E");
    $gegnisht = $gegnisht.replace(/Ê/g, "E");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/J/g, "Y");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "SH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/X/g, "KH");
    $gegnisht = $gegnisht.replace(/Ô/g, "O");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "J");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");
    $gegnisht = $gegnisht.replace(/Â/g, "A");
    $gegnisht = $gegnisht.replace(/Ä/g, "A");
    $gegnisht = $gegnisht.replace(/Ö/g, "O");
    $gegnisht = $gegnisht.replace(/Œ/g, "OE");
    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ë/g, "E");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");
    $gegnisht = $gegnisht.replace(/TSH/g, "CH");

    $gegnisht = $gegnisht.replace(/Ə/g, "E");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}


function englishUSTransCodation($gegnisht) {

    $gegnisht = endWithEnglishSuppresion($gegnisht);

    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/Ë‑/g, "‑");
    $gegnisht = $gegnisht.replace(/É/g, "E");
    $gegnisht = $gegnisht.replace(/Ê/g, "E");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/J/g, "Y");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "SH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/X/g, "KH");
    $gegnisht = $gegnisht.replace(/Ô/g, "O");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "J");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");
    $gegnisht = $gegnisht.replace(/Â/g, "A");
    $gegnisht = $gegnisht.replace(/Ä/g, "A");
    $gegnisht = $gegnisht.replace(/Ö/g, "O");
    $gegnisht = $gegnisht.replace(/Œ/g, "OE");
    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ë/g, "E");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");
    $gegnisht = $gegnisht.replace(/TSH/g, "CH");

    if($gegnisht.endsWith("Ə")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    $gegnisht = $gegnisht.replace(/Ə/g, "E");
    $gegnisht = $gegnisht.replace(/‑/g, "");
    $gegnisht = $gegnisht.replace(/‑/g, "");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}


function frenchTransCodation($gegnisht)
{

    $gegnisht = $gegnisht.replace(/E/g, "É");

    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ER";
    }
    if($gegnisht.endsWith("QWË")) {
        $gegnisht = $gegnisht.slice(-0, -3) + "QUE";
    }

    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "CH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "J");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");
    $gegnisht = $gegnisht.replace(/Ö/g, "EU");

    $gegnisht = $gegnisht.replace(/QU/g, "2543");

    $gegnisht = $gegnisht.replace(/U/g, "OU");
    $gegnisht = $gegnisht.replace(/Y/g, "U");

    $gegnisht = $gegnisht.replace(/Q/g, "C");
    $gegnisht = $gegnisht.replace(/K/g, "C");
    $gegnisht = $gegnisht.replace(/2543/g, "QU");

    $gegnisht = $gegnisht.replace(/J/g, "Y");
	
	$gegnisht = $gegnisht.replace(/X/g, "KH");

    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ë/g, "E");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");

    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("GE")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "GUE";
    }
    if($gegnisht.endsWith("QE")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "QUE";
    }
    if($gegnisht.endsWith("SE")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "SSE";
    }
    if($gegnisht.endsWith("SSSE")) {
        $gegnisht = $gegnisht.slice(-0, -4) + "SSE";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}


function albanianTransCodation($gegnisht) {

    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "OJ";
    }

    $gegnisht = $gegnisht.replace(/Ê/g, "E");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "SH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/X/g, "KH");
    $gegnisht = $gegnisht.replace(/Ô/g, "O");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ZH");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");
    $gegnisht = $gegnisht.replace(/Â/g, "A");
    $gegnisht = $gegnisht.replace(/Ä/g, "A");
    $gegnisht = $gegnisht.replace(/Ö/g, "O");
    $gegnisht = $gegnisht.replace(/Œ/g, "OE");
    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");
    $gegnisht = $gegnisht.replace(/TSH/g, "Ç");
    $gegnisht = $gegnisht.replace(/TS/g, "C");

    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}


function gegnishtTransCodation($gegnisht)
{
    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "ÔJË";
    }

    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "SH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/X/g, "KH");
    $gegnisht = $gegnisht.replace(/Ô/g, "O");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ZH");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}


function tosknishtTransCodation($gegnisht)
{
    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "OJË";
    }

    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/B/g, "123");
    $gegnisht = $gegnisht.replace(/M/g, "MB");
    $gegnisht = $gegnisht.replace(/123/g, "MB");
    $gegnisht = $gegnisht.replace(/P/g, "MB");
    $gegnisht = $gegnisht.replace(/Y/g, "I");
    $gegnisht = $gegnisht.replace(/Ê/g, "I");
    $gegnisht = $gegnisht.replace(/N/g, "ND");

    $gegnisht = $gegnisht.replace(/Ê/g, "E");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "SH");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/ɸ/g, "PH");
    $gegnisht = $gegnisht.replace(/X/g, "KH");
    $gegnisht = $gegnisht.replace(/Ô/g, "O");
    $gegnisht = $gegnisht.replace(/Ħ/g, "HH");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "GH");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "ZH");
    $gegnisht = $gegnisht.replace(/Ð/g, "DH");
    $gegnisht = $gegnisht.replace(/ɕ/g, "QH");
    $gegnisht = $gegnisht.replace(/Â/g, "A");
    $gegnisht = $gegnisht.replace(/Ä/g, "A");
    $gegnisht = $gegnisht.replace(/Ö/g, "O");
    $gegnisht = $gegnisht.replace(/Œ/g, "OE");
    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");
    $gegnisht = $gegnisht.replace(/TSH/g, "Ç");
    $gegnisht = $gegnisht.replace(/TS/g, "C");

    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("NË")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "RË";
    }
    if($gegnisht.endsWith("NIË")) {
        $gegnisht = $gegnisht.slice(-0, -2) + "RIË";
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}

function latinTransCodation($gegnisht) {
    $gegnisht = $gegnisht.replace(/Ô/g, "o");
    $gegnisht = $gegnisht.replace(/Ê/g, "e");
    $gegnisht = $gegnisht.replace(/Â/g, "a");
    $gegnisht = $gegnisht.replace(/Ä/g, "a");
    $gegnisht = $gegnisht.replace(/Θ/g, "TH");
    $gegnisht = $gegnisht.replace(/Þ/g, "TH");

    $gegnisht = $gegnisht.replace(/K/g, "C");
    $gegnisht = $gegnisht.replace(/G/g, "C");

    $gegnisht = $gegnisht.replace(/Ʃ/g, "s");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "g");
    $gegnisht = $gegnisht.replace(/X/g, "ch");

    if($gegnisht.endsWith("ËË")) {
        $gegnisht = $gegnisht.slice(-0, -1);
    }

    if($gegnisht.endsWith("Ë")) {
        $gegnisht = $gegnisht.slice(-0, -1) + 'us';
    }

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    }
    else
    {
        return '';
    }
}

function hanafiTransCodation($gegnisht)
{
    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/DƷ/g, "G");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "G");
    $gegnisht = $gegnisht.replace(/P/g, "V");
    $gegnisht = $gegnisht.replace(/Ê/g, "ĦÊ");
    $gegnisht = $gegnisht.replace(/ĦĦ/g, "Ħ");
    $gegnisht = $gegnisht.replace(/W/g, "V");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}


function hanbaliTransCodation($gegnisht) {
    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/Ʒ/g, "DƷ");
    $gegnisht = $gegnisht.replace(/G/g, "DƷ");
    $gegnisht = $gegnisht.replace(/P/g, "F");
    $gegnisht = $gegnisht.replace(/Ê/g, "ĦÊ");
    $gegnisht = $gegnisht.replace(/ĦĦ/g, "Ħ");
    $gegnisht = $gegnisht.replace(/V/g, "W");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}


function malikiTransCodation($gegnisht) {
    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/DƷ/g, "Ʒ");
    $gegnisht = $gegnisht.replace(/G/g, "Ʒ");
    $gegnisht = $gegnisht.replace(/P/g, "B");
    $gegnisht = $gegnisht.replace(/Ê/g, "ĦÊ");
    $gegnisht = $gegnisht.replace(/ĦĦ/g, "Ħ");
    $gegnisht = $gegnisht.replace(/V/g, "w");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}


function shiaTransCodation($gegnisht) {
    /* REPLACEMENT */
    $gegnisht = $gegnisht.replace(/Ḍ/g, "Ẓ");
    $gegnisht = $gegnisht.replace(/W/g, "V");
    $gegnisht = $gegnisht.replace(/Ê/g, "ĦÊ");
    $gegnisht = $gegnisht.replace(/ĦĦ/g, "Ħ");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}


function turkTransCodation($gegnisht) {
    /* END OF TERM BEHAVIOR */
    if($gegnisht.endsWith("Ô")) {
        $gegnisht = $gegnisht.slice(-0, -1) + "";
    }

    $gegnisht = $gegnisht.replace(/Ë/g, "ı");
    $gegnisht = $gegnisht.replace(/I/g, "İ");
    $gegnisht = $gegnisht.replace(/Y/g, "Ü");
    $gegnisht = $gegnisht.replace(/Ḍ/g, "Ẓ");
    $gegnisht = $gegnisht.replace(/W/g, "V");
    $gegnisht = $gegnisht.replace(/ĦÊ/g, "HE");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "Ğ");
    $gegnisht = $gegnisht.replace(/Ê/g, "E");
    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Q/g, "K");
    $gegnisht = $gegnisht.replace(/J/g, "Y");
    $gegnisht = $gegnisht.replace(/Θ/g, "S");
    $gegnisht = $gegnisht.replace(/Þ/g, "S");
    $gegnisht = $gegnisht.replace(/DƷ/g, "C");
    $gegnisht = $gegnisht.replace(/Ʒ/g, "J");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ş");
    $gegnisht = $gegnisht.replace(/Ô/g, "o");
    $gegnisht = $gegnisht.replace(/Tş/g, "Ç");
    $gegnisht = $gegnisht.replace(/X/g, "H");
    $gegnisht = $gegnisht.replace(/Ħ/g, "H");

    $gegnisht = $gegnisht.replace(/Ã/g, "A");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "E");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "I");
    $gegnisht = $gegnisht.replace(/Õ/g, "O");
    $gegnisht = $gegnisht.replace(/Ũ/g, "U");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "Y");

    /* DISPLAY */
    if($gegnisht !== '') { // if(!empty($gegnisht))
        return $gegnisht.toLowerCase();
    } else {
        return '';
    }
}

function ipaPhoneticTransCodation($gegnisht)
{
    $gegnisht = $gegnisht.replace(/A/g, "a");
    $gegnisht = $gegnisht.replace(/B/g, "b");
    $gegnisht = $gegnisht.replace(/C/g, "c");
    $gegnisht = $gegnisht.replace(/G/g, "ɡ");
    $gegnisht = $gegnisht.replace(/D/g, "d");
    $gegnisht = $gegnisht.replace(/V/g, "v");
    $gegnisht = $gegnisht.replace(/Z/g, "z");
    $gegnisht = $gegnisht.replace(/Þ/g, "Θ");
    $gegnisht = $gegnisht.replace(/Θ/g, "Θ");
    $gegnisht = $gegnisht.replace(/J/g, "j");
    $gegnisht = $gegnisht.replace(/K/g, "k");
    $gegnisht = $gegnisht.replace(/L/g, "l");
    $gegnisht = $gegnisht.replace(/M/g, "m");
    $gegnisht = $gegnisht.replace(/N/g, "n");
    $gegnisht = $gegnisht.replace(/S/g, "s");
    $gegnisht = $gegnisht.replace(/O/g, "o");
    $gegnisht = $gegnisht.replace(/P/g, "p");
    $gegnisht = $gegnisht.replace(/Q/g, "q");
    $gegnisht = $gegnisht.replace(/R/g, "r");
    $gegnisht = $gegnisht.replace(/Ʃ/g, "ʃ");
    $gegnisht = $gegnisht.replace(/T/g, "t");
    $gegnisht = $gegnisht.replace(/Y/g, "y");
    $gegnisht = $gegnisht.replace(/U/g, "u");
    $gegnisht = $gegnisht.replace(/W/g, "w");
    $gegnisht = $gegnisht.replace(/ɸ/g, "");
    $gegnisht = $gegnisht.replace(/F/g, "f");

    $gegnisht = $gegnisht.replace(/H/g, "h");
    $gegnisht = $gegnisht.replace(/Ħ/g, "ħ");
    $gegnisht = $gegnisht.replace(/X/g, "x");
    $gegnisht = $gegnisht.replace(/Ɣ/g, "ɣ");

    $gegnisht = $gegnisht.replace(/Ʒ/g, "ʒ");
    $gegnisht = $gegnisht.replace(/Ð/g, "ð");
    $gegnisht = $gegnisht.replace(/ɕ/g, "ɕ");

    $gegnisht = $gegnisht.replace(/Â/g, "ɑ");
    $gegnisht = $gegnisht.replace(/Ä/g, "ɒ");
    $gegnisht = $gegnisht.replace(/Ã/g, "ɑ̃");



    $gegnisht = $gegnisht.replace(/Ë/g, "ə");
    $gegnisht = $gegnisht.replace(/E/g, "e");
    $gegnisht = $gegnisht.replace(/Ê/g, "ɛ");
    $gegnisht = $gegnisht.replace(/Ẽ/g, "ɛ̃");

    $gegnisht = $gegnisht.replace(/I/g, "i");
    $gegnisht = $gegnisht.replace(/Ĩ/g, "ĩ");

    $gegnisht = $gegnisht.replace(/Œ/g, "œ");

    $gegnisht = $gegnisht.replace(/Ö/g, "ø");
    $gegnisht = $gegnisht.replace(/Ô/g, "ɔ");
    $gegnisht = $gegnisht.replace(/Õ/g, "ɔ̃");

    $gegnisht = $gegnisht.replace(/Ũ/g, "ũ");
    $gegnisht = $gegnisht.replace(/Ỹ/g, "ỹ");
    $gegnisht = $gegnisht.replace(/C/g, "c");

    $gegnisht = $gegnisht.replace(/Ṣ/g, "sˤ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "zˤ");
    $gegnisht = $gegnisht.replace(/Ṭ/g, "tˤ");
    $gegnisht = $gegnisht.replace(/Ẓ/g, "zˤ");

    $gegnisht = $gegnisht.replace(/nɡ/g, "ŋ");
    $gegnisht = $gegnisht.replace(/nj/g, "ɲ");

    console.log($gegnisht);

    if($gegnisht !== '') { // if(!empty($gegnisht))
        return '[' + $gegnisht.toLowerCase() + ']';
    } else {
        return '';
    }
}
