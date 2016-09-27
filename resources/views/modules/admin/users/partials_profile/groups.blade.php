<form action="#">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart font-red"></i>
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
                                    <div id="sparkline_bar"></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> Total </div>
                                    <div class="number"> 2460 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-right">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar2"></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> New </div>
                                    <div class="number"> 719 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                            <tr class="uppercase">
                                <th colspan="2"> MEMBER </th>
                                <th> Earnings </th>
                                <th> CASES </th>
                                <th> CLOSED </th>
                                <th> RATE </th>
                            </tr>
                            </thead>
                            <tr>
                                <td class="fit">
                                    <img  class="user-pic rounded" src="{{ asset('img/profile/avatar.png')}}" />
                                </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Brain</a>
                                </td>
                                <td> $345 </td>
                                <td> 45 </td>
                                <td> 124 </td>
                                <td>
                                    <span class="bold theme-font">80%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                     <img  class="user-pic rounded" src="{{ asset('img/profile/avatar.png')}}" /> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> $560 </td>
                                <td> 12 </td>
                                <td> 24 </td>
                                <td>
                                    <span class="bold theme-font">67%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img  class="user-pic rounded" src="{{ asset('img/profile/avatar.png')}}" /> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> $1,345 </td>
                                <td> 450 </td>
                                <td> 46 </td>
                                <td>
                                    <span class="bold theme-font">98%</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img  class="user-pic rounded" src="{{ asset('img/profile/avatar.png')}}" /> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> $645 </td>
                                <td> 50 </td>
                                <td> 89 </td>
                                <td>
                                    <span class="bold theme-font">58%</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</form>