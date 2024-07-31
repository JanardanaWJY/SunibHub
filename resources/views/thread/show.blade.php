{{-- ini nanti buat display all available thread --}}
<h1>All Threads</h1>
@include('thread.create')
@foreach($threads as $thread)
    <div class="thread" style="border: 1px solid blue">
        <h5>{{$thread->user->name}}</h5>
        <h2>{{ $thread->title }}</h2>
        <p>{{ $thread->content }}</p>
        <!-- Display any other thread details you want -->
        <div class="reply">
            <h4>Replies</h4>
            @foreach ($thread->reply as $reply)
             <h6>{{$reply->user->name}}</h6>
             <p>{{$reply->content}}</p>
             <form action="{{route('replies.delete', ['thread' => $reply->thread_id, 'reply' => $reply->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Reply</button>
            </form>
            @endforeach
        </div>
        <form action="{{ route('replies.store', ['thread' => $thread->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="replyContent">Your Reply</label>
                <input name="content" id="replyContent" placeholder="write a reply...">
                <button type="submit" class="btn btn-primary">Submit Reply</button>
        </form>
        <form action="{{route('thread.delete', ['thread' => $thread->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Thread</button>
        </form>
    </div>
@endforeach
@include('home')
