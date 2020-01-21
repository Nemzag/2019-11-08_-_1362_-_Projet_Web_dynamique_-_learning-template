/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi (Shkypi, 1979-09-30).
 * Date: 2019-01-02
 * Time: 10:40
 */

/*
// Modification à faiqe dans jquery.dataTables.min.css & jquery.dataTables.css (dépend duquel ty utilise) :

.dataTables_paginate{float:right;text-align:right;padding-top:0.25em}

.dataTables_paginate{float:none;text-align:center;padding-top:0}

// Pour que kë‑lâ fonctionne ajouter :
/*
<table id="table" style="text-align: center" class="table-de-gazmen order-column hover stripe cell-border" data-order='[[ 2, "desc" ]]' <!-- data-column-defs='[{ "type": "html-num-fmt", "targets": 5 }]' --> data-page-length="25" data-filter="true" data-info="false" data-paging="true"> > <!-- data-page-length="-1" : pro all results… -->
*/
$(document).ready(
	function () {
		$('table.table-de-gazmen').DataTable({
                        "paging": undefined,
                        "searching": undefined,
                        "info": true,
                        "ordering": true,
                        "aLengthMenu": [
			[-1, 1, 5, 10, 25, 50, 100, 250, 500],
			["∞", 1, 5, 10, 25, 50, 100, 250, 500]
		],
                        "iDisplayLength": 5,
                        "sDom":
                        // '<"table-datas-top"lfp>rt<"table-datas-bottom"ip><"clear">'
                        //    "<'ui stackable grid'"+

                        /*
                            "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        */

                            // left floated or right aligned (floated : box position, aligned : text position…)
                            "<'row'" +
                            "<'col-sm-12 col-md-3'l>" +              // l - [l]ength changing input control
                            "<'col-sm-12 col-md-4 text-center'p>" +              // p - [p]agination control
                            "<'col-sm-12 col-md-5 text-right'f>" +              // f - [f]iltering input
                            ">" +

                            "<'row'" +
                        "<'col-sm-12 col-md-12'tr>" +                // t - The [t]able! & r - p[r]ocessing display element
                            ">"+

                            /*
                            "<'row dt-table'"+
                            "<'sixteen wide column'tr>"+             // t - The [t]able! & r - p[r]ocessing display element
                            ">"+
                            */

                            "<'row '" +
                            "<'col-sm-12 col-md-4'i>"+               // i - Table [i]nformation summary
                            "<'col-sm-12 col-md-4'p>"+               // p - [p]agination control
                            "<'col-sm-12 col-md-4'>"+                // p - [p]agination control
                            ">"
                            /*
							// La colonne trier par défaut.
							"order": [
								[2, 'desc'], // 10ème colonne.
								// [1, 'asc'], // 2ème colonne.
							]
                             */

                    }
                );
            } // End Function
); // End Ready()

