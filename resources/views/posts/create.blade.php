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
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="title" placeholder="Title"/>
                                <p class="help-block text-danger"></p>
                            </div>
{{--                            <div class="control-group">--}}
{{--                                <input type="file" class="form-control p-4" id="photo" placeholder="Photo"/>--}}
{{--                                <p class="help-block text-danger"></p>--}}
{{--                            </div>--}}
                            <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short_content"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" name="contents" placeholder="Content"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact End -->

</x-layouts.main>
