<x-layout>    
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12">
                <div class="my-4 font-weight-bold display-4">Contatore</div>
                <a href="{{route('articles')}}">articoli</a>
                    <livewire:counter />
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-12">
                    <div class="my-4 font-weight-bold display-4">Paginazione e ricerca per email verificata</div>
                    <livewire:paginate />
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-12">
                    <div class="my-4 font-weight-bold display-4">Paginazione e ricerca e ordinamento per nome email e id</div>
                    <livewire:search-dropdown />
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-12">
                    <livewire:comments />
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-12">
                    <livewire:tags-component />
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-12">
                    <form >
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> I have a bike</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> I have a car</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> I have a boat</label><br><br>
                        <input type="submit" value="Submit">
                      </form>
                </div>
            </div>
        </div>
</x-layout>           
       