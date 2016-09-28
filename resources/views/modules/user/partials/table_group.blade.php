<table class="table table-striped table-bordered table-hover dt-responsive table-light" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr class="uppercase">

        <th > Nombre </th>
        <th> Descripción </th>
    </tr>
    </thead>
    @foreach($userGroups as $userGroup)
        <tr>
            <td >
                <img  class="user-pic rounded" src="{{ asset('img/group/'.$userGroup->group->avatar)}}" />

              {{ $userGroup->group->name }}
            </td>
            <td>
                {{ $userGroup->group->description }}
            </td>
        </tr>
    @endforeach
</table>