
<x-app-layout>
<form action="{{route('account.delete')}}" method="post">
@csrf
<button type="submit">Delete</button>


</form>
</x-app-layout>

