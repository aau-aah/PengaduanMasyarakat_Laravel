<x-app-layout>
    @foreach ($chats as $chat)
        {{ $chat->content_chat }}
    @endforeach


</x-app-layout>
