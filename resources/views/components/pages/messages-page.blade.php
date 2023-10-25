<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- phospor icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    @vite('resources/css/app.css')
    <title>Messages</title>
</head>

<body>
    <div class="flex w-full min-h-screen">
        {{-- section 1 - conversations --}}
        <div class="flex flex-col w-full max-w-[320px] border-r border-gray-300">
            {{-- header --}}
            <div class="flex items-center justify-between p-4">
                <p class="font-bold text-2xl">Messages</p>
                {{-- avatar --}}
                <div class="aspect-square">
                    <img src="" alt="user image" class="rounded-full w-[36px] h-[36px] bg-gray-300">
                </div>
            </div>
            {{-- list --}}
            <ul class="flex flex-col gap-3 pb-4">
                {{-- convo item --}}
                <li class="flex gap-4 px-3 mx-2 py-2 rounded-lg hover:bg-gray-200 cursor-pointer">
                    <div class="aspect-square">
                        <img src="" alt="user image" class="rounded-full w-[42px] h-[42px] bg-gray-300">
                    </div>
                    <div class="flex flex-col">
                        <p class="font-semibold">User Name</p>
                        <p class="text-sm text-gray-500">subtitle</p>
                    </div>
                </li>
            </ul>
        </div>
        {{-- section 2 - chatbox --}}
        <div class="grid grid-cols-1 grid-rows-[auto_1fr_auto] w-full h-full min-h-screen bg-gray-700 ">
            {{-- header --}}
            <div class="flex items-center justify-between p-4 bg-white border-b border-gray-300">
                <div class="flex gap-4 items-center">
                    <div class="aspect-square">
                        <img src="" alt="user image" class="rounded-full w-[36px] h-[36px] bg-gray-300">
                    </div>
                    <p class="font-semibold">User Name</p>
                </div>
            </div>
            {{-- chat lists / bubbles --}}
            <ul class="flex flex-col gap-4 bg-white p-4">
                <li class="flex gap-4 max-w-[60%] self-end">
                    <div class="flex flex-col items-end gap-2">
                        <div class="rounded-lg bg-primary-500 text-white p-3">
                            <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure unde
                                nam
                                atque excepturi similique repellendus qui assumenda?</p>
                        </div>
                        <p class="text-xs text-gray-500">mm-dd-yyyy : hh:ss am</p>
                    </div>
                    <div class="aspect-square">
                        <img src="" alt="user image" class="rounded-full w-[42px] h-[42px] bg-gray-300">
                    </div>
                </li>
                <li class="flex flex-row-reverse gap-4 max-w-[60%]">
                    <div class="flex flex-col gap-2">
                        <div class="rounded-lg bg-gray-300 p-3">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure unde nam
                                atque excepturi similique repellendus qui assumenda?</p>
                        </div>
                        <p class="text-xs text-gray-500">mm-dd-yyyy : hh:ss am</p>
                    </div>
                    <div class="aspect-square">
                        <img src="" alt="user image" class="rounded-full w-[42px] h-[42px] bg-gray-300">
                    </div>
                </li>
            </ul>
            {{-- input --}}
            <div class="flex items-center gap-4 p-4 bg-white border-t border-gray-300">
                <textarea
                    class="px-4 py-2 rounded-lg border border-gray-300 max-h-[150px] overflow-y-auto w-full resize-none
                focus:outline-none"
                    placeholder="Enter message here" name="" id=""></textarea>
                <button class=""><i class="ph-fill ph-paper-plane-right text-primary-500 text-3xl "></i></button>
            </div>
        </div>
    </div>
</body>

</html>
