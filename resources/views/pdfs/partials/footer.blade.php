<htmlpagefooter name="page-footer">
    <table class="htmlpagefooter">
        <tbody>
        <tr>
            <td align="left">
                <div class="text-center text-3xs text-muted">
                    <strong>{{ $entry->account->name }}</strong>
                    •
                    @if(!empty($entry->account->address()->first()))
                        @component('back::atomicdesign.atoms.address', ['address' => $entry->account->address()->first(), 'display' => 'inline', 'wrapperTag' => 'span'])@endcomponent
                    @endif
                    @if(!empty($entry->account->params))
                        <div class="text-3xs">
                            {{json_decode($entry->account->params,TRUE)['legal_form_id'].' au capital de '.json_decode($entry->account->params,TRUE)['capital'].' € • RCS '
                               .json_decode($entry->account->params,TRUE)['registry_rcs'].' • Code APE '.json_decode($entry->account->params,TRUE)['ape'].' • SIRET '.json_decode($entry->account->params,TRUE)['registry_siret']
                                .' • N° de TVA intra '.json_decode($entry->account->params,TRUE)['registry_intra']}}
                        </div>
                    @endif
                    <div>
                        {{$entry->account->website}}
                        @if(!empty($entry->account->phone()->first()))
                            {{' • Tél.' . $entry->account->phone()->first()->number}}
                        @endif
                        @if(!empty($entry->account->email()->first()))
                            {{' • Email ' . $entry->account->email()->first()->email}}
                        @endif
                    </div>

                </div>
            </td>
            <td class="text-right">
                Page {PAGENO}/{nb}
            </td>
        </tr>
        </tbody>
    </table>
</htmlpagefooter>
