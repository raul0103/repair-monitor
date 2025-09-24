 <div class="bg-white shadow rounded-lg overflow-hidden" style=" max-width: 600px; ">
     <table class="w-full divide-y divide-gray-200">
         <thead class="bg-gray-50">
             <tr>
                 <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">ID</th>
                 <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Название</th>
                 <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Описание</th>
                 <th
                     class="px-4 py-2 text-left text-sm font-semibold text-gray-600 cursor-pointer select-none"
                     wire:click="sortBy('status')">
                     Статус
                     @if($sortField === 'status')
                     <span class="ml-1 text-xs">
                         @if($sortDirection === 'asc') ↑ @else ↓ @endif
                     </span>
                     @endif
                 </th>
                 <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Приоритет</th>
             </tr>
         </thead>
         <tbody class="divide-y divide-gray-200 bg-white">
             @foreach($requests as $request)
             <tr class="hover:bg-gray-50">
                 <td class="px-4 py-2 text-sm text-gray-700">{{ $request->id }}</td>
                 <td class="px-4 py-2 text-sm text-gray-700">{{ $request->title }}</td>
                 <td class="px-4 py-2 text-sm text-gray-700">{{ $request->description }}</td>
                 <td class="px-4 py-2 text-sm font-medium">
                     <span class="px-2 py-1 rounded-full text-xs
                            @if($request->status === 'new') bg-blue-100 text-blue-800
                            @elseif($request->status === 'in_progress') bg-yellow-100 text-yellow-800
                            @elseif($request->status === 'done') bg-green-100 text-green-800
                            @else bg-gray-100 text-gray-600 @endif">
                         {{ \App\Models\Request::STATUSES[$request->status] ?? $request->status }}
                     </span>
                 </td>
                 <td class="px-4 py-2 text-sm font-medium">
                     <span class="px-2 py-1 rounded-full text-xs
                            @if($request->priority === 'low') bg-gray-100 text-gray-600
                            @elseif($request->priority === 'medium') bg-orange-100 text-orange-800
                            @elseif($request->priority === 'high') bg-red-100 text-red-800
                            @else bg-gray-100 text-gray-600 @endif">
                         {{ \App\Models\Request::PRIORITIES[$request->priority] ?? $request->priority }}
                     </span>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>

     <div class="px-4 py-3 border-t bg-gray-50">
         {{ $requests->links() }}
     </div>
 </div>