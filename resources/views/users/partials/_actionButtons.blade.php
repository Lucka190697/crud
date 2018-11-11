<td>
	<a class="btn btn-outline-primary" href="{{ route('users.show', $item->id) }}">
		Ver Detalhes
	</a>
	<a class="btn btn-outline-success" href="{{ route('users.edit', $item->id) }}">
		Editar
	</a>
	<a class="btn btn-outline-danger" href="{{ route('users.destroy', $item->id) }}">
		Delete
	</a>
</td>
