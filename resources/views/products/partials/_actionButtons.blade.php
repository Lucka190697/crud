<td>
	<a class="btn btn-outline-primary" href="{{ route('products.show', $item->id) }}">
		Ver Detalhes
	</a>
	<a class="btn btn-outline-success" href="{{ route('products.edit', $item->id) }}">
		Editar
	</a>
	<a class="btn btn-outline-danger" href="{{ route('products.destroy', $item->id) }}">
		Excluir
	</a>
</td>
