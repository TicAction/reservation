@extends('layouts.app')

@section('content')



<div id="app">
	
<input type="text" id='input' v-model="message">
</div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>


@endsection

@section('sidebar')

@endsection

<script>
	let: data ={
  message: "Je suis le meilleur";
};

new Vue({

	el: '#root',
	data: data
})
	

</script>