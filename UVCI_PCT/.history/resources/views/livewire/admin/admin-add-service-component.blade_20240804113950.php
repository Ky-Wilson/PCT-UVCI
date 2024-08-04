<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Add Service</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Add Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                           <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        Add new Service
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.service_categories') }}" class="btn btn-info pull-right">All Categories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form class="form-horizontal" wire:submit.prevent="createNewCategory">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="control-label col-sm-3">Name: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Slug: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="slug" wire:model="slug"/>
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Tagline: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tagline" wire:model="slug"/>
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Service Category: </label>
                                        <div class="col-sm-9">
                                            <select name="" id="" class="form-control">
                                                <option value="">select service category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Price: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tagline" wire:model="slug"/>
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Discount: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tagline" wire:model="slug"/>
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Description: </label>
                                        <div class="col-sm-9">
                                            te
                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label col-sm-3">Image: </label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control-file" name="image" wire:model="image"/>
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            @if($image)
                                                <img src="{{ $image->temporaryUrl() }}" width="60" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="control-label col-sm-3">Thumbnail: </label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control-file" name="thumbnail" wire:model="image"/>
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            @if($image)
                                                <img src="{{ $image->temporaryUrl() }}" width="60" />
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="name" class="control-label col-sm-3">Image: </label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control-file" name="image" wire:model="image"/>
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            @if($image)
                                                <img src="{{ $image->temporaryUrl() }}" width="60" />
                                            @endif
                                        </div>
                                    </div> --}}
                                    <button type="submit" class="btn btn-success pull-right">Add category</button>
                                </form>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

