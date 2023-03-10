<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">

                        <img
                            alt="Eurofins"
                            class="block h-9 w-auto pt-2"
                            src="{{url('/images/logo.png')}}"
                        />
                    </a>
                </div>

                <!-- Navigation Links alert! -->
                <div class="hidden space-x-8 sm:mt-5 sm:ml-10 sm:flex">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-end px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ __('Equipment') }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Fieldwork') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('fieldassets') }}" :active="request()->routeIs('fieldassets')">
                                    {{ __('Assets') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('fieldequips') }}" :active="request()->routeIs('fieldequips')">
                                    {{ __('Equipment') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('fieldemodel') }}" :active="request()->routeIs('fieldemodel')">
                                    {{ __('Certified materials') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('chemical',['id'=>1]) }}" :active="request()->routeIs('chemical')">
                                    {{ __('Chemical Reagent') }}
                                </x-jet-dropdown-link>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Labs') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('labassets') }}" :active="request()->routeIs('labassets')">
                                    {{ __('Assets') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('labequips') }}" :active="request()->routeIs('labequips')">
                                    {{ __('Equipment') }}
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('labmodel') }}" :active="request()->routeIs('labmodel')">
                                    {{ __('Certified materials') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('chemical',['id'=>2] )}}" :active="request()->routeIs('chemical')">
                                    {{ __('Chemical Reagent') }}
                                </x-jet-dropdown-link>


                            </div>
                        </x-slot>

                    </x-jet-dropdown>
                    <div class="sm:py-1">
                        <x-jet-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-end px-4 py-0 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ __('Breakdowns') }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content" >
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Fieldwork') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('generalbreak',['id'=>1] ) }}" :active="request()->routeIs('generalbreak')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{  route('generalbreak',['id'=>2] )  }}" :active="request()->routeIs('dashboard')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{  route('generalbreak',['id'=>3] )  }}" :active="request()->routeIs('dashboard')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>



                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Labs') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{  route('generalbreak',['id'=>4] ) }}" :active="request()->routeIs('labassets')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('generalbreak',['id'=>5] )  }}" :active="request()->routeIs('labequips')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{  route('generalbreak',['id'=>6] )  }}" :active="request()->routeIs('labmodel')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>

                                </div>
                            </x-slot>

                        </x-jet-dropdown>
                    </div>
                    <div class="sm:py-1">
                        <x-jet-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-end px-4 py-0 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ __('Maintenance/Service') }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content" >
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Fieldwork') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>1] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>2] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>3] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>



                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Labs') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>4] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>5] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('calibrations',['id'=>6] ) }}" :active="request()->routeIs('calibrations')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>

                                </div>
                            </x-slot>

                        </x-jet-dropdown>
                    </div>


                    <div class="sm:py-1">
                        <x-jet-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-end px-4 py-0 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ __('Calibrations') }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content" >
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Fieldwork') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('services',['id'=>1] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('services',['id'=>2] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('services',['id'=>3] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>


                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Labs ') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('services',['id'=>4] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Assets') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('services',['id'=>5] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Equipment') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('services',['id'=>6] ) }}" :active="request()->routeIs('services')">
                                        {{ __('Certified materials') }}
                                    </x-jet-dropdown-link>

                                </div>
                            </x-slot>

                        </x-jet-dropdown>
                    </div>
                    <div class="sm:py-1">
                        <x-jet-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-end px-4 py-0 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ __('Individual') }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content" >
                                <div class="w-60">
                                    <!-- Team Management -->


                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                                        {{ __('Users') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('vendors') }}" :active="request()->routeIs('vendors')">
                                        {{ __('Vendors') }}
                                    </x-jet-dropdown-link>





                                </div>
                            </x-slot>

                        </x-jet-dropdown>
                    </div>
                </div>
            </div>


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                               @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
