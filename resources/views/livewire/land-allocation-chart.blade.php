<div>
    <div wire:ignore>
        <div id="combined-chart" class="w-full h-96"></div>
    </div>

    <!-- Optional: Remove Debugging Information -->
    {{-- 
    <div class="mt-4">
        <h3>Labels: {{ json_encode($labels) }}</h3>
        <h3>Average Percentages: {{ json_encode($averagePercentages) }}</h3>
        <h3>Declaration Counts: {{ json_encode($declarationCounts) }}</h3>
    </div>
    --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            try {
                const labels = @json($labels);
                const averagePercentages = @json($averagePercentages);
                const declarationCounts = @json($declarationCounts);

                if (labels.length === 0 || averagePercentages.length === 0 || declarationCounts.length === 0) {
                    console.warn('One or more data arrays are empty. Check your data fetching logic.');
                    return;
                }

                if (averagePercentages.length !== declarationCounts.length || labels.length !== averagePercentages.length) {
                    console.warn('Data arrays have mismatched lengths. Ensure all arrays have the same number of elements.');
                    return;
                }

                var options = {
                    series: [
                        {
                            name: 'Average Percentage Allocated',
                            type: 'column',
                            data: averagePercentages
                        },
                        {
                            name: 'Number of Declarations',
                            type: 'line',
                            data: declarationCounts
                        }
                    ],
                    chart: {
                        height: 450,
                        type: 'line',
                        stacked: false
                    },
                    stroke: {
                        width: [0, 4]
                    },
                    title: {
                        text: 'Average Percentage & Submission Count by Country',
                        align: 'center'
                    },
                    dataLabels: {
                        enabled: true,
                        enabledOnSeries: [0]
                    },
                    labels: labels,
                    xaxis: {
                        type: 'category',
                        title: {
                            text: 'Supportive Countries'
                        }
                    },
                    yaxis: [
                        {
                            seriesName: 'Average Percentage Allocated',
                            title: {
                                text: 'Average Percentage (%)'
                            },
                            min: 0,
                            max: 100
                        },
                        {
                            seriesName: 'Number of Declarations',
                            opposite: true,
                            title: {
                                text: 'Number of Declarations'
                            },
                            min: 0,
                            max: 250
                        }
                    ],
                    tooltip: {
                        shared: true,
                        intersect: false,
                        y: {
                            formatter: function (val, { seriesIndex }) {
                                if (seriesIndex === 0) {
                                    return val + " % allocated";
                                } else {
                                    return val + " declarations";
                                }
                            }
                        }
                    },
                    colors: ['#00E396', '#FEB019']
                };

                var chart = new ApexCharts(document.querySelector("#combined-chart"), options);
                chart.render();

                // Apply blur or opacity if user hasn't voted
                if (!{{ Auth::check() && auth()->user()->hasVoted() ? 'true' : 'false' }}) {
                    chart.updateOptions({
                        fill: {
                            opacity: 0.1 // Lower opacity for a blur effect
                        }
                    });
                    document.querySelector("#combined-chart").classList.add('chart-blur');

                    // Add message for users to vote
                    const message = document.createElement('div');
                    message.innerHTML = '<span class="text-red-600 font-bold">Please login and vote to view the statistics.</span>';
                    message.classList.add('text-center', 'mt-4');
                    document.querySelector("#combined-chart").insertAdjacentElement('beforebegin', message);
                }
            } catch (error) {
                console.error('Error rendering ApexCharts:', error);
            }
        });
    </script>
</div>
