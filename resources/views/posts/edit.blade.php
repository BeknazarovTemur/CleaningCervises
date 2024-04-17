<x-layouts.main xmlns:x-slot="http://www.w3.org/1999/xlink">

    <x-slot:title>
        Editing post #{{ $post->id }}
    </x-slot:title>

    <x-header>
        Editing post #{{ $post->id }}
    </x-header>

    <!-- Contact Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{ route('posts.update', ['post'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="title" value="{{ $post->title }}" placeholder="Title"/>
                            @error('title')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input name="photo" type="file" class="form-control p-4" placeholder="Photo"/>
                            @error('photo')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short-content">{{ $post->short_content }}</textarea>
                            @error('short_content')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="contents" placeholder="Content">{{ $post->contents }}</textarea>
                            @error('contents')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex">
                            <button class="btn btn-success py-3 px-5" type="submit">Save</button>
                            <a href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-danger py-3 px-5" type="submit">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</x-layouts.main>
