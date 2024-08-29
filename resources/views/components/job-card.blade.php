<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Title</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-500">Job Title</h3>
        <p class="text-sm mt-4">Salary</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">FrontEnd</x-tag>
            <x-tag size="small">BackEnd</x-tag>
            <x-tag size="small">Ui/Ux</x-tag>
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>
