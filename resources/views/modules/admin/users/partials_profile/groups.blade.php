<form action="#">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-users font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Grupos</span>
                        <span class="caption-helper">Listado</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="row number-stats margin-bottom-30">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-left">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar2"></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> Cantidad </div>
                                    <div class="number"> 7 </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable table-scrollable-borderless">
                        @include('modules.admin.users.partials.table_group')
                    </div>
                </div>
            </div>
        </div>
</form>