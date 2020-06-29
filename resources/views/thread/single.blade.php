@extends('layouts.front')

@section('content')
    <h4>{{ $thread->subject }}</h4>
    <hr>

    <div class="thread-details">
        {!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
    </div>
    <br>

    @if(auth()->user()->id == $thread->user_id)
    <div class="actions">

        <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>

        {{--//delete form--}}
        <form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>
    </div>
    @endif

    {{--Amswers--}}

    <div class="comment-list">
        @foreach($thread->comments as $comment)
            <h4>{{ $comment->body }}</h4>
            <lead>{{ $comment->user->name }}</lead>

            <div class="actions">

{{--                <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}
                <a class="btn btn-primary" data-toggle="modal" href="{{  }}">Trigger Modal</a>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

                {{--//delete form--}}
                <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-xs btn-danger" type="submit" value="Delete">
                </form>

            </div>

        @endforeach
    </div>
    <br>
    <br>

    <div class="comment-form">
        <form action="{{ route('threadcomment.store', $thread->id) }}" method="post" role="form">
            {{ csrf_field() }}
            <legend>Create Comment</legend>
            <div class="from-group">
                <input type="text" class="form-control" name="body" id="" placeholder="Input...">
            </div>

            <button type="submit" class="btn btn-primary">Comment</button>

        </form>
    </div>

@endsection
