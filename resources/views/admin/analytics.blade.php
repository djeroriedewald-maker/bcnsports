@extends('admin.layouts.app')

@section('title', 'Analytics')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Analytics & SEO</h1>
        <p class="text-gray-500 mt-1">Website statistieken en prestaties</p>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Berichten deze maand</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['messages_this_month'] }}</p>
                    <p class="text-sm mt-2 {{ $stats['messages_change'] >= 0 ? 'text-green-400' : 'text-red-400' }}">
                        {{ $stats['messages_change'] >= 0 ? '+' : '' }}{{ $stats['messages_change'] }}% vs vorige maand
                    </p>
                </div>
                <div class="w-12 h-12 bg-bcn-green/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-bcn-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Gemiddelde reactietijd</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['avg_response_time'] }}</p>
                    <p class="text-sm text-gray-500 mt-2">Tijd tot eerste reactie</p>
                </div>
                <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Response rate</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['response_rate'] }}%</p>
                    <p class="text-sm text-gray-500 mt-2">Beantwoorde berichten</p>
                </div>
                <div class="w-12 h-12 bg-green-500/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Messages by Subject Chart -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6 border-b border-white/10">
                <h2 class="text-xl font-bold text-white">Berichten per onderwerp</h2>
            </div>
            <div class="p-6">
                <canvas id="subjectChart" height="200"></canvas>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6 border-b border-white/10">
                <h2 class="text-xl font-bold text-white">Berichten per dag van de week</h2>
            </div>
            <div class="p-6">
                <canvas id="weekdayChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Google Analytics Link -->
    <div class="bg-bcn-gray rounded-xl border border-white/10">
        <div class="p-6 border-b border-white/10">
            <h2 class="text-xl font-bold text-white">Google Analytics</h2>
        </div>
        <div class="p-6">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-orange-500/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-white font-medium mb-2">Website verkeer en bezoekers</h3>
                    <p class="text-gray-500 text-sm mb-4">
                        Voor gedetailleerde website statistieken zoals paginaweergaven, bezoekers, bounce rate en meer,
                        gebruik je Google Analytics. Dit geeft je inzicht in hoe bezoekers je website gebruiken.
                    </p>
                    <a href="https://analytics.google.com" target="_blank" class="inline-flex items-center bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        Open Google Analytics
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Useful SEO Links -->
    <div class="mt-8 bg-bcn-gray rounded-xl border border-white/10">
        <div class="p-6 border-b border-white/10">
            <h2 class="text-xl font-bold text-white">SEO Tools</h2>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="https://search.google.com/search-console" target="_blank" class="p-4 bg-bcn-dark rounded-lg border border-white/10 hover:border-bcn-green/50 transition group">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <span class="text-white font-medium group-hover:text-bcn-green transition">Google Search Console</span>
                </div>
                <p class="text-gray-500 text-sm">Bekijk hoe Google je website ziet en indexeert</p>
            </a>
            <a href="https://pagespeed.web.dev/?url=https://bcnsports.nl" target="_blank" class="p-4 bg-bcn-dark rounded-lg border border-white/10 hover:border-bcn-green/50 transition group">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-white font-medium group-hover:text-bcn-green transition">PageSpeed Insights</span>
                </div>
                <p class="text-gray-500 text-sm">Test de snelheid van je website</p>
            </a>
            <a href="{{ url('/sitemap.xml') }}" target="_blank" class="p-4 bg-bcn-dark rounded-lg border border-white/10 hover:border-bcn-green/50 transition group">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="text-white font-medium group-hover:text-bcn-green transition">Sitemap</span>
                </div>
                <p class="text-gray-500 text-sm">Bekijk je XML sitemap</p>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Subject Chart
        new Chart(document.getElementById('subjectChart').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: @json($subjectData['labels']),
                datasets: [{
                    data: @json($subjectData['data']),
                    backgroundColor: [
                        '#c4ff00',
                        '#3b82f6',
                        '#22c55e',
                        '#f59e0b',
                        '#ef4444',
                        '#8b5cf6'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#9ca3af',
                            padding: 20
                        }
                    }
                }
            }
        });

        // Weekday Chart
        new Chart(document.getElementById('weekdayChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: @json($weekdayData['labels']),
                datasets: [{
                    label: 'Berichten',
                    data: @json($weekdayData['data']),
                    backgroundColor: '#c4ff00',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6b7280'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)'
                        },
                        ticks: {
                            color: '#6b7280',
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
@endsection
