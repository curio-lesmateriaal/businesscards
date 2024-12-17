<div>
    <div class="flex">
        <ul class="menu bg-base-200 rounded-box w-1/4">
            <li>
              <a wire:click="show('dashboard')">
                <i class="bi bi-house-door-fill"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a wire:click="show('contactpersons')">
                <i class="bi bi-person-vcard-fill"></i>
                Contact Persons
              </a>
            </li>

          </ul>

          <div class="main ml-10 w-3/4">
            @if($active == 'dashboard')
                {{ $active }}
            @elseif ($active == 'contactpersons')
            <div class="overflow-x-auto">
                <div class="flex justify-end">
                  <button wire:click="export" class="btn btn-success text-white">Export to Excel</button>
                </div>
                {{-- daisy ui button --}}
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>
                        <label>
                          <input type="checkbox" class="checkbox" />
                        </label>
                      </th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Website</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach($customers as $customer)
                    <tr>
                      <th>
                        <label>
                          <input type="checkbox" class="checkbox" />
                        </label>
                      </th>
                      <td>
                        <div class="flex items-center gap-3">
                          <div class="avatar">
                            <div class="mask mask-squircle h-12 w-12">
                              <img
                                src="https://img.daisyui.com/images/profile/demo/4@94.webp"
                                alt="Avatar Tailwind CSS Component" />
                            </div>
                          </div>
                          <div>
                            <div class="font-bold">{{$customer->name }}</div>
                            <div class="text-sm opacity-50">{{ $customer->country }}</div>
                          </div>
                        </div>
                      </td>
                      <td>
                        {{$customer->email}}
                      </td>
                      <td>{{$customer->website}}</td>
                      <th>
                        <button onclick="my_modal_1.showModal()" class="btn btn-ghost btn-xs">details</button>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                  <!-- foot -->

                </table>
                {{$customers->links()}}
              </div>
            @endif
          </div>
    </div>

    <dialog id="my_modal_1" class="modal ">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Details</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div>
            <label class="input input-bordered flex m-2 items-center gap-2">
                Name
                <input type="text" style="border: none"  class="grow"  />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Slogan
                <input type="text" style="border: none"  class="grow"  />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Email
                <input type="text" style="border: none"  class="grow"  />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Website
                <input type="text" style="border: none"  class="grow"  />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Adres
                <input type="text" style="border: none"  class="grow" />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Stad
                <input type="text" style="border: none"  class="grow"  />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Country
                <input type="text" style="border: none"  class="grow" />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Postcode
                <input type="text" style="border: none"  class="grow" />
            </label>

            <label class="input input-bordered flex m-2 items-center gap-2">
                Telefoon
                <input type="text" style="border: none"  class="grow" />
            </label>

            <button class="m-2 btn btn-primary">Aanpassen</button>

        </div>
        <div class="modal-action">
        <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
        </form>
        </div>
    </div>
    </dialog>
</div>
