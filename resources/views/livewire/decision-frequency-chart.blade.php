<div>
    <div id="decisionFrequencyChart"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
                var options = {
                chart: {
                    type: 'bar',
                    height: 350
                },
                series: [{
                    name: 'Decision Frequency',
                    data: @json($data)
                }],
                xaxis: {
                    categories: @json($labels)
                }
            };

            var chart = new ApexCharts(document.querySelector("#decisionFrequencyChart"), options);
            chart.render();

            // Apply blur or opacity if user hasn't voted
            if (!{{ Auth::check() && auth()->user()->hasVoted() ? 'true' : 'false' }}) {
                chart.updateOptions({
                    fill: {
                        opacity: 0.1 // Lower opacity for a blur effect
                    }
                });
                document.querySelector("#decisionFrequencyChart").classList.add('chart-blur');

                // Add styled message for users to vote
                const message = document.createElement('div');
                message.innerHTML = '<span class="font-bold text-lg text-red-600">Please vote to view the statistics.</span>';
                message.classList.add('bg-red-100', 'border', 'border-red-400', 'text-red-700', 'px-4', 'py-2', 'rounded', 'shadow-md', 'text-center', 'mt-4');
                document.querySelector("#decisionFrequencyChart").insertAdjacentElement('beforebegin', message);
            }
        });
    </script>
</div>