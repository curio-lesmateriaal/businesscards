<div>
    <div class="flex">
        <ul class="menu bg-base-200 rounded-box w-56">
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

          <div class="main ml-20">
            {{ $active }}
          </div>
    </div>
</div>
