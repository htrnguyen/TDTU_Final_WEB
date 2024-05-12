@props(['customer'])
<tr>
    <td>
        <div class="lc-customer">
            <img src="{{ asset('images/avatar.jpg') }}" alt="Customer Avatar">
            <div class="lc-name-description">
                <h3>{{ $customer->first_name . $customer->last_name }}</h3>
                <p>{{ $customer->username }}</p>
            </div>
        </div>
    </td>
    <td>
        <div class="lc-category">
            <p>{{ $customer->address }}</p>
            <p>{{ $customer->phone_number }}</p>
            <p>{{ $customer->email }}</p>
            </div>
    </td>
    <td>
        <p>{{ $customer->created_at }}</p>
    </td>
    <td>
        <p>{{ $customer->status }}</p>
    </td>
    <td>
        <button type="button" class="remove">Block</button>
    </td>
</tr>