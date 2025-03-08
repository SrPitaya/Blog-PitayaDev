<div>
    <label for="title">{{__('Title')}}:</label>
    <input type="text" id="title" name="title" value="{{old('title', $post->title)}}">
    @error('title')
        <small style="color:crimson">{{$message}}</small>
    @enderror
</div>
<br />
<div>
    <label for="body">{{__('Body')}}:</label>
    <textarea id="body" name="body" >{{old('body', $post -> body)}}</textarea>
    @error('body')
        <small style="color:crimson">{{$message}}</small>
    @enderror
</div>
<br />