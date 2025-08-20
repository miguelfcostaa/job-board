<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4" />
        
    <div class="mb-4 text-right">
        <x-link-button href="{{ route('my_job.create') }}">Add New Job</x-link-button>
    </div>

    @forelse($jobs as $job)
        <x-job-card :$job>
            <div class="text-xs text-slate-500 py-1">
                <div class="flex space-x-2 mb-4">
                    <x-link-button href="{{ route('my_job.edit', $job) }}">
                        Edit
                    </x-link-button>
                    @if($job->trashed())
                    <form method="POST" action="{{ route('my_job.restore', $job) }}">
                        @csrf
                        @method('PUT')
                        <x-button>Restore</x-button>
                    </form>
                    @else
                    <form method="POST" action="{{ route('my_job.destroy', $job) }}">
                        @csrf
                        @method('DELETE')
                        <x-button>Delete</x-button>
                    </form>
                    @endif
                </div>
                @if ($job->jobApplications->isNotEmpty())
                <div>
                    <h2 class="mb-4 text-lg font-medium">
                        Applications
                    </h2>
                </div>
                @endif
                @forelse ($job->jobApplications as $application)
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <div class="text-base">
                                {{ $application->user->name }}
                            </div>
                            <div class="mb-1">
                                Applied {{ $application->created_at->diffForHumans() }}
                            </div>
                            <div class="text-indigo-500 hover:underline cursor-pointer">
                                Download CV
                            </div>
                        </div>
                        <div>
                            Expected Salary:
                            {{ number_format($application->expected_salary) }}€
                        </div>
                    </div>
                @empty
                    <div>
                        No applications yet.
                    </div>
                @endforelse


            </div>
        </x-job-card>
    @empty 
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">
                No jobs yet.
            </div>            
            <div class="text-center">
                Post your first job 
                <a class="text-indigo-500 hover:underline" href="{{ route('my_job.create') }}">
                    here!
                </a>
            </div>
        </div> 
    @endforelse

</x-layout>