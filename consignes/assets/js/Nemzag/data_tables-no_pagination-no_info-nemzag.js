/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2019-01-02
 * Time: 11:14
 */

/*
// Modification à faiqe dans jquery.dataTables.min.css & jquery.dataTables.css (dépend duquel ty utilise) :

.dataTables_paginate{float:right;text-align:right;padding-top:0.25em}

.dataTables_paginate{float:none;text-align:center;padding-top:0}

// Pour que kë‑lâ fonctionne ajouter :
/*
<table id="table" style="text-align: center" class="table-de-gazmen order-column hover stripe cell-border" data-order='[[ 2, "desc" ]]' data-page-length="25"> <!-- data-page-length="-1" : pro all results… -->
*/
$(document).ready(
	function () {
		$('table.table-de-gazmen').DataTable({
                        paging: false,
                        searching: true,
                        ordering: true,
						info: false,
                        aLengthMenu: [
			[-1, 1, 10, 25, 50, 100, 250, 500],
			["∞", 1, 10, 25, 50, 100, 250, 500]
		],
                        iDisplayLength: -1,
                        "sDom": // '<"table-datas-top"lfp>rt<"table-datas-bottom"ip><"clear">'
                            "<'ui stackable grid'"+

                            // left floated or right aligned (floated : box position, aligned : text position…)
                            "<'row'"+
                            "<'four wide column'l>"+                 // l - [l]ength changing input control
                            "<'left aligned eight wide column'p>"+   // p - [p]agination control
                            "<'four aligned four wide column'f>"+	 // f - [f]iltering input
                            ">"+

                            "<'row dt-table'"+
                            "<'sixteen wide column'tr>"+             // t - The [t]able! & r - p[r]ocessing display element
                            ">"+

                            "<'row '"+
                            "<'four wide column'i>"+                 // i - Table [i]nformation summary
                            "<'left aligned eight wide column'p>"+   // p - [p]agination control
                            "<'right aligned four wide column'>"+    // p - [p]agination control
                            ">"+
                            ">"
                        /*
							// La colonne trier par défaut.
							"order": [
								[0, 'desc'], // 3ème colonne.
								[1, 'asc'], // 2ème colonne.
							]
							*/
                    }
                );
            } // End Function
); // End Ready()

