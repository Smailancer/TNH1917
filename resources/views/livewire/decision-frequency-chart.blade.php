<div>
    <div id="decisionFrequencyChart"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
                var options = {
                series: @json($data), // Assuming $data is an array of values for the polar area chart
                chart: {
                    type: 'polarArea',
                    height: 350
                },
                stroke: {
                    colors: ['#fff'] // White stroke for the chart
                },
                fill: {
                    opacity: 0.8 // Opacity for the fill
                },
                colors: [
                    '#FF6384', // Bright Red
                    '#36A2EB', // Bright Blue
                    '#FFCE56', // Bright Yellow
                    '#4BC0C0', // Teal
                    '#9966FF', // Purple
                    '#FF9F40', // Orange
                    '#FF4C4C', // Coral Red
                    '#4CFF4C', // Lime Green
                    '#FFB3E6', // Light Pink
                    '#FF7F50', // Coral
                    '#FFD700', // Gold
                    '#8A2BE2', // Blue Violet
                    '#00CED1', // Dark Turquoise
                    '#FF4500', // Orange Red
                    '#7FFF00'   // Chartreuse
                ],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200 // Width for smaller screens
                        },
                        legend: {
                            position: 'bottom' // Legend position for smaller screens
                        }
                    }
                }],
                labels: @json($labels) // Assuming $labels is an array of labels for the chart
            };

            var chart = new ApexCharts(document.querySelector("#decisionFrequencyChart"), options);
            chart.render();

            // Check if user has voted
            if (!{{ Auth::check() && auth()->user()->hasVoted() ? 'true' : 'false' }}) {
                chart.updateOptions({
                    fill: {
                        opacity: 0.1 // Lower opacity for a blur effect
                    }
                });
                document.querySelector("#decisionFrequencyChart").classList.add('chart-blur');

                // Add styled message for users to vote
                const message = document.createElement('div');
                message.innerHTML = '<span class="font-bold text-lg text-red-600">Please login and vote to view the statistics.</span>';
                message.classList.add('bg-red-100', 'border', 'border-red-400', 'text-red-700', 'px-4', 'py-2', 'rounded', 'shadow-md', 'text-center', 'mt-4');
                document.querySelector("#decisionFrequencyChart").insertAdjacentElement('beforebegin', message);
            }
        });
    </script>
</div>