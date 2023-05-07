@extends('layouts.app')

@section('content')
    <form action="{{ route('admin-back') }}" method="GET">
        <button type="submit" class="btn btn-primary file-btn p-2 text-dark border-dark">GO BACK</button>
    </form>
    <div class="container mt-5">
        <h1 class="text-white mb-3">Pick a picture</h1>

        <!-- Drop files -->
        <form action="{{ route('admin-save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
            <div class="rounded-5 border border-secondary p-3 text-center" style="background: #ABABAB; border-radius: 15px">
                <div class="mb-5">
                    <i class="fas fa-image fa-5x"></i>
                </div>
                <p class="text-box mb-0">Upload one image here<br>or</p>

                <div class="mb-5">
                    <label for="imageUpload" class="btn btn-primary file-btn p-2 text-dark border-dark">Select file</label>
                    <input type="file" name="image" id="imageUpload" hidden>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control fluid-right" id="inputName">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Pricetag</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control fluid-right" id="inputSurname">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control fluid-right" id="inputSurname">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" class="form-control fluid-right" id="inputSurname">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">More Info</label>
                        <div class="col-sm-10">
                            <input type="text" name="more_info" class="form-control fluid-right" id="inputSurname">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                        <label for="inputName" class="text-white col-sm-2 col-form-label h-4">System Requirements</label>
                        <div class="col-sm-10">
                            <input type="text" name="system_requirements" class="form-control fluid-right" id="inputSurname">
                        </div>
                        </div>
                    </div>

                    <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                        <div class="form-group row">
                            <label for="categorySelect" class="text-white col-sm-2 col-form-label h-4">Categories/Filters</label>
                            <div class="col-sm-10">
                                <button class="btn nav-filter btn-secondary dropdown-toggle" type="button" id="filterButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter
                                </button>
                                <div class="dropdown-menu drop-filter" aria-labelledby="filterButton">
                                    <h6 class="dropdown-header">Devs</h6>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="devs" value="activision" id="activisionCheck">
                                        <label class="form-check-label text-label" for="activisionCheck">Activision</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="devs" value="blizzard" id="blizzardCheck">
                                        <label class="form-check-label text-label" for="blizzardCheck">Blizzard</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="devs" value="nintendo" id="nintendoCheck">
                                        <label class="form-check-label text-label" for="nintendoCheck">Nintendo</label>
                                    </div>
                                    <div class="dropdown-divider drop-filter"></div>
                                    <h6 class="dropdown-header">Genres</h6>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="genre" value="rpg" id="rpgCheck">
                                        <label class="form-check-label text-label" for="rpgCheck">RPG</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="genre" value="moba" id="mobaCheck">
                                        <label class="form-check-label text-label" for="mobaCheck">MOBA</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="genre" value="fps" id="fpsCheck">
                                        <label class="form-check-label text-label" for="fpsCheck">FPS</label>
                                    </div>
                                    <div class="dropdown-divider drop-filter"></div>
                                    <h6 class="dropdown-header">Platform</h6>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="platform" value="playstation" id="playstationCheck">
                                        <label class="form-check-label text-label" for="playstationCheck">Playstation</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="platform" value="nintendo" id="nintendoCheck">
                                        <label class="form-check-label text-label" for="nintendoCheck">Nintendo</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="platform" value="xbox" id="xboxCheck">
                                        <label class="form-check-label text-label" for="xboxCheck">XBOX</label>
                                    </div>
                                    <div class="dropdown-divider drop-filter"></div>
                                    <h6 class="dropdown-header">Other</h6>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="new" value="new" id="newCheck">
                                        <label class="form-check-label text-label" for="newCheck">New</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input drop-filter-item" type="checkbox" name="pop" value="popular" id="popCheck">
                                        <label class="form-check-label text-label" for="popCheck">Popular</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary file-btn p-2 text-dark border-dark">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection