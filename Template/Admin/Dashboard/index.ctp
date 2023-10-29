<?php 
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.min', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.time', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.tooltip.min', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.resize', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.pie', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.crosshair', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/curvedLines', ['block' => true]);
        $this->Html->script('../plugins/admin/flot-chart/jquery.flot.axislabels', ['block' => true]);
        $this->Html->script('../plugins/admin/jquery-knob/excanvas', ['block' => true]);
        $this->Html->script('../plugins/admin/jquery-knob/jquery.knob', ['block' => true]);
        $this->Html->script('admin/pages/jquery.dashboard.init', ['block' => true]);
?>
<br><br><br><br>
<div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Statistiques</h4>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#0acf97" value=<?php echo $id1  ?> data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(10, 207, 151); padding: 0px; -webkit-appearance: none;"></div>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Admins </p>
                                                    <h3 class=""><?php echo $id1  ?></h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f9bc0b" value=<?php echo $id2  ?> data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(249, 188, 11); padding: 0px; -webkit-appearance: none;"></div>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Doctors</p>
                                                    <h3 class=""><?php echo $id2  ?></h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#f1556c" value=<?php echo $id3  ?> data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(241, 85, 108); padding: 0px; -webkit-appearance: none;"></div>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Pharmacists</p>
                                                    <h3 class=""><?php echo $id3  ?></h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input data-plugin="knob" data-width="80" data-height="80" data-linecap="round" data-fgcolor="#2d7bf4" value=<?php echo $id4  ?> data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(45, 123, 244); padding: 0px; -webkit-appearance: none;"></div>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Patients</p>
                                                    <h3 class=""><?php echo $id4  ?></h3>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>