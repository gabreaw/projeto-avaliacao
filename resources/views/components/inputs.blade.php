<tr>
    <td>
        <button type="button" class="" data-toggle="tooltip" data-placement="top" title="{{ $tooltips }}">
            {{ $title }}
        </button>
    </td>
    <td><input type="number" class="form-control" name="{{ $name }}" id="{{ $idNota }}" placeholder="0 - 100" min="0"
               max="100" >
    </td>
    <td>
        <div class="form-floating">
                        <textarea class="form-control" placeholder="Escreva sua justificativa aqui"
                                  id="justification" name="{{ $nameJ }}"></textarea>
            <label for="justification">Justificativa</label>
        </div>
    </td>
</tr>
