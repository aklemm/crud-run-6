<table>
    <tr>
        <th>
            Name
        </th>
        <th>
            Description
        </th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>
                {{ $item->name }}
            </td>
            <td>
                {{ $item->description }}
            </td>
            <td>
                {{ $item->ownerName->name }}
            </td>
        </tr>
    @endforeach
</table>
