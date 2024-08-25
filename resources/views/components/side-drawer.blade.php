<div class="fixed top-0 left-0 h-full w-68 bg-gray-100 shadow-lg p-4">
    <h2 class="text-xl font-bold mb-4">Components</h2>
    <div class="grid grid-cols-2 gap-4">
        <!-- Title Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'Title')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <h3 class="text-sm font-medium">Title</h3>
        </div>

        <!-- Paragraph Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'Paragraph')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5m14 8H5m14 8H5"></path>
            </svg>
            <h3 class="text-sm font-medium">Paragraph</h3>
        </div>

        <!-- Bullet Point List Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'BulletPointList')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 12h10M7 17h10M4 7h.01M4 12h.01M4 17h.01"></path>
            </svg>
            <h3 class="text-sm font-medium">Bullet Point List</h3>
        </div>

        <!-- Two Columns Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'TwoColumns')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 4H5v16h4m6-16h4v16h-4"></path>
            </svg>
            <h3 class="text-sm font-medium">Two Columns</h3>
        </div>

        <!-- Three Columns Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'ThreeColumns')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H5v16h3m8-16h3v16h-3m-4-16h-2v16h2"></path>
            </svg>
            <h3 class="text-sm font-medium">Three Columns</h3>
        </div>

        <!-- Four Columns Component -->
        <div  class="border-2 border-dashed border-gray-300 p-4 flex flex-col items-center text-center"
              draggable="true"
              @dragstart="event => event.dataTransfer.setData('component', 'FourColumns')">
            <svg class="w-8 h-8 mb-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4h2v16H7m6-16h-2v16h2m6-16h-2v16h2"></path>
            </svg>
            <h3 class="text-sm font-medium">Four Columns</h3>
        </div>
    </div>
</div>
