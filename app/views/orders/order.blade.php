@extends('layouts.order')
@section('content')

   <div class="wrapper">

        <div class="header">
          <div class="column-1">
              @if($order[0]->store_type == "hd")
              <div class="hd">HD</div>
              @elseif($order[0]->store_type == "doit")
              <div class="doit">Do-It</div>
              @endif 
          </div>
          <div class="column-2">
            <div class="store">{{{ strtoupper($order[0]->s_name) }}}</div>
            <div class="store">#{{{ $order[0]->s_num }}}</div>
          </div>
          <div class="column-3">
            <div id="date">{{{ $order[0]->ship_date }}}</div>
            <div id="sinstruct">{{{ $order[0]->s_instruct }}}</div>
          </div>
        </div>

        <div class="office-use">
          <div class="field">
            @if($order[0]->store_type == "hd")
              PBS
              @elseif($order[0]->store_type == "doit")
              #{{{ $order[0]->po }}}
              @endif
          </div>
          <div class="field" id="rep">Rep: {{{ $order[0]->f_name }}}&nbsp;{{{ $order[0]->l_name }}}</div>
          <div class="field">Pulled:</div>
          <div class="field">Checked:</div>
          <div class="field" id="area">Area:</div>
          <div class="field" id="racks">Racks:</div>
        </div>

        <div class="body">
          <div class="item-section">
            <div class="items-head">
              <span class="item-label">808 Paks</span>
              <span class="item-total">Total - 26</span>
            </div>
            <div class="item-body">
              <span class="item">Alyssum Snow Crystals White - 1</span>
              <span class="item">Alyssum Easter Basket Mix - 1</span>
              <span class="item">Calendula Bon Bon Orange - 1</span>
              <span class="item">Dianthus Parfait Strawberry - 1</span>
              <span class="item">Dianthus Parfait Raspberry - 1</span>
              <span class="item">Dianthus Telstar Mix - 1</span>
              <span class="item">Impatiens Super Elfin Formula Mix - 1</span>
              <span class="item">Impatiens Super Elfin Violet - 1</span>
              <span class="item">Impatiens Super Elfin Carmine - 1</span>
              <span class="item">Impatiens Super Elfin Mix - 1</span>
              <span class="item">Marigold Bonanaza Deep Orange - 1</span>
              <span class="item">Marigold 1st Lady Orange - 1</span>
              <span class="item">Pansy Colossus White Blotch - 1</span>
              <span class="item">Pansy Colossus Yellow Blotch - 1</span>
              <span class="item">Petunia Grand Arabian Night - 1</span>
              <span class="item">Petunia Grand Dark Lavender - 1</span>
              <span class="item">Phlox 21st Century Magenta Mix - 1</span>
              <span class="item">Snapdragon Crown Lilac BiColor - 1</span>
              <span class="item">Vinca Vitesse Lavender - 1</span>
              <span class="item">Vinca Vitesse Cranberry - 1</span>
              <span class="item">Vinca Vitesse Peppermint - 1</span>
              <span class="item">Vinca Vitesse Pink Improved - 1</span>
              <span class="item">Zinnia Dreamland Mix - 1</span>
              <span class="item">Zinnia Dreamland Pink - 1</span>
              <span class="item">Zinnia Dreamland Red - 1</span>
              <span class="item">Zinnia Dreamland Yellow - 1</span>
            </div>

          </div>
        </div>

      </div>



{{{ $id }}}
<br/>
{{{ var_dump($order) }}}
<br/>
{{{ var_dump($items) }}}
<br/>
{{{ var_dump($categories) }}}

@stop
