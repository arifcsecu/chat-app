<div class="relative w-full flex flex-col h-full">
    <div class="flex text-sm border rounded-xl shadow overflow-hidden bg-white grow flex-1">
        <div class="w-2/12 border-r bg-gray-50">
            <div class="p-4 font-bold text-gray-700 border-b">Users</div>

            <div class="divide-y">
                @foreach ($users as $user)
                <div class="p-3 cursor-pointer hover:bg-blue-100 transition flex justify-between items-center">
                    <div>
                        <div class="text-gray-800">{{$user->name}}</div>
                        <div class="text-xs text-gray-500">{{ $user->email}}</div>
                    </div>
                    <div>
                        <flux:badge size="sm">3</flux:badge>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="w-8/12 flex flex-col">
            <div class="p-4 border-b bg-gray-50">
                <div class="text-lg font-semibold text-gray-800">Test user</div>
                <div class="text-xs text-gray-500">test@gmail.com</div>
            </div>

            <div class="flex-1 p-4 overflow-y-auto space-y-2 bg-gray-50">
                <div class="flex justify-end">
                    <div class="max-w-xs px-4 py-2 rounded-2xl shadow bg-blue-600 text-white">Hi, This is test.</div>
                </div>
            </div>

            <form class="p-4 border-t bg-white flex items-center gap-2">
                <input type="text" class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline"
                    placeholder="Type your message...">
                <button class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg">Send</button>
            </form>
        </div>

        <div class="w-2/12 bg-gray-50 border-l p-4">
            <div class="w-full flex justify-center mt-2">
                <div class="flex-col flex items-center gap-2">
                    <flux:avatar size="lg" src="https://unavatar.io/x/calebporzio" circle />
                    <flux:heading size="lg" class="font-semibold">Ariful Islam</flux:heading>
                </div>
            </div>
            
            <div class="mt-5">
                <flux:input label="Label" />
            </div>

            <div class="mt-3">
                @foreach(['To Followup', 'Deal Close'] as $labelUi)
                    <flux:badge color="lime">{{ $labelUi }}</flux:badge>
                @endforeach
            </div>

            <div class="mt-5">
                <flux:textarea label="Note" />
            </div>
        </div>
    </div>
</div>