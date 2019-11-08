<?php
/*
 * Created by PhpStorm.
 * User: Nemzag aka Gaz‑mên Arifi (Shkypi, 1979-09-30).
 * Date: 08/11/2019
 * Time: 14:04
 * Updated:
*/
?>
</section>
<!-- END PRINCIPAL CONTENT -->

</article>

</main>

<footer id="footer">

	<!-- Prism -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/prism.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/line-numbers/prism-line-numbers.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/copy-to-clipboard/prism-copy-to-clipboard.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/show-language/prism-show-language.js"></script>
	<script src="../assets/js/prism/prism.js"></script>

	<!-- Prettify -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js"></script>
	<script src="../assets/js/prettify/prettify.js"></script>

	<!-- TocBot-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.8.0/tocbot.js"></script>
	<script src="../assets/js/tocbot/tocbot.js"></script>
	<script>
        /**
         * Created by PhpStorm.
         * User: nemzag aka Gazmen Arifi
         * Date: 2018-10-02
         * Time: 12:47
         */

        tocbot.init({
            // Where to render the table of contents.
            tocSelector: '.js-toc',
            // Where to grab the headings to build the table of contents.
            contentSelector: '.js-toc-content',
            // Which headings to grab inside of the contentSelector element.
            headingSelector: 'h1, h2, h3, h4, h5, h6'
        });

        tocbot.refresh();
	</script>
	<script src="../assets/js/tocbot/tocbot.init.js"></script>

	<!-- BootStrap -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.js"></script> -->
	<!-- <script src="../assets/PrameVorgs/semantic-ui-css-master/semantic.min.js"></script> -->

	<!-- Semantic UI -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
	<script src="../assets/PrameVorgs/semantic-ui-css-master/semantic.min.js"></script>

	<!-- DataTables -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/data_tables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.semanticui.min.js"></script>
	<script src="../assets/js/data_tables/DataTables-1.10.18/js/dataTables.semanticui.min.js"></script>

	<!-- DataTables Personal -->
	<script>
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
                        "ordering": true,
                        "aLengthMenu": [
                            [-1, 1, 10, 25, 50, 100, 250, 500],
                            ["∞", 1, 10, 25, 50, 100, 250, 500]
                        ],
                        "iDisplayLength": -1,
                        "sDom": // '<"table-datas-top"lfp>rt<"table-datas-bottom"ip><"clear">'
                            "<'ui stackable grid'" +

                            // left floated or right aligned (floated : box position, aligned : text position…)
                            "<'row'" +
                            "<'four wide column'l>" +                 // l - [l]ength changing input control
                            "<'left aligned eight wide column'p>" +   // p - [p]agination control
                            "<'right aligned four wide column'f>" +	 // f - [f]iltering input
                            ">" +

                            "<'row dt-table'" +
                            "<'sixteen wide column'tr>" +             // t - The [t]able! & r - p[r]ocessing display element
                            ">" +

                            "<'row '" +
                            "<'four wide column'i>" +                 // i - Table [i]nformation summary
                            "<'left aligned eight wide column'p>" +   // p - [p]agination control
                            "<'right aligned four wide column'>" +    // p - [p]agination control
                            ">" +
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


	</script>
	<script src="../assets/js/Nemzag/data_tables-nemzag.js"></script>

	<!-- Personnal -->
	<script>
        /**
         * Created by PhpStorm.
         * User: nemzag aka Gazmen Arifi
         * Date: 2018-10-01
         * Time: 15:42
         */

// Scroll to a certain element "#title-h2-table-of-contents"

        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 420, function () { /* modified to 420 instead of 800 to be the same than with tocbot.min.js */

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
	</script>
	<script src="../assets/js/Nemzag/smoothscroll.js"></script>
</footer>

</body>

</html>




