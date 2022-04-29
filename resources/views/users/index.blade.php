<x-app-layout>
    <div class="flex flex-col">
        <div class="flex justify-end">
            <button class="bg-green-700 text-white active:bg-green-900 font-bold text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                Add User
            </button>
        </div>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="fle flex-col">
                        <div class="flex justify-between items-center bg-white">
                            <h4 class="text-lg flex p-5 leading-7 text-gray-900">List Users</h4>
                            <div class="w-96 relative flex h-10">
                                <input type="text" name="account-number" id="account-number" class="focus:ring-blue-500 focus:border-blue-500 text-base w-full sm:text-sm border-gray-100" placeholder="Search...">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider"></th>
                                    <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Create Date</th>
                                    <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Role</th>
                                    <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $key => $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <span class="text-md font-medium text-gray-900">{{ $user->name }}</span>
                                                <small class="text-sm text-gray-500 block">{{ $user->email }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-xs font-bold inline-block py-1 px-2 rounded-lg text-white bg-blue-500 last:mr-0 mr-1">
                                            Super Administrator
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $user->created_at->toDateString() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $user->roles?->first()?->name ?? 'Not Assigned' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex flex-row gap-3">
                                        <a onclick="toggleModal('user-{{ $user->id }}')" class="text-gray-400 hover:text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        @include('users._partials.edit-modal')
                                        <a href="{{ route('users.delete', $user->id) }}" onClick="return confirm('Are you sure?')" class="text-gray-400 hover:text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="flex p-4 just-fy-between">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    @include('users._partials.create-modal')
</x-app-layout>