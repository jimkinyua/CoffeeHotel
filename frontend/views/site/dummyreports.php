<?php
$BaseUrl = Yii::$app->getUrlManager()->getBaseUrl();
?>
<div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Report</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Report
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Hospital Reports -->

                <Section id="reports">
                    <div class="row mt-2">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$15,678</h3>
                                                <span class="text-muted">Weekly</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="total-cost-chart"><canvas width="130" height="30" style="display: inline-block; width: 130px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$12,087</h3>
                                                <span class="text-muted">Monthly</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="total-salaries-chart"><canvas width="152" height="30" style="display: inline-block; width: 152px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$1200</h3>
                                                <span class="text-muted">Yearly</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="total-taxes-chart"><canvas width="152" height="30" style="display: inline-block; width: 152px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h3>$1000</h3>
                                                <span class="text-muted">Misc.</span>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="total-misc-cost-chart"><canvas width="152" height="30" style="display: inline-block; width: 152px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hospital Payments Chart</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <canvas id="payments-chart" class="height-400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$1,420</h1>
                                                <span class="text-muted">Weekly Equipments Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-weekly-cost"><canvas style="display: inline-block; width: 400.453px; height: 100px; vertical-align: top;" width="400" height="100"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$5,680</h1>
                                                <span class="text-muted">Monthly Equipments Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-monthly-cost"><canvas style="display: inline-block; width: 400.453px; height: 100px; vertical-align: top;" width="400" height="100"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body">
                                                <h1 class="display-4">$68,160</h1>
                                                <span class="text-muted">Yearly Equipments Cost</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-line-yearly-cost"><canvas style="display: inline-block; width: 400.453px; height: 100px; vertical-align: top;" width="400" height="100"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </Section>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

        <script src="/app-assets/js/scripts/pages/hospital-payment-reports.js"></script>

      