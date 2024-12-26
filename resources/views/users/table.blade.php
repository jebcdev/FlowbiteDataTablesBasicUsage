<div class="relative overflow-x-auto">
    <table 
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
        id="default-table"
    >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-2 py-1">
                    ID
                </th>
                <th scope="col" class="px-2 py-1">
                    Name
                </th>
                <th scope="col" class="px-2 py-1">
                    Email
                </th>
                <th scope="col" class="px-2 py-1">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user?->id }}
                    </th>
                    <td class="px-2 py-1">
                        {{ $user?->name }}
                    </td>
                    <td class="px-2 py-1">
                        {{ $user?->email }}
                    </td>
                    <td class="px-2 py-1">
                        <x-secondary-a href="#">
                            Edit
                        </x-secondary-a>
                        <x-secondary-button class="px-2 py-1">Delete</x-secondary-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById("default-table") && typeof window.simpleDatatables !== 'undefined') {
            const dataTable = new window.simpleDatatables.DataTable("#default-table", {
                searchable: true,
                perPageSelect: false
            });
        }
    });
</script>
