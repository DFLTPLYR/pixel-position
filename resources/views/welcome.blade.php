<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading class='bg-violet-600'>Feature Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading class='bg-white'>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading class='bg-white'>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>
