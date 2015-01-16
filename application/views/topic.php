<div style="position: relative; padding: 200px;">

    <div>
        <input type="text" id="range" value="" name="range" />
    </div>

</div>




<!-- All JS -->
<script src="/static/lib/ionslider/js/vendor/jquery-1.11.1.min.js"></script>
<script src="/static/lib/ionslider/js/ion-rangeSlider/ion.rangeSlider.js"></script>

<script>

    $(function () {

        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            grid: true
        });

    });
</script>