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
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <span class="text-md font-medium text-gray-900">Jane Cooper</span>
                                                <small class="text-sm text-gray-500 block">jane.cooper@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-xs font-bold inline-block py-1 px-2 rounded-lg text-white bg-blue-500 last:mr-0 mr-1">
                                            Super Administrator
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jane.cooper@example.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex flex-row gap-3">
                                        <a href="#" class="text-gray-400 hover:text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <div class="my-6 mx-auto w-8/12 h-4/5">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-3 border-b border-solid border-slate-200 rounded-t">
                    <span class="text-lg block">
                        Add User
                    </span>
                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-2 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!--body-->
                <div class="p-6 flex-auto">
                    <div class="grid grid-cols-1">
                        <div class="my-3 pt-0">
                            <input type="text" placeholder="Employee ID *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="my-3 pt-0">
                            <input type="text" placeholder="First Name *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                        <div class="my-3 pt-0">
                            <input type="text" placeholder="Last Name *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="my-3 pt-0">
                            <input type="email" placeholder="Email ID *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                        <div class="my-3 pt-0">
                            <input type="text" placeholder="Mobile No" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                        <div class="my-3 pt-0">
                            <select id="role" name="role" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                <option>Select Role type</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="my-3 pt-0">
                            <input type="text" placeholder="Username *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                        <div class="my-3 pt-0">
                            <input type="password" placeholder="Password *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                        <div class="my-3 pt-0">
                            <input type="password" placeholder="Confirm Password *" class="px-2 py-1 placeholder-gray-500 text-gray-500 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                        </div>
                    </div>
                </div>
                <div class="flex-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Module Permission</th>
                                <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Create</th>
                                <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Read</th>
                                <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Update</th>
                                <th scope="col" class="px-6 py-5 text-left text-sm font-bold text-gray-400 tracking-wider">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    Super Administrator
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button class="bg-blue-500 text-white active:bg-blue-600 font-bold text-sm px-2 py-1 rounded-lg shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                        Add User
                    </button>
                    <button class="text-gray-400 background-transparent font-bold px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
</x-app-layout>