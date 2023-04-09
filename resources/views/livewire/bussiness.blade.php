<section style="padding: 20px 1px">
              <div class="row justify-content-center form-business">
                <!-- col -->
                <div class="col-lg-7 col-md-8">
                    <div class="single-booking">
                        <h3>Shpping Information</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Reserve Place</label>
                                        <select id="slelectID" wire:model="place" class="form-control">
                                            <option selected >Select</option>
                                            <option value="1">From the place</option>

                                        </select>
                                    </p>
                                           @error('place')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Branch name</label>
                                        <select wire:model="branch" class="form-control">
                                            <option selected >Select</option>
                                            @foreach ( $branches as $branche )
                                            <option value="{{ $branche->id }}">{{ $branche->name }}</option>

                                            @endforeach

                                        </select>

                                    </p>
                                           @error('branch')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label>Address</label>
                                        <input type="text" wire:model="Address"/>
                                    </p>
                                           @error('Address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <label>start data</label>
                                        <input type="datetime-local" wire:model="start_date" />
                                    </p>
                                    @error('Birthday')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <p>
                                        <label>Expiry_Date </label>
                                        <input type="datetime-local" wire:model="Expiry_Date" />
                                    </p>
                                    @error('Birthday')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>



                        </form>
                    </div>

                  <button type="button" class="next elgazal-theme-btn" wire:click='secondSubmit'>Next</button>

                    <!-- /NEXT BUTTON-->
                </div>
                <!-- /col -->
            </div>
</section>
