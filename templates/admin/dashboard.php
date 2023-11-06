<?php

/**
 * Framework Title: PhpStrike Framework
 * Creator: Celio natti
 * version: 1.0.0
 * Year: 2023
 * 
 * 
 * This view page start name{style,script,content} 
 * can be edited, base on what they are called in the layout view
 */

?>


<!-- The Main content is Render here. -->
<?php $this->start('content') ?>
<?= partials("admin-crumbs", ['title' => $title, 'navigations' => $navigations]) ?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary-subtle mb-4">
            <div class="card-body">
                <h4>Quiz</h4>
                <h2 class="text-center">5</h2>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning-subtle mb-4">
            <div class="card-body">
                <h4>Users</h4>
                <h2 class="text-center">5</h2>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info-subtle mb-4">
            <div class="card-body">
                <h4>Blog</h4>
                <h2 class="text-center">5</h2>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger-subtle mb-4">
            <div class="card-body">
                <h4>Revenue</h4>
                <h2 class="text-center">5</h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-pie-bar me-1"></i>
                Pie Chart Example
            </div>
            <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart Example
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

<?php $this->end() ?>

<?php $this->start("script") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= get_script('chart-bar-demo.js'); ?>"></script>
<script src="<?= get_script('chart-pie-demo.js'); ?>"></script>
<?php $this->end() ?>