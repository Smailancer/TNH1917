<div>
    <div id="testChart"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            renderChart(); // Initial render

            function renderChart() {
                var options = {
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    series: [{
                        name: 'Sample Data',
                        data: @json($data)
                    }],
                    xaxis: {
                        categories: @json($labels)
                    }
                };

                var chart = new ApexCharts(document.querySelector("#testChart"), options);
                chart.render();
            }
        });
    </script>
</div>