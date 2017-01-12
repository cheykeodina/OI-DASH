
<section ng-app="app" id="widget-grid" class="">
    <div class="row">
        <article class="col-sm-12 col-md-12 col-lg-12" ng-controller="entityInfoController">
            <input type="text" ng-init="" ng-model="tableName" hidden="">
            <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-list"></i> </span>
                    <label style="margin-left: 10px; margin-top:-1px; font-size: 17px"><?php echo e(trans('information_content.form-information-list')); ?></label>
                    <span id="loading" style="display: none;"><i class="fa fa-gear fa-2x fa-spin"></i></span>
                </header>
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->

                    <div class="widget-body no-padding">
                        <div class="smart-form">

                        </div>
                    </div>
                </div>
            </div><!-- end panel-->
        </article><!-- end controller-->
    </div><!-- end row-->


</section> <!-- end section-->

<div id="modal-loading" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: transparent; box-shadow: none; border: none;">
            <div class="modal-body" style="background-color: transparent; text-align: center;">
                <img src="<?php echo e(asset('img/loading.gif')); ?>">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    pageSetUp();
    $(document).ready(function () {
        angular.bootstrap($('#widget-grid'), ["app"]);
    });
    loadScript("js/plugin/bootstraptree/bootstrap-tree.min.js", function(){});
</script>

<script>

    // Show search bar, copy/pdf/..
    var pagefunction = function () {
        //console.log("cleared");
        /* // DOM Position key index //

         l - Length changing (dropdown)
         f - Filtering input (search)
         t - The Table! (datatable)
         i - Information (records)
         p - Pagination (paging)
         r - pRocessing
         < and > - div elements
         <"#id" and > - div with an id
         <"class" and > - div with a class
         <"#id.class" and > - div with an id and class

         Also see: http://legacy.datatables.net/usage/features
         */

        /* BASIC ;*/
        var responsiveHelper_datatable_fixed_column = undefined;
        var responsiveHelper_datatable_col_reorder = undefined;
        var breakpointDefinition = {
            tablet: 1024,
            phone: 480
        };

        /* END BASIC */

        /* COLUMN FILTER  */
        var otable = $('#datatable_fixed_column').DataTable({
            //"bFilter": false,
            //"bInfo": false,
            //"bLengthChange": false
            //"bAutoWidth": false,
            //"bPaginate": false,
            //"bStateSave": true // saves sort state using localStorage
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-4 hidden-xs'f><'col-sm-4 col-xs-6 hidden-xs'T><'col-sm-4 col-xs-6 hidden-xs'C>r>" +
            "t" +
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "xls",
                    "pdf",
                    {
                        "sExtends": "print",
                        "sMessage": "Generated by Open Institute Monitoring System <i>(press Esc to close)</i>"
                    }
                ],
                "sSwfPath": "<?php echo e(asset('js/plugin/datatables/swf/copy_csv_xls_pdf.swf')); ?>"
            },
            "iDisplayLength": 20,
            "autoWidth": true,
            "preDrawCallback": function () {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_fixed_column) {
                    responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                }
            },
            "rowCallback": function (nRow) {
                responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
            },
            "drawCallback": function (oSettings) {
                responsiveHelper_datatable_fixed_column.respond();
            }

        });

        // custom toolbar

        // Apply the filter
        $("#datatable_fixed_column thead th input[type=text],#datatable_fixed_column thead th select").on('keyup change', function () {
            otable
                    .column($(this).parent().index() + ':visible')
                    .search(this.value)
                    .draw();
        });
        $("#datatable_fixed_column thead th select").bind("DOMSubtreeModified", function () {
            otable
                    .column($(this).parent().index() + ':visible')
                    .search(this.value)
                    .draw();
        });
        /* END COLUMN FILTER */

        /* COLUMN SHOW - HIDE */
        $('#datatable_col_reorder').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>" +
            "t" +
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "autoWidth": true,
            "preDrawCallback": function () {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_col_reorder) {
                    responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
                }
            },
            "rowCallback": function (nRow) {
                responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
            },
            "drawCallback": function (oSettings) {
                responsiveHelper_datatable_col_reorder.respond();
            }
        });

        /* END COLUMN SHOW - HIDE */

    };

    var reloadScript = function(){
        loadScript("<?php echo e(asset('js/plugin/datatables/jquery.dataTables.min.js')); ?>", function () {
            loadScript("<?php echo e(asset('js/plugin/datatables/dataTables.colVis.min.js')); ?>", function () {
                loadScript("<?php echo e(asset('js/plugin/datatables/dataTables.tableTools.min.js')); ?>", function () {
                    loadScript("<?php echo e(asset('js/plugin/datatables/dataTables.bootstrap.min.js')); ?>", function () {
                        loadScript("<?php echo e(asset('js/plugin/datatable-responsive/datatables.responsive.min.js')); ?>", pagefunction);
                    });
                });
            });
        });
    }

</script>




