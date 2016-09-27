<table class="table table-hover table-light">
    <thead>
    <tr class="uppercase">
        <th colspan="2"> Nombre </th>
        <th> Descripción </th>
        <th> Miembros </th>
        <th> % </th>
    </tr>
    </thead>
    @foreach($userGroups as $userGroup)
        <tr>
            <td class="fit">
                <img  class="user-pic rounded" src="{{ asset('img/group/'.$userGroup->group->avatar)}}" />
            </td>
            <td>
              {{ $userGroup->group->name }}
            </td>
            <td>
                {{ $userGroup->group->description }}
            </td>
            <td> 45 </td>
            <td>
                <span class="bold theme-font">80%</span>
            </td>
        </tr>
    @endforeach
</table>