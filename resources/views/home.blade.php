@extends('layouts.app')

@section('title')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime veniam quas repudiandae modi. Vitae, error? Quasi placeat, quo ipsam necessitatibus, atque architecto ad voluptatum qui laborum optio laudantium voluptate.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias voluptas labore dolor esse. Eum, facilis. Odio possimus provident, obcaecati perspiciatis rem praesentium voluptatem perferendis iure? Voluptatem voluptatibus at repudiandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam similique harum necessitatibus vero hic veritatis nesciunt delectus dolor quo nam, voluptate soluta magni labore aut itaque quae atque velit eveniet?
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eligendi repellat a sed amet ullam, ad sit soluta pariatur, ratione molestias quo ut atque consequuntur quasi quod, nobis officiis totam!
    </p>
@endsection
