/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30) {https://github.com/Nemzag/}.
 * Date: 2020-01-23
 * Time: 18h41
 * Updated:
*/

"use strict";

//----------------------------------------------------------------------------------------
// init constantes…
//----------------------------------------------------------------------------------------
const CUSTOM_FILE_INPUTS = document.getElementsByClassName("custom-file-input");

//----------------------------------------------------------------------------------------
// init évènements…
//----------------------------------------------------------------------------------------
// console.log(CUSTOM_FILE_INPUTS);

for (let $customFileInput of CUSTOM_FILE_INPUTS) {

    $customFileInput.addEventListener('change', fakePathReplace);

    function fakePathReplace() {
        this.nextElementSibling.innerHTML = this.value.replace("C:\\fakepath\\", "");
    }
}