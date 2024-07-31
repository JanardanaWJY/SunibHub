<h1>Create your thread!</h1>
<form method="POST" action="{{route('threads.store')}}">
    @csrf
    <label for="title">Thread Title:</label><br>
    <input type="text" name="title" id="title" placeholder="Title.."><br><br>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="What are you thinking about?"></textarea><br><br>
    <button type="submit">Create Thread!</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('home')

