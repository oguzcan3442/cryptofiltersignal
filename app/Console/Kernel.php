<?php

namespace App\Console;

use App\Services\TaapiService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Cache;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function (){
            Cache::forget('welcome');
            Cache::remember('welcome', 480, function (){
                return TaapiService::welcomeTaapiRequest();
            });
            sleep(15);
            Cache::forget('indicator_supertrend_15m_page1');
            Cache::remember('indicator_supertrend_15m_page1', 480, function (){
                return TaapiService::taapiRequest(1, "supertrend", "15m");
            });
            sleep(15);
            Cache::forget('indicator_supertrend_15m_page2');
            Cache::remember('indicator_supertrend_15m_page2', 480, function (){
                return TaapiService::taapiRequest(2, "supertrend", "15m");
            });

            sleep(15);

            Cache::forget('indicator_fibonacciretracement_15m_page1');
            Cache::remember('indicator_fibonacciretracement_15m_page1', 480, function (){
                return TaapiService::taapiRequest(1, "fibonacciretracement", "15m");
            });
            sleep(15);
            Cache::forget('indicator_fibonacciretracement_15m_page2');
            Cache::remember('indicator_fibonacciretracement_15m_page2', 480, function (){
                return TaapiService::taapiRequest(2, "fibonacciretracement", "15m");
            });
            sleep(15);
        })->cron("*/8 * * * *")->name('15m')->withoutOverlapping();
        $schedule->call(function (){
            Cache::forget('indicator_supertrend_30m_page1');
            Cache::remember('indicator_supertrend_30m_page1', 960, function (){
                return TaapiService::taapiRequest(1, "supertrend", "30m");
            });
            sleep(15);
            Cache::forget('indicator_supertrend_30m_page2');
            Cache::remember('indicator_supertrend_30m_page2', 960, function (){
                return TaapiService::taapiRequest(2, "supertrend", "30m");
            });

            sleep(15);

            Cache::forget('indicator_fibonacciretracement_30m_page1');
            Cache::remember('indicator_fibonacciretracement_30m_page1', 960, function (){
                return TaapiService::taapiRequest(1, "fibonacciretracement", "30m");
            });
            sleep(15);
            Cache::forget('indicator_fibonacciretracement_30m_page2');
            Cache::remember('indicator_fibonacciretracement_30m_page2', 960, function (){
                return TaapiService::taapiRequest(2, "fibonacciretracement", "30m");
            });
            sleep(15);
        })->cron("*/16 * * * *")->name('30m')->withoutOverlapping();
        $schedule->call(function (){
            Cache::forget('indicator_supertrend_1h_page1');
            Cache::remember('indicator_supertrend_1h_page1', 1920, function (){
                return TaapiService::taapiRequest(1, "supertrend", "1h");
            });
            sleep(15);
            Cache::forget('indicator_supertrend_1h_page2');
            Cache::remember('indicator_supertrend_1h_page2', 1920, function (){
                return TaapiService::taapiRequest(2, "supertrend", "1h");
            });

            sleep(15);

            Cache::forget('indicator_fibonacciretracement_1h_page1');
            Cache::remember('indicator_fibonacciretracement_1h_page1', 1920, function (){
                return TaapiService::taapiRequest(1, "fibonacciretracement", "1h");
            });
            sleep(15);
            Cache::forget('indicator_fibonacciretracement_1h_page2');
            Cache::remember('indicator_fibonacciretracement_1h_page2', 1920, function (){
                return TaapiService::taapiRequest(2, "fibonacciretracement", "1h");
            });
            sleep(15);
        })->cron("*/32 * * * *")->name('1h')->withoutOverlapping();
        $schedule->call(function (){
            Cache::forget('indicator_supertrend_4h_page1');
            Cache::remember('indicator_supertrend_4h_page1', 3840, function (){
                return TaapiService::taapiRequest(1, "supertrend", "4h");
            });
            sleep(15);
            Cache::forget('indicator_supertrend_4h_page2');
            Cache::remember('indicator_supertrend_4h_page2', 3840, function (){
                return TaapiService::taapiRequest(2, "supertrend", "4h");
            });

            sleep(15);

            Cache::forget('indicator_fibonacciretracement_4h_page1');
            Cache::remember('indicator_fibonacciretracement_4h_page1', 3840, function (){
                return TaapiService::taapiRequest(1, "fibonacciretracement", "4h");
            });
            sleep(15);
            Cache::forget('indicator_fibonacciretracement_4h_page2');
            Cache::remember('indicator_fibonacciretracement_4h_page2', 3840, function (){
                return TaapiService::taapiRequest(2, "fibonacciretracement", "4h");
            });
            sleep(15);
        })->cron("*/4 */1 * * *")->name('4h')->withoutOverlapping();
        $schedule->call(function (){
            Cache::forget('indicator_supertrend_1d_page1');
            Cache::remember('indicator_supertrend_1d_page1', 7680, function (){
                return TaapiService::taapiRequest(1, "supertrend", "1d");
            });
            sleep(15);
            Cache::forget('indicator_supertrend_1d_page2');
            Cache::remember('indicator_supertrend_1d_page2', 7680, function (){
                return TaapiService::taapiRequest(2, "supertrend", "1d");
            });

            sleep(15);

            Cache::forget('indicator_fibonacciretracement_1d_page1');
            Cache::remember('indicator_fibonacciretracement_1d_page1', 7680, function (){
                return TaapiService::taapiRequest(1, "fibonacciretracement", "1d");
            });
            sleep(15);
            Cache::forget('indicator_fibonacciretracement_1d_page2');
            Cache::remember('indicator_fibonacciretracement_1d_page2', 7680, function (){
                return TaapiService::taapiRequest(2, "fibonacciretracement", "1d");
            });
            sleep(15);
        })->cron("*/8 */2 * * *")->name('1d')->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
