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
              PO#{{{ $order[0]->po }}}
              @endif
          </div>
          <div class="field" id="rep">Rep: {{{ $order[0]->f_name }}}&nbsp;{{{ $order[0]->l_name }}}</div>
          <div class="field">Pulled:</div>
          <div class="field">Checked:</div>
          <div class="field" id="area">Area:</div>
          <div class="field" id="racks">Racks:</div>
        </div>

        
          @foreach($categories as $array_num => $object)
          <?php
            $items_to_total = array();
            foreach($items as $array_num2 => $object2){
              if($object2->category == $object[0]->table){
                array_push($items_to_total, $object2->qty);
              }
            }
            $total = array_sum($items_to_total);
          ?>
          <div class="item-section">
            <div class="items-head">
              <span class="item-label">{{{ $object[0]->name }}}</span>
              <span class="item-total">Total - {{{ $total }}}</span>
            </div>
            <div class="item-body">
              @foreach($items as $array_num2 => $object2)
                @if($object2->category == $object[0]->table)
                <span class="item">{{{ $object2->description }}} - {{{ $object2->qty }}}</span>
                @endif
              @endforeach
            </div>
          </div>
          @endforeach
        

@stop
