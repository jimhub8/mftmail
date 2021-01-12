@component('mail::message')
# New Order

You have a new order for {{ $data['item'] }} DITOKI from

<ul class="list-group" style="display: flex;flex-direction: column;padding-left: 0;margin-bottom: 0;border-radius: .25rem;}">
    <li class="list-group-item" style="    position: relative;display: block;padding: .5rem 1rem;text-decoration: none;background-color: #fff;">Name: {{ $data['full_name'] }}</li>
    <li class="list-group-item" style="    position: relative;display: block;padding: .5rem 1rem;text-decoration: none;background-color: #fff;">Phone: {{ $data['phone'] }}</li>
    <li class="list-group-item" style="    position: relative;display: block;padding: .5rem 1rem;text-decoration: none;background-color: #fff;">City: {{ $data['city'] }}</li>
    <li class="list-group-item" style="    position: relative;display: block;padding: .5rem 1rem;text-decoration: none;background-color: #fff;">Address: {{ $data['address'] }}</li>
    {{-- <li class="list-group-item">Vestibulum at eros</li> --}}
  </ul>

  <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
