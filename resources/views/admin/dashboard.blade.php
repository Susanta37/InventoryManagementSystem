<x-app-layout>
    <x-slot name="header">
        <h2 class=" text-gray-800 dark:text-gray-200 leading-tight flex justify-between">
           <div class="font-semibold text-xl"> {{ __('Book Management System') }}</div>
          <div> Welcome Back ! {{ Auth::user()->name }}</div>
        </h2>
    </x-slot>

    <div x-data="{ selectedItem: 'Dashboard', isOpen: false }" class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="hide-scrollbar navigation w-full lg:w-[20%] bg-white dark:bg-gray-900 p-6 border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-700 overflow-y-auto max-h-screen ">
            <button @click="isOpen = !isOpen" class="lg:hidden text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-400 focus:outline-none focus:text-gray-700 dark:focus:text-gray-400">
                <ion-icon :name="isOpen ? 'close' : 'menu'"></ion-icon>
            </button>
            <ul :class="{'block': isOpen, 'hidden': !isOpen}" class="lg:block space-y-4">
                <li>
                    <a href="#" @click="selectedItem = 'Dashboard'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Dashboard'}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click="selectedItem = 'Inventory'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Inventory'}">
                        <span class="icon">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </span>
                        <span class="title">Inventory</span>
                    </a>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Books</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'View Books'" class="block text-gray-600 dark:text-gray-400">View Books</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Add Book'" class="block text-gray-600 dark:text-gray-400">Add Book</a>
                        </li>
                    </ul>
                </li>
               
               
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'View Users'" class="block text-gray-600 dark:text-gray-400">View Users</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Add User'" class="block text-gray-600 dark:text-gray-400">Add User</a>
                        </li>
                       
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="school-outline"></ion-icon>
                        </span>
                        <span class="title">ALC</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'View Classrooms'" class="block text-gray-600 dark:text-gray-400">View Classrooms</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Add Classroom'" class="block text-gray-600 dark:text-gray-400">Add Classroom</a>
                        </li>
                        
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">District LC</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'Inventory Report'" class="block text-gray-600 dark:text-gray-400">Inventory Report</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Assignment Report'" class="block text-gray-600 dark:text-gray-400">Assignment Report</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Status Report'" class="block text-gray-600 dark:text-gray-400">Status Report</a>
                        </li>
                    </ul>
                </li>
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="hourglass-outline"></ion-icon>
                        </span>
                        <span class="title">Assignments</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'View Assignments'" class="block text-gray-600 dark:text-gray-400">View Assignments</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Assign Book'" class="block text-gray-600 dark:text-gray-400">Assign Book</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 w-full">
                        <span class="icon">
                            <ion-icon name="document-outline"></ion-icon>
                        </span>
                        <span class="title">Reports</span>
                        <span>
                            <ion-icon :name="open ? 'chevron-up-outline' : 'chevron-down-outline'"></ion-icon>
                        </span>
                    </button>
                    <ul x-show="open" x-transition class="mt-2 space-y-2 pl-4">
                        <li>
                            <a href="#" @click="selectedItem = 'Inventory Report'" class="block text-gray-600 dark:text-gray-400">Inventory Report</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Assignment Report'" class="block text-gray-600 dark:text-gray-400">Assignment Report</a>
                        </li>
                        <li>
                            <a href="#" @click="selectedItem = 'Status Report'" class="block text-gray-600 dark:text-gray-400">Status Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" @click="selectedItem = 'Messages'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Messages'}">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click="selectedItem = 'Help'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Help'}">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click="selectedItem = 'Settings'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Settings'}">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Profile</span>
                    </a>
                </li>
               
                <!-- <li>
                    <a href="#" @click="selectedItem = 'Accounts'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Accounts'}">
                        <span class="icon">
                            <ion-icon name="wallet-outline"></ion-icon>
                        </span>
                        <span class="title">Accounts</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="#" @click="selectedItem = 'Email Send'" class="flex items-center justify-start gap-4 text-gray-700 dark:text-gray-300 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700"
                        :class="{'bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200': selectedItem === 'Email Send'}">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Email Send</span>
                    </a>
                </li> -->
                <li>
                <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-start gap-4 p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                        @csrf
                        <button type="submit" class="flex items-center gap-4 text-gray-700 dark:text-gray-300 w-full">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-4/5 pt-4  ">
            <div class="max-w-7xl mx-auto  sm:px-6 ">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <!-- <div class="flex items-center mb-6"> -->
                            <!-- Profile Photo -->
                            <!-- <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="Profile Photo" class="h-16 w-16 rounded-full object-cover mr-4">
                            <div>
                                <div class="text-lg font-semibold">{{ Auth::user()->name }}</div>
                                <div>{{ Auth::user()->email }}</div>
                                <div>{{ Auth::user()->phone }}</div>
                            </div>
                        </div> -->
                        <!-- Display Selected Item -->
                        <!-- <div class="text-xl font-semibold">
                            <h1 x-text="selectedItem"></h1>
                            
                        </div>
                        --> 
                        <div class="text-xl font-semibold pb-6">
                            <h1 x-text="selectedItem"></h1>
                        </div> 
                        <div x-show="selectedItem === 'Dashboard'" x-cloak>
                @include('admin.exampleDash')
            </div>
                        <div x-show="selectedItem === 'Users'" x-cloak>
                @include('admin.addUser')
            </div>
            <div x-show="selectedItem === 'Settings'" x-cloak>
                @include('admin.profile-settings')
            </div>
                       
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
