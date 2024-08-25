@props(['componentsJson' => '[]'])

@php
    $components = json_decode($componentsJson, true);
@endphp

<div class="bg-white shadow-lg mx-auto mt-10 p-6 relative {{ empty($components) ? 'border-2 border-dashed border-gray-300' : '' }}" style="width: 210mm; height: 297mm;">
    @if(empty($components))
        <div class="absolute inset-0 flex items-center justify-center text-gray-400">
            <p>Drag and drop your components here</p>
        </div>
    @else
        <div class="h-full">
            @foreach($components as $component)
                <div class="mb-4">
                    <p>{{ $component['type'] }}: {{ $component['content'] }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
