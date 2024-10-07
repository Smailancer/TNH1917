<div>
    <div id="mostChosenCountriesChart"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Number of Selections',
                    data: @json($data)
                }],
                xaxis: {
                    categories: @json($labels)
                }
            };

            var chart = new ApexCharts(document.querySelector("#mostChosenCountriesChart"), options);
            chart.render();

            // Check if user has voted
            if (!{{ Auth::check() && auth()->user()->hasVoted() ? 'true' : 'false' }}) {
                chart.updateOptions({
                    fill: {
                        opacity: 0.1 // Lower opacity for a blur effect
                    }
                });
                document.querySelector("#mostChosenCountriesChart").classList.add('chart-blur');

                // Add styled message for users to vote
                const message = document.createElement('div');
                message.innerHTML = '<span class="font-bold text-lg text-red-600">Please login and vote to view the statistics.</span>';
                message.classList.add('bg-red-100', 'border', 'border-red-400', 'text-red-700', 'px-4', 'py-2', 'rounded', 'shadow-md', 'text-center', 'mt-4');
                document.querySelector("#mostChosenCountriesChart").insertAdjacentElement('beforebegin', message);
            }
        });
    </script>
</div>