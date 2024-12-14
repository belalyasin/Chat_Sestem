<template>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Chat
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Start New Chat</button>
            <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="users" class="w-4 h-4 mr-2"></i> Create Group </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                            <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Chat Side Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <div class="chat__tabs nav-tabs justify-center flex"> <a data-toggle="tab" data-target="#chats"
                            href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Chats</a> <a
                            data-toggle="tab" data-target="#friends" href="javascript:;"
                            class="flex-1 py-2 rounded-md text-center">Friends</a> <a data-toggle="tab"
                            data-target="#profile" href="javascript:;"
                            class="flex-1 py-2 rounded-md text-center">Profile</a> </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-content__pane active" id="chats">
                    <div class="pr-1">
                        <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">
                            <div class="relative text-gray-700">
                                <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Search for messages or users...">
                                <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0"
                                    data-feather="search"></i>
                            </div>
                            <div class="overflow-x-auto scrollbar-hidden">
                                <div class="flex mt-5">
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-11.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Al Pacino</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-10.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Denzel Washington
                                        </div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-10.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Brad Pitt</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-1.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">John Travolta</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-6.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Johnny Depp</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-2.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Morgan Freeman
                                        </div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-3.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Angelina Jolie
                                        </div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-7.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Kevin Spacey</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-1.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Edward Norton</div>
                                    </a>
                                    <a href="" class="w-10 mr-4 cursor-pointer">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                                src="dist/images/profile-11.jpg">
                                            <div
                                                class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                            </div>
                                        </div>
                                        <div class="text-xs text-gray-600 truncate text-center mt-2">Kevin Spacey</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">
                        <div class="pb-5" v-for="conversation in conversations" :key="conversation"
                            @click="activateConversation(conversation)">
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 ">
                                <div class="w-12 h-12 flex-none image-fit mr-1 rounded-full"
                                    style="background-color:#ffdada;display: flex;justify-content: center;align-items: center; ">
                                    <!-- <img :alt="conversation.name.slice(0, 2).toUpperCase()" class="rounded-full" src="dist/images/profile-11.jpg"> -->
                                    <span class="rounded-full font-bold">{{ conversation.name.slice(0, 2).toUpperCase()
                                        }}</span>
                                    <div
                                        class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                    </div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <!-- <Link :href="route('pages.show', conversation)" class="font-medium">{{ conversation.name !== -->
                                        <Link class="font-medium">
                                        {{
                                            conversation.name !==
                                                '' ?
                                                conversation.name : conversation.users.map(user => user.name).join(', ')
                                        }}
                                        </Link>
                                        <div class="text-xs text-gray-500 ml-auto">{{
                                            formatDate(conversation.first_message_date) }}</div>
                                    </div>
                                    <div v-if="conversation.messages.length > 0" class="w-full truncate text-gray-600"
                                        :title="conversation.messages[0].body">
                                        {{ conversation.user_name }}: {{ conversation.messages[0].body }}
                                        <!-- There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi -->
                                    </div>
                                    <div v-else>No messages available.</div>
                                </div>
                                <div
                                    class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">
                                    {{ conversation.unread_count }}
                                </div>
                            </div>
                        </div>
                        <!-- <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Denzel Washington</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">6</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">John Travolta</a>
                                <div class="text-xs text-gray-500 ml-auto">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">2</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Johnny Depp</a>
                                <div class="text-xs text-gray-500 ml-auto">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">7</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Morgan Freeman</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">2</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Angelina Jolie</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">6</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Kevin Spacey</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Edward Norton</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                        <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-theme-1 font-medium -mt-1 -mr-1">6</div>
                    </div>
                    <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium">Kevin Spacey</a>
                                <div class="text-xs text-gray-500 ml-auto">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="tab-content__pane" id="friends">
                    <div class="pr-1">
                        <div class="box p-5 mt-5">
                            <div class="relative text-gray-700">
                                <input type="text" class="input input--lg w-full bg-gray-200 pr-10 placeholder-theme-13"
                                    placeholder="Search for messages or users...">
                                <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0"
                                    data-feather="search"></i>
                            </div>
                            <button type="button" class="button w-full bg-theme-1 text-white mt-3">Invite
                                Friends</button>
                        </div>
                    </div>
                    <div class="chat__user-list overflow-y-auto scrollbar-hidden pr-1 pt-1">
                        <div class="mt-4 text-gray-600">A</div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-11.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center"> <a href="" class="font-medium">Al Pacino</a> </div>
                                <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i
                                        data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center"> <a href="" class="font-medium">Denzel Washington</a>
                                </div>
                                <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i
                                        data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-gray-600">B</div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center"> <a href="" class="font-medium">Brad Pitt</a> </div>
                                <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i
                                        data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-1.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center"> <a href="" class="font-medium">John Travolta</a> </div>
                                <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i
                                        data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-6.jpg">
                                <div
                                    class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center"> <a href="" class="font-medium">Johnny Depp</a> </div>
                                <div class="w-full truncate text-gray-600">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown relative ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i
                                        data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                                <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                    <div class="dropdown-box__content box p-2">
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact </a>
                                        <a href=""
                                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content__pane" id="profile">
                    <div class="pr-1">
                        <div class="box px-5 py-10 mt-5">
                            <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                            </div>
                            <div class="text-center mt-3">
                                <div class="font-medium text-lg">Al Pacino</div>
                                <div class="text-gray-600 mt-1">Tailwind HTML Admin Template</div>
                            </div>
                        </div>
                        <div class="box p-5 mt-5">
                            <div class="flex items-center border-b pb-5">
                                <div class="">
                                    <div class="text-gray-600">Country</div>
                                    <div>New York City, USA</div>
                                </div>
                                <i data-feather="globe" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div class="">
                                    <div class="text-gray-600">Phone</div>
                                    <div>+32 19 23 62 24 34</div>
                                </div>
                                <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div class="">
                                    <div class="text-gray-600">Email</div>
                                    <div>al pacino</div>
                                </div>
                                <i data-feather="mail" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center pt-5">
                                <div class="">
                                    <div class="text-gray-600">Joined Date</div>
                                    <div>20 August 2022</div>
                                </div>
                                <i data-feather="clock" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Chat Side Menu -->
        <!-- BEGIN: Chat Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-9">
            <div class="chat__box box">
                <!-- BEGIN: Chat Active -->
                <!-- <slot /> -->
                <!-- <div v-if="conversation"> -->
                <div v-if="activeConversation">
                    <!-- {{ console.log(this.conversation) }} -->
                    <!-- {{ console.log(this.conversationData) }} -->
                    <show-conversation :key="conversationData.id" :conversation="conversationData" />
                </div>
                <!-- END: Chat Active -->
                <!-- BEGIN: Chat Default -->
                <!-- <div class="h-full flex items-center"> -->
                <div v-else class="h-full flex items-center">
                    <div class="mx-auto text-center">
                        <div class="w-16 h-16 flex-none image-fit rounded-full overflow-hidden mx-auto">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                        </div>
                        <div class="mt-3">
                            <div class="font-medium">Hey, Al Pacino!</div>
                            <div class="text-gray-600 mt-1">Please select a chat to start messaging.</div>
                        </div>
                    </div>
                </div>
                <!-- END: Chat Default -->
            </div>
        </div>
        <!-- END: Chat Content -->
    </div>
</template>

<script>
import { format } from 'date-fns';
import { Link } from '@inertiajs/vue3';
import ShowConversation from '../Conversations/ShowConversation.vue';
export default {
    components: {
        Link,
        ShowConversation
    },
    props: {
        conversations: Object,
        // conversation: Object
    },
    data() {
        return {
            activeConversation: false,
            conversationData: {}
        }
    },
    methods: {
        // Format the date using JavaScript
        formatDate(date) {
            return date ? format(new Date(date), 'dd MMM') : '';
        },
        activateConversation(c) {
            this.activeConversation = true;
            //this.activeConversation = !this.activeConversation;
            // this.conversation = c;
            this.conversationData = c;
            console.log('Activated conversation:', c);
        }
    }
}
</script>
