<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CompileReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reportId;

    protected $type;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reportId,$type)
    {
        $this->reportId =  $reportId;
        $this->type =   $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump(sprintf('compile with report %s within the job %s class',$this->type,$this->reportId));

        if(true)
            {
                dispatch(new DoSomeThingElse);
            }

    }
}
