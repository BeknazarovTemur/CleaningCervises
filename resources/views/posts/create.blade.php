<x-layouts.main>

    <x-slot:title>
        Create Posts
    </x-slot:title>

    <x-header>
        Create Posts
    </x-header>

    <!-- Contact Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group mb-4">
                                <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="Title"/>
                                @error('title')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>category</label>
                            <div class="control-group mb-4">
                                <select name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>tags</label>
                            <div class="control-group mb-4">
                                <select name="tags[]" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group mb-4">
                                <input name="photo" type="file" class="form-control p-4" id="photo" placeholder="Photo"/>
                                @error('photo')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short-content">{{ old('short_content') }}</textarea>
                                @error('short_content')
                                    <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="6" name="contents" placeholder="Content">{{ old('contents') }}</textarea>
                                @error('contents')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact End -->

</x-layouts.main>
